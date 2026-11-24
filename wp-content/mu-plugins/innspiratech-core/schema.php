<?php
/**
 * Datos estructurados JSON-LD (schema.org) en un único @graph conectado:
 * Organization, WebSite, WebPage, BreadcrumbList, BlogPosting, Service,
 * FAQPage e ItemList. Validar en https://validator.schema.org y
 * https://search.google.com/test/rich-results
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'template_redirect',
	static function (): void {
		if ( ! it_seo_plugin_active() ) {
			add_action( 'wp_head', 'it_schema_output', 30 );
		}
	}
);

function it_schema_output(): void {
	if ( is_404() ) {
		return;
	}

	$graph = it_schema_graph();
	if ( ! $graph ) {
		return;
	}

	printf(
		"<script type=\"application/ld+json\">%s</script>\n",
		wp_json_encode(
			array(
				'@context' => 'https://schema.org',
				'@graph'   => $graph,
			),
			JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG
		)
	);
}

function it_schema_graph(): array {
	$home     = home_url( '/' );
	$org_id   = $home . '#organization';
	$site_id  = $home . '#website';
	$language = get_bloginfo( 'language' );
	$graph    = array();

	/* ----- Organization ----- */
	$logo_id  = (int) get_theme_mod( 'custom_logo' );
	$logo_src = $logo_id ? wp_get_attachment_image_src( $logo_id, 'full' ) : false;
	$logo     = $logo_src
		? array( 'url' => $logo_src[0], 'width' => (int) $logo_src[1], 'height' => (int) $logo_src[2] )
		: array( 'url' => get_theme_file_uri( 'assets/img/logo.png' ), 'width' => 622, 'height' => 96 );

	$org = array(
		'@type'       => 'Organization',
		'@id'         => $org_id,
		'name'        => it_plain( get_bloginfo( 'name' ) ),
		'url'         => $home,
		'logo'        => array_merge( array( '@type' => 'ImageObject', '@id' => $home . '#logo' ), $logo ),
		'image'       => array( '@id' => $home . '#logo' ),
		'description' => it_opt( 'seo_home_desc' ),
		'email'       => it_opt( 'email' ),
		'knowsAbout'  => array(
			'Model Context Protocol (MCP)',
			'Agentes de inteligencia artificial',
			'Transformación digital',
			'Marketing digital',
			'Desarrollo de software a medida',
			'Comercio electrónico',
			'Aplicaciones móviles',
			'Automatización de procesos',
		),
	);

	$contact = array(
		'@type'             => 'ContactPoint',
		'contactType'       => 'sales',
		'email'             => it_opt( 'email' ),
		'availableLanguage' => array( 'Spanish' ),
		'url'               => it_contact_url(),
	);
	if ( it_opt( 'telefono' ) ) {
		$contact['telephone'] = it_opt( 'telefono' );
	}
	$org['contactPoint'] = $contact;

	$same_as = array_values( wp_list_pluck( it_socials(), 'url' ) );
	if ( $same_as ) {
		$org['sameAs'] = $same_as;
	}
	if ( it_opt( 'area_servida' ) ) {
		$org['areaServed'] = array_map( 'trim', explode( ',', (string) it_opt( 'area_servida' ) ) );
	}
	$graph[] = $org;

	/* ----- WebSite ----- */
	$graph[] = array(
		'@type'       => 'WebSite',
		'@id'         => $site_id,
		'url'         => $home,
		'name'        => it_plain( get_bloginfo( 'name' ) ),
		'description' => it_plain( get_bloginfo( 'description' ) ),
		'publisher'   => array( '@id' => $org_id ),
		'inLanguage'  => $language,
	);

	/* ----- WebPage ----- */
	$url = it_canonical_url() ?: it_current_url();

	$types = array( 'WebPage' );
	if ( is_home() || is_archive() ) {
		$types = array( 'CollectionPage' );
	} elseif ( is_search() ) {
		$types = array( 'SearchResultsPage' );
	} elseif ( is_page( 'contacto' ) ) {
		$types = array( 'ContactPage' );
	} elseif ( is_page( 'nosotros' ) ) {
		$types = array( 'AboutPage' );
	}

	$page = array(
		'@type'      => $types,
		'@id'        => $url . '#webpage',
		'url'        => $url,
		'name'       => it_plain( wp_get_document_title() ),
		'isPartOf'   => array( '@id' => $site_id ),
		'inLanguage' => $language,
	);
	$desc = it_seo_description();
	if ( $desc ) {
		$page['description'] = $desc;
	}

	// Fragmentos que un asistente de voz o un modelo puede leer en voz alta:
	// el titular y la entradilla, que es donde está la respuesta corta.
	$page['speakable'] = array(
		'@type'       => 'SpeakableSpecification',
		'cssSelector' => array( 'h1', '.it-speakable' ),
	);
	if ( is_front_page() ) {
		$page['about'] = array( '@id' => $org_id );
	}

	$faq_source = 0;
	if ( is_singular() ) {
		$post                 = get_queried_object();
		$page['datePublished'] = get_post_time( 'c', true, $post );
		$page['dateModified']  = get_post_modified_time( 'c', true, $post );
		$faq_source            = $post->ID;
		if ( has_post_thumbnail( $post ) ) {
			$page['primaryImageOfPage'] = array( '@id' => $url . '#primaryimage' );
		}
	}

	/* ----- FAQPage (preguntas del contenido) ----- */
	if ( $faq_source ) {
		$faqs = it_faq_items( $faq_source );
		if ( $faqs ) {
			$page['@type'][]    = 'FAQPage';
			$page['mainEntity'] = array_map(
				static fn( $faq ) => array(
					'@type'          => 'Question',
					'name'           => $faq['titulo'],
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => $faq['texto'],
					),
				),
				$faqs
			);
		}
	}

	/* ----- BreadcrumbList ----- */
	$crumbs = it_breadcrumb_items();
	if ( count( $crumbs ) > 1 ) {
		$list = array();
		foreach ( array_values( $crumbs ) as $i => $crumb ) {
			$item = array(
				'@type'    => 'ListItem',
				'position' => $i + 1,
				'name'     => $crumb['name'],
			);
			if ( $crumb['url'] ) {
				$item['item'] = $crumb['url'];
			}
			$list[] = $item;
		}
		$page['breadcrumb'] = array( '@id' => $url . '#breadcrumb' );
		$graph[]            = array(
			'@type'           => 'BreadcrumbList',
			'@id'             => $url . '#breadcrumb',
			'itemListElement' => $list,
		);
	}

	/* ----- Imagen principal ----- */
	if ( is_singular() && has_post_thumbnail( get_queried_object_id() ) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_queried_object_id() ), 'full' );
		if ( $src ) {
			$graph[] = array(
				'@type'  => 'ImageObject',
				'@id'    => $url . '#primaryimage',
				'url'    => $src[0],
				'width'  => (int) $src[1],
				'height' => (int) $src[2],
			);
		}
	}

	/* ----- Listado de servicios ----- */
	if ( is_post_type_archive( 'servicio' ) ) {
		$services = get_posts(
			array(
				'post_type'      => 'servicio',
				'posts_per_page' => 50,
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
			)
		);
		if ( $services ) {
			$page['mainEntity'] = array(
				'@type'           => 'ItemList',
				'itemListElement' => array_map(
					static fn( $service, $i ) => array(
						'@type'    => 'ListItem',
						'position' => $i + 1,
						'url'      => get_permalink( $service ),
						'name'     => it_plain( get_the_title( $service ) ),
					),
					$services,
					array_keys( $services )
				),
			);
		}
	}

	$graph[] = $page;

	/* ----- BlogPosting ----- */
	if ( is_singular( 'post' ) ) {
		$post      = get_queried_object();
		$author_id = (int) $post->post_author;
		$name      = get_the_author_meta( 'display_name', $author_id );
		$is_team   = false !== stripos( $name, it_plain( get_bloginfo( 'name' ) ) );

		$article = array(
			'@type'            => 'BlogPosting',
			'@id'              => $url . '#article',
			'headline'         => mb_substr( it_plain( get_the_title( $post ) ), 0, 110 ),
			'description'      => $desc,
			'datePublished'    => get_post_time( 'c', true, $post ),
			'dateModified'     => get_post_modified_time( 'c', true, $post ),
			'author'           => $is_team
				? array( '@type' => 'Organization', 'name' => $name, 'url' => $home )
				: array( '@type' => 'Person', 'name' => $name, 'url' => get_author_posts_url( $author_id ) ),
			'publisher'        => array( '@id' => $org_id ),
			'mainEntityOfPage' => array( '@id' => $url . '#webpage' ),
			'inLanguage'       => $language,
			'wordCount'        => count( preg_split( '/\s+/u', trim( wp_strip_all_tags( $post->post_content ) ), -1, PREG_SPLIT_NO_EMPTY ) ),
		);
		if ( has_post_thumbnail( $post ) ) {
			$article['image'] = array( '@id' => $url . '#primaryimage' );
		}
		$cats = wp_list_pluck( get_the_category( $post->ID ), 'name' );
		if ( $cats ) {
			$article['articleSection'] = $cats;
		}
		$tags = wp_list_pluck( (array) get_the_tags( $post->ID ), 'name' );
		if ( $tags ) {
			$article['keywords'] = implode( ', ', $tags );
		}

		// Conecta el artículo con el servicio que resuelve lo que explica: le dice
		// al buscador (y al modelo que cite el texto) de qué trata y quién lo ofrece.
		$servicio_id = (int) it_meta( $post->ID, 'servicio_relacionado' );
		if ( $servicio_id && 'publish' === get_post_status( $servicio_id ) ) {
			$article['about'] = array(
				'@type'       => 'Service',
				'@id'         => get_permalink( $servicio_id ) . '#service',
				'name'        => it_plain( get_the_title( $servicio_id ) ),
				'url'         => get_permalink( $servicio_id ),
				'provider'    => array( '@id' => $org_id ),
			);
		}
		$graph[] = $article;
	}

	/* ----- Service ----- */
	if ( is_singular( 'servicio' ) ) {
		$post    = get_queried_object();
		$service = array(
			'@type'            => 'Service',
			'@id'              => $url . '#service',
			'name'             => it_plain( get_the_title( $post ) ),
			'description'      => $desc,
			'url'              => $url,
			'serviceType'      => it_meta( $post->ID, 'tipo_servicio', it_plain( get_the_title( $post ) ) ),
			'provider'         => array( '@id' => $org_id ),
			'mainEntityOfPage' => array( '@id' => $url . '#webpage' ),
		);
		$lineas = wp_get_post_terms( $post->ID, 'linea_servicio', array( 'fields' => 'names' ) );
		if ( $lineas && ! is_wp_error( $lineas ) ) {
			$service['category'] = $lineas[0];
		}
		if ( it_opt( 'area_servida' ) ) {
			$service['areaServed'] = array_map( 'trim', explode( ',', (string) it_opt( 'area_servida' ) ) );
		}
		// A quién está dirigido: ayuda a que el servicio aparezca ante la consulta
		// «… para pymes» o «… para empresas grandes», que es como se busca.
		$service['audience'] = array(
			array( '@type' => 'Audience', 'audienceType' => 'Pymes y emprendedores' ),
			array( '@type' => 'Audience', 'audienceType' => 'Empresas medianas en crecimiento' ),
			array( '@type' => 'Audience', 'audienceType' => 'Grandes empresas' ),
		);

		// Los indicadores que el servicio mueve: lo que el cliente compra de verdad.
		$kpis = it_parse_lines( (string) it_meta( $post->ID, 'kpis' ) );
		if ( $kpis ) {
			$service['serviceOutput'] = array_map(
				static fn( $kpi ) => array( '@type' => 'Thing', 'name' => it_plain( $kpi ) ),
				$kpis
			);
		}

		$price = it_meta( $post->ID, 'precio_desde' );
		if ( is_numeric( $price ) ) {
			$service['offers'] = array(
				'@type'              => 'Offer',
				'url'                => $url,
				'priceSpecification' => array(
					'@type'         => 'PriceSpecification',
					'priceCurrency' => 'USD',
					'minPrice'      => (float) $price,
				),
			);
		}
		$graph[] = $service;
	}

	return apply_filters( 'it_schema_graph', $graph );
}

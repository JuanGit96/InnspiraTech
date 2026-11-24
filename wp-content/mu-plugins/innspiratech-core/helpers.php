<?php
/**
 * Utilidades compartidas entre el plugin y el tema.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

/**
 * Valores por defecto de los ajustes del sitio (se editan en Apariencia > Personalizar).
 */
function it_opt_defaults(): array {
	return array(
		// Portada.
		'hero_badge'          => 'Soluciones de software impulsadas por IA',
		'hero_kicker'         => 'Desarrollo de software e inteligencia artificial',
		'hero_line1'          => 'Velocidad de startup,',
		'hero_line2'          => 'calidad enterprise.',
		'hero_text'           => 'Creamos servidores MCP, agentes de IA, software a medida y estrategias de transformación digital y marketing para pymes y grandes empresas. Construimos lo que tu negocio necesita para escalar.',
		'hero_cta1'           => 'Hablar con un experto',
		'hero_cta2'           => 'Ver nuestras soluciones',

		// Contacto.
		'email'               => 'proyectos@innspiratech.com',
		'whatsapp'            => '',
		'telefono'            => '',
		'ubicacion'           => '',
		'area_servida'        => '',

		// Redes sociales (URLs completas).
		'linkedin'            => '',
		'instagram'           => '',
		'x'                   => '',
		'youtube'             => '',
		'github'              => '',
		'facebook'            => '',
		'tiktok'              => '',

		// Pie de página.
		'footer_texto'        => 'Consultora de desarrollo de software, inteligencia artificial y transformación digital para empresas pequeñas, medianas y grandes.',

		// SEO global.
		'seo_home_title'      => 'InnspiraTech | Software, Agentes de IA y Transformación Digital',
		'seo_home_desc'       => 'Consultora de software e IA: servidores MCP, agentes de IA, software a medida, e-commerce y marketing digital para pymes y grandes empresas. Cotiza hoy.',
		'seo_servicios_title' => 'Servicios de Software, IA y Marketing Digital | InnspiraTech',
		'seo_servicios_desc'  => 'Servidores MCP, agentes de IA, transformación digital, marketing digital, e-commerce, apps y software a medida. Soluciones para pymes y grandes empresas.',
		'og_default'          => '',
		'ga4_id'              => '',
		'gsc_verificacion'    => '',
	);
}

/**
 * Lee un ajuste del sitio con su valor por defecto.
 */
function it_opt( string $key, $fallback = null ) {
	$opts = get_option( 'it_opciones', array() );
	if ( is_array( $opts ) && isset( $opts[ $key ] ) && '' !== $opts[ $key ] ) {
		return $opts[ $key ];
	}
	if ( null !== $fallback ) {
		return $fallback;
	}
	$defaults = it_opt_defaults();
	return $defaults[ $key ] ?? '';
}

/**
 * Lee un campo personalizado del plugin (se guardan con prefijo _it_).
 */
function it_meta( int $post_id, string $key, $fallback = '' ) {
	$value = get_post_meta( $post_id, '_it_' . $key, true );
	return ( '' === $value || null === $value || false === $value ) ? $fallback : $value;
}

/**
 * Convierte texto "Título | Descripción" (uno por línea) en un arreglo.
 */
function it_parse_pairs( string $raw ): array {
	$items = array();
	foreach ( preg_split( '/\r\n|\r|\n/', $raw ) as $line ) {
		$line = trim( $line );
		if ( '' === $line ) {
			continue;
		}
		$parts   = array_map( 'trim', explode( '|', $line, 2 ) );
		$items[] = array(
			'titulo' => $parts[0],
			'texto'  => $parts[1] ?? '',
		);
	}
	return $items;
}

/**
 * Convierte texto de varias líneas en un arreglo sin líneas vacías.
 */
/**
 * Resultados medidos de un caso de éxito.
 *
 * Cada línea del campo tiene el formato «Indicador | Antes | Después».
 *
 * @param int $post_id Caso.
 * @return array<int,array{indicador:string,antes:string,despues:string}>
 */
function it_caso_resultados( int $post_id ): array {
	$out = array();
	foreach ( it_parse_lines( (string) it_meta( $post_id, 'resultados' ) ) as $linea ) {
		$partes = array_map( 'trim', explode( '|', $linea ) );
		if ( '' === ( $partes[0] ?? '' ) ) {
			continue;
		}
		$out[] = array(
			'indicador' => $partes[0],
			'antes'     => $partes[1] ?? '',
			'despues'   => $partes[2] ?? '',
		);
	}
	return $out;
}

function it_parse_lines( string $raw ): array {
	return array_values( array_filter( array_map( 'trim', preg_split( '/\r\n|\r|\n/', $raw ) ) ) );
}

/**
 * Preguntas frecuentes de una entrada/página/servicio.
 */
function it_faq_items( int $post_id ): array {
	$items = it_parse_pairs( (string) get_post_meta( $post_id, '_it_faq', true ) );
	return array_values( array_filter( $items, static fn( $item ) => '' !== $item['texto'] ) );
}

/**
 * Redes sociales configuradas.
 */
function it_socials(): array {
	$labels = array(
		'linkedin'  => 'LinkedIn',
		'instagram' => 'Instagram',
		'x'         => 'X',
		'youtube'   => 'YouTube',
		'github'    => 'GitHub',
		'facebook'  => 'Facebook',
		'tiktok'    => 'TikTok',
	);
	$out    = array();
	foreach ( $labels as $key => $label ) {
		$url = (string) it_opt( $key );
		if ( '' !== $url ) {
			$out[ $key ] = array(
				'url'   => esc_url_raw( $url ),
				'label' => $label,
			);
		}
	}
	return $out;
}

/**
 * Enlace de WhatsApp (vacío si no hay número configurado).
 */
function it_whatsapp_url( string $text = '' ): string {
	$number = preg_replace( '/\D+/', '', (string) it_opt( 'whatsapp' ) );
	if ( ! $number ) {
		return '';
	}
	return 'https://wa.me/' . $number . ( $text ? '?text=' . rawurlencode( $text ) : '' );
}

/**
 * "https://www.empresa.com/x" => "empresa.com".
 */
function it_domain_from_url( string $url ): string {
	$host = wp_parse_url( $url, PHP_URL_HOST );
	return $host ? (string) preg_replace( '/^www\./', '', $host ) : '';
}

/**
 * Texto plano sin entidades HTML (para JSON-LD y metaetiquetas).
 */
function it_plain( $text ): string {
	return trim( wp_strip_all_tags( html_entity_decode( (string) $text, ENT_QUOTES | ENT_HTML5, 'UTF-8' ) ) );
}

/**
 * URL de la página de contacto, opcionalmente con un servicio preseleccionado.
 */
function it_contact_url( string $servicio = '' ): string {
	$page = get_page_by_path( 'contacto' );
	$url  = $page ? get_permalink( $page ) : home_url( '/contacto/' );
	// El parámetro NO puede llamarse "servicio": es la query var del tipo de contenido
	// y WordPress mostraría la ficha del servicio en lugar de la página de contacto.
	return $servicio ? add_query_arg( 'it_servicio', rawurlencode( $servicio ), $url ) . '#form-contacto' : $url;
}

/**
 * Migas de pan de la vista actual: [ ['name' => ..., 'url' => ...], ... ].
 * Las usa el tema (visual) y el esquema BreadcrumbList.
 */
function it_breadcrumb_items(): array {
	if ( is_front_page() ) {
		return array();
	}

	$items   = array(
		array(
			'name' => 'Inicio',
			'url'  => home_url( '/' ),
		),
	);
	$blog_id = (int) get_option( 'page_for_posts' );
	$blog    = $blog_id ? array(
		'name' => it_plain( get_the_title( $blog_id ) ),
		'url'  => get_permalink( $blog_id ),
	) : null;

	if ( is_home() ) {
		if ( $blog ) {
			$items[] = $blog;
		}
	} elseif ( is_singular( 'post' ) ) {
		if ( $blog ) {
			$items[] = $blog;
		}
		$cats = get_the_category( get_queried_object_id() );
		if ( $cats ) {
			$items[] = array(
				'name' => $cats[0]->name,
				'url'  => get_category_link( $cats[0] ),
			);
		}
		$items[] = array(
			'name' => it_plain( get_the_title( get_queried_object_id() ) ),
			'url'  => get_permalink( get_queried_object_id() ),
		);
	} elseif ( is_singular( 'servicio' ) || is_post_type_archive( 'servicio' ) ) {
		$items[] = array(
			'name' => 'Servicios',
			'url'  => get_post_type_archive_link( 'servicio' ),
		);
		if ( is_singular() ) {
			$items[] = array(
				'name' => it_plain( get_the_title( get_queried_object_id() ) ),
				'url'  => get_permalink( get_queried_object_id() ),
			);
		}
	} elseif ( is_page() ) {
		$page_id = get_queried_object_id();
		foreach ( array_reverse( get_post_ancestors( $page_id ) ) as $ancestor ) {
			$items[] = array(
				'name' => it_plain( get_the_title( $ancestor ) ),
				'url'  => get_permalink( $ancestor ),
			);
		}
		$items[] = array(
			'name' => it_plain( get_the_title( $page_id ) ),
			'url'  => get_permalink( $page_id ),
		);
	} elseif ( is_category() || is_tag() || is_tax() ) {
		if ( $blog && ( is_category() || is_tag() ) ) {
			$items[] = $blog;
		}
		$link    = get_term_link( get_queried_object() );
		$items[] = array(
			'name' => single_term_title( '', false ),
			'url'  => is_wp_error( $link ) ? '' : $link,
		);
	} elseif ( is_author() ) {
		if ( $blog ) {
			$items[] = $blog;
		}
		$author  = (int) get_query_var( 'author' );
		$items[] = array(
			'name' => get_the_author_meta( 'display_name', $author ),
			'url'  => get_author_posts_url( $author ),
		);
	} elseif ( is_search() ) {
		$items[] = array(
			'name' => sprintf( 'Resultados para “%s”', get_search_query( false ) ),
			'url'  => '',
		);
	} elseif ( is_404() ) {
		$items[] = array(
			'name' => 'Página no encontrada',
			'url'  => '',
		);
	} elseif ( is_archive() ) {
		if ( $blog ) {
			$items[] = $blog;
		}
		$items[] = array(
			'name' => it_plain( get_the_archive_title() ),
			'url'  => '',
		);
	}

	return apply_filters( 'it_breadcrumb_items', $items );
}

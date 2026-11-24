<?php
/**
 * SEO técnico: títulos, meta descripción, canonical, robots, Open Graph,
 * Twitter Cards, sitemap XML nativo y limpieza del <head>.
 *
 * Si se activa Yoast, Rank Math, AIOSEO o SEOPress, este módulo cede el
 * control de metaetiquetas y schema para no duplicarlas.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

function it_seo_plugin_active(): bool {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' );
}

/* -------------------------------------------------------------------------
 * <title>
 * ---------------------------------------------------------------------- */

add_filter( 'document_title_separator', static fn() => '|' );

add_filter(
	'pre_get_document_title',
	static function ( $title ) {
		if ( it_seo_plugin_active() ) {
			return $title;
		}

		$custom = '';
		if ( is_front_page() ) {
			$front  = (int) get_option( 'page_on_front' );
			$custom = ( $front ? it_meta( $front, 'seo_title' ) : '' ) ?: it_opt( 'seo_home_title' );
		} elseif ( is_home() && get_option( 'page_for_posts' ) ) {
			$custom = it_meta( (int) get_option( 'page_for_posts' ), 'seo_title' );
		} elseif ( is_singular() ) {
			$custom = it_meta( get_queried_object_id(), 'seo_title' );
		} elseif ( is_post_type_archive( 'servicio' ) ) {
			$custom = it_opt( 'seo_servicios_title' );
		}

		if ( $custom && is_paged() ) {
			$custom .= ' | Página ' . max( 2, (int) get_query_var( 'paged' ) );
		}

		// pre_get_document_title no pasa por esc_html: lo hacemos aquí.
		return $custom ? esc_html( $custom ) : $title;
	}
);

/* -------------------------------------------------------------------------
 * Meta descripción y canonical
 * ---------------------------------------------------------------------- */

function it_seo_description(): string {
	$desc = '';

	if ( is_front_page() ) {
		$front = (int) get_option( 'page_on_front' );
		$desc  = ( $front ? it_meta( $front, 'seo_desc' ) : '' ) ?: it_opt( 'seo_home_desc' );
	} elseif ( is_home() ) {
		$blog = (int) get_option( 'page_for_posts' );
		$desc = $blog ? ( it_meta( $blog, 'seo_desc' ) ?: get_post_field( 'post_excerpt', $blog ) ) : get_bloginfo( 'description' );
	} elseif ( is_singular() ) {
		$post = get_queried_object();
		$desc = it_meta( $post->ID, 'seo_desc' );
		if ( ! $desc ) {
			$desc = $post->post_excerpt ?: wp_trim_words( strip_shortcodes( excerpt_remove_blocks( $post->post_content ) ), 30, '' );
		}
	} elseif ( is_post_type_archive( 'servicio' ) ) {
		$desc = it_opt( 'seo_servicios_desc' );
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$desc = term_description() ?: sprintf( 'Artículos y guías gratuitas sobre %s del equipo de %s.', single_term_title( '', false ), get_bloginfo( 'name' ) );
	} elseif ( is_author() ) {
		$desc = get_the_author_meta( 'description', (int) get_query_var( 'author' ) );
	}

	$desc = trim( (string) preg_replace( '/\s+/u', ' ', it_plain( $desc ) ) );
	if ( mb_strlen( $desc ) > 160 ) {
		$desc = rtrim( mb_substr( $desc, 0, 157 ), " ,.;:-" ) . '…';
	}
	return $desc;
}

function it_canonical_url(): string {
	if ( is_404() || is_search() ) {
		return '';
	}

	if ( is_front_page() ) {
		$url = home_url( '/' );
	} elseif ( is_singular() ) {
		$url = wp_get_canonical_url( get_queried_object_id() ) ?: get_permalink( get_queried_object_id() );
	} elseif ( is_home() ) {
		$blog = (int) get_option( 'page_for_posts' );
		$url  = $blog ? get_permalink( $blog ) : home_url( '/' );
	} elseif ( is_post_type_archive() ) {
		$url = get_post_type_archive_link( get_queried_object()->name ?? 'post' );
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$link = get_term_link( get_queried_object() );
		$url  = is_wp_error( $link ) ? '' : $link;
	} elseif ( is_author() ) {
		$url = get_author_posts_url( (int) get_query_var( 'author' ) );
	} else {
		return '';
	}

	$paged = (int) get_query_var( 'paged' );
	if ( $url && $paged > 1 && ! is_singular() ) {
		global $wp_rewrite;
		$url = user_trailingslashit( trailingslashit( $url ) . $wp_rewrite->pagination_base . '/' . $paged, 'paged' );
	}
	return (string) $url;
}

function it_og_image(): array {
	$attachment_id = 0;
	if ( is_singular() && has_post_thumbnail( get_queried_object_id() ) ) {
		$attachment_id = (int) get_post_thumbnail_id( get_queried_object_id() );
	} elseif ( is_home() && get_option( 'page_for_posts' ) && has_post_thumbnail( (int) get_option( 'page_for_posts' ) ) ) {
		$attachment_id = (int) get_post_thumbnail_id( (int) get_option( 'page_for_posts' ) );
	}

	if ( $attachment_id ) {
		$src = wp_get_attachment_image_src( $attachment_id, 'full' );
		if ( $src ) {
			return array(
				'url'    => $src[0],
				'width'  => (int) $src[1],
				'height' => (int) $src[2],
				'alt'    => (string) get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ),
			);
		}
	}

	return array(
		'url'    => (string) ( it_opt( 'og_default' ) ?: get_theme_file_uri( 'assets/img/og-default.jpg' ) ),
		'width'  => 1200,
		'height' => 630,
		'alt'    => get_bloginfo( 'name' ),
	);
}

add_action(
	'template_redirect',
	static function (): void {
		if ( ! it_seo_plugin_active() ) {
			remove_action( 'wp_head', 'rel_canonical' );
			add_action( 'wp_head', 'it_seo_head', 2 );
		}
	}
);

function it_seo_head(): void {
	$desc  = it_seo_description();
	$canon = it_canonical_url();
	$image = it_og_image();
	$lines = array();

	if ( $desc ) {
		$lines[] = sprintf( '<meta name="description" content="%s">', esc_attr( $desc ) );
	}
	if ( $canon ) {
		$lines[] = sprintf( '<link rel="canonical" href="%s">', esc_url( $canon ) );
	}
	if ( it_opt( 'gsc_verificacion' ) ) {
		$lines[] = sprintf( '<meta name="google-site-verification" content="%s">', esc_attr( it_opt( 'gsc_verificacion' ) ) );
	}

	// Open Graph (LinkedIn, WhatsApp, Facebook) y Twitter/X.
	$is_article = is_singular( 'post' );
	$og_title   = is_singular()
		? ( it_meta( get_queried_object_id(), 'seo_title' ) ?: it_plain( get_the_title( get_queried_object_id() ) ) )
		: it_plain( wp_get_document_title() );

	$og = array(
		'og:locale'       => get_locale(),
		'og:type'         => $is_article ? 'article' : 'website',
		'og:title'        => $og_title,
		'og:description'  => $desc,
		'og:url'          => $canon ?: home_url( '/' ),
		'og:site_name'    => it_plain( get_bloginfo( 'name' ) ),
		'og:image'        => $image['url'],
		'og:image:width'  => (string) $image['width'],
		'og:image:height' => (string) $image['height'],
		'og:image:alt'    => $image['alt'] ?: $og_title,
	);
	if ( $is_article ) {
		$post                          = get_queried_object();
		$og['article:published_time'] = get_post_time( 'c', true, $post );
		$og['article:modified_time']  = get_post_modified_time( 'c', true, $post );
		$cats                          = get_the_category( $post->ID );
		if ( $cats ) {
			$og['article:section'] = $cats[0]->name;
		}
	}
	foreach ( array_filter( $og ) as $property => $content ) {
		$lines[] = sprintf( '<meta property="%s" content="%s">', esc_attr( $property ), esc_attr( $content ) );
	}

	$lines[] = '<meta name="twitter:card" content="summary_large_image">';
	$x_url   = (string) it_opt( 'x' );
	if ( $x_url && preg_match( '~(?:x|twitter)\.com/@?([A-Za-z0-9_]{1,15})~', $x_url, $m ) ) {
		$lines[] = sprintf( '<meta name="twitter:site" content="@%s">', esc_attr( $m[1] ) );
	}

	echo implode( "\n", $lines ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- cada línea ya está escapada.
}

/* -------------------------------------------------------------------------
 * Robots
 * ---------------------------------------------------------------------- */

add_filter(
	'wp_robots',
	static function ( array $robots ): array {
		if ( it_seo_plugin_active() || ! get_option( 'blog_public' ) ) {
			return $robots;
		}

		// Etiquetas y fechas son páginas delgadas/duplicadas: se rastrean (follow) pero no se indexan.
		$noindex = is_404() || is_search() || is_date() || is_tag() || is_attachment()
			|| ( is_singular() && it_meta( get_queried_object_id(), 'noindex' ) );

		if ( $noindex ) {
			unset( $robots['index'], $robots['max-image-preview'] );
			$robots['noindex'] = true;
			$robots['follow']  = true;
		} else {
			$robots['index']             = true;
			$robots['follow']            = true;
			$robots['max-snippet']       = '-1';
			$robots['max-image-preview'] = 'large';
			$robots['max-video-preview'] = '-1';
		}
		return $robots;
	}
);

/* -------------------------------------------------------------------------
 * Sitemap XML nativo (/wp-sitemap.xml)
 * ---------------------------------------------------------------------- */

// Sin sitemap de usuarios: expone nombres de usuario y no aporta tráfico.
add_filter( 'wp_sitemaps_add_provider', static fn( $provider, $name ) => 'users' === $name ? false : $provider, 10, 2 );

// Etiquetas fuera del sitemap (páginas delgadas); categorías sí.
add_filter(
	'wp_sitemaps_taxonomies',
	static function ( array $taxonomies ): array {
		unset( $taxonomies['post_tag'], $taxonomies['post_format'] );
		return $taxonomies;
	}
);

// Excluir contenido marcado como noindex.
add_filter(
	'wp_sitemaps_posts_query_args',
	static function ( array $args ): array {
		$args['meta_query'] = array( // phpcs:ignore WordPress.DB.SlowDBQuery
			array(
				'key'     => '_it_noindex',
				'compare' => 'NOT EXISTS',
			),
		);
		return $args;
	}
);

// lastmod: Google lo usa para decidir qué volver a rastrear.
add_filter(
	'wp_sitemaps_posts_entry',
	static function ( array $entry, WP_Post $post ): array {
		$entry['lastmod'] = get_post_modified_time( 'c', true, $post );
		return $entry;
	},
	10,
	2
);

/* -------------------------------------------------------------------------
 * Limpieza del <head> y endurecimiento básico
 * ---------------------------------------------------------------------- */

add_action(
	'init',
	static function (): void {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
		remove_action( 'admin_enqueue_scripts', 'wp_enqueue_emoji_styles' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	}
);

add_filter( 'the_generator', '__return_empty_string' );
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'feed_links_show_comments_feed', '__return_false' );

// Los visitantes no pueden listar usuarios por la API REST.
add_filter(
	'rest_endpoints',
	static function ( array $endpoints ): array {
		if ( ! is_user_logged_in() ) {
			unset( $endpoints['/wp/v2/users'], $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
		}
		return $endpoints;
	}
);

// Bloquea la enumeración de usuarios con ?author=1.
add_action(
	'template_redirect',
	static function (): void {
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['author'] ) && ! is_user_logged_in() ) {
			wp_safe_redirect( home_url( '/' ), 301 );
			exit;
		}
	},
	1
);

/*
 * Paginación del blog con enlaces permanentes /blog/%postname%/.
 * Sin esta regla, /blog/page/2/ se interpreta como una entrada llamada "page"
 * y devuelve 404 (conflicto clásico de WordPress).
 */
add_action(
	'init',
	static function (): void {
		$blog_id = (int) get_option( 'page_for_posts' );
		if ( ! $blog_id ) {
			return;
		}
		$slug = get_page_uri( $blog_id );
		if ( $slug ) {
			add_rewrite_rule( '^' . preg_quote( $slug, '#' ) . '/page/([0-9]{1,})/?$', 'index.php?pagename=' . $slug . '&paged=$matches[1]', 'top' );
		}
	}
);

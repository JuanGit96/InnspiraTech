<?php
/**
 * Soportes del tema, menús, tamaños de imagen y ajustes de consultas.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'after_setup_theme',
	static function (): void {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 96,
				'width'       => 622,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		remove_theme_support( 'core-block-patterns' );

		// Resumen en páginas: se usa como subtítulo y como meta descripción de respaldo.
		add_post_type_support( 'page', 'excerpt' );

		register_nav_menus(
			array(
				'primary'          => 'Menú principal',
				'footer_servicios' => 'Pie de página: Servicios',
				'footer_empresa'   => 'Pie de página: Empresa',
				'legal'            => 'Pie de página: Legal',
			)
		);

		add_image_size( 'it-card', 800, 450, true );

		$GLOBALS['content_width'] = 768;
	}
);

add_filter( 'excerpt_length', static fn() => 26 );
add_filter( 'excerpt_more', static fn() => '…' );

// Carga solo el CSS de los bloques que realmente usa cada página.
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

// "Categoría: Inteligencia Artificial" => "Inteligencia Artificial".
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

add_action(
	'pre_get_posts',
	static function ( WP_Query $query ): void {
		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}
		// La búsqueda incluye servicios.
		if ( $query->is_search() ) {
			$query->set( 'post_type', array( 'post', 'servicio', 'page' ) );
		}
		// El listado de servicios muestra todos, en el orden definido en el admin.
		if ( $query->is_post_type_archive( 'servicio' ) ) {
			$query->set( 'posts_per_page', 100 );
			$query->set(
				'orderby',
				array(
					'menu_order' => 'ASC',
					'title'      => 'ASC',
				)
			);
		}
	}
);

/**
 * Agrega id a los H2/H3 de los artículos para el índice de contenidos
 * y para que Google pueda enlazar a secciones ("saltar a").
 */
add_filter(
	'the_content',
	static function ( string $content ): string {
		if ( ! is_singular( array( 'post', 'servicio' ) ) || ! in_the_loop() || ! is_main_query() ) {
			return $content;
		}

		$used = array();
		return (string) preg_replace_callback(
			'/<h([23])([^>]*)>(.*?)<\/h\1>/is',
			static function ( array $m ) use ( &$used ): string {
				if ( preg_match( '/\sid\s*=/i', $m[2] ) ) {
					return $m[0];
				}
				$base = sanitize_title( wp_strip_all_tags( $m[3] ) ) ?: 'seccion';
				$id   = $base;
				$n    = 2;
				while ( isset( $used[ $id ] ) ) {
					$id = $base . '-' . $n++;
				}
				$used[ $id ] = true;
				return sprintf( '<h%1$s id="%2$s"%3$s>%4$s</h%1$s>', $m[1], esc_attr( $id ), $m[2], $m[3] );
			},
			$content
		);
	},
	20
);

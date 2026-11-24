<?php
/**
 * CSS, JS, fuentes y etiquetas de rendimiento en el <head>.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		$css = get_theme_file_path( 'assets/css/app.css' );
		$js  = get_theme_file_path( 'assets/js/app.js' );

		// filemtime como versión: cada build invalida la caché del navegador.
		wp_enqueue_style( 'innspiratech', get_theme_file_uri( 'assets/css/app.css' ), array(), file_exists( $css ) ? (string) filemtime( $css ) : IT_THEME_VERSION );

		wp_enqueue_script(
			'innspiratech',
			get_theme_file_uri( 'assets/js/app.js' ),
			array(),
			file_exists( $js ) ? (string) filemtime( $js ) : IT_THEME_VERSION,
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
);

add_action(
	'wp_head',
	static function (): void {
		// Marca que hay JS (animaciones) con red de seguridad si app.js no carga.
		echo "<script>document.documentElement.classList.add('js');setTimeout(function(){document.querySelectorAll('[data-reveal]').forEach(function(e){e.classList.add('is-visible')})},2500);</script>\n";
		echo '<meta name="theme-color" content="#0e172a">' . "\n";
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( 'assets/fonts/inter-latin-wght-normal.woff2' ) )
		);
	},
	1
);

// Google Analytics 4 (solo si se configuró el ID y no para editores logueados).
add_action(
	'wp_head',
	static function (): void {
		$id = (string) it_opt( 'ga4_id' );
		if ( ! preg_match( '/^G-[A-Z0-9]+$/', $id ) || current_user_can( 'edit_posts' ) ) {
			return;
		}
		printf(
			'<script async src="https://www.googletagmanager.com/gtag/js?id=%1$s"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag("js",new Date());gtag("config","%1$s");</script>' . "\n",
			esc_attr( $id )
		);
	},
	20
);

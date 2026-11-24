<?php
/**
 * Tema InnspiraTech — punto de entrada.
 *
 * functions.php solo carga módulos; cada responsabilidad vive en /inc.
 * La funcionalidad de negocio (servicios, clientes, leads, SEO) está en el
 * mu-plugin wp-content/mu-plugins/innspiratech-core.php.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

define( 'IT_THEME_VERSION', '1.0.0' );

if ( ! function_exists( 'it_opt' ) ) {
	add_action(
		'admin_notices',
		static function (): void {
			echo '<div class="notice notice-error"><p>El tema <strong>InnspiraTech</strong> necesita el mu-plugin <code>wp-content/mu-plugins/innspiratech-core.php</code>.</p></div>';
		}
	);
	if ( ! is_admin() && ! wp_doing_ajax() && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) {
		wp_die( 'Falta el mu-plugin InnspiraTech Core (wp-content/mu-plugins/innspiratech-core.php).' );
	}
	return;
}

require_once get_theme_file_path( 'inc/setup.php' );
require_once get_theme_file_path( 'inc/assets.php' );
require_once get_theme_file_path( 'inc/icons.php' );
require_once get_theme_file_path( 'inc/template-tags.php' );
require_once get_theme_file_path( 'inc/class-it-nav-walker.php' );
require_once get_theme_file_path( 'inc/customizer.php' );

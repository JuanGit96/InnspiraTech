<?php
/**
 * Plugin Name: InnspiraTech Core
 * Description: Funcionalidad del sitio independiente del tema: servicios, planes, clientes, leads, campos personalizados, formularios, SEO técnico y datos estructurados (schema.org).
 * Version:     1.0.0
 * Author:      InnspiraTech
 *
 * Es un "must-use plugin": WordPress lo carga siempre y no se puede desactivar
 * por accidente desde el admin. Si mañana cambias de tema, los servicios,
 * clientes, leads y el SEO siguen funcionando.
 */

defined( 'ABSPATH' ) || exit;

define( 'IT_CORE_VERSION', '1.0.0' );
define( 'IT_CORE_DIR', __DIR__ . '/innspiratech-core' );

foreach ( array( 'helpers', 'post-types', 'meta-fields', 'leads', 'seo', 'schema', 'publicacion', 'buscadores-ia' ) as $it_core_file ) {
	require_once IT_CORE_DIR . '/' . $it_core_file . '.php';
}

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once IT_CORE_DIR . '/cli/seed-command.php';
}

<?php
/**
 * Tipos de contenido y taxonomías.
 *
 * - servicio (público, /servicios/{slug}/): una landing SEO por servicio.
 * - linea_servicio (privada): agrupa servicios (IA, Estrategia, Ingeniería).
 * - plan (privado): planes con precio de la sección Fast-Track.
 * - cliente (privado): logos de clientes para la sección "confían en nosotros".
 * - lead (privado): cada formulario enviado queda guardado aquí.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'it_register_content_types' );

function it_register_content_types(): void {
	register_post_type(
		'servicio',
		array(
			'labels'        => array(
				'name'                  => 'Servicios',
				'singular_name'         => 'Servicio',
				'menu_name'             => 'Servicios',
				'all_items'             => 'Todos los servicios',
				'add_new'               => 'Añadir servicio',
				'add_new_item'          => 'Añadir nuevo servicio',
				'edit_item'             => 'Editar servicio',
				'new_item'              => 'Nuevo servicio',
				'view_item'             => 'Ver servicio',
				'view_items'            => 'Ver servicios',
				'search_items'          => 'Buscar servicios',
				'not_found'             => 'No se encontraron servicios',
				'archives'              => 'Servicios',
				'featured_image'        => 'Imagen del servicio',
				'set_featured_image'    => 'Asignar imagen',
				'remove_featured_image' => 'Quitar imagen',
			),
			'public'        => true,
			'has_archive'   => 'servicios',
			'rewrite'       => array(
				'slug'       => 'servicios',
				'with_front' => false,
			),
			'menu_icon'     => 'dashicons-lightbulb',
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions' ),
			'show_in_rest'  => true,
		)
	);

	register_taxonomy(
		'linea_servicio',
		array( 'servicio' ),
		array(
			'labels'             => array(
				'name'          => 'Líneas de servicio',
				'singular_name' => 'Línea de servicio',
				'menu_name'     => 'Líneas',
				'all_items'     => 'Todas las líneas',
				'add_new_item'  => 'Añadir línea',
				'edit_item'     => 'Editar línea',
			),
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'show_admin_column'  => true,
			'hierarchical'       => true,
			'rewrite'            => false,
		)
	);

	register_post_type(
		'plan',
		array(
			'labels'       => array(
				'name'          => 'Planes',
				'singular_name' => 'Plan',
				'all_items'     => 'Planes y precios',
				'add_new_item'  => 'Añadir plan',
				'edit_item'     => 'Editar plan',
				'not_found'     => 'No hay planes',
			),
			'public'       => false,
			'show_ui'      => true,
			'show_in_menu' => 'edit.php?post_type=servicio',
			'supports'     => array( 'title', 'excerpt', 'page-attributes' ),
		)
	);

	register_post_type(
		'cliente',
		array(
			'labels'        => array(
				'name'                  => 'Clientes',
				'singular_name'         => 'Cliente',
				'all_items'             => 'Todos los clientes',
				'add_new'               => 'Añadir cliente',
				'add_new_item'          => 'Añadir nuevo cliente',
				'edit_item'             => 'Editar cliente',
				'not_found'             => 'No hay clientes',
				'featured_image'        => 'Logo del cliente',
				'set_featured_image'    => 'Asignar logo',
				'remove_featured_image' => 'Quitar logo',
				'use_featured_image'    => 'Usar como logo',
			),
			'public'        => false,
			'show_ui'       => true,
			'menu_icon'     => 'dashicons-groups',
			'menu_position' => 6,
			'supports'      => array( 'title', 'thumbnail', 'page-attributes' ),
		)
	);

	register_post_type(
		'lead',
		array(
			'labels'        => array(
				'name'          => 'Leads',
				'singular_name' => 'Lead',
				'all_items'     => 'Todos los leads',
				'edit_item'     => 'Ver lead',
				'search_items'  => 'Buscar leads',
				'not_found'     => 'Aún no hay leads',
			),
			'public'        => false,
			'show_ui'       => true,
			'menu_icon'     => 'dashicons-email-alt',
			'menu_position' => 3,
			'supports'      => array( 'title', 'editor' ),
			'capabilities'  => array( 'create_posts' => 'do_not_allow' ),
			'map_meta_cap'  => true,
		)
	);
}

/*
 * Columnas del admin.
 */
add_filter(
	'manage_cliente_posts_columns',
	static function ( array $columns ): array {
		return array(
			'cb'         => $columns['cb'],
			'it_logo'    => 'Logo',
			'title'      => 'Cliente',
			'it_dominio' => 'Sitio web',
			'date'       => $columns['date'],
		);
	}
);

add_action(
	'manage_cliente_posts_custom_column',
	static function ( string $column, int $post_id ): void {
		if ( 'it_logo' === $column ) {
			echo has_post_thumbnail( $post_id )
				? get_the_post_thumbnail( $post_id, array( 80, 40 ), array( 'style' => 'max-height:40px;width:auto' ) )
				: '—';
		}
		if ( 'it_dominio' === $column ) {
			$url = (string) it_meta( $post_id, 'url' );
			echo $url ? '<a href="' . esc_url( $url ) . '" target="_blank" rel="noopener">' . esc_html( it_domain_from_url( $url ) ) . '</a>' : '—';
		}
	},
	10,
	2
);

add_filter(
	'manage_lead_posts_columns',
	static function ( array $columns ): array {
		return array(
			'cb'          => $columns['cb'],
			'title'       => 'Nombre / empresa',
			'it_email'    => 'Correo',
			'it_servicio' => 'Servicio / interés',
			'it_origen'   => 'Origen',
			'date'        => 'Fecha',
		);
	}
);

add_action(
	'manage_lead_posts_custom_column',
	static function ( string $column, int $post_id ): void {
		switch ( $column ) {
			case 'it_email':
				$email = (string) it_meta( $post_id, 'email' );
				echo $email ? '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>' : '—';
				break;
			case 'it_servicio':
				echo esc_html( it_meta( $post_id, 'servicio', it_meta( $post_id, 'interes', '—' ) ) );
				break;
			case 'it_origen':
				echo esc_html( ucfirst( (string) it_meta( $post_id, 'origen', 'contacto' ) ) );
				break;
		}
	},
	10,
	2
);

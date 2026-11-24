<?php
/**
 * Comando WP-CLI para cargar el contenido inicial del sitio.
 *
 *   ddev wp innspiratech seed
 *   ddev wp innspiratech seed --solo=servicios
 *   ddev wp innspiratech seed --solo=posts --omitir-existentes
 *
 * Es idempotente: si el contenido ya existe (mismo slug) lo actualiza, salvo que
 * se use --omitir-existentes (entonces solo agrega lo nuevo).
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

/**
 * Convierte una lista simple en marcado de bloques de Gutenberg.
 * [ ['h2', 'Título'], ['p', 'Texto'], ['ul', ['a', 'b']], ['code', "..."], ['table', ['head' => [], 'rows' => [[]]]] ]
 */
function it_seed_blocks( array $blocks ): string {
	$out = array();
	foreach ( $blocks as $block ) {
		list( $type, $value ) = $block;
		switch ( $type ) {
			case 'h2':
				$out[] = "<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">{$value}</h2>\n<!-- /wp:heading -->";
				break;
			case 'h3':
				$out[] = "<!-- wp:heading {\"level\":3} -->\n<h3 class=\"wp-block-heading\">{$value}</h3>\n<!-- /wp:heading -->";
				break;
			case 'ul':
			case 'ol':
				$items = implode( '', array_map( static fn( $item ) => "<!-- wp:list-item -->\n<li>{$item}</li>\n<!-- /wp:list-item -->", $value ) );
				$attrs = 'ol' === $type ? ' {"ordered":true}' : '';
				$out[] = "<!-- wp:list{$attrs} -->\n<{$type} class=\"wp-block-list\">{$items}</{$type}>\n<!-- /wp:list -->";
				break;
			case 'code':
				$code  = htmlspecialchars( $value, ENT_NOQUOTES, 'UTF-8' );
				$out[] = "<!-- wp:code -->\n<pre class=\"wp-block-code\"><code>{$code}</code></pre>\n<!-- /wp:code -->";
				break;
			case 'table':
				$head  = implode( '', array_map( static fn( $cell ) => "<th>{$cell}</th>", $value['head'] ) );
				$rows  = implode( '', array_map( static fn( $row ) => '<tr>' . implode( '', array_map( static fn( $cell ) => "<td>{$cell}</td>", $row ) ) . '</tr>', $value['rows'] ) );
				$out[] = "<!-- wp:table -->\n<figure class=\"wp-block-table\"><table class=\"has-fixed-layout\"><thead><tr>{$head}</tr></thead><tbody>{$rows}</tbody></table></figure>\n<!-- /wp:table -->";
				break;
			default:
				$out[] = "<!-- wp:paragraph -->\n<p>{$value}</p>\n<!-- /wp:paragraph -->";
		}
	}
	return implode( "\n\n", $out );
}

class IT_Seed_Command {

	private string $dir;
	private int $author         = 0;
	private bool $skip_existing = false;

	public function __construct() {
		$this->dir = IT_CORE_DIR . '/seed';
	}

	/**
	 * Crea o actualiza el contenido inicial de InnspiraTech.
	 *
	 * ## OPTIONS
	 *
	 * [--solo=<paso>]
	 * : Ejecuta un solo paso: ajustes, terminos, servicios, planes, clientes, casos, paginas, posts, enlaces, menus o icono.
	 *
	 * [--omitir-existentes]
	 * : No modifica contenidos que ya existen (útil para agregar solo lo nuevo sin pisar ediciones).
	 *
	 * ## EXAMPLES
	 *
	 *     ddev wp innspiratech seed
	 *     ddev wp innspiratech seed --solo=posts --omitir-existentes
	 *
	 * @when after_wp_load
	 */
	public function seed( array $args, array $assoc_args ): void {
		$admins = get_users(
			array(
				'role'    => 'administrator',
				'number'  => 1,
				'orderby' => 'ID',
				'order'   => 'ASC',
			)
		);
		if ( ! $admins ) {
			WP_CLI::error( 'No existe un usuario administrador.' );
		}
		$this->author        = (int) $admins[0]->ID;
		$this->skip_existing = ! empty( $assoc_args['omitir-existentes'] );
		wp_set_current_user( $this->author );

		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/media.php';
		require_once ABSPATH . 'wp-admin/includes/image.php';

		$only = $assoc_args['solo'] ?? '';
		foreach ( array( 'ajustes', 'terminos', 'servicios', 'planes', 'clientes', 'casos', 'paginas', 'posts', 'enlaces', 'menus', 'icono' ) as $step ) {
			if ( $only && $only !== $step ) {
				continue;
			}
			WP_CLI::log( "→ {$step}" );
			$this->{'step_' . $step}();
		}

		WP_CLI::success( 'Contenido listo. Siguiente: ddev wp rewrite flush' );
	}

	/* ------------------------------------------------------------------ */

	private function step_ajustes(): void {
		$options = array(
			'blogname'                    => 'InnspiraTech',
			'blogdescription'             => 'Desarrollo de software, agentes de IA y transformación digital',
			'timezone_string'             => 'America/Bogota',
			'date_format'                 => 'j \d\e F \d\e Y',
			'time_format'                 => 'g:i a',
			'start_of_week'               => 1,
			'default_comment_status'      => 'closed',
			'default_ping_status'         => 'closed',
			'default_pingback_flag'       => 0,
			'posts_per_page'              => 9,
			'wp_attachment_pages_enabled' => 0,
			'blog_public'                 => 1,
		);
		foreach ( $options as $name => $value ) {
			update_option( $name, $value );
		}

		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/blog/%postname%/' );
		// Con base propia WordPress quita el prefijo /blog/; se incluye a mano para agrupar todo el blog.
		$wp_rewrite->set_category_base( 'blog/categoria' );
		$wp_rewrite->set_tag_base( 'blog/etiqueta' );

		// Los artículos los firma una persona, no la marca: Google valora la autoría
		// identificada en contenido profesional y los modelos de IA citan antes a
		// una fuente con autor que a un sitio anónimo.
		wp_update_user(
			array(
				'ID'            => $this->author,
				'display_name'  => 'Juan Daniel Cárdenas Dávila',
				'nickname'      => 'Juan Daniel Cárdenas Dávila',
				'first_name'    => 'Juan Daniel',
				'last_name'     => 'Cárdenas Dávila',
				'user_nicename' => 'juan-daniel-cardenas',
				'description'   => 'CEO y fundador de InnspiraTech. Desarrollador de software y consultor en inteligencia artificial aplicada a negocios. Construye plataformas a medida, agentes de IA y servidores MCP para empresas pequeñas, medianas y grandes, con una regla fija: cada proyecto arranca eligiendo el indicador que tiene que mejorar y termina mostrando qué pasó con él.',
			)
		);
		update_user_meta( $this->author, 'it_cargo', 'CEO y fundador de InnspiraTech' );

		// Contenido de ejemplo que crea la instalación de WordPress.
		$hello  = get_post( 1 );
		$sample = get_post( 2 );
		if ( $hello && 'post' === $hello->post_type && preg_match( '/mundo|world/i', $hello->post_title ) ) {
			wp_delete_post( 1, true );
		}
		if ( $sample && 'page' === $sample->post_type && preg_match( '/ejemplo|sample/i', $sample->post_title ) ) {
			wp_delete_post( 2, true );
		}
	}

	private function step_terminos(): void {
		$lineas = array(
			array( 'ingenieria-software', 'Ingeniería de Software', 'Web, e-commerce, apps y software a medida con código limpio, documentado y escalable.', 1 ),
			array( 'inteligencia-artificial', 'Inteligencia Artificial', 'Conectamos la IA con tus sistemas y procesos para que trabaje en tu operación real, no en una demo.', 2 ),
			array( 'estrategia-crecimiento', 'Estrategia y Crecimiento', 'Transformación digital, marketing, consultoría y talento para crecer con método y resultados medibles.', 3 ),
		);
		foreach ( $lineas as list( $slug, $name, $description, $order ) ) {
			$term_id = $this->upsert_term( 'linea_servicio', $slug, $name, $description );
			update_term_meta( $term_id, 'it_orden', $order );
		}

		// La categoría por defecto ("Sin categoría") pasa a ser una categoría útil.
		$default = (int) get_option( 'default_category' );
		if ( $default && ! get_category_by_slug( 'desarrollo-de-software' ) ) {
			wp_update_term( $default, 'category', array( 'slug' => 'desarrollo-de-software' ) );
		}

		$categorias = array(
			array( 'desarrollo-de-software', 'Desarrollo de Software', 'Buenas prácticas de desarrollo web, apps, software a medida y mantenimiento explicadas para líderes de negocio.' ),
			array( 'e-commerce', 'E-commerce', 'Plataformas, conversión y buenas prácticas para vender más en línea: WooCommerce, Shopify, Magento y VTEX.' ),
			array( 'inteligencia-artificial', 'Inteligencia Artificial', 'Guías prácticas sobre inteligencia artificial para empresas: agentes de IA, servidores MCP, RAG y adopción responsable.' ),
			array( 'transformacion-digital', 'Transformación Digital', 'Cómo digitalizar y automatizar procesos, datos y cultura en empresas pequeñas, medianas y grandes, paso a paso.' ),
			array( 'marketing-digital', 'Marketing Digital', 'Estrategias de SEO, contenidos, pauta y analítica para atraer clientes y vender más en digital.' ),
			array( 'talento-ti', 'Talento TI', 'Cómo contratar, evaluar e integrar talento tecnológico: staff augmentation, reclutamiento TI y equipos remotos.' ),
		);
		foreach ( $categorias as list( $slug, $name, $description ) ) {
			$this->upsert_term( 'category', $slug, $name, $description );
		}
	}

	private function step_servicios(): void {
		$files = glob( $this->dir . '/servicios-*.php' );
		sort( $files );
		foreach ( $files as $file ) {
			foreach ( require $file as $item ) {
				if ( ! $this->skip( $item['slug'], 'servicio' ) ) {
					$this->upsert_post( $item, 'servicio' );
				}
			}
		}
	}

	private function step_planes(): void {
		foreach ( $this->data()['planes'] as $item ) {
			if ( ! $this->skip( $item['slug'], 'plan' ) ) {
				$this->upsert_post( $item, 'plan' );
			}
		}
	}

	private function step_clientes(): void {
		foreach ( $this->data()['clientes'] as $item ) {
			if ( $this->skip( $item['slug'], 'cliente' ) ) {
				continue;
			}
			$id = $this->upsert_post( $item, 'cliente' );
			if ( ! empty( $item['logo'] ) ) {
				$attachment = $this->import_image( $item['logo'], 'Logo ' . $item['title'], 'Logo de ' . $item['title'] );
				if ( $attachment ) {
					set_post_thumbnail( $id, $attachment );
				}
			}
		}
	}

	private function step_casos(): void {
		$archivo = $this->dir . '/casos.php';
		if ( ! file_exists( $archivo ) ) {
			return;
		}
		foreach ( require $archivo as $item ) {
			if ( $this->skip( $item['slug'], 'caso' ) ) {
				continue;
			}

			if ( ! empty( $item['servicio'] ) ) {
				$servicio                             = get_page_by_path( $item['servicio'], OBJECT, 'servicio' );
				$item['meta']['servicio_relacionado'] = $servicio ? (string) $servicio->ID : '';
			}

			$id = $this->upsert_post( $item, 'caso' );

			if ( ! empty( $item['image']['file'] ) ) {
				$attachment = $this->import_image( $item['image']['file'], $item['title'], $item['image']['alt'] ?? $item['title'] );
				if ( $attachment ) {
					set_post_thumbnail( $id, $attachment );
				}
			}
		}
	}

	private function step_paginas(): void {
		$ids = array();
		foreach ( $this->data()['paginas'] as $item ) {
			$existing = get_page_by_path( $item['slug'], OBJECT, 'page' );
			if ( $this->skip_existing && $existing ) {
				$ids[ $item['slug'] ] = (int) $existing->ID;
				WP_CLI::log( '  omitido (ya existe) page: ' . $item['slug'] );
				continue;
			}
			if ( ! empty( $item['privacy'] ) ) {
				$current = (int) get_option( 'wp_page_for_privacy_policy' );
				if ( $current && get_post( $current ) ) {
					$item['id'] = $current;
				}
			}
			$ids[ $item['slug'] ] = $this->upsert_post( $item, 'page' );
		}

		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['inicio'] );
		update_option( 'page_for_posts', $ids['blog'] );
		update_option( 'wp_page_for_privacy_policy', $ids['politica-de-privacidad'] );
	}

	private function step_posts(): void {
		$files = glob( $this->dir . '/posts/*.php' );
		sort( $files );
		foreach ( $files as $file ) {
			$item = require $file;
			if ( $this->skip( $item['slug'], 'post' ) ) {
				continue;
			}

			if ( ! empty( $item['servicio'] ) ) {
				$service                                = get_page_by_path( $item['servicio'], OBJECT, 'servicio' );
				$item['meta']['servicio_relacionado'] = $service ? (string) $service->ID : '';
			}

			$id = $this->upsert_post( $item, 'post' );

			$cat_ids = array();
			foreach ( $item['categories'] as $slug ) {
				$cat = get_category_by_slug( $slug );
				if ( $cat ) {
					$cat_ids[] = (int) $cat->term_id;
				} else {
					WP_CLI::warning( "Categoría inexistente: {$slug} (ejecuta --solo=terminos)" );
				}
			}
			wp_set_post_categories( $id, $cat_ids );
			wp_set_post_tags( $id, $item['tags'] );

			$attachment = $this->import_image( $item['image']['file'], $item['title'], $item['image']['alt'] );
			if ( $attachment ) {
				set_post_thumbnail( $id, $attachment );
			}
		}
	}

	private function step_enlaces(): void {
		global $wpdb;

		$posts = get_posts(
			array(
				'post_type'      => array( 'post', 'page', 'servicio' ),
				'post_status'    => 'any',
				'posts_per_page' => -1,
			)
		);
		foreach ( $posts as $post ) {
			if ( false === strpos( $post->post_content, '{url:' ) ) {
				continue;
			}
			// Actualización directa: no cambia la fecha de modificación ni crea revisiones.
			$wpdb->update(
				$wpdb->posts,
				array( 'post_content' => $this->resolve_links( $post->post_content, true ) ),
				array( 'ID' => $post->ID )
			);
			clean_post_cache( $post->ID );
			WP_CLI::log( '  enlaces resueltos: ' . $post->post_name );
		}
	}

	private function step_menus(): void {
		$page     = static fn( string $slug ): int => (int) ( get_page_by_path( $slug )->ID ?? 0 );
		$services = get_posts(
			array(
				'post_type'      => 'servicio',
				'posts_per_page' => -1,
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
			)
		);
		$items    = array_map(
			static fn( $service ) => array(
				'type'   => 'post',
				'object' => 'servicio',
				'id'     => $service->ID,
				'title'  => get_the_title( $service ),
			),
			$services
		);

		$this->menu(
			'Menú principal',
			'primary',
			array(
				array(
					'type'     => 'archive',
					'object'   => 'servicio',
					'title'    => 'Servicios',
					'children' => $items,
				),
				array( 'type' => 'archive', 'object' => 'caso', 'title' => 'Casos' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'nosotros' ), 'title' => 'Nosotros' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'blog' ), 'title' => 'Blog' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'academia' ), 'title' => 'Academia' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'contacto' ), 'title' => 'Contacto' ),
			)
		);

		$this->menu( 'Pie: Servicios', 'footer_servicios', $items );

		$this->menu(
			'Pie: Empresa',
			'footer_empresa',
			array(
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'nosotros' ), 'title' => 'Nosotros' ),
				array( 'type' => 'archive', 'object' => 'caso', 'title' => 'Casos de éxito' ),
				array( 'type' => 'custom', 'url' => get_post_type_archive_link( 'servicio' ) . '#planes', 'title' => 'Planes y precios' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'blog' ), 'title' => 'Blog' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'academia' ), 'title' => 'Academia' ),
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'contacto' ), 'title' => 'Contacto' ),
			)
		);

		$this->menu(
			'Pie: Legal',
			'legal',
			array(
				array( 'type' => 'post', 'object' => 'page', 'id' => $page( 'politica-de-privacidad' ), 'title' => 'Política de privacidad' ),
			)
		);
	}

	private function step_icono(): void {
		$icon = $this->import_image( 'icono-sitio.png', 'Ícono InnspiraTech', 'InnspiraTech' );
		if ( $icon ) {
			update_option( 'site_icon', $icon );
		}
	}

	/* ------------------------------------------------------------------ */

	private function skip( string $slug, string $type ): bool {
		if ( $this->skip_existing && get_page_by_path( $slug, OBJECT, $type ) ) {
			WP_CLI::log( "  omitido (ya existe) {$type}: {$slug}" );
			return true;
		}
		return false;
	}

	private function data(): array {
		static $data = null;
		if ( null === $data ) {
			$data = require $this->dir . '/planes-clientes-paginas.php';
		}
		return $data;
	}

	private function upsert_term( string $taxonomy, string $slug, string $name, string $description ): int {
		$existing = get_term_by( 'slug', $slug, $taxonomy );
		$result   = $existing
			? wp_update_term( $existing->term_id, $taxonomy, array( 'name' => $name, 'description' => $description ) )
			: wp_insert_term( $name, $taxonomy, array( 'slug' => $slug, 'description' => $description ) );
		if ( is_wp_error( $result ) ) {
			WP_CLI::error( $result->get_error_message() );
		}
		return (int) $result['term_id'];
	}

	private function upsert_post( array $item, string $type ): int {
		$existing = ! empty( $item['id'] ) ? get_post( (int) $item['id'] ) : get_page_by_path( $item['slug'], OBJECT, $type );

		$postarr = array(
			'post_type'      => $type,
			'post_status'    => $item['status'] ?? 'publish',
			'post_name'      => $item['slug'],
			'post_title'     => $item['title'],
			'post_excerpt'   => $item['excerpt'] ?? '',
			'post_content'   => $this->resolve_links( $item['content'] ?? '' ),
			'menu_order'     => $item['order'] ?? 0,
			'post_author'    => $this->author,
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		);
		if ( ! empty( $item['date'] ) ) {
			$postarr['post_date']     = $item['date'];
			$postarr['post_date_gmt'] = get_gmt_from_date( $item['date'] );
		}
		if ( $existing ) {
			$postarr['ID'] = $existing->ID;
		}

		$id = $existing ? wp_update_post( wp_slash( $postarr ), true ) : wp_insert_post( wp_slash( $postarr ), true );
		if ( is_wp_error( $id ) ) {
			WP_CLI::error( $item['slug'] . ': ' . $id->get_error_message() );
		}

		foreach ( $item['meta'] ?? array() as $key => $value ) {
			if ( is_array( $value ) ) {
				$value = implode(
					"\n",
					array_map( static fn( $line ) => is_array( $line ) ? implode( ' | ', $line ) : $line, $value )
				);
			}
			if ( '' === (string) $value ) {
				delete_post_meta( $id, '_it_' . $key );
			} else {
				update_post_meta( $id, '_it_' . $key, wp_slash( (string) $value ) );
			}
		}

		foreach ( $item['terms'] ?? array() as $taxonomy => $slugs ) {
			wp_set_object_terms( $id, $slugs, $taxonomy );
		}

		WP_CLI::log( sprintf( '  %s %s: %s', $existing ? 'actualizado' : 'creado', $type, $item['slug'] ) );
		return (int) $id;
	}

	/**
	 * Reemplaza {url:servicio:slug}, {url:post:slug}, {url:pagina:slug} y {url:archive:tipo}.
	 * Si el destino aún no existe deja el token para el paso "enlaces".
	 */
	private function resolve_links( string $content, bool $final = false ): string {
		return (string) preg_replace_callback(
			'/\{url:(servicio|post|pagina|archive):([a-z0-9\-]+)\}/',
			static function ( array $m ) use ( $final ): string {
				switch ( $m[1] ) {
					case 'archive':
						$url = get_post_type_archive_link( $m[2] );
						break;
					case 'pagina':
						$target = get_page_by_path( $m[2] );
						$url    = $target ? get_permalink( $target ) : '';
						break;
					default:
						$target = get_page_by_path( $m[2], OBJECT, $m[1] );
						if ( $target && 'future' === $target->post_status ) {
							// Un artículo programado devuelve ?p=ID; se usa su URL definitiva.
							$target              = clone $target;
							$target->post_status = 'publish';
						}
						$url = $target ? get_permalink( $target ) : '';
				}
				if ( ! $url ) {
					if ( $final ) {
						WP_CLI::warning( 'Enlace sin destino: ' . $m[0] );
						return '#';
					}
					return $m[0];
				}
				return esc_url( $url );
			},
			$content
		);
	}

	private function import_image( string $file, string $title, string $alt ): int {
		$path = $this->dir . '/img/' . $file;
		if ( ! file_exists( $path ) ) {
			WP_CLI::warning( 'No existe la imagen ' . $file );
			return 0;
		}

		$existing = get_posts(
			array(
				'post_type'      => 'attachment',
				'post_status'    => 'inherit',
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'meta_key'       => '_it_seed_file', // phpcs:ignore WordPress.DB.SlowDBQuery
				'meta_value'     => $file, // phpcs:ignore WordPress.DB.SlowDBQuery
			)
		);
		if ( $existing ) {
			return (int) $existing[0];
		}

		$tmp = wp_tempnam( $file );
		copy( $path, $tmp );
		$id = media_handle_sideload(
			array(
				'name'     => $file,
				'tmp_name' => $tmp,
			),
			0,
			$title
		);
		if ( is_wp_error( $id ) ) {
			wp_delete_file( $tmp );
			WP_CLI::warning( $file . ': ' . $id->get_error_message() );
			return 0;
		}

		update_post_meta( $id, '_it_seed_file', $file );
		update_post_meta( $id, '_wp_attachment_image_alt', $alt );
		return (int) $id;
	}

	private function menu( string $name, string $location, array $items ): void {
		$menu    = wp_get_nav_menu_object( $name );
		$menu_id = $menu ? (int) $menu->term_id : (int) wp_create_nav_menu( $name );

		foreach ( (array) wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'any' ) ) as $old ) {
			wp_delete_post( $old->ID, true );
		}

		$position = 0;
		foreach ( $items as $item ) {
			$parent = wp_update_nav_menu_item( $menu_id, 0, $this->menu_item_args( $item, ++$position ) );
			foreach ( $item['children'] ?? array() as $child ) {
				wp_update_nav_menu_item( $menu_id, 0, $this->menu_item_args( $child, ++$position, (int) $parent ) );
			}
		}

		$locations              = (array) get_theme_mod( 'nav_menu_locations', array() );
		$locations[ $location ] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}

	private function menu_item_args( array $item, int $position, int $parent = 0 ): array {
		$args = array(
			'menu-item-title'     => $item['title'],
			'menu-item-status'    => 'publish',
			'menu-item-position'  => $position,
			'menu-item-parent-id' => $parent,
		);
		if ( 'post' === $item['type'] ) {
			$args['menu-item-type']      = 'post_type';
			$args['menu-item-object']    = $item['object'];
			$args['menu-item-object-id'] = $item['id'];
		} elseif ( 'archive' === $item['type'] ) {
			$args['menu-item-type']   = 'post_type_archive';
			$args['menu-item-object'] = $item['object'];
		} else {
			$args['menu-item-type'] = 'custom';
			$args['menu-item-url']  = $item['url'];
		}
		return $args;
	}
}

WP_CLI::add_command( 'innspiratech', 'IT_Seed_Command' );

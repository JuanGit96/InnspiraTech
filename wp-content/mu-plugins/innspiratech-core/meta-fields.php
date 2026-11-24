<?php
/**
 * Campos personalizados (meta boxes) sin plugins externos.
 *
 * Se definen en un solo arreglo (it_meta_boxes_config) y este archivo
 * se encarga de pintarlos y guardarlos de forma segura.
 * Todas las claves se guardan como _it_{campo} (el guion bajo las oculta
 * del panel "Campos personalizados" nativo).
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

function it_icon_choices(): array {
	return array(
		'plug'          => 'Conector / MCP',
		'sparkles'      => 'IA / Agentes',
		'trending-up'   => 'Crecimiento / Transformación',
		'megaphone'     => 'Marketing',
		'refresh'       => 'Automatización',
		'bolt'          => 'Rapidez / Web',
		'bag'           => 'E-commerce',
		'code'          => 'Código a medida',
		'cog'           => 'Mantenimiento',
		'users'         => 'Equipo / Talento',
		'chip'          => 'Tecnología',
		'device-mobile' => 'Apps móviles',
		'chart-bar'     => 'Datos / Analítica',
		'shield-check'  => 'Seguridad',
		'academic-cap'  => 'Formación',
		'globe'         => 'Web / Global',
	);
}

function it_meta_boxes_config(): array {
	$seo = array(
		'title'    => 'SEO — cómo se ve en Google',
		'context'  => 'normal',
		'priority' => 'low',
		'fields'   => array(
			'seo_title' => array(
				'label'   => 'Título SEO',
				'type'    => 'text',
				'counter' => 60,
				'help'    => 'Ideal 50–60 caracteres, con la palabra clave al inicio. Vacío = título de la entrada.',
			),
			'seo_desc'  => array(
				'label'   => 'Meta descripción',
				'type'    => 'textarea',
				'rows'    => 3,
				'counter' => 160,
				'help'    => 'Ideal 140–160 caracteres. Beneficio + palabra clave + llamado a la acción.',
			),
			'noindex'   => array(
				'label' => 'No mostrar en buscadores (noindex) y excluir del sitemap',
				'type'  => 'checkbox',
			),
		),
	);

	$faq = array(
		'title'   => 'Preguntas frecuentes (FAQ)',
		'context' => 'normal',
		'fields'  => array(
			'faq' => array(
				'label' => 'Una pregunta por línea: Pregunta | Respuesta',
				'type'  => 'textarea',
				'rows'  => 8,
				'help'  => 'Se muestran como acordeón y generan datos estructurados FAQPage (útiles también para buscadores con IA).',
			),
		),
	);

	return array(
		'servicio' => array(
			'it_servicio' => array(
				'title'   => 'Detalles del servicio',
				'context' => 'normal',
				'fields'  => array(
					'icono'         => array(
						'label'   => 'Ícono',
						'type'    => 'select',
						'options' => it_icon_choices(),
					),
					'badge'         => array(
						'label' => 'Etiqueta destacada',
						'type'  => 'text',
						'help'  => 'Opcional. Etiqueta pequeña visible en la tarjeta (ej. "Popular").',
					),
					'precio_desde'  => array(
						'label' => 'Precio desde (USD, solo el número)',
						'type'  => 'number',
						'help'  => 'Opcional. Vacío = "Cotización a la medida".',
					),
					'tipo_servicio' => array(
						'label' => 'Tipo de servicio (schema.org)',
						'type'  => 'text',
						'help'  => 'Frase genérica que describe el servicio, ej. "Desarrollo de servidores MCP".',
					),
					'kpis'          => array(
						'label' => 'Indicadores que mueve — uno por línea',
						'type'  => 'textarea',
						'rows'  => 4,
						'help'  => 'El resultado de negocio que compra el cliente, no la tecnología. Ej. "Tiempo de primera respuesta a un lead". Se muestra en la ficha y se publica como datos estructurados.',
					),
					'beneficios'    => array(
						'label' => 'Beneficios — uno por línea: Título | Descripción',
						'type'  => 'textarea',
						'rows'  => 6,
					),
					'entregables'   => array(
						'label' => 'Qué incluye — un ítem por línea',
						'type'  => 'textarea',
						'rows'  => 6,
					),
					'cta'           => array(
						'label'       => 'Texto del botón principal',
						'type'        => 'text',
						'placeholder' => 'Cotizar este servicio',
					),
				),
			),
			'it_faq'      => $faq,
			'it_seo'      => $seo,
		),
		'post'     => array(
			'it_post' => array(
				'title'   => 'Servicio relacionado (CTA)',
				'context' => 'side',
				'fields'  => array(
					'servicio_relacionado' => array(
						'label'     => 'Mostrar al final del artículo',
						'type'      => 'post_select',
						'post_type' => 'servicio',
					),
				),
			),
			'it_faq'  => $faq,
			'it_seo'  => $seo,
		),
		'page'     => array(
			'it_faq' => $faq,
			'it_seo' => $seo,
		),
		'plan'     => array(
			'it_plan' => array(
				'title'   => 'Datos del plan',
				'context' => 'normal',
				'fields'  => array(
					'precio'          => array(
						'label' => 'Precio visible',
						'type'  => 'text',
						'help'  => 'Ej. "Desde $140 USD". El resumen (extracto) es la descripción corta.',
					),
					'precio_num'      => array(
						'label' => 'Precio numérico en USD (datos estructurados)',
						'type'  => 'number',
					),
					'caracteristicas' => array(
						'label' => 'Características — una por línea',
						'type'  => 'textarea',
						'rows'  => 6,
					),
					'etiqueta'        => array(
						'label' => 'Etiqueta (ej. Más popular)',
						'type'  => 'text',
					),
					'destacado'       => array(
						'label' => 'Resaltar este plan',
						'type'  => 'checkbox',
					),
					'cta'             => array(
						'label'       => 'Texto del botón',
						'type'        => 'text',
						'placeholder' => 'Seleccionar plan',
					),
				),
			),
		),
		'cliente'  => array(
			'it_cliente' => array(
				'title'   => 'Datos del cliente',
				'context' => 'normal',
				'fields'  => array(
					'url' => array(
						'label' => 'Sitio web (https://…)',
						'type'  => 'url',
						'help'  => 'El logo se sube en "Logo del cliente" (columna derecha). Al pasar el mouse se muestra el dominio, ej. empresa.com. Ideal: PNG o SVG transparente, mínimo 320 px de ancho.',
					),
				),
			),
		),
		'lead'     => array(
			'it_lead' => array(
				'title'   => 'Datos del contacto',
				'context' => 'normal',
				'fields'  => array(
					'email'       => array( 'label' => 'Correo', 'type' => 'text' ),
					'telefono'    => array( 'label' => 'Teléfono / WhatsApp', 'type' => 'text' ),
					'empresa'     => array( 'label' => 'Empresa', 'type' => 'text' ),
					'tamano'      => array( 'label' => 'Tamaño de empresa', 'type' => 'text' ),
					'servicio'    => array( 'label' => 'Servicio', 'type' => 'text' ),
					'presupuesto' => array( 'label' => 'Presupuesto', 'type' => 'text' ),
					'interes'     => array( 'label' => 'Interés (Academia)', 'type' => 'text' ),
					'origen'      => array( 'label' => 'Origen', 'type' => 'text' ),
				),
			),
		),
	);
}

add_action(
	'add_meta_boxes',
	static function ( string $post_type ): void {
		$config = it_meta_boxes_config();
		if ( empty( $config[ $post_type ] ) ) {
			return;
		}
		foreach ( $config[ $post_type ] as $box_id => $box ) {
			add_meta_box(
				$box_id,
				$box['title'],
				'it_render_meta_box',
				$post_type,
				$box['context'] ?? 'normal',
				$box['priority'] ?? 'default',
				array( 'fields' => $box['fields'] )
			);
		}
	}
);

function it_render_meta_box( WP_Post $post, array $box ): void {
	wp_nonce_field( 'it_meta_save', 'it_meta_nonce' );

	echo '<div class="it-fields" style="display:grid;gap:14px;padding-top:6px">';
	foreach ( $box['args']['fields'] as $key => $field ) {
		$name  = '_it_' . $key;
		$value = get_post_meta( $post->ID, $name, true );
		$id    = 'it-field-' . $key;

		echo '<div>';
		if ( 'checkbox' === $field['type'] ) {
			printf(
				'<label for="%1$s"><input type="checkbox" id="%1$s" name="%2$s" value="1" %3$s> %4$s</label>',
				esc_attr( $id ),
				esc_attr( $name ),
				checked( $value, '1', false ),
				esc_html( $field['label'] )
			);
		} else {
			printf( '<label for="%s" style="display:block;font-weight:600;margin-bottom:4px">%s</label>', esc_attr( $id ), esc_html( $field['label'] ) );

			$counter = isset( $field['counter'] ) ? sprintf( ' data-it-counter="%d"', (int) $field['counter'] ) : '';

			switch ( $field['type'] ) {
				case 'textarea':
					printf(
						'<textarea id="%s" name="%s" rows="%d" class="widefat"%s>%s</textarea>',
						esc_attr( $id ),
						esc_attr( $name ),
						(int) ( $field['rows'] ?? 4 ),
						$counter, // phpcs:ignore WordPress.Security.EscapeOutput -- construido con enteros.
						esc_textarea( (string) $value )
					);
					break;

				case 'select':
					printf( '<select id="%s" name="%s" class="widefat">', esc_attr( $id ), esc_attr( $name ) );
					echo '<option value="">— Elegir —</option>';
					foreach ( $field['options'] as $opt_value => $opt_label ) {
						printf( '<option value="%s" %s>%s</option>', esc_attr( $opt_value ), selected( $value, $opt_value, false ), esc_html( $opt_label ) );
					}
					echo '</select>';
					break;

				case 'post_select':
					$posts = get_posts(
						array(
							'post_type'      => $field['post_type'],
							'posts_per_page' => 100,
							'orderby'        => 'menu_order title',
							'order'          => 'ASC',
						)
					);
					printf( '<select id="%s" name="%s" class="widefat">', esc_attr( $id ), esc_attr( $name ) );
					echo '<option value="">— Ninguno —</option>';
					foreach ( $posts as $option_post ) {
						printf( '<option value="%d" %s>%s</option>', (int) $option_post->ID, selected( (int) $value, $option_post->ID, false ), esc_html( get_the_title( $option_post ) ) );
					}
					echo '</select>';
					break;

				default:
					printf(
						'<input type="%s" id="%s" name="%s" value="%s" placeholder="%s" class="widefat"%s%s>',
						esc_attr( in_array( $field['type'], array( 'url', 'number' ), true ) ? $field['type'] : 'text' ),
						esc_attr( $id ),
						esc_attr( $name ),
						esc_attr( (string) $value ),
						esc_attr( $field['placeholder'] ?? '' ),
						'number' === $field['type'] ? ' step="any" min="0"' : '',
						$counter // phpcs:ignore WordPress.Security.EscapeOutput -- construido con enteros.
					);
			}
		}

		if ( ! empty( $field['help'] ) ) {
			printf( '<p class="description" style="margin-top:4px">%s</p>', esc_html( $field['help'] ) );
		}
		echo '</div>';
	}
	echo '</div>';
}

add_action(
	'save_post',
	static function ( int $post_id, WP_Post $post ): void {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		if ( ! isset( $_POST['it_meta_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['it_meta_nonce'] ), 'it_meta_save' ) ) {
			return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		$config = it_meta_boxes_config();
		if ( empty( $config[ $post->post_type ] ) ) {
			return;
		}

		foreach ( $config[ $post->post_type ] as $box ) {
			foreach ( $box['fields'] as $key => $field ) {
				$name = '_it_' . $key;
				$raw  = isset( $_POST[ $name ] ) ? wp_unslash( $_POST[ $name ] ) : ''; // phpcs:ignore WordPress.Security.ValidatedSanitizedInput -- se sanea abajo según el tipo.

				switch ( $field['type'] ) {
					case 'textarea':
						$value = sanitize_textarea_field( $raw );
						break;
					case 'url':
						$value = esc_url_raw( trim( $raw ) );
						break;
					case 'number':
						$value = is_numeric( $raw ) ? (string) ( 0 + $raw ) : '';
						break;
					case 'checkbox':
						$value = $raw ? '1' : '';
						break;
					case 'select':
						$value = array_key_exists( $raw, $field['options'] ) ? $raw : '';
						break;
					case 'post_select':
						$value = absint( $raw ) ? (string) absint( $raw ) : '';
						break;
					default:
						$value = sanitize_text_field( $raw );
				}

				if ( '' === $value ) {
					delete_post_meta( $post_id, $name );
				} else {
					update_post_meta( $post_id, $name, $value );
				}
			}
		}
	},
	10,
	2
);

/*
 * Contador de caracteres para los campos SEO (ayuda a no pasarse del límite de Google).
 */
add_action(
	'admin_footer-post.php',
	'it_meta_counter_script'
);
add_action(
	'admin_footer-post-new.php',
	'it_meta_counter_script'
);

function it_meta_counter_script(): void {
	?>
	<script>
	document.querySelectorAll('[data-it-counter]').forEach(function (el) {
		var max = parseInt(el.dataset.itCounter, 10);
		var out = document.createElement('p');
		out.className = 'description';
		out.style.marginTop = '2px';
		el.after(out);
		function update() {
			var n = el.value.length;
			out.textContent = n + ' / ' + max + ' caracteres';
			out.style.color = n > max ? '#b32d2e' : (n >= max * 0.8 ? '#007017' : '');
		}
		el.addEventListener('input', update);
		update();
	});
	</script>
	<?php
}

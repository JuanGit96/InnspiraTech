<?php
/**
 * Apariencia > Personalizar > InnspiraTech.
 * Los valores se guardan en la opción it_opciones (no en el tema), así el
 * plugin de SEO/schema también los puede leer.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'customize_register',
	static function ( WP_Customize_Manager $wp_customize ): void {
		$defaults = it_opt_defaults();

		$wp_customize->add_panel(
			'it_panel',
			array(
				'title'    => 'InnspiraTech',
				'priority' => 30,
			)
		);

		$sections = array(
			'it_home'    => array(
				'title'  => 'Portada (hero)',
				'fields' => array(
					'hero_badge'  => array( 'Etiqueta superior', 'text' ),
					'hero_kicker' => array( 'Texto previo al título (va dentro del H1, ideal con palabra clave)', 'text' ),
					'hero_line1'  => array( 'Título — línea 1', 'text' ),
					'hero_line2'  => array( 'Título — línea 2 (en azul)', 'text' ),
					'hero_text'   => array( 'Párrafo', 'textarea' ),
					'hero_cta1'   => array( 'Botón principal', 'text' ),
					'hero_cta2'   => array( 'Botón secundario', 'text' ),
				),
			),
			'it_contact' => array(
				'title'  => 'Contacto',
				'fields' => array(
					'email'        => array( 'Correo (recibe los formularios)', 'email' ),
					'whatsapp'     => array( 'WhatsApp: número con indicativo, ej. 573001234567 (activa el botón flotante)', 'text' ),
					'telefono'     => array( 'Teléfono visible', 'text' ),
					'ubicacion'    => array( 'Ciudad / país', 'text' ),
					'area_servida' => array( 'Países que atienden, separados por coma (datos estructurados)', 'text' ),
					'footer_texto' => array( 'Texto del pie de página', 'textarea' ),
				),
			),
			'it_social'  => array(
				'title'  => 'Redes sociales',
				'fields' => array(
					'linkedin'  => array( 'LinkedIn (URL)', 'url' ),
					'instagram' => array( 'Instagram (URL)', 'url' ),
					'x'         => array( 'X / Twitter (URL)', 'url' ),
					'youtube'   => array( 'YouTube (URL)', 'url' ),
					'tiktok'    => array( 'TikTok (URL)', 'url' ),
					'facebook'  => array( 'Facebook (URL)', 'url' ),
					'github'    => array( 'GitHub (URL)', 'url' ),
				),
			),
			'it_seo'     => array(
				'title'  => 'SEO y analítica',
				'fields' => array(
					'seo_home_title'      => array( 'Título SEO de la portada (≤ 60 caracteres)', 'text' ),
					'seo_home_desc'       => array( 'Meta descripción de la portada (≤ 160 caracteres)', 'textarea' ),
					'seo_servicios_title' => array( 'Título SEO de /servicios/', 'text' ),
					'seo_servicios_desc'  => array( 'Meta descripción de /servicios/', 'textarea' ),
					'og_default'          => array( 'Imagen por defecto al compartir (1200×630)', 'image' ),
					'ga4_id'              => array( 'Google Analytics 4 — ID de medición (G-XXXXXXX)', 'text' ),
					'gsc_verificacion'    => array( 'Google Search Console — código de verificación (solo el content)', 'text' ),
				),
			),
		);

		$sanitizers = array(
			'text'     => 'sanitize_text_field',
			'textarea' => 'sanitize_textarea_field',
			'email'    => 'sanitize_email',
			'url'      => 'esc_url_raw',
			'image'    => 'esc_url_raw',
		);

		$priority = 10;
		foreach ( $sections as $section_id => $section ) {
			$wp_customize->add_section(
				$section_id,
				array(
					'title'    => $section['title'],
					'panel'    => 'it_panel',
					'priority' => $priority += 10,
				)
			);

			foreach ( $section['fields'] as $key => list( $label, $type ) ) {
				$setting = 'it_opciones[' . $key . ']';
				$wp_customize->add_setting(
					$setting,
					array(
						'type'              => 'option',
						'capability'        => 'edit_theme_options',
						'default'           => $defaults[ $key ] ?? '',
						'sanitize_callback' => $sanitizers[ $type ],
					)
				);

				if ( 'image' === $type ) {
					$wp_customize->add_control(
						new WP_Customize_Image_Control(
							$wp_customize,
							$setting,
							array(
								'label'   => $label,
								'section' => $section_id,
							)
						)
					);
				} else {
					$wp_customize->add_control(
						$setting,
						array(
							'label'   => $label,
							'section' => $section_id,
							'type'    => $type,
						)
					);
				}
			}
		}
	}
);

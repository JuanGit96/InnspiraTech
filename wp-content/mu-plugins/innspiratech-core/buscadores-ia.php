<?php
/**
 * Visibilidad en buscadores con IA (AEO/GEO).
 *
 * Cada vez más gente pregunta «cuánto cuesta desarrollar una app» a ChatGPT,
 * Perplexity, Claude o a los resúmenes de IA de Google en lugar de abrir diez
 * pestañas. El objetivo deja de ser solo salir primero: es ser la fuente que
 * el modelo cita.
 *
 * Este módulo aporta las tres piezas que dependen del servidor:
 *
 * 1. robots.txt explícito que permite a los rastreadores de IA y declara el sitemap.
 * 2. /llms.txt, un índice legible por máquinas de qué es el sitio y qué resuelve.
 * 3. /llms-full.txt, el mismo índice con todos los artículos y sus descripciones.
 *
 * El resto de las palancas (respuestas en la primera frase, cifras concretas,
 * preguntas frecuentes marcadas, autoría) vive en el contenido y en schema.php.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

/* -------------------------------------------------------------------------
 * robots.txt
 * ---------------------------------------------------------------------- */

add_filter(
	'robots_txt',
	static function ( string $output, $public ): string {
		if ( ! $public ) {
			return $output;
		}

		$lines = array(
			'# InnspiraTech — innspiratech.com',
			'',
			'User-agent: *',
			'Allow: /',
			'Disallow: /wp-admin/',
			'Allow: /wp-admin/admin-ajax.php',
			'Disallow: /wp-login.php',
			'Disallow: /?s=',
			'Disallow: /*?it_servicio=',
			'',
			'# Rastreadores de IA: permitidos a propósito. Son el canal por el que',
			'# ChatGPT, Claude, Perplexity y los resúmenes de Google citan el sitio.',
			'# Bloquearlos nos sacaría de ese canal entero.',
		);

		foreach ( it_ia_user_agents() as $agent ) {
			$lines[] = 'User-agent: ' . $agent;
			$lines[] = 'Allow: /';
			$lines[] = '';
		}

		$lines[] = 'Sitemap: ' . esc_url_raw( home_url( '/wp-sitemap.xml' ) );
		$lines[] = '# Índice para modelos de lenguaje: ' . esc_url_raw( home_url( '/llms.txt' ) );

		return implode( "\n", $lines ) . "\n";
	},
	10,
	2
);

/**
 * Rastreadores de IA que se permiten de forma explícita.
 *
 * @return string[]
 */
function it_ia_user_agents(): array {
	return array(
		'GPTBot',            // OpenAI, entrenamiento.
		'OAI-SearchBot',     // OpenAI, búsqueda en ChatGPT.
		'ChatGPT-User',      // OpenAI, navegación a petición del usuario.
		'ClaudeBot',         // Anthropic.
		'Claude-User',
		'Claude-SearchBot',
		'PerplexityBot',     // Perplexity.
		'Perplexity-User',
		'Google-Extended',   // Gemini y resúmenes de IA de Google.
		'Applebot-Extended', // Apple Intelligence.
		'Bingbot',           // Copilot se apoya en el índice de Bing.
		'meta-externalagent',
		'cohere-ai',
	);
}

/* -------------------------------------------------------------------------
 * /llms.txt y /llms-full.txt
 * ---------------------------------------------------------------------- */

/**
 * Sirve /llms.txt y /llms-full.txt.
 *
 * Se intercepta en parse_request, antes de que WordPress decida que la URL no
 * existe y la redirija con barra final.
 */
add_action(
	'parse_request',
	static function (): void {
		$path = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput
		if ( 'llms.txt' !== $path && 'llms-full.txt' !== $path ) {
			return;
		}

		nocache_headers();
		header( 'Content-Type: text/plain; charset=utf-8' );
		header( 'X-Robots-Tag: noindex' );
		status_header( 200 );
		echo it_llms_txt( 'llms-full.txt' === $path ); // phpcs:ignore WordPress.Security.EscapeOutput -- texto plano generado aquí.
		exit;
	}
);

/**
 * Genera el contenido de /llms.txt.
 *
 * Sigue la propuesta llmstxt.org: Markdown plano, un H1 con el nombre, un
 * blockquote con el resumen y secciones de enlaces con una línea por recurso.
 *
 * @param bool $completo Incluir todos los artículos en lugar de los recientes.
 */
function it_llms_txt( bool $completo = false ): string {
	$nombre = it_plain( get_bloginfo( 'name' ) );
	$out    = array();

	$out[] = '# ' . $nombre;
	$out[] = '';
	$out[] = '> ' . it_plain( it_opt( 'seo_home_desc' ) );
	$out[] = '';
	$out[] = 'InnspiraTech es una consultora de software, inteligencia artificial y transformación';
	$out[] = 'digital. No vendemos horas de desarrollo: acordamos con el cliente un indicador de';
	$out[] = 'negocio a mejorar, medimos su línea base, construimos la solución y reportamos el';
	$out[] = 'número resultante. Trabajamos con pymes, empresas medianas y grandes empresas.';
	$out[] = '';
	$out[] = '- Correo: ' . it_opt( 'email' );
	$whatsapp = it_whatsapp_url();
	if ( $whatsapp ) {
		$out[] = '- WhatsApp: ' . $whatsapp;
	}
	if ( it_opt( 'ubicacion' ) ) {
		$out[] = '- Ubicación: ' . it_opt( 'ubicacion' );
	}
	$out[] = '- Contacto y cotizaciones: ' . it_contact_url();
	$out[] = '';

	// Servicios.
	$servicios = get_posts(
		array(
			'post_type'      => 'servicio',
			'posts_per_page' => -1,
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
		)
	);
	if ( $servicios ) {
		$out[] = '## Servicios';
		$out[] = '';
		foreach ( $servicios as $servicio ) {
			$resumen = it_plain( $servicio->post_excerpt ?: it_meta( $servicio->ID, 'seo_desc' ) );
			$out[]   = sprintf( '- [%s](%s): %s', it_plain( $servicio->post_title ), get_permalink( $servicio ), $resumen );
		}
		$out[] = '';
	}

	// Casos de éxito publicados: la prueba de los resultados, y lo que un modelo
	// cita cuando alguien pregunta si esta empresa ha hecho algo parecido.
	$casos = get_posts(
		array(
			'post_type'      => 'caso',
			'posts_per_page' => -1,
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
		)
	);
	if ( $casos ) {
		$out[] = '## Casos de éxito';
		$out[] = '';
		foreach ( $casos as $caso ) {
			$resumen = it_plain( $caso->post_excerpt ?: it_meta( $caso->ID, 'seo_desc' ) );
			$out[]   = sprintf( '- [%s](%s): %s', it_plain( $caso->post_title ), get_permalink( $caso ), $resumen );
			foreach ( it_caso_resultados( $caso->ID ) as $r ) {
				$out[] = sprintf( '  - %s: antes %s, ahora %s', $r['indicador'], $r['antes'], $r['despues'] );
			}
		}
		$out[] = '';
	}

	// Artículos.
	$posts = get_posts(
		array(
			'post_type'      => 'post',
			'posts_per_page' => $completo ? -1 : 30,
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
	if ( $posts ) {
		$out[] = $completo ? '## Artículos del blog (todos)' : '## Artículos recientes del blog';
		$out[] = '';
		foreach ( $posts as $post ) {
			$resumen = it_plain( $post->post_excerpt ?: it_meta( $post->ID, 'seo_desc' ) );
			$out[]   = sprintf( '- [%s](%s): %s', it_plain( $post->post_title ), get_permalink( $post ), $resumen );
		}
		$out[] = '';
	}

	// Páginas institucionales.
	$out[] = '## Páginas';
	$out[] = '';
	foreach ( array( 'nosotros', 'contacto', 'academia', 'politica-de-privacidad' ) as $slug ) {
		$pagina = get_page_by_path( $slug );
		if ( $pagina ) {
			$out[] = sprintf( '- [%s](%s)', it_plain( $pagina->post_title ), get_permalink( $pagina ) );
		}
	}
	$blog = (int) get_option( 'page_for_posts' );
	if ( $blog ) {
		$out[] = sprintf( '- [Blog](%s): guías prácticas sobre software, IA y digitalización para empresas.', get_permalink( $blog ) );
	}
	$out[] = sprintf( '- [Todos los servicios](%s)', get_post_type_archive_link( 'servicio' ) );
	$out[] = '';

	if ( ! $completo ) {
		$out[] = '## Opcional';
		$out[] = '';
		$out[] = sprintf( '- [Índice completo del blog](%s): todos los artículos publicados con su descripción.', home_url( '/llms-full.txt' ) );
		$out[] = sprintf( '- [Mapa del sitio XML](%s)', home_url( '/wp-sitemap.xml' ) );
		$out[] = '';
	}

	$out[] = '---';
	$out[] = 'Última actualización: ' . wp_date( 'Y-m-d' );

	return implode( "\n", $out ) . "\n";
}

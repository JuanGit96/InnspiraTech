<?php
/**
 * Funciones de plantilla reutilizables.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Logo del sitio. $variant: 'dark' (fondo claro) o 'light' (fondo oscuro).
 */
function it_logo( string $variant = 'dark', string $class = 'h-9 w-auto' ): void {
	$logo_id = (int) get_theme_mod( 'custom_logo' );
	if ( 'dark' === $variant && $logo_id ) {
		echo wp_get_attachment_image(
			$logo_id,
			'full',
			false,
			array(
				'class'         => $class,
				'alt'           => get_bloginfo( 'name' ),
				'loading'       => 'eager',
				'fetchpriority' => 'high',
			)
		);
		return;
	}

	$file = 'light' === $variant ? 'logo-white.webp' : 'logo.webp';
	printf(
		'<img src="%s" alt="%s" width="622" height="96" class="%s" decoding="async">',
		esc_url( get_theme_file_uri( 'assets/img/' . $file ) ),
		esc_attr( get_bloginfo( 'name' ) ),
		esc_attr( $class )
	);
}

/**
 * Migas de pan visibles (los datos vienen de it_breadcrumb_items del plugin).
 */
function it_breadcrumbs( bool $dark = false ): void {
	$items = it_breadcrumb_items();
	if ( count( $items ) < 2 ) {
		return;
	}

	$wrap    = $dark ? 'text-slate-400' : 'text-slate-500';
	$link    = $dark ? 'transition hover:text-white' : 'transition hover:text-inblue';
	$current = $dark ? 'font-medium text-slate-200' : 'font-medium text-slate-700';
	$last    = count( $items ) - 1;

	echo '<nav aria-label="Migas de pan" class="mb-6 text-sm ' . esc_attr( $wrap ) . '"><ol class="flex flex-wrap items-center gap-x-2 gap-y-1">';
	foreach ( array_values( $items ) as $i => $item ) {
		echo '<li class="flex items-center gap-2">';
		if ( $i < $last && $item['url'] ) {
			printf( '<a class="%s" href="%s">%s</a>', esc_attr( $link ), esc_url( $item['url'] ), esc_html( $item['name'] ) );
			echo '<span aria-hidden="true" class="opacity-50">/</span>';
		} else {
			printf( '<span class="%s" aria-current="page">%s</span>', esc_attr( $current ), esc_html( wp_trim_words( $item['name'], 9, '…' ) ) );
		}
		echo '</li>';
	}
	echo '</ol></nav>';
}

/**
 * Tiempo de lectura estimado (200 palabras por minuto).
 */
function it_reading_time( int $post_id ): string {
	$words   = count( preg_split( '/\s+/u', trim( wp_strip_all_tags( (string) get_post_field( 'post_content', $post_id ) ) ), -1, PREG_SPLIT_NO_EMPTY ) );
	$minutes = max( 1, (int) ceil( $words / 200 ) );
	return sprintf( '%d min de lectura', $minutes );
}

/**
 * Primera categoría de una entrada.
 */
function it_primary_category( int $post_id ): ?WP_Term {
	$cats = get_the_category( $post_id );
	return $cats ? $cats[0] : null;
}

/**
 * URL de un servicio por su slug (o del listado si no existe).
 */
function it_service_url( string $slug ): string {
	$service = get_page_by_path( $slug, OBJECT, 'servicio' );
	return $service ? (string) get_permalink( $service ) : (string) get_post_type_archive_link( 'servicio' );
}

/**
 * URL de una página por su slug.
 */
function it_page_url( string $slug ): string {
	$page = get_page_by_path( $slug );
	return $page ? (string) get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

/**
 * URL del blog.
 */
function it_blog_url(): string {
	$blog = (int) get_option( 'page_for_posts' );
	return $blog ? (string) get_permalink( $blog ) : home_url( '/' );
}

/**
 * Paginación de listados.
 */
function it_pagination(): void {
	$links = paginate_links(
		array(
			'type'      => 'array',
			'mid_size'  => 1,
			'prev_text' => '← Anterior',
			'next_text' => 'Siguiente →',
		)
	);
	if ( ! $links ) {
		return;
	}
	echo '<nav class="pagination mt-16 flex flex-wrap items-center justify-center gap-2" aria-label="Paginación">';
	foreach ( $links as $link ) {
		echo $link; // phpcs:ignore WordPress.Security.EscapeOutput -- generado por paginate_links.
	}
	echo '</nav>';
}

/**
 * Mensaje de resultado de un formulario de lead.
 */
function it_lead_notice( string $origen ): void {
	$status = it_lead_status( $origen );
	if ( ! $status ) {
		return;
	}

	$ok_messages = array(
		'contacto'   => '¡Gracias! Recibimos tu requerimiento. Nuestro equipo lo revisará y te contactará para agendar una llamada de diagnóstico.',
		'newsletter' => '¡Listo! Te suscribiste. Pronto recibirás nuestras guías gratuitas.',
		'academia'   => '¡Estás en la lista! Te avisaremos primero cuando abramos inscripciones.',
	);
	$errors      = array(
		'datos'  => 'Revisa los campos obligatorios: correo válido y aceptación de la política de privacidad.',
		'limite' => 'Recibimos varios envíos seguidos desde tu conexión. Intenta de nuevo en unos minutos.',
		'spam'   => 'No pudimos validar el envío. Recarga la página e inténtalo de nuevo.',
	);

	if ( 'ok' === $status['status'] ) {
		printf(
			'<div class="mb-6 flex gap-3 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm font-medium text-emerald-800" role="status">%s<p>%s</p></div>',
			it_icon( 'check-circle', 'size-5 shrink-0' ), // phpcs:ignore WordPress.Security.EscapeOutput
			esc_html( $ok_messages[ $origen ] ?? $ok_messages['contacto'] )
		);
	} else {
		$message = $errors[ $status['motivo'] ] ?? 'Ocurrió un error al enviar. Escríbenos directamente a ' . it_opt( 'email' ) . '.';
		printf(
			'<div class="mb-6 flex gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-sm font-medium text-red-800" role="alert">%s<p>%s</p></div>',
			it_icon( 'x-circle', 'size-5 shrink-0' ), // phpcs:ignore WordPress.Security.EscapeOutput
			esc_html( $message )
		);
	}
}

/**
 * Casilla de consentimiento (Habeas Data / protección de datos).
 */
function it_consent_field( string $id, bool $dark = false ): void {
	$privacy = get_privacy_policy_url();
	$label   = $privacy
		? sprintf( 'Acepto la <a href="%s" class="font-semibold underline %s">política de privacidad</a> y el tratamiento de mis datos.', esc_url( $privacy ), $dark ? 'text-white' : 'text-inblue' )
		: 'Acepto el tratamiento de mis datos personales.';

	printf(
		'<label for="%1$s" class="flex items-start gap-3 text-sm %2$s"><input id="%1$s" type="checkbox" name="it_consentimiento" value="1" required class="mt-0.5 size-4 shrink-0 rounded border-slate-300 accent-inblue"><span>%3$s</span></label>',
		esc_attr( $id ),
		$dark ? 'text-slate-400' : 'text-slate-600',
		wp_kses( $label, array( 'a' => array( 'href' => array(), 'class' => array() ) ) )
	);
}

/**
 * Extrae el índice de contenidos (H2 con id) del HTML de un artículo.
 */
function it_toc_from_html( string $html ): array {
	preg_match_all( '/<h2[^>]*\sid="([^"]+)"[^>]*>(.*?)<\/h2>/is', $html, $matches, PREG_SET_ORDER );
	return array_map(
		static fn( $m ) => array(
			'id'   => $m[1],
			'text' => it_plain( $m[2] ),
		),
		$matches
	);
}

/**
 * Menú de respaldo cuando aún no se asignó uno en Apariencia > Menús.
 */
function it_menu_fallback( array $args ): void {
	$mobile = isset( $args['it_variant'] ) && 'mobile' === $args['it_variant'];
	$links  = array(
		'Servicios' => (string) get_post_type_archive_link( 'servicio' ),
		'Nosotros'  => it_page_url( 'nosotros' ),
		'Blog'      => it_blog_url(),
		'Academia'  => it_page_url( 'academia' ),
		'Contacto'  => it_contact_url(),
	);
	$class  = $mobile ? 'block rounded-lg px-3 py-3 text-base font-semibold text-indark hover:bg-slate-50' : 'inline-flex rounded-lg px-3 py-2 font-medium text-slate-600 transition hover:text-inblue';

	printf( '<ul class="%s">', esc_attr( $args['menu_class'] ?? '' ) );
	foreach ( $links as $label => $url ) {
		printf( '<li><a class="%s" href="%s">%s</a></li>', esc_attr( $class ), esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

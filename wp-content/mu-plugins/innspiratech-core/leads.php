<?php
/**
 * Formularios (contacto, boletín, lista de espera de la Academia).
 *
 * Flujo: el formulario del tema hace POST a /wp-admin/admin-post.php con
 * action=it_lead → se valida → se guarda como "Lead" (nunca se pierde un
 * contacto aunque falle el correo) → se envía aviso por correo → se redirige
 * de vuelta con ?it_lead=ok|error.
 *
 * Antispam sin captcha: campo trampa (honeypot), tiempo mínimo firmado y
 * límite de envíos por IP. No se usa nonce a propósito: con caché de página en
 * producción los nonces caducan y el formulario fallaría a visitantes reales.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

const IT_LEAD_ORIGENES = array( 'contacto', 'newsletter', 'academia' );

/**
 * Campos ocultos que todo formulario de lead debe incluir.
 */
function it_lead_hidden_fields( string $origen ): void {
	$ts = (string) time();
	echo '<input type="hidden" name="action" value="it_lead">';
	printf( '<input type="hidden" name="it_origen" value="%s">', esc_attr( $origen ) );
	printf( '<input type="hidden" name="it_ts" value="%s">', esc_attr( $ts . '.' . wp_hash( $ts . '|' . $origen, 'nonce' ) ) );
	printf( '<input type="hidden" name="it_ref" value="%s">', esc_url( it_current_url() ) );
	echo '<div style="position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden" aria-hidden="true">'
		. '<label>No completes este campo <input type="text" name="it_web" value="" tabindex="-1" autocomplete="off"></label></div>';
}

/**
 * URL actual sin los parámetros de estado del formulario.
 */
function it_current_url(): string {
	$path = isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '/';
	return remove_query_arg( array( 'it_lead', 'it_origen', 'it_motivo' ), home_url( $path ) );
}

/**
 * Estado del último envío para mostrar mensajes en el tema.
 *
 * @return array{status:string,motivo:string}|null
 */
function it_lead_status( string $origen ): ?array {
	// phpcs:disable WordPress.Security.NonceVerification.Recommended -- solo lectura de un mensaje.
	if ( empty( $_GET['it_lead'] ) || ( $_GET['it_origen'] ?? '' ) !== $origen ) {
		return null;
	}
	return array(
		'status' => 'ok' === $_GET['it_lead'] ? 'ok' : 'error',
		'motivo' => sanitize_key( $_GET['it_motivo'] ?? '' ),
	);
	// phpcs:enable
}

add_action( 'admin_post_nopriv_it_lead', 'it_handle_lead' );
add_action( 'admin_post_it_lead', 'it_handle_lead' );

function it_handle_lead(): void {
	// phpcs:disable WordPress.Security.NonceVerification.Missing -- ver nota del encabezado.
	$origen = sanitize_key( $_POST['it_origen'] ?? 'contacto' );
	if ( ! in_array( $origen, IT_LEAD_ORIGENES, true ) ) {
		$origen = 'contacto';
	}

	$back = wp_validate_redirect( esc_url_raw( wp_unslash( $_POST['it_ref'] ?? '' ) ), home_url( '/' ) ) ?: home_url( '/' );

	$redirect = static function ( string $status, string $motivo = '' ) use ( $back, $origen ): void {
		$args = array(
			'it_lead'   => $status,
			'it_origen' => $origen,
		);
		if ( $motivo ) {
			$args['it_motivo'] = $motivo;
		}
		wp_safe_redirect( add_query_arg( $args, $back ) . '#form-' . $origen, 303 );
		exit;
	};

	// 1) Honeypot: los bots llenan todo. Respondemos "ok" para no darles pistas.
	if ( ! empty( $_POST['it_web'] ) ) {
		$redirect( 'ok' );
	}

	// 2) Tiempo mínimo firmado (un humano tarda más de 3 s en llenar el formulario).
	$parts = explode( '.', (string) ( $_POST['it_ts'] ?? '' ), 2 );
	$ts    = $parts[0] ?? '';
	$sig   = $parts[1] ?? '';
	if ( ! ctype_digit( $ts ) || ! hash_equals( wp_hash( $ts . '|' . $origen, 'nonce' ), $sig ) || ( time() - (int) $ts ) < 3 ) {
		$redirect( 'error', 'spam' );
	}

	// 3) Límite: 5 envíos cada 10 minutos por IP.
	$ip_key = 'it_rl_' . md5( sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ?? '' ) ) . wp_salt() );
	$count  = (int) get_transient( $ip_key );
	if ( $count >= 5 ) {
		$redirect( 'error', 'limite' );
	}
	set_transient( $ip_key, $count + 1, 10 * MINUTE_IN_SECONDS );

	// 4) Validación.
	$text = static fn( string $key ): string => mb_substr( sanitize_text_field( wp_unslash( $_POST[ $key ] ?? '' ) ), 0, 200 );

	$data = array(
		'email'       => sanitize_email( wp_unslash( $_POST['it_email'] ?? '' ) ),
		'nombre'      => $text( 'it_nombre' ),
		'empresa'     => $text( 'it_empresa' ),
		'telefono'    => $text( 'it_telefono' ),
		'tamano'      => $text( 'it_tamano' ),
		'servicio'    => $text( 'it_servicio' ),
		'presupuesto' => $text( 'it_presupuesto' ),
		'interes'     => $text( 'it_interes' ),
	);
	$mensaje = mb_substr( sanitize_textarea_field( wp_unslash( $_POST['it_mensaje'] ?? '' ) ), 0, 5000 );

	if ( ! is_email( $data['email'] ) || empty( $_POST['it_consentimiento'] ) ) {
		$redirect( 'error', 'datos' );
	}
	if ( 'contacto' === $origen && ( '' === $data['nombre'] || '' === $mensaje ) ) {
		$redirect( 'error', 'datos' );
	}
	// phpcs:enable

	// 5) Guardar como lead privado.
	$titulo  = ( $data['nombre'] ?: $data['email'] ) . ( $data['empresa'] ? ' — ' . $data['empresa'] : '' );
	$lead_id = wp_insert_post(
		array(
			'post_type'    => 'lead',
			'post_status'  => 'private',
			'post_title'   => $titulo,
			'post_content' => $mensaje,
		),
		true
	);
	if ( is_wp_error( $lead_id ) ) {
		$redirect( 'error', 'interno' );
	}

	$data['origen'] = $origen;
	foreach ( $data as $key => $value ) {
		if ( '' !== $value && 'nombre' !== $key ) {
			update_post_meta( $lead_id, '_it_' . $key, $value );
		}
	}
	update_post_meta( $lead_id, '_it_consentimiento', current_time( 'mysql' ) );

	// 6) Aviso por correo al equipo.
	$asuntos = array(
		'contacto'   => 'Nuevo requerimiento',
		'newsletter' => 'Nueva suscripción al boletín',
		'academia'   => 'Lista de espera Academia',
	);
	$lineas  = array();
	$labels  = array(
		'nombre'      => 'Nombre',
		'empresa'     => 'Empresa',
		'email'       => 'Correo',
		'telefono'    => 'Teléfono',
		'tamano'      => 'Tamaño',
		'servicio'    => 'Servicio',
		'presupuesto' => 'Presupuesto',
		'interes'     => 'Interés',
	);
	foreach ( $labels as $key => $label ) {
		if ( '' !== $data[ $key ] ) {
			$lineas[] = $label . ': ' . $data[ $key ];
		}
	}
	if ( $mensaje ) {
		$lineas[] = "\nMensaje:\n" . $mensaje;
	}
	$lineas[] = "\nVer en el admin: " . admin_url( 'post.php?post=' . $lead_id . '&action=edit' );

	$reply_to = $data['nombre'] ? sprintf( '%s <%s>', str_replace( array( '<', '>', '"' ), '', $data['nombre'] ), $data['email'] ) : $data['email'];

	wp_mail(
		(string) ( it_opt( 'email' ) ?: get_option( 'admin_email' ) ),
		sprintf( '[%s] %s: %s', wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ), $asuntos[ $origen ], $titulo ),
		implode( "\n", $lineas ),
		array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $reply_to )
	);

	do_action( 'it_lead_creado', $lead_id, $origen, $data );

	$redirect( 'ok' );
}

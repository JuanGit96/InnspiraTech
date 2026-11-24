<?php
/**
 * Publicación programada del blog.
 *
 * 1. Enlaces internos a artículos que aún no se publican: se muestran como texto
 *    normal y se activan solos el día que el artículo sale. Así ningún artículo
 *    publicado enlaza a una página 404 (mala señal para Google y para el lector).
 * 2. Red de seguridad ante "programación perdida": si WP-Cron no se ejecutó a
 *    tiempo (poco tráfico, migración de la base de datos), publica lo vencido.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

/* -------------------------------------------------------------------------
 * Enlaces a artículos no publicados
 * ---------------------------------------------------------------------- */

add_filter( 'the_content', 'it_unlink_unpublished_posts', 20 );

function it_unlink_unpublished_posts( string $content ): string {
	$base = trailingslashit( home_url( '/blog/' ) );
	if ( false === strpos( $content, $base ) ) {
		return $content;
	}

	$pattern = '#<a\s[^>]*href="' . preg_quote( $base, '#' ) . '([a-z0-9\-]+)/?"[^>]*>(.*?)</a>#is';
	if ( ! preg_match_all( $pattern, $content, $matches ) ) {
		return $content;
	}

	$published = it_published_post_slugs( array_unique( $matches[1] ) );

	return (string) preg_replace_callback(
		$pattern,
		static fn( array $m ): string => in_array( $m[1], $published, true ) ? $m[0] : $m[2],
		$content
	);
}

/**
 * Devuelve, de la lista recibida, los slugs de entradas publicadas.
 *
 * @param string[] $slugs Slugs a comprobar.
 * @return string[]
 */
function it_published_post_slugs( array $slugs ): array {
	static $cache = array();
	global $wpdb;

	$missing = array_values( array_diff( $slugs, array_keys( $cache ) ) );
	if ( $missing ) {
		$placeholders = implode( ',', array_fill( 0, count( $missing ), '%s' ) );
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		$found = $wpdb->get_col( $wpdb->prepare( "SELECT post_name FROM {$wpdb->posts} WHERE post_type = 'post' AND post_status = 'publish' AND post_name IN ($placeholders)", $missing ) );
		foreach ( $missing as $slug ) {
			$cache[ $slug ] = in_array( $slug, $found, true );
		}
	}

	return array_keys( array_filter( array_intersect_key( $cache, array_flip( $slugs ) ) ) );
}

/* -------------------------------------------------------------------------
 * Programación perdida
 * ---------------------------------------------------------------------- */

add_action( 'init', 'it_publish_missed_schedule', 20 );

function it_publish_missed_schedule(): void {
	if ( wp_installing() || get_transient( 'it_missed_schedule_check' ) ) {
		return;
	}
	set_transient( 'it_missed_schedule_check', 1, 5 * MINUTE_IN_SECONDS );

	global $wpdb;
	$ids = $wpdb->get_col(
		$wpdb->prepare(
			"SELECT ID FROM {$wpdb->posts} WHERE post_status = 'future' AND post_date_gmt <= %s ORDER BY post_date_gmt ASC LIMIT 10",
			current_time( 'mysql', true )
		)
	);
	foreach ( $ids as $id ) {
		wp_publish_post( (int) $id );
	}
}

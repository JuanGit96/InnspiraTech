<?php
/**
 * Formulario de búsqueda (lo usa get_search_form()).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_search_id = wp_unique_id( 'buscar-' );
?>
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex gap-2">
	<label for="<?php echo esc_attr( $it_search_id ); ?>" class="sr-only">Buscar en el sitio</label>
	<input id="<?php echo esc_attr( $it_search_id ); ?>" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Buscar artículos, servicios…" class="field-input">
	<button type="submit" class="btn-primary shrink-0">
		<?php echo it_icon( 'search', 'size-5' ); // phpcs:ignore ?>
		<span class="sr-only sm:not-sr-only">Buscar</span>
	</button>
</form>

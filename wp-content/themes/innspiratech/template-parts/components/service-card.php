<?php
/**
 * Tarjeta de servicio. Args: post (WP_Post), heading (h2|h3).
 * Todas las tarjetas tienen el mismo peso visual; la etiqueta es opcional y discreta.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_service = $args['post'];
$it_heading = tag_escape( $args['heading'] ?? 'h3' );
$it_badge   = (string) it_meta( $it_service->ID, 'badge' );
$it_icon    = (string) it_meta( $it_service->ID, 'icono', 'code' );
$it_url     = get_permalink( $it_service );
?>
<article class="card group relative flex flex-col p-7 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl">
	<div class="flex items-start justify-between gap-3">
		<span class="flex size-12 items-center justify-center rounded-xl bg-blue-50 text-inblue transition group-hover:bg-inblue group-hover:text-white"><?php echo it_icon( $it_icon, 'size-6' ); // phpcs:ignore ?></span>
		<?php if ( $it_badge ) : ?>
			<span class="rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-bold text-inblue"><?php echo esc_html( $it_badge ); ?></span>
		<?php endif; ?>
	</div>
	<<?php echo $it_heading; // phpcs:ignore ?> class="mt-5 text-lg font-bold text-indark">
		<a href="<?php echo esc_url( $it_url ); ?>" class="after:absolute after:inset-0 focus-visible:outline-none"><?php echo esc_html( get_the_title( $it_service ) ); ?></a>
	</<?php echo $it_heading; // phpcs:ignore ?>>
	<p class="mt-2 text-[15px] leading-relaxed text-slate-600"><?php echo esc_html( get_the_excerpt( $it_service ) ); ?></p>
	<span class="mt-auto inline-flex items-center gap-1.5 pt-5 text-sm font-semibold text-inblue transition-all group-hover:gap-2.5">
		Ver más <?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?>
	</span>
</article>

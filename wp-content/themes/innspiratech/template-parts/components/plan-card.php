<?php
/**
 * Tarjeta de plan con precio (sección Fast-Track). Args: post (WP_Post).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_plan     = $args['post'];
$it_featured = '1' === it_meta( $it_plan->ID, 'destacado' );
$it_label    = (string) it_meta( $it_plan->ID, 'etiqueta' );
$it_features = it_parse_lines( (string) it_meta( $it_plan->ID, 'caracteristicas' ) );
?>
<div class="relative flex flex-col rounded-2xl bg-white p-8 <?php echo $it_featured ? 'border-2 border-inblue shadow-xl md:-translate-y-4' : 'border border-slate-200 shadow-sm'; ?>">
	<?php if ( $it_label ) : ?>
		<span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full bg-inblue px-4 py-1 text-sm font-bold whitespace-nowrap text-white"><?php echo esc_html( $it_label ); ?></span>
	<?php endif; ?>

	<h3 class="text-xl font-bold text-indark"><?php echo esc_html( get_the_title( $it_plan ) ); ?></h3>
	<p class="mt-2 grow text-slate-500"><?php echo esc_html( get_the_excerpt( $it_plan ) ); ?></p>
	<p class="mt-6 text-3xl font-bold text-inblue"><?php echo esc_html( it_meta( $it_plan->ID, 'precio' ) ); ?></p>

	<?php if ( $it_features ) : ?>
		<ul class="mt-6 space-y-3 text-sm text-slate-700" role="list">
			<?php foreach ( $it_features as $it_feature ) : ?>
				<li class="flex gap-2"><?php echo it_icon( 'check', 'size-5 shrink-0 text-inblue' ); // phpcs:ignore ?><?php echo esc_html( $it_feature ); ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<a href="<?php echo esc_url( it_contact_url( $it_plan->post_name ) ); ?>" class="<?php echo $it_featured ? 'btn-primary' : 'btn bg-blue-50 text-inblue hover:bg-inblue hover:text-white'; ?> mt-8 w-full">
		<?php echo esc_html( it_meta( $it_plan->ID, 'cta', 'Seleccionar plan' ) ); ?>
	</a>
</div>

<?php
/**
 * Tarjeta de caso de éxito. Args: post (WP_Post), heading (h2|h3).
 *
 * Muestra el primer resultado medido en grande: es lo que hace que alguien
 * abra el caso, mucho más que el nombre del cliente.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_caso    = $args['post'] ?? get_post();
$it_heading = tag_escape( $args['heading'] ?? 'h3' );
$it_cliente = (string) it_meta( $it_caso->ID, 'cliente' );
$it_sector  = (string) it_meta( $it_caso->ID, 'sector' );
$it_res     = it_caso_resultados( $it_caso->ID );
$it_primero = $it_res[0] ?? null;
?>
<article class="card group relative flex flex-col overflow-hidden hover:-translate-y-1 hover:shadow-xl">
	<div class="aspect-video overflow-hidden bg-slate-100">
		<?php if ( has_post_thumbnail( $it_caso ) ) : ?>
			<?php
			echo get_the_post_thumbnail(
				$it_caso,
				'it-card',
				array(
					'class'   => 'size-full object-cover transition duration-500 group-hover:scale-105',
					'loading' => 'lazy',
					'alt'     => '',
				)
			);
			?>
		<?php else : ?>
			<div class="flex size-full items-center justify-center bg-indark text-blue-300"><?php echo it_icon( 'trending-up', 'size-10' ); // phpcs:ignore ?></div>
		<?php endif; ?>
	</div>

	<div class="flex flex-1 flex-col p-6">
		<div class="flex flex-wrap items-center gap-2 text-xs font-semibold">
			<span class="tracking-wide text-inblue uppercase">Caso de éxito</span>
			<?php if ( $it_sector ) : ?>
				<span class="text-slate-300" aria-hidden="true">•</span>
				<span class="text-slate-500"><?php echo esc_html( $it_sector ); ?></span>
			<?php endif; ?>
		</div>

		<<?php echo $it_heading; // phpcs:ignore ?> class="mt-3 text-lg leading-snug font-bold text-indark transition group-hover:text-inblue">
			<a href="<?php echo esc_url( get_permalink( $it_caso ) ); ?>" class="after:absolute after:inset-0 focus-visible:outline-none"><?php echo esc_html( get_the_title( $it_caso ) ); ?></a>
		</<?php echo $it_heading; // phpcs:ignore ?>>

		<?php if ( $it_cliente ) : ?>
			<p class="mt-1 text-sm font-medium text-slate-500"><?php echo esc_html( $it_cliente ); ?></p>
		<?php endif; ?>

		<p class="mt-3 line-clamp-3 text-[15px] leading-relaxed text-slate-600"><?php echo esc_html( get_the_excerpt( $it_caso ) ); ?></p>

		<?php if ( $it_primero ) : ?>
			<div class="mt-auto flex items-end gap-3 border-t border-slate-100 pt-5">
				<div>
					<p class="text-xs font-semibold tracking-wide text-slate-500 uppercase"><?php echo esc_html( $it_primero['indicador'] ); ?></p>
					<p class="mt-1 flex items-baseline gap-2">
						<span class="text-sm text-slate-400 line-through"><?php echo esc_html( $it_primero['antes'] ); ?></span>
						<?php echo it_icon( 'arrow-right', 'size-4 text-slate-300' ); // phpcs:ignore ?>
						<span class="text-xl font-extrabold text-inblue"><?php echo esc_html( $it_primero['despues'] ); ?></span>
					</p>
				</div>
			</div>
		<?php endif; ?>
	</div>
</article>

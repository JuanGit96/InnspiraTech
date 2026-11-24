<?php
/**
 * Tarjeta de artículo. Args: post (WP_Post), heading (h2|h3).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_post    = $args['post'] ?? get_post();
$it_heading = tag_escape( $args['heading'] ?? 'h3' );
$it_cat     = it_primary_category( $it_post->ID );
?>
<article class="card group relative flex flex-col overflow-hidden hover:-translate-y-1 hover:shadow-xl">
	<div class="aspect-video overflow-hidden bg-slate-100">
		<?php if ( has_post_thumbnail( $it_post ) ) : ?>
			<?php
			echo get_the_post_thumbnail(
				$it_post,
				'it-card',
				array(
					'class'   => 'size-full object-cover transition duration-500 group-hover:scale-105',
					'loading' => 'lazy',
					'alt'     => '',
				)
			);
			?>
		<?php else : ?>
			<div class="flex size-full items-center justify-center bg-indark text-blue-300"><?php echo it_icon( 'book', 'size-10' ); // phpcs:ignore ?></div>
		<?php endif; ?>
	</div>
	<div class="flex flex-1 flex-col p-6">
		<div class="flex flex-wrap items-center gap-2 text-xs font-semibold">
			<?php if ( $it_cat ) : ?>
				<span class="tracking-wide text-inblue uppercase"><?php echo esc_html( $it_cat->name ); ?></span>
				<span class="text-slate-300" aria-hidden="true">•</span>
			<?php endif; ?>
			<time class="text-slate-500" datetime="<?php echo esc_attr( get_the_date( 'c', $it_post ) ); ?>"><?php echo esc_html( get_the_date( '', $it_post ) ); ?></time>
		</div>
		<<?php echo $it_heading; // phpcs:ignore ?> class="mt-3 text-lg leading-snug font-bold text-indark transition group-hover:text-inblue">
			<a href="<?php echo esc_url( get_permalink( $it_post ) ); ?>" class="after:absolute after:inset-0 focus-visible:outline-none"><?php echo esc_html( get_the_title( $it_post ) ); ?></a>
		</<?php echo $it_heading; // phpcs:ignore ?>>
		<p class="mt-3 line-clamp-3 text-[15px] leading-relaxed text-slate-600"><?php echo esc_html( get_the_excerpt( $it_post ) ); ?></p>
		<p class="mt-auto flex items-center gap-1.5 pt-5 text-sm text-slate-500">
			<?php echo it_icon( 'clock', 'size-4' ); // phpcs:ignore ?>
			<?php echo esc_html( it_reading_time( $it_post->ID ) ); ?>
		</p>
	</div>
</article>

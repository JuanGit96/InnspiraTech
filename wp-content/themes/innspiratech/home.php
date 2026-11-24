<?php
/**
 * Índice del blog (/blog/). WordPress usa home.php para la "página de entradas".
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$it_paged = max( 1, (int) get_query_var( 'paged' ) );

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'kicker' => 'Blog',
		'title'  => 'Guías gratuitas de tecnología, IA y transformación digital',
		'lead'   => 'Contenido educativo para dueños, gerentes y equipos de empresas pequeñas, medianas y grandes que quieren tomar mejores decisiones tecnológicas.',
		'dark'   => false,
	)
);

get_template_part( 'template-parts/components/category-chips' );
?>
<section class="section bg-slate-50" aria-label="Artículos">
	<div class="container-it">
		<?php if ( have_posts() ) : ?>

			<?php
			if ( 1 === $it_paged ) :
				the_post();
				$it_cat = it_primary_category( get_the_ID() );
				?>
				<article class="card group relative mb-10 grid overflow-hidden hover:shadow-xl lg:grid-cols-2">
					<div class="aspect-video overflow-hidden bg-slate-100 lg:aspect-auto">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail(
								'large',
								array(
									'class'         => 'size-full object-cover transition duration-500 group-hover:scale-105',
									'loading'       => 'eager',
									'fetchpriority' => 'high',
									'alt'           => '',
								)
							);
						}
						?>
					</div>
					<div class="flex flex-col justify-center p-8 lg:p-12">
						<div class="flex flex-wrap items-center gap-2 text-xs font-semibold">
							<span class="rounded-full bg-blue-50 px-2.5 py-1 text-inblue">Lo más reciente</span>
							<?php if ( $it_cat ) : ?>
								<span class="tracking-wide text-slate-500 uppercase"><?php echo esc_html( $it_cat->name ); ?></span>
							<?php endif; ?>
							<span class="text-slate-300" aria-hidden="true">•</span>
							<time class="text-slate-500" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						</div>
						<h2 class="mt-4 text-2xl leading-tight font-bold text-indark transition group-hover:text-inblue sm:text-3xl">
							<a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0 focus-visible:outline-none"><?php the_title(); ?></a>
						</h2>
						<p class="mt-4 text-lg leading-relaxed text-slate-600"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<p class="mt-6 flex flex-wrap items-center gap-4 text-sm text-slate-500">
							<span class="flex items-center gap-1.5"><?php echo it_icon( 'clock', 'size-4' ); // phpcs:ignore ?><?php echo esc_html( it_reading_time( get_the_ID() ) ); ?></span>
							<span class="inline-flex items-center gap-1.5 font-semibold text-inblue">Leer artículo <?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?></span>
						</p>
					</div>
				</article>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/components/post-card', null, array( 'post' => get_post(), 'heading' => 'h2' ) );
					endwhile;
					?>
				</div>
			<?php endif; ?>

			<?php it_pagination(); ?>

		<?php else : ?>
			<p class="text-center text-lg text-slate-600">Muy pronto publicaremos nuestras primeras guías. Suscríbete para enterarte.</p>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part( 'template-parts/components/newsletter-band' );
get_footer();

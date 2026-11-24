<?php
/**
 * Páginas genéricas (ej. Política de privacidad).
 * Páginas con diseño propio: page-nosotros.php, page-contacto.php, page-academia.php.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	get_template_part(
		'template-parts/components/page-hero',
		null,
		array(
			'title' => it_plain( get_the_title() ),
			'lead'  => has_excerpt() ? get_the_excerpt() : '',
			'dark'  => false,
		)
	);
	?>
	<section class="bg-white py-16 lg:py-20">
		<div class="container-it">
			<div class="mx-auto max-w-3xl">
				<div class="prose prose-lg prose-slate max-w-none prose-headings:font-bold prose-headings:text-indark prose-a:font-semibold prose-a:text-inblue prose-strong:text-indark">
					<?php the_content(); ?>
				</div>
				<?php
				wp_link_pages();
				get_template_part(
					'template-parts/components/faq',
					null,
					array(
						'post_id' => get_the_ID(),
						'layout'  => 'stacked',
					)
				);
				?>
				<p class="mt-12 border-t border-slate-100 pt-6 text-sm text-slate-500">Última actualización: <time datetime="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time></p>
			</div>
		</div>
	</section>
	<?php
endwhile;

get_footer();

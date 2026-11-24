<?php
/**
 * Archivos del blog: categorías, etiquetas, autor y fechas.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( is_category() ) {
	$it_eyebrow = 'Categoría';
} elseif ( is_tag() ) {
	$it_eyebrow = 'Etiqueta';
} elseif ( is_author() ) {
	$it_eyebrow = 'Autor';
} else {
	$it_eyebrow = 'Archivo';
}

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'eyebrow' => $it_eyebrow,
		'title'   => it_plain( get_the_archive_title() ),
		'lead'    => it_plain( get_the_archive_description() ),
		'dark'    => false,
	)
);

get_template_part( 'template-parts/components/category-chips' );
?>
<section class="section bg-slate-50">
	<div class="container-it">
		<?php if ( have_posts() ) : ?>
			<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/components/post-card', null, array( 'post' => get_post(), 'heading' => 'h2' ) );
				endwhile;
				?>
			</div>
			<?php it_pagination(); ?>
		<?php else : ?>
			<p class="text-center text-lg text-slate-600">Todavía no hay artículos aquí.</p>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part( 'template-parts/components/newsletter-band' );
get_footer();

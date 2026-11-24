<?php
/**
 * Plantilla de último recurso de la jerarquía de WordPress.
 * En este tema casi nunca se usa: existen home.php, archive.php, single.php y page.php.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'eyebrow' => 'Blog',
		'title'   => it_plain( get_the_archive_title() ) ?: 'Contenido',
		'dark'    => false,
	)
);
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
			<p class="text-center text-lg text-slate-600">No hay contenido para mostrar.</p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

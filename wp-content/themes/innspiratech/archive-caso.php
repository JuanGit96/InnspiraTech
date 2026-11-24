<?php
/**
 * Listado de casos de éxito (/casos/).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'kicker' => 'Casos de éxito',
		'title'  => 'Proyectos reales y el número que movieron',
		'lead'   => 'Cada caso cuenta el problema de negocio que había detrás, qué construimos y qué pasó con el indicador que acordamos al inicio.',
		'dark'   => true,
	)
);
?>
<section class="section bg-slate-50" aria-label="Casos">
	<div class="container-it">
		<?php if ( have_posts() ) : ?>
			<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/components/caso-card', null, array( 'post' => get_post(), 'heading' => 'h2' ) );
				endwhile;
				?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => 'Anterior',
					'next_text' => 'Siguiente',
					'class'     => 'mt-14',
				)
			);
			?>
		<?php else : ?>
			<div class="mx-auto max-w-2xl rounded-3xl border border-slate-200 bg-white p-10 text-center">
				<h2 class="text-xl font-bold text-indark">Estamos preparando esta sección</h2>
				<p class="mt-3 text-slate-600">Publicamos los casos con cifras reales y con la autorización de cada cliente. Mientras tanto, cuéntanos tu reto y te mostramos proyectos parecidos en una llamada.</p>
				<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary mt-7">Hablar de mi proyecto</a>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part( 'template-parts/components/cta' );
get_footer();

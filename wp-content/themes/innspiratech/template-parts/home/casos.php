<?php
/**
 * Portada: casos de éxito. La prueba de lo que promete la sección de enfoque.
 *
 * No se muestra nada si todavía no hay casos publicados: una sección vacía
 * resta más de lo que suma.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_casos = get_posts(
	array(
		'post_type'      => 'caso',
		'posts_per_page' => 3,
		'orderby'        => 'menu_order date',
		'order'          => 'ASC',
	)
);

if ( ! $it_casos ) {
	return;
}
?>
<section class="section bg-slate-50" aria-labelledby="casos-titulo">
	<div class="container-it">
		<div class="mx-auto max-w-3xl text-center">
			<p class="eyebrow">Casos de éxito</p>
			<h2 id="casos-titulo" class="section-title mt-4">Proyectos reales y el número que movieron</h2>
			<p class="section-lead">Lo que prometemos arriba, demostrado: el problema que había, qué construimos y qué pasó con el indicador.</p>
		</div>

		<div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
			<?php foreach ( $it_casos as $it_caso ) : ?>
				<?php get_template_part( 'template-parts/components/caso-card', null, array( 'post' => $it_caso ) ); ?>
			<?php endforeach; ?>
		</div>

		<div class="mt-12 text-center">
			<a href="<?php echo esc_url( get_post_type_archive_link( 'caso' ) ); ?>" class="btn-outline btn-lg">
				Ver todos los casos
				<?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?>
			</a>
		</div>
	</div>
</section>

<?php
/**
 * Portada: servicios (se leen del tipo de contenido "Servicios").
 * Todos con el mismo peso visual; el orden se define con "Orden" en el admin.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_services = get_posts(
	array(
		'post_type'      => 'servicio',
		'posts_per_page' => 20,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'title'      => 'ASC',
		),
		'no_found_rows'  => true,
	)
);

if ( ! $it_services ) {
	return;
}
?>
<section id="servicios" class="section bg-slate-50" aria-labelledby="servicios-titulo">
	<div class="container-it">
		<div class="mx-auto max-w-3xl text-center">
			<p class="eyebrow">Servicios</p>
			<h2 id="servicios-titulo" class="section-title mt-4">Un ecosistema de soluciones para cada etapa</h2>
			<p class="section-lead">Adaptamos nuestro rigor técnico a tu velocidad de negocio: desde validar una idea en días hasta llevar la inteligencia artificial al corazón de tu operación.</p>
		</div>

		<div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-4" data-reveal>
			<?php
			foreach ( $it_services as $it_service ) {
				get_template_part( 'template-parts/components/service-card', null, array( 'post' => $it_service ) );
			}
			?>
		</div>

		<div class="mt-12 text-center">
			<a href="<?php echo esc_url( get_post_type_archive_link( 'servicio' ) ); ?>" class="btn-outline">
				Ver servicios, planes y precios
				<?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?>
			</a>
		</div>
	</div>
</section>

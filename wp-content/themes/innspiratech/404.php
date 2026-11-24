<?php
/**
 * Página no encontrada (404).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="relative isolate overflow-hidden bg-white pt-40 pb-24 text-center lg:pt-48 lg:pb-32">
	<div aria-hidden="true" class="absolute -top-40 left-1/2 -z-10 size-[36rem] -translate-x-1/2 rounded-full bg-blue-100 opacity-70 blur-3xl"></div>
	<div class="container-it">
		<p class="text-7xl font-extrabold tracking-tight text-inblue sm:text-8xl">404</p>
		<h1 class="mt-4 text-3xl font-bold text-indark sm:text-4xl">No encontramos esta página</h1>
		<p class="mx-auto mt-4 max-w-xl text-lg text-slate-600">Es posible que el enlace haya cambiado o que la página ya no exista. Usa la búsqueda o visita una de estas secciones.</p>
		<div class="mx-auto mt-8 max-w-xl"><?php get_search_form(); ?></div>
		<div class="mt-8 flex flex-wrap justify-center gap-3">
			<a class="btn-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">Ir al inicio</a>
			<a class="btn-outline" href="<?php echo esc_url( get_post_type_archive_link( 'servicio' ) ); ?>">Servicios</a>
			<a class="btn-outline" href="<?php echo esc_url( it_blog_url() ); ?>">Blog</a>
			<a class="btn-outline" href="<?php echo esc_url( it_contact_url() ); ?>">Contacto</a>
		</div>
	</div>
</section>
<?php
get_footer();

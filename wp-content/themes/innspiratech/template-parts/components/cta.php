<?php
/**
 * Llamado a la acción final. Args: title, text.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_whatsapp = it_whatsapp_url( 'Hola InnspiraTech, quiero cotizar un proyecto.' );
?>
<section class="bg-white py-20 lg:py-24">
	<div class="container-it">
		<div class="relative isolate overflow-hidden rounded-3xl bg-indark px-8 py-16 text-center sm:px-16" data-reveal>
			<div aria-hidden="true" class="absolute -top-32 left-1/2 -z-10 size-[36rem] -translate-x-1/2 rounded-full bg-inblue opacity-25 blur-3xl"></div>
			<h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php echo esc_html( $args['title'] ?? '¿Listo para acelerar tu próximo proyecto?' ); ?></h2>
			<p class="mx-auto mt-4 max-w-xl text-lg text-slate-300"><?php echo esc_html( $args['text'] ?? 'Cuéntanos qué necesitas. Te ayudamos a definir el alcance, la tecnología y el camino más rápido para lograrlo.' ); ?></p>
			<div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">
				<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary btn-lg">Cotizar proyecto <?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?></a>
				<?php if ( $it_whatsapp ) : ?>
					<a href="<?php echo esc_url( $it_whatsapp ); ?>" class="btn-outline-light btn-lg" target="_blank" rel="noopener"><?php echo it_icon( 'chat', 'size-5' ); // phpcs:ignore ?> Escribir por WhatsApp</a>
				<?php else : ?>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'servicio' ) ); ?>" class="btn-outline-light btn-lg">Explorar servicios</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

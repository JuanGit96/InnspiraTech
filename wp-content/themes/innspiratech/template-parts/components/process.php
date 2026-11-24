<?php
/**
 * Metodología en 4 pasos. Args: title, class (fondo).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_steps = array(
	array( 'search', 'Diagnóstico', 'Entendemos tu negocio, tus procesos y tus sistemas actuales antes de proponer cualquier tecnología.' ),
	array( 'chart-bar', 'Línea base', 'Medimos cómo está hoy el indicador que vamos a mover. Sin ese número de partida, ninguna mejora se puede demostrar.' ),
	array( 'light-bulb', 'Estrategia', 'Definimos alcance, arquitectura, prioridades y métricas de éxito en una hoja de ruta clara.' ),
	array( 'code', 'Construcción ágil', 'Entregas cortas y demostrables, comunicación constante y código documentado.' ),
	array( 'trending-up', 'Medir y evolucionar', 'Comparamos contra la línea base, reportamos el resultado, damos soporte y escalamos lo que funciona.' ),
);
?>
<section class="section <?php echo esc_attr( $args['class'] ?? 'bg-white' ); ?>" aria-labelledby="proceso-titulo">
	<div class="container-it">
		<div class="mx-auto max-w-3xl text-center">
			<p class="eyebrow">Metodología</p>
			<h2 id="proceso-titulo" class="section-title mt-4"><?php echo esc_html( $args['title'] ?? 'Cómo trabajamos' ); ?></h2>
			<p class="section-lead">Un proceso probado para pasar de la idea a resultados medibles, sin sorpresas.</p>
		</div>

		<ol class="relative mt-16 grid gap-10 md:grid-cols-2 lg:grid-cols-5 lg:before:absolute lg:before:inset-x-[12%] lg:before:top-7 lg:before:h-px lg:before:bg-slate-200" role="list" data-reveal>
			<?php foreach ( $it_steps as $it_i => list( $it_icon_name, $it_title, $it_text ) ) : ?>
				<li class="relative text-center">
					<span class="relative mx-auto flex size-14 items-center justify-center rounded-2xl bg-indark text-white shadow-lg ring-8 ring-white"><?php echo it_icon( $it_icon_name, 'size-6' ); // phpcs:ignore ?></span>
					<p class="mt-5 text-xs font-bold tracking-widest text-inblue uppercase">Paso <?php echo esc_html( sprintf( '%02d', $it_i + 1 ) ); ?></p>
					<h3 class="mt-2 text-xl font-bold text-indark"><?php echo esc_html( $it_title ); ?></h3>
					<p class="mt-2 text-slate-600"><?php echo esc_html( $it_text ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
</section>

<?php
/**
 * Portada: el enfoque de la empresa en una sección.
 *
 * No vendemos horas ni «un agente de IA»: acordamos un indicador del negocio,
 * medimos cómo está hoy y reportamos cómo quedó. Esta sección lo explica y
 * aterriza la promesa (resultado, plazo, condición) y las formas de cobro.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_pasos = array(
	array(
		'icon'  => 'eye',
		'title' => 'Acordamos el indicador',
		'text'  => 'Antes de hablar de tecnología definimos qué número tiene que mejorar: ventas cerradas, horas administrativas, días de cartera, tiempo de respuesta.',
	),
	array(
		'icon'  => 'chart-bar',
		'title' => 'Medimos la línea base',
		'text'  => 'Dejamos por escrito cómo está hoy ese número. Sin línea base no hay forma honesta de demostrar que algo mejoró.',
	),
	array(
		'icon'  => 'trending-up',
		'title' => 'Reportamos el resultado',
		'text'  => 'Al cierre entregamos el mismo indicador medido igual, con la diferencia a la vista y el detalle de qué la produjo.',
	),
);

$it_modelos = array(
	array( 'check-circle', 'Proyecto cerrado', 'Alcance, precio y fecha definidos antes de empezar. Es la forma más común y la que elige la mayoría.', false ),
	array( 'refresh', 'Servicio mensual', 'Mantenimiento, soporte, marketing o dirección técnica con una cuota fija y sin sorpresas.', false ),
	array( 'users', 'Equipo dedicado', 'Perfiles evaluados que se suman a tu equipo el tiempo que necesites, dirigidos por ti.', false ),
	array( 'trending-up', 'Resultado compartido', 'Parte del pago atada al indicador: pago partido, cuota más extra por objetivo o porcentaje de la mejora. Solo cuando el resultado se mide sin discusión.', true ),
);
?>
<section class="section bg-white" aria-labelledby="resultados-titulo">
	<div class="container-it">
		<div class="mx-auto max-w-3xl text-center">
			<p class="eyebrow">Nuestro enfoque</p>
			<h2 id="resultados-titulo" class="section-title mt-4">No entregamos software: entregamos un número que sube</h2>
			<p class="section-lead">
				Un sistema nuevo no es un logro por sí mismo. El logro es que entren más solicitudes, que el equipo
				recupere horas o que el dinero llegue antes. Por eso cada proyecto arranca eligiendo el indicador
				que vamos a mover y termina mostrando qué pasó con él.
			</p>
		</div>

		<ol class="mt-16 grid gap-6 md:grid-cols-3" role="list" data-reveal>
			<?php foreach ( $it_pasos as $it_i => $it_paso ) : ?>
				<li class="card flex flex-col p-8">
					<span class="flex size-12 items-center justify-center rounded-xl bg-blue-50 text-inblue"><?php echo it_icon( $it_paso['icon'], 'size-6' ); // phpcs:ignore ?></span>
					<p class="mt-6 text-xs font-bold tracking-widest text-inblue uppercase">Paso <?php echo esc_html( sprintf( '%02d', $it_i + 1 ) ); ?></p>
					<h3 class="mt-2 text-xl font-bold text-indark"><?php echo esc_html( $it_paso['title'] ); ?></h3>
					<p class="mt-2 text-slate-600"><?php echo esc_html( $it_paso['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>

		<div class="mt-12 grid gap-6 lg:grid-cols-2" data-reveal>
			<div class="rounded-3xl bg-indark p-8 text-white sm:p-10">
				<p class="text-xs font-bold tracking-widest text-cyan-300 uppercase">Cómo comprometemos el trabajo</p>
				<h3 class="mt-3 text-2xl font-bold">Una promesa con tres partes</h3>
				<p class="mt-3 text-slate-300">Escrita en la propuesta, para que ambas partes sepan qué se espera y cuándo.</p>

				<dl class="mt-8 space-y-4">
					<div class="flex items-start gap-4 rounded-2xl bg-white/5 p-5 ring-1 ring-white/10">
						<?php echo it_icon( 'trending-up', 'size-5 shrink-0 text-cyan-300' ); // phpcs:ignore ?>
						<div>
							<dt class="font-bold text-white">Resultado</dt>
							<dd class="mt-1 text-sm text-slate-300">Qué indicador mejora y en cuánto, medido como ya lo mides tú.</dd>
						</div>
					</div>
					<div class="flex items-start gap-4 rounded-2xl bg-white/5 p-5 ring-1 ring-white/10">
						<?php echo it_icon( 'clock', 'size-5 shrink-0 text-cyan-300' ); // phpcs:ignore ?>
						<div>
							<dt class="font-bold text-white">Plazo</dt>
							<dd class="mt-1 text-sm text-slate-300">En cuánto tiempo, con revisiones intermedias y no una sorpresa al final.</dd>
						</div>
					</div>
					<div class="flex items-start gap-4 rounded-2xl bg-white/5 p-5 ring-1 ring-white/10">
						<?php echo it_icon( 'shield-check', 'size-5 shrink-0 text-cyan-300' ); // phpcs:ignore ?>
						<div>
							<dt class="font-bold text-white">Condición</dt>
							<dd class="mt-1 text-sm text-slate-300">Qué necesitamos de tu lado para que ocurra: datos, accesos o que el equipo use la herramienta.</dd>
						</div>
					</div>
				</dl>
			</div>

			<div class="card flex flex-col p-8 sm:p-10">
				<p class="eyebrow">Formas de trabajar</p>
				<h3 class="mt-4 text-2xl font-bold text-indark">Eliges cómo nos contratas</h3>
				<p class="mt-3 text-slate-600">
					La mayoría de proyectos se cierran con alcance, precio y fecha definidos de entrada.
					Y cuando el indicador es claro y depende de nosotros, podemos ir un paso más allá.
				</p>

				<ul class="mt-8 space-y-4" role="list">
					<?php foreach ( $it_modelos as list( $it_ico, $it_titulo, $it_texto, $it_destacado ) ) : ?>
						<li class="flex gap-4 rounded-2xl p-4 <?php echo $it_destacado ? 'bg-blue-50 ring-1 ring-blue-100' : ''; ?>">
							<?php echo it_icon( $it_ico, 'size-5 shrink-0 ' . ( $it_destacado ? 'text-inblue' : 'text-emerald-500' ) ); // phpcs:ignore ?>
							<div>
								<p class="font-bold text-indark">
									<?php echo esc_html( $it_titulo ); ?>
									<?php if ( $it_destacado ) : ?>
										<span class="ml-2 rounded-full bg-inblue px-2 py-0.5 align-middle text-[11px] font-semibold tracking-wide text-white uppercase">Opcional</span>
									<?php endif; ?>
								</p>
								<p class="mt-1 text-sm text-slate-600"><?php echo esc_html( $it_texto ); ?></p>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>

				<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary mt-8 self-start">
					Cuéntanos qué número quieres mover
					<?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?>
				</a>
			</div>
		</div>
	</div>
</section>

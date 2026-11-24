<?php
/**
 * Portada: banda oscura de posicionamiento en IA (MCP + agentes).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_steps = array(
	array( 'plug', 'Conecta', 'Creamos servidores MCP que exponen tus datos y procesos a la IA con permisos, autenticación y registro de cada acción.' ),
	array( 'sparkles', 'Automatiza', 'Diseñamos agentes que atienden clientes, califican leads y resuelven tareas de back-office, y escalan a una persona cuando hace falta.' ),
	array( 'currency', 'Monetiza', '¿Tu empresa tiene datos o una API valiosa? La empaquetamos como un servidor MCP comercial para que otras empresas paguen por usarla desde sus asistentes de IA.' ),
);
?>
<section class="section relative isolate overflow-hidden bg-indark text-white" aria-labelledby="ia-titulo">
	<div aria-hidden="true" class="absolute inset-0 -z-10 [background-image:linear-gradient(to_right,rgba(148,163,184,0.07)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.07)_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_70%)]"></div>
	<div aria-hidden="true" class="absolute -top-40 -left-40 -z-10 size-[32rem] rounded-full bg-inblue opacity-20 blur-3xl"></div>

	<div class="container-it">
		<div class="grid gap-16 lg:grid-cols-2 lg:items-center">
			<div data-reveal>
				<p class="eyebrow-dark"><?php echo it_icon( 'sparkles', 'size-4' ); // phpcs:ignore ?> Inteligencia artificial aplicada</p>
				<h2 id="ia-titulo" class="mt-5 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">La IA ya no es una demo: es parte de tu operación</h2>
				<p class="mt-6 text-lg leading-relaxed text-slate-300">
					Conectamos modelos como Claude, GPT o Gemini con tus sistemas reales —ERP, CRM, bases de datos, WhatsApp— mediante el estándar abierto
					<strong class="text-white">MCP (Model Context Protocol)</strong>. El resultado: agentes que consultan, deciden y ejecutan tareas con supervisión humana y trazabilidad.
				</p>
				<div class="mt-9 flex flex-col gap-4 sm:flex-row">
					<a class="btn-primary" href="<?php echo esc_url( it_service_url( 'desarrollo-servidores-mcp' ) ); ?>">
						Servidores MCP <?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?>
					</a>
					<a class="btn-outline-light" href="<?php echo esc_url( it_service_url( 'agentes-ia-empresas' ) ); ?>">Agentes de IA para empresas</a>
				</div>
			</div>

			<ol class="grid gap-5" role="list" data-reveal>
				<?php foreach ( $it_steps as $it_i => list( $it_icon_name, $it_title, $it_text ) ) : ?>
					<li class="flex gap-5 rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 transition hover:bg-white/10">
						<span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-inblue/20 text-blue-300"><?php echo it_icon( $it_icon_name, 'size-6' ); // phpcs:ignore ?></span>
						<div>
							<h3 class="text-lg font-bold"><span class="text-blue-300"><?php echo esc_html( sprintf( '%02d', $it_i + 1 ) ); ?> ·</span> <?php echo esc_html( $it_title ); ?></h3>
							<p class="mt-1.5 leading-relaxed text-slate-300"><?php echo esc_html( $it_text ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</div>
</section>

<?php
/**
 * Hero de la portada. Textos editables en Apariencia > Personalizar > InnspiraTech.
 * La ilustración de la derecha es HTML/CSS (no imagen): carga instantánea y no afecta el LCP.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_points = array( 'Acordamos el indicador que vamos a mejorar', 'Pymes, medianas y grandes empresas', 'Servidores MCP y agentes de IA', 'Código limpio, documentado y escalable', 'Soporte y evolución continua' );
?>
<section class="relative isolate overflow-hidden bg-white pt-32 pb-20 lg:pt-44 lg:pb-28">
	<div aria-hidden="true" class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,rgba(37,99,235,0.10),transparent_55%)]"></div>

	<div class="container-it">
		<div class="grid items-center gap-16 lg:grid-cols-2">
			<div>
				<p class="eyebrow">
					<span class="relative flex size-2" aria-hidden="true">
						<span class="absolute inline-flex size-full animate-ping rounded-full bg-inblue opacity-60"></span>
						<span class="relative inline-flex size-2 rounded-full bg-inblue"></span>
					</span>
					<?php echo esc_html( it_opt( 'hero_badge' ) ); ?>
				</p>

				<h1 class="mt-6 text-4xl leading-[1.08] font-extrabold tracking-tight text-indark sm:text-5xl lg:text-6xl">
					<span class="mb-4 block text-sm font-semibold tracking-widest text-slate-500 uppercase sm:text-base"><?php echo esc_html( it_opt( 'hero_kicker' ) ); ?></span>
					<?php echo esc_html( it_opt( 'hero_line1' ) ); ?>
					<span class="block text-inblue"><?php echo esc_html( it_opt( 'hero_line2' ) ); ?></span>
				</h1>

				<p class="it-speakable mt-6 max-w-xl text-lg leading-relaxed text-slate-600 sm:text-xl"><?php echo esc_html( it_opt( 'hero_text' ) ); ?></p>

				<div class="mt-9 flex flex-col gap-4 sm:flex-row">
					<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary btn-lg">
						<?php echo esc_html( it_opt( 'hero_cta1' ) ); ?>
						<?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?>
					</a>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'servicio' ) ); ?>" class="btn-outline btn-lg"><?php echo esc_html( it_opt( 'hero_cta2' ) ); ?></a>
				</div>

				<ul class="mt-10 grid gap-3 text-sm font-medium text-slate-600 sm:grid-cols-2" role="list">
					<?php foreach ( $it_points as $it_point ) : ?>
						<li class="flex items-center gap-2"><?php echo it_icon( 'check-circle', 'size-5 shrink-0 text-emerald-500' ); // phpcs:ignore ?><?php echo esc_html( $it_point ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="relative hidden lg:block" aria-hidden="true">
				<div class="absolute -top-10 -right-10 -z-10 size-72 rounded-full bg-inblue opacity-20 blur-3xl"></div>
				<div class="absolute -bottom-14 -left-10 -z-10 size-64 rounded-full bg-cyan-400 opacity-15 blur-3xl"></div>

				<div class="overflow-hidden rounded-2xl border border-slate-800 bg-indark shadow-2xl shadow-blue-900/20">
					<div class="flex items-center gap-2 border-b border-slate-800 px-5 py-3.5">
						<span class="size-3 rounded-full bg-slate-700"></span>
						<span class="size-3 rounded-full bg-slate-700"></span>
						<span class="size-3 rounded-full bg-slate-700"></span>
						<span class="ml-3 font-mono text-xs text-slate-400">agente-comercial · conectado vía MCP</span>
						<span class="ml-auto inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 px-2.5 py-1 text-[11px] font-semibold text-emerald-400">
							<span class="size-1.5 animate-pulse rounded-full bg-emerald-400"></span>En línea
						</span>
					</div>
					<div class="space-y-4 p-6 font-mono text-[13px] leading-relaxed">
						<p class="text-slate-300"><span class="text-slate-500">cliente ›</span> ¿Tienen 40 licencias Pro para entregar mañana?</p>
						<div class="rounded-lg border border-slate-800 bg-slate-900/70 p-3">
							<p class="text-cyan-400">⚙ erp.consultar_inventario</p>
							<p class="text-slate-400">→ { "sku": "LIC-PRO", "disponibles": 128 }</p>
						</div>
						<div class="rounded-lg border border-slate-800 bg-slate-900/70 p-3">
							<p class="text-cyan-400">⚙ crm.crear_oportunidad</p>
							<p class="text-slate-400">→ oportunidad creada · asesor asignado</p>
						</div>
						<p class="text-slate-100"><span class="text-blue-400">agente ›</span> ¡Sí! Reservé 40 licencias y un asesor te confirma la entrega hoy.</p>
					</div>
					<div class="grid grid-cols-3 divide-x divide-slate-800 border-t border-slate-800 text-center text-[11px] font-semibold tracking-wide text-slate-400 uppercase">
						<span class="px-3 py-3">Claude · GPT · Gemini</span>
						<span class="px-3 py-3">ERP · CRM · WhatsApp</span>
						<span class="px-3 py-3">Humano en el ciclo</span>
					</div>
				</div>

				<div class="absolute -bottom-8 -left-8 flex items-center gap-3 rounded-xl border border-slate-100 bg-white p-4 shadow-xl">
					<span class="flex size-10 items-center justify-center rounded-lg bg-blue-50 text-inblue"><?php echo it_icon( 'plug', 'size-5' ); // phpcs:ignore ?></span>
					<span>
						<span class="block text-sm font-bold text-indark">Servidor MCP</span>
						<span class="block text-xs text-slate-500">Desplegado y seguro</span>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

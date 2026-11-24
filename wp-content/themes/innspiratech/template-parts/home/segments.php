<?php
/**
 * Portada: soluciones por tamaño de empresa.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_segments = array(
	array(
		'icon'  => 'store',
		'title' => 'Pymes y emprendedores',
		'text'  => 'Presencia digital que vende, procesos más simples y automatizaciones con retorno rápido.',
		'items' => array( 'Sitios web y tiendas online en semanas', 'Atención y ventas automatizadas por WhatsApp', 'Marketing digital medible desde el primer mes', 'Planes web desde USD 140' ),
	),
	array(
		'icon'  => 'trending-up',
		'title' => 'Empresas en crecimiento',
		'text'  => 'Sistemas que escalan con tu operación sin multiplicar costos ni errores.',
		'items' => array( 'Software a medida e integraciones', 'Agentes de IA para soporte y ventas', 'Hoja de ruta de transformación digital', 'Equipos TI bajo demanda' ),
	),
	array(
		'icon'  => 'office',
		'title' => 'Grandes empresas',
		'text'  => 'Ingeniería enterprise, gobierno de la IA y modernización de sistemas críticos.',
		'items' => array( 'Servidores MCP seguros para sistemas internos', 'E-commerce de alto volumen: Magento, VTEX, Shopify Plus', 'Modernización de código heredado', 'Staff augmentation con talento validado' ),
	),
);
?>
<section class="section bg-slate-50" aria-labelledby="segmentos-titulo">
	<div class="container-it">
		<div class="mx-auto max-w-3xl text-center">
			<p class="eyebrow">Para quién trabajamos</p>
			<h2 id="segmentos-titulo" class="section-title mt-4">Soluciones para empresas pequeñas, medianas y grandes</h2>
			<p class="section-lead">El mismo rigor técnico, ajustado a tu etapa, tu presupuesto y tu velocidad.</p>
		</div>

		<div class="mt-16 grid gap-6 lg:grid-cols-3" data-reveal>
			<?php foreach ( $it_segments as $it_segment ) : ?>
				<div class="card flex flex-col p-8 hover:shadow-xl">
					<span class="flex size-12 items-center justify-center rounded-xl bg-indark text-white"><?php echo it_icon( $it_segment['icon'], 'size-6' ); // phpcs:ignore ?></span>
					<h3 class="mt-6 text-xl font-bold text-indark"><?php echo esc_html( $it_segment['title'] ); ?></h3>
					<p class="mt-2 text-slate-600"><?php echo esc_html( $it_segment['text'] ); ?></p>
					<ul class="mt-6 space-y-3 border-t border-slate-100 pt-6 text-sm text-slate-700" role="list">
						<?php foreach ( $it_segment['items'] as $it_item ) : ?>
							<li class="flex gap-2.5"><?php echo it_icon( 'check', 'size-5 shrink-0 text-inblue' ); // phpcs:ignore ?><?php echo esc_html( $it_item ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a href="<?php echo esc_url( it_contact_url() ); ?>" class="mt-auto inline-flex items-center gap-1.5 pt-8 text-sm font-semibold text-inblue transition-all hover:gap-2.5">
						Hablemos de tu caso <?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

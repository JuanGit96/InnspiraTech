<?php
/**
 * Landing de un servicio (/servicios/{slug}/). Una URL por intención de búsqueda.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$it_id           = get_the_ID();
	$it_icon         = (string) it_meta( $it_id, 'icono', 'code' );
	$it_badge        = (string) it_meta( $it_id, 'badge' );
	$it_price        = it_meta( $it_id, 'precio_desde' );
	$it_benefits     = it_parse_pairs( (string) it_meta( $it_id, 'beneficios' ) );
	$it_deliverables = it_parse_lines( (string) it_meta( $it_id, 'entregables' ) );
	$it_kpis         = it_parse_lines( (string) it_meta( $it_id, 'kpis' ) );
	$it_cta          = (string) it_meta( $it_id, 'cta', 'Cotizar este servicio' );
	$it_lineas       = wp_get_post_terms( $it_id, 'linea_servicio' );
	$it_linea        = ( ! is_wp_error( $it_lineas ) && $it_lineas ) ? $it_lineas[0] : null;
	$it_contact      = it_contact_url( get_post_field( 'post_name', $it_id ) );
	?>
	<header class="relative isolate overflow-hidden bg-indark pt-32 pb-16 text-white lg:pt-40 lg:pb-24">
		<div aria-hidden="true" class="absolute inset-0 -z-10 [background-image:linear-gradient(to_right,rgba(148,163,184,0.07)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.07)_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top,black_30%,transparent_75%)]"></div>
		<div aria-hidden="true" class="absolute -top-32 right-0 -z-10 size-[30rem] rounded-full bg-inblue opacity-25 blur-3xl"></div>

		<div class="container-it">
			<?php it_breadcrumbs( true ); ?>
			<div class="grid gap-10 lg:grid-cols-12 lg:items-end">
				<div class="lg:col-span-8">
					<div class="flex flex-wrap items-center gap-3">
						<span class="flex size-12 items-center justify-center rounded-xl bg-white/10 text-blue-300 ring-1 ring-white/15"><?php echo it_icon( $it_icon, 'size-6' ); // phpcs:ignore ?></span>
						<?php if ( $it_linea ) : ?>
							<span class="eyebrow-dark"><?php echo esc_html( $it_linea->name ); ?></span>
						<?php endif; ?>
						<?php if ( $it_badge ) : ?>
							<span class="rounded-full bg-inblue px-3 py-1 text-xs font-bold tracking-wide uppercase"><?php echo esc_html( $it_badge ); ?></span>
						<?php endif; ?>
					</div>
					<h1 class="mt-6 text-4xl font-bold tracking-tight sm:text-5xl lg:text-[3.5rem] lg:leading-[1.1]"><?php the_title(); ?></h1>
					<?php if ( has_excerpt() ) : ?>
						<p class="it-speakable mt-5 max-w-2xl text-lg leading-relaxed text-slate-300 sm:text-xl"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
					<div class="mt-9 flex flex-col gap-4 sm:flex-row">
						<a class="btn-primary btn-lg" href="<?php echo esc_url( $it_contact ); ?>"><?php echo esc_html( $it_cta ); ?> <?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?></a>
						<a class="btn-outline-light btn-lg" href="#detalle">Ver detalles</a>
					</div>
				</div>
				<div class="lg:col-span-4">
					<div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
						<p class="text-sm font-semibold tracking-wider text-slate-400 uppercase">Inversión</p>
						<p class="mt-2 text-3xl font-bold"><?php echo is_numeric( $it_price ) ? esc_html( 'Desde USD ' . number_format_i18n( (float) $it_price ) ) : 'A la medida'; ?></p>
						<p class="mt-2 text-sm text-slate-400">Te enviamos una propuesta con alcance, tiempos y costo antes de empezar.</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="detalle" class="section scroll-mt-20 bg-white">
		<div class="container-it grid gap-12 lg:grid-cols-12">
			<div class="min-w-0 lg:col-span-8">
				<div class="prose prose-lg prose-slate max-w-none prose-headings:scroll-mt-28 prose-headings:font-bold prose-headings:text-indark prose-a:font-semibold prose-a:text-inblue prose-a:no-underline prose-a:hover:underline prose-strong:text-indark prose-li:marker:text-inblue">
					<?php the_content(); ?>
				</div>

				<?php if ( $it_kpis ) : ?>
					<section class="mt-16 overflow-hidden rounded-3xl bg-indark p-8 text-white sm:p-10" aria-labelledby="kpis-titulo">
						<p class="text-xs font-bold tracking-widest text-cyan-300 uppercase">Lo que de verdad compras</p>
						<h2 id="kpis-titulo" class="mt-3 text-2xl font-bold sm:text-3xl">Los indicadores que movemos con este servicio</h2>
						<p class="mt-3 max-w-2xl text-slate-300">
							Antes de construir nada medimos cómo está hoy cada uno. Al final te entregamos el mismo número, con la diferencia a la vista.
						</p>
						<ul class="mt-8 grid gap-4 sm:grid-cols-2" role="list">
							<?php foreach ( $it_kpis as $it_kpi ) : ?>
								<li class="flex items-start gap-3 rounded-2xl bg-white/5 p-5 ring-1 ring-white/10">
									<?php echo it_icon( 'trending-up', 'size-5 shrink-0 text-cyan-300' ); // phpcs:ignore ?>
									<span class="font-medium text-slate-100"><?php echo esc_html( $it_kpi ); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
						<p class="mt-7 text-sm text-slate-400">
							¿Tu indicador no está en la lista? <a class="font-semibold text-cyan-300 underline-offset-4 hover:underline" href="<?php echo esc_url( $it_contact ); ?>">Cuéntanos cuál quieres mover</a> y lo acordamos al inicio.
						</p>
					</section>
				<?php endif; ?>

				<?php if ( $it_benefits ) : ?>
					<h2 class="mt-16 text-2xl font-bold text-indark sm:text-3xl">Beneficios para tu empresa</h2>
					<div class="mt-8 grid gap-5 sm:grid-cols-2" data-reveal>
						<?php foreach ( $it_benefits as $it_benefit ) : ?>
							<div class="card p-6">
								<span class="flex size-10 items-center justify-center rounded-lg bg-blue-50 text-inblue"><?php echo it_icon( 'check', 'size-5' ); // phpcs:ignore ?></span>
								<h3 class="mt-4 text-lg font-bold text-indark"><?php echo esc_html( $it_benefit['titulo'] ); ?></h3>
								<?php if ( $it_benefit['texto'] ) : ?>
									<p class="mt-2 text-slate-600"><?php echo esc_html( $it_benefit['texto'] ); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>

			<aside class="lg:col-span-4">
				<div class="space-y-6 lg:sticky lg:top-28">
					<?php if ( $it_deliverables ) : ?>
						<div class="card p-7">
							<h2 class="text-lg font-bold text-indark">Qué incluye</h2>
							<ul class="mt-5 space-y-3 text-slate-700" role="list">
								<?php foreach ( $it_deliverables as $it_item ) : ?>
									<li class="flex gap-3"><?php echo it_icon( 'check-circle', 'size-5 shrink-0 text-inblue' ); // phpcs:ignore ?><span><?php echo esc_html( $it_item ); ?></span></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<div class="relative isolate overflow-hidden rounded-2xl bg-indark p-7 text-white">
						<div aria-hidden="true" class="absolute -top-16 -right-16 -z-10 size-56 rounded-full bg-inblue opacity-30 blur-3xl"></div>
						<h2 class="text-lg font-bold">¿Hablamos de tu proyecto?</h2>
						<p class="mt-2 text-sm leading-relaxed text-slate-300">Cuéntanos tu contexto y te proponemos la ruta más rápida y rentable.</p>
						<a class="btn-primary mt-6 w-full" href="<?php echo esc_url( $it_contact ); ?>"><?php echo esc_html( $it_cta ); ?></a>
						<?php $it_wa = it_whatsapp_url( 'Hola, quiero información sobre: ' . it_plain( get_the_title() ) ); ?>
						<?php if ( $it_wa ) : ?>
							<a class="btn-outline-light mt-3 w-full" href="<?php echo esc_url( $it_wa ); ?>" target="_blank" rel="noopener">WhatsApp</a>
						<?php endif; ?>
						<p class="mt-5 flex items-center gap-2 text-sm text-slate-400"><?php echo it_icon( 'mail', 'size-4' ); // phpcs:ignore ?><?php echo esc_html( it_opt( 'email' ) ); ?></p>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/components/process', null, array( 'class' => 'bg-slate-50' ) );

	get_template_part(
		'template-parts/components/faq',
		null,
		array(
			'post_id' => $it_id,
			'title'   => 'Preguntas frecuentes sobre ' . mb_strtolower( it_plain( get_the_title() ) ),
		)
	);

	$it_resources = get_posts(
		array(
			'posts_per_page' => 3,
			'no_found_rows'  => true,
			'meta_key'       => '_it_servicio_relacionado', // phpcs:ignore WordPress.DB.SlowDBQuery
			'meta_value'     => (string) $it_id, // phpcs:ignore WordPress.DB.SlowDBQuery
		)
	);
	if ( $it_resources ) :
		?>
		<section class="section bg-white" aria-labelledby="recursos-titulo">
			<div class="container-it">
				<p class="eyebrow">Recursos gratuitos</p>
				<h2 id="recursos-titulo" class="section-title mt-4">Aprende más sobre este tema</h2>
				<div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
					<?php
					foreach ( $it_resources as $it_resource ) {
						get_template_part( 'template-parts/components/post-card', null, array( 'post' => $it_resource ) );
					}
					?>
				</div>
			</div>
		</section>
		<?php
	endif;

	if ( $it_linea ) :
		$it_related = get_posts(
			array(
				'post_type'      => 'servicio',
				'posts_per_page' => 3,
				'post__not_in'   => array( $it_id ),
				'no_found_rows'  => true,
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'tax_query'      => array( // phpcs:ignore WordPress.DB.SlowDBQuery
					array(
						'taxonomy' => 'linea_servicio',
						'terms'    => $it_linea->term_id,
					),
				),
			)
		);
		if ( $it_related ) :
			?>
			<section class="section border-t border-slate-100 bg-slate-50" aria-labelledby="relacionados-titulo">
				<div class="container-it">
					<h2 id="relacionados-titulo" class="section-title">Servicios relacionados</h2>
					<div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
						<?php
						foreach ( $it_related as $it_rel ) {
							get_template_part( 'template-parts/components/service-card', null, array( 'post' => $it_rel ) );
						}
						?>
					</div>
				</div>
			</section>
			<?php
		endif;
	endif;

	get_template_part( 'template-parts/components/cta' );
endwhile;

get_footer();

<?php
/**
 * Ficha de un caso de éxito.
 *
 * El orden está pensado para convencer: primero el resultado medido, después
 * el problema, después cómo se resolvió y al final la invitación a repetirlo.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$it_id        = get_the_ID();
	$it_cliente   = (string) it_meta( $it_id, 'cliente' );
	$it_sector    = (string) it_meta( $it_id, 'sector' );
	$it_reto      = (string) it_meta( $it_id, 'reto' );
	$it_res       = it_caso_resultados( $it_id );
	$it_tec       = it_parse_lines( (string) it_meta( $it_id, 'tecnologias' ) );
	$it_duracion  = (string) it_meta( $it_id, 'duracion' );
	$it_testi     = (string) it_meta( $it_id, 'testimonio' );
	$it_testi_aut = (string) it_meta( $it_id, 'testimonio_autor' );
	$it_enlace    = (string) it_meta( $it_id, 'enlace' );
	$it_servicio  = (int) it_meta( $it_id, 'servicio_relacionado' );
	?>
<article>
	<header class="relative isolate overflow-hidden bg-indark pt-32 pb-16 text-white lg:pt-40">
		<div aria-hidden="true" class="absolute inset-0 -z-10 [background-image:linear-gradient(to_right,rgba(148,163,184,0.07)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.07)_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top,black_30%,transparent_75%)]"></div>
		<div aria-hidden="true" class="absolute -top-32 right-0 -z-10 size-[28rem] rounded-full bg-inblue opacity-25 blur-3xl"></div>

		<div class="container-it">
			<?php it_breadcrumbs( true ); ?>

			<div class="max-w-3xl">
				<p class="eyebrow text-cyan-300">
					Caso de éxito
					<?php if ( $it_sector ) : ?>
						<span class="text-slate-500">·</span> <span class="text-slate-300"><?php echo esc_html( $it_sector ); ?></span>
					<?php endif; ?>
				</p>

				<h1 class="mt-5 text-3xl leading-tight font-extrabold tracking-tight sm:text-4xl lg:text-5xl"><?php the_title(); ?></h1>

				<?php if ( has_excerpt() ) : ?>
					<p class="it-speakable mt-5 text-lg leading-relaxed text-slate-300 sm:text-xl"><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>

				<dl class="mt-8 flex flex-wrap gap-x-10 gap-y-4 text-sm">
					<?php if ( $it_cliente ) : ?>
						<div>
							<dt class="text-xs font-semibold tracking-widest text-slate-400 uppercase">Cliente</dt>
							<dd class="mt-1 font-semibold text-white"><?php echo esc_html( $it_cliente ); ?></dd>
						</div>
					<?php endif; ?>
					<?php if ( $it_duracion ) : ?>
						<div>
							<dt class="text-xs font-semibold tracking-widest text-slate-400 uppercase">Duración</dt>
							<dd class="mt-1 font-semibold text-white"><?php echo esc_html( $it_duracion ); ?></dd>
						</div>
					<?php endif; ?>
					<?php if ( $it_servicio && 'publish' === get_post_status( $it_servicio ) ) : ?>
						<div>
							<dt class="text-xs font-semibold tracking-widest text-slate-400 uppercase">Servicio</dt>
							<dd class="mt-1 font-semibold">
								<a class="text-cyan-300 underline-offset-4 hover:underline" href="<?php echo esc_url( get_permalink( $it_servicio ) ); ?>"><?php echo esc_html( get_the_title( $it_servicio ) ); ?></a>
							</dd>
						</div>
					<?php endif; ?>
				</dl>
			</div>
		</div>
	</header>

	<?php if ( $it_res ) : ?>
		<section class="border-b border-slate-100 bg-white py-12" aria-labelledby="resultados-caso">
			<div class="container-it">
				<h2 id="resultados-caso" class="sr-only">Resultados medidos</h2>
				<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-<?php echo esc_attr( min( 4, max( 2, count( $it_res ) ) ) ); ?>" data-reveal>
					<?php foreach ( $it_res as $it_r ) : ?>
						<div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-center">
							<p class="text-xs font-semibold tracking-wide text-slate-500 uppercase"><?php echo esc_html( $it_r['indicador'] ); ?></p>
							<p class="mt-3 flex items-baseline justify-center gap-2">
								<span class="text-base text-slate-400 line-through"><?php echo esc_html( $it_r['antes'] ); ?></span>
								<?php echo it_icon( 'arrow-right', 'size-4 text-slate-300' ); // phpcs:ignore ?>
								<span class="text-3xl font-extrabold text-inblue"><?php echo esc_html( $it_r['despues'] ); ?></span>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
				<p class="mt-6 text-center text-sm text-slate-500">Medido antes de empezar y al cierre del proyecto, con la misma fuente de datos del cliente.</p>
			</div>
		</section>
	<?php endif; ?>

	<section class="section bg-white">
		<div class="container-it grid gap-12 lg:grid-cols-12">
			<div class="min-w-0 lg:col-span-8">
				<?php if ( $it_reto ) : ?>
					<div class="mb-10 rounded-2xl border-l-4 border-inblue bg-blue-50/60 p-6">
						<p class="text-xs font-bold tracking-widest text-inblue uppercase">El reto</p>
						<p class="mt-2 text-lg leading-relaxed text-indark"><?php echo esc_html( $it_reto ); ?></p>
					</div>
				<?php endif; ?>

				<div class="prose prose-lg prose-slate max-w-none prose-headings:scroll-mt-28 prose-headings:font-bold prose-headings:text-indark prose-a:font-semibold prose-a:text-inblue prose-a:no-underline prose-a:hover:underline prose-strong:text-indark prose-li:marker:text-inblue">
					<?php the_content(); ?>
				</div>

				<?php if ( $it_testi ) : ?>
					<figure class="mt-12 rounded-3xl bg-indark p-8 text-white sm:p-10">
						<?php echo it_icon( 'chat', 'size-8 text-cyan-300' ); // phpcs:ignore ?>
						<blockquote class="mt-4 text-xl leading-relaxed font-medium">«<?php echo esc_html( $it_testi ); ?>»</blockquote>
						<?php if ( $it_testi_aut ) : ?>
							<figcaption class="mt-5 text-sm font-semibold text-cyan-300"><?php echo esc_html( $it_testi_aut ); ?></figcaption>
						<?php endif; ?>
					</figure>
				<?php endif; ?>
			</div>

			<aside class="lg:col-span-4">
				<div class="space-y-6 lg:sticky lg:top-28">
					<?php if ( $it_tec ) : ?>
						<div class="card p-7">
							<h2 class="text-lg font-bold text-indark">Qué usamos</h2>
							<ul class="mt-5 flex flex-wrap gap-2" role="list">
								<?php foreach ( $it_tec as $it_t ) : ?>
									<li class="rounded-full bg-slate-100 px-3 py-1.5 text-sm font-medium text-slate-700"><?php echo esc_html( $it_t ); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<?php if ( $it_enlace ) : ?>
						<div class="card p-7">
							<h2 class="text-lg font-bold text-indark">Ver el proyecto</h2>
							<a class="mt-4 inline-flex items-center gap-2 font-semibold break-all text-inblue hover:underline" href="<?php echo esc_url( $it_enlace ); ?>" target="_blank" rel="noopener">
								<?php echo it_icon( 'link', 'size-4 shrink-0' ); // phpcs:ignore ?>
								<?php echo esc_html( it_domain_from_url( $it_enlace ) ); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="card bg-indark p-7 text-white">
						<h2 class="text-lg font-bold">¿Tienes un reto parecido?</h2>
						<p class="mt-2 text-sm text-slate-300">Cuéntanos qué indicador quieres mover y te decimos si podemos ayudarte y cómo lo mediríamos.</p>
						<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary mt-5 w-full justify-center">
							Hablar de mi caso
							<?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?>
						</a>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<?php
	$it_otros = get_posts(
		array(
			'post_type'      => 'caso',
			'posts_per_page' => 3,
			'post__not_in'   => array( $it_id ),
		)
	);
	if ( $it_otros ) :
		?>
		<section class="section border-t border-slate-100 bg-slate-50" aria-labelledby="otros-casos">
			<div class="container-it">
				<h2 id="otros-casos" class="section-title">Otros casos</h2>
				<div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
					<?php foreach ( $it_otros as $it_otro ) : ?>
						<?php get_template_part( 'template-parts/components/caso-card', null, array( 'post' => $it_otro ) ); ?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</article>
	<?php
endwhile;

get_template_part( 'template-parts/components/cta' );
get_footer();

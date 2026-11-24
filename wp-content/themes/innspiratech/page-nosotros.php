<?php
/**
 * Página Nosotros (/nosotros/) — antes nosotros.html.
 * El texto principal se edita en el editor de bloques de la página.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$it_values = array(
	array( 'light-bulb', 'Enfoque consultivo', 'No solo ejecutamos: asesoramos. Antes de escribir código entendemos el negocio y el retorno esperado.' ),
	array( 'chip', 'Agnósticos tecnológicos', 'Usamos la herramienta correcta para cada trabajo: React, Node, PHP, Python, Go, Flutter, Swift o Kotlin.' ),
	array( 'eye', 'Transparencia', 'Procesos claros, avances demostrables y comunicación constante durante todo el proyecto.' ),
	array( 'bolt', 'Velocidad con rigor', 'Lanzamos rápido sin sacrificar calidad: código limpio, documentado y pensado para escalar.' ),
	array( 'shield-check', 'IA responsable', 'Agentes con permisos mínimos, supervisión humana, trazabilidad y cuidado de los datos.' ),
	array( 'users', 'Socios a largo plazo', 'Acompañamos la evolución de tu producto con soporte, mantenimiento y mejora continua.' ),
);

while ( have_posts() ) :
	the_post();

	get_template_part(
		'template-parts/components/page-hero',
		null,
		array(
			'eyebrow' => 'Nosotros',
			'title'   => 'Materializamos ideas, transformamos negocios.',
			'lead'    => 'En InnspiraTech no solo escribimos código: construimos soluciones que impulsan la transformación digital de empresas pequeñas, medianas y grandes.',
		)
	);
	?>
	<section class="section bg-white">
		<div class="container-it">
			<div class="grid gap-14 lg:grid-cols-2 lg:items-center">
				<div class="prose prose-lg prose-slate max-w-none prose-headings:font-bold prose-headings:text-indark prose-strong:text-indark">
					<?php the_content(); ?>
				</div>
				<figure class="relative">
					<div aria-hidden="true" class="absolute -inset-4 -z-10 rounded-3xl bg-linear-to-br from-blue-100 to-transparent"></div>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/nosotros-equipo.webp' ) ); ?>" width="1024" height="640" loading="lazy" decoding="async" class="aspect-[16/10] w-full rounded-2xl object-cover shadow-2xl" alt="Ingeniero de software trabajando con varios monitores en una solución de inteligencia artificial">
				</figure>
			</div>

			<div class="mt-20 rounded-3xl border border-blue-100 bg-blue-50 p-10 text-center sm:p-14" data-reveal>
				<p class="text-sm font-bold tracking-widest text-inblue uppercase">Nuestra visión</p>
				<blockquote class="mx-auto mt-4 max-w-3xl text-2xl leading-snug font-semibold text-blue-950 sm:text-3xl">
					“Ser el socio tecnológico de referencia global, reconocido por nuestra capacidad de convertir desafíos abstractos en software tangible, eficiente y escalable.”
				</blockquote>
			</div>
		</div>
	</section>

	<section class="section bg-slate-50" aria-labelledby="valores-titulo">
		<div class="container-it">
			<div class="mx-auto max-w-3xl text-center">
				<p class="eyebrow">Cultura</p>
				<h2 id="valores-titulo" class="section-title mt-4">¿Por qué InnspiraTech?</h2>
			</div>
			<div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal>
				<?php foreach ( $it_values as list( $it_icon_name, $it_title, $it_text ) ) : ?>
					<div class="card p-7">
						<span class="flex size-12 items-center justify-center rounded-xl bg-blue-50 text-inblue"><?php echo it_icon( $it_icon_name, 'size-6' ); // phpcs:ignore ?></span>
						<h3 class="mt-5 text-lg font-bold text-indark"><?php echo esc_html( $it_title ); ?></h3>
						<p class="mt-2 text-slate-600"><?php echo esc_html( $it_text ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
endwhile;

get_template_part( 'template-parts/components/process' );
get_template_part( 'template-parts/components/clients' );
get_template_part( 'template-parts/components/cta' );

get_footer();

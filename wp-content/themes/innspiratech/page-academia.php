<?php
/**
 * Página Academia (/academia/): cursos y capacitaciones (próximamente) + lista de espera.
 * Cuando se lancen los cursos, esta página puede convivir con un LMS (Tutor LMS,
 * LearnDash) o con WooCommerce para vender accesos.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$it_topics = array(
	'IA aplicada a los negocios',
	'Crea tu primer servidor MCP',
	'Agentes de IA para empresas',
	'WordPress y desarrollo web profesional',
	'Transformación digital para líderes',
	'Capacitación in-company para mi equipo',
);

while ( have_posts() ) :
	the_post();

	get_template_part(
		'template-parts/components/page-hero',
		null,
		array(
			'eyebrow' => 'Próximamente',
			'title'   => 'InnspiraTech Academy: cursos y capacitaciones tech',
			'lead'    => 'Formación práctica en inteligencia artificial, desarrollo y transformación digital para profesionales y equipos de empresas pequeñas, medianas y grandes.',
			'actions' => '<a href="#form-academia" class="btn-primary">Unirme a la lista de espera</a>',
		)
	);
	?>
	<section class="section bg-white">
		<div class="container-it grid gap-14 lg:grid-cols-12">
			<div class="min-w-0 lg:col-span-7">
				<div class="prose prose-lg prose-slate max-w-none prose-headings:font-bold prose-headings:text-indark prose-strong:text-indark prose-li:marker:text-inblue">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="lg:col-span-5">
				<div id="form-academia" class="card scroll-mt-28 p-8 shadow-xl lg:sticky lg:top-28">
					<span class="flex size-12 items-center justify-center rounded-xl bg-indark text-white"><?php echo it_icon( 'academic-cap', 'size-6' ); // phpcs:ignore ?></span>
					<h2 class="mt-5 text-2xl font-bold text-indark">Únete a la lista de espera</h2>
					<p class="mt-2 text-slate-600">Te avisaremos primero cuando abramos inscripciones, con beneficios para los primeros inscritos.</p>

					<div class="mt-6">
						<?php it_lead_notice( 'academia' ); ?>
						<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="space-y-5" data-lead-form>
							<?php it_lead_hidden_fields( 'academia' ); ?>
							<div>
								<label for="ac-nombre" class="field-label">Nombre</label>
								<input id="ac-nombre" type="text" name="it_nombre" autocomplete="name" class="field-input">
							</div>
							<div>
								<label for="ac-email" class="field-label">Correo *</label>
								<input id="ac-email" type="email" name="it_email" required autocomplete="email" class="field-input" placeholder="tu@empresa.com">
							</div>
							<div>
								<label for="ac-empresa" class="field-label">Empresa (opcional)</label>
								<input id="ac-empresa" type="text" name="it_empresa" autocomplete="organization" class="field-input">
							</div>
							<div>
								<label for="ac-interes" class="field-label">¿Qué te interesa aprender?</label>
								<select id="ac-interes" name="it_interes" class="field-input">
									<?php foreach ( $it_topics as $it_topic ) : ?>
										<option><?php echo esc_html( $it_topic ); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<?php it_consent_field( 'ac-consentimiento' ); ?>
							<button type="submit" class="btn-primary w-full">Quiero acceso anticipado</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	get_template_part(
		'template-parts/components/faq',
		null,
		array(
			'post_id' => get_the_ID(),
			'title'   => 'Preguntas sobre la Academia',
		)
	);
endwhile;

get_footer();

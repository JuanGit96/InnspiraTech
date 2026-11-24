<?php
/**
 * Página Contacto (/contacto/) — antes contacto.html, ahora con formulario funcional.
 * WordPress la elige automáticamente por el slug "contacto" (page-{slug}.php).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- solo preselecciona una opción.
$it_preselect = isset( $_GET['it_servicio'] ) ? sanitize_title( wp_unslash( $_GET['it_servicio'] ) ) : '';

$it_services = get_posts(
	array(
		'post_type'      => 'servicio',
		'posts_per_page' => 50,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	)
);
$it_plans    = get_posts(
	array(
		'post_type'      => 'plan',
		'posts_per_page' => 10,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	)
);

$it_grouped = array();
foreach ( $it_services as $it_service ) {
	$it_terms                    = wp_get_post_terms( $it_service->ID, 'linea_servicio', array( 'fields' => 'names' ) );
	$it_group                    = ( ! is_wp_error( $it_terms ) && $it_terms ) ? $it_terms[0] : 'Servicios';
	$it_grouped[ $it_group ][] = $it_service;
}

$it_whatsapp = it_whatsapp_url( 'Hola InnspiraTech, quiero cotizar un proyecto.' );
$it_steps    = array(
	'Revisamos tu requerimiento y el contexto de tu empresa.',
	'Agendamos una llamada de diagnóstico sin costo.',
	'Recibes una propuesta con alcance, tiempos e inversión.',
);

while ( have_posts() ) :
	the_post();
	?>
	<section class="relative isolate overflow-hidden bg-slate-50 pt-32 pb-20 lg:pt-40 lg:pb-28">
		<div aria-hidden="true" class="absolute -top-40 -left-40 -z-10 size-[30rem] rounded-full bg-blue-100 opacity-70 blur-3xl"></div>
		<div class="container-it">
			<div class="grid items-start gap-12 lg:grid-cols-2">
				<div class="space-y-6 lg:pr-12">
					<?php it_breadcrumbs(); ?>
					<p class="eyebrow text-xs tracking-wider uppercase">Contacto global</p>
					<h1 class="text-4xl font-extrabold tracking-tight text-indark sm:text-5xl">Hablemos de tu próximo hito técnico</h1>
					<div class="text-lg leading-relaxed text-slate-600 [&_p]:mb-4"><?php the_content(); ?></div>

					<ul class="space-y-4 border-t border-slate-200 pt-6" role="list">
						<li class="flex items-center gap-4">
							<span class="flex size-11 items-center justify-center rounded-lg bg-blue-50 text-inblue"><?php echo it_icon( 'mail', 'size-5' ); // phpcs:ignore ?></span>
							<span>
								<span class="block text-sm font-semibold text-indark">Canal de atención</span>
								<a class="text-sm text-slate-600 hover:text-inblue" href="mailto:<?php echo esc_attr( it_opt( 'email' ) ); ?>"><?php echo esc_html( it_opt( 'email' ) ); ?></a>
							</span>
						</li>
						<?php if ( $it_whatsapp ) : ?>
							<li class="flex items-center gap-4">
								<span class="flex size-11 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600"><?php echo it_icon( 'chat', 'size-5' ); // phpcs:ignore ?></span>
								<span>
									<span class="block text-sm font-semibold text-indark">WhatsApp</span>
									<a class="text-sm text-slate-600 hover:text-inblue" href="<?php echo esc_url( $it_whatsapp ); ?>" target="_blank" rel="noopener">Escríbenos directamente</a>
								</span>
							</li>
						<?php endif; ?>
						<?php if ( it_opt( 'ubicacion' ) ) : ?>
							<li class="flex items-center gap-4">
								<span class="flex size-11 items-center justify-center rounded-lg bg-blue-50 text-inblue"><?php echo it_icon( 'map-pin', 'size-5' ); // phpcs:ignore ?></span>
								<span class="text-sm text-slate-600"><?php echo esc_html( it_opt( 'ubicacion' ) ); ?></span>
							</li>
						<?php endif; ?>
					</ul>

					<div class="rounded-2xl border border-slate-200 bg-white p-6">
						<h2 class="font-bold text-indark">¿Qué pasa después de enviar el formulario?</h2>
						<ol class="mt-4 space-y-3" role="list">
							<?php foreach ( $it_steps as $it_i => $it_step ) : ?>
								<li class="flex gap-3 text-sm text-slate-600">
									<span class="flex size-6 shrink-0 items-center justify-center rounded-full bg-indark text-xs font-bold text-white"><?php echo esc_html( (string) ( $it_i + 1 ) ); ?></span>
									<?php echo esc_html( $it_step ); ?>
								</li>
							<?php endforeach; ?>
						</ol>
					</div>
				</div>

				<div id="form-contacto" class="relative scroll-mt-28 rounded-2xl border border-slate-100 bg-white p-8 shadow-xl lg:p-10">
					<h2 class="mb-6 text-2xl font-bold text-indark">Cuéntanos sobre tu proyecto</h2>
					<?php it_lead_notice( 'contacto' ); ?>

					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="space-y-6" data-lead-form>
						<?php it_lead_hidden_fields( 'contacto' ); ?>

						<div class="grid gap-6 sm:grid-cols-2">
							<div>
								<label for="it-nombre" class="field-label">Nombre completo *</label>
								<input id="it-nombre" type="text" name="it_nombre" required autocomplete="name" class="field-input" placeholder="Juan Pérez">
							</div>
							<div>
								<label for="it-empresa" class="field-label">Empresa / organización</label>
								<input id="it-empresa" type="text" name="it_empresa" autocomplete="organization" class="field-input" placeholder="Nombre de tu negocio">
							</div>
						</div>

						<div class="grid gap-6 sm:grid-cols-2">
							<div>
								<label for="it-email" class="field-label">Correo corporativo *</label>
								<input id="it-email" type="email" name="it_email" required autocomplete="email" class="field-input" placeholder="ejemplo@empresa.com">
							</div>
							<div>
								<label for="it-telefono" class="field-label">Teléfono / WhatsApp</label>
								<input id="it-telefono" type="tel" name="it_telefono" autocomplete="tel" class="field-input" placeholder="+57 300 000 0000">
							</div>
						</div>

						<div class="grid gap-6 sm:grid-cols-2">
							<div>
								<label for="it-tamano" class="field-label">Tamaño de la empresa</label>
								<select id="it-tamano" name="it_tamano" class="field-input">
									<option value="">Selecciona…</option>
									<option>Emprendimiento / startup</option>
									<option>Pyme (1–50 personas)</option>
									<option>Mediana (51–250 personas)</option>
									<option>Grande (más de 250 personas)</option>
								</select>
							</div>
							<div>
								<label for="it-presupuesto" class="field-label">Presupuesto estimado</label>
								<select id="it-presupuesto" name="it_presupuesto" class="field-input">
									<option value="">Por definir</option>
									<option>Menos de USD 1.000</option>
									<option>USD 1.000 – 5.000</option>
									<option>USD 5.000 – 20.000</option>
									<option>Más de USD 20.000</option>
								</select>
							</div>
						</div>

						<div>
							<label for="it-servicio" class="field-label">¿Qué solución necesitas?</label>
							<select id="it-servicio" name="it_servicio" class="field-input">
								<option value="">Selecciona un servicio…</option>
								<?php foreach ( $it_grouped as $it_group_name => $it_items ) : ?>
									<optgroup label="<?php echo esc_attr( $it_group_name ); ?>">
										<?php foreach ( $it_items as $it_item ) : ?>
											<option value="<?php echo esc_attr( it_plain( get_the_title( $it_item ) ) ); ?>" <?php selected( $it_preselect, $it_item->post_name ); ?>><?php echo esc_html( get_the_title( $it_item ) ); ?></option>
										<?php endforeach; ?>
									</optgroup>
								<?php endforeach; ?>
								<?php if ( $it_plans ) : ?>
									<optgroup label="Planes Fast-Track">
										<?php foreach ( $it_plans as $it_plan ) : ?>
											<option value="<?php echo esc_attr( 'Plan: ' . it_plain( get_the_title( $it_plan ) ) ); ?>" <?php selected( $it_preselect, $it_plan->post_name ); ?>><?php echo esc_html( get_the_title( $it_plan ) . ' (' . it_meta( $it_plan->ID, 'precio' ) . ')' ); ?></option>
										<?php endforeach; ?>
									</optgroup>
								<?php endif; ?>
								<option value="Consultoría tecnológica estratégica">No estoy seguro / consultoría estratégica</option>
							</select>
						</div>

						<div>
							<label for="it-mensaje" class="field-label">Alcance o detalles del requerimiento *</label>
							<textarea id="it-mensaje" name="it_mensaje" rows="5" required class="field-input" placeholder="Cuéntanos sobre tus objetivos, la tecnología actual, integraciones o tiempos estimados…"></textarea>
						</div>

						<?php it_consent_field( 'it-consentimiento-contacto' ); ?>

						<button type="submit" class="btn-primary w-full py-4 text-lg">Enviar requerimiento técnico</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php
endwhile;

get_template_part( 'template-parts/components/clients' );

get_footer();

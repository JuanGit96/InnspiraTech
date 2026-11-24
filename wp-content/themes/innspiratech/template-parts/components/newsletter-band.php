<?php
/**
 * Banda de suscripción para páginas del blog.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="bg-slate-50 py-20" aria-labelledby="boletin-titulo">
	<div class="container-it">
		<div class="grid items-center gap-10 rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-12 lg:grid-cols-2">
			<div>
				<p class="eyebrow">Boletín gratuito</p>
				<h2 id="boletin-titulo" class="section-title mt-4">Aprende a usar la tecnología a favor de tu empresa</h2>
				<p class="section-lead">Guías prácticas de inteligencia artificial, MCP, software y marketing digital. Contenido educativo, sin spam.</p>
			</div>
			<div>
				<?php get_template_part( 'template-parts/components/newsletter-form', null, array( 'id' => 'form-newsletter-contenido' ) ); ?>
			</div>
		</div>
	</div>
</section>

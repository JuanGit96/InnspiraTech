<?php
/**
 * Portada: tecnologías (tomadas de la plantilla original + stack de IA).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_stack = array( 'Model Context Protocol', 'Claude', 'OpenAI', 'Gemini', 'Python', 'Golang', 'PHP', 'Laravel', 'Phalcon', 'Node.js', 'React', 'Flutter', 'Swift', 'Kotlin', 'WordPress', 'WooCommerce', 'Magento 2', 'VTEX', 'Shopify Plus' );
?>
<section class="border-y border-slate-100 bg-slate-50 py-16" aria-labelledby="stack-titulo">
	<div class="container-it">
		<div class="grid gap-8 lg:grid-cols-12 lg:items-center">
			<div class="lg:col-span-4">
				<h2 id="stack-titulo" class="text-2xl font-bold text-indark">Agnósticos tecnológicos</h2>
				<p class="mt-3 text-slate-600">Usamos la herramienta correcta para cada problema, no la que está de moda.</p>
			</div>
			<ul class="flex flex-wrap gap-2.5 lg:col-span-8" role="list">
				<?php foreach ( $it_stack as $it_tech ) : ?>
					<li class="rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700"><?php echo esc_html( $it_tech ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>

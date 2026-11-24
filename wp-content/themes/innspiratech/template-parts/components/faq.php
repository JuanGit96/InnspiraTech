<?php
/**
 * Preguntas frecuentes (acordeón nativo <details>, sin JS).
 * Args: post_id, title, layout ('split' | 'stacked').
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_post_id = (int) ( $args['post_id'] ?? get_the_ID() );
$it_faqs    = $it_post_id ? it_faq_items( $it_post_id ) : array();

if ( ! $it_faqs ) {
	return;
}

$it_title   = $args['title'] ?? 'Preguntas frecuentes';
$it_stacked = 'stacked' === ( $args['layout'] ?? 'split' );

ob_start();
?>
<div class="divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white">
	<?php foreach ( $it_faqs as $it_faq ) : ?>
		<details class="faq-item group p-6">
			<summary class="flex cursor-pointer list-none items-start justify-between gap-6 text-left">
				<h3 class="text-lg font-semibold text-indark"><?php echo esc_html( $it_faq['titulo'] ); ?></h3>
				<span class="faq-icon mt-0.5 flex size-7 shrink-0 items-center justify-center rounded-full bg-blue-50 text-inblue transition-transform duration-300"><?php echo it_icon( 'plus', 'size-4' ); // phpcs:ignore ?></span>
			</summary>
			<p class="mt-4 leading-relaxed text-slate-600"><?php echo esc_html( $it_faq['texto'] ); ?></p>
		</details>
	<?php endforeach; ?>
</div>
<?php
$it_list = ob_get_clean();

if ( $it_stacked ) :
	?>
	<section class="mt-16" aria-labelledby="faq-titulo">
		<h2 id="faq-titulo" class="mb-6 text-2xl font-bold text-indark sm:text-3xl"><?php echo esc_html( $it_title ); ?></h2>
		<?php echo $it_list; // phpcs:ignore ?>
	</section>
<?php else : ?>
	<section id="preguntas-frecuentes" class="section bg-slate-50" aria-labelledby="faq-titulo">
		<div class="container-it grid gap-12 lg:grid-cols-12">
			<div class="lg:col-span-4">
				<p class="eyebrow">FAQ</p>
				<h2 id="faq-titulo" class="section-title mt-4"><?php echo esc_html( $it_title ); ?></h2>
				<p class="section-lead">¿No encuentras tu respuesta? <a class="font-semibold text-inblue hover:underline" href="<?php echo esc_url( it_contact_url() ); ?>">Escríbenos</a> y te respondemos personalmente.</p>
			</div>
			<div class="lg:col-span-8"><?php echo $it_list; // phpcs:ignore ?></div>
		</div>
	</section>
	<?php
endif;

<?php
/**
 * Portada: últimos artículos del blog.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_posts = get_posts(
	array(
		'posts_per_page'      => 3,
		'no_found_rows'       => true,
		'ignore_sticky_posts' => true,
	)
);

if ( ! $it_posts ) {
	return;
}
?>
<section class="section bg-white" aria-labelledby="blog-titulo">
	<div class="container-it">
		<div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
			<div class="max-w-2xl">
				<p class="eyebrow">Blog y recursos gratuitos</p>
				<h2 id="blog-titulo" class="section-title mt-4">Aprende a sacarle provecho a la tecnología</h2>
				<p class="section-lead">Guías prácticas sobre IA, software y transformación digital para líderes de empresas de todos los tamaños.</p>
			</div>
			<a href="<?php echo esc_url( it_blog_url() ); ?>" class="btn-outline shrink-0">
				Ver todos los artículos <?php echo it_icon( 'arrow-right', 'size-4' ); // phpcs:ignore ?>
			</a>
		</div>

		<div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal>
			<?php
			foreach ( $it_posts as $it_post ) {
				get_template_part( 'template-parts/components/post-card', null, array( 'post' => $it_post ) );
			}
			?>
		</div>
	</div>
</section>

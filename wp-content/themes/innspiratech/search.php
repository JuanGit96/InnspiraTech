<?php
/**
 * Resultados de búsqueda (noindex vía el plugin SEO).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

global $wp_query;
$it_total  = (int) $wp_query->found_posts;
$it_labels = array(
	'post'     => 'Artículo',
	'servicio' => 'Servicio',
	'page'     => 'Página',
);

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'eyebrow' => 'Búsqueda',
		'title'   => sprintf( 'Resultados para “%s”', get_search_query( false ) ),
		'lead'    => 1 === $it_total ? '1 resultado encontrado' : sprintf( '%d resultados encontrados', $it_total ),
		'dark'    => false,
	)
);
?>
<section class="section bg-slate-50">
	<div class="container-it">
		<div class="mx-auto mb-12 max-w-2xl"><?php get_search_form(); ?></div>

		<?php if ( have_posts() ) : ?>
			<div class="mx-auto max-w-3xl space-y-4">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article class="card relative p-6 hover:border-blue-200 hover:shadow-lg">
						<p class="text-xs font-bold tracking-wide text-inblue uppercase"><?php echo esc_html( $it_labels[ get_post_type() ] ?? 'Contenido' ); ?></p>
						<h2 class="mt-2 text-xl font-bold text-indark"><a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0"><?php the_title(); ?></a></h2>
						<p class="mt-2 text-slate-600"><?php echo esc_html( get_the_excerpt() ); ?></p>
					</article>
				<?php endwhile; ?>
			</div>
			<?php it_pagination(); ?>
		<?php else : ?>
			<div class="mx-auto max-w-xl text-center">
				<p class="text-lg text-slate-600">No encontramos resultados. Prueba con otras palabras o explora:</p>
				<div class="mt-6 flex flex-wrap justify-center gap-3">
					<a class="btn-outline" href="<?php echo esc_url( get_post_type_archive_link( 'servicio' ) ); ?>">Servicios</a>
					<a class="btn-outline" href="<?php echo esc_url( it_blog_url() ); ?>">Blog</a>
					<a class="btn-dark" href="<?php echo esc_url( it_contact_url() ); ?>">Contacto</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

<?php
/**
 * Página de autor (/autor/{slug}/).
 *
 * Existe por una razón de posicionamiento: los artículos los firma una persona
 * identificada, y tanto Google como los modelos de lenguaje buscan a quién
 * pertenece esa firma antes de decidir si citan la fuente.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$it_author = get_queried_object();
$it_id     = (int) $it_author->ID;
$it_cargo  = (string) get_user_meta( $it_id, 'it_cargo', true );
$it_bio    = (string) get_the_author_meta( 'description', $it_id );
$it_web    = (string) get_the_author_meta( 'user_url', $it_id );
$it_total  = (int) count_user_posts( $it_id, 'post', true );
?>
<section class="relative isolate overflow-hidden bg-indark pt-32 pb-16 text-white lg:pt-40">
	<div aria-hidden="true" class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,rgba(37,99,235,0.35),transparent_60%)]"></div>

	<div class="container-it">
		<div class="mx-auto flex max-w-3xl flex-col items-center text-center">
			<?php echo get_avatar( $it_id, 112, '', '', array( 'class' => 'size-28 rounded-full ring-4 ring-white/10' ) ); ?>

			<p class="eyebrow mt-6 text-cyan-300">Autor</p>
			<h1 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl"><?php echo esc_html( get_the_author_meta( 'display_name', $it_id ) ); ?></h1>

			<?php if ( $it_cargo ) : ?>
				<p class="mt-2 font-semibold text-cyan-300"><?php echo esc_html( $it_cargo ); ?></p>
			<?php endif; ?>

			<?php if ( $it_bio ) : ?>
				<p class="it-speakable mt-5 text-lg leading-relaxed text-slate-300"><?php echo esc_html( $it_bio ); ?></p>
			<?php endif; ?>

			<div class="mt-8 flex flex-wrap items-center justify-center gap-4 text-sm">
				<span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 font-medium text-slate-200 ring-1 ring-white/10">
					<?php echo it_icon( 'book', 'size-4 text-cyan-300' ); // phpcs:ignore ?>
					<?php echo esc_html( sprintf( _n( '%s artículo publicado', '%s artículos publicados', $it_total, 'innspiratech' ), number_format_i18n( $it_total ) ) ); ?>
				</span>

				<?php if ( $it_web ) : ?>
					<a href="<?php echo esc_url( $it_web ); ?>" rel="me" class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 font-medium text-slate-200 ring-1 ring-white/10 transition hover:bg-white/10">
						<?php echo it_icon( 'link', 'size-4 text-cyan-300' ); // phpcs:ignore ?>Sitio web
					</a>
				<?php endif; ?>

				<?php foreach ( it_socials() as $it_social ) : ?>
					<a href="<?php echo esc_url( $it_social['url'] ); ?>" rel="me noopener" target="_blank" class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 font-medium text-slate-200 ring-1 ring-white/10 transition hover:bg-white/10">
						<?php echo it_icon( $it_social['icono'], 'size-4 text-cyan-300' ); // phpcs:ignore ?><?php echo esc_html( $it_social['nombre'] ); ?>
					</a>
				<?php endforeach; ?>
			</div>

			<a href="<?php echo esc_url( it_contact_url() ); ?>" class="btn-primary mt-9">
				Hablar de un proyecto
				<?php echo it_icon( 'arrow-right', 'size-5' ); // phpcs:ignore ?>
			</a>
		</div>
	</div>
</section>

<section class="section bg-slate-50" aria-label="Artículos del autor">
	<div class="container-it">
		<?php if ( have_posts() ) : ?>
			<h2 class="section-title">Artículos</h2>

			<div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/components/post-card', null, array( 'post' => get_post() ) );
				endwhile;
				?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => 'Anterior',
					'next_text' => 'Siguiente',
					'class'     => 'mt-14',
				)
			);
			?>
		<?php else : ?>
			<p class="text-center text-slate-600">Todavía no hay artículos publicados de este autor.</p>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part( 'template-parts/components/cta' );
get_footer();

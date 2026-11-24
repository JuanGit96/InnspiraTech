<?php
/**
 * Artículo del blog: índice de contenidos, datos de autor (E-E-A-T),
 * FAQ, llamado a un servicio relacionado y artículos relacionados.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$it_post_id  = get_the_ID();
	$it_content  = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', get_the_content() ) );
	$it_toc      = it_toc_from_html( $it_content );
	$it_cat      = it_primary_category( $it_post_id );
	$it_author   = (int) get_post_field( 'post_author', $it_post_id );
	$it_name     = get_the_author_meta( 'display_name', $it_author );
	$it_words    = preg_split( '/\s+/u', trim( $it_name ) );
	$it_initials = mb_strtoupper( mb_substr( $it_words[0] ?? '', 0, 1 ) . mb_substr( $it_words[1] ?? '', 0, 1 ) );
	$it_updated  = ( (int) get_the_modified_time( 'U' ) - (int) get_the_time( 'U' ) ) > DAY_IN_SECONDS;
	$it_service  = (int) it_meta( $it_post_id, 'servicio_relacionado' );
	?>
	<article>
		<header class="bg-white pt-32 pb-12 lg:pt-40">
			<div class="container-it">
				<div class="mx-auto max-w-4xl">
					<?php it_breadcrumbs(); ?>

					<?php if ( $it_cat ) : ?>
						<a href="<?php echo esc_url( get_category_link( $it_cat ) ); ?>" class="eyebrow transition hover:bg-blue-100"><?php echo esc_html( $it_cat->name ); ?></a>
					<?php endif; ?>

					<h1 class="mt-5 text-4xl leading-tight font-extrabold tracking-tight text-indark sm:text-5xl"><?php the_title(); ?></h1>

					<?php if ( has_excerpt() ) : ?>
						<p class="it-speakable mt-5 text-xl leading-relaxed text-slate-600"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>

					<div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 border-t border-slate-100 pt-6 text-sm text-slate-500">
						<span class="flex items-center gap-3">
							<span class="flex size-10 items-center justify-center rounded-full bg-indark text-sm font-bold text-white" aria-hidden="true"><?php echo esc_html( $it_initials ); ?></span>
							<span>
								<span class="block font-semibold text-indark"><?php echo esc_html( $it_name ); ?></span>
								<span class="block">Autor</span>
							</span>
						</span>
						<span class="flex items-center gap-1.5">
							<?php echo it_icon( 'calendar', 'size-4' ); // phpcs:ignore ?>
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">Publicado el <?php echo esc_html( get_the_date() ); ?></time>
						</span>
						<?php if ( $it_updated ) : ?>
							<span class="flex items-center gap-1.5">
								<?php echo it_icon( 'refresh', 'size-4' ); // phpcs:ignore ?>
								<time datetime="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>">Actualizado el <?php echo esc_html( get_the_modified_date() ); ?></time>
							</span>
						<?php endif; ?>
						<span class="flex items-center gap-1.5"><?php echo it_icon( 'clock', 'size-4' ); // phpcs:ignore ?><?php echo esc_html( it_reading_time( $it_post_id ) ); ?></span>
					</div>
				</div>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="container-it mt-10">
					<div class="mx-auto max-w-5xl">
						<?php
						the_post_thumbnail(
							'full',
							array(
								'class'         => 'aspect-video w-full rounded-3xl object-cover shadow-xl',
								'loading'       => 'eager',
								'fetchpriority' => 'high',
							)
						);
						?>
					</div>
				</figure>
			<?php endif; ?>
		</header>

		<div class="bg-white pb-20">
			<div class="container-it">
				<div class="mx-auto grid max-w-6xl gap-12 lg:grid-cols-12">
					<aside class="hidden lg:col-span-3 lg:block">
						<div class="sticky top-28 space-y-10">
							<?php if ( $it_toc ) : ?>
								<nav class="toc" aria-label="Índice del artículo">
									<p class="text-xs font-bold tracking-widest text-slate-400 uppercase">En este artículo</p>
									<ol class="mt-4 space-y-1 border-l border-slate-200 text-sm" role="list">
										<?php foreach ( $it_toc as $it_item ) : ?>
											<li><a href="#<?php echo esc_attr( $it_item['id'] ); ?>" class="-ml-px block border-l border-transparent py-1 pl-4 text-slate-600 transition hover:border-inblue hover:text-inblue"><?php echo esc_html( $it_item['text'] ); ?></a></li>
										<?php endforeach; ?>
									</ol>
								</nav>
							<?php endif; ?>
							<?php get_template_part( 'template-parts/components/share' ); ?>
						</div>
					</aside>

					<div class="min-w-0 lg:col-span-9">
						<?php if ( $it_toc ) : ?>
							<details class="mb-10 rounded-2xl border border-slate-200 bg-slate-50 p-5 lg:hidden">
								<summary class="cursor-pointer font-semibold text-indark">En este artículo</summary>
								<ol class="mt-4 list-decimal space-y-2 pl-5 text-slate-600">
									<?php foreach ( $it_toc as $it_item ) : ?>
										<li><a class="hover:text-inblue" href="#<?php echo esc_attr( $it_item['id'] ); ?>"><?php echo esc_html( $it_item['text'] ); ?></a></li>
									<?php endforeach; ?>
								</ol>
							</details>
						<?php endif; ?>

						<div class="prose prose-lg prose-slate max-w-none prose-headings:scroll-mt-28 prose-headings:font-bold prose-headings:text-indark prose-a:font-semibold prose-a:text-inblue prose-a:no-underline prose-a:hover:underline prose-strong:text-indark prose-li:marker:text-inblue prose-img:rounded-2xl">
							<?php echo $it_content; // phpcs:ignore WordPress.Security.EscapeOutput -- contenido filtrado por the_content. ?>
						</div>

						<?php wp_link_pages(); ?>

						<?php
						get_template_part(
							'template-parts/components/faq',
							null,
							array(
								'post_id' => $it_post_id,
								'title'   => 'Preguntas frecuentes',
								'layout'  => 'stacked',
							)
						);
						?>

						<?php $it_tags = get_the_tags(); ?>
						<?php if ( $it_tags ) : ?>
							<div class="mt-12 flex flex-wrap items-center gap-2">
								<span class="text-sm font-semibold text-slate-500">Etiquetas:</span>
								<?php foreach ( $it_tags as $it_tag ) : ?>
									<a href="<?php echo esc_url( get_tag_link( $it_tag ) ); ?>" rel="tag" class="rounded-full bg-slate-100 px-3 py-1 text-sm text-slate-600 transition hover:bg-blue-50 hover:text-inblue">#<?php echo esc_html( $it_tag->name ); ?></a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

						<?php if ( $it_service && 'publish' === get_post_status( $it_service ) ) : ?>
							<aside class="relative isolate mt-12 overflow-hidden rounded-2xl bg-indark p-8 text-white sm:p-10">
								<div aria-hidden="true" class="absolute -top-20 -right-20 -z-10 size-72 rounded-full bg-inblue opacity-30 blur-3xl"></div>
								<p class="eyebrow-dark">¿Necesitas ayuda con esto?</p>
								<p class="mt-4 text-2xl font-bold"><?php echo esc_html( get_the_title( $it_service ) ); ?></p>
								<p class="mt-2 max-w-2xl text-slate-300"><?php echo esc_html( get_the_excerpt( $it_service ) ); ?></p>
								<div class="mt-6 flex flex-wrap gap-3">
									<a class="btn-primary" href="<?php echo esc_url( get_permalink( $it_service ) ); ?>">Conocer el servicio</a>
									<a class="btn-outline-light" href="<?php echo esc_url( it_contact_url( get_post_field( 'post_name', $it_service ) ) ); ?>">Hablar con un experto</a>
								</div>
							</aside>
						<?php endif; ?>

						<div class="mt-12 flex gap-5 rounded-2xl border border-slate-200 bg-slate-50 p-6">
							<span class="flex size-14 shrink-0 items-center justify-center rounded-full bg-indark text-lg font-bold text-white" aria-hidden="true"><?php echo esc_html( $it_initials ); ?></span>
							<div>
								<p class="text-xs font-bold tracking-widest text-slate-400 uppercase">Escrito por</p>
								<p class="mt-1 text-lg font-bold text-indark">
									<a class="hover:text-inblue" href="<?php echo esc_url( get_author_posts_url( $it_author ) ); ?>" rel="author"><?php echo esc_html( $it_name ); ?></a>
								</p>
								<?php $it_cargo = (string) get_user_meta( $it_author, 'it_cargo', true ); ?>
								<?php if ( $it_cargo ) : ?>
									<p class="text-sm font-semibold text-inblue"><?php echo esc_html( $it_cargo ); ?></p>
								<?php endif; ?>
								<?php if ( get_the_author_meta( 'description', $it_author ) ) : ?>
									<p class="mt-2 leading-relaxed text-slate-600"><?php echo esc_html( get_the_author_meta( 'description', $it_author ) ); ?></p>
								<?php endif; ?>
							</div>
						</div>

						<div class="mt-10 lg:hidden"><?php get_template_part( 'template-parts/components/share' ); ?></div>

						<?php
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</article>

	<?php
	$it_related = get_posts(
		array(
			'posts_per_page'      => 3,
			'post__not_in'        => array( $it_post_id ),
			'category__in'        => $it_cat ? array( $it_cat->term_id ) : array(),
			'no_found_rows'       => true,
			'ignore_sticky_posts' => true,
		)
	);
	if ( count( $it_related ) < 3 ) {
		$it_related = array_merge(
			$it_related,
			get_posts(
				array(
					'posts_per_page'      => 3 - count( $it_related ),
					'post__not_in'        => array_merge( array( $it_post_id ), wp_list_pluck( $it_related, 'ID' ) ),
					'no_found_rows'       => true,
					'ignore_sticky_posts' => true,
				)
			)
		);
	}
	?>
	<?php if ( $it_related ) : ?>
		<section class="section border-t border-slate-100 bg-slate-50" aria-labelledby="relacionados-titulo">
			<div class="container-it">
				<h2 id="relacionados-titulo" class="section-title">Sigue aprendiendo</h2>
				<div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
					<?php
					foreach ( $it_related as $it_rel ) {
						get_template_part( 'template-parts/components/post-card', null, array( 'post' => $it_rel ) );
					}
					?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php
	get_template_part( 'template-parts/components/newsletter-band' );
endwhile;

get_footer();

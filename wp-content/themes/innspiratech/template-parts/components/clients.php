<?php
/**
 * Logos de clientes: en escala de grises y semitransparentes; al pasar el
 * mouse (o enfocar con teclado) recuperan el color y aparece su dominio.
 *
 * Se administran en el menú "Clientes" del admin (logo = imagen destacada).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_clients = get_posts(
	array(
		'post_type'      => 'cliente',
		'posts_per_page' => 24,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'title'      => 'ASC',
		),
		'no_found_rows'  => true,
	)
);

if ( ! $it_clients ) {
	return;
}

$it_title = $args['title'] ?? 'Empresas que confían en InnspiraTech';
?>
<section id="clientes" class="border-y border-slate-100 bg-white py-14 lg:py-16" aria-labelledby="clientes-titulo">
	<div class="container-it">
		<h2 id="clientes-titulo" class="text-center text-sm font-semibold tracking-widest text-slate-500 uppercase"><?php echo esc_html( $it_title ); ?></h2>

		<ul class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6" role="list">
			<?php
			foreach ( $it_clients as $it_client ) :
				$it_url    = (string) it_meta( $it_client->ID, 'url' );
				$it_domain = it_domain_from_url( $it_url );
				$it_name   = get_the_title( $it_client );
				$it_tag    = $it_url ? 'a' : 'div';
				?>
				<li>
					<<?php echo $it_tag; // phpcs:ignore ?>
						<?php if ( $it_url ) : ?>
							href="<?php echo esc_url( $it_url ); ?>" target="_blank" rel="nofollow noopener"
						<?php endif; ?>
						class="group relative flex h-28 flex-col items-center justify-center rounded-2xl border border-transparent px-5 transition duration-300 hover:border-slate-200 hover:bg-slate-50 hover:shadow-sm focus-visible:border-slate-200 focus-visible:ring-2 focus-visible:ring-inblue/40 focus-visible:outline-none"
						title="<?php echo esc_attr( $it_name ); ?>">
						<?php if ( has_post_thumbnail( $it_client ) ) : ?>
							<?php
							echo get_the_post_thumbnail(
								$it_client,
								'medium',
								array(
									'class'   => 'max-h-12 w-auto max-w-full object-contain opacity-60 grayscale transition duration-300 group-hover:-translate-y-2 group-hover:opacity-100 group-hover:grayscale-0 group-focus-visible:-translate-y-2 group-focus-visible:opacity-100 group-focus-visible:grayscale-0',
									'alt'     => sprintf( 'Logo de %s', $it_name ),
									'loading' => 'lazy',
								)
							);
							?>
						<?php else : ?>
							<span class="text-center text-lg font-extrabold tracking-tight text-slate-400 transition duration-300 group-hover:-translate-y-2 group-hover:text-indark"><?php echo esc_html( $it_name ); ?></span>
						<?php endif; ?>

						<?php if ( $it_domain ) : ?>
							<span class="pointer-events-none absolute bottom-3 translate-y-1 text-xs font-semibold text-inblue opacity-0 transition duration-300 group-hover:translate-y-0 group-hover:opacity-100 group-focus-visible:translate-y-0 group-focus-visible:opacity-100"><?php echo esc_html( $it_domain ); ?></span>
						<?php endif; ?>
					</<?php echo $it_tag; // phpcs:ignore ?>>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

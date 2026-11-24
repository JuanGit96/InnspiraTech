<?php
/**
 * Pie de página global.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_socials  = it_socials();
$it_email    = (string) it_opt( 'email' );
$it_whatsapp = it_whatsapp_url( 'Hola InnspiraTech, quiero información sobre sus servicios.' );
$it_menu_css = 'mt-5 space-y-3 text-sm [&_a]:transition [&_a:hover]:text-white';
?>
</main>

<footer class="bg-indark text-slate-400">
	<h2 class="sr-only">Información de InnspiraTech</h2>
	<div class="container-it py-16 lg:py-20">
		<div class="grid gap-12 lg:grid-cols-12">
			<div class="lg:col-span-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="inline-block">
					<?php it_logo( 'light', 'h-8 w-auto' ); ?>
				</a>
				<p class="mt-6 max-w-sm leading-relaxed"><?php echo esc_html( it_opt( 'footer_texto' ) ); ?></p>

				<ul class="mt-6 space-y-3 text-sm" role="list">
					<?php if ( $it_email ) : ?>
						<li><a class="inline-flex items-center gap-3 transition hover:text-white" href="mailto:<?php echo esc_attr( $it_email ); ?>"><?php echo it_icon( 'mail', 'size-5 text-blue-400' ); // phpcs:ignore ?><?php echo esc_html( $it_email ); ?></a></li>
					<?php endif; ?>
					<?php if ( $it_whatsapp ) : ?>
						<li><a class="inline-flex items-center gap-3 transition hover:text-white" href="<?php echo esc_url( $it_whatsapp ); ?>" target="_blank" rel="noopener"><?php echo it_icon( 'chat', 'size-5 text-blue-400' ); // phpcs:ignore ?>WhatsApp</a></li>
					<?php endif; ?>
					<?php if ( it_opt( 'ubicacion' ) ) : ?>
						<li class="inline-flex items-center gap-3"><?php echo it_icon( 'map-pin', 'size-5 text-blue-400' ); // phpcs:ignore ?><?php echo esc_html( it_opt( 'ubicacion' ) ); ?></li>
					<?php endif; ?>
				</ul>

				<?php if ( $it_socials ) : ?>
					<ul class="mt-8 flex flex-wrap gap-3" role="list">
						<?php foreach ( $it_socials as $it_network => $it_social ) : ?>
							<li>
								<a href="<?php echo esc_url( $it_social['url'] ); ?>" target="_blank" rel="noopener me" class="flex size-10 items-center justify-center rounded-lg bg-white/5 text-slate-300 ring-1 ring-white/10 transition hover:bg-inblue hover:text-white">
									<span class="sr-only"><?php echo esc_html( $it_social['label'] ); ?></span>
									<?php echo it_social_icon( $it_network, 'size-5' ); // phpcs:ignore ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>

			<div class="grid gap-10 sm:grid-cols-3 lg:col-span-8">
				<div>
					<p class="text-sm font-semibold tracking-wider text-white uppercase">Servicios</p>
					<?php
					if ( has_nav_menu( 'footer_servicios' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer_servicios',
								'container'      => false,
								'menu_class'     => $it_menu_css,
								'depth'          => 1,
							)
						);
					} else {
						$it_services = get_posts(
							array(
								'post_type'      => 'servicio',
								'posts_per_page' => 10,
								'orderby'        => 'menu_order',
								'order'          => 'ASC',
							)
						);
						echo '<ul class="' . esc_attr( $it_menu_css ) . '">';
						foreach ( $it_services as $it_service ) {
							printf( '<li><a href="%s">%s</a></li>', esc_url( get_permalink( $it_service ) ), esc_html( get_the_title( $it_service ) ) );
						}
						echo '</ul>';
					}
					?>
				</div>

				<div>
					<p class="text-sm font-semibold tracking-wider text-white uppercase">Empresa</p>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_empresa',
							'container'      => false,
							'menu_class'     => $it_menu_css,
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
					?>
				</div>

				<div>
					<p class="text-sm font-semibold tracking-wider text-white uppercase">Recibe contenido gratuito</p>
					<p class="mt-5 text-sm leading-relaxed">Guías prácticas de IA, software y transformación digital para tu empresa. Sin spam.</p>
					<?php
					get_template_part(
						'template-parts/components/newsletter-form',
						null,
						array(
							'dark' => true,
							'id'   => 'form-newsletter',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="border-t border-slate-800">
		<div class="container-it flex flex-col gap-4 py-6 text-sm sm:flex-row sm:items-center sm:justify-between">
			<p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> InnspiraTech. Excelencia en software. Todos los derechos reservados.</p>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'legal',
					'container'      => false,
					'menu_class'     => 'flex flex-wrap gap-x-6 gap-y-2 [&_a]:transition [&_a:hover]:text-white',
					'depth'          => 1,
					'fallback_cb'    => false,
				)
			);
			?>
		</div>
	</div>
</footer>

<?php if ( $it_whatsapp ) : ?>
	<a href="<?php echo esc_url( $it_whatsapp ); ?>" target="_blank" rel="noopener" class="fixed right-5 bottom-5 z-40 inline-flex items-center gap-2 rounded-full bg-emerald-500 px-4 py-3 font-semibold text-white shadow-xl shadow-emerald-600/30 transition hover:-translate-y-0.5 hover:bg-emerald-600" aria-label="Escríbenos por WhatsApp">
		<?php echo it_icon( 'chat', 'size-6' ); // phpcs:ignore ?>
		<span class="hidden sm:inline">WhatsApp</span>
	</a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>

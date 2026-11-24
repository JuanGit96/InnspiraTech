<?php
/**
 * Encabezado global: <head>, navegación fija y menú móvil.
 * Reemplaza el <nav> que se repetía (con variaciones) en cada .html.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_contact_url = it_contact_url();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#contenido">Saltar al contenido</a>

<header id="site-header" class="fixed inset-x-0 top-0 z-50 border-b border-slate-100 bg-white/95 backdrop-blur transition-shadow duration-300" data-header>
	<div class="container-it">
		<div class="flex h-20 items-center justify-between gap-6">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="shrink-0" rel="home">
				<?php it_logo( 'dark', 'h-8 w-auto sm:h-9' ); ?>
			</a>

			<nav class="hidden lg:block" aria-label="Menú principal">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'site-nav flex items-center gap-1',
						'depth'          => 2,
						'walker'         => new IT_Nav_Walker(),
						'fallback_cb'    => 'it_menu_fallback',
					)
				);
				?>
			</nav>

			<div class="flex items-center gap-3">
				<a href="<?php echo esc_url( $it_contact_url ); ?>" class="btn-dark hidden px-5 py-2.5 text-sm sm:inline-flex">Cotizar proyecto</a>
				<button type="button" class="inline-flex size-11 items-center justify-center rounded-lg border border-slate-200 text-indark lg:hidden" aria-controls="menu-movil" aria-expanded="false" aria-label="Abrir menú" data-menu-toggle>
					<span data-icon-open><?php echo it_icon( 'menu', 'size-6' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span>
					<span data-icon-close class="hidden"><?php echo it_icon( 'x', 'size-6' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span>
				</button>
			</div>
		</div>
	</div>

	<div id="menu-movil" class="hidden border-t border-slate-100 bg-white lg:hidden">
		<div class="container-it max-h-[calc(100dvh-5rem)] overflow-y-auto py-6">
			<nav aria-label="Menú móvil">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'mobile-nav space-y-1',
						'depth'          => 2,
						'walker'         => new IT_Nav_Walker(),
						'fallback_cb'    => 'it_menu_fallback',
						'it_variant'     => 'mobile',
					)
				);
				?>
			</nav>
			<a href="<?php echo esc_url( $it_contact_url ); ?>" class="btn-primary mt-6 w-full">Cotizar proyecto</a>
		</div>
	</div>
</header>

<main id="contenido">

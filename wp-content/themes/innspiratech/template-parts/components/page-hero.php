<?php
/**
 * Encabezado de páginas internas.
 * Args: title, lead, eyebrow, kicker (dentro del H1), dark (bool), center (bool), actions (HTML escapado).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it = wp_parse_args(
	$args,
	array(
		'title'   => '',
		'lead'    => '',
		'eyebrow' => '',
		'kicker'  => '',
		'dark'    => true,
		'center'  => false,
		'actions' => '',
	)
);

$it_dark   = (bool) $it['dark'];
$it_center = (bool) $it['center'];
?>
<header class="relative isolate overflow-hidden pt-32 pb-16 lg:pt-40 lg:pb-20 <?php echo $it_dark ? 'bg-indark text-white' : 'border-b border-slate-100 bg-white text-indark'; ?>">
	<?php if ( $it_dark ) : ?>
		<div aria-hidden="true" class="absolute inset-0 -z-10 [background-image:linear-gradient(to_right,rgba(148,163,184,0.07)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.07)_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top,black_30%,transparent_75%)]"></div>
		<div aria-hidden="true" class="absolute -top-32 right-0 -z-10 size-[28rem] rounded-full bg-inblue opacity-25 blur-3xl"></div>
	<?php else : ?>
		<div aria-hidden="true" class="absolute -top-40 right-0 -z-10 size-[28rem] rounded-full bg-blue-100 opacity-70 blur-3xl"></div>
	<?php endif; ?>

	<div class="container-it <?php echo $it_center ? 'text-center' : ''; ?>">
		<?php it_breadcrumbs( $it_dark ); ?>

		<?php if ( $it['eyebrow'] ) : ?>
			<p class="<?php echo $it_dark ? 'eyebrow-dark' : 'eyebrow'; ?>"><?php echo esc_html( $it['eyebrow'] ); ?></p>
		<?php endif; ?>

		<h1 class="mt-5 max-w-4xl text-4xl font-bold tracking-tight sm:text-5xl lg:text-[3.5rem] lg:leading-[1.1] <?php echo $it_center ? 'mx-auto' : ''; ?>">
			<?php if ( $it['kicker'] ) : ?>
				<span class="mb-3 block text-sm font-semibold tracking-widest uppercase sm:text-base <?php echo $it_dark ? 'text-blue-300' : 'text-inblue'; ?>"><?php echo esc_html( $it['kicker'] ); ?></span>
			<?php endif; ?>
			<?php echo esc_html( $it['title'] ); ?>
		</h1>

		<?php if ( $it['lead'] ) : ?>
			<p class="mt-5 max-w-2xl text-lg leading-relaxed <?php echo $it_dark ? 'text-slate-300' : 'text-slate-600'; ?> <?php echo $it_center ? 'mx-auto' : ''; ?>"><?php echo esc_html( $it['lead'] ); ?></p>
		<?php endif; ?>

		<?php if ( $it['actions'] ) : ?>
			<div class="mt-8 flex flex-wrap gap-3 <?php echo $it_center ? 'justify-center' : ''; ?>"><?php echo $it['actions']; // phpcs:ignore -- HTML escapado por quien llama. ?></div>
		<?php endif; ?>
	</div>
</header>

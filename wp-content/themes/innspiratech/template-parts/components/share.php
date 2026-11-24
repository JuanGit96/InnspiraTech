<?php
/**
 * Botones para compartir (enlaces directos, sin scripts de terceros).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_url   = get_permalink();
$it_title = it_plain( get_the_title() );
$it_links = array(
	'linkedin' => array( 'LinkedIn', 'https://www.linkedin.com/sharing/share-offsite/?url=' . rawurlencode( $it_url ) ),
	'x'        => array( 'X', 'https://x.com/intent/post?url=' . rawurlencode( $it_url ) . '&text=' . rawurlencode( $it_title ) ),
	'whatsapp' => array( 'WhatsApp', 'https://wa.me/?text=' . rawurlencode( $it_title . ' ' . $it_url ) ),
);
$it_btn   = 'flex size-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-500 transition hover:border-inblue hover:text-inblue';
?>
<div>
	<p class="text-xs font-bold tracking-widest text-slate-400 uppercase">Compartir</p>
	<div class="mt-3 flex flex-wrap gap-2">
		<?php foreach ( $it_links as $it_network => list( $it_label, $it_href ) ) : ?>
			<a href="<?php echo esc_url( $it_href ); ?>" class="<?php echo esc_attr( $it_btn ); ?>" target="_blank" rel="noopener nofollow">
				<span class="sr-only">Compartir en <?php echo esc_html( $it_label ); ?></span>
				<?php echo 'whatsapp' === $it_network ? it_icon( 'chat', 'size-5' ) : it_social_icon( $it_network, 'size-4' ); // phpcs:ignore ?>
			</a>
		<?php endforeach; ?>
		<button type="button" class="<?php echo esc_attr( $it_btn ); ?> w-auto gap-2 px-3 text-sm font-semibold" data-copy-link="<?php echo esc_url( $it_url ); ?>">
			<?php echo it_icon( 'link', 'size-4' ); // phpcs:ignore ?><span data-copy-label>Copiar</span>
		</button>
	</div>
</div>

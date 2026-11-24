<?php
/**
 * Formulario de suscripción al boletín. Args: id, dark (bool).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_dark = ! empty( $args['dark'] );
$it_id   = $args['id'] ?? 'form-newsletter';
$it_css  = $it_dark
	? 'min-w-0 flex-1 rounded-lg border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-inblue focus:ring-2 focus:ring-inblue/40 focus:outline-none'
	: 'field-input min-w-0 flex-1';
?>
<div id="<?php echo esc_attr( $it_id ); ?>" class="mt-5 scroll-mt-28">
	<?php it_lead_notice( 'newsletter' ); ?>
	<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="space-y-3" data-lead-form>
		<?php it_lead_hidden_fields( 'newsletter' ); ?>
		<label for="<?php echo esc_attr( $it_id ); ?>-email" class="sr-only">Correo electrónico</label>
		<div class="flex gap-2">
			<input id="<?php echo esc_attr( $it_id ); ?>-email" type="email" name="it_email" required autocomplete="email" placeholder="tu@empresa.com" class="<?php echo esc_attr( $it_css ); ?>">
			<button type="submit" class="btn-primary shrink-0 px-4 py-3 text-sm">Suscribirme</button>
		</div>
		<?php it_consent_field( $it_id . '-consentimiento', $it_dark ); ?>
	</form>
</div>

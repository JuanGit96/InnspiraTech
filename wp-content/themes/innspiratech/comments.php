<?php
/**
 * Comentarios (desactivados por defecto en el sitio; se muestran si una entrada los abre).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
	return;
}
?>
<section id="comentarios" class="mt-16 border-t border-slate-100 pt-12">
	<?php if ( have_comments() ) : ?>
		<h2 class="text-2xl font-bold text-indark">Comentarios (<?php echo esc_html( (string) get_comments_number() ); ?>)</h2>
		<ol class="mt-8 space-y-6 text-slate-700 [&_.comment-meta]:text-sm [&_.comment-meta]:text-slate-500 [&_.children]:mt-6 [&_.children]:ml-6">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 0,
				)
			);
			?>
		</ol>
		<?php the_comments_pagination(); ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_container'    => 'mt-12 [&_input:not([type=checkbox]):not([type=submit])]:field-input [&_textarea]:field-input [&_label]:field-label [&_p]:mb-5',
			'class_submit'       => 'btn-primary',
			'title_reply_before' => '<h2 id="reply-title" class="mb-6 text-2xl font-bold text-indark">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>
</section>

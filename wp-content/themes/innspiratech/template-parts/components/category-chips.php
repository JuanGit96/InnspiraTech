<?php
/**
 * Filtro de categorías del blog (enlaces rastreables, no JS).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_cats = get_categories(
	array(
		'hide_empty' => true,
		'orderby'    => 'count',
		'order'      => 'DESC',
	)
);

if ( ! $it_cats ) {
	return;
}

$it_current = is_category() ? get_queried_object_id() : 0;
$it_base    = 'inline-flex rounded-full border px-4 py-2 text-sm font-semibold whitespace-nowrap transition';
$it_active  = 'border-indark bg-indark text-white';
$it_idle    = 'border-slate-200 bg-white text-slate-600 hover:border-inblue hover:text-inblue';
?>
<nav aria-label="Categorías del blog" class="border-b border-slate-100 bg-white">
	<div class="container-it">
		<ul class="-mx-1 flex gap-2 overflow-x-auto px-1 py-4" role="list">
			<li>
				<a href="<?php echo esc_url( it_blog_url() ); ?>" class="<?php echo esc_attr( $it_base . ' ' . ( is_home() ? $it_active : $it_idle ) ); ?>" <?php echo is_home() ? 'aria-current="page"' : ''; ?>>Todos</a>
			</li>
			<?php foreach ( $it_cats as $it_cat ) : ?>
				<li>
					<a href="<?php echo esc_url( get_category_link( $it_cat ) ); ?>" class="<?php echo esc_attr( $it_base . ' ' . ( $it_current === $it_cat->term_id ? $it_active : $it_idle ) ); ?>" <?php echo $it_current === $it_cat->term_id ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $it_cat->name ); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</nav>

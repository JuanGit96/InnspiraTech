<?php
/**
 * Walker del menú: imprime el menú de WordPress con las clases de Tailwind
 * de la plantilla original (escritorio con submenú desplegable y móvil).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

class IT_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="sub-menu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$item    = $data_object;
		$mobile  = is_object( $args ) && isset( $args->it_variant ) && 'mobile' === $args->it_variant;
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$has_children = in_array( 'menu-item-has-children', $classes, true );

		// WordPress marca la página del blog como "current_page_parent" en cualquier contenido
		// que no sea página (también en servicios). Solo cuenta en vistas del blog.
		$current_classes = array( 'current-menu-item', 'current-menu-ancestor', 'current-menu-parent', 'current_page_ancestor' );
		if ( is_singular( 'post' ) || is_home() || is_category() || is_tag() || is_author() || is_date() ) {
			$current_classes[] = 'current_page_parent';
		}
		$is_current = (bool) array_intersect( $current_classes, $classes );

		$li_classes = array( 'menu-item', 'menu-item-' . $item->ID );
		if ( $has_children ) {
			$li_classes[] = 'menu-item-has-children';
		}
		$output .= '<li class="' . esc_attr( implode( ' ', $li_classes ) ) . '">';

		$atts = array(
			'href'   => $item->url ?: '#',
			'target' => $item->target ?: '',
			'rel'    => $item->xfn ?: '',
			'title'  => $item->attr_title ?: '',
		);
		if ( in_array( 'current-menu-item', $classes, true ) ) {
			$atts['aria-current'] = 'page';
		}

		if ( 0 === $depth ) {
			if ( $mobile ) {
				$atts['class'] = 'flex items-center justify-between rounded-lg px-3 py-3 text-base font-semibold ' . ( $is_current ? 'bg-blue-50 text-inblue' : 'text-indark hover:bg-slate-50' );
			} else {
				$atts['class'] = 'inline-flex items-center gap-1 rounded-lg px-3 py-2 transition ' . ( $is_current ? 'font-bold text-inblue' : 'font-medium text-slate-600 hover:text-inblue' );
			}
		}

		$attributes = '';
		foreach ( $atts as $name => $value ) {
			if ( '' !== $value ) {
				$attributes .= ' ' . $name . '="' . ( 'href' === $name ? esc_url( $value ) : esc_attr( $value ) ) . '"';
			}
		}

		$title = apply_filters( 'nav_menu_item_title', apply_filters( 'the_title', $item->title, $item->ID ), $item, $args, $depth );

		$output .= '<a' . $attributes . '>' . esc_html( wp_strip_all_tags( $title ) );
		if ( $has_children && 0 === $depth && ! $mobile ) {
			$output .= it_icon( 'chevron-down', 'size-4 opacity-60' );
		}
		$output .= '</a>';
	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

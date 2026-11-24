<?php
/**
 * Portada (antes index.html). Cada sección es un template-part independiente
 * para poder reordenarlas o reutilizarlas en otras páginas.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/components/clients' );
get_template_part( 'template-parts/home/resultados' );
get_template_part( 'template-parts/home/services' );
get_template_part( 'template-parts/home/ai-band' );
get_template_part( 'template-parts/home/casos' );
get_template_part( 'template-parts/home/segments' );
get_template_part( 'template-parts/components/process' );
get_template_part( 'template-parts/home/stack' );
get_template_part( 'template-parts/home/blog' );
get_template_part( 'template-parts/home/academy' );
get_template_part(
	'template-parts/components/faq',
	null,
	array(
		'post_id' => (int) get_option( 'page_on_front' ),
		'title'   => 'Preguntas frecuentes',
	)
);
get_template_part( 'template-parts/components/cta' );

get_footer();

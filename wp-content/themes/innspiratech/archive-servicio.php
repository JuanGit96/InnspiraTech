<?php
/**
 * Listado de servicios (/servicios/) — antes servicios.html.
 * Agrupa por "Línea de servicio" y muestra los planes Fast-Track con precio.
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

global $wp_query;

$it_terms = get_terms(
	array(
		'taxonomy'   => 'linea_servicio',
		'hide_empty' => false,
		'meta_key'   => 'it_orden', // phpcs:ignore WordPress.DB.SlowDBQuery
		'orderby'    => 'meta_value_num',
		'order'      => 'ASC',
	)
);

$it_groups = array();
foreach ( is_wp_error( $it_terms ) ? array() : $it_terms as $it_term ) {
	$it_groups[ $it_term->term_id ] = array(
		'term'  => $it_term,
		'items' => array(),
	);
}
$it_others = array();
foreach ( $wp_query->posts as $it_service ) {
	$it_ids = wp_get_post_terms( $it_service->ID, 'linea_servicio', array( 'fields' => 'ids' ) );
	$it_tid = is_wp_error( $it_ids ) ? 0 : (int) ( $it_ids[0] ?? 0 );
	if ( $it_tid && isset( $it_groups[ $it_tid ] ) ) {
		$it_groups[ $it_tid ]['items'][] = $it_service;
	} else {
		$it_others[] = $it_service;
	}
}
$it_groups = array_filter( $it_groups, static fn( $group ) => $group['items'] );

$it_plans = get_posts(
	array(
		'post_type'      => 'plan',
		'posts_per_page' => 6,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	)
);

$it_chip     = 'rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-white/10';
$it_actions  = '';
foreach ( $it_groups as $it_group ) {
	$it_actions .= sprintf( '<a href="#%s" class="%s">%s</a>', esc_attr( $it_group['term']->slug ), esc_attr( $it_chip ), esc_html( $it_group['term']->name ) );
}
if ( $it_plans ) {
	$it_actions .= sprintf( '<a href="#planes" class="%s">Planes y precios</a>', esc_attr( $it_chip ) );
}

get_template_part(
	'template-parts/components/page-hero',
	null,
	array(
		'eyebrow' => 'Servicios',
		'title'   => 'Servicios de desarrollo de software, IA y marketing digital',
		'lead'    => 'Transparencia, velocidad y rigor técnico. Elige el camino que mejor se adapte a la etapa de tu negocio: desde una web lista en días hasta agentes de IA conectados a tus sistemas.',
		'actions' => $it_actions,
	)
);

$it_sections = $it_groups;
if ( $it_others ) {
	$it_sections[] = array(
		'term'  => (object) array(
			'slug'        => 'otros-servicios',
			'name'        => 'Otros servicios',
			'description' => '',
		),
		'items' => $it_others,
	);
}

$it_index = 0;
foreach ( $it_sections as $it_section ) :
	$it_bg = ( $it_index % 2 ) ? 'bg-white' : 'bg-slate-50';
	++$it_index;
	?>
	<section id="<?php echo esc_attr( $it_section['term']->slug ); ?>" class="section scroll-mt-20 <?php echo esc_attr( $it_bg ); ?>" aria-labelledby="<?php echo esc_attr( $it_section['term']->slug ); ?>-titulo">
		<div class="container-it">
			<div class="max-w-3xl">
				<p class="eyebrow">Línea <?php echo esc_html( sprintf( '%02d', $it_index ) ); ?></p>
				<h2 id="<?php echo esc_attr( $it_section['term']->slug ); ?>-titulo" class="section-title mt-4"><?php echo esc_html( $it_section['term']->name ); ?></h2>
				<?php if ( $it_section['term']->description ) : ?>
					<p class="section-lead"><?php echo esc_html( $it_section['term']->description ); ?></p>
				<?php endif; ?>
			</div>
			<div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal>
				<?php
				foreach ( $it_section['items'] as $it_service ) {
					get_template_part( 'template-parts/components/service-card', null, array( 'post' => $it_service ) );
				}
				?>
			</div>
		</div>
	</section>
<?php endforeach; ?>

<?php if ( $it_plans ) : ?>
	<section id="planes" class="section scroll-mt-20 border-t border-slate-100 bg-white" aria-labelledby="planes-titulo">
		<div class="container-it">
			<div class="mx-auto max-w-3xl text-center">
				<p class="eyebrow">Fast-Track</p>
				<h2 id="planes-titulo" class="section-title mt-4">Sitios web y tiendas online con precio claro</h2>
				<p class="section-lead">Ideales para negocios que necesitan validación rápida, presencia digital corporativa o despliegues acelerados con CMS y constructores visuales.</p>
			</div>
			<div class="mt-20 grid gap-8 md:grid-cols-3">
				<?php
				foreach ( $it_plans as $it_plan ) {
					get_template_part( 'template-parts/components/plan-card', null, array( 'post' => $it_plan ) );
				}
				?>
			</div>
			<p class="mt-10 text-center text-sm text-slate-500">* Los costos de dominio y alojamiento (hosting) se cotizan por separado según los requerimientos de tráfico.</p>
		</div>
	</section>
<?php endif; ?>

<?php
get_template_part( 'template-parts/components/process', null, array( 'class' => 'bg-slate-50' ) );
get_template_part(
	'template-parts/components/cta',
	null,
	array(
		'title' => '¿No sabes qué servicio necesitas?',
		'text'  => 'Agenda una consultoría técnica: revisamos tu caso y te recomendamos la ruta con mejor retorno para tu empresa.',
	)
);

get_footer();

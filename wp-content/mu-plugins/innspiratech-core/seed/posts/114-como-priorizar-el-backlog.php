<?php
/**
 * Artículo: Cómo priorizar el backlog.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'como-priorizar-el-backlog',
	'title'      => 'Cómo priorizar el backlog de tu producto digital',
	'date'       => '2027-05-07 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Producto', 'Priorización', 'Gestión de proyectos', 'Metodologías ágiles' ],
	'servicio'   => 'desarrollo-software-a-medida',
	'image'      => [
		'file' => 'post-priorizar-backlog.jpg',
		'alt'  => 'Portada del artículo Cómo priorizar el backlog de tu producto digital — InnspiraTech',
	],
	'excerpt'    => 'Si todo es prioridad, nada lo es. Métodos simples para decidir qué construir primero, cómo decir que no sin conflicto y cómo mantener el backlog útil en lugar de una lista infinita de pedidos.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La lista de pendientes de cualquier producto digital crece más rápido de lo que el equipo puede construir. Cada área tiene pedidos urgentes, la gerencia agrega ideas en cada reunión y los errores reportados se acumulan. Sin un método para priorizar, el equipo termina construyendo lo que pide quien más presiona.' ],

			[ 'h2', 'Primero: ordena lo que hay' ],
			[
				'ul',
				[
					'Cada ítem con un problema claro, no solo una solución: "los vendedores no ven la cartera del cliente" en lugar de "agregar botón de cartera".',
					'Quién lo pidió y a quién beneficia.',
					'Evidencia: cuántos usuarios, cuántos casos, cuánto dinero.',
					'Separa tipos: nuevas funciones, mejoras, errores, deuda técnica.',
					'Elimina lo que lleva meses sin que nadie pregunte: si no se extrañó, no era importante.',
				],
			],

			[ 'h2', 'Métodos de priorización' ],
			[
				'table',
				[
					'head' => [ 'Método', 'Cómo funciona', 'Cuándo usarlo' ],
					'rows' => [
						[ 'Valor contra esfuerzo', 'Matriz de dos ejes; primero lo de alto valor y bajo esfuerzo', 'Equipos que empiezan; rápido y visual' ],
						[ 'RICE', 'Alcance × impacto × confianza / esfuerzo', 'Cuando hay datos y muchas opciones que comparar' ],
						[ 'MoSCoW', 'Imprescindible, importante, deseable, no ahora', 'Definir el alcance de una entrega' ],
						[ 'Costo del retraso', 'Cuánto cuesta cada semana sin hacerlo', 'Cuando hay fechas y oportunidades con vencimiento' ],
					],
				],
			],
			[ 'p', 'No importa tanto el método como aplicarlo con constancia y transparencia. El valor de un método es que convierte una discusión de opiniones en una conversación con criterios.' ],

			[ 'h2', 'Cómo estimar el valor' ],
			[ 'p', 'Vincula cada ítem con un objetivo del negocio del periodo: aumentar conversión, reducir costos de atención, retener clientes, cumplir una norma. Si un ítem no se conecta con ningún objetivo, su valor es bajo por definición, aunque quien lo pide sea importante.' ],

			[ 'h2', 'La capacidad reservada' ],
			[ 'p', 'Un error común es priorizar solo funciones nuevas. Reserva capacidad fija en cada ciclo para lo que no compite bien en una matriz pero sostiene el producto:' ],
			[
				'ul',
				[
					'Corrección de errores.',
					'Deuda técnica y actualizaciones.',
					'Seguridad y cumplimiento.',
					'Imprevistos operativos.',
				],
			],
			[ 'p', 'Si todo compite en la misma lista, las mejoras técnicas siempre pierden y el producto se vuelve cada vez más lento de cambiar.' ],

			[ 'h2', 'Decir que no sin conflicto' ],
			[
				'ol',
				[
					'Publica los criterios de priorización: la decisión deja de parecer personal.',
					'Muestra lo que está primero y pregunta qué debería salir si entra lo nuevo.',
					'Distingue "no" de "no ahora": registra el pedido con su contexto.',
					'Pide evidencia: cuántos clientes, cuánto dinero, qué pasa si no se hace.',
					'Revisa prioridades con las áreas en una cita fija, no en pasillos.',
				],
			],

			[ 'h2', 'Mantener el backlog sano' ],
			[
				'ul',
				[
					'Solo los primeros ítems deben estar detallados; el resto, en forma breve.',
					'Revisión quincenal o mensual con el responsable de producto.',
					'Límite de tamaño: si el backlog tiene cientos de ítems, nadie lo lee.',
					'Criterios de aceptación claros en lo que entra al siguiente ciclo.',
					'Medición después de lanzar: ¿el ítem cumplió el valor esperado?',
				],
			],
			[ 'p', 'Para dimensionar lo priorizado, revisa <a href="{url:post:como-estimar-un-proyecto-de-software}">cómo estimar un proyecto de software</a>; para lo técnico que nunca se prioriza, <a href="{url:post:que-es-la-deuda-tecnica}">deuda técnica</a>; y para el rol que decide, <a href="{url:post:roles-equipo-de-desarrollo}">roles de un equipo de producto</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-software-a-medida}">desarrollo de software a medida</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Quién debe priorizar el backlog?', 'El responsable de producto, con información de las áreas y del equipo técnico. Priorizar por consenso entre todos suele producir listas donde todo es urgente.' ],
			[ '¿Cada cuánto se revisan las prioridades?', 'En cada ciclo de planificación, normalmente cada una o dos semanas para lo inmediato, y cada trimestre para la dirección general del producto.' ],
			[ '¿Qué hago con los pedidos urgentes de la gerencia?', 'Evalúalos con los mismos criterios y muestra el impacto de incluirlos: qué se retrasa. Si de verdad es más valioso, entra; si no, la conversación con datos suele resolverlo.' ],
			[ '¿Cuánta capacidad reservar para deuda técnica?', 'Depende del estado del sistema, pero debe ser una proporción fija y visible en cada ciclo. Sin reserva explícita, la deuda técnica nunca se atiende.' ],
		],
		'seo_title' => 'Cómo priorizar el backlog de tu producto',
		'seo_desc'  => 'Métodos para priorizar el backlog de un producto digital: valor contra esfuerzo, RICE, MoSCoW y costo del retraso, capacidad reservada y cómo decir que no.',
	],
];

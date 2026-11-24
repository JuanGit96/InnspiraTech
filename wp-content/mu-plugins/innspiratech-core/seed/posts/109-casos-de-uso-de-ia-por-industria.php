<?php
/**
 * Artículo: Casos de uso de IA por industria.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'casos-de-uso-de-ia-por-industria',
	'title'      => 'Casos de uso de IA por industria: retail, salud, logística, manufactura y servicios',
	'date'       => '2027-08-06 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Inteligencia artificial', 'Casos de uso', 'Industrias', 'Agentes de IA' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-casos-ia-industria.jpg',
		'alt'  => 'Portada del artículo Casos de uso de IA por industria — InnspiraTech',
	],
	'excerpt'    => 'Ideas concretas de dónde aplicar inteligencia artificial según tu sector, con el nivel de madurez de cada caso y qué necesitas tener antes de empezar. Menos teoría, más aplicaciones reales.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La pregunta más frecuente de un gerente que empieza a explorar la inteligencia artificial es sencilla: "¿y esto para qué me sirve a mí?". Las respuestas genéricas no ayudan. Estos son los casos que vemos funcionar por industria, con lo que requieren para dar resultado.' ],

			[ 'h2', 'Retail y e-commerce' ],
			[
				'table',
				[
					'head' => [ 'Caso', 'Qué resuelve', 'Requisito clave' ],
					'rows' => [
						[ 'Asistente de compra', 'Recomienda productos y resuelve dudas a cualquier hora', 'Catálogo completo y actualizado' ],
						[ 'Descripciones de producto', 'Fichas propias a escala a partir de especificaciones', 'Datos de producto confiables y revisión' ],
						[ 'Atención posventa', 'Estado de pedidos, cambios y devoluciones', 'Integración con pedidos y logística' ],
						[ 'Pronóstico de demanda', 'Compras e inventario más precisos', 'Histórico de ventas de calidad' ],
						[ 'Análisis de reseñas', 'Detecta problemas de producto y servicio', 'Volumen de reseñas y comentarios' ],
					],
				],
			],

			[ 'h2', 'Salud' ],
			[
				'table',
				[
					'head' => [ 'Caso', 'Qué resuelve', 'Requisito clave' ],
					'rows' => [
						[ 'Agendamiento y recordatorios', 'Menos inasistencias y carga administrativa', 'Integración con la agenda' ],
						[ 'Resumen de documentación', 'Menos tiempo administrativo del personal', 'Controles estrictos de privacidad y revisión profesional' ],
						[ 'Orientación administrativa', 'Autorizaciones, requisitos y trámites', 'Información oficial actualizada' ],
						[ 'Clasificación de solicitudes', 'Priorizar y enrutar casos', 'Reglas claras y supervisión humana' ],
					],
				],
			],
			[ 'p', 'En salud, la línea es clara: la IA apoya la gestión y la documentación, no reemplaza el criterio clínico. Los datos de salud exigen el máximo nivel de protección y cumplimiento normativo.' ],

			[ 'h2', 'Logística y transporte' ],
			[
				'table',
				[
					'head' => [ 'Caso', 'Qué resuelve', 'Requisito clave' ],
					'rows' => [
						[ 'Lectura de documentos', 'Guías, remisiones y soportes de entrega', 'Volumen suficiente y validaciones' ],
						[ 'Atención de rastreo', 'Consultas de estado sin intervención humana', 'Datos de seguimiento en tiempo real' ],
						[ 'Gestión de novedades', 'Clasificar y resolver entregas fallidas', 'Integración con operación' ],
						[ 'Optimización de rutas', 'Menos kilómetros y más entregas', 'Datos de direcciones y tiempos' ],
					],
				],
			],

			[ 'h2', 'Manufactura' ],
			[
				'table',
				[
					'head' => [ 'Caso', 'Qué resuelve', 'Requisito clave' ],
					'rows' => [
						[ 'Asistente de procedimientos', 'Operarios consultan manuales en lenguaje natural', 'Documentación técnica digital' ],
						[ 'Mantenimiento predictivo', 'Anticipar fallas de equipos', 'Sensores e histórico de fallas' ],
						[ 'Control de calidad visual', 'Detectar defectos en línea', 'Imágenes etiquetadas y condiciones estables' ],
						[ 'Análisis de incidentes', 'Encontrar patrones en reportes de fallas', 'Registros estructurados' ],
					],
				],
			],

			[ 'h2', 'Servicios profesionales y B2B' ],
			[
				'table',
				[
					'head' => [ 'Caso', 'Qué resuelve', 'Requisito clave' ],
					'rows' => [
						[ 'Calificación de leads', 'Responder rápido y priorizar oportunidades', 'CRM y criterios comerciales' ],
						[ 'Propuestas y cotizaciones', 'Borradores a partir de plantillas y casos', 'Biblioteca de propuestas previas' ],
						[ 'Búsqueda en conocimiento interno', 'Encontrar respuestas en documentos propios', 'Documentos ordenados y permisos' ],
						[ 'Revisión de contratos', 'Extraer cláusulas y riesgos para revisión', 'Revisión legal humana' ],
					],
				],
			],

			[ 'h2', 'Cómo elegir tu primer caso' ],
			[
				'ol',
				[
					'<strong>Volumen:</strong> que ocurra muchas veces al mes.',
					'<strong>Datos disponibles:</strong> que la información exista y sea accesible.',
					'<strong>Riesgo controlable:</strong> que un error sea detectable y reversible.',
					'<strong>Métrica clara:</strong> tiempo, costo, conversión o satisfacción.',
					'<strong>Dueño interno:</strong> alguien del área que lo impulse y lo valide.',
				],
			],
			[ 'p', 'Los casos de atención y búsqueda de información interna suelen ser el mejor punto de entrada en casi cualquier sector: alto volumen, riesgo moderado y resultados visibles en semanas.' ],
			[ 'p', 'Para la ruta completa, revisa <a href="{url:post:como-implementar-inteligencia-artificial-en-una-empresa}">cómo implementar IA en tu empresa</a>; para trabajar con tus documentos, <a href="{url:post:rag-para-empresas}">RAG para empresas</a>. Conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a> o <a href="{url:pagina:contacto}">cuéntanos tu sector</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Qué industria saca más provecho de la IA?', 'Cualquiera con procesos de alto volumen basados en información: atención, documentos, búsqueda de conocimiento y ventas. Más que la industria, importa tener datos accesibles y procesos repetitivos.' ],
			[ '¿Una empresa pequeña puede aplicar estos casos?', 'Sí. Muchos casos, como asistentes de atención, búsqueda en documentos o lectura de facturas, se implementan con herramientas existentes y presupuestos acotados.' ],
			[ '¿Qué casos conviene evitar al inicio?', 'Los que toman decisiones de alto impacto sobre personas, los que dependen de datos que aún no existen y los que exigen precisión absoluta sin supervisión. Mejor empezar por casos reversibles y medibles.' ],
			[ '¿Cuánto tarda en verse resultado?', 'En casos de atención o búsqueda de información, un piloto puede mostrar resultados en pocas semanas. Los casos predictivos requieren más tiempo, porque dependen de acumular y preparar datos.' ],
		],
		'seo_title' => 'Casos de uso de IA por industria',
		'seo_desc'  => 'Casos de uso de IA en retail, salud, logística, manufactura y servicios B2B, con los requisitos de cada uno y cómo elegir el primero.',
	],
];

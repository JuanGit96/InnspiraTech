<?php
/**
 * Artículo: Humano en el ciclo.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'human-in-the-loop-ia',
	'title'      => 'Humano en el ciclo: cuándo debe intervenir una persona en un proceso con IA',
	'date'       => '2027-03-29 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Agentes de IA', 'Gobierno de IA', 'Procesos', 'Riesgos' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-human-in-the-loop.jpg',
		'alt'  => 'Portada del artículo Humano en el ciclo: cuándo debe intervenir una persona — InnspiraTech',
	],
	'excerpt'    => 'Ni automatizar todo ni revisar todo. Cómo decidir qué pasos requieren una persona, tres modelos de intervención y cómo evitar que la revisión humana se convierta en un sello automático.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Cuando una empresa incorpora IA a un proceso aparecen dos posiciones extremas: automatizar de punta a punta, que es rápido y riesgoso, o revisar todas las salidas, que es seguro y elimina el beneficio. La respuesta está en el medio, y se diseña caso por caso.' ],

			[ 'h2', 'El criterio: reversibilidad e impacto' ],
			[
				'table',
				[
					'head' => [ '', 'Impacto bajo', 'Impacto alto' ],
					'rows' => [
						[ 'Reversible', 'Automatizar completo', 'Automatizar con revisión por muestreo' ],
						[ 'Irreversible', 'Automatizar con confirmación simple', 'Aprobación humana obligatoria' ],
					],
				],
			],
			[ 'p', 'Responder un horario es reversible y de bajo impacto: automatiza. Enviar una cotización con precios es reversible pero de impacto alto: revisión por muestreo y reglas estrictas. Aplicar una nota crédito o eliminar un registro es irreversible: aprobación humana, siempre.' ],

			[ 'h2', 'Tres modelos de intervención' ],
			[
				'ul',
				[
					'<strong>Humano en el ciclo:</strong> la persona aprueba antes de que la acción ocurra. Máximo control, menor velocidad.',
					'<strong>Humano sobre el ciclo:</strong> el sistema actúa y la persona supervisa por muestreo o por excepciones. Equilibrio habitual.',
					'<strong>Humano fuera del ciclo:</strong> automatización total con auditoría posterior. Solo para casos de bajo riesgo y alto volumen.',
				],
			],
			[ 'p', 'Un mismo proceso puede combinar los tres: el agente responde consultas solo (fuera del ciclo), prepara cotizaciones que un asesor aprueba (en el ciclo) y un supervisor revisa una muestra semanal de conversaciones (sobre el ciclo).' ],

			[ 'h2', 'Dónde la intervención humana es innegociable' ],
			[
				'ul',
				[
					'Decisiones que afectan derechos de personas: crédito, contratación, servicios esenciales.',
					'Manejo de datos sensibles o de salud.',
					'Compromisos económicos por encima de un umbral.',
					'Comunicaciones en situaciones de crisis o de reclamo grave.',
					'Cualquier acción sin posibilidad de deshacer.',
					'Casos donde una normativa exige explícitamente decisión humana.',
				],
			],

			[ 'h2', 'El riesgo silencioso: la aprobación automática' ],
			[ 'p', 'Cuando alguien debe aprobar cien salidas al día y el noventa y nueve por ciento son correctas, deja de revisar: aprueba en bloque. La revisión existe en el papel y no en la práctica, que es el peor de los mundos porque da falsa tranquilidad.' ],
			[ 'p', 'Cómo evitarlo:' ],
			[
				'ol',
				[
					'<strong>Revisa por riesgo,</strong> no todo: solo lo que supere ciertos montos o niveles de incertidumbre.',
					'<strong>Muestra el porqué:</strong> la persona debe ver en qué se basó el sistema para decidir.',
					'<strong>Resalta lo dudoso</strong> en lugar de presentar todo igual.',
					'<strong>Mide la tasa de corrección:</strong> si nadie corrige nunca, o la revisión sobra o no se está haciendo.',
					'<strong>Rota a los revisores</strong> y dales tiempo real para la tarea.',
				],
			],

			[ 'h2', 'Diseñar para que la revisión sea rápida' ],
			[ 'p', 'La interfaz de revisión decide si el modelo funciona. Debe mostrar la propuesta y su evidencia lado a lado, permitir aprobar, corregir o rechazar en un clic, registrar el motivo del rechazo y alimentar con esas correcciones la mejora del sistema. Si revisar cuesta más que hacerlo a mano, el proceso volverá a ser manual en un mes.' ],

			[ 'h2', 'Transparencia con el usuario' ],
			[ 'p', 'Cuando una decisión que afecta a una persona involucra sistemas automatizados, lo correcto —y cada vez más lo exigible— es informarlo y ofrecer una vía para solicitar revisión humana. Es una buena práctica que además reduce conflictos: casi nadie se molesta porque un sistema participe; se molestan cuando no hay a quién reclamar.' ],
			[ 'p', 'Para los controles técnicos, revisa <a href="{url:post:guardrails-para-agentes-de-ia}">guardrails</a>; para la evaluación continua, <a href="{url:post:como-evaluar-un-agente-de-ia}">cómo evaluar un agente de IA</a>; y para el marco general, <a href="{url:post:politica-de-uso-de-ia}">la política de uso de IA</a>. Conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Revisar todas las salidas no anula el beneficio de la IA?', 'En gran medida sí, por eso se revisa por riesgo y por muestreo en lugar de revisar todo. El objetivo es concentrar la atención humana donde puede evitar un daño real.' ],
			[ '¿Cómo elijo qué revisar?', 'Por dos ejes: qué tan reversible es la acción y qué impacto tiene si sale mal. Lo irreversible y de alto impacto siempre requiere aprobación; lo reversible y menor puede automatizarse con auditoría posterior.' ],
			[ '¿Cuándo puedo pasar de revisión total a muestreo?', 'Cuando tengas datos: una tasa de corrección baja y estable durante un periodo significativo, con un banco de casos que se ejecuta en cada cambio. La transición se hace por etapas y se puede revertir.' ],
			[ '¿La ley exige intervención humana?', 'En varias jurisdicciones existen exigencias para decisiones automatizadas que afectan significativamente a las personas, incluido el derecho a solicitar revisión humana. Verifica con tu área legal qué aplica a tu caso y a los países donde operas.' ],
		],
		'seo_title' => 'Humano en el ciclo: cuándo debe intervenir una persona',
		'seo_desc'  => 'Qué pasos de un proceso con IA requieren una persona: matriz de reversibilidad e impacto, tres modelos de supervisión y cómo evitar aprobar por inercia.',
	],
];

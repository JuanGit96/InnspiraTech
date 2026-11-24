<?php
/**
 * Artículo: Agentes de ventas con IA.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'agentes-de-ia-para-ventas',
	'title'      => 'Agentes de ventas con IA: cómo calificar y dar seguimiento a tus leads',
	'date'       => '2027-02-19 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Agentes de IA', 'Ventas', 'CRM', 'Automatización comercial' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-agentes-ventas-ia.jpg',
		'alt'  => 'Portada del artículo Agentes de ventas con IA: calificación y seguimiento de leads — InnspiraTech',
	],
	'excerpt'    => 'La mayoría de leads se pierde por responder tarde y por no hacer seguimiento. Un agente de IA responde en segundos, califica con criterios de tu negocio y deja al vendedor solo las conversaciones que valen.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Dos datos explican por qué la mayoría de empresas desperdicia su inversión en publicidad: los leads se enfrían en minutos, y la mayor parte de las ventas necesita varios seguimientos que casi nadie hace. No es falta de voluntad del equipo comercial: es imposible responder a todos al instante y recordar cada seguimiento.' ],
			[ 'p', 'Ahí es donde un agente de IA aporta de verdad. No reemplaza al vendedor: le entrega conversaciones calificadas y le quita el trabajo administrativo.' ],

			[ 'h2', 'Qué hace un agente comercial bien diseñado' ],
			[
				'table',
				[
					'head' => [ 'Tarea', 'Qué resuelve' ],
					'rows' => [
						[ 'Responder en segundos', 'Atiende el lead mientras todavía está interesado, a cualquier hora' ],
						[ 'Calificar con preguntas del negocio', 'Presupuesto, plazo, tamaño, necesidad y decisor' ],
						[ 'Enriquecer la información', 'Completa datos de empresa y sector para priorizar' ],
						[ 'Agendar', 'Ofrece horarios reales de la agenda del asesor' ],
						[ 'Dar seguimiento', 'Secuencias personalizadas por canal hasta obtener respuesta' ],
						[ 'Registrar en el CRM', 'Sin que nadie transcriba nada' ],
						[ 'Preparar al vendedor', 'Resumen del caso, objeciones detectadas y siguiente paso sugerido' ],
						[ 'Reactivar oportunidades frías', 'Retoma bases antiguas con un mensaje pertinente' ],
					],
				],
			],

			[ 'h2', 'Calificación: define tus criterios antes de automatizar' ],
			[ 'p', 'Un agente no puede calificar mejor que tus reglas. Antes de implementar, siéntate con el equipo comercial y responde: qué hace que un cliente sea ideal, qué señales indican que no lo es, qué preguntas hace siempre un buen vendedor en el primer contacto y qué respuestas descartan de inmediato.' ],
			[ 'p', 'Convierte eso en un modelo simple de puntaje. Por ejemplo: sector objetivo, tamaño de empresa, urgencia declarada, presupuesto aproximado y si quien escribe decide o consulta. Con ese puntaje, define tres rutas:' ],
			[
				'ul',
				[
					'<strong>Alta prioridad:</strong> agendar de inmediato con un asesor y notificarle al instante.',
					'<strong>Media:</strong> enviar información relevante y programar seguimiento.',
					'<strong>Baja o fuera de perfil:</strong> responder con cortesía, ofrecer recursos y no ocupar tiempo comercial.',
				],
			],
			[ 'p', 'Esta última ruta es tan valiosa como la primera: evita que tu equipo pierda horas en conversaciones que no van a ningún lado.' ],

			[ 'h2', 'Seguimiento que no se siente automático' ],
			[ 'p', 'La diferencia entre una secuencia útil y spam está en tres decisiones: que cada mensaje aporte algo nuevo (un caso, una respuesta a la objeción que se detectó, una comparación), que se detenga apenas la persona responde o pide no ser contactada, y que respete horarios y frecuencia razonables. En Colombia, además, hay límites legales sobre contacto comercial que deben configurarse desde el inicio.' ],

			[ 'h2', 'Qué debe integrarse' ],
			[
				'ul',
				[
					'<strong>Canales de entrada:</strong> formularios del sitio, WhatsApp, campañas, marketplaces y llamadas.',
					'<strong>CRM:</strong> el agente crea y actualiza oportunidades; nada se queda en un chat suelto.',
					'<strong>Agenda:</strong> disponibilidad real de cada asesor para agendar sin intermediarios.',
					'<strong>Catálogo y precios:</strong> para responder con información correcta y no inventar.',
					'<strong>Reglas comerciales:</strong> qué se puede prometer, qué descuentos existen y qué requiere aprobación.',
				],
			],

			[ 'h2', 'Los límites: qué no debe hacer solo' ],
			[ 'p', 'Un agente comercial no debería cerrar negocios complejos, negociar condiciones fuera de política, ni prometer plazos que dependen de operaciones. Tampoco debe hacerse pasar por humano: identificarse como asistente al inicio genera más confianza y evita problemas.' ],
			[ 'p', 'Y hay un momento en que siempre debe entregar la conversación: cuando el cliente lo pide, cuando el monto o la complejidad superan un umbral, o cuando detecta molestia.' ],

			[ 'h2', 'Métricas que debes vigilar' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Qué revela' ],
					'rows' => [
						[ 'Tiempo de primera respuesta', 'La variable que más impacta la conversión' ],
						[ 'Porcentaje de leads contactados', 'Debería ser el cien por ciento' ],
						[ 'Leads calificados por asesor', 'Calidad del filtro, no volumen' ],
						[ 'Tasa de agendamiento', 'Efectividad del agente en llevar a la reunión' ],
						[ 'Conversión de calificado a cliente', 'Si baja, los criterios de calificación están mal' ],
						[ 'Costo por oportunidad calificada', 'Comparable con tu costo actual de prospección' ],
					],
				],
			],

			[ 'h2', 'Cómo empezar en cuatro semanas' ],
			[
				'ol',
				[
					'<strong>Semana 1:</strong> define perfil de cliente ideal, criterios de calificación y reglas comerciales.',
					'<strong>Semana 2:</strong> conecta un canal (el de mayor volumen) con el CRM y la agenda.',
					'<strong>Semana 3:</strong> pilotea con supervisión: un asesor revisa cada conversación antes de que siga.',
					'<strong>Semana 4:</strong> mide contra la línea base, ajusta preguntas y mensajes, y amplía a otro canal.',
				],
			],
			[ 'p', 'Si tu volumen llega principalmente por WhatsApp, empieza por <a href="{url:post:automatizar-whatsapp-business}">cómo automatizar WhatsApp Business</a>. Y si quieres entender primero el panorama completo, lee <a href="{url:post:agentes-de-ia-para-empresas}">agentes de IA para empresas</a> o <a href="{url:post:integrar-crm-con-whatsapp}">cómo integrar tu CRM con WhatsApp y tu sitio</a>. Conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a> o <a href="{url:pagina:contacto}">cuéntanos cuántos leads recibes al mes</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿El cliente se molesta si lo atiende una IA?', 'Lo que molesta es esperar horas o recibir respuestas genéricas. Si el agente se identifica, responde con información correcta y pasa a una persona cuando corresponde, la experiencia suele evaluarse mejor que la atención tardía.' ],
			[ '¿Sirve si vendo productos complejos o de alto valor?', 'Sí, con otro enfoque: el agente no cierra la venta, califica y prepara la reunión. En ventas complejas su mayor aporte es asegurar que ningún lead quede sin contacto y que el vendedor llegue informado.' ],
			[ '¿Qué pasa con los datos de los prospectos?', 'Deben tratarse conforme a la normativa de protección de datos: autorización clara, finalidad definida, acceso restringido y posibilidad de que la persona solicite no ser contactada. Configúralo antes de lanzar.' ],
			[ '¿Puedo usarlo sobre mi base de datos antigua?', 'Sí, y suele ser el caso de mayor retorno inmediato, siempre que tengas autorización vigente para contactar a esas personas. Un mensaje pertinente reactiva oportunidades que el equipo ya había dado por perdidas.' ],
		],
		'seo_title' => 'Agentes de ventas con IA: califica y da seguimiento',
		'seo_desc'  => 'Cómo usar un agente de IA para responder leads en segundos, calificarlos, agendar, dar seguimiento y registrar todo en el CRM. Con métricas clave.',
	],
];

<?php
/**
 * Artículo: Integrar el CRM con WhatsApp, correo y el sitio web.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'integrar-crm-con-whatsapp',
	'title'      => 'Cómo integrar tu CRM con WhatsApp, el correo y tu sitio web',
	'date'       => '2027-04-02 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'CRM', 'WhatsApp', 'Integraciones', 'Automatización' ],
	'servicio'   => 'automatizacion-procesos',
	'image'      => [
		'file' => 'post-crm-whatsapp.jpg',
		'alt'  => 'Portada del artículo Cómo integrar tu CRM con WhatsApp, correo y sitio web — InnspiraTech',
	],
	'excerpt'    => 'Si las conversaciones viven en el teléfono de cada asesor, la empresa no tiene clientes: los tienen sus vendedores. Cómo centralizar canales en el CRM, qué API usar y qué evitar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Hay una prueba simple para saber si tu empresa tiene un problema de canales: si un asesor renuncia mañana, ¿se va con las conversaciones de sus clientes? Si la respuesta es sí, la información comercial no está en la empresa, está en teléfonos personales.' ],
			[ 'p', 'Integrar los canales con el CRM resuelve eso y, de paso, hace posible medir, automatizar y responder más rápido.' ],

			[ 'h2', 'Qué significa integrar de verdad' ],
			[
				'table',
				[
					'head' => [ 'Sin integración', 'Con integración' ],
					'rows' => [
						[ 'Cada asesor usa su WhatsApp personal', 'Un número de empresa con varios asesores atendiendo' ],
						[ 'Las conversaciones se pierden', 'Cada mensaje queda en la ficha del cliente' ],
						[ 'Nadie sabe cuántas oportunidades entraron', 'Tablero por canal, campaña y asesor' ],
						[ 'El seguimiento depende de la memoria', 'Recordatorios y secuencias automáticas' ],
						[ 'Al irse un asesor, se va el historial', 'La información es de la empresa' ],
					],
				],
			],

			[ 'h2', 'WhatsApp: la parte que más confusión genera' ],
			[ 'p', 'Existen tres formas de usar WhatsApp en un negocio y solo una permite integración real:' ],
			[
				'ul',
				[
					'<strong>App normal:</strong> un teléfono, una persona. No se integra.',
					'<strong>App WhatsApp Business:</strong> catálogo, respuestas rápidas y etiquetas. Útil para un negocio pequeño, con integración muy limitada.',
					'<strong>API de WhatsApp Business:</strong> la vía oficial para integrar con CRM y automatizaciones, con varios agentes sobre un mismo número, plantillas aprobadas y trazabilidad completa.',
				],
			],
			[ 'p', 'La API tiene costos por conversación y exige verificar la empresa y aprobar las plantillas de mensajes que inicias tú. Desconfía de soluciones que prometen automatizar WhatsApp conectando un teléfono por vías no oficiales: además de ser inestables, exponen tu número a bloqueos. Lo tratamos a fondo en <a href="{url:post:automatizar-whatsapp-business}">cómo automatizar WhatsApp Business</a>.' ],

			[ 'h2', 'Correo y formularios' ],
			[ 'p', 'El correo comercial se integra sincronizando las bandejas de los asesores con el CRM, de modo que cada mensaje quede asociado al contacto. Los formularios del sitio deben crear el registro directamente, con el origen y la campaña, en lugar de enviar un correo que alguien transcribe.' ],
			[ 'p', 'Configura bien lo básico de entregabilidad —autenticación del dominio y registros correspondientes— o tus correos automáticos terminarán en spam y toda la integración será inútil.' ],

			[ 'h2', 'Arquitectura recomendada' ],
			[
				'ol',
				[
					'<strong>El CRM es la fuente de verdad</strong> de contactos, oportunidades e historial.',
					'<strong>Cada canal entrega al CRM,</strong> no al revés: WhatsApp, formularios, correo, campañas y llamadas.',
					'<strong>Un orquestador</strong> se encarga de las reglas: deduplicación, asignación, notificaciones y secuencias.',
					'<strong>La operación se conecta después:</strong> ERP o facturación para que el asesor vea pedidos y cartera.',
					'<strong>Los tableros se alimentan del CRM,</strong> no de hojas de cálculo paralelas.',
				],
			],

			[ 'h2', 'Qué automatizar primero' ],
			[
				'ul',
				[
					'Creación del contacto y la oportunidad desde cualquier canal.',
					'Asignación al asesor con notificación inmediata.',
					'Respuesta automática de recepción al cliente.',
					'Recordatorio al asesor si no hay contacto en el tiempo acordado.',
					'Registro del origen y la campaña en cada oportunidad.',
					'Cierre con motivo de pérdida obligatorio, para poder analizar.',
				],
			],

			[ 'h2', 'Errores que hacen fracasar la integración' ],
			[
				'ul',
				[
					'Elegir el CRM antes de definir el proceso comercial: la herramienta no crea el método.',
					'Migrar datos sucios: duplicados y contactos sin teléfono válido arruinan la confianza en el sistema.',
					'Obligar a registrar demasiados campos: si al asesor le cuesta tiempo, no lo usará.',
					'No integrar el canal principal y mantener una parte de las conversaciones fuera.',
					'No definir quién es el dueño del proceso después de la implementación.',
				],
			],

			[ 'h2', 'Protección de datos' ],
			[ 'p', 'Al centralizar conversaciones estás tratando datos personales. Registra la autorización con fecha y canal, limita quién puede ver qué, define por cuánto tiempo conservas la información y habilita un procedimiento simple para atender solicitudes de eliminación o de no contacto. Es un requisito legal y, además, evita conflictos.' ],
			[ 'p', 'Para el flujo completo de captura y seguimiento, revisa <a href="{url:post:automatizar-captura-de-leads-crm}">del formulario al CRM</a>, y si quieres que un agente responda fuera de horario, <a href="{url:post:agentes-de-ia-para-ventas}">agentes de ventas con IA</a>. Conoce nuestro servicio de <a href="{url:servicio:automatizacion-procesos}">automatización de procesos</a> o <a href="{url:pagina:contacto}">cuéntanos qué canales usas</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Puedo integrar WhatsApp sin la API oficial?', 'Existen soluciones que conectan un teléfono por vías no oficiales, pero incumplen las condiciones de la plataforma y exponen tu número a bloqueos. Para una operación empresarial, la API oficial es el camino.' ],
			[ '¿Cuánto cuesta la API de WhatsApp Business?', 'Se cobra por conversación, con tarifas que varían según el tipo y el país, más el costo del proveedor de la plataforma que uses. Conviene estimarlo con tu volumen real de conversaciones antes de decidir.' ],
			[ '¿Qué CRM conviene para una pyme?', 'El que tu equipo vaya a usar. Antes de comparar funciones, define tu proceso comercial y elige la herramienta más simple que lo soporte; sobran empresas con un CRM potente y vacío.' ],
			[ '¿Los asesores pueden seguir usando su número personal?', 'No es recomendable: el historial queda fuera de la empresa y no hay trazabilidad ni continuidad si esa persona se va. Un número corporativo con varios agentes resuelve el problema sin quitarle agilidad al asesor.' ],
		],
		'seo_title' => 'Integrar tu CRM con WhatsApp, correo y web',
		'seo_desc'  => 'Cómo centralizar WhatsApp, correo y formularios en tu CRM: API oficial, arquitectura, qué automatizar primero, errores y protección de datos.',
	],
];

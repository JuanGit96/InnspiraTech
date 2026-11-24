<?php
/**
 * Artículo: Notificaciones push.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'notificaciones-push-buenas-practicas',
	'title'      => 'Notificaciones push que no molestan (y aumentan el uso de tu app)',
	'date'       => '2027-02-19 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Apps móviles', 'Notificaciones push', 'Retención', 'UX' ],
	'servicio'   => 'desarrollo-apps-moviles',
	'image'      => [
		'file' => 'post-notificaciones-push.jpg',
		'alt'  => 'Portada del artículo Notificaciones push que no molestan — InnspiraTech',
	],
	'excerpt'    => 'Una notificación mal usada hace que desinstalen tu app. Cuándo pedir el permiso, qué tipos de mensaje funcionan, cómo segmentar y qué métricas vigilar para no quemar a tus usuarios.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Las notificaciones son el canal más directo que existe: llegan a la pantalla de bloqueo, sin algoritmos de por medio. Y por eso mismo son el más fácil de arruinar: basta una semana de mensajes irrelevantes para que el usuario las desactive o elimine la app.' ],

			[ 'h2', 'El permiso: el momento decide todo' ],
			[ 'p', 'El error más común es pedir el permiso al abrir la app por primera vez, cuando el usuario aún no sabe qué gana. La tasa de aceptación cae y, una vez negado, recuperarlo es muy difícil.' ],
			[
				'ol',
				[
					'<strong>Explica antes de pedir:</strong> una pantalla propia que diga qué notificaciones enviarás y con qué frecuencia.',
					'<strong>Pide en el momento de valor:</strong> después de una compra ("te avisamos cuando salga tu pedido"), al agendar, al configurar una alerta.',
					'<strong>Ofrece elegir tipos</strong> desde el inicio: pedidos sí, promociones quizá.',
					'<strong>Si lo niegan, respétalo</strong> y ofrece alternativas dentro de la app; insistir con ventanas repetidas solo genera desinstalaciones.',
				],
			],

			[ 'h2', 'Tipos de notificación, de mejor a peor recibidos' ],
			[
				'table',
				[
					'head' => [ 'Tipo', 'Ejemplo', 'Aceptación' ],
					'rows' => [
						[ 'Transaccional', '"Tu pedido salió para entrega"', 'Muy alta' ],
						[ 'Recordatorio útil', '"Tu cita es mañana a las 10"', 'Alta' ],
						[ 'Acción pendiente', '"Tienes una cotización por aprobar"', 'Alta' ],
						[ 'Personalizada por interés', '"Volvió el producto que buscabas"', 'Media-alta' ],
						[ 'Contenido nuevo', '"Publicamos una guía sobre…"', 'Media' ],
						[ 'Promoción general', '"20 % en todo hoy"', 'Baja' ],
						[ 'Reenganche genérico', '"¡Te extrañamos!"', 'Muy baja' ],
					],
				],
			],
			[ 'p', 'Regla simple: si la notificación no le sirve al usuario aunque no compre nada, probablemente no deberías enviarla.' ],

			[ 'h2', 'Cómo escribirlas' ],
			[
				'ul',
				[
					'<strong>Específicas:</strong> "Tu pedido 4821 llega hoy entre 2 y 4 p. m." vence a "Novedades de tu pedido".',
					'<strong>Cortas:</strong> el texto se corta en la pantalla de bloqueo; lo importante va primero.',
					'<strong>Con una acción clara</strong> y que lleve a la pantalla correcta dentro de la app, no al inicio.',
					'<strong>Sin mayúsculas sostenidas ni signos de exclamación en exceso.</strong>',
					'<strong>Sin falsas urgencias</strong> ni mensajes que simulan ser de otra persona.',
				],
			],

			[ 'h2', 'Frecuencia y horarios' ],
			[ 'p', 'Define un tope por usuario y por semana según el tipo de app, y aplícalo técnicamente, no por buena voluntad del área de marketing. Respeta horarios: nada fuera de la franja razonable salvo notificaciones críticas, y considera la zona horaria de cada usuario, no la de tu oficina.' ],
			[ 'p', 'Las notificaciones transaccionales no deberían contar dentro de ese tope: son las que el usuario quiere recibir.' ],

			[ 'h2', 'Segmentación: el antídoto contra el ruido' ],
			[ 'p', 'Enviar a toda la base es cómodo y destruye el canal. Segmenta al menos por comportamiento —quién compró, quién dejó algo a medias, quién no entra hace un mes—, por preferencias declaradas y por etapa del ciclo de vida. Una notificación bien segmentada a mil personas rinde más que una genérica a cien mil, y no quema tu base.' ],

			[ 'h2', 'Qué medir' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Qué revela' ],
					'rows' => [
						[ 'Tasa de permiso aceptado', 'Qué tan bien pides el permiso' ],
						[ 'Apertura por tipo de notificación', 'Qué mensajes valen la pena' ],
						[ 'Acción posterior', 'Si la notificación generó algo más que un toque' ],
						[ 'Desactivación de notificaciones', 'La señal más importante de fatiga' ],
						[ 'Desinstalaciones tras campañas', 'Costo real de una campaña agresiva' ],
					],
				],
			],
			[ 'p', 'Vigila especialmente las dos últimas: una campaña puede mostrar buena apertura y, al mismo tiempo, estar costándote usuarios.' ],

			[ 'h2', 'Lo técnico que no puede fallar' ],
			[
				'ul',
				[
					'Centro de preferencias dentro de la app para elegir qué recibir.',
					'Manejo correcto de tokens: renovarlos y eliminar los inválidos.',
					'Pruebas en ambos sistemas operativos y con la app cerrada.',
					'Enlaces profundos que lleven a la pantalla exacta.',
					'Reintentos y registro de envíos para diagnosticar problemas.',
					'Cumplimiento de las reglas de las tiendas sobre uso promocional de notificaciones.',
				],
			],
			[ 'p', 'Para retener usuarios desde el inicio, revisa <a href="{url:post:onboarding-de-usuarios-app}">cómo diseñar el onboarding de tu app</a> y <a href="{url:post:metricas-de-apps-moviles}">las métricas que importan</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-apps-moviles}">desarrollo de apps móviles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuántas notificaciones puedo enviar al mes?', 'Depende del tipo de app: una de mensajería envía muchas y son bienvenidas; una tienda con dos promocionales por semana ya puede resultar excesiva. Guíate por la tasa de desactivación, que es el indicador más honesto.' ],
			[ '¿Qué hago si el usuario negó el permiso?', 'Respétalo y usa canales alternativos: mensajes dentro de la app, correo o un canal de mensajería si lo autorizó. Puedes volver a ofrecer las notificaciones más adelante, en un momento de valor claro y sin insistir.' ],
			[ '¿Las notificaciones web funcionan igual?', 'El concepto es el mismo, con soporte que varía entre navegadores y sistemas. Suelen tener menor aceptación y mayor desactivación, así que conviene usarlas solo para contenido realmente relevante.' ],
			[ '¿Sirven para recuperar usuarios inactivos?', 'Solo si el mensaje aporta algo concreto y personalizado. Las notificaciones genéricas de reenganche tienen muy baja efectividad y suelen provocar desinstalaciones.' ],
		],
		'seo_title' => 'Notificaciones push que no molestan',
		'seo_desc'  => 'Buenas prácticas de notificaciones push: cuándo pedir el permiso, qué tipos funcionan, cómo redactarlas, frecuencia, segmentación y métricas de fatiga.',
	],
];

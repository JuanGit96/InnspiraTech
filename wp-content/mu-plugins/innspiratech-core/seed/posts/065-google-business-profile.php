<?php
/**
 * Artículo: Google Business Profile.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'google-business-profile',
	'title'      => 'Google Business Profile: guía completa para empresas y negocios locales',
	'date'       => '2027-04-26 09:00:00',
	'categories' => [ 'marketing-digital' ],
	'tags'       => [ 'Google Business Profile', 'SEO local', 'Marketing digital', 'Reseñas' ],
	'servicio'   => 'marketing-digital',
	'image'      => [
		'file' => 'post-google-business-profile.jpg',
		'alt'  => 'Portada del artículo Google Business Profile: guía completa — InnspiraTech',
	],
	'excerpt'    => 'Es el activo digital gratuito con mayor retorno para un negocio con clientes locales. Cómo crearlo, optimizarlo, conseguir reseñas y usar las funciones que casi nadie aprovecha.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Cuando alguien busca un servicio "cerca de mí", Google muestra primero un mapa con tres negocios. Estar ahí suele traer más llamadas que cualquier campaña, y la ficha que lo hace posible es gratuita. Aun así, la mayoría de empresas la tiene incompleta, desactualizada o ni siquiera reclamada.' ],

			[ 'h2', 'Qué es y para quién sirve' ],
			[ 'p', 'Es el perfil de tu negocio en Google: aparece en el buscador y en Maps con tu ubicación, horario, teléfono, fotos, reseñas y servicios. Sirve para cualquier empresa que atienda clientes en una zona geográfica, tenga o no local visible al público. Incluso una consultora que trabaja de forma remota puede usarlo definiendo el área de servicio.' ],

			[ 'h2', 'Configuración correcta desde el inicio' ],
			[
				'ol',
				[
					'<strong>Reclama o crea la ficha</strong> y verifícala por el método que Google te ofrezca.',
					'<strong>Nombre exacto de tu negocio,</strong> sin agregar palabras clave: es una de las causas más comunes de suspensión.',
					'<strong>Categoría principal precisa</strong> y hasta nueve secundarias; es el factor que más influye en qué búsquedas apareces.',
					'<strong>Dirección o área de servicio,</strong> según atiendas en tu local o vayas donde el cliente.',
					'<strong>Horario real,</strong> incluidos los festivos: los horarios equivocados generan reseñas negativas.',
					'<strong>Teléfono local y enlace al sitio,</strong> con parámetros de seguimiento para medir el tráfico que llega desde la ficha.',
					'<strong>Descripción del negocio</strong> orientada a lo que resuelves, no a adjetivos.',
					'<strong>Lista de servicios y productos</strong> con descripciones propias.',
				],
			],

			[ 'h2', 'Lo que casi nadie usa y sí funciona' ],
			[
				'table',
				[
					'head' => [ 'Función', 'Para qué sirve' ],
					'rows' => [
						[ 'Publicaciones', 'Novedades, promociones y eventos; mantienen la ficha activa' ],
						[ 'Preguntas y respuestas', 'Puedes publicar y responder tus propias preguntas frecuentes' ],
						[ 'Mensajes', 'Conversación directa desde la ficha; responde rápido o desactívalo' ],
						[ 'Fotos periódicas', 'Las fichas con fotos recientes suelen recibir más interacción' ],
						[ 'Atributos', 'Accesibilidad, formas de pago, servicios en línea' ],
						[ 'Estadísticas', 'Qué búsquedas te encuentran y qué acciones toman' ],
					],
				],
			],

			[ 'h2', 'Reseñas: el factor que más pesa' ],
			[ 'p', 'Las reseñas influyen en el posicionamiento local y, sobre todo, en la decisión de quien te compara con otros dos negocios. Tres reglas:' ],
			[
				'ul',
				[
					'<strong>Pídelas siempre,</strong> en el momento de mayor satisfacción, con un enlace directo. No pedirlas es el error más común.',
					'<strong>Nunca las compres ni las incentives con regalos:</strong> viola las políticas y puede costarte la ficha.',
					'<strong>Responde todas,</strong> buenas y malas. La respuesta a una crítica la leen decenas de futuros clientes, y una respuesta serena y concreta a veces vende más que cinco elogios.',
				],
			],
			[ 'p', 'Ante una reseña injusta o falsa, repórtala y responde de forma pública, breve y profesional, sin revelar datos del cliente ni entrar en discusión.' ],

			[ 'h2', 'Coherencia de datos en internet' ],
			[ 'p', 'Tu nombre, dirección y teléfono deben ser idénticos en tu sitio web, directorios, redes sociales y cualquier otra plataforma. Las inconsistencias confunden a los buscadores y debilitan el posicionamiento local. Haz una revisión anual de esos datos, sobre todo si cambiaste de sede o de teléfono.' ],

			[ 'h2', 'Qué medir cada mes' ],
			[
				'ul',
				[
					'Llamadas, solicitudes de ruta y clics al sitio desde la ficha.',
					'Búsquedas por las que apareces: de marca frente a genéricas.',
					'Número de reseñas nuevas y calificación promedio.',
					'Conversiones en tu sitio provenientes de la ficha, con parámetros de seguimiento.',
				],
			],

			[ 'h2', 'Errores que cuestan la ficha' ],
			[
				'ul',
				[
					'Agregar palabras clave al nombre del negocio.',
					'Usar una dirección que no corresponde a una operación real.',
					'Crear varias fichas para la misma sede.',
					'Dejar mensajes activos sin responder durante días.',
					'Publicar fotos de archivo genéricas en lugar de fotos reales.',
				],
			],
			[ 'p', 'Para la estrategia local completa —páginas por ciudad, directorios y contenido— revisa <a href="{url:post:seo-local}">SEO local: cómo aparecer en el mapa de Google</a>, y si vendes a empresas, <a href="{url:post:seo-para-empresas-b2b}">SEO para empresas B2B</a>. Conoce nuestro servicio de <a href="{url:servicio:marketing-digital}">marketing digital</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Sirve si no tengo local abierto al público?', 'Sí. Puedes configurar el perfil como negocio con área de servicio, ocultando la dirección y definiendo las zonas donde atiendes. Es lo habitual en servicios técnicos, consultorías y empresas que visitan al cliente.' ],
			[ '¿Cuántas reseñas necesito?', 'No hay un número mágico; lo que cuenta es tener más que tus competidores directos, con calificación sólida y flujo constante. Diez reseñas recientes pesan más que cincuenta de hace tres años.' ],
			[ '¿Puedo tener varias fichas si tengo varias sedes?', 'Sí, una por sede con dirección y teléfono propios, administradas desde una misma cuenta. Lo que no se permite es duplicar fichas de la misma ubicación.' ],
			[ '¿Con qué frecuencia debo publicar?', 'Una o dos veces al mes es suficiente para mantener la ficha activa, siempre que el contenido aporte algo: una novedad, un servicio, un caso o una promoción real.' ],
		],
		'seo_title' => 'Google Business Profile: guía completa',
		'seo_desc'  => 'Cómo optimizar tu ficha de Google Business Profile: categorías, área de servicio, publicaciones, reseñas, coherencia de datos y errores a evitar.',
	],
];

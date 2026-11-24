<?php
/**
 * Artículo: MCP remoto, despliegue y monitoreo.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'mcp-remoto-despliegue',
	'title'      => 'MCP remoto: despliegue, escalado y monitoreo en producción',
	'date'       => '2027-07-30 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'Infraestructura', 'Monitoreo', 'DevOps' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-mcp-remoto.jpg',
		'alt'  => 'Portada del artículo MCP remoto: despliegue, escalado y monitoreo — InnspiraTech',
	],
	'excerpt'    => 'Pasar un servidor MCP del computador del desarrollador a un servicio que usan cientos de personas exige otra ingeniería. Arquitectura de despliegue, autenticación, escalado, observabilidad y checklist de producción.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un servidor MCP local funciona en la máquina de quien lo usa y solo para esa persona. Un servidor remoto es un servicio en internet: lo usan muchos clientes a la vez, necesita autenticación, disponibilidad y monitoreo, y cualquier fallo afecta a todos.' ],
			[ 'p', 'Es la modalidad natural para productos comerciales y para uso corporativo, y exige tratarlo como cualquier servicio crítico.' ],

			[ 'h2', 'Arquitectura de referencia' ],
			[
				'table',
				[
					'head' => [ 'Componente', 'Responsabilidad' ],
					'rows' => [
						[ 'Punto de entrada con TLS', 'Terminación segura, protección básica ante abusos' ],
						[ 'Servidor de autorización', 'Identidad del usuario y emisión de tokens' ],
						[ 'Instancias del servidor MCP', 'Atienden las sesiones y exponen las herramientas' ],
						[ 'Almacén de sesiones', 'Estado compartido cuando hay varias instancias' ],
						[ 'Capa de acceso a sistemas', 'Consultas a tus APIs internas con permisos del usuario' ],
						[ 'Observabilidad', 'Registros, métricas, trazas y alertas' ],
					],
				],
			],

			[ 'h2', 'Transporte y sesiones' ],
			[ 'p', 'Los servidores remotos usan transportes sobre HTTP definidos por la especificación del protocolo, que conviene seguir en su versión vigente para mantener compatibilidad con los clientes. Dos implicaciones prácticas: las conexiones pueden durar más que una petición web normal, y si ejecutas varias instancias necesitas que una sesión pueda continuar aunque la siguiente petición llegue a otra instancia.' ],
			[ 'p', 'Configura el balanceador y los tiempos de espera pensando en eso; son la causa más común de desconexiones misteriosas en producción.' ],

			[ 'h2', 'Autenticación' ],
			[
				'ul',
				[
					'Autorización basada en estándares, que es lo que esperan los clientes compatibles.',
					'Tokens emitidos para tu servidor y validados en cada petición, con vida corta.',
					'Nunca reenviar el token del usuario a otros servicios: el servidor usa sus propias credenciales de forma controlada.',
					'Integración con el directorio corporativo cuando el uso es interno.',
					'Revocación inmediata y registro de cada autorización.',
				],
			],

			[ 'h2', 'Escalado' ],
			[
				'ol',
				[
					'<strong>Instancias sin estado local,</strong> con sesiones en un almacén compartido.',
					'<strong>Escalado horizontal</strong> según conexiones activas y consumo, no solo CPU.',
					'<strong>Límites por cliente</strong> para que uno no degrade al resto.',
					'<strong>Caché</strong> de respuestas frecuentes en herramientas de solo lectura.',
					'<strong>Protección de los sistemas internos:</strong> colas y límites para no saturar el ERP con picos de consultas.',
					'<strong>Tiempos máximos por herramienta,</strong> con respuesta clara si se exceden.',
				],
			],

			[ 'h2', 'Observabilidad' ],
			[
				'table',
				[
					'head' => [ 'Qué medir', 'Para qué' ],
					'rows' => [
						[ 'Sesiones activas y nuevas', 'Adopción y dimensionamiento' ],
						[ 'Latencia por herramienta', 'Detectar la que degrada la experiencia' ],
						[ 'Errores por herramienta y por cliente', 'Diagnóstico y soporte' ],
						[ 'Consumo por cliente', 'Facturación, límites y abusos' ],
						[ 'Fallos de autenticación', 'Seguridad y problemas de integración' ],
						[ 'Disponibilidad externa', 'Saber que está caído antes que el cliente' ],
					],
				],
			],
			[ 'p', 'Registra cada llamada con un identificador de traza que permita seguirla hasta los sistemas internos, sin guardar datos sensibles en claro.' ],

			[ 'h2', 'Despliegues sin cortar sesiones' ],
			[ 'p', 'Publica nuevas versiones de forma gradual, con instancias nuevas que entran mientras las antiguas terminan sus sesiones. Mantén compatibilidad hacia atrás en las herramientas y ten siempre un camino rápido para revertir.' ],

			[ 'h2', 'Checklist de producción' ],
			[
				'ul',
				[
					'TLS, autenticación estándar y tokens de vida corta.',
					'Varias instancias, sesiones compartidas y balanceador configurado para conexiones largas.',
					'Límites por cliente y por herramienta.',
					'Monitoreo externo de disponibilidad y alertas.',
					'Registros con traza, sin datos sensibles.',
					'Despliegue gradual y reversa probada.',
					'Procedimiento de revocación de accesos.',
					'Página de estado si tienes clientes externos.',
				],
			],
			[ 'p', 'Antes de desplegar, revisa <a href="{url:post:seguridad-en-servidores-mcp}">seguridad en servidores MCP</a>; para la distribución, <a href="{url:post:publicar-servidor-mcp}">cómo publicar tu servidor MCP</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuándo conviene un servidor MCP remoto en lugar de local?', 'Cuando lo usarán varias personas o clientes, cuando necesitas controlar versiones y accesos de forma centralizada, o cuando conecta sistemas corporativos que no deben quedar expuestos en cada computador.' ],
			[ '¿Qué infraestructura necesito?', 'La misma que un servicio web crítico: contenedores o instancias escalables, balanceador, almacén de sesiones, servidor de autorización y observabilidad. Puede empezar pequeño y crecer con el uso.' ],
			[ '¿Por qué se cortan las sesiones con varios servidores?', 'Normalmente porque el estado de la sesión vive en una instancia y la siguiente petición llega a otra, o porque el balanceador cierra conexiones largas. Se resuelve con sesiones compartidas y tiempos de espera adecuados.' ],
			[ '¿Cómo protejo mis sistemas internos de picos de uso?', 'Con límites por cliente, colas, caché en herramientas de lectura y réplicas para consultas. El servidor MCP debe absorber los picos en lugar de trasladarlos al ERP.' ],
		],
		'seo_title' => 'MCP remoto: despliegue, escalado y monitoreo',
		'seo_desc'  => 'Cómo llevar un servidor MCP a producción: arquitectura, transporte y sesiones, autenticación, escalado horizontal, observabilidad, despliegues y checklist.',
	],
];

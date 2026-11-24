<?php
/**
 * Artículo: Publicar y distribuir un servidor MCP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'publicar-servidor-mcp',
	'title'      => 'Cómo publicar y distribuir tu servidor MCP',
	'date'       => '2027-03-22 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'Distribución', 'Producto', 'Documentación' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-publicar-mcp.jpg',
		'alt'  => 'Portada del artículo Cómo publicar y distribuir tu servidor MCP — InnspiraTech',
	],
	'excerpt'    => 'Construiste el servidor: ahora hay que hacerlo encontrable y fácil de conectar. Formas de distribución, qué documentar, cómo versionar sin romper clientes y qué mirar para saber si lo usan.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un servidor MCP que nadie puede encontrar ni conectar en cinco minutos es un proyecto interno, no un producto. La distribución es tan importante como la construcción, y tiene sus propias reglas.' ],

			[ 'h2', 'Formas de distribución' ],
			[
				'table',
				[
					'head' => [ 'Modalidad', 'Cómo llega al usuario', 'Cuándo conviene' ],
					'rows' => [
						[ 'Servidor remoto', 'El cliente configura una URL y se autentica', 'Producto comercial y para no técnicos' ],
						[ 'Paquete instalable', 'Se instala y se ejecuta en la máquina del usuario', 'Herramientas de desarrollo y uso local' ],
						[ 'Contenedor', 'Imagen lista para desplegar', 'Empresas que quieren ejecutarlo en su infraestructura' ],
						[ 'Código abierto', 'El usuario lo despliega y lo adapta', 'Adopción y comunidad' ],
					],
				],
			],
			[ 'p', 'Para un producto comercial, el servidor remoto es casi siempre el camino: controlas la versión, mides el uso y el usuario no instala nada. Para herramientas dirigidas a desarrolladores, la instalación local sigue siendo lo más cómodo.' ],

			[ 'h2', 'La documentación es el producto' ],
			[ 'p', 'Un usuario debe pasar de descubrirte a tener algo funcionando en pocos minutos. Tu documentación necesita:' ],
			[
				'ol',
				[
					'<strong>Qué resuelve,</strong> en dos frases y con un ejemplo concreto de pregunta que ahora puede responder su asistente.',
					'<strong>Instalación o conexión</strong> en un bloque copiable, para cada cliente compatible principal.',
					'<strong>Autenticación</strong> explicada paso a paso, con capturas si hace falta.',
					'<strong>Catálogo de herramientas</strong> con qué hace cada una y qué devuelve.',
					'<strong>Ejemplos de uso reales,</strong> no ejercicios de juguete.',
					'<strong>Límites y cupos</strong> por plan.',
					'<strong>Solución de problemas</strong> con los errores más comunes.',
					'<strong>Registro de cambios</strong> y política de versiones.',
				],
			],

			[ 'h2', 'Hacerlo encontrable' ],
			[
				'ul',
				[
					'Regístralo en los directorios y registros de servidores MCP disponibles, y mantén la ficha al día.',
					'Publica una página propia en tu sitio, optimizada para búsquedas como "MCP de [tu categoría]".',
					'Escribe un artículo mostrando un caso de uso completo; es lo que mejor convierte.',
					'Aparece donde está tu público técnico: comunidades, foros y listas del sector.',
					'Si aplica, publica el cliente de ejemplo en un repositorio público.',
				],
			],

			[ 'h2', 'Versionado sin romper a nadie' ],
			[ 'p', 'Una vez que otros dependen de tu servidor, cualquier cambio incompatible es un incidente. Las reglas básicas:' ],
			[
				'ul',
				[
					'Agregar herramientas o parámetros opcionales: siempre seguro.',
					'Renombrar o eliminar herramientas: cambio incompatible, requiere aviso y periodo de transición.',
					'Cambiar el formato de una respuesta: tratarlo como cambio incompatible.',
					'Marcar como obsoleto antes de eliminar, con fecha y alternativa indicada.',
					'Comunicar cada cambio por el canal donde estén tus usuarios, no solo en el registro de cambios.',
				],
			],

			[ 'h2', 'Operación de un servidor remoto' ],
			[ 'p', 'Al publicar, pasas a operar un servicio: monitoreo de disponibilidad, alertas, límites por cliente, estado público del servicio si tienes clientes empresariales, y un canal de soporte. Define desde el inicio qué nivel de servicio comprometes, porque tus usuarios integrarán tu servidor en flujos que dependen de él.' ],

			[ 'h2', 'Qué medir' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Qué revela' ],
					'rows' => [
						[ 'Conexiones activas', 'Adopción real, no descargas' ],
						[ 'Herramientas más usadas', 'Dónde está el valor; qué eliminar' ],
						[ 'Errores por herramienta', 'Diseño confuso o validaciones mal explicadas' ],
						[ 'Tiempo hasta la primera llamada exitosa', 'Calidad de tu documentación' ],
						[ 'Retención a 30 días', 'Si resuelve un problema real o solo despertó curiosidad' ],
					],
				],
			],
			[ 'p', 'La cuarta es la más reveladora: si los usuarios tardan horas en lograr su primera llamada, el problema casi nunca es técnico, es de documentación.' ],
			[ 'p', 'Para el modelo de negocio, revisa <a href="{url:post:modelos-de-precio-para-vender-mcp}">cómo vender tu servidor MCP</a>; para el despliegue, <a href="{url:post:mcp-remoto-despliegue}">MCP remoto: despliegue, escalado y monitoreo</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Dónde se publican los servidores MCP?', 'Existen registros y directorios donde se listan servidores disponibles, además de los catálogos de algunos clientes compatibles. Complementa siempre con tu propia página y con contenido que muestre el caso de uso.' ],
			[ '¿Conviene publicarlo como código abierto?', 'Ayuda a la adopción y a la confianza técnica, y es compatible con un modelo comercial si ofreces una versión alojada con soporte, cupos y funciones empresariales. Decide qué parte abres antes de publicar.' ],
			[ '¿Cómo manejo cambios que rompen compatibilidad?', 'Anunciándolos con antelación, manteniendo la versión anterior durante un periodo de transición y marcando lo obsoleto con una alternativa clara. Cambiar sin aviso es la forma más rápida de perder usuarios.' ],
			[ '¿Qué nivel de servicio debo ofrecer?', 'El que puedas sostener. Para usuarios técnicos, una página de estado y soporte por correo puede bastar; para clientes empresariales, se esperan compromisos formales de disponibilidad y tiempos de respuesta.' ],
		],
		'seo_title' => 'Cómo publicar y distribuir tu servidor MCP',
		'seo_desc'  => 'Formas de distribuir un servidor MCP, qué documentar para que se conecte en minutos, cómo hacerlo encontrable, versionado sin romper clientes y qué medir.',
	],
];

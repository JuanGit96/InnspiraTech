<?php
/**
 * Artículo: MCP, APIs o plugins.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'mcp-vs-api-vs-plugins',
	'title'      => 'MCP, APIs o plugins: en qué se diferencian y cuándo usar cada uno',
	'date'       => '2027-04-09 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'API', 'Integraciones', 'Arquitectura' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-mcp-vs-api.jpg',
		'alt'  => 'Portada del artículo MCP, APIs o plugins: en qué se diferencian — InnspiraTech',
	],
	'excerpt'    => 'No compiten: resuelven capas distintas. Qué aporta MCP frente a una API tradicional, dónde encajan los plugins y cómo decidir qué construir para conectar tus sistemas con la IA.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una confusión frecuente en los comités técnicos: "si ya tenemos API, ¿para qué MCP?". La respuesta corta es que no son alternativas. Una API define cómo dos sistemas intercambian datos; MCP define cómo un modelo de IA descubre y usa esas capacidades sin que alguien programe la integración a la medida.' ],

			[ 'h2', 'Qué es cada cosa' ],
			[
				'table',
				[
					'head' => [ '', 'API tradicional', 'MCP', 'Plugin o extensión' ],
					'rows' => [
						[ 'Para quién', 'Otro programa, escrito por un desarrollador', 'Un modelo de IA, en tiempo de ejecución', 'Una plataforma concreta' ],
						[ 'Cómo se descubre', 'Leyendo documentación', 'El servidor anuncia sus herramientas', 'Catálogo de la plataforma' ],
						[ 'Quién decide qué llamar', 'El código', 'El modelo, según la conversación', 'El usuario o la plataforma' ],
						[ 'Estandarización', 'Cada API es distinta', 'Protocolo común', 'Propio de cada plataforma' ],
						[ 'Portabilidad', 'Alta, con integración por cliente', 'Alta: sirve para cualquier cliente compatible', 'Baja: atado a su plataforma' ],
					],
				],
			],

			[ 'h2', 'La diferencia práctica' ],
			[ 'p', 'Con una API, para que un asistente consulte tus pedidos alguien tiene que escribir el código que llama a esa API, interpretar la respuesta y decidir cuándo usarla. Si mañana cambias de asistente, hay que rehacerlo.' ],
			[ 'p', 'Con MCP, tu servidor declara "tengo una herramienta llamada consultar_pedido que recibe un número y devuelve el estado". Cualquier cliente compatible la descubre y la usa cuando la conversación lo requiere, sin desarrollo adicional. Esa es toda la diferencia, y es grande: pasa de una integración por cada asistente a una sola integración para todos.' ],

			[ 'h2', 'MCP no reemplaza tu API' ],
			[ 'p', 'Un servidor MCP bien construido <strong>se apoya</strong> en tu API existente. La arquitectura correcta es por capas: tus sistemas exponen una API con la lógica de negocio y las validaciones, y el servidor MCP traduce esas capacidades a herramientas con nombres y descripciones pensadas para que un modelo las use bien.' ],
			[ 'p', 'Exponer directamente la base de datos o dar acceso sin control es el error que convierte una integración útil en un riesgo de seguridad. Lo tratamos en <a href="{url:post:conectar-erp-con-ia-mcp}">cómo conectar tu ERP con la IA usando MCP</a>.' ],

			[ 'h2', 'Cuándo construir cada uno' ],
			[
				'ul',
				[
					'<strong>API:</strong> siempre. Es la base de cualquier integración entre sistemas, con o sin IA.',
					'<strong>MCP:</strong> cuando quieres que asistentes y agentes usen tus datos o ejecuten acciones en tu plataforma, sin desarrollar una integración para cada uno.',
					'<strong>Plugin o extensión:</strong> cuando tu público vive dentro de una plataforma específica y quieres estar en su catálogo.',
					'<strong>Integración directa a la medida:</strong> cuando necesitas control total del flujo y un solo destino conocido.',
				],
			],

			[ 'h2', 'Qué cambia al diseñar para un modelo' ],
			[ 'p', 'Una API se diseña para un programador que lee documentación; una herramienta MCP se diseña para un modelo que decide en el momento. Eso cambia varias cosas:' ],
			[
				'ol',
				[
					'<strong>Nombres y descripciones explícitos:</strong> son la documentación que el modelo lee.',
					'<strong>Pocas herramientas y bien delimitadas,</strong> en lugar de decenas de variantes.',
					'<strong>Respuestas acotadas:</strong> devolver diez mil filas no ayuda y encarece cada llamada.',
					'<strong>Errores comprensibles</strong> que indiquen qué hacer a continuación.',
					'<strong>Distinción clara entre leer y escribir,</strong> con confirmación explícita para lo segundo.',
				],
			],
			[ 'p', 'Lo desarrollamos en <a href="{url:post:diseno-de-herramientas-mcp}">cómo diseñar buenas herramientas MCP</a>.' ],

			[ 'h2', 'La decisión de negocio' ],
			[ 'p', 'Si tu empresa vende acceso a datos, a un catálogo o a una capacidad operativa, MCP es un canal de distribución nuevo: estar disponible donde los usuarios ya trabajan con sus asistentes. Si tu empresa consume servicios, MCP reduce el costo de conectar herramientas internas con IA. En ambos casos, el prerrequisito es el mismo: tener una API interna ordenada y con permisos bien definidos.' ],
			[ 'p', 'Para empezar, revisa <a href="{url:post:que-es-mcp-model-context-protocol}">qué es MCP y cómo monetizarlo</a> y <a href="{url:post:como-crear-un-servidor-mcp}">cómo crear un servidor MCP paso a paso</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">cuéntanos qué quieres conectar</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Necesito MCP si ya tengo una API REST?', 'Solo si quieres que modelos de IA usen tus capacidades sin desarrollar una integración por cada cliente. Para integraciones entre sistemas tradicionales, tu API sigue siendo el camino.' ],
			[ '¿MCP reemplazará a las APIs?', 'No. MCP se apoya en ellas: es una capa de presentación de capacidades hacia los modelos. Las APIs siguen siendo la base donde viven la lógica de negocio y los controles.' ],
			[ '¿Puedo exponer un sistema antiguo sin API mediante MCP?', 'Técnicamente sí, pero lo recomendable es construir primero una capa de acceso que encapsule las consultas y reglas. Exponer directamente una base de datos a un modelo es un riesgo difícil de controlar.' ],
			[ '¿Qué pasa con la seguridad frente a una API tradicional?', 'Los principios son los mismos —autenticación, permisos mínimos, registro— más un riesgo propio: instrucciones maliciosas en el contenido que el modelo procesa. Se mitiga acotando herramientas y exigiendo confirmación humana para acciones sensibles.' ],
		],
		'seo_title' => 'MCP, APIs o plugins: en qué se diferencian',
		'seo_desc'  => 'Diferencias entre MCP, APIs y plugins, cuándo construir cada uno, cómo se complementan y qué cambia al diseñar herramientas para modelos de IA.',
	],
];

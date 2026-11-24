<?php
/**
 * Artículo: Diseño de herramientas MCP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'diseno-de-herramientas-mcp',
	'title'      => 'Cómo diseñar buenas herramientas MCP para que la IA las use bien',
	'date'       => '2027-06-04 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'Diseño de API', 'Agentes de IA', 'Buenas prácticas' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-diseno-herramientas-mcp.jpg',
		'alt'  => 'Portada del artículo Cómo diseñar buenas herramientas MCP — InnspiraTech',
	],
	'excerpt'    => 'La diferencia entre un servidor MCP que funciona y uno que confunde al modelo está en el diseño de sus herramientas. Principios, nombres, parámetros, respuestas y errores, con ejemplos concretos.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un servidor MCP puede estar técnicamente impecable y aun así ser inútil: el modelo llama a la herramienta equivocada, pasa parámetros que no entiende o recibe una respuesta tan larga que se pierde. El protocolo resuelve la comunicación; el diseño de las herramientas resuelve el resto.' ],
			[ 'p', 'Estos son los principios que aplicamos, aprendidos a fuerza de ver qué falla en producción.' ],

			[ 'h2', 'Principio 1: pocas herramientas, bien delimitadas' ],
			[ 'p', 'Exponer cuarenta herramientas parecidas es la forma más rápida de confundir al modelo. Es preferible un conjunto pequeño que cubra tareas completas: en lugar de <em>buscar_cliente_por_nombre</em>, <em>buscar_cliente_por_documento</em> y <em>buscar_cliente_por_correo</em>, una sola herramienta <em>buscar_cliente</em> con un parámetro de criterio.' ],
			[ 'p', 'Como regla, si dos herramientas se usan siempre juntas, probablemente deben ser una sola.' ],

			[ 'h2', 'Principio 2: el nombre y la descripción son la documentación' ],
			[ 'p', 'El modelo elige qué llamar leyendo esos textos. Deben decir qué hace, cuándo usarla y cuándo no.' ],
			[
				'table',
				[
					'head' => [ 'Mal', 'Bien' ],
					'rows' => [
						[ 'get_data', 'consultar_estado_pedido' ],
						[ '"Obtiene información"', '"Devuelve el estado actual y la fecha estimada de entrega de un pedido a partir de su número. Usar cuando el cliente pregunta por su pedido."' ],
						[ '"Procesa una solicitud"', '"Crea una cotización en estado borrador. No la envía al cliente ni compromete precios; requiere aprobación humana."' ],
					],
				],
			],

			[ 'h2', 'Principio 3: parámetros explícitos y validados' ],
			[
				'ul',
				[
					'Tipos claros y valores permitidos declarados, no texto libre donde se espera una opción.',
					'Parámetros obligatorios mínimos; el resto, con valores por defecto razonables.',
					'Formatos declarados de fecha y de moneda, sin ambigüedad.',
					'Validación en el servidor: nunca confiar en lo que llega, aunque venga del modelo.',
					'Mensajes de validación que expliquen qué se esperaba.',
				],
			],

			[ 'h2', 'Principio 4: respuestas acotadas y útiles' ],
			[ 'p', 'Devolver mil registros no ayuda: satura el contexto, encarece cada llamada y hace que el modelo se pierda. Devuelve lo necesario, con paginación cuando corresponda, e incluye un resumen antes del detalle.' ],
			[ 'p', 'Agrega siempre metadatos de contexto: de cuándo son los datos, cuántos resultados hay en total y qué filtros se aplicaron. Eso permite al modelo responder con precisión en lugar de suponer.' ],

			[ 'h2', 'Principio 5: los errores deben enseñar qué hacer' ],
			[
				'table',
				[
					'head' => [ 'Error', 'Respuesta útil' ],
					'rows' => [
						[ 'Pedido no encontrado', '"No existe un pedido con ese número. Verifica el dato o busca por documento del cliente."' ],
						[ 'Sin permisos', '"El usuario no tiene acceso a esta información. Deriva a un asesor."' ],
						[ 'Parámetro inválido', '"La fecha debe tener formato AAAA-MM-DD."' ],
						[ 'Servicio no disponible', '"El sistema está temporalmente fuera de servicio. Intenta más tarde o escala el caso."' ],
					],
				],
			],
			[ 'p', 'Un error genérico deja al modelo improvisando, y ahí es donde aparecen las respuestas inventadas.' ],

			[ 'h2', 'Principio 6: separa lectura de escritura' ],
			[ 'p', 'Las herramientas que solo consultan pueden ejecutarse libremente. Las que modifican deben estar claramente marcadas, crear documentos en borrador siempre que sea posible y exigir confirmación humana explícita para efectos definitivos. Nombra las herramientas de forma que la diferencia sea evidente.' ],

			[ 'h2', 'Principio 7: pruébalo con un modelo, no solo con un script' ],
			[ 'p', 'La prueba definitiva es conversacional: pídele a un asistente que resuelva diez tareas reales usando tu servidor y observa qué herramienta elige, qué parámetros arma y dónde se traba. Casi siempre descubrirás que un nombre confunde, que falta un dato en la respuesta o que hace dos llamadas donde debería hacer una.' ],
			[ 'p', 'Documenta esos casos y conviértelos en tu banco de pruebas: cada cambio del servidor debe pasarlo.' ],

			[ 'h2', 'Checklist de diseño' ],
			[
				'ol',
				[
					'¿Cada herramienta resuelve una tarea completa del usuario?',
					'¿El nombre dice qué hace sin necesidad de leer la descripción?',
					'¿La descripción indica cuándo usarla y cuándo no?',
					'¿Los parámetros tienen tipos y valores permitidos declarados?',
					'¿Las respuestas son acotadas, con resumen y contexto temporal?',
					'¿Los errores explican el siguiente paso?',
					'¿Está clara la diferencia entre consultar y modificar?',
					'¿Existe un banco de casos que se ejecuta antes de cada cambio?',
				],
			],
			[ 'p', 'Para lo técnico de base, revisa <a href="{url:post:como-crear-un-servidor-mcp}">cómo crear un servidor MCP paso a paso</a>; para los controles, <a href="{url:post:seguridad-en-servidores-mcp}">seguridad en servidores MCP</a>; y para los errores más comunes, <a href="{url:post:errores-comunes-servidores-mcp}">errores al construir servidores MCP</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuántas herramientas debe tener un servidor MCP?', 'Las menos posibles que cubran los casos de uso reales. Conjuntos pequeños y bien delimitados funcionan mejor que catálogos extensos, porque el modelo elige con más precisión.' ],
			[ '¿Debo exponer toda mi API como herramientas MCP?', 'No. Una API está pensada para desarrolladores; las herramientas MCP, para tareas que un asistente resuelve en una conversación. Selecciona y combina operaciones en lugar de traducir uno a uno.' ],
			[ '¿Cómo evito que el modelo use una herramienta cuando no debe?', 'Con descripciones que indiquen explícitamente cuándo no usarla, validaciones en el servidor y, para acciones sensibles, confirmación humana. La descripción orienta; la validación protege.' ],
			[ '¿Qué tan largas deben ser las respuestas?', 'Lo mínimo que responda la pregunta, con paginación para listados y un resumen al inicio. Respuestas enormes encarecen cada llamada y reducen la calidad de la respuesta final.' ],
		],
		'seo_title' => 'Cómo diseñar buenas herramientas MCP',
		'seo_desc'  => 'Principios para diseñar herramientas MCP: alcance, nombres y descripciones, parámetros validados, respuestas acotadas y errores útiles.',
	],
];

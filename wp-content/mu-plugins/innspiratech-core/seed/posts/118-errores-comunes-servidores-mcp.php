<?php
/**
 * Artículo: Errores comunes al construir servidores MCP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'errores-comunes-servidores-mcp',
	'title'      => 'Errores comunes al construir servidores MCP',
	'date'       => '2027-08-27 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'Buenas prácticas', 'Arquitectura', 'Agentes de IA' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-errores-mcp.jpg',
		'alt'  => 'Portada del artículo Errores comunes al construir servidores MCP — InnspiraTech',
	],
	'excerpt'    => 'Traducir la API completa a herramientas, dar acceso de administrador, devolver respuestas gigantes. Diez errores que vemos una y otra vez en servidores MCP y cómo corregirlos.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Construir un servidor MCP que funcione en una demostración es rápido. Construir uno que funcione bien con usuarios reales, sea seguro y no dispare los costos exige evitar una serie de errores que se repiten en casi todos los primeros proyectos.' ],

			[ 'h2', '1. Traducir la API uno a uno' ],
			[ 'p', 'Cada endpoint se convierte en una herramienta y el modelo termina con cincuenta opciones parecidas. <strong>Corrección:</strong> diseña herramientas por tarea del usuario, combinando operaciones cuando se usan juntas.' ],

			[ 'h2', '2. Descripciones vagas' ],
			[ 'p', '"Obtiene datos" no le dice al modelo cuándo usarla. <strong>Corrección:</strong> describe qué hace, qué devuelve, cuándo usarla y cuándo no. Es la documentación que el modelo realmente lee.' ],

			[ 'h2', '3. Acceso de administrador para todos' ],
			[ 'p', 'El servidor se conecta a los sistemas internos con una cuenta con todos los permisos. Cualquier usuario ve todo. <strong>Corrección:</strong> identifica a la persona y consulta con sus permisos.' ],

			[ 'h2', '4. Consultas libres' ],
			[ 'p', 'Una herramienta que acepta SQL o comandos arbitrarios es la puerta abierta a extracciones masivas y a manipulaciones. <strong>Corrección:</strong> consultas preparadas con parámetros validados.' ],

			[ 'h2', '5. Respuestas gigantes' ],
			[ 'p', 'Devolver miles de registros satura el contexto, encarece cada llamada y empeora la respuesta final. <strong>Corrección:</strong> paginación, resúmenes y solo los campos necesarios.' ],

			[ 'h2', '6. Errores genéricos' ],
			[ 'p', '"Error 500" deja al modelo adivinando, y ahí aparecen respuestas inventadas. <strong>Corrección:</strong> mensajes que expliquen qué pasó y qué hacer a continuación.' ],

			[ 'h2', '7. Escritura sin confirmación' ],
			[ 'p', 'El agente crea, modifica o elimina registros sin que una persona lo apruebe. <strong>Corrección:</strong> documentos en borrador y confirmación humana para acciones definitivas o irreversibles.' ],

			[ 'h2', '8. Secretos en el cliente' ],
			[ 'p', 'Llaves de API en la configuración que se distribuye al usuario. <strong>Corrección:</strong> los secretos viven en el servidor; el cliente se autentica, no recibe credenciales de tus sistemas.' ],

			[ 'h2', '9. Sin límites ni registros' ],
			[ 'p', 'Un agente mal configurado hace miles de llamadas en minutos y nadie sabe qué pasó. <strong>Corrección:</strong> cupos por usuario, tiempos máximos, registro de cada llamada y alertas de consumo anómalo.' ],

			[ 'h2', '10. Probar solo con scripts' ],
			[ 'p', 'Las pruebas unitarias pasan, pero en una conversación real el modelo elige mal la herramienta o arma mal los parámetros. <strong>Corrección:</strong> un banco de tareas reales probadas con un asistente antes de cada versión.' ],

			[ 'h2', 'Resumen para revisar tu servidor' ],
			[
				'table',
				[
					'head' => [ 'Área', 'Pregunta de control' ],
					'rows' => [
						[ 'Diseño', '¿Cada herramienta resuelve una tarea completa con descripción clara?' ],
						[ 'Seguridad', '¿Se respetan los permisos del usuario y se validan los parámetros?' ],
						[ 'Respuestas', '¿Son acotadas, con contexto y errores útiles?' ],
						[ 'Acciones', '¿Lo irreversible exige confirmación humana?' ],
						[ 'Operación', '¿Hay límites, registros y alertas?' ],
						[ 'Calidad', '¿Existe un banco de pruebas conversacionales?' ],
					],
				],
			],
			[ 'p', 'Para cada área en detalle, revisa <a href="{url:post:diseno-de-herramientas-mcp}">cómo diseñar buenas herramientas MCP</a>, <a href="{url:post:seguridad-en-servidores-mcp}">seguridad en servidores MCP</a> y <a href="{url:post:mcp-remoto-despliegue}">MCP remoto en producción</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">solicita una revisión de tu servidor</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuál es el error más grave?', 'Dar al servidor acceso de administrador a los sistemas internos sin respetar los permisos de cada usuario, porque convierte cualquier uso del asistente en una posible fuga de información.' ],
			[ '¿Cómo sé si mis herramientas están bien diseñadas?', 'Pídele a un asistente que resuelva tareas reales con tu servidor y observa qué herramienta elige y con qué parámetros. Si se equivoca con frecuencia, el problema suele estar en nombres, descripciones o en tener demasiadas opciones.' ],
			[ '¿Puedo corregir estos errores sin rehacer el servidor?', 'La mayoría sí: descripciones, límites, paginación, mensajes de error y confirmaciones se agregan de forma progresiva. Los problemas de permisos pueden requerir cambios más profundos en la capa de acceso.' ],
			[ '¿Cada cuánto revisar un servidor en producción?', 'Revisa registros y consumo cada semana, y haz una revisión completa de diseño y seguridad antes de cada versión relevante o cuando cambien los sistemas conectados.' ],
		],
		'seo_title' => 'Errores comunes al construir servidores MCP',
		'seo_desc'  => 'Diez errores frecuentes en servidores MCP —herramientas mal diseñadas, permisos excesivos, respuestas gigantes, escritura sin control— y cómo corregir cada uno.',
	],
];

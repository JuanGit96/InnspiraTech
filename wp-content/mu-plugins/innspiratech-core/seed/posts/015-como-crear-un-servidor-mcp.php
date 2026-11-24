<?php
/**
 * Artículo: Cómo crear un servidor MCP paso a paso.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'como-crear-un-servidor-mcp',
	'title'      => 'Cómo crear un servidor MCP paso a paso: guía práctica con buenas prácticas de seguridad',
	'date'       => '2026-07-29 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'Model Context Protocol', 'Python', 'Desarrollo' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-crear-mcp.jpg',
		'alt'  => 'Portada del artículo Cómo crear un servidor MCP paso a paso — InnspiraTech',
	],
	'excerpt'    => 'Tutorial para construir tu primer servidor MCP en Python: cómo diseñar las herramientas, el código base, cómo probarlo con MCP Inspector, cómo conectarlo a un asistente y qué revisar antes de llevarlo a producción.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Si ya entendiste <a href="{url:post:que-es-mcp-model-context-protocol}">qué es MCP y por qué importa</a>, el siguiente paso es construir uno. Esta guía es para equipos técnicos, pero los apartados de diseño y seguridad le sirven a cualquier responsable que deba aprobar el proyecto.' ],
			[ 'p', 'Usaremos Python y el SDK oficial, con un ejemplo realista: exponer el inventario de una empresa para que un asistente de IA pueda consultarlo.' ],

			[ 'h2', 'Antes de programar: diseña las herramientas' ],
			[ 'p', 'El error más común es exponer la API completa y esperar que el modelo se las arregle. Una herramienta MCP es una <strong>tarea de negocio</strong>, no un endpoint. Debe tener un nombre claro, una descripción que explique cuándo usarla y una respuesta compacta.' ],
			[
				'table',
				[
					'head' => [ 'Herramienta poco útil', 'Herramienta bien diseñada' ],
					'rows' => [
						[ 'get_data(tabla, filtros)', 'consultar_stock(sku)' ],
						[ 'Devuelve 4.000 filas en bruto', 'Devuelve el dato solicitado y su bodega' ],
						[ 'Descripción: "consulta la base de datos"', 'Descripción: "Devuelve las unidades disponibles de un producto por su SKU"' ],
						[ 'Permite escribir y borrar sin restricción', 'Solo lectura; las acciones sensibles piden confirmación' ],
					],
				],
			],
			[ 'p', 'Empieza con tres o cuatro herramientas que resuelvan las preguntas más frecuentes de tu operación. Es mejor un servidor pequeño y confiable que uno enorme que el modelo usa mal.' ],

			[ 'h2', 'Requisitos' ],
			[
				'ul',
				[
					'Python 3.10 o superior.',
					'El gestor de paquetes <em>uv</em> (o pip, si lo prefieres).',
					'Un cliente compatible con MCP para probar, como un asistente de escritorio o un editor con soporte del protocolo.',
				],
			],

			[ 'h2', 'Paso 1: crear el proyecto' ],
			[ 'code', "uv init servidor-inventario\ncd servidor-inventario\nuv add \"mcp[cli]\"" ],

			[ 'h2', 'Paso 2: escribir el servidor' ],
			[ 'p', 'El SDK incluye una interfaz de alto nivel que convierte funciones de Python en herramientas y recursos con muy poco código. Crea el archivo <em>servidor.py</em>:' ],
			[ 'code', "from mcp.server.fastmcp import FastMCP\n\nmcp = FastMCP(\"inventario\")\n\nPRODUCTOS = {\n    \"LIC-PRO\": {\"disponibles\": 128, \"bodega\": \"Bogotá\"},\n    \"LIC-BASIC\": {\"disponibles\": 40, \"bodega\": \"Medellín\"},\n}\n\n\n@mcp.tool()\ndef consultar_stock(sku: str) -> dict:\n    \"\"\"Devuelve las unidades disponibles de un producto a partir de su SKU.\"\"\"\n    producto = PRODUCTOS.get(sku.upper())\n    if producto is None:\n        return {\"sku\": sku, \"error\": \"SKU no encontrado\"}\n    return {\"sku\": sku.upper(), **producto}\n\n\n@mcp.resource(\"catalogo://productos\")\ndef listar_productos() -> str:\n    \"\"\"Lista de SKU disponibles en el catálogo.\"\"\"\n    return \"\\n\".join(PRODUCTOS)\n\n\nif __name__ == \"__main__\":\n    mcp.run()" ],
			[ 'p', 'Tres detalles importantes: el <strong>docstring</strong> de cada función es lo que lee el modelo para decidir cuándo usarla, los <strong>tipos</strong> de los parámetros generan la validación automática del esquema, y la respuesta debe ser compacta y fácil de interpretar.' ],

			[ 'h2', 'Paso 3: probarlo con MCP Inspector' ],
			[ 'p', 'Antes de conectarlo a un asistente, pruébalo con la herramienta de inspección oficial, que muestra las herramientas expuestas y permite ejecutarlas manualmente:' ],
			[ 'code', "uv run mcp dev servidor.py" ],
			[ 'p', 'Verifica que los nombres se entiendan sin contexto adicional, que los errores devuelvan mensajes útiles y que ninguna respuesta incluya datos innecesarios.' ],

			[ 'h2', 'Paso 4: conectarlo a un asistente' ],
			[ 'p', 'Los clientes de escritorio se configuran con un archivo JSON donde declaras cómo arrancar tu servidor:' ],
			[ 'code', "{\n  \"mcpServers\": {\n    \"inventario\": {\n      \"command\": \"uv\",\n      \"args\": [\"--directory\", \"/ruta/al/proyecto\", \"run\", \"servidor.py\"]\n    }\n  }\n}" ],
			[ 'p', 'Reinicia el cliente y pregunta algo como "¿cuántas unidades de LIC-PRO hay disponibles?". Si todo está bien, el asistente llamará a tu herramienta y responderá con el dato real.' ],

			[ 'h2', 'Paso 5: de local a remoto' ],
			[ 'p', 'Un servidor local sirve para un desarrollador. Para que lo use toda la empresa —o tus clientes— necesitas exponerlo por HTTP:' ],
			[ 'code', "if __name__ == \"__main__\":\n    mcp.run(transport=\"streamable-http\")" ],
			[ 'p', 'En ese escenario hay que agregar autenticación basada en OAuth, publicarlo detrás de HTTPS, empaquetarlo en un contenedor y monitorear su uso. Es el punto donde un prototipo se convierte en producto.' ],

			[ 'h2', 'Checklist de seguridad antes de producción' ],
			[
				'ul',
				[
					'<strong>Permisos mínimos:</strong> credenciales de solo lectura cuando la herramienta solo consulta.',
					'<strong>Validación de entradas:</strong> nunca construyas consultas concatenando texto recibido del modelo.',
					'<strong>Confirmación humana</strong> para acciones irreversibles: pagos, borrados, envíos a clientes.',
					'<strong>Límites de uso</strong> por usuario y por herramienta, para controlar costos y abusos.',
					'<strong>Registros de auditoría:</strong> quién pidió qué, cuándo y con qué resultado.',
					'<strong>Aislamiento por usuario:</strong> que cada quien acceda solo a sus datos.',
					'<strong>Cuidado con el prompt injection:</strong> el contenido que devuelve una herramienta puede traer instrucciones maliciosas; trátalo como dato, no como orden.',
					'<strong>Dependencias revisadas</strong> y actualizadas.',
				],
			],

			[ 'h2', 'Buenas prácticas de diseño' ],
			[
				'ul',
				[
					'Nombres en el lenguaje del negocio, no del esquema de la base de datos.',
					'Descripciones que digan cuándo usar la herramienta y cuándo no.',
					'Respuestas cortas y estructuradas, con paginación si el resultado puede ser grande.',
					'Errores explicativos: "SKU no encontrado" es mejor que un código 500.',
					'Operaciones idempotentes siempre que sea posible.',
					'Versiona tu servidor: los clientes conectados dependen de su estabilidad.',
				],
			],

			[ 'h2', 'Del prototipo al producto' ],
			[ 'p', 'Este mismo servidor, con autenticación, medición de consumo y documentación, puede convertirse en una línea de ingresos si tu empresa tiene datos o una API que otras organizaciones quieran usar desde sus asistentes. Los modelos de monetización los explicamos en <a href="{url:post:que-es-mcp-model-context-protocol}">qué es MCP y cómo monetizarlo</a>.' ],
			[ 'p', '¿Quieres construirlo con acompañamiento? Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Qué lenguaje conviene para crear un servidor MCP?', 'Existen SDK oficiales para TypeScript, Python, Go, Java y C#, entre otros. Lo más práctico es usar el mismo lenguaje del sistema que vas a exponer, para reutilizar su código y sus credenciales.' ],
			[ '¿Local o remoto?', 'Local es ideal para desarrollo y para herramientas personales. Remoto por HTTP es lo que necesitas cuando varios usuarios o clientes deben acceder al mismo servidor con autenticación centralizada.' ],
			[ '¿Cómo pruebo el servidor sin un asistente?', 'Con la herramienta de inspección oficial puedes listar y ejecutar las herramientas manualmente, revisar los esquemas y depurar antes de conectar cualquier cliente.' ],
			[ '¿Cómo evito que la IA ejecute algo peligroso?', 'Exponiendo solo herramientas necesarias, con permisos mínimos, validación de entradas, confirmación humana para acciones sensibles y registros de auditoría de cada llamada.' ],
		],
		'seo_title' => 'Cómo crear un servidor MCP paso a paso (guía práctica)',
		'seo_desc'  => 'Tutorial para crear un servidor MCP en Python: diseño de herramientas, código de ejemplo, pruebas con MCP Inspector, despliegue y seguridad para producción.',
	],
];

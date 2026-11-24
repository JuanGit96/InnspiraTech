<?php
/**
 * Artículo: Conectar el ERP con la IA usando MCP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'conectar-erp-con-ia-mcp',
	'title'      => 'Cómo conectar tu ERP con la IA usando MCP: arquitectura de referencia',
	'date'       => '2027-02-12 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'MCP', 'ERP', 'Integraciones', 'Agentes de IA' ],
	'servicio'   => 'desarrollo-servidores-mcp',
	'image'      => [
		'file' => 'post-erp-ia-mcp.jpg',
		'alt'  => 'Portada del artículo Cómo conectar tu ERP con la IA usando MCP — InnspiraTech',
	],
	'excerpt'    => 'Que la IA responda "cuánto vendimos ayer" con datos reales de tu ERP exige mucho más que conectar una API. Arquitectura de referencia, permisos, capa de seguridad y hoja de ruta por fases.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Preguntarle a un asistente "¿cuánto le vendimos a este cliente en el último trimestre y cuánto debe?" y recibir la respuesta correcta en segundos parece trivial. No lo es: esa información vive en el ERP, con permisos, reglas de negocio y un modelo de datos que nadie quiere exponer a la ligera.' ],
			[ 'p', 'El protocolo MCP (Model Context Protocol) resolvió la parte estándar del problema: da una forma común de exponer datos y acciones a los modelos de IA. Lo demás —qué exponer, con qué permisos y con qué controles— sigue siendo trabajo de arquitectura. Esta es la arquitectura de referencia que usamos.' ],

			[ 'h2', 'Qué se gana conectando el ERP' ],
			[
				'ul',
				[
					'Consultas en lenguaje natural sobre ventas, inventario, cartera y compras, sin depender del área de sistemas.',
					'Asistentes comerciales que preparan la visita con el historial real del cliente.',
					'Alertas inteligentes: productos por agotarse, clientes que bajaron su compra, facturas por vencer.',
					'Automatizaciones que ejecutan acciones controladas: crear una cotización, actualizar un dato maestro, generar un pedido en borrador.',
					'Menos reportes a la medida: la gente pregunta en lugar de pedirle un informe a alguien.',
				],
			],

			[ 'h2', 'Arquitectura de referencia en cuatro capas' ],
			[
				'table',
				[
					'head' => [ 'Capa', 'Responsabilidad', 'Decisión clave' ],
					'rows' => [
						[ '1. Origen de datos', 'ERP, base de datos, servicios web existentes', 'Nunca exponer la base directamente al modelo' ],
						[ '2. Capa de acceso', 'API interna con la lógica y las reglas de negocio', 'Consultas preparadas y validadas, no SQL libre' ],
						[ '3. Servidor MCP', 'Herramientas y recursos que la IA puede usar', 'Qué se expone, con qué nombres y qué parámetros' ],
						[ '4. Cliente de IA', 'Asistente, agente o aplicación que consume', 'Quién lo usa y desde dónde' ],
					],
				],
			],
			[ 'p', 'La capa 2 es la que casi todos se saltan y la que evita los desastres. Un servidor MCP que ejecuta consultas SQL arbitrarias sobre el ERP es una puerta abierta: basta una instrucción maliciosa escondida en un documento para que el modelo intente algo que no debía.' ],

			[ 'h2', 'Qué herramientas exponer (y en qué orden)' ],
			[ 'p', 'Empieza por lo que solo lee. Gana confianza, muestra valor y no puede romper nada.' ],
			[
				'table',
				[
					'head' => [ 'Fase', 'Herramientas', 'Riesgo' ],
					'rows' => [
						[ 'Fase 1: consulta', 'Ventas por periodo, existencias, estado de cartera, ficha de cliente', 'Bajo' ],
						[ 'Fase 2: análisis', 'Comparativos, tendencias, productos sin rotación', 'Bajo' ],
						[ 'Fase 3: borradores', 'Crear cotización o pedido en estado borrador', 'Medio: requiere aprobación humana' ],
						[ 'Fase 4: escritura controlada', 'Actualizar datos maestros, confirmar documentos', 'Alto: requiere autorización y auditoría' ],
					],
				],
			],

			[ 'h2', 'Permisos: el usuario, no el servidor' ],
			[ 'p', 'El error más común es que el servidor MCP se conecte al ERP con un único usuario administrador. Si eso ocurre, cualquiera que use el asistente ve todo. La regla es que <strong>los permisos del ERP se respeten</strong>: el servidor debe identificar a la persona que pregunta y consultar con sus propios permisos.' ],
			[
				'ul',
				[
					'Autenticación del usuario en el servidor MCP, idealmente contra tu directorio corporativo.',
					'Traducción de ese usuario al rol correspondiente en el ERP.',
					'Filtrado por zona, sucursal o cartera propia cuando aplique.',
					'Registro de cada consulta: quién, qué preguntó, qué devolvió y cuándo.',
					'Límites de volumen para evitar extracciones masivas de información.',
				],
			],

			[ 'h2', 'Rendimiento: no castigues al ERP' ],
			[ 'p', 'Los ERP no están diseñados para consultas analíticas concurrentes. Si el asistente se vuelve popular, el sistema que factura se pone lento. Soluciones habituales: una réplica de solo lectura, una capa de caché para consultas repetidas, agregados precalculados para preguntas frecuentes y límites de tiempo por consulta.' ],

			[ 'h2', 'Seguridad específica de este escenario' ],
			[
				'table',
				[
					'head' => [ 'Riesgo', 'Control' ],
					'rows' => [
						[ 'Instrucciones maliciosas en documentos o correos', 'Herramientas acotadas; el modelo nunca ejecuta consultas libres' ],
						[ 'Fuga de información', 'Permisos por usuario, límites de resultados y registro de accesos' ],
						[ 'Acciones no autorizadas', 'Confirmación humana explícita para toda escritura' ],
						[ 'Credenciales expuestas', 'Sin llaves en el cliente; el servidor guarda los secretos' ],
						[ 'Errores silenciosos', 'Respuestas que indican de dónde salió el dato y en qué fecha' ],
					],
				],
			],

			[ 'h2', 'Cómo empezar sin arriesgar la operación' ],
			[
				'ol',
				[
					'Elige tres preguntas de negocio que hoy cuestan tiempo y que solo requieren lectura.',
					'Construye la capa de acceso con esas consultas, probadas contra cifras conocidas.',
					'Expón esas consultas como herramientas MCP con nombres y descripciones claras.',
					'Pilotea con un grupo pequeño durante dos semanas y revisa el registro completo.',
					'Mide: tiempo ahorrado, precisión de las respuestas y preguntas que no pudo responder.',
					'Amplía por fases, agregando escritura solo cuando la confianza esté ganada.',
				],
			],
			[ 'p', 'Si aún no conoces el protocolo, empieza por <a href="{url:post:que-es-mcp-model-context-protocol}">qué es MCP y cómo monetizarlo</a> y por <a href="{url:post:como-crear-un-servidor-mcp}">cómo crear un servidor MCP paso a paso</a>. Para el detalle de permisos y auditoría, revisa <a href="{url:post:seguridad-en-servidores-mcp}">seguridad en servidores MCP</a>. ¿Quieres conectar tu ERP con IA de forma segura? Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a> o <a href="{url:pagina:contacto}">cuéntanos qué ERP usas</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Funciona con cualquier ERP?', 'Sí, siempre que exista una forma de consultarlo: API, servicios web, vistas de base de datos o una réplica. En sistemas antiguos sin API, la capa de acceso se construye primero y suele ser la parte más laboriosa.' ],
			[ '¿La información de mi empresa queda expuesta al proveedor del modelo?', 'Depende de la configuración. Los datos viajan al modelo solo cuando se responde una consulta, y puedes limitar qué campos se exponen, usar proveedores con acuerdos de no entrenamiento o desplegar modelos en tu propia infraestructura para casos sensibles.' ],
			[ '¿Puede la IA modificar datos del ERP?', 'Solo si se lo permites. La recomendación es empezar con herramientas de solo lectura y, cuando se habilite escritura, hacerlo sobre documentos en borrador y con confirmación humana registrada.' ],
			[ '¿Cuánto tarda una implementación inicial?', 'Un piloto de consultas de solo lectura sobre tres o cuatro preguntas de negocio puede estar funcionando en unas semanas. El plazo lo determina el acceso a los datos, no el protocolo.' ],
		],
		'seo_title' => 'Conectar tu ERP con la IA usando MCP',
		'seo_desc'  => 'Arquitectura de referencia para conectar tu ERP con IA mediante MCP: capas, herramientas por fases, permisos por usuario, rendimiento y controles de seguridad.',
	],
];

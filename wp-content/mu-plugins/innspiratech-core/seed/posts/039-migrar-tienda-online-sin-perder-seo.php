<?php
/**
 * Artículo: Migrar la tienda online sin perder SEO ni ventas.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'migrar-tienda-online-sin-perder-seo',
	'title'      => 'Cómo migrar tu tienda online sin perder SEO ni ventas',
	'date'       => '2026-11-09 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce', 'Migración', 'SEO técnico', 'WooCommerce' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-migrar-tienda-online.jpg',
		'alt'  => 'Portada del artículo Cómo migrar tu tienda online sin perder SEO ni ventas — InnspiraTech',
	],
	'excerpt'    => 'Cambiar de plataforma es el momento de mayor riesgo para una tienda: URLs, catálogo, clientes, pedidos e integraciones. Plan de migración por fases, con validaciones y plan de reversa.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Cambiar de plataforma de e-commerce es como mudar una tienda física de local: si no avisas, no rediriges a los clientes y no llevas el inventario correcto, abres con las estanterías vacías y sin nadie en la puerta.' ],
			[ 'p', 'Las migraciones que salen mal casi siempre fallan en lo mismo: URLs sin redirección, catálogo incompleto, historial de clientes perdido y pasarelas que nadie probó. Esta es la ruta para que no ocurra.' ],

			[ 'h2', 'Antes de migrar: decide si realmente necesitas hacerlo' ],
			[ 'p', 'Migrar tiene costo y riesgo. Se justifica cuando la plataforma actual te impide crecer: no soporta el catálogo, no integra con tu ERP, los costos escalan sin control, el rendimiento es malo o dependes de desarrollos que nadie puede mantener. Si el problema es de diseño o de configuración, casi siempre es más barato arreglarlo donde estás. Compara opciones en <a href="{url:post:woocommerce-vs-shopify-vs-magento-vs-vtex}">WooCommerce vs. Shopify vs. Magento vs. VTEX</a>.' ],

			[ 'h2', 'Fase 1: inventario de lo que existe' ],
			[
				'table',
				[
					'head' => [ 'Qué inventariar', 'Por qué' ],
					'rows' => [
						[ 'Todas las URLs con tráfico e impresiones', 'Definir el mapa de redirecciones' ],
						[ 'Catálogo: productos, variantes, atributos, imágenes', 'Nada puede quedar fuera del traslado' ],
						[ 'Clientes y direcciones', 'Historial y programas de fidelización' ],
						[ 'Pedidos históricos', 'Servicio posventa, garantías y contabilidad' ],
						[ 'Reseñas y contenido generado', 'Son activos de conversión y de SEO' ],
						[ 'Integraciones activas', 'ERP, facturación, transportadoras, pagos, marketing' ],
						[ 'Reglas comerciales', 'Promociones, listas de precios, envíos e impuestos' ],
					],
				],
			],

			[ 'h2', 'Fase 2: mapa de URLs, la clave del SEO' ],
			[ 'p', 'Las plataformas estructuran las direcciones de forma distinta. Si puedes conservar la misma estructura, hazlo: es el camino más seguro. Si no, cada URL antigua necesita una redirección 301 a su equivalente exacta.' ],
			[
				'ul',
				[
					'Producto a producto y categoría a categoría, nunca todo al inicio.',
					'Atención a las URLs con filtros y parámetros: define cuáles se indexan y cuáles no.',
					'Conserva el blog y sus enlaces: suele ser la parte que más tráfico orgánico aporta.',
					'Revisa las páginas de contenido (envíos, devoluciones, preguntas frecuentes): también posicionan.',
					'Evita cadenas de redirecciones y prueba una muestra amplia antes de publicar.',
				],
			],

			[ 'h2', 'Fase 3: migración de datos con validación' ],
			[ 'p', 'Migra en dos tiempos: una carga completa de prueba semanas antes y una carga final con los datos frescos el día del cambio. En ambas, valida con cifras, no con impresiones:' ],
			[
				'ol',
				[
					'Número de productos publicados, agotados y ocultos.',
					'Suma de inventario por categoría.',
					'Cantidad de clientes y de pedidos por periodo.',
					'Precios de una muestra aleatoria de productos, incluidos los que tienen promoción.',
					'Imágenes: que ninguna quede rota y que conserven su texto alternativo.',
					'Impuestos y costos de envío calculados en pedidos de prueba.',
				],
			],

			[ 'h2', 'Fase 4: integraciones y pagos' ],
			[ 'p', 'Es la parte que más sorpresas da. Cada integración debe probarse de punta a punta en el entorno nuevo: pedido que baja al ERP, factura que se emite, guía que se genera con la transportadora, correo transaccional que llega y pago que se acredita.' ],
			[ 'p', 'Con las pasarelas, además: solicita las credenciales de producción con anticipación, prueba cada medio de pago con transacciones reales de bajo monto y confirma que las devoluciones funcionen.' ],

			[ 'h2', 'Fase 5: el día del cambio' ],
			[
				'ol',
				[
					'Elige el día y la hora de menor tráfico y avisa al equipo de atención.',
					'Congela cambios de catálogo y precios durante la ventana de migración.',
					'Ejecuta la carga final de datos y valida las cifras acordadas.',
					'Activa las redirecciones y verifica una muestra de URLs.',
					'Haz una compra real completa, con pago y factura.',
					'Envía el sitemap nuevo en Search Console y revisa que el sitio sea indexable.',
					'Confirma que la analítica y los píxeles miden en la nueva plataforma.',
				],
			],
			[ 'p', 'Ten siempre un plan de reversa: qué se hace si algo crítico falla en las primeras horas, quién decide y cuánto tiempo toma volver atrás. Mantén la plataforma anterior disponible, aunque sea en modo consulta, durante algunas semanas.' ],

			[ 'h2', 'Las cuatro semanas siguientes' ],
			[
				'table',
				[
					'head' => [ 'Qué vigilar', 'Señal de alerta' ],
					'rows' => [
						[ 'Errores 404', 'URLs antiguas sin redirección' ],
						[ 'Tasa de conversión', 'Caída frente a la línea base: revisa checkout y velocidad' ],
						[ 'Carritos abandonados', 'Aumento súbito indica fricción o fallos de pago' ],
						[ 'Indexación de productos', 'Caída de páginas válidas en Search Console' ],
						[ 'Reclamos de clientes', 'Pedidos que no llegan al ERP o correos que no salen' ],
					],
				],
			],
			[ 'p', 'Es normal cierta fluctuación de posiciones durante algunas semanas; lo que no es normal es la caída sostenida de páginas indexadas o de conversión.' ],
			[ 'p', 'Si además vas a integrar la tienda con tu sistema de gestión, revisa <a href="{url:post:integrar-ecommerce-con-erp}">cómo integrar tu e-commerce con el ERP</a>, y para el detalle de SEO en un cambio de sitio, <a href="{url:post:rediseno-web-sin-perder-seo}">rediseño web sin perder posicionamiento</a>. ¿Quieres que nos encarguemos de la migración? Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tiempo toma migrar una tienda online?', 'Depende del tamaño del catálogo y del número de integraciones. Una tienda pequeña sin integraciones complejas puede migrarse en semanas; una operación con ERP, múltiples transportadoras y miles de referencias requiere varios meses de preparación.' ],
			[ '¿Voy a perder posicionamiento?', 'Con el mapa de redirecciones bien hecho y el contenido conservado, la pérdida es temporal y menor. Las caídas grandes se explican casi siempre por redirecciones incompletas o por contenido que se eliminó al migrar.' ],
			[ '¿Se pueden migrar los pedidos históricos?', 'Sí, aunque a veces conviene migrar solo un periodo reciente y conservar el resto en un archivo consultable o en la plataforma anterior en modo lectura. Lo importante es garantizar el servicio posventa y el respaldo contable.' ],
			[ '¿Cuál es el peor momento para migrar?', 'Las semanas previas a una temporada alta. Si tu pico es en noviembre, la migración debe estar estabilizada varios meses antes o posponerse a enero.' ],
		],
		'seo_title' => 'Migrar tu tienda online sin perder SEO ni ventas',
		'seo_desc'  => 'Plan por fases para migrar tu e-commerce: inventario, redirecciones 301, migración de datos validada, integraciones, día del cambio y monitoreo.',
	],
];

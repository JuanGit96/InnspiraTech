<?php
/**
 * Artículo: Pasarelas de pago en Colombia.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'pasarelas-de-pago-colombia',
	'title'      => 'Pasarelas de pago en Colombia: cómo elegir la mejor para tu tienda',
	'date'       => '2027-03-24 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'Pasarelas de pago', 'E-commerce', 'PSE', 'Colombia' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-pasarelas-pago.jpg',
		'alt'  => 'Portada del artículo Pasarelas de pago en Colombia: cuál elegir — InnspiraTech',
	],
	'excerpt'    => 'Comisión, medios de pago, tiempos de desembolso, tasa de aprobación e integración: los cinco criterios que definen cuál pasarela te conviene, y las preguntas exactas que debes hacer antes de firmar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Elegir pasarela de pago parece una decisión de comisiones y termina siendo una decisión de ventas. Una diferencia de medio punto en la comisión importa mucho menos que una diferencia de cinco puntos en la tasa de aprobación de transacciones o que la ausencia del medio de pago que tus clientes prefieren.' ],
			[ 'p', 'Esta guía ordena los criterios y te da las preguntas que debes hacer antes de firmar.' ],

			[ 'h2', 'Los medios de pago que necesitas cubrir' ],
			[
				'ul',
				[
					'<strong>Tarjetas de crédito y débito,</strong> con opción de cuotas o diferido, que en Colombia mueve mucho volumen.',
					'<strong>PSE,</strong> el débito desde cuenta bancaria: imprescindible para tickets medianos y altos.',
					'<strong>Billeteras digitales</strong> muy extendidas en el país.',
					'<strong>Efectivo en puntos físicos,</strong> todavía relevante en varios segmentos.',
					'<strong>Pago contra entrega,</strong> según tu categoría y tu operación logística.',
					'<strong>Financiación en el checkout,</strong> que eleva el ticket promedio en productos de mayor valor.',
				],
			],
			[ 'p', 'Antes de comparar proveedores, revisa qué usan hoy tus clientes. Si vendes a empresas, PSE y transferencia pesan más; si vendes a consumidor final con ticket bajo, tarjetas y billeteras.' ],

			[ 'h2', 'Los cinco criterios de decisión' ],
			[
				'table',
				[
					'head' => [ 'Criterio', 'Qué preguntar', 'Por qué importa' ],
					'rows' => [
						[ 'Costo total', 'Comisión por medio de pago, cargo fijo, impuestos, costos de dispersión y mensualidad', 'Dos ofertas con la misma comisión pueden costar distinto' ],
						[ 'Tasa de aprobación', 'Porcentaje de transacciones aprobadas en tu categoría', 'Cada rechazo es una venta perdida' ],
						[ 'Tiempos de desembolso', 'Cuántos días tarda el dinero en llegar a tu cuenta', 'Impacta directamente el flujo de caja' ],
						[ 'Integración', 'Módulo oficial para tu plataforma, API documentada, ambiente de pruebas', 'Define el costo y el riesgo técnico' ],
						[ 'Soporte y antifraude', 'Canal de soporte, tiempos de respuesta, reglas configurables, manejo de contracargos', 'Se nota el día que algo falla' ],
					],
				],
			],

			[ 'h2', 'La tasa de aprobación: el criterio invisible' ],
			[ 'p', 'Es el porcentaje de intentos de pago que terminan aprobados. Una pasarela con reglas antifraude demasiado agresivas rechaza compras legítimas, y el cliente rara vez vuelve a intentar. Pide el dato para comercios de tu categoría y ticket, y mídelo tú mismo durante los primeros meses.' ],
			[ 'p', 'Si notas rechazos altos, revisa las reglas antifraude, la calidad de los datos que envías en cada transacción y si conviene reintentar automáticamente por otra ruta de procesamiento.' ],

			[ 'h2', 'Preguntas que debes hacer antes de firmar' ],
			[
				'ol',
				[
					'¿Cuál es el costo total por cada medio de pago, con todos los conceptos incluidos?',
					'¿Cuántos días hábiles tarda el desembolso y cómo se puede acelerar?',
					'¿Cuál es su tasa de aprobación promedio en mi categoría?',
					'¿Tienen módulo oficial para mi plataforma y quién lo mantiene?',
					'¿Cómo funciona el proceso de contracargos y quién asume el riesgo?',
					'¿Qué límites de transacciones por minuto soportan en temporada alta?',
					'¿Qué documentación y tiempos exige la vinculación de mi empresa?',
					'¿Puedo hacer devoluciones parciales desde el panel?',
					'¿Qué pasa si quiero irme: hay permanencia mínima o penalidad?',
				],
			],

			[ 'h2', 'Errores frecuentes' ],
			[
				'ul',
				[
					'Elegir solo por comisión y descubrir después que faltan medios de pago clave.',
					'No probar todos los medios con transacciones reales antes de lanzar.',
					'Olvidar los tiempos de desembolso al proyectar el flujo de caja.',
					'No tener una segunda pasarela configurada como respaldo.',
					'Ignorar la conciliación: si el reporte de la pasarela no se cruza fácil con tu contabilidad, el ahorro en comisión se va en horas de trabajo.',
					'No revisar las obligaciones de seguridad y cumplimiento aplicables al manejo de datos de tarjetas.',
				],
			],

			[ 'h2', 'Cuándo conviene tener dos pasarelas' ],
			[ 'p', 'Si tu tienda factura un volumen relevante, dos proveedores te dan continuidad ante caídas, capacidad de comparar tasas de aprobación reales y poder de negociación. El costo adicional es de integración y de conciliación, y suele compensarse desde la primera caída evitada en temporada alta.' ],
			[ 'p', 'Antes de decidir plataforma y pagos, revisa <a href="{url:post:woocommerce-vs-shopify-vs-magento-vs-vtex}">qué plataforma de e-commerce te conviene</a>; para temporada alta, <a href="{url:post:preparar-tienda-online-temporadas-alto-trafico}">cómo preparar tu tienda</a>; y para reducir pagos incompletos, <a href="{url:post:abandono-de-carrito}">15 mejoras contra el abandono de carrito</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto cobran las pasarelas de pago en Colombia?', 'El esquema habitual combina un porcentaje sobre la transacción más un valor fijo, y varía por medio de pago y por volumen del comercio. Las condiciones se negocian, así que pide propuesta formal con todos los conceptos y compara el costo total, no solo el porcentaje.' ],
			[ '¿Necesito PSE en mi tienda?', 'Si vendes en Colombia, prácticamente sí. Muchos compradores prefieren debitar de su cuenta, sobre todo en compras de valor medio y alto, y su ausencia se nota directamente en la conversión.' ],
			[ '¿Puedo usar varias pasarelas al mismo tiempo?', 'Sí, y es recomendable a partir de cierto volumen: da respaldo ante caídas y permite comparar tasas de aprobación. Requiere ordenar bien la conciliación para no complicar la contabilidad.' ],
			[ '¿Quién asume el riesgo de un contracargo?', 'Depende del contrato y del medio de pago. En tarjetas suele recaer en el comercio si no puede demostrar la entrega y la legitimidad de la transacción. Por eso importa documentar envíos y conservar evidencias.' ],
		],
		'seo_title' => 'Pasarelas de pago en Colombia: cuál elegir',
		'seo_desc'  => 'Criterios para elegir pasarela de pago en Colombia: medios disponibles, costo total, tasa de aprobación, desembolsos, integración y preguntas antes de firmar.',
	],
];

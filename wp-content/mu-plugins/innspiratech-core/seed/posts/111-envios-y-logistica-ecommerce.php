<?php
/**
 * Artículo: Envíos y logística en e-commerce.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'envios-y-logistica-ecommerce',
	'title'      => 'Envíos y logística en e-commerce: cómo configurarlos sin perder margen',
	'date'       => '2027-08-11 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce', 'Logística', 'Envíos', 'Márgenes' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-envios-logistica.jpg',
		'alt'  => 'Portada del artículo Envíos y logística en e-commerce — InnspiraTech',
	],
	'excerpt'    => 'El costo de envío es la primera causa de carritos abandonados y una fuga silenciosa de margen. Modelos de cobro, cómo calcular el costo real, integración con transportadoras y cómo manejar devoluciones.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Dos problemas conviven en casi todas las tiendas en línea: el cliente abandona cuando descubre el costo de envío, y la empresa pierde margen porque cobra menos de lo que realmente le cuesta enviar. Resolver ambos a la vez es posible con una configuración pensada.' ],

			[ 'h2', 'Modelos de cobro de envío' ],
			[
				'table',
				[
					'head' => [ 'Modelo', 'Ventaja', 'Riesgo' ],
					'rows' => [
						[ 'Costo real calculado', 'Protege el margen', 'Costos altos o imprevistos generan abandono' ],
						[ 'Tarifa fija por zona', 'Simple y predecible', 'Pierdes en pedidos pesados o lejanos' ],
						[ 'Envío gratis sobre un monto', 'Sube el ticket promedio', 'Si el umbral está mal calculado, regalas margen' ],
						[ 'Envío gratis siempre', 'Máxima conversión', 'Exige incorporar el costo en el precio' ],
						[ 'Retiro en tienda o punto', 'Costo cero y visita física', 'Solo sirve donde tienes presencia' ],
					],
				],
			],
			[ 'p', 'El modelo más usado y equilibrado es el envío gratis a partir de un monto mínimo, con tarifa por zona por debajo de ese monto.' ],

			[ 'h2', 'Cómo calcular el costo real' ],
			[ 'p', 'El costo de envío no es solo lo que cobra la transportadora. Súmale:' ],
			[
				'ul',
				[
					'Empaque y materiales de protección.',
					'Tiempo de alistamiento y despacho.',
					'Seguro de la mercancía.',
					'Recargos por zona de difícil acceso o por peso volumétrico.',
					'Costo de recaudo si ofreces pago contra entrega.',
					'Proporción de devoluciones y reenvíos.',
				],
			],
			[ 'p', 'Con ese costo total por pedido promedio, define el umbral de envío gratis: debe ser suficiente para que el margen adicional de los pedidos que suben al mínimo compense el envío que absorbes.' ],

			[ 'h2', 'Mostrar el costo pronto' ],
			[ 'p', 'El abandono no lo causa tanto el costo como la sorpresa. Muestra el costo de envío o el umbral de gratis en la ficha de producto y en el carrito, permite calcularlo antes de registrarse e indica el tiempo estimado de entrega por ciudad. Una barra que diga "te faltan $35.000 para envío gratis" suele subir el ticket promedio.' ],

			[ 'h2', 'Integración con transportadoras' ],
			[
				'ol',
				[
					'<strong>Cotización automática</strong> en el checkout según destino, peso y dimensiones.',
					'<strong>Generación de guías</strong> desde el pedido, sin digitación.',
					'<strong>Seguimiento</strong> visible para el cliente y notificaciones automáticas de estado.',
					'<strong>Gestión de novedades:</strong> dirección errada, cliente ausente, rechazo.',
					'<strong>Conciliación</strong> de lo facturado por la transportadora contra lo cotizado.',
				],
			],
			[ 'p', 'El punto 5 es donde muchas tiendas pierden dinero sin saberlo: diferencias por peso volumétrico o recargos que nadie revisa.' ],

			[ 'h2', 'Datos de producto: peso y dimensiones' ],
			[ 'p', 'Sin peso y medidas correctas en cada producto, cualquier cálculo automático es incorrecto. Es una tarea tediosa, pero es la base: prioriza los productos más vendidos y los más voluminosos, y exige estos datos al crear referencias nuevas.' ],

			[ 'h2', 'Devoluciones' ],
			[ 'p', 'Una política de devoluciones clara aumenta la conversión, porque reduce el riesgo percibido. Define plazos, condiciones y quién paga el envío de retorno; publícala en la ficha y en el checkout; y facilita el proceso con una solicitud en línea y guía de retorno. Respeta además los derechos del consumidor que aplican a las compras a distancia en tu país, como el derecho de retracto.' ],

			[ 'h2', 'Indicadores logísticos' ],
			[
				'ul',
				[
					'Costo de envío como porcentaje de la venta.',
					'Tiempo desde el pago hasta el despacho.',
					'Entregas a tiempo sobre el total.',
					'Novedades y devoluciones por transportadora.',
					'Diferencias entre costo cotizado y facturado.',
				],
			],
			[ 'p', 'Para la conversión en el checkout, revisa <a href="{url:post:abandono-de-carrito}">15 mejoras contra el abandono de carrito</a>; para conectar la operación, <a href="{url:post:integrar-ecommerce-con-erp}">cómo integrar tu e-commerce con el ERP</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Conviene ofrecer envío gratis?', 'Casi siempre conviene a partir de un monto mínimo bien calculado: aumenta el ticket promedio y reduce el abandono. Ofrecerlo en todos los pedidos exige incorporar el costo al precio de los productos.' ],
			[ '¿Cómo calculo el monto mínimo para envío gratis?', 'Parte de tu ticket promedio y del costo total de envío. Un punto de partida habitual es ubicar el umbral algo por encima del ticket promedio y medir su efecto en conversión y margen.' ],
			[ '¿Qué es el peso volumétrico?', 'Es un peso calculado a partir de las dimensiones del paquete que las transportadoras usan cuando es mayor que el peso real. Ignorarlo es una de las causas más comunes de cobros inesperados.' ],
			[ '¿Conviene trabajar con varias transportadoras?', 'Sí, a partir de cierto volumen: permite elegir la mejor opción por zona, comparar desempeño y tener respaldo en temporada alta. Requiere integración para no complicar la operación.' ],
		],
		'seo_title' => 'Envíos en e-commerce: cómo no perder margen',
		'seo_desc'  => 'Modelos de cobro de envío, cómo calcular el costo real, umbral de envío gratis, integración con transportadoras, devoluciones e indicadores logísticos.',
	],
];

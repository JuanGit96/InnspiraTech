<?php
/**
 * Artículo: E-commerce B2B.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'ecommerce-b2b',
	'title'      => 'E-commerce B2B: cómo vender a otras empresas en línea',
	'date'       => '2027-03-05 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce B2B', 'Ventas', 'Portal de clientes', 'ERP' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-ecommerce-b2b.jpg',
		'alt'  => 'Portada del artículo E-commerce B2B: cómo vender a empresas en línea — InnspiraTech',
	],
	'excerpt'    => 'Vender a empresas en línea no es poner un carrito: son precios por cliente, cupos de crédito, aprobaciones y recompra. Qué necesita un portal B2B y cómo implementarlo sin desplazar a tu fuerza de ventas.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Tus clientes empresariales ya compran en línea en su vida personal y esperan lo mismo de sus proveedores: ver precios, consultar disponibilidad, repetir un pedido y revisar su cartera sin llamar a nadie. Sin embargo, la mayoría de mayoristas y fabricantes sigue tomando pedidos por WhatsApp y correo.' ],
			[ 'p', 'Un portal B2B bien hecho no reemplaza al vendedor: le quita la toma de pedidos repetitivos para que use su tiempo en vender.' ],

			[ 'h2', 'En qué se diferencia del comercio al consumidor' ],
			[
				'table',
				[
					'head' => [ 'Aspecto', 'B2C', 'B2B' ],
					'rows' => [
						[ 'Precios', 'Iguales para todos', 'Listas por cliente, volumen y negociación' ],
						[ 'Acceso', 'Abierto', 'Con registro y aprobación' ],
						[ 'Pago', 'Inmediato', 'Crédito, plazos y cupo' ],
						[ 'Compra', 'Impulso y unidad', 'Recompra, cantidades y presupuesto' ],
						[ 'Decisión', 'Una persona', 'Comprador, aprobador y usuario' ],
						[ 'Documentos', 'Factura simple', 'Orden de compra, remisión, factura, soportes' ],
						[ 'Logística', 'Domicilio estándar', 'Entregas programadas y por sede' ],
					],
				],
			],

			[ 'h2', 'Funciones imprescindibles' ],
			[
				'ul',
				[
					'<strong>Precios por cliente</strong> según su lista y sus acuerdos, visibles solo al iniciar sesión.',
					'<strong>Cupo de crédito y cartera</strong> a la vista, con bloqueo automático si está en mora.',
					'<strong>Repetir pedido anterior</strong> en un clic: es la función más usada de cualquier portal B2B.',
					'<strong>Listas de compra frecuentes</strong> y carga masiva por archivo o por código.',
					'<strong>Varios usuarios por empresa</strong> con roles: quien pide, quien aprueba, quien paga.',
					'<strong>Cotizaciones en línea</strong> que el vendedor pueda ajustar y el cliente aprobar.',
					'<strong>Documentos descargables:</strong> facturas, remisiones y certificados.',
					'<strong>Entregas por sede</strong> y fechas programadas.',
				],
			],

			[ 'h2', 'La integración con el ERP no es opcional' ],
			[ 'p', 'En B2B, el portal sin integración es un formulario elegante. Precios, existencias, cartera y pedidos deben venir y volver al sistema de gestión, porque el cliente empresarial no tolera que le vendan lo que no hay o que le muestren un saldo desactualizado.' ],
			[ 'p', 'Lo tratamos en detalle en <a href="{url:post:integrar-ecommerce-con-erp}">cómo integrar tu e-commerce con el ERP</a>.' ],

			[ 'h2', 'El miedo del equipo comercial' ],
			[ 'p', 'La objeción aparece siempre: "si el cliente compra solo, ¿qué hago yo?". Es una preocupación legítima y se resuelve con diseño, no con discursos:' ],
			[
				'ol',
				[
					'<strong>Respeta la comisión</strong> del vendedor asignado sobre las compras del portal.',
					'<strong>Dale visibilidad:</strong> que vea qué compran sus clientes y reciba alertas cuando alguien deja de comprar.',
					'<strong>Conviértelo en asesor:</strong> el portal atiende la recompra; el vendedor abre cuentas y crece el ticket.',
					'<strong>Involúcralo desde el diseño</strong> y usa a sus mejores clientes como piloto.',
				],
			],

			[ 'h2', 'Cómo implementarlo por fases' ],
			[
				'table',
				[
					'head' => [ 'Fase', 'Alcance', 'Resultado' ],
					'rows' => [
						[ '1', 'Catálogo con precios por cliente y consulta de cartera', 'Menos llamadas para preguntar precio y saldo' ],
						[ '2', 'Pedidos en línea integrados al ERP', 'Se elimina la digitación y bajan los errores' ],
						[ '3', 'Repetición de pedidos, listas y carga masiva', 'Aumenta la frecuencia de compra' ],
						[ '4', 'Cotizaciones, aprobaciones y documentos', 'Ciclo comercial completo en línea' ],
						[ '5', 'Analítica y recomendaciones', 'Detección de caídas de compra y venta cruzada' ],
					],
				],
			],

			[ 'h2', 'Qué medir' ],
			[ 'p', 'Porcentaje de pedidos que entran por el portal frente a canales manuales, frecuencia de compra por cliente, ticket promedio, tiempo entre pedido y despacho, y horas administrativas liberadas. El objetivo no es "tener portal": es que un porcentaje creciente de la operación ocurra ahí.' ],
			[ 'p', 'Para elegir la base tecnológica, revisa <a href="{url:post:woocommerce-vs-shopify-vs-magento-vs-vtex}">qué plataforma de e-commerce elegir</a>, y para el canal masivo, <a href="{url:post:marketplace-o-tienda-propia}">marketplace o tienda propia</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">cuéntanos cómo venden hoy a tus clientes</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Puedo usar una plataforma de e-commerce normal para B2B?', 'Sí, con extensiones o desarrollo para precios por cliente, crédito, roles y aprobaciones. Para operaciones grandes o con reglas comerciales complejas, conviene una plataforma pensada para B2B o un portal a la medida.' ],
			[ '¿Debo mostrar precios públicamente?', 'En B2B lo habitual es mostrarlos solo tras iniciar sesión, porque dependen de la negociación de cada cliente. Puedes publicar rangos o precios de lista para atraer nuevos compradores.' ],
			[ '¿Cómo manejo el crédito en línea?', 'Consultando el cupo y la cartera en el ERP en tiempo real: si el cliente está al día y tiene cupo, el pedido avanza; si no, se ofrece pago anticipado o se bloquea con un mensaje claro.' ],
			[ '¿Los clientes empresariales realmente compran en línea?', 'Cada vez más, sobre todo en recompra de productos conocidos. La adopción crece cuando el portal les ahorra tiempo: ver su precio, repetir un pedido y descargar una factura sin llamar a nadie.' ],
		],
		'seo_title' => 'E-commerce B2B: cómo vender a empresas en línea',
		'seo_desc'  => 'Qué necesita un portal de e-commerce B2B: precios por cliente, crédito, recompra, roles y aprobaciones, integración con el ERP e implementación por fases.',
	],
];

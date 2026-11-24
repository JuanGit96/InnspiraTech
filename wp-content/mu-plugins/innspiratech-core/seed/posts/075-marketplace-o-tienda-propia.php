<?php
/**
 * Artículo: Marketplace o tienda propia.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'marketplace-o-tienda-propia',
	'title'      => '¿Vender en marketplace o en tienda propia? Qué le conviene a tu marca',
	'date'       => '2027-05-19 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce', 'Marketplace', 'Estrategia', 'Ventas' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-marketplace-o-tienda.jpg',
		'alt'  => 'Portada del artículo Marketplace o tienda propia: qué conviene a tu marca — InnspiraTech',
	],
	'excerpt'    => 'El marketplace te presta clientes; la tienda propia te los deja. Comparación de márgenes, datos, marca y riesgo, y la estrategia mixta que usan las marcas que crecen de verdad.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La discusión suele plantearse como una elección excluyente y no lo es. La diferencia de fondo es otra: en un marketplace vendes a <strong>sus</strong> clientes; en tu tienda, construyes <strong>los tuyos</strong>. Ambas cosas sirven, pero no para lo mismo.' ],

			[ 'h2', 'Comparación honesta' ],
			[
				'table',
				[
					'head' => [ 'Criterio', 'Marketplace', 'Tienda propia' ],
					'rows' => [
						[ 'Tráfico inicial', 'Inmediato: ya hay compradores', 'Debes construirlo' ],
						[ 'Comisión por venta', 'Significativa y variable por categoría', 'Solo pasarela de pago' ],
						[ 'Datos del cliente', 'Limitados o inexistentes', 'Tuyos' ],
						[ 'Control de la marca', 'Bajo: compites en una vitrina común', 'Total' ],
						[ 'Precio', 'Presión constante a la baja', 'Defines tu estrategia' ],
						[ 'Costo de arranque', 'Bajo', 'Medio' ],
						[ 'Riesgo de dependencia', 'Alto: cambian reglas y te afectan', 'Bajo' ],
						[ 'Fidelización', 'Difícil: el cliente es del marketplace', 'Posible: correo, contenido, recompra' ],
						[ 'Logística', 'Opciones gestionadas por el canal', 'A tu cargo o con operador' ],
					],
				],
			],

			[ 'h2', 'Cuándo empezar por un marketplace' ],
			[
				'ul',
				[
					'Vendes productos conocidos que la gente busca por su nombre.',
					'Necesitas validar demanda rápido y con poca inversión.',
					'Tu margen soporta la comisión sin quedar en rojo.',
					'No tienes aún capacidad de generar tráfico propio.',
					'Quieres liquidar inventario o llegar a ciudades donde no tienes presencia.',
				],
			],

			[ 'h2', 'Cuándo priorizar tu tienda propia' ],
			[
				'ul',
				[
					'Tu producto necesita explicación, asesoría o configuración.',
					'Tienes marca y quieres controlar cómo se percibe.',
					'La recompra es parte del negocio: consumibles, suscripciones, servicios.',
					'Tu margen no soporta comisiones altas.',
					'Vendes a empresas con precios negociados y condiciones particulares.',
					'Quieres construir una base de datos propia para marketing.',
				],
			],

			[ 'h2', 'La cuenta que hay que hacer' ],
			[ 'p', 'Antes de decidir, calcula la rentabilidad real por canal. Un producto puede ser rentable en tu tienda y dar pérdida en marketplace, o al revés si tu costo de adquisición publicitaria es alto.' ],
			[
				'table',
				[
					'head' => [ 'Concepto', 'Marketplace', 'Tienda propia' ],
					'rows' => [
						[ 'Precio de venta', 'Suele estar presionado a la baja', 'Lo defines tú' ],
						[ 'Comisión del canal', 'Sí', 'No' ],
						[ 'Costo de adquisición', 'Bajo o publicidad interna del canal', 'Publicidad, SEO y contenido' ],
						[ 'Costo de pasarela', 'Incluido normalmente', 'Sí' ],
						[ 'Logística y devoluciones', 'Según el programa del canal', 'A tu cargo' ],
						[ 'Valor de vida del cliente', 'Bajo: no puedes recontactar', 'Alto: recompra y fidelización' ],
					],
				],
			],
			[ 'p', 'El último renglón es el que más se olvida y el que suele cambiar la decisión: un cliente propio que compra tres veces vale mucho más que uno del marketplace que compra una vez y no puedes volver a contactar.' ],

			[ 'h2', 'La estrategia mixta que funciona' ],
			[ 'p', 'Las marcas que crecen suelen usar los dos canales con roles distintos:' ],
			[
				'ol',
				[
					'<strong>Marketplace como canal de descubrimiento:</strong> productos de entrada, referencias más buscadas, liquidaciones.',
					'<strong>Tienda propia como canal de marca y margen:</strong> catálogo completo, combos, personalización, servicio.',
					'<strong>Puentes legítimos entre ambos:</strong> empaque con invitación a registrar la garantía, manuales, contenido de valor. Respetando siempre las reglas del canal.',
					'<strong>Precios coherentes:</strong> no sabotees tu tienda con precios más bajos en el marketplace, ni al revés.',
				],
			],

			[ 'h2', 'El riesgo de depender de un solo canal' ],
			[ 'p', 'Un cambio de comisión, de algoritmo o una suspensión de cuenta pueden borrar la mayor parte de tus ventas de un día para otro. Si un canal representa más del 60 % o 70 % de tus ingresos, la prioridad estratégica no es crecer más ahí: es diversificar.' ],
			[ 'p', 'Para decidir plataforma y montar tu canal propio, revisa <a href="{url:post:woocommerce-vs-shopify-vs-magento-vs-vtex}">qué plataforma de e-commerce elegir</a> y <a href="{url:post:abandono-de-carrito}">cómo reducir el abandono de carrito</a>. Si vendes a empresas, mira <a href="{url:post:ecommerce-b2b}">e-commerce B2B</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto cobran los marketplaces?', 'La comisión varía mucho por categoría y por programa de envío, y puede sumar otros cargos por publicidad interna o logística. Pide la tabla vigente de tu categoría y calcula tu margen real antes de listar productos.' ],
			[ '¿Puedo llevar clientes del marketplace a mi tienda?', 'Contactar directamente a los compradores para desviarlos suele violar las reglas del canal. Lo que sí puedes hacer es incluir materiales de marca en el empaque, ofrecer registro de garantía o contenido útil, dentro de las políticas vigentes.' ],
			[ '¿Conviene tener tienda propia si vendo poco?', 'Sí, aunque sea modesta: es el lugar donde construyes marca, publicas contenido y capturas datos. Puede empezar como catálogo con cotización y crecer a tienda completa cuando el volumen lo justifique.' ],
			[ '¿Qué pasa si el marketplace suspende mi cuenta?', 'Puedes perder ventas de inmediato y el proceso de apelación toma tiempo. Es el argumento más fuerte para no depender de un solo canal y para construir desde el principio una base de clientes propia.' ],
		],
		'seo_title' => 'Marketplace o tienda propia: qué te conviene',
		'seo_desc'  => 'Marketplace o tienda propia: comisiones, datos del cliente, marca, riesgo y rentabilidad real por canal, más la estrategia mixta que funciona.',
	],
];

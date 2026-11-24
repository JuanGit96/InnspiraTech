<?php
/**
 * Artículo: Fichas de producto que venden.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'fichas-de-producto-que-venden',
	'title'      => 'Fichas de producto que venden: estructura, SEO y ejemplos',
	'date'       => '2027-07-14 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce', 'SEO', 'Conversión', 'Contenido' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-fichas-producto.jpg',
		'alt'  => 'Portada del artículo Fichas de producto que venden — InnspiraTech',
	],
	'excerpt'    => 'La ficha de producto es tu vendedor en la tienda en línea. Qué debe incluir, cómo escribir descripciones que posicionen, fotos, reseñas y datos estructurados, con los errores que más ventas cuestan.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'En una tienda física, un vendedor responde dudas, muestra el producto y ayuda a decidir. En línea, ese trabajo lo hace la ficha de producto, y en la mayoría de tiendas lo hace mal: una foto, un nombre técnico y la descripción copiada del fabricante.' ],
			[ 'p', 'Mejorar las fichas es una de las inversiones más rentables de un e-commerce, porque mejora a la vez el posicionamiento y la conversión.' ],

			[ 'h2', 'Estructura de una ficha completa' ],
			[
				'table',
				[
					'head' => [ 'Elemento', 'Qué debe resolver' ],
					'rows' => [
						[ 'Nombre', 'Qué es, marca, modelo y atributo principal, como lo buscaría el cliente' ],
						[ 'Precio y disponibilidad', 'Claros, visibles y actualizados' ],
						[ 'Fotos', 'Varios ángulos, detalle, contexto de uso y escala' ],
						[ 'Beneficios principales', 'Tres a cinco puntos visibles sin desplazar' ],
						[ 'Descripción', 'Para quién es, cómo se usa, qué problema resuelve' ],
						[ 'Especificaciones', 'Tabla con medidas, materiales, compatibilidad' ],
						[ 'Envío y devoluciones', 'Tiempo, costo y política, junto al botón de compra' ],
						[ 'Reseñas', 'Opiniones reales con fotos si es posible' ],
						[ 'Preguntas frecuentes', 'Las dudas que llegan por chat' ],
						[ 'Productos relacionados', 'Complementos y alternativas' ],
					],
				],
			],

			[ 'h2', 'La descripción: no copies la del fabricante' ],
			[ 'p', 'Si usas el mismo texto que otras cincuenta tiendas, Google no tiene motivo para mostrarte a ti. Y el texto del fabricante habla de características; el cliente compra beneficios. Una estructura que funciona:' ],
			[
				'ol',
				[
					'<strong>Primera frase:</strong> qué es y para quién.',
					'<strong>Problema que resuelve</strong> o momento de uso.',
					'<strong>Beneficios convertidos desde características:</strong> "batería de 5.000 mAh" se convierte en "dura el día completo de trabajo".',
					'<strong>Diferencias frente a alternativas</strong> de tu propio catálogo.',
					'<strong>Qué incluye la caja</strong> y qué se compra aparte.',
				],
			],
			[ 'p', 'Si tienes miles de referencias, empieza por los productos que más venden y los que más tráfico reciben. Las fichas del resto pueden mejorarse por categorías con plantillas y revisión.' ],

			[ 'h2', 'SEO de la ficha' ],
			[
				'ul',
				[
					'Título con el término que usa el cliente, no el código interno.',
					'URL corta y descriptiva, sin parámetros.',
					'Datos estructurados de producto con precio, disponibilidad y calificación.',
					'Texto alternativo descriptivo en las imágenes.',
					'Contenido propio y suficiente; nada de fichas vacías.',
					'Manejo correcto de variantes: una URL canónica, sin duplicar cada color o talla como página independiente si no se busca por separado.',
					'Productos agotados: mantener la página con alternativas si el producto vuelve; redirigir si se descontinúa.',
				],
			],

			[ 'h2', 'Fotos: el factor que más convierte' ],
			[ 'p', 'El cliente no puede tocar el producto, así que la imagen tiene que reemplazar esa experiencia. Incluye foto principal en fondo limpio, varios ángulos, detalles de acabados, el producto en uso y una referencia de tamaño. En moda y muebles, las medidas y la escala evitan la mayoría de devoluciones.' ],
			[ 'p', 'Optimízalas: imágenes pesadas hacen lenta justo la página donde se decide la compra.' ],

			[ 'h2', 'Reseñas y confianza' ],
			[ 'p', 'Las reseñas influyen de forma decisiva en la compra. Pídelas por correo después de la entrega, facilita subir fotos y responde las negativas con profesionalismo. Nunca las inventes ni filtres solo las positivas: además de riesgo legal y reputacional, un producto con solo calificaciones perfectas genera desconfianza.' ],

			[ 'h2', 'Errores que cuestan ventas' ],
			[
				'ul',
				[
					'Costo de envío que aparece recién en el checkout.',
					'Disponibilidad incierta o producto agotado sin aviso.',
					'Una sola foto pequeña.',
					'Especificaciones incompletas que obligan a escribir por chat.',
					'Botón de compra que se pierde al desplazar en móvil.',
					'Variantes confusas: no queda claro qué color o talla está disponible.',
				],
			],
			[ 'p', 'Para mejorar el paso siguiente, revisa <a href="{url:post:abandono-de-carrito}">15 mejoras contra el abandono de carrito</a>; para medir y probar cambios, <a href="{url:post:optimizacion-de-conversion-cro}">CRO: 12 pruebas para aumentar la conversión</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Qué tan larga debe ser la descripción de un producto?', 'La necesaria para resolver las dudas de compra. Productos simples requieren poco texto; productos técnicos o costosos, más detalle. Lo importante es que sea propia y responda lo que el cliente pregunta.' ],
			[ '¿Puedo usar IA para escribir miles de fichas?', 'Sí, como apoyo, a partir de especificaciones reales y con revisión. Fichas generadas sin datos propios ni revisión producen textos genéricos que no posicionan ni convencen, y pueden contener errores de producto.' ],
			[ '¿Qué hago con los productos agotados?', 'Si volverán, mantén la página con aviso de disponibilidad y alternativas. Si se descontinuaron, redirige a la categoría o al reemplazo más cercano para conservar el posicionamiento.' ],
			[ '¿Cómo manejo productos con muchas variantes?', 'Normalmente con una sola página y selector de variantes, que concentra reseñas y autoridad. Solo conviene una página independiente si una variante tiene búsquedas propias relevantes.' ],
		],
		'seo_title' => 'Fichas de producto que venden: estructura y SEO',
		'seo_desc'  => 'Qué debe incluir una ficha de producto, cómo escribir descripciones propias, SEO, fotos, reseñas, variantes, agotados y los errores que más ventas cuestan.',
	],
];

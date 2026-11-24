<?php
/**
 * Artículo: Cómo escribir contenido que posicione y venda.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'como-escribir-contenido-seo',
	'title'      => 'Cómo escribir contenido que posicione en Google y convierta en clientes',
	'date'       => '2027-03-29 09:00:00',
	'categories' => [ 'marketing-digital' ],
	'tags'       => [ 'SEO', 'Contenidos', 'Copywriting', 'Blog' ],
	'servicio'   => 'marketing-digital',
	'image'      => [
		'file' => 'post-contenido-seo.jpg',
		'alt'  => 'Portada del artículo Cómo escribir contenido que posicione y venda — InnspiraTech',
	],
	'excerpt'    => 'Publicar por publicar no trae clientes. El método completo: elegir el tema por intención de búsqueda, estructurar, escribir con autoridad, optimizar y convertir. Con plantilla de artículo incluida.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Muchas empresas publican en su blog durante meses y no reciben una sola solicitud. No es que el contenido no sirva: es que se escribió sin responder a una búsqueda real, sin estructura y sin un camino hacia la venta.' ],
			[ 'p', 'Este es el método que usamos para que cada artículo tenga un trabajo asignado.' ],

			[ 'h2', 'Paso 1: elige el tema por intención, no por gusto' ],
			[ 'p', 'Cada búsqueda tiene una intención, y esa intención define qué debes escribir y qué puedes esperar a cambio.' ],
			[
				'table',
				[
					'head' => [ 'Intención', 'Ejemplo de búsqueda', 'Formato', 'Qué esperar' ],
					'rows' => [
						[ 'Descubrimiento', '"qué es la deuda técnica"', 'Guía explicativa', 'Autoridad y audiencia' ],
						[ 'Comparación', '"woocommerce o shopify"', 'Comparativa con tabla', 'Leads en evaluación' ],
						[ 'Decisión', '"cuánto cuesta una página web"', 'Guía de precios y criterios', 'Solicitudes de cotización' ],
						[ 'Marca', '"opiniones sobre tu empresa"', 'Casos y testimonios', 'Cierre de venta' ],
					],
				],
			],
			[ 'p', 'Si necesitas clientes ahora, empieza por decisión y comparación. Los artículos de descubrimiento construyen audiencia, pero tardan más en traducirse en negocio.' ],

			[ 'h2', 'Paso 2: investiga antes de escribir' ],
			[
				'ul',
				[
					'Busca tu tema en Google y revisa qué tipo de contenido está posicionado: si son guías largas, un artículo corto no competirá.',
					'Lee las preguntas relacionadas que muestra el buscador: son tus subtítulos.',
					'Revisa las tres primeras páginas posicionadas y anota qué cubren y qué les falta.',
					'Pregúntale al equipo comercial qué dudas se repiten en cada negociación.',
					'Busca datos propios: tus casos, tus cifras, tu experiencia. Es lo único que la competencia no puede copiar.',
				],
			],

			[ 'h2', 'Paso 3: estructura antes de redactar' ],
			[ 'p', 'La estructura decide el 80 % del resultado. Una plantilla que funciona:' ],
			[
				'ol',
				[
					'<strong>Entrada (2 o 3 párrafos):</strong> describe el problema con una situación reconocible, no con teoría.',
					'<strong>Respuesta temprana:</strong> si el título hace una pregunta, respóndela en las primeras líneas.',
					'<strong>Desarrollo en H2 claros,</strong> uno por subtema, con listas y tablas cuando aporten.',
					'<strong>Datos, ejemplos y criterios de decisión</strong> en lugar de generalidades.',
					'<strong>Preguntas frecuentes</strong> con las dudas reales que quedan.',
					'<strong>Cierre con llamada a la acción</strong> coherente con la intención del artículo.',
				],
			],

			[ 'h2', 'Paso 4: escribe para que se entienda' ],
			[
				'ul',
				[
					'Frases cortas y voz activa. Si una oración necesita ser releída, se reescribe.',
					'Nada de relleno para "alcanzar palabras": la longitud la define el tema, no una meta.',
					'Explica los términos técnicos la primera vez que aparecen.',
					'Usa ejemplos concretos con números, plazos o situaciones reales.',
					'Escribe como hablas con un cliente en una reunión, no como un folleto corporativo.',
					'Evita prometer resultados que no puedes sostener.',
				],
			],

			[ 'h2', 'Paso 5: optimiza sin caer en trucos' ],
			[
				'table',
				[
					'head' => [ 'Elemento', 'Recomendación' ],
					'rows' => [
						[ 'Título SEO', 'Con la palabra clave, claro y atractivo; que quepa completo en el resultado' ],
						[ 'URL', 'Corta, con la palabra clave, sin fechas ni números innecesarios' ],
						[ 'Meta descripción', 'Resume el beneficio e invita a entrar; es publicidad, no relleno' ],
						[ 'Encabezados', 'Un H1, H2 por subtema, preguntas reales como subtítulos' ],
						[ 'Imágenes', 'Propias cuando sea posible, comprimidas y con texto alternativo' ],
						[ 'Enlaces internos', 'Al servicio relacionado y a dos o tres artículos del mismo tema' ],
						[ 'Datos estructurados', 'Artículo y preguntas frecuentes' ],
					],
				],
			],
			[ 'p', 'Repetir la palabra clave veinte veces no ayuda; usarla en el título, la URL, el primer párrafo y algunos subtítulos, sí. El resto lo resuelve escribir con naturalidad sobre el tema.' ],

			[ 'h2', 'Paso 6: haz que convierta' ],
			[ 'p', 'Un artículo sin destino no genera negocio. Cada pieza debe tener una salida clara y coherente: en contenido de decisión, invitar a cotizar o agendar; en contenido de comparación, ofrecer una guía o un diagnóstico; en contenido de descubrimiento, proponer suscribirse o leer el siguiente artículo del tema.' ],
			[ 'p', 'Ubica la llamada a la acción al final y, si el artículo es largo, también a mitad de camino, siempre relacionada con lo que la persona está leyendo.' ],

			[ 'h2', 'Paso 7: mide y actualiza' ],
			[ 'p', 'A los tres meses revisa en Search Console qué búsquedas trae cada artículo y en qué posición está. Los que quedan en la segunda página suelen subir con una actualización: ampliar la sección que la gente busca, mejorar el título o agregar enlaces internos desde otros artículos.' ],
			[ 'p', 'Actualizar contenido existente casi siempre da más resultado que publicar una pieza nueva.' ],

			[ 'h2', 'Sobre escribir con IA' ],
			[ 'p', 'La IA acelera la investigación, los borradores y la estructura. Lo que no aporta es experiencia: tus casos, tus cifras, tus errores y tu criterio. Un texto generado sin ese aporte se parece a los otros mil que ya existen, y tanto los buscadores como los lectores lo notan. Úsala para producir más rápido, no para evitar pensar.' ],
			[ 'p', 'Para la estrategia completa, revisa <a href="{url:post:seo-para-empresas-b2b}">SEO para empresas B2B</a> y <a href="{url:post:seo-para-buscadores-con-ia}">cómo aparecer en los buscadores con IA</a>. ¿Quieres que produzcamos tu contenido con este método? Conoce nuestro servicio de <a href="{url:servicio:marketing-digital}">marketing digital</a> o <a href="{url:pagina:contacto}">hablemos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuántas palabras debe tener un artículo para posicionar?', 'Las que necesite el tema. Lo que importa es responder mejor que los resultados actuales: a veces son 800 palabras muy concretas y otras una guía extensa. Alargar por alargar empeora el resultado.' ],
			[ '¿Cada cuánto debo publicar?', 'Es preferible una pieza buena al mes que cuatro apresuradas. Lo que sí conviene es la constancia: un ritmo sostenible que puedas mantener durante un año, combinado con la actualización de lo ya publicado.' ],
			[ '¿En cuánto tiempo veré resultados?', 'Los primeros movimientos aparecen entre el segundo y el cuarto mes, y el efecto acumulado se nota a partir del sexto. En sectores muy competidos toma más. Es una inversión de mediano plazo que, a diferencia de la publicidad, no se apaga cuando dejas de pagar.' ],
			[ '¿Sirve copiar la estructura de la competencia?', 'Sirve estudiarla para saber qué espera el buscador, no para replicarla. Tu ventaja está en lo que ellos no tienen: datos propios, casos reales y criterio de alguien que hace el trabajo todos los días.' ],
		],
		'seo_title' => 'Cómo escribir contenido que posicione y venda',
		'seo_desc'  => 'Método para escribir contenido SEO que traiga clientes: intención de búsqueda, investigación, estructura, redacción, optimización y medición.',
	],
];

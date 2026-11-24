<?php
/**
 * Artículo: Copywriting para sitios web.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'copywriting-para-sitios-web',
	'title'      => 'Cómo escribir los textos de tu sitio web para vender',
	'date'       => '2027-08-04 09:00:00',
	'categories' => [ 'marketing-digital' ],
	'tags'       => [ 'Copywriting', 'Sitios web', 'Conversión', 'Contenido' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-copywriting-web.jpg',
		'alt'  => 'Portada del artículo Cómo escribir los textos de tu sitio web para vender — InnspiraTech',
	],
	'excerpt'    => 'La mayoría de sitios corporativos habla de la empresa y no del cliente. Método para escribir la página de inicio, servicios y nosotros con mensajes claros, prueba y llamadas a la acción que convierten.',
	'content'    => it_seed_blocks(
		[
			[ 'p', '"Somos una empresa líder comprometida con la excelencia y la innovación, que brinda soluciones integrales a la medida." Ese texto está en miles de sitios y no dice nada. Nadie sabe qué hace esa empresa, para quién ni por qué debería elegirla.' ],
			[ 'p', 'Los textos de un sitio web son el vendedor que atiende a cada visitante. Estas son las reglas para que venda.' ],

			[ 'h2', 'Antes de escribir: tres respuestas' ],
			[
				'ol',
				[
					'<strong>¿Para quién es?</strong> Tipo de empresa o persona, tamaño y situación.',
					'<strong>¿Qué problema le resuelves?</strong> En sus palabras, no en las tuyas.',
					'<strong>¿Por qué tú y no otro?</strong> Algo concreto y verificable: especialización, experiencia, método, garantía.',
				],
			],
			[ 'p', 'Si no puedes responder la tercera, el problema no es de redacción, es de posicionamiento, y conviene resolverlo antes de escribir una línea.' ],

			[ 'h2', 'La página de inicio' ],
			[
				'table',
				[
					'head' => [ 'Sección', 'Qué debe decir' ],
					'rows' => [
						[ 'Titular', 'El resultado que obtiene tu cliente' ],
						[ 'Subtítulo', 'Qué haces y para quién, en una frase' ],
						[ 'Llamada a la acción', 'El siguiente paso concreto' ],
						[ 'Prueba', 'Clientes, cifras, casos' ],
						[ 'Servicios', 'Uno por necesidad, con beneficio y enlace' ],
						[ 'Cómo trabajas', 'Pasos que eliminan la incertidumbre' ],
						[ 'Objeciones', 'Precio, plazos, garantía, soporte' ],
						[ 'Cierre', 'La misma llamada a la acción' ],
					],
				],
			],

			[ 'h2', 'Páginas de servicio' ],
			[ 'p', 'Cada servicio merece su propia página, escrita alrededor de la búsqueda y del problema del cliente: situación que lo trae, qué incluye el servicio, cómo es el proceso, qué resultados puede esperar, casos, rango de inversión si es posible, preguntas frecuentes y contacto. Una página por necesidad convierte y posiciona mucho mejor que una sola página con todos los servicios en viñetas.' ],

			[ 'h2', 'La página "Nosotros"' ],
			[ 'p', 'Es de las más visitadas por quien está a punto de contratar. No cuentes la historia completa desde la fundación: responde por qué confiar. Quiénes son las personas, qué experiencia tienen, con quién han trabajado, cómo trabajan y qué los hace distintos. Fotos reales del equipo valen más que cualquier imagen de archivo.' ],

			[ 'h2', 'Reglas de redacción que funcionan' ],
			[
				'ul',
				[
					'<strong>Habla del cliente:</strong> cuenta cuántas veces dices "nosotros" y cuántas "tú"; debería ganar la segunda.',
					'<strong>Beneficios antes que características:</strong> "tu equipo deja de digitar pedidos" antes que "integración con ERP".',
					'<strong>Concreto y verificable:</strong> "respondemos en menos de 2 horas hábiles" en lugar de "atención ágil".',
					'<strong>Frases cortas</strong> y párrafos de dos o tres líneas.',
					'<strong>Sin jerga</strong> que tu cliente no usa.',
					'<strong>Llamadas a la acción con verbo y beneficio:</strong> "Agenda un diagnóstico".',
					'<strong>Elimina adjetivos vacíos:</strong> líder, integral, innovador, de calidad.',
				],
			],

			[ 'h2', 'La prueba, en todas partes' ],
			[ 'p', 'Afirmar no convence; demostrar sí. Acompaña cada promesa con evidencia cerca: el logo de un cliente, una cifra de resultados, un testimonio con nombre y empresa, un caso breve. Y respeta una regla: solo publica lo que puedas sostener y tengas autorización para mostrar.' ],

			[ 'h2', 'Texto y SEO sin pelearse' ],
			[ 'p', 'Escribir para vender y escribir para posicionar no compiten. Usa en títulos y subtítulos las palabras con las que el cliente busca tu servicio, responde las preguntas que se hace y organiza el contenido con estructura clara. Lo que no funciona es rellenar con palabras clave repetidas: espanta al lector y ya no engaña al buscador.' ],
			[ 'p', 'Para aplicarlo a campañas, revisa <a href="{url:post:landing-page-que-convierte}">cómo hacer una landing page que convierta</a>; para el blog, <a href="{url:post:como-escribir-contenido-seo}">cómo escribir contenido que posicione</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs ágiles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Debo contratar un redactor o escribir los textos yo mismo?', 'Nadie conoce tu negocio como tú, así que conviene que participes con la información y los casos. Un redactor con experiencia en conversión aporta estructura, claridad y disciplina; la combinación suele dar el mejor resultado.' ],
			[ '¿Textos largos o cortos?', 'Los necesarios para resolver las dudas del cliente. Un servicio complejo o costoso necesita más explicación que uno simple. Lo que importa es que se pueda escanear: titulares claros, listas y párrafos cortos.' ],
			[ '¿Puedo usar IA para escribir mi sitio?', 'Sirve para borradores y variantes, pero el diferencial —tu propuesta, tus casos, tu forma de trabajar— tiene que venir de ti. Un sitio escrito sin ese aporte suena igual a todos los demás.' ],
			[ '¿Cada cuánto debo actualizar los textos?', 'Revisa las páginas clave al menos una vez al año y cada vez que cambie tu oferta, tus precios o tus clientes principales. Los datos de conversión te dirán qué páginas necesitan atención primero.' ],
		],
		'seo_title' => 'Cómo escribir los textos de tu sitio para vender',
		'seo_desc'  => 'Método para escribir la página de inicio, servicios y nosotros de tu sitio web: propuesta clara, beneficios, prueba, llamadas a la acción y reglas de redacción.',
	],
];

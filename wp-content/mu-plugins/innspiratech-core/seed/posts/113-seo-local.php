<?php
/**
 * Artículo: SEO local.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'seo-local',
	'title'      => 'SEO local: cómo aparecer en el mapa y en las búsquedas de tu ciudad',
	'date'       => '2027-05-05 09:00:00',
	'categories' => [ 'marketing-digital' ],
	'tags'       => [ 'SEO local', 'Google Business Profile', 'Marketing digital', 'Reseñas' ],
	'servicio'   => 'marketing-digital',
	'image'      => [
		'file' => 'post-seo-local.jpg',
		'alt'  => 'Portada del artículo SEO local: cómo aparecer en el mapa de Google — InnspiraTech',
	],
	'excerpt'    => 'Las búsquedas con intención local son de las que más convierten. Los factores que deciden quién aparece en el mapa, cómo crear páginas por ciudad sin duplicar contenido y cómo construir autoridad en tu zona.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Quien busca "empresa de software en Medellín" o "mantenimiento de aires acondicionados cerca de mí" no está investigando: está a punto de contratar. Por eso las búsquedas locales son de las que más clientes traen, y aparecer en ellas depende de factores distintos a los del SEO tradicional.' ],

			[ 'h2', 'Los tres factores que decide Google' ],
			[
				'table',
				[
					'head' => [ 'Factor', 'Qué significa', 'Qué puedes hacer' ],
					'rows' => [
						[ 'Relevancia', 'Qué tanto coincide tu negocio con la búsqueda', 'Categorías correctas, servicios y contenido específico' ],
						[ 'Distancia', 'Qué tan cerca estás de quien busca', 'Poco: dirección real o área de servicio bien definida' ],
						[ 'Prominencia', 'Qué tan conocido y valorado es tu negocio', 'Reseñas, menciones, enlaces y contenido' ],
					],
				],
			],
			[ 'p', 'La distancia no la controlas, así que el trabajo se concentra en relevancia y prominencia.' ],

			[ 'h2', 'Paso 1: la ficha de Google Business Profile' ],
			[ 'p', 'Es la base de todo el SEO local: categoría principal precisa, servicios completos, horarios reales, fotos actualizadas, publicaciones periódicas y reseñas respondidas. Lo explicamos paso a paso en <a href="{url:post:google-business-profile}">Google Business Profile: guía completa</a>.' ],

			[ 'h2', 'Paso 2: coherencia de datos en todas partes' ],
			[ 'p', 'Nombre, dirección y teléfono deben ser idénticos en tu sitio, tu ficha, directorios, redes sociales y cámaras de comercio. Las variaciones —una dirección antigua, un teléfono distinto— confunden a los buscadores y debilitan la confianza en tu información.' ],

			[ 'h2', 'Paso 3: páginas locales en tu sitio' ],
			[ 'p', 'Si atiendes varias ciudades, una página por ciudad puede ayudar mucho, siempre que no sea el mismo texto cambiando el nombre. Una buena página local incluye:' ],
			[
				'ul',
				[
					'Servicios ofrecidos específicamente en esa ciudad.',
					'Dirección, teléfono y mapa si tienes sede; zonas atendidas si no.',
					'Casos o clientes de esa ciudad.',
					'Testimonios locales.',
					'Información útil propia: tiempos de atención, cobertura, particularidades.',
					'Datos estructurados de negocio local.',
				],
			],
			[ 'p', 'Crear decenas de páginas idénticas para ciudades donde no operas es una práctica que los buscadores penalizan. Solo crea páginas donde realmente atiendes.' ],

			[ 'h2', 'Paso 4: reseñas como sistema' ],
			[
				'ol',
				[
					'Pide la reseña en el momento de mayor satisfacción.',
					'Envía un enlace directo, por el canal que usa tu cliente.',
					'Responde todas, con nombres del servicio y de la ciudad cuando sea natural.',
					'Nunca compres ni incentives reseñas: viola las políticas.',
					'Mide el ritmo mensual de reseñas nuevas, no solo el total.',
				],
			],

			[ 'h2', 'Paso 5: autoridad local' ],
			[
				'ul',
				[
					'Directorios relevantes del sector y de la ciudad.',
					'Gremios, cámaras de comercio y asociaciones empresariales.',
					'Medios locales y regionales: casos, entrevistas, datos.',
					'Patrocinios y eventos de la comunidad con mención y enlace.',
					'Alianzas con empresas complementarias de la zona.',
				],
			],

			[ 'h2', 'Qué medir' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Dónde' ],
					'rows' => [
						[ 'Llamadas, rutas y clics desde la ficha', 'Estadísticas de Google Business Profile' ],
						[ 'Búsquedas por las que apareces', 'Estadísticas de la ficha' ],
						[ 'Tráfico a páginas locales', 'Analítica y Search Console' ],
						[ 'Reseñas nuevas y calificación', 'Ficha y tablero propio' ],
						[ 'Solicitudes por ciudad', 'CRM, con el origen registrado' ],
					],
				],
			],
			[ 'p', 'Si además vendes a empresas en todo el país, combina con <a href="{url:post:seo-para-empresas-b2b}">SEO para empresas B2B</a> y <a href="{url:post:como-escribir-contenido-seo}">contenido que posiciona y vende</a>. Conoce nuestro servicio de <a href="{url:servicio:marketing-digital}">marketing digital</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Puedo posicionar en una ciudad donde no tengo sede?', 'En el mapa es difícil sin una ubicación real o un área de servicio legítima. En los resultados orgánicos sí es posible con una página local útil, casos de esa ciudad y autoridad construida allí.' ],
			[ '¿Cuánto tarda el SEO local en dar resultados?', 'Los ajustes de la ficha y las reseñas pueden notarse en semanas. Las páginas locales y la autoridad toman algunos meses, según la competencia de tu sector y ciudad.' ],
			[ '¿Qué diferencia hay con el SEO tradicional?', 'El SEO local agrega factores de ubicación, la ficha de negocio, las reseñas y la coherencia de datos. El SEO tradicional se centra en contenido y autoridad sin componente geográfico.' ],
			[ '¿Sirven los directorios?', 'Los relevantes sí: directorios del sector, gremios y cámaras de comercio aportan coherencia y confianza. Registrarte en cientos de directorios sin relación con tu negocio no ayuda.' ],
		],
		'seo_title' => 'SEO local: cómo aparecer en el mapa de Google',
		'seo_desc'  => 'Factores del SEO local, ficha de Google Business Profile, coherencia de datos, páginas por ciudad sin duplicar, reseñas, autoridad local y métricas clave.',
	],
];

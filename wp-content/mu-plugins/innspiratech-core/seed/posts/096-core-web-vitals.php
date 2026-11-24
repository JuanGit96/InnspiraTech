<?php
/**
 * Artículo: Core Web Vitals.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'core-web-vitals',
	'title'      => 'Core Web Vitals: cómo acelerar tu sitio y por qué afecta tus ventas',
	'date'       => '2027-07-07 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Core Web Vitals', 'Rendimiento web', 'SEO técnico', 'Conversión' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-core-web-vitals.jpg',
		'alt'  => 'Portada del artículo Core Web Vitals: cómo acelerar tu sitio — InnspiraTech',
	],
	'excerpt'    => 'Cada segundo de carga cuesta visitas y conversiones. Qué miden las Core Web Vitals, cómo interpretarlas y las mejoras concretas que más impacto tienen, ordenadas por esfuerzo.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La velocidad de un sitio no es un capricho técnico: es la diferencia entre que alguien lea tu propuesta o vuelva a los resultados de búsqueda. Y en móvil, donde llega la mayoría del tráfico y las conexiones no siempre son buenas, el margen es todavía más estrecho.' ],
			[ 'p', 'Google formalizó esa exigencia con las Core Web Vitals, un conjunto de métricas que miden la experiencia real de las personas que visitan tu sitio.' ],

			[ 'h2', 'Qué mide cada una' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Qué mide', 'Objetivo recomendado' ],
					'rows' => [
						[ 'LCP', 'Cuánto tarda en aparecer el contenido principal', 'Menos de 2,5 segundos' ],
						[ 'INP', 'Qué tan rápido responde la página a las interacciones', 'Menos de 200 milisegundos' ],
						[ 'CLS', 'Cuánto se mueve el contenido mientras carga', 'Menos de 0,1' ],
					],
				],
			],
			[ 'p', 'La tercera es la más molesta para el usuario y la más fácil de arreglar: es cuando vas a tocar un botón, carga una imagen o un aviso, y terminas pulsando otra cosa.' ],

			[ 'h2', 'Datos de laboratorio y datos reales' ],
			[ 'p', 'Una herramienta de análisis simula una visita en condiciones controladas; los datos de campo provienen de visitantes reales, con sus dispositivos y sus conexiones. Los segundos son los que cuentan para la evaluación, y suelen ser peores.' ],
			[ 'p', 'Por eso la regla práctica es mirar Search Console para el estado real, y usar las herramientas de análisis para diagnosticar qué corregir.' ],

			[ 'h2', 'Las mejoras con mejor relación entre impacto y esfuerzo' ],
			[
				'ol',
				[
					'<strong>Optimizar imágenes:</strong> formatos modernos, tamaño correcto y carga diferida en lo que no está a la vista. Suele ser la mitad del problema.',
					'<strong>Reservar el espacio de imágenes y anuncios</strong> con dimensiones declaradas: elimina el movimiento de contenido.',
					'<strong>Activar caché y compresión</strong> en el servidor.',
					'<strong>Reducir y diferir JavaScript:</strong> los scripts de terceros son la causa más común de mala respuesta a la interacción.',
					'<strong>Revisar las etiquetas de marketing:</strong> cada píxel y cada chat suman peso; conserva los que usas de verdad.',
					'<strong>Cargar tipografías de forma eficiente,</strong> con precarga y con alternativa mientras llegan.',
					'<strong>Usar una red de distribución de contenido</strong> para archivos estáticos.',
					'<strong>Mejorar el hosting</strong> si el tiempo de respuesta del servidor es alto de base.',
				],
			],

			[ 'h2', 'El caso de los constructores visuales' ],
			[ 'p', 'Muchos sitios lentos lo son por acumulación: un constructor visual pesado, más diez plugins, más cuatro herramientas de marketing. Cada pieza aporta poco y el conjunto arruina la experiencia. En sitios así, la mejora real suele venir de simplificar: menos plugins, un tema liviano y solo las herramientas que se usan.' ],

			[ 'h2', 'Qué esperar del resultado' ],
			[ 'p', 'La velocidad es un factor entre muchos para el posicionamiento; no esperes saltar de posiciones solo por acelerar. Donde sí se nota de inmediato es en la conversión: menos abandonos antes de cargar, más páginas por visita y mejor experiencia en móvil.' ],
			[ 'p', 'Mide siempre antes y después, y hazlo en móvil. Un sitio que carga rápido en el computador de la oficina puede ser lento en un celular con conexión regular, que es como lo ve tu cliente.' ],

			[ 'h2', 'Cómo mantenerlo en el tiempo' ],
			[
				'ul',
				[
					'Revisa las métricas cada mes, no solo cuando alguien se queja.',
					'Mide el impacto en velocidad antes de instalar cualquier herramienta nueva.',
					'Define un presupuesto de peso por página y respétalo.',
					'Incluye la revisión de rendimiento en el checklist de cada publicación.',
					'Revisa imágenes: es lo que más se descuida cuando el equipo de contenido crece.',
				],
			],
			[ 'p', 'Para el conjunto del sitio, revisa el <a href="{url:post:checklist-lanzamiento-sitio-web}">checklist antes de lanzar</a> y, si el servidor es el problema, <a href="{url:post:hosting-para-empresas}">cómo elegir hosting para empresas</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs ágiles</a> o <a href="{url:pagina:contacto}">pídenos una revisión de velocidad</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Las Core Web Vitals afectan el posicionamiento?', 'Sí, como parte de las señales de experiencia de página, aunque su peso es menor que el de la relevancia del contenido. Su mayor efecto práctico está en la conversión y en el abandono.' ],
			[ '¿Por qué mi sitio puntúa bien en la herramienta y mal en Search Console?', 'Porque son fuentes distintas: la herramienta simula una visita; Search Console reporta datos de visitantes reales, con dispositivos y conexiones variadas. Los datos de campo son los que cuentan.' ],
			[ '¿Cuánto puedo mejorar sin rehacer el sitio?', 'Bastante. En la mayoría de sitios, optimizar imágenes, activar caché y limpiar scripts de terceros produce mejoras visibles en días, sin tocar el diseño.' ],
			[ '¿Qué hago si el problema es el tema o el constructor?', 'Evalúa el costo de simplificar frente al de migrar a un tema liviano. En sitios con tráfico relevante, un tema propio y ligero suele pagarse con la mejora en conversión.' ],
		],
		'seo_title' => 'Core Web Vitals: acelera tu sitio y vende más',
		'seo_desc'  => 'Qué miden LCP, INP y CLS, cómo interpretarlas, mejoras concretas ordenadas por impacto y esfuerzo, y cómo mantener la velocidad de tu sitio en el tiempo.',
	],
];

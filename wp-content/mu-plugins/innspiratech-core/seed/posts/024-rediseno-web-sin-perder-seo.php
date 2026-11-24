<?php
/**
 * Artículo: Rediseño de sitio web sin perder posicionamiento.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'rediseno-web-sin-perder-seo',
	'title'      => 'Rediseño de sitio web sin perder posicionamiento: guía paso a paso',
	'date'       => '2026-10-05 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Rediseño web', 'SEO técnico', 'Redirecciones 301', 'Migración web' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-rediseno-web-seo.jpg',
		'alt'  => 'Portada del artículo Rediseño web sin perder posicionamiento — InnspiraTech',
	],
	'excerpt'    => 'Un sitio nuevo puede costarte meses de tráfico si cambias URLs sin plan. Este es el método que usamos para rediseñar sitios corporativos conservando —y mejorando— el posicionamiento en Google.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'El sitio nuevo se ve increíble, la gerencia está feliz y el lanzamiento sale a tiempo. Tres semanas después, las solicitudes de cotización caen a la mitad. Nadie tocó la publicidad ni cambió el mercado: lo que cambió fueron las URLs, los títulos y el contenido que Google ya conocía.' ],
			[ 'p', 'Es una de las situaciones más frecuentes que vemos al recibir proyectos. La buena noticia es que se puede evitar por completo con un método. Esta guía te lo explica paso a paso, tanto si lo haces con tu equipo como si lo contratas.' ],

			[ 'h2', 'Por qué un rediseño puede hundir tu tráfico' ],
			[ 'p', 'Google no posiciona "tu marca": posiciona páginas concretas que responden búsquedas concretas. Cuando esas páginas desaparecen, cambian de dirección o pierden el contenido que las hacía relevantes, el buscador tiene que volver a evaluar todo desde cero. Las causas típicas son:' ],
			[
				'ul',
				[
					'<strong>URLs que cambian sin redirecciones:</strong> los enlaces que apuntaban a tu sitio y los resultados de Google terminan en páginas de error.',
					'<strong>Contenido eliminado o recortado</strong> porque "el diseño nuevo es más limpio".',
					'<strong>Títulos y encabezados reescritos</strong> sin considerar las palabras clave que ya traían visitas.',
					'<strong>Bloqueos heredados del entorno de pruebas:</strong> un <em>noindex</em> o un robots.txt que nadie quitó.',
					'<strong>Pérdida de enlaces internos</strong> al simplificar menús y pies de página.',
					'<strong>Sitio más lento</strong> por animaciones, videos o imágenes sin optimizar.',
				],
			],

			[ 'h2', 'Paso 1: haz el inventario de lo que ya funciona' ],
			[ 'p', 'Antes de diseñar una sola pantalla, necesitas saber qué páginas traen tráfico, enlaces y clientes. Ese inventario es tu seguro.' ],
			[
				'table',
				[
					'head' => [ 'Fuente', 'Qué exportar', 'Para qué sirve' ],
					'rows' => [
						[ 'Google Search Console', 'Páginas con clics e impresiones de los últimos 12 meses', 'Saber qué URLs posicionan y con qué búsquedas' ],
						[ 'Google Analytics', 'Páginas de entrada y conversiones por página', 'Identificar las páginas que generan negocio' ],
						[ 'Rastreador (Screaming Frog o similar)', 'Todas las URLs, títulos, descripciones y códigos de estado', 'Tener el mapa completo del sitio actual' ],
						[ 'Herramienta de enlaces externos', 'Páginas que reciben enlaces de otros sitios', 'No perder la autoridad acumulada' ],
						[ 'Sitemap XML actual', 'Listado de URLs publicadas', 'Detectar páginas que el rastreo no encontró' ],
					],
				],
			],
			[ 'p', 'Marca cada URL con una decisión: <strong>se mantiene igual</strong>, <strong>se fusiona</strong> con otra, <strong>se mejora</strong> o <strong>se elimina</strong>. Solo deberías eliminar páginas sin tráfico, sin enlaces y sin valor para el negocio.' ],

			[ 'h2', 'Paso 2: construye el mapa de redirecciones 301' ],
			[ 'p', 'Cada URL antigua que cambie debe redirigir, con código 301 (permanente), a la página nueva <strong>más equivalente</strong>. Es el paso más importante de todo el proyecto.' ],
			[
				'table',
				[
					'head' => [ 'URL antigua', 'URL nueva', 'Tipo' ],
					'rows' => [
						[ '/servicios.php?id=4', '/servicios/desarrollo-de-apps/', 'Uno a uno' ],
						[ '/blog/2019/05/tips-seo', '/blog/tips-seo/', 'Uno a uno' ],
						[ '/quienes-somos y /historia', '/nosotros/', 'Fusión' ],
						[ '/promo-2020', '/servicios/', 'Página relacionada más cercana' ],
					],
				],
			],
			[ 'p', 'Tres reglas que evitan problemas:' ],
			[
				'ul',
				[
					'<strong>Nunca redirijas todo a la página de inicio.</strong> Google lo trata como un error y la autoridad de esas páginas se pierde.',
					'<strong>Evita cadenas</strong> (A → B → C): cada URL antigua debe ir directo a su destino final.',
					'<strong>Conserva las URLs que no necesitan cambiar.</strong> Si una dirección ya es limpia y posiciona, no la toques.',
				],
			],

			[ 'h2', 'Paso 3: conserva lo que hace relevante a cada página' ],
			[ 'p', 'Un diseño nuevo no significa contenido nuevo. En las páginas que traen tráfico, mantén o mejora:' ],
			[
				'ul',
				[
					'El título SEO y la meta descripción (o mejóralos con base en los datos de Search Console).',
					'El encabezado principal (H1) y la estructura de subtítulos.',
					'Los textos que responden la búsqueda: no los reemplaces por frases publicitarias vacías.',
					'Los datos estructurados: organización, servicios, preguntas frecuentes, artículos.',
					'Los enlaces internos hacia las páginas importantes.',
					'El texto alternativo de las imágenes.',
				],
			],

			[ 'h2', 'Paso 4: prueba en un entorno protegido' ],
			[ 'p', 'El sitio nuevo debe construirse en un entorno de pruebas protegido con usuario y contraseña, no solo con una etiqueta <em>noindex</em>. Así Google no indexa una copia duplicada, y el día del lanzamiento no dependes de que alguien recuerde quitar un bloqueo.' ],
			[ 'p', 'Antes de publicar, rastrea el entorno de pruebas y compáralo con el inventario: cada URL importante debe existir o tener su redirección, y ninguna página clave debe devolver error.' ],

			[ 'h2', 'Paso 5: el día del lanzamiento' ],
			[
				'ol',
				[
					'Publica en un horario de bajo tráfico y con el equipo técnico disponible.',
					'Activa las redirecciones y prueba una muestra de las URLs antiguas más valiosas.',
					'Verifica que el sitio no tenga <em>noindex</em> ni bloqueos en robots.txt.',
					'Confirma HTTPS, la versión con o sin www y que no existan contenidos duplicados.',
					'Envía el sitemap nuevo en Google Search Console.',
					'Revisa que Analytics, las etiquetas de conversión y los píxeles sigan midiendo.',
					'Prueba todos los formularios, botones de WhatsApp y llamadas a la acción.',
				],
			],

			[ 'h2', 'Paso 6: monitorea durante las primeras ocho semanas' ],
			[ 'p', 'Es normal ver cierta fluctuación en las posiciones durante las primeras semanas mientras Google procesa los cambios. Lo que no es normal es una caída sostenida. Revisa cada semana:' ],
			[
				'table',
				[
					'head' => [ 'Qué revisar', 'Dónde', 'Señal de alerta' ],
					'rows' => [
						[ 'Errores 404', 'Search Console y registros del servidor', 'URLs antiguas sin redirección' ],
						[ 'Páginas indexadas', 'Informe de indexación', 'Caída brusca de páginas válidas' ],
						[ 'Clics por página', 'Informe de rendimiento', 'Páginas clave que pierden tráfico' ],
						[ 'Velocidad', 'Core Web Vitals', 'Métricas peores que en el sitio anterior' ],
						[ 'Conversiones', 'Analytics y CRM', 'Menos solicitudes con tráfico similar' ],
					],
				],
			],

			[ 'h2', 'Errores que vemos con más frecuencia' ],
			[
				'ul',
				[
					'Lanzar sin mapa de redirecciones "porque se hace después".',
					'Cambiar de dominio, de estructura de URLs y de contenido al mismo tiempo, sin medir cada cambio.',
					'Eliminar el blog o las páginas de servicio "viejas" que eran las que traían clientes.',
					'Dejar el sitio de pruebas indexable y generar contenido duplicado.',
					'No tener una línea base de tráfico para comparar después del lanzamiento.',
				],
			],

			[ 'h2', 'Un rediseño bien hecho también es una oportunidad' ],
			[ 'p', 'Con el inventario en la mano puedes mejorar lo que ya funciona: fusionar páginas que competían entre sí, reescribir títulos con mejor tasa de clics, acelerar el sitio y crear páginas de servicio para búsquedas que hoy no atiendes. Muchos sitios terminan con <strong>más</strong> tráfico que antes del rediseño.' ],
			[ 'p', 'Para no olvidar nada, usa nuestro <a href="{url:post:checklist-lanzamiento-sitio-web}">checklist antes de lanzar un sitio web corporativo</a>, y si estás definiendo presupuesto revisa <a href="{url:post:cuanto-cuesta-una-pagina-web}">cuánto cuesta una página web para empresas</a>. Si quieres que nos encarguemos del rediseño y la migración, conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs</a> o <a href="{url:pagina:contacto}">cuéntanos sobre tu sitio</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tarda Google en reconocer un sitio rediseñado?', 'Depende del tamaño del sitio y de la frecuencia con la que Google lo rastrea. En sitios corporativos pequeños y medianos, lo habitual es que los cambios se asienten en algunas semanas si las redirecciones están bien hechas.' ],
			[ '¿Es obligatorio mantener las mismas URLs?', 'No, pero cada URL que cambie necesita una redirección 301 a su equivalente. Si una URL ya es clara y posiciona bien, lo más seguro es conservarla.' ],
			[ '¿Qué pasa si ya lancé el sitio y perdí tráfico?', 'Recupera el inventario de URLs antiguas desde Search Console, Analytics o archivos históricos, crea las redirecciones que faltan y restaura el contenido relevante que se eliminó. Cuanto antes se corrija, más rápida es la recuperación.' ],
			[ '¿Puedo cambiar de dominio en el mismo rediseño?', 'Se puede, pero multiplica el riesgo. Si es posible, conviene separar el cambio de dominio del rediseño y usar la herramienta de cambio de dirección de Search Console.' ],
		],
		'seo_title' => 'Rediseño web sin perder posicionamiento: guía paso a paso',
		'seo_desc'  => 'Cómo rediseñar el sitio web de tu empresa sin perder tráfico en Google: inventario de URLs, redirecciones 301, pruebas, lanzamiento y monitoreo.',
	],
];

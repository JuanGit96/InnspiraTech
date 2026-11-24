<?php
/**
 * Artículo: Sitio web multiidioma.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'sitio-web-multiidioma',
	'title'      => 'Sitio web multiidioma: cuándo conviene y cómo implementarlo sin dañar el SEO',
	'date'       => '2027-04-14 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Multiidioma', 'SEO internacional', 'WordPress', 'Sitios web' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-sitio-multiidioma.jpg',
		'alt'  => 'Portada del artículo Sitio web multiidioma: cuándo conviene y cómo implementarlo — InnspiraTech',
	],
	'excerpt'    => 'Traducir el sitio no es copiar y pegar en otro idioma. Estructura de URLs, etiquetas de idioma, traducción automática frente a profesional y el costo real de mantener dos versiones vivas.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La decisión suele tomarse por prestigio: "una empresa seria debe tener su sitio en inglés". Pero un sitio multiidioma duplica el trabajo de contenido, mantenimiento y SEO. Solo vale la pena cuando hay un objetivo comercial detrás.' ],

			[ 'h2', 'Cuándo sí conviene' ],
			[
				'ul',
				[
					'Vendes o quieres vender a clientes de otro idioma, y tienes cómo atenderlos.',
					'Tu analítica ya muestra visitas relevantes desde otros países o con otro idioma de navegador.',
					'Participas en licitaciones o procesos internacionales donde te evalúan en inglés.',
					'Buscas talento o socios internacionales.',
					'Tu producto es digital y puede venderse fuera sin operación local.',
				],
			],
			[ 'p', 'Cuándo no: si lo haces "por si acaso", si no tienes quién responda un correo en ese idioma o si no vas a mantener las dos versiones actualizadas. Un sitio con la mitad del contenido traducido y desactualizado transmite exactamente lo contrario de lo que buscas.' ],

			[ 'h2', 'Estructura de URLs: las tres opciones' ],
			[
				'table',
				[
					'head' => [ 'Opción', 'Ejemplo', 'Ventaja', 'Desventaja' ],
					'rows' => [
						[ 'Subdirectorio', 'tusitio.com/en/', 'Aprovecha la autoridad del dominio; simple de administrar', 'Menos señal de segmentación por país' ],
						[ 'Subdominio', 'en.tusitio.com', 'Separación clara', 'La autoridad se construye por separado' ],
						[ 'Dominio por país', 'tusitio.co y tusitio.com', 'Máxima señal local', 'Costo y esfuerzo de SEO multiplicados' ],
					],
				],
			],
			[ 'p', 'Para la mayoría de empresas, el subdirectorio es la opción correcta: simple, económica y suficiente. Los dominios por país solo se justifican con operación real en cada mercado.' ],

			[ 'h2', 'Lo técnico que no puede faltar' ],
			[
				'ol',
				[
					'<strong>Etiquetas de idioma alternativo</strong> en cada página, declarando todas las versiones disponibles y la versión por defecto.',
					'<strong>Canonical propio</strong> en cada versión: la página en inglés no debe apuntar como canónica a la española.',
					'<strong>Idioma declarado</strong> en el HTML de cada página.',
					'<strong>URLs traducidas,</strong> no solo el contenido: ayuda al posicionamiento en cada idioma.',
					'<strong>Sitemap con todas las versiones</strong> y sus equivalencias.',
					'<strong>Selector de idioma visible</strong> y persistente, sin redirecciones automáticas forzadas.',
					'<strong>Contenido completo por idioma:</strong> menús, formularios, mensajes de error y correos automáticos.',
				],
			],
			[ 'p', 'Sobre las redirecciones automáticas por ubicación: evítalas. Un visitante en Colombia puede querer leer en inglés, y los rastreadores pueden quedar atrapados en una sola versión. Detecta el idioma para sugerir, no para imponer.' ],

			[ 'h2', 'Traducción automática, profesional o mixta' ],
			[
				'table',
				[
					'head' => [ 'Enfoque', 'Cuándo usarlo', 'Riesgo' ],
					'rows' => [
						[ 'Automática pura', 'Contenido de apoyo, documentación interna', 'Errores de terminología y textos que suenan ajenos' ],
						[ 'Automática con revisión humana', 'Blog y páginas secundarias', 'Requiere criterio de quien revisa' ],
						[ 'Profesional', 'Páginas comerciales, servicios, propuesta de valor', 'Costo mayor' ],
						[ 'Adaptación (no traducción)', 'Mercados con cultura y competencia distintas', 'Requiere conocer el mercado destino' ],
					],
				],
			],
			[ 'p', 'La recomendación práctica: traduce profesionalmente las páginas que venden —inicio, servicios, casos, contacto— y usa traducción asistida con revisión para el blog. Y presta atención especial a las palabras clave: no siempre la traducción literal es lo que busca la gente en el otro idioma.' ],

			[ 'h2', 'El costo que nadie calcula' ],
			[ 'p', 'Al presupuestar, incluye no solo la traducción inicial sino el mantenimiento: cada artículo nuevo, cada cambio de precios y cada servicio nuevo se multiplican por el número de idiomas. También el soporte: si alguien escribe en inglés, alguien debe responder en inglés, y rápido.' ],
			[ 'p', 'Una alternativa sensata para empezar: una sección reducida en el segundo idioma con las páginas esenciales, bien hecha y mantenida, en lugar del sitio completo a medias.' ],
			[ 'p', 'Si vas a rehacer el sitio para incluir idiomas, revisa <a href="{url:post:rediseno-web-sin-perder-seo}">cómo rediseñar sin perder posicionamiento</a> y el <a href="{url:post:checklist-lanzamiento-sitio-web}">checklist antes de lanzar</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs ágiles</a> o <a href="{url:pagina:contacto}">cuéntanos a qué mercados apuntas</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Google penaliza el contenido traducido?', 'No, siempre que cada versión esté bien declarada con sus etiquetas de idioma alternativo y aporte valor real. Lo que sí genera problemas son traducciones automáticas de baja calidad publicadas en masa sin revisión.' ],
			[ '¿Conviene traducir todo el blog?', 'Rara vez al inicio. Traduce primero las páginas comerciales y los tres o cuatro artículos que mejor funcionan, mide si traen tráfico y solicitudes en ese idioma, y crece con base en resultados.' ],
			[ '¿Subdirectorio o dominio por país?', 'Subdirectorio para la mayoría: mantiene la autoridad concentrada y cuesta menos de administrar. Un dominio por país solo se justifica cuando hay operación, equipo y estrategia de contenidos propios en ese mercado.' ],
			[ '¿Qué pasa con los formularios y los correos automáticos?', 'Deben estar en el idioma de la versión desde la que se envían, incluidos los mensajes de error y las confirmaciones. Es uno de los descuidos más comunes y arruina la experiencia justo en el momento de la conversión.' ],
		],
		'seo_title' => 'Sitio web multiidioma: cuándo y cómo hacerlo',
		'seo_desc'  => 'Cuándo conviene un sitio multiidioma, estructura de URLs, etiquetas hreflang, traducción automática o profesional y el costo real de mantener varias versiones.',
	],
];

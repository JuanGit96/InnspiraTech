<?php
/**
 * Artículo: Checklist antes de lanzar un sitio web corporativo.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'checklist-lanzamiento-sitio-web',
	'title'      => 'Checklist antes de lanzar un sitio web corporativo: 50 puntos que no puedes olvidar',
	'date'       => '2027-02-17 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Lanzamiento web', 'SEO técnico', 'Checklist', 'Sitios web' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-checklist-lanzamiento.jpg',
		'alt'  => 'Portada del artículo Checklist antes de lanzar un sitio web corporativo — InnspiraTech',
	],
	'excerpt'    => 'La lista que usamos internamente antes de publicar cualquier sitio: contenido, SEO técnico, rendimiento, seguridad, medición, legal y el día del lanzamiento. Imprímela y no publiques sin ella.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Los problemas de un sitio nuevo casi nunca son de diseño: son formularios que no envían, páginas sin título, el sitio bloqueado para Google porque nadie quitó la etiqueta de pruebas, o analítica que jamás midió nada. Todo eso se detecta en una revisión sistemática de una hora.' ],
			[ 'p', 'Esta es la lista que aplicamos antes de publicar. Recórrela completa, aunque el sitio sea pequeño.' ],

			[ 'h2', 'Contenido' ],
			[
				'ul',
				[
					'Todas las páginas tienen contenido real: ningún texto de relleno ni "próximamente".',
					'Ortografía y gramática revisadas por alguien distinto de quien escribió.',
					'Datos de contacto correctos: teléfono, WhatsApp, correo, dirección y horario.',
					'Nombre legal, NIT y datos de la empresa donde corresponda.',
					'Textos de servicios orientados al cliente, no solo a describir lo que haces.',
					'Imágenes propias o con licencia verificada; nada descargado sin derechos.',
					'Todas las imágenes con texto alternativo descriptivo.',
					'Enlaces internos y externos probados uno por uno.',
					'Versión final aprobada por la gerencia y por el área comercial.',
				],
			],

			[ 'h2', 'SEO técnico' ],
			[
				'ul',
				[
					'Cada página con título único de longitud adecuada y palabra clave principal.',
					'Meta descripción única y persuasiva por página.',
					'Un solo H1 por página, con estructura lógica de subtítulos.',
					'URLs limpias, en minúsculas y sin parámetros innecesarios.',
					'Etiqueta canonical correcta en cada página.',
					'Sin <em>noindex</em> heredado del entorno de pruebas.',
					'robots.txt permite el rastreo de lo importante.',
					'Sitemap XML generado y accesible.',
					'Redirecciones 301 desde las URLs antiguas, si había sitio previo.',
					'Datos estructurados de organización, servicios y preguntas frecuentes.',
					'Página 404 útil, con buscador y enlaces a secciones principales.',
					'Una sola versión accesible: con o sin www, siempre en HTTPS.',
				],
			],

			[ 'h2', 'Rendimiento' ],
			[
				'ul',
				[
					'Imágenes optimizadas, en formatos modernos y con tamaño adecuado.',
					'Carga diferida en imágenes y videos que no están a la vista.',
					'Caché activada y probada.',
					'CSS y JavaScript minificados; sin librerías que ya no se usan.',
					'Core Web Vitals medidos en móvil, no solo en escritorio.',
					'Tipografías cargadas localmente o con precarga.',
					'Peso total de la página razonable en conexiones lentas.',
				],
			],

			[ 'h2', 'Compatibilidad y accesibilidad' ],
			[
				'ul',
				[
					'Probado en Chrome, Safari, Firefox y Edge.',
					'Probado en móvil real, no solo en el simulador del navegador.',
					'Navegación con teclado funcional y foco visible.',
					'Contraste de color suficiente para leer sin esfuerzo.',
					'Formularios con etiquetas asociadas y mensajes de error claros.',
					'Textos que se pueden ampliar sin romper el diseño.',
				],
			],

			[ 'h2', 'Formularios y conversión' ],
			[
				'ul',
				[
					'Cada formulario enviado de prueba y el correo recibido en la bandeja correcta.',
					'Mensaje de confirmación claro y página de gracias que permita medir conversiones.',
					'Protección contra spam sin arruinar la experiencia.',
					'Casilla de autorización de datos personales con enlace a la política.',
					'Los leads quedan registrados en algún lugar además del correo.',
					'Botón de WhatsApp con número y mensaje predefinido correctos.',
					'Llamadas a la acción visibles en todas las páginas clave.',
				],
			],

			[ 'h2', 'Seguridad' ],
			[
				'ul',
				[
					'Certificado SSL válido y redirección forzada a HTTPS.',
					'Contraseñas fuertes y autenticación en dos pasos en el panel.',
					'Usuarios de prueba eliminados y roles revisados.',
					'Copias de seguridad automáticas configuradas y probadas.',
					'Software, temas y plugins actualizados.',
					'Acceso al panel protegido y editor de archivos desactivado.',
				],
			],

			[ 'h2', 'Medición' ],
			[
				'ul',
				[
					'Analítica instalada y verificada con una visita de prueba.',
					'Conversiones configuradas: formularios, llamadas, WhatsApp y descargas.',
					'Search Console verificada y sitemap enviado.',
					'Píxeles de publicidad instalados si habrá campañas.',
					'Aviso de cookies coherente con lo que realmente instalas.',
				],
			],

			[ 'h2', 'Legal' ],
			[
				'ul',
				[
					'Política de tratamiento de datos personales publicada y enlazada.',
					'Términos y condiciones, si vendes o prestas servicios en línea.',
					'Política de cookies acorde con las herramientas instaladas.',
					'Consentimiento explícito para comunicaciones comerciales.',
					'Textos revisados por tu asesoría legal; esta lista no reemplaza esa revisión.',
				],
			],

			[ 'h2', 'Día del lanzamiento' ],
			[
				'ol',
				[
					'Publica en horario de bajo tráfico con el equipo disponible.',
					'Verifica DNS, certificado y propagación.',
					'Recorre las páginas clave como un visitante y prueba los formularios en producción.',
					'Confirma que el sitio es indexable y envía el sitemap.',
					'Revisa la analítica en tiempo real: si no aparece nadie, algo falta.',
					'Avisa a los equipos comercial y de atención que el sitio cambió.',
					'Programa una revisión a las 24 horas y otra a la semana.',
				],
			],
			[ 'p', 'Si el sitio reemplaza a uno existente, complementa esta lista con <a href="{url:post:rediseno-web-sin-perder-seo}">cómo rediseñar sin perder posicionamiento</a>. Y si aún estás definiendo alcance y presupuesto, revisa <a href="{url:post:cuanto-cuesta-una-pagina-web}">cuánto cuesta una página web para empresas</a>. ¿Quieres que lo hagamos por ti? Conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs ágiles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tiempo toma revisar esta lista?', 'Entre una y tres horas en un sitio corporativo estándar, y es la mejor inversión del proyecto: cada punto omitido suele costar mucho más de resolver con el sitio ya publicado.' ],
			[ '¿Qué es lo más olvidado antes de un lanzamiento?', 'Tres cosas: la etiqueta que impide la indexación heredada del entorno de pruebas, los formularios que no entregan el correo al destinatario correcto y la analítica sin conversiones configuradas.' ],
			[ '¿Puedo lanzar sin política de datos personales?', 'No es recomendable. Si el sitio recoge datos mediante formularios, chats o cookies, necesitas informar el tratamiento y obtener autorización. Revisa el texto con tu asesoría legal.' ],
			[ '¿Debo esperar a que todo esté perfecto?', 'No. Un sitio se mejora con datos reales de uso. Lo que no puede faltar es lo de esta lista: contenido correcto, indexable, medible, seguro y con formularios que funcionen.' ],
		],
		'seo_title' => 'Checklist para lanzar un sitio web corporativo',
		'seo_desc'  => 'Checklist antes de publicar un sitio web: contenido, SEO técnico, velocidad, accesibilidad, formularios, seguridad, medición, legal y día de lanzamiento.',
	],
];

<?php
/**
 * Artículo: Mantenimiento de WordPress, checklist.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'mantenimiento-wordpress-checklist',
	'title'      => 'Mantenimiento de WordPress: checklist mensual para un sitio seguro, rápido y actualizado',
	'date'       => '2026-07-17 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'WordPress', 'Mantenimiento web', 'Seguridad', 'Rendimiento' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-mantenimiento-wordpress.jpg',
		'alt'  => 'Portada del artículo Mantenimiento de WordPress: checklist mensual — InnspiraTech',
	],
	'excerpt'    => 'Un sitio en WordPress sin mantenimiento es una puerta abierta: plugins desactualizados, copias que nunca se probaron y velocidad en caída. Este checklist semanal, mensual y trimestral evita el 90 % de los problemas.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'WordPress mueve más del 40 % de los sitios web del mundo, y esa popularidad tiene una contracara: es el blanco favorito de los ataques automatizados. La inmensa mayoría no explota fallos de WordPress en sí, sino plugins, temas o contraseñas que nadie actualizó.' ],
			[ 'p', 'La buena noticia es que el mantenimiento es rutina, no magia. Con este checklist tu sitio se mantiene seguro, rápido y actualizado.' ],

			[ 'h2', 'Por qué importa mantenerlo' ],
			[
				'ul',
				[
					'<strong>Seguridad:</strong> las vulnerabilidades conocidas se explotan a los pocos días de publicarse.',
					'<strong>Rendimiento:</strong> los sitios se vuelven lentos con el tiempo por imágenes pesadas, plugins acumulados y bases de datos infladas.',
					'<strong>Compatibilidad:</strong> las versiones de PHP quedan sin soporte y rompen funciones.',
					'<strong>SEO:</strong> caídas, lentitud y errores rastreados afectan tu posicionamiento.',
					'<strong>Continuidad:</strong> una copia de seguridad que nunca se probó no es una copia de seguridad.',
				],
			],

			[ 'h2', 'Checklist semanal' ],
			[
				'ul',
				[
					'Verificar que las copias de seguridad automáticas se ejecutaron y se guardaron fuera del servidor.',
					'Revisar el monitoreo de disponibilidad: ¿hubo caídas?',
					'Probar los formularios: enviar uno real y confirmar que el correo llega.',
					'Aplicar actualizaciones de seguridad críticas de plugins y temas.',
					'Revisar comentarios y registros por intentos de acceso sospechosos.',
				],
			],

			[ 'h2', 'Checklist mensual' ],
			[
				'ol',
				[
					'<strong>Actualizar</strong> núcleo, tema y plugins; primero en un entorno de pruebas si el sitio es crítico.',
					'<strong>Eliminar</strong> plugins y temas desactivados: aunque no se usen, siguen siendo código expuesto.',
					'<strong>Revisar usuarios y roles:</strong> quitar accesos de quien ya no trabaja contigo y confirmar que nadie tenga más permisos de los necesarios.',
					'<strong>Probar una restauración</strong> de la copia en un entorno aparte.',
					'<strong>Medir velocidad</strong> con PageSpeed Insights en móvil y revisar las Core Web Vitals.',
					'<strong>Buscar enlaces rotos</strong> y corregirlos o redirigirlos.',
					'<strong>Revisar Search Console:</strong> errores de rastreo, páginas excluidas y avisos de seguridad.',
					'<strong>Optimizar la base de datos:</strong> limpiar revisiones antiguas, transitorios caducados y spam.',
					'<strong>Revisar el espacio en disco</strong> y los registros de error del servidor.',
				],
			],

			[ 'h2', 'Checklist trimestral' ],
			[
				'ul',
				[
					'Confirmar que la versión de PHP tiene soporte activo y planear la actualización si no.',
					'Auditoría de seguridad: permisos de archivos, usuarios administradores, contraseñas y accesos por FTP o SSH.',
					'Revisar licencias de plugins y temas premium que estén por vencer.',
					'Actualizar contenidos desactualizados: precios, servicios, equipo, casos.',
					'Revisar la política de privacidad y los textos legales.',
					'Prueba completa de recuperación ante desastres: levantar el sitio desde cero con la copia más reciente.',
				],
			],

			[ 'h2', 'Copias de seguridad: la regla 3-2-1' ],
			[ 'p', 'Tres copias de tus datos, en dos medios distintos, con una fuera del sitio. En la práctica: la copia del hosting, una en un servicio de almacenamiento en la nube y otra descargable. Y lo más importante: <strong>prueba restaurarla</strong>. Muchas empresas descubren que su respaldo estaba incompleto justo el día que lo necesitan.' ],

			[ 'h2', 'Seguridad básica que deberías tener activa' ],
			[
				'ul',
				[
					'Autenticación en dos pasos para los administradores.',
					'Contraseñas únicas y gestor de contraseñas; nunca compartir la del administrador.',
					'No usar "admin" como nombre de usuario.',
					'Límite de intentos de inicio de sesión y bloqueo por fuerza bruta.',
					'HTTPS en todo el sitio.',
					'Desactivar el editor de archivos del panel con la constante <em>DISALLOW_FILE_EDIT</em>.',
					'Un cortafuegos de aplicación web si el sitio es crítico o recibe ataques frecuentes.',
				],
			],

			[ 'h2', 'Prueba antes de publicar cambios' ],
			[ 'p', 'Actualizar directamente en producción es la causa más común de "el sitio se cayó tras una actualización". Ten un entorno de pruebas: puede ser un subdominio de staging o una copia local con DDEV. Allí aplicas las actualizaciones, revisas las páginas clave y los formularios, y solo después tocas producción.' ],

			[ 'h2', '¿Hacerlo internamente o contratarlo?' ],
			[ 'p', 'Si tu sitio no es crítico y alguien del equipo puede dedicarle un rato al mes, el checklist alcanza. Si el sitio genera ventas o citas, conviene un plan de mantenimiento con monitoreo, respaldos externos, actualizaciones probadas y un responsable al que llamar cuando algo falla.' ],
			[ 'p', 'Si estás calculando el costo total de tener un sitio web, revisa <a href="{url:post:cuanto-cuesta-una-pagina-web}">cuánto cuesta una página web</a>. Y si prefieres delegar el mantenimiento, conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cada cuánto debo actualizar WordPress?', 'Las actualizaciones de seguridad, en cuanto se publiquen. Las demás, una vez al mes es una frecuencia razonable, siempre probándolas antes en un entorno de pruebas si el sitio es importante para el negocio.' ],
			[ '¿Las actualizaciones automáticas son seguras?', 'Las menores de seguridad del núcleo suelen serlo y conviene dejarlas activas. Para plugins y temas es preferible revisar antes, porque una actualización puede cambiar funciones o romper compatibilidades.' ],
			[ '¿Qué hago si una actualización rompe el sitio?', 'Restaura la copia de seguridad más reciente, identifica el plugin o tema responsable en un entorno de pruebas y decide si actualizarlo con ajustes o reemplazarlo.' ],
			[ '¿Cuánto cuesta el mantenimiento de un sitio WordPress?', 'Varía según el tamaño del sitio, el nivel de monitoreo y el tiempo de respuesta acordado. Se suele contratar como una póliza mensual o una bolsa de horas.' ],
		],
		'seo_title' => 'Mantenimiento de WordPress: checklist mensual completo',
		'seo_desc'  => 'Checklist de mantenimiento de WordPress: actualizaciones, copias de seguridad, seguridad, velocidad, SEO y monitoreo. Qué revisar cada semana, mes y trimestre.',
	],
];

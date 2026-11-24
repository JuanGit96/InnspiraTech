<?php
/**
 * Artículo: Actualizar la versión de PHP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'actualizar-version-de-php',
	'title'      => 'Cómo actualizar la versión de PHP sin romper tu sitio',
	'date'       => '2027-02-24 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'PHP', 'Mantenimiento', 'Seguridad', 'WordPress' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-actualizar-php.jpg',
		'alt'  => 'Portada del artículo Cómo actualizar la versión de PHP sin romper tu sitio — InnspiraTech',
	],
	'excerpt'    => 'Quedarse en una versión sin soporte es una vulnerabilidad esperando ocurrir, pero actualizar a ciegas tumba el sitio. Proceso seguro paso a paso, con pruebas, plan de reversa y qué revisar después.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Nadie quiere tocar la versión de PHP de un sitio que funciona. Y sin embargo, cada versión tiene un ciclo de vida definido: unos años de correcciones activas y otros de solo parches de seguridad, tras los cuales deja de recibir actualizaciones. A partir de ahí, cualquier vulnerabilidad descubierta se queda sin arreglar.' ],
			[ 'p', 'Actualizar también trae beneficios inmediatos: las versiones recientes son notablemente más rápidas y consumen menos recursos, lo que se traduce en mejor experiencia y menor costo de servidor.' ],

			[ 'h2', 'Antes de empezar: inventario' ],
			[
				'ul',
				[
					'Versión actual y hasta cuándo tiene soporte.',
					'Versión mínima y máxima soportada por tu plataforma o framework.',
					'Listado de plugins, temas o librerías, con su compatibilidad declarada.',
					'Código propio o personalizaciones hechas a la medida.',
					'Extensiones de PHP que tu sitio necesita.',
					'Tareas programadas y scripts que también corren con PHP.',
				],
			],
			[ 'p', 'El riesgo casi nunca está en el núcleo de la plataforma, que suele ir al día: está en los componentes de terceros abandonados y en el código propio escrito hace años.' ],

			[ 'h2', 'El proceso seguro' ],
			[
				'ol',
				[
					'<strong>Copia completa</strong> de archivos y base de datos, verificada.',
					'<strong>Clona el sitio en un entorno de pruebas</strong> idéntico al de producción.',
					'<strong>Actualiza primero los componentes</strong> en la versión actual de PHP: plugins, temas y librerías al día.',
					'<strong>Cambia la versión de PHP en el entorno de pruebas</strong> y activa el registro de errores.',
					'<strong>Recorre el sitio completo:</strong> páginas clave, formularios, pagos, panel de administración, tareas programadas y reportes.',
					'<strong>Revisa el registro</strong> de advertencias y errores; los avisos de funciones obsoletas son la señal temprana del próximo problema.',
					'<strong>Corrige o reemplaza</strong> lo incompatible.',
					'<strong>Programa el cambio en producción</strong> en horario de bajo tráfico, con el equipo disponible.',
					'<strong>Verifica de inmediato</strong> y ten listo el plan de reversa.',
				],
			],

			[ 'h2', 'Qué suele romperse' ],
			[
				'table',
				[
					'head' => [ 'Causa', 'Síntoma' ],
					'rows' => [
						[ 'Funciones eliminadas en versiones nuevas', 'Error fatal en una página específica' ],
						[ 'Cambios en el manejo de tipos', 'Comportamientos raros en cálculos o comparaciones' ],
						[ 'Extensiones no instaladas en el servidor nuevo', 'Fallos en imágenes, cifrado o conexiones' ],
						[ 'Plugins abandonados', 'Errores al activar o pantallas en blanco' ],
						[ 'Código propio antiguo', 'Avisos, advertencias y fallos intermitentes' ],
						[ 'Conexión a base de datos con controlador viejo', 'Errores de conexión tras el cambio' ],
					],
				],
			],

			[ 'h2', 'Si un componente no es compatible' ],
			[ 'p', 'Tienes cuatro caminos, en orden de preferencia: actualizar a la versión compatible, reemplazarlo por una alternativa mantenida, adaptar el código si es propio, o —solo como última opción y con fecha límite— posponer la actualización. Quedarse indefinidamente en una versión sin soporte por un plugin abandonado es cambiar un riesgo alto por una comodidad pequeña.' ],

			[ 'h2', 'Después de actualizar' ],
			[
				'ul',
				[
					'Vigila el registro de errores durante al menos una semana.',
					'Revisa los correos que envía el sitio: formularios y notificaciones.',
					'Comprueba las tareas programadas: son lo que más pasa desapercibido.',
					'Mide el rendimiento y compáralo con antes; suele mejorar de forma visible.',
					'Actualiza la documentación con la versión vigente y la fecha del cambio.',
					'Agenda la próxima revisión: la siguiente versión llegará antes de lo que crees.',
				],
			],

			[ 'h2', 'Cómo evitar volver a quedarte atrás' ],
			[ 'p', 'Incluye la revisión de versiones en tu rutina de mantenimiento trimestral, prefiere componentes con mantenimiento activo, evita personalizaciones que dependan de detalles internos de una versión y mantén un entorno de pruebas permanente. Actualizar cada año es una tarea menor; hacerlo tras cinco años es un proyecto.' ],
			[ 'p', 'Para la rutina completa, revisa el <a href="{url:post:mantenimiento-wordpress-checklist}">checklist de mantenimiento</a>; si el rezago es grande, quizá estés ante un caso de <a href="{url:post:que-es-la-deuda-tecnica}">deuda técnica</a> que conviene medir. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cada cuánto debo actualizar la versión de PHP?', 'Lo recomendable es mantenerte siempre en una versión con soporte activo y revisar el estado al menos una vez al año. Cada versión tiene un calendario de soporte publicado; consúltalo para planear.' ],
			[ '¿Qué pasa si sigo en una versión sin soporte?', 'No se apaga nada de inmediato, pero dejas de recibir parches de seguridad, pierdes rendimiento y con el tiempo tus plugins y librerías dejan de ser compatibles, lo que complica cualquier actualización futura.' ],
			[ '¿Puedo actualizar directamente en producción?', 'No es recomendable. Un entorno de pruebas idéntico permite detectar incompatibilidades sin afectar a tus clientes, y muchos proveedores de hosting lo incluyen sin costo adicional.' ],
			[ '¿Cuánto tarda una actualización?', 'En un sitio bien mantenido, unas horas entre pruebas y cambio. En sitios con muchos componentes antiguos o código propio sin mantenimiento, puede convertirse en un proyecto de varios días.' ],
		],
		'seo_title' => 'Actualizar PHP sin romper tu sitio',
		'seo_desc'  => 'Proceso seguro para actualizar la versión de PHP: inventario, entorno de pruebas, qué suele romperse, plan de reversa y revisiones posteriores al cambio.',
	],
];

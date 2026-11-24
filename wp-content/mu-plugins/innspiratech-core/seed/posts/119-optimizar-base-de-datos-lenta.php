<?php
/**
 * Artículo: Base de datos lenta.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'optimizar-base-de-datos-lenta',
	'title'      => 'Base de datos lenta: primeros pasos para optimizarla',
	'date'       => '2027-08-30 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Base de datos', 'Rendimiento', 'Mantenimiento', 'Optimización' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-base-datos-lenta.jpg',
		'alt'  => 'Portada del artículo Base de datos lenta: primeros pasos para optimizarla — InnspiraTech',
	],
	'excerpt'    => 'Cuando un sistema se pone lento, la base de datos suele ser la causa. Cómo diagnosticar antes de comprar más servidor, qué revisar primero y las optimizaciones con mayor impacto y menor riesgo.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'El sistema funcionaba bien hace un año. Hoy los reportes tardan minutos, las pantallas se congelan en horas pico y el cierre de mes es una prueba de paciencia. En la mayoría de casos, la causa está en la base de datos, y la solución no es comprar un servidor más grande.' ],

			[ 'h2', 'Por qué se vuelve lenta con el tiempo' ],
			[
				'ul',
				[
					'<strong>Crecimiento de datos:</strong> una consulta que recorría mil filas ahora recorre dos millones.',
					'<strong>Índices ausentes o inadecuados</strong> para las consultas que realmente se hacen.',
					'<strong>Consultas ineficientes</strong> que traen más datos de los necesarios.',
					'<strong>Muchas consultas pequeñas</strong> donde bastaría una bien diseñada.',
					'<strong>Reportes pesados</strong> ejecutándose sobre la misma base que la operación.',
					'<strong>Tablas nunca depuradas:</strong> registros temporales, históricos y datos de prueba.',
					'<strong>Configuración por defecto</strong> que no corresponde a la carga actual.',
				],
			],

			[ 'h2', 'Paso 1: diagnostica con datos' ],
			[ 'p', 'Antes de cambiar nada, identifica dónde se va el tiempo:' ],
			[
				'ol',
				[
					'Activa el registro de consultas lentas por encima de un umbral razonable.',
					'Agrupa las consultas por patrón y ordénalas por tiempo total consumido, no solo por duración individual.',
					'Revisa el plan de ejecución de las más costosas.',
					'Mide uso de CPU, memoria y disco del servidor en horas pico.',
					'Identifica qué pantallas o procesos del sistema generan esas consultas.',
				],
			],
			[ 'p', 'Casi siempre, un puñado de consultas concentra la mayor parte del tiempo. Ahí está el trabajo.' ],

			[ 'h2', 'Paso 2: las optimizaciones de mayor impacto' ],
			[
				'table',
				[
					'head' => [ 'Optimización', 'Impacto', 'Riesgo' ],
					'rows' => [
						[ 'Crear índices para las consultas frecuentes', 'Muy alto', 'Bajo, probado en ambiente de pruebas' ],
						[ 'Traer solo las columnas y filas necesarias', 'Alto', 'Bajo' ],
						[ 'Eliminar consultas repetidas en ciclos', 'Alto', 'Medio' ],
						[ 'Paginar listados', 'Alto', 'Bajo' ],
						[ 'Caché de consultas repetidas', 'Alto', 'Medio: requiere invalidar bien' ],
						[ 'Mover reportes a una réplica de lectura', 'Alto', 'Medio' ],
						[ 'Archivar datos históricos', 'Medio-alto', 'Medio' ],
						[ 'Ajustar la configuración del motor', 'Medio', 'Medio' ],
					],
				],
			],
			[ 'p', 'Cuidado con los índices: ayudan a leer y cuestan al escribir. Crea los que respaldan consultas reales y elimina los que nadie usa.' ],

			[ 'h2', 'Paso 3: separa operación y análisis' ],
			[ 'p', 'Uno de los problemas más comunes es que los reportes gerenciales se ejecutan sobre la misma base que atiende a los usuarios. Un informe pesado a las once de la mañana frena a toda la empresa. Una réplica de solo lectura para reportes, o una base analítica aparte alimentada de forma periódica, resuelve el conflicto.' ],

			[ 'h2', 'Paso 4: mantenimiento periódico' ],
			[
				'ul',
				[
					'Depurar registros temporales, sesiones y logs antiguos.',
					'Actualizar estadísticas y revisar la fragmentación según el motor.',
					'Revisar el crecimiento de las tablas principales cada mes.',
					'Mantener el motor en versiones con soporte.',
					'Verificar que los respaldos no se ejecuten en horas pico.',
				],
			],

			[ 'h2', 'Cuándo sí agregar recursos' ],
			[ 'p', 'Cuando las consultas ya están optimizadas y el crecimiento de uso es real y sostenido, ampliar memoria o capacidad de disco es una decisión correcta. Hacerlo antes solo encarece el problema: una consulta sin índice sigue siendo lenta en un servidor más grande, solo que ahora cuesta más.' ],
			[ 'p', 'Si la lentitud es general y no solo de la base de datos, revisa <a href="{url:post:senales-software-no-escala}">señales de que tu software no escala</a> y <a href="{url:post:arquitectura-de-software-escalable}">arquitectura para escalar</a>. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">solicita un diagnóstico de rendimiento</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cómo sé si el problema es la base de datos?', 'Revisa el registro de consultas lentas y el uso de recursos del servidor en horas pico. Si pocas consultas concentran el tiempo o el servidor de base de datos está saturado mientras la aplicación no, ahí está la causa.' ],
			[ '¿Agregar índices puede empeorar el rendimiento?', 'Puede afectar las escrituras si se agregan muchos innecesarios. Por eso se crean para consultas reales, se prueban en un ambiente de pruebas y se eliminan los que no se usan.' ],
			[ '¿Conviene migrar a otra base de datos?', 'Rara vez es la primera solución. La mayoría de problemas de rendimiento se resuelven optimizando consultas, índices y arquitectura. Cambiar de motor es costoso y no corrige un mal diseño.' ],
			[ '¿Qué hago con los datos históricos?', 'Define una política: qué se conserva en línea, qué se archiva en una base aparte y qué se elimina según obligaciones legales. Mantener años de registros operativos en las tablas principales penaliza todo el sistema.' ],
		],
		'seo_title' => 'Base de datos lenta: cómo optimizarla',
		'seo_desc'  => 'Por qué una base de datos se vuelve lenta, cómo diagnosticar consultas costosas, optimizaciones de mayor impacto, réplicas y mantenimiento periódico.',
	],
];

<?php
/**
 * Artículo: Póliza de soporte o bolsa de horas.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'poliza-de-soporte-o-bolsa-de-horas',
	'title'      => 'Póliza de soporte o bolsa de horas: qué modalidad conviene para tu software',
	'date'       => '2027-01-27 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Soporte', 'Mantenimiento', 'Contratos', 'Proveedores' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-poliza-o-bolsa-horas.jpg',
		'alt'  => 'Portada del artículo Póliza de soporte o bolsa de horas: cuál conviene — InnspiraTech',
	],
	'excerpt'    => 'Las dos modalidades más comunes de contratar soporte, comparadas sin marketing: qué cubre cada una, cuándo conviene, qué debe decir el contrato y cómo saber si estás pagando de más.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Terminó el desarrollo y llega la pregunta: ¿cómo contratamos el soporte? Las dos respuestas habituales son una póliza mensual o una bolsa de horas. Elegir mal no se nota el primer mes, se nota el día que el sistema se cae un viernes a las seis de la tarde.' ],

			[ 'h2', 'Qué es cada una' ],
			[
				'table',
				[
					'head' => [ '', 'Póliza de soporte', 'Bolsa de horas' ],
					'rows' => [
						[ 'Cómo se paga', 'Cuota mensual fija', 'Paquete de horas que se consume' ],
						[ 'Qué incluye', 'Disponibilidad, tiempos de respuesta y tareas preventivas', 'Trabajo a demanda, sin compromiso de disponibilidad' ],
						[ 'Previsibilidad', 'Alta para ambas partes', 'Baja: depende de lo que ocurra' ],
						[ 'Prioridad de atención', 'Definida por contrato', 'Según disponibilidad del proveedor' ],
						[ 'Riesgo de sorpresas', 'Bajo', 'Alto en meses con incidentes' ],
						[ 'Ideal para', 'Sistemas en producción y críticos', 'Sistemas estables con cambios ocasionales' ],
					],
				],
			],

			[ 'h2', 'Lo que realmente estás comprando con una póliza' ],
			[ 'p', 'No son horas: es <strong>disponibilidad y prevención</strong>. Una póliza bien construida incluye monitoreo, respaldos verificados, actualizaciones de seguridad, tiempos de respuesta comprometidos y un responsable identificable. El valor está en lo que no pasa: caídas largas, vulnerabilidades sin parchar, respaldos que nadie probó.' ],
			[ 'p', 'Si te ofrecen una póliza que es solo "un paquete de horas con nombre bonito", no es una póliza.' ],

			[ 'h2', 'Cuándo conviene cada una' ],
			[
				'ul',
				[
					'<strong>Póliza</strong> si el sistema genera ingresos, atiende clientes, procesa pagos o su caída detiene la operación.',
					'<strong>Póliza</strong> si no tienes equipo técnico interno que pueda reaccionar.',
					'<strong>Bolsa de horas</strong> si el sistema es interno, tolera unas horas de indisponibilidad y cambia poco.',
					'<strong>Bolsa de horas</strong> para evolutivos planeados, además de la póliza que cubre la operación.',
					'<strong>Esquema mixto:</strong> póliza para lo crítico más bolsa para mejoras. Es lo que recomendamos en la mayoría de casos.',
				],
			],

			[ 'h2', 'Qué debe decir el contrato' ],
			[
				'ol',
				[
					'<strong>Alcance:</strong> qué sistemas y qué componentes cubre, y qué queda explícitamente fuera.',
					'<strong>Horario de atención</strong> y si existe cobertura fuera de jornada o en festivos.',
					'<strong>Tiempos de respuesta y de solución</strong> por nivel de severidad, con una definición clara de cada nivel.',
					'<strong>Canal de reporte</strong> y procedimiento de escalamiento con nombres y teléfonos.',
					'<strong>Qué se considera incidente</strong> (corregir algo que falla) y qué es evolutivo (agregar algo nuevo).',
					'<strong>Tratamiento de las horas no usadas:</strong> si se acumulan, vencen o se compensan.',
					'<strong>Informe periódico</strong> de actividades, incidentes y recomendaciones.',
					'<strong>Condiciones de terminación</strong> y entrega de accesos y documentación.',
				],
			],
			[ 'p', 'La distinción entre incidente y evolutivo es la fuente número uno de conflictos. Déjala escrita con ejemplos concretos de tu operación.' ],

			[ 'h2', 'Cómo saber si estás pagando de más' ],
			[
				'ul',
				[
					'Pides el informe mensual y no existe o llega vacío.',
					'La póliza cubre horas que nunca usas y no incluye prevención.',
					'Nunca te han mostrado una prueba de restauración de respaldos.',
					'Los tiempos de respuesta comprometidos no se cumplen y no pasa nada.',
					'No sabes quién te atendería un sábado a las ocho de la noche.',
				],
			],
			[ 'p', 'Al revés también ocurre: empresas que pagan una bolsa mínima para un sistema que factura todos los días. Ahí el ahorro es aparente; la primera caída larga cuesta más que un año de póliza.' ],

			[ 'h2', 'Cómo dimensionar el nivel' ],
			[ 'p', 'Empieza por responder cuánto cuesta una hora de indisponibilidad de ese sistema: ventas que no ocurren, personas que no pueden trabajar, clientes que se van. Con ese número, el nivel de servicio que necesitas deja de ser una discusión de precio y se convierte en una decisión de riesgo.' ],
			[ 'p', 'Para saber qué incluye un buen mantenimiento, revisa el <a href="{url:post:mantenimiento-wordpress-checklist}">checklist de mantenimiento</a> y <a href="{url:post:monitoreo-de-sitios-web}">por qué el monitoreo es parte del servicio</a>. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">cuéntanos qué sistema necesitas cubrir</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto debería costar una póliza de soporte?', 'Se suele calcular como un porcentaje anual del valor del sistema o según el nivel de servicio comprometido. Lo importante es comparar qué incluye: disponibilidad, prevención y tiempos, no solo el número de horas.' ],
			[ '¿Las horas no usadas se pierden?', 'Depende de lo pactado. En una bolsa suelen tener vigencia; en una póliza, lo que pagas es disponibilidad, no horas, así que la pregunta correcta es qué preventivo se ejecutó ese mes.' ],
			[ '¿Puedo tener soporte con un proveedor distinto al que desarrolló?', 'Sí, siempre que tengas código, documentación y accesos. El nuevo proveedor necesitará un periodo de familiarización, que conviene contratar de forma explícita.' ],
			[ '¿Qué pasa si el sistema falla fuera del horario contratado?', 'Se atiende según lo pactado: puede quedar para el siguiente día hábil o activarse una guardia con costo adicional. Si tu operación no tolera esa espera, necesitas cobertura extendida desde el contrato.' ],
		],
		'seo_title' => 'Póliza de soporte o bolsa de horas: cuál conviene',
		'seo_desc'  => 'Diferencias entre póliza de soporte y bolsa de horas, cuándo conviene cada una, qué debe decir el contrato y cómo saber si estás pagando de más por tu soporte.',
	],
];

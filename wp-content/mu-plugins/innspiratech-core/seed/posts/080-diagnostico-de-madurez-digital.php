<?php
/**
 * Artículo: Diagnóstico de madurez digital.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'diagnostico-de-madurez-digital',
	'title'      => 'Diagnóstico de madurez digital: cómo evaluar a tu empresa en 6 dimensiones',
	'date'       => '2027-05-31 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'Madurez digital', 'Diagnóstico', 'Transformación digital', 'Estrategia' ],
	'servicio'   => 'transformacion-digital-empresas',
	'image'      => [
		'file' => 'post-madurez-digital.jpg',
		'alt'  => 'Portada del artículo Diagnóstico de madurez digital en 6 dimensiones — InnspiraTech',
	],
	'excerpt'    => 'Antes de invertir en tecnología conviene saber en qué punto estás. Un modelo simple de seis dimensiones y cuatro niveles, con preguntas concretas para autoevaluarte y decidir por dónde empezar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Muchas empresas invierten en tecnología en desorden: compran una herramienta porque la usa la competencia, digitalizan un proceso que no era el que dolía, o lanzan un proyecto de IA cuando sus datos viven en hojas de cálculo dispersas.' ],
			[ 'p', 'Un diagnóstico de madurez digital ordena esa conversación: dice dónde estás, qué es realista este año y qué debería ir primero.' ],

			[ 'h2', 'Las seis dimensiones' ],
			[
				'table',
				[
					'head' => [ 'Dimensión', 'Qué evalúa' ],
					'rows' => [
						[ 'Procesos', 'Qué tan documentados, estandarizados y automatizados están' ],
						[ 'Datos', 'Si existen, están centralizados y son confiables para decidir' ],
						[ 'Tecnología', 'Sistemas, integraciones, infraestructura y deuda técnica' ],
						[ 'Personas', 'Competencias digitales, roles y capacidad de adopción' ],
						[ 'Clientes', 'Canales digitales, experiencia y medición del recorrido' ],
						[ 'Gobierno', 'Estrategia, presupuesto, seguridad y cumplimiento' ],
					],
				],
			],

			[ 'h2', 'Los cuatro niveles' ],
			[
				'ol',
				[
					'<strong>Inicial:</strong> todo depende de personas; la información vive en archivos y correos.',
					'<strong>Definido:</strong> hay sistemas en las áreas clave, pero desconectados entre sí.',
					'<strong>Integrado:</strong> los sistemas se hablan, los datos son confiables y hay indicadores.',
					'<strong>Optimizado:</strong> se decide con datos, se automatiza de forma continua y la tecnología habilita nuevos modelos de negocio.',
				],
			],
			[ 'p', 'No hay premio por estar en el nivel cuatro en todo. Lo relevante es que tu madurez sea coherente con tu estrategia y que no haya una dimensión muy rezagada que frene a las demás.' ],

			[ 'h2', 'Preguntas para autoevaluarte' ],
			[ 'p', '<strong>Procesos.</strong> ¿Están documentados los procesos críticos? ¿Se ejecutan igual cuando falta la persona de siempre? ¿Cuántas horas al mes se van en tareas repetitivas?' ],
			[ 'p', '<strong>Datos.</strong> ¿Cuánto tardas en saber cuánto vendiste ayer? ¿Las cifras de dos áreas coinciden? ¿Hay una sola fuente de verdad por dato?' ],
			[ 'p', '<strong>Tecnología.</strong> ¿Tus sistemas se integran o alguien copia información entre ellos? ¿Hay versiones sin soporte? ¿Tienes respaldos probados?' ],
			[ 'p', '<strong>Personas.</strong> ¿Existe un responsable de tecnología? ¿El equipo usa las herramientas que ya pagas? ¿Cómo reacciona la organización ante un cambio de sistema?' ],
			[ 'p', '<strong>Clientes.</strong> ¿Puedes ver el historial completo de un cliente en un solo lugar? ¿Mides cuánto tardas en responder? ¿Sabes qué canal trae los clientes que más compran?' ],
			[ 'p', '<strong>Gobierno.</strong> ¿Hay un presupuesto anual de tecnología? ¿Existen políticas de seguridad y de uso de IA? ¿Alguien responde por el cumplimiento en protección de datos?' ],

			[ 'h2', 'Cómo interpretar el resultado' ],
			[
				'table',
				[
					'head' => [ 'Si tu punto más bajo es…', 'Empieza por…' ],
					'rows' => [
						[ 'Datos', 'Centralizar y limpiar la información; sin eso nada más funciona' ],
						[ 'Procesos', 'Documentar y simplificar antes de automatizar' ],
						[ 'Tecnología', 'Cerrar riesgos: soporte, respaldos, seguridad e integraciones' ],
						[ 'Personas', 'Formación, roles claros y gestión del cambio' ],
						[ 'Clientes', 'Unificar canales y medir el recorrido de compra' ],
						[ 'Gobierno', 'Presupuesto, prioridades y políticas mínimas' ],
					],
				],
			],
			[ 'p', 'La regla que más repetimos: <strong>no se salta de nivel</strong>. Un proyecto de inteligencia artificial sobre datos desordenados fracasa, y el fracaso se le atribuye a la IA cuando el problema era el nivel anterior.' ],

			[ 'h2', 'Cómo hacerlo en tu empresa' ],
			[
				'ol',
				[
					'Reúne a los responsables de cada área durante dos horas.',
					'Califica cada dimensión de 1 a 4 con evidencia, no con percepción.',
					'Identifica la dimensión más rezagada y su impacto en el negocio.',
					'Define tres iniciativas para los próximos seis meses, con responsable y métrica.',
					'Repite el ejercicio cada seis o doce meses para ver la evolución.',
				],
			],
			[ 'p', 'Con el resultado en mano, arma tu <a href="{url:post:hoja-de-ruta-tecnologica}">hoja de ruta tecnológica a 12 meses</a> y revisa la <a href="{url:post:transformacion-digital-pymes}">hoja de ruta de transformación digital para pymes</a>. ¿Quieres un diagnóstico acompañado, con entrevistas y comparación con tu sector? Conoce nuestro servicio de <a href="{url:servicio:transformacion-digital-empresas}">transformación digital</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tarda un diagnóstico de madurez digital?', 'Una autoevaluación interna se hace en una sesión de dos o tres horas. Un diagnóstico acompañado con entrevistas, revisión de sistemas y comparación sectorial suele tomar de dos a cuatro semanas.' ],
			[ '¿Sirve para una empresa pequeña?', 'Especialmente. En una empresa pequeña, invertir en lo que no corresponde al nivel actual duele más, porque el presupuesto es limitado y no hay margen para proyectos que no dan resultado.' ],
			[ '¿Quién debe participar?', 'Los responsables de las áreas operativas, comercial, administrativa y de tecnología, más la gerencia. Si solo participa tecnología, el diagnóstico refleja los sistemas y no el negocio.' ],
			[ '¿Qué hago si mi empresa está en nivel inicial en todo?', 'Es más común de lo que parece y no es una mala noticia: significa que las mejoras de mayor impacto son también las más simples. Empieza por centralizar información y ordenar dos o tres procesos críticos.' ],
		],
		'seo_title' => 'Diagnóstico de madurez digital en 6 dimensiones',
		'seo_desc'  => 'Modelo de madurez digital con seis dimensiones y cuatro niveles, preguntas para autoevaluar tu empresa y cómo decidir por dónde empezar según tu punto más bajo.',
	],
];

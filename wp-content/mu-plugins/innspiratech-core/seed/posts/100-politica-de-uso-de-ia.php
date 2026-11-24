<?php
/**
 * Artículo: Política de uso de IA en la empresa.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'politica-de-uso-de-ia',
	'title'      => 'Política de uso de IA en la empresa: qué debe incluir (con estructura base)',
	'date'       => '2027-04-05 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Gobierno de IA', 'Políticas', 'Seguridad', 'Cumplimiento' ],
	'servicio'   => 'consultoria-tecnologica',
	'image'      => [
		'file' => 'post-politica-uso-ia.jpg',
		'alt'  => 'Portada del artículo Política de uso de IA en la empresa — InnspiraTech',
	],
	'excerpt'    => 'Tu equipo ya usa inteligencia artificial, con o sin permiso. Una política corta y práctica evita fugas de información y malas decisiones. Estructura en diez secciones, clasificación de datos y cómo implementarla.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Si tu empresa no tiene una política de uso de inteligencia artificial, no significa que nadie la use: significa que cada persona decidió por su cuenta qué herramientas usar y qué información pegar en ellas. Contratos, bases de clientes, estados financieros y código ya pasaron por herramientas cuyas condiciones nadie leyó.' ],
			[ 'p', 'Prohibir no funciona: la gente la usará igual, a escondidas. Lo que funciona es una política clara, corta y útil que diga cómo usarla bien.' ],

			[ 'h2', 'Las diez secciones de la política' ],
			[
				'ol',
				[
					'<strong>Objetivo y alcance:</strong> a quién aplica, incluidos contratistas y proveedores.',
					'<strong>Herramientas aprobadas</strong> y cómo solicitar una nueva.',
					'<strong>Clasificación de la información:</strong> qué se puede compartir con cada tipo de herramienta.',
					'<strong>Usos permitidos</strong> con ejemplos concretos por área.',
					'<strong>Usos prohibidos</strong> con ejemplos.',
					'<strong>Revisión humana obligatoria:</strong> qué salidas deben verificarse antes de usarse.',
					'<strong>Transparencia:</strong> cuándo informar a clientes o terceros que se usó IA.',
					'<strong>Propiedad intelectual</strong> sobre contenidos generados y respeto de derechos de terceros.',
					'<strong>Reporte de incidentes:</strong> qué hacer si se compartió información indebida.',
					'<strong>Responsables y revisión:</strong> quién aprueba cambios y cada cuánto se actualiza.',
				],
			],

			[ 'h2', 'La clasificación de datos: el corazón del documento' ],
			[
				'table',
				[
					'head' => [ 'Nivel', 'Ejemplos', 'Herramientas permitidas' ],
					'rows' => [
						[ 'Pública', 'Contenido del sitio web, catálogo público', 'Cualquier herramienta aprobada' ],
						[ 'Interna', 'Procedimientos, presentaciones generales', 'Herramientas corporativas con acuerdo de no entrenamiento' ],
						[ 'Confidencial', 'Contratos, finanzas, estrategia, código propio', 'Solo herramientas corporativas autorizadas para ese nivel' ],
						[ 'Restringida', 'Datos personales sensibles, credenciales, secretos', 'Ninguna, salvo sistemas específicos aprobados' ],
					],
				],
			],
			[ 'p', 'Una tabla así, de una página, resuelve la mayoría de dudas del día a día mejor que un documento de treinta páginas.' ],

			[ 'h2', 'Ejemplos de usos permitidos' ],
			[
				'ul',
				[
					'Redactar borradores de correos, presentaciones y documentos a partir de información no confidencial.',
					'Resumir documentos públicos o internos en herramientas aprobadas.',
					'Generar ideas, estructuras y primeras versiones de contenido para revisión.',
					'Apoyo en programación con repositorios y herramientas autorizadas.',
					'Traducción de materiales no confidenciales con revisión.',
				],
			],

			[ 'h2', 'Ejemplos de usos prohibidos' ],
			[
				'ul',
				[
					'Pegar datos personales de clientes o empleados en herramientas no autorizadas.',
					'Compartir credenciales, llaves de acceso o información de seguridad.',
					'Tomar decisiones que afecten a personas —contratación, crédito, sanciones— solo con la salida de un modelo.',
					'Presentar como verificado un contenido generado sin revisarlo.',
					'Crear contenido que suplante a personas reales o engañe a clientes.',
				],
			],

			[ 'h2', 'Cómo implementarla' ],
			[
				'ol',
				[
					'Haz un inventario rápido: pregunta de forma anónima qué herramientas usa hoy la gente y para qué.',
					'Aprueba al menos una herramienta corporativa segura; sin alternativa, la política se incumple.',
					'Redacta la política en lenguaje simple, con ejemplos de cada área.',
					'Revísala con legal, seguridad y las áreas usuarias.',
					'Capacita en sesiones cortas con casos reales.',
					'Crea un canal para dudas y para reportar incidentes sin castigo al primer error.',
					'Revísala cada seis meses: las herramientas y la normativa cambian rápido.',
				],
			],

			[ 'h2', 'Normativa a tener en cuenta' ],
			[ 'p', 'Considera la normativa de protección de datos personales aplicable, como la Ley 1581 de 2012 en Colombia o el RGPD si tratas datos de personas en Europa, las obligaciones de confidencialidad con clientes y proveedores, y los marcos específicos de inteligencia artificial que avanzan en distintos países. La política no reemplaza asesoría legal; la operacionaliza.' ],
			[ 'p', 'Para llevar la IA a los procesos, revisa <a href="{url:post:como-implementar-inteligencia-artificial-en-una-empresa}">cómo implementar inteligencia artificial en tu empresa</a>; para los controles técnicos de agentes, <a href="{url:post:guardrails-para-agentes-de-ia}">guardrails</a>. Conoce nuestro servicio de <a href="{url:servicio:consultoria-tecnologica}">consultoría tecnológica</a> o <a href="{url:pagina:contacto}">te ayudamos a construir la tuya</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Una pyme necesita una política de uso de IA?', 'Sí, aunque sea de dos páginas. El riesgo de fuga de información existe igual en una empresa de diez personas, y una guía simple con herramientas aprobadas y datos prohibidos lo reduce de forma significativa.' ],
			[ '¿Conviene prohibir el uso de IA?', 'Rara vez funciona: las personas la usan igual, sin control. Es más efectivo aprobar herramientas seguras, definir qué información se puede compartir y capacitar.' ],
			[ '¿Qué herramientas son seguras para información interna?', 'Las versiones corporativas con acuerdos que excluyan el uso de tus datos para entrenamiento, controles de acceso y condiciones de retención claras. Revisa siempre los términos del plan contratado, no los de la versión gratuita.' ],
			[ '¿Quién debe ser responsable de la política?', 'Una responsabilidad compartida: tecnología o seguridad lidera, legal valida, y las áreas usuarias aportan los casos reales. Debe haber un dueño nombrado que la mantenga actualizada.' ],
		],
		'seo_title' => 'Política de uso de IA en la empresa: qué incluir',
		'seo_desc'  => 'Qué debe incluir la política de uso de IA de tu empresa: herramientas aprobadas, clasificación de datos, usos permitidos y prohibidos e implementación.',
	],
];

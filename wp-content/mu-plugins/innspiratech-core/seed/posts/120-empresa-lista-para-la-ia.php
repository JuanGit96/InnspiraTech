<?php
/**
 * Artículo: Cómo saber si tu empresa está lista para la IA.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'empresa-lista-para-la-ia',
	'title'      => 'Cómo saber si tu empresa está lista para la inteligencia artificial',
	'date'       => '2027-09-01 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Inteligencia artificial', 'Diagnóstico', 'Estrategia', 'Datos' ],
	'servicio'   => 'consultoria-tecnologica',
	'image'      => [
		'file' => 'post-lista-para-ia.jpg',
		'alt'  => 'Portada del artículo Cómo saber si tu empresa está lista para la IA — InnspiraTech',
	],
	'excerpt'    => 'Autoevaluación en 20 preguntas agrupadas en cinco áreas —estrategia, datos, procesos, tecnología y personas— con puntaje e interpretación, para decidir si empezar ya, qué preparar primero y por dónde arrancar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Muchas empresas se preguntan si deberían estar haciendo algo con inteligencia artificial. La pregunta más útil es otra: ¿qué tan preparada está mi empresa para que un proyecto de IA dé resultado? Porque la mayoría de pilotos que fracasan no lo hacen por la tecnología, sino por datos desordenados, procesos sin dueño o falta de un objetivo claro.' ],
			[ 'p', 'Esta autoevaluación toma quince minutos. Responde cada pregunta con sí (2 puntos), parcialmente (1) o no (0).' ],

			[ 'h2', 'Área 1: estrategia' ],
			[
				'ol',
				[
					'¿Tienes identificado un problema de negocio concreto que la IA podría ayudar a resolver?',
					'¿Puedes cuantificar hoy ese problema en tiempo, costo o ventas?',
					'¿Hay un responsable del negocio dispuesto a liderar un piloto?',
					'¿Existe presupuesto, aunque sea acotado, para probar?',
				],
			],

			[ 'h2', 'Área 2: datos' ],
			[
				'ol',
				[
					'¿La información necesaria existe en formato digital?',
					'¿Está centralizada o al menos es accesible sin recopilarla a mano?',
					'¿Confías en su calidad para tomar decisiones?',
					'¿Sabes qué datos son sensibles y quién puede acceder a ellos?',
				],
			],

			[ 'h2', 'Área 3: procesos' ],
			[
				'ol',
				[
					'¿El proceso candidato está documentado?',
					'¿Tiene reglas relativamente claras y un volumen significativo?',
					'¿Hay un dueño del proceso que conozca sus excepciones?',
					'¿Mides hoy cómo funciona: tiempos, errores, costos?',
				],
			],

			[ 'h2', 'Área 4: tecnología' ],
			[
				'ol',
				[
					'¿Tus sistemas principales tienen API o una forma de consultarlos?',
					'¿Tienes herramientas corporativas de IA aprobadas y seguras?',
					'¿Hay controles básicos de seguridad: doble factor, respaldos, gestión de accesos?',
					'¿Cuentas con apoyo técnico interno o de un proveedor de confianza?',
				],
			],

			[ 'h2', 'Área 5: personas y gobierno' ],
			[
				'ol',
				[
					'¿Existe una política o al menos reglas claras de uso de IA?',
					'¿El equipo usa herramientas de IA con alguna regularidad?',
					'¿La gerencia entiende que un piloto implica aprender y ajustar?',
					'¿Hay disposición a cambiar la forma de trabajar si el piloto funciona?',
				],
			],

			[ 'h2', 'Cómo interpretar tu puntaje' ],
			[
				'table',
				[
					'head' => [ 'Puntaje total', 'Diagnóstico', 'Siguiente paso' ],
					'rows' => [
						[ '30 a 40', 'Lista para empezar', 'Elige un caso de alto impacto y lanza un piloto con métricas' ],
						[ '20 a 29', 'Lista con preparación', 'Cierra las brechas del área más baja mientras defines el piloto' ],
						[ '10 a 19', 'Base en construcción', 'Empieza por ordenar datos y procesos; usa herramientas simples con reglas claras' ],
						[ 'Menos de 10', 'Temprano para proyectos de IA', 'Prioriza digitalización básica y una política de uso responsable' ],
					],
				],
			],
			[ 'p', 'Mira también el puntaje por área: un total alto con "datos" en cero es una señal de alerta. La IA amplifica lo que existe; si los datos están mal, las respuestas también lo estarán.' ],

			[ 'h2', 'Qué hacer según tu área más baja' ],
			[
				'ul',
				[
					'<strong>Estrategia:</strong> un taller con las áreas para identificar y cuantificar tres problemas candidatos.',
					'<strong>Datos:</strong> centralizar, limpiar y definir responsables de la información clave.',
					'<strong>Procesos:</strong> documentar y medir el proceso antes de intentar mejorarlo.',
					'<strong>Tecnología:</strong> cerrar brechas de seguridad y habilitar el acceso a los sistemas.',
					'<strong>Personas:</strong> política de uso, capacitación y comunicación clara sobre el propósito.',
				],
			],

			[ 'h2', 'Estar "listo" no significa esperar' ],
			[ 'p', 'Incluso con un puntaje bajo hay acciones que dan valor de inmediato: herramientas de productividad corporativas con reglas claras, un asistente sobre documentos públicos o internos no sensibles, o la automatización de una tarea simple. Lo que no conviene es lanzar un proyecto ambicioso sobre una base que no lo sostiene.' ],
			[ 'p', 'Con tu resultado en mano, revisa <a href="{url:post:como-implementar-inteligencia-artificial-en-una-empresa}">cómo implementar IA en tu empresa</a>, <a href="{url:post:politica-de-uso-de-ia}">la política de uso de IA</a> y <a href="{url:post:casos-de-uso-de-ia-por-industria}">casos de uso por industria</a>. ¿Quieres un diagnóstico acompañado con hoja de ruta? Conoce nuestro servicio de <a href="{url:servicio:consultoria-tecnologica}">consultoría tecnológica</a> o <a href="{url:pagina:contacto}">agenda una sesión</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Una pyme puede estar lista para la IA?', 'Sí, y muchas lo están más de lo que creen. Lo determinante no es el tamaño sino tener un problema concreto, datos accesibles y alguien que lidere el piloto.' ],
			[ '¿Qué pasa si mi puntaje es bajo?', 'Significa que conviene preparar la base antes de un proyecto grande: datos, procesos y reglas de uso. Mientras tanto, puedes aprovechar herramientas simples con bajo riesgo.' ],
			[ '¿Cuánto tiempo toma prepararse?', 'Depende del área más débil. Una política de uso y herramientas aprobadas se resuelven en semanas; ordenar datos dispersos puede tomar algunos meses.' ],
			[ '¿Necesito contratar especialistas en IA?', 'Para empezar, rara vez. La mayoría de casos empresariales se resuelven con modelos existentes, buenas integraciones y criterio de negocio. Un acompañamiento externo acelera el diagnóstico y el primer piloto.' ],
		],
		'seo_title' => 'Cómo saber si tu empresa está lista para la IA',
		'seo_desc'  => 'Autoevaluación de 20 preguntas en estrategia, datos, procesos, tecnología y personas para saber si tu empresa está lista para la IA y por dónde empezar.',
	],
];

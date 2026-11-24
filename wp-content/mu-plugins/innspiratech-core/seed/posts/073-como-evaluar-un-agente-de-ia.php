<?php
/**
 * Artículo: Cómo evaluar un agente de IA.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'como-evaluar-un-agente-de-ia',
	'title'      => 'Cómo evaluar un agente de IA antes y después de lanzarlo',
	'date'       => '2027-05-14 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Agentes de IA', 'Evaluación', 'Calidad', 'Métricas' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-evaluar-agente-ia.jpg',
		'alt'  => 'Portada del artículo Cómo evaluar un agente de IA: métricas y pruebas — InnspiraTech',
	],
	'excerpt'    => '"Funciona bien" no es una medida. Cómo armar un banco de pruebas con casos reales, qué métricas usar, cómo detectar respuestas inventadas y cómo evitar que una mejora rompa lo que ya servía.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La conversación típica antes de lanzar un agente es esta: alguien prueba diez preguntas, sale bien y se aprueba. Un mes después nadie sabe si mejoró o empeoró tras los últimos ajustes, porque no hay con qué comparar.' ],
			[ 'p', 'Evaluar un sistema de IA no es opcional: es la única forma de mejorarlo sin romperlo. Y no requiere herramientas sofisticadas para empezar.' ],

			[ 'h2', 'Paso 1: construye tu banco de casos' ],
			[ 'p', 'Toma entre 50 y 200 casos reales de tus conversaciones históricas, con la respuesta correcta acordada con el área responsable. Deben incluir cuatro tipos:' ],
			[
				'ul',
				[
					'<strong>Frecuentes:</strong> lo que se pregunta todos los días.',
					'<strong>Difíciles:</strong> preguntas ambiguas, con varias interpretaciones.',
					'<strong>Fuera de alcance:</strong> lo que el agente <em>no</em> debe responder; la respuesta correcta es derivar o declinar.',
					'<strong>Trampas:</strong> intentos de manipulación, datos falsos y preguntas sobre información que no existe.',
				],
			],
			[ 'p', 'Este banco es el activo más valioso del proyecto. Cada vez que aparezca un caso nuevo en producción, agrégalo.' ],

			[ 'h2', 'Paso 2: define qué significa "correcto"' ],
			[
				'table',
				[
					'head' => [ 'Dimensión', 'Qué evalúa' ],
					'rows' => [
						[ 'Exactitud', 'La información es verdadera y está actualizada' ],
						[ 'Completitud', 'Responde todo lo preguntado, no la mitad' ],
						[ 'Fundamento', 'Se apoya en documentos reales, no en invención' ],
						[ 'Alcance', 'No promete ni decide lo que no le corresponde' ],
						[ 'Tono', 'Coherente con la marca y con la situación' ],
						[ 'Acción', 'Ejecutó la herramienta correcta con los parámetros correctos' ],
						[ 'Seguridad', 'No expone datos ni cae en manipulaciones' ],
					],
				],
			],

			[ 'h2', 'Paso 3: evalúa antes de lanzar' ],
			[
				'ol',
				[
					'Ejecuta el banco completo y registra cada respuesta.',
					'Califica con una escala simple: correcta, parcial, incorrecta, peligrosa.',
					'Revisa manualmente todas las "peligrosas": son bloqueantes.',
					'Calcula el porcentaje de respuestas correctas por tipo de caso.',
					'Define el umbral mínimo para salir a producción, y respétalo.',
				],
			],
			[ 'p', 'Cuando el volumen crece, parte de la calificación puede apoyarse en un modelo evaluador, pero conserva siempre una muestra revisada por personas: sin criterio humano, la evaluación se vuelve autorreferencial.' ],

			[ 'h2', 'Paso 4: mide en producción' ],
			[
				'ul',
				[
					'<strong>Resolución autónoma:</strong> conversaciones cerradas sin intervención humana.',
					'<strong>Tasa de traspaso</strong> y sus motivos.',
					'<strong>Satisfacción</strong> al cerrar la conversación.',
					'<strong>Recontacto</strong> por el mismo motivo en 48 horas.',
					'<strong>Preguntas sin respuesta:</strong> la mejor fuente para ampliar el conocimiento.',
					'<strong>Costo por conversación</strong> y su tendencia.',
					'<strong>Incidentes:</strong> respuestas incorrectas reportadas, con su gravedad.',
				],
			],
			[ 'p', 'Establece una revisión semanal de una muestra aleatoria de conversaciones. Treinta minutos a la semana detectan problemas que ninguna métrica agregada muestra.' ],

			[ 'h2', 'Paso 5: evita romper lo que funcionaba' ],
			[ 'p', 'Cada cambio —de instrucciones, de documentos, de modelo— debe pasar por el banco de casos antes de publicarse. Es el equivalente a las pruebas automatizadas en el software tradicional: sin ellas, cada mejora es una apuesta.' ],
			[ 'p', 'Cuando el cambio es grande, compara en paralelo: la versión actual y la nueva respondiendo lo mismo, con revisión a ciegas de cuál responde mejor.' ],

			[ 'h2', 'Cómo detectar respuestas inventadas' ],
			[
				'ul',
				[
					'Exigir que cada afirmación se apoye en un fragmento recuperado y verificar que exista.',
					'Incluir en el banco preguntas sobre información que no está en la base: la respuesta correcta es "no tengo ese dato".',
					'Revisar los casos donde el agente respondió con mucha seguridad y poca fuente.',
					'Dar al usuario una forma fácil de reportar una respuesta incorrecta, y revisar esos reportes cada semana.',
				],
			],
			[ 'p', 'Para el diseño del agente, revisa <a href="{url:post:agentes-de-ia-para-empresas}">agentes de IA para empresas</a>; para los límites, <a href="{url:post:guardrails-para-agentes-de-ia}">guardrails</a>; y para el rol humano, <a href="{url:post:human-in-the-loop-ia}">humano en el ciclo</a>. Conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuántos casos necesito para evaluar?', 'Con 50 bien elegidos ya se detectan los problemas más graves; entre 100 y 200 dan una medida estable. Más importante que la cantidad es que cubran casos frecuentes, difíciles, fuera de alcance y trampas.' ],
			[ '¿Puede un modelo evaluar a otro modelo?', 'Sí, y es útil para escalar la evaluación, pero con supervisión: los modelos evaluadores tienen sus propios sesgos. Conserva siempre una muestra revisada por personas del área responsable.' ],
			[ '¿Cada cuánto debo reevaluar?', 'Antes de cada cambio relevante y, en producción, con una revisión semanal de muestra y una evaluación completa mensual. También cuando cambie el modelo o la base de conocimiento.' ],
			[ '¿Qué umbral de acierto es aceptable?', 'Depende del riesgo del caso de uso. En consultas informativas, un nivel alto de acierto con salida a humano es suficiente; en temas financieros, legales o de salud, la exigencia sube y conviene limitar el alcance del agente.' ],
		],
		'seo_title' => 'Cómo evaluar un agente de IA: métricas y pruebas',
		'seo_desc'  => 'Cómo evaluar un agente de IA: banco de casos, dimensiones a calificar, métricas en producción y cómo detectar respuestas inventadas.',
	],
];

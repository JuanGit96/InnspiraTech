<?php
/**
 * Artículo: Cómo evaluar perfiles técnicos si no eres técnico.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'evaluar-perfiles-tecnicos-sin-ser-tecnico',
	'title'      => 'Cómo evaluar perfiles técnicos si no eres técnico',
	'date'       => '2026-11-06 09:00:00',
	'categories' => [ 'talento-ti' ],
	'tags'       => [ 'Contratación', 'Entrevistas técnicas', 'Talento TI', 'Recursos humanos' ],
	'servicio'   => 'staff-augmentation',
	'image'      => [
		'file' => 'post-evaluar-perfiles-tecnicos.jpg',
		'alt'  => 'Portada del artículo Cómo evaluar perfiles técnicos si no eres técnico — InnspiraTech',
	],
	'excerpt'    => 'No necesitas programar para detectar un buen profesional. Preguntas que revelan criterio, señales de alerta, cómo leer una hoja de vida técnica y qué delegar a una evaluación especializada.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Tienes que contratar a alguien que hará algo que tú no sabes hacer. Es una situación incómoda y frecuente: gerentes, fundadores y responsables de recursos humanos que deben decidir entre candidatos cuyas respuestas suenan todas convincentes.' ],
			[ 'p', 'La buena noticia es que gran parte de lo que distingue a un buen profesional técnico no es técnico: es criterio, comunicación y forma de resolver problemas. Y eso sí lo puedes evaluar.' ],

			[ 'h2', 'Primero: define qué necesitas, no qué tecnología quieres' ],
			[ 'p', 'Un error clásico es publicar una vacante con una lista de quince tecnologías. Describe en su lugar el problema: "necesitamos mantener y evolucionar un sistema de pedidos que usan 40 personas y se integra con el ERP". Un buen candidato responderá a eso; uno que solo colecciona palabras clave, no.' ],

			[ 'h2', 'Preguntas que revelan criterio' ],
			[
				'table',
				[
					'head' => [ 'Pregunta', 'Qué buscas en la respuesta' ],
					'rows' => [
						[ '"Cuéntame un proyecto del que estés orgulloso y qué problema resolvía"', 'Que hable del impacto y no solo de la tecnología' ],
						[ '"¿Qué decisión técnica tomaste que hoy harías distinto?"', 'Autocrítica y aprendizaje; desconfía de quien nunca se equivocó' ],
						[ '"Explícame algo técnico como si yo no supiera nada"', 'Capacidad de comunicarse con el negocio' ],
						[ '"¿Qué harías en tu primera semana aquí?"', 'Método: entender antes de cambiar' ],
						[ '"¿Cómo decides si algo está listo para producción?"', 'Pruebas, revisión, criterios de calidad' ],
						[ '"Cuéntame de una vez que el sistema falló en producción"', 'Manejo de presión, diagnóstico y prevención' ],
						[ '"¿Qué haces cuando no sabes cómo resolver algo?"', 'Honestidad y capacidad de investigar y pedir ayuda' ],
						[ '"¿Cómo estimas cuánto tarda una tarea?"', 'Realismo, desglose y manejo de incertidumbre' ],
					],
				],
			],
			[ 'p', 'No necesitas entender la solución técnica que describa. Necesitas notar si <strong>explica con claridad</strong>, si reconoce límites y si piensa en las consecuencias para el negocio.' ],

			[ 'h2', 'Señales de alerta' ],
			[
				'ul',
				[
					'Desprecia todo lo que existe: "eso está mal hecho, hay que rehacerlo desde cero" antes de conocerlo.',
					'No puede explicar nada sin jerga, ni siquiera cuando se lo pides.',
					'Habla siempre en primera persona del singular sobre proyectos de equipo.',
					'Se incomoda o se molesta cuando le pides detalles concretos.',
					'Promete plazos muy cortos sin hacer una sola pregunta sobre el contexto.',
					'No pregunta nada sobre tu negocio, tus usuarios o tus problemas.',
				],
			],

			[ 'h2', 'Cómo leer una hoja de vida técnica' ],
			[
				'ul',
				[
					'<strong>Años de experiencia real</strong> en lo que necesitas, no años totales en tecnología.',
					'<strong>Permanencia:</strong> cambios cada seis meses de forma repetida merecen una conversación.',
					'<strong>Tipo de empresa:</strong> quien viene de estructuras grandes y muy especializadas puede necesitar adaptación a una pyme donde hay que hacer de todo, y al revés.',
					'<strong>Resultados, no herramientas:</strong> "reduje el tiempo de carga a la mitad" dice más que una lista de tecnologías.',
					'<strong>Actividad pública:</strong> repositorios, artículos o charlas son buena señal, aunque su ausencia no descalifica.',
				],
			],

			[ 'h2', 'La prueba práctica bien diseñada' ],
			[ 'p', 'Si vas a pedir una prueba, que sea corta, remunerada si supera un par de horas, y parecida al trabajo real. Evita acertijos de algoritmos que no reflejan lo que hará en tu empresa, y nunca pidas trabajo que vayas a usar en producción.' ],
			[ 'p', 'Una alternativa mejor cuando no tienes evaluador técnico: pedirle que revise un problema real y explique cómo lo abordaría, en una conversación de 45 minutos. Escucharás preguntas, supuestos y prioridades, que es exactamente lo que quieres evaluar.' ],

			[ 'h2', 'Cuándo pedir ayuda externa' ],
			[ 'p', 'Para roles clave —líder técnico, arquitecto, el primer desarrollador de tu empresa— conviene una evaluación técnica independiente. Existen tres caminos: un asesor técnico de confianza que participe en una entrevista, un servicio de evaluación especializado, o un proveedor de staff augmentation que ya haya evaluado a los perfiles que te presenta.' ],
			[ 'p', 'El costo de esa evaluación es mínimo comparado con una contratación equivocada en un rol que define la arquitectura de tu sistema.' ],

			[ 'h2', 'Verifica referencias como es debido' ],
			[ 'p', 'Pregunta al menos a un jefe directo, no solo a compañeros. Tres preguntas bastan: qué hizo exactamente, cómo reaccionó cuando algo salió mal y si lo volvería a contratar. Las pausas y los silencios suelen decir más que las respuestas.' ],
			[ 'p', 'Para el proceso completo de contratación, revisa <a href="{url:post:como-contratar-desarrolladores-de-software}">cómo contratar desarrolladores sin equivocarte</a> y <a href="{url:post:pruebas-tecnicas-para-programadores}">cómo diseñar pruebas técnicas justas</a>. Si prefieres recibir perfiles ya evaluados, conoce nuestro servicio de <a href="{url:servicio:staff-augmentation}">staff augmentation y reclutamiento TI</a> o <a href="{url:pagina:contacto}">cuéntanos qué rol necesitas</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Puedo contratar bien sin ningún apoyo técnico?', 'Para perfiles junior o de soporte, sí, apoyándote en preguntas de criterio y referencias. Para roles que definirán la arquitectura o liderarán a otros, conviene una evaluación técnica independiente.' ],
			[ '¿Sirven las certificaciones?', 'Son un indicio de interés y de conocimiento formal, pero no reemplazan la experiencia demostrable. Muchos excelentes profesionales no tienen ninguna, y algunas certificaciones se obtienen sin haber construido nada real.' ],
			[ '¿Qué peso darle a la prueba técnica frente a la entrevista?', 'La prueba confirma capacidad de ejecución; la entrevista revela criterio, comunicación y ajuste con el equipo. Contratar solo por la prueba suele traer problemas de trabajo en equipo; contratar solo por la entrevista, sorpresas de ejecución.' ],
			[ '¿Cómo sé si un candidato exagera su experiencia?', 'Pídele detalles: qué parte hizo él, qué decisiones tomó, qué salió mal y cómo lo resolvió. Quien vivió el proyecto responde con detalles concretos; quien lo escuchó contar, se queda en generalidades.' ],
		],
		'seo_title' => 'Cómo evaluar perfiles técnicos si no eres técnico',
		'seo_desc'  => 'Preguntas de entrevista que revelan criterio técnico, señales de alerta, cómo leer una hoja de vida, pruebas prácticas justas y cuándo pedir evaluación externa.',
	],
];

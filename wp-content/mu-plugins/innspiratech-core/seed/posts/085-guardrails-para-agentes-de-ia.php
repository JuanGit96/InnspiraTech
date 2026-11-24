<?php
/**
 * Artículo: Guardrails para agentes de IA.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'guardrails-para-agentes-de-ia',
	'title'      => 'Guardrails: cómo poner límites seguros a un agente de IA',
	'date'       => '2027-06-11 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Agentes de IA', 'Seguridad', 'Gobierno de IA', 'Riesgos' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-guardrails-ia.jpg',
		'alt'  => 'Portada del artículo Guardrails: cómo poner límites seguros a un agente de IA — InnspiraTech',
	],
	'excerpt'    => 'Un agente sin límites es un riesgo con buena redacción. Las cinco capas de control que aplicamos —alcance, entrada, herramientas, salida y supervisión— con ejemplos y cómo probarlas.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La pregunta que hace toda gerencia antes de aprobar un agente de IA es la correcta: ¿qué impide que diga o haga algo que no debe? La respuesta no puede ser "le pedimos en las instrucciones que no lo haga". Las instrucciones ayudan, pero no son un control: son una sugerencia muy convincente.' ],
			[ 'p', 'Los controles reales se implementan por capas, y cada una atrapa lo que la anterior deja pasar.' ],

			[ 'h2', 'Capa 1: alcance' ],
			[ 'p', 'El primer límite es qué puede hacer, no qué debe evitar. Un agente que solo tiene tres herramientas de consulta no puede borrar nada aunque alguien se lo pida. Define el alcance mínimo necesario y amplíalo cuando la confianza esté ganada, nunca al revés.' ],
			[
				'ul',
				[
					'Herramientas acotadas, sin ejecución de comandos ni consultas libres.',
					'Temas fuera de alcance declarados: legal, salud, financiero, reclamos.',
					'Permisos heredados del usuario que consulta, no de un superusuario.',
					'Límites de monto, cantidad y frecuencia en cualquier acción.',
				],
			],

			[ 'h2', 'Capa 2: control de la entrada' ],
			[ 'p', 'Todo lo que entra al agente es potencialmente hostil: mensajes de usuarios, documentos, correos, páginas web. Los controles habituales:' ],
			[
				'ul',
				[
					'Detección de intentos de manipulación de instrucciones.',
					'Separación clara entre las instrucciones del sistema y el contenido del usuario.',
					'Filtrado de contenido inapropiado antes de procesarlo.',
					'Límites de longitud y de archivos adjuntos.',
					'Tratamiento del contenido externo como datos, nunca como órdenes.',
				],
			],

			[ 'h2', 'Capa 3: control de las herramientas' ],
			[
				'table',
				[
					'head' => [ 'Riesgo', 'Control' ],
					'rows' => [
						[ 'Acción irreversible', 'Confirmación humana explícita antes de ejecutar' ],
						[ 'Envío de información hacia afuera', 'Lista de destinos permitidos' ],
						[ 'Extracción masiva de datos', 'Límite de resultados por consulta y por sesión' ],
						[ 'Uso excesivo', 'Cupos por usuario y por periodo' ],
						[ 'Parámetros manipulados', 'Validación estricta en el servidor' ],
					],
				],
			],

			[ 'h2', 'Capa 4: control de la salida' ],
			[ 'p', 'Antes de que la respuesta llegue al usuario, se puede verificar que no incluya datos personales que no correspondan, que no prometa condiciones comerciales fuera de política, que no afirme cosas sin respaldo en los documentos recuperados y que mantenga el tono acordado.' ],
			[ 'p', 'Para casos sensibles, una revisión automática con un segundo modelo evaluador es razonable; para casos críticos, la revisión es humana y punto.' ],

			[ 'h2', 'Capa 5: supervisión' ],
			[
				'ul',
				[
					'Registro completo de conversaciones y acciones, con retención definida.',
					'Revisión semanal de una muestra aleatoria.',
					'Alertas automáticas ante patrones anómalos: muchas consultas de un mismo usuario, intentos repetidos de temas bloqueados.',
					'Canal simple para que el usuario reporte una respuesta incorrecta.',
					'Un botón de apagado: poder desactivar el agente en segundos si algo sale mal.',
				],
			],
			[ 'p', 'Ese último punto parece obvio y casi nunca está implementado. Debe existir, estar documentado y haberse probado.' ],

			[ 'h2', 'Cómo probar los límites' ],
			[ 'p', 'Antes de lanzar, alguien del equipo debe intentar romperlo deliberadamente: pedirle que ignore sus instrucciones, esconder órdenes dentro de un documento que va a procesar, solicitarle datos de otro cliente, pedirle descuentos fuera de política, llevarlo a temas fuera de alcance. Cada intento exitoso es un control que falta.' ],
			[ 'p', 'Convierte esos intentos en casos permanentes de tu banco de pruebas, como explicamos en <a href="{url:post:como-evaluar-un-agente-de-ia}">cómo evaluar un agente de IA</a>.' ],

			[ 'h2', 'El equilibrio' ],
			[ 'p', 'Un agente con demasiados controles se vuelve inútil: responde con evasivas, deriva todo a un humano y nadie lo usa. La calibración correcta se logra por caso de uso: mucha libertad en consultas informativas de bajo riesgo, control estricto donde hay dinero, datos personales o decisiones difíciles de revertir.' ],
			[ 'p', 'Complementa con <a href="{url:post:human-in-the-loop-ia}">humano en el ciclo</a> y con <a href="{url:post:politica-de-uso-de-ia}">la política de uso de IA de tu empresa</a>. Conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Basta con escribir buenas instrucciones al modelo?', 'No. Las instrucciones orientan el comportamiento, pero pueden ser influidas por el contenido que el modelo procesa. Los controles efectivos están en el alcance de las herramientas, la validación y la confirmación humana.' ],
			[ '¿Qué es la inyección de instrucciones?', 'Es texto insertado en un mensaje o documento con el fin de que el agente ejecute acciones no previstas. Se mitiga separando instrucciones de datos, acotando herramientas y validando en el servidor.' ],
			[ '¿Los controles encarecen mucho la operación?', 'Algunos sí, como una revisión automática de la salida con un segundo modelo. Por eso se aplican por nivel de riesgo: no todos los casos necesitan todas las capas.' ],
			[ '¿Quién debe definir los límites?', 'Una decisión conjunta: el área responsable del proceso define qué se puede prometer y decidir, tecnología implementa los controles, y cumplimiento o legal revisa lo que toca datos personales y obligaciones contractuales.' ],
		],
		'seo_title' => 'Guardrails: límites seguros para agentes de IA',
		'seo_desc'  => 'Cinco capas de control para un agente de IA: alcance, entrada, herramientas, salida y supervisión, con ejemplos, pruebas de límites y cómo calibrar por riesgo.',
	],
];

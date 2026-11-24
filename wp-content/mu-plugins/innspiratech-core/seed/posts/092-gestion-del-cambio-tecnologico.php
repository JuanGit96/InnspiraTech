<?php
/**
 * Artículo: Gestión del cambio tecnológico.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'gestion-del-cambio-tecnologico',
	'title'      => 'Gestión del cambio: cómo lograr que tu equipo sí adopte la nueva tecnología',
	'date'       => '2027-06-28 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'Gestión del cambio', 'Adopción', 'Transformación digital', 'Liderazgo' ],
	'servicio'   => 'transformacion-digital-empresas',
	'image'      => [
		'file' => 'post-gestion-del-cambio.jpg',
		'alt'  => 'Portada del artículo Gestión del cambio: que tu equipo adopte la tecnología — InnspiraTech',
	],
	'excerpt'    => 'La mayoría de proyectos tecnológicos que fracasan funcionaban técnicamente: nadie los usó. Por qué aparece la resistencia, qué hacer antes, durante y después, y cómo medir la adopción real.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'El sistema se entregó a tiempo, cumple los requisitos y funciona. Seis meses después, la mitad del equipo sigue usando la hoja de cálculo de siempre y los datos del sistema no son confiables porque nadie los actualiza. El proyecto se declara "un fracaso tecnológico" cuando en realidad fue un fracaso de adopción.' ],

			[ 'h2', 'De dónde viene la resistencia' ],
			[ 'p', 'Casi nunca es terquedad. Detrás de la resistencia suele haber una razón legítima:' ],
			[
				'table',
				[
					'head' => [ 'Lo que se dice', 'Lo que suele significar' ],
					'rows' => [
						[ '"El sistema es complicado"', 'Le toma más tiempo que como lo hacía antes' ],
						[ '"Prefiero mi Excel"', 'Su Excel resuelve un caso que el sistema no contempló' ],
						[ '"No tengo tiempo de aprender"', 'Nadie le liberó carga para la transición' ],
						[ '"Esto no sirve para lo que hacemos"', 'No lo consultaron al diseñarlo y tiene razón en algo' ],
						[ 'Silencio y uso mínimo', 'Miedo: a ser medido, a equivocarse o a ser reemplazado' ],
					],
				],
			],
			[ 'p', 'La primera tarea de la gestión del cambio no es convencer: es escuchar qué hay detrás de cada objeción, porque la mitad de ellas señala un problema real del sistema.' ],

			[ 'h2', 'Antes: preparar el terreno' ],
			[
				'ol',
				[
					'<strong>Involucra a los usuarios en el diseño,</strong> no solo en la capacitación. Dos personas del área en las sesiones de definición cambian el resultado.',
					'<strong>Explica el porqué en términos de su trabajo:</strong> qué gana quien lo va a usar, no qué gana la empresa.',
					'<strong>Identifica a los referentes informales</strong> de cada área y hazlos parte del proyecto.',
					'<strong>Sé honesto sobre lo que cambia,</strong> incluido lo que será más incómodo al principio.',
					'<strong>Libera tiempo real</strong> para la transición; pedir aprendizaje "además de todo lo demás" garantiza el fracaso.',
				],
			],

			[ 'h2', 'Durante: la transición' ],
			[
				'ul',
				[
					'<strong>Capacita con datos reales</strong> del día a día, no con ejemplos de demostración.',
					'<strong>Sesiones cortas y prácticas,</strong> mejor varias que una jornada larga.',
					'<strong>Material de consulta breve:</strong> guías de una página y videos de dos minutos, no manuales de cien páginas.',
					'<strong>Apoyo cercano las primeras semanas:</strong> alguien a quien preguntar sin sentirse tonto.',
					'<strong>Acompañamiento en el puesto,</strong> no solo en un salón.',
					'<strong>Corrige rápido los problemas reales</strong> que aparezcan: cada corrección visible compra credibilidad.',
					'<strong>Fecha de apagado del sistema anterior,</strong> definida y comunicada. Sin ella, la convivencia se vuelve permanente.',
				],
			],

			[ 'h2', 'Después: sostener' ],
			[ 'p', 'La adopción se pierde en los meses tres a seis, cuando el acompañamiento termina y aparecen los casos que nadie previó. Sostenerla exige medir el uso, atender las solicitudes de mejora, incorporar el sistema a la rutina de gestión —si el informe semanal sale del sistema, el sistema se usa— y capacitar a quien entra después, que suele quedar por fuera del plan original.' ],

			[ 'h2', 'Cómo medir la adopción' ],
			[
				'table',
				[
					'head' => [ 'Indicador', 'Qué revela' ],
					'rows' => [
						[ 'Usuarios activos sobre usuarios esperados', 'Adopción real, no licencias compradas' ],
						[ 'Frecuencia de uso por persona', 'Si se volvió parte del trabajo o es esporádico' ],
						[ 'Procesos completados en el sistema', 'Si se usa completo o solo para registrar al final' ],
						[ 'Persistencia de la vía antigua', 'Correos, hojas de cálculo y mensajes paralelos' ],
						[ 'Solicitudes de soporte por tipo', 'Dónde el diseño no acompaña al usuario' ],
					],
				],
			],
			[ 'p', 'El cuarto indicador es el más revelador: mientras la vía antigua siga viva, la nueva no terminó de adoptarse.' ],

			[ 'h2', 'El papel de la gerencia' ],
			[ 'p', 'Ningún cambio se sostiene si el liderazgo no lo usa y no lo exige con coherencia. Si el gerente sigue pidiendo el reporte por correo en lugar de consultarlo en el sistema, está comunicando —sin decirlo— que el sistema es opcional.' ],
			[ 'p', 'Para el contexto general, revisa <a href="{url:post:transformacion-digital-pymes}">transformación digital en pymes</a> y <a href="{url:post:migrar-de-excel-a-un-sistema}">del Excel al sistema</a>. Conoce nuestro servicio de <a href="{url:servicio:transformacion-digital-empresas}">transformación digital</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tiempo toma que un equipo adopte un sistema nuevo?', 'Para tareas simples, unas semanas; para cambios de proceso importantes, entre tres y seis meses hasta que se vuelve rutina. El acompañamiento no debería terminar con la capacitación inicial.' ],
			[ '¿Qué hago si alguien se niega a usar el sistema?', 'Primero entiende el motivo: suele haber una razón operativa válida. Si la hay, corrígela; si no, la expectativa debe ser clara y sostenida por el liderazgo, con acompañamiento y con consecuencias coherentes.' ],
			[ '¿Conviene mantener el sistema anterior por si acaso?', 'Solo durante un periodo de convivencia corto y con fecha de apagado definida. Mantener ambos indefinidamente garantiza que nadie migre del todo y que los datos queden divididos.' ],
			[ '¿Cuánto debo invertir en gestión del cambio?', 'Es una porción pequeña del proyecto y la que más decide su resultado. Un proyecto tecnológico sin presupuesto para capacitación y acompañamiento está financiando solo la mitad de lo que necesita.' ],
		],
		'seo_title' => 'Gestión del cambio: que tu equipo adopte la tecnología',
		'seo_desc'  => 'Por qué fracasa la adopción tecnológica, de dónde viene la resistencia y qué hacer antes, durante y después de implementar, con indicadores de adopción real.',
	],
];

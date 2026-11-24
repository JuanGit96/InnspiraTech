<?php
/**
 * Artículo: Hoja de ruta tecnológica a 12 meses.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'hoja-de-ruta-tecnologica',
	'title'      => 'Hoja de ruta tecnológica a 12 meses: cómo construirla y sostenerla',
	'date'       => '2027-04-23 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'Estrategia', 'Planeación', 'Consultoría tecnológica', 'Gestión' ],
	'servicio'   => 'consultoria-tecnologica',
	'image'      => [
		'file' => 'post-hoja-de-ruta.jpg',
		'alt'  => 'Portada del artículo Hoja de ruta tecnológica a 12 meses — InnspiraTech',
	],
	'excerpt'    => 'Una lista de proyectos no es una hoja de ruta. Cómo construir un plan de 12 meses que conecte objetivos del negocio con iniciativas priorizadas, con criterios de decisión y revisión trimestral.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Casi todas las empresas tienen una lista de cosas que "hay que hacer con la tecnología". Muy pocas tienen una hoja de ruta: un plan que explica qué se va a hacer, en qué orden, por qué, cuánto cuesta y qué se espera lograr.' ],
			[ 'p', 'La diferencia se nota cuando llega un imprevisto: con una lista, cualquier urgencia desplaza todo; con una hoja de ruta, se decide qué sale para que algo entre.' ],

			[ 'h2', 'Paso 1: empieza por los objetivos del negocio' ],
			[ 'p', 'Pregúntale a la gerencia qué necesita lograr el próximo año: crecer en un segmento, reducir costos operativos, mejorar el servicio, cumplir una exigencia normativa, prepararse para una inversión. Máximo tres o cuatro objetivos. Toda iniciativa tecnológica del plan deberá poder conectarse con alguno de ellos; si no puede, probablemente no pertenece a este año.' ],

			[ 'h2', 'Paso 2: diagnóstico honesto del punto de partida' ],
			[
				'ul',
				[
					'Inventario de sistemas, integraciones y proveedores, con su costo anual.',
					'Riesgos: versiones sin soporte, dependencias de una sola persona, ausencia de respaldos probados.',
					'Deuda técnica concentrada en los módulos que más cambian.',
					'Procesos aún manuales que consumen horas medibles.',
					'Capacidades del equipo: qué se puede hacer en casa y qué no.',
				],
			],

			[ 'h2', 'Paso 3: arma el portafolio de iniciativas' ],
			[ 'p', 'Cada iniciativa se describe en una ficha corta y comparable:' ],
			[
				'table',
				[
					'head' => [ 'Campo', 'Contenido' ],
					'rows' => [
						[ 'Nombre y descripción', 'En una línea, entendible por cualquiera' ],
						[ 'Objetivo de negocio', 'A cuál de los tres o cuatro responde' ],
						[ 'Beneficio esperado', 'Cifra o rango, no adjetivos' ],
						[ 'Costo estimado', 'Rango con margen de error declarado' ],
						[ 'Esfuerzo y plazo', 'Semanas o meses, y quién lo haría' ],
						[ 'Riesgo de no hacerlo', 'Qué pasa si se aplaza un año' ],
						[ 'Dependencias', 'Qué debe existir antes' ],
					],
				],
			],

			[ 'h2', 'Paso 4: prioriza con criterios explícitos' ],
			[ 'p', 'Prioriza en dos ejes: impacto en el objetivo de negocio y esfuerzo. Y respeta tres reglas que evitan planes irreales:' ],
			[
				'ol',
				[
					'<strong>Lo que sostiene la operación va primero:</strong> seguridad, respaldos y versiones con soporte no compiten con lo demás.',
					'<strong>Reserva capacidad para lo imprevisto:</strong> entre el 20 % y el 30 % del tiempo del equipo. Si planeas al 100 %, el plan se rompe en febrero.',
					'<strong>Acepta el límite real de ejecución:</strong> es mejor terminar cinco iniciativas que dejar quince a medias.',
				],
			],

			[ 'h2', 'Paso 5: ordénalo por trimestres' ],
			[
				'table',
				[
					'head' => [ 'Trimestre', 'Foco típico' ],
					'rows' => [
						[ 'T1', 'Cerrar riesgos críticos y lograr una victoria visible temprano' ],
						[ 'T2', 'Iniciativas de mayor impacto en el objetivo principal' ],
						[ 'T3', 'Escalamiento de lo que funcionó y mejoras de eficiencia' ],
						[ 'T4', 'Estabilización, cierre y preparación del año siguiente' ],
					],
				],
			],
			[ 'p', 'La victoria temprana no es un detalle político: financia la credibilidad del resto del plan.' ],

			[ 'h2', 'Paso 6: define cómo se mide' ],
			[ 'p', 'Cada iniciativa necesita un indicador y una línea base medida antes de empezar. Sin línea base, cualquier resultado es discutible. Publica un tablero simple con el avance, el presupuesto ejecutado y los indicadores comprometidos.' ],

			[ 'h2', 'Paso 7: revísala cada trimestre' ],
			[ 'p', 'Una hoja de ruta anual que no se revisa es un documento muerto a los tres meses. La revisión trimestral responde cuatro preguntas: qué se completó, qué cambió en el negocio, qué entra y qué sale, y qué aprendimos. Los cambios son normales; lo que no debe ocurrir es que entre algo sin que salga nada.' ],

			[ 'h2', 'Errores frecuentes' ],
			[
				'ul',
				[
					'Confundir la hoja de ruta con una lista de deseos sin costo ni responsable.',
					'Planear solo proyectos nuevos y no dejar espacio para mantener lo existente.',
					'No incluir el costo recurrente de lo que se implementa.',
					'Construirla solo con el área técnica, sin las áreas usuarias.',
					'No comunicarla: si el equipo no la conoce, no la ejecuta.',
				],
			],
			[ 'p', 'Para presentarla y defenderla, revisa <a href="{url:post:presupuesto-de-tecnologia}">presupuesto de tecnología: cómo defenderlo ante la gerencia</a>, y si necesitas liderazgo técnico para ejecutarla, <a href="{url:post:cto-as-a-service}">CTO as a Service</a>. Conoce nuestro servicio de <a href="{url:servicio:consultoria-tecnologica}">consultoría tecnológica</a> o <a href="{url:pagina:contacto}">construyámosla juntos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Doce meses no es demasiado en tecnología?', 'Para el detalle, sí: por eso el plan se define con granularidad alta en el primer trimestre y más gruesa en los siguientes, y se revisa cada tres meses. Lo que se mantiene doce meses son los objetivos, no las tareas.' ],
			[ '¿Quién debe construir la hoja de ruta?', 'El responsable de tecnología junto con la gerencia y las áreas usuarias. Si no hay un rol técnico con visión de negocio, es el escenario típico donde un CTO externo aporta en pocas semanas.' ],
			[ '¿Qué hago si surge una urgencia que no estaba planeada?', 'Se atiende, y se decide explícitamente qué sale del plan para darle espacio. Ese registro es lo que permite explicar después por qué algo no se hizo.' ],
			[ '¿Cómo la presento a una junta directiva?', 'Con una lámina por objetivo de negocio, las iniciativas asociadas, el costo total, los indicadores comprometidos y los riesgos de no ejecutar. El detalle técnico va en anexos, no en la presentación.' ],
		],
		'seo_title' => 'Hoja de ruta tecnológica a 12 meses',
		'seo_desc'  => 'Cómo construir una hoja de ruta tecnológica: objetivos de negocio, diagnóstico, portafolio de iniciativas, priorización, trimestres, indicadores y revisión.',
	],
];

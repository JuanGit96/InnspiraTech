<?php
/**
 * Artículo: Pruebas técnicas para programadores.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'pruebas-tecnicas-para-programadores',
	'title'      => 'Pruebas técnicas para programadores: cómo diseñarlas para que sean justas y útiles',
	'date'       => '2027-02-03 09:00:00',
	'categories' => [ 'talento-ti' ],
	'tags'       => [ 'Contratación', 'Pruebas técnicas', 'Entrevistas', 'Talento TI' ],
	'servicio'   => 'staff-augmentation',
	'image'      => [
		'file' => 'post-pruebas-tecnicas.jpg',
		'alt'  => 'Portada del artículo Pruebas técnicas justas para programadores — InnspiraTech',
	],
	'excerpt'    => 'Las pruebas mal diseñadas espantan a los buenos candidatos y no predicen nada. Formatos que funcionan, cuánto deben durar, cómo evaluar con criterios objetivos y qué hacer con la IA en el proceso.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una prueba técnica debería responder una pregunta concreta: ¿esta persona puede hacer el trabajo que necesitamos? En la práctica, muchas responden otra: ¿está dispuesta a dedicar un fin de semana gratis a resolver un ejercicio que no se parece a nada de lo que hará?' ],
			[ 'p', 'El resultado es conocido: los mejores candidatos, que tienen otras opciones, abandonan el proceso.' ],

			[ 'h2', 'Principios de una buena prueba' ],
			[
				'ul',
				[
					'<strong>Se parece al trabajo real</strong> que hará la persona.',
					'<strong>Respeta su tiempo:</strong> entre dos y cuatro horas como máximo; si pides más, remunérala.',
					'<strong>Tiene criterios de evaluación definidos antes,</strong> no impresiones después.',
					'<strong>Permite usar las herramientas de siempre,</strong> incluida la documentación e internet.',
					'<strong>Da contexto suficiente</strong> para no adivinar qué esperas.',
					'<strong>Ofrece retroalimentación</strong> al candidato, gane o pierda.',
				],
			],

			[ 'h2', 'Formatos, comparados' ],
			[
				'table',
				[
					'head' => [ 'Formato', 'Qué mide bien', 'Riesgo' ],
					'rows' => [
						[ 'Ejercicio corto en casa', 'Calidad de código y criterio', 'Tiempo del candidato; posible ayuda externa' ],
						[ 'Programación en vivo, en pareja', 'Razonamiento y comunicación', 'Nervios; requiere un evaluador con oficio' ],
						[ 'Revisión de código existente', 'Criterio, detección de problemas y diplomacia', 'Poco frecuente, sorprende al candidato' ],
						[ 'Discusión de diseño', 'Arquitectura y toma de decisiones', 'No verifica ejecución' ],
						[ 'Acertijos de algoritmos', 'Preparación para entrevistas', 'Poca relación con el trabajo diario' ],
					],
				],
			],
			[ 'p', 'Nuestro formato preferido para la mayoría de vacantes: un ejercicio corto en casa acotado a dos horas, seguido de una conversación de 45 minutos sobre lo que hizo, por qué tomó esas decisiones y qué haría distinto con más tiempo. Esa conversación revela más que el código.' ],

			[ 'h2', 'Cómo evaluar con criterios objetivos' ],
			[ 'p', 'Define una rúbrica antes de enviar la prueba y úsala con todos los candidatos:' ],
			[
				'table',
				[
					'head' => [ 'Criterio', 'Qué observar' ],
					'rows' => [
						[ 'Funciona', 'Cumple lo pedido, incluidos los casos límite' ],
						[ 'Legibilidad', 'Nombres, estructura, consistencia' ],
						[ 'Decisiones', 'Sabe explicar por qué hizo lo que hizo' ],
						[ 'Pruebas', 'Verifica su trabajo de alguna forma' ],
						[ 'Manejo de errores', 'Qué pasa cuando algo sale mal' ],
						[ 'Comunicación', 'Documenta supuestos y limitaciones' ],
						[ 'Alcance', 'Entrega lo pedido sin sobreingeniería' ],
					],
				],
			],
			[ 'p', 'Dos señales muy valiosas: que el candidato <strong>pregunte</strong> antes de asumir, y que <strong>declare lo que dejó fuera</strong> por el límite de tiempo. Ambas predicen buen comportamiento en el trabajo real.' ],

			[ 'h2', 'Qué no hacer' ],
			[
				'ul',
				[
					'Pedir un proyecto completo de veinte horas sin remunerar.',
					'Usar como prueba una funcionalidad que necesitas para producción.',
					'Evaluar memoria de sintaxis o prohibir consultar documentación.',
					'Descartar por el estilo de código sin haber definido un estándar.',
					'No dar respuesta al candidato después de que dedicó su tiempo.',
					'Aplicar la misma prueba a un junior y a un arquitecto.',
				],
			],

			[ 'h2', 'El elefante en la sala: la IA' ],
			[ 'p', 'Hoy cualquier candidato puede resolver un ejercicio estándar con asistencia de IA, y en el trabajo diario la usará igualmente. Prohibirla es irreal y poco útil. Lo que funciona es cambiar el foco:' ],
			[
				'ol',
				[
					'Permítela explícitamente y pide que declare qué parte generó con ayuda.',
					'Evalúa en la conversación: pídele explicar decisiones, justificar alternativas y modificar el código en vivo.',
					'Incluye un caso con un requisito ambiguo: la IA produce algo plausible, el criterio lo aporta la persona.',
					'Pídele revisar código con errores sutiles y explicar qué está mal y por qué.',
				],
			],
			[ 'p', 'Si no puede explicar ni modificar lo que entregó, ya tienes tu respuesta, sin necesidad de prohibir nada.' ],
			[ 'p', 'Para el resto del proceso, revisa <a href="{url:post:como-contratar-desarrolladores-de-software}">cómo contratar desarrolladores</a> y <a href="{url:post:evaluar-perfiles-tecnicos-sin-ser-tecnico}">cómo evaluar perfiles técnicos si no eres técnico</a>. Conoce nuestro servicio de <a href="{url:servicio:staff-augmentation}">staff augmentation y reclutamiento TI</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Se debe pagar una prueba técnica?', 'Si supera dos o tres horas de trabajo, sí; es una señal de respeto que además mejora la calidad de los candidatos que aceptan. Para ejercicios cortos, basta con acotar bien el tiempo y dar retroalimentación.' ],
			[ '¿Sirven las plataformas de evaluación automática?', 'Sirven para filtrar volumen alto en perfiles junior, pero miden un tipo de habilidad muy específico. Para roles senior, una conversación técnica sobre problemas reales predice mucho mejor el desempeño.' ],
			[ '¿Cómo evito que el candidato use IA para resolverla?', 'No lo evites: permítelo y evalúa en la conversación si entiende, puede modificar y justifica sus decisiones. Es más cercano al trabajo real y discrimina mejor.' ],
			[ '¿Cuántas etapas debe tener el proceso?', 'Tres suelen bastar: conversación inicial, prueba o ejercicio con discusión, y entrevista con el equipo o el líder. Procesos de cinco o seis etapas hacen que pierdas a los mejores candidatos por demora.' ],
		],
		'seo_title' => 'Pruebas técnicas justas para programadores',
		'seo_desc'  => 'Cómo diseñar pruebas técnicas que predicen desempeño: formatos, duración, rúbrica de evaluación, errores frecuentes y qué hacer con la IA en el proceso.',
	],
];

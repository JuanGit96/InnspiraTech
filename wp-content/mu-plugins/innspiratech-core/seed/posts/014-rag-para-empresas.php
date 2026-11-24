<?php
/**
 * Artículo: RAG para empresas.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'rag-para-empresas',
	'title'      => 'Qué es RAG y cómo crear un asistente de IA con los documentos de tu empresa',
	'date'       => '2026-08-05 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'RAG', 'Agentes de IA', 'IA generativa', 'Gestión del conocimiento' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-rag.jpg',
		'alt'  => 'Portada del artículo RAG: IA que responde con los documentos de tu empresa — InnspiraTech',
	],
	'excerpt'    => 'Los modelos de IA no conocen tus manuales, contratos ni políticas internas. RAG es la técnica que les permite responder con tu propia información, citando la fuente. Así funciona y así se implementa bien.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un modelo de lenguaje sabe mucho del mundo y nada de tu empresa. No conoce tu manual de garantías, tus políticas de despacho ni las condiciones del contrato que firmaste con tu principal cliente. Por eso, cuando le preguntas por esos temas, responde de forma genérica o, peor, inventa.' ],
			[ 'p', '<strong>RAG</strong> resuelve exactamente ese problema y es, hoy, la forma más práctica y económica de poner la IA a trabajar con el conocimiento de una organización.' ],

			[ 'h2', 'Qué es RAG' ],
			[ 'p', 'RAG significa <em>Retrieval-Augmented Generation</em>, o generación aumentada por recuperación. La idea es simple: antes de responder, el sistema <strong>busca</strong> los fragmentos más relevantes en tus documentos y se los entrega al modelo junto con la pregunta. El modelo redacta la respuesta usando ese material y puede citar de dónde salió cada afirmación.' ],
			[ 'p', 'Es la diferencia entre un examen de memoria y un examen con los apuntes abiertos sobre la mesa.' ],

			[ 'h2', 'Cómo funciona, paso a paso' ],
			[
				'ol',
				[
					'<strong>Ingesta:</strong> se recopilan las fuentes (PDF, Word, wikis, tickets, páginas internas) y se extrae su texto.',
					'<strong>Fragmentación:</strong> los documentos se cortan en partes manejables que conserven el sentido, con sus metadatos (área, versión, fecha, permisos).',
					'<strong>Embeddings:</strong> cada fragmento se convierte en una representación numérica que captura su significado.',
					'<strong>Índice:</strong> esas representaciones se guardan en una base vectorial junto con el texto original.',
					'<strong>Recuperación:</strong> ante una pregunta, el sistema busca los fragmentos más relevantes. Los mejores resultados suelen venir de combinar búsqueda semántica con búsqueda por palabras clave y reordenar los candidatos.',
					'<strong>Generación:</strong> el modelo redacta la respuesta apoyándose solo en ese material y añade las citas.',
					'<strong>Evaluación:</strong> se mide la calidad con un conjunto de preguntas de prueba y se ajusta el sistema.',
				],
			],

			[ 'h2', 'RAG, ajuste fino o pegar todo en el prompt' ],
			[
				'table',
				[
					'head' => [ 'Enfoque', 'Para qué sirve', 'Limitaciones' ],
					'rows' => [
						[ 'RAG', 'Responder con información propia, cambiante y verificable', 'Requiere buena organización de las fuentes' ],
						[ 'Ajuste fino (fine-tuning)', 'Enseñar estilo, formato o tareas muy específicas', 'Costoso de actualizar; no es la vía para datos que cambian' ],
						[ 'Todo en el prompt', 'Casos puntuales con poca documentación', 'Se encarece y se degrada con documentos extensos' ],
					],
				],
			],
			[ 'p', 'En la práctica, la mayoría de proyectos empresariales empieza con RAG y solo considera el ajuste fino cuando necesita un comportamiento muy particular.' ],

			[ 'h2', 'Casos de uso que funcionan bien' ],
			[
				'ul',
				[
					'<strong>Mesa de ayuda interna:</strong> responde preguntas de TI, compras o recursos humanos citando la política vigente.',
					'<strong>Soporte al cliente:</strong> el agente consulta manuales, garantías y procedimientos antes de responder.',
					'<strong>Equipo comercial:</strong> fichas técnicas, condiciones y casos de éxito disponibles en segundos durante una llamada.',
					'<strong>Legal y cumplimiento:</strong> búsqueda de cláusulas y obligaciones dentro de cientos de contratos.',
					'<strong>Inducción de personal nuevo:</strong> un asistente que explica procesos y dónde está cada cosa.',
				],
			],

			[ 'h2', 'Los cinco errores que arruinan un proyecto RAG' ],
			[
				'ul',
				[
					'<strong>Fuentes desordenadas:</strong> versiones duplicadas y documentos obsoletos hacen que el asistente cite lo que ya no aplica. Antes de indexar, hay que curar.',
					'<strong>Fragmentación descuidada:</strong> cortar por número de caracteres parte tablas y procedimientos a la mitad y destruye el contexto.',
					'<strong>Sin control de permisos:</strong> si el asistente no respeta quién puede ver qué, terminará mostrando información confidencial a quien no debe.',
					'<strong>Sin evaluación:</strong> sin un conjunto de preguntas de prueba con respuestas correctas, nadie sabe si el sistema mejora o empeora con cada cambio.',
					'<strong>Sin citas:</strong> una respuesta sin fuente no se puede verificar y no genera confianza.',
				],
			],

			[ 'h2', 'Seguridad y privacidad' ],
			[ 'p', 'El filtrado por permisos debe ocurrir en la recuperación, no en la redacción: el modelo solo debería recibir fragmentos que el usuario tiene derecho a ver. Además, conviene clasificar la información sensible antes de indexarla y tener presente el riesgo de <em>prompt injection</em>: un documento puede contener instrucciones maliciosas dirigidas al modelo, así que el contenido recuperado debe tratarse como datos, nunca como órdenes.' ],

			[ 'h2', 'Cómo medir la calidad' ],
			[
				'ul',
				[
					'<strong>Exactitud:</strong> porcentaje de respuestas correctas sobre un conjunto de preguntas de prueba.',
					'<strong>Fidelidad a la fuente:</strong> la respuesta se sostiene en los fragmentos citados.',
					'<strong>Cobertura:</strong> proporción de preguntas reales que el sistema puede responder.',
					'<strong>Tasa de "no lo sé":</strong> reconocer los límites es una virtud, no un defecto.',
					'<strong>Satisfacción y tiempo ahorrado</strong> reportados por los usuarios.',
				],
			],

			[ 'h2', 'RAG, MCP y agentes: cómo encajan' ],
			[ 'p', 'RAG le da <strong>conocimiento</strong> a la IA. Los <a href="{url:post:que-es-mcp-model-context-protocol}">servidores MCP</a> le dan <strong>manos</strong> para consultar sistemas y ejecutar acciones. Y un <a href="{url:post:agentes-de-ia-para-empresas}">agente</a> es quien decide, dentro de límites definidos, cuándo usar cada cosa. Un asistente corporativo completo suele combinar los tres.' ],
			[ 'p', 'Si quieres construir un asistente con la documentación de tu empresa, conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA para empresas</a> o <a href="{url:pagina:contacto}">cuéntanos tu caso</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿RAG elimina las alucinaciones?', 'Las reduce mucho, porque el modelo responde a partir de fragmentos reales y puede citarlos, pero no las elimina por completo. Por eso se acompaña de citas visibles, evaluación continua y respuestas de "no lo sé" cuando no hay información suficiente.' ],
			[ '¿Mis documentos se usan para entrenar el modelo?', 'Depende del proveedor y del contrato. Los planes empresariales suelen ofrecer condiciones en las que el contenido no se usa para entrenar modelos; conviene revisarlo y dejarlo por escrito antes de conectar información sensible.' ],
			[ '¿Qué documentos sirven para un proyecto RAG?', 'Manuales, políticas, procedimientos, fichas técnicas, contratos, preguntas frecuentes y tickets resueltos. Lo importante es que estén actualizados y sin versiones contradictorias.' ],
			[ '¿Cuánto cuesta implementar RAG?', 'Depende del volumen de documentos, de las integraciones y del nivel de seguridad requerido. Lo habitual es empezar con un área y un conjunto acotado de fuentes para validar el valor antes de escalar.' ],
		],
		'seo_title' => 'RAG para empresas: IA que responde con tus documentos',
		'seo_desc'  => 'Qué es RAG, cómo funciona y cómo crear un asistente de IA que responde con los documentos de tu empresa: arquitectura, casos de uso, riesgos y buenas prácticas.',
	],
];

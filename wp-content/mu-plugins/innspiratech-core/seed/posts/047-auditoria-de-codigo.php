<?php
/**
 * Artículo: Auditoría de código.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'auditoria-de-codigo',
	'title'      => 'Auditoría de código: qué revisa, qué entrega y cuándo la necesitas',
	'date'       => '2027-03-15 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Auditoría', 'Calidad de software', 'Seguridad', 'Deuda técnica' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-auditoria-codigo.jpg',
		'alt'  => 'Portada del artículo Auditoría de código: qué revisa y qué entrega — InnspiraTech',
	],
	'excerpt'    => 'Antes de invertir más en un sistema que no entiendes, conviene saber qué hay dentro. Qué revisa una auditoría de código, qué entrega, cuánto dura y cómo usar sus hallazgos para decidir.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Casi siempre la solicitud llega con la misma frase: "necesito saber si esto está bien hecho". Puede ser porque el proveedor se va, porque cada cambio cuesta más de lo razonable, porque hubo un incidente de seguridad o porque hay que decidir entre seguir invirtiendo o reemplazar el sistema.' ],
			[ 'p', 'Una auditoría de código responde esa pregunta con evidencia, no con opiniones. Y sobre todo, la traduce a decisiones de negocio.' ],

			[ 'h2', 'Qué se revisa' ],
			[
				'table',
				[
					'head' => [ 'Dimensión', 'Qué se busca' ],
					'rows' => [
						[ 'Arquitectura', 'Separación de responsabilidades, acoplamiento, puntos únicos de falla' ],
						[ 'Calidad del código', 'Duplicación, complejidad, funciones enormes, nombres y consistencia' ],
						[ 'Pruebas', 'Existencia, cobertura de lo crítico y confiabilidad' ],
						[ 'Seguridad', 'Validación de entradas, manejo de sesiones, credenciales expuestas, permisos' ],
						[ 'Dependencias', 'Librerías sin soporte o con vulnerabilidades conocidas, licencias' ],
						[ 'Base de datos', 'Modelo, índices, consultas costosas, integridad' ],
						[ 'Infraestructura y despliegue', 'Entornos, automatización, respaldos, monitoreo, forma de revertir' ],
						[ 'Documentación y conocimiento', 'Qué existe y qué depende de una sola persona' ],
					],
				],
			],
			[ 'p', 'El trabajo combina herramientas automáticas —análisis estático, revisión de dependencias, búsqueda de secretos en el historial— con revisión humana de los módulos críticos, que es donde aparecen los hallazgos que ninguna herramienta detecta.' ],

			[ 'h2', 'Qué recibe la empresa' ],
			[
				'ul',
				[
					'<strong>Resumen ejecutivo</strong> en lenguaje de negocio: estado general, riesgos y recomendación.',
					'<strong>Hallazgos priorizados</strong> por severidad e impacto, con evidencia y ubicación exacta.',
					'<strong>Estimación de esfuerzo</strong> para corregir cada grupo de hallazgos.',
					'<strong>Mapa del sistema:</strong> componentes, integraciones y dependencias.',
					'<strong>Indicadores base</strong> para medir mejoras después: complejidad, cobertura, vulnerabilidades.',
					'<strong>Plan de acción por fases:</strong> qué corregir en 30, 90 y 180 días.',
					'<strong>Recomendación de fondo:</strong> mantener, refactorizar por módulos o reemplazar.',
				],
			],

			[ 'h2', 'Cómo se priorizan los hallazgos' ],
			[
				'table',
				[
					'head' => [ 'Severidad', 'Ejemplo', 'Plazo sugerido' ],
					'rows' => [
						[ 'Crítica', 'Credenciales expuestas, datos personales sin protección, sin respaldos', 'Inmediato' ],
						[ 'Alta', 'Dependencias con vulnerabilidades conocidas, despliegue manual sin reversa', '30 días' ],
						[ 'Media', 'Ausencia de pruebas en módulos que cambian mucho, consultas lentas', '90 días' ],
						[ 'Baja', 'Estilo inconsistente, documentación incompleta', 'Continuo' ],
					],
				],
			],

			[ 'h2', 'Cuándo pedirla' ],
			[
				'ul',
				[
					'Antes de invertir en una evolución grande del sistema.',
					'Al recibir un sistema de un proveedor que se retira.',
					'Después de un incidente de seguridad o de caídas repetidas.',
					'Cuando los tiempos de desarrollo se alargan sin explicación.',
					'Antes de una negociación: compra, inversión o renovación de contrato.',
					'Cuando quieres comparar propuestas de proveedores con criterio propio.',
				],
			],

			[ 'h2', 'Qué necesita el auditor' ],
			[ 'p', 'Acceso de solo lectura al repositorio con todo el historial, acceso a un entorno de pruebas, la documentación que exista, una conversación con quien mantiene el sistema y contexto de negocio: qué hace el sistema, qué es crítico y qué se espera de él en los próximos dos años. Sin ese contexto, la auditoría se queda en tecnicismos.' ],

			[ 'h2', 'Duración y costo' ],
			[ 'p', 'Una auditoría enfocada de un sistema mediano toma entre una y tres semanas. Se cobra por alcance, y su costo es muy inferior al de cualquier decisión equivocada que evita: reescribir lo que se podía salvar, seguir pagando el mantenimiento de algo insostenible o comprar una empresa con un pasivo técnico oculto.' ],

			[ 'h2', 'Qué hacer con el informe' ],
			[ 'p', 'Un informe que se archiva no sirve de nada. Lo que recomendamos: cerrar de inmediato los hallazgos críticos, incorporar los de severidad alta al plan del trimestre, acordar con el equipo o el proveedor los cambios de proceso que evitan que se repitan, y volver a medir los indicadores base a los seis meses. Esa segunda medición es la que demuestra el retorno.' ],
			[ 'p', 'Si lo que buscas es entender el costo de lo acumulado, revisa <a href="{url:post:que-es-la-deuda-tecnica}">deuda técnica: qué es y cuándo pagarla</a>. Si estás evaluando una empresa o un producto para comprar, lo tuyo es un <a href="{url:post:due-diligence-tecnico}">due diligence técnico</a>. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento y auditoría de software</a> o <a href="{url:pagina:contacto}">solicita una auditoría</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿La auditoría corrige los problemas?', 'No: los identifica, los prioriza y estima el esfuerzo. La corrección es un trabajo aparte, que puede hacer tu equipo, tu proveedor actual o quien realizó la auditoría, según lo que prefieras.' ],
			[ '¿Puede hacerla el mismo proveedor que desarrolló el sistema?', 'No es lo ideal: se audita a sí mismo. Para que el informe sea creíble ante la gerencia o ante un inversionista, conviene una mirada externa e independiente.' ],
			[ '¿Se puede auditar un sistema sin acceso al código?', 'Solo de forma parcial, evaluando comportamiento, infraestructura, seguridad perimetral y documentación. Los hallazgos de fondo, como calidad y dependencias, requieren el código.' ],
			[ '¿Qué pasa si el resultado es muy malo?', 'Rara vez la conclusión es "hay que botarlo todo". Lo habitual es un plan por fases: estabilizar lo crítico, mejorar lo que más duele y reemplazar por módulos, manteniendo la operación en marcha.' ],
		],
		'seo_title' => 'Auditoría de código: qué revisa y qué entrega',
		'seo_desc'  => 'Qué evalúa una auditoría de código, cómo se priorizan los hallazgos, qué informe recibes, cuándo pedirla, cuánto dura y cómo convertirla en un plan de acción.',
	],
];

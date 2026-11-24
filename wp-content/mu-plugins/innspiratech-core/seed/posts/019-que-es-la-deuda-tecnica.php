<?php
/**
 * Artículo: Deuda técnica.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'que-es-la-deuda-tecnica',
	'title'      => 'Deuda técnica: qué es, cómo medirla y cuándo pagarla',
	'date'       => '2026-12-14 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Deuda técnica', 'Mantenimiento de software', 'Calidad de código', 'Arquitectura' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-deuda-tecnica.jpg',
		'alt'  => 'Portada del artículo Deuda técnica: qué es, cómo medirla y cuándo pagarla — InnspiraTech',
	],
	'excerpt'    => 'Si cada cambio en tu software tarda más que el anterior, estás pagando intereses. Te explicamos qué es la deuda técnica en lenguaje de negocio, cómo medirla con datos y cómo reducirla sin frenar la operación.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un gerente pregunta por qué un cambio "sencillo" en el sistema tarda tres semanas. El equipo técnico responde que hay que tocar demasiadas partes y que nadie quiere romper lo que funciona. Esa conversación, repetida en miles de empresas, tiene un nombre: <strong>deuda técnica</strong>.' ],

			[ 'h2', 'Qué es la deuda técnica' ],
			[ 'p', 'El término lo acuñó el programador Ward Cunningham como una metáfora financiera. Cuando tomas un atajo para entregar rápido, pides prestado tiempo al futuro. Ese préstamo se puede devolver: el problema es que, mientras no lo hagas, pagas <strong>intereses</strong> en forma de horas extra en cada cambio, errores recurrentes y riesgos de seguridad.' ],
			[ 'p', 'No toda deuda es mala. Igual que en las finanzas, endeudarse a conciencia para llegar antes al mercado puede ser una gran decisión. Lo peligroso es endeudarse sin darse cuenta y no pagar nunca.' ],

			[ 'h2', 'Los cuatro tipos de deuda técnica' ],
			[ 'p', 'Martin Fowler propuso una clasificación muy útil para decidir qué hacer con cada caso:' ],
			[
				'table',
				[
					'head' => [ '', 'Imprudente', 'Prudente' ],
					'rows' => [
						[ 'Deliberada', '"No hay tiempo para diseñar"', '"Entregamos ya y refactorizamos después"' ],
						[ 'Accidental', '"¿Qué es una capa de servicios?"', '"Ahora entendemos cómo debimos hacerlo"' ],
					],
				],
			],
			[ 'p', 'La deuda prudente y deliberada se planifica y se paga. La imprudente y accidental es la que hunde proyectos: nadie sabe que existe hasta que el sistema se vuelve inmanejable.' ],

			[ 'h2', 'Dónde se esconde' ],
			[
				'ul',
				[
					'<strong>Código:</strong> duplicado, funciones enormes, nombres confusos, lógica repetida.',
					'<strong>Arquitectura:</strong> componentes acoplados donde un cambio obliga a tocar todo.',
					'<strong>Dependencias:</strong> librerías y versiones sin soporte o con vulnerabilidades.',
					'<strong>Pruebas:</strong> ausencia de pruebas automatizadas, que obliga a verificar todo a mano.',
					'<strong>Documentación:</strong> conocimiento que solo vive en la cabeza de una persona.',
					'<strong>Infraestructura:</strong> despliegues manuales, servidores configurados a mano, sin monitoreo.',
					'<strong>Datos:</strong> duplicados, campos reutilizados para otra cosa, reglas implícitas.',
				],
			],

			[ 'h2', 'Síntomas que ve el negocio' ],
			[
				'ul',
				[
					'Las estimaciones crecen para cambios cada vez más pequeños.',
					'Aparecen errores en funciones que nadie tocó.',
					'El equipo evita desplegar los viernes… o cualquier día.',
					'Incorporar a una persona nueva toma meses.',
					'Todo depende de una sola persona que "conoce el sistema".',
					'Las auditorías de seguridad encuentran dependencias sin actualizar.',
				],
			],

			[ 'h2', 'Cómo medirla con datos' ],
			[ 'p', 'La deuda técnica se puede hacer visible. Estos indicadores convierten una queja en una conversación de negocio:' ],
			[
				'table',
				[
					'head' => [ 'Indicador', 'Qué revela' ],
					'rows' => [
						[ 'Tiempo desde la solicitud hasta producción', 'Qué tan ágil es el sistema para cambiar' ],
						[ 'Frecuencia de despliegues', 'Confianza del equipo en su propio código' ],
						[ 'Porcentaje de cambios que causan incidentes', 'Fragilidad del sistema' ],
						[ 'Tiempo de recuperación ante fallos', 'Capacidad de reacción' ],
						[ 'Cobertura de pruebas automatizadas', 'Red de seguridad disponible' ],
						[ 'Dependencias desactualizadas o vulnerables', 'Riesgo de seguridad acumulado' ],
						[ 'Archivos que más cambian y más fallan', 'Dónde duele de verdad (puntos calientes)' ],
					],
				],
			],
			[ 'p', 'Complementa los números con una encuesta breve al equipo: quienes trabajan a diario en el código suelen señalar con precisión los tres lugares donde se pierde más tiempo.' ],

			[ 'h2', 'Cuándo pagarla (y cuándo no)' ],
			[ 'p', 'No toda la deuda debe pagarse. Un módulo estable que nadie va a tocar puede quedarse como está. Prioriza donde coincidan tres condiciones: <strong>alto tráfico de cambios</strong>, <strong>alto impacto en el negocio</strong> y <strong>alto riesgo</strong>.' ],
			[ 'p', 'Tres momentos naturales para pagar: antes de una funcionalidad grande sobre esa área, cuando un componente concentra los incidentes, y cuando una versión queda sin soporte de seguridad.' ],

			[ 'h2', 'Estrategia en cinco pasos' ],
			[
				'ol',
				[
					'<strong>Auditoría:</strong> inventario de deuda con impacto estimado y riesgo.',
					'<strong>Priorización conjunta</strong> entre negocio y tecnología, con criterios de costo y riesgo.',
					'<strong>Presupuesto explícito:</strong> reserva una porción fija de cada iteración para pagar deuda; si compite con funcionalidades, siempre pierde.',
					'<strong>Refactorización incremental</strong> protegida por pruebas: primero se cubre con pruebas, luego se cambia.',
					'<strong>Prevención:</strong> revisión de código, definición de terminado, integración continua y actualización periódica de dependencias.',
				],
			],

			[ 'h2', 'Cómo explicarla a la gerencia' ],
			[ 'p', 'Evita el vocabulario técnico y habla de dinero y riesgo: "hoy cada cambio en facturación cuesta el triple de horas que hace un año; con dos semanas de trabajo en esa área recuperamos la velocidad y reducimos incidentes". Acompáñalo con los indicadores de arriba: lo que se mide se aprueba.' ],
			[ 'p', 'Si tu caso ya es un sistema antiguo completo, el camino es distinto: revisa <a href="{url:post:modernizacion-sistemas-heredados}">modernización de sistemas heredados</a>. Y si quieres una auditoría con hallazgos priorizados, conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software y deuda técnica</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Toda la deuda técnica es mala?', 'No. Tomar atajos conscientes para llegar antes al mercado puede ser una decisión correcta, siempre que quede registrada y exista un plan para pagarla. La peligrosa es la que nadie documenta ni mide.' ],
			[ '¿Cuánto tiempo debemos dedicar a pagar deuda técnica?', 'Lo importante es que sea una proporción fija y acordada de cada iteración, visible en la planificación. Si se deja para "cuando haya tiempo", nunca ocurre.' ],
			[ '¿Reescribir el sistema desde cero elimina la deuda?', 'Rara vez. Una reescritura completa suele tardar más de lo previsto y genera su propia deuda. En la mayoría de los casos es preferible una modernización progresiva por módulos.' ],
			[ '¿Cómo evitamos acumular más deuda?', 'Con prácticas sostenidas: revisión de código entre pares, pruebas automatizadas, criterios claros de terminado, actualización periódica de dependencias y espacio explícito para mejoras técnicas en cada ciclo.' ],
		],
		'seo_title' => 'Deuda técnica: qué es, cómo medirla y cuándo pagarla',
		'seo_desc'  => 'Qué es la deuda técnica, sus tipos, síntomas, cómo medirla con indicadores concretos y una estrategia para reducirla sin frenar el negocio. Guía para líderes.',
	],
];

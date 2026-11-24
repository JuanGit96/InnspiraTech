<?php
/**
 * Artículo: Cómo estimar un proyecto de software.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'como-estimar-un-proyecto-de-software',
	'title'      => 'Cómo estimar un proyecto de software (y por qué fallan las estimaciones)',
	'date'       => '2027-04-28 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Estimación', 'Gestión de proyectos', 'Presupuesto', 'Desarrollo' ],
	'servicio'   => 'desarrollo-software-a-medida',
	'image'      => [
		'file' => 'post-estimar-proyecto.jpg',
		'alt'  => 'Portada del artículo Cómo estimar un proyecto de software — InnspiraTech',
	],
	'excerpt'    => 'Casi todos los proyectos tardan más de lo estimado, y hay razones concretas. Métodos de estimación que funcionan, cómo presentar rangos en vez de cifras falsas y qué exigirle a la propuesta de un proveedor.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una estimación es una predicción sobre trabajo que nadie ha hecho todavía, con requisitos que van a cambiar y con problemas que aún no se conocen. Por eso fallan. Lo que sí se puede hacer es estimar de forma honesta, con rangos, supuestos y un plan para reducir la incertidumbre a medida que se avanza.' ],

			[ 'h2', 'Por qué fallan las estimaciones' ],
			[
				'ul',
				[
					'<strong>Se estima lo visible:</strong> las pantallas. Se olvidan validaciones, permisos, errores, migraciones, pruebas, despliegue y capacitación.',
					'<strong>Optimismo sistemático:</strong> imaginamos el camino sin obstáculos, y casi nunca es así.',
					'<strong>Requisitos que cambian</strong> porque el negocio aprende mientras ve el producto.',
					'<strong>Dependencias externas:</strong> un tercero que no responde puede costar semanas.',
					'<strong>Presión comercial:</strong> la cifra se ajusta para ganar el proyecto, no para reflejar el trabajo.',
					'<strong>Se ignora el trabajo que no es programar:</strong> reuniones, revisiones, correcciones y soporte.',
				],
			],

			[ 'h2', 'Métodos que funcionan' ],
			[
				'table',
				[
					'head' => [ 'Método', 'Cómo funciona', 'Cuándo usarlo' ],
					'rows' => [
						[ 'Por analogía', 'Comparar con proyectos similares ya realizados', 'Cuando hay historial confiable' ],
						[ 'Descomposición', 'Dividir hasta tareas de uno a tres días y sumar', 'Alcance relativamente claro' ],
						[ 'Tres puntos', 'Optimista, probable y pesimista ponderados', 'Cuando hay incertidumbre alta' ],
						[ 'Estimación relativa', 'Comparar tareas entre sí en lugar de en horas', 'Equipos con ritmo conocido' ],
						[ 'Presupuesto fijo, alcance variable', 'Se fija la inversión y se prioriza qué entra', 'Cuando el plazo o el dinero son la restricción' ],
					],
				],
			],

			[ 'h2', 'Estima en rangos, no en cifras exactas' ],
			[ 'p', 'Decir "esto toma 400 horas" es falso; decir "entre 350 y 500 horas, con estos supuestos" es útil. El rango comunica la incertidumbre real y permite decidir. Y debe estrecharse a medida que avanza el proyecto: la estimación del inicio es la menos precisa que tendrás jamás.' ],
			[ 'p', 'Acompaña siempre el rango con los <strong>supuestos</strong>: qué integraciones existen, quién entrega los contenidos, qué pasa si el tercero se demora, qué está fuera del alcance. La mayoría de conflictos entre cliente y proveedor nacen de supuestos que nadie escribió.' ],

			[ 'h2', 'Lo que casi siempre falta en la estimación' ],
			[
				'ul',
				[
					'Migración de datos del sistema anterior, con su limpieza y validación.',
					'Manejo de errores y casos excepcionales, que suele ser la mitad del trabajo real.',
					'Permisos y roles.',
					'Pruebas, corrección de fallos y ajustes después de la revisión del cliente.',
					'Despliegue, ambientes, monitoreo y respaldos.',
					'Capacitación, documentación y acompañamiento al salir a producción.',
					'Tiempo de coordinación: reuniones, revisiones y esperas.',
				],
			],
			[ 'p', 'Una regla práctica: si la estimación solo cubre "construir las pantallas", súmale un porcentaje importante por todo lo anterior o pídele al proveedor que lo desglose.' ],

			[ 'h2', 'Cómo reducir la incertidumbre antes de comprometerse' ],
			[
				'ol',
				[
					'<strong>Haz una fase de descubrimiento</strong> pagada y corta: dos o tres semanas para definir alcance, riesgos y arquitectura. Es la mejor inversión de todo el proyecto.',
					'<strong>Prototipa lo incierto:</strong> la integración desconocida, el algoritmo dudoso, el flujo complejo.',
					'<strong>Divide en entregas de valor</strong> de cuatro a seis semanas, cada una con algo utilizable.',
					'<strong>Reestima al final de cada entrega</strong> con datos reales del equipo.',
				],
			],

			[ 'h2', 'Qué exigirle a la propuesta de un proveedor' ],
			[
				'ul',
				[
					'Desglose por módulos o entregas, no una cifra única.',
					'Supuestos y exclusiones explícitos.',
					'Qué incluye: pruebas, despliegue, capacitación, garantía y soporte posterior.',
					'Cómo se manejan los cambios de alcance y a qué tarifa.',
					'Rango en lugar de cifra exacta, o una explicación de por qué es exacta.',
					'Quién estima: idealmente, quien va a ejecutar.',
				],
			],
			[ 'p', 'Y desconfía de la propuesta más barata con el plazo más corto: casi siempre significa que no entendieron el alcance, y esa diferencia aparecerá después como costos adicionales o como calidad.' ],
			[ 'p', 'Si vas a elegir proveedor, revisa <a href="{url:post:como-elegir-empresa-desarrollo-software}">cómo elegir una empresa de desarrollo de software</a> y <a href="{url:post:documentacion-tecnica-de-software}">qué documentación exigir</a>. Para acotar un primer alcance, <a href="{url:post:que-es-un-mvp}">qué es un MVP</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-software-a-medida}">desarrollo de software a medida</a> o <a href="{url:pagina:contacto}">cuéntanos tu proyecto</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Por qué un proveedor no me da un precio cerrado?', 'Puede darlo, pero para hacerlo con responsabilidad necesita un alcance detallado y suele incluir un margen de riesgo. Un precio cerrado sobre requisitos vagos termina en discusiones por lo que "estaba incluido" o en un producto recortado.' ],
			[ '¿Precio fijo o por horas?', 'El precio fijo da previsibilidad y traslada el riesgo al proveedor, a cambio de rigidez ante cambios. El esquema por tiempo y materiales es más flexible y suele salir mejor cuando el alcance evolucionará. Una tercera vía es presupuesto fijo con alcance priorizado.' ],
			[ '¿Cuánto margen debo prever para imprevistos?', 'Reservar una contingencia sobre la estimación es una práctica sana; el porcentaje depende de la incertidumbre del proyecto y de la experiencia del equipo en casos similares. Cuanto más nuevo sea el terreno, mayor debe ser.' ],
			[ '¿Cómo evito que el proyecto crezca sin control?', 'Con un alcance escrito, un proceso formal de cambios que evalúe costo y plazo, y entregas frecuentes que permitan corregir el rumbo antes de que el desvío sea caro.' ],
		],
		'seo_title' => 'Cómo estimar un proyecto de software',
		'seo_desc'  => 'Por qué fallan las estimaciones de software, métodos que funcionan, cómo estimar en rangos con supuestos, qué suele faltar y qué exigirle a una propuesta.',
	],
];

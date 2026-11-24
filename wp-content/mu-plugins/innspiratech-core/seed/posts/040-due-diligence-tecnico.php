<?php
/**
 * Artículo: Due diligence técnico.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'due-diligence-tecnico',
	'title'      => 'Due diligence técnico: qué revisar antes de invertir o comprar software',
	'date'       => '2027-02-26 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Due diligence', 'Inversión', 'Auditoría', 'Consultoría tecnológica' ],
	'servicio'   => 'consultoria-tecnologica',
	'image'      => [
		'file' => 'post-due-diligence-tecnico.jpg',
		'alt'  => 'Portada del artículo Due diligence técnico antes de invertir o comprar software — InnspiraTech',
	],
	'excerpt'    => 'Antes de invertir en una empresa de tecnología o comprar un producto digital, alguien debe abrir el capó. Qué se revisa, qué hallazgos cambian el precio y cómo se estructura el informe.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La presentación es impecable, las métricas crecen y el equipo inspira confianza. Pero el valor de una empresa de base tecnológica está en su software, y el software no se juzga por una demostración: se juzga abriendo el capó.' ],
			[ 'p', 'Un due diligence técnico responde tres preguntas que ninguna hoja de cálculo contesta: ¿esto se puede sostener?, ¿esto se puede escalar?, ¿qué riesgos vienen incluidos en el precio?' ],

			[ 'h2', 'Cuándo se hace' ],
			[
				'ul',
				[
					'Antes de invertir en una empresa de tecnología o de adquirirla.',
					'Antes de comprar un producto de software para integrarlo a tu operación.',
					'Antes de firmar un contrato de largo plazo con un proveedor crítico.',
					'Cuando una empresa se prepara para levantar capital y quiere anticipar los hallazgos.',
					'Al recibir un sistema desarrollado por un tercero que se retira.',
				],
			],

			[ 'h2', 'Las siete áreas que se revisan' ],
			[
				'table',
				[
					'head' => [ 'Área', 'Qué se evalúa', 'Hallazgo típico' ],
					'rows' => [
						[ 'Arquitectura', 'Diseño, acoplamiento, capacidad de crecer', 'Un componente único que limita todo el sistema' ],
						[ 'Código', 'Calidad, duplicación, pruebas, estándares', 'Sin pruebas automatizadas y con módulos frágiles' ],
						[ 'Infraestructura', 'Entornos, despliegue, costos, escalabilidad', 'Servidores configurados a mano, sin forma de reproducirlos' ],
						[ 'Seguridad', 'Accesos, datos personales, dependencias vulnerables', 'Credenciales en el código y librerías sin actualizar' ],
						[ 'Propiedad intelectual', 'Titularidad del código, licencias de terceros', 'Componentes con licencias incompatibles con el negocio' ],
						[ 'Equipo', 'Conocimiento concentrado, rotación, documentación', 'Una sola persona entiende el núcleo del producto' ],
						[ 'Producto y datos', 'Modelo de datos, integraciones, deuda funcional', 'Métricas que no se pueden reconstruir ni auditar' ],
					],
				],
			],

			[ 'h2', 'Las preguntas que revelan más' ],
			[
				'ol',
				[
					'¿Cuánto tarda un desarrollador nuevo en levantar el proyecto y hacer su primer cambio en producción?',
					'¿Con qué frecuencia despliegan y cuántos de esos despliegues generan incidentes?',
					'¿Qué pasa si la persona clave se va mañana?',
					'¿Cuánto cuesta la infraestructura por cliente y cómo cambia si duplican usuarios?',
					'¿Qué componentes son de terceros y bajo qué licencias y contratos?',
					'¿Cómo se restaura el servicio completo desde cero y cuándo se probó por última vez?',
					'¿Qué datos personales se tratan y con qué base legal y controles?',
				],
			],

			[ 'h2', 'Cómo se traduce en el precio' ],
			[ 'p', 'Un due diligence no busca descalificar: busca poner número a lo que habrá que invertir después de la operación. Los hallazgos se clasifican así:' ],
			[
				'table',
				[
					'head' => [ 'Nivel', 'Significado', 'Efecto en la negociación' ],
					'rows' => [
						[ 'Crítico', 'Impide operar o expone legalmente', 'Condición previa al cierre o ajuste de precio' ],
						[ 'Alto', 'Limita el crecimiento previsto', 'Plan de inversión acordado y reflejado en la valoración' ],
						[ 'Medio', 'Costo de mantenimiento elevado', 'Se incorpora al presupuesto de los primeros 12 meses' ],
						[ 'Bajo', 'Mejoras deseables', 'Se registra en la hoja de ruta' ],
					],
				],
			],

			[ 'h2', 'Qué incluye el informe' ],
			[
				'ul',
				[
					'Resumen ejecutivo en lenguaje de negocio, con semáforo por área.',
					'Inventario de sistemas, dependencias, licencias y proveedores.',
					'Hallazgos priorizados por riesgo e impacto, con evidencia.',
					'Estimación de la inversión necesaria para cerrar las brechas críticas.',
					'Evaluación del equipo y de la concentración de conocimiento.',
					'Escenario de escalamiento: qué pasa si el uso se multiplica.',
					'Recomendaciones para los primeros 100 días después de la operación.',
				],
			],

			[ 'h2', 'Cuánto dura y qué se necesita' ],
			[ 'p', 'Una revisión enfocada toma entre una y tres semanas según el tamaño del sistema. Requiere acceso de lectura al repositorio, entrevistas con el líder técnico, documentación existente y una demostración del despliegue. Cuando el acceso al código no es posible antes de firmar, se puede hacer una versión reducida basada en entrevistas, arquitectura e infraestructura, dejando la revisión profunda como condición posterior.' ],
			[ 'p', 'Si lo que necesitas es evaluar tu propio sistema antes de una negociación, revisa <a href="{url:post:auditoria-de-codigo}">qué entrega una auditoría de código</a> y <a href="{url:post:que-es-la-deuda-tecnica}">cómo medir la deuda técnica</a>. Conoce nuestro servicio de <a href="{url:servicio:consultoria-tecnologica}">consultoría tecnológica</a> o <a href="{url:pagina:contacto}">cuéntanos qué operación estás evaluando</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿En qué se diferencia de una auditoría de código?', 'La auditoría se centra en la calidad técnica del software. El due diligence es más amplio: incluye propiedad intelectual, infraestructura, costos, equipo, seguridad y riesgos legales, y traduce todo a impacto en la valoración.' ],
			[ '¿Qué pasa si encuentran problemas graves?', 'Rara vez rompen la operación. Lo habitual es que ajusten el precio, se conviertan en condiciones previas al cierre o se traduzcan en un plan de inversión acordado entre las partes.' ],
			[ '¿Puede hacerlo mi propio equipo técnico?', 'Puede ayudar, pero conviene una mirada externa: no tiene sesgos, conoce patrones de muchas empresas y entrega un informe que las partes aceptan como neutral.' ],
			[ '¿Sirve para comprar software empaquetado?', 'Sí, en versión reducida: continuidad del proveedor, arquitectura, capacidad de integración, costos de licenciamiento a futuro y condiciones de salida con tus datos.' ],
		],
		'seo_title' => 'Due diligence técnico: qué revisar antes de invertir',
		'seo_desc'  => 'Qué evalúa un due diligence técnico: arquitectura, código, infraestructura, seguridad, propiedad intelectual y equipo, y cómo afecta el precio.',
	],
];

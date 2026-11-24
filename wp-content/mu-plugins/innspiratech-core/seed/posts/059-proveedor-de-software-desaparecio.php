<?php
/**
 * Artículo: Cuando el proveedor de software desaparece.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'proveedor-de-software-desaparecio',
	'title'      => 'Tu proveedor de software desapareció: qué hacer para recuperar el control',
	'date'       => '2026-12-28 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Proveedores', 'Continuidad', 'Auditoría', 'Riesgo' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-proveedor-desaparecido.jpg',
		'alt'  => 'Portada del artículo Qué hacer cuando tu proveedor de software desaparece — InnspiraTech',
	],
	'excerpt'    => 'Dejó de responder, cerró o simplemente no quiere seguir. Plan de contingencia en cinco pasos para recuperar accesos, código y control de tu sistema, y cómo evitar que vuelva a pasar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Puede pasar de muchas formas: la empresa cerró, el desarrollador independiente dejó de contestar, el equipo se disolvió o la relación se rompió. El resultado es el mismo: tu sistema sigue funcionando, pero nadie puede tocarlo y nadie sabe dónde está nada.' ],
			[ 'p', 'Es una emergencia, pero tiene solución ordenada. Esto es lo primero que hacemos cuando nos llaman en esa situación.' ],

			[ 'h2', 'Paso 1: inventario de lo que controlas y lo que no' ],
			[ 'p', 'Antes de cualquier decisión técnica, haz una lista honesta:' ],
			[
				'table',
				[
					'head' => [ 'Activo', 'Pregunta', 'Riesgo si no lo controlas' ],
					'rows' => [
						[ 'Dominio', '¿Está a nombre de tu empresa?', 'Perder el sitio y los correos' ],
						[ 'Hosting o nube', '¿Tienes la cuenta y la forma de pago?', 'Que el servicio se suspenda por falta de pago' ],
						[ 'Repositorio de código', '¿Existe y tienes acceso?', 'No poder modificar el sistema' ],
						[ 'Base de datos', '¿Puedes hacer una copia hoy?', 'Perder la información del negocio' ],
						[ 'Cuentas de tiendas de apps', '¿Están a nombre de la empresa?', 'No poder actualizar ni publicar' ],
						[ 'Servicios de terceros', '¿Quién es el titular de cada uno?', 'Cortes por vencimiento o impago' ],
						[ 'Certificados y llaves', '¿Sabes cuándo vencen?', 'Caídas repentinas' ],
					],
				],
			],

			[ 'h2', 'Paso 2: asegura lo que puedas, hoy mismo' ],
			[
				'ol',
				[
					'<strong>Copia todo</strong> lo que esté a tu alcance: base de datos, archivos, código, documentos. Guárdalo en un lugar bajo tu control.',
					'<strong>Cambia las contraseñas</strong> de las cuentas a las que sí tienes acceso.',
					'<strong>Asegura los pagos</strong> de hosting, dominio y servicios críticos, aunque sea adelantando meses.',
					'<strong>Renueva el dominio</strong> por el máximo periodo posible si está a tu nombre.',
					'<strong>Documenta el estado actual:</strong> qué funciona, qué falla y qué es urgente.',
				],
			],
			[ 'p', 'Si el dominio o el hosting están a nombre del proveedor, este es el punto más urgente: cada proveedor tiene un procedimiento para reclamar la titularidad, normalmente con documentación de la empresa y del contrato. Empieza ese trámite de inmediato, porque suele tomar tiempo.' ],

			[ 'h2', 'Paso 3: intenta el camino amable primero' ],
			[ 'p', 'Aunque la relación esté rota, una comunicación formal y sin reproches suele funcionar mejor que una amenaza legal: solicita por escrito la entrega de accesos, código y documentación, con un plazo razonable, y ofrece pagar una transferencia de conocimiento acotada. Deja constancia escrita de cada solicitud.' ],
			[ 'p', 'Si no hay respuesta, revisa el contrato con tu área legal: la titularidad del código y la obligación de entrega dependen de lo que se haya firmado, y las opciones cambian mucho según el país y el tipo de acuerdo.' ],

			[ 'h2', 'Paso 4: recupera el control técnico' ],
			[ 'p', 'Con o sin colaboración del proveedor, hay un camino técnico:' ],
			[
				'ul',
				[
					'<strong>Si tienes el código:</strong> una auditoría reconstruye la arquitectura, el despliegue y las dependencias, y deja documentación mínima para operar.',
					'<strong>Si tienes acceso al servidor pero no al repositorio:</strong> se puede recuperar el código desplegado, aunque sin historial; a partir de ahí se crea un repositorio propio.',
					'<strong>Si no tienes nada más que la base de datos:</strong> tus datos son el activo real. Con ellos se puede migrar a un sistema nuevo o a una herramienta existente sin perder la operación.',
					'<strong>Si el sistema está a punto de caerse:</strong> prioriza levantar una copia en infraestructura tuya, aunque sea temporal, antes de pensar en mejoras.',
				],
			],

			[ 'h2', 'Paso 5: decide el futuro con calma' ],
			[ 'p', 'Una vez estabilizada la situación, evalúa con datos si conviene mantener el sistema, modernizarlo por partes o reemplazarlo. La urgencia empuja a decisiones caras: reescribir todo de inmediato suele ser la peor opción. Una auditoría te dirá qué se puede sostener y qué no.' ],

			[ 'h2', 'Cómo evitar que vuelva a pasar' ],
			[
				'ul',
				[
					'Todos los servicios y dominios, a nombre de tu empresa, con tu correo corporativo como titular.',
					'Repositorio propio, con acceso de administrador para alguien de la empresa.',
					'Copias de seguridad bajo tu control, no solo las del proveedor.',
					'Documentación como parte de cada entrega, no como favor.',
					'Cláusula de transferencia en el contrato: qué se entrega y en cuánto tiempo si la relación termina.',
					'Al menos una persona interna que entienda a grandes rasgos cómo funciona el sistema.',
					'Revisión anual de accesos y titularidades.',
				],
			],
			[ 'p', 'El detalle de lo que debes exigir está en <a href="{url:post:documentacion-tecnica-de-software}">documentación técnica: qué exigirle a tu proveedor</a>, y para evaluar el estado real del sistema, <a href="{url:post:auditoria-de-codigo}">qué entrega una auditoría de código</a>. Si estás en esta situación, conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos y lo revisamos contigo</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿El código que pagué es mío?', 'Depende de lo firmado. Sin una cláusula expresa de cesión de derechos, la titularidad puede no ser automática. Revisa el contrato con tu área legal, porque las reglas varían según el país y el tipo de acuerdo.' ],
			[ '¿Puedo recuperar el dominio si está a nombre del proveedor?', 'En muchos casos sí, acreditando la titularidad de la marca o la relación comercial ante el registrador. Es un trámite que toma tiempo, así que conviene iniciarlo apenas surge el problema.' ],
			[ '¿Se puede seguir manteniendo un sistema sin su desarrollador original?', 'Sí. Cualquier equipo competente puede retomar un sistema con el código y algo de tiempo para entenderlo. El costo depende de la calidad del código y de la documentación existente.' ],
			[ '¿Conviene reescribir todo desde cero?', 'Rara vez, y menos bajo presión. Lo habitual es estabilizar primero, auditar después y decidir con datos: muchos sistemas heredados se pueden sostener y mejorar por partes a un costo mucho menor.' ],
		],
		'seo_title' => 'Tu proveedor de software desapareció: qué hacer',
		'seo_desc'  => 'Cómo recuperar el control si tu proveedor de software desaparece: inventario de accesos, medidas urgentes, opciones técnicas y cómo evitarlo.',
	],
];

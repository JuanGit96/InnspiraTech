<?php
/**
 * Artículo: Documentación técnica que debes exigir a tu proveedor.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'documentacion-tecnica-de-software',
	'title'      => 'Documentación técnica: qué debes exigirle a tu proveedor de software',
	'date'       => '2026-10-19 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Documentación técnica', 'Proveedores', 'Contratos de software', 'Gestión de proyectos' ],
	'servicio'   => 'desarrollo-software-a-medida',
	'image'      => [
		'file' => 'post-documentacion-tecnica.jpg',
		'alt'  => 'Portada del artículo Documentación técnica que debes exigir a tu proveedor — InnspiraTech',
	],
	'excerpt'    => 'Sin documentación, cambiar de proveedor cuesta el doble y cualquier ajuste depende de una persona. Esta es la lista exacta de entregables que deberías pedir por contrato, con criterios para saber si sirven.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La conversación llega siempre igual: una empresa quiere cambiar de proveedor, o el desarrollador que hizo el sistema ya no está, y nadie sabe cómo se despliega, dónde están las claves ni por qué el módulo de facturación hace lo que hace. El código existe, pero el conocimiento se fue.' ],
			[ 'p', 'La documentación técnica es lo que convierte un sistema en un activo transferible de la empresa. Y se consigue de una sola forma: exigiéndola por contrato, como parte de cada entrega.' ],

			[ 'h2', 'Los entregables mínimos' ],
			[
				'table',
				[
					'head' => [ 'Documento', 'Qué debe contener', 'Para qué sirve' ],
					'rows' => [
						[ 'README del repositorio', 'Cómo levantar el proyecto desde cero en una máquina nueva', 'Que cualquier desarrollador nuevo trabaje el primer día' ],
						[ 'Diagrama de arquitectura', 'Componentes, integraciones externas y flujo de datos', 'Entender el sistema sin leer todo el código' ],
						[ 'Modelo de datos', 'Entidades, relaciones y reglas de negocio implícitas', 'Evitar errores al modificar o migrar' ],
						[ 'Documentación de la API', 'Endpoints, parámetros, respuestas y errores', 'Integrar otros sistemas sin adivinar' ],
						[ 'Guía de despliegue', 'Entornos, variables, pasos y forma de revertir', 'Publicar cambios sin depender de una persona' ],
						[ 'Manual de operación', 'Respaldos, monitoreo, tareas programadas y alertas', 'Sostener el sistema en producción' ],
						[ 'Inventario de accesos', 'Servicios, dominios, licencias y quién es el titular', 'Que la empresa sea dueña de todo lo que paga' ],
						[ 'Decisiones de arquitectura', 'Qué se decidió, qué alternativas se evaluaron y por qué', 'No repetir discusiones ni revertir por error' ],
						[ 'Manual de usuario', 'Flujos principales por rol', 'Capacitar sin depender del proveedor' ],
					],
				],
			],

			[ 'h2', 'La prueba definitiva: el ejercicio del computador nuevo' ],
			[ 'p', 'Hay una forma infalible de saber si la documentación sirve. Toma un computador limpio, entrega el repositorio y la documentación a alguien que no participó en el proyecto y pídele levantar el sistema completo en un entorno local. Si lo logra sin llamar a nadie, la documentación es buena. Si necesita preguntar, falta trabajo.' ],
			[ 'p', 'Haz este ejercicio <strong>antes</strong> del pago final, no cuando ya necesites cambiar de proveedor.' ],

			[ 'h2', 'Qué exigir en el contrato' ],
			[
				'ol',
				[
					'La documentación es parte del entregable, no un anexo opcional: sin ella, la entrega no se considera completa.',
					'El código vive en un repositorio cuyo <strong>titular es tu empresa</strong>, no el proveedor.',
					'Todos los servicios (dominio, hosting, nube, tiendas de aplicaciones, pasarelas) se registran a nombre de la empresa.',
					'Cesión expresa de la propiedad intelectual del código desarrollado a la medida.',
					'Entrega de credenciales en un gestor de contraseñas corporativo, no por correo ni por chat.',
					'Compromiso de actualizar la documentación en cada cambio relevante.',
					'Cláusula de transferencia: en caso de terminación, un periodo de acompañamiento para traspasar el conocimiento.',
				],
			],

			[ 'h2', 'Cómo distinguir documentación real de relleno' ],
			[
				'ul',
				[
					'<strong>Está en el repositorio</strong>, junto al código, y se actualiza en las mismas entregas. Los documentos en carpetas compartidas envejecen sin que nadie lo note.',
					'<strong>Responde preguntas concretas:</strong> cómo despliego, cómo restauro, qué hace este módulo, a quién llamo si falla.',
					'<strong>Tiene fecha y responsable.</strong>',
					'<strong>Evita capturas de pantalla</strong> como única explicación: quedan obsoletas de inmediato.',
					'<strong>No repite lo obvio del código,</strong> sino lo que el código no puede contar: el porqué de cada decisión.',
				],
			],

			[ 'h2', 'Cuánta documentación es suficiente' ],
			[ 'p', 'Más no es mejor. Un manual de 200 páginas que nadie lee es tan inútil como no tener nada. La regla que aplicamos: documenta lo que se necesitaría para <strong>recuperar la operación</strong> y lo que se necesitaría para <strong>incorporar a alguien nuevo</strong>. Todo lo demás es opcional.' ],
			[ 'p', 'En proyectos pequeños, eso cabe en un README bien hecho, un diagrama, la guía de despliegue y el inventario de accesos. En sistemas críticos, la exigencia crece con el riesgo.' ],

			[ 'h2', 'Señales de alerta con un proveedor' ],
			[
				'ul',
				[
					'"El código se documenta solo" o "eso encarece el proyecto".',
					'Los repositorios están en cuentas personales del equipo del proveedor.',
					'El dominio o los servicios en la nube están registrados a nombre del proveedor.',
					'Solo una persona sabe desplegar a producción.',
					'No existe entorno de pruebas y todo se publica directamente.',
					'Se niegan a entregar accesos de administrador "por seguridad".',
				],
			],
			[ 'p', 'Si ya estás en esa situación, no entres en pánico: se resuelve con una auditoría y un plan de recuperación ordenado. Revisa <a href="{url:post:proveedor-de-software-desaparecio}">qué hacer cuando tu proveedor de software desaparece</a> y <a href="{url:post:auditoria-de-codigo}">qué revisa una auditoría de código</a>. Para elegir bien desde el principio, lee <a href="{url:post:como-elegir-empresa-desarrollo-software}">cómo elegir una empresa de desarrollo de software</a>, conoce nuestro servicio de <a href="{url:servicio:desarrollo-software-a-medida}">desarrollo de software a medida</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿La documentación encarece mucho el proyecto?', 'Bien enfocada, representa una fracción pequeña del esfuerzo total y se recupera en el primer cambio de equipo o en la primera emergencia. Lo caro es reconstruir conocimiento perdido.' ],
			[ '¿De quién es el código que paga mi empresa?', 'Depende de lo que diga el contrato. Por eso conviene incluir una cesión expresa de derechos sobre el desarrollo a la medida y dejar claro qué componentes son de terceros o de código abierto, con sus licencias.' ],
			[ '¿Qué hago si mi sistema actual no tiene documentación?', 'Encarga una auditoría que reconstruya lo esencial: arquitectura, modelo de datos, despliegue y accesos. Es un trabajo acotado y te devuelve el control sin rehacer el sistema.' ],
			[ '¿Sirve la documentación generada automáticamente?', 'Ayuda para APIs y modelos de datos, pero no reemplaza la explicación de decisiones ni los procedimientos de operación, que son justamente lo que salva un proyecto cuando cambia la gente.' ],
		],
		'seo_title' => 'Documentación técnica: qué exigir a tu proveedor',
		'seo_desc'  => 'Lista de entregables de documentación técnica que debes exigir por contrato, cómo verificar que sirve y señales de alerta con proveedores de software.',
	],
];

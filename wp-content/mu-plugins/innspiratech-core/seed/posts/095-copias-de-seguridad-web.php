<?php
/**
 * Artículo: Copias de seguridad, regla 3-2-1.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'copias-de-seguridad-web',
	'title'      => 'Copias de seguridad: cómo aplicar la regla 3-2-1 en tu empresa',
	'date'       => '2027-07-05 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Copias de seguridad', 'Continuidad', 'Seguridad', 'Mantenimiento' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-copias-seguridad.jpg',
		'alt'  => 'Portada del artículo Copias de seguridad: la regla 3-2-1 — InnspiraTech',
	],
	'excerpt'    => 'Una copia que nunca se restauró no es una copia. Cómo aplicar la regla 3-2-1, qué respaldar además del sitio, cada cuánto probar la restauración y cómo definir cuánto puedes permitirte perder.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Casi todas las empresas creen tener copias de seguridad. Muchas descubren, el día que las necesitan, que estaban incompletas, que solo cubrían archivos y no la base de datos, que llevaban meses fallando en silencio o que estaban en el mismo servidor que se perdió.' ],
			[ 'p', 'Respaldar bien no es complicado ni caro. Lo que falta casi siempre es método.' ],

			[ 'h2', 'La regla 3-2-1' ],
			[
				'ul',
				[
					'<strong>3 copias</strong> de tus datos: la original y dos respaldos.',
					'<strong>2 medios distintos:</strong> por ejemplo, el servidor y un almacenamiento en la nube.',
					'<strong>1 fuera del sitio</strong> y, preferiblemente, fuera de la cuenta del proveedor donde vive el original.',
				],
			],
			[ 'p', 'Muchos agregan hoy una variante: al menos una copia inmutable, que no pueda borrarse ni cifrarse aunque alguien acceda con credenciales válidas. Es la respuesta directa al secuestro de datos, donde el atacante busca primero los respaldos.' ],

			[ 'h2', 'Qué respaldar, además del sitio' ],
			[
				'table',
				[
					'head' => [ 'Activo', 'Qué se pierde si falta' ],
					'rows' => [
						[ 'Base de datos', 'Pedidos, clientes, contenido: lo más valioso' ],
						[ 'Archivos subidos', 'Imágenes, documentos, adjuntos' ],
						[ 'Código y configuración', 'Personalizaciones y ajustes propios' ],
						[ 'Correos corporativos', 'Historial comercial y soportes' ],
						[ 'Documentos en la nube', 'Información operativa del día a día' ],
						[ 'Configuración de servicios', 'DNS, reglas, integraciones y llaves' ],
					],
				],
			],
			[ 'p', 'Un punto que sorprende a muchas empresas: los servicios en la nube no siempre respaldan por ti más allá de un periodo corto de papelera. Si un empleado borra una carpeta y nadie lo nota en semanas, la información puede no ser recuperable.' ],

			[ 'h2', 'Las dos preguntas que definen tu política' ],
			[ 'p', '<strong>¿Cuánta información puedes permitirte perder?</strong> Si la respuesta es "una hora de pedidos", necesitas respaldos frecuentes o replicación; si es "un día", una copia diaria basta.' ],
			[ 'p', '<strong>¿Cuánto tiempo puedes estar fuera de servicio?</strong> Si la respuesta es "dos horas", necesitas un procedimiento probado y quizá infraestructura lista; si es "un día", una restauración manual es aceptable.' ],
			[ 'p', 'Responder estas dos preguntas con la gerencia convierte una discusión técnica en una decisión de negocio, y suele justificar por sí sola la inversión.' ],

			[ 'h2', 'Frecuencia y retención' ],
			[
				'table',
				[
					'head' => [ 'Tipo de sitio', 'Frecuencia sugerida', 'Retención' ],
					'rows' => [
						[ 'Sitio informativo', 'Diaria', '30 días' ],
						[ 'Sitio con formularios y blog', 'Diaria, con copias antes de cada cambio', '30 a 60 días' ],
						[ 'Tienda en línea', 'Varias veces al día para la base de datos', '60 a 90 días' ],
						[ 'Sistema de gestión', 'Continua o cada pocas horas', 'Según normativa aplicable' ],
					],
				],
			],
			[ 'p', 'La retención importa: si un ataque o un error pasa desapercibido dos semanas, necesitas una copia anterior a ese momento. Tener solo las últimas 48 horas es insuficiente.' ],

			[ 'h2', 'Probar la restauración: lo que casi nadie hace' ],
			[ 'p', 'Una copia no verificada es una promesa. Al menos cada trimestre, restaura en un entorno aparte y comprueba que el sitio levanta, que los datos están completos y hasta qué fecha llegan, y cuánto tiempo tomó el proceso completo.' ],
			[ 'p', 'Documenta el procedimiento paso a paso, con las credenciales necesarias identificadas, y guárdalo donde sea accesible aunque el sistema principal esté caído. En una emergencia nadie improvisa bien.' ],

			[ 'h2', 'Errores frecuentes' ],
			[
				'ul',
				[
					'Guardar las copias en el mismo servidor o en la misma cuenta que el original.',
					'Respaldar archivos pero no la base de datos, o al revés.',
					'No monitorear que el proceso se ejecutó: los respaldos fallan en silencio.',
					'No cifrar copias que contienen datos personales.',
					'Dar a todo el equipo acceso de borrado sobre el repositorio de respaldos.',
					'No incluir los respaldos en el plan cuando cambias de proveedor.',
				],
			],
			[ 'p', 'Para el resto del mantenimiento, revisa el <a href="{url:post:mantenimiento-wordpress-checklist}">checklist mensual</a>; si ya tuviste un incidente, <a href="{url:post:sitio-web-hackeado-que-hacer}">qué hacer con un sitio hackeado</a>. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Las copias del hosting son suficientes?', 'Son un buen punto de partida, pero no cumplen la regla: viven en la infraestructura del mismo proveedor. Si pierdes acceso a esa cuenta o hay un incidente mayor, pierdes original y respaldo a la vez.' ],
			[ '¿Cada cuánto debo probar una restauración?', 'Al menos cada trimestre, y siempre después de un cambio importante de infraestructura. La prueba debe incluir el tiempo total que tomó, porque ese es tu tiempo real de recuperación.' ],
			[ '¿Cuánto cuesta un buen esquema de respaldos?', 'Mucho menos de lo que cuesta un día de operación detenida. El almacenamiento es barato; lo que exige inversión es configurar bien, monitorear y probar de forma periódica.' ],
			[ '¿Qué es una copia inmutable y por qué importa?', 'Es un respaldo que no puede modificarse ni eliminarse durante un periodo definido, ni siquiera con credenciales de administrador. Es la defensa más efectiva frente a un secuestro de datos, porque los atacantes buscan destruir los respaldos primero.' ],
		],
		'seo_title' => 'Copias de seguridad: la regla 3-2-1 aplicada',
		'seo_desc'  => 'Cómo aplicar la regla 3-2-1 de copias de seguridad: qué respaldar, frecuencia y retención, pruebas de restauración, copias inmutables y errores frecuentes.',
	],
];

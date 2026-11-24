<?php
/**
 * Artículo: Sitio web hackeado, qué hacer.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'sitio-web-hackeado-que-hacer',
	'title'      => 'Sitio web hackeado: qué hacer paso a paso para recuperarlo',
	'date'       => '2027-02-15 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Seguridad', 'WordPress', 'Incidentes', 'Mantenimiento web' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-sitio-hackeado.jpg',
		'alt'  => 'Portada del artículo Sitio web hackeado: qué hacer paso a paso — InnspiraTech',
	],
	'excerpt'    => 'Google marcó tu sitio como peligroso o aparecen páginas que nadie publicó. Protocolo de respuesta: contener, preservar evidencia, limpiar, cerrar la puerta de entrada y pedir la revisión a Google.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Un día el sitio redirige a una página extraña, aparecen artículos en otro idioma o Google muestra el aviso rojo de "sitio engañoso". La reacción natural es borrar todo y restaurar una copia. Es exactamente lo que no se debe hacer primero: si no sabes cómo entraron, volverán en días.' ],
			[ 'p', 'Este es el protocolo que seguimos cuando recibimos una emergencia de este tipo.' ],

			[ 'h2', 'Paso 1: contener, sin destruir evidencia' ],
			[
				'ol',
				[
					'Pon el sitio en mantenimiento o restringe el acceso público mientras trabajas; si vende en línea, evalúa el impacto antes de apagarlo por completo.',
					'<strong>Toma una copia del estado actual</strong> (archivos y base de datos) antes de tocar nada. Es tu evidencia.',
					'Cambia las contraseñas de hosting, panel, base de datos, FTP o SSH, correo asociado y usuarios administradores.',
					'Cierra sesiones activas y revoca llaves de acceso y tokens de aplicaciones.',
					'Avisa a tu proveedor de hosting: pueden ver registros y detectar si el problema afecta a más sitios del servidor.',
				],
			],

			[ 'h2', 'Paso 2: entender qué pasó' ],
			[ 'p', 'Antes de limpiar, busca la puerta de entrada. Las más comunes son un plugin o tema con vulnerabilidad conocida sin actualizar, una contraseña débil o reutilizada, un equipo del administrador infectado, y un servidor compartido mal aislado.' ],
			[
				'ul',
				[
					'Revisa los registros del servidor: peticiones extrañas, accesos desde direcciones desconocidas, cargas de archivos.',
					'Busca archivos modificados o creados recientemente, sobre todo en carpetas de subidas.',
					'Revisa usuarios administradores que nadie reconoce y tareas programadas nuevas.',
					'Compara los archivos del núcleo, temas y plugins con sus versiones oficiales.',
					'Anota la fecha probable del compromiso: te dirá qué copia de seguridad es segura.',
				],
			],

			[ 'h2', 'Paso 3: limpiar' ],
			[ 'p', 'Hay dos caminos, y la elección depende de lo que encontraste:' ],
			[
				'table',
				[
					'head' => [ 'Opción', 'Cuándo conviene', 'Cuidado con' ],
					'rows' => [
						[ 'Restaurar una copia anterior al ataque', 'Tienes copias fiables y sabes la fecha del compromiso', 'Perder contenido y pedidos posteriores a esa fecha' ],
						[ 'Reconstruir sobre archivos limpios', 'No sabes la fecha o las copias también están comprometidas', 'Debes migrar contenido y revisar la base de datos con cuidado' ],
					],
				],
			],
			[ 'p', 'En la reconstrucción: reinstala el núcleo, los temas y los plugins desde sus fuentes oficiales; nunca reutilices el código de terceros que estaba en el servidor. Conserva solo los archivos subidos por tu equipo, revisados uno a uno. Y en la base de datos, busca contenido inyectado: enlaces ocultos, redirecciones en opciones y usuarios sospechosos.' ],

			[ 'h2', 'Paso 4: cerrar la puerta' ],
			[
				'ul',
				[
					'Actualiza todo a las versiones vigentes y elimina plugins y temas que no uses.',
					'Reemplaza cualquier componente sin soporte por una alternativa mantenida.',
					'Activa autenticación en dos pasos para todos los administradores.',
					'Aplica permisos de archivos correctos y desactiva el editor de archivos del panel.',
					'Cambia las llaves de seguridad y las credenciales de la base de datos.',
					'Considera un cortafuegos de aplicación web y un límite de intentos de acceso.',
					'Verifica que el servidor use versiones con soporte de PHP y de la base de datos.',
				],
			],

			[ 'h2', 'Paso 5: recuperar la reputación en Google' ],
			[ 'p', 'Si Google marcó el sitio, en Search Console encontrarás el informe de "Problemas de seguridad". Una vez limpio, solicita la revisión describiendo qué encontraste y qué corregiste. La revisión puede tardar desde unas horas hasta varios días.' ],
			[ 'p', 'Revisa también si quedaron páginas indexadas creadas por el atacante: deben devolver error 404 o 410 para que salgan del índice. Y verifica que no quedaron redirecciones activas para visitantes que llegan desde buscadores, un truco frecuente para que el dueño del sitio no note nada.' ],

			[ 'h2', 'Paso 6: obligaciones si hubo datos personales' ],
			[ 'p', 'Si el ataque pudo exponer datos de clientes, empleados o proveedores, hay consecuencias legales. En Colombia, la normativa de protección de datos personales exige reportar los incidentes que afecten la seguridad de la información a la autoridad correspondiente, y puede ser necesario informar a los titulares. Consúltalo con tu área legal apenas confirmes el alcance, no al final del proceso.' ],

			[ 'h2', 'Las 48 horas siguientes' ],
			[
				'ul',
				[
					'Monitorea el sitio y los registros con atención especial.',
					'Revisa que las copias de seguridad nuevas se estén generando y que se puedan restaurar.',
					'Verifica el correo saliente: los sitios comprometidos suelen usarse para enviar spam y terminan en listas negras.',
					'Confirma con tu equipo que nadie conserve credenciales antiguas anotadas.',
					'Documenta todo el incidente: causa, acciones y aprendizajes.',
				],
			],

			[ 'h2', 'Cómo evitar la próxima vez' ],
			[ 'p', 'Casi todos los ataques que atendemos se habrían evitado con mantenimiento básico: actualizaciones al día, contraseñas únicas con doble factor, copias de seguridad fuera del servidor y probadas, y monitoreo que avise antes que el cliente. Tenemos el detalle en el <a href="{url:post:mantenimiento-wordpress-checklist}">checklist de mantenimiento de WordPress</a> y en <a href="{url:post:copias-de-seguridad-web}">copias de seguridad con la regla 3-2-1</a>.' ],
			[ 'p', 'Si estás en medio de un incidente y necesitas ayuda para recuperar tu sitio, conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos ahora</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Puedo limpiar el sitio solo con un plugin de seguridad?', 'Un escáner ayuda a detectar archivos alterados, pero rara vez basta: no encuentra todas las puertas traseras ni corrige la causa. Sirve como apoyo dentro de un proceso de limpieza, no como sustituto.' ],
			[ '¿Cuánto tarda la recuperación?', 'Un caso sencillo con copias confiables puede resolverse en horas. Si no se sabe cómo entraron o el compromiso es antiguo, la reconstrucción y la verificación pueden tomar varios días.' ],
			[ '¿Por qué atacan a un sitio pequeño que no le interesa a nadie?', 'La mayoría de ataques son automatizados y no eligen víctima: rastrean internet buscando versiones vulnerables. El sitio se usa luego para enviar spam, alojar páginas fraudulentas o minar criptomonedas.' ],
			[ '¿Debo avisar a mis clientes?', 'Si hubo o pudo haber exposición de datos personales, sí, y además existen obligaciones de reporte ante la autoridad. Consúltalo con tu área legal apenas conozcas el alcance del incidente.' ],
		],
		'seo_title' => 'Sitio web hackeado: qué hacer paso a paso',
		'seo_desc'  => 'Protocolo para recuperar un sitio hackeado: contención, análisis de la causa, limpieza, cierre de vulnerabilidades, revisión en Google y obligaciones legales.',
	],
];

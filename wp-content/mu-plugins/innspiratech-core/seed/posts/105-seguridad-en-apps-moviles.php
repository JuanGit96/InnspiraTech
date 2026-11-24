<?php
/**
 * Artículo: Seguridad en apps móviles.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'seguridad-en-apps-moviles',
	'title'      => 'Seguridad en apps móviles: lo mínimo que debes exigir',
	'date'       => '2027-07-28 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Apps móviles', 'Seguridad', 'Datos personales', 'Buenas prácticas' ],
	'servicio'   => 'desarrollo-apps-moviles',
	'image'      => [
		'file' => 'post-seguridad-apps.jpg',
		'alt'  => 'Portada del artículo Seguridad en apps móviles: lo mínimo que debes exigir — InnspiraTech',
	],
	'excerpt'    => 'Una app vive en dispositivos que no controlas, en redes que no conoces y en manos de cualquiera. Los controles mínimos de seguridad, explicados para quien contrata el desarrollo, con checklist incluido.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una aplicación móvil tiene un problema de seguridad particular: su código viaja al dispositivo del usuario. Cualquiera puede descargarla, analizarla y ver cómo se comunica con tus servidores. Por eso, en una app, la regla de oro es simple: <strong>nunca confíes en el cliente</strong>.' ],
			[ 'p', 'No necesitas ser especialista para exigir lo mínimo. Esta es la lista.' ],

			[ 'h2', 'Los riesgos más frecuentes' ],
			[
				'table',
				[
					'head' => [ 'Riesgo', 'Qué puede pasar' ],
					'rows' => [
						[ 'Llaves y secretos dentro de la app', 'Alguien extrae la llave y usa tus servicios a tu costo o accede a datos' ],
						[ 'Validaciones solo en la app', 'Se manipulan precios, permisos o cantidades desde afuera' ],
						[ 'Datos sensibles guardados sin cifrar', 'Un teléfono perdido expone información de clientes' ],
						[ 'Comunicación insegura', 'Interceptación de datos en redes públicas' ],
						[ 'Sesiones que no expiran', 'Acceso prolongado desde dispositivos robados' ],
						[ 'Dependencias vulnerables', 'Librerías de terceros con fallos conocidos' ],
						[ 'Permisos excesivos', 'Recolección de datos innecesarios y rechazo en tiendas' ],
					],
				],
			],

			[ 'h2', 'Los controles mínimos' ],
			[ 'h3', 'En el servidor' ],
			[
				'ul',
				[
					'Toda validación de negocio y de permisos ocurre en el servidor, aunque también exista en la app.',
					'Autenticación robusta con tokens de vida corta y renovación segura.',
					'Límites de peticiones para evitar abuso y ataques de fuerza bruta.',
					'Registro de accesos y alertas ante patrones anómalos.',
				],
			],
			[ 'h3', 'En la comunicación' ],
			[
				'ul',
				[
					'Todo el tráfico cifrado, sin excepciones.',
					'Validación estricta de certificados; para apps de alto riesgo, fijación de certificados.',
				],
			],
			[ 'h3', 'En el dispositivo' ],
			[
				'ul',
				[
					'Nada de secretos, llaves privadas ni credenciales administrativas empaquetadas en la app.',
					'Datos sensibles guardados en el almacenamiento seguro del sistema operativo.',
					'Guardar localmente solo lo imprescindible.',
					'Cierre de sesión que borre realmente los datos locales.',
					'Opción de biometría para acciones sensibles.',
				],
			],
			[ 'h3', 'En el ciclo de desarrollo' ],
			[
				'ul',
				[
					'Revisión automática de dependencias vulnerables.',
					'Revisión de código con foco en seguridad en los módulos críticos.',
					'Separación de ambientes: la app de producción nunca apunta a pruebas ni al revés.',
					'Registros de la app sin datos personales ni tokens.',
				],
			],

			[ 'h2', 'Según el tipo de app, sube el nivel' ],
			[ 'p', 'Una app de catálogo no necesita lo mismo que una de pagos o de salud. Para apps financieras, de salud o que manejan datos sensibles, agrega detección de dispositivos modificados, protección contra análisis del código, controles antifraude y una prueba de penetración antes de cada lanzamiento importante.' ],

			[ 'h2', 'Datos personales y cumplimiento' ],
			[ 'p', 'Recolecta solo lo que necesitas, informa con claridad qué haces con los datos, obtén autorización cuando aplique y permite eliminar la cuenta desde la app. Las tiendas exigen declarar con precisión qué datos recolecta la app —incluidos los SDK de terceros— y las normativas de protección de datos agregan sus propias obligaciones.' ],

			[ 'h2', 'Checklist para el contrato con tu proveedor' ],
			[
				'ol',
				[
					'¿Hay algún secreto o credencial dentro del código de la app?',
					'¿Todas las validaciones de negocio se repiten en el servidor?',
					'¿Cómo se almacenan los datos sensibles en el dispositivo?',
					'¿Cuánto duran las sesiones y cómo se revocan?',
					'¿Se revisan las dependencias en cada versión?',
					'¿Qué datos declara la app en las tiendas y coinciden con la realidad?',
					'¿Se hará una prueba de seguridad antes del lanzamiento?',
				],
			],
			[ 'p', 'Para el ciclo completo, revisa <a href="{url:post:publicar-app-en-app-store-y-google-play}">cómo publicar sin rechazos</a> y <a href="{url:post:mantenimiento-de-aplicaciones-moviles}">mantenimiento anual de apps</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-apps-moviles}">desarrollo de apps móviles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Es posible ocultar una llave dentro de la app?', 'No de forma segura. Cualquier dato empaquetado en la app puede extraerse con suficiente esfuerzo. Las operaciones que requieren secretos deben hacerse en el servidor.' ],
			[ '¿Necesito una prueba de penetración?', 'Para apps que manejan pagos, datos de salud o información sensible, sí, antes de cada lanzamiento relevante. Para apps de bajo riesgo, suele bastar con buenas prácticas, revisión de código y análisis automático.' ],
			[ '¿Qué pasa si pierdo un teléfono con la app abierta?', 'Con un buen diseño, poco: sesiones que expiran, datos sensibles cifrados, bloqueo biométrico para acciones críticas y posibilidad de cerrar la sesión remotamente desde otra plataforma.' ],
			[ '¿Las apps multiplataforma son menos seguras?', 'No por sí mismas. La seguridad depende sobre todo del diseño del servidor, del manejo de datos y de las prácticas del equipo, más que del framework elegido.' ],
		],
		'seo_title' => 'Seguridad en apps móviles: lo mínimo exigible',
		'seo_desc'  => 'Riesgos de seguridad en apps móviles y controles mínimos en servidor, comunicación, dispositivo y desarrollo, con checklist para exigir a tu proveedor.',
	],
];

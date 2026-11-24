<?php
/**
 * Artículo: Mantenimiento de apps móviles.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'mantenimiento-de-aplicaciones-moviles',
	'title'      => 'Mantenimiento de apps móviles: qué hacer cada año con iOS y Android',
	'date'       => '2026-11-23 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Apps móviles', 'Mantenimiento', 'App Store', 'Google Play' ],
	'servicio'   => 'desarrollo-apps-moviles',
	'image'      => [
		'file' => 'post-mantenimiento-apps.jpg',
		'alt'  => 'Portada del artículo Mantenimiento de apps móviles: qué hacer cada año — InnspiraTech',
	],
	'excerpt'    => 'Una app sin mantenimiento desaparece de las tiendas. Calendario anual de tareas obligatorias, certificados que vencen, requisitos de Apple y Google, y cuánto presupuestar cada año.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una app no es un proyecto que termina: es un producto que vive en dos plataformas que cambian cada año y que pueden retirarla de la tienda si no cumples sus requisitos. Muchas empresas lo descubren tarde, cuando la app deja de estar disponible para descargar o empieza a fallar en los dispositivos nuevos.' ],
			[ 'p', 'Este es el calendario de mantenimiento que evita esa situación.' ],

			[ 'h2', 'Lo que ocurre cada año, sin falta' ],
			[
				'table',
				[
					'head' => [ 'Cuándo', 'Qué pasa', 'Qué debes hacer' ],
					'rows' => [
						[ 'Mediados de año', 'Se anuncian las nuevas versiones de iOS y Android', 'Revisar cambios que afecten tu app y planear el trabajo' ],
						[ 'Segundo semestre', 'Se liberan las versiones nuevas al público', 'Probar la app en la versión nueva y corregir' ],
						[ 'Todo el año', 'Las tiendas actualizan requisitos de publicación', 'Compilar con las herramientas y versiones exigidas' ],
						[ 'Fecha fija anual', 'Vence la membresía de desarrollador de Apple', 'Renovarla antes o la app sale de la tienda' ],
						[ 'Según emisión', 'Vencen certificados y perfiles de firma', 'Renovarlos antes de la fecha; llevar registro' ],
					],
				],
			],
			[ 'p', 'Las condiciones exactas cambian: Google exige que las apps publicadas apunten a versiones recientes de Android y Apple exige compilar con versiones recientes de su entorno de desarrollo. Revisa siempre la documentación oficial vigente antes de planear el año.' ],

			[ 'h2', 'Checklist trimestral' ],
			[
				'ul',
				[
					'Actualizar dependencias y librerías de terceros, priorizando las que reportan vulnerabilidades.',
					'Revisar informes de fallos y atender los que afectan a más usuarios.',
					'Probar en los dispositivos y versiones de sistema más usados por tu base real, no por el mercado general.',
					'Revisar el rendimiento: tiempo de inicio, consumo de batería y de datos.',
					'Verificar que las integraciones (pagos, mapas, notificaciones, analítica) sigan funcionando.',
					'Responder las reseñas de las tiendas: influyen en la conversión de descarga.',
				],
			],

			[ 'h2', 'Checklist anual' ],
			[
				'ol',
				[
					'Adaptar la app a la nueva versión de cada sistema operativo y publicar una actualización.',
					'Revisar y actualizar las declaraciones de privacidad y de uso de datos exigidas por las tiendas.',
					'Confirmar que cumples los requisitos vigentes: eliminación de cuenta desde la app, permisos justificados, accesibilidad.',
					'Renovar membresías, certificados y llaves de notificaciones.',
					'Revisar la política de versiones soportadas: hasta qué versión antigua de sistema mantienes compatibilidad.',
					'Actualizar capturas de pantalla, descripción y palabras clave de la ficha en las tiendas.',
					'Auditar permisos y datos recolectados frente a la normativa de protección de datos.',
				],
			],

			[ 'h2', 'Los rechazos más comunes al actualizar' ],
			[
				'table',
				[
					'head' => [ 'Motivo', 'Cómo evitarlo' ],
					'rows' => [
						[ 'Funcionalidad mínima o app que solo muestra un sitio web', 'Aportar funciones propias del móvil: notificaciones, uso sin conexión, cámara' ],
						[ 'Permisos sin justificación clara', 'Explicar cada permiso en el momento de solicitarlo' ],
						[ 'Datos declarados que no coinciden con los reales', 'Revisar qué recolectan también los SDK de terceros' ],
						[ 'Falta de opción para eliminar la cuenta', 'Incluirla dentro de la app, no solo por correo' ],
						[ 'Contenido o pagos que incumplen las reglas de la tienda', 'Revisar las políticas vigentes antes de enviar' ],
					],
				],
			],

			[ 'h2', 'Qué presupuestar cada año' ],
			[ 'p', 'Una regla práctica: reserva anualmente un porcentaje del costo de desarrollo inicial para mantenimiento. Ese presupuesto cubre las adaptaciones obligatorias de plataforma, la corrección de fallos, la actualización de dependencias y una o dos mejoras funcionales. Súmale los costos fijos: cuentas de desarrollador, servicios de backend, notificaciones, monitoreo y almacenamiento.' ],
			[ 'p', 'Si no reservas ese presupuesto, el costo no desaparece: se acumula y reaparece como un proyecto grande de "actualización" dos años después, casi siempre más caro.' ],

			[ 'h2', 'Señales de que tu app necesita mantenimiento urgente' ],
			[
				'ul',
				[
					'No se ha publicado una actualización en más de un año.',
					'Aumentan las reseñas que mencionan fallos o cierres inesperados.',
					'La app no se ve bien en los dispositivos y tamaños de pantalla recientes.',
					'Usa librerías sin soporte o versiones de lenguaje descontinuadas.',
					'Nadie en la empresa tiene acceso a las cuentas de las tiendas.',
					'Las notificaciones dejaron de llegar.',
				],
			],
			[ 'p', 'Ese último punto merece atención especial: el acceso a las cuentas de desarrollador debe estar a nombre de tu empresa, no del proveedor ni de un empleado. Recuperar una cuenta ajena puede tomar semanas y, en el peor caso, obliga a publicar la app de nuevo perdiendo reseñas y descargas.' ],
			[ 'p', 'Si estás planeando una app nueva, revisa <a href="{url:post:cuanto-cuesta-desarrollar-una-app}">cuánto cuesta desarrollar una app</a> y <a href="{url:post:publicar-app-en-app-store-y-google-play}">cómo publicarla sin rechazos</a>. ¿Necesitas un plan de mantenimiento con responsables y tiempos? Conoce nuestro servicio de <a href="{url:servicio:desarrollo-apps-moviles}">desarrollo y mantenimiento de apps móviles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Qué pasa si no actualizo mi app?', 'Con el tiempo deja de cumplir los requisitos de las tiendas y puede dejar de estar disponible para nuevas descargas. Antes de eso, empieza a fallar en los dispositivos y sistemas más recientes, y las reseñas negativas se acumulan.' ],
			[ '¿Cada cuánto debo publicar una actualización?', 'Al menos una vez al año por obligación de plataforma, y de forma trimestral si quieres mantener estabilidad, seguridad y buenas reseñas. Las apps activas suelen publicar con mayor frecuencia.' ],
			[ '¿Puedo mantener la app con otro proveedor?', 'Sí, siempre que tengas el código, la documentación y el control de las cuentas de desarrollador y de firma. Si algo de eso está en manos del proveedor original, resuélvelo antes de cambiar.' ],
			[ '¿El mantenimiento incluye funciones nuevas?', 'Normalmente no. El mantenimiento cubre que la app siga funcionando, segura y disponible. Las funciones nuevas se presupuestan aparte, aunque muchos planes incluyen una bolsa de horas para mejoras menores.' ],
		],
		'seo_title' => 'Mantenimiento de apps: qué hacer cada año',
		'seo_desc'  => 'Calendario anual de mantenimiento para apps iOS y Android: adaptaciones de plataforma, certificados, requisitos de las tiendas, presupuesto y señales de alerta.',
	],
];

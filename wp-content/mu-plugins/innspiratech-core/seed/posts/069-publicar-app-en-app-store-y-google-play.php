<?php
/**
 * Artículo: Publicar una app en App Store y Google Play.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'publicar-app-en-app-store-y-google-play',
	'title'      => 'Cómo publicar una app en App Store y Google Play sin rechazos',
	'date'       => '2027-05-05 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Apps móviles', 'App Store', 'Google Play', 'Publicación' ],
	'servicio'   => 'desarrollo-apps-moviles',
	'image'      => [
		'file' => 'post-publicar-app.jpg',
		'alt'  => 'Portada del artículo Cómo publicar una app en App Store y Google Play — InnspiraTech',
	],
	'excerpt'    => 'Los rechazos casi siempre son por los mismos motivos y se pueden evitar. Requisitos previos, cuentas, documentos, checklist de envío y cómo responder cuando te rechazan la app.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Publicar una app no es subir un archivo: es pasar una revisión con reglas que cambian cada año. Un rechazo puede costar semanas si aparece justo antes del lanzamiento comercial que ya anunciaste.' ],
			[ 'p', 'La buena noticia es que los motivos de rechazo se repiten, y casi todos se resuelven antes de enviar. Esta guía los recorre.' ],

			[ 'h2', 'Antes de empezar: las cuentas' ],
			[
				'ul',
				[
					'<strong>Cuentas a nombre de la empresa,</strong> nunca de un empleado ni del proveedor. Recuperar una cuenta ajena es lento y doloroso.',
					'<strong>Cuenta de organización</strong> cuando publiques como empresa: exige documentación legal y su verificación toma tiempo.',
					'<strong>Correo corporativo</strong> y autenticación en dos pasos con acceso de más de una persona.',
					'<strong>Método de pago corporativo</strong> para las suscripciones anuales o el registro inicial.',
					'<strong>Certificados y llaves de firma</strong> guardados en un gestor corporativo, con respaldo. Perder la llave de firma en Android puede impedirte actualizar tu propia app.',
				],
			],
			[ 'p', 'Inicia estos trámites con semanas de anticipación: la verificación de una organización puede tardar y es el bloqueo más común de un lanzamiento.' ],

			[ 'h2', 'Lo que preparan mal casi todos' ],
			[
				'table',
				[
					'head' => [ 'Elemento', 'Qué exige', 'Error frecuente' ],
					'rows' => [
						[ 'Política de privacidad', 'URL pública y vigente', 'Un texto genérico que no coincide con lo que la app recolecta' ],
						[ 'Declaración de datos', 'Detalle de qué datos recolectas y para qué', 'Olvidar los datos que recogen los SDK de terceros' ],
						[ 'Permisos', 'Justificación clara de cada uno', 'Pedir permisos que la app no usa' ],
						[ 'Eliminación de cuenta', 'Posibilidad de borrar la cuenta desde la app', 'Ofrecerla solo por correo' ],
						[ 'Usuario de prueba', 'Credenciales para que el revisor entre', 'Enviar una app con login sin dar acceso' ],
						[ 'Capturas y descripción', 'Que reflejen la app real', 'Imágenes de conceptos que no existen en el producto' ],
					],
				],
			],

			[ 'h2', 'Los motivos de rechazo más comunes' ],
			[
				'ol',
				[
					'<strong>Funcionalidad mínima:</strong> una app que solo muestra tu sitio web sin aportar nada propio del móvil.',
					'<strong>Fallos o pantallas en blanco</strong> durante la revisión, muchas veces por un ambiente mal configurado.',
					'<strong>Falta de acceso para el revisor:</strong> login sin usuario de prueba o verificación por un canal inaccesible.',
					'<strong>Incoherencia entre lo declarado y lo real</strong> en privacidad y permisos.',
					'<strong>Pagos por fuera de las reglas</strong> de la tienda cuando se trata de contenido o servicios digitales.',
					'<strong>Contenido o marcas de terceros</strong> sin autorización.',
					'<strong>Metadatos engañosos:</strong> palabras clave, nombre o capturas que prometen lo que la app no hace.',
				],
			],

			[ 'h2', 'Checklist antes de enviar' ],
			[
				'ul',
				[
					'Probar la app instalada desde cero en dispositivos reales, con conexión buena y mala.',
					'Verificar el flujo de registro e inicio de sesión con un usuario nuevo.',
					'Revisar que no queden funciones de prueba, datos ficticios ni pantallas internas visibles.',
					'Confirmar que los textos legales y de soporte están publicados y accesibles.',
					'Completar la ficha: descripción, capturas actualizadas, categoría y clasificación de contenido.',
					'Preparar notas para el revisor explicando qué hace la app y cómo probarla.',
					'Definir el despliegue por etapas cuando la plataforma lo permita, para detectar problemas con pocos usuarios.',
				],
			],

			[ 'h2', 'Si te rechazan' ],
			[ 'p', 'No es el fin del mundo ni un juicio sobre tu producto. Lee el motivo exacto, que suele citar la regla concreta, corrige y responde con claridad explicando qué cambiaste. Si consideras que hay un malentendido, puedes exponer tus argumentos en el mismo canal de comunicación de la tienda; conviene hacerlo con respeto y con evidencias, no con reclamos.' ],
			[ 'p', 'Planea siempre un colchón de tiempo entre la primera entrega a revisión y la fecha de lanzamiento comercial. Un rechazo y una corrección pueden sumar varios días.' ],

			[ 'h2', 'Después de publicar' ],
			[ 'p', 'La publicación es el comienzo, no el final: monitorea fallos y reseñas desde el primer día, mide instalaciones y retención, y prepárate para una actualización correctiva en las primeras semanas. Y no olvides el mantenimiento anual obligatorio, que explicamos en <a href="{url:post:mantenimiento-de-aplicaciones-moviles}">mantenimiento de apps móviles</a>.' ],
			[ 'p', 'Las reglas de ambas tiendas cambian con frecuencia: antes de cada envío importante, revisa la documentación oficial vigente. Si aún estás decidiendo el enfoque, revisa <a href="{url:post:app-nativa-web-app-o-pwa}">app nativa, aplicación web o PWA</a> y <a href="{url:post:cuanto-cuesta-desarrollar-una-app}">cuánto cuesta desarrollar una app</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-apps-moviles}">desarrollo de apps móviles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tarda la revisión de una app?', 'Varía según la tienda y el momento del año: puede ir de unas horas a varios días. Planea siempre margen, sobre todo si es la primera publicación o si tu cuenta de organización aún está en verificación.' ],
			[ '¿Puedo publicar una app que solo muestre mi sitio web?', 'Es el rechazo más común. Para aprobarse, la app debe aportar funciones propias del móvil: notificaciones, uso sin conexión, cámara, ubicación o integración con el dispositivo.' ],
			[ '¿Necesito empresa constituida para publicar?', 'Se puede publicar como persona natural, pero si la app es de una empresa conviene la cuenta de organización: da más confianza al usuario y evita problemas de titularidad a futuro.' ],
			[ '¿Qué pasa si pierdo la llave de firma de Android?', 'Sin ella no puedes publicar actualizaciones de la misma app, salvo que uses el esquema de firma gestionado por la plataforma y puedas solicitar su restablecimiento. Guárdala en un gestor corporativo con respaldo desde el primer día.' ],
		],
		'seo_title' => 'Publicar tu app sin rechazos en las tiendas',
		'seo_desc'  => 'Cómo publicar en App Store y Google Play: cuentas, certificados, privacidad, permisos, checklist de envío, motivos de rechazo y qué hacer si ocurre.',
	],
];

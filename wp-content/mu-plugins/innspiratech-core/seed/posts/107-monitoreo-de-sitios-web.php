<?php
/**
 * Artículo: Monitoreo de sitios web.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'monitoreo-de-sitios-web',
	'title'      => 'Monitoreo: entérate antes que tus clientes de que tu sitio falló',
	'date'       => '2027-04-21 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Monitoreo', 'Disponibilidad', 'Mantenimiento', 'Alertas' ],
	'servicio'   => 'mantenimiento-software',
	'image'      => [
		'file' => 'post-monitoreo-web.jpg',
		'alt'  => 'Portada del artículo Monitoreo: entérate antes que tus clientes — InnspiraTech',
	],
	'excerpt'    => 'Si te enteras de una caída porque un cliente escribió, llegaste tarde. Qué monitorear además de "está arriba", cómo configurar alertas que no se ignoran y qué hacer cuando suenan.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La mayoría de empresas se entera de que su sitio o su sistema falló por un cliente molesto, un vendedor que no puede cotizar o una caída de ventas que alguien nota días después. Todo eso se evita con monitoreo, que es barato, rápido de configurar y casi siempre inexistente.' ],

			[ 'h2', 'Qué monitorear, en capas' ],
			[
				'table',
				[
					'head' => [ 'Capa', 'Qué verifica', 'Ejemplo de alerta' ],
					'rows' => [
						[ 'Disponibilidad', 'Que el sitio responda', 'La página de inicio no responde desde hace 2 minutos' ],
						[ 'Funcionalidad', 'Que los flujos clave funcionen', 'El formulario de contacto no envía' ],
						[ 'Rendimiento', 'Que responda a tiempo', 'El tiempo de respuesta supera 3 segundos' ],
						[ 'Certificados y dominio', 'Que no venzan', 'El certificado vence en 14 días' ],
						[ 'Servidor', 'Recursos disponibles', 'Disco al 90 %' ],
						[ 'Errores de aplicación', 'Fallos internos', 'Aumento súbito de errores' ],
						[ 'Tareas programadas', 'Que se ejecuten', 'La copia de seguridad de anoche no corrió' ],
						[ 'Negocio', 'Que la operación siga', 'Cero pedidos en las últimas 3 horas en horario laboral' ],
					],
				],
			],
			[ 'p', 'La última capa es la más valiosa y la menos usada: un sitio puede estar "arriba" y, aun así, no estar vendiendo porque falló la pasarela de pago.' ],

			[ 'h2', 'Monitoreo sintético: simular a un cliente' ],
			[ 'p', 'Además de verificar que la página responde, configura pruebas que recorran los flujos críticos cada cierto tiempo: buscar un producto, agregarlo al carrito, llegar al pago; o llenar el formulario de contacto y confirmar que el mensaje llegó. Detectan exactamente los fallos que un cliente notaría.' ],

			[ 'h2', 'Alertas que no se ignoran' ],
			[ 'p', 'El enemigo del monitoreo es la fatiga de alertas: si llegan veinte avisos al día, al tercer día nadie los mira. Reglas prácticas:' ],
			[
				'ol',
				[
					'<strong>Alerta solo lo accionable:</strong> si nadie tiene que hacer nada, es un reporte, no una alerta.',
					'<strong>Confirma antes de avisar:</strong> dos o tres fallos seguidos desde distintas ubicaciones.',
					'<strong>Niveles de severidad</strong> con canales distintos: lo crítico despierta a alguien; lo menor va a un resumen diario.',
					'<strong>Un responsable por alerta,</strong> con respaldo si no responde.',
					'<strong>Revisa cada alerta falsa</strong> y ajusta el umbral.',
				],
			],

			[ 'h2', 'Qué hacer cuando suena' ],
			[
				'ul',
				[
					'Confirmar el alcance: ¿todo el sitio, una función, un grupo de usuarios?',
					'Comunicar internamente que se está atendiendo, para evitar esfuerzos duplicados.',
					'Aplicar la solución rápida conocida: revertir el último cambio, reiniciar un servicio, activar la contingencia.',
					'Informar a clientes si el impacto es visible y prolongado.',
					'Después, registrar causa, duración y acciones preventivas.',
				],
			],
			[ 'p', 'Tener documentadas las acciones para los incidentes más probables reduce drásticamente el tiempo de recuperación, sobre todo cuando ocurren fuera de horario.' ],

			[ 'h2', 'Indicadores para medir la disponibilidad' ],
			[
				'ul',
				[
					'<strong>Disponibilidad mensual:</strong> porcentaje del tiempo en que el servicio funcionó.',
					'<strong>Tiempo medio de detección:</strong> desde que falla hasta que alguien lo sabe.',
					'<strong>Tiempo medio de recuperación:</strong> desde que se detecta hasta que se resuelve.',
					'<strong>Incidentes repetidos:</strong> los que vuelven indican causas sin resolver.',
				],
			],
			[ 'p', 'El monitoreo ataca directamente el segundo indicador, que en empresas sin monitoreo suele medirse en horas.' ],
			[ 'p', 'Para el resto del mantenimiento, revisa el <a href="{url:post:mantenimiento-wordpress-checklist}">checklist mensual</a> y <a href="{url:post:copias-de-seguridad-web}">copias de seguridad con la regla 3-2-1</a>; para contratar cobertura, <a href="{url:post:poliza-de-soporte-o-bolsa-de-horas}">póliza de soporte o bolsa de horas</a>. Conoce nuestro servicio de <a href="{url:servicio:mantenimiento-software}">mantenimiento de software</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto cuesta monitorear un sitio web?', 'El monitoreo básico de disponibilidad y certificados es muy económico, e incluso gratuito en planes pequeños. El monitoreo de flujos, errores de aplicación y métricas de negocio requiere más configuración, y sigue siendo barato frente al costo de una caída no detectada.' ],
			[ '¿Cada cuánto debe verificarse la disponibilidad?', 'Para sitios que venden o atienden clientes, cada uno a cinco minutos es razonable. Para flujos simulados completos, cada quince o treinta minutos suele bastar.' ],
			[ '¿El hosting ya no monitorea mi sitio?', 'Normalmente monitorea su infraestructura, no tu aplicación. Tu servidor puede estar funcionando mientras tu formulario, tu pasarela de pago o tu base de datos fallan.' ],
			[ '¿Quién debe recibir las alertas?', 'Quien puede actuar: tu equipo técnico o tu proveedor de soporte, con un respaldo definido. Enviar alertas a una persona que no puede resolver nada solo genera angustia.' ],
		],
		'seo_title' => 'Monitoreo web: entérate antes que tus clientes',
		'seo_desc'  => 'Qué monitorear en un sitio o sistema además de la disponibilidad, pruebas sintéticas, alertas accionables sin fatiga, respuesta a incidentes e indicadores.',
	],
];

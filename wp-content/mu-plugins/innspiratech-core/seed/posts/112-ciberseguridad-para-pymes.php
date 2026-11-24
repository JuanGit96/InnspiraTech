<?php
/**
 * Artículo: Ciberseguridad para pymes.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'ciberseguridad-para-pymes',
	'title'      => 'Ciberseguridad para pymes: lo mínimo indispensable',
	'date'       => '2027-08-13 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'Ciberseguridad', 'Pymes', 'Riesgos', 'Buenas prácticas' ],
	'servicio'   => 'consultoria-tecnologica',
	'image'      => [
		'file' => 'post-ciberseguridad-pymes.jpg',
		'alt'  => 'Portada del artículo Ciberseguridad para pymes: lo mínimo indispensable — InnspiraTech',
	],
	'excerpt'    => 'Los ataques a pymes son automatizados y no eligen víctima. Diez controles de bajo costo que evitan la mayoría de incidentes, ordenados por prioridad, más un plan básico para cuando algo pasa.',
	'content'    => it_seed_blocks(
		[
			[ 'p', '"A nosotros no nos van a atacar, somos pequeños." Es exactamente lo que buscan los atacantes: la mayoría de ataques no apunta a una empresa en particular, sino que prueba contraseñas filtradas, correos engañosos y sistemas sin actualizar a gran escala, y se queda con quien caiga. Las pymes caen más porque tienen menos controles.' ],
			[ 'p', 'La buena noticia: un conjunto pequeño de medidas evita la mayoría de incidentes.' ],

			[ 'h2', 'Los diez controles, por prioridad' ],
			[
				'table',
				[
					'head' => [ '#', 'Control', 'Qué evita' ],
					'rows' => [
						[ '1', 'Autenticación en dos pasos en correo, banca, nube y administración', 'Robo de cuentas por contraseñas filtradas' ],
						[ '2', 'Copias de seguridad fuera del sistema y probadas', 'Pérdida total ante secuestro de datos' ],
						[ '3', 'Actualizaciones automáticas de equipos y sistemas', 'Explotación de vulnerabilidades conocidas' ],
						[ '4', 'Gestor de contraseñas corporativo', 'Contraseñas repetidas y compartidas por chat' ],
						[ '5', 'Capacitación contra suplantación y fraude', 'Transferencias a cuentas falsas, robo de credenciales' ],
						[ '6', 'Permisos mínimos y revisión de accesos', 'Daño amplio desde una sola cuenta comprometida' ],
						[ '7', 'Protección en equipos (antimalware moderno)', 'Programas maliciosos' ],
						[ '8', 'Cifrado de discos en portátiles', 'Fuga de información por equipos perdidos' ],
						[ '9', 'Retiro de accesos al salir un empleado', 'Accesos vigentes de personas que ya no están' ],
						[ '10', 'Procedimiento de verificación de pagos', 'Fraude por cambio de cuenta bancaria' ],
					],
				],
			],
			[ 'p', 'Los tres primeros, por sí solos, reducen enormemente el riesgo, y ninguno es costoso.' ],

			[ 'h2', 'El fraude del cambio de cuenta' ],
			[ 'p', 'Merece una mención especial por lo frecuente: llega un correo, aparentemente de un proveedor real, avisando que cambió su cuenta bancaria. Se paga la siguiente factura a la cuenta nueva, que pertenece a un estafador. La defensa no es tecnológica: es un procedimiento. Todo cambio de datos bancarios se confirma por teléfono a un número ya registrado, nunca al que aparece en el correo.' ],

			[ 'h2', 'Capacitación que funciona' ],
			[
				'ul',
				[
					'Sesiones cortas y frecuentes, no una charla anual.',
					'Ejemplos reales de correos y mensajes que recibe tu propia empresa.',
					'Simulaciones de correos de suplantación, con retroalimentación y sin castigo.',
					'Una regla clara: ante la duda, se reporta; reportar nunca se sanciona.',
					'Atención especial a quien maneja pagos y datos sensibles.',
				],
			],

			[ 'h2', 'Plan básico ante un incidente' ],
			[
				'ol',
				[
					'Aislar el equipo o la cuenta afectada.',
					'Cambiar credenciales y cerrar sesiones activas.',
					'Avisar al responsable interno y al proveedor de soporte.',
					'Preservar evidencia antes de borrar o reinstalar.',
					'Evaluar si hubo datos personales comprometidos y las obligaciones de reporte.',
					'Restaurar desde copias verificadas.',
					'Documentar causa y medidas para que no se repita.',
				],
			],
			[ 'p', 'Escríbelo en una página, con nombres y teléfonos, e imprímelo: en un incidente real, los sistemas donde lo guardaste pueden no estar disponibles. En Colombia puedes además reportar incidentes ante las entidades de respuesta a incidentes cibernéticos del país.' ],

			[ 'h2', 'Cumplimiento' ],
			[ 'p', 'Si tratas datos personales, estás obligado a protegerlos con medidas razonables y a atender las obligaciones de la normativa de protección de datos, incluido el reporte de incidentes cuando corresponda. Revísalo con tu asesoría legal: la seguridad no es solo técnica, también es legal.' ],
			[ 'p', 'Para los respaldos, revisa <a href="{url:post:copias-de-seguridad-web}">la regla 3-2-1</a>; si ya tuviste un incidente en tu sitio, <a href="{url:post:sitio-web-hackeado-que-hacer}">qué hacer con un sitio hackeado</a>; y para la IA, <a href="{url:post:politica-de-uso-de-ia}">política de uso de IA</a>. Conoce nuestro servicio de <a href="{url:servicio:consultoria-tecnologica}">consultoría tecnológica</a> o <a href="{url:pagina:contacto}">solicita un diagnóstico de seguridad</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto debe invertir una pyme en ciberseguridad?', 'Los controles más efectivos —doble factor, respaldos, actualizaciones y gestor de contraseñas— cuestan poco. La inversión mayor es de tiempo: configurar bien, capacitar y revisar accesos con constancia.' ],
			[ '¿Qué hago si nos secuestran los datos?', 'Aísla los equipos, no borres nada, avisa a tu soporte y evalúa la restauración desde copias verificadas. Pagar no garantiza recuperar la información y financia nuevos ataques; consulta con especialistas y con tu área legal.' ],
			[ '¿El antivirus es suficiente?', 'No. Protege frente a una parte de las amenazas, pero la mayoría de incidentes en pymes empieza por credenciales robadas, engaños por correo o sistemas sin actualizar, que requieren otros controles.' ],
			[ '¿Necesito un especialista en seguridad de planta?', 'Rara vez en una pyme. Lo habitual es un responsable interno de las rutinas básicas, apoyado por un proveedor para diagnóstico, configuración y respuesta a incidentes.' ],
		],
		'seo_title' => 'Ciberseguridad para pymes: lo mínimo indispensable',
		'seo_desc'  => 'Diez controles de ciberseguridad de bajo costo para pymes, cómo evitar el fraude por cambio de cuenta, capacitación efectiva y plan básico ante incidentes.',
	],
];

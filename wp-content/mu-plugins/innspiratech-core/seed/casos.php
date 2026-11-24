<?php
/**
 * Casos de éxito.
 *
 * REGLA: aquí solo entran cifras reales y verificables, y nombres de clientes
 * con autorización por escrito. Los casos que todavía no tienen esos datos se
 * cargan con 'status' => 'draft' para que no sean visibles al público.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [

	/* ---------------------------------------------------------------------
	 * Proyecto propio. Publicado: todo lo que afirma es verificable entrando
	 * a la plataforma.
	 * ------------------------------------------------------------------ */
	[
		'slug'     => 'hazlolegal-plataforma-legal',
		'title'    => 'HazloLegal: convertir trámites legales en documentos que cualquiera puede generar',
		'order'    => 1,
		'servicio' => 'desarrollo-software-a-medida',
		'image'    => [
			'file' => 'caso-hazlolegal.jpg',
			'alt'  => 'Caso de éxito HazloLegal, plataforma de trámites legales — InnspiraTech',
		],
		'excerpt'  => 'Una plataforma que genera documentos legales listos para radicar, cobra por adicionales en lugar de por planes cerrados y conecta con un abogado solo a quien de verdad lo necesita.',
		'content'  => it_seed_blocks(
			[
				[ 'h2', 'El problema' ],
				[ 'p', 'En Colombia, una persona con un trámite legal corriente —la EPS que niega un procedimiento, un reporte en centrales de riesgo ya pagado, una entidad que no responde— tiene dos caminos y los dos son malos. Ir a un abogado cuesta, según el mercado tradicional, entre <strong>$300.000 y $800.000</strong>, con cita presencial y sin saber el precio hasta después de la primera consulta. Buscarlo en internet lleva a plantillas viejas que citan normas derogadas y que nadie sabe dónde se radican.' ],
				[ 'p', 'Lo caro del trámite nunca fue el papel: era el tiempo, el desplazamiento y no saber cuánto se iba a terminar pagando.' ],

				[ 'h2', 'Qué construimos' ],
				[
					'ul',
					[
						'<strong>Generador de documentos legales</strong> con formularios que se adaptan al trámite y revisión automática de la redacción.',
						'<strong>Motor de precios por adicionales:</strong> un precio base, que puede ser cero, más lo que el cliente decida sumar (instructivo de radicación, firma electrónica, entrega inmediata, acompañamiento de un abogado).',
						'<strong>Firma electrónica desde el celular</strong> por código QR, conforme a la Ley 527 de 1999.',
						'<strong>Directorio de abogados</strong> con suscripción, al que llegan los casos que no caben en un formato.',
						'<strong>Área de cliente sin contraseña</strong> y pagos en línea integrados.',
						'<strong>Panel de administración</strong> para gestionar trámites, precios, contenido y abogados sin tocar código.',
					],
				],

				[ 'h2', 'El enfoque' ],
				[ 'p', 'El proyecto no arrancó por la tecnología sino por el embudo: dónde entra la gente, en qué punto abandona y qué la hace pagar. De ahí salieron dos decisiones que definieron el producto: <strong>regalar el documento</strong> y cobrar por saber qué hacer con él, y <strong>no vender planes cerrados</strong> sino dejar que el cliente arme su trámite sumando adicionales.' ],
				[ 'p', 'La parte técnica se diseñó en torno a eso: el motor de precios es el corazón del sistema, no un detalle del checkout.' ],

				[ 'h2', 'El resultado' ],
				[ 'p', 'Hoy la plataforma genera nueve tipos de documento legal, publica el precio antes de pedir datos y entrega un instructivo con dónde radicar, qué anexar y qué plazo tiene la entidad. Lo que antes exigía una cita presencial y una tarifa desconocida se resuelve en línea, en minutos, con el precio a la vista desde el primer paso.' ],
			]
		),
		'meta'     => [
			'cliente'          => 'HazloLegal (producto propio)',
			'sector'           => 'Servicios legales · LegalTech',
			'reto'             => 'Hacer que un trámite legal corriente se resuelva sin cita presencial, sin tarifas desconocidas y sin plantillas de internet que ya no sirven.',
			'resultados'       => [
				'Costo de un trámite corriente | $300.000 a $800.000 | Desde $0',
				'Tiempo para tener el documento | Días y una cita | Minutos, en línea',
				'Precio conocido antes de empezar | No | Sí, publicado',
				'Trámites que se resuelven sin abogado | 0 | 9 documentos',
			],
			'tecnologias'      => [ 'PHP 8.5', 'Laravel 13', 'MariaDB', 'Filament', 'Firma electrónica por QR', 'Pasarela de pagos', 'dompdf', 'DDEV' ],
			'duracion'         => 'Producto en evolución continua',
			'enlace'           => 'https://hazlolegal.com',
			'seo_title'        => 'Caso HazloLegal: plataforma de trámites legales',
			'seo_desc'         => 'Cómo construimos HazloLegal: documentos legales en minutos, precio publicado desde el primer paso y un motor de precios por adicionales en lugar de planes cerrados.',
		],
	],

	/* ---------------------------------------------------------------------
	 * BORRADORES. No son públicos: la estructura está lista y solo hay que
	 * reemplazar cliente, cifras y testimonio por los datos reales, y cambiar
	 * el estado a 'publish'.
	 * ------------------------------------------------------------------ */
	[
		'slug'     => 'clinica-presupuestos-aceptados',
		'title'    => 'Clínica odontológica: de 18 % a 41 % de presupuestos aceptados',
		'status'   => 'draft',
		'order'    => 2,
		'servicio' => 'agentes-ia-empresas',
		'excerpt'  => 'El problema no estaba en atraer pacientes: estaba en los presupuestos que se entregaban y nadie volvía a mencionar. Un sistema de seguimiento automático cambió el número.',
		'content'  => it_seed_blocks(
			[
				[ 'p', '<strong>BORRADOR — PENDIENTE DE DATOS REALES.</strong> Esta ficha tiene la estructura lista. Antes de publicarla hay que reemplazar el nombre del cliente, las cifras y el testimonio por los datos reales, y pedir la autorización por escrito.' ],

				[ 'h2', 'El problema' ],
				[ 'p', 'Entraban pacientes y se daban las citas sin dificultad. El cuello estaba un paso después: se entregaba el presupuesto del tratamiento y ahí la conversación se enfriaba. Nadie llamaba de vuelta, nadie sabía cuántos presupuestos se habían entregado en el mes y la recepción no tenía tiempo de perseguirlos.' ],

				[ 'h2', 'La línea base' ],
				[ 'p', 'Antes de construir nada medimos durante cuatro semanas cuántos presupuestos se entregaban y cuántos terminaban en tratamiento iniciado.' ],

				[ 'h2', 'Qué construimos' ],
				[
					'ul',
					[
						'Registro del presupuesto en el momento de entregarlo, desde la misma pantalla de la recepción.',
						'Secuencia automática de seguimiento por WhatsApp, con el mensaje escrito por la clínica.',
						'Alerta al equipo cuando un presupuesto de alto valor lleva días sin respuesta.',
						'Panel con los presupuestos del mes, su estado y el valor en juego.',
					],
				],

				[ 'h2', 'El resultado' ],
				[ 'p', 'Pendiente de redactar con los datos del cierre.' ],
			]
		),
		'meta'     => [
			'cliente'        => 'Pendiente: nombre real y autorización',
			'sector'         => 'Salud · Odontología',
			'reto'           => 'Los presupuestos se entregaban y nadie hacía seguimiento: la mayoría no terminaba en tratamiento.',
			'resultados'     => [
				'Presupuestos aceptados | 18 % | 41 %',
				'Seguimientos hechos a tiempo | 1 de cada 5 | Todos',
				'Horas de recepción en llamadas de seguimiento | 6 por semana | Menos de 1',
			],
			'tecnologias'    => [ 'WhatsApp Business API', 'Agente de IA', 'Panel a medida', 'Integración con la agenda' ],
			'duracion'       => '90 días',
			'testimonio'     => 'Pendiente: testimonio textual del cliente, con su autorización.',
			'aviso_borrador' => 'CASO DE EJEMPLO. Reemplazar cliente, cifras y testimonio con datos reales y autorización antes de publicar.',
			'seo_title'      => 'Caso: más presupuestos aceptados en una clínica',
			'seo_desc'       => 'Cómo un sistema de seguimiento automático de presupuestos cambió el porcentaje de tratamientos iniciados en una clínica odontológica.',
		],
	],

	[
		'slug'     => 'distribuidora-pedidos-sin-digitar',
		'title'    => 'Distribuidora: pedidos que dejaron de digitarse dos veces',
		'status'   => 'draft',
		'order'    => 3,
		'servicio' => 'automatizacion-procesos',
		'excerpt'  => 'Los vendedores tomaban el pedido en papel y alguien en la oficina lo volvía a escribir en el sistema. Entre las dos digitaciones se perdían un día de despacho y varios pedidos al mes.',
		'content'  => it_seed_blocks(
			[
				[ 'p', '<strong>BORRADOR — PENDIENTE DE DATOS REALES.</strong> Esta ficha tiene la estructura lista. Antes de publicarla hay que reemplazar el nombre del cliente, las cifras y el testimonio por los datos reales, y pedir la autorización por escrito.' ],

				[ 'h2', 'El problema' ],
				[ 'p', 'El vendedor tomaba el pedido en la ruta, llamaba para preguntar si había existencias y en la noche lo transcribía a un correo. Al día siguiente alguien en la oficina lo volvía a digitar en el sistema de gestión. Cada paso era una oportunidad de error y un día perdido de despacho.' ],

				[ 'h2', 'La línea base' ],
				[ 'p', 'Medimos durante un mes las horas de digitación en oficina, los pedidos devueltos por error de precio o de existencias y los días entre la toma del pedido y el despacho.' ],

				[ 'h2', 'Qué construimos' ],
				[
					'ul',
					[
						'App de toma de pedidos que funciona sin señal y sincroniza al recuperar conexión.',
						'Catálogo con precios por cliente y existencias actualizadas desde el sistema de gestión.',
						'Bajada automática del pedido al sistema, sin digitación en oficina.',
						'Tablero de ruta y cumplimiento para la gerencia comercial.',
					],
				],

				[ 'h2', 'El resultado' ],
				[ 'p', 'Pendiente de redactar con los datos del cierre.' ],
			]
		),
		'meta'     => [
			'cliente'        => 'Pendiente: nombre real y autorización',
			'sector'         => 'Distribución y consumo masivo',
			'reto'           => 'Cada pedido se escribía dos veces y el despacho se retrasaba un día completo.',
			'resultados'     => [
				'Horas de digitación al mes | 60 | 0',
				'Días entre pedido y despacho | 1 a 2 | El mismo día',
				'Pedidos con error de precio o existencias | 7 % | Menos del 1 %',
			],
			'tecnologias'    => [ 'App multiplataforma', 'Modo sin conexión', 'Integración con el ERP', 'Panel de seguimiento' ],
			'duracion'       => '4 meses',
			'testimonio'     => 'Pendiente: testimonio textual del cliente, con su autorización.',
			'aviso_borrador' => 'CASO DE EJEMPLO. Reemplazar cliente, cifras y testimonio con datos reales y autorización antes de publicar.',
			'seo_title'      => 'Caso: pedidos en campo sin digitar dos veces',
			'seo_desc'       => 'Cómo una distribuidora eliminó la doble digitación de pedidos, redujo errores de precio y empezó a despachar el mismo día.',
		],
	],
];

<?php
/**
 * Artículo: Presupuesto de tecnología.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'presupuesto-de-tecnologia',
	'title'      => 'Presupuesto de tecnología: cómo construirlo y defenderlo ante la gerencia',
	'date'       => '2027-03-08 09:00:00',
	'categories' => [ 'transformacion-digital' ],
	'tags'       => [ 'Presupuesto', 'Gestión', 'Transformación digital', 'Costos' ],
	'servicio'   => 'transformacion-digital-empresas',
	'image'      => [
		'file' => 'post-presupuesto-tecnologia.jpg',
		'alt'  => 'Portada del artículo Presupuesto de tecnología: cómo defenderlo ante la gerencia — InnspiraTech',
	],
	'excerpt'    => 'Pedir "presupuesto para tecnología" es la forma más rápida de que lo recorten. Cómo estructurarlo por categorías, ponerle números al riesgo de no invertir y presentarlo en lenguaje de negocio.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Cada fin de año se repite la escena: el área de tecnología presenta una lista de licencias, servidores y proyectos; la gerencia ve un costo sin retorno evidente y recorta. Al año siguiente, la empresa paga el doble en emergencias.' ],
			[ 'p', 'El problema casi nunca es el monto: es cómo está construido y presentado el presupuesto. Esta es una estructura que funciona.' ],

			[ 'h2', 'Las cuatro categorías del presupuesto' ],
			[
				'table',
				[
					'head' => [ 'Categoría', 'Qué incluye', 'Cómo se justifica' ],
					'rows' => [
						[ 'Operar', 'Licencias, nube, soporte, mantenimiento, conectividad', 'Es el costo de que el negocio siga funcionando' ],
						[ 'Proteger', 'Seguridad, respaldos, continuidad, cumplimiento', 'Costo de un incidente frente a costo de evitarlo' ],
						[ 'Mejorar', 'Automatizaciones, integraciones, deuda técnica', 'Ahorro de horas y reducción de errores' ],
						[ 'Crecer', 'Nuevos productos, canales, expansión', 'Ingresos habilitados' ],
					],
				],
			],
			[ 'p', 'Separarlas cambia la conversación: "operar" y "proteger" no son negociables sin aceptar un riesgo explícito; "mejorar" y "crecer" compiten con otras inversiones del negocio y se defienden con retorno.' ],

			[ 'h2', 'Antes de pedir: haz el inventario' ],
			[
				'ul',
				[
					'Todas las licencias y suscripciones activas, con costo anual y número de usuarios reales.',
					'Servicios en la nube, con costo por ambiente y por proyecto.',
					'Contratos de soporte y sus fechas de renovación.',
					'Equipos y su antigüedad, con plan de reposición.',
					'Proveedores, con qué hacen y qué tan crítico es cada uno.',
				],
			],
			[ 'p', 'Este ejercicio suele pagar solo el presupuesto: es habitual encontrar licencias de personas que ya no están, servicios duplicados y ambientes de prueba encendidos hace meses.' ],

			[ 'h2', 'Ponle número al riesgo de no invertir' ],
			[ 'p', 'La gerencia entiende dinero y riesgo, no versiones ni arquitecturas. Traduce cada solicitud:' ],
			[
				'table',
				[
					'head' => [ 'Solicitud técnica', 'Cómo se presenta' ],
					'rows' => [
						[ 'Actualizar servidores y versiones sin soporte', 'Quedamos sin parches de seguridad; un incidente cuesta X y detiene la operación Y días' ],
						[ 'Automatizar un proceso', 'Libera N horas al mes, equivalentes a $X, y reduce errores que hoy cuestan $Y' ],
						[ 'Pagar deuda técnica', 'Hoy cada cambio cuesta el triple; con esta inversión recuperamos velocidad' ],
						[ 'Monitoreo y respaldos', 'Reducimos de horas a minutos el tiempo de recuperación ante una caída' ],
						[ 'Nuevo módulo o canal', 'Habilita $X en ventas o abre el segmento Y' ],
					],
				],
			],

			[ 'h2', 'Cuánto debería invertir una empresa' ],
			[ 'p', 'No existe un porcentaje universal: depende de qué tan dependiente sea tu operación del software y de en qué punto esté tu digitalización. En lugar de pelear por un porcentaje, presenta tres escenarios:' ],
			[
				'ul',
				[
					'<strong>Mínimo:</strong> solo operar y proteger. Qué se detiene y qué riesgos se aceptan.',
					'<strong>Recomendado:</strong> incluye mejoras con retorno demostrable en el año.',
					'<strong>Ambicioso:</strong> suma iniciativas de crecimiento con su impacto en ingresos.',
				],
			],
			[ 'p', 'Presentar escenarios convierte la decisión en una elección de nivel de riesgo y de ambición, no en un regateo de cifras.' ],

			[ 'h2', 'Errores que hacen que te recorten' ],
			[
				'ul',
				[
					'Presentar una lista de herramientas en lugar de resultados de negocio.',
					'Pedir todo junto sin prioridades: si no priorizas tú, lo hará quien recorte.',
					'Ignorar los costos recurrentes de lo que se compra este año.',
					'No incluir el costo del talento necesario para operar lo nuevo.',
					'Prometer ahorros que nadie va a medir después.',
				],
			],

			[ 'h2', 'Haz seguimiento durante el año' ],
			[ 'p', 'La mejor forma de que te aprueben el presupuesto del próximo año es mostrar qué pasó con el de este: cuánto se ejecutó, qué se logró y qué se aprendió. Un reporte trimestral breve con tres cifras —ejecución, resultados prometidos y resultados obtenidos— construye la credibilidad que después sostiene solicitudes mayores.' ],
			[ 'p', 'Para ordenar las iniciativas en el tiempo, revisa <a href="{url:post:hoja-de-ruta-tecnologica}">cómo construir una hoja de ruta tecnológica a 12 meses</a>, y si buena parte del gasto está en la nube, <a href="{url:post:reducir-costos-en-la-nube}">cómo reducir costos en la nube</a>. ¿Necesitas apoyo para construirlo y sustentarlo? Conoce nuestro servicio de <a href="{url:servicio:transformacion-digital-empresas}">transformación digital</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Qué porcentaje de los ingresos debe destinarse a tecnología?', 'Varía enormemente por sector y por modelo de negocio. Es más útil partir del inventario real de costos, sumar lo necesario para operar y proteger, y sustentar las mejoras con retorno que discutir un porcentaje abstracto.' ],
			[ '¿Cómo justifico inversiones que no generan ingresos?', 'Con costo evitado: tiempo de caída, horas de retrabajo, multas por incumplimiento o pérdida de clientes. Convierte el riesgo en un rango de pesos y una probabilidad; eso es lo que una gerencia puede decidir.' ],
			[ '¿Conviene comprar licencias anuales o mensuales?', 'Las anuales suelen tener descuento, pero atan el presupuesto. Para herramientas consolidadas conviene el plan anual; para lo que estás probando, la flexibilidad mensual vale su sobrecosto.' ],
			[ '¿Qué hago si me recortan el presupuesto?', 'Deja por escrito qué queda sin cubrir y qué riesgo implica, con cifras. No es una amenaza: es trazabilidad. Y prioriza siempre operar y proteger sobre crecer.' ],
		],
		'seo_title' => 'Presupuesto de tecnología: cómo defenderlo',
		'seo_desc'  => 'Cómo estructurar el presupuesto de tecnología en operar, proteger, mejorar y crecer, traducir el riesgo a dinero y presentar escenarios que la gerencia aprueba.',
	],
];

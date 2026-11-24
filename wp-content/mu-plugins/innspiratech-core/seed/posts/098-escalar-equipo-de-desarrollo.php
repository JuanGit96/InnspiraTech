<?php
/**
 * Artículo: Escalar un equipo de desarrollo.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'escalar-equipo-de-desarrollo',
	'title'      => 'Cómo escalar un equipo de desarrollo de 3 a 15 personas sin perder velocidad',
	'date'       => '2027-03-31 09:00:00',
	'categories' => [ 'talento-ti' ],
	'tags'       => [ 'Equipos', 'Escalamiento', 'Liderazgo', 'Procesos' ],
	'servicio'   => 'staff-augmentation',
	'image'      => [
		'file' => 'post-escalar-equipo.jpg',
		'alt'  => 'Portada del artículo Cómo escalar un equipo de desarrollo — InnspiraTech',
	],
	'excerpt'    => 'Sumar personas no suma velocidad de forma automática: al principio la resta. Qué debe existir antes de contratar, cómo organizar el crecimiento por etapas y qué procesos agregar en cada una.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Con tres personas todo funciona sin proceso: se habla, se decide y se hace. Con ocho, la comunicación informal empieza a fallar. Con quince, si no cambiaste nada, el equipo produce menos que cuando eran seis y nadie entiende por qué.' ],
			[ 'p', 'Escalar un equipo técnico no es contratar más rápido: es construir la estructura que permite que más gente aporte sin pisarse.' ],

			[ 'h2', 'Antes de contratar: la base' ],
			[
				'ul',
				[
					'<strong>Despliegue automatizado</strong> y ambiente de desarrollo que se levanta en una tarde.',
					'<strong>Pruebas automatizadas</strong> en lo crítico: sin red de seguridad, más manos significan más errores.',
					'<strong>Estándares escritos:</strong> estilo, revisión de código, definición de terminado.',
					'<strong>Documentación mínima</strong> para que alguien nuevo entienda el sistema.',
					'<strong>Tablero con el trabajo visible</strong> y prioridades claras.',
					'<strong>Un plan de incorporación</strong> con un primer objetivo alcanzable en la primera semana.',
				],
			],
			[ 'p', 'Contratar sin esto convierte a cada persona nueva en una carga para el equipo existente durante meses.' ],

			[ 'h2', 'Las etapas del crecimiento' ],
			[
				'table',
				[
					'head' => [ 'Tamaño', 'Qué cambia', 'Qué agregar' ],
					'rows' => [
						[ '3 a 5', 'Todos saben todo; comunicación directa', 'Estándares y pruebas; un responsable técnico' ],
						[ '6 a 8', 'Aparecen especializaciones y cuellos de botella', 'Revisión de código formal, ritual semanal, documentación' ],
						[ '9 a 12', 'La comunicación informal ya no alcanza', 'Dividir en dos equipos con dueño claro por área' ],
						[ '13 a 15', 'Coordinación entre equipos y dependencias', 'Roles de producto, ritmo de planificación, límites de arquitectura' ],
					],
				],
			],
			[ 'p', 'La transición más difícil es de ocho a diez: es cuando hay que aceptar que el liderazgo ya no puede estar en todos los detalles y hay que delegar de verdad.' ],

			[ 'h2', 'Cómo dividir el equipo' ],
			[ 'p', 'Divide por <strong>dominio de negocio</strong> —pedidos, catálogo, clientes— y no por capa técnica. Un equipo que puede entregar valor de punta a punta sin depender de otros avanza; un equipo de "los del backend" y otro de "los del frontend" se bloquean mutuamente en cada funcionalidad.' ],
			[ 'p', 'Cada equipo necesita un dueño de su área, límites claros en el código y capacidad de desplegar sin pedir permiso a otro equipo.' ],

			[ 'h2', 'El error de contratar demasiado rápido' ],
			[ 'p', 'Sumar cinco personas de golpe multiplica el tiempo de acompañamiento y frena a quienes ya producían. Un ritmo sostenible es incorporar una o dos personas por mes, dejando que cada una alcance autonomía antes de la siguiente. Si necesitas capacidad inmediata, un proveedor con perfiles ya evaluados suele ser mejor que una contratación apresurada.' ],

			[ 'h2', 'Los roles que aparecen al crecer' ],
			[
				'ul',
				[
					'<strong>Líder técnico</strong> desde el inicio: define estándares y arquitectura.',
					'<strong>Responsable de producto</strong> hacia las seis u ocho personas: sin alguien que priorice, el equipo construye lo que pide quien grita más fuerte.',
					'<strong>Calidad</strong> cuando el volumen de cambios supera la capacidad de probar bien.',
					'<strong>Infraestructura y operación</strong> cuando los despliegues y ambientes consumen tiempo de todos.',
					'<strong>Liderazgo de personas</strong> hacia las diez o doce: alguien debe ocuparse de carrera, desempeño y clima.',
				],
			],

			[ 'h2', 'Qué vigilar para saber si va bien' ],
			[
				'table',
				[
					'head' => [ 'Indicador', 'Señal de alerta' ],
					'rows' => [
						[ 'Tiempo de la solicitud a producción', 'Aumenta a medida que crece el equipo' ],
						[ 'Frecuencia de despliegues', 'Baja porque hay miedo a romper' ],
						[ 'Tiempo de incorporación', 'Una persona nueva tarda meses en aportar' ],
						[ 'Incidentes por cambio', 'Crecen más rápido que el equipo' ],
						[ 'Reuniones por persona', 'Más coordinación que trabajo' ],
					],
				],
			],
			[ 'p', 'Para los perfiles, revisa <a href="{url:post:roles-equipo-de-desarrollo}">roles de un equipo de producto</a>; para contratar, <a href="{url:post:como-contratar-desarrolladores-de-software}">cómo contratar desarrolladores</a>; y para reforzar sin contratar, <a href="{url:post:staff-augmentation-vs-outsourcing}">staff augmentation vs. outsourcing</a>. Conoce nuestro servicio de <a href="{url:servicio:staff-augmentation}">staff augmentation y reclutamiento TI</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Por qué el equipo produce menos al crecer?', 'Porque aumentan los canales de comunicación y el tiempo de coordinación, y porque las personas nuevas consumen tiempo de las que ya producían. Con estructura y autonomía por equipos, ese efecto se reduce.' ],
			[ '¿Cuántas personas por equipo?', 'Entre cinco y ocho suele ser el rango cómodo: suficiente para cubrir un dominio y lo bastante pequeño para coordinarse sin burocracia.' ],
			[ '¿Contrato junior o senior?', 'La mezcla importa. Un equipo solo de seniors es caro y a veces poco cohesionado; uno solo de juniors no avanza. Contrata primero la capacidad de guiar y después suma perfiles en formación.' ],
			[ '¿Cuándo conviene reforzar con un proveedor en vez de contratar?', 'Cuando la necesidad es inmediata, temporal o muy especializada, o cuando aún no tienes la estructura para incorporar bien a alguien nuevo. Da capacidad sin comprometer una contratación permanente.' ],
		],
		'seo_title' => 'Cómo escalar un equipo de desarrollo de 3 a 15',
		'seo_desc'  => 'Qué debe existir antes de contratar, cómo organizar el crecimiento por etapas, cómo dividir equipos por dominio, roles que aparecen e indicadores de alerta.',
	],
];

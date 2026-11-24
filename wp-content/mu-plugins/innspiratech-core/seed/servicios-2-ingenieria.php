<?php
/**
 * Contenido inicial: servicios de Ingeniería de Software (tomados de la plantilla HTML original).
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [

	[
		'slug'    => 'desarrollo-web-mvp',
		'title'   => 'Sitios web y MVPs ágiles',
		'order'   => 1,
		'terms'   => [ 'linea_servicio' => [ 'ingenieria-software' ] ],
		'excerpt' => 'Validamos ideas en tiempo récord: sitios corporativos en WordPress, landing pages de alta conversión y prototipos acelerados por IA.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Tu sitio web es tu mejor vendedor' ],
				[ 'p', 'Un sitio lento, desactualizado o difícil de usar espanta clientes. Construimos sitios y landing pages rápidas, seguras y optimizadas para posicionar en Google y convertir visitas en oportunidades de venta.' ],
				[ 'h2', 'Qué construimos' ],
				[
					'ul',
					[
						'<strong>Landing pages</strong> para campañas y lanzamientos, enfocadas en una sola acción.',
						'<strong>Sitios corporativos</strong> en WordPress con blog, formularios y panel autoadministrable.',
						'<strong>MVP</strong> (producto mínimo viable) para validar una idea de negocio con usuarios reales antes de invertir en grande.',
						'<strong>Rediseños</strong> de sitios existentes con migración cuidadosa del posicionamiento SEO.',
					],
				],
				[ 'h2', 'Incluido en nuestros proyectos web' ],
				[
					'ul',
					[
						'Diseño responsive para móvil, tableta y escritorio.',
						'SEO técnico: velocidad, datos estructurados, sitemap y metaetiquetas.',
						'Formularios conectados a tu correo o CRM y botón de WhatsApp.',
						'Capacitación para que tu equipo actualice el contenido.',
					],
				],
				[ 'p', 'Revisa los <a href="{url:archive:servicio}#planes">planes Fast-Track con precio</a> o solicita una propuesta a la medida.' ],
			]
		),
		'meta'    => [
			'icono'         => 'bolt',
			'precio_desde'  => '140',
			'tipo_servicio' => 'Desarrollo web',
			'cta'           => 'Cotizar mi sitio web',
			'kpis'          => [
				'Solicitudes de contacto que llegan al mes',
				'Porcentaje de visitas que terminan en contacto',
				'Tiempo de carga en móvil',
				'Semanas hasta tener la primera versión en línea',
			],
			'beneficios'    => [
				[ 'Lanzamiento rápido', 'Presencia digital profesional en días o pocas semanas, no meses.' ],
				[ 'Optimizado para Google', 'Estructura, velocidad y contenido pensados para posicionar.' ],
				[ 'Autoadministrable', 'Actualiza textos, imágenes y artículos sin depender de un programador.' ],
				[ 'Enfocado en conversión', 'Cada página guía al visitante hacia contactarte o comprar.' ],
			],
			'entregables'   => [
				'Arquitectura de contenidos y wireframes',
				'Diseño visual alineado a tu marca',
				'Desarrollo responsive y optimizado',
				'SEO técnico y analítica',
				'Publicación en tu hosting',
				'Capacitación de administración',
			],
			'faq'           => [
				[ '¿Cuánto cuesta una página web?', 'Nuestros planes Fast-Track empiezan desde USD 140 para una landing page express. Los sitios corporativos a medida y los MVP se cotizan según alcance. El dominio y el hosting se cotizan por separado.' ],
				[ '¿Podré editar el sitio yo mismo?', 'Sí. Entregamos sitios autoadministrables y una capacitación para que tu equipo gestione contenidos y publicaciones.' ],
				[ '¿Qué es un MVP?', 'Es la versión más simple de un producto que permite validar con usuarios reales si la idea resuelve un problema y tiene demanda, antes de invertir en el desarrollo completo.' ],
			],
			'seo_title'     => 'Desarrollo web, landing pages y MVPs | InnspiraTech',
			'seo_desc'      => 'Sitios corporativos en WordPress, landing pages de alta conversión y MVPs para validar ideas. Rápidos, optimizados para SEO y ventas. Desde USD 140.',
		],
	],

	[
		'slug'    => 'desarrollo-ecommerce',
		'title'   => 'Desarrollo de e-commerce',
		'order'   => 2,
		'terms'   => [ 'linea_servicio' => [ 'ingenieria-software' ] ],
		'excerpt' => 'Desde tiendas rápidas en WooCommerce hasta ecosistemas de alto rendimiento en Magento 2 (Adobe Commerce), VTEX y Shopify Plus para grandes volúmenes transaccionales.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Comercio electrónico que escala contigo' ],
				[ 'p', 'Diseñamos, migramos y optimizamos ecosistemas transaccionales. Elegimos la plataforma según tu volumen, catálogo, integraciones y presupuesto, no por preferencia personal.' ],
				[ 'h2', 'Plataformas que dominamos' ],
				[ 'h3', 'WooCommerce' ],
				[ 'p', 'Ideal para empezar a vender rápido con costos controlados y total flexibilidad sobre WordPress.' ],
				[ 'h3', 'Shopify y Shopify Plus' ],
				[ 'p', 'Operación simple, alta disponibilidad y un ecosistema de apps maduro para marcas en crecimiento.' ],
				[ 'h3', 'Magento 2 (Adobe Commerce)' ],
				[ 'p', 'Arquitectura robusta para catálogos grandes, múltiples tiendas, B2B y personalizaciones profundas.' ],
				[ 'h3', 'VTEX' ],
				[ 'p', 'Plataforma enterprise para retail omnicanal con marketplace, gestión de pedidos y alto tráfico.' ],
				[ 'h2', 'Servicios de e-commerce' ],
				[
					'ul',
					[
						'Tiendas nuevas y rediseños orientados a la conversión.',
						'Migraciones entre plataformas sin perder SEO ni datos.',
						'Integración con ERP, inventario, logística y facturación electrónica.',
						'Pasarelas de pago locales e internacionales.',
						'Optimización de velocidad y del proceso de pago.',
					],
				],
			]
		),
		'meta'    => [
			'icono'         => 'bag',
			'precio_desde'  => '350',
			'tipo_servicio' => 'Desarrollo de comercio electrónico',
			'cta'           => 'Cotizar mi tienda online',
			'kpis'          => [
				'Porcentaje de visitas que terminan en compra',
				'Ventas recuperadas de carritos abandonados',
				'Valor promedio del pedido',
				'Pedidos despachados el mismo día',
			],
			'beneficios'    => [
				[ 'Más ventas online', 'Experiencias de compra rápidas y un checkout sin fricción.' ],
				[ 'Operación integrada', 'Pedidos, inventario y facturación sincronizados con tus sistemas.' ],
				[ 'Preparado para picos', 'Arquitectura lista para temporadas de alto tráfico.' ],
				[ 'Crecimiento sin reescribir', 'Elegimos la plataforma correcta para tu siguiente etapa.' ],
			],
			'entregables'   => [
				'Selección de plataforma y arquitectura',
				'Diseño UX/UI de la tienda y del checkout',
				'Configuración de catálogo, envíos e impuestos',
				'Integraciones y pasarelas de pago',
				'Migración de datos y redirecciones SEO',
				'Pruebas de carga y acompañamiento al lanzamiento',
			],
			'faq'           => [
				[ '¿Qué plataforma de e-commerce me conviene?', 'Depende de tu volumen de pedidos, del tamaño del catálogo, de las integraciones y del presupuesto. WooCommerce o Shopify suelen ser ideales para empezar; Magento 2 o VTEX para operaciones complejas y de alto volumen.' ],
				[ '¿Pueden migrar mi tienda sin perder posicionamiento?', 'Sí. Planificamos redirecciones 301, migración de URLs, contenido y datos estructurados para proteger el SEO y el historial de clientes y pedidos.' ],
				[ '¿Cuánto cuesta una tienda online?', 'Nuestro plan E-Commerce Starter en WooCommerce empieza desde USD 350. Los proyectos enterprise se cotizan según alcance e integraciones.' ],
			],
			'seo_title'     => 'Desarrollo e-commerce: Magento, VTEX, Shopify y WooCommerce',
			'seo_desc'      => 'Tiendas online que venden: WooCommerce para empezar rápido y Magento 2, VTEX o Shopify Plus para alto volumen. Migraciones, integraciones y pasarelas de pago.',
		],
	],

	[
		'slug'    => 'desarrollo-software-a-medida',
		'title'   => 'Desarrollo de software a medida',
		'order'   => 3,
		'terms'   => [ 'linea_servicio' => [ 'ingenieria-software' ] ],
		'excerpt' => 'Construimos plataformas, APIs e integraciones desde cero con arquitecturas de alta concurrencia en Golang y backend estructurado en PHP (Laravel, Phalcon), listas para escalar.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Software que se adapta a tu negocio, no al revés' ],
				[ 'p', 'Cuando las herramientas del mercado no resuelven tu operación, construimos la solución exacta: plataformas internas, portales para clientes, sistemas de gestión, APIs e integraciones entre sistemas.' ],
				[ 'h2', 'Stack y arquitectura' ],
				[
					'ul',
					[
						'<strong>Golang</strong> para servicios de alta concurrencia y bajo consumo de recursos.',
						'<strong>PHP con Laravel y Phalcon</strong> para backends robustos y productivos.',
						'<strong>React y Node.js</strong> para interfaces modernas y funciones en tiempo real.',
						'Bases de datos relacionales y NoSQL, colas de mensajes y despliegue en la nube.',
					],
				],
				[ 'h2', 'Cómo aseguramos la calidad' ],
				[
					'ul',
					[
						'Arquitectura documentada y decisiones técnicas justificadas.',
						'Pruebas automatizadas y revisión de código.',
						'Integración y despliegue continuos.',
						'Entregas cortas y demostrables en cada iteración.',
						'Propiedad del código para tu empresa.',
					],
				],
			]
		),
		'meta'    => [
			'icono'         => 'code',
			'tipo_servicio' => 'Desarrollo de software a medida',
			'cta'           => 'Cotizar mi software',
			'kpis'          => [
				'Horas al mes en tareas manuales y digitación',
				'Errores que obligan a rehacer trabajo',
				'Tiempo de ciclo del proceso, de inicio a fin',
				'Costo por transacción atendida',
			],
			'beneficios'    => [
				[ 'Ventaja competitiva', 'Procesos únicos soportados por software hecho a tu medida.' ],
				[ 'Escalabilidad', 'Arquitecturas preparadas para crecer en usuarios y datos.' ],
				[ 'Integración total', 'Tu software conversa con los sistemas que ya usas.' ],
				[ 'Sin dependencia', 'Código documentado y de tu propiedad.' ],
			],
			'entregables'   => [
				'Levantamiento de requerimientos e historias de usuario',
				'Arquitectura y diseño técnico',
				'Desarrollo iterativo con demostraciones',
				'Pruebas automatizadas',
				'Despliegue y monitoreo',
				'Documentación y transferencia de conocimiento',
			],
			'faq'           => [
				[ '¿El código es de mi propiedad?', 'Sí. Al finalizar el proyecto entregamos el código fuente, la documentación y los accesos para que tu empresa tenga control total.' ],
				[ '¿Cómo manejan los cambios durante el proyecto?', 'Trabajamos por iteraciones cortas: priorizamos el backlog contigo en cada ciclo y ajustamos el alcance con transparencia sobre tiempos y costos.' ],
				[ '¿Ofrecen soporte después del lanzamiento?', 'Sí, mediante bolsa de horas o póliza de soporte mensual, además de evolución continua del producto.' ],
			],
			'seo_title'     => 'Desarrollo de software a medida | InnspiraTech',
			'seo_desc'      => 'Desarrollo de software a medida para empresas: plataformas web, APIs e integraciones en Golang, Laravel y Phalcon. Código limpio, documentado y escalable.',
		],
	],

	[
		'slug'    => 'desarrollo-apps-moviles',
		'title'   => 'Desarrollo de apps móviles',
		'order'   => 4,
		'terms'   => [ 'linea_servicio' => [ 'ingenieria-software' ] ],
		'excerpt' => 'Aplicaciones móviles nativas e híbridas para iOS y Android con Flutter, Swift y Kotlin, conectadas a tus sistemas y listas para publicar en las tiendas.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Apps que tus usuarios quieren abrir' ],
				[ 'p', 'Diseñamos y desarrollamos aplicaciones móviles para clientes, vendedores en campo y operaciones internas, con experiencias fluidas y conexión segura con tus sistemas.' ],
				[ 'h2', 'Tecnologías' ],
				[
					'ul',
					[
						'<strong>Flutter</strong> para una sola base de código en iOS y Android con rendimiento cercano al nativo.',
						'<strong>Swift</strong> y <strong>Kotlin</strong> cuando la app requiere capacidades nativas avanzadas.',
						'Backends y APIs escalables, notificaciones push, pagos y funciones sin conexión.',
					],
				],
				[ 'h2', 'Del concepto a las tiendas' ],
				[
					'ol',
					[
						'Descubrimiento y prototipo interactivo.',
						'Diseño UX/UI y validación con usuarios.',
						'Desarrollo iterativo con versiones de prueba.',
						'Publicación en App Store y Google Play.',
						'Analítica, soporte y nuevas versiones.',
					],
				],
			]
		),
		'meta'    => [
			'icono'         => 'device-mobile',
			'tipo_servicio' => 'Desarrollo de aplicaciones móviles',
			'cta'           => 'Cotizar mi app',
			'kpis'          => [
				'Usuarios que vuelven cada semana',
				'Tiempo por visita o registro en campo',
				'Pedidos tomados sin digitar dos veces',
				'Calificación de la app en las tiendas',
			],
			'beneficios'    => [
				[ 'Una base de código, dos plataformas', 'Flutter reduce tiempos y costos sin sacrificar calidad.' ],
				[ 'Experiencia de calidad', 'Interfaces rápidas, accesibles y fáciles de usar.' ],
				[ 'Integración con tu operación', 'La app se conecta con tu CRM, ERP o plataforma de e-commerce.' ],
				[ 'Mejora continua', 'Métricas de uso para priorizar cada nueva versión.' ],
			],
			'entregables'   => [
				'Prototipo interactivo',
				'Diseño UX/UI',
				'App para iOS y Android',
				'Backend o integración con APIs',
				'Publicación en tiendas',
				'Soporte posterior al lanzamiento',
			],
			'faq'           => [
				[ '¿Flutter o desarrollo nativo?', 'Flutter es ideal para la mayoría de apps de negocio porque comparte código entre iOS y Android. Recomendamos nativo cuando la app depende de funciones muy específicas del dispositivo o de máximo rendimiento gráfico.' ],
				[ '¿Ustedes publican la app en las tiendas?', 'Sí. Preparamos los recursos, cumplimos las políticas de App Store y Google Play y acompañamos el proceso de revisión.' ],
				[ '¿Cuánto cuesta desarrollar una app?', 'Depende de funcionalidades, integraciones y plataformas. Tras el descubrimiento entregamos una propuesta con alcance por fases para que puedas empezar con un MVP.' ],
			],
			'seo_title'     => 'Desarrollo de apps móviles iOS y Android | InnspiraTech',
			'seo_desc'      => 'Desarrollamos apps móviles para iOS y Android con Flutter, Swift y Kotlin: diseño UX, integración con tus sistemas, publicación en tiendas y soporte.',
		],
	],

	[
		'slug'    => 'mantenimiento-software',
		'title'   => 'Mantenimiento de software y deuda técnica',
		'order'   => 5,
		'terms'   => [ 'linea_servicio' => [ 'ingenieria-software' ] ],
		'excerpt' => 'Auditamos, refactorizamos y estabilizamos software heredado o desarrollado por terceros. Corregimos cuellos de botella y modernizamos la infraestructura.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Estabilizamos lo que otros dejaron a medias' ],
				[ 'p', 'Sistemas lentos, errores recurrentes, dependencias desactualizadas o un proveedor que desapareció. Tomamos el control de tu software con una auditoría honesta y un plan para dejarlo estable, seguro y mantenible.' ],
				[ 'h2', 'Qué incluye' ],
				[
					'ul',
					[
						'Auditoría de código, arquitectura, seguridad y rendimiento.',
						'Corrección de errores y de cuellos de botella en bases de datos.',
						'Actualización de versiones de lenguaje, frameworks y servidores.',
						'Refactorización progresiva para reducir la deuda técnica.',
						'Monitoreo, respaldos y atención de incidentes.',
					],
				],
				[ 'h2', 'Modalidades' ],
				[ 'p', '<strong>Bolsa de horas</strong> para necesidades puntuales o <strong>póliza de soporte mensual</strong> con tiempos de respuesta acordados y mantenimiento preventivo.' ],
			]
		),
		'meta'    => [
			'icono'         => 'cog',
			'tipo_servicio' => 'Mantenimiento y soporte de software',
			'cta'           => 'Solicitar auditoría',
			'kpis'          => [
				'Minutos de caída al mes',
				'Tiempo de recuperación cuando algo falla',
				'Incidentes que se repiten',
				'Vulnerabilidades conocidas sin corregir',
			],
			'beneficios'    => [
				[ 'Menos caídas y errores', 'Sistemas estables que no frenan la operación.' ],
				[ 'Seguridad al día', 'Dependencias actualizadas y vulnerabilidades corregidas.' ],
				[ 'Mejor rendimiento', 'Consultas y procesos optimizados para responder más rápido.' ],
				[ 'Continuidad', 'Documentación y conocimiento que ya no dependen de una sola persona.' ],
			],
			'entregables'   => [
				'Informe de auditoría con hallazgos priorizados',
				'Plan de estabilización',
				'Correcciones y actualizaciones',
				'Monitoreo y respaldos',
				'Reporte mensual de soporte',
			],
			'faq'           => [
				[ '¿Pueden trabajar con código que no desarrollaron ustedes?', 'Sí, es uno de nuestros servicios principales. Empezamos con una auditoría para entender el estado real del sistema antes de proponer cambios.' ],
				[ '¿Cuál es la diferencia entre bolsa de horas y póliza?', 'La bolsa de horas se consume según necesidades puntuales. La póliza mensual incluye mantenimiento preventivo, monitoreo y tiempos de respuesta acordados.' ],
				[ '¿Es mejor reescribir el sistema desde cero?', 'Rara vez es la primera opción. Normalmente conviene una modernización progresiva que reduzca riesgos y mantenga la operación funcionando.' ],
			],
			'seo_title'     => 'Mantenimiento de software y deuda técnica | InnspiraTech',
			'seo_desc'      => 'Auditoría, soporte y mantenimiento de software: corregimos fallas, reducimos deuda técnica y modernizamos sistemas heredados. Bolsa de horas o póliza mensual.',
		],
	],
];

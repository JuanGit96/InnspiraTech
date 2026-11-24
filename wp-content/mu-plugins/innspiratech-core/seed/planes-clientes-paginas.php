<?php
/**
 * Contenido inicial: planes con precio, clientes (de ejemplo) y páginas.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [

	'planes'   => [
		[
			'slug'    => 'landing-page-express',
			'title'   => 'Landing Page Express',
			'order'   => 1,
			'excerpt' => 'Presencia digital rápida usando plantillas optimizadas para conversión.',
			'meta'    => [
				'precio'          => 'Desde $140 USD',
				'precio_num'      => '140',
				'caracteristicas' => [ 'Template optimizado', 'Formulario de contacto', 'Botón flotante de WhatsApp', 'Despliegue en servidor' ],
			],
		],
		[
			'slug'    => 'sitio-corporativo-a-medida',
			'title'   => 'Sitio Corporativo a Medida',
			'order'   => 2,
			'excerpt' => 'Diseño único y estructurado para empresas que buscan diferenciación total.',
			'meta'    => [
				'precio'          => 'Desde $220 USD',
				'precio_num'      => '220',
				'caracteristicas' => [ 'Landing page estructurada a medida', 'Integración de blog corporativo', 'Formularios avanzados y WhatsApp', 'Capacitación de gestión (4 h)' ],
				'etiqueta'        => 'Más popular',
				'destacado'       => '1',
			],
		],
		[
			'slug'    => 'ecommerce-starter',
			'title'   => 'E-Commerce Starter',
			'order'   => 3,
			'excerpt' => 'Tienda online rápida y funcional en WooCommerce, lista para vender.',
			'meta'    => [
				'precio'          => 'Desde $350 USD',
				'precio_num'      => '350',
				'caracteristicas' => [ 'Configuración de WooCommerce', 'Pasarela de pagos básica', 'Páginas de producto y catálogo', 'Buscador integrado' ],
			],
		],
	],

	// Clientes de ejemplo: reemplázalos en el admin (Clientes) con los logos reales.
	'clientes' => [
		[ 'slug' => 'cliente-1', 'title' => 'Cliente 1', 'order' => 1, 'logo' => 'cliente-1.png', 'meta' => [ 'url' => 'https://example.com' ] ],
		[ 'slug' => 'cliente-2', 'title' => 'Cliente 2', 'order' => 2, 'logo' => 'cliente-2.png', 'meta' => [ 'url' => 'https://example.org' ] ],
		[ 'slug' => 'cliente-3', 'title' => 'Tu cliente 3', 'order' => 3, 'meta' => [ 'url' => 'https://example.net' ] ],
		[ 'slug' => 'cliente-4', 'title' => 'Tu cliente 4', 'order' => 4, 'meta' => [ 'url' => 'https://example.com' ] ],
		[ 'slug' => 'cliente-5', 'title' => 'Tu cliente 5', 'order' => 5, 'meta' => [ 'url' => 'https://example.org' ] ],
		[ 'slug' => 'cliente-6', 'title' => 'Tu cliente 6', 'order' => 6, 'meta' => [ 'url' => 'https://example.net' ] ],
	],

	'paginas'  => [
		[
			'slug'  => 'inicio',
			'title' => 'Inicio',
			'meta'  => [
				'faq' => [
					[ '¿Trabajan con empresas pequeñas o solo con grandes compañías?', 'Trabajamos con empresas de todos los tamaños. Para pymes tenemos planes con precio desde USD 140 y soluciones de rápido retorno; para medianas y grandes empresas desarrollamos proyectos enterprise, integraciones y equipos dedicados.' ],
					[ '¿Qué es un servidor MCP y para qué le sirve a mi empresa?', 'Es una conexión estándar entre asistentes de inteligencia artificial y tus sistemas. Permite que la IA consulte datos y ejecute tareas en tu ERP, CRM o base de datos de forma segura, e incluso puede venderse como producto a otras empresas.' ],
					[ '¿Cuánto cuesta un proyecto con InnspiraTech?', 'Depende del alcance. Los sitios web Fast-Track empiezan desde USD 140; el software a medida, los agentes de IA y los proyectos enterprise se cotizan tras un diagnóstico, con una propuesta clara de alcance, tiempos e inversión.' ],
					[ '¿Cuánto tiempo toma desarrollar un proyecto?', 'Una landing page puede estar lista en pocos días y un MVP en algunas semanas. Los proyectos de mayor complejidad se planifican por fases con entregas demostrables desde el inicio.' ],
					[ '¿Trabajan con clientes de otros países?', 'Sí. Trabajamos de forma remota con metodologías ágiles y comunicación constante durante todo el proyecto.' ],
					[ '¿Ofrecen soporte después de la entrega?', 'Sí. Ofrecemos mantenimiento y evolución continua mediante bolsa de horas o póliza de soporte mensual.' ],
				],
			],
		],
		[
			'slug'    => 'blog',
			'title'   => 'Blog',
			'excerpt' => 'Guías gratuitas y prácticas sobre inteligencia artificial, servidores MCP, software, marketing y transformación digital para pymes y grandes empresas.',
			'meta'    => [
				'seo_title' => 'Blog: IA, software y transformación digital | InnspiraTech',
				'seo_desc'  => 'Guías gratuitas y prácticas sobre inteligencia artificial, servidores MCP, software, marketing y transformación digital para pymes y grandes empresas.',
			],
		],
		[
			'slug'    => 'nosotros',
			'title'   => 'Nosotros',
			'excerpt' => 'Consultora de desarrollo de software, inteligencia artificial y transformación digital. Velocidad de startup con calidad enterprise.',
			'content' => it_seed_blocks(
				[
					[ 'p', 'En <strong>InnspiraTech</strong> no solo escribimos código: construimos soluciones que impulsan la transformación digital.' ],
					[ 'p', 'Nacimos con la visión de ser el puente entre las ideas complejas y su ejecución técnica impecable. Entendemos que en el mundo actual la velocidad y la calidad deben ir de la mano. Por eso nos especializamos tanto en lanzar MVPs ágiles como en sostener infraestructuras empresariales robustas.' ],
					[ 'p', 'Hoy sumamos a esa experiencia una apuesta decidida por la inteligencia artificial aplicada: servidores MCP, agentes de IA y automatización que conectan la tecnología con resultados de negocio medibles para empresas pequeñas, medianas y grandes.' ],
				]
			),
			'meta'    => [
				'seo_title' => 'Nosotros: consultora de software e IA | InnspiraTech',
				'seo_desc'  => 'Conoce InnspiraTech: consultora de desarrollo de software, inteligencia artificial y transformación digital. Velocidad de startup con calidad enterprise.',
			],
		],
		[
			'slug'    => 'contacto',
			'title'   => 'Contacto',
			'excerpt' => 'Cuéntanos tu proyecto de software, inteligencia artificial, e-commerce o marketing digital.',
			'content' => it_seed_blocks(
				[
					[ 'p', 'Tanto si necesitas validar un modelo de negocio en 72 horas como si buscas delegar la arquitectura crítica de un e-commerce enterprise, tenemos el equipo y el rigor técnico para ejecutarlo sin fricciones.' ],
				]
			),
			'meta'    => [
				'seo_title' => 'Contacto: cotiza tu proyecto de software o IA | InnspiraTech',
				'seo_desc'  => 'Cuéntanos tu proyecto de software, IA, e-commerce o marketing digital. Te contactamos para un diagnóstico y una propuesta con alcance, tiempos e inversión.',
			],
		],
		[
			'slug'    => 'academia',
			'title'   => 'Academia',
			'excerpt' => 'Próximamente: cursos y capacitaciones prácticas de inteligencia artificial, servidores MCP, desarrollo web y transformación digital.',
			'content' => it_seed_blocks(
				[
					[ 'h2', 'Aprende tecnología aplicada a resultados reales' ],
					[ 'p', 'InnspiraTech Academy nace de lo que hacemos todos los días con nuestros clientes. Serán programas prácticos, sin relleno, diseñados por ingenieros y consultores que implementan estas soluciones en empresas reales.' ],
					[ 'h2', 'Formatos' ],
					[
						'ul',
						[
							'<strong>Cursos online</strong> a tu ritmo, con ejercicios prácticos.',
							'<strong>Talleres en vivo</strong> para resolver dudas y construir en grupo.',
							'<strong>Capacitaciones in-company</strong> diseñadas para los retos de tu equipo.',
							'<strong>Mentorías</strong> para líderes técnicos y de negocio.',
						],
					],
					[ 'h2', 'Primeros temas' ],
					[
						'ul',
						[
							'Inteligencia artificial aplicada a los negocios.',
							'Cómo crear tu primer servidor MCP.',
							'Agentes de IA para empresas: diseño, riesgos y métricas.',
							'WordPress y desarrollo web profesional.',
							'Transformación digital para gerentes y líderes.',
						],
					],
					[ 'p', 'Mientras tanto, aprende gratis en nuestro <a href="{url:pagina:blog}">blog</a>.' ],
				]
			),
			'meta'    => [
				'faq'       => [
					[ '¿Cuándo empiezan los cursos?', 'Estamos preparando los primeros programas. Las personas en la lista de espera serán las primeras en conocer fechas, contenidos y beneficios de lanzamiento.' ],
					[ '¿Necesito conocimientos técnicos previos?', 'Habrá programas para distintos niveles: desde líderes de negocio sin experiencia técnica hasta desarrolladores que quieren especializarse en inteligencia artificial.' ],
					[ '¿Ofrecen capacitaciones para empresas?', 'Sí. Diseñamos capacitaciones in-company adaptadas a los retos, las herramientas y el nivel de cada equipo.' ],
				],
				'seo_title' => 'Cursos y capacitaciones de IA y tecnología | InnspiraTech',
				'seo_desc'  => 'Próximamente: cursos y capacitaciones prácticas de inteligencia artificial, servidores MCP, desarrollo web y transformación digital. Únete a la lista de espera.',
			],
		],
		[
			'slug'    => 'politica-de-privacidad',
			'title'   => 'Política de privacidad',
			'privacy' => true,
			'excerpt' => 'Cómo recopilamos, usamos y protegemos tus datos personales.',
			'content' => it_seed_blocks(
				[
					[ 'h2', '1. Responsable del tratamiento' ],
					[ 'p', 'InnspiraTech es responsable del tratamiento de los datos personales recolectados a través de este sitio web. Para cualquier asunto relacionado con tus datos puedes escribirnos a <a href="mailto:proyectos@innspiratech.com">proyectos@innspiratech.com</a>.' ],
					[ 'h2', '2. Datos que recopilamos' ],
					[
						'ul',
						[
							'<strong>Formularios de contacto y cotización:</strong> nombre, empresa, correo electrónico, teléfono, tamaño de la empresa, servicio de interés, presupuesto estimado y el mensaje que nos envías.',
							'<strong>Boletín y lista de espera de la Academia:</strong> correo electrónico y, de forma opcional, nombre, empresa y temas de interés.',
							'<strong>Datos de navegación:</strong> información técnica como dirección IP, tipo de navegador y páginas visitadas, obtenida mediante cookies o herramientas de analítica cuando están activas.',
						],
					],
					[ 'h2', '3. Finalidades' ],
					[
						'ul',
						[
							'Responder tus solicitudes y preparar propuestas comerciales.',
							'Enviarte contenido educativo, novedades y ofertas cuando te hayas suscrito.',
							'Informarte sobre el lanzamiento de cursos y capacitaciones si te uniste a la lista de espera.',
							'Mejorar el sitio web y medir el rendimiento de nuestros contenidos.',
							'Cumplir obligaciones legales y prevenir usos fraudulentos del sitio.',
						],
					],
					[ 'h2', '4. Autorización' ],
					[ 'p', 'Al marcar la casilla de aceptación en nuestros formularios nos otorgas tu autorización previa, expresa e informada para tratar tus datos con las finalidades descritas, de acuerdo con la normativa de protección de datos aplicable, como la Ley 1581 de 2012 y sus decretos reglamentarios en Colombia.' ],
					[ 'h2', '5. Tus derechos' ],
					[ 'p', 'Como titular de los datos puedes, en cualquier momento:' ],
					[
						'ul',
						[
							'Conocer, actualizar y rectificar tus datos personales.',
							'Solicitar prueba de la autorización otorgada.',
							'Ser informado sobre el uso que hemos dado a tus datos.',
							'Revocar la autorización y solicitar la supresión de tus datos cuando no exista un deber legal o contractual de conservarlos.',
							'Presentar quejas ante la autoridad de protección de datos competente.',
						],
					],
					[ 'p', 'Para ejercerlos, escríbenos a <a href="mailto:proyectos@innspiratech.com">proyectos@innspiratech.com</a> indicando tu nombre, tu solicitud y un medio de contacto.' ],
					[ 'h2', '6. Conservación y seguridad' ],
					[ 'p', 'Conservamos tus datos durante el tiempo necesario para cumplir las finalidades descritas y las obligaciones legales aplicables. Aplicamos medidas técnicas y organizativas razonables para protegerlos contra acceso no autorizado, pérdida o alteración.' ],
					[ 'h2', '7. Encargados y transferencias' ],
					[ 'p', 'Podemos apoyarnos en proveedores de servicios tecnológicos —como alojamiento web, correo electrónico, analítica o herramientas de gestión de clientes— que tratan datos por cuenta nuestra y bajo obligaciones de confidencialidad y seguridad. Algunos de estos proveedores pueden estar ubicados fuera de tu país. No vendemos tus datos personales.' ],
					[ 'h2', '8. Cookies' ],
					[ 'p', 'Este sitio puede usar cookies técnicas necesarias para su funcionamiento y, cuando están activas, cookies de analítica para entender cómo se usa. Puedes configurar tu navegador para bloquearlas o eliminarlas.' ],
					[ 'h2', '9. Cambios a esta política' ],
					[ 'p', 'Podemos actualizar esta política para reflejar cambios legales o en nuestros servicios. La versión vigente estará publicada siempre en esta página con su fecha de actualización.' ],
				]
			),
			'meta'    => [
				'seo_title' => 'Política de privacidad | InnspiraTech',
				'seo_desc'  => 'Conoce cómo InnspiraTech recopila, usa y protege tus datos personales, y cómo ejercer tus derechos como titular de la información.',
			],
		],
	],
];

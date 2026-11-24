<?php
/**
 * Contenido inicial: servicios de Inteligencia Artificial y Estrategia y Crecimiento.
 * Tokens {url:tipo:slug} se convierten en enlaces internos al sembrar.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [

	[
		'slug'    => 'desarrollo-servidores-mcp',
		'title'   => 'Desarrollo de servidores MCP',
		'order'   => 8,
		'terms'   => [ 'linea_servicio' => [ 'inteligencia-artificial' ] ],
		'excerpt' => 'Creamos servidores MCP (Model Context Protocol) que conectan Claude, ChatGPT y otros asistentes de IA con tus sistemas, y te ayudamos a convertirlos en un producto para venderlos.',
		'content' => it_seed_blocks(
			[
				[ 'h2', '¿Qué es un servidor MCP y por qué tu empresa lo necesita?' ],
				[ 'p', 'El <strong>Model Context Protocol (MCP)</strong> es un estándar abierto que permite que asistentes de inteligencia artificial —como Claude, ChatGPT, GitHub Copilot o Cursor— se conecten de forma segura con herramientas y datos externos. Un <strong>servidor MCP</strong> es la pieza que expone esas capacidades: consultar inventario, crear un pedido, buscar en tu base de conocimiento o generar un reporte.' ],
				[ 'p', 'Sin MCP, cada integración entre la IA y tus sistemas es un desarrollo aislado y difícil de mantener. Con MCP construyes la conexión una vez y la reutilizas en cualquier cliente compatible.' ],
				[ 'h2', 'Dos formas de ganar con MCP' ],
				[ 'h3', '1. Crear MCP para uso interno' ],
				[ 'p', 'Conectamos la IA con tu ERP, CRM, bases de datos, documentos o APIs internas para que tus equipos consulten información y ejecuten tareas en lenguaje natural, con permisos por rol y registro de cada acción.' ],
				[ 'h3', '2. Vender tu MCP como producto' ],
				[ 'p', 'Si tu empresa tiene datos, un software o una API valiosa, puedes convertirla en un servidor MCP comercial que otras empresas usen desde sus asistentes de IA. Te ayudamos a definir el modelo de monetización (suscripción, pago por uso o licencia), a implementar autenticación y medición de consumo, y a documentarlo para distribuirlo en directorios de servidores MCP.' ],
				[ 'h2', 'Cómo desarrollamos tu servidor MCP' ],
				[
					'ol',
					[
						'<strong>Descubrimiento:</strong> identificamos los casos de uso y las herramientas (tools), recursos y prompts que expondrá el servidor.',
						'<strong>Diseño seguro:</strong> definimos autenticación (OAuth cuando aplica), permisos mínimos, validación de entradas y límites de uso.',
						'<strong>Desarrollo y pruebas:</strong> implementamos con los SDK oficiales en TypeScript, Python o Go, con pruebas automatizadas y evaluación en clientes de IA reales.',
						'<strong>Despliegue:</strong> publicamos el servidor en modalidad local o remota (HTTP) en tu nube, con monitoreo y registros.',
						'<strong>Evolución:</strong> medimos el uso, optimizamos costos y agregamos nuevas herramientas.',
					],
				],
				[ 'h2', 'Casos de uso frecuentes' ],
				[
					'ul',
					[
						'Asistente comercial que consulta precios y stock, y crea cotizaciones en el CRM.',
						'Mesa de ayuda que busca en manuales y abre tickets automáticamente.',
						'Analítica conversacional sobre tu base de datos con consultas de solo lectura.',
						'Empresa SaaS que ofrece su API como servidor MCP para diferenciarse y abrir una nueva línea de ingresos.',
					],
				],
				[ 'p', '¿Quieres entender el protocolo a fondo antes de invertir? Lee nuestra guía <a href="{url:post:que-es-mcp-model-context-protocol}">¿Qué es MCP y cómo puede tu empresa monetizarlo?</a>' ],
			]
		),
		'meta'    => [
			'icono'         => 'plug',
			'tipo_servicio' => 'Desarrollo de servidores MCP (Model Context Protocol)',
			'cta'           => 'Cotizar mi servidor MCP',
			'kpis'          => [
				'Minutos para obtener una respuesta de tus sistemas',
				'Integraciones que ya no hay que construir una por una',
				'Consultas atendidas sin pasar por el área de sistemas',
				'Ingresos nuevos si vendes el acceso a tus datos',
			],
			'beneficios'    => [
				[ 'Una integración, muchos asistentes', 'Construyes la conexión una vez y funciona con cualquier cliente compatible con MCP.' ],
				[ 'Seguridad desde el diseño', 'Autenticación, permisos por rol, validación de datos y registro de cada acción de la IA.' ],
				[ 'Nueva línea de ingresos', 'Convierte tus datos o tu API en un producto que otras empresas pagan por usar.' ],
				[ 'Menos trabajo manual', 'Tus equipos consultan y ejecutan tareas en lenguaje natural, sin saltar entre sistemas.' ],
			],
			'entregables'   => [
				'Diagnóstico de casos de uso y arquitectura',
				'Servidor MCP con tools, resources y prompts',
				'Autenticación, permisos y límites de uso',
				'Pruebas automatizadas y evaluación con clientes de IA',
				'Despliegue en tu nube con monitoreo',
				'Documentación técnica y de uso',
				'Estrategia de monetización (si vas a vender tu MCP)',
			],
			'faq'           => [
				[ '¿Qué es un servidor MCP?', 'Es un programa que expone herramientas, datos y plantillas de instrucciones a asistentes de IA usando el Model Context Protocol, un estándar abierto para conectar la inteligencia artificial con sistemas externos de forma segura y reutilizable.' ],
				[ '¿Con qué asistentes de IA funciona un servidor MCP?', 'Con cualquier cliente compatible con el protocolo, como Claude, ChatGPT, GitHub Copilot, Cursor y muchos otros entornos de desarrollo y plataformas de agentes que adoptaron el estándar.' ],
				[ '¿Se puede vender un servidor MCP?', 'Sí. Puedes ofrecerlo por suscripción, cobrar por uso o incluirlo como beneficio de un plan premium de tu software. Para eso implementamos autenticación, medición de consumo y documentación comercial.' ],
				[ '¿Es seguro conectar la IA con mis sistemas?', 'Lo es si se diseña bien: aplicamos permisos mínimos, autenticación, validación de entradas, confirmación humana para acciones sensibles y registros de auditoría.' ],
				[ '¿Cuánto tarda desarrollar un servidor MCP?', 'Depende del número de herramientas e integraciones. Un primer servidor con pocas herramientas bien definidas puede estar listo en pocas semanas; te damos un cronograma exacto tras el diagnóstico.' ],
			],
			'seo_title'     => 'Desarrollo de servidores MCP: crea y vende tu MCP',
			'seo_desc'      => 'Servidores MCP a medida que conectan la IA con tu ERP, CRM o API. Te ayudamos a crearlos, asegurarlos y venderlos como producto. Cotiza tu MCP.',
		],
	],

	[
		'slug'    => 'agentes-ia-empresas',
		'title'   => 'Agentes de IA para empresas',
		'order'   => 7,
		'terms'   => [ 'linea_servicio' => [ 'inteligencia-artificial' ] ],
		'excerpt' => 'Diseñamos agentes de inteligencia artificial que atienden clientes, venden, califican leads y automatizan tareas de back-office conectados a tus sistemas, con supervisión humana.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Qué es un agente de IA (y en qué se diferencia de un chatbot)' ],
				[ 'p', 'Un chatbot tradicional responde con guiones predefinidos. Un <strong>agente de inteligencia artificial</strong> entiende el objetivo, consulta información en tus sistemas, decide los pasos a seguir y ejecuta acciones: registra un pedido, agenda una cita, actualiza el CRM o escala el caso a una persona cuando hace falta.' ],
				[ 'h2', 'Agentes que construimos' ],
				[ 'h3', 'Atención al cliente 24/7' ],
				[ 'p', 'Responden preguntas frecuentes, consultan el estado de pedidos, gestionan cambios y devoluciones por WhatsApp, web o correo, y entregan el caso a tu equipo con todo el contexto.' ],
				[ 'h3', 'Ventas y calificación de leads' ],
				[ 'p', 'Atienden prospectos al instante, hacen preguntas de calificación, recomiendan productos o planes, generan cotizaciones y agendan reuniones con tu equipo comercial.' ],
				[ 'h3', 'Operaciones y back-office' ],
				[ 'p', 'Clasifican documentos, extraen datos de facturas, concilian información entre sistemas y preparan reportes, reduciendo tareas repetitivas y errores de digitación.' ],
				[ 'h3', 'Conocimiento interno' ],
				[ 'p', 'Un asistente que responde con base en tus manuales, políticas y documentación, citando la fuente para que tu equipo pueda verificar la respuesta.' ],
				[ 'h2', 'Cómo logramos que el agente funcione en el mundo real' ],
				[
					'ul',
					[
						'<strong>Integración vía MCP y APIs:</strong> el agente trabaja con tus datos reales, no con respuestas genéricas. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-servidores-mcp}">desarrollo de servidores MCP</a>.',
						'<strong>Humano en el ciclo:</strong> las acciones sensibles requieren aprobación y los casos complejos se escalan a una persona.',
						'<strong>Evaluación continua:</strong> medimos precisión, tasa de resolución y satisfacción con conjuntos de prueba.',
						'<strong>Privacidad:</strong> minimizamos los datos que ve el modelo y cumplimos la normativa de protección de datos aplicable.',
						'<strong>Agnósticos de modelo:</strong> elegimos entre Claude, GPT, Gemini o modelos abiertos según calidad, costo y requisitos.',
					],
				],
				[ 'p', 'Si estás evaluando por dónde empezar, lee nuestra <a href="{url:post:agentes-de-ia-para-empresas}">guía práctica de agentes de IA para empresas</a>.' ],
			]
		),
		'meta'    => [
			'icono'         => 'sparkles',
			'tipo_servicio' => 'Desarrollo de agentes de inteligencia artificial',
			'cta'           => 'Diseñar mi agente de IA',
			'kpis'          => [
				'Tiempo de primera respuesta al cliente',
				'Conversaciones resueltas sin intervención humana',
				'Satisfacción del cliente al cerrar',
				'Costo por conversación atendida',
			],
			'beneficios'    => [
				[ 'Respuesta inmediata', 'Tus clientes reciben atención al instante, a cualquier hora y en su canal preferido.' ],
				[ 'Equipos enfocados', 'Las tareas repetitivas pasan al agente y tu equipo se concentra en lo que genera valor.' ],
				[ 'Escala sin crecer al mismo ritmo', 'Atiende picos de demanda sin multiplicar los costos operativos.' ],
				[ 'Decisiones con datos', 'Cada conversación deja métricas para mejorar procesos y productos.' ],
			],
			'entregables'   => [
				'Mapa del proceso y objetivos medibles',
				'Diseño de conversación, tono y reglas de negocio',
				'Integración con CRM, ERP, WhatsApp u otros canales',
				'Límites, permisos y escalamiento a humanos',
				'Panel de métricas y conjunto de pruebas',
				'Piloto controlado y plan de escalamiento',
			],
			'faq'           => [
				[ '¿Un agente de IA reemplaza a mi equipo?', 'No es la idea. Automatiza tareas repetitivas y de primer nivel para que tu equipo dedique más tiempo a casos complejos, ventas consultivas y relaciones con clientes.' ],
				[ '¿Qué pasa si el agente no sabe una respuesta?', 'Lo configuramos para reconocer sus límites: pide aclaración, consulta la fuente autorizada o escala a una persona con el historial de la conversación.' ],
				[ '¿Puede funcionar en WhatsApp?', 'Sí. Integramos agentes con WhatsApp Business Platform, chat web, correo y otros canales según tu operación.' ],
				[ '¿Cuánto cuesta implementar un agente de IA?', 'Depende de los canales, las integraciones y el volumen de conversaciones. Empezamos con un piloto acotado para validar resultados antes de escalar la inversión.' ],
				[ '¿Qué modelo de IA usan?', 'Somos agnósticos: evaluamos Claude, GPT, Gemini y modelos abiertos para cada caso según calidad, costo, latencia y requisitos de privacidad.' ],
			],
			'seo_title'     => 'Agentes de IA para empresas a la medida | InnspiraTech',
			'seo_desc'      => 'Agentes de IA para atención al cliente, ventas y operaciones, conectados a tu CRM, ERP y WhatsApp. Automatiza con control humano y resultados medibles.',
		],
	],

	[
		'slug'    => 'transformacion-digital-empresas',
		'title'   => 'Transformación digital para empresas',
		'order'   => 9,
		'terms'   => [ 'linea_servicio' => [ 'estrategia-crecimiento' ] ],
		'excerpt' => 'Acompañamos a empresas pequeñas, medianas y grandes a digitalizar procesos, datos y cultura con una hoja de ruta clara, priorizada por impacto y con resultados medibles.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Transformación digital no es comprar software' ],
				[ 'p', 'Es rediseñar cómo tu empresa opera, vende y toma decisiones usando tecnología. Muchas iniciativas fracasan porque empiezan por la herramienta y no por el problema. Nosotros empezamos por el negocio: procesos, personas, datos y objetivos.' ],
				[ 'h2', 'Nuestro enfoque en cuatro frentes' ],
				[ 'h3', 'Procesos' ],
				[ 'p', 'Mapeamos los flujos críticos, eliminamos pasos innecesarios y automatizamos lo repetitivo con integraciones, flujos de trabajo y agentes de IA.' ],
				[ 'h3', 'Datos' ],
				[ 'p', 'Unificamos la información dispersa en hojas de cálculo y sistemas aislados para que tengas indicadores confiables y tableros de decisión.' ],
				[ 'h3', 'Tecnología' ],
				[ 'p', 'Seleccionamos, integramos o desarrollamos las plataformas adecuadas —ERP, CRM, e-commerce, apps— sin sobredimensionar ni atarte a un proveedor.' ],
				[ 'h3', 'Personas y cultura' ],
				[ 'p', 'Acompañamos la adopción con capacitación, gestión del cambio y métricas de uso, porque una herramienta que nadie usa no transforma nada.' ],
				[ 'h2', 'Para pymes y para grandes empresas' ],
				[ 'p', 'En una <strong>pyme</strong>, la transformación suele empezar por victorias rápidas: ventas digitales, facturación y atención automatizadas, y un CRM bien usado. En una <strong>gran empresa</strong>, el reto es modernizar sistemas heredados, integrar áreas y gobernar la adopción de la inteligencia artificial a escala. Adaptamos el método, el ritmo y la inversión a cada realidad.' ],
				[ 'p', 'Si lideras una pyme, esta guía te será útil: <a href="{url:post:transformacion-digital-pymes}">Transformación digital en pymes: hoja de ruta en 5 etapas</a>.' ],
			]
		),
		'meta'    => [
			'icono'         => 'trending-up',
			'tipo_servicio' => 'Consultoría de transformación digital',
			'cta'           => 'Iniciar mi diagnóstico',
			'kpis'          => [
				'Procesos críticos que salen de las hojas de cálculo',
				'Días que tarda el cierre del mes',
				'Tiempo desde que se pide algo hasta que está disponible',
				'Decisiones tomadas con datos del día, no del mes pasado',
			],
			'beneficios'    => [
				[ 'Prioridades claras', 'Una hoja de ruta ordenada por impacto y esfuerzo, no por modas tecnológicas.' ],
				[ 'Operación más eficiente', 'Menos tareas manuales, menos errores y procesos más rápidos.' ],
				[ 'Decisiones basadas en datos', 'Indicadores confiables y tableros para dirigir el negocio.' ],
				[ 'Adopción real', 'Equipos capacitados y acompañados para usar las nuevas herramientas.' ],
			],
			'entregables'   => [
				'Diagnóstico de madurez digital',
				'Mapa de procesos y oportunidades de automatización',
				'Hoja de ruta priorizada con presupuesto estimado',
				'Arquitectura tecnológica recomendada',
				'Implementación por fases con indicadores',
				'Plan de capacitación y gestión del cambio',
			],
			'faq'           => [
				[ '¿Por dónde empieza la transformación digital de una empresa?', 'Por un diagnóstico: entender procesos, sistemas, datos y objetivos del negocio. Con eso definimos las iniciativas de mayor impacto y un orden lógico de implementación.' ],
				[ '¿La transformación digital es solo para grandes empresas?', 'No. Las pymes suelen obtener resultados más rápido porque tienen procesos más simples y pueden decidir con agilidad. La clave es empezar por victorias rápidas y medibles.' ],
				[ '¿Cuánto tiempo toma?', 'Es un proceso continuo, pero la hoja de ruta se construye en pocas semanas y las primeras mejoras suelen implementarse en los primeros meses.' ],
				[ '¿Incluye inteligencia artificial?', 'Cuando aporta valor, sí: automatización con agentes de IA, análisis de datos y asistentes internos, siempre con reglas claras de uso y privacidad.' ],
			],
			'seo_title'     => 'Transformación digital para empresas | InnspiraTech',
			'seo_desc'      => 'Consultoría de transformación digital para pymes y grandes empresas: diagnóstico, hoja de ruta, automatización, datos e IA con resultados medibles.',
		],
	],

	[
		'slug'    => 'marketing-digital',
		'title'   => 'Marketing digital para empresas',
		'order'   => 10,
		'terms'   => [ 'linea_servicio' => [ 'estrategia-crecimiento' ] ],
		'excerpt' => 'Estrategias de marketing digital orientadas a resultados: SEO, contenidos, publicidad en Google y redes, automatización y analítica para atraer clientes y vender más.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Marketing digital con mentalidad de ingeniería' ],
				[ 'p', 'Como empresa de software, abordamos el marketing como un sistema medible: cada visita, formulario y venta se rastrea para saber qué funciona y dónde invertir. Nada de métricas de vanidad.' ],
				[ 'h2', 'Qué hacemos' ],
				[ 'h3', 'SEO técnico y de contenidos' ],
				[ 'p', 'Auditamos la velocidad, la indexación y la estructura de tu sitio, investigamos palabras clave con intención de compra y creamos contenido que posiciona en Google y en buscadores con IA.' ],
				[ 'h3', 'Publicidad digital' ],
				[ 'p', 'Campañas en Google Ads, Meta Ads y LinkedIn Ads con segmentación precisa, pruebas A/B y optimización continua del costo por lead y por venta.' ],
				[ 'h3', 'Contenido y marca' ],
				[ 'p', 'Blog, guías descargables, casos de éxito y piezas para redes que educan a tu mercado y posicionan a tu empresa como referente.' ],
				[ 'h3', 'Automatización y CRM' ],
				[ 'p', 'Secuencias de correo, calificación de leads y flujos por WhatsApp conectados a tu CRM para convertir interesados en clientes sin perder oportunidades.' ],
				[ 'h3', 'Analítica y conversión' ],
				[ 'p', 'Configuramos Google Analytics 4, Google Tag Manager y tableros de control, y optimizamos landing pages para aumentar la tasa de conversión.' ],
				[ 'h2', 'Marketing B2B y B2C' ],
				[ 'p', 'Si vendes a empresas, diseñamos embudos para ciclos de venta largos con contenido experto y LinkedIn. Si vendes al consumidor final, priorizamos alcance, e-commerce y remarketing. En ambos casos conectamos marketing y ventas con datos.' ],
			]
		),
		'meta'    => [
			'icono'         => 'megaphone',
			'tipo_servicio' => 'Marketing digital',
			'cta'           => 'Impulsar mis ventas',
			'kpis'          => [
				'Leads calificados al mes',
				'Costo de adquirir un cliente nuevo',
				'Posiciones en Google en las búsquedas que venden',
				'Ingresos atribuidos al canal digital',
			],
			'beneficios'    => [
				[ 'Más clientes potenciales calificados', 'Atraemos a quien tiene intención real de compra, no solo tráfico.' ],
				[ 'Inversión medible', 'Sabes cuánto cuesta cada lead y cada venta, y en qué canal rinde más tu presupuesto.' ],
				[ 'Posicionamiento sostenible', 'El SEO y el contenido construyen un activo que sigue generando visitas.' ],
				[ 'Marketing y ventas conectados', 'Automatizaciones y CRM para que ningún interesado se quede sin respuesta.' ],
			],
			'entregables'   => [
				'Auditoría digital y de competencia',
				'Estrategia y plan de medios por objetivos',
				'Configuración de GA4, Tag Manager y conversiones',
				'Plan de contenidos y SEO',
				'Campañas de pauta optimizadas',
				'Reporte mensual con indicadores de negocio',
			],
			'faq'           => [
				[ '¿En cuánto tiempo se ven resultados?', 'La publicidad digital puede generar oportunidades desde las primeras semanas. El SEO es un trabajo acumulativo que suele mostrar avances claros en algunos meses, según la competencia de tu sector.' ],
				[ '¿Trabajan con presupuestos pequeños?', 'Sí. Para pymes priorizamos los canales con mejor retorno y escalamos la inversión a medida que los resultados lo justifican.' ],
				[ '¿Qué incluye el reporte mensual?', 'Indicadores de negocio como leads, costo por lead, conversiones y ventas atribuidas, además de las acciones realizadas y las recomendaciones para el mes siguiente.' ],
				[ '¿También optimizan para buscadores con IA?', 'Sí. Estructuramos el contenido, los datos estructurados y las respuestas a preguntas frecuentes para que tu marca pueda ser citada en buscadores tradicionales y en experiencias de búsqueda con IA.' ],
			],
			'seo_title'     => 'Agencia de marketing digital para empresas | InnspiraTech',
			'seo_desc'      => 'Marketing digital basado en datos para pymes y grandes empresas: SEO, contenidos, Google Ads, Meta y LinkedIn Ads, automatización y analítica GA4.',
		],
	],

	[
		'slug'    => 'automatizacion-procesos',
		'title'   => 'Automatización de procesos con IA',
		'order'   => 6,
		'terms'   => [ 'linea_servicio' => [ 'inteligencia-artificial' ] ],
		'excerpt' => 'Integramos tus CRM, flujos de WhatsApp, correo y sistemas internos para eliminar tareas manuales, reducir costos operativos y acelerar ventas.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Deja de copiar y pegar entre sistemas' ],
				[ 'p', 'Cada vez que alguien descarga un reporte, lo pega en otra plataforma o responde el mismo mensaje por enésima vez, tu empresa pierde tiempo y dinero. Automatizamos esos flujos conectando tus herramientas para que la información se mueva sola.' ],
				[ 'h2', 'Automatizaciones más solicitadas' ],
				[
					'ul',
					[
						'Leads de formularios y redes que llegan directo al CRM y se asignan al vendedor correcto.',
						'Flujos de WhatsApp para confirmaciones, recordatorios, seguimiento y posventa.',
						'Facturación, conciliación y reportes que se generan y envían automáticamente.',
						'Sincronización de inventario y pedidos entre tienda online, ERP y logística.',
						'Clasificación de correos y documentos con inteligencia artificial.',
					],
				],
				[ 'h2', 'La herramienta adecuada para cada caso' ],
				[ 'p', 'Usamos plataformas de automatización como n8n, Make o Zapier cuando son suficientes, y desarrollamos integraciones a medida con APIs cuando el volumen, la seguridad o la complejidad lo exigen. Si el proceso requiere criterio, lo complementamos con <a href="{url:servicio:agentes-ia-empresas}">agentes de IA</a>.' ],
			]
		),
		'meta'    => [
			'icono'         => 'refresh',
			'tipo_servicio' => 'Automatización de procesos empresariales',
			'cta'           => 'Automatizar mi negocio',
			'kpis'          => [
				'Horas administrativas liberadas al mes',
				'Días que tarda el recaudo de cartera',
				'Errores de digitación',
				'Porcentaje del proceso que corre sin intervención',
			],
			'beneficios'    => [
				[ 'Ahorro de horas de trabajo', 'Las tareas repetitivas se ejecutan solas, sin errores de digitación.' ],
				[ 'Respuesta más rápida', 'Clientes y prospectos reciben atención y seguimiento al instante.' ],
				[ 'Información sincronizada', 'Tus sistemas comparten los mismos datos, sin versiones distintas.' ],
				[ 'Procesos escalables', 'Atiendes más volumen sin crecer la carga operativa al mismo ritmo.' ],
			],
			'entregables'   => [
				'Levantamiento y priorización de procesos',
				'Diseño de flujos e integraciones',
				'Implementación y pruebas',
				'Monitoreo de errores y alertas',
				'Documentación y capacitación',
			],
			'faq'           => [
				[ '¿Qué procesos conviene automatizar primero?', 'Los repetitivos, de alto volumen y con reglas claras: captura de leads, seguimiento comercial, facturación, reportes y notificaciones. Suelen dar retorno más rápido.' ],
				[ '¿Necesito cambiar mis sistemas actuales?', 'Normalmente no. Conectamos las herramientas que ya usas mediante sus APIs o plataformas de integración.' ],
				[ '¿Qué diferencia hay entre automatización y un agente de IA?', 'La automatización sigue reglas fijas; un agente de IA interpreta información y toma decisiones dentro de límites definidos. Muchas soluciones combinan ambos.' ],
			],
			'seo_title'     => 'Automatización de procesos con IA | InnspiraTech',
			'seo_desc'      => 'Automatiza procesos empresariales: integraciones entre CRM, ERP, WhatsApp y correo, flujos de trabajo e IA para reducir costos operativos y acelerar ventas.',
		],
	],

	[
		'slug'    => 'consultoria-tecnologica',
		'title'   => 'Consultoría tecnológica y CTO as a Service',
		'order'   => 11,
		'terms'   => [ 'linea_servicio' => [ 'estrategia-crecimiento' ] ],
		'excerpt' => 'Asesoría técnica estratégica para decidir con confianza: arquitectura, selección de tecnología, costos en la nube, preparación para la IA y liderazgo técnico bajo demanda.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Decisiones técnicas con visión de negocio' ],
				[ 'p', 'Elegir mal una plataforma, un proveedor o una arquitectura puede costar años. Te acompañamos con criterio técnico independiente para que cada inversión tecnológica tenga sentido para tu negocio.' ],
				[ 'h2', 'Cómo te ayudamos' ],
				[
					'ul',
					[
						'<strong>CTO as a Service:</strong> liderazgo técnico bajo demanda para startups y empresas sin un director de tecnología de tiempo completo.',
						'<strong>Revisión de arquitectura</strong> y plan de escalabilidad.',
						'<strong>Selección de tecnología y proveedores</strong> con criterios objetivos.',
						'<strong>Optimización de costos en la nube.</strong>',
						'<strong>Preparación para la IA:</strong> datos, seguridad, casos de uso y gobierno.',
						'<strong>Due diligence técnico</strong> antes de invertir en un producto de software o adquirirlo.',
					],
				],
			]
		),
		'meta'    => [
			'icono'         => 'light-bulb',
			'tipo_servicio' => 'Consultoría tecnológica',
			'cta'           => 'Agendar consultoría',
			'kpis'          => [
				'Costo mensual de infraestructura y licencias',
				'Riesgos críticos abiertos',
				'Tiempo desde la idea hasta producción',
				'Cumplimiento de la hoja de ruta trimestral',
			],
			'beneficios'    => [
				[ 'Criterio independiente', 'Recomendaciones basadas en tu contexto, no en comisiones de proveedores.' ],
				[ 'Menos riesgo', 'Detectamos problemas de arquitectura y seguridad antes de que sean costosos.' ],
				[ 'Liderazgo sin nómina fija', 'Experiencia de nivel CTO en la medida que la necesitas.' ],
				[ 'Hoja de ruta técnica', 'Prioridades claras para tu equipo o tus proveedores.' ],
			],
			'entregables'   => [
				'Sesiones de diagnóstico',
				'Informe técnico con recomendaciones',
				'Hoja de ruta tecnológica',
				'Acompañamiento en decisiones y proveedores',
				'Seguimiento periódico',
			],
			'faq'           => [
				[ '¿Qué es un CTO as a Service?', 'Es un líder técnico externo que dedica un número de horas a tu empresa para definir la estrategia tecnológica, guiar al equipo y supervisar proveedores, sin el costo de una contratación de tiempo completo.' ],
				[ '¿Cómo sé si mi empresa está lista para la IA?', 'Evaluamos la calidad y disponibilidad de tus datos, tus procesos, la seguridad y los casos de uso con retorno para definir por dónde empezar.' ],
				[ '¿La consultoría incluye implementación?', 'Puede incluirla. Muchas empresas empiezan con la consultoría y luego implementan con nuestro equipo o con el suyo siguiendo la hoja de ruta.' ],
			],
			'seo_title'     => 'Consultoría tecnológica y CTO as a Service | InnspiraTech',
			'seo_desc'      => 'Consultoría tecnológica para empresas y startups: arquitectura de software, selección de tecnología, costos cloud, preparación para IA y CTO bajo demanda.',
		],
	],

	[
		'slug'    => 'staff-augmentation',
		'title'   => 'Staff augmentation y reclutamiento TI',
		'order'   => 12,
		'terms'   => [ 'linea_servicio' => [ 'estrategia-crecimiento' ] ],
		'excerpt' => 'Ingenieros validados técnicamente para integrarse a tus operaciones al instante y escalar la capacidad de tu equipo interno.',
		'content' => it_seed_blocks(
			[
				[ 'h2', 'Talento TI probado, cuando lo necesitas' ],
				[ 'p', 'Filtramos y seleccionamos ingenieros de software, arquitectos y perfiles TI especializados. Cada candidato pasa por un riguroso escrutinio técnico interno para que tu empresa reciba solo talento listo para aportar valor.' ],
				[ 'h2', 'Dos modalidades' ],
				[ 'h3', 'Staff augmentation' ],
				[ 'p', 'Profesionales que se integran a tu equipo y a tus rituales de trabajo por el tiempo que los necesites, sin procesos largos de contratación.' ],
				[ 'h3', 'Reclutamiento TI' ],
				[ 'p', 'Buscamos y evaluamos candidatos para que los contrates directamente, con esquema de <em>success fee</em>: pagas cuando la persona es seleccionada.' ],
				[ 'h2', 'Perfiles frecuentes' ],
				[
					'ul',
					[
						'Desarrolladores backend: Go, PHP, Node.js y Python.',
						'Desarrolladores frontend y móviles: React y Flutter.',
						'Especialistas en e-commerce: Magento, VTEX y Shopify.',
						'Ingenieros de datos e inteligencia artificial.',
						'Arquitectos de software y líderes técnicos.',
					],
				],
			]
		),
		'meta'    => [
			'icono'         => 'users',
			'tipo_servicio' => 'Staff augmentation y reclutamiento TI',
			'cta'           => 'Solicitar talento TI',
			'kpis'          => [
				'Días para incorporar un perfil al equipo',
				'Entregas completadas por ciclo',
				'Rotación del equipo asignado',
				'Costo real por hora productiva',
			],
			'beneficios'    => [
				[ 'Validación técnica real', 'Evaluamos habilidades con pruebas y entrevistas técnicas, no solo con la hoja de vida.' ],
				[ 'Agilidad', 'Presentamos perfiles alineados a tu stack sin que tu equipo cargue con todo el proceso.' ],
				[ 'Flexibilidad', 'Escala tu equipo según la demanda de tus proyectos.' ],
				[ 'Menos riesgo', 'Acompañamiento durante la integración del profesional.' ],
			],
			'entregables'   => [
				'Definición del perfil y de la prueba técnica',
				'Búsqueda y preselección',
				'Evaluación técnica y cultural',
				'Terna de candidatos',
				'Acompañamiento en la integración',
			],
			'faq'           => [
				[ '¿Cómo validan a los candidatos?', 'Combinamos entrevistas técnicas, pruebas prácticas relacionadas con tu stack y verificación de experiencia antes de presentarte cualquier perfil.' ],
				[ '¿Qué es el esquema de success fee?', 'Es un modelo en el que pagas la tarifa de reclutamiento solo cuando contratas al candidato seleccionado.' ],
				[ '¿Los profesionales pueden trabajar de forma remota?', 'Sí. Pueden trabajar de forma remota o híbrida y se integran a las herramientas y horarios de tu equipo.' ],
			],
			'seo_title'     => 'Staff augmentation y reclutamiento TI | InnspiraTech',
			'seo_desc'      => 'Refuerza tu equipo con ingenieros de software, arquitectos y perfiles TI validados técnicamente. Staff augmentation y reclutamiento con success fee.',
		],
	],
];

<?php
/**
 * Artículo: Agentes de IA para atención al cliente.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'agentes-de-ia-para-atencion-al-cliente',
	'title'      => 'Agentes de IA para atención al cliente: cómo implementarlos paso a paso',
	'date'       => '2027-01-22 09:00:00',
	'categories' => [ 'inteligencia-artificial' ],
	'tags'       => [ 'Agentes de IA', 'Atención al cliente', 'Servicio al cliente', 'WhatsApp' ],
	'servicio'   => 'agentes-ia-empresas',
	'image'      => [
		'file' => 'post-ia-atencion-cliente.jpg',
		'alt'  => 'Portada del artículo Agentes de IA para atención al cliente — InnspiraTech',
	],
	'excerpt'    => 'Un agente de IA bien implementado no solo responde preguntas: consulta pedidos, crea casos y sabe cuándo pasar la conversación a una persona. Guía de implementación con arquitectura, métricas y errores a evitar.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'La mayoría de empresas que "ya tienen un bot" en realidad tienen un menú de opciones que frustra a los clientes y termina con la frase "escribe ASESOR para hablar con una persona". Un agente de IA es otra cosa: entiende lo que el cliente pide, consulta tus sistemas, ejecuta acciones y sabe cuándo debe ceder el turno a un humano.' ],
			[ 'p', 'Esta guía explica cómo implementarlo en una empresa real, sin experimentos eternos y sin poner en riesgo la relación con tus clientes.' ],

			[ 'h2', 'Qué puede resolver un agente y con qué nivel de autonomía' ],
			[ 'p', 'El primer análisis no es técnico: es revisar qué te preguntan de verdad. Exporta las conversaciones de los últimos tres meses, agrúpalas por motivo y ordénalas por volumen. Casi siempre, entre cinco y ocho motivos concentran la mayor parte del tráfico.' ],
			[
				'table',
				[
					'head' => [ 'Tipo de solicitud', 'Ejemplo', 'Autonomía recomendada' ],
					'rows' => [
						[ 'Información', 'Horarios, cobertura, garantías, precios públicos', 'Total' ],
						[ 'Consulta sobre datos del cliente', '"¿Dónde va mi pedido?", "¿Cuál es mi saldo?"', 'Total, con autenticación' ],
						[ 'Gestión simple', 'Reagendar una cita, actualizar una dirección', 'Total, con confirmación explícita' ],
						[ 'Comercial', 'Cotizar, recomendar un plan, agendar demostración', 'Parcial: el agente prepara, la persona cierra' ],
						[ 'Reclamos y garantías', 'Producto defectuoso, cobro indebido', 'Solo clasificar y escalar' ],
						[ 'Situaciones sensibles', 'Salud, temas legales, cliente molesto', 'Traspaso inmediato a una persona' ],
					],
				],
			],

			[ 'h2', 'Qué necesita el agente para funcionar' ],
			[ 'p', 'Un agente útil se apoya en cuatro piezas. Si falta alguna, el resultado es un chatbot más.' ],
			[
				'ul',
				[
					'<strong>Base de conocimiento actualizada:</strong> políticas, catálogo, preguntas frecuentes y procedimientos, conectados mediante <a href="{url:post:rag-para-empresas}">RAG</a> para que responda con tu información y no con generalidades.',
					'<strong>Herramientas conectadas a tus sistemas:</strong> consultar un pedido en el ERP, crear un caso en el CRM, verificar disponibilidad en la agenda. Sin esto, el agente solo conversa.',
					'<strong>Reglas de negocio y límites:</strong> qué puede prometer, qué descuentos existen, cuándo debe escalar.',
					'<strong>Registro completo:</strong> cada conversación y cada acción quedan trazadas para auditar y mejorar.',
				],
			],

			[ 'h2', 'Implementación en seis pasos' ],
			[
				'ol',
				[
					'<strong>Analiza la demanda real.</strong> Cuantifica los motivos de contacto, el tiempo que consume cada uno y el canal por el que llegan.',
					'<strong>Ordena el conocimiento.</strong> Redacta respuestas oficiales y aprobadas para los motivos principales. Este paso suele tardar más que la parte técnica, y es el que decide la calidad.',
					'<strong>Conecta los sistemas.</strong> Define las acciones que el agente podrá ejecutar y con qué permisos. Empieza por las de solo lectura.',
					'<strong>Define tono, límites y traspaso.</strong> Cómo saluda, cómo se identifica como asistente virtual, qué nunca dice y en qué casos entrega la conversación.',
					'<strong>Pilotea en un canal y un horario.</strong> Por ejemplo, el chat del sitio fuera de horario laboral o WhatsApp para consultas de pedidos.',
					'<strong>Mide, corrige y amplía.</strong> Revisa conversaciones reales cada semana, ajusta el conocimiento y suma un motivo o un canal a la vez.',
				],
			],

			[ 'h2', 'El traspaso a una persona: donde se gana o se pierde la confianza' ],
			[ 'p', 'Un buen traspaso no reinicia la conversación. Cuando el agente escala, el asesor debe recibir el historial, el resumen del caso y los datos ya verificados. El cliente no debería repetir nada.' ],
			[ 'p', 'Define disparadores explícitos de traspaso: el cliente lo pide, se detecta molestia, el monto supera un umbral, el tema es legal o de salud, o el agente no logra resolver en dos intentos. Y avisa siempre qué va a pasar: "te comunico con un asesor, tu caso quedó registrado con el número 4821".' ],

			[ 'h2', 'Métricas que importan' ],
			[
				'table',
				[
					'head' => [ 'Métrica', 'Qué mide', 'Meta razonable' ],
					'rows' => [
						[ 'Resolución autónoma', 'Conversaciones cerradas sin intervención humana', 'Crece por etapas; empieza por los motivos simples' ],
						[ 'Satisfacción (CSAT)', 'Calificación del cliente al cerrar', 'Igual o mejor que la atención humana' ],
						[ 'Tiempo de primera respuesta', 'Cuánto espera el cliente', 'Segundos, en todos los canales' ],
						[ 'Tasa de traspaso', 'Conversaciones que pasan a una persona', 'Baja, pero nunca cero' ],
						[ 'Recontacto en 48 horas', 'Clientes que vuelven por lo mismo', 'Señal de respuestas incompletas' ],
						[ 'Costo por conversación', 'Modelo, herramientas e infraestructura', 'Comparado con el costo de atención actual' ],
					],
				],
			],
			[ 'p', 'Mide la línea base <strong>antes</strong> de lanzar. Sin ella no podrás demostrar el resultado ni justificar la siguiente fase.' ],

			[ 'h2', 'Riesgos y cómo controlarlos' ],
			[
				'table',
				[
					'head' => [ 'Riesgo', 'Control' ],
					'rows' => [
						[ 'Respuestas inventadas', 'Responder solo con documentos recuperados y declarar cuando no hay información' ],
						[ 'Promesas comerciales no autorizadas', 'Reglas explícitas de precios y descuentos; validación humana en cotizaciones' ],
						[ 'Datos personales expuestos', 'Autenticación antes de entregar información de cuenta y registro de accesos' ],
						[ 'Cliente atrapado en el bot', 'Salida a humano siempre disponible y visible' ],
						[ 'Costos que se disparan', 'Límites de uso, modelos distintos según la tarea y monitoreo por conversación' ],
					],
				],
			],

			[ 'h2', 'Cuánto tarda y qué se necesita del equipo' ],
			[ 'p', 'Un piloto con un canal y los motivos principales suele estar operando en pocas semanas. La parte que no se puede saltar es la participación de quien hoy atiende: nadie conoce mejor las preguntas reales, las excepciones y el tono de tu empresa. El equipo de atención no desaparece; deja de responder lo repetitivo y se concentra en los casos que sí requieren criterio.' ],
			[ 'p', 'Si aún estás evaluando el concepto, empieza por nuestra <a href="{url:post:agentes-de-ia-para-empresas}">guía de agentes de IA para empresas</a> y por <a href="{url:post:automatizar-whatsapp-business}">cómo automatizar WhatsApp Business</a>. Si quieres implementarlo, conoce nuestro servicio de <a href="{url:servicio:agentes-ia-empresas}">agentes de IA para empresas</a> o <a href="{url:pagina:contacto}">cuéntanos cuántas conversaciones atiendes al mes</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Un agente de IA reemplaza al equipo de atención al cliente?', 'En la práctica, reemplaza tareas repetitivas, no personas. El equipo pasa a resolver casos complejos, reclamos y oportunidades comerciales, que es donde su criterio aporta valor.' ],
			[ '¿Debo avisar que es un asistente virtual?', 'Sí. Identificarlo desde el saludo genera confianza, evita malentendidos y es lo que exigen cada vez más normativas de transparencia.' ],
			[ '¿Qué pasa si el agente no sabe algo?', 'Debe decirlo y ofrecer una salida: escalar a una persona o registrar el caso para responder después. Un agente que inventa hace más daño que uno que admite el límite.' ],
			[ '¿En qué canal conviene empezar?', 'En el que concentre más volumen repetitivo y tenga menor riesgo. Normalmente el chat del sitio web o WhatsApp para consultas de estado de pedidos o citas.' ],
		],
		'seo_title' => 'Agentes de IA para atención al cliente: guía práctica',
		'seo_desc'  => 'Cómo implementar un agente de IA en atención al cliente: casos que resuelve, arquitectura, traspaso a humanos, métricas, riesgos y errores frecuentes.',
	],
];

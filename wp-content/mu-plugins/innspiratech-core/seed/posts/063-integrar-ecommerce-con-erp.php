<?php
/**
 * Artículo: Integrar el e-commerce con el ERP.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'integrar-ecommerce-con-erp',
	'title'      => 'Cómo integrar tu e-commerce con el ERP: guía práctica',
	'date'       => '2027-01-08 09:00:00',
	'categories' => [ 'e-commerce' ],
	'tags'       => [ 'E-commerce', 'ERP', 'Integraciones', 'Inventario' ],
	'servicio'   => 'desarrollo-ecommerce',
	'image'      => [
		'file' => 'post-ecommerce-erp.jpg',
		'alt'  => 'Portada del artículo Cómo integrar tu e-commerce con el ERP — InnspiraTech',
	],
	'excerpt'    => 'Sin integración, alguien digita pedidos a mano y el inventario nunca cuadra. Qué datos sincronizar, en qué dirección y con qué frecuencia, más el manejo de errores que decide si la integración sobrevive.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Una tienda en línea sin integración funciona hasta cierto volumen. Después, alguien pasa el día copiando pedidos al sistema de gestión, el inventario del sitio no coincide con el de la bodega, y cada venta de un producto agotado se convierte en una llamada incómoda.' ],
			[ 'p', 'Integrar el e-commerce con el ERP resuelve eso, pero es un proyecto con más decisiones de negocio que técnicas. Estas son las que importan.' ],

			[ 'h2', 'Qué se sincroniza y en qué dirección' ],
			[
				'table',
				[
					'head' => [ 'Dato', 'Dirección', 'Frecuencia típica' ],
					'rows' => [
						[ 'Catálogo de productos', 'ERP → tienda', 'Diaria o al crear o modificar' ],
						[ 'Precios y listas', 'ERP → tienda', 'Diaria, o inmediata si cambian seguido' ],
						[ 'Existencias', 'ERP → tienda', 'Cada pocos minutos en productos con rotación' ],
						[ 'Pedidos', 'Tienda → ERP', 'Inmediata' ],
						[ 'Estado del pedido y guía de envío', 'ERP → tienda', 'Al cambiar de estado' ],
						[ 'Clientes', 'Bidireccional, con reglas claras', 'Al crear o actualizar' ],
						[ 'Facturas', 'ERP → tienda o al cliente', 'Al emitirse' ],
						[ 'Devoluciones', 'Bidireccional', 'Al ocurrir' ],
					],
				],
			],
			[ 'p', 'La regla de oro: <strong>un solo dueño por dato</strong>. Si el precio se puede editar en los dos lados, tarde o temprano habrá una diferencia y nadie sabrá cuál es la correcta.' ],

			[ 'h2', 'Las decisiones que hay que tomar antes de programar' ],
			[
				'ol',
				[
					'<strong>¿Se reserva inventario al agregar al carrito o al confirmar el pago?</strong> Reservar antes evita sobreventa pero puede bloquear stock; define un tiempo de expiración.',
					'<strong>¿Qué pasa si el ERP está caído</strong> cuando entra un pedido? Debe encolarse y reintentar, nunca perderse ni bloquear la venta.',
					'<strong>¿Se muestra el inventario exacto o por rangos?</strong> Publicar existencias reales puede ser información sensible en algunos negocios.',
					'<strong>¿Qué bodegas alimentan la tienda</strong> y con qué reserva de seguridad?',
					'<strong>¿Cómo se manejan promociones y descuentos:</strong> en la tienda, en el ERP o en ambos con reglas claras?',
					'<strong>¿Quién crea el cliente</strong> y cómo se identifican los duplicados?',
				],
			],

			[ 'h2', 'Arquitectura de la integración' ],
			[ 'p', 'Hay tres formas de conectar, en orden de robustez:' ],
			[
				'ul',
				[
					'<strong>Conector nativo</strong> del ERP o de la plataforma: rápido de implementar, con el límite de lo que el conector contempla.',
					'<strong>Orquestador de flujos</strong> (n8n, Make o similar): flexible y visible, ideal para volúmenes medianos y reglas cambiantes.',
					'<strong>Middleware desarrollado a la medida:</strong> una capa propia que traduce, valida, encola y registra. Es lo que recomendamos cuando el volumen es alto o las reglas son particulares.',
				],
			],
			[ 'p', 'En todos los casos, la integración debe tener <strong>cola con reintentos</strong>, <strong>registro completo</strong> de cada mensaje y una <strong>bandeja de errores</strong> que alguien revise a diario. Una integración sin visibilidad falla en silencio, y eso siempre se descubre tarde y con un cliente molesto.' ],

			[ 'h2', 'El manejo de errores decide todo' ],
			[
				'table',
				[
					'head' => [ 'Error', 'Qué debe pasar' ],
					'rows' => [
						[ 'ERP no responde', 'Encolar y reintentar con espera creciente; alertar tras N intentos' ],
						[ 'Producto inexistente en el ERP', 'Rechazar con mensaje claro y notificar al responsable del catálogo' ],
						[ 'Diferencia de precio entre sistemas', 'Registrar, respetar el precio cobrado al cliente y alertar' ],
						[ 'Cliente duplicado', 'Regla de identificación única y proceso de fusión' ],
						[ 'Pedido pagado sin inventario', 'Alerta inmediata al equipo, contacto proactivo y opciones al cliente' ],
					],
				],
			],

			[ 'h2', 'Cómo implementarlo sin frenar la venta' ],
			[ 'p', 'Por fases, siempre. Primero la bajada de pedidos al ERP, que es lo que más trabajo manual elimina. Luego la sincronización de existencias, que es lo que más problemas comerciales evita. Después catálogo y precios. Y al final estados, facturas y devoluciones.' ],
			[ 'p', 'Cada fase se prueba con un grupo reducido de productos y con conciliación manual en paralelo durante una o dos semanas. Ese doble trabajo temporal es lo que evita descubrir un error de configuración cuando ya afectó trescientos pedidos.' ],

			[ 'h2', 'Qué cambia en la operación' ],
			[ 'p', 'Una integración bien hecha no solo ahorra digitación: permite despachar el mismo día, reduce las devoluciones por errores de pedido, deja el inventario confiable para tomar decisiones de compra y libera al equipo de servicio de responder "déjeme consultar y le confirmo". Esos son los indicadores con los que conviene justificar el proyecto.' ],
			[ 'p', 'Si además estás cambiando de plataforma, revisa <a href="{url:post:migrar-tienda-online-sin-perder-seo}">cómo migrar tu tienda sin perder SEO</a>, y para el panorama general de conexiones entre sistemas, <a href="{url:post:integracion-de-sistemas-empresariales}">integraciones y APIs sin caos</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-ecommerce}">desarrollo de e-commerce</a> o <a href="{url:pagina:contacto}">cuéntanos qué ERP usas</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuánto tarda integrar una tienda con el ERP?', 'Una integración por fases con un ERP que tenga API suele tomar entre uno y tres meses hasta cubrir pedidos, existencias y catálogo. Los ERP sin API o muy personalizados alargan el plazo, porque primero hay que construir la capa de acceso.' ],
			[ '¿Qué pasa si mi ERP no tiene API?', 'Se puede integrar con archivos programados, vistas de base de datos o un servicio intermedio desarrollado sobre el ERP. Es menos elegante y más lento, pero funciona; lo importante es mantener la trazabilidad y el manejo de errores.' ],
			[ '¿Cada cuánto debe actualizarse el inventario?', 'Depende de la rotación. En productos de alta rotación, cada pocos minutos o por eventos; en catálogos estables, algunas veces al día puede bastar. Complementa siempre con una reserva de seguridad para absorber el desfase.' ],
			[ '¿Conviene un conector genérico o desarrollo a la medida?', 'Si tus procesos son estándar, un conector nativo es la vía más rápida y económica. El desarrollo a la medida se justifica cuando tienes reglas propias de precios, bodegas o facturación que ningún conector contempla.' ],
		],
		'seo_title' => 'Integrar tu e-commerce con el ERP: guía práctica',
		'seo_desc'  => 'Qué datos sincronizar entre tienda y ERP, en qué dirección y frecuencia, decisiones previas, arquitectura, manejo de errores e implementación por fases.',
	],
];

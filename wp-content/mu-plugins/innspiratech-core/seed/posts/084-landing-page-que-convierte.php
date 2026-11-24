<?php
/**
 * Artículo: Landing page que convierte.
 *
 * @package InnspiraTech\Core
 */

defined( 'ABSPATH' ) || exit;

return [
	'slug'       => 'landing-page-que-convierte',
	'title'      => 'Cómo hacer una landing page que convierta: estructura, ejemplos y errores',
	'date'       => '2027-06-09 09:00:00',
	'categories' => [ 'desarrollo-de-software' ],
	'tags'       => [ 'Landing page', 'Conversión', 'Copywriting', 'Campañas' ],
	'servicio'   => 'desarrollo-web-mvp',
	'image'      => [
		'file' => 'post-landing-page.jpg',
		'alt'  => 'Portada del artículo Cómo hacer una landing page que convierta — InnspiraTech',
	],
	'excerpt'    => 'Una landing page tiene un solo trabajo: convertir la visita en contacto. Estructura sección por sección, qué escribir en cada una, cuántos campos pedir y los errores que tiran la conversión.',
	'content'    => it_seed_blocks(
		[
			[ 'p', 'Si envías tráfico pagado a tu página de inicio, estás pagando por visitas que se dispersan entre veinte enlaces. Una landing page existe para lo contrario: una sola promesa, un solo objetivo, una sola acción.' ],
			[ 'p', 'Esta es la estructura que mejor funciona y el razonamiento detrás de cada sección.' ],

			[ 'h2', 'La estructura, sección por sección' ],
			[
				'ol',
				[
					'<strong>Titular:</strong> el resultado que obtiene el cliente, no el nombre de tu servicio. "Recibe cotizaciones de tu seguro en 5 minutos" vence a "Soluciones integrales de seguros".',
					'<strong>Subtítulo:</strong> para quién es y cómo funciona, en una frase.',
					'<strong>Llamada a la acción visible sin desplazar la pantalla,</strong> con un verbo concreto: "Solicitar diagnóstico", no "Enviar".',
					'<strong>Prueba social inmediata:</strong> logos de clientes, número de proyectos, una cifra verificable.',
					'<strong>Problema y solución:</strong> demuestra que entiendes su situación antes de hablar de ti.',
					'<strong>Beneficios en bloques:</strong> tres a cinco, orientados al resultado, no a la característica.',
					'<strong>Cómo funciona:</strong> tres pasos que eliminan la incertidumbre sobre qué pasa después.',
					'<strong>Testimonios o casos</strong> con nombre, empresa y resultado concreto.',
					'<strong>Precio o rango,</strong> si puedes darlo: filtra y genera confianza.',
					'<strong>Preguntas frecuentes:</strong> las objeciones reales que escucha tu equipo comercial.',
					'<strong>Cierre con la misma llamada a la acción</strong> y un recordatorio del beneficio.',
				],
			],

			[ 'h2', 'El formulario: cada campo cuesta' ],
			[ 'p', 'La regla es pedir lo mínimo para dar el siguiente paso. Nombre, correo o teléfono y, si acaso, una pregunta que califique. Si necesitas más información, pídela después del primer contacto, cuando ya hay relación.' ],
			[
				'ul',
				[
					'Explica qué pasará al enviar: "Te escribimos hoy mismo" reduce la ansiedad.',
					'Ofrece el canal que tu público prefiere: formulario, WhatsApp o llamada.',
					'Casilla de autorización de datos clara, con enlace a la política.',
					'Mensaje de confirmación y página de gracias, que además permite medir conversiones.',
					'Protección contra spam que no maltrate al usuario.',
				],
			],

			[ 'h2', 'Errores que tiran la conversión' ],
			[
				'table',
				[
					'head' => [ 'Error', 'Por qué duele' ],
					'rows' => [
						[ 'Menú completo del sitio', 'Cada enlace es una salida' ],
						[ 'Titular genérico', 'El visitante no sabe si es para él' ],
						[ 'Hablar de ti antes que de su problema', 'Pierdes los primeros segundos, que son los decisivos' ],
						[ 'Formulario largo', 'Cada campo adicional reduce los envíos' ],
						[ 'Página lenta o mal vista en móvil', 'La mayoría del tráfico llega desde el celular' ],
						[ 'Promesa distinta a la del anuncio', 'Rompe la continuidad y dispara el rebote' ],
						[ 'Sin prueba social', 'Nadie quiere ser el primero' ],
					],
				],
			],

			[ 'h2', 'Coherencia con la campaña' ],
			[ 'p', 'El mensaje del anuncio y el titular de la página deben decir lo mismo. Si el anuncio promete "diagnóstico gratis" y la página habla de "soluciones integrales", el visitante siente que llegó al lugar equivocado y se va. Una landing por campaña, o al menos por línea de servicio.' ],

			[ 'h2', 'Qué medir y qué probar' ],
			[ 'p', 'Mide tasa de conversión, calidad de los leads (no solo cantidad), porcentaje de visitantes que llega al formulario y velocidad en móvil. Para mejorar, prueba de a una cosa a la vez: primero el titular, que es lo que más impacto tiene; luego la llamada a la acción, la prueba social y el número de campos.' ],
			[ 'p', 'Y da tiempo a cada prueba: decidir con cincuenta visitas es decidir con ruido.' ],
			[ 'p', 'Para los textos, revisa <a href="{url:post:copywriting-para-sitios-web}">cómo escribir los textos de tu sitio para vender</a>; para mejorar de forma sistemática, <a href="{url:post:optimizacion-de-conversion-cro}">CRO: 12 pruebas para aumentar la conversión</a>; y para el tráfico, <a href="{url:post:google-ads-vs-meta-ads}">Google Ads o Meta Ads</a>. Conoce nuestro servicio de <a href="{url:servicio:desarrollo-web-mvp}">sitios web y MVPs ágiles</a> o <a href="{url:pagina:contacto}">escríbenos</a>.' ],
		]
	),
	'meta'       => [
		'faq'       => [
			[ '¿Cuál es una buena tasa de conversión para una landing page?', 'Varía mucho por sector, tipo de oferta y calidad del tráfico. En lugar de perseguir un número de referencia, mide tu línea base y trabaja para mejorarla, vigilando también la calidad de los leads.' ],
			[ '¿La landing debe estar en mi sitio o en una plataforma aparte?', 'Preferiblemente en tu dominio: aprovecha su autoridad, mantiene la medición unificada y evita depender de otra suscripción. Lo importante es que cargue rápido y tenga un solo objetivo.' ],
			[ '¿Cuántos campos debe tener el formulario?', 'Los mínimos para dar el siguiente paso, normalmente entre dos y cuatro. Si necesitas calificar, una sola pregunta bien elegida rinde más que cinco campos administrativos.' ],
			[ '¿Debo mostrar precios?', 'Si puedes dar un rango, sí: filtra a quien no puede pagarte y genera confianza en quien sí. Si el precio depende del alcance, explica de qué depende y da un punto de partida.' ],
		],
		'seo_title' => 'Cómo hacer una landing page que convierta',
		'seo_desc'  => 'Estructura de una landing page efectiva sección por sección, cuántos campos pedir, errores que reducen la conversión y qué medir y probar para mejorarla.',
	],
];

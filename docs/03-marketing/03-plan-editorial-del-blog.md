# Plan editorial del blog — 120 artículos (10 por servicio)

Mapa completo de contenidos de InnspiraTech. Cada artículo apunta a una búsqueda concreta y enlaza al servicio
que resuelve ese problema (clúster temático).

**Estado: 120 artículos escritos y cargados en WordPress.**

- **23 de arranque**: se publican solos entre el 20 de noviembre de 2026 y el 15 de enero de 2027, de modo que el
  sitio salga al aire con un blog ya poblado.
- **97 programados**: salen los lunes, miércoles y viernes a las 9:00 a. m. (hora de Bogotá),
  **del 20 de enero al 1 de septiembre de 2027**. No se programó nada el 25 de diciembre ni el 1 de enero.

El sitio sale a producción el **20 de enero de 2027**. Los artículos viajan dentro de la base de datos: al migrarla,
se siguen publicando solos.

## Por qué programados y no todos de una vez

1. **Google premia la constancia.** Tres artículos por semana durante siete meses son la señal de un sitio vivo.
   Publicar 120 textos el mismo día en un dominio nuevo encaja con lo que Google llama *abuso de contenido a escala*.
2. **Primero lo que vende.** Dentro de cada servicio salen antes los artículos de decisión (V), luego los
   comparativos (C) y al final los de descubrimiento (D). Los servicios se alternan para no repetir tema dos días seguidos.
3. **El blog alimenta las redes.** Cada semana, uno de los tres artículos es la pieza madre del contenido en
   YouTube, LinkedIn e Instagram. Ver [plan de contenidos](01-plan-de-contenidos.md).

## Qué pasa con los enlaces entre artículos

Muchos artículos enlazan a otros que todavía no han salido. El mu-plugin
(`innspiratech-core/publicacion.php`) muestra esos enlaces como texto normal y los activa solos el día que
sale el artículo de destino. Ningún artículo publicado apunta a una página que no existe.

## Checklist para el lanzamiento

Los pasos completos están en [pasar a producción](../04-operacion/02-pasar-a-produccion.md). Lo que afecta al blog:

1. **No cambies la zona horaria** del sitio (`America/Bogota`): las fechas programadas dependen de ella.
2. **Activa un cron real** en el servidor. WP-Cron depende de las visitas y con poco tráfico se retrasa.
3. **Copia `wp-content/uploads`**, donde están las 120 portadas.
4. **Envía el sitemap** en Google Search Console el día del lanzamiento.
5. **Revisa cada semana lo que va a salir** (*Entradas → Programadas*): precios, cifras y datos de la empresa.

### Intención de búsqueda

- **V (Venta):** está listo para contratar. Es la que más clientes trae.
- **C (Comparación):** está evaluando opciones. Muy buen momento para aparecer.
- **D (Descubrimiento):** está aprendiendo un concepto. Construye autoridad.

---

## 1. Sitios web y MVPs ágiles

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 30 nov 2026 | Qué es un MVP y cómo validar tu idea de negocio antes de invertir | `/blog/que-es-un-mvp/` | D | ✅ De arranque |
| 2 | 8 ene 2027 | ¿Cuánto cuesta una página web para empresas en 2026? Guía de precios y factores | `/blog/cuanto-cuesta-una-pagina-web/` | V | ✅ De arranque |
| 3 | 20 ene 2027 | Rediseño de sitio web sin perder posicionamiento: guía paso a paso | `/blog/rediseno-web-sin-perder-seo/` | V | 📅 Programado |
| 4 | 17 feb 2027 | Checklist antes de lanzar un sitio web corporativo: 50 puntos que no puedes olvidar | `/blog/checklist-lanzamiento-sitio-web/` | V | 📅 Programado |
| 5 | 17 mar 2027 | WordPress, Wix o Webflow: cuál elegir para el sitio de tu empresa | `/blog/wordpress-vs-wix-vs-webflow/` | C | 📅 Programado |
| 6 | 14 abr 2027 | Sitio web multiidioma: cuándo conviene y cómo implementarlo sin dañar el SEO | `/blog/sitio-web-multiidioma/` | C | 📅 Programado |
| 7 | 12 may 2027 | Hosting para empresas: cómo elegirlo y cuánto cuesta | `/blog/hosting-para-empresas/` | C | 📅 Programado |
| 8 | 9 jun 2027 | Cómo hacer una landing page que convierta: estructura, ejemplos y errores | `/blog/landing-page-que-convierte/` | D | 📅 Programado |
| 9 | 7 jul 2027 | Core Web Vitals: cómo acelerar tu sitio y por qué afecta tus ventas | `/blog/core-web-vitals/` | D | 📅 Programado |
| 10 | 4 ago 2027 | Cómo escribir los textos de tu sitio web para vender | `/blog/copywriting-para-sitios-web/` | D | 📅 Programado |

## 2. Desarrollo de e-commerce

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 7 dic 2026 | Abandono de carrito: 15 mejoras para vender más en tu tienda online | `/blog/abandono-de-carrito/` | D | ✅ De arranque |
| 2 | 30 dic 2026 | WooCommerce vs Shopify vs Magento vs VTEX: qué plataforma de e-commerce elegir | `/blog/woocommerce-vs-shopify-vs-magento-vs-vtex/` | C | ✅ De arranque |
| 3 | 27 ene 2027 | Cómo preparar tu tienda online para Black Friday y temporadas de alto tráfico | `/blog/preparar-tienda-online-temporadas-alto-trafico/` | D | 📅 Programado |
| 4 | 24 feb 2027 | Cómo migrar tu tienda online sin perder SEO ni ventas | `/blog/migrar-tienda-online-sin-perder-seo/` | V | 📅 Programado |
| 5 | 24 mar 2027 | Pasarelas de pago en Colombia: cómo elegir la mejor para tu tienda | `/blog/pasarelas-de-pago-colombia/` | C | 📅 Programado |
| 6 | 21 abr 2027 | Cómo integrar tu e-commerce con el ERP: guía práctica | `/blog/integrar-ecommerce-con-erp/` | V | 📅 Programado |
| 7 | 19 may 2027 | ¿Vender en marketplace o en tienda propia? Qué le conviene a tu marca | `/blog/marketplace-o-tienda-propia/` | C | 📅 Programado |
| 8 | 16 jun 2027 | E-commerce B2B: cómo vender a otras empresas en línea | `/blog/ecommerce-b2b/` | C | 📅 Programado |
| 9 | 14 jul 2027 | Fichas de producto que venden: estructura, SEO y ejemplos | `/blog/fichas-de-producto-que-venden/` | D | 📅 Programado |
| 10 | 11 ago 2027 | Envíos y logística en e-commerce: cómo configurarlos sin perder margen | `/blog/envios-y-logistica-ecommerce/` | D | 📅 Programado |

## 3. Desarrollo de software a medida

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 23 nov 2026 | Cómo elegir una empresa de desarrollo de software: 12 preguntas antes de firmar | `/blog/como-elegir-empresa-desarrollo-software/` | V | ✅ De arranque |
| 2 | 18 dic 2026 | Software a medida o software empaquetado: cómo decidir qué le conviene a tu empresa | `/blog/software-a-medida-vs-software-empaquetado/` | C | ✅ De arranque |
| 3 | 3 feb 2027 | Documentación técnica: qué debes exigirle a tu proveedor de software | `/blog/documentacion-tecnica-de-software/` | V | 📅 Programado |
| 4 | 3 mar 2027 | 8 señales de que tu software ya no soporta el crecimiento de tu empresa | `/blog/senales-software-no-escala/` | V | 📅 Programado |
| 5 | 31 mar 2027 | Golang, PHP o Node.js: cómo elegir la tecnología del backend de tu proyecto | `/blog/golang-vs-php-vs-nodejs/` | C | 📅 Programado |
| 6 | 28 abr 2027 | Cómo estimar un proyecto de software (y por qué fallan las estimaciones) | `/blog/como-estimar-un-proyecto-de-software/` | D | 📅 Programado |
| 7 | 26 may 2027 | Integraciones y APIs: cómo conectar los sistemas de tu empresa sin caos | `/blog/integracion-de-sistemas-empresariales/` | D | 📅 Programado |
| 8 | 23 jun 2027 | Arquitectura de software para empresas que quieren escalar | `/blog/arquitectura-de-software-escalable/` | D | 📅 Programado |
| 9 | 21 jul 2027 | Pruebas automatizadas: qué son y por qué te ahorran dinero | `/blog/pruebas-automatizadas-de-software/` | D | 📅 Programado |
| 10 | 18 ago 2027 | Cómo priorizar el backlog de tu producto digital | `/blog/como-priorizar-el-backlog/` | D | 📅 Programado |

## 4. Desarrollo de apps móviles

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 20 nov 2026 | Flutter vs desarrollo nativo: cuál elegir para la app de tu empresa | `/blog/flutter-vs-nativo/` | C | ✅ De arranque |
| 2 | 23 dic 2026 | ¿Cuánto cuesta desarrollar una app en 2026? Guía de costos, tiempos y factores | `/blog/cuanto-cuesta-desarrollar-una-app/` | V | ✅ De arranque |
| 3 | 10 feb 2027 | App para fuerza de ventas en campo: qué debe incluir y cómo implementarla | `/blog/app-para-fuerza-de-ventas/` | V | 📅 Programado |
| 4 | 10 mar 2027 | Mantenimiento de apps móviles: qué hacer cada año con iOS y Android | `/blog/mantenimiento-de-aplicaciones-moviles/` | V | 📅 Programado |
| 5 | 7 abr 2027 | ¿App nativa, aplicación web o PWA? Cuál necesita tu negocio | `/blog/app-nativa-web-app-o-pwa/` | C | 📅 Programado |
| 6 | 5 may 2027 | Cómo publicar una app en App Store y Google Play sin rechazos | `/blog/publicar-app-en-app-store-y-google-play/` | D | 📅 Programado |
| 7 | 2 jun 2027 | Notificaciones push que no molestan (y aumentan el uso de tu app) | `/blog/notificaciones-push-buenas-practicas/` | D | 📅 Programado |
| 8 | 30 jun 2027 | Cómo medir el éxito de tu app: las métricas que importan | `/blog/metricas-de-apps-moviles/` | D | 📅 Programado |
| 9 | 28 jul 2027 | Seguridad en apps móviles: lo mínimo que debes exigir | `/blog/seguridad-en-apps-moviles/` | D | 📅 Programado |
| 10 | 25 ago 2027 | Onboarding de una app: cómo lograr que el usuario vuelva | `/blog/onboarding-de-usuarios-app/` | D | 📅 Programado |

## 5. Mantenimiento de software y deuda técnica

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 27 nov 2026 | Mantenimiento de WordPress: checklist mensual para un sitio seguro, rápido y actualizado | `/blog/mantenimiento-wordpress-checklist/` | V | ✅ De arranque |
| 2 | 14 dic 2026 | Deuda técnica: qué es, cómo medirla y cuándo pagarla | `/blog/que-es-la-deuda-tecnica/` | D | ✅ De arranque |
| 3 | 15 feb 2027 | Sitio web hackeado: qué hacer paso a paso para recuperarlo | `/blog/sitio-web-hackeado-que-hacer/` | V | 📅 Programado |
| 4 | 15 mar 2027 | Auditoría de código: qué revisa, qué entrega y cuándo la necesitas | `/blog/auditoria-de-codigo/` | V | 📅 Programado |
| 5 | 12 abr 2027 | Tu proveedor de software desapareció: qué hacer para recuperar el control | `/blog/proveedor-de-software-desaparecio/` | V | 📅 Programado |
| 6 | 10 may 2027 | Póliza de soporte o bolsa de horas: qué modalidad conviene para tu software | `/blog/poliza-de-soporte-o-bolsa-de-horas/` | C | 📅 Programado |
| 7 | 7 jun 2027 | Cómo actualizar la versión de PHP sin romper tu sitio | `/blog/actualizar-version-de-php/` | D | 📅 Programado |
| 8 | 5 jul 2027 | Copias de seguridad: cómo aplicar la regla 3-2-1 en tu empresa | `/blog/copias-de-seguridad-web/` | D | 📅 Programado |
| 9 | 2 ago 2027 | Monitoreo: entérate antes que tus clientes de que tu sitio falló | `/blog/monitoreo-de-sitios-web/` | D | 📅 Programado |
| 10 | 30 ago 2027 | Base de datos lenta: primeros pasos para optimizarla | `/blog/optimizar-base-de-datos-lenta/` | D | 📅 Programado |

## 6. Automatización de procesos con IA

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 4 dic 2026 | n8n vs Make vs Zapier: qué herramienta elegir para automatizar procesos en tu empresa | `/blog/n8n-vs-make-vs-zapier/` | C | ✅ De arranque |
| 2 | 21 dic 2026 | Cómo automatizar WhatsApp Business para vender y atender más rápido | `/blog/automatizar-whatsapp-business/` | D | ✅ De arranque |
| 3 | 5 feb 2027 | Cómo automatizar la facturación y la conciliación bancaria de tu empresa | `/blog/automatizar-facturacion-y-conciliacion/` | V | 📅 Programado |
| 4 | 5 mar 2027 | Del formulario al CRM: cómo automatizar la captura y el seguimiento de leads | `/blog/automatizar-captura-de-leads-crm/` | V | 📅 Programado |
| 5 | 2 abr 2027 | Cómo integrar tu CRM con WhatsApp, el correo y tu sitio web | `/blog/integrar-crm-con-whatsapp/` | V | 📅 Programado |
| 6 | 30 abr 2027 | 10 procesos que toda pyme debería automatizar este año | `/blog/procesos-para-automatizar-en-una-empresa/` | D | 📅 Programado |
| 7 | 28 may 2027 | OCR e IA para leer facturas y documentos automáticamente | `/blog/lectura-automatica-de-facturas-ocr-ia/` | D | 📅 Programado |
| 8 | 25 jun 2027 | Automatización en recursos humanos: permisos, vacaciones e incorporación | `/blog/automatizacion-recursos-humanos/` | D | 📅 Programado |
| 9 | 23 jul 2027 | Cómo medir el retorno de una automatización antes y después de hacerla | `/blog/roi-de-la-automatizacion/` | D | 📅 Programado |
| 10 | 20 ago 2027 | Errores comunes al automatizar procesos (y cómo evitarlos) | `/blog/errores-al-automatizar-procesos/` | D | 📅 Programado |

## 7. Agentes de IA para empresas

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 16 dic 2026 | Qué es RAG y cómo crear un asistente de IA con los documentos de tu empresa | `/blog/rag-para-empresas/` | D | ✅ De arranque |
| 2 | 13 ene 2027 | Agentes de IA para empresas: guía práctica para pymes y grandes compañías | `/blog/agentes-de-ia-para-empresas/` | D | ✅ De arranque |
| 3 | 22 ene 2027 | Agentes de IA para atención al cliente: cómo implementarlos paso a paso | `/blog/agentes-de-ia-para-atencion-al-cliente/` | V | 📅 Programado |
| 4 | 19 feb 2027 | Agentes de ventas con IA: cómo calificar y dar seguimiento a tus leads | `/blog/agentes-de-ia-para-ventas/` | V | 📅 Programado |
| 5 | 19 mar 2027 | ¿Cuánto cuesta operar un agente de IA? Costos reales y cómo controlarlos | `/blog/cuanto-cuesta-un-agente-de-ia/` | V | 📅 Programado |
| 6 | 16 abr 2027 | Chatbot o agente de IA: diferencias y cuándo usar cada uno | `/blog/chatbot-vs-agente-de-ia/` | C | 📅 Programado |
| 7 | 14 may 2027 | Cómo evaluar un agente de IA antes y después de lanzarlo | `/blog/como-evaluar-un-agente-de-ia/` | D | 📅 Programado |
| 8 | 11 jun 2027 | Guardrails: cómo poner límites seguros a un agente de IA | `/blog/guardrails-para-agentes-de-ia/` | D | 📅 Programado |
| 9 | 9 jul 2027 | Humano en el ciclo: cuándo debe intervenir una persona en un proceso con IA | `/blog/human-in-the-loop-ia/` | D | 📅 Programado |
| 10 | 6 ago 2027 | Casos de uso de IA por industria: retail, salud, logística, manufactura y servicios | `/blog/casos-de-uso-de-ia-por-industria/` | D | 📅 Programado |

## 8. Desarrollo de servidores MCP

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 9 dic 2026 | Cómo crear un servidor MCP paso a paso: guía práctica con buenas prácticas de seguridad | `/blog/como-crear-un-servidor-mcp/` | D | ✅ De arranque |
| 2 | 15 ene 2027 | ¿Qué es MCP (Model Context Protocol) y cómo puede tu empresa monetizarlo? | `/blog/que-es-mcp-model-context-protocol/` | D | ✅ De arranque |
| 3 | 12 feb 2027 | Cómo conectar tu ERP con la IA usando MCP: arquitectura de referencia | `/blog/conectar-erp-con-ia-mcp/` | V | 📅 Programado |
| 4 | 12 mar 2027 | Cómo vender tu servidor MCP: modelos de precio y de negocio | `/blog/modelos-de-precio-para-vender-mcp/` | V | 📅 Programado |
| 5 | 9 abr 2027 | MCP, APIs o plugins: en qué se diferencian y cuándo usar cada uno | `/blog/mcp-vs-api-vs-plugins/` | C | 📅 Programado |
| 6 | 7 may 2027 | Seguridad en servidores MCP: permisos, autenticación y auditoría | `/blog/seguridad-en-servidores-mcp/` | D | 📅 Programado |
| 7 | 4 jun 2027 | Cómo diseñar buenas herramientas MCP para que la IA las use bien | `/blog/diseno-de-herramientas-mcp/` | D | 📅 Programado |
| 8 | 2 jul 2027 | Cómo publicar y distribuir tu servidor MCP | `/blog/publicar-servidor-mcp/` | D | 📅 Programado |
| 9 | 30 jul 2027 | MCP remoto: despliegue, escalado y monitoreo en producción | `/blog/mcp-remoto-despliegue/` | D | 📅 Programado |
| 10 | 27 ago 2027 | Errores comunes al construir servidores MCP | `/blog/errores-comunes-servidores-mcp/` | D | 📅 Programado |

## 9. Transformación digital

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 2 dic 2026 | Modernización de sistemas heredados: cómo transformar una gran empresa sin detener la operación | `/blog/modernizacion-sistemas-heredados/` | V | ✅ De arranque |
| 2 | 11 ene 2027 | Transformación digital en pymes: hoja de ruta en 5 etapas | `/blog/transformacion-digital-pymes/` | D | ✅ De arranque |
| 3 | 8 feb 2027 | Del Excel al sistema: cómo migrar procesos críticos sin frenar la operación | `/blog/migrar-de-excel-a-un-sistema/` | V | 📅 Programado |
| 4 | 8 mar 2027 | Presupuesto de tecnología: cómo construirlo y defenderlo ante la gerencia | `/blog/presupuesto-de-tecnologia/` | D | 📅 Programado |
| 5 | 5 abr 2027 | Cómo digitalizar la operación en campo: del papel y WhatsApp a una app | `/blog/digitalizar-operacion-en-campo/` | V | 📅 Programado |
| 6 | 3 may 2027 | Cómo elegir un ERP para tu empresa sin arrepentirte | `/blog/como-elegir-un-erp/` | C | 📅 Programado |
| 7 | 31 may 2027 | Diagnóstico de madurez digital: cómo evaluar a tu empresa en 6 dimensiones | `/blog/diagnostico-de-madurez-digital/` | D | 📅 Programado |
| 8 | 28 jun 2027 | Gestión del cambio: cómo lograr que tu equipo sí adopte la nueva tecnología | `/blog/gestion-del-cambio-tecnologico/` | D | 📅 Programado |
| 9 | 26 jul 2027 | Cómo construir un tablero de control gerencial que sí se use | `/blog/tablero-de-control-gerencial/` | D | 📅 Programado |
| 10 | 23 ago 2027 | Transformación digital en manufactura: por dónde empezar | `/blog/transformacion-digital-en-manufactura/` | D | 📅 Programado |

## 10. Marketing digital

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 11 dic 2026 | Plan de marketing digital para pymes: cómo crearlo paso a paso (con plantilla) | `/blog/plan-de-marketing-digital-para-pymes/` | D | ✅ De arranque |
| 2 | 6 ene 2027 | SEO para empresas B2B: cómo conseguir clientes desde Google paso a paso | `/blog/seo-para-empresas-b2b/` | D | ✅ De arranque |
| 3 | 1 feb 2027 | Google Ads o Meta Ads: dónde invertir según tu tipo de negocio | `/blog/google-ads-vs-meta-ads/` | C | 📅 Programado |
| 4 | 1 mar 2027 | Cómo aparecer en las respuestas de los buscadores con IA | `/blog/seo-para-buscadores-con-ia/` | D | 📅 Programado |
| 5 | 29 mar 2027 | Cómo escribir contenido que posicione en Google y convierta en clientes | `/blog/como-escribir-contenido-seo/` | D | 📅 Programado |
| 6 | 26 abr 2027 | Google Business Profile: guía completa para empresas y negocios locales | `/blog/google-business-profile/` | D | 📅 Programado |
| 7 | 24 may 2027 | Email marketing para empresas: del primer envío a la automatización | `/blog/email-marketing-para-empresas/` | D | 📅 Programado |
| 8 | 21 jun 2027 | Cómo medir el retorno de tu marketing digital con GA4 y tu CRM | `/blog/medir-roi-marketing-digital/` | D | 📅 Programado |
| 9 | 19 jul 2027 | CRO: 12 pruebas para aumentar la conversión de tu sitio web | `/blog/optimizacion-de-conversion-cro/` | D | 📅 Programado |
| 10 | 16 ago 2027 | SEO local: cómo aparecer en el mapa y en las búsquedas de tu ciudad | `/blog/seo-local/` | D | 📅 Programado |

## 11. Consultoría tecnológica y CTO as a Service

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 4 ene 2027 | Cómo implementar inteligencia artificial en una empresa sin fracasar: guía para líderes | `/blog/como-implementar-inteligencia-artificial-en-una-empresa/` | D | ✅ De arranque |
| 2 | 29 ene 2027 | CTO as a Service: qué es, qué hace y cuándo lo necesita tu empresa | `/blog/cto-as-a-service/` | V | 📅 Programado |
| 3 | 26 feb 2027 | Due diligence técnico: qué revisar antes de invertir o comprar software | `/blog/due-diligence-tecnico/` | V | 📅 Programado |
| 4 | 26 mar 2027 | Cómo reducir costos en la nube sin afectar el servicio | `/blog/reducir-costos-en-la-nube/` | V | 📅 Programado |
| 5 | 23 abr 2027 | Hoja de ruta tecnológica a 12 meses: cómo construirla y sostenerla | `/blog/hoja-de-ruta-tecnologica/` | D | 📅 Programado |
| 6 | 21 may 2027 | Cómo elegir el stack tecnológico de tu producto digital | `/blog/como-elegir-stack-tecnologico/` | C | 📅 Programado |
| 7 | 18 jun 2027 | ¿Equipo de tecnología interno o proveedor externo? Cuándo construir tu propia área | `/blog/equipo-de-tecnologia-interno-o-proveedor/` | C | 📅 Programado |
| 8 | 16 jul 2027 | Política de uso de IA en la empresa: qué debe incluir (con estructura base) | `/blog/politica-de-uso-de-ia/` | D | 📅 Programado |
| 9 | 13 ago 2027 | Ciberseguridad para pymes: lo mínimo indispensable | `/blog/ciberseguridad-para-pymes/` | D | 📅 Programado |
| 10 | 1 sep 2027 | Cómo saber si tu empresa está lista para la inteligencia artificial | `/blog/empresa-lista-para-la-ia/` | D | 📅 Programado |

## 12. Staff augmentation y reclutamiento TI

| # | Publicación | Título | URL | Intención | Estado |
|---|---|---|---|---|---|
| 1 | 25 nov 2026 | Cómo contratar desarrolladores de software sin equivocarte: proceso, pruebas y errores comunes | `/blog/como-contratar-desarrolladores-de-software/` | V | ✅ De arranque |
| 2 | 28 dic 2026 | Staff augmentation vs outsourcing vs contratación directa: qué modelo le conviene a tu empresa | `/blog/staff-augmentation-vs-outsourcing/` | C | ✅ De arranque |
| 3 | 25 ene 2027 | ¿Cuánto cuesta un desarrollador en Latinoamérica? Tarifas, salarios y costo real | `/blog/cuanto-cuesta-un-desarrollador-en-latinoamerica/` | V | 📅 Programado |
| 4 | 22 feb 2027 | Cómo evaluar perfiles técnicos si no eres técnico | `/blog/evaluar-perfiles-tecnicos-sin-ser-tecnico/` | V | 📅 Programado |
| 5 | 22 mar 2027 | Nearshore: ventajas de contratar desarrollo en tu misma zona horaria | `/blog/nearshore-desarrollo-de-software/` | C | 📅 Programado |
| 6 | 19 abr 2027 | Cómo integrar y gestionar equipos de desarrollo remotos sin perder productividad | `/blog/gestionar-equipos-remotos-de-desarrollo/` | D | 📅 Programado |
| 7 | 17 may 2027 | Pruebas técnicas para programadores: cómo diseñarlas para que sean justas y útiles | `/blog/pruebas-tecnicas-para-programadores/` | D | 📅 Programado |
| 8 | 14 jun 2027 | Retención de talento TI: qué valoran realmente los desarrolladores | `/blog/retencion-de-talento-ti/` | D | 📅 Programado |
| 9 | 12 jul 2027 | Cómo escalar un equipo de desarrollo de 3 a 15 personas sin perder velocidad | `/blog/escalar-equipo-de-desarrollo/` | D | 📅 Programado |
| 10 | 9 ago 2027 | Roles de un equipo de producto digital: quién hace qué | `/blog/roles-equipo-de-desarrollo/` | D | 📅 Programado |

---

## Calendario de publicación (97 programados)


### Enero 2027

| Fecha | Título | Servicio |
|---|---|---|
| mié 20 | Rediseño de sitio web sin perder posicionamiento: guía paso a paso | Sitios web y MVPs ágiles |
| vie 22 | Agentes de IA para atención al cliente: cómo implementarlos paso a paso | Agentes de IA para empresas |
| lun 25 | ¿Cuánto cuesta un desarrollador en Latinoamérica? Tarifas, salarios y costo real | Staff augmentation y reclutamiento TI |
| mié 27 | Cómo preparar tu tienda online para Black Friday y temporadas de alto tráfico | Desarrollo de e-commerce |
| vie 29 | CTO as a Service: qué es, qué hace y cuándo lo necesita tu empresa | Consultoría tecnológica y CTO as a Service |

### Febrero 2027

| Fecha | Título | Servicio |
|---|---|---|
| lun 1 | Google Ads o Meta Ads: dónde invertir según tu tipo de negocio | Marketing digital |
| mié 3 | Documentación técnica: qué debes exigirle a tu proveedor de software | Desarrollo de software a medida |
| vie 5 | Cómo automatizar la facturación y la conciliación bancaria de tu empresa | Automatización de procesos con IA |
| lun 8 | Del Excel al sistema: cómo migrar procesos críticos sin frenar la operación | Transformación digital |
| mié 10 | App para fuerza de ventas en campo: qué debe incluir y cómo implementarla | Desarrollo de apps móviles |
| vie 12 | Cómo conectar tu ERP con la IA usando MCP: arquitectura de referencia | Desarrollo de servidores MCP |
| lun 15 | Sitio web hackeado: qué hacer paso a paso para recuperarlo | Mantenimiento de software y deuda técnica |
| mié 17 | Checklist antes de lanzar un sitio web corporativo: 50 puntos que no puedes olvidar | Sitios web y MVPs ágiles |
| vie 19 | Agentes de ventas con IA: cómo calificar y dar seguimiento a tus leads | Agentes de IA para empresas |
| lun 22 | Cómo evaluar perfiles técnicos si no eres técnico | Staff augmentation y reclutamiento TI |
| mié 24 | Cómo migrar tu tienda online sin perder SEO ni ventas | Desarrollo de e-commerce |
| vie 26 | Due diligence técnico: qué revisar antes de invertir o comprar software | Consultoría tecnológica y CTO as a Service |

### Marzo 2027

| Fecha | Título | Servicio |
|---|---|---|
| lun 1 | Cómo aparecer en las respuestas de los buscadores con IA | Marketing digital |
| mié 3 | 8 señales de que tu software ya no soporta el crecimiento de tu empresa | Desarrollo de software a medida |
| vie 5 | Del formulario al CRM: cómo automatizar la captura y el seguimiento de leads | Automatización de procesos con IA |
| lun 8 | Presupuesto de tecnología: cómo construirlo y defenderlo ante la gerencia | Transformación digital |
| mié 10 | Mantenimiento de apps móviles: qué hacer cada año con iOS y Android | Desarrollo de apps móviles |
| vie 12 | Cómo vender tu servidor MCP: modelos de precio y de negocio | Desarrollo de servidores MCP |
| lun 15 | Auditoría de código: qué revisa, qué entrega y cuándo la necesitas | Mantenimiento de software y deuda técnica |
| mié 17 | WordPress, Wix o Webflow: cuál elegir para el sitio de tu empresa | Sitios web y MVPs ágiles |
| vie 19 | ¿Cuánto cuesta operar un agente de IA? Costos reales y cómo controlarlos | Agentes de IA para empresas |
| lun 22 | Nearshore: ventajas de contratar desarrollo en tu misma zona horaria | Staff augmentation y reclutamiento TI |
| mié 24 | Pasarelas de pago en Colombia: cómo elegir la mejor para tu tienda | Desarrollo de e-commerce |
| vie 26 | Cómo reducir costos en la nube sin afectar el servicio | Consultoría tecnológica y CTO as a Service |
| lun 29 | Cómo escribir contenido que posicione en Google y convierta en clientes | Marketing digital |
| mié 31 | Golang, PHP o Node.js: cómo elegir la tecnología del backend de tu proyecto | Desarrollo de software a medida |

### Abril 2027

| Fecha | Título | Servicio |
|---|---|---|
| vie 2 | Cómo integrar tu CRM con WhatsApp, el correo y tu sitio web | Automatización de procesos con IA |
| lun 5 | Cómo digitalizar la operación en campo: del papel y WhatsApp a una app | Transformación digital |
| mié 7 | ¿App nativa, aplicación web o PWA? Cuál necesita tu negocio | Desarrollo de apps móviles |
| vie 9 | MCP, APIs o plugins: en qué se diferencian y cuándo usar cada uno | Desarrollo de servidores MCP |
| lun 12 | Tu proveedor de software desapareció: qué hacer para recuperar el control | Mantenimiento de software y deuda técnica |
| mié 14 | Sitio web multiidioma: cuándo conviene y cómo implementarlo sin dañar el SEO | Sitios web y MVPs ágiles |
| vie 16 | Chatbot o agente de IA: diferencias y cuándo usar cada uno | Agentes de IA para empresas |
| lun 19 | Cómo integrar y gestionar equipos de desarrollo remotos sin perder productividad | Staff augmentation y reclutamiento TI |
| mié 21 | Cómo integrar tu e-commerce con el ERP: guía práctica | Desarrollo de e-commerce |
| vie 23 | Hoja de ruta tecnológica a 12 meses: cómo construirla y sostenerla | Consultoría tecnológica y CTO as a Service |
| lun 26 | Google Business Profile: guía completa para empresas y negocios locales | Marketing digital |
| mié 28 | Cómo estimar un proyecto de software (y por qué fallan las estimaciones) | Desarrollo de software a medida |
| vie 30 | 10 procesos que toda pyme debería automatizar este año | Automatización de procesos con IA |

### Mayo 2027

| Fecha | Título | Servicio |
|---|---|---|
| lun 3 | Cómo elegir un ERP para tu empresa sin arrepentirte | Transformación digital |
| mié 5 | Cómo publicar una app en App Store y Google Play sin rechazos | Desarrollo de apps móviles |
| vie 7 | Seguridad en servidores MCP: permisos, autenticación y auditoría | Desarrollo de servidores MCP |
| lun 10 | Póliza de soporte o bolsa de horas: qué modalidad conviene para tu software | Mantenimiento de software y deuda técnica |
| mié 12 | Hosting para empresas: cómo elegirlo y cuánto cuesta | Sitios web y MVPs ágiles |
| vie 14 | Cómo evaluar un agente de IA antes y después de lanzarlo | Agentes de IA para empresas |
| lun 17 | Pruebas técnicas para programadores: cómo diseñarlas para que sean justas y útiles | Staff augmentation y reclutamiento TI |
| mié 19 | ¿Vender en marketplace o en tienda propia? Qué le conviene a tu marca | Desarrollo de e-commerce |
| vie 21 | Cómo elegir el stack tecnológico de tu producto digital | Consultoría tecnológica y CTO as a Service |
| lun 24 | Email marketing para empresas: del primer envío a la automatización | Marketing digital |
| mié 26 | Integraciones y APIs: cómo conectar los sistemas de tu empresa sin caos | Desarrollo de software a medida |
| vie 28 | OCR e IA para leer facturas y documentos automáticamente | Automatización de procesos con IA |
| lun 31 | Diagnóstico de madurez digital: cómo evaluar a tu empresa en 6 dimensiones | Transformación digital |

### Junio 2027

| Fecha | Título | Servicio |
|---|---|---|
| mié 2 | Notificaciones push que no molestan (y aumentan el uso de tu app) | Desarrollo de apps móviles |
| vie 4 | Cómo diseñar buenas herramientas MCP para que la IA las use bien | Desarrollo de servidores MCP |
| lun 7 | Cómo actualizar la versión de PHP sin romper tu sitio | Mantenimiento de software y deuda técnica |
| mié 9 | Cómo hacer una landing page que convierta: estructura, ejemplos y errores | Sitios web y MVPs ágiles |
| vie 11 | Guardrails: cómo poner límites seguros a un agente de IA | Agentes de IA para empresas |
| lun 14 | Retención de talento TI: qué valoran realmente los desarrolladores | Staff augmentation y reclutamiento TI |
| mié 16 | E-commerce B2B: cómo vender a otras empresas en línea | Desarrollo de e-commerce |
| vie 18 | ¿Equipo de tecnología interno o proveedor externo? Cuándo construir tu propia área | Consultoría tecnológica y CTO as a Service |
| lun 21 | Cómo medir el retorno de tu marketing digital con GA4 y tu CRM | Marketing digital |
| mié 23 | Arquitectura de software para empresas que quieren escalar | Desarrollo de software a medida |
| vie 25 | Automatización en recursos humanos: permisos, vacaciones e incorporación | Automatización de procesos con IA |
| lun 28 | Gestión del cambio: cómo lograr que tu equipo sí adopte la nueva tecnología | Transformación digital |
| mié 30 | Cómo medir el éxito de tu app: las métricas que importan | Desarrollo de apps móviles |

### Julio 2027

| Fecha | Título | Servicio |
|---|---|---|
| vie 2 | Cómo publicar y distribuir tu servidor MCP | Desarrollo de servidores MCP |
| lun 5 | Copias de seguridad: cómo aplicar la regla 3-2-1 en tu empresa | Mantenimiento de software y deuda técnica |
| mié 7 | Core Web Vitals: cómo acelerar tu sitio y por qué afecta tus ventas | Sitios web y MVPs ágiles |
| vie 9 | Humano en el ciclo: cuándo debe intervenir una persona en un proceso con IA | Agentes de IA para empresas |
| lun 12 | Cómo escalar un equipo de desarrollo de 3 a 15 personas sin perder velocidad | Staff augmentation y reclutamiento TI |
| mié 14 | Fichas de producto que venden: estructura, SEO y ejemplos | Desarrollo de e-commerce |
| vie 16 | Política de uso de IA en la empresa: qué debe incluir (con estructura base) | Consultoría tecnológica y CTO as a Service |
| lun 19 | CRO: 12 pruebas para aumentar la conversión de tu sitio web | Marketing digital |
| mié 21 | Pruebas automatizadas: qué son y por qué te ahorran dinero | Desarrollo de software a medida |
| vie 23 | Cómo medir el retorno de una automatización antes y después de hacerla | Automatización de procesos con IA |
| lun 26 | Cómo construir un tablero de control gerencial que sí se use | Transformación digital |
| mié 28 | Seguridad en apps móviles: lo mínimo que debes exigir | Desarrollo de apps móviles |
| vie 30 | MCP remoto: despliegue, escalado y monitoreo en producción | Desarrollo de servidores MCP |

### Agosto 2027

| Fecha | Título | Servicio |
|---|---|---|
| lun 2 | Monitoreo: entérate antes que tus clientes de que tu sitio falló | Mantenimiento de software y deuda técnica |
| mié 4 | Cómo escribir los textos de tu sitio web para vender | Sitios web y MVPs ágiles |
| vie 6 | Casos de uso de IA por industria: retail, salud, logística, manufactura y servicios | Agentes de IA para empresas |
| lun 9 | Roles de un equipo de producto digital: quién hace qué | Staff augmentation y reclutamiento TI |
| mié 11 | Envíos y logística en e-commerce: cómo configurarlos sin perder margen | Desarrollo de e-commerce |
| vie 13 | Ciberseguridad para pymes: lo mínimo indispensable | Consultoría tecnológica y CTO as a Service |
| lun 16 | SEO local: cómo aparecer en el mapa y en las búsquedas de tu ciudad | Marketing digital |
| mié 18 | Cómo priorizar el backlog de tu producto digital | Desarrollo de software a medida |
| vie 20 | Errores comunes al automatizar procesos (y cómo evitarlos) | Automatización de procesos con IA |
| lun 23 | Transformación digital en manufactura: por dónde empezar | Transformación digital |
| mié 25 | Onboarding de una app: cómo lograr que el usuario vuelva | Desarrollo de apps móviles |
| vie 27 | Errores comunes al construir servidores MCP | Desarrollo de servidores MCP |
| lun 30 | Base de datos lenta: primeros pasos para optimizarla | Mantenimiento de software y deuda técnica |

### Septiembre 2027

| Fecha | Título | Servicio |
|---|---|---|
| mié 1 | Cómo saber si tu empresa está lista para la inteligencia artificial | Consultoría tecnológica y CTO as a Service |

---

## Cómo agregar artículos nuevos

Ver [contenido y comandos](../01-sitio/02-contenido-y-comandos.md). En resumen:

1. Crea `seed/posts/121-slug.php` copiando la estructura de uno existente, con fecha futura si quieres programarlo.
2. Genera la portada: `ddev portada post-slug.jpg "MARKETING DIGITAL" "Título corto" f472b6`.
3. `ddev wp innspiratech seed --solo=posts --omitir-existentes`
4. `ddev wp innspiratech seed --solo=enlaces`

También puedes escribirlos directamente en el editor de WordPress: el seed es opcional.

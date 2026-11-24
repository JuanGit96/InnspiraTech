# Estrategia SEO

El objetivo es aparecer primero cuando una empresa en Colombia busca resolver un
problema que nosotros resolvemos. No «desarrollo de software», que pelean cien
agencias con presupuesto: **«cuánto cuesta desarrollar una app»**, que es lo que
de verdad se busca antes de contratar y que casi nadie responde con honestidad.

## La apuesta: ganar por contenido de decisión

Un dominio nuevo no gana en seis meses una búsqueda genérica y competida. Sí
puede ganar búsquedas específicas con intención de compra, que además son las que
traen clientes.

| Tipo de búsqueda | Ejemplo | Competencia | Trae clientes |
|---|---|---|---|
| Genérica de categoría | «desarrollo de software» | Altísima | Poco: tráfico difuso |
| **De decisión** | «cuánto cuesta una página web para empresas» | Media | **Mucho** |
| **Comparativa** | «WooCommerce vs Shopify» | Media | Mucho |
| De problema | «mi sitio web fue hackeado qué hago» | Baja | Medio, pero urgente |
| Informacional | «qué es MCP» | Baja | Poco directo, construye autoridad |

Por eso el plan editorial del blog publica primero, dentro de cada servicio, los
artículos de decisión y comparación, y deja los informativos para después. Ver
[plan editorial](../03-marketing/03-plan-editorial-del-blog.md).

## Los tres tipos de página que posicionan

### 1. Página de servicio (`/servicios/{slug}/`)

El activo comercial. Doce páginas, una por servicio, cada una atacando un
conjunto de búsquedas de contratación. Contienen descripción larga, beneficios,
entregables, **indicadores que mueve**, preguntas frecuentes, precio de
referencia cuando existe y llamada a cotizar.

Los indicadores no son decoración: son texto único que ninguna agencia copia,
responden a la pregunta real («¿esto para qué me sirve?») y se publican como
datos estructurados.

### 2. Artículo del blog (`/blog/{slug}/`)

120 artículos, 10 por servicio. Cada uno:

- Ataca una búsqueda concreta con su palabra clave en el título y la URL.
- Responde en la primera frase después de cada subtítulo.
- Enlaza al **servicio que resuelve** lo que explica y a dos o tres artículos del
  mismo grupo temático.
- Incluye preguntas frecuentes marcadas y tablas comparables.
- Lleva el campo «Servicio relacionado», que lo hace aparecer en la sección
  «Aprende más sobre este tema» de ese servicio.

Eso forma doce clústeres temáticos: el servicio es la página central y sus diez
artículos le pasan autoridad.

### 3. Caso de éxito (`/casos/{slug}/`)

La prueba. Cada caso cuenta el problema de negocio, qué se construyó y qué pasó
con el indicador acordado. Posiciona por búsquedas de marca y de sector, pero
sobre todo **convierte**: es lo que revisa un cliente antes de escribir.

Los resultados medidos se publican en la ficha, en `/llms.txt` y en el JSON-LD,
así que un modelo de IA puede citarlos cuando alguien pregunte si hemos hecho
algo parecido.

### 4. Páginas institucionales

`/nosotros/`, `/contacto/`, `/academia/`. No pelean búsquedas competidas, pero
sostienen la señal de confianza: quién está detrás, cómo trabajamos, cómo se nos
contacta.

## Arquitectura de enlaces internos

```
Portada ──► /servicios/ ──► servicio ──► /contacto/
   │                           ▲   │
   │                           │   └──► artículos del clúster
   │                           │
   └──► /blog/ ──► artículo ───┘
                      │
                      └──► otros artículos del mismo tema
```

Cada artículo termina enlazando a su servicio; cada servicio enlaza a sus
artículos. Ningún contenido es una isla.

## Lo que ya está implementado

Ver el detalle técnico en [implementación](02-implementacion.md):

- Títulos y meta descripciones únicos y editables por página.
- URLs limpias: `/servicios/{slug}/` y `/blog/{slug}/`.
- Datos estructurados: Organization, WebSite, WebPage, BreadcrumbList,
  BlogPosting, Service con Offer, FAQPage, ItemList, speakable.
- Sitemap XML nativo, sin usuarios ni etiquetas.
- Open Graph y Twitter Cards.
- `robots.txt` explícito y `/llms.txt`.
- Rendimiento: CSS compilado (sin CDN de Tailwind), tipografía local, imágenes
  dimensionadas, nada de JavaScript bloqueante.

## Lo que falta y mueve la aguja

Por orden de impacto esperado:

1. **Google Business Profile** completo, con reseñas pedidas sistemáticamente.
   Es lo de mayor retorno para captar clientes locales y no cuesta nada.
2. **Autoría visible.** Hecho: los artículos los firma Juan Daniel Cárdenas
   Dávila, CEO y fundador, con biografía, cargo y página propia. Falta añadirle
   foto y perfiles públicos.
3. **Completar los casos en borrador** con cifras reales y permiso del cliente.
   La estructura ya está publicada; falta el dato.
4. **Páginas por ciudad** (`/servicios/desarrollo-de-software-bogota/` y
   similares) si se decide atacar búsquedas locales. Solo para ciudades donde
   realmente se atiende, con contenido propio en cada una.
5. **Enlaces entrantes**: gremios, cámaras de comercio, medios locales,
   directorios del sector, publicaciones como invitado.

## Cómo se mide

| Qué | Dónde | Cada cuánto |
|---|---|---|
| Impresiones, clics y posición por página | Google Search Console | Mensual |
| Páginas indexadas y errores de rastreo | Search Console | Mensual |
| Conversiones por página de destino | Analítica + registro de leads | Mensual |
| Core Web Vitals en móvil | Search Console | Trimestral |
| Menciones en respuestas de IA | Pruebas manuales | Trimestral |

La cifra que manda no es el tráfico: son **las solicitudes de contacto por mes**
y de qué página vinieron.

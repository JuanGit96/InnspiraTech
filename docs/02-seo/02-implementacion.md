# Implementación: dónde está cada pieza

Todo el SEO técnico vive en el **mu-plugin** `innspiratech-core`, no en el tema.
Es deliberado: si mañana se cambia el tema, el posicionamiento no se cae.

```
wp-content/mu-plugins/
├── innspiratech-core.php            ← carga los módulos
└── innspiratech-core/
    ├── helpers.php                  ← opciones del sitio, campos, utilidades
    ├── post-types.php               ← servicio, plan, cliente, lead + taxonomía
    ├── meta-fields.php              ← cajas de campos del admin
    ├── leads.php                    ← formulario de contacto y antispam
    ├── seo.php                      ← títulos, descripción, canonical, OG, robots, sitemap
    ├── schema.php                   ← JSON-LD (@graph)
    ├── publicacion.php              ← enlaces a artículos programados y publicación perdida
    ├── buscadores-ia.php            ← robots.txt, /llms.txt, /llms-full.txt
    └── cli/seed-command.php         ← contenido inicial por WP-CLI
```

## Títulos y descripciones — `seo.php`

| Pieza | Función | Comportamiento |
|---|---|---|
| `<title>` | filtro `pre_get_document_title` | Usa el campo «Título SEO» de la página; si no, el de WordPress. Añade «Página N» en paginadas |
| `<meta name="description">` | `it_seo_description()` | Campo «Meta descripción»; si falta, el extracto; si falta, la descripción global |
| `<link rel="canonical">` | `it_canonical_url()` | Con soporte de paginación |
| Open Graph y Twitter | `it_seo_head()` | Incluye `article:published_time` y `article:modified_time` en artículos |
| `robots` | filtro `wp_robots` | `noindex` en 404, buscador, fechas, etiquetas y adjuntos; `index` en el resto |

**Si se instala Yoast, Rank Math, AIOSEO o SEOPress**, `it_seo_plugin_active()`
detecta la constante del plugin y este módulo se aparta para no duplicar
etiquetas. No hace falta desactivar nada a mano.

## Datos estructurados — `schema.php`

Un solo bloque `<script type="application/ld+json">` con un `@graph`, lo que
evita nodos sueltos y permite enlazarlos entre sí por `@id`.

| Nodo | Cuándo se emite | Qué aporta |
|---|---|---|
| `Organization` | Siempre | Nombre, logo, contacto, redes, `knowsAbout`, `areaServed` |
| `WebSite` | Siempre | Identidad del sitio |
| `WebPage` / `CollectionPage` / `ContactPage` / `AboutPage` | Siempre | Tipo de página, fechas, imagen, `speakable` |
| `BreadcrumbList` | Interiores | Migas de pan |
| `FAQPage` | Donde hay preguntas | Las preguntas del campo FAQ |
| `BlogPosting` | Artículos | Autor, fechas, categorías, etiquetas, `wordCount`, `about` → servicio |
| `Service` | Fichas de servicio | `serviceType`, `audience`, `serviceOutput` (los indicadores), `offers` con precio |
| `ItemList` | Archivos | Orden de los elementos listados |

Los indicadores de cada servicio salen del campo **«Indicadores que mueve»**
(`_it_kpis`), uno por línea. Se ven en la ficha y se publican como
`serviceOutput`.

Para extender el grafo sin tocar el módulo existe el filtro `it_schema_graph`.

## Buscadores con IA — `buscadores-ia.php`

| Ruta | Qué hace |
|---|---|
| `/robots.txt` | Filtro `robots_txt`: permite rastreadores de IA uno por uno, bloquea `/wp-admin/`, el buscador interno y el parámetro `it_servicio`, y declara el sitemap |
| `/llms.txt` | Índice en Markdown: qué es la empresa, servicios, artículos recientes, páginas |
| `/llms-full.txt` | Igual, con todos los artículos publicados |

Se sirven interceptando `parse_request` (antes de que WordPress intente
redirigir la URL con barra final) y se generan desde la base de datos: no hay
archivos que mantener.

## Sitemap

El nativo de WordPress (`/wp-sitemap.xml`), con dos ajustes en `seo.php`:

- Sin el sitemap de **usuarios**: expone nombres de acceso y no aporta tráfico.
- Sin **etiquetas**: páginas delgadas. Las categorías sí entran.

Los artículos programados no aparecen hasta publicarse, que es lo correcto.

## Rendimiento

| Decisión | Dónde | Por qué |
|---|---|---|
| Tailwind compilado y minificado | `assets/css/app.css` | El CDN pesaba ~350 KB de JS y bloqueaba el render |
| Tipografía Inter local en woff2 | `assets/fonts/` | Sin petición a Google Fonts |
| Ilustración del hero en HTML/CSS | `template-parts/home/hero.php` | No afecta al LCP |
| Imagen destacada con `fetchpriority="high"` | `single.php` | Mejora el LCP en artículos |
| Sin jQuery ni framework de front | `inc/assets.php` | Menos JavaScript que bloquee |

## Enlaces a contenido programado — `publicacion.php`

Dos funciones pequeñas que resuelven problemas reales del blog programado:

1. **`it_unlink_unpublished_posts()`**: si un artículo publicado enlaza a otro que
   todavía no sale, el enlace se muestra como texto normal y se activa solo el
   día que el destino se publica. Así ningún artículo apunta a un 404.
2. **`it_publish_missed_schedule()`**: si WP-Cron no corrió a tiempo (poco
   tráfico, migración de base de datos), publica lo que ya venció, de diez en
   diez. Es la red de seguridad para el día del lanzamiento.

## Leads — `leads.php`

El formulario de contacto guarda cada solicitud como contenido privado (`lead`),
con honeypot, marca de tiempo firmada, límite por IP y casilla de autorización de
datos. Guardar el lead en la base, y no solo mandarlo por correo, es lo que
después permite saber **qué campaña o qué página trajo al cliente**.

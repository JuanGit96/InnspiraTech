# Arquitectura del sitio

WordPress clásico, sin page builders ni plugins de terceros para lo esencial.
Todo lo propio está en dos lugares: un **tema** y un **mu-plugin**.

## La regla que ordena todo

> El tema decide **cómo se ve**. El mu-plugin decide **qué existe y qué se
> publica para los buscadores**.

Por eso los tipos de contenido, los campos, el SEO, los datos estructurados y el
formulario de leads viven en `mu-plugins` y no en `functions.php`. Si mañana se
cambia el diseño, nada de eso se pierde.

## Stack

| Pieza | Elección | Por qué |
|---|---|---|
| CMS | WordPress | El cliente edita contenido sin depender de nosotros |
| Entorno local | DDEV (Docker) | Reproducible: `ddev start` y funciona |
| CSS | Tailwind v4 compilado | El CDN pesaba ~350 KB de JS y bloqueaba el render |
| Tipografía | Inter local (woff2) | Sin dependencia de Google Fonts |
| JavaScript | Vanilla, progresivo | El sitio funciona sin JS |
| PHP | 8.5 · MariaDB 11.8 | Versiones con soporte |

## El tema: `wp-content/themes/innspiratech`

```
innspiratech/
├── style.css, functions.php
├── header.php, footer.php, index.php
├── front-page.php                    ← portada
├── home.php                          ← listado del blog
├── single.php                        ← artículo
├── archive-servicio.php              ← listado de servicios
├── single-servicio.php               ← ficha de servicio
├── page.php, page-nosotros.php, page-contacto.php, page-academia.php
├── search.php, searchform.php, 404.php, comments.php
├── inc/
│   ├── setup.php, assets.php, icons.php, template-tags.php
│   ├── class-it-nav-walker.php       ← menú con estado activo correcto
│   └── customizer.php                ← textos editables de la portada
├── template-parts/
│   ├── home/      hero · resultados · services · ai-band · segments · stack · blog · academy
│   └── components/ clients · service-card · post-card · plan-card · process · faq ·
│                   cta · page-hero · newsletter · category-chips · share
└── src/css/app.css → assets/css/app.css   (compilado con Tailwind)
```

Cada sección de la portada es un *template part* independiente: se reordenan en
`front-page.php` sin tocar el resto.

## El mu-plugin: `wp-content/mu-plugins/innspiratech-core`

Es un **must-use plugin**: WordPress lo carga siempre y nadie puede desactivarlo
por accidente desde el admin.

| Módulo | Responsabilidad |
|---|---|
| `helpers.php` | Opciones del sitio, lectura de campos, utilidades de texto |
| `post-types.php` | Tipos de contenido y taxonomía |
| `meta-fields.php` | Cajas de campos del admin |
| `leads.php` | Formulario de contacto, antispam y registro de solicitudes |
| `seo.php` | Títulos, descripciones, canonical, Open Graph, robots, sitemap |
| `schema.php` | Datos estructurados JSON-LD |
| `publicacion.php` | Blog programado: enlaces diferidos y publicación perdida |
| `buscadores-ia.php` | robots.txt, `/llms.txt`, `/llms-full.txt` |
| `cli/seed-command.php` | Carga del contenido inicial |

## Tipos de contenido

| Tipo | Público | URL | Para qué |
|---|---|---|---|
| `servicio` | Sí | `/servicios/{slug}/` | Los 12 servicios |
| `plan` | No | — | Planes con precio que se listan en el archivo de servicios |
| `cliente` | No | — | Logos de la sección de clientes |
| `lead` | No (privado) | — | Solicitudes del formulario |
| `post` | Sí | `/blog/{slug}/` | Los artículos |
| `page` | Sí | `/{slug}/` | Páginas institucionales |

Taxonomía `linea_servicio`: agrupa los servicios en ingeniería, inteligencia
artificial y estrategia. Ordena con el campo `it_orden`.

**Detalle que costó un error en su momento:** un tipo de contenido público
registra una variable de consulta con su nombre. Por eso el parámetro para
preseleccionar un servicio en el formulario se llama `it_servicio` y no
`servicio`: con `servicio` WordPress mostraba la ficha en lugar de la página de
contacto.

## Campos propios

Todos los campos personalizados usan el prefijo `_it_`. Los más importantes:

| Campo | Dónde | Para qué |
|---|---|---|
| `kpis` | Servicio | Indicadores que mueve. Se ven en la ficha y se publican como `serviceOutput` |
| `beneficios`, `entregables` | Servicio | Bloques de la ficha |
| `precio_desde` | Servicio y plan | Alimenta el `Offer` del JSON-LD |
| `faq` | Cualquier contenido | Preguntas frecuentes + `FAQPage` |
| `seo_title`, `seo_desc`, `noindex` | Cualquier contenido | Control fino por página |
| `servicio_relacionado` | Artículo | Conecta el artículo con su servicio en ambos sentidos |

## Permalinks

| Contenido | Estructura |
|---|---|
| Artículos | `/blog/%postname%/` |
| Categorías | `/blog/categoria/{slug}/` |
| Etiquetas | `/blog/etiqueta/{slug}/` |
| Servicios | `/servicios/{slug}/` |

La paginación del blog (`/blog/page/2/`) necesita una regla propia, definida en
`seo.php`, porque choca con la estructura de los artículos.

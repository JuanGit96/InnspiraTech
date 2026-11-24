# Convertir una plantilla HTML en un tema de WordPress — paso a paso

Guía práctica y detallada. Cada paso usa como ejemplo real lo que hicimos con la plantilla
`innspiratech_web` (4 archivos `.html` con Tailwind por CDN) para convertirla en el tema
`innspiratech`, que vive en:

```
/Volumes/Innspira/WordpressProjects/innspiratech/wp-content/themes/innspiratech
```

> Antes de empezar necesitas un WordPress corriendo en DDEV. Si no lo tienes, sigue primero
> [04-wordpress-con-ddev.md](04-wordpress-con-ddev.md).

---

## Índice

1. [La idea en una tabla](#1-la-idea-en-una-tabla)
2. [Paso 1 — Analiza la plantilla antes de tocar código](#paso-1--analiza-la-plantilla-antes-de-tocar-código)
3. [Paso 2 — Crea el tema mínimo (2 archivos)](#paso-2--crea-el-tema-mínimo-2-archivos)
4. [Paso 3 — Organiza las carpetas](#paso-3--organiza-las-carpetas)
5. [Paso 4 — `functions.php` y los soportes del tema](#paso-4--functionsphp-y-los-soportes-del-tema)
6. [Paso 5 — CSS y JS: de CDN a archivos compilados](#paso-5--css-y-js-de-cdn-a-archivos-compilados)
7. [Paso 6 — Parte el HTML: `header.php` y `footer.php`](#paso-6--parte-el-html-headerphp-y-footerphp)
8. [Paso 7 — La jerarquía de plantillas](#paso-7--la-jerarquía-de-plantillas)
9. [Paso 8 — Secciones reutilizables con `get_template_part`](#paso-8--secciones-reutilizables-con-get_template_part)
10. [Paso 9 — Menús dinámicos](#paso-9--menús-dinámicos)
11. [Paso 10 — El Loop: contenido editable desde el admin](#paso-10--el-loop-contenido-editable-desde-el-admin)
12. [Paso 11 — Contenido estructurado: tipos de contenido y campos](#paso-11--contenido-estructurado-tipos-de-contenido-y-campos)
13. [Paso 12 — Textos globales con el Personalizador](#paso-12--textos-globales-con-el-personalizador)
14. [Paso 13 — Formularios que sí funcionan](#paso-13--formularios-que-sí-funcionan)
15. [Paso 14 — Seguridad: escapar y sanear](#paso-14--seguridad-escapar-y-sanear)
16. [Paso 15 — SEO técnico](#paso-15--seo-técnico)
17. [Paso 16 — Rendimiento y accesibilidad](#paso-16--rendimiento-y-accesibilidad)
18. [Paso 17 — Contenido inicial con WP-CLI](#paso-17--contenido-inicial-con-wp-cli)
19. [Paso 18 — Pruebas antes de publicar](#paso-18--pruebas-antes-de-publicar)
20. [Recetas: agregar una página o una sección nueva](#recetas-agregar-una-página-o-una-sección-nueva)
21. [Errores comunes](#errores-comunes)
22. [Glosario](#glosario)

---

## 1. La idea en una tabla

Una plantilla HTML es contenido **fijo** repetido en varios archivos. Un tema de WordPress es
el **molde**: el contenido vive en la base de datos y se edita desde el admin.

| En la plantilla HTML | En WordPress |
|---|---|
| `index.html`, `servicios.html`… | Plantillas PHP que WordPress elige solo (`front-page.php`, `page.php`, `single.php`…) |
| El `<nav>` copiado en cada archivo | `header.php` (una sola vez) |
| El `<footer>` copiado en cada archivo | `footer.php` |
| `<title>` escrito a mano | `add_theme_support('title-tag')` + SEO dinámico |
| `<link href="style.css">` | `wp_enqueue_style()` en `functions.php` |
| `<a href="servicios.html">` | `get_permalink()`, `home_url()`, menús de WordPress |
| `<img src="./img/logo.png">` | `get_theme_file_uri('assets/img/logo.webp')` |
| Texto de cada servicio escrito en el HTML | Tipo de contenido "Servicios" editable en el admin |
| Formulario sin `action` | Formulario que guarda leads y envía correo |
| Tailwind por CDN (`cdn.tailwindcss.com`) | Tailwind compilado a un `.css` minificado |

---

## Paso 1 — Analiza la plantilla antes de tocar código

Abre cada `.html` y haz un inventario. Este paso te ahorra horas de rehacer trabajo.

**1.1 ¿Qué páginas hay y qué se repite?**

En `innspiratech_web` encontramos:

| Archivo | Qué contiene | Se convierte en |
|---|---|---|
| `index.html` | Nav, hero, 6 tarjetas de servicios, footer | `front-page.php` + `template-parts/home/*` |
| `servicios.html` | Hero oscuro, planes con precio, soluciones enterprise | `archive-servicio.php` (listado) + `single-servicio.php` (cada servicio) |
| `nosotros.html` | Historia, visión, "¿Por qué?", foto | `page-nosotros.php` |
| `contacto.html` | Texto + formulario (sin backend) | `page-contacto.php` con formulario funcional |

**1.2 Marca qué es fijo y qué debe ser editable.**

- Editable desde el admin: textos del hero, servicios, planes, clientes, blog, datos de contacto.
- Fijo en el tema (diseño): estructura de las secciones, íconos, estilos.

**1.3 Detecta problemas de la plantilla.** Ejemplos reales que encontramos:

- El `<nav>` era **distinto** en cada archivo (en `nosotros.html` el logo medía `247px` de alto por un CSS
  pisado; en `contacto.html` no había menú). Al unificar en `header.php` todo queda consistente.
- Imágenes con `onerror` que cargaban `via.placeholder.com` o Unsplash (dependencias externas).
- El logo era un PNG de 1280×1280 con mucho margen transparente: lo recortamos a 622×96 y lo pasamos a WebP.
- Tailwind por CDN: cómodo para prototipar, **no apto para producción** (ver paso 5).
- El formulario no enviaba nada.

---

## Paso 2 — Crea el tema mínimo (2 archivos)

Un tema necesita solo dos archivos para aparecer en **Apariencia → Temas**.

```bash
mkdir -p wp-content/themes/innspiratech
```

**`style.css`** — el encabezado es obligatorio; WordPress lo lee para identificar el tema:

```css
/*
Theme Name:        InnspiraTech
Author:            InnspiraTech
Description:       Tema a medida convertido desde plantilla HTML.
Version:           1.0.0
Requires at least: 6.5
Requires PHP:      8.1
Text Domain:       innspiratech
*/
```

**`index.php`** — la plantilla de último recurso (puede empezar casi vacía):

```php
<?php get_header(); ?>
<main><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_title( '<h1>', '</h1>' ); the_content(); endwhile; endif; ?></main>
<?php get_footer(); ?>
```

Opcional pero recomendado: `screenshot.png` de **1200×900** para que el tema tenga imagen en el admin.

Actívalo:

```bash
ddev wp theme activate innspiratech
```

---

## Paso 3 — Organiza las carpetas

Esta es la estructura final del tema, con el porqué de cada parte:

```
innspiratech/
├── style.css                  ← encabezado del tema (solo identificación)
├── functions.php              ← SOLO carga los módulos de /inc
├── screenshot.png
├── package.json               ← Tailwind y scripts de compilación
├── src/css/app.css            ← hoja de ENTRADA de Tailwind (no se sirve)
├── assets/
│   ├── css/app.css            ← CSS COMPILADO y minificado (se sirve)
│   ├── js/app.js              ← menú móvil, animaciones, etc. (sin jQuery)
│   ├── fonts/                 ← Inter autoalojada
│   └── img/                   ← logos, imagen para redes, foto de Nosotros
├── inc/
│   ├── setup.php              ← soportes, menús, tamaños de imagen
│   ├── assets.php             ← wp_enqueue_style / wp_enqueue_script
│   ├── icons.php              ← íconos SVG en línea
│   ├── template-tags.php      ← funciones de plantilla (logo, migas, paginación…)
│   ├── class-it-nav-walker.php← menú con clases de Tailwind
│   └── customizer.php         ← Apariencia > Personalizar > InnspiraTech
├── header.php  footer.php
├── front-page.php  home.php  single.php  page.php  archive.php  index.php
├── archive-servicio.php  single-servicio.php
├── page-nosotros.php  page-contacto.php  page-academia.php
├── search.php  searchform.php  404.php  comments.php
└── template-parts/
    ├── home/                  ← secciones de la portada
    └── components/            ← piezas reutilizables (tarjetas, FAQ, CTA…)
```

Y la funcionalidad de negocio va **fuera del tema**, en un *must-use plugin*:

```
wp-content/mu-plugins/
├── innspiratech-core.php      ← cargador (WordPress lo ejecuta siempre)
└── innspiratech-core/
    ├── post-types.php         ← Servicios, Planes, Clientes, Leads
    ├── meta-fields.php        ← campos personalizados sin plugins
    ├── leads.php              ← procesamiento de formularios
    ├── seo.php  schema.php    ← SEO técnico y datos estructurados
    └── cli/ + seed/           ← comando para cargar el contenido inicial
```

> **Regla de oro:** el tema es *presentación*; el plugin es *funcionalidad*. Si mañana cambias
> de tema, los servicios, clientes, leads y el SEO siguen existiendo.

---

## Paso 4 — `functions.php` y los soportes del tema

`functions.php` se ejecuta en cada carga. Mantenlo como un índice:

```php
require_once get_theme_file_path( 'inc/setup.php' );
require_once get_theme_file_path( 'inc/assets.php' );
// …
```

En `inc/setup.php` se activan las capacidades que WordPress no da por defecto:

```php
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );          // WordPress genera el <title>
	add_theme_support( 'post-thumbnails' );    // imágenes destacadas
	add_theme_support( 'custom-logo' );        // logo editable
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary'          => 'Menú principal',
		'footer_servicios' => 'Pie de página: Servicios',
	) );

	add_image_size( 'it-card', 800, 450, true ); // miniatura 16:9 para tarjetas
} );
```

> **Por qué `after_setup_theme`:** es el momento en que WordPress espera que el tema declare lo
> que soporta. Hacerlo antes o después hace que algunas funciones no se activen.

---

## Paso 5 — CSS y JS: de CDN a archivos compilados

### 5.1 Nunca pegues `<link>` o `<script>` a mano en el header

Se registran con funciones de WordPress para que plugins y caché puedan gestionarlos:

```php
add_action( 'wp_enqueue_scripts', function () {
	$css = get_theme_file_path( 'assets/css/app.css' );
	wp_enqueue_style( 'innspiratech', get_theme_file_uri( 'assets/css/app.css' ), array(), filemtime( $css ) );

	wp_enqueue_script( 'innspiratech', get_theme_file_uri( 'assets/js/app.js' ), array(), filemtime( get_theme_file_path( 'assets/js/app.js' ) ), array(
		'strategy'  => 'defer', // no bloquea el renderizado
		'in_footer' => true,
	) );
} );
```

`filemtime()` como versión = cada vez que recompilas, el navegador descarga la versión nueva
(adiós al "no veo mis cambios").

### 5.2 Por qué quitar Tailwind por CDN

La plantilla usaba `<script src="https://cdn.tailwindcss.com">`. Ese script:

- Pesa cientos de KB de JavaScript y **genera el CSS en el navegador** de cada visitante.
- Provoca un parpadeo de contenido sin estilos y empeora el LCP (Core Web Vitals = SEO).
- Tailwind mismo advierte que no es para producción.

Compilado, generamos **solo las clases usadas** en un `.css` estático y minificado.

### 5.3 Instalar Tailwind v4 dentro de DDEV

En tu Mac no hace falta Node: el contenedor de DDEV lo trae.

`package.json` del tema:

```json
{
  "private": true,
  "scripts": {
    "build": "tailwindcss -i ./src/css/app.css -o ./assets/css/app.css --minify",
    "dev":   "tailwindcss -i ./src/css/app.css -o ./assets/css/app.css --watch"
  },
  "devDependencies": {
    "@tailwindcss/cli": "^4.1.0",
    "@tailwindcss/typography": "^0.5.16",
    "tailwindcss": "^4.1.0"
  }
}
```

Instalar y compilar (desde la raíz del proyecto):

```bash
ddev exec --dir /var/www/html/wp-content/themes/innspiratech npm install
ddev exec --dir /var/www/html/wp-content/themes/innspiratech npm run build
```

En este proyecto dejamos un atajo (`.ddev/commands/web/tema`):

```bash
ddev tema install   # primera vez
ddev tema build     # compila minificado (antes de subir a producción)
ddev tema dev       # vigila cambios mientras desarrollas (Ctrl+C para salir)
```

### 5.4 La hoja de entrada `src/css/app.css`

La configuración que antes estaba en `tailwind.config` del CDN pasa a CSS:

```css
@import "tailwindcss";
@plugin "@tailwindcss/typography";   /* clases prose para el contenido del blog */

@source "../../*.php";               /* dónde buscar clases */
@source "../../inc";
@source "../../template-parts";
@source "../../assets/js";

@theme {                             /* colores de la marca de la plantilla */
  --color-inblue: #2563eb;
  --color-indark: #0e172a;
  --font-sans: "Inter", ui-sans-serif, system-ui, sans-serif;
}

/* Componentes propios reutilizables: <a class="btn-primary"> */
@utility btn {
  @apply inline-flex items-center justify-center gap-2 rounded-lg px-6 py-3 font-semibold transition-all;
}
@utility btn-primary {
  @apply btn bg-inblue text-white shadow-lg shadow-blue-600/30 hover:bg-blue-700;
}
```

> ⚠️ **Tailwind solo ve texto literal.** `'bg-' . $color` no funciona: escribe la clase
> completa (`$dark ? 'bg-indark' : 'bg-white'`).

### 5.5 Fuentes autoalojadas

En lugar de pedir Inter a Google Fonts (una conexión extra y datos del visitante a terceros),
copiamos el `.woff2` al tema, lo declaramos con `@font-face` y lo precargamos:

```php
printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>', esc_url( get_theme_file_uri( 'assets/fonts/inter-latin-wght-normal.woff2' ) ) );
```

---

## Paso 6 — Parte el HTML: `header.php` y `footer.php`

Toma el HTML desde `<!DOCTYPE>` hasta justo antes del contenido propio de la página → `header.php`.
Toma desde el `<footer>` hasta `</html>` → `footer.php`.

**`header.php` (resumen):**

```php
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>                  <!-- OBLIGATORIO -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>                 <!-- OBLIGATORIO -->
<a class="skip-link screen-reader-text" href="#contenido">Saltar al contenido</a>
<header>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php it_logo(); ?></a>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</header>
<main id="contenido">
```

**`footer.php` (resumen):**

```php
</main>
<footer>…</footer>
<?php wp_footer(); ?>                    <!-- OBLIGATORIO -->
</body>
</html>
```

> **Sin `wp_head()` y `wp_footer()` no carga tu CSS, ni el JS, ni la barra de admin, ni el SEO.**
> Es el error número uno al convertir plantillas.

**Qué cambia al copiar el HTML:**

| HTML original | PHP en el tema |
|---|---|
| `<title>Innspiratech | …</title>` | Se borra (lo genera `title-tag`) |
| `href="index.html"` | `href="<?php echo esc_url( home_url( '/' ) ); ?>"` |
| `href="contacto.html"` | `href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>"` |
| `src="./img/logo.png"` | `src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo.webp' ) ); ?>"` |
| `© 2026` | `© <?php echo esc_html( wp_date( 'Y' ) ); ?>` |
| Clase "activa" puesta a mano en el menú | WordPress agrega `current-menu-item` solo |

---

## Paso 7 — La jerarquía de plantillas

WordPress decide qué archivo usar según la URL. Ese es el mayor "clic mental": **no enlazas
archivos, WordPress los elige**.

| URL / situación | Archivos que busca (en orden) | En este tema |
|---|---|---|
| Portada `/` | `front-page.php` → `home.php` → `index.php` | `front-page.php` |
| Listado del blog `/blog/` | `home.php` → `index.php` | `home.php` |
| Un artículo | `single-post.php` → `single.php` → `index.php` | `single.php` |
| Una página con slug `contacto` | `page-contacto.php` → `page-{ID}.php` → `page.php` | `page-contacto.php` |
| Cualquier otra página | `page.php` | `page.php` |
| Listado de un tipo de contenido `/servicios/` | `archive-servicio.php` → `archive.php` | `archive-servicio.php` |
| Un servicio `/servicios/x/` | `single-servicio.php` → `single.php` | `single-servicio.php` |
| Categoría o etiqueta | `category.php` / `tag.php` → `archive.php` | `archive.php` |
| Búsqueda `/?s=` | `search.php` | `search.php` |
| No existe | `404.php` | `404.php` |

> **Consejo:** para saber qué plantilla se está usando, agrega temporalmente
> `<?php global $template; echo basename( $template ); ?>` en el footer.

**Configurar portada y blog:** *Ajustes → Lectura → Una página estática*: portada = "Inicio",
entradas = "Blog". O por consola:

```bash
ddev wp option update show_on_front page
ddev wp option update page_on_front $(ddev wp post list --post_type=page --name=inicio --field=ID)
ddev wp option update page_for_posts $(ddev wp post list --post_type=page --name=blog --field=ID)
```

---

## Paso 8 — Secciones reutilizables con `get_template_part`

La portada de la plantilla era un solo HTML largo. La partimos en piezas:

```php
// front-page.php
get_header();
get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/components/clients' );
get_template_part( 'template-parts/home/services' );
get_template_part( 'template-parts/components/faq', null, array( 'post_id' => get_option( 'page_on_front' ) ) );
get_template_part( 'template-parts/components/cta' );
get_footer();
```

El tercer parámetro envía datos a la pieza, que los recibe en `$args`:

```php
// template-parts/components/cta.php
<h2><?php echo esc_html( $args['title'] ?? '¿Listo para acelerar tu próximo proyecto?' ); ?></h2>
```

Así la misma tarjeta de servicio (`components/service-card.php`) se usa en la portada, en
`/servicios/` y en "Servicios relacionados".

---

## Paso 9 — Menús dinámicos

1. Registra la ubicación (`register_nav_menus`, paso 4).
2. Imprímela en `header.php` con `wp_nav_menu()`.
3. Crea el menú en **Apariencia → Menús** y asígnalo a "Menú principal".

**Problema típico con Tailwind:** `wp_nav_menu()` imprime `<li><a>` sin tus clases. Hay dos soluciones:

- **Walker** (lo que usamos): una clase que extiende `Walker_Nav_Menu` e imprime cada enlace con
  las clases de la plantilla (`inc/class-it-nav-walker.php`).
- CSS sobre las clases de WordPress (`.sub-menu`, `.current-menu-item`), útil para submenús.

```php
wp_nav_menu( array(
	'theme_location' => 'primary',
	'container'      => false,
	'menu_class'     => 'site-nav flex items-center gap-1',
	'walker'         => new IT_Nav_Walker(),
	'fallback_cb'    => 'it_menu_fallback', // si aún no hay menú asignado
) );
```

---

## Paso 10 — El Loop: contenido editable desde el admin

El Loop es cómo WordPress recorre el contenido de la URL actual:

```php
<?php while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_post_thumbnail( 'full' ); ?>
	<div class="prose"><?php the_content(); ?></div>
<?php endwhile; ?>
```

Para consultas propias (ej. "últimos 3 artículos" en la portada) usa `get_posts()` o `WP_Query`:

```php
$posts = get_posts( array( 'posts_per_page' => 3, 'no_found_rows' => true ) );
foreach ( $posts as $post_item ) {
	get_template_part( 'template-parts/components/post-card', null, array( 'post' => $post_item ) );
}
```

> `no_found_rows => true` evita contar el total de resultados cuando no hay paginación: una
> consulta SQL menos.

---

## Paso 11 — Contenido estructurado: tipos de contenido y campos

Las 6 tarjetas de servicios de `index.html` eran HTML fijo. Para que cada servicio sea editable
y tenga **su propia URL posicionable en Google**, creamos un tipo de contenido:

```php
register_post_type( 'servicio', array(
	'labels'       => array( 'name' => 'Servicios', 'singular_name' => 'Servicio' ),
	'public'       => true,
	'has_archive'  => 'servicios',                                   // /servicios/
	'rewrite'      => array( 'slug' => 'servicios', 'with_front' => false ), // /servicios/{slug}/
	'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
	'show_in_rest' => true,                                          // editor de bloques
	'menu_icon'    => 'dashicons-lightbulb',
) );
```

| Tipo | Público | Para qué |
|---|---|---|
| `servicio` | Sí | Landing SEO por servicio |
| `plan` | No | Tarjetas de precio (Fast-Track) |
| `cliente` | No | Logos de clientes (logo = imagen destacada; campo URL) |
| `lead` | No | Cada formulario enviado |

**Campos personalizados sin plugins** (`meta-fields.php`): se define un arreglo con los campos
por tipo de contenido y un único código los pinta y guarda (con nonce, permisos y saneamiento).
Alternativa popular: Advanced Custom Fields (ACF) si prefieres una interfaz visual.

> ⚠️ Después de registrar un tipo de contenido nuevo, **refresca los enlaces permanentes**
> (`ddev wp rewrite flush` o *Ajustes → Enlaces permanentes → Guardar*). Si no, sus URLs dan 404.

---

## Paso 12 — Textos globales con el Personalizador

Textos que aparecen en un solo lugar pero deben ser editables (hero, correo, WhatsApp, redes)
van en **Apariencia → Personalizar → InnspiraTech**:

```php
$wp_customize->add_setting( 'it_opciones[hero_line1]', array(
	'type'              => 'option',              // se guarda en wp_options
	'default'           => 'Velocidad de startup,',
	'sanitize_callback' => 'sanitize_text_field', // SIEMPRE sanear
) );
$wp_customize->add_control( 'it_opciones[hero_line1]', array(
	'label'   => 'Título — línea 1',
	'section' => 'it_home',
) );
```

Y en la plantilla: `<?php echo esc_html( it_opt( 'hero_line1' ) ); ?>`

> Si configuras el número de **WhatsApp** en el Personalizador, aparece automáticamente el botón
> flotante y los botones de WhatsApp en contacto y servicios.

---

## Paso 13 — Formularios que sí funcionan

El formulario de `contacto.html` no tenía `action`. En WordPress el patrón limpio es **admin-post**:

```html
<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
	<input type="hidden" name="action" value="it_lead">
	…campos…
</form>
```

```php
add_action( 'admin_post_nopriv_it_lead', 'it_handle_lead' ); // visitantes
add_action( 'admin_post_it_lead',        'it_handle_lead' ); // usuarios logueados
```

El manejador (`mu-plugins/innspiratech-core/leads.php`) hace, en orden:

1. **Antispam sin captcha:** campo trampa oculto (*honeypot*), tiempo mínimo firmado (un humano
   tarda más de 3 s) y máximo 5 envíos cada 10 min por IP.
2. **Valida y sanea:** `sanitize_email`, `sanitize_text_field`, `sanitize_textarea_field`.
3. **Consentimiento** obligatorio (protección de datos, Ley 1581 de 2012 en Colombia).
4. **Guarda el lead** como contenido privado → aunque falle el correo, no se pierde.
5. **Envía aviso** con `wp_mail()` y `Reply-To` del cliente.
6. **Redirige** con `?it_lead=ok` para mostrar el mensaje (patrón POST-redirect-GET).

> **En DDEV los correos no salen a internet:** los atrapa Mailpit en
> `https://innspiratech.ddev.site:8026`. En producción instala un plugin SMTP (ej. WP Mail SMTP)
> con tu proveedor de correo para que lleguen y no caigan en spam.

> **¿Y el nonce?** Protege acciones de usuarios logueados. En formularios públicos con caché de
> página, los nonces caducan y el formulario falla a visitantes reales; por eso aquí se usa
> honeypot + firma de tiempo + límite por IP.

---

## Paso 14 — Seguridad: escapar y sanear

**Regla:** *sanea al entrar, escapa al salir.* Nunca imprimas una variable sin escapar.

| Contexto de salida | Función | Ejemplo |
|---|---|---|
| Texto dentro de HTML | `esc_html()` | `<h2><?php echo esc_html( $title ); ?></h2>` |
| Atributo HTML | `esc_attr()` | `class="<?php echo esc_attr( $class ); ?>"` |
| URL | `esc_url()` | `href="<?php echo esc_url( $url ); ?>"` |
| HTML permitido (limitado) | `wp_kses()` | enlaces dentro de un texto |
| Textarea | `esc_textarea()` | contenido de un `<textarea>` |

| Dato de entrada | Función |
|---|---|
| Texto de una línea | `sanitize_text_field()` |
| Texto multilínea | `sanitize_textarea_field()` |
| Correo | `sanitize_email()` + `is_email()` |
| URL | `esc_url_raw()` |
| Número entero | `absint()` |
| Slug / clave | `sanitize_key()`, `sanitize_title()` |

Otras medidas aplicadas: XML-RPC desactivado, versión de WordPress oculta, usuarios ocultos en la
API REST para visitantes, bloqueo de `?author=1` y autor publicado con un alias distinto al usuario
de acceso.

---

## Paso 15 — SEO técnico

Todo esto quedó implementado en `seo.php` y `schema.php` (se desactiva solo si instalas Yoast,
Rank Math, AIOSEO o SEOPress, para no duplicar).

**15.1 Metaetiquetas por página**

| Elemento | Cómo se genera | Dónde se edita |
|---|---|---|
| `<title>` | Título SEO del contenido o título + marca | Caja "SEO — cómo se ve en Google" (contador de caracteres) |
| Meta descripción | Campo SEO → extracto → primeras palabras | Misma caja |
| Canonical | URL limpia de cada vista, incluidas páginas 2, 3… | Automático |
| Robots | `noindex` en búsquedas, 404, fechas y etiquetas; casilla por contenido | Automático + casilla |
| Open Graph / X | Título, descripción, imagen 1200×630 | Imagen destacada o imagen por defecto |

**15.2 Datos estructurados (JSON-LD)** en un único `@graph` conectado:
`Organization`, `WebSite`, `WebPage`, `BreadcrumbList`, `BlogPosting` (artículos), `Service`
(servicios, con precio "desde"), `FAQPage` (preguntas frecuentes) e `ItemList` (listado de servicios).
Valídalo en <https://search.google.com/test/rich-results> y <https://validator.schema.org>.

**15.3 Arquitectura de URLs**

```
/                                   portada
/servicios/                         listado (hub)
/servicios/desarrollo-servidores-mcp/   una landing por intención de búsqueda
/blog/                              blog
/blog/que-es-mcp-model-context-protocol/
/blog/categoria/inteligencia-artificial/
```

Enlaces permanentes configurados así:

```bash
ddev wp rewrite structure '/blog/%postname%/' --category-base='blog/categoria' --tag-base='blog/etiqueta'
ddev wp rewrite flush
```

> ⚠️ **Trampa de WordPress:** con `/blog/%postname%/` y una página "blog", la URL `/blog/page/2/`
> se interpreta como un artículo llamado "page" → 404. Lo resolvimos con una regla de reescritura
> propia en `seo.php`.

**15.4 Sitemap XML nativo** en `/wp-sitemap.xml` (sin usuarios ni etiquetas, sin contenido `noindex`
y con `lastmod`). Envíalo en Google Search Console.

**15.5 Contenido que posiciona (estrategia)**

- **Una página por servicio** con H1 claro, beneficios, qué incluye, FAQ y enlaces internos.
- **Blog educativo** que responde preguntas reales ("qué es MCP", "agentes de IA para empresas") y
  enlaza al servicio relacionado (campo "Servicio relacionado" → caja de llamado a la acción).
- **Clústeres temáticos:** artículo pilar ↔ artículos de apoyo ↔ página de servicio.
- **E-E-A-T:** autor con biografía, fechas de publicación y actualización, datos de contacto reales.
- **Un solo H1 por página**, jerarquía H2/H3 lógica, índice de contenidos con anclas.
- **FAQ** con respuestas directas: ayudan a aparecer citados en buscadores con IA.

---

## Paso 16 — Rendimiento y accesibilidad

Rendimiento (Core Web Vitals también es SEO):

- CSS compilado y minificado (~90 KB, comprimido mucho menos) en lugar de Tailwind por CDN.
- JS propio con `defer`, sin jQuery.
- Imágenes en **WebP** con `width`/`height` (evita saltos de diseño), `loading="lazy"` fuera de pantalla
  y `fetchpriority="high"` en la imagen principal.
- Ilustración del hero en HTML/CSS: el elemento más grande (LCP) es texto, carga instantáneo.
- Íconos SVG en línea (cero peticiones).
- Emojis de WordPress desactivados y CSS de bloques cargado solo cuando se usa.

Accesibilidad:

- Enlace "Saltar al contenido", foco visible, `aria-label` en menús y botones de ícono.
- Etiquetas `<label>` en todos los campos, mensajes con `role="status"`/`role="alert"`.
- Animaciones que respetan `prefers-reduced-motion`.
- Acordeón de FAQ con `<details>` nativo (funciona con teclado y sin JS).

---

## Paso 17 — Contenido inicial con WP-CLI

Para no crear 12 servicios, 6 páginas, 3 artículos y 4 menús a mano, el plugin trae un comando:

```bash
ddev wp innspiratech seed                 # todo (se puede repetir: actualiza por slug)
ddev wp innspiratech seed --solo=posts    # solo un paso
ddev wp rewrite flush
```

Los textos están en `wp-content/mu-plugins/innspiratech-core/seed/`. Cuidado: si vuelves a ejecutarlo,
**sobrescribe** lo que hayas editado en el admin en esos mismos contenidos.

---

## Paso 18 — Pruebas antes de publicar

```bash
# 1. Todas las URLs importantes responden 200 (y la inexistente 404)
for u in / /servicios/ /blog/ /contacto/ /no-existe/; do
  printf "%-15s %s\n" "$u" "$(curl -s -o /dev/null -w '%{http_code}' https://innspiratech.ddev.site$u)"
done

# 2. Sin errores de PHP
ddev exec 'find wp-content/themes/innspiratech -name "*.php" -not -path "*/node_modules/*" -exec php -l {} \;' | grep -v "No syntax errors"

# 3. CSS recompilado
ddev tema build
```

Lista de verificación manual:

- [ ] Portada, servicios, un servicio, blog, un artículo, categoría, nosotros, contacto, academia, 404.
- [ ] Menú móvil abre y cierra; submenú de servicios en escritorio.
- [ ] Formulario de contacto: mensaje de éxito, lead en el admin y correo en Mailpit.
- [ ] Logos de clientes: gris → color + dominio al pasar el mouse.
- [ ] Prueba de resultados enriquecidos de Google y PageSpeed Insights (móvil) en producción.
- [ ] Vista previa al compartir en LinkedIn/WhatsApp (imagen 1200×630).

---

## Recetas: agregar una página o una sección nueva

**Página con diseño propio (ej. "Casos de éxito"):**

1. Crea la página en el admin con el slug `casos-de-exito`.
2. Crea `page-casos-de-exito.php` (copia `page-nosotros.php` como base).
3. Si usas clases de Tailwind nuevas: `ddev tema build`.
4. Agrégala al menú en *Apariencia → Menús*.

**Sección nueva en la portada:**

1. Crea `template-parts/home/mi-seccion.php` con el HTML de la sección.
2. Agrégala en `front-page.php` con `get_template_part( 'template-parts/home/mi-seccion' );`.
3. `ddev tema build`.

**Nuevo cliente con logo:**

1. Admin → *Clientes → Añadir cliente*.
2. Título = nombre de la empresa; "Sitio web" = `https://empresa.com`; "Logo del cliente" = imagen
   (PNG/WebP transparente, mínimo 320 px de ancho).
3. "Orden" define la posición. Borra los clientes de ejemplo.

**Nuevo servicio:** Admin → *Servicios → Añadir servicio*: título, contenido, extracto (resumen de la
tarjeta), línea de servicio, ícono, beneficios, FAQ y la caja SEO. Aparece solo en la portada,
en `/servicios/` y en el formulario de contacto; agrégalo al menú si quieres.

---

## Errores comunes

| Síntoma | Causa | Solución |
|---|---|---|
| La página sale sin estilos | Falta `wp_head()` o el CSS no está encolado | Revisa `header.php` e `inc/assets.php` |
| Imágenes rotas | Rutas relativas copiadas del HTML (`./img/`) | `get_theme_file_uri( 'assets/img/…' )` |
| Una clase de Tailwind no hace nada | No se recompiló o la clase se armó concatenando | `ddev tema build`; escribe la clase completa |
| Cambié el CSS y no se ve | Caché del navegador | La versión con `filemtime` lo evita; recarga forzada |
| 404 en `/servicios/` o en un servicio | Faltó refrescar enlaces permanentes | `ddev wp rewrite flush` |
| El menú no aparece | La ubicación no tiene menú asignado | *Apariencia → Menús → Gestionar ubicaciones* |
| Dos `<title>` o dos meta descripciones | Tema + plugin SEO a la vez | El módulo SEO se apaga solo con Yoast/Rank Math; no pongas `<title>` a mano |
| `/blog/page/2/` da 404 | Conflicto de reescritura con `/blog/%postname%/` | Regla incluida en `seo.php` + `rewrite flush` |
| El formulario no llega al correo | En local va a Mailpit; en producción falta SMTP | Mailpit en `:8026`; plugin SMTP en producción |
| Pantalla blanca | Error fatal de PHP | `ddev logs -f` o activa `WP_DEBUG_LOG` |

---

## Glosario

- **Tema:** carpeta con plantillas PHP, CSS y JS que definen cómo se ve el sitio.
- **Plantilla (template):** archivo PHP que WordPress elige según la URL.
- **Template part:** fragmento reutilizable incluido con `get_template_part()`.
- **Hook (action/filter):** punto donde tu código se "engancha" a WordPress (`add_action`, `add_filter`).
- **Loop:** ciclo `have_posts()/the_post()` que recorre el contenido de la vista.
- **CPT (Custom Post Type):** tipo de contenido propio, como "Servicios".
- **Meta / campo personalizado:** dato extra de un contenido (precio, URL, ícono…).
- **mu-plugin:** plugin que WordPress carga siempre, sin poder desactivarlo desde el admin.
- **Slug:** parte legible de la URL (`desarrollo-servidores-mcp`).
- **Enqueue:** registrar CSS/JS para que WordPress los imprima correctamente.
- **Canonical:** URL "oficial" de una página para evitar contenido duplicado.
- **JSON-LD / schema.org:** datos estructurados que explican a los buscadores qué es cada página.
- **WP-CLI:** línea de comandos de WordPress (`ddev wp …`).

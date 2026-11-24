# Contenido inicial y comandos

Todo el contenido del sitio —servicios, planes, clientes, páginas, menús y los
120 artículos— está escrito en archivos PHP y se carga con un comando. No se
creó a mano en el admin.

## Por qué así

- Se puede **versionar en Git** y revisar como código.
- Se puede **recrear el sitio entero** en una máquina nueva en minutos.
- Permite **corregir 120 artículos a la vez** con un script.
- Evita el «se perdió el contenido al migrar».

Después del lanzamiento, lo normal es editar en el admin. El seed queda como
semilla reproducible y para cargas masivas.

## Dónde está

```
mu-plugins/innspiratech-core/seed/
├── servicios-1-ia-estrategia.php      ← 7 servicios
├── servicios-2-ingenieria.php         ← 5 servicios
├── planes-clientes-paginas.php        ← planes, clientes y páginas
├── casos.php                          ← casos de éxito
├── posts/001-*.php … 120-*.php        ← los 120 artículos
└── img/                               ← portadas 1200×675, logos, favicon
```

Cada artículo es un archivo con slug, título, fecha, categorías, etiquetas,
servicio relacionado, imagen, extracto, contenido en bloques y campos SEO.

## El comando de carga

```bash
ddev wp innspiratech seed                          # todo
ddev wp innspiratech seed --solo=posts             # solo artículos
ddev wp innspiratech seed --solo=posts --omitir-existentes   # solo lo nuevo
ddev wp innspiratech seed --solo=enlaces           # resolver enlaces internos
ddev wp rewrite flush
```

Pasos disponibles: `ajustes`, `terminos`, `servicios`, `planes`, `clientes`,
`casos`, `paginas`, `posts`, `enlaces`, `menus`, `icono`.

**`--omitir-existentes`** no toca lo que ya existe: es la bandera segura cuando
ya hay ediciones hechas en el admin.

## Enlaces internos con tokens

Dentro del contenido se escriben así:

```
{url:servicio:agentes-ia-empresas}
{url:post:cuanto-cuesta-una-pagina-web}
{url:pagina:contacto}
{url:archive:servicio}
```

El paso `enlaces` los reemplaza por la URL real. Si el destino todavía no existe,
el token se conserva para la siguiente pasada; por eso `--solo=enlaces` se
ejecuta **al final**, cuando todo el contenido ya está cargado.

## Portadas del blog

```bash
ddev portada post-mi-articulo.jpg "MARKETING DIGITAL" "Título corto" f472b6
ddev portada lista.txt     # una línea por portada: archivo|CATEGORÍA|Título|color
```

Genera imágenes 1200×675 con ImageMagick, el logo y la paleta de la marca.
Colores por categoría: `34d399` software · `fbbf24` e-commerce · `3b82f6` IA ·
`22d3ee` MCP · `818cf8` transformación · `f472b6` marketing · `fb923c` talento.

## Compilar el CSS

```bash
ddev tema build      # una vez, minificado
ddev tema dev        # vigila cambios mientras se edita
ddev tema install    # instala dependencias y copia la tipografía
```

Hay que ejecutarlo **cada vez que se añaden clases de Tailwind nuevas** en una
plantilla, o el estilo no aparecerá.

## Añadir un artículo nuevo

1. Crear `seed/posts/121-slug.php` copiando la estructura de otro. Fecha futura
   si se quiere programado.
2. Generar la portada con `ddev portada`.
3. `ddev wp innspiratech seed --solo=posts --omitir-existentes`
4. `ddev wp innspiratech seed --solo=enlaces`

O escribirlo directamente en el admin: el seed es opcional.

# WordPress con DDEV — proyectos nuevos y existentes

Guía paso a paso para montar sitios WordPress en local con DDEV en este Mac, usando como ejemplo
real el proyecto `innspiratech`. Complementa a `/Volumes/Innspira/ENTORNO.md`.

> **Requisito único:** Docker Desktop abierto. Si no, verás `Cannot connect to the Docker daemon`.

---

## Índice

1. [Cómo funciona DDEV en un minuto](#1-cómo-funciona-ddev-en-un-minuto)
2. [Verificar el entorno](#2-verificar-el-entorno)
3. [Proyecto NUEVO paso a paso](#3-proyecto-nuevo-paso-a-paso)
4. [Proyecto EXISTENTE: elige tu caso](#4-proyecto-existente-elige-tu-caso)
5. [El truco del `wp-config.php`](#5-el-truco-del-wp-configphp)
6. [`search-replace`: cambiar el dominio sin romper nada](#6-search-replace-cambiar-el-dominio-sin-romper-nada)
7. [Comandos del día a día](#7-comandos-del-día-a-día)
8. [Base de datos, correo, Node y Xdebug](#8-base-de-datos-correo-node-y-xdebug)
9. [De local a producción](#9-de-local-a-producción)
10. [De producción a local](#10-de-producción-a-local)
11. [Problemas comunes](#11-problemas-comunes)
12. [Ficha del proyecto InnspiraTech](#12-ficha-del-proyecto-innspiratech)

---

## 1. Cómo funciona DDEV en un minuto

```
Tu Mac (/Volumes/Innspira/WordpressProjects/innspiratech)
   │  los archivos se sincronizan con Mutagen
   ▼
Docker Desktop
   ├── ddev-innspiratech-web   nginx + PHP-FPM 8.5 + WP-CLI + Node + Composer
   ├── ddev-innspiratech-db    MariaDB 11.8 (base "db", usuario "db", clave "db")
   ├── ddev-router             Traefik: https://innspiratech.ddev.site → contenedor web
   └── Mailpit                 atrapa los correos que envía WordPress
```

- **Cada proyecto tiene su PHP y su base de datos**, aislados de los demás y de Homebrew.
- **`*.ddev.site` apunta solo a `127.0.0.1`**: no hay que tocar `/etc/hosts`.
- **HTTPS local de confianza** gracias a `mkcert` (se instala una vez con `mkcert -install`).
- **Los comandos se ejecutan dentro del contenedor** anteponiendo `ddev`: `ddev wp`, `ddev composer`,
  `ddev npm`, `ddev php`. Así usas el PHP del proyecto y no el de tu Mac.

---

## 2. Verificar el entorno

```bash
docker info --format '{{.ServerVersion}}'   # Docker responde
ddev version                                 # DDEV instalado (aquí: v1.25.4)
ddev list                                    # proyectos y su estado
mkcert -CAROOT                               # CA local instalada (HTTPS sin advertencias)
```

---

## 3. Proyecto NUEVO paso a paso

Estos son los comandos exactos con los que se creó `innspiratech`.

### Paso 1 — Crear la carpeta

```bash
mkdir -p /Volumes/Innspira/WordpressProjects/innspiratech
cd /Volumes/Innspira/WordpressProjects/innspiratech
```

> El nombre de la carpeta será el nombre del proyecto y el subdominio: `innspiratech.ddev.site`.
> Usa minúsculas y guiones, sin espacios.

### Paso 2 — Configurar DDEV

```bash
ddev config --project-type=wordpress --docroot= --php-version=8.5 \
  --database=mariadb:11.8 --nodejs-version=24 --project-name=innspiratech
```

| Opción | Qué hace |
|---|---|
| `--project-type=wordpress` | DDEV genera `wp-config.php`/`wp-config-ddev.php` y reglas de nginx para WordPress |
| `--docroot=` (vacío) | WordPress vive en la raíz de la carpeta |
| `--php-version=8.5` | Versión de PHP del contenedor (5.6 a 8.5) |
| `--database=mariadb:11.8` | Motor y versión de la base de datos |
| `--nodejs-version=24` | Node dentro del contenedor (para compilar Tailwind) |
| `--project-name` | Nombre y subdominio del proyecto |

Se crea `.ddev/config.yaml`. Cualquier cambio en ese archivo requiere `ddev restart`.

### Paso 3 — Levantar

```bash
ddev start
```

### Paso 4 — Descargar la última versión de WordPress

```bash
ddev wp core download --locale=es_CO
```

`--locale=es_CO` descarga WordPress en español de Colombia (admin, fechas y textos del sistema).
Otras opciones: `es_ES`, `es_MX`, o sin `--locale` para inglés.

### Paso 5 — Instalar

Genera una contraseña fuerte y úsala en la instalación (no uses `admin`/`admin` si el sitio va a
producción; la base de datos viaja con el usuario):

```bash
PASS=$(openssl rand -base64 24 | tr -d '/+=' | cut -c1-20); echo "$PASS"

ddev wp core install \
  --url=https://innspiratech.ddev.site \
  --title="InnspiraTech" \
  --admin_user=innspira_admin \
  --admin_password="$PASS" \
  --admin_email=proyectos@innspiratech.com \
  --skip-email
```

> **Evita** usar `admin` como nombre de usuario: es el primero que prueban los ataques de fuerza bruta.

### Paso 6 — Ajustes básicos recomendados

```bash
ddev wp option update timezone_string "America/Bogota"
ddev wp option update blog_public 1                         # visible para buscadores (en producción)
ddev wp option update default_comment_status closed         # sin comentarios por defecto
ddev wp rewrite structure '/%postname%/'                    # URLs legibles
ddev wp rewrite flush
ddev wp plugin delete hello                                 # opcional: quitar Hello Dolly
```

> En InnspiraTech se usó `/blog/%postname%/` con bases `blog/categoria` y `blog/etiqueta` para
> agrupar todo el blog bajo `/blog/` (ver guía del tema, paso 15).

### Paso 7 — Tema y plugins

```bash
ddev wp theme install astra --activate          # un tema del repositorio
ddev wp theme activate innspiratech             # o tu tema propio
ddev wp plugin install wp-mail-smtp --activate  # un plugin
ddev wp plugin list
```

### Paso 8 — Abrir

```bash
ddev launch               # abre https://innspiratech.ddev.site
ddev launch /wp-admin/    # abre el admin
ddev describe             # URLs, puertos y credenciales de la base de datos
```

---

## 4. Proyecto EXISTENTE: elige tu caso

| Tengo… | Ve a |
|---|---|
| Archivos del sitio + un `.sql` (hosting, cPanel, backup) | [Caso A](#caso-a--archivos--dump-sql) |
| El proyecto en un repositorio Git | [Caso B](#caso-b--repositorio-git) |
| Un respaldo de All-in-One WP Migration / Duplicator | [Caso C](#caso-c--plugin-de-migración) |
| El sitio en XAMPP/MAMP | `ENTORNO.md`, sección 4.2 (misma receta del Caso A) |
| Solo acceso SSH al servidor | [Caso D](#caso-d--solo-acceso-ssh-al-servidor) |

### Caso A — Archivos + dump SQL

**Paso 1 — Copiar los archivos** a su carpeta (copiar, no mover: el original es tu respaldo):

```bash
mkdir -p /Volumes/Innspira/WordpressProjects/mi-sitio
cp -R ~/Downloads/public_html/. /Volumes/Innspira/WordpressProjects/mi-sitio/
cd /Volumes/Innspira/WordpressProjects/mi-sitio
```

> ⚠️ No uses carpetas dentro de `/Applications`: Docker no las comparte.

**Paso 2 — Configurar DDEV** (usa la versión de PHP más cercana a la del hosting si el sitio es viejo):

```bash
ddev config --project-type=wordpress --docroot= --php-version=8.3 --database=mariadb:10.11
```

> ¿Qué versión de base de datos? Revisa el encabezado del `.sql` (`-- Server version`). Si viene de
> MySQL 8, usa `--database=mysql:8.0`. Cambiar el tipo después obliga a exportar e importar de nuevo.

**Paso 3 — Parchear `wp-config.php`** → ver [sección 5](#5-el-truco-del-wp-configphp).

**Paso 4 — Levantar e importar la base de datos:**

```bash
ddev start
ddev import-db --file=~/Downloads/mi_sitio.sql.gz     # acepta .sql, .sql.gz, .zip
```

Si el prefijo de tablas no es `wp_`, verifica que `$table_prefix` en `wp-config.php` coincida con el
del dump (`grep -m1 "CREATE TABLE" dump.sql`).

**Paso 5 — Cambiar el dominio** → ver [sección 6](#6-search-replace-cambiar-el-dominio-sin-romper-nada):

```bash
ddev wp search-replace 'https://www.misitio.com' 'https://mi-sitio.ddev.site' --all-tables --precise
ddev wp search-replace 'http://www.misitio.com'  'https://mi-sitio.ddev.site' --all-tables --precise
ddev wp cache flush
ddev wp rewrite flush
```

**Paso 6 — Comprobar:**

```bash
curl -s -o /dev/null -w "%{http_code}\n" https://mi-sitio.ddev.site/
curl -s -o /dev/null -w "%{http_code}\n" https://mi-sitio.ddev.site/wp-login.php
ddev wp plugin list      # plugins que fallen en PHP nuevo aparecen aquí
```

Si un plugin rompe el sitio: `ddev wp plugin deactivate nombre-del-plugin`.

**Paso 7 — ¿No tienes tu usuario?** Crea uno o cambia la clave:

```bash
ddev wp user list
ddev wp user update 1 --user_pass='NuevaClaveSegura123'
ddev wp user create soporte soporte@empresa.com --role=administrator
```

**Paso 8 — Uploads pesados.** Si no quieres copiar gigas de imágenes, puedes apuntar las faltantes a
producción con el plugin *Be Media from Production* o con un proxy de nginx; o sincronizar solo el
año actual de `wp-content/uploads`.

### Caso B — Repositorio Git

```bash
cd /Volumes/Innspira/WordpressProjects
git clone git@github.com:empresa/mi-sitio.git
cd mi-sitio
ddev config --project-type=wordpress --docroot=   # usa --docroot=web si es Bedrock
ddev start
```

- Si el repo **no incluye** el núcleo de WordPress: `ddev wp core download --skip-content`.
- Si usa **Composer** (Bedrock u otro): `ddev composer install`.
- Si el tema compila assets: `ddev npm install && ddev npm run build` (o `ddev exec --dir …`).
- Importa la base de datos y haz `search-replace` como en el Caso A.
- `.ddev/` puede versionarse para que todo el equipo use la misma configuración.

### Caso C — Plugin de migración

1. Crea un proyecto nuevo ([sección 3](#3-proyecto-nuevo-paso-a-paso), pasos 1 a 5).
2. Instala el mismo plugin: `ddev wp plugin install all-in-one-wp-migration --activate`.
3. Importa el archivo desde el admin. Si el límite de subida molesta, súbelo en `.ddev/php/uploads.ini`:

   ```ini
   upload_max_filesize = 512M
   post_max_size = 512M
   memory_limit = 1024M
   ```

   y `ddev restart`.
4. El plugin cambia el dominio solo. Entra de nuevo con el usuario del sitio original.

### Caso D — Solo acceso SSH al servidor

```bash
# Archivos (excluye cachés)
rsync -avz --exclude 'wp-content/cache' usuario@servidor:/var/www/misitio/ ./

# Base de datos por SSH, comprimida
ssh usuario@servidor "mysqldump -u USER -p'CLAVE' --single-transaction --quick NOMBRE_BD | gzip" > db.sql.gz
ddev import-db --file=db.sql.gz
```

Luego sigue el Caso A desde el paso 3.

> DDEV también trae `ddev pull` con proveedores (Pantheon, Platform.sh, Acquia o uno propio en
> `.ddev/providers/`) para automatizar este proceso si lo haces seguido.

---

## 5. El truco del `wp-config.php`

**Proyecto nuevo:** DDEV genera un `wp-config.php` con el comentario `#ddev-generated`. Mientras ese
comentario exista, DDEV puede sobrescribirlo. Si necesitas constantes propias, agrégalas en la zona
*"Add any custom values"* y **borra la línea `#ddev-generated`** para que DDEV no lo reemplace.

**Proyecto existente:** tu `wp-config.php` ya tiene sus `define( 'DB_NAME', … )`. DDEV crea
`wp-config-ddev.php` con las credenciales del contenedor. Inclúyelo **antes** de los `define()`:

```php
if ( file_exists( __DIR__ . '/wp-config-ddev.php' ) ) {
	require_once __DIR__ . '/wp-config-ddev.php';
}

define( 'DB_NAME', 'mi_base' );   // ← estos ya estaban; ahora se ignoran dentro de DDEV
define( 'DB_USER', 'root' );
```

> **Por qué antes:** en PHP la primera definición de una constante gana. Si el `require` va después,
> ganan las credenciales viejas y el sitio muestra *"Error al establecer una conexión con la base de
> datos"*. El archivo de DDEV tiene su propia guarda, así que fuera de DDEV no hace nada.

**Depuración local útil** (en la zona de valores personalizados):

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );       // escribe en wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', false );  // no lo muestra en pantalla
define( 'WP_ENVIRONMENT_TYPE', 'local' );
```

---

## 6. `search-replace`: cambiar el dominio sin romper nada

WordPress guarda URLs absolutas en la base de datos, incluidas algunas dentro de datos serializados
(widgets, opciones de temas, constructores visuales). Un `UPDATE` a mano rompe esos datos;
`wp search-replace` los recalcula.

```bash
# 1. Simula primero: muestra cuántos cambios haría, sin tocar nada
ddev wp search-replace 'https://www.misitio.com' 'https://mi-sitio.ddev.site' --all-tables --dry-run

# 2. Ejecuta
ddev wp search-replace 'https://www.misitio.com' 'https://mi-sitio.ddev.site' --all-tables --precise

# 3. Repite para las variantes: http://, sin www, y la versión escapada de JSON
ddev wp search-replace 'https:\/\/www.misitio.com' 'https:\/\/mi-sitio.ddev.site' --all-tables --precise
```

- `--all-tables`: incluye tablas de plugins con otro prefijo.
- `--precise`: más lento, pero seguro con datos serializados complejos.
- **Haz `ddev snapshot` antes** para poder volver atrás en segundos.

---

## 7. Comandos del día a día

| Qué quiero | Comando |
|---|---|
| Levantar / apagar el proyecto | `ddev start` / `ddev stop` |
| Apagar todo (liberar RAM) | `ddev poweroff` |
| Abrir sitio / admin | `ddev launch` / `ddev launch /wp-admin/` |
| Ver URLs y credenciales | `ddev describe` |
| WP-CLI | `ddev wp plugin list`, `ddev wp user list`, `ddev wp cache flush` |
| Refrescar enlaces permanentes | `ddev wp rewrite flush` |
| Entrar al contenedor | `ddev ssh` |
| Ejecutar algo en una subcarpeta | `ddev exec --dir /var/www/html/wp-content/themes/mi-tema npm run build` |
| Logs en vivo | `ddev logs -f` (web) / `ddev logs -s db` (base de datos) |
| Aplicar cambios de `.ddev/config.yaml` | `ddev restart` |
| Forzar sincronización de archivos | `ddev mutagen sync` |
| Borrar el proyecto de DDEV (no los archivos) | `ddev delete --omit-snapshot` |

> **Ruido de WP-CLI en PHP 8.5:** los mensajes `PHP Deprecated … wp-cli/vendor/…` vienen del propio
> WP-CLI, no de tu sitio. Para ocultarlos: `ddev wp plugin list 2>&1 | grep -v Deprecated`.

---

## 8. Base de datos, correo, Node y Xdebug

### Base de datos

```bash
ddev snapshot                                  # foto rápida antes de algo riesgoso
ddev snapshot --list
ddev snapshot restore --latest
ddev export-db --file=/tmp/respaldo.sql.gz     # dump completo
ddev import-db --file=/tmp/respaldo.sql.gz
ddev mysql                                     # consola SQL
```

Cliente gráfico (TablePlus, DBeaver, Sequel Ace): `ddev describe` muestra el puerto en `127.0.0.1`;
usuario `db`, clave `db`, base `db`.

### Correo (Mailpit)

Todo lo que envía `wp_mail()` (formularios, recuperar contraseña) queda en:

```
https://innspiratech.ddev.site:8026
```

Así pruebas formularios sin enviar correos reales por error.

### Node y Composer

```bash
ddev npm -v                 # Node del contenedor (en la raíz del proyecto)
ddev composer install
ddev exec --dir /var/www/html/wp-content/themes/innspiratech npm run build
```

### Xdebug

```bash
ddev xdebug on      # activar (hace más lento PHP: apágalo al terminar)
ddev xdebug off
```

En VS Code: extensión *PHP Debug*, configuración "Listen for Xdebug" en el puerto 9003 y mapeo
`/var/www/html` → carpeta del proyecto.

---

## 9. De local a producción

**Antes de subir**

- [ ] `ddev tema build` (o el build de tu tema) — el CSS compilado debe ir en los archivos.
- [ ] Borra clientes y contenidos de ejemplo que no uses.
- [ ] Revisa textos legales (política de privacidad) con un asesor.

**Paso 1 — Exportar**

```bash
ddev export-db --file=/tmp/innspiratech.sql.gz
```

Archivos a subir: `wp-content/themes/innspiratech` (sin `node_modules`),
`wp-content/mu-plugins`, `wp-content/uploads`, y los plugins que instales.

**Paso 2 — En el servidor**

1. Instala WordPress (o sube el núcleo) y crea la base de datos.
2. Importa el `.sql`.
3. Cambia el dominio:

   ```bash
   wp search-replace 'https://innspiratech.ddev.site' 'https://innspiratech.com' --all-tables --precise
   wp rewrite flush
   ```

**Paso 3 — `wp-config.php` de producción**

```php
define( 'WP_DEBUG', false );
define( 'WP_ENVIRONMENT_TYPE', 'production' );
define( 'DISALLOW_FILE_EDIT', true );    // sin editor de código en el admin
define( 'FORCE_SSL_ADMIN', true );
// Genera claves nuevas en https://api.wordpress.org/secret-key/1.1/salt/
```

**Paso 4 — Checklist final**

- [ ] HTTPS activo y redirección de `http` y `www` a una sola versión del dominio.
- [ ] *Ajustes → Lectura*: "Disuadir a los motores de búsqueda" **desmarcado**.
- [ ] Plugin SMTP configurado (los formularios deben llegar a tu correo real).
- [ ] Cambia la contraseña del administrador.
- [ ] Caché de página (LiteSpeed Cache, WP Rocket o la del hosting) y respaldos automáticos.
- [ ] Google Search Console: verifica el dominio y envía `https://innspiratech.com/wp-sitemap.xml`.
- [ ] Google Analytics 4: pega el ID en *Personalizar → InnspiraTech → SEO y analítica*.
- [ ] Prueba de resultados enriquecidos y PageSpeed Insights en móvil.

---

## 10. De producción a local

Para trabajar con los datos más recientes:

```bash
ddev snapshot                                            # por si acaso
ssh usuario@servidor "wp db export - | gzip" > /tmp/prod.sql.gz
ddev import-db --file=/tmp/prod.sql.gz
ddev wp search-replace 'https://innspiratech.com' 'https://innspiratech.ddev.site' --all-tables --precise
ddev wp rewrite flush
```

---

## 11. Problemas comunes

| Síntoma | Causa y solución |
|---|---|
| `Cannot connect to the Docker daemon` | Docker Desktop cerrado. Ábrelo. |
| `503` al abrir el sitio | El contenedor está arrancando. Espera unos segundos o `ddev restart`. |
| *Error al establecer una conexión con la base de datos* | El `require` de `wp-config-ddev.php` quedó después de los `define()` (sección 5). |
| Redirige al dominio viejo | Faltó `search-replace` (sección 6). |
| 404 en todas las páginas menos la portada | `ddev wp rewrite flush`. |
| Cambié `.ddev/config.yaml` y no pasa nada | `ddev restart`. |
| El navegador desconfía del certificado | `mkcert -install` (pide la contraseña del Mac) y `ddev restart`. |
| Los cambios de archivos tardan en verse | Mutagen sincronizando: `ddev mutagen sync`. |
| Puerto 80/443 ocupado | Otro servidor local (XAMPP, Valet, Herd) usa el puerto. Apágalo o `ddev poweroff`. |
| Pantalla blanca | `ddev logs -f` o `WP_DEBUG_LOG` (sección 5). |
| Límite de subida de archivos | `.ddev/php/uploads.ini` (Caso C) y `ddev restart`. |
| El proyecto no aparece en `ddev list` tras mover la carpeta | `cd` a la nueva ruta y `ddev start`. |

---

## 12. Ficha del proyecto InnspiraTech

| Dato | Valor |
|---|---|
| Carpeta | `/Volumes/Innspira/WordpressProjects/innspiratech` |
| Sitio | https://innspiratech.ddev.site |
| Admin | https://innspiratech.ddev.site/wp-admin/ |
| Correos (Mailpit) | https://innspiratech.ddev.site:8026 |
| Usuario admin | `innspira_admin` (cambiar clave: `ddev wp user update innspira_admin --user_pass='…'`) |
| WordPress / PHP / BD | 7.1 (es_CO) / 8.5 / MariaDB 11.8 |
| Tema | `wp-content/themes/innspiratech` |
| Funcionalidad | `wp-content/mu-plugins/innspiratech-core` |

Comandos propios del proyecto:

```bash
ddev tema build                     # compilar CSS (Tailwind v4)
ddev tema dev                       # compilar al guardar
ddev wp innspiratech seed           # recargar el contenido inicial (sobrescribe esos contenidos)
ddev wp rewrite flush
```

Para el detalle de cómo se construyó el tema: [03-de-html-a-tema-wordpress.md](03-de-html-a-tema-wordpress.md).

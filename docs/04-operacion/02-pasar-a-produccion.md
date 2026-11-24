# Pasar a producción

**Fecha de lanzamiento: 20 de enero de 2027.**

El sitio vive hoy en local con DDEV. Esta es la ruta para publicarlo sin perder
contenido, sin romper el calendario del blog y sin que Google indexe algo a
medias.

## Antes de la migración

| Tarea | Detalle |
|---|---|
| Dominio | `innspiratech.com` registrado **a nombre de la empresa**, con renovación automática |
| Hosting | PHP 8.2 o superior, MariaDB/MySQL con soporte, SSL incluido, acceso SSH y WP-CLI si es posible |
| Correo | Correo corporativo del dominio, separado del hosting si se puede |
| Copia | Volcado de la base local y copia de `wp-content/uploads/` |

Requisito del hosting que no es negociable: **tarea programada (cron) real**. El
blog depende de ella.

## Migración, paso a paso

### 1. Exportar desde local

```bash
cd /Volumes/Innspira/WordpressProjects/innspiratech
ddev export-db --file=../innspiratech-$(date +%Y%m%d).sql.gz
tar -czf ../uploads-$(date +%Y%m%d).tar.gz wp-content/uploads
```

### 2. Subir el código

El repositorio no incluye el núcleo de WordPress. En el servidor:

```bash
git clone git@github.com:JuanGit96/InnspiraTech.git .
wp core download --locale=es_CO --skip-content
```

El tema y el mu-plugin vienen del repositorio; el núcleo se descarga limpio.

### 3. Importar la base de datos y cambiar las URLs

```bash
wp db import innspiratech-AAAAMMDD.sql
wp search-replace 'https://innspiratech.ddev.site' 'https://innspiratech.com' --all-tables
wp search-replace 'innspiratech.ddev.site' 'innspiratech.com' --all-tables
wp cache flush
wp rewrite flush
```

### 4. Restaurar las imágenes

```bash
tar -xzf uploads-AAAAMMDD.tar.gz -C .
chown -R www-data:www-data wp-content/uploads
```

Las 120 portadas del blog están en `uploads` porque el seed las importó. Si algo
se pierde, se regeneran con `wp innspiratech seed --solo=posts`.

### 5. Zona horaria y cron

**No cambiar la zona horaria del sitio** (`America/Bogota`): las fechas
programadas de los 97 artículos dependen de ella.

En `wp-config.php`:

```php
define( 'DISABLE_WP_CRON', true );
```

Y en el servidor, cada cinco minutos:

```cron
*/5 * * * * cd /ruta/al/sitio && wp cron event run --due-now >/dev/null 2>&1
```

Sin esto, las publicaciones programadas se retrasan hasta que alguien visite el
sitio. Como red de seguridad, el mu-plugin publica igualmente lo que ya venció
(`publicacion.php`), pero el cron real es lo correcto.

### 6. Seguridad y ajustes finales

```bash
wp option update blog_public 1          # permitir indexación (clave)
wp user list                            # revisar usuarios; borrar los de prueba
```

- Contraseña nueva y fuerte para el administrador, con doble factor si el
  hosting lo permite.
- `define( 'DISALLOW_FILE_EDIT', true );` en `wp-config.php`.
- Certificado SSL activo y redirección forzada a HTTPS.
- Copias de seguridad automáticas **fuera del servidor**, probadas una vez.

## El día del lanzamiento

1. **Comprobar que el sitio es indexable**: *Ajustes → Lectura* sin la casilla de
   «disuadir a los motores de búsqueda», y `/robots.txt` mostrando `Allow: /`.
2. **Recorrer las páginas clave** como un visitante: portada, los 12 servicios,
   blog, nosotros, contacto.
3. **Enviar el formulario de contacto** y confirmar que llega el correo y que el
   lead queda registrado.
4. **Probar el botón de WhatsApp** y el enlace de correo.
5. **Verificar el sitio en Google Search Console** y enviar
   `https://innspiratech.com/wp-sitemap.xml`.
6. **Comprobar `/llms.txt`** y `/llms-full.txt`.
7. **Revisar la analítica en tiempo real**: si no aparece nadie, algo falta.
8. **Confirmar los artículos publicados**: deberían verse 23.

```bash
wp post list --post_type=post --post_status=publish --format=count   # 23
wp post list --post_type=post --post_status=future --format=count    # 97
```

## Qué pasa con el blog

| Cuándo | Qué ocurre |
|---|---|
| Hasta el 15 de enero de 2027 | Se publican solos los 23 artículos de arranque |
| 20 de enero de 2027 | Lanzamiento con 23 artículos ya visibles |
| Del 20 de enero al 1 de septiembre de 2027 | Los 97 restantes salen lunes, miércoles y viernes a las 9:00 |

Si la migración se hace **después** de una fecha programada, esos artículos se
publican en cuanto el cron corra, de diez en diez cada cinco minutos.

## La semana siguiente

- Revisar errores 404 en Search Console.
- Comprobar que las páginas se están indexando.
- Medir velocidad en móvil con datos reales.
- Revisar que los correos del formulario no caigan en spam (SPF, DKIM y DMARC
  del dominio).
- Empezar a pedir reseñas en Google.

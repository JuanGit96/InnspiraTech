# Entorno local

El proyecto corre en **DDEV** (Docker). No hace falta instalar PHP, MySQL ni
nada más en el equipo.

## Arrancar

```bash
cd /Volumes/Innspira/WordpressProjects/innspiratech
ddev start
```

| Qué | Dónde |
|---|---|
| Sitio | https://innspiratech.ddev.site |
| Admin | https://innspiratech.ddev.site/wp-admin/ (usuario `innspira_admin`) |
| Correos de prueba | https://innspiratech.ddev.site:8026 (Mailpit) |

## Montar desde cero en otra máquina

El repositorio **no incluye** el núcleo de WordPress, los plugins de terceros,
las subidas ni la base de datos. Para levantarlo:

```bash
git clone git@github.com:JuanGit96/InnspiraTech.git innspiratech
cd innspiratech
ddev start
ddev wp core download --locale=es_CO
ddev wp core install --url=https://innspiratech.ddev.site \
  --title=InnspiraTech --admin_user=innspira_admin \
  --admin_email=proyectos@innspiratech.com
ddev tema install && ddev tema build
ddev wp innspiratech seed
ddev wp innspiratech seed --solo=enlaces
ddev wp rewrite flush
```

Si se tiene un volcado de la base de datos real, en vez del seed:

```bash
ddev import-db --file=respaldo.sql.gz
ddev wp search-replace 'https://innspiratech.com' 'https://innspiratech.ddev.site' --all-tables
```

Las imágenes del blog se recrean con el seed (están en `seed/img/`); las subidas
hechas desde el admin hay que copiarlas aparte a `wp-content/uploads/`.

## Comandos del día a día

```bash
ddev tema dev                 # compila CSS al vuelo mientras se edita
ddev wp post list --post_type=post --post_status=future   # ver programados
ddev wp cron event run --due-now                           # forzar publicaciones
ddev exec wp eval 'echo it_llms_txt();'                    # probar /llms.txt
ddev stop / ddev restart / ddev describe
```

## Qué NO se versiona

Está en `.gitignore`: núcleo de WordPress, `wp-config.php`, plugins de terceros,
`wp-content/uploads/`, `node_modules/` y cualquier `.sql`. Lo que sí viaja en el
repositorio es el tema, el mu-plugin con su contenido semilla y sus imágenes, la
configuración de DDEV y esta documentación.

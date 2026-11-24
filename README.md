# InnspiraTech — sitio WordPress

Sitio corporativo y blog de InnspiraTech (software, IA y transformación digital), convertido desde la
plantilla HTML `innspiratech_web`.

- Sitio: https://innspiratech.ddev.site
- Admin: https://innspiratech.ddev.site/wp-admin/ (usuario `innspira_admin`)
- Correos de prueba (Mailpit): https://innspiratech.ddev.site:8026

## Documentación

La carpeta [`docs/`](docs/README.md) explica qué es el negocio, cómo está
construido el sitio, la estrategia de SEO y de contenidos, y cómo pasar a
producción. Si llegas nuevo al proyecto, empieza por ahí.

| Tema | Archivo |
|---|---|
| Qué es InnspiraTech y cómo vende | [docs/00-contexto](docs/00-contexto/01-que-es-innspiratech.md) |
| Cómo está hecho el sitio | [docs/01-sitio](docs/01-sitio/01-arquitectura.md) |
| SEO y búsquedas con IA | [docs/02-seo](docs/02-seo/01-estrategia.md) |
| Contenidos, redes y pauta | [docs/03-marketing](docs/03-marketing/01-plan-de-contenidos.md) |
| Entorno local y producción | [docs/04-operacion](docs/04-operacion/01-entorno-local.md) |

## Arrancar

```bash
cd /Volumes/Innspira/WordpressProjects/innspiratech
ddev start
ddev launch
```

## Qué hay dónde

| Ruta | Contenido |
|---|---|
| `wp-content/themes/innspiratech/` | Tema (plantillas PHP + Tailwind v4 compilado) |
| `wp-content/themes/innspiratech/src/css/app.css` | Hoja de entrada de Tailwind (editar aquí) |
| `wp-content/themes/innspiratech/assets/css/app.css` | CSS compilado (no editar a mano) |
| `wp-content/mu-plugins/innspiratech-core/` | Servicios, planes, clientes, leads, SEO, schema y comando de contenido inicial |
| `.ddev/commands/web/tema` | Atajo `ddev tema build/dev/install` |

## Comandos

```bash
ddev tema build                 # compilar CSS minificado
ddev tema dev                   # compilar al guardar cambios
ddev wp innspiratech seed       # (re)cargar contenido inicial — sobrescribe esos contenidos
ddev wp rewrite flush           # tras cambiar tipos de contenido o enlaces permanentes
```

## Administrar contenido

| Qué | Dónde |
|---|---|
| Textos del hero, correo, WhatsApp, redes, SEO global, GA4 | Apariencia → Personalizar → InnspiraTech |
| Servicios (+ íconos, beneficios, FAQ, SEO) | Servicios |
| Planes con precio | Servicios → Planes y precios |
| Logos de clientes (gris → color al pasar el mouse) | Clientes (logo = imagen destacada, campo "Sitio web") |
| Mensajes de formularios | Leads |
| Artículos del blog | Entradas (caja SEO + "Servicio relacionado") |
| Menús | Apariencia → Menús |

Guías completas en la carpeta superior:
`GUIA-HTML-A-TEMA-WORDPRESS.md` y `GUIA-WORDPRESS-CON-DDEV.md`.

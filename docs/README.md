# Documentación de InnspiraTech

Esta carpeta existe para que alguien que llega sin contexto —una persona nueva en
el equipo o un modelo de lenguaje al que le pasan el repositorio— entienda **qué
es este negocio, cómo gana dinero y por qué el sitio está construido como está**,
sin tener que deducirlo leyendo plantillas PHP.

No describe un plan: describe lo que hay construido a **24 de noviembre de 2026**.
Donde algo está pendiente, lo dice.

## Por dónde empezar

Si solo vas a leer tres archivos, que sean estos, en este orden:

1. [Qué es InnspiraTech](00-contexto/01-que-es-innspiratech.md) — el negocio en una página.
2. [El enfoque](00-contexto/02-enfoque-y-propuesta.md) — por qué vendemos un número que sube y no software.
3. [Arquitectura del sitio](01-sitio/01-arquitectura.md) — cómo está organizado el código.

Y antes de escribir cualquier texto que vea un cliente, lee las
[reglas de honestidad](00-contexto/03-reglas-de-honestidad.md).

## Índice completo

### 00 · Contexto del negocio

| Archivo | Qué responde |
|---|---|
| [01-que-es-innspiratech.md](00-contexto/01-que-es-innspiratech.md) | Qué vendemos, a quién y cómo gana dinero la empresa |
| [02-enfoque-y-propuesta.md](00-contexto/02-enfoque-y-propuesta.md) | El método de cinco pasos, la promesa de tres partes y cómo escribir con ese enfoque |
| [03-reglas-de-honestidad.md](00-contexto/03-reglas-de-honestidad.md) | Lo que nunca se promete ni se publica |

### 01 · El sitio

| Archivo | Qué responde |
|---|---|
| [01-arquitectura.md](01-sitio/01-arquitectura.md) | Stack, tema, mu-plugin, tipos de contenido y campos |
| [02-contenido-y-comandos.md](01-sitio/02-contenido-y-comandos.md) | Cómo se carga el contenido, los comandos de DDEV y cómo añadir un artículo |
| [03-de-html-a-tema-wordpress.md](01-sitio/03-de-html-a-tema-wordpress.md) | Guía paso a paso de cómo se convirtió la plantilla HTML en un tema |
| [04-wordpress-con-ddev.md](01-sitio/04-wordpress-con-ddev.md) | Guía para montar proyectos WordPress nuevos o existentes con DDEV |

### 02 · SEO y visibilidad

| Archivo | Qué responde |
|---|---|
| [01-estrategia.md](02-seo/01-estrategia.md) | Cómo pretendemos llegar al primer lugar y por qué atacamos búsquedas de decisión |
| [02-implementacion.md](02-seo/02-implementacion.md) | Dónde está cada pieza técnica en el código |
| [03-busquedas-con-ia.md](02-seo/03-busquedas-con-ia.md) | Cómo aparecer en ChatGPT, Claude, Perplexity y los resúmenes de Google |
| [04-checklist-de-contenido.md](02-seo/04-checklist-de-contenido.md) | Qué revisar antes de publicar cualquier texto |

### 03 · Marketing y contenidos

| Archivo | Qué responde |
|---|---|
| [01-plan-de-contenidos.md](03-marketing/01-plan-de-contenidos.md) | Crecimiento orgánico: blog, YouTube, LinkedIn, Instagram, Facebook y TikTok |
| [02-pauta-con-poco-presupuesto.md](03-marketing/02-pauta-con-poco-presupuesto.md) | Cómo invertir menos de 20 USD al mes sin tirarlos |
| [03-plan-editorial-del-blog.md](03-marketing/03-plan-editorial-del-blog.md) | Los 120 artículos con fecha, palabra clave e intención |

### 04 · Operación

| Archivo | Qué responde |
|---|---|
| [01-entorno-local.md](04-operacion/01-entorno-local.md) | Arrancar el proyecto y montarlo en otra máquina |
| [02-pasar-a-produccion.md](04-operacion/02-pasar-a-produccion.md) | La migración del 20 de enero de 2027, paso a paso |
| [03-pendientes.md](04-operacion/03-pendientes.md) | Lo que falta, ordenado por impacto |

## Las cinco cosas que hay que saber sí o sí

1. **Vendemos resultados, no software.** Cada proyecto acuerda un indicador, mide
   su línea base y reporta cómo quedó.
2. **El SEO vive en el mu-plugin**, no en el tema. Cambiar de diseño no debe
   costar posicionamiento.
3. **El blog está programado** hasta septiembre de 2027 y depende de la zona
   horaria y del cron del servidor.
4. **Los rastreadores de IA están permitidos a propósito.** Es un canal, no una
   amenaza.
5. **Nunca se publican cifras inventadas** ni nombres de clientes sin permiso.

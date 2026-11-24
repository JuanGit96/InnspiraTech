# Aparecer en búsquedas con IA

Cada vez más decisores preguntan «¿cuánto cuesta desarrollar una app?» o «¿qué
empresa me puede integrar el ERP con IA?» a ChatGPT, Claude, Perplexity, Gemini o
a los resúmenes de IA de Google, y no abren diez pestañas. El objetivo cambia: ya
no basta con salir primero, hay que **ser la fuente que el modelo cita**.

Se suele llamar AEO (*Answer Engine Optimization*) o GEO (*Generative Engine
Optimization*). El nombre importa poco; las palancas se solapan con el SEO
clásico pero no son idénticas.

## Qué hace que un modelo te cite

### 1. Respuestas extraíbles, no párrafos de relleno

Un modelo busca un fragmento que responda la pregunta completa. Un párrafo que
empieza «En el dinámico panorama de la transformación digital…» no sirve. Uno que
empieza «Una tienda en WooCommerce para un catálogo mediano cuesta entre X y Y, y
el factor que más mueve el precio es el número de integraciones» sí.

**Cómo se aplica aquí:** cada artículo responde en la primera frase después del
subtítulo. Los subtítulos están escritos como preguntas reales. Las preguntas
frecuentes de cada página responden directo y desarrollan después.

### 2. Datos estructurados

Los modelos usan el marcado para entender de qué va la página. El sitio emite
`Organization` (con `knowsAbout` y `areaServed`), `WebSite`, `WebPage`,
`BreadcrumbList`, `BlogPosting` (con `about` apuntando al servicio),
`Service` + `Offer` + `audience` + `serviceOutput`, `FAQPage`, `ItemList` y
`speakable`.

`serviceOutput` es el que más nos distingue: le dice al modelo *qué resultado
produce* cada servicio, no solo cómo se llama.

### 3. Cifras, plazos y criterios concretos

Lo citable es lo específico. «Entre 1 y 3 meses», «entre 15 y 60 clics al mes»,
«tres a seis meses hasta el primer cliente atribuible». Lo genérico no se cita
porque no agrega nada a lo que el modelo ya sabe.

Cuando no tenemos un dato propio, damos **rangos honestos y decimos de qué
dependen**. Nunca inventamos cifras: un modelo que cite un dato falso nuestro nos
hace daño el día que alguien lo verifique.

### 4. Autoría y confianza

Entre dos fuentes equivalentes, un modelo prefiere la que tiene autor
identificado, fecha de actualización y señales de que detrás hay una empresa
real. El sitio ya publica fecha de publicación y de actualización, caja de autor
y datos de contacto verificables.

**Pendiente:** firmar los artículos con una persona real y su biografía, en lugar
de con la marca.

### 5. `robots.txt` y `/llms.txt`

- `robots.txt` **permite explícitamente** a GPTBot, OAI-SearchBot, ChatGPT-User,
  ClaudeBot, Claude-User, Claude-SearchBot, PerplexityBot, Perplexity-User,
  Google-Extended, Applebot-Extended, Bingbot y otros. Bloquearlos nos sacaría de
  ese canal entero; es una decisión tomada, no un descuido.
- **`/llms.txt`** es un índice en Markdown de qué es el sitio, qué servicios hay y
  qué resuelve cada artículo, pensado para que un modelo lo lea de una sola vez.
  **`/llms-full.txt`** incluye todos los artículos publicados con su descripción.
  Se generan solos desde la base de datos: no hay que mantenerlos a mano.

Son una propuesta emergente, no un estándar aceptado por todos los buscadores.
El costo de tenerlos es cero y el beneficio potencial es alto.

### 6. Ser mencionado en otros sitios

Los modelos se apoyan en lo que otros dicen de nosotros, no solo en lo que
decimos. Las palancas aquí son las mismas del SEO: directorios del sector,
gremios, medios, publicaciones como invitado, y contenido lo bastante útil para
que alguien lo enlace.

## Lo que hay que vigilar

- **El contenido debe ser legible sin JavaScript.** Aquí lo es: el tema es PHP
  clásico, el JS es progresivo y las preguntas frecuentes usan `<details>`.
- **La velocidad importa** por la misma razón de siempre.
- **No bloquear a los rastreadores de IA por error** al instalar un plugin de
  seguridad o un CDN. Es el fallo más común y silencioso.
- **El contenido programado no existe para los modelos.** `/llms.txt` solo lista
  artículos publicados, que es lo correcto.

## Cómo medirlo

No hay una herramienta fiable todavía. Lo que sí se puede hacer, una vez por
trimestre:

1. Preguntar en ChatGPT, Claude, Perplexity y Gemini las diez consultas que más
   nos importan («empresa para integrar WhatsApp con el CRM en Colombia»,
   «cuánto cuesta un agente de IA para atención al cliente») y anotar si
   aparecemos y con qué texto.
2. Revisar en la analítica las visitas que llegan con origen de esos dominios.
3. Vigilar las búsquedas de marca en Search Console: si crecen sin que crezca la
   pauta, algo nos está citando.

## Pendientes

- Firmar artículos con persona real y biografía (`Person` en el JSON-LD).
- Marcado `HowTo` en los artículos que son pasos.
- Medir el canal con parámetros de seguimiento donde se pueda.
- Revisar `/llms.txt` después del lanzamiento, cuando los 23 primeros artículos
  estén publicados.

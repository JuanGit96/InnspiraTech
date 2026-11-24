# Pendientes

Lo que falta, ordenado por lo que más mueve la aguja. Actualizado el 24 de
noviembre de 2026.

## Antes del lanzamiento (20 de enero de 2027)

- [ ] Comprar y apuntar el dominio `innspiratech.com`, con correo corporativo.
- [ ] Contratar hosting y migrar: ver [pasar a producción](02-pasar-a-produccion.md).
- [ ] Rellenar en *Personalizar → InnspiraTech* los datos que hoy están vacíos:
      **WhatsApp, teléfono, ubicación, área servida** y las **redes sociales**.
      El área servida alimenta `areaServed` en los datos estructurados.
- [ ] Subir los **logos reales de clientes** (hoy hay dos de ejemplo) y confirmar
      que tenemos permiso para mostrarlos.
- [ ] Revisar los **precios** de los planes y de los servicios.
- [ ] Añadir **foto del autor** (avatar) y, si existen, sus perfiles públicos en
      *Usuarios → Perfil*. Los artículos ya los firma Juan Daniel Cárdenas
      Dávila, CEO y fundador, con página propia en `/blog/autor/`.
- [ ] Crear y completar el **Google Business Profile**.
- [ ] Verificar el sitio en **Google Search Console** y pegar el código en
      *Personalizar → SEO*.
- [ ] Configurar **GA4** y las conversiones (formulario, WhatsApp, correo).
- [ ] Revisar textos legales: política de privacidad y tratamiento de datos.

## Primeros 90 días

- [ ] Publicar los primeros 4 videos de YouTube (ver
      [plan de contenidos](../03-marketing/01-plan-de-contenidos.md)).
- [ ] Activar la campaña mínima de Google Ads (ver
      [pauta](../03-marketing/02-pauta-con-poco-presupuesto.md)).
- [ ] Conseguir las primeras 10 reseñas en Google.
- [ ] Publicar **dos casos reales con cifras** y permiso del cliente. Es el
      contenido que más convierte y el que no se puede copiar.
- [ ] Revisar en Search Console qué artículos quedaron en la segunda página y
      mejorarlos.

## Mejoras técnicas (sin urgencia)

- [ ] Marcado `HowTo` en los artículos que son pasos.
- [ ] Página de autor con biografía (`/autor/{slug}/`) y `Person` en el JSON-LD.
- [ ] Páginas por ciudad si se decide atacar búsquedas locales.
- [ ] Newsletter: hoy el formulario existe pero no está conectado a ninguna
      herramienta de envío.
- [ ] Panel sencillo de leads con origen de campaña.
- [ ] Revisar Core Web Vitals con datos reales de campo tras el lanzamiento.

## Decisiones tomadas que conviene no revertir por descuido

- **Los rastreadores de IA están permitidos** en `robots.txt`. Es deliberado.
- **El SEO vive en el mu-plugin**, no en el tema.
- **El parámetro del formulario es `it_servicio`**, no `servicio`: con ese nombre
  WordPress mostraba la ficha del servicio en lugar de la página de contacto.
- **Tailwind va compilado**, nunca por CDN.

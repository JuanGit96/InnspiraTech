/**
 * InnspiraTech — interacciones del tema (JS puro, sin jQuery).
 * Se carga con defer: no bloquea el renderizado.
 */
(function () {
	'use strict';

	var d = document;

	/* Sombra del encabezado al hacer scroll */
	var header = d.querySelector('[data-header]');
	function onScroll() {
		if (header) header.classList.toggle('shadow-md', window.scrollY > 8);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	/* Menú móvil */
	var toggle = d.querySelector('[data-menu-toggle]');
	var panel = d.getElementById('menu-movil');
	if (toggle && panel) {
		var setOpen = function (open) {
			toggle.setAttribute('aria-expanded', String(open));
			toggle.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
			panel.classList.toggle('hidden', !open);
			d.body.classList.toggle('overflow-hidden', open);
			toggle.querySelector('[data-icon-open]').classList.toggle('hidden', open);
			toggle.querySelector('[data-icon-close]').classList.toggle('hidden', !open);
		};
		toggle.addEventListener('click', function () {
			setOpen(toggle.getAttribute('aria-expanded') !== 'true');
		});
		d.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
				setOpen(false);
				toggle.focus();
			}
		});
		window.matchMedia('(min-width: 1024px)').addEventListener('change', function (e) {
			if (e.matches) setOpen(false);
		});
	}

	/* Aparición suave de secciones */
	var reveal = d.querySelectorAll('[data-reveal]');
	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if ('IntersectionObserver' in window && !reduce) {
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					io.unobserve(entry.target);
				}
			});
		}, { rootMargin: '0px 0px -8% 0px' });
		reveal.forEach(function (el) { io.observe(el); });
	} else {
		reveal.forEach(function (el) { el.classList.add('is-visible'); });
	}

	/* Índice de contenidos: resalta la sección visible */
	var tocLinks = d.querySelectorAll('.toc a[href^="#"]');
	if (tocLinks.length && 'IntersectionObserver' in window) {
		var byId = {};
		tocLinks.forEach(function (a) {
			byId[decodeURIComponent(a.getAttribute('href').slice(1))] = a;
		});
		var headingObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (!entry.isIntersecting) return;
				tocLinks.forEach(function (a) { a.classList.remove('is-active'); });
				if (byId[entry.target.id]) byId[entry.target.id].classList.add('is-active');
			});
		}, { rootMargin: '-15% 0px -70% 0px' });
		Object.keys(byId).forEach(function (id) {
			var heading = d.getElementById(id);
			if (heading) headingObserver.observe(heading);
		});
	}

	/* Copiar enlace del artículo */
	d.querySelectorAll('[data-copy-link]').forEach(function (btn) {
		btn.addEventListener('click', function () {
			var url = btn.getAttribute('data-copy-link');
			var label = btn.querySelector('[data-copy-label]');
			var done = function () {
				if (!label) return;
				var previous = label.textContent;
				label.textContent = '¡Copiado!';
				setTimeout(function () { label.textContent = previous; }, 2000);
			};
			if (navigator.clipboard) {
				navigator.clipboard.writeText(url).then(done, function () { window.prompt('Copia el enlace:', url); });
			} else {
				window.prompt('Copia el enlace:', url);
			}
		});
	});

	/* Evita envíos dobles de formularios */
	d.querySelectorAll('form[data-lead-form]').forEach(function (form) {
		form.addEventListener('submit', function () {
			var button = form.querySelector('[type="submit"]');
			if (button) {
				button.disabled = true;
				button.setAttribute('aria-busy', 'true');
			}
		});
	});
})();

<?php
/**
 * Portada: adelanto de la futura Academia (cursos y capacitaciones).
 *
 * @package InnspiraTech
 */

defined( 'ABSPATH' ) || exit;

$it_academy = it_page_url( 'academia' );
?>
<section class="bg-white pb-20 lg:pb-28" aria-labelledby="academia-titulo">
	<div class="container-it">
		<div class="relative isolate overflow-hidden rounded-3xl bg-linear-to-br from-inblue to-indigo-700 px-8 py-14 text-white sm:px-14 lg:flex lg:items-center lg:justify-between lg:gap-12" data-reveal>
			<div aria-hidden="true" class="absolute -top-24 -right-24 -z-10 size-80 rounded-full bg-cyan-300 opacity-25 blur-3xl"></div>
			<div class="max-w-2xl">
				<p class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-sm font-bold">
					<?php echo it_icon( 'academic-cap', 'size-4' ); // phpcs:ignore ?> Próximamente · InnspiraTech Academy
				</p>
				<h2 id="academia-titulo" class="mt-5 text-3xl font-bold tracking-tight sm:text-4xl">Cursos y capacitaciones tech para equipos que quieren ir más rápido</h2>
				<p class="mt-4 text-lg leading-relaxed text-blue-100">IA aplicada, servidores MCP, desarrollo web profesional y transformación digital para líderes. Únete a la lista de espera y recibe acceso anticipado.</p>
			</div>
			<div class="mt-8 shrink-0 lg:mt-0">
				<a href="<?php echo esc_url( $it_academy . '#form-academia' ); ?>" class="btn btn-lg bg-white text-indark shadow-lg hover:bg-blue-50">Unirme a la lista de espera</a>
			</div>
		</div>
	</div>
</section>

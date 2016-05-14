<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content">
		<div class="container">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Não encontrado', 'odin' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'Desculpe, mas o conteúdo buscado não foi encontrado. Utilize a barra de search abaixo:', 'odin' ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</div>
	</main>

<?php
get_footer();

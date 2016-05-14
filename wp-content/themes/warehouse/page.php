<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content">
		<div class="container">
			<?php
				while ( have_posts() ) : the_post();

					// title
					echo '<div class="content-tit">';
						echo '<h1>' . get_the_title() . '</h1>';
					echo '</div>';

					// content
					the_content();
				endwhile;
			?>
		</div>
	</main>

<?php
get_footer();

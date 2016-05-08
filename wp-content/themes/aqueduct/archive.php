<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package HowlThemes
 */

get_header();

$catID = get_query_var('cat');

?>
<div class="main-outer container">
	<div class="grid_7">
		<div class="content-last-posts">
			<div class="content-title-posts first green-border">
				<h3 class="maven_promedium"><?php single_cat_title(''); ?></h3>
			</div>

			<!-- LISTA OS POSTS - PARAMETRO: CATEGORIA -->
			<?php lista_posts($catID); ?>

		</div>
	</div>
	<div class="grid_5">
		<div class="content-right most-view grid_5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

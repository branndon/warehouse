<?php
/**
 * @package HowlThemes
 */

get_header(); ?>
<div class="main-outer container">

	<div class="grid_7">
		<main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; // end of the loop. ?>

		</main>
	</div>

	<!-- SIDEBAR -->
	<div class="grid_5">
		<div class="content-right most-view grid_5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

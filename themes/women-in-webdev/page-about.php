
<?php
/**
 * The template for displaying the About page.
 *
 * @package Women_In_Webdev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div class= "max-width-container">
		<main id="main" class="site-main" role="main"> 
       
			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?> 

		</main><!-- #main -->
	</div><!-- #max-width -->
</div><!-- #primary -->


<?php get_footer(); ?>

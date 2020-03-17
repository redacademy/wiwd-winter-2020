<?php
/**
 * The template for displaying all pages.
 *
 * @package Women_In_Webdev_Theme
 */

get_header(); ?>
	<section class= "banner-image">
		<div class="banner-blurb"> 
			<h2>Women in Web Dev Learning Circle</h2>
			<p>The online membership for aspiring female developers to accelerate learning with, <span>mentorship</span> ,<span> support</span> and <span>accountability</span> without the high price tag </p>
		</div>
	</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'membership' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

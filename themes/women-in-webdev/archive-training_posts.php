<?php
/**
 * The template for displaying archive pages.
 *
 * @package Women_In_Webdev_Theme
 */



get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="banner-image">
			<img src="<?php echo get_template_directory_uri();?>/assets/illustrations/Training_Header.svg">
		</div>	

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

	<div class="post-layout">
			<?php the_title( '<h2 class="entry-title"> ', '</h2>' ); ?>


				<?php
					get_template_part( 'template-parts/content' );
				?>

					<div class="post">

						<div class = "post-location">
							<?php if( get_field('location_training') ): ?>
								<?php the_field('location_training'); ?>
							<?php endif; ?>
						</div>

						 <button class="apply-btn">Apply</button>
					</div>
			</div> 

			<?php endwhile; ?>
		
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

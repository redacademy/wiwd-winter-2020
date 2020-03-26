<?php
/**
 * The template for displaying archive pages.
 *
 * @package Women_In_Webdev_Theme
 */



get_header(); ?>

	<div id="primary" class="content-area">
		<div class= "max-width-container">
			<main id="main" class="site-main" role="main">

		<div class="banner-image">
			<img src="<?php echo get_template_directory_uri();?>/assets/illustrations/Training_Header.svg">
		</div>	

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<div class="training-page">
	<div class= "post-container">

		<div class="post-layout">
			<?php the_title( '<h2 class="entry-title"> ', '</h2>' ); ?>


				<h3 class = "post-location">
					<?php if( get_field('training_location') ): ?>
						<?php the_field('training_location'); ?>
						<?php endif; ?>
					</h3>

						<?php
							get_template_part( 'template-parts/content' );
						?>

						<div class="post">

							<div class="btn-flex">
								<button class="apply-btn"><span class="purple-text">Apply</span></button>
							</div>
						</div>

					</div> <!-- #post-layout -->

				<?php endwhile; ?>
					
					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>

				
				</div><!-- #post-container -->
			</div><!-- #training-page -->
		</main><!-- #main -->
	</div><!-- #max-width -->
</div><!-- #primary -->


<?php get_footer(); ?>

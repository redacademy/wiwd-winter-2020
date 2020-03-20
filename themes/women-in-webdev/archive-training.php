<?php
/**
 * The template for displaying archive pages.
 *
 * @package Women_In_Webdev_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<section class="post-layout">
					<div class="post">
	
						<div class="post-title"> 	
							<?php the_title(); ?>
						</div>


						<div class = "post-location">
							<?php if( get_field('location') ): ?>
								<?php the_field('location'); ?>
							<?php endif; ?>
						</div>

						<div class="post-meta">
								
						</div>

					</div>


			<?php endwhile; ?>
	</section>
		

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>

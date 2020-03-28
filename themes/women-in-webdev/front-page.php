
<?php
/**
 * The template for displaying the About page.
 *
 * @package Women_In_Webdev_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<!-- <?php the_widget( 'WP_Widget_Recent_Posts' ); ?> -->

			<div class="featured-posts">
				<h2 class="inner-title"><?php echo esc_html( 'Featured Posts' ); ?></h2>
				<?php $args= array(
						'orderby'    => 'post_date',
						'order'      => 'DESC',
						'numberposts' => 3,
							);
					$query= wp_get_recent_posts( $args);?>
						<?php	foreach($query as $post) : ?>
        			<div class="featured-post-container">
            		<a href="<?php echo get_permalink($post['ID']) ?>">
						<div class="featured-post-inner-container">
						<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
						<p class="post-title"><?php echo $post['post_title'] ?></p>
						<div class="post-category">
						<p class='excerpt'> <?php echo $post['post_excerpt']; ?> </p>
						 <p class='date'><?php echo get_the_date('',$post['ID']);?> </p>
						</div>
						</div>
						</a>
						</div>
				
					<?php endforeach; wp_reset_query(); ?>			
					</div><!-- .widget -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('front-page');?>
<?php get_footer(); ?>

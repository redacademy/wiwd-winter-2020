<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Women_In_Webdev_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php $stuff=the_content(); ?>
		<?php
			var_dump($stuff);
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

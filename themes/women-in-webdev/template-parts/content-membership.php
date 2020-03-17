<?php
/**
 * Template part for displaying posts.
 *
 * @package Women_In_Webdev_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<section>
		<h3>Menbership Benefits</h3>
		<div class= "benefits-grid">
			<artcile class="benefits-container">
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
			<artcile class="benefits-container">				
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
			<artcile class="benefits-container">
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
			<artcile class="benefits-container">
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
			<artcile class="benefits-container">
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
			<artcile class="benefits-container">
				<div class="benefits-image"></div>
				<div class="benefits-description"></div>
			</article>
		</div>
	</section>
	<section class="membership">

		<div class="buttons">
			<button	class="anual"></button>
			<button class="monthly"></button>
		</div>

	</section>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

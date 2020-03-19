<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Women_In_Webdev_Theme
 */

if ( ! is_active_sidebar( 'sponsor' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sponsor' ); ?>
</div><!-- #secondary -->

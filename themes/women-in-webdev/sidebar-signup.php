<?php

/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if (!is_active_sidebar('email_signup')) {
	return;
}
?>
<div id="secondary" class="footer-sign-up" role="complementary">
	<?php dynamic_sidebar('email_signup'); ?>
</div><!-- #secondary -->
	

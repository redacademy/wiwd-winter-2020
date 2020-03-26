<?php

/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if (!is_active_sidebar('legal-info')) {
	return;
}
?>
<div id="secondary" class="footer-info" role="complementary">
    <h2>Women in WebDev</h2>
    <p>&copy; 2020<p>
    <?php dynamic_sidebar('legal-info'); ?>
</div><!-- #secondary -->
	

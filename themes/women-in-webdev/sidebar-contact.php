<?php

/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if (!is_active_sidebar('contact')) {
	return;
}
?>

	<?php dynamic_sidebar('contact'); ?>

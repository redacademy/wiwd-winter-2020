<?php
/**
 * The template for displaying the footer.
 *
 * @package Women_In_Webdev_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class ="max-width-container">
				<div class="footer-wrapper">
				<?php include(TEMPLATEPATH . '/sidebar-legal.php'); ?>	
					<?php get_sidebar('contact')?>
					<?php include(TEMPLATEPATH . '/sidebar-signup.php'); ?>	
				</div>
			</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

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
					<div class="footer-info">
						<h3>Lorem Ipsum dolor sit amet<h3>
							<ul class="ul-no-style">
								<li><a>Lorem Ipsum</a></li>
								<li><a>Ipsum Lorem </a></li>
								<li><a>Muspi Merol</a></li>
							<ul>	
					</div><!-- .footer-info -->
					<!-- <div class="footer-socials">
						<h3>Lorem Ipsum dolor sit amet<h3>
							<ul class="ul-no-style">
								<li><a>Lorem Ipsum</a></li>
								<li><a>Ipsum Lorem </a></li>
							</ul>
							<button>Join the Facebook Group</button>	
					</div> -->
					<?php get_sidebar('contact')?>
					<div class="footer-sign-up">
						<form>
						<label for="email"><h3>Sign Up For Our Newsletter<h3></label>
						<input type="email" name="email">
						<input type="submit" value="Sign Up"> 
						</form>

					</div>
				</div>
			</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

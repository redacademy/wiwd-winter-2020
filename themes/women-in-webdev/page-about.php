
<?php
/**
 * The template for displaying the About page.
 *
 * @package Women_In_Webdev_Theme
 */

get_header(); ?>

    <section class= "banner-image">
        <div class="banner-blurb">
            <h1>About</h1>
                <h2>You're in the right place!</h2>
                <p>Women in Web Dev is a thriving community of over 2,500 female developers in various stages of our coding journeys.
                    You can tap into the community 24/7.
                    No need to wait for the next women in tech event to meet other developers like yourself!
                    <span class="bold">Here are some of the things we do</span>
                </p>
        </div>
    </section>
    
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 

        <section>
            <div>
                <h1>Facebook Group</h1>
                    <p>A private group with over 2,500 women where you can get answers to your questions about coding, career and more!
                    </p>
                <input type="button" id="join-now-btn" value="Join Now">
            </div>

            <div>
                <h1>Blog</h1>
                    <p>Read stories about other female developers, coding tips, how to navigate your coding career and more!
                    </p>
                 <input type="button" id="check-it-out-btn" value="Check it Out"> 
            </div>

            <div>
                <h1>Job Board</h1>
                    <p>You can find handpicked jobs added every week – mostly remote and even some junior positions.
                    </p>
                <input type="button" id="search-jobs-btn" value="Search Jobs"> 
            </div>

     </section>


    <section>
            
        <div>
            <h1>Founding Membership</h1>
                <p>This is a more intimate group where you can get coding support 24/7 from the community through Slack, get help during office hours and learn the non-technical skills to thrive in your career.
                Get on the waitlist.
                </p>
            <input type="button" id="learn-more-btn" value="Learn More"> 
         </div>

        <div>
            <h1>News Letter</h1>
                <p>A bi-weekly email connecting you with the best opportunities for female developers. 
                <span>Opportunities include:</span>
                    <ul>
                        <li>Remote jobs with amazing benefits</li>
                        <li>Internship programs</li>
                        <li>Scholarships for conferences, bootcamps and university</li>
                        <li>Other professional development opportunities!</li>
                        <li>See a sample issue and sign up here.</li>
                    </ul>
                </p>
            <input type="button" id="sign-up-btn" value="Sign Up"> 
        <div>
                   
    </section>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

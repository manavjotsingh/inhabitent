<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			

		<?php wp_footer(); ?>
		<div class="footer">
			<div class="footer-content-wraper">	
				<div class="footer-contact">
					<h3>Contact Info</h3> 
					<p><i class="fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</p> 
					<p><i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"></i> 778-456-7891</p> 
					<div class="footer-social-icons">
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i>
					</div>
				</div> 

				<div class="footer-hours">
					<h3>Business Hours</h3> 
					<p><span class="bold-text">Monday-Friday:</span> 9am to 5pm</p> 
					<p><span class="bold-text">Saturday:</span> 10am to 2pm</p>
					<p><span class="bold-text">Sunday:</span> Closed</p>
				</div> 

				<div class="footer-logo">
					<embed src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg">
				</div> 
				
				
			</div>
			<div class="footer-copyright">
					<p>Copyright © 2019 Inhabitent</p>	
</div>
		</div> <!-- footer end -->

	</body>
</html>

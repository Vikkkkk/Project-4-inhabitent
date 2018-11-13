<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-blocks">
					<div class="contact-info blocks">							
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
						<p><span><i class="fab fa-facebook-square"></i></span><span><i class="fab fa-twitter-square"></i></span><span><i class="fab fa-google-plus-square"></i></span></p>
					</div>		
					
					<div class="business-hours blocks">
						<h3>Business Hours</h3>
						<p><span class="business-day">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="business-day">Saturday:</span> 10am to 2pm</p>
						<p><span class="business-day">Sunday:</span> Closed</p>
					</div>
					<div class="footer-logo blocks">
						<a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>					
					</div>
					</div>
				
				<div class="site-info">
						<p>Copyright © 2019 Inhabitent</p>					
				</div><!-- .site-info -->
				</div> <!--end of site-footer -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

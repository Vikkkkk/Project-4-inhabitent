<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>   

	<!-- <aside class="widget_contact">
		<h2 class="widget-title">Contact Info</h2>			
		<div class="contact_info">
			<p class="contact-text"><i class="fa fa-phone"></i><span><a href="tel:7784567891">778-456-7891</a></span></p>
			<p class="contact-text"><i class="fa fa-envelope"></i><span><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></span></p>
			<p class="contact-text"><i class="fa fa-map-marker"></i><span>1490 W Broadway<br>Vancouver, BC V6H 1H5</span></p>
		</div>
	</aside>

	<aside class="widget_hours">
		<h2 class="widget-title">Business Hours</h2>
		<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm   </p>
		<p><span class="day-of-week">Saturday:</span> 10am to 2pm   </p>
		<p><span class="day-of-week">Sunday:</span> Closed   </p>
	</aside>

	<aside class="widget_archive">
		<h2 class="widget-title">Archives</h2>
	</aside> -->

</div><!-- #secondary -->

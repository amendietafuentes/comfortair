<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comfortair
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pt-5 pb-5">
						<div class="row">
							<h3 class="title-communities-col-one">Communities we serve</h3>
							<div class="col-md-6">
								<?php
									dynamic_sidebar( 'footer-widget-communities-col-one' );
								?>
								<ul class="top-bar__social">
									<li><i class="bi bi-facebook rounded-circle social"></i></li>
									<li><i class="bi bi-youtube rounded-circle social"></i></li>
									<li><i class="bi bi-google rounded-circle social"></i></li>
									<li><i class="bi bi-yelp rounded-circle social"></i></li>
									<li><i class="bi bi-instagram rounded-circle social"></i></li>
									<li><i class="bi bi-rss-fill rounded-circle social"></i></li>
								</ul>
							</div>
							<div class="col-md-6">
								<?php
									dynamic_sidebar( 'footer-widget-communities-col-two' );
								?>
							</div>
						</div>
					</div>
					<div class="col-md-4 pt-5 pb-5">
						<?php
							dynamic_sidebar( 'footer-widget-quick-menu-col-one' );
						?>
					</div>
					<div class="col-md-4 pt-5 contact-footer-col-menu">
						<?php
							dynamic_sidebar( 'footer-widget-contact-menu-col-one' );
						?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="site-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 p-4 d-flex justify-content-start align-items-start">
						<?php 
							dynamic_sidebar( 'footer-widget-logo-copyright-col-one' );
						?>
					</div>
					<div class="col-md-6  p-4 d-flex justify-content-end align-items-center">
						<p class="copyright-disclaimer align-middle">&copy; <?php echo date("Y"); ?>. Comfort Air Heating and Cooling. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

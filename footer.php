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
					<div class="col-md-6">

					</div>
					<div class="col-md-6">
						<p class="copyright-disclaimer">&copy; <?php echo date("Y"); ?>. Comfort Air Heating and Cooling. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

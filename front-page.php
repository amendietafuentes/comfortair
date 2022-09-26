<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comfortair
 */

get_header();
?>

	<?php
			while ( have_posts() ) :
				the_post();
	?>

	<main id="primary" class="site-main">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php
						echo do_shortcode('[smartslider3 slider="2"]');
					?>
				</div>
			</div>
			<div class="container-fluid position-relative pt-5">
				<div class="row position-absolute top-0 start-50 translate-middle">
					<div class="col-md-3">
						<?php 
							$airConditioningServices = get_field('air_conditioning_icon');
						?>
						<img class="img-fluid mx-auto d-block" src="<?php echo $airConditioningServices['url']; ?>" alt="Air Conditioning Service" title="Air Conditioning Service">
						<h3 class="title-icon text-center"><?php the_field( 'air_conditioning_text' ); ?></h3>
					</div>
					<div class="col-md-3">
						<?php 
							$heatingServices = get_field('heating_services_icon');
						?>
						<img class="img-fluid mx-auto d-block" src="<?php echo $heatingServices['url']; ?>" alt="Heating Services" title="Heating Services">
						<h3 class="title-icon text-center"><?php the_field( 'heating_services_text' ); ?></h3>
					</div>
					<div class="col-md-3">
						<?php 
							$systemRepairServices = get_field('system_repair_services_copy');
						?>
						<img class="img-fluid mx-auto d-block" src="<?php echo $systemRepairServices['url']; ?>" alt="System Repair Services" title="System Repair Services">
						<h3 class="title-icon text-center"><?php the_field( 'system_repair_services_text' ); ?></h3>
					</div>
					<div class="col-md-3">
						<?php 
							$indoorAirQuality = get_field('indoor_air_quality_icon');
						?>
						<img class="img-fluid mx-auto d-block" src="<?php echo $indoorAirQuality['url']; ?>" alt="Indoor Air Quality" title="Indoor Air Quality">
						<h3 class="title-icon text-center"><?php the_field( 'indoor_air_quality_text' ); ?></h3>
					</div>
				</div>
			</div>

		</div>

		<?php
		/*while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;*/ // End of the loop.
		?>

		<section id="residencial-products">
			<div class="container pt-5 pb-5">
				<div class="row ps-5 pe-5">
					<div class="col-md-6 justify-content-start align-items-center pb-2">
						<h2 class="title-residential-products">Residential Products</h2>
					</div>
					<div class="col-md-6 d-flex justify-content-end align-items-center pb-2">
						<a href="#" class="call-to-action">View All Products <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
				<div class="row ps-5 pe-5">
					<div class="col-md-4 residencial-product">
						<?php 
							$residencialProductOne = get_field('residencial_producto_one');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $residencialProductOne['url']; ?>" alt="" title=""></a>
						<h3 class="title-residencial-product text-center">Our Lennox System</h3>
					</div>
					<div class="col-md-4 residencial-product">
						<?php 
							$residencialProductTwo = get_field('residencial_producto_two');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $residencialProductTwo['url']; ?>" alt="" title=""></a>
						<h3 class="title-residencial-product text-center">Our Amana System</h3>
					</div>
					<div class="col-md-4 residencial-product">
						<?php 
							$residencialProductThree = get_field('residencial_producto_three');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $residencialProductThree['url']; ?>" alt="" title=""></a>
						<h3 class="title-residencial-product text-center">Our Amana System</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php 
							$productRightProduct = get_field('product_right_block');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $productRightProduct['url']; ?>" alt="" title=""></a>
					</div>
					<div class="col-md-6">
						<?php 
							$productDiscountLeftBlock = get_field('product_right_block_copy');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $productDiscountLeftBlock['url']; ?>" alt="" title=""></a>
					</div>
				</div>
			</div>	
		</section><!-- #residencial products -->

		<section id="new-equipment-design">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php 
							$newEquipmentDesignImage = get_field('new_equipment_design_image');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $newEquipmentDesignImage['url']; ?>" alt="" title=""></a>
					</div>
					<div class="col-md-6 ps-5">
						<?php 
							the_field( 'new_equipment_content' )
						?>
					</div>
				</div>
			</div>
		</section><!--#new equipment design -->

		<section id="blog-recent-posts">
			<div class="container pt-5 pb-5">
				<h2 class="title-latest-posts title-blocks text-center pt-5 pb-5">Latest News</h2>
				<div class="row">
					<?php 
						// Define our WP Query Parameters
						$the_query = new WP_Query('posts_per_page=3');
					?>

					<?php 
						//Start our WP Query
						while( $the_query -> have_posts() ) : $the_query -> the_post(); 
					?>

						<div class="col-md-4">
							<article class="recent-post">
								<?php	
									echo get_the_post_thumbnail(get_the_ID(),'full');
								?>
								<div class="content">
									<a href="<?php the_permalink() ?>">
									<h2 class="title-post">
										<?php the_title();?>
									</h2>
									</a>
									<p class="excerpt-post">
										<?php
											// Display the Post Excerpt
											$excerpt = get_the_excerpt(); 
											$string_more = "...";

											$excerpt = substr( $excerpt, 0, 280 ); // Only display first 260 characters of excerpt
											$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
											echo $result . $string_more;
										?>
									</p>
									<a class="call-to-action" href="<?php the_permalink();?>">Read More</a>
								</div>

							</article>
						</div>

					<?php
						// Repeat the process and reset once it hits the limit
						endwhile;
						wp_reset_postdata();
					?>

				</div>
			</div>
		</section>
		
		<section class="shedule-service-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php 
							$homeShuduleServiceBanner = get_field('homepage_shedule_service_banner');
						?>
						<a href="tel: <?php the_field('shedule_service_phone_number'); ?>">
							<img class="img-fluid" src="<?php echo $homeShuduleServiceBanner['url']; ?>" alt="Shedule Service" title="Shedule Service">
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="contact-us" style="background-image: url(<?php $backgroundContactUs = get_field( 'contact_us_background' ); echo $backgroundContactUs['url'];?>);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="contact-us-title text-center">
							<?php the_field( 'contact_us_title' ); ?>
						</h2>
						<div class="contact-us-form">
							<?php 
								echo do_shortcode( '[contact-form-7 id="137" title="Contact Us Form"]' );
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-5 pb-5">
					<?php
						echo do_shortcode('[sp_wpcarousel id="71"]');
					?>
				</div>
			</div>
		</div>

	</main><!-- #main -->

	<?php
		endwhile; // End of the loop.
	?>

<?php

get_footer();

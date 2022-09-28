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
	/*while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;*/ // End of the loop.
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

		</div><!--#The Coachella Valleys Homepage -->

		<section id="over-years">
			<div class="container pt-5 mt-5">
				<div class="row border-block">
					<div class="col-md-12">
						<h2 class="title-block text-center">Over <span class="number-title">30</span> Years</h2>
						<span class="rating text-center d-block mb-2">
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
						</span>
						<h3 class="title-block-primary text-center">Service & Experience</h3>
					</div>
					<div class="row icons-block">
						<div class="col-md-3">
							<?php 
								$bestPracticesIcon = get_field('icon_best_practices');
							?>
							<img class="img-fluid mx-auto d-block icon" src="<?php echo $bestPracticesIcon['url']; ?>" alt="" title="">
							<h4 class="label-icon"><?php the_field( 'label_best_practices' ); ?></h4>
						</div>
						<div class="col-md-3">
							<?php 
								$bestGuarantieesIcon = get_field('icon_best_guarantiees');
							?>
							<img class="img-fluid mx-auto d-block icon" src="<?php echo $bestGuarantieesIcon['url']; ?>" alt="" title="">
							<h4 class="label-icon"><?php the_field( 'label_best_guarantiees' ); ?></h4>
						</div>
						<div class="col-md-3">
							<?php 
								$bestCustomerService = get_field('icon_best_customer_service');
							?>
							<img class="img-fluid mx-auto d-block icon" src="<?php echo $bestCustomerService['url']; ?>" alt="" title="">
							<h4 class="label-icon"><?php the_field( 'label_customer_service' ); ?></h4>
						</div>
						<div class="col-md-3">
							<?php 
								$bestTrainedTechnicians = get_field('icon_best_trained_technicians');
							?>
							<img class="img-fluid mx-auto d-block icon" src="<?php echo $bestTrainedTechnicians['url']; ?>" alt="" title="">
							<h4 class="label-icon"><?php the_field( 'label_best_trained_technicians' ); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</section><!--#Over 25 Years Block -->
		
		<section id="germs-airbone-viruses">
			<div class="container-fluid">
				<div class="row content">
					<div class="col-md-6 title-block pe-5 ps-5">
						<h3 class="title-block-first"><?php the_field( 'title_germs_airbone_one' );?></h3>
						<h2 class="title-block-primay"><?php the_field( 'title_germs_airbone_two' );?></h2>
						<h3 class="title-block-second"><?php the_field( 'title_germs_airbone_three' );?></h3>
						<p><?php the_field( 'germs_airbone_content' ); ?></p>
					</div>
					<div class="col-md-6 img-bg" style="background-image: url(<?php $germsAirboneImageRight = get_field('germs_airbone_image_block'); echo $germsAirboneImageRight['url']; ?>)">
					</div>
				</div>
			</div>
			<div class="container-fluid position-relative">
				<div class="row ">
					<div class="col-md-6 buttom-left">
						<a href="#"><?php the_field( 'germs_airbone_button_left_text' ); ?> <i class="bi bi-arrow-right-circle"></i></a>
					</div>
					<div class="position-absolute">
						<?php 
							$germsAirboneImageButtons = get_field('germs_airbone_image_buttons_block');
						?>
						<img class="image-buttons img-fluid mx-auto d-block position-absolute top-0 start-50 translate-middle" src="<?php echo $germsAirboneImageButtons['url']; ?>" alt="" title="">
					</div>
					<div class="col-md-6 buttom-right">
						<a href="#"><?php the_field( 'germs_airbone_button_right_text' ); ?> <i class="bi bi-arrow-right-circle"></i></a>
					</div>
				</div>
			</div>
		</section><!--#Germs & Airbone Viruses -->

		<section id="we-are-reason">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<?php 
							$imageWeAreForAReasonBlock = get_field('we_are_reason_image_background_block');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $imageWeAreForAReasonBlock['url']; ?>" alt="" title=""></a>
					</div>
				</div>
			</div>

		</section><!--#we are for a reason -->

		<section id="residential-comercial-services"  class="bg-image" style="background-image: url(<?php $backgroundResidentialComercial = get_field( 'residential_comercial_background' ); echo $backgroundResidentialComercial['url'];?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<div class="row pt-5 pb-5 w-75 m-auto">
						<h2 class="title-block text-center d-flex"><?php the_field( 'residential_comercial_title' ); ?></h2>
					</div>
					</div>
				</div>
			</div>
			<div class="container pb-5 mt-5">
				<div class="row">
					<div class="col-md-6 content">
						<?php 
							the_field( 'residential_comercial_content' ); 
						?>
					</div>
					<div class="col-md-6">
						<div class="video-player text-center">
							<?php echo do_shortcode( '[html5_video id=229]' ); ?>	
						</div>
					</div>
				</div>
			</div>
		</section><!--#residential and comercial block -->

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
							the_field( 'new_equipment_content' );
						?>
					</div>
				</div>
			</div>
		</section><!--#new equipment design -->

		<section id="innovate-service-efficiency">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 bg-image" style="background-image: url(<?php $innovateServiceEfficiency = get_field('innovate_service_image'); echo $innovateServiceEfficiency['url']?>); ">
					</div>
					<div class="col-md-6 p-0">
						<div class="content">
							<?php 
								the_field( 'innovate_service_content' );
							?>
						</div>
					</div>
				</div>
			</div>
		</section><!--#innovate service efficiency -->

		<section id="testimonials"> 
			<div class="container">
				<div class="row mb-5 pb-5">
					<h2 class="title text-center"><?php the_field( 'title_testimonials_block' ); ?></h2>
					<h4 class="subtitle text-center"><?php the_field( 'subtitle_testimonials_block' ); ?></h4>
				</div>
				<div class="row">
					<div class="col-md-6 testimonial">
						<div class="img-testimonial">
						<?php 
							$imageTestimonialBlock = get_field('testimonial_image_block');
						?>
						<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $imageTestimonialBlock['url']; ?>" alt="" title=""></a>
						</div>
						<div class="testimonial-content">
							<?php the_field( 'testimonial_content_block' ); ?>
						</div>
						<div class="author-testimonial">
							<span><?php the_field( 'testimonial_first_name_block' ); ?></span>
							<span><?php the_field( 'testimonial_lastname_block' ); ?></span>
						</div>
					</div>
					<div class="col-md-6 testimonial">
						<div class="img-testimonial">
							<?php 
								$imageTestimonialBlock = get_field('testimonial_image_block');
							?>
							<a href="#"><img class="img-fluid mx-auto d-block" src="<?php echo $imageTestimonialBlock['url']; ?>" alt="" title=""></a>
						</div>
						<div class="testimonial-content">
							<?php the_field( 'testimonial_content_block' ); ?>
						</div>
						<div class="author-testimonial">
							<span><?php the_field( 'testimonial_first_name_block' ); ?></span>
							<span><?php the_field( 'testimonial_lastname_block' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</section><!--#testimonials -->

		<section id="blog-recent-posts">
			<div class="container pt-3 pb-5">
				<h2 class="title-latest-posts title-block-primary text-center pt-5 pb-5">Latest News</h2>
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
		</section><!--#recent posts -->
		
		<section class="shedule-service-banner">
			<div class="container pb-5 pt-5">
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
		</section><!--#home banner service -->

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
		</section><!--#contact us block -->

		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-5 pb-5">
					<?php
						echo do_shortcode('[sp_wpcarousel id="71"]');
					?>
				</div>
			</div>
		</div><!--#banner call to action -->

	</main><!-- #main -->

	<?php
		endwhile; // End of the loop.
	?>

<?php

get_footer();

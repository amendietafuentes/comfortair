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

	<main id="primary" class="site-main">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php
						echo do_shortcode('[smartslider3 slider="2"]');
					?>
				</div>
			</div>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

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
							<img class="img-responsive" src="<?php echo $homeShuduleServiceBanner['url']; ?>" alt="Shedule Service" title="Shedule Service">
						</a>
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

get_footer();

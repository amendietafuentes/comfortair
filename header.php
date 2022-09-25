<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comfortair
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'comfort-air' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
					<div class="site-branding">
						<?php

						the_custom_logo();
						
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$comfort_air_description = get_bloginfo( 'description', 'display' );
						if ( $comfort_air_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $comfort_air_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-lg-10 col-md-10 col-sm-3 col-xs-2 site-nav">
					<div class="row top-bar">
						<div class="col-md-3 options-menu">
							<ul class="top-bar__social">
								<li><i class="bi bi-facebook rounded-circle social"></i></li>
								<li><i class="bi bi-youtube rounded-circle social"></i></li>
								<li><i class="bi bi-google rounded-circle social"></i></li>
								<li><i class="bi bi-yelp rounded-circle social"></i></li>
								<li><i class="bi bi-instagram rounded-circle social"></i></li>
								<li><i class="bi bi-rss-fill rounded-circle social"></i></li>
							</ul>
						</div>
						<div class="col-md-3 options-menu">
							<ul class="top-bar__social call-us">
								<li>
									<i class="bi bi-telephone-inbound-fill"></i><span class="primary-color">Call us now</span>
									<a class="secondary-color" href="tel: +760-488-6444">760-488-6444</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 p-0 options-menu">
							<ul class="top-bar__social finance-svailable">
								<li>
									<i class="bi bi-coin"></i>Finance Available
								</li>
							</ul>
						</div>
						<div class="col-md-3 p-0">
							<button class="free-consultation">Free Consultation <i class="bi bi-arrow-right"></i></button>
						</div>
					</div>
					<div class="row menu-navigation">
						<div class="col-md-12">
							<nav id="site-navigation" class="main-nav">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'comfort-air' ); ?></button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 p-0">
				<div class="announcement-bar"></div>
			</div>
		</div>
	</div><!-- #announcement bar -->

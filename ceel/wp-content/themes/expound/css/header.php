<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Expound
 */
?>
<?php
	// These lines are mandatory.
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="mobile-nav" class="navigation-main">
	<div class="mobile-nav-box">
		<div class="close-nav">
			<span><span>
		</div>

		<div class="mobile-search">					
			<?php include ('wp-content/themes/expound/searchform.php'); ?>
		</div>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'container_id' => 'expound-social',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'fallback_cb' => '',
			) ); ?>
		<?php do_action( 'expound_navigation_after' ); ?>
	</div>
</div>

<div id="ceel">
	<div class="overlay-box"></div>
<?php do_action( 'expound_header_before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<!-- Keep for height and background -->
		<div class="site-branding">
			<div class="site-title-group">
				<!--
				<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php// echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php // bloginfo( 'description' ); ?></h2>
				-->
			</div>
		</div>
		
		<div class="logo-container">
			<div class="box">
				<div class="clearfix">

					<div class="fl">
						<a href="/ceel/" id="logo-link" title="Go to homepage">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ceel_logo.png" alt="Ceel.org.uk - Central and Eastern European London Life &amp; News" />
						</a>

						<h1 class="tagline">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a>
						</h1>
					</div>

					<div class="fr">
						<ul class="other-pages">
							<li>
								<a href="http://melbrins.com/ceel/?page_id=119">About us</a>
							</li>
							<li>
								<a href="http://melbrins.com/ceel/?page_id=139">Contact us</a>
							</li>
						</ul>

						<div id="search-box">					
							<?php include ('wp-content/themes/expound/searchform.php'); ?>
						</div>
					</div>

				</div><!-- .clearfix -->
			</div>
		</div>

		<span class="boxshadow-top"></span>	<!-- shadow over menu -->

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'expound' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'expound' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'container_id' => 'expound-social',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'fallback_cb' => '',
			) ); ?>
			<?php do_action( 'expound_navigation_after' ); ?>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
<?php do_action( 'expound_header_after' ); ?>


<div id="page" class="hfeed site">
	<span class="boxshadow-bottom"></span>	 <!-- shadow below menu -->
	
	<?php
		if ( is_home() && ! is_paged() ){ // condition should be same as in pre_get_posts
			get_template_part( 'slider' );
		}
	?>

	<div id="main" class="site-main box">

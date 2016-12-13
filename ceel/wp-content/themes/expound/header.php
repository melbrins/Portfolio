<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Expound
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title>Central and Eastern European London Life &amp; News | Ceel.org.uk</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="WordPress 3.9.1">


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('url'); ?>/wp-content/themes/expound/images/favicon.png">
<link rel="pingback" href="<?php bloginfo('url'); ?>/xmlrpc.php">
<!--[if lt IE 9]>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/expound/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="Ceel.org.uk » Feed" href="<?php bloginfo('url'); ?>/feed/">
<link rel="alternate" type="application/rss+xml" title="Ceel.org.uk » Comments Feed" href="<?php bloginfo('url'); ?>/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="Ceel.org.uk » Events Feed" href="">

<link rel="stylesheet" id="validate-engine-css-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/wysija-newsletters/css/validationEngine.jquery.css?ver=2.6.2" type="text/css" media="all">
<link rel="stylesheet" id="wordpress-popular-posts-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/wordpress-popular-posts/style/wpp.css?ver=2.3.7" type="text/css" media="all">

<link rel="stylesheet" id="tribe-events-bootstrap-datepicker-css-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/vendor/bootstrap-datepicker/css/datepicker.css?ver=3.9.1" type="text/css" media="all">
<link rel="stylesheet" id="tribe-events-custom-jquery-styles-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/vendor/jquery/smoothness/jquery-ui-1.8.23.custom.css?ver=3.9.1" type="text/css" media="all">
<link rel="stylesheet" id="tribe-events-full-calendar-style-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events-full.min.css?ver=3.5.1" type="text/css" media="all">
<link rel="stylesheet" id="tribe-events-calendar-style-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events-theme.min.css?ver=3.5.1" type="text/css" media="all">
<link rel="stylesheet" id="tribe-events-calendar-full-mobile-style-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events-full-mobile.min.css?ver=3.5.1" type="text/css" media="(max-width: 768px)">
<link rel="stylesheet" id="tribe-events-calendar-mobile-style-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events-theme-mobile.min.css?ver=3.5.1" type="text/css" media="(max-width: 768px)">


<link rel="stylesheet" id="author-post-ratings-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/author-post-ratings/author-post-ratings.css?ver=3.9.1" type="text/css" media="all">

<link rel="stylesheet" id="contact-form-7-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.7.2" type="text/css" media="all">

<link rel="stylesheet" id="rbanner-css-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/random-banner//css/rbanner.css?ver=3.9.1" type="text/css" media="all">


<link rel="stylesheet" id="expound-style-css" href="<?php bloginfo('url'); ?>/wp-content/themes/expound/style.css?ver=20140129" type="text/css" media="all">
<link rel="stylesheet" id="frp-frontend-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/flexible-recent-posts/css/frp-front.css?ver=3.9.1" type="text/css" media="all">
<link rel="stylesheet" id="popular-widget-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/popular-widget/_css/pop-widget.css?ver=1.6.6" type="text/css" media="all">
<link rel="stylesheet" id="author-avatars-widget-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/author-avatars/css/widget.css?ver=1.8.3" type="text/css" media="all">
<link rel="stylesheet" id="author-avatars-shortcode-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/author-avatars/css/shortcode.css?ver=1.8.3" type="text/css" media="all">
<link rel="stylesheet" id="tw-pagination-css" href="<?php bloginfo('url'); ?>/wp-content/plugins/tw-pagination/tw-pagination.css?ver=1.0" type="text/css" media="screen">


<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php bloginfo('url'); ?>/wp-includes/wlwmanifest.xml"> 




</head>

<body <?php body_class(); ?>>


<!-- Navigation -->
<div id="mobile-nav" class="navigation-main">
	<div class="mobile-nav-box">

		<div class="mobile-top side-nav">
			<ul class="left-nav">
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ceel-logo-mobile" title="Go to homepage"></a>
				</li>
				<li>
					<h2>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go to homepage">Central and Eastern<br />European London Life &amp; News</a>
					</h2>
				</li>
			</ul>

			<ul class="right-nav">
				<li class="close-nav">
					<span></span>
				</li>
			</ul>
		</div>

		<div class="mobile-search">					
			<?php include ('wp-content/themes/expound/searchform.php'); ?>
		</div>

		<div class="categories">
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
</div>


<nav id="fixed-nav" class="navigation-main common-nav" role="navigation">
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


<div class="overlay-box"></div>

<?php do_action( 'expound_header_before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
		<div class="mobile-top main-bar">
			<ul class="left-nav">
				<li>
					<span class="home-btn"></span>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ceel-logo" title="Go to homepage"></a>
				</li>
			</ul>

			<ul class="right-nav">
				<li>
					<span class="search-btn"></span>
					<div class="mobile-search">
						<?php include ('wp-content/themes/expound/searchform.php'); ?>
					</div>
				</li>
				<li>
					<a class="about-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/"></a>
				</li>
				<li>
					<a class="contact-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/"></a>
				</li>
			</ul>
		</div>
		

		<div class="logo-container">
			<div class="box">
				<div class="clearfix">

					<div class="fl">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-link" title="Go to homepage">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ceel_logo.png" alt="Ceel.org.uk - Central and Eastern European London Life &amp; News" />
						</a>

						<h1 class="tagline">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a>
						</h1>
					</div>

					<div class="fr">
						<ul class="other-pages">
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About us</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact us</a>
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

		<nav id="site-navigation" class="navigation-main common-nav" role="navigation">
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

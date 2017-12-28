<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package CEEL
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title>Central and Eastern European London Review | Ceel.org.uk</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="WordPress 3.9.1">


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('url'); ?>/wp-content/themes/ceel/images/favicon.png">
<link rel="pingback" href="<?php bloginfo('url'); ?>/xmlrpc.php">
<!--[if lt IE 9]>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/ceel/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<!-- TEST DONE -->
<?php 

	if( is_single() ){
?>
		<meta property="og:title" content="<?php the_title(); ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:site_name" content="Ceel.org.uk">
<?php
	}
?>


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
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go to homepage">Central and Eastern European London Review</a>
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
			<?php include ('wp-content/themes/ceel/searchform.php'); ?>
		</div>

		<div class="categories">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
				<?php wp_nav_menu( array(
					'theme_location' => 'social',
					'depth' => 1,
					'container_id' => 'ceel-social',
					'link_before' => '<span>',
					'link_after' => '</span>',
					'fallback_cb' => '',
				) ); ?>
			<?php do_action( 'ceel_navigation_after' ); ?>
		</div>
	</div>
</div>


<nav id="fixed-nav" class="navigation-main common-nav" role="navigation">
	<h1 class="menu-toggle"><?php _e( 'Menu', 'ceel' ); ?></h1>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ceel' ); ?></a>

	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
	<?php wp_nav_menu( array(
		'theme_location' => 'social',
		'depth' => 1,
		'container_id' => 'ceel-social',
		'link_before' => '<span>',
		'link_after' => '</span>',
		'fallback_cb' => '',
	) ); ?>
	<?php do_action( 'ceel_navigation_after' ); ?>

</nav><!-- #site-navigation -->


<div class="overlay-box"></div>

<?php do_action( 'ceel_header_before' ); ?>
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
						<?php include ('wp-content/themes/ceel/searchform.php'); ?>
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
							<img src="<?php echo get_template_directory_uri(); ?>/images/ceel_logo.png" alt="Ceel.org.uk - Central and Eastern European London Review" />
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
							<?php include ('wp-content/themes/ceel/searchform.php'); ?>
						</div>
					</div>

				</div><!-- .clearfix -->
			</div>
		</div>

		<span class="boxshadow-top"></span>	<!-- shadow over menu -->

		<nav id="site-navigation" class="navigation-main common-nav" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'ceel' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ceel' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'container_id' => 'ceel-social',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'fallback_cb' => '',
			) ); ?>
			<?php do_action( 'ceel_navigation_after' ); ?>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
<?php do_action( 'ceel_header_after' ); ?>


<div id="page" class="hfeed site">
	<span class="boxshadow-bottom"></span>	 <!-- shadow below menu -->
	
	<?php
		if ( is_home() && ! is_paged() ){ // condition should be same as in pre_get_posts
			get_template_part( 'slider' );
		}
	?>

	<div id="main" class="site-main box">

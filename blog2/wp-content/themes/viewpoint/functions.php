<?php

/* Load the core theme framework. */
require_once( get_template_directory() . '/library/hybrid.php' );
new Hybrid();

/* Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'viewpoint_theme_setup' );

/**
 * Theme setup function adds support for theme features and defines the default theme actions and filters.
 */
function viewpoint_theme_setup() {

	/* Load files. */
     require_once( get_template_directory() . '/theme-functions/viewpoint.php' );
     require_once( get_template_directory() . '/theme-functions/customize.php' );

	/* Theme layouts. */
	add_theme_support( 'theme-layouts', array( 'default' => 'default' ));
	
	/* Title tag	. */
	add_theme_support( 'title-tag' );
	
	/* Visual editor custom styles. */
	add_editor_style();
	
	/* The best thumbnail/image/attachments script ever. */
	add_theme_support( 'get-the-image' );
	
	/* Pagination. */
	add_theme_support( 'loop-pagination' );
	
	/* Automatically add feed links to <head>. */
	add_theme_support( 'automatic-feed-links' );
	
	/* Enable the media grabber. */
	add_theme_support( 'hybrid-core-media-grabber' );
	
	/* Whistles plugin. */
	add_theme_support( 'whistles', array( 'styles' => true,  'scripts' => false ) );
	
	/* Allows the use of HTML5 markup */
	add_theme_support( 
		'html5', 
		array( 'comment-list', 'comment-form', 'search-form' ) 
	);
	
	/* Register menus. */
	add_theme_support( 
		'hybrid-core-menus', 
		array( 'primary' ) 
	);

	
	/* Intenationalizing. */
	load_theme_textdomain('viewpoint', get_template_directory() . '/languages');
	
	/* Handle content width for embeds and images. */
	hybrid_set_content_width( 600 );


}

?>

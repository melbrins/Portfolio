<?php
/**
 * ceel functions and definitions
 *
 * @package CEEL
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 700; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'ceel_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ceel_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Mag, use a find and replace
	 * to change 'ceel' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ceel', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Editor styles for the win
	 */
	add_editor_style( 'css/editor-style.css' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 220, 126, true );
	add_image_size( 'ceel-featured', 460, 260, true );
	add_image_size( 'ceel-mini', 50, 50, true );

	// Slider pictures Ceel Theme
	add_image_size( 'slide-big', 9999, 300);
	add_image_size( 'slide-medium', 255, 9999);
	add_image_size( 'slide-small', 200, 9999);
	add_image_size( 'Main-featured', 680, 9999);
	add_image_size( 'Second-featured', 460, 260, true);
	add_image_size( 'followup-featured', 200, 100, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ceel' ),
		'social' => __( 'Social Menu', 'ceel' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Enable support for Custom Background
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => '333333',
	) );
}
endif; // ceel_setup
add_action( 'after_setup_theme', 'ceel_setup' );


/**
 * BuddyPress styles if BP is installed
 */
if ( function_exists( 'buddypress' ) ) {
	require( get_template_directory() . '/inc/buddypress.php' );
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ceel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ceel' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ceel_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ceel_scripts() {
	// Don't forget to bump the version numbers in style.css and editor-style.css
	wp_enqueue_style( 'ceel-style', get_stylesheet_uri(), array(), 20140129 );

	wp_enqueue_script( 'ceel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ceel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'ceel-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	if ( has_nav_menu( 'social' ) ) {
		wp_enqueue_style( 'ceel-genericons', get_template_directory_uri() . '/css/genericons.css', array(), '20140127' );
	}
}
add_action( 'wp_enqueue_scripts', 'ceel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Additional helper post classes
 */
function ceel_post_class( $classes ) {
	if ( has_post_thumbnail() )
		$classes[] = 'has-post-thumbnail';
	return $classes;
}
add_filter('post_class', 'ceel_post_class' );

/**
 * Ignore and exclude featured posts on the home page.
 */
function ceel_pre_get_posts( $query ) {
	if ( ! $query->is_main_query() || is_admin() )
		return;

	if ( $query->is_home() ) { // condition should be (almost) the same as in index.php
		$query->set( 'ignore_sticky_posts', true );

		$exclude_ids = array();
		$featured_posts = ceel_get_featured_posts();

		if ( $featured_posts->have_posts() )
			foreach ( $featured_posts->posts as $post )
				$exclude_ids[] = $post->ID;

		$query->set( 'post__not_in', $exclude_ids );
	}
}
add_action( 'pre_get_posts', 'ceel_pre_get_posts' );

if ( ! function_exists( 'ceel_get_featured_posts' ) ) :
/**
 * Returns a new WP_Query with featured posts.
 */
function ceel_get_featured_posts() {
	global $wp_query;

	// Default number of featured posts
	$count = apply_filters( 'ceel_featured_posts_count', 5 );

	// Jetpack Featured Content support
	$sticky = apply_filters( 'ceel_get_featured_posts', array() );
	if ( ! empty( $sticky ) ) {
		$sticky = wp_list_pluck( $sticky, 'ID' );

		// Let Jetpack override the sticky posts count because it has an option for that.
		$count = count( $sticky );
	}

	if ( empty( $sticky ) )
		$sticky = (array) get_option( 'sticky_posts', array() );

	if ( empty( $sticky ) ) {
		return new WP_Query( array(
			'posts_per_page' => $count,
			'ignore_sticky_posts' => true,
		) );
	}

	$args = array(
		'posts_per_page' => $count,
		'post__in' => $sticky,
		'ignore_sticky_posts' => true,
	);

	return new WP_Query( $args );
}
endif;

if ( ! function_exists( 'ceel_get_related_posts' ) ) :
/**
 * Returns a new WP_Query with related posts.
 */
function ceel_get_related_posts() {
	$post = get_post();

	// Support for the Yet Another Related Posts Plugin
	if ( function_exists( 'yarpp_get_related' ) ) {
		$related = yarpp_get_related( array( 'limit' => 3 ), $post->ID );
		return new WP_Query( array(
			'post__in' => wp_list_pluck( $related, 'ID' ),
			'posts_per_page' => 3,
			'ignore_sticky_posts' => true,
			'post__not_in' => array( $post->ID ),
		) );
	}

	$args = array(
		'posts_per_page' => 3,
		'ignore_sticky_posts' => true,
		'post__not_in' => array( $post->ID ),
	);

	// Get posts from the same category.
	$categories = get_the_category();
	if ( ! empty( $categories ) ) {
		$category = array_shift( $categories );
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $category->term_id,
			),
		);
	}

	return new WP_Query( $args );
}
endif;






/**
 * Footer credits.
 */
function ceel_display_credits() {
	$text = '<a href="http://wordpress.org/" rel="generator">' . sprintf( __( 'Proudly powered by %s', 'ceel' ), 'WordPress' ) . '</a>';
	$text .= '<span class="sep"> | </span>';
	$text .= sprintf( __( 'Theme: %1$s by %2$s', 'ceel' ), 'ceel', '<a href="http://kovshenin.com/" rel="designer">Konstantin Kovshenin</a>' );
	echo apply_filters( 'ceel_credits_text', $text );
}
add_action( 'ceel_credits', 'ceel_display_credits' );

/**
 * Decrease caption width for non-full-width images. Pixelus perfectus!
 */
function ceel_shortcode_atts_caption( $attr ) {
	global $content_width;

	if ( isset( $attr['width'] ) && $attr['width'] < $content_width )
		$attr['width'] -= 4;

	return $attr;
}
add_filter( 'shortcode_atts_caption', 'ceel_shortcode_atts_caption' );



/**
 * Limit word count in excerpt:  $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,25);
 */
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  	array_pop($words);
  }

  $final_text = implode(' ', $words);
  return $final_text . '...';
}


/**
 * Shorten Titles!
 */
function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}

// Register footer widgets
	register_sidebar( array(
		'name' => __( 'Cultural Diary Footer', 'mytheme' ),
		'id' => 'sidebar-5',
		'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'mytheme' ),
	) );


add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51914780-1', 'ceel.org.uk');
	  ga('send', 'pageview');

	</script>
<?php
}

/**
 * Exclude Language Courses from Browse by Category on Sidebar
 */
// function exclude_widget_categories( $args ){

// $excludes = array( 'slug-1', 'cat-slug2', 'another-catslug' ); //array with category slugs to be excluded
// $cat_ids = array();
// foreach( $excludes as $cat_slug ) {
//   $cat = get_term_by( 'slug', $cat_slug, 'category' );
//   if( $cat ) $cat_ids[] = $cat->term_id;
// }
// $exclude = implode( ',', $cat_ids ); // The IDs of the excluding categories
// if( $cat_ids ) $args["exclude"] = $exclude;

// return $args;
// }

// add_filter("widget_categories_args","exclude_widget_categories");
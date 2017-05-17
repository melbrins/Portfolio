<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package CEEL
 */

/**
 * Add theme support for various Jetpack features.
 */
function ceel_infinite_scroll_setup() {

	// Infinite Scroll: http://jetpack.me/support/infinite-scroll/
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer' => 'page',
		'footer_callback' => 'ceel_infinite_scroll_credits',
	) );

	// Featured Content: http://jetpack.me/support/featured-content/
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'ceel_get_featured_posts',
		'max_posts' => 5,
	) );
}
add_action( 'after_setup_theme', 'ceel_infinite_scroll_setup' );

function ceel_infinite_scroll_credits() {
	?>
	<div id="infinite-footer">
		<div class="container">
			<?php do_action( 'ceel_credits' ); ?>
		</div>
	</div><!-- #infinite-footer -->
	<?php
}
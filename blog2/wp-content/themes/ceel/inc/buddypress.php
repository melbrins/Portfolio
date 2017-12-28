<?php
/**
 * BuddyPress Compatibility
 */

function ceel_bp_css() {
    wp_enqueue_style( 'ceel-buddypress', get_template_directory_uri() . '/css/buddypress.css' );
}
add_action( 'wp_enqueue_scripts', 'ceel_bp_css' );
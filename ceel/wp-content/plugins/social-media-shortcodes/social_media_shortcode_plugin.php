<?php
/*
Plugin Name: Social Media Shortcode Pack
Plugin URI: http://michaelbox.net
Description: Plugin that declares shortcodes for several different social media websites. Makes it easier to provide semantic links to them when linking a user ID.
Version: 1.0.3
Author: Michael Beckwith
Author URI: http://michaelbox.net
*/

$smsc_shortcodes = array(
	'codesnippit' => array('Codesnipp.it', 'http://www.codesnipp.it'),
	'colourlovers' => array('Colourlovers', 'http://www.colourlovers.com/lover'),
	'dailybooth' => array('Daily Booth', 'http://www.dailybooth.com'),
	'delicious' => array('Delicious', 'http://www.delicious.com'),
	'digg' => array('Digg', 'http://www.digg.com'),
	'dribbble' => array('Dribbble', 'http://www.dribbble.com'),
	'facebook' => array( 'Facebook', 'http://www.facebook.com' ),
	'favstarfm' => array('Favstar.FM', 'http://www.favstar.fm/users'),
	'flickr' => array('Flickr', 'http://www.flickr.com/photos'),
	'forrst' => array('Forrst', 'http://www.forrst.com/people'),
	'foursquare' => array('Foursquare', 'http://foursquare.com'),
	'github' => array('Github', 'https://github.com'),
	'identica' => array( 'Identica', 'http://identi.ca' ),
	'lastfm' => array('Last.FM', 'http://www.last.fm/user'),
	'linkedin' => array('Linkedin', 'http://www.linkedin.com/in'),
	'myspace' => array('Myspace', 'http://www.myspace.com'),
	'okcupid' => array('OkCupid', 'http://www.okcupid.com/profile'),
	'programmableweb' => array('Programmable Web', 'http://www.programmableweb.com/profile'),
	'reddit' => array('Reddit', 'http://www.reddit.com/user'),
	'scribd' => array('Scribd', 'http://www.scribd.com'),
	'slideshare' => array('Slideshare', 'http://www.slideshare.net'),
	'stickam' => array('Stickam', 'http://www.stickam.com'),
	'stumbleupon' => array('StumbleUpon', 'http://www.stumbleupon.com/stumbler'),
	'twitter' => array( 'Twitter', 'http://twitter.com' ),
	'vimeo' => array('Vimeo', 'http://www.vimeo.com'),
	'youtube' => array('Youtube', 'http://www.youtube.com'),
);

$smsc_shortcodes = apply_filters('smsc_shortcodes', $smsc_shortcodes);

//Make sure we have an array back from the user.
if ( !is_array( $smsc_shortcodes ) )
	return;

foreach( array_keys( $smsc_shortcodes ) as $shortcode )
	add_shortcode( $shortcode, 'smsc_shortcode_handler' );

/**
 * Function that does the shortcode output for each social media website link.
 *
 * @param $atts Array of attributes from shortcode
 * @param $enclosed Unsure.
 * @param $shortcode which shortcode ID to do. Ex: twitter + array inside.
 * @uses extract()
 * @since 1.0
 */
function smsc_shortcode_handler( $atts, $enclosed, $shortcode ) {
	extract(shortcode_atts( array(
		'name' => '',
		'text' => '',
		'target' => ''
	), $atts));

	global $smsc_shortcodes;

	$service = $smsc_shortcodes[$shortcode][0];
	$link = $smsc_shortcodes[$shortcode][1];
	$avail_targets = array( '_self', '_blank', '_parent', '_top' );

	if ( empty($text) ) $text = "$name ($service)";

	if( empty($name) )
		return "You forgot a username for the website";

	if ( empty( $target ) || $target == '_self' || ! in_array( $target, $avail_targets ) )
		return '<a href="' . $link . '/' . $name . '" title="' . $name .'\'s ' . $service . ' profile" class="' . strtolower($service) . '_smsc">' . $text . '</a>';

	return '<a href="' . $link . '/' . $name . '" title="' . $name .'\'s ' . $service . ' profile" target="' . $target . '" class="' . strtolower($service) . '_smsc">' . $text . '</a>';
}

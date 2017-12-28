<?php
/**
 * Plugin Name: 	Viewpoint Shortcodes
 * Plugin URI:  	http://viewpoint.designagent.sk/
 * Description: 	A small plugin with custom shortcodes and styles for the Viewpoint theme: [icon type="X"], [hero], WYSIWYG format styles
 * Version:     	1.0
 * Author:      	Darina Kostelníková
 * Author URI: 	http://themeforest.net/user/Darinka/
 * Text Domain: 	viewpoint
 */

/* [icon] shortcode */
add_shortcode ( 'icon', 'viewpoint_icon_shortcode');
function viewpoint_icon_shortcode( $atts ) {
	$iconattr = shortcode_atts( array(
        'type' => 'checkmark'
	), $atts );
	return '<i class="icon-' . $iconattr['type'] . '"></i>';
}

/* [hero] shortcode */
add_shortcode ( 'hero', 'viewpoint_hero_shortcode');
function viewpoint_hero_shortcode( $atts, $content = null ) {
	return '<div class="hero-headline">
		<div class="tl-border"></div>
		<div class="tr-border"></div>
		
		<!-- HERO START -->'.$content.'<!-- HERO END -->
		
		<div class="bl-border"></div>
		<div class="br-border"></div>				
	</div>';
}


/* Custom settings for the visual editor. */
add_filter( 'tiny_mce_before_init', 'viewpoint_tiny_mce_before_init' );
add_filter( 'mce_external_plugins', 'viewpoint_add_button' );
add_filter( 'mce_buttons_2', 'viewpoint_enable_more_buttons' );

/**
 * TinyMCE visual editor.
 *
 */ 
function viewpoint_enable_more_buttons( $buttons ) {

	// add buttons
	array_splice( $buttons, 1, 0, 'styleselect' );
	array_push( $buttons, 'dividerbutton' );
	array_push( $buttons, 'newlinebutton' );

	return $buttons;
}

function viewpoint_add_button( $plugin_array ) {

	$plugin_array['mynewbuttons'] = plugins_url( 'mcebuttons.js' , __FILE__ );
	return $plugin_array;
}


function viewpoint_tiny_mce_before_init( $init ) {

    $style_formats = array(
		array(
			'title' => esc_html__( 'Text, Buttons, Images', 'viewpoint' ),
            'items' => array(
				array(
					'title' => esc_html__( 'Button', 'viewpoint' ),
					'selector' => 'a',
					'classes' => 'button'
				),
				array(
					'title' => esc_html__( 'Circle Image', 'viewpoint' ),
					'selector' => 'img',
					'classes' => 'circle-image'
				),
				array(
					'title' => esc_html__( 'Bordered', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'bordered'
				),
				array(
					'title' => esc_html__( 'Note', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'note'
				),
				array(
					'title' => esc_html__( 'Grey Text', 'viewpoint' ),
					'selector' => 'p,h1,h2,h3,h4,h5,h6',
					'classes' => 'grey'
				),
				array(
					'title' => esc_html__( 'XL Big', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'size-xl'
				),
				array(
					'title' => esc_html__( 'L Big', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'size-l'
				),
				array(
					'title' => esc_html__( 'Medium', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'size-m'
				),
				array(
					'title' => esc_html__( 'Small', 'viewpoint' ),
					'inline' => 'span',
					'classes' => 'size-s'
				),
				array(
					'title' => esc_html__( 'Serif', 'viewpoint' ),
					'selector' => 'h2,h3,h4,h5,h6,p',
					'classes' => 'serif'
				),
				array(
					'title' => esc_html__( 'Centered', 'viewpoint' ),
					'selector' => 'p,h1,h2,h3,h4,h5,h6,img,hr',
					'classes' => 'aligncenter'
				),
			),
		),
		array(
			'title' => esc_html__( 'Boxes', 'viewpoint' ),
            'items' => array(
	            	array(
					'title' => esc_html__( 'Narrow', 'viewpoint' ),
					'block' => 'div',
					'classes' => 'narrow',
					'wrapper' => true
				),
				array(
					'title' => esc_html__( 'Notice Standard', 'viewpoint' ),
					'block' => 'div',
					'classes' => 'notice',
					'wrapper' => true
				),
				array(
					'title' => esc_html__( 'Notice Info', 'viewpoint' ),
					'block' => 'div',
					'classes' => 'notice info',
					'wrapper' => true
				),
				array(
					'title' => esc_html__( 'Notice Success', 'viewpoint' ),
					'block' => 'div',
					'classes' => 'notice success',
					'wrapper' => true
				),
				array(
					'title' => esc_html__( 'Notice Error', 'viewpoint' ),
					'block' => 'div',
					'classes' => 'notice error',
					'wrapper' => true
				),
			),
		),
		
		array(
			'title' => esc_html__( 'Colors', 'viewpoint' ),
            'items' => array(

				array(
					'title' => esc_html__( 'Blue', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'blue'
				),
				array(
					'title' => esc_html__( 'Indigo', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'indigo'
				),
				array(
					'title' => esc_html__( 'Green', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'green'
				),
				array(
					'title' => esc_html__( 'Teel', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'teel'
				),
				array(
					'title' => esc_html__( 'Orange', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'orange'
				),
				array(
					'title' => esc_html__( 'Yellow', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'yellow'
				),
				array(
					'title' => esc_html__( 'Red', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'red'
				),
				array(
					'title' => esc_html__( 'Pink', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'pink'
				),
				array(
					'title' => esc_html__( 'Purple', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'purple'
				),
				array(
					'title' => esc_html__( 'Grey', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'grey'
				),
				array(
					'title' => esc_html__( 'Black', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'black'
				),
				array(
					'title' => esc_html__( 'Brown', 'viewpoint' ),
					'selector' => 'a,i,strong,span,h1,h2,h3,h4,h5,h6,thead',
					'classes' => 'brown'
				),
			),
		),
		
		array(
			'title' => esc_html__( 'Padding and Margin', 'viewpoint' ),
            'items' => array(
				array(
					'title' => esc_html__( 'Smaller Padding', 'viewpoint' ),
					'selector' => 'p',
					'classes' => 'smaller-padding'
				),
				array(
					'title' => esc_html__( 'Smaller Margin', 'viewpoint' ),
					'selector' => 'div,h1,h2,h3,h4,h5,h6,img',
					'classes' => 'smaller-margin'
				),
				array(
					'title' => esc_html__( 'No Padding', 'viewpoint' ),
					'selector' => 'p',
					'classes' => 'no-padding'
				),
				array(
					'title' => esc_html__( 'No Margin', 'viewpoint' ),
					'selector' => 'div,h1,h2,h3,h4,h5,h6,img',
					'classes' => 'no-margin'
				),
				array(
					'title' => esc_html__( 'Side Padding', 'viewpoint' ),
					'selector' => 'p',
					'classes' => 'side-padding'
				),
				array(
					'title' => esc_html__( 'Clear', 'viewpoint' ),
					'selector' => 'div,p,h1,h2,h3,h4,h5,h6',
					'classes' => 'clear'
				),
			),
		),
		
	);

	$init['style_formats'] = json_encode( $style_formats );

    $init['style_formats_merge'] = true;
    return $init;

}    

/**
 * Shortcodes fix
 * 
*/
add_filter( 'the_content', 'viewpoint_cleanup_shortcodes', 20, 1 );
function viewpoint_cleanup_shortcodes( $content ){
	// clean up p tags around block elements
	$content = str_replace('<p> </p>', '', $content );
	$content = str_replace('<p></div>', '</div>', $content );
	$content = str_replace('</div></p>', '</div>', $content );
	$content = str_replace('<p><div', '<div', $content );
	$content = str_replace("</div>\n</p>\n</div>", "</div></div>", $content );
	$content = str_replace("<p>\n</div>", "</div>", $content );
	$content = str_replace('column-first"></p>', 'column-first">', $content );
	$content = str_replace('column-last"></p>', 'column-last">', $content );
	$content = str_replace('column-push-0"></p>', 'column-push-0">', $content );
	$content = str_replace('HERO START --></p>', 'HERO START -->', $content );
	$content = str_replace('<p><!-- HERO END', '<!-- HERO END', $content );
	$content = str_replace('<p> <div class="scrolldown">', '<div class="scrolldown">', $content );

	return $content;
}


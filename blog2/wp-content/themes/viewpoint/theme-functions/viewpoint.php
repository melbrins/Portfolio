<?php
/**
 * Sets up custom filters and actions for the theme.  This does things like sets up sidebars, menus, scripts, and lots of other awesome stuff that WordPress themes do.
 */
 
/* TGM Plugin Activation */
require_once( get_template_directory() . '/theme-functions/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'viewpoint_register_required_plugins' );

/* Register custom layouts. */
add_action( 'hybrid_register_layouts', 'viewpoint_register_layouts' );
 
/* Register custom image sizes. */
add_action( 'init', 'viewpoint_register_image_sizes', 5 );

/* Register custom menus. */
add_action( 'init', 'viewpoint_register_menus', 5 );

/* Add custom scripts. */
add_action( 'wp_enqueue_scripts', 'viewpoint_load_scripts', 0 );
add_action( 'wp_enqueue_scripts', 'viewpoint_load_custom_scripts', 20 );

/* Register custom styles. */
add_action( 'wp_enqueue_scripts', 'viewpoint_load_styles', 20 );

/* Add some body classes */
add_filter( 'hybrid_attr_body', 'viewpoint_attr_body' );
 
/* Filter the add image and add gallery shortcode output. */
add_filter( 'post_gallery', 'viewpoint_cleaner_gallery', 10, 2 );

/* Customize password protected form */
add_filter( 'the_password_form', 'viewpoint_custom_password_form', 10 );

/* Change excerpt length and more link */
add_filter( 'excerpt_more', 'viewpoint_custom_excerpt_more');
add_filter( 'excerpt_length', create_function('$viewpoint_a', 'return 40;'));

/* Facebook Open Graph */
add_filter( 'language_attributes', 'viewpoint_doctype_opengraph');
add_action( 'wp_head', 'viewpoint_fb_opengraph', 5 );

/* Heart like */
add_action( 'wp_ajax_nopriv_post-like', 'viewpoint_post_like');
add_action( 'wp_ajax_post-like', 'viewpoint_post_like');


/**
 * Body classes.
 *
 */
function viewpoint_attr_body( $attr ) {
	$attr['class'] .= ' loading';
		
	if ( has_post_thumbnail() && !is_home() )
		$attr['class'] .= ' has-featured-image';
	
	if( get_theme_mod( 'viewpoint_gmap_page' ) == get_the_ID()) 
		$attr['class'] .= ' map';

	return $attr;
}

function viewpoint_register_layouts() {
	
	hybrid_get_layout( 'default' )->image = '%s/imgs/layouts/default.png';
	
	hybrid_register_layout(
        'default',
        array(
            'label'            	=> _x( 'Default', 'theme layout', 'viewpoint' ),
            'is_global_layout' 	=> false,
            'is_post_layout'   	=> true,
		  'image'			=> '%s/imgs/layouts/default.png'
        )
     );

     hybrid_register_layout(
        'fullscreen-gallery',
        array(
            'label'            	=> _x( 'Fullscreen Gallery Page', 'theme layout', 'viewpoint' ),
            'is_global_layout' 	=> false,
            'is_post_layout'   	=> true,
		  'image'			=> '%s/imgs/layouts/fullscreen.png'
        )
     );

     hybrid_register_layout(
        'wide',
        array(
            'label'           	=> _x( 'Wide Page', 'theme layout', 'viewpoint' ),
            'is_global_layout' 	=> false,
            'is_post_layout'   	=> true,
		  'image'			=> '%s/imgs/layouts/wide.png'
        )
     );
}


 
/**
 * Registers custom image sizes for the theme.
 *
 */
function viewpoint_register_image_sizes() {

	/* Sets the 'post-thumbnail' size. */
	set_post_thumbnail_size( 448, 448, true );

	/* Adds the additional image sizes. */
	add_image_size( 'viewpoint_fullscreen', 1920, 0, false );
} 

/**
 * Registers nav menu locations.
 *
 */
function viewpoint_register_menus() {
	register_nav_menu( 'primary',   _x( 'Primary',   'nav menu location', 'viewpoint' ) );
}
 
/**
 * Enqueues scripts.
 *
 */
function viewpoint_load_scripts() {
	
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), null, true );
	
	wp_register_script( 'touchswipe', get_template_directory_uri() . '/js/jquery.touchswipe.min.js', array( 'jquery' ), null, true );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), null, true );
	wp_register_script( 'before-after', get_template_directory_uri() . '/js/jquery.imagereveal.min.js', array( 'jquery' ), null, true );
	wp_register_script( 'kinetic', get_template_directory_uri() . '/js/jquery.kinetic.min.js', array( 'jquery' ), null, true );
	wp_register_script( 'okvideo', get_template_directory_uri() . '/js/okvideo.min.js', array( 'jquery' ), null, true );
	wp_register_script( 'gmaps', 'http://maps.google.com/maps/api/js?sensor=true', array( 'jquery' ), null, true );
	wp_register_script( 'gmap', get_template_directory_uri() . '/js/jquery.gmap.min.js', array( 'jquery'), null, true );
	
}
function viewpoint_load_custom_scripts() {	
	/* load map scripts */
	if( get_theme_mod( 'viewpoint_gmap_page' ) == get_the_ID()) {
		wp_enqueue_script( 'gmaps');
		wp_enqueue_script( 'gmap');
	}
	
	/* heart like script */
	if( hybrid_get_post_layout(get_the_ID()) == 'fullscreen-gallery' ) {
		wp_enqueue_script( 'touchswipe' );
		wp_enqueue_script( 'like_post', get_template_directory_uri() . '/js/post-like.js', array( 'jquery' ), null, true );
		wp_localize_script( 'like_post', 'ajax_var', array(
		    'url' => admin_url('admin-ajax.php'),
		    'nonce' => wp_create_nonce('ajax-nonce')
		));
	}
	
	/* blog page swipe */
	if ( is_home() )
		wp_enqueue_script( 'touchswipe' );
	
	/* main scripts file */
	wp_enqueue_script( 'viewpoint', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), null, true );

}

/**
 * Registers custom stylesheets for the front-send.
 *
 */
function viewpoint_load_styles() {
	
	global $wp_styles;

	add_filter( 'use_default_gallery_style', '__return_false' );

	wp_enqueue_style( 'viewpoint-magnificpopup', get_template_directory_uri() . '/css/magnificpopup.css' );
	wp_enqueue_style( 'viewpoint-icomoon', get_template_directory_uri() . '/css/icomoon.css' );
	
	// Load parent theme stylesheet if child theme is active.
	if ( is_child_theme() )
		wp_enqueue_style( 'hybrid-parent' );
	
	// Load active theme stylesheet.
	wp_enqueue_style( 'hybrid-style' );
	
	// IE9 conditional style
	wp_enqueue_style( 'viewpoint-ie9', get_template_directory_uri() . '/css/ie.css' );
	$wp_styles->add_data( 'viewpoint-ie9', 'conditional', 'IE 9' );
}

/**
 * Count images in gallery.
 *
 */ 
function viewpoint_count_photos_in_gallery( $post_page_id ) {

	$post_content = get_post($post_page_id);
	$post_content = $post_content->post_content;

	preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
	if ( $ids ) {
		$photos = explode(",", $ids[1]);
		return count($photos);
	}
}

 /**
 * Displays shutter speed as fraction.
 *
 */ 
function viewpoint_shutter_speed_fraction( $ss ) {
	if ((1 / $ss) > 1) {
		$shutterspeed = '1/';
		if (number_format((1 / $ss), 1) == number_format((1 / $ss), 0)) {
			$shutterspeed .= number_format((1 / $ss), 0, '.', '') . ' sec';
		} else {
			$shutterspeed .= number_format((1 / $ss), 1, '.', '') . ' sec';
		}
	} else {
		$shutterspeed = $ss.' sec';
	}
	
	return $shutterspeed;
}

 /**
 * Gallery output overwrite.
 *
 */ 
function viewpoint_cleaner_gallery( $output, $attr ) {
	wp_dequeue_script('viewpoint');//i want this script to be enqueued very last

	global $_wp_additional_image_sizes;

	static $cleaner_gallery_instance = 0;
	$cleaner_gallery_instance++;

	/* We're not worried about galleries in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Orderby. */
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	/* Default gallery settings. */
	$defaults = array(
		'order'       => 'ASC',
		'orderby'     => 'menu_order ID',
		'id'          => get_the_ID(),
		'mime_type'   => 'image',
		'link'        => '',
		'itemtag'     => 'figure ',
		'icontag'     => 'header ',
		'captiontag'  => 'figcaption',
		'columns'     => 3,
		'size'        => 'post-thumbnail',
		'ids'         => '',
		'include'     => '',
		'exclude'     => '',
		'numberposts' => -1,
		'offset'      => ''
	);

	/* Apply filters to the default arguments. */
	$defaults = apply_filters( 'cleaner_gallery_defaults', $defaults );

	/* Apply filters to the arguments. */
	$attr = apply_filters( 'cleaner_gallery_args', $attr );

	/* Merge the defaults with user input.  */
	$attr = shortcode_atts( $defaults, $attr );
	extract( $attr );
	$id = intval( $id );

	/* Arguments for get_children(). */
	$children = array(
		'post_status'      => 'inherit',
		'post_type'        => 'attachment',
		'post_mime_type'   => wp_parse_args( $mime_type ),
		'order'            => $order,
		'orderby'          => $orderby,
		'exclude'          => $exclude,
		'include'          => $include,
		'numberposts'      => $numberposts,
		'offset'           => $offset,
		'suppress_filters' => true
	);

	/* Get image attachments. If none, return. */
	if ( empty( $include ) )
		$attachments = get_children( array_merge( array( 'post_parent' => $id ), $children ) );
	else
		$attachments = get_posts( $children );

	if ( empty( $attachments ) )
		return '';

	/* Properly escape the gallery tags. */
	$itemtag    = tag_escape( $itemtag );
	$icontag    = tag_escape( $icontag );
	$captiontag = tag_escape( $captiontag );
	$i = 0;
	$counter = 0;
	$output = ' ';
	
	
	/* Get the image thumbnail size, figure out gallery type. */
	$my_thumbnail_size = 'viewpoint_fullscreen';
	$gallery_type = ''; 
	if ($columns == 1 ) {
		$gallery_type = 'horizontal-gallery';
		wp_enqueue_script('kinetic');
	}
	elseif ($columns == 2 ) {
		$gallery_type = 'before-after';
		wp_enqueue_script('before-after');
		wp_enqueue_style( 'before-after', get_template_directory_uri() . '/css/jquery.imagereveal.min.css' );
	}
	elseif ($columns == 3 ) {
		$gallery_type = 'masonry-gallery';
		wp_enqueue_script('isotope');
	}	
	elseif ($columns == 4 ) {
		$gallery_type = 'fullscreen-gallery';
	}	
	elseif ($columns == 5 ) {
		$gallery_type = 'fullscreen-gallery proportional';
	}	
	elseif ($columns == 6 ) {
		$gallery_type = 'fullscreen-gallery kenburns';
	}	
	else {
		$gallery_type = 'masonry-gallery';
		wp_enqueue_script('isotope');
		$columns = 3;
	}
	wp_enqueue_script('viewpoint');//enqueued after all gallery-specific ones
	
	
	/* Fullscreen gallery thumbs */
	if ( hybrid_get_post_layout(get_the_ID()) == 'fullscreen-gallery' ) { 
		$output .= '<div class="scrolldown">'. esc_html('Scroll','viewpoint'). '</div>';
		
		$output .= '<ul id="gallerythumbs">';
		$i = 1;
		$thumbies = '<li data-thumb="'.$i.'" class="activeSlide"><a href="#">'.get_the_image( array( 'size' => 'post-thumbnail', 'link_to_post' => false, 'echo' => false, 'post_id' => get_the_ID() )).'</a></li>';
		foreach ( $attachments as $attachment ) { 
			$i++;
			$thumbies .= '<li data-thumb="'.$i.'"><a href="#">';
			$thumbies .= wp_get_attachment_image( $attachment->ID, 'post-thumbnail' );
			$thumbies .= '</a></li>';
		}
		$output .= $thumbies;
		$output .= '</ul>';
	}
	
	/* Horizontal gallery */
	if ($columns == 1 ) {
		$output .= '<div class="horizontal-gallery-count"><p class="gallery-count">'.viewpoint_count_photos_in_gallery( get_the_ID() ). ' ' . esc_html('photos','viewpoint') .'</p></div>';
	}
	
	/* Open the gallery <div>. */
	$output .= "<div id='gallery-{$id}-{$cleaner_gallery_instance}' class='gallery {$gallery_type}'>";
	
	if ( $columns == 5 ) { $output .= '<div class="blurred-background-image"></div>'; }
	
	/* BEFORE - AFTER (has different syntax than all the other galleries)*/
	if ( $columns == 2 ) {
		foreach ( $attachments as $attachment ) {
			$output .= wp_get_attachment_image( $attachment->ID, $my_thumbnail_size, false );
		}
	}
	else {
		
		/* Loop through each attachment. */
		$attachment_index = 0;
		if ( hybrid_get_post_layout(get_the_ID()) == 'fullscreen-gallery' ) $attachment_index = 1;
		
		$gallery_photo_count = viewpoint_count_photos_in_gallery( get_the_ID() );
		
		foreach ( $attachments as $attachment ) {
			$attachment_index++;
		
			/* Get the image attachment meta. */
			$image_meta  = wp_get_attachment_metadata( $attachment->ID );
		
			/* Orientation */
			$orientation = '';
			if ( isset( $image_meta['height'], $image_meta['width'] ) )
				$orientation = ( $image_meta['height'] >= $image_meta['width']-300 ) ? 'larger-height' : ''; //-300 for square-ish images
		
			/* Open each gallery item. */
			$output .= "<{$itemtag} class='gallery-item col-{$columns} {$orientation}' data-index='{$attachment_index}'>";
	
			/* Open the element to wrap the image. */
			$link_attr = $attr['link'];
			$output .= "<{$icontag} class='gallery-icon {$link_attr}'>";

			/* Get the image. */
			if ( isset( $link_attr ) && 'file' == $link_attr ) {
				$image = wp_get_attachment_link( $attachment->ID, $my_thumbnail_size, false, true );
			}
			elseif ( isset( $link_attr ) && 'none' == $link_attr ) {
				$image = wp_get_attachment_image( $attachment->ID, $my_thumbnail_size, false );
			}
			else {
				$image = wp_get_attachment_link( $attachment->ID, $my_thumbnail_size, true, true );
			}
			
			/* Return the formatted image without width and height - for masonry galleries. */
			if ( $columns == 3 ) { 
				$image = preg_replace( '/(width|height)="\d*"\s/', "", $image );
			}
			
			/* Pre-loading */
			if ( $attachment_index > 2 ) { //keep first 2 images to load, other data-src
				$image = str_replace( ' src="', ' src="'. esc_url(get_template_directory_uri()) .'/imgs/x.gif" data-src="', $image );
				$image = str_replace( ' srcset="', ' data-srcset="', $image );
			}
				
			$output .= $image;

			/* Close the image wrapper. */
			$output .= "</{$icontag}>";

			/* Get the caption and description. */
			$caption = apply_filters( 'cleaner_gallery_caption', wptexturize( $attachment->post_excerpt ), $attachment->ID, $attr, $cleaner_gallery_instance );
			$description = $attachment->post_content;
			
			$output .= "<{$captiontag} class='gallery-caption'><div class='entry-summary'>";

			/* If image caption is set. */
			if ( !empty( $caption ) ) 
				$output .=  '<h3 class="animIn">'.$caption.'</h3>';
				
			if ( !empty( $description ) ) 
				$output .=  '<p class="description animIn">'.$description.'</p>';
				
			if ( !empty( $image_meta['image_meta']['aperture'] ) ) 
				$output .= '<p class="exif animInFromTop">
							<span class="animInFromTop"><strong>'.esc_html('Aperture','viewpoint').'</strong><br /> &fnof;/'.$image_meta['image_meta']['aperture'].'.0</span> <span class="divider animInFromTop"></span> 
							<span class="animInFromTop"><strong>'.esc_html('F. length','viewpoint').'</strong><br /> '.$image_meta['image_meta']['focal_length'].'.0 mm</span>    <span class="divider animInFromTop"></span>   
							<span class="animInFromTop"><strong>'.esc_html('Exposure','viewpoint').'</strong><br />  '. viewpoint_shutter_speed_fraction( $image_meta['image_meta']['shutter_speed'] ).'</span>   <span class="divider animInFromTop"></span>    
							<span class="animInFromTop"><strong>'.esc_html('ISO','viewpoint').'</strong><br />  '.$image_meta['image_meta']['iso'].'</span></p>';
				
			/*photo count for horizontal & fullscreen galleries*/
			if ( hybrid_get_post_layout(get_the_ID()) == 'fullscreen-gallery' ) 	{
				$output .= '<p class="gallery-count"><a class="nr">'. ($attachment_index-1) . '</a><span class="divider"></span> '. $gallery_photo_count . '</p>';
			}
			if ( $columns == 1 ) {
				$output .= '<p class="gallery-count"><a class="nr">'. $attachment_index . '</a><span class="divider"></span> '. $gallery_photo_count . '</p>';
			}

			$output .= "</div></{$captiontag}>";

			/* Close individual gallery item. */
			$output .= "</{$itemtag}>";
		}
	}
	/* Close the gallery <div>. */
	$output .= "</div>";
	
	/* Gallery footer */
	if ( hybrid_get_post_layout(get_the_ID()) == 'fullscreen-gallery' ) {
		$output .= '<div class="gallery-footer">
					<h2>'. get_theme_mod( 'viewpoint_gallery_footer_heading' ) .'</h2>
					<p>'. get_theme_mod( 'viewpoint_gallery_footer_text' ) .'</p>
					<div class="gallery-albums">';
		for ($i = 1; $i <= 4; $i++){
			$page_id = get_theme_mod( 'viewpoint_recommended_gallery'.$i.'' );
			if ( $page_id == get_the_ID() )  $page_id = get_theme_mod( 'viewpoint_recommended_gallery5' ); 
			$output .= '<figure class="gallery-album">
					<header class="gallery-icon">
						'.get_the_image( array( 'echo' => false, 'post_id' => $page_id, 'link_to_post' => true )).'
					</header>	
					<figcaption class="gallery-caption">
						<div class="entry-summary">
							<h3>'.get_the_title($page_id).'</h3>
							<p class="gallery-count">'. viewpoint_count_photos_in_gallery($page_id) . ' ' . esc_html('photos','viewpoint') .'</p>
						</div>
					</figcaption>
				</figure>';
		}
		$output .= '</div>
			<p class="gallery-social">
				<a href="#" data-post_id="'.get_the_ID().'" class="gallery-heart"><svg width="28px" height="28px" id="icon-heart" version="1.1" viewBox="0 0 24 24"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M16.4,4C14.6,4,13,4.9,12,6.3C11,4.9,9.4,4,7.6,4C4.5,4,2,6.5,2,9.6C2,14,12,22,12,22s10-8,10-12.4C22,6.5,19.5,4,16.4,4z"/></svg> <span class="like-count">'.get_post_meta(get_the_ID(),'votes_count',true).'</span></a>
				
				<span class="gallery-sharers">'.esc_html('Share','viewpoint').': &nbsp;<a href="http://www.facebook.com/sharer.php?u='. urlencode(get_permalink()) .'" rel="nofollow" target="_blank">Facebook</a> <a href="http://www.twitter.com/share?url='. urlencode(get_permalink()) .'" rel="nofollow" target="_blank">Twitter</a> <a href="https://plus.google.com/share?url='. urlencode(get_permalink()) .'" rel="nofollow" target="_blank">Google+</a></span>
			</p>
		</div><!-- .gallery-footer -->';
	}

	/* Return out very nice, valid HTML gallery. */
	return $output;
}

add_action('print_media_templates', function(){

  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-my-custom-gallery-setting">
    <br style="clear:both" />
    <h3><?php esc_html_e('Gallery Type Cheatsheet','viewpoint'); ?></h3>
    <label><?php esc_html_e('Select number of columns to get the preferred gallery type:','viewpoint'); ?></label>
    <ul>
	    <li>1 - Horizontal Gallery</li>
	    <li>2 - Before and After Gallery</li>
	    <li>3 - Masonry Grid</li>
	    <li>4 - Fullscreen</li>
	    <li>5 - Fullscreen Proportional</li>
	    <li>6 - Fullscreen KenBurns</li>
    </ul>
  </script>

  <script>
    jQuery(document).ready(function(){
      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('my-custom-gallery-setting')(view);
        }
      });

    });
  </script>
  <?php

});


/**
 * Customize password protected form
 *
 */
function viewpoint_custom_password_form() {
	$viewpoint_pass_form = '';
	global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<h2>' . esc_html( 'Password Protected','viewpoint' ) . '</h2><p class="small">' . esc_html( 'Enter your password below and enjoy the goodness!','viewpoint' ) . '</p><div class="password-protected-form-wrapper"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="post-password-form">
    <p><label for="' . $label . '">' . esc_html( 'Password:','viewpoint' ) . ' <input name="post_password" id="' . $label . '" type="password" size="20" /></label><input type="submit" name="Submit" value="' . esc_html( 'Submit', 'viewpoint' ) . '" /></p>
    </form></div>
    ';
	$viewpoint_pass_form .= $o;
	return $viewpoint_pass_form;
}

/**
 * TGM Plugins Activation 
 *
 */
function viewpoint_register_required_plugins() {
 
    $plugins = array(

		array(
            'name'               => 'Viewpoint Shortcodes', 
            'slug'               => 'viewpoint-shortcodes', 
            'source'             => get_template_directory() . '/plugins/viewpoint-shortcodes.zip', 
            'required'           => true,
        ),
		array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
	   array(
            'name'      => 'Entry Views',
            'slug'      => 'entry-views',
            'source'    => get_template_directory() . '/plugins/entry-views.zip',
            'required'  => true,
        ),
		array(
            'name'      => 'Whistles',
            'slug'      => 'whistles',
            'source'    => get_template_directory() . '/plugins/whistles.zip',
            'required'  => true,
        ),
		array(
            'name'      => 'Grid Columns',
            'slug'      => 'grid-columns',
            'source'    => get_template_directory() . '/plugins/grid-columns.zip',
            'required'  => true,
        ),
        array(
            'name'      => 'Envato WordPress Toolkit',
            'slug'      => 'envato-wordpress-toolkit',
            'source'    => get_template_directory() . '/plugins/envato-wordpress-toolkit.zip',
            'required'  => true,
        ),
	   array(
            'name'      => 'Simple Custom CSS',
            'slug'      => 'simple-custom-css',
            'required'  => false,
        ),
        array(
            'name'      => 'WP Retina 2x',
            'slug'      => 'wp-retina-2x',
            'required'  => false,
        ),
		array(
			'name' => 'Installer Plugin',
			'slug' => 'easy_installer',
			'source' => get_template_directory() . '/plugins/easy_installer.zip',
			'required' => false,
			'version' => '',
			'force_activation' => false,
			'force_deactivation' => false
		)
		
    );
 
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'viewpoint' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'viewpoint' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'viewpoint' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'viewpoint' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'viewpoint' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'viewpoint' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' , 'viewpoint' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'viewpoint' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'viewpoint' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'viewpoint' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'viewpoint' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
 
    tgmpa( $plugins, $config );
 
}


/**
 * Remove linebreaks and whitespace from content
 *
 */
function viewpoint_remove_linebreaks( $content ) {
	$content = preg_replace('/\r\n?/',"",$content);
	 $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $content = preg_replace($search, $replace, $content);
}


/**
 * Change excerpt more link
 * 
*/
function viewpoint_custom_excerpt_more($more) {
	return ' ...';
}


/**
 * Estimate time required to read the article
 *
 * @return string
 */
function viewpoint_estimated_reading_time() {
    $post = get_post();

    $words = str_word_count( strip_tags( $post->post_content ) );
    $minutes = floor( $words / 120 );
    $seconds = floor( $words % 120 / ( 120 / 60 ) );

    if ( $minutes >= 1 ) {
        $estimated_time = $minutes . ' min';
    } else {
        $estimated_time = '1 min';
    }

    return $estimated_time;
}

/**
 * Facebook OpenGraph
 * 
*/
function viewpoint_doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
function viewpoint_fb_opengraph() {
	if ( is_singular() ) {
	?>    
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt(get_the_ID()) ); ?>" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
		<?php if ($fb_image) : ?>
		<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
		<?php endif; ?>
		<meta property="og:type" content="<?php if ( is_single() ) { echo "article"; } else { echo "website"; } ?>" />
		<meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
	<?php
	}
}

/**
 * Heart like
 * 
*/
function viewpoint_post_like() {
    // Check for nonce security
    $nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ))
        die( 'Busted!' );
     
    if ( isset($_POST['post_like']) ) {
        // Retrieve user IP address
        $ip = $_SERVER['REMOTE_ADDR'];
        $post_id = $_POST['post_id'];
         
        // Get voters'IPs for the current post
        $meta_IP = get_post_meta($post_id, "voted_IP");
        $voted_IP = $meta_IP[0];
 
        if ( !is_array($voted_IP) )
            $voted_IP = array();
         
        // Get votes count for the current post
        $meta_count = get_post_meta($post_id, "votes_count", true);
 
        // Use has already voted ?
        if ( !viewpoint_hasAlreadyVoted($post_id) )
        {
            $voted_IP[$ip] = time();
 
            // Save IP and increase votes count
            update_post_meta($post_id, "voted_IP", $voted_IP);
            update_post_meta($post_id, "votes_count", ++$meta_count);
             
            // Display count (ie jQuery return value)
            echo $meta_count;
        }
        else
            echo "already";
    }
    exit;
}

function viewpoint_hasAlreadyVoted( $post_id ) {
	// Retrieve post votes IPs
	$meta_IP = get_post_meta($post_id, "voted_IP");
	$voted_IP = $meta_IP[0];
     
	if ( !is_array($voted_IP) )
		$voted_IP = array();
         
	// Retrieve current user IP
	$ip = $_SERVER['REMOTE_ADDR'];
     
	// If user has already voted
	if ( in_array($ip, array_keys($voted_IP)) ) {
		$time = $voted_IP[$ip];
		$now = time();
         
		// Compare between current time and vote time
		if ( round(($now - $time) / 60) > 120 ) //2 hours
			return false;
             
		return true;
	}
     
	return false;
}


<?php

/* Theme Customizer setup. 
 * This hook allows you define new Theme Customizer sections, settings, and controls.
 *
 */

add_action( 'customize_register', 'viewpoint_customize_register' );

function viewpoint_customize_register( $wp_customize ) {

	/* Enable live preview for WordPress theme features. */
	$wp_customize->get_setting( 'blogname' )->transport			 	= 'refresh';
	

	/* Font Customizer */
	// SECTION
	$wp_customize->add_section( 'viewpoint_font' , array(
		'title'      => esc_html__( 'Font', 'viewpoint' ),
		'priority'   => 30,
		'description' => 'Choose your fonts from google.com/fonts'
	) );
	
	/* Font family dropdown */
	// SETTING
	$wp_customize->add_setting( 'typekit_font', array(
			'default' => 'Proxima Nova',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'secondary_typekit_font', array(
			'default' => 'Brandon Grotesque',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'typekit_embed_id', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'google_font', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'google_font_weights', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'secondary_google_font', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'secondary_google_font_weights', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_setting( 'google_fonts_subset', array(
			'default' => 'latin',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	// CONTROLS
	$wp_customize->add_control( 'typekit_font', array(
			'label' => esc_html__( 'Typekit Font', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'typekit_font',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'secondary_typekit_font', array(
			'label' => esc_html__( 'Secondary Typekit Font', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'secondary_typekit_font',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'typekit_embed_id', array(
			'label' => esc_html__( 'Typekit Embed ID', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'typekit_embed_id',
			'type' => 'text',
			'description'  => esc_html__( 'Paste the generated embed ID here.', 'viewpoint' )
        )
	);
	$wp_customize->add_control( 'google_font', array(
			'label' => esc_html__( 'Google Font', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'google_font',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'google_font_weights', array(
			'label' => esc_html__( 'Google Font Weights', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'google_font_weights',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'secondary_google_font', array(
			'label' => esc_html__( 'Secondary Google Font', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'secondary_google_font',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'secondary_google_font_weights', array(
			'label' => esc_html__( 'Secondary Google Font Weights', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'secondary_google_font_weights',
			'type' => 'text'
        )
	);
	$wp_customize->add_control( 'google_fonts_subset', array(
			'label' => esc_html__( 'Character Subset', 'viewpoint' ),
			'section' => 'viewpoint_font',
			'settings' => 'google_fonts_subset',
			'type' => 'select',
			'choices' => array(
		            'latin' => 'Latin (latin)',
		            'latin-ext' => 'Latin Extended (latin-ext)',
		            'greek' => 'Greek (greek)',
		            'greek-ext' => 'Greek Extended (greek-ext)',
		            'vietnamese' => 'Vietnamese (vietnamese)',
		            'cyrillic-ext' => 'Cyrillic Extended (cyrillic-ext)',
		            'cyrillic' => 'Cyrillic (cyrillic)'
		        )
		)
	);
	
	/* Logo Uploader */
	// SECTION
	$wp_customize->add_section( 'viewpoint_logo' , array(
		'title'      => esc_html__( 'Logo', 'viewpoint' ),
		'priority'   => 20,
	) );
	// SETTING
	$wp_customize->add_setting( 'viewpoint_logo_img', array( 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'viewpoint_logo_retina_img', array( 'sanitize_callback' => 'esc_url_raw' ));
	$wp_customize->add_setting( 'viewpoint_favicon', array( 'sanitize_callback' => 'esc_url_raw' ));
	// CONTROLS
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'viewpoint_logo_img', array(
		'label'    => esc_html__( 'Logo', 'viewpoint' ),
		'section'  => 'viewpoint_logo',
		'settings' => 'viewpoint_logo_img',
		'extensions' => array( 'png', 'svg' ),
		'description'  => esc_html__( 'Upload your .png or .svg logo', 'viewpoint' )
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'viewpoint_logo_retina_img', array(
		'label'    => esc_html__( 'Retina Logo (optional)', 'viewpoint' ),
		'section'  => 'viewpoint_logo',
		'settings' => 'viewpoint_logo_retina_img',
		'extensions' => array( 'png', 'svg' ),
		'description'  => esc_html__( 'Upload your logo@2x.png logo', 'viewpoint' )
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'viewpoint_favicon', array(
		'label'    => esc_html__( 'Favicon', 'viewpoint' ),
		'section'  => 'viewpoint_logo',
		'settings' => 'viewpoint_favicon',
		'extensions' => array( 'png', 'ico' ),
		'description'  => esc_html__( 'Upload your .png or .ico favicon', 'viewpoint' )
	) ) );
	
	/* Gallery Footer */
	// SECTION
	$wp_customize->add_section( 'viewpoint_gallery_footer' , array(
		'title'      => esc_html__( 'Gallery Footer', 'viewpoint' ),
		'priority'   => 20,
	) );
	// SETTING 
	$wp_customize->add_setting( 'viewpoint_gallery_footer_heading', array( 
		'default' => 'Good to see you here!',
		'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_gallery_footer_text', array( 
		'default' => 'Now enjoy more gallery goodness with others of my albums.<br />If you liked this gallery, please give it a heart.',
		'sanitize_callback' => 'balanceTags' ));
	$wp_customize->add_setting( 'viewpoint_recommended_gallery1' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_recommended_gallery2' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_recommended_gallery3' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_recommended_gallery4' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_recommended_gallery5' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	// CONTROLS
	$wp_customize->add_control( 'viewpoint_gallery_footer_heading', array(
		'label'    => esc_html__( 'Heading for Gallery Footer', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_gallery_footer',
		'settings' => 'viewpoint_gallery_footer_heading'
	) );
	$wp_customize->add_control( 'viewpoint_gallery_footer_text', array(
		'label'    => esc_html__( 'Text for Gallery Footer', 'viewpoint' ),
		'type' 	=> 'textarea',
		'section'  => 'viewpoint_gallery_footer',
		'settings' => 'viewpoint_gallery_footer_text'
	) );
	$wp_customize->add_control( 'viewpoint_recommended_gallery1', array(
			'label' => esc_html__( '1st Gallery to Recommend in the Footer', 'viewpoint' ),
			'section' => 'viewpoint_gallery_footer',
			'settings' => 'viewpoint_recommended_gallery1',
			'type' => 'dropdown-pages'
     ) );
     $wp_customize->add_control( 'viewpoint_recommended_gallery2', array(
			'label' => esc_html__( '2nd Gallery to Recommend in the Footer', 'viewpoint' ),
			'section' => 'viewpoint_gallery_footer',
			'settings' => 'viewpoint_recommended_gallery2',
			'type' => 'dropdown-pages'
     ) );
     $wp_customize->add_control( 'viewpoint_recommended_gallery3', array(
			'label' => esc_html__( '3rd Gallery to Recommend in the Footer', 'viewpoint' ),
			'section' => 'viewpoint_gallery_footer',
			'settings' => 'viewpoint_recommended_gallery3',
			'type' => 'dropdown-pages'
     ) );
     $wp_customize->add_control( 'viewpoint_recommended_gallery4', array(
			'label' => esc_html__( '4th Gallery to Recommend in the Footer', 'viewpoint' ),
			'section' => 'viewpoint_gallery_footer',
			'settings' => 'viewpoint_recommended_gallery4',
			'type' => 'dropdown-pages'
     ) );
     $wp_customize->add_control( 'viewpoint_recommended_gallery5', array(
			'label' => esc_html__( '5th Gallery to Recommend in the Footer (Alternative)', 'viewpoint' ),
			'section' => 'viewpoint_gallery_footer',
			'settings' => 'viewpoint_recommended_gallery5',
			'type' => 'dropdown-pages',
			'description'  => esc_html__( 'In case recommended gallery is just viewed', 'viewpoint' )
     ) );
	
	/* Social buttons in footer */
	// SECTION
	$wp_customize->add_section( 'viewpoint_social_footer' , array(
		'title'      => esc_html__( 'Social Media Icons in Footer', 'viewpoint' ),
		'priority'   => 100,
	) );
	// SETTING
	$wp_customize->add_setting( 'viewpoint_display_social', array( 'sanitize_callback' => 'sanitize_key' ));
	$wp_customize->add_setting( 'viewpoint_flickr' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_facebook' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_twitter' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_linkedin' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_skype' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_tumblr' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_youtube' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_dribbble' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_pinterest' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_gplus' , array( 'sanitize_callback' => 'esc_url' ));
	$wp_customize->add_setting( 'viewpoint_instagram' , array( 'sanitize_callback' => 'esc_url' ));
	// CONTROLS
	$wp_customize->add_control( 'viewpoint_skype', array(
		'label'    => esc_html__( 'URL for Skype Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_skype'
	) );
	$wp_customize->add_control( 'viewpoint_twitter', array(
		'label'    => esc_html__( 'URL for Twitter Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_twitter'
	) );
	$wp_customize->add_control( 'viewpoint_linkedin', array(
		'label'    => esc_html__( 'URL for LinkedIn Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_linkedin'
	) );
	$wp_customize->add_control( 'viewpoint_flickr', array(
		'label'    => esc_html__( 'URL for Flickr Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_flickr'
	) );
	$wp_customize->add_control( 'viewpoint_facebook', array(
		'label'    => esc_html__( 'URL for Facebook Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_facebook'
	) );
	$wp_customize->add_control( 'viewpoint_tumblr', array(
		'label'    => esc_html__( 'URL for Tumblr Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_tumblr'
	) );
	$wp_customize->add_control( 'viewpoint_dribbble', array(
		'label'    => esc_html__( 'URL for Dribbble Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_dribbble'
	) );
	$wp_customize->add_control( 'viewpoint_youtube', array(
		'label'    => esc_html__( 'URL for Youtube Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_youtube'
	) );
	$wp_customize->add_control( 'viewpoint_pinterest', array(
		'label'    => esc_html__( 'URL for Pinterest Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_pinterest'
	) );
	$wp_customize->add_control( 'viewpoint_gplus', array(
		'label'    => esc_html__( 'URL for Google+ Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_gplus'
	) );
	$wp_customize->add_control( 'viewpoint_instagram', array(
		'label'    => esc_html__( 'URL for Instagram Button', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_social_footer',
		'settings' => 'viewpoint_instagram'
	) );
	
	
	/* Google map */
	// SECTION
	$wp_customize->add_section( 'viewpoint_gmap_settings' , array(
		'title'      => esc_html__( 'Google Map Settings', 'viewpoint' ),
		'priority'   => 115,
	) );
	// SETTING
	$wp_customize->add_setting( 'viewpoint_gmap_page' , array( 'sanitize_callback' => 'sanitize_text_field' ));
	$wp_customize->add_setting( 'viewpoint_gmap_address', array( 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_setting( 'viewpoint_gmap_zoom', array( 'sanitize_callback' => 'sanitize_text_field' ) );
	// CONTROLS
	$wp_customize->add_control( 'viewpoint_gmap_page', array(
			'label' => esc_html__( 'Page to display Google Map', 'viewpoint' ),
			'section' => 'viewpoint_gmap_settings',
			'settings' => 'viewpoint_gmap_page',
			'type' => 'dropdown-pages'
     ) );
	$wp_customize->add_control( 'viewpoint_gmap_address', array(
		'label'    => esc_html__( 'Address', 'viewpoint' ),
		'type' 	=> 'text',
		'section'  => 'viewpoint_gmap_settings',
		'settings' => 'viewpoint_gmap_address'
	) );
	$wp_customize->add_control( 'viewpoint_gmap_zoom', array(
			'label' => esc_html__( 'Map Zoom', 'viewpoint' ),
			'section' => 'viewpoint_gmap_settings',
			'settings' => 'viewpoint_gmap_zoom',
			'type' => 'select',
			'choices' => array (
				'4'=>'4','5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12', '13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17'
			)
     ));
	
	/* Color Schemer */
	$colors = array();
	$colors[] = array(
		'slug'=>'bg_color', 
		'default' => '#141414',
		'label' => esc_html__('Background Color:', 'viewpoint')
	);
	$colors[] = array(
		'slug'=>'text_color', 
		'default' => '#ffffff',
		'label' => esc_html__('Text Color:', 'viewpoint')
	);
	$colors[] = array(
		'slug'=>'accent_color', 
		'default' => '#EA6200',
		'label' => esc_html__('Accent Color:', 'viewpoint')
	);
	foreach( $colors as $color ) {
		// SETTINGS
		$wp_customize->add_setting(
			$color['slug'], array(
				'default' => $color['default'],
				'type' => 'option', 
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color'
			)
		);
		// CONTROLS
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$color['slug'], 
				array(
					'label' => $color['label'], 
					'section' => 'colors',
					'settings' => $color['slug']
				)
			)
		);
	}
	
	
}

/**
 * Output settings CSS into the head.
 * 
 */
function viewpoint_customize_css()
{
    ?>
	 <style type="text/css">
		/* Background Color  */
		<?php if ( get_option('bg_color') ): ?>
			html, body, select, .loadreveal, .entry-content::after, .mfp-bg, .gallery-footer, .horizontal-gallery-scroll-hider { background-color: <?php echo get_option('bg_color'); ?>;  }
			.whistles-tabs-nav li[aria-selected="true"] a, .whistles-tabs-nav li[aria-selected="true"] a:hover { border-bottom-color: <?php echo get_option('bg_color'); ?>; }
		<?php endif; ?>
		<?php $post_meta =  get_post_meta(get_the_ID(), 'featured-background');
				if ( $post_meta && ($post_meta[0] == 'hide') ): ?>
			 .featured-image-header { display: none; }
		<?php endif; ?>
	 
		/* Font */
		<?php if ( get_theme_mod('typekit_embed_id') ): ?>
			body, input, textarea, select, input[type="submit"], input[type="button"], button, .button { font-family: '<?php echo str_replace(' ', '-', strtolower(get_theme_mod('typekit_font'))); ?>', sans-serif; }
			h1, h2, h3, #header nav ul, .hero-headline { font-family: '<?php echo str_replace(' ', '-', strtolower(get_theme_mod('secondary_typekit_font'))); ?>', sans-serif; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod('google_font') ): ?>
			body, input, textarea, select, input[type="submit"], input[type="button"], button, .button { font-family: '<?php echo get_theme_mod('google_font'); ?>', sans-serif; }
		<?php endif; ?>
		<?php if ( get_theme_mod('secondary_google_font') ): ?>
			h1, h2, h3, #header nav ul, .hero-headline { font-family: '<?php echo get_theme_mod('secondary_google_font'); ?>', sans-serif; }
		<?php endif; ?>
	 
		/* Links and Buttons Colors --- */
		<?php if ( get_option('accent_color') ): ?>
			input[type=submit], input[type=button], button, .button, .entry-count a.nr, .gallery-item .gallery-count a.nr { color: <?php echo get_option('accent_color'); ?>; }	
			hr, #gallerythumbs li::before, .post-password-form { background-color: <?php echo get_option('accent_color'); ?>; }	
		<?php endif; ?>
		
		/* Text Color  */
		<?php if ( get_option('text_color') ): ?>
			body, a, a:hover, input[type=text], input[type=email], input[type=tel], input[type=url], input[type=search], input[type=password], input[type=number], input.input-text, textarea, #header nav ul li a, .hero-headline p, body.layout-fullscreen-gallery .scrolldown, body.has-featured-image .scrolldown, .entry-excerpt { color: <?php echo get_option('text_color'); ?>;  }
			input[type=submit]:hover, input[type=button]:hover, .button:hover, button:hover, input[type=submit]:focus, input[type=button]:focus, .comment-content, .masonry-gallery .gallery-icon a::after, #gallerythumbs li img, .whistles-tabs-nav li a, .whistles-toggle .whistle-title[aria-selected="true"]::before, .whistles-toggle .whistle-title:hover::before, .whistles-accordion .whistle-title[aria-selected="true"]::before, .whistles-accordion .whistle-title:hover::before, .gallery-album .gallery-icon a::after { border-color: <?php echo get_option('text_color'); ?>;  }
			.whistles-tabs-nav { border-bottom-color: <?php echo get_option('text_color'); ?>;  }
			.btl,.btr,.bbl,.bbr,#header nav #menu-burger span, input[type=submit]:hover, input[type=button]:hover, .button:hover, button:hover, input[type=submit]:focus, input[type=button]:focus, #header nav ul li a::before, #gallerythumbs li a { background-color: <?php echo get_option('text_color'); ?>; }
		<?php endif; ?>
		 
	 </style>
    <?php
}

/**
 * Enqueue fonts.
 *
 */
function viewpoint_fonts() {
	/* typekit fonts */
	if ( get_theme_mod('typekit_embed_id') ) {
		add_action( 'wp_footer', 'viewpoint_typekit_embed_scripts', 19 );
	}
	/* google fonts */
	if ( get_theme_mod('google_font') ) {
		wp_register_style( 'viewpoint-google-fonts', '//fonts.googleapis.com/css?family=' . str_replace(' ', '+', get_theme_mod('secondary_google_font')) . ':'.get_theme_mod('secondary_google_font_weights').'|' . str_replace(' ', '+', get_theme_mod('google_font')) . ':'.get_theme_mod('google_font_weights').'&subset='.get_theme_mod('google_fonts_subset').'', array(), '1.0.0' );
		wp_enqueue_style( 'viewpoint-google-fonts' );
	}
}

function viewpoint_typekit_embed_scripts() {
	echo '<script src="https://use.typekit.net/' . get_theme_mod('typekit_embed_id') . '.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>';
}

/* Output settings CSS into the head. */
add_action( 'wp_head', 'viewpoint_customize_css');

/* Enqueue Google or Typekit fonts */
add_action( 'wp_enqueue_scripts', 'viewpoint_fonts' );


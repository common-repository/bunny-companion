<?php
function fasterly_cta_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_option_data', array(
			'title' => esc_html__( 'CTA Section', 'bunny-companion' ),
			'priority' => 8,
			'panel' => 'fasterly_frontpage_sections',
		)
	);
	
	/*=========================================
	Setting
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_cta_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_cta_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','bunny-companion'),
			'section' => 'cta_option_data',
		)
	);
	
	
	// Hide /  Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_cta' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_cta', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'cta_option_data',
			'type'        => 'checkbox',
		) 
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_cta_settings_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_cta_settings_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','bunny-companion'),
			'section' => 'cta_option_data',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_title',
    	array(
	        'default'			=> __('We Now Make Your Business 2025','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_title',
		array(
		    'label'   => __('Title','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_sbttl',
    	array(
	        'default'			=> __('It is a long established fact that a reader will be distracted by readable content','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_sbttl',
		array(
		    'label'   => __('Subtitle','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'textarea',
		)  
	);
	
	//  Icon // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_icon',
    	array(
	        'default'			=> 'fa-phone',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_icon',
		array(
		    'label'   => __('Icon','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'text',
		)  
	);
	
	
	//  Link // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_icon_link',
    	array(
	        'default'			=> 'tel:+493 3322 666',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_url',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_icon_link',
		array(
		    'label'   => __('Icon Link','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'text',
		)  
	);
	
	
	//  Contact // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_contact',
    	array(
	        'default'			=> __('<a href="tel:+493 3322 6666" class="contact-info"><h5>+493 3322 6666</h5> </a><p>Support Service 24/7</p>','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_contact',
		array(
		    'label'   => __('Contact','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'textarea',
		)  
	);
	
	
	
	//  Button Label // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_btn_lbl',
    	array(
	        'default'			=> __('Contact Us','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_btn_lbl',
		array(
		    'label'   => __('Button Label','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'text',
		)  
	);
	
	//  Link // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_cta_btn_link',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_url',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_cta_btn_link',
		array(
		    'label'   => __('Button Link','bunny-companion'),
		    'section' => 'cta_option_data',
			'type'           => 'text',
		)  
	);
	
	
	/*=========================================
	Background
	=========================================*/	
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_cta_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 12,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_cta_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','bunny-companion'),
			'section' => 'cta_option_data',
		)
	);
	
	
	// Image // 
    $wp_customize->add_setting( 
    	FASTERLY_THEME_SETTINGS .'_cta_bg_img' , 
    	array(
			'default' 			=> esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/cta_bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_url',	
			'priority' => 12,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , FASTERLY_THEME_SETTINGS .'_cta_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'bunny-companion'),
			'section'        => 'cta_option_data',
		) 
	));
	
	
	// Overlay Color
	$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
	if( 'Easify' == $Bunny_Companion_current_theme->name){
		$cta_color='#214462';
	}else{
		$cta_color='#000000';
	}
	$wp_customize->add_setting(
	FASTERLY_THEME_SETTINGS .'_cta_bg_overlay_clr', 
	array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $cta_color,
		'priority' => 12
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			FASTERLY_THEME_SETTINGS .'_cta_bg_overlay_clr', 
			array(
				'label'      => __( 'Overlay Color', 'bunny-companion' ),
				'section'    => 'cta_option_data',
			) 
		) 
	);
	
	// opacity
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_cta_bg_opacity',
			array(
				'default'	      => '0.8',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'priority' => 12,
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_cta_bg_opacity', 
			array(
				'label'      => __( 'opacity', 'bunny-companion' ),
				'section'  => 'cta_option_data',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 0,
							'max'           => 0.9,
							'step'          => 0.1,
							'default_value' => 0.9,
						),
					),
			) ) 
		);
	}
	
	
	/*=========================================
	After Before
	=========================================*/	
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_cta_after_before'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 12,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_cta_after_before',
		array(
			'type' => 'hidden',
			'label' => __('Before / After Content','bunny-companion'),
			'section' => 'cta_option_data',
		)
	);
	// After
	$wp_customize->add_setting(
	FASTERLY_THEME_SETTINGS .'_cta_after_data',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'fasterly_sanitize_number_absint',
		)
	);
		
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_cta_after_data',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for After Content','bunny-companion'),
			'section'	=> 'cta_option_data',
			'priority'  => 14
		)
	);			
}
add_action( 'customize_register', 'fasterly_cta_option_data' );

// cta selective refresh
function fasterly_cta_section_partials( $wp_customize ){	
	// fasterly_theme_cta_title
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_cta_title', array(
		'selector'            => '.hm-cta .cta_content .ttl',
		'settings'            => 'fasterly_theme_cta_title',
		'render_callback'  => 'fasterly_theme_cta_title_render_callback',
	) );
	
	// fasterly_theme_cta_sbttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_cta_sbttl', array(
		'selector'            => '.hm-cta .cta_content .txt',
		'settings'            => 'fasterly_theme_cta_sbttl',
		'render_callback'  => 'fasterly_theme_cta_sbttl_render_callback',
	) );
	
	// fasterly_theme_cta_contact
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_cta_contact', array(
		'selector'            => '.hm-cta  .ctct',
		'settings'            => 'fasterly_theme_cta_contact',
		'render_callback'  => 'fasterly_theme_cta_contact_render_callback',
	) );
	
	// fasterly_theme_cta_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_cta_btn_lbl', array(
		'selector'            => '.hm-cta .btn-1',
		'settings'            => 'fasterly_theme_cta_btn_lbl',
		'render_callback'  => 'fasterly_theme_cta_btn_lbl_render_callback',
	) );
	}

add_action( 'customize_register', 'fasterly_cta_section_partials' );

// fasterly_theme_cta_title
function fasterly_theme_cta_title_render_callback() {
	return get_theme_mod( 'fasterly_theme_cta_title' );
}

// fasterly_theme_cta_sbttl
function fasterly_theme_cta_sbttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_cta_sbttl' );
}

// fasterly_theme_cta_contact
function fasterly_theme_cta_contact_render_callback() {
	return get_theme_mod( 'fasterly_theme_cta_contact' );
}

// fasterly_theme_cta_btn_lbl
function fasterly_theme_cta_btn_lbl_render_callback() {
	return get_theme_mod( 'fasterly_theme_cta_btn_lbl' );
}
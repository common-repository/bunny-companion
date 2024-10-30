<?php
function fasterly_blog_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Blog  Section
	=========================================*/
	$wp_customize->add_section(
		'blog_option_data', array(
			'title' => esc_html__( 'Blog Section', 'bunny-companion' ),
			'priority' => 12,
			'panel' => 'fasterly_frontpage_sections',
		)
	);
	
	/*=========================================
	Setting
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_blog_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_blog_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','bunny-companion'),
			'section' => 'blog_option_data',
		)
	);
	
	// Hide /  Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_blog' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_blog', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'blog_option_data',
			'type'        => 'checkbox',
		) 
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_blog_settings_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_blog_settings_head',
		array(
			'type' => 'hidden',
			'label' => __('Header','bunny-companion'),
			'section' => 'blog_option_data',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_blog_title',
    	array(
	        'default'			=> __('Our Blogs','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_blog_title',
		array(
		    'label'   => __('Title','bunny-companion'),
		    'section' => 'blog_option_data',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_blog_sbttl',
    	array(
	        'default'			=> __('Dedictated<span class="subtitle-shape"><ul class="dynamic-txt"><li>Blog</li><li>Features</li></ul></span>','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_blog_sbttl',
		array(
		    'label'   => __('Subtitle','bunny-companion'),
		    'section' => 'blog_option_data',
			'type'           => 'textarea',
		)  
	);
	
	//  Text // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_blog_txt',
    	array(
	        'default'			=> __('Lorem Ipsum is simply dummy of printing and typesetting and industry.','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_blog_txt',
		array(
		    'label'   => __('Description','bunny-companion'),
		    'section' => 'blog_option_data',
			'type'           => 'textarea',
		)  
	);
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_blog_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_blog_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','bunny-companion'),
			'section' => 'blog_option_data',
		)
	);
	
	// blog_display_num
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_blog_display_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_blog_display_num', 
			array(
				'label'      => __( 'No of Posts Display', 'bunny-companion' ),
				'section'  => 'blog_option_data',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 500,
							'step'   => 1,
							'default_value' => 3,
						),
					),
			) ) 
		);
	}
	
	/*=========================================
	After Before
	=========================================*/	
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_blog_after_before'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 12,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_blog_after_before',
		array(
			'type' => 'hidden',
			'label' => __('Before / After Content','bunny-companion'),
			'section' => 'blog_option_data',
		)
	);
	// After
	$wp_customize->add_setting(
	FASTERLY_THEME_SETTINGS .'_blog_after_data',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'fasterly_sanitize_number_absint',
		)
	);
		
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_blog_after_data',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for After Content','bunny-companion'),
			'section'	=> 'blog_option_data',
			'priority'  => 14
		)
	);			
}
add_action( 'customize_register', 'fasterly_blog_option_data' );

// blog selective refresh
function fasterly_blog_section_partials( $wp_customize ){	
	// fasterly_theme_blog_title
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_blog_title', array(
		'selector'            => '.hm-blog .section-title-1 .title',
		'settings'            => 'fasterly_theme_blog_title',
		'render_callback'  => 'fasterly_theme_blog_title_render_callback',
	) );
	
	// fasterly_theme_blog_sbttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_blog_sbttl', array(
		'selector'            => '.hm-blog .section-title-1 .sbttl',
		'settings'            => 'fasterly_theme_blog_sbttl',
		'render_callback'  => 'fasterly_theme_blog_sbttl_render_callback',
	) );
	
	// fasterly_theme_blog_txt
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_blog_txt', array(
		'selector'            => '.hm-blog .section-title-1 .txt',
		'settings'            => 'fasterly_theme_blog_txt',
		'render_callback'  => 'fasterly_theme_blog_txt_render_callback',
	) );
	
	// fasterly_theme_blog_data
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_blog_data', array(
		'selector'            => '.hm-blog .blog-wrp',
	) );
	}

add_action( 'customize_register', 'fasterly_blog_section_partials' );

// fasterly_theme_blog_title
function fasterly_theme_blog_title_render_callback() {
	return get_theme_mod( 'fasterly_theme_blog_title' );
}

// fasterly_theme_blog_sbttl
function fasterly_theme_blog_sbttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_blog_sbttl' );
}

// fasterly_theme_blog_txt
function fasterly_theme_blog_txt_render_callback() {
	return get_theme_mod( 'fasterly_theme_blog_txt' );
}
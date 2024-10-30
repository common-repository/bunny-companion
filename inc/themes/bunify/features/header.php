<?php
function bunify_header_free_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Contact
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS.'_hdr_nav_contact'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hdr_nav_contact',
		array(
			'type' => 'hidden',
			'label' => __('Contact','bunny-companion'),
			'section' => 'header_nav_bar',
		)
	);
	

	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_nav_contact' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 6,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_nav_contact', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'header_nav_bar',
			'type'        => 'checkbox'
		) 
	);	
	
	
	// Title // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS.'_nav_contact_ttl',
    	array(
	        'default'			=> __('Call for help:','bunny-companion'),
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'capability' => 'edit_theme_options',
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS.'_nav_contact_ttl',
		array(
		    'label'   		=> __('Title','bunny-companion'),
		    'section' 		=> 'header_nav_bar',
			'type'		 =>	'text'
		)  
	);
	
	// Subtitle // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS.'_nav_contact_subttl',
    	array(
	        'default'			=> __('<a class="description" href="tel:49333226666"> 493-3322-6666</a>','bunny-companion'),
			'sanitize_callback' => 'fasterly_sanitize_html',
			'capability' => 'edit_theme_options',
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS.'_nav_contact_subttl',
		array(
		    'label'   		=> __('Subtitle','bunny-companion'),
		    'section' 		=> 'header_nav_bar',
			'type'		 =>	'textarea'
		)  
	);		
}
add_action( 'customize_register', 'bunify_header_free_settings' );

// Header selective refresh
function bunify_free_header_partials( $wp_customize ){
	// fasterly_theme_nav_contact_ttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_nav_contact_ttl', array(
		'selector'            => '.header-7 .header-btn .pxl-item--title span',
		'settings'            => 'fasterly_theme_nav_contact_ttl',
		'render_callback'  => 'fasterly_theme_nav_contact_ttl_render_callback',
	) );
	
	// fasterly_theme_nav_contact_subttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_nav_contact_subttl', array(
		'selector'            => '.header-7 .header-btn .pxl-item--description',
		'settings'            => 'fasterly_theme_nav_contact_subttl',
		'render_callback'  => 'fasterly_theme_nav_contact_subttl_render_callback',
	) );
	}
add_action( 'customize_register', 'bunify_free_header_partials' );

// fasterly_theme_nav_contact_ttl
function fasterly_theme_nav_contact_ttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_nav_contact_ttl' );
}

// fasterly_theme_nav_contact_subttl
function fasterly_theme_nav_contact_subttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_nav_contact_subttl' );
}
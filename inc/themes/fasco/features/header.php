<?php
function fasterly_header_free_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Site Header', 'bunny-companion'),
		) 
	);
	
	/*=========================================
	Fasterly Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','bunny-companion'),
			'panel'  		=> 'header_section',
		)
    );
	// Head
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS.'_logo_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_logo_head',
		array(
			'type' => 'hidden',
			'label' => __('Logo','bunny-companion'),
			'section' => 'title_tagline',
			'priority' => 1,
		)
	);
	

	// Logo Width // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_logo_width',
			array(
				'default'			=> '140',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_logo_width', 
			array(
				'label'      => __( 'Logo Width', 'bunny-companion' ),
				'section'  => 'title_tagline',
				 'media_query'   => true,
					'input_attr'    => array(
						'mobile'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'tablet'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'desktop' => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
					),
			) ) 
		);
	}
	
	// Typography
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS.'_logo_typography'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_logo_typography',
		array(
			'type' => 'hidden',
			'label' => __('Typography','bunny-companion'),
			'section' => 'title_tagline',
			'priority' => 100,
		)
	);
	
	// Site Title Font Size// 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS.'_site_ttl_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS.'_site_ttl_size', 
			array(
				'label'      => __( 'Site Title Font Size', 'bunny-companion' ),
				'section'  => 'title_tagline',
				'priority' => 101,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                ),
			) ) 
		);

	// Site Description Font Size// 	
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS.'_site_desc_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS.'_site_desc_size', 
			array(
				'label'      => __( 'Site Description Font Size', 'bunny-companion' ),
				'section'  => 'title_tagline',
				'priority' => 102,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                ),
			) ) 
		);
	}
	
	/*=========================================
	Top  Header Section
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Top Header','bunny-companion'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	/*=========================================
	Social
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS.'_hdr_social_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hdr_social_head',
		array(
			'type' => 'hidden',
			'label' => __('Social Icons','bunny-companion'),
			'section' => 'top_header',
			'priority' => 1,
		)
	);
	
	
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_social_icon' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_social_icon', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'top_header',
			'type'        => 'checkbox'
		) 
	);
	
	
	/**
	 * Customizer Repeater
	 */
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS.'_social_icons', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 2,
			 'default' => fasterly_get_social_icon_default()
		)
		);
		
		$wp_customize->add_control( 
			new FASTERLY_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS.'_social_icons', 
					array(
						'label'   => esc_html__('Social Icons','bunny-companion'),
						'add_field_label'                   => esc_html__( 'Add New Social', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Social', 'bunny-companion' ),
						'section' => 'top_header',
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
	//Premium feature
		class fasterly_theme_social_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_fasterly_social_premium up-to-pro" href="<?php echo esc_url(fasterly_pro_links()); ?>" target="_blank" style="display: none;"><?php _e('More Icons Available in Premium Version','bunny-companion'); ?></a>
			<?php
			} 
		}	
	
		$wp_customize->add_setting( 'fasterly_social_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 2,
		));
		$wp_customize->add_control(
			new fasterly_theme_social_premium(
			$wp_customize,
			'fasterly_social_pro',
				array(
					'section'				=> 'top_header',
				)
			)
		);	
		
		
	/*=========================================
	Menu
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS.'_hdr_menu_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 8,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hdr_menu_head',
		array(
			'type' => 'hidden',
			'label' => __('Menu','bunny-companion'),
			'section' => 'top_header',
		)
	);
	
	
	// Hide / Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_hdr_menu' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_hdr_menu', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'top_header',
			'type'        => 'checkbox'
		) 
	);
	
	
	// Menu
	$wp_customize->add_setting( FASTERLY_THEME_SETTINGS.'_hdr_top_menu', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_hdr_menu_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS.'_hdr_top_menu', 
					array(
						'label'   => esc_html__('Menu','bunny-companion'),
						'section' => 'top_header',
						'add_field_label'                   => esc_html__( 'Add New Menu', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Menu', 'bunny-companion' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);

	//Premium feature
		class fasterly_theme_menu_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_fasterly_menu_premium up-to-pro" href="<?php echo esc_url(fasterly_pro_links()); ?>" target="_blank" style="display: none;"><?php _e('More Menu Available in Premium Version','bunny-companion'); ?></a>
			<?php
			} 
		}	
	
		$wp_customize->add_setting( 'fasterly_menu_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 8,
		));
		$wp_customize->add_control(
			new fasterly_theme_menu_premium(
			$wp_customize,
			'fasterly_menu_pro',
				array(
					'section'				=> 'top_header',
				)
			)
		);	


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
			'section' => 'top_header',
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
			'section'     => 'top_header',
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
		    'section' 		=> 'top_header',
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
		    'section' 		=> 'top_header',
			'type'		 =>	'textarea'
		)  
	);			
}
add_action( 'customize_register', 'fasterly_header_free_settings' );

// Header selective refresh
function fasterly_free_header_partials( $wp_customize ){
	// fasterly_theme_hdr_left_ttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_hdr_left_ttl', array(
		'selector'            => '.header-widget .text-animation .text-heading',
		'settings'            => 'fasterly_theme_hdr_left_ttl',
		'render_callback'  => 'fasterly_theme_hdr_left_ttl_render_callback',
	) );
	
	// fasterly_theme_hdr_left_txt
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_hdr_left_txt', array(
		'selector'            => '.header-widget .text-animation .typewrite',
		'settings'            => 'fasterly_theme_hdr_left_txt',
		'render_callback'  => 'fasterly_theme_hdr_left_txt_render_callback',
	) );
	
	// fasterly_theme_hdr_social_ttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_hdr_social_ttl', array(
		'selector'            => '.header-widget .social-title',
		'settings'            => 'fasterly_theme_hdr_social_ttl',
		'render_callback'  => 'fasterly_theme_hdr_social_ttl_render_callback',
	) );
	
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
add_action( 'customize_register', 'fasterly_free_header_partials' );

// fasterly_theme_hdr_left_ttl
function fasterly_theme_hdr_left_ttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_hdr_left_ttl' );
}

// fasterly_theme_hdr_left_txt
function fasterly_theme_hdr_left_txt_render_callback() {
	return get_theme_mod( 'fasterly_theme_hdr_left_txt' );
}

// fasterly_theme_hdr_social_ttl
function fasterly_theme_hdr_social_ttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_hdr_social_ttl' );
}

// fasterly_theme_nav_contact_ttl
function fasterly_theme_nav_contact_ttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_nav_contact_ttl' );
}

// fasterly_theme_nav_contact_subttl
function fasterly_theme_nav_contact_subttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_nav_contact_subttl' );
}
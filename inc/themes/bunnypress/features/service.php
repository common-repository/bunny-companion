<?php
function fasterly_service_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_option_data', array(
			'title' => esc_html__( 'Service Section', 'bunny-companion' ),
			'priority' => 4,
			'panel' => 'fasterly_frontpage_sections',
		)
	);
	
	/*=========================================
	Setting
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_service_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_service_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','bunny-companion'),
			'section' => 'service_option_data',
		)
	);
	
	// Hide /  Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_service' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_service', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'service_option_data',
			'type'        => 'checkbox',
		) 
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_service_settings_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_service_settings_head',
		array(
			'type' => 'hidden',
			'label' => __('Header','bunny-companion'),
			'section' => 'service_option_data',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_service_title',
    	array(
	        'default'			=> __('Awesome Services','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_service_title',
		array(
		    'label'   => __('Title','bunny-companion'),
		    'section' => 'service_option_data',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_service_sbttl',
    	array(
	        'default'			=> __('Dedictated<span class="subtitle-shape"><ul class="dynamic-txt"><li>Service</li><li>Features</li></ul></span>','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_service_sbttl',
		array(
		    'label'   => __('Subtitle','bunny-companion'),
		    'section' => 'service_option_data',
			'type'           => 'textarea',
		)  
	);
	
	//  Text // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_service_txt',
    	array(
	        'default'			=> __('Lorem Ipsum is simply dummy of printing and typesetting and industry.','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_service_txt',
		array(
		    'label'   => __('Description','bunny-companion'),
		    'section' => 'service_option_data',
			'type'           => 'textarea',
		)  
	);
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_service_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_service_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','bunny-companion'),
			'section' => 'service_option_data',
		)
	);
	
	
	// Service	
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_service_data', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_service2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_service_data', 
					array(
						'label'   => esc_html__('Service','bunny-companion'),
						'section' => 'service_option_data',
						'add_field_label'                   => esc_html__( 'Add New Service', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Services', 'bunny-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
		
	//Premium feature
		class fasterly_theme_service_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_fasterly_service_premium up-to-pro" href="<?php echo esc_url(fasterly_pro_links()); ?>" target="_blank" style="display: none;"><?php _e('More Service Available in Premium Version','bunny-companion'); ?></a>
			<?php
			} 
		}	
	
		$wp_customize->add_setting( 'fasterly_service_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 8,
		));
		$wp_customize->add_control(
			new fasterly_theme_service_premium(
			$wp_customize,
			'fasterly_service_pro',
				array(
					'section'				=> 'service_option_data',
				)
			)
		);		
	
	/*=========================================
	After Before
	=========================================*/	
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_service_after_before'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 12,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_service_after_before',
		array(
			'type' => 'hidden',
			'label' => __('Before / After Content','bunny-companion'),
			'section' => 'service_option_data',
		)
	);
	// After
	$wp_customize->add_setting(
	FASTERLY_THEME_SETTINGS .'_service_after_data',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'fasterly_sanitize_number_absint',
		)
	);
		
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_service_after_data',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for After Content','bunny-companion'),
			'section'	=> 'service_option_data',
			'priority'  => 14
		)
	);			
}
add_action( 'customize_register', 'fasterly_service_option_data' );

// service selective refresh
function fasterly_service_section_partials( $wp_customize ){	
	// fasterly_theme_service_title
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_service_title', array(
		'selector'            => '.hm-service .section-title-1 .title',
		'settings'            => 'fasterly_theme_service_title',
		'render_callback'  => 'fasterly_theme_service_title_render_callback',
	) );
	
	// fasterly_theme_service_sbttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_service_sbttl', array(
		'selector'            => '.hm-service .section-title-1 .sbttl',
		'settings'            => 'fasterly_theme_service_sbttl',
		'render_callback'  => 'fasterly_theme_service_sbttl_render_callback',
	) );
	
	// fasterly_theme_service_txt
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_service_txt', array(
		'selector'            => '.hm-service .section-title-1 .txt',
		'settings'            => 'fasterly_theme_service_txt',
		'render_callback'  => 'fasterly_theme_service_txt_render_callback',
	) );
	
	// fasterly_theme_service_data
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_service_data', array(
		'selector'            => '.hm-service .service-wrp',
	) );
	}

add_action( 'customize_register', 'fasterly_service_section_partials' );

// fasterly_theme_service_title
function fasterly_theme_service_title_render_callback() {
	return get_theme_mod( 'fasterly_theme_service_title' );
}

// fasterly_theme_service_sbttl
function fasterly_theme_service_sbttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_service_sbttl' );
}

// fasterly_theme_service_txt
function fasterly_theme_service_txt_render_callback() {
	return get_theme_mod( 'fasterly_theme_service_txt' );
}
<?php
function fasterly_information_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Information  Section
	=========================================*/
	$wp_customize->add_section(
		'information_option_data', array(
			'title' => esc_html__( 'Information Section', 'bunny-companion' ),
			'priority' => 2,
			'panel' => 'fasterly_frontpage_sections',
		)
	);
	
	/*=========================================
	Setting
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_information_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_information_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','bunny-companion'),
			'section' => 'information_option_data',
		)
	);
	
	
	// Hide /  Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_information' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_information', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'information_option_data',
			'type'        => 'checkbox',
		) 
	);
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_information_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_information_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','bunny-companion'),
			'section' => 'information_option_data',
		)
	);
	
	$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme	
	if( 'Fasterly' == $Bunny_Companion_current_theme->name){
	// Information	
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_information_data', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_information_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_information_data', 
					array(
						'label'   => esc_html__('Information','bunny-companion'),
						'section' => 'information_option_data',
						'add_field_label'                   => esc_html__( 'Add New Information', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Information', 'bunny-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
	}
	
	if( 'Smoothify' == $Bunny_Companion_current_theme->name || 'Axxa' == $Bunny_Companion_current_theme->name){
	// Information	2
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_information_data2', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_information2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_information_data2', 
					array(
						'label'   => esc_html__('Information','bunny-companion'),
						'section' => 'information_option_data',
						'add_field_label'                   => esc_html__( 'Add New Informations', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Informations', 'bunny-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);		
	}	

	if( 'BunnyPress' == $Bunny_Companion_current_theme->name  || 'Bunify' == $Bunny_Companion_current_theme->name){
	// Information	3
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_information_data3', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_information3_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_information_data3', 
					array(
						'label'   => esc_html__('Information','bunny-companion'),
						'section' => 'information_option_data',
						'add_field_label'                   => esc_html__( 'Add New Informations', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Informations', 'bunny-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);		
	}	

if( 'Fasco' == $Bunny_Companion_current_theme->name){
	// Information	4
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_information_data4', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 8,
			 'default' => fasterly_information4_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_information_data4', 
					array(
						'label'   => esc_html__('Information','bunny-companion'),
						'section' => 'information_option_data',
						'add_field_label'                   => esc_html__( 'Add New Informations', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Informations', 'bunny-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);		
	}		
	//Premium feature
		class fasterly_theme_info_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_fasterly_info_premium up-to-pro" href="<?php echo esc_url(fasterly_pro_links()); ?>" target="_blank" style="display: none;"><?php _e('More Info Available in Premium Version','bunny-companion'); ?></a>
			<?php
			} 
		}	
	
		$wp_customize->add_setting( 'fasterly_info_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 8,
		));
		$wp_customize->add_control(
			new fasterly_theme_info_premium(
			$wp_customize,
			'fasterly_info_pro',
				array(
					'section'				=> 'information_option_data',
				)
			)
		);			
}

add_action( 'customize_register', 'fasterly_information_option_data' );
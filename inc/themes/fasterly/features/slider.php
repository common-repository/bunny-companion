<?php
function fasterly_slider_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider 
	=========================================*/
	$wp_customize->add_panel(
		'fasterly_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'bunny-companion' ),
		)
	);
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'bunny-companion' ),
			'panel' => 'fasterly_frontpage_sections',
			'priority' => 1,
		)
	);
	
	// slider Contents
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','bunny-companion'),
			'section' => 'slider_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add slides
	 */
	
		$wp_customize->add_setting( FASTERLY_THEME_SETTINGS .'_slider', 
			array(
			 'sanitize_callback' => 'fasterly_repeater_sanitize',
			 'priority' => 5,
			  'default' => fasterly_slider_default()
			)
		);
		
		$wp_customize->add_control( 
			new Fasterly_Repeater( $wp_customize, 
				FASTERLY_THEME_SETTINGS .'_slider', 
					array(
						'label'   => esc_html__('Slide','bunny-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Slider', 'bunny-companion' ),
						'item_name'                         => esc_html__( 'Slider', 'bunny-companion' ),
						
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_slide_align' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);

	//Premium feature
		class fasterly_theme_slider_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_fasterly_slider_premium up-to-pro" href="<?php echo esc_url(fasterly_pro_links()); ?>" target="_blank" style="display: none;"><?php _e('More Slides Available in Premium Version','bunny-companion'); ?></a>
			<?php
			} 
		}	
	
		$wp_customize->add_setting( 'fasterly_slider_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new fasterly_theme_slider_premium(
			$wp_customize,
			'fasterly_slider_pro',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);	
	//Overlay Enable //
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS .'_slider_overlay_enable' , 
			array(
			'default' => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 6,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_slider_overlay_enable', 
		array(
			'label'	      => esc_html__( 'Overlay Enable?', 'bunny-companion' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);	
	
	
	// slider opacity
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_slider_opacity',
			array(
				'default'	      => '0.7',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'priority' => 7,
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_slider_opacity', 
			array(
				'label'      => __( 'opacity', 'bunny-companion' ),
				'section'  => 'slider_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 0,
							'max'           => 0.9,
							'step'          => 0.1,
							'default_value' => 0.6,
						),
					),
			) ) 
		);
	}
	
	 // Overlay Color
	$wp_customize->add_setting(
	FASTERLY_THEME_SETTINGS .'_slide_opacity_color', 
	array(
		'default'	      => '#000000',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'priority' => 8,
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			FASTERLY_THEME_SETTINGS .'_slide_opacity_color', 
			array(
				'label'      => __( 'Overlay Color', 'bunny-companion' ),
				'section'    => 'slider_setting'
			) 
		) 
	);
}

add_action( 'customize_register', 'fasterly_slider_option_data' );
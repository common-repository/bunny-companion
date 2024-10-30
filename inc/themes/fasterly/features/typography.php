<?php
function fasterly_typography_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	$wp_customize->add_panel(
		'fasterly_typography_option_data', array(
			'priority' => 38,
			'title' => esc_html__( 'Typography', 'bunny-companion' ),
		)
	);	
	
	/*=========================================
	Fasterly Typography
	=========================================*/
	$wp_customize->add_section(
        'fasterly_typography_option_data',
        array(
        	'priority'      => 1,
            'title' 		=> __('Body Typography','bunny-companion'),
			'panel'  		=> 'fasterly_typography_option_data',
		)
    );
	
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_body_typography'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_body_typography',
		array(
			'type' => 'hidden',
			'label' => esc_html('Body Typography','bunny-companion'),
			'section' => 'fasterly_typography_option_data',
			'priority'          => 1,
		)
	);
	
	
	// Body Font Size // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_body_font_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_body_font_size', 
			array(
				'label'      => __( 'Size', 'bunny-companion' ),
				'section'  => 'fasterly_typography_option_data',
				'priority'      => 2,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 1,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                ),
			) ) 
		);
	}
	
	// Body Font Size // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_body_line_height',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_body_line_height', 
			array(
				'label'      => __( 'Line Height', 'bunny-companion' ),
				'section'  => 'fasterly_typography_option_data',
				'priority'      => 3,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
                    'desktop' => array(
                       'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
				)	
			) ) 
		);
	}
	
	// Body Font Size // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_body_ltr_space',
			array(
                'default'           => '0.1',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_body_ltr_space', 
			array(
				'label'      => __( 'Letter Spacing', 'bunny-companion' ),
				'section'  => 'fasterly_typography_option_data',
				'priority'      => 4,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
                    'tablet'  => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
                    'desktop' => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
				)	
			) ) 
		);
	}
	
	/*=========================================
	 Fasterly Typography Headings
	=========================================*/	
	/*=========================================
	 Fasterly Typography H1
	=========================================*/
	for ( $i = 1; $i <= 6; $i++ ) {
	if($i  == '1'){$j=36;}elseif($i  == '2'){$j=32;}elseif($i  == '3'){$j=28;}elseif($i  == '4'){$j=24;}elseif($i  == '5'){$j=20;}else{$j=16;}
	$wp_customize->add_section(
        'fasterly_headings' . $i . '_typography',
        array(
        	'priority'      => 2,
            'title' 		=> __('H' . $i . ' Typography','bunny-companion'),
			'panel'  		=> 'fasterly_typography_option_data',
		)
    );
	
	$wp_customize->add_setting(
		'h' . $i . '_typography'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'h' . $i . '_typography',
		array(
			'type' => 'hidden',
			'label' => esc_html('H' . $i .' Typography','bunny-companion'),
			'section' => 'fasterly_headings' . $i . '_typography',
		)
	);

	// Heading Font Size // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_h' . $i . '_font_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_h' . $i . '_font_size', 
			array(
				'label'      => __( 'Font Size', 'bunny-companion' ),
				'section'  => 'fasterly_headings' . $i . '_typography',
				'media_query'   => true,
				'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => $j,
                    ),
                    'tablet'  => array(
                        'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => $j,
                    ),
                    'desktop' => array(
                       'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
					    'default_value' => $j,
                    ),
				)	
			) ) 
		);
	}
	
	// Heading Font Size // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_h' . $i . '_line_height',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_h' . $i . '_line_height', 
			array(
				'label'      => __( 'Line Height', 'bunny-companion' ),
				'section'  => 'fasterly_headings' . $i . '_typography',
				'media_query'   => true,
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 5,
					'step'   => 0.1,
					//'suffix' => 'px', //optional suffix
				),
				 'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
                    'desktop' => array(
                       'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
				)	
			) ) 
		);
		}
	// Heading Letter Spacing // 
	if ( class_exists( 'Fasterly_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS .'_h' . $i . '_ltr_spacing',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fasterly_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Fasterly_Customizer_Range_Control( $wp_customize, FASTERLY_THEME_SETTINGS .'_h' . $i . '_ltr_spacing', 
			array(
				'label'      => __( 'Letter Spacing', 'bunny-companion' ),
				'section'  => 'fasterly_headings' . $i . '_typography',
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
                    'tablet'  => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
                    'desktop' => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
				)	
			) ) 
		);
	}
}
}
add_action( 'customize_register', 'fasterly_typography_option_data' );
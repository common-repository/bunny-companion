<?php
function fasterly_about_option_data( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	About  Section
	=========================================*/
	$wp_customize->add_section(
		'about_option_data', array(
			'title' => esc_html__( 'About Section', 'bunny-companion' ),
			'priority' => 3,
			'panel' => 'fasterly_frontpage_sections',
		)
	);
	/*=========================================
	Setting
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_about_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_about_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','bunny-companion'),
			'section' => 'about_option_data',
		)
	);
	
	
	// Hide /  Show
	$wp_customize->add_setting( 
		FASTERLY_THEME_SETTINGS.'_hs_about' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS.'_hs_about', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'bunny-companion' ),
			'section'     => 'about_option_data',
			'type'        => 'checkbox',
		) 
	);
	
	/*=========================================
	Left Content
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_about_setting_left_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_about_setting_left_head',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','bunny-companion'),
			'section' => 'about_option_data',
		)
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	FASTERLY_THEME_SETTINGS .'_about_setting_left_img1', 
    	array(
			'default' 			=> esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/about/imgabout1.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_url',	
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , FASTERLY_THEME_SETTINGS .'_about_setting_left_img1' ,
		array(
			'label'          => esc_html__( 'Image 1', 'bunny-companion'),
			'section'        => 'about_option_data',
		) 
	));
	
	//  Image // 
    $wp_customize->add_setting( 
    	FASTERLY_THEME_SETTINGS .'_about_setting_left_img2', 
    	array(
			'default' 			=> esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/about/imgabout2.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_url',	
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , FASTERLY_THEME_SETTINGS .'_about_setting_left_img2' ,
		array(
			'label'          => esc_html__( 'Image 2', 'bunny-companion'),
			'section'        => 'about_option_data',
		) 
	));
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		FASTERLY_THEME_SETTINGS .'_about_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	FASTERLY_THEME_SETTINGS .'_about_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Right Content','bunny-companion'),
			'section' => 'about_option_data',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_about_title',
    	array(
	        'default'			=> __('About<span class="subtitle-shape"><ul class="dynamic-txt">
							<li>Company</li>
							<li>History</li>
						</ul></span>','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 8,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_about_title',
		array(
		    'label'   => __('Title','bunny-companion'),
		    'section' => 'about_option_data',
			'type'           => 'textarea',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_about_sbttl',
    	array(
	        'default'			=> __('The world’s IT networking company','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 8,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_about_sbttl',
		array(
		    'label'   => __('Subtitle','bunny-companion'),
		    'section' => 'about_option_data',
			'type'           => 'text',
		)  
	);
	
	//  Text // 
	$wp_customize->add_setting(
    	FASTERLY_THEME_SETTINGS .'_about_txt',
    	array(
	        'default'			=> __('Proin venenatis vestibulum metus at aliquet.Mauris bibendum mi accumsan arcu varius, eget mattis nulla fringilla. Praesent viverra tellus tempus ex bibendum','bunny-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fasterly_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 8,
		)
	);	
	
	$wp_customize->add_control( 
		FASTERLY_THEME_SETTINGS .'_about_txt',
		array(
		    'label'   => __('Description','bunny-companion'),
		    'section' => 'about_option_data',
			'type'           => 'textarea',
		)  
	);
	
	
	if ( class_exists( 'Fasterly_Page_Editor' ) ) {
		$page_editor_path = trailingslashit( get_template_directory() ) . 'inc/customizer/custom-controls/editor/customizer-page-editor.php';
		if ( file_exists( $page_editor_path ) ) {
			require_once( $page_editor_path );
		}
		$frontpage_id = get_option( 'page_on_front' );
		$default = '';
		if ( ! empty( $frontpage_id ) ) {
			$default = get_post_field( 'post_content', $frontpage_id );
		}
		$wp_customize->add_setting(
			FASTERLY_THEME_SETTINGS.'_about_content', array(
				'default' => __('<div class="icon-box-item">
							<div class="icon-box">
								<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i></a>
							</div>
							<div class="content">
								<h5><a href="#">IT Managment</a></h5>
								<p>Aenean congue mi nulla, eget </p>
							</div>
							<div class="icon-box">
								<a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
							</div>
							<div class="content">
								<h5><a href="#">Serivce Ideas</a></h5>
								<p>Aenean congue mi nulla, eget </p>
							</div>
						</div>
						<div class="about-footer">
							<a href="#" class="btn-1 btn-effect-1 btn-radius-1 ">Read More <i class="fa fa-angle-double-right"></i></a>
							<div class="image-box">
								<div class="img">
									<img src="'.esc_url(BUNNY_COMPANION_PLUGIN_URL) .'inc/themes/fasterly/assets/images/about/author.abt.jpg">
								</div>
								<div class="content">
									<div class="name">
										Henry Jhonson
									</div>
									<p class="desc"><a href="#">Founder of CEO</a> </p>
								</div>
							</div>
						</div>','bunny-companion'),
				'sanitize_callback' => 'wp_kses_post',
				'priority' => 13,
				
			)
		);

		$wp_customize->add_control(
			new Fasterly_Page_Editor(
				$wp_customize, FASTERLY_THEME_SETTINGS.'_about_content', array(
					'label' => esc_html__( 'Content', 'bunny-companion' ),
					'section' => 'about_option_data',
					'needsync' => true,
				)
			)
		);
	}

}
add_action( 'customize_register', 'fasterly_about_option_data' );

// about selective refresh
function fasterly_about_section_partials( $wp_customize ){	
	// fasterly_theme_about_title
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_about_title', array(
		'selector'            => '.hm-abt .about-right-area .sbttl',
		'settings'            => 'fasterly_theme_about_title',
		'render_callback'  => 'fasterly_theme_about_title_render_callback',
	) );
	
	// fasterly_theme_about_sbttl
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_about_sbttl', array(
		'selector'            => '.hm-abt .about-right-area .title',
		'settings'            => 'fasterly_theme_about_sbttl',
		'render_callback'  => 'fasterly_theme_about_sbttl_render_callback',
	) );
	
	// fasterly_theme_about_txt
	$wp_customize->selective_refresh->add_partial( 'fasterly_theme_about_txt', array(
		'selector'            => '.hm-abt .about-right-area .txt',
		'settings'            => 'fasterly_theme_about_txt',
		'render_callback'  => 'fasterly_theme_about_txt_render_callback',
	) );
	}

add_action( 'customize_register', 'fasterly_about_section_partials' );

// fasterly_theme_about_title
function fasterly_theme_about_title_render_callback() {
	return get_theme_mod( 'fasterly_theme_about_title' );
}

// fasterly_theme_about_sbttl
function fasterly_theme_about_sbttl_render_callback() {
	return get_theme_mod( 'fasterly_theme_about_sbttl' );
}

// fasterly_theme_about_txt
function fasterly_theme_about_txt_render_callback() {
	return get_theme_mod( 'fasterly_theme_about_txt' );
}
<?php 
/*==================================================================================
 Service After / Before
==================================================================================*/
function fasterly_after_service_trigger() {
	$data=get_theme_mod('fasterly_theme_service_after_data');
	if(!empty($data)){
		$fasterly_query = new wp_query('page_id='.$data); 
			if( $fasterly_query->have_posts() ) 	{   
				while( $fasterly_query->have_posts() ) { $fasterly_query->the_post();  the_content(); } 
			} wp_reset_postdata();
	}		
}
add_action('fasterly_after_service_trigger','fasterly_after_service_trigger');

/*==================================================================================
 CTA After / Before
==================================================================================*/
function fasterly_after_cta_trigger() {
	$data=get_theme_mod('fasterly_theme_cta_after_data');
	if(!empty($data)){
		$fasterly_query = new wp_query('page_id='.$data); 
			if( $fasterly_query->have_posts() ) 	{   
				while( $fasterly_query->have_posts() ) { $fasterly_query->the_post();  the_content(); } 
			} wp_reset_postdata();
	}		
}
add_action('fasterly_after_cta_trigger','fasterly_after_cta_trigger');


/*==================================================================================
 Blog After / Before
==================================================================================*/
function fasterly_after_blog_trigger() {
	$data=get_theme_mod('fasterly_theme_blog_after_data');
	if(!empty($data)){
		$fasterly_query = new wp_query('page_id='.$data); 
			if( $fasterly_query->have_posts() ) 	{   
				while( $fasterly_query->have_posts() ) { $fasterly_query->the_post();  the_content(); } 
			} wp_reset_postdata();
	}		
}
add_action('fasterly_after_blog_trigger','fasterly_after_blog_trigger');

/**
 * 
 * Fasterly Premium Links
 * 
 */
 
 if ( ! function_exists( 'fasterly_pro_links' ) ) :
	function fasterly_pro_links() {
		
		$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
		if( 'Smoothify' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/smoothify-pro/';
		}elseif( 'BunnyPress' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/bunnypress-pro/';	
		}elseif( 'Bunify' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/bunify-pro/';
		}elseif( 'Easify' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/easify-pro/';
		}elseif( 'Axxa' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/axxa-pro/';
		}elseif( 'Fasco' == $Bunny_Companion_current_theme->name){
			$pro_links= 'https://bunnytheme.com/themes/fasco-pro/';	
		}else{
			$pro_links= 'https://bunnytheme.com/themes/fasterly-pro/';
		}
		return $pro_links;
	}
endif;

/*
 *
 * Social Icon
 */
function fasterly_get_social_icon_default() {
	return apply_filters(
		'fasterly_get_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'id'              => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'id'              => 'customizer_repeater_header_social_004',
				)
			)
		)
	);
}


/*==================================================================================
 Fasterly  Slider Default
==================================================================================*/
 function fasterly_slider_default() {
	return apply_filters(
		'fasterly_slider_default', json_encode(
				 array(
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/fasterly/assets/images/slider/slider01.jpg',
					'title'           => esc_html__( 'Business & Technology Ideas', 'bunny-companion' ),
					'subtitle'         => esc_html__( 'We Insure Best', 'bunny-companion' ),
					'subtitle2'         => esc_html__( 'Service', 'bunny-companion' ),
					'text'            => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know about to the digital learn.', 'bunny-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'link3'	  =>  esc_html__( '#', 'bunny-companion' ),
					'button_second'	  =>  esc_html__( 'Read More', 'bunny-companion' ),
					'link2'	  =>  esc_html__( '#', 'bunny-companion' ),
					"icon_value" => "fa-play",
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider001',
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/fasterly/assets/images/slider/slider02.jpg',
					'title'           => esc_html__( 'Lets Plan Your Business', 'bunny-companion' ),
					'subtitle'         => esc_html__( 'High', 'bunny-companion' ),
					'subtitle2'         => esc_html__( 'Business Qualtity', 'bunny-companion' ),
					'text'            => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know about to the digital learn.', 'bunny-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'button_second'	  =>  esc_html__( 'Read More', 'bunny-companion' ),
					'link2'	  =>  esc_html__( '#', 'bunny-companion' ),
					'link3'	  =>  esc_html__( '#', 'bunny-companion' ),
					"icon_value" => "fa-play",
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider002',
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/fasterly/assets/images/slider/slider03.jpg',
					'title'           => esc_html__( 'Business & Technology Ideas', 'bunny-companion' ),
					'subtitle'         => esc_html__( 'Find the Right', 'bunny-companion' ),
					'subtitle2'         => esc_html__( 'Online', 'bunny-companion' ),
					'text'            => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know about to the digital learn.', 'bunny-companion' ),
					'text2'	  =>  esc_html__( 'Get Started', 'bunny-companion' ),
					'link'	  =>  esc_html__( '#', 'bunny-companion' ),
					'button_second'	  =>  esc_html__( 'Read More', 'bunny-companion' ),
					'link2'	  =>  esc_html__( '#', 'bunny-companion' ),
					'link3'	  =>  esc_html__( '#', 'bunny-companion' ),
					"icon_value" => "fa-play",
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider003',
				),
			)
		)
	);
}


/*==================================================================================
 Fasterly   Contact Info
==================================================================================*/
 function fasterly_hdr_contact_info_default() {
	return apply_filters(
		'fasterly_hdr_contact_info_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-phone',
					'title'           => esc_html__( 'Support Service 24/7', 'bunny-companion' ),
					'subtitle'            => esc_html__( '+493 3322 6666', 'bunny-companion' ),
					'link'            => 'tel:+493 3322 6666',
					'id'              => 'customizer_repeater_fasterly_hdr_contact_info001',					
				),
				array(
					'icon_value'       => 'fa-envelope',
					'title'           => esc_html__( 'Mail us for Supports', 'bunny-companion' ),
					'subtitle'            => esc_html__( 'info@example.com', 'bunny-companion' ),
					'link'            => 'mailto:info@example.com',
					'id'              => 'customizer_repeater_fasterly_hdr_contact_info002',
				),
				array(
					'icon_value'       => 'fa-map-marker',
					'title'           => esc_html__( 'Office Address', 'bunny-companion' ),
					'subtitle'            => esc_html__( '341,Streat area Austrelia', 'bunny-companion' ),
					'id'              => 'customizer_repeater_fasterly_hdr_contact_info003',
				)
			)
		)
	);
}

/*==================================================================================
 Fasterly  Menu
==================================================================================*/
 function fasterly_hdr_menu_default() {
	return apply_filters(
		'fasterly_hdr_menu_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Our FAQs', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_hdr_menu001',					
				),
				array(
					'title'           => esc_html__( 'Pricing', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_hdr_menu002',
				),
				array(
					'title'           => esc_html__( 'Contact', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_hdr_menu003',
				)
			)
		)
	);
}




/*==================================================================================
 Fasterly  Infaormation 1
==================================================================================*/
 function fasterly_information_default() {
	return apply_filters(
		'fasterly_information_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-phone',
					'title'           => esc_html__( 'Call Service', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info001',					
				),
				array(
					'icon_value'       => 'fa-video-camera',
					'title'           => esc_html__( 'Live Chat', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info002',
				),
				array(
					'icon_value'       => 'fa-tachometer',
					'title'           => esc_html__( 'Service', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info003',
				),
				array(
					'icon_value'       => 'fa-hourglass-start',
					'title'           => esc_html__( '24x7 Supports', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info004',
				),
				array(
					'icon_value'       => 'fa-life-ring',
					'title'           => esc_html__( 'Clients', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info005',
				),
				array(
					'icon_value'       => 'fa-graduation-cap',
					'title'           => esc_html__( 'Best Plans', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info006',
				)
			)
		)
	);
}



/*==================================================================================
 Fasterly  Infaormation 2
==================================================================================*/
$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
if( 'Axxa' == $Bunny_Companion_current_theme->name){
 function fasterly_information2_default() {
	return apply_filters(
		'fasterly_information2_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-phone',
					'title'           => esc_html__( 'Call Service', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2001',					
				),
				array(
					'icon_value'       => 'fa-wechat',
					'title'           => esc_html__( 'Live Chat', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2002',
				),
				array(
					'icon_value'       => 'fa-wordpress',
					'title'           => esc_html__( '24X7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2003',
				),
				array(
					'icon_value'       => 'fa-graduation-cap',
					'title'           => esc_html__( 'Best Plans', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2004',
				)
			)
		)
	);
}
}else{
	function fasterly_information2_default() {
	return apply_filters(
		'fasterly_information2_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-diamond',
					'title'           => esc_html__( 'Business Ideas', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2001',					
				),
				array(
					'icon_value'       => 'fa-hourglass-start',
					'title'           => esc_html__( 'Marketing Strategy', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2002',
				),
				array(
					'icon_value'       => 'fa-wordpress',
					'title'           => esc_html__( '24X7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info2003',
				)
			)
		)
	);
}
}
/*==================================================================================
 Fasterly  Infaormation 3
==================================================================================*/
 function fasterly_information3_default() {
	return apply_filters(
		'fasterly_information3_default', json_encode(
				 array(
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service01.jpg',
					'icon_value'       => 'fa-diamond',
					'title'           => esc_html__( 'Business Ideas', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3001',					
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service02.jpg',
					'icon_value'       => 'fa-hourglass-start',
					'title'           => esc_html__( 'Marketing Strategy', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3002',
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service03.jpg',
					'icon_value'       => 'fa-wordpress',
					'title'           => esc_html__( '24X7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3003',
				)
			)
		)
	);
}


/*==================================================================================
 Fasterly  Infaormation 4
==================================================================================*/
 function fasterly_information4_default() {
	return apply_filters(
		'fasterly_information4_default', json_encode(
				 array(
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service01.jpg',
					'icon_value'       => 'fa-diamond',
					'title'           => esc_html__( 'Business Ideas', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3001',					
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service02.jpg',
					'icon_value'       => 'fa-hourglass-start',
					'title'           => esc_html__( 'Marketing Strategy', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3002',
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service03.jpg',
					'icon_value'       => 'fa-wordpress',
					'title'           => esc_html__( '24X7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3003',
				),
				array(
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service03.jpg',
					'icon_value'       => 'fa-wordpress',
					'title'           => esc_html__( '24X7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'Explain too you how all this mistaken  give you complete.', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_info3003',
				)
			)
		)
	);
}

/*==================================================================================
 Fasterly  Service 1
==================================================================================*/
 function fasterly_service_default() {
	return apply_filters(
		'fasterly_service_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-life-ring',
					'title'           => esc_html__( 'One Time Delivery', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service001',					
				),
				array(
					'icon_value'       => 'fa-ambulance',
					'title'           => esc_html__( 'Smart Technology', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service002',	
				),
				array(
					'icon_value'       => 'fa-shopping-bag',
					'title'           => esc_html__( 'Easy & Affordable', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service003',	
				),
				array(
					'icon_value'       => 'fa-cloud-upload',
					'title'           => esc_html__( '24x7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service004',	
				)
			)
		)
	);
}



/*==================================================================================
 Fasterly  Service 2
==================================================================================*/
 function fasterly_service2_default() {
	return apply_filters(
		'fasterly_service2_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-life-ring',
					'title'           => esc_html__( 'One Time Delivery', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service001',					
				),
				array(
					'icon_value'       => 'fa-ambulance',
					'title'           => esc_html__( 'Smart Technology', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service002',	
				),
				array(
					'icon_value'       => 'fa-shopping-bag',
					'title'           => esc_html__( 'Easy & Affordable', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service003',	
				)
			)
		)
	);
}

/*==================================================================================
 Fasterly  Service 3
==================================================================================*/
 function fasterly_service3_default() {
	return apply_filters(
		'fasterly_service3_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-life-ring',
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service01.jpg',
					'title'           => esc_html__( 'One Time Delivery', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service001',					
				),
				array(
					'icon_value'       => 'fa-ambulance',
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service02.jpg',
					'title'           => esc_html__( 'Smart Technology', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service002',	
				),
				array(
					'icon_value'       => 'fa-shopping-bag',
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service03.jpg',
					'title'           => esc_html__( 'Easy & Affordable', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service003',	
				),
				array(
					'icon_value'       => 'fa-cloud-upload',
					'image_url'       => BUNNY_COMPANION_PLUGIN_URL . 'inc/themes/bunnypress/assets/images/service/service01.jpg',
					'title'           => esc_html__( '24x7 Supports', 'bunny-companion' ),
					'text'           => esc_html__( 'From its medieval origins to the digital era, learn everything there is to know', 'bunny-companion' ),
					'text2'            => esc_html__( 'Read More', 'bunny-companion' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_fasterly_service004',	
				)
			)
		)
	);
}


/*==================================================================================
 Fasterly  Header Contact
==================================================================================*/
if ( ! function_exists( 'fasterly_header_contact' ) ) :
function fasterly_header_contact() {
	$fasterly_theme_hs_hdr_contact 		= get_theme_mod( 'fasterly_theme_hs_hdr_contact','1'); 
	$fasterly_theme_hdr_ct_info 		= get_theme_mod( 'fasterly_theme_hdr_ct_info',fasterly_hdr_contact_info_default());
	if($fasterly_theme_hs_hdr_contact=='1'):
	if ( ! empty( $fasterly_theme_hdr_ct_info ) ) {
	$fasterly_theme_hdr_ct_info = json_decode( $fasterly_theme_hdr_ct_info );
	foreach ( $fasterly_theme_hdr_ct_info as $i=>$item ) {
		$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Header Contact section' ) : '';
		$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'fasterly_translate_single_string', $item->subtitle, 'Header Contact section' ) : '';
		$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Header Contact section' ) : '';
		$icon = ! empty( $item->icon_value) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value,'Header Contact section' ) : '';
	?>
		<aside class="widget widget-contact">
			<div class="content-area">
				<?php if(!empty($icon)): ?>
					  <div class="content-area-icon">
							<i class="icon fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
					  </div>
			    <?php endif; ?>
				<?php if(!empty($title) || !empty($subtitle)): ?>
					  <div class="content">
						<p><?php echo esc_html($title); ?></p>
						<?php if(!empty($link)): ?>	
							<a href="<?php echo esc_url($link); ?>" class="contact-info">
							<span class="title"><h5><?php echo esc_html($subtitle); ?></h5></span></a>
						<?php else: ?>	
							<a href="javascript:void(0)" class="contact-info">
							<span class="title"><h5><?php echo esc_html($subtitle); ?></h5></span></a>
						 <?php endif; ?> 
					  </div>
				 <?php endif; ?> 
			</div>
		</aside>
	<?php } }
endif;}endif;
add_action( 'fasterly_header_contact', 'fasterly_header_contact');


/*==================================================================================
 Fasterly  Header Social
==================================================================================*/
if ( ! function_exists( 'fasterly_header_social' ) ) :
function fasterly_header_social() {
	$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme 
	$fasterly_theme_hs_social_icon 		= get_theme_mod( 'fasterly_theme_hs_social_icon','1'); 
	$fasterly_theme_hdr_social_ttl 		= get_theme_mod( 'fasterly_theme_hdr_social_ttl','Follow Us On'); 
	$fasterly_theme_social_icons 		= get_theme_mod( 'fasterly_theme_social_icons',fasterly_get_social_icon_default());
	if($fasterly_theme_hs_social_icon=='1'):
	?>
			<?php if( 'Smoothify' == $Bunny_Companion_current_theme->name || 'BunnyPress' == $Bunny_Companion_current_theme->name  || 'Easify' == $Bunny_Companion_current_theme->name): ?>
			<aside class="widget right-widget">
				<?php if(!empty($fasterly_theme_hdr_social_ttl)): ?>
					<span class="social-title"><?php echo wp_kses_post($fasterly_theme_hdr_social_ttl); ?></span>
				<?php endif; ?>	
			<?php endif; ?>	
			<aside class="widget widget-social-widget">
				<ul>
					<?php
						$fasterly_theme_social_icons = json_decode($fasterly_theme_social_icons);
						if( $fasterly_theme_social_icons!='' )
						{
						foreach($fasterly_theme_social_icons as $social_item){	
						$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
						$social_link = ! empty( $social_item->link ) ? apply_filters( 'fasterly_translate_single_string', $social_item->link, 'Header section' ) : '';
					?>
						<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?> "></i></a></li>
					<?php }} ?>
				</ul>			
			</aside>
			<?php if( 'Smoothify' == $Bunny_Companion_current_theme->name): ?>
		</aside> 
		<?php endif; ?>
	<?php
endif;}
add_action('fasterly_header_social','fasterly_header_social');endif;


/*==================================================================================
 Fasterly Top Header Animate Text
==================================================================================*/
if ( ! function_exists( 'fasterly_top_header_animate_text' ) ) :
function fasterly_top_header_animate_text() {
	$fasterly_theme_hs_hdr_left_txt 	= get_theme_mod( 'fasterly_theme_hs_hdr_left_txt','1'); 
	$fasterly_theme_hdr_left_ttl 		= get_theme_mod( 'fasterly_theme_hdr_left_ttl','Contact Us:'); 
	$fasterly_theme_hdr_left_txt 		= get_theme_mod( 'fasterly_theme_hdr_left_txt','"You Search Business plans for us?","You Search Business plans for us?","You Search Business plans for us?"');
	if($fasterly_theme_hs_hdr_left_txt=='1'):
	?>
		<aside class="widget widget-text-slide">
			<div class="text-animation">
				<div class="text-heading"><strong><?php echo wp_kses_post($fasterly_theme_hdr_left_ttl); ?></strong>
					<div class="text-sliding">            
						<span class="typewrite" data-period="2000" data-type='[ <?php echo wp_kses_post($fasterly_theme_hdr_left_txt); ?>]'></span><span class="wrap"></span>
					</div>
				</div>
			</div>
		</aside> 
	<?php
endif;}
add_action('fasterly_top_header_animate_text','fasterly_top_header_animate_text');endif;


/*==================================================================================
 Fasterly  Header Menu
==================================================================================*/
if ( ! function_exists( 'fasterly_header_menu' ) ) :
function fasterly_header_menu() {
	$fasterly_theme_hs_hdr_menu 		= get_theme_mod( 'fasterly_theme_hs_hdr_menu','1'); 
	$fasterly_theme_hdr_top_menu 		= get_theme_mod( 'fasterly_theme_hdr_top_menu',fasterly_hdr_menu_default()); 
	if($fasterly_theme_hs_hdr_menu=='1'):
	if ( ! empty( $fasterly_theme_hdr_top_menu ) ) {
	?>
		<aside class="widget widget-link">
			<ul>
				<?php 
				$fasterly_theme_hdr_top_menu = json_decode( $fasterly_theme_hdr_top_menu );
				foreach ( $fasterly_theme_hdr_top_menu as $item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Header Menu section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Header Menu section' ) : '';
				?>
					<li><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></li>
				<?php } } ?>
			</ul>
		</aside>
	<?php 
endif;}endif;
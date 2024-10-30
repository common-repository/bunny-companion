<?php
/**
 * Takes Ranges Control JSON values, decodes and ouputs accordingly
 * @param  [string] $css_prop CSS Property to add
 * @param  [JSON Object] $obj_value Json Object Value
 * @param  [string] $ext css value extension, eg. px, in, pc
 * @return [string]
 */
function fasterly_media_range( $css_prop, $obj_value, $default, $media = 'desktop', $ext = '' ) {
    if( is_string( $obj_value ) && is_array( json_decode( $obj_value, true ) ) ){
        /* It means that we have media queries active */
        $json    = json_decode( $obj_value );
        $value   = '';
        if ( $media == 'desktop' && $json->desktop != $default ) {
            if ( is_array( $css_prop ) ) {
                $value   = $css_prop[0] . ': ' . esc_attr ( $json->desktop ) . $ext . ';';
                if ( count( $css_prop ) > 1 ) {
                    $value  .= $css_prop[1] . ': ' . esc_attr ( $json->desktop ) . $ext . ';';
                }
            } else {
                $value   = $css_prop . ': ' . esc_attr ( $json->desktop ) . $ext . ';';
            }
        }

        if ( $media == 'mobile' && $json->mobile != $default ) {
            if ( is_array( $css_prop ) ) {
                $value   = $css_prop[0] . ': ' . esc_attr ( $json->mobile ) . $ext . ';';
                if ( count( $css_prop ) > 1 ) {
                    $value  .= $css_prop[1] . ': ' . esc_attr ( $json->mobile ) . $ext . ';';
                }
            } else {
                $value   = $css_prop . ': ' . esc_attr ( $json->mobile ) . $ext . ';';
            }
        }

        if ( $media == 'tablet' && $json->tablet != $default ) {
            if ( is_array( $css_prop ) ) {
                $value   = $css_prop[0] . ': ' . esc_attr ( $json->tablet ) . $ext . ';';
                if ( count( $css_prop ) > 1 ) {
                    $value  .= $css_prop[1] . ': ' . esc_attr ( $json->tablet ) . $ext . ';';
                }
            } else {
                $value   = $css_prop . ': ' . esc_attr ( $json->tablet ) . $ext . ';';
            }
        }

        return $value;
    }

    return false;
}

/**
 * Takes Ranges Control applies to fasterly_media_range function and ouputs Full css with @media query
 * @param  [string] $css_prop CSS Property to add
 * @param  [string] $control control / settings
 * @param  [string] $ext css value extension, eg. px, in, pc
 * @return [string]
 */
function fasterly_customizer_value( $control, $css_selector, $css_prop, array $default, $ext = '' ) {
    if ( $control ) {
        $control        = get_theme_mod( $control );
        $return         = '';

        if( is_string( $control ) && is_array( json_decode( $control, true ) ) ){
            $desktop_val    = fasterly_media_range( $css_prop, $control,  $default[0], 'desktop', $ext );
            $tablet_val     = fasterly_media_range( $css_prop, $control, $default[1], 'tablet', $ext );
            $mobile_val     = fasterly_media_range( $css_prop, $control, $default[2], 'mobile', $ext );

            if ( !empty( $desktop_val ) ) {
                $return         = $css_selector . ' { ';
                $return        .= $desktop_val;
                $return        .= '} ';
            }

            if ( !empty( $tablet_val ) ) {
                $return        .= '@media (max-width:768px) {';
                $return        .= $css_selector . ' { ';
                $return        .= $tablet_val;
                $return        .= '} } ';
            }

            if ( !empty( $mobile_val ) ) {
                $return        .= '@media (max-width:480px) {';
                $return        .= $css_selector . ' { ';
                $return        .= $mobile_val;
                $return        .= '} } ';
            }
        } else {
            if ( !empty( $control ) && $control != $default[0] ) {
                $return        .= $css_selector . ' { ';
                $return        .= esc_attr( $control ) . $ext . ';';
                $return        .= ' } ';
            }
        }

        return $return;
    }

    return false;
}

if( ! function_exists( 'fasterly_theme_free_output_css' ) ):
    function fasterly_theme_free_output_css() {

		$fasterly_theme_output_css = '';
		
		/*==================================================================================
		 Logo
		==================================================================================*/
		$fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_logo_width', '.logo img, .mobile-logo img', array( 'max-width' ), array( 140, 140, 140 ), 'px !important' );
		$fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_site_ttl_size', '.site-title', array( 'font-size' ), array( 30, 30, 30 ), 'px !important' );
		$fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_site_desc_size', '.site-description', array( 'font-size' ), array( 16, 16, 16 ), 'px !important' );
		
		/*==================================================================================
		 Slider
		==================================================================================*/
		$fasterly_theme_slider_overlay_enable = get_theme_mod('fasterly_theme_slider_overlay_enable','1');
		$fasterly_theme_slide_opacity_color   = get_theme_mod('fasterly_theme_slide_opacity_color','#000000');
		$fasterly_theme_slider_opacity		  = get_theme_mod('fasterly_theme_slider_opacity','0.7');
		list($br, $bg, $bb) = sscanf($fasterly_theme_slide_opacity_color, "#%02x%02x%02x");
		if($fasterly_theme_slider_overlay_enable == '1') { 
				$fasterly_theme_output_css .=".slider-section .item .cover {
					background: rgba($br, $bg, $bb, $fasterly_theme_slider_opacity);
				}\n";
			}
		
	    /*==================================================================================
		 CTA
		==================================================================================*/
		$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme		
		if( 'Easify' == $Bunny_Companion_current_theme->name){
			$cta_color='#214462';
		}else{
			$cta_color='#000000';
		}		
		$fasterly_theme_cta_bg_img			= get_theme_mod('fasterly_theme_cta_bg_img',esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/cta_bg.jpg'));
		$fasterly_theme_cta_bg_overlay_clr	= get_theme_mod('fasterly_theme_cta_bg_overlay_clr',$cta_color);
		$fasterly_theme_cta_bg_opacity		= get_theme_mod('fasterly_theme_cta_bg_opacity','0.8');		
		list($br, $bg, $bb) = sscanf($fasterly_theme_cta_bg_overlay_clr, "#%02x%02x%02x");	
			$fasterly_theme_output_css .=".cta-bg-image {
					background: url(".esc_url($fasterly_theme_cta_bg_img).") center center fixed rgba($br, $bg, $bb,$fasterly_theme_cta_bg_opacity); 
				}.cta-bg-image.cta_section_two{
					    background-color: rgba($br, $bg, $bb,$fasterly_theme_cta_bg_opacity);
				}.cta_three.cta_section:before{
					  background: " .esc_attr($fasterly_theme_cta_bg_overlay_clr). " none repeat scroll 0 0;
					  opacity: " .esc_attr($fasterly_theme_cta_bg_opacity). ";
				}\n";
		 
		 /*==================================================================================
		 Typography Body
		==================================================================================*/
		 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_body_font_size', 'body', array( 'font-size' ), array( 16, 16, 16 ), 'px' );
		 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_body_line_height', 'body', array( 'line-height' ), array( 1.6, 1.6, 1.6 ) );
		 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_body_ltr_space', 'body', array( 'letter-spacing' ), array( 0, 0, 0 ), 'px' );		 
		
		 /*==================================================================================
		 Typography Heading
		==================================================================================*/
		 for ( $i = 1; $i <= 6; $i++ ) {			 
			 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_h' . $i . '_font_size', 'h' . $i .'', array( 'font-size' ), array( 36, 36, 36 ), 'px' );
			 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_h' . $i . '_line_height', 'h' . $i . '', array( 'line-height' ), array( 1.2, 1.2, 1.2 ) );
			 $fasterly_theme_output_css   .= fasterly_customizer_value( 'fasterly_theme_h' . $i . '_ltr_spacing', 'h' . $i . '', array( 'letter-spacing' ), array( 0, 0, 0 ), 'px' );
		 }
		 
        wp_add_inline_style( 'fasterly-style', $fasterly_theme_output_css );
    }
endif;
add_action( 'wp_enqueue_scripts', 'fasterly_theme_free_output_css' );
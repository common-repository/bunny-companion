<?php  
if ( ! function_exists( 'fasterly_top_header_data' ) ) :
	function fasterly_top_header_data() {
	    $fasterly_theme_hs_hdr_left_txt 	= get_theme_mod( 'fasterly_theme_hs_hdr_left_txt','1'); 
		$fasterly_theme_hs_social_icon 		= get_theme_mod( 'fasterly_theme_hs_social_icon','1');
		if($fasterly_theme_hs_hdr_left_txt=='1' || $fasterly_theme_hs_social_icon=='1'):
	?>
		<div id="top-header" class="header-top-info">
			<div class="header-widget">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-6">
							<?php fasterly_top_header_animate_text(); ?> 
						</div>
						<div class="col-lg-4 col-md-6"> 
							<?php fasterly_header_social(); ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif;
}
endif;
add_action( 'fasterly_top_header_data', 'fasterly_top_header_data');


if ( ! function_exists( 'fasterly_nav_contact' ) ) :
function fasterly_nav_contact() {
	$fasterly_theme_hs_nav_contact 		= get_theme_mod( 'fasterly_theme_hs_nav_contact','1');
	$fasterly_theme_nav_contact_ttl 	= get_theme_mod( 'fasterly_theme_nav_contact_ttl','Call for help:'); 
	$fasterly_theme_nav_contact_subttl 	= get_theme_mod( 'fasterly_theme_nav_contact_subttl','<a class="description" href="tel:49333226666"> 493-3322-6666</a>'); 
	if($fasterly_theme_hs_nav_contact=='1'):
?>
	<div class="header-btn wow fadeInRight">
		<h3 class="pxl-item--title el-empty"><span><?php echo wp_kses_post($fasterly_theme_nav_contact_ttl); ?></span></h3>
		<div class="pxl-item--description el-empty"><?php echo wp_kses_post($fasterly_theme_nav_contact_subttl); ?> <span class="description2"></span></div>
	</div>
<?php  endif;
	} 
endif;		
add_action( 'fasterly_nav_contact', 'fasterly_nav_contact');
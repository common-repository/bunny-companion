<?php  
if ( ! function_exists( 'fasterly_top_header_data' ) ) :
	function fasterly_top_header_data() {
	    $fasterly_theme_hs_nav_contact 	= get_theme_mod( 'fasterly_theme_hs_nav_contact','1'); 
		$fasterly_theme_hs_social_icon 		= get_theme_mod( 'fasterly_theme_hs_social_icon','1');
		$fasterly_theme_hs_hdr_menu 		= get_theme_mod( 'fasterly_theme_hs_hdr_menu','1'); 
		if($fasterly_theme_hs_nav_contact=='1' || $fasterly_theme_hs_social_icon=='1' || $fasterly_theme_hs_hdr_menu=='1'):
	?>
		<div id="top-header" class="header-top-info">
			<div class="header-widget">
				<div class="container">
					<div class="row align-items-center top-header-bg social-effect-2">
						<div class="col-lg-4 col-md-12">
							<div class="top-header-left">					
								<?php fasterly_header_menu(); ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="top-header-middle">
								<?php do_action('fasterly_nav_contact'); ?>
							</div>	
						</div>
						<div class="col-lg-4 col-md-12">
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
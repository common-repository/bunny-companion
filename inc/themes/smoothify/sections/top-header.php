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
						<div class="col-lg-6 col-md-6">
							<?php fasterly_top_header_animate_text(); ?> 
						</div>
						<div class="col-lg-6 col-md-6"> 
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
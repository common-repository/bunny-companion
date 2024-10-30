<?php  
if ( ! function_exists( 'fasterly_below_header_data' ) ) :
	function fasterly_below_header_data() {
		$fasterly_theme_hs_hdr_contact 		= get_theme_mod( 'fasterly_theme_hs_hdr_contact','1'); 
		$fasterly_theme_hs_social_icon 		= get_theme_mod( 'fasterly_theme_hs_social_icon','1'); 
		if($fasterly_theme_hs_hdr_contact=='1' || $fasterly_theme_hs_social_icon=='1'):
	?>
	<div id="middle-header" class="middle-header middle-header-2">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12">
					<div class="middle-header-widget">
						<?php fasterly_header_contact(); ?>
						<?php fasterly_header_social(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	endif;
}
endif;
add_action( 'fasterly_below_header_data', 'fasterly_below_header_data');		
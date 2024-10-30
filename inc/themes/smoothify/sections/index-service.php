<?php  
$fasterly_theme_hs_service	= get_theme_mod('fasterly_theme_hs_service','1');
$fasterly_theme_service_title 	= get_theme_mod('fasterly_theme_service_title','Awesome Services');
$fasterly_theme_service_sbttl 	= get_theme_mod('fasterly_theme_service_sbttl','Dedictated<span class="subtitle-shape"><ul class="dynamic-txt"><li>Service</li><li>Features</li></ul></span>');
$fasterly_theme_service_txt 	= get_theme_mod('fasterly_theme_service_txt','Lorem Ipsum is simply dummy of printing and typesetting and industry.');
$fasterly_theme_service_data 	= get_theme_mod('fasterly_theme_service_data',fasterly_service_default());
if($fasterly_theme_hs_service=='1'):
?>	
<section id="service-section" class="service_section_3 wow fadeInUp hm-service fs-py-default">
	<div class="container">
		<?php if(!empty($fasterly_theme_service_title) || !empty($fasterly_theme_service_sbttl)   || !empty($fasterly_theme_service_txt)): ?>
			<div class="row">
				<div class="section-title-1 text-center">
					<?php if(!empty($fasterly_theme_service_title)): ?>
						<h5 class="title"><?php echo wp_kses_post($fasterly_theme_service_title); ?></h5>
					<?php endif; ?>
					<?php if(!empty($fasterly_theme_service_sbttl)): ?>
						<h2 class="sbttl"><?php echo wp_kses_post($fasterly_theme_service_sbttl); ?></h2>
					<?php endif; ?>
					
					<?php if(!empty($fasterly_theme_service_txt)): ?>
						<p class="txt"><?php echo wp_kses_post($fasterly_theme_service_txt); ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="row service-wrp">
			<?php
				if ( ! empty( $fasterly_theme_service_data ) ) {
				$fasterly_theme_service_data = json_decode( $fasterly_theme_service_data );
				foreach ( $fasterly_theme_service_data as $i=>$item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Service section' ) : '';
					$text = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->text, 'Service section' ) : '';
					$button = ! empty( $item->text2 ) ? apply_filters( 'fasterly_translate_single_string', $item->text2, 'Service section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Service section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Service section' ) : '';
			?>
				<div class="col-lg-3 col-md-6 wow fadeInUp">
					<div class="service_box_3 background-image" style="background-image: url(<?php echo esc_url(BUNNY_COMPANION_PLUGIN_URL); ?>inc/themes/smoothify/assets/images/bg_pattern_14.png);">
						<div class="service_box_3_content">
							<?php if ( ! empty( $icon ) ) : ?>
								<div class="service_box_3_icon">
									<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
								</div>
							<?php endif; ?>	
							
							<?php if ( ! empty( $title ) ) : ?>
								<h3 class="service_box_3_title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
							<?php endif; ?>	
							
							<?php if ( ! empty( $text ) ) : ?>
								<p class="service-box_3_text"><?php echo esc_html($text); ?> </p>
							<?php endif; ?>	
						</div>
						<?php if ( ! empty( $button ) ) : ?>
							<a href="<?php echo esc_url($link); ?>" class="service_box_3_btn background-image" style="background-color:#000;" tabindex="-1"><?php echo esc_html($button); ?><i class="fa fa-arrow-right"></i></a>
						<?php endif; ?>	
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
	<div class="bt-shapes-wrap">
		<div class="service-shape1">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="840px" height="840px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
			<g><path style="opacity:0.348" fill="var(--bs-primary)" d="M 418.5,-0.5 C 419.167,-0.5 419.833,-0.5 420.5,-0.5C 559.833,139.5 699.5,279.167 839.5,418.5C 839.5,419.167 839.5,419.833 839.5,420.5C 699.5,559.833 559.833,699.5 420.5,839.5C 419.833,839.5 419.167,839.5 418.5,839.5C 279.167,699.5 139.5,559.833 -0.5,420.5C -0.5,419.833 -0.5,419.167 -0.5,418.5C 139.5,279.167 279.167,139.5 418.5,-0.5 Z M 418.5,48.5 C 543.097,171.43 667.097,295.097 790.5,419.5C 667.167,543.5 543.5,667.167 419.5,790.5C 295.5,667.167 171.833,543.5 48.5,419.5C 171.854,295.812 295.188,172.146 418.5,48.5 Z"/></g>
			</svg>
		</div>
		<div class="service-shape2">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="105px" height="105px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
			<g><path style="opacity:0.348" fill="var(--bs-primary)" d="M 51.5,-0.5 C 51.8333,-0.5 52.1667,-0.5 52.5,-0.5C 69.5,17.1667 86.8333,34.5 104.5,51.5C 104.5,51.8333 104.5,52.1667 104.5,52.5C 86.8333,69.5 69.5,86.8333 52.5,104.5C 52.1667,104.5 51.8333,104.5 51.5,104.5C 34.5,86.8333 17.1667,69.5 -0.5,52.5C -0.5,52.1667 -0.5,51.8333 -0.5,51.5C 17.1667,34.5 34.5,17.1667 51.5,-0.5 Z"/></g>
			</svg>
		</div>
		<div class="service-shape3">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="56px" height="56px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
			<g><path style="opacity:0.800" fill="var(--bs-primary)" d="M 26.5,-0.5 C 27.1667,-0.5 27.8333,-0.5 28.5,-0.5C 37.1667,8.83333 46.1667,17.8333 55.5,26.5C 55.5,27.1667 55.5,27.8333 55.5,28.5C 46.1667,37.1667 37.1667,46.1667 28.5,55.5C 27.8333,55.5 27.1667,55.5 26.5,55.5C 17.8333,46.1667 8.83333,37.1667 -0.5,28.5C -0.5,27.8333 -0.5,27.1667 -0.5,26.5C 8.83333,17.8333 17.8333,8.83333 26.5,-0.5 Z M 26.5,4.5 C 35.0917,11.4224 43.0917,19.0891 50.5,27.5C 43.1667,35.5 35.5,43.1667 27.5,50.5C 19.5,43.1667 11.8333,35.5 4.5,27.5C 11.8548,19.8128 19.1881,12.1461 26.5,4.5 Z"/></g>
			</svg>
		</div>
		<div class="service-shape4">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="590px" height="590px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
			<g><path style="opacity:0.348" fill="var(--bs-primary)" d="M 293.5,-0.5 C 294.167,-0.5 294.833,-0.5 295.5,-0.5C 393.167,97.8333 491.167,195.833 589.5,293.5C 589.5,294.167 589.5,294.833 589.5,295.5C 491.167,393.167 393.167,491.167 295.5,589.5C 294.833,589.5 294.167,589.5 293.5,589.5C 195.833,491.167 97.8333,393.167 -0.5,295.5C -0.5,294.833 -0.5,294.167 -0.5,293.5C 97.8333,195.833 195.833,97.8333 293.5,-0.5 Z M 293.5,34.5 C 381.097,120.43 468.097,207.097 554.5,294.5C 468.167,381.5 381.5,468.167 294.5,554.5C 207.5,468.167 120.833,381.5 34.5,294.5C 120.854,207.812 207.188,121.146 293.5,34.5 Z"/></g>
			</svg>
		</div>
	</div>
</section>
<?php endif; do_action('fasterly_after_service_trigger'); ?>
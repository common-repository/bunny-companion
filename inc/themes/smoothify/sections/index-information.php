<?php  
$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1'); 
$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data2',fasterly_information2_default()); 
if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_2">
	<div class="container">
		<div class="info-item-2">
			<div class="row info-wrp">
				<?php
					if ( ! empty( $fasterly_theme_information_data ) ) {
					$fasterly_theme_information_data = json_decode( $fasterly_theme_information_data );
					foreach ( $fasterly_theme_information_data as $item ) {
						$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Information section' ) : '';
						$text = ! empty( $item->text ) ? apply_filters( 'fasterly_translate_single_string', $item->text, 'Information section' ) : '';
						$button = ! empty( $item->text2 ) ? apply_filters( 'fasterly_translate_single_string', $item->text2, 'Information section' ) : '';
						$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Information section' ) : '';
						$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Information section' ) : '';
				?>
					<div class="col-lg-4 col-md-6">
						<div class="inner-box">
							<div class="info-2-icon">
								<?php if ( ! empty( $icon ) ) : ?>
										<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
								<?php endif; ?>	
								<div class="info-2-shape">
									<img src="<?php echo esc_url(BUNNY_COMPANION_PLUGIN_URL); ?>inc/themes/smoothify/assets/images/info/info-2-bg.png">
								</div>
							</div>
							<div class="info-2-content">
								<?php if ( ! empty( $title ) ) : ?>
									<h4><?php echo esc_html($title); ?></h4>
								<?php endif; ?>	
								
								<?php if ( ! empty( $text ) ) : ?>
									<p><?php echo esc_html($text); ?></p>
								<?php endif; ?>	
								
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="more-link"><p><?php echo esc_html($button); ?></p></a>
								<?php endif; ?>		
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php  
$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1'); 
$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data2',fasterly_information2_default()); 
if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_8">
	<div class="container">
		<div class="row wow fadeInUp">
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
				<div class="col-lg-3 col-md-6">
					<div class="info-item">
						<div class="info-box-out">
							<div class="info-inner">
								<?php if ( ! empty( $icon ) ) : ?>
									<div class="info-box-icon">
										<div class="icon">
											<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
										</div>
									</div>
								<?php endif; ?>	
									
								<?php if ( ! empty( $title ) ) : ?>
									<div class="info-title">
										<h3><?php echo esc_html($title); ?></h3>
									</div>
								<?php endif; ?>	
							</div>
						</div>
						<div class="info-box">
							<div class="info-inner">
								<?php if ( ! empty( $title ) ) : ?>
									<div class="info-title">
										<h3><?php echo esc_html($title); ?></h3>
									</div>
								<?php endif; ?>	
								<?php if ( ! empty( $text ) ) : ?>
									<div class="info_desc">
										<p><?php echo esc_html($text); ?></p>
									</div>
								<?php endif; ?>	
								
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="more-link"><p><?php echo esc_html($button); ?></p></a>
								<?php endif; ?>									
							</div>
						</div>
					</div>	
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php endif; ?>
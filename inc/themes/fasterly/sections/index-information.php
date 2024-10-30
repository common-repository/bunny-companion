<?php  
$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1'); 
$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data',fasterly_information_default()); 
if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_1">
	<div class="container">
		<div class="info-item">
			<div class="row wow fadeInUp info-wrp">
				<?php
					if ( ! empty( $fasterly_theme_information_data ) ) {
					$fasterly_theme_information_data = json_decode( $fasterly_theme_information_data );
					foreach ( $fasterly_theme_information_data as $item ) {
						$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Information section' ) : '';
						$button = ! empty( $item->text2 ) ? apply_filters( 'fasterly_translate_single_string', $item->text2, 'Information section' ) : '';
						$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Information section' ) : '';
						$image = ! empty( $item->image_url ) ? apply_filters( 'fasterly_translate_single_string', $item->image_url, 'Information section' ) : '';
						$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Information section' ) : '';
				?>
					<div class="col-lg-2 col-md-6 mb-4">
						<div class="info-box">
							<?php if ( ! empty( $image ) ) : ?>
								<div class="info-box-icon">
									<img src="<?php echo esc_url($image); ?>">
								</div>
							<?php else: ?>
								<div class="info-box-icon">
									<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
								</div>
							<?php endif; ?>	
							
							<div class="content">
								<?php if ( ! empty( $title ) ) : ?>
									<a href="<?php echo esc_url($link); ?>"><h6><?php echo esc_html($title); ?></h6></a>
								<?php endif; ?>	
								
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="info-more"><p><?php echo esc_html($button); ?> <i class="fa fa-hand-o-right" aria-hidden="true"></i></p></a>
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
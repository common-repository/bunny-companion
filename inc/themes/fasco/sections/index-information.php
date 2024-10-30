<?php  
$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1'); 
$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data4',fasterly_information4_default()); 
if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_9">
	<div class="container-fluid">
			<div class="row wow fadeInUp">
				<?php
					if ( ! empty( $fasterly_theme_information_data ) ) {
					$fasterly_theme_information_data = json_decode( $fasterly_theme_information_data );
					foreach ( $fasterly_theme_information_data as $i=>$item ) {
						$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Information section' ) : '';
						$text = ! empty( $item->text ) ? apply_filters( 'fasterly_translate_single_string', $item->text, 'Information section' ) : '';
						$button = ! empty( $item->text2 ) ? apply_filters( 'fasterly_translate_single_string', $item->text2, 'Information section' ) : '';
						$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Information section' ) : '';
						$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Information section' ) : '';
						$image = ! empty( $item->image_url ) ? apply_filters( 'fasterly_translate_single_string', $item->image_url, 'Information section' ) : '';
				?>
				<div class="col-lg-3 col-md-6">
					<div class="info-item">
						<div class="info-item-inner">
							<div class="info-item-box">
								<?php if ( ! empty( $image ) ) : ?>
									<div class="info-image-box">
										<div class="info-image-bg">
											<img src="<?php echo esc_url($image); ?>">
										</div>
									</div>
								<?php endif; ?>
								<?php if ( ! empty( $icon ) ) : ?>
									<div class="info-item-icon">
										<div class="info-item-icon-one">
											<span>
												<i class="fa <?php echo esc_attr($icon); ?>"></i>
											</span>
										</div>
									</div>
								<?php endif; ?>	
								<div class="info-item-number"><?php echo esc_html($i+1); ?></div>
							</div>
							<div class="info-item-content">
								<?php if ( ! empty( $title ) ) : ?>
									<h5 class="info-item-title el-empty"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h5>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>
									<div class="info-item-desc el-empty"><?php echo esc_html($text); ?></div>
								<?php endif; ?>	
							</div>
							<?php if ( ! empty( $link ) ) : ?>
								<a class="pxl-btn-service" href="<?php echo esc_url($link); ?>"><i class="fa fa-arrow-right"></i></a>
							<?php endif; ?>	
						</div>
					</div>
				</div>
				<?php } } ?>
	</div>
</section>
<?php endif; ?>
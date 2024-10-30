<?php  
	$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1');
	$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data3',fasterly_information3_default()); 
	$fasterly_theme_information_column 	= get_theme_mod('fasterly_theme_information2_column','4');
	if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_6">
	<div class="container">
		<div class="info-item">
			<div class="row info-wrp">
				<?php
					if ( ! empty( $fasterly_theme_information_data ) ) {
					$fasterly_theme_information_data = json_decode( $fasterly_theme_information_data );
					foreach ( $fasterly_theme_information_data as $item ) {
						$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'Information section' ) : '';
						$text = ! empty( $item->text ) ? apply_filters( 'fasterly_translate_single_string', $item->text, 'Information section' ) : '';
						$button = ! empty( $item->text2 ) ? apply_filters( 'fasterly_translate_single_string', $item->text2, 'Information section' ) : '';
						$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'Information section' ) : '';
						$image = ! empty( $item->image_url ) ? apply_filters( 'fasterly_translate_single_string', $item->image_url, 'Information section' ) : '';
						$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Information section' ) : '';
				?>
					<div class="col-lg-<?php echo esc_attr($fasterly_theme_information_column); ?> col-md-6 col-sm-12">
						<div class="single-feature-box">
							<div class="feature-box-inner">
								<div class="feature-icon1">
									<?php if ( ! empty( $icon ) ) : ?>
											<i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
									<?php endif; ?>	
								</div>
								<div class="feature-title">
									<?php if ( ! empty( $title ) ) : ?>
										<h3><?php echo esc_html($title); ?></h3>
									<?php endif; ?>
								</div>
								<div class="feature-text">
									<?php if ( ! empty( $text ) ) : ?>
										<p><?php echo esc_html($text); ?></p>
									<?php endif; ?>	
								</div>
								<div class="feature-bar"></div>
							</div>
							<!-- feature back -->
							<div class="consen-feature-back">
								<div class="feature-back-title">
									<?php if ( ! empty( $title ) ) : ?>
										<h2><?php echo esc_html($title); ?></h2>
									<?php endif; ?>
								</div>
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="more-link"><p><?php echo esc_html($button); ?></p></a>
								<?php endif; ?>	
								<div class="feature-back-icon">
									<a href="<?php echo esc_url($link); ?>"><i class="fa <?php echo esc_attr($icon); ?>"></i></a>
								</div>
							</div>
							<div class="feature-box-img">
								<?php if ( ! empty( $image ) ) : ?>
									<img src="<?php echo esc_url($image); ?>">
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
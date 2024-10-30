<?php  
	$fasterly_theme_hs_information	= get_theme_mod('fasterly_theme_hs_information','1');
	$fasterly_theme_information_data	= get_theme_mod('fasterly_theme_information_data3',fasterly_information3_default()); 
	$fasterly_theme_information_column 	= get_theme_mod('fasterly_theme_information2_column','4');
	if($fasterly_theme_hs_information=='1'):
?>	
<section id="info_section" class="info_7">
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
					$image = ! empty( $item->image_url ) ? apply_filters( 'fasterly_translate_single_string', $item->image_url, 'Information section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'fasterly_translate_single_string', $item->icon_value, 'Information section' ) : '';
			?>
				<div class="col-lg-4 col-md-6">
					<div class="info-item">
						<?php if ( ! empty( $image ) ) : ?>
							<img class="info-item-img" src="<?php echo esc_url($image); ?>">
						<?php endif; ?>
						
						<?php if ( ! empty( $title ) ) : ?>
							<h4 class="info-item-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h4>
						<?php endif; ?>
						
						<?php if ( ! empty( $text ) ) : ?>
							<p><?php echo esc_html($text); ?></p>
						<?php endif; ?>	
						
						<?php if ( ! empty( $button ) ) : ?>
							<a href="<?php echo esc_url($link); ?>" class="more-link"><p><?php echo esc_html($button); ?></p></a>
						<?php endif; ?>	
						
						<?php if ( ! empty( $icon ) ) : ?>
							<div class="info-item-icon"> 
								<i class="fa <?php echo esc_attr($icon); ?>"></i>
							</div>
						<?php endif; ?>	
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php endif; ?>
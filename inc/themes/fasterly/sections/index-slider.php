<?php  
	$fasterly_theme_slider 			= get_theme_mod('fasterly_theme_slider',fasterly_slider_default());
	$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme	
	if( 'Fasterly' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-1';
	}elseif( 'BunnyPress' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-6';
	}elseif( 'Bunify' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-7';
	}elseif( 'Easify' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-8';
	}elseif( 'Axxa' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-9';	
	}elseif( 'Fasco' == $Bunny_Companion_current_theme->name){
		$slider_style='main-slider-10';	
	}else{	
		$slider_style='main-slider-2';
	}
?>	
<section id="slider-section" class="slider-section slider-nav-1 <?php echo esc_attr($slider_style); ?>">
	<div id="home-slider" class="home-slider owl-carousel owl-theme">
		<?php
			if ( ! empty( $fasterly_theme_slider ) ) {
			$fasterly_theme_slider = json_decode( $fasterly_theme_slider );
			foreach ( $fasterly_theme_slider as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'fasterly_translate_single_string', $item->title, 'slider section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'fasterly_translate_single_string', $item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'fasterly_translate_single_string', $item->subtitle2, 'slider section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'fasterly_translate_single_string', $item->text, 'slider section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'fasterly_translate_single_string', $item->text2,'slider section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'fasterly_translate_single_string', $item->link, 'slider section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'fasterly_translate_single_string', $item->image_url, 'slider section' ) : '';
				$align = ! empty( $item->slide_align ) ? apply_filters( 'fasterly_translate_single_string', $item->slide_align, 'slider section' ) : '';
				if($align == 'left'): $animation_align='fadeInLeft'; 
				elseif($align == 'center'): $animation_align='fadeInUp';
				else: $animation_align='fadeInRight'; endif;
		?>
			<div class="item">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>" alt="" data-animation-in="zoomInImage">
				<?php endif; ?>	
				<div class="cover">
					<div class="container">
						<div class="slider-content text-<?php echo esc_attr($align); ?>">
							<?php if ( ! empty( $title ) ) : ?>
								<?php if( 'Axxa' == $Bunny_Companion_current_theme->name): ?>
									<h5 data-animation="<?php echo esc_attr($animation_align);?>" data-delay="150ms"><span><i class="fa fa-angle-right"></i></span><?php echo esc_html($title); ?></h5>
								<?php else: ?>
									<h5 data-animation="<?php echo esc_attr($animation_align);?>" data-delay="150ms"><?php echo esc_html($title); ?></h5>
								<?php endif; ?>	
							<?php endif; ?>	
							
							<?php if ( ! empty( $subtitle ) || ! empty( $subtitle2 )) : ?>
								<h1 data-animation="<?php echo esc_attr($animation_align);?>" data-delay="200ms"><?php echo esc_html($subtitle); ?><span class="sld-title"> <?php echo esc_html($subtitle2); ?></span> </h1> 
							<?php endif; ?>	
							
							<?php if ( ! empty( $text ) ) : ?>
								<p data-animation="<?php echo esc_attr($animation_align);?>" data-delay="500ms"><?php echo esc_html($text); ?></p> 
							<?php endif; ?>	
							
							<div class="slider-btns">
								<?php if ( ! empty( $button ) ) : ?>
									<a  href="<?php echo esc_url($link); ?>" class="btn-1 btn-effect-1 btn-radius-1 "><?php echo esc_html($button); ?> <i class="fa fa-angle-double-right"></i> </a>
								<?php endif; ?>	
							</div>	
						</div>
					</div>
				</div>
			</div>  
		<?php } } ?>
	</div>
</section>
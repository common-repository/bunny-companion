<?php  
$fasterly_theme_hs_cta	= get_theme_mod('fasterly_theme_hs_cta','1');
$fasterly_theme_cta_title	= get_theme_mod('fasterly_theme_cta_title','We Now Make Your Business 2025'); 
$fasterly_theme_cta_sbttl	= get_theme_mod('fasterly_theme_cta_sbttl','It is a long established fact that a reader will be distracted by readable content');
$fasterly_theme_cta_icon 	= get_theme_mod('fasterly_theme_cta_icon','fa-phone');
$fasterly_theme_cta_icon_link = get_theme_mod('fasterly_theme_cta_icon_link','tel:+493 3322 666');
$fasterly_theme_cta_contact = get_theme_mod('fasterly_theme_cta_contact','<a href="tel:+493 3322 6666" class="contact-info"><h5>+493 3322 6666</h5> </a><p>Support Service 24/7</p>');
$fasterly_theme_cta_btn_lbl	= get_theme_mod('fasterly_theme_cta_btn_lbl','Contact Us'); 
$fasterly_theme_cta_btn_link	= get_theme_mod('fasterly_theme_cta_btn_link','#'); 
$fasterly_theme_cta_bg_img	= get_theme_mod('fasterly_theme_cta_bg_img',esc_url(get_template_directory_uri() .'/assets/image/cta_bg.jpg')); 
if($fasterly_theme_hs_cta=='1'):
?>	
<section id="cta-section" class="cta_section_four cta-bg-image hm-cta">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="cta_left_area">
					<div class="cta_content">
						<?php if(!empty($fasterly_theme_cta_title)): ?>
							<h6 class="ttl"><?php echo wp_kses_post($fasterly_theme_cta_title); ?></h6>
						<?php endif; ?>
						
						<?php if(!empty($fasterly_theme_cta_sbttl)): ?>
							<p class="txt"><?php echo wp_kses_post($fasterly_theme_cta_sbttl); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="cta_right_area">
					<?php if(!empty($fasterly_theme_cta_icon)): ?>
						<div class="cta_icon">
							<!-- <a href="tel:+493 3322 666" class="scrolldown"><i class="fa fa-phone" aria-hidden="true"></i></a> -->
							<a href="<?php echo esc_url($fasterly_theme_cta_icon_link); ?>" class="vedio-btn scrolldown"><i class="fa <?php echo esc_attr($fasterly_theme_cta_icon); ?>" aria-hidden="true"></i></a>
						</div>
					<?php endif; ?>
					
					
					<?php if(!empty($fasterly_theme_cta_contact)): ?>
						<div class="cta_content ctct">
							<?php echo wp_kses_post($fasterly_theme_cta_contact); ?>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($fasterly_theme_cta_btn_lbl)): ?>
						<a href="<?php echo esc_url($fasterly_theme_cta_btn_link); ?>" class="btn-1 btn-effect-1 btn-radius-1 "><?php echo wp_kses_post($fasterly_theme_cta_btn_lbl); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; do_action('fasterly_after_cta_trigger'); ?>
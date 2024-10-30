<?php  
$fasterly_theme_hs_about	= get_theme_mod('fasterly_theme_hs_about','1');
$fasterly_theme_about_setting_left_img1	= get_theme_mod('fasterly_theme_about_setting_left_img1',esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/about/imgabout1.jpg')); 
$fasterly_theme_about_setting_left_img2	= get_theme_mod('fasterly_theme_about_setting_left_img2',esc_url(BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/about/imgabout2.jpg'));
$fasterly_theme_about_title 	= get_theme_mod('fasterly_theme_about_title','About<span class="subtitle-shape"><ul class="dynamic-txt">
							<li>Company</li>
							<li>History</li>
						</ul></span>');
$fasterly_theme_about_sbttl 	= get_theme_mod('fasterly_theme_about_sbttl','The world’s IT networking company');
$fasterly_theme_about_txt 		= get_theme_mod('fasterly_theme_about_txt','Proin venenatis vestibulum metus at aliquet.Mauris bibendum mi accumsan arcu varius, eget mattis nulla fringilla. Praesent viverra tellus tempus ex bibendum');
$fasterly_theme_about_content 	= get_theme_mod('fasterly_theme_about_content','<div class="icon-box-item">
							<div class="icon-box">
								<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i></a>
							</div>
							<div class="content">
								<h5><a href="#">IT Managment</a></h5>
								<p>Aenean congue mi nulla, eget </p>
							</div>
							<div class="icon-box">
								<a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
							</div>
							<div class="content">
								<h5><a href="#">Serivce Ideas</a></h5>
								<p>Aenean congue mi nulla, eget </p>
							</div>
						</div>
						<div class="about-footer">
							<a href="#" class="btn-1 btn-effect-1 btn-radius-1 ">Read More <i class="fa fa-angle-double-right"></i></a>
							<div class="image-box">
								<div class="img">
									<img src="'.esc_url(BUNNY_COMPANION_PLUGIN_URL) .'inc/themes/fasterly/assets/images/about/author.abt.jpg">
								</div>
								<div class="content">
									<div class="name">
										Henry Jhonson
									</div>
									<p class="desc"><a href="#">Founder of CEO</a> </p>
								</div>
							</div>
						</div>');
if($fasterly_theme_hs_about=='1'):
?>	
<section id="about-section" class="about-section hm-abt">
	<div class="container">
		<div class="row wow fadeInUp">
			<?php if(!empty($fasterly_theme_about_setting_left_img1) || !empty($fasterly_theme_about_setting_left_img2)): ?>
				<div class="col-lg-6 col-md-12">
					<div class="about-img">
						<img src="<?php echo esc_url(BUNNY_COMPANION_PLUGIN_URL); ?>inc/themes/fasterly/assets/images/about/bg-about.png" class="left-about">
						<?php if(!empty($fasterly_theme_about_setting_left_img1)): ?>	
							<div class="about-img-1">
								<img src="<?php echo esc_url($fasterly_theme_about_setting_left_img1); ?>">
							</div>
						<?php endif; ?>
						
						<?php if(!empty($fasterly_theme_about_setting_left_img2)): ?>
							<div class="about-img-2">
								<img src="<?php echo esc_url($fasterly_theme_about_setting_left_img2); ?>">
							</div>
						<?php endif; ?>	
					</div>
				</div>
			<?php endif; ?>
			<div class="col-lg-<?php if(!empty($fasterly_theme_about_setting_left_img1) || !empty($fasterly_theme_about_setting_left_img2)): echo '6'; else: echo '12'; endif; ?> col-md-12">
				<div class="about-right-area">
					<?php if(!empty($fasterly_theme_about_title)): ?>
						<h2 class="sbttl"><?php echo wp_kses_post($fasterly_theme_about_title); ?></h2>
					<?php endif; ?>	
					
					<?php if(!empty($fasterly_theme_about_sbttl)): ?>
					<h2 class="title"><?php echo wp_kses_post($fasterly_theme_about_sbttl); ?></h2>
					<?php endif; ?>	
					
					<?php if(!empty($fasterly_theme_about_txt)): ?>
						<p class="txt"><?php echo wp_kses_post($fasterly_theme_about_txt); ?></p>
					<?php endif; ?>	
					
					<?php if(!empty($fasterly_theme_about_content)): ?>
						<?php echo wp_kses_post($fasterly_theme_about_content); ?>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
	<div class="bt-shapes-wrap">
		<div class="bt-shape1">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
				 width="112.000000pt" height="104.000000pt" viewBox="0 0 182.000000 104.000000"
				 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,104.000000) scale(0.100000,-0.100000)"
					fill="var(--bs-primary)" stroke="none">
					<path d="M15 1024 c-18 -19 -16 -33 7 -48 12 -7 21 -6 32 3 22 18 20 38 -3 51
					-15 7 -24 6 -36 -6z"/>
					<path d="M210 1025 c-19 -23 -8 -50 20 -50 19 0 26 6 28 24 5 35 -26 53 -48
					26z"/>
					<path d="M405 1026 c-20 -15 -15 -43 10 -52 18 -7 45 12 45 32 0 22 -35 35
					-55 20z"/>
					<path d="M602 1031 c-8 -4 -12 -19 -10 -32 2 -18 9 -24 28 -24 28 0 39 27 20
					50 -14 17 -20 18 -38 6z"/>
					<path d="M794 1026 c-20 -15 -14 -43 12 -53 20 -8 47 19 39 39 -9 23 -30 29
					-51 14z"/>
					<path d="M985 1024 c-18 -19 -16 -33 7 -48 12 -7 21 -6 32 3 22 18 20 38 -3
					51 -15 7 -24 6 -36 -6z"/>
					<path d="M1180 1025 c-19 -23 -8 -50 20 -50 16 0 26 6 28 18 4 18 -14 47 -28
					47 -4 0 -13 -7 -20 -15z"/>
					<path d="M1375 1026 c-20 -15 -15 -43 10 -52 18 -7 45 12 45 32 0 22 -35 35
					-55 20z"/>
					<path d="M1572 1031 c-8 -4 -12 -19 -10 -32 2 -18 9 -24 28 -24 28 0 39 27 20
					50 -14 17 -20 18 -38 6z"/>
					<path d="M1765 1026 c-22 -16 -11 -56 14 -56 24 0 43 23 35 43 -8 22 -29 28
					-49 13z"/>
					<path d="M11 817 c-25 -31 13 -66 46 -42 14 11 16 18 7 32 -14 23 -38 28 -53
					10z"/>
					<path d="M207 824 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M402 818 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M597 824 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M792 818 c-18 -18 -15 -36 7 -48 15 -7 23 -6 35 6 9 8 16 19 16 23 0
					11 -23 31 -35 31 -6 0 -16 -5 -23 -12z"/>
					<path d="M981 817 c-25 -31 13 -66 46 -42 14 11 16 18 7 32 -14 23 -38 28 -53
					10z"/>
					<path d="M1177 824 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M1372 818 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M1567 824 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M1754 808 c-12 -40 45 -60 60 -21 4 9 1 22 -5 29 -17 21 -47 17 -55
					-8z"/>
					<path d="M11 627 c-25 -31 13 -66 46 -42 14 11 16 18 7 32 -14 23 -38 28 -53
					10z"/>
					<path d="M207 634 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M402 628 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M597 634 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M792 628 c-18 -18 -15 -36 7 -48 15 -7 23 -6 35 6 9 8 16 19 16 23 0
					11 -23 31 -35 31 -6 0 -16 -5 -23 -12z"/>
					<path d="M981 627 c-25 -31 13 -66 46 -42 14 11 16 18 7 32 -14 23 -38 28 -53
					10z"/>
					<path d="M1177 634 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M1372 628 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M1567 634 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M1762 628 c-18 -18 -15 -36 7 -48 15 -7 23 -6 35 6 9 8 16 19 16 23
					0 11 -23 31 -35 31 -6 0 -16 -5 -23 -12z"/>
					<path d="M11 437 c-25 -31 20 -71 48 -42 12 12 13 19 5 33 -15 22 -38 26 -53
					9z"/>
					<path d="M207 444 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M402 438 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M597 444 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M792 438 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					<path d="M981 437 c-25 -31 20 -71 48 -42 12 12 13 19 5 33 -15 22 -38 26 -53
					9z"/>
					<path d="M1177 444 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M1372 438 c-30 -30 9 -69 44 -43 15 11 17 17 8 32 -14 23 -36 27 -52
					11z"/>
					<path d="M1567 444 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M1762 438 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					<path d="M11 247 c-25 -31 20 -71 48 -42 12 12 13 19 5 33 -15 22 -38 26 -53
					9z"/>
					<path d="M207 254 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M402 248 c-18 -18 -15 -36 9 -49 29 -15 59 12 43 39 -14 22 -36 26
					-52 10z"/>
					<path d="M597 254 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M792 248 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					<path d="M982 248 c-18 -18 -15 -36 9 -49 29 -15 59 12 43 39 -14 22 -36 26
					-52 10z"/>
					<path d="M1177 254 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28
					-4z"/>
					<path d="M1370 245 c-10 -12 -11 -21 -4 -33 15 -22 27 -24 49 -8 16 12 18 18
					9 33 -15 24 -38 27 -54 8z"/>
					<path d="M1567 254 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M1762 248 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					<path d="M11 57 c-25 -31 20 -71 48 -42 12 12 13 19 5 33 -15 22 -38 26 -53 9z"/>
					<path d="M207 64 c-23 -23 7 -69 37 -58 25 10 17 58 -9 62 -12 2 -24 0 -28 -4z"/>
					<path d="M400 56 c-27 -33 18 -72 48 -42 13 13 14 20 6 34 -15 23 -38 26 -54
					8z"/>
					<path d="M597 64 c-13 -13 -7 -52 8 -58 27 -10 46 5 43 33 -3 26 -35 41 -51
					25z"/>
					<path d="M792 58 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					<path d="M982 58 c-18 -18 -15 -36 9 -49 29 -15 59 12 43 39 -14 22 -36 26
					-52 10z"/>
					<path d="M1177 64 c-13 -13 -7 -52 8 -58 27 -10 46 5 43 33 -3 26 -35 41 -51
					25z"/>
					<path d="M1370 56 c-27 -33 18 -72 48 -42 13 13 14 20 6 34 -15 23 -38 26 -54
					8z"/>
					<path d="M1567 64 c-13 -13 -7 -52 9 -58 22 -9 46 13 42 38 -3 21 -37 34 -51
					20z"/>
					<path d="M1762 58 c-16 -16 -15 -33 2 -47 28 -23 68 17 45 45 -14 17 -31 18
					-47 2z"/>
					</g>
				</svg>
			</div>
			<div class="bt-shape2">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
					 width="80.000000pt" height="26.000000pt" viewBox="0 0 110.000000 26.000000"
					 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,26.000000) scale(0.100000,-0.100000)"
					fill="var(--bs-primary)" stroke="none">
					<path d="M0 240 c0 -20 7 -20 430 -20 423 0 430 0 430 20 0 20 -7 20 -430 20
					-423 0 -430 0 -430 -20z"/>
					<path d="M240 130 c0 -20 7 -20 430 -20 423 0 430 0 430 20 0 20 -7 20 -430
					20 -423 0 -430 0 -430 -20z"/>
					<path d="M150 20 c0 -20 7 -20 430 -20 423 0 430 0 430 20 0 20 -7 20 -430 20
					-423 0 -430 0 -430 -20z"/>
					</g>
				</svg>	
			</div>
			<div class="bt-shape3">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
				 width="19.000000pt" height="19.000000pt" viewBox="0 0 19.000000 19.000000"
				 preserveAspectRatio="xMidYMid meet">

				<g transform="translate(0.000000,19.000000) scale(0.100000,-0.100000)"
				fill="var(--bs-primary)" stroke="none">
				<path d="M51 176 c-13 -7 -30 -24 -37 -37 -51 -92 72 -183 146 -109 43 43 32
				118 -21 145 -34 18 -57 18 -88 1z"/>
				</g>
				</svg>
			</div>
			<div class="bt-shape4">
				<svg height="100" width="100">
					<circle cx="30" cy="30" r="20" stroke="black" stroke-width="2" fill="var(--bs-primary)" />
				</svg>
			</div>
		</div>
</section>
<?php endif; ?>
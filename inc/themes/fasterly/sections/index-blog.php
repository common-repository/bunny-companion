<?php  
$fasterly_theme_hs_blog	= get_theme_mod('fasterly_theme_hs_blog','1');
$fasterly_theme_blog_title 	= get_theme_mod('fasterly_theme_blog_title','Meet Blogs');
$fasterly_theme_blog_sbttl 	= get_theme_mod('fasterly_theme_blog_sbttl','Dedictated<span class="subtitle-shape"><ul class="dynamic-txt"><li>Blog</li><li>Features</li></ul></span>');
$fasterly_theme_blog_txt 	= get_theme_mod('fasterly_theme_blog_txt','Lorem Ipsum is simply dummy of printing and typesetting and industry.');
$fasterly_theme_blog_category_id = get_theme_mod('fasterly_theme_blog_category_id');
$fasterly_theme_blog_display_num = get_theme_mod('fasterly_theme_blog_display_num','3');
$fasterly_theme_blog_column 	= get_theme_mod('fasterly_theme_blog_column','4');
$fasterly_theme_blog_type 		= get_theme_mod('fasterly_theme_blog_type','1');
if($fasterly_theme_hs_blog=='1'):
?>	
<section id="post-section" class="post_section hm-blog">
	<div class="container">
		<?php if(!empty($fasterly_theme_blog_title) || !empty($fasterly_theme_blog_sbttl)   || !empty($fasterly_theme_blog_txt)): ?>
			<div class="row wow fadeInUp">
				<div class="section-title-1 text-center">
					<?php if(!empty($fasterly_theme_blog_title)): ?>
						<h5 class="title"><?php echo wp_kses_post($fasterly_theme_blog_title); ?></h5>
					<?php endif; ?>
					<?php if(!empty($fasterly_theme_blog_sbttl)): ?>
						<h2 class="sbttl"><?php echo wp_kses_post($fasterly_theme_blog_sbttl); ?></h2>
					<?php endif; ?>
					
					<?php if(!empty($fasterly_theme_blog_txt)): ?>
						<p class="txt"><?php echo wp_kses_post($fasterly_theme_blog_txt); ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="row wow fadeInUp">
			<?php 
				$fasterly_blog_args = array( 'post_type' => 'post', 'posts_per_page' => $fasterly_theme_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				
				$fasterly_wp_query = new WP_Query($fasterly_blog_args);
				if($fasterly_wp_query)
				{	
				while($fasterly_wp_query->have_posts()):$fasterly_wp_query->the_post();
				
				?>
				<div class="col-lg-4 col-md-6">
					<?php get_template_part('template-parts/content','page');	?>
				</div>
			<?php endwhile; }	wp_reset_postdata(); ?>
		</div>
	</div>
	<div class="bt-shapes-wrap">
		<div class="blog-shape1">
			<svg height="300" width="300">
			<circle cx="200" cy="200" r="50" stroke="var(--bs-secondary)" stroke-width="20" fill="transparent" />
			</svg> 
		</div>
		<div class="blog-shape2">
			<svg height="30" width="30">
				<circle cx="20" cy="20" r="10" fill="var(--bs-primary)" /> 
			</svg> 
		</div>
		<div class="blog-shape3">
			<svg height="50" width="50">
				<circle cx="30" cy="30" r="20" fill="var(--bs-secondary)" /> 
			</svg> 
		</div>
		<div class="blog-shape4">
			<svg height="30" width="30">
				<circle cx="20" cy="20" r="10" fill="var(--bs-primary)" /> 
			</svg> 
		</div>
		<div class="blog-shape5">
			<svg height="300" width="300">
			<circle cx="200" cy="200" r="50" stroke="var(--bs-primary)" stroke-width="20" fill="transparent" />
			</svg> 
		</div>
	</div>
</section>
<?php endif; do_action('fasterly_after_blog_trigger'); ?>
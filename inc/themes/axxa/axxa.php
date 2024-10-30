<?php
/**
 * @package  Axxa
 */
$fasterly_settings = array(
	'features/slider',
	'features/information',
	'features/about',
	'features/service',
	'features/cta',
	'features/blog',
	'features/typography',
	'sections/below-header',
	'custom-style',
	'theme-functions'
);
foreach ( $fasterly_settings as $feature ) {
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/'.$feature.'.php';
}
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/smoothify/features/header.php';
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/bunify/sections/top-header.php';


if ( ! function_exists( 'axxa_nav_contact' ) ) :
function axxa_nav_contact() {
	$fasterly_theme_hs_nav_contact 		= get_theme_mod( 'fasterly_theme_hs_nav_contact','1');
	$fasterly_theme_nav_contact_icon 	= get_theme_mod( 'fasterly_theme_nav_contact_icon','fa-phone');
	$fasterly_theme_nav_contact_ttl 	= get_theme_mod( 'fasterly_theme_nav_contact_ttl','Call for help:'); 
	$fasterly_theme_nav_contact_subttl 	= get_theme_mod( 'fasterly_theme_nav_contact_subttl','<a class="description" href="tel:49333226666"> 493-3322-6666</a>'); 
	if($fasterly_theme_hs_nav_contact=='1'):
?>
	<li class="header-contact-two">
		<div class="icon">
			<i class="icon fa <?php echo esc_attr($fasterly_theme_nav_contact_icon); ?>"></i>
		</div>
		<div class="content">
			<span><?php echo wp_kses_post($fasterly_theme_nav_contact_ttl); ?></span>
			<p><?php echo wp_kses_post($fasterly_theme_nav_contact_subttl); ?></p>
		</div>
	</li>
<?php  endif;
	} 
endif;		
add_action( 'axxa_nav_contact', 'axxa_nav_contact');

if ( ! function_exists( 'Bunny_Companion_fasterly_frontpage_sections' ) ) :
	function Bunny_Companion_fasterly_frontpage_sections() {
		$fasterly_sections = array(
			'fasterly/sections/index-slider',
			'axxa/sections/index-information',
			'fasterly/sections/index-about',
			'axxa/sections/index-service',
			'fasterly/sections/index-cta',
			'fasterly/sections/index-blog',
		);
		foreach ( $fasterly_sections as $section ) {
			require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/'.$section.'.php';
		}		
    }
	add_action( 'fasterly_sections', 'Bunny_Companion_fasterly_frontpage_sections' );
endif;
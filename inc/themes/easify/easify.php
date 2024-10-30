<?php
/**
 * @package  Easify
 */
$fasterly_settings = array(
	'features/slider',
	'features/about',
	'features/cta',
	'features/blog',
	'features/typography',
	'sections/below-header',
	'custom-style',
	'theme-functions'
);
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/bunnypress/features/header.php';
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/bunnypress/features/service.php';
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/smoothify/sections/top-header.php';
foreach ( $fasterly_settings as $feature ) {
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/'.$feature.'.php';
}

if ( ! function_exists( 'Bunny_Companion_fasterly_frontpage_sections' ) ) :
	function Bunny_Companion_fasterly_frontpage_sections() {
		$fasterly_sections = array(
			'fasterly/sections/index-slider',
			'fasterly/sections/index-cta',
			'fasterly/sections/index-about',
			'bunnypress/sections/index-service',
			'fasterly/sections/index-blog',
		);
		foreach ( $fasterly_sections as $section ) {
			require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/'.$section.'.php';
		}		
    }
	add_action( 'fasterly_sections', 'Bunny_Companion_fasterly_frontpage_sections' );
endif;
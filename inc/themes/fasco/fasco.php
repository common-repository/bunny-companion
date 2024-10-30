<?php
/**
 * @package  Fasterly
 */
$fasterly_settings = array(
	'features/slider',
	'features/information',
	'features/about',
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
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasco/features/header.php';
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasco/sections/top-header.php';
require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/features/service.php';

if ( ! function_exists( 'Bunny_Companion_fasterly_frontpage_sections' ) ) :
	function Bunny_Companion_fasterly_frontpage_sections() {
		$fasterly_sections = array(
			'fasterly/sections/index-slider',
			'fasco/sections/index-information',
			'fasterly/sections/index-about',
			'fasco/sections/index-service',
			'fasco/sections/index-cta',
			'fasterly/sections/index-blog',
		);
		foreach ( $fasterly_sections as $section ) {
			require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/'.$section.'.php';
		}		
    }
	add_action( 'fasterly_sections', 'Bunny_Companion_fasterly_frontpage_sections' );
endif;
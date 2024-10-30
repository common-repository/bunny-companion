<?php
/**
 * @package  Fasterly
 */
$fasterly_settings = array(
	'features/header',
	'features/slider',
	'features/information',
	'features/about',
	'features/service',
	'features/cta',
	'features/blog',
	'features/typography',
	'sections/below-header',
	'sections/top-header',
	'custom-style',
	'theme-functions'
);
foreach ( $fasterly_settings as $feature ) {
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/'.$feature.'.php';
}

if ( ! function_exists( 'Bunny_Companion_fasterly_frontpage_sections' ) ) :
	function Bunny_Companion_fasterly_frontpage_sections() {
		$fasterly_sections = array(
			'sections/index-slider',
			'sections/index-information',
			'sections/index-about',
			'sections/index-service',
			'sections/index-cta',
			'sections/index-blog',
		);
		foreach ( $fasterly_sections as $section ) {
			require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/'.$section.'.php';
		}		
    }
	add_action( 'fasterly_sections', 'Bunny_Companion_fasterly_frontpage_sections' );
endif;
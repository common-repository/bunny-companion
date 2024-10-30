<?php
/*
Plugin Name: Bunny Companion
Description: This is a plugin created for Bunny themes. This plugin provides additional frontpage sections for Bunny Themes.
Version: 1.0.7
Author: bunnythemes
Author URI: https://bunnytheme.com/
Tested up to: 6.6
Text Domain: bunny-companion
Requires PHP: 5.6
*/
define( 'BUNNY_COMPANION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BUNNY_COMPANION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function Bunny_Companion_activate() {
	/**
	 *  Activate Theme
	 */
	 require_once('inc/activate-themes.php');
		
	}
add_action( 'init', 'Bunny_Companion_activate' );

/**
 * The code during plugin activation.
 */
function Bunny_Companion_activates() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/activator.php';
	Bunny_Companion_Activator::activate();
}
register_activation_hook( __FILE__, 'Bunny_Companion_activates' );
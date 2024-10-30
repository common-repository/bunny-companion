<?php
/**
 * Fired during plugin activation
 *
 * @package    Bunny Companion
 */

/**
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class Bunny_Companion_Activator {

	public static function activate() {

        $item_details_page = get_option('item_details_page'); 
		$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
		if(!$item_details_page){
			if ( 'Fasterly' == $Bunny_Companion_current_theme->name || 'Smoothify' == $Bunny_Companion_current_theme->name  || 'BunnyPress' == $Bunny_Companion_current_theme->name  || 'Bunify' == $Bunny_Companion_current_theme->name  || 'Easify' == $Bunny_Companion_current_theme->name || 'Axxa' == $Bunny_Companion_current_theme->name || 'Fasco' == $Bunny_Companion_current_theme->name){
				require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/pages-widget/media.php';
				require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/pages-widget/homepage.php';
				require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/pages-widget/widget.php';
			}
			
			update_option( 'item_details_page', 'Done' );
		}
	}

}
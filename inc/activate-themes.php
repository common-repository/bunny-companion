<?php
$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
	
if( 'Fasterly' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasterly/fasterly.php';
}

if( 'Smoothify' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/smoothify/smoothify.php';
}

if( 'BunnyPress' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/bunnypress/bunnypress.php';
}

if( 'Bunify' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/bunify/bunify.php';
}

if( 'Easify' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/easify/easify.php';
}

if( 'Axxa' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/axxa/axxa.php';
}

if( 'Fasco' == $Bunny_Companion_current_theme->name){
	require BUNNY_COMPANION_PLUGIN_DIR . 'inc/themes/fasco/fasco.php';
}

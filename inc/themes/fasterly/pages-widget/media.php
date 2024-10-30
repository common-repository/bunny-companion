<?php
$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
if( 'Smoothify' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/smoothify/assets/images/logo.png';
}elseif( 'BunnyPress' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/bunnypress/assets/images/logo.png';
}elseif( 'Bunify' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/bunify/assets/images/logo.png';
}elseif( 'Easify' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/easify/assets/images/logo.png';
}elseif( 'Axxa' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/axxa/assets/images/logo.png';
}elseif( 'Fasco' == $Bunny_Companion_current_theme->name){
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasco/assets/images/logo.png';
}else{
$file = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/logo.png';
}
$ImagePath = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images';

$images = array(
$file
);
$parent_post_id = null;
foreach($images as $name) {
$filename = basename($name);
$upload_file = wp_upload_bits($filename, null, file_get_contents($name));
if (!$upload_file['error']) {
	$wp_filetype = wp_check_filetype($filename, null );
	$attachment = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_parent' => $parent_post_id,
		'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
		'post_excerpt' => 'Fasterly caption',
		'post_status' => 'inherit'
	);
	$ImageId[] = $attachment_id = wp_insert_attachment( $attachment, $upload_file['file'], $parent_post_id );
	
	if (!is_wp_error($attachment_id)) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		$attachment_data = wp_generate_attachment_metadata( $attachment_id, $upload_file['file'] );
		wp_update_attachment_metadata( $attachment_id,  $attachment_data );
	}
}

}

 update_option( 'fasterly_media_id', $ImageId );

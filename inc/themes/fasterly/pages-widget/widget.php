<?php
$Bunny_Companion_current_theme = wp_get_theme(); // gets the current theme
if( 'Smoothify' == $Bunny_Companion_current_theme->name){
	$logo = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/smoothify/assets/images/logo.png';
}elseif( 'BunnyPress' == $Bunny_Companion_current_theme->name){
	$logo = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/bunnypress/assets/images/logo.png';
}elseif( 'Easify' == $Bunny_Companion_current_theme->name){
	$logo = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/easify/assets/images/logo.png';	
}elseif( 'Fasco' == $Bunny_Companion_current_theme->name){
	$logo = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasco/assets/images/logo.png';
}else{
	$logo = BUNNY_COMPANION_PLUGIN_URL .'inc/themes/fasterly/assets/images/footer-logo.png';
}
$activate = array(
        'fasterly-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'fasterly-footer-1' => array(
            'text-1'
        ),
		'fasterly-footer-2' => array(
            'text-2'
        ),
		'fasterly-footer-3' => array(
            'search-1'
        )
    );
    /* the default titles will appear */
	update_option('widget_text', array(
        1 => array('title' => 'About Fasterly',
        'text'=>'<div class="textwidget"><div class="footer-logo"><img src="'.$logo.'" alt=""></div>
<p>There are many variations of dummy passages of Lorem Ipsum a available, but the majority have suffered that is alteratio.</p>
</div>'),  
							
		 2 => array('title' => 'Contact Details',
        'text'=>'<div class="widget-content">
							<aside class="widget-footer widget-text">
								<div class="footer-content-list">
									<p>Call +</p>
									<p>(+199)147 222 4444</p>
								</div>
							</aside>
							<aside class="widget-footer widget-text">
								<div class="footer-content-list">
									<p>Email: </p>
									<p>email@company.com</p>
								</div>
							</aside>
							<aside class="widget-footer widget-text">
								<div class="footer-content-list">
									<p>Website </p>
									<p>www.companyname.com</p>
								</div>
							</aside>
						</div>'),					
        ));
		
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories'), 
			2 => array('title' => 'Categories')));

		update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('fasterly_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
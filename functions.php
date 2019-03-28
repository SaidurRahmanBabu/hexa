<?php
	//include theme scripts
	require_once(get_theme_file_path('/inc/hexa-scripts.php'));
	//get tgm file
	require_once(get_theme_file_path('/inc/tgm.php'));
	//after setup theme functions
	require_once(get_theme_file_path('/inc/hexa-theme-setup.php'));
	//all widgets
	require_once(get_theme_file_path( '/inc/hexa-widgets.php' ));


//excerpt length
	function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
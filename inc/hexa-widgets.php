<?php
	function hexa_widgets(){
		//footer widget
		register_sidebar(array(
			'name' 						=> __('Footer widgets', 'hexa'),
			'description' 		=> __('Footer Widgets Here', 'hexa'),
			'id' 							=> 'footer-widget',

     'before_widget' 			=> '<div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-wrapper sidebar-widget pl-lg-0">',

     'after_widget' 			=> '</div></div>',
     'before_title' 			=> '<h2 class="widget-title">',
     'after_title' 				=> '</h2><div class="card hexa-widget border-0 rounded-0 p-15">'
		));

    //theme's sidebar
		register_sidebar(array(
     'name' 					    => __('Main Sidebar', 'hexa'),
     'description' 				=> __("Hexa theme's man sidebar", 'hexa'),
     'id' 								=> 'hexa-sidebar',

     'before_widget' 			=> '<div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-wrapper sidebar-widget pl-lg-0">',

     'after_widget' 			=> '</div></div>',
     'before_title' 			=> '<h2 class="widget-title">',
     'after_title' 				=> '</h2><div class="card hexa-widget border-0 rounded-0 p-15">'
		));

		//footer Bottom Licence
		register_sidebar(array(
			'name' 						=> __('Footer Bottom Licence', 'hexa'),
			'description' 		=> __('Footer Bottom Licence Here', 'hexa'),
			'id' 							=> 'footer-bottom',
			'before_widget' 	=> '<div class="footer-bottom">',
			'after_widget' 		=>'</div>',
			'before_title' 		=> '<h2 class="widget-title">',
			'after_title' 		=> '</h2>'

		));

		//hexa custom widget fields
		require_once('hexa-custom-widgets.php');
	}
	add_action('widgets_init', 'hexa_widgets');
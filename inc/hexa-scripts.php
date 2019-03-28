<?php
	function hexa_scripts(){
		//css files
		wp_enqueue_style('hexa-fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

		wp_enqueue_style( 'hexa-main-css', get_template_directory_uri() . "/assets/stylesheets/main.css", array(), 'null', 'all' );

		wp_enqueue_style( 'hexa-style-css', get_stylesheet_uri(), array(), time(), 'all' );

		//js files
		wp_enqueue_script( 'hexa-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), 'all', false );

		wp_enqueue_script( 'hexa-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), 'all', true );
		
		wp_enqueue_script( 'hexa-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'all', true );
	}
	add_action('wp_enqueue_scripts', 'hexa_scripts');
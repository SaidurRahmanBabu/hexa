<?php
	function hexa_theme_setup(){
		//txt domain
		load_theme_textdomain('hexa');

		//all theme supports
		add_theme_support('title-tag');
		add_theme_support('custom-logo', array(
			'height' 			=> 100,
			'width'  			=> 100,
			'header-text' => array('site-title', 'site-description')
		));
		add_theme_support('post-thumbnails');
		add_theme_support('html5', array('search-form', 'comment-list'));
		add_theme_support('post-formats', array("image", "gallery", "video"));


		//Theme menus
		register_nav_menus(array(
			'main-menu' => esc_html__('Main Menu', 'hexa'),
			'social' => esc_html__('Social Menu', 'hexa')
		));


	}
	add_action('after_setup_theme', 'hexa_theme_setup');
<?php
	//include theme scripts
	require_once(get_theme_file_path('/inc/hexa-scripts.php'));
	//get tgm file
	require_once(get_theme_file_path('/inc/tgm.php'));
	//after setup theme functions
	require_once(get_theme_file_path('/inc/hexa-theme-setup.php'));
	//all widgets
	require_once(get_theme_file_path( '/inc/hexa-widgets.php' ));
	//wordpress init hook
	require_once(get_theme_file_path('/inc/hexa-init.php'));
	//shortcodes
	require_once(get_theme_file_path('/inc/shortcodes.php'));


	//excerpt length
	function wpdocs_custom_excerpt_length( $length ) {
	    return 18;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	function wpdocs_excerpt_more( $more ) {
	    return '';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

	//Redux FramWork
	if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
	}
	if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' );
	}



	//Elementor page builder Element
	class ElementorCustomElement {
		private static $instance = null;

		public function get_instance(){
			if(!self::$instance)
				self::$instance = new self;
			return self::$instance;

		}//end function get_instance

		public function init(){
			add_action( 'elementor/widgets/widgets_registered', array($this, 'widgets_registered') );

		}//end function init

		public function widgets_registered(){
			if(defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')){
				$widget_file = get_template_directory() . '/lib/custom_widget.php';
				$template_file = locate_template( $widget_file );

				if(!$template_file || !is_readable($template_file)){
					$template_file = get_template_directory() . '/lib/custom_widget.php';
				}

				if($template_file && is_readable($template_file)){
					require_once $template_file;
				}
			}

		}//end function widgets_registered

	}//end class ElementorCustomElement

	ElementorCustomElement::get_instance()->init();
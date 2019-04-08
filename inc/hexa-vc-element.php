<?php
	function hexa_google_map(){
		//everything has to be wrapped inside vc_map
		vc_map(array(
			//name of the element
			'name' 						=> __('hexa_map', 'hexa'),
			//description of the element
			'description' 		=> __('Set Google Map', 'hexa'),
			//base is the name of the shortcode
			'base' 						=> 'map',
			//icon for the element
			'icon' 						=> 'fa fa-map',
			'show_settings_on_create' => true,
			//item for vc element menu
			'category' 				=> __('Hexa Content', 'hexa'),
			//params are the input field for the element
			'params' => array(
				array(
					//type of the input field
					'type' => 'textfield',
					//Wrpapper of the element
					'holder' => 'iframe',
					'admin_label' => true,
					'heading' => __('Map Width', 'hexa'),
					'param_name' => 'width'

				),
				array(
					'type' => 'textfield',
					'holder' => 'iframe',
					'admin_label' => true,
					'heading' => __('Map Height', 'hexa'),
					'param_name' => 'height'

				),
				array(
					'type' => 'textfield',
					'holder' => 'iframe',
					'admin_label' => true,
					'heading' => __('Location Name', 'hexa'),
					'param_name' => 'place'

				),
				array(
					'type' => 'textfield',
					'holder' => 'iframe',
					'admin_label' => true,
					'heading' => __('Map Zoom', 'hexa'),
					'param_name' => 'zoom'

				),
			),//end param
		));//end vc_map
	} //end function hexa_google_map
	add_action('vc_before_init', 'hexa_google_map');
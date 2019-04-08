<?php

	global $kc;
	$kc->add_map(array(
		//'map' Name of the shortcode
		'map' => array(
			//name of the element
			'name' => __('hexa google map', 'hexa'),
			'description' => __('Set Google Map', 'hexa'),
			//icon for the element
			'icon' => 'fa fa-map',
			//Item of the KC element menu
			'category' => 'hexa kc content',
			//custom css field for the element
			'css_box' => true,
			//fields for the element
			'params' => array(
				array(
					//Name where the element will take action
					'name' => 'place',
					//Label text of the input field
					'label' => __('Location Name', 'hexa'),
					//input type
					'type' => 'text',
					//default value
					'value' => 'dhaka',
					//additional description for the filed
					'description' => __('This Is Location Name', 'hexa')
				),

				array(
					//Name where the element will take action
					'name' => 'width',
					//Label text of the input field
					'label' => __('Width of the map', 'hexa'),
					//input type
					'type' => 'text',
					//default value
					'value' => '200',
					//additional description for the filed
					'description' => __('This Is Map Width', 'hexa')
				),

				//css for them input element

				array(
            'name' => 'icon',
            'label' => 'Select Icon',
            'type' => 'icons_picker',
            'admin_label' => true,
        ),
        array(
            'name' => 'icon_size',
            'label' => 'Icon Size',
            'type' => 'text',
            'admin_label' => true,
            'description' => __('Enter font-size for icon such as: 15px, 1em ..etc..', 'kingcomposer')
        ),
        array(
            'name' => 'icon_color',
            'label' => 'Icon Color',
            'type' => 'color_picker',
            'admin_label' => true,
            'description' => __('Set color for icon', 'kingcomposer')
        )

			),//end params array

		)//end maps array
	)); //end add_map array

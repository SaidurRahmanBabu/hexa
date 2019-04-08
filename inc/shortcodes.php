<?php
	//without closing tag shortcode
	function hexa_shorcodes($attr){
		return sprintf('<button type="button" class="btn btn-%s">%s</button>',
		$attr['type'],
		$attr['content']

		);
	}

	add_shortcode('button', 'hexa_shorcodes');


//shortcode with start and closing tag
	function hexa_text($atts, $content = 'hexa'){

		$def_val = array(
			'type' => 'default',
			'title' => __('Hexa Title', 'hexa')
		);

		$def_atts = shortcode_atts($def_val, $atts);
		
		return sprintf(
			'<button type="button" class="btn btn-%s">'.$content.'</button>',
			$def_atts['type']

		);

	}
	add_shortcode('shortext', 'hexa_text');


//short code nesting. One shortcode inside another shortcode
	function sc_wrap($atts, $content){
		$wrap_def = shortcode_atts(
			array(
				'position' => 'center',
				'class' 	 => 'txt-wrap'
			),
			$atts
		);

		$wrap_text = sprintf('<div class="'.$wrap_def['class'].'" align="'.$wrap_def['position'].'">'. $content .'</div>');
		return do_shortcode($wrap_text);

	}
	add_shortcode('wrap', 'sc_wrap');


	function hexa_sc($atts, $content){
		return do_shortcode(count($content));
	}
	add_shortcode( 'inside', 'hexa_sc' );


	//shortcode google map

	function hexa_gmap($atts){
		$map_def_val = shortcode_atts( 
			array(
				'height' => '200',
				'width'  => '200',
				'place'  => 'dhaka',
				'zoom' 	 => 10
			), 
			$atts);
		$maps = <<<EOD
		<div style="position: relative;">
			<iframe width="{$map_def_val['width']}" height="{$map_def_val['height']}" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q={$map_def_val['place']}+(Title)&amp;ie=UTF8&amp;t=&amp;z={$map_def_val['zoom']}&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			</iframe>
		</div>


EOD;

		return do_shortcode($maps);
	}
	add_shortcode( 'map', 'hexa_gmap' );










	//Elemnt for Visual Composer 
	require_once('hexa-vc-element.php');


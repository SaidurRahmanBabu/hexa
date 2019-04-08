<?php
	function hexa_init(){
		//Create king composer elements
		require_once('hexa-kingcomposer.php');

		//Create Elementor page builder element
		require_once('hexa-kingcomposer.php');


	}
	add_action('init', 'hexa_init');
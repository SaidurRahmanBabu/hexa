<?php
	namespace Elementor;

	class FirstWidget extends Widget_Base{
		public function get_name() {
			return 'hexa_about';
		}//end function

		public function get_title() {
			return __( 'About Us', 'hexa' );
		}//end functionget_title

		public function get_icon() {
			return 'fa fa-address-card';
		}//end function get_icon

		public function get_categories() {
			return [ 'basic' ];
		}//end function get_categories

		protected function _register_controls(){
		//Starting of a content
			$this->start_controls_section( //input field label
				'content_section', //unique id
				[
					'label' => __( 'Content', 'hexa' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);

			$this->add_control(
				'name',
				[
					'label' => __( 'Name', 'hexa' ),
					'type' => Controls_Manager::TEXT,
					'input_type' => 'text',
					'placeholder' => __( 'lorem', 'hexa' ),
				]
			); // end add_control

			$this->add_control(
				'alignment',
				[
					'label' => __( 'Alignment', 'hexa' ),
					'type' => Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'hexa' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'hexa' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'hexa' ),
							'icon' => 'fa fa-align-right',
						],
					],
					'default' => 'center',
				]
			);


			$this->add_control(
				'open_lightbox',
				[
					'label' => __( 'Lightbox', 'hexa' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'default' => __( 'Default', 'hexa' ),
						'yes' => __( 'Yes', 'hexa' ),
						'no' => __( 'No', 'hexa' ),
					],
					'default' => 'default',
				]
			);

			$this->add_control(
				'gallery',
				[
					'label' => __( 'Add Images Gallery', 'hexa' ),
					'type' => Controls_Manager::GALLERY,
					'default' => [],
				]
			);

			$this->add_control(
				'price',
				[
					'label' => __( 'Price', 'hexa' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 5,
					'max' => 100,
					'step' => 1,
					'default' => 50,
				]
			);

			$this->add_control(
				'item_description',
				[
					'label' => __( 'Description', 'hexa' ),
					'type' => Controls_Manager::WYSIWYG, //Text Editor
					'default' => __( 'Default description', 'hexa' ),
					'placeholder' => __( 'Type your description here', 'hexa' ),
				]
			);

			$this->add_control(
				'icon',
				[
					'label' => __( 'Social Icons', 'hexa' ),
					'type' => Controls_Manager::ICON,
					'include' => [
						'fa fa-facebook',
						'fa fa-flickr',
						'fa fa-google-plus',
						'fa fa-instagram',
						'fa fa-linkedin',
						'fa fa-pinterest',
						'fa fa-reddit',
						'fa fa-twitch',
						'fa fa-twitter',
						'fa fa-vimeo',
						'fa fa-youtube',
					],
					'default' => 'fa fa-facebook',
				]
			);


			$this->end_controls_section();
		//end start_controls_section


		//Starting of a content
			$this->start_controls_section( //input field label
				'content_style', //unique id
				[
					'label' => __( 'Style', 'hexa' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);

			$this->add_control( //input fields
				'color',
				[
					'label' => __( 'Description', 'hexa' ),
					'type' => Controls_Manager::TEXTAREA,
					'input_type' => 'textarea',
					'placeholder' => __( 'Write about you', 'hexa' ),
				]
			);

			$this->end_controls_section();
		//end start_controls_section

		}//end function _register_controls

		protected function _content_template() {
			?>
			<h2 align="{{{ settings.alignment }}}">
				{{{settings.name}}}
			</h2>
			<div>{{{settings.item_description}}}</div>

			<# _.each( settings.gallery, function( image ) { #>
				<img height="{{{ settings.price }}}px" width="{{{ settings.price }}}px" src="{{ image.url }}">
			<# }); #>

			<?php
		}



	}//end class Widget_Base

	Plugin::instance()->widgets_manager->register_widget_type(new FirstWidget);
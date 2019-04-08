<?php
	//Custom widgets
	class hexa_author_widget extends WP_Widget {

		public function __construct(){
			parent::__construct(
				'hexa_author_widget',
				esc_html__('Hexa Author', 'hexa'),
				array(
					'description' => esc_html__('Sidebar Author Info', 'hexa')
				)
			);
		}//end construct

		//back end form fucntion
		public function form($instance){ 
			$title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'hexa');

			?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
					<?php echo esc_html__('Title', 'hexa'); ?>
				</label>
				<input 
					type="text"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('title')); ?>"
					value="<?php echo esc_attr($title); ?>" 
					>
			</p>

		<?php 
		}//end form function


		//function widget to show the Value in fornt end
		public function widget($args, $instance){
			$title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'hexa');

			echo $args['before_widget'];

			echo $args['before_title'] . $title . $args['after_title'];
			echo '<div class="text-center">' . get_avatar(get_the_author_meta('ID')) . '</div>';
			echo '<h3 class="text-center">' . get_the_author_meta('display_name') . '</h3>';
			echo get_the_author_meta('description');


			echo $args['after_widget'];
		}//end widget function

		//function update
		public function update($new_instance, $old_instance){
			$instance = [];
			$instance['title'] = !empty($new_instance['title']) ? $new_instance['title'] : '';

			return $instance;

		}//edn update function

	}//end class

	//register the custom widget
	register_widget('hexa_author_widget');

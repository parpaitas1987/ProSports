<?php
class SP_Widget_Staff extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_staff widget_sp_staff', 'description' => __( 'Display a single staff member.', 'prosports' ) );
		parent::__construct('sp_staff', __( 'Staff', 'prosports' ) . ' (' . __( 'ProSports', 'prosports' ) . ')', $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? null : $instance['title'], $instance, $this->id_base);
		$id = empty($instance['id']) ? null : $instance['id'];
		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title;

		// Action to hook into
		do_action( 'prosports_before_widget_template', $args, $instance, 'staff' );

		sp_get_template( 'staff-photo.php', array( 'id' => $id ) );
		sp_get_template( 'staff-details.php', array( 'id' => $id ) );

		// Action to hook into
		do_action( 'prosports_after_widget_template', $args, $instance, 'staff' );

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['id'] = intval($new_instance['id']);

		// Filter to hook into
		$instance = apply_filters( 'prosports_widget_update', $instance, $new_instance, $old_instance, 'staff' );

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'id' => '' ) );
		$title = strip_tags($instance['title']);
		$id = intval($instance['id']);

		// Action to hook into
		do_action( 'prosports_before_widget_template_form', $this, $instance, 'staff' );
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'prosports' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('id'); ?>"><?php printf( __( 'Select %s:', 'prosports' ), __( 'Staff', 'prosports' ) ); ?></label>
		<?php
		$args = array(
			'post_type' => 'sp_staff',
			'name' => $this->get_field_name('id'),
			'id' => $this->get_field_id('id'),
			'selected' => $id,
			'values' => 'ID',
			'class' => 'widefat',
		);
		if ( ! sp_dropdown_pages( $args ) ):
			sp_post_adder( 'sp_staff', __( 'Add New', 'prosports' ) );
		endif;
		?>
		</p>

		<?php
		// Action to hook into
		do_action( 'prosports_after_widget_template_form', $this, $instance, 'staff' );
	}
}

register_widget( 'SP_Widget_Staff' );

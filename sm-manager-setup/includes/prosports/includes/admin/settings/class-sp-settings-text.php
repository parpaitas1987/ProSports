<?php
/**
 * ProSports Text Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Text' ) ) :

/**
 * SP_Settings_Text
 */
class SP_Settings_Text extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'text';
		$this->label = __( 'Text', 'prosports' );

		//add_filter( 'prosports_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );
		add_action( 'prosports_settings_' . $this->id, array( $this, 'output' ) );
		add_action( 'prosports_settings_save_' . $this->id, array( $this, 'save' ) );
	}

	/**
	 * Get settings array
	 *
	 * @return array
	 */
	public function get_settings() {

		$settings = array(

			array( 'title' => __( 'Text', 'prosports' ), 'type' => 'title', 'desc' => __( 'The following options affect how words are displayed on the frontend.', 'prosports' ), 'id' => 'text_options' ),

		);

		$strings = sp_get_text_options();
		$options = get_option( 'prosports_text' );

		foreach ( $strings as $string ):
			$settings[] = array(
				'title' 		=> $string,
				'id' 			=> 'prosports_text[' . $string . ']',
				'default' 		=> '',
				'placeholder' 	=> $string,
				'value' 		=> sp_array_value( $options, $string, null ),
				'type' 			=> 'text',
			);
		endforeach;

		$settings[] = array( 'type' => 'sectionend', 'id' => 'text_options' );

		return apply_filters( 'prosports_text_settings', $settings ); // End event settings
	}

	/**
	 * Save settings
	 */
	public function save() {
		if ( isset( $_POST['prosports_text'] ) )
	    	update_option( 'prosports_text', $_POST['prosports_text'] );
	}
}

endif;

return new SP_Settings_Text();

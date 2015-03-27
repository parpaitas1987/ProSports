<?php
/**
 * ProSports Staff Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Staff' ) ) :

/**
 * SP_Settings_Staff
 */
class SP_Settings_Staff extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'staff';
		$this->label = __( 'Staff', 'prosports' );

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

		return apply_filters( 'prosports_staff_settings', array(

			array(	'title' => __( 'Staff Options', 'prosports' ), 'type' => 'title','desc' => '', 'id' => 'staff_options' ),

			array(
				'title'     => __( 'Link', 'prosports' ),
				'desc' 		=> __( 'Link staff', 'prosports' ),
				'id' 		=> 'prosports_link_staff',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Templates', 'prosports' ),
				'desc' 		=> __( 'Photo', 'prosports' ),
				'id' 		=> 'prosports_staff_show_photo',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'start',
			),

			array(
				'desc' 		=> __( 'Details', 'prosports' ),
				'id' 		=> 'prosports_staff_show_details',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'end',
			),

			array(
				'title'     => __( 'Nationality', 'prosports' ),
				'desc' 		=> __( 'Display national flags', 'prosports' ),
				'id' 		=> 'prosports_staff_show_flags',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array( 'type' => 'sectionend', 'id' => 'staff_options' ),

		)); // End staff settings
	}
}

endif;

return new SP_Settings_Staff();

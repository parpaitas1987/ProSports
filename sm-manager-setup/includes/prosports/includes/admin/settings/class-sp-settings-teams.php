<?php
/**
 * ProSports Team Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Teams' ) ) :

/**
 * SP_Settings_Teams
 */
class SP_Settings_Teams extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'teams';
		$this->label = __( 'Teams', 'prosports' );

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

		return apply_filters( 'prosports_team_settings', array(

			array(	'title' => __( 'Team Options', 'prosports' ), 'type' => 'title','desc' => '', 'id' => 'team_options' ),

			array(
				'title'     => __( 'Link', 'prosports' ),
				'desc' 		=> __( 'Link teams', 'prosports' ),
				'id' 		=> 'prosports_link_teams',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Templates', 'prosports' ),
				'desc' 		=> __( 'Logo', 'prosports' ),
				'id' 		=> 'prosports_team_show_logo',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'start',
			),

			array(
				'desc' 		=> __( 'Details', 'prosports' ),
				'id' 		=> 'prosports_team_show_details',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Visit Site', 'prosports' ),
				'id' 		=> 'prosports_team_show_link',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'end',
			),

			array(
				'title'     => __( 'Venue', 'prosports' ),
				'desc' 		=> __( 'Link venues', 'prosports' ),
				'id' 		=> 'prosports_team_link_venues',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Abbreviation', 'prosports' ),
				'desc' 		=> __( 'Abbreviate team names', 'prosports' ),
				'id' 		=> 'prosports_abbreviate_teams',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Visit Site', 'prosports' ),
				'desc' 		=> __( 'Open link in a new window/tab', 'prosports' ),
				'id' 		=> 'prosports_team_site_target_blank',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array( 'type' => 'sectionend', 'id' => 'team_options' ),

			array( 'title' => __( 'League Tables', 'prosports' ), 'type' => 'title', 'id' => 'table_options' ),

			array(
				'title'     => __( 'Teams', 'prosports' ),
				'desc' 		=> __( 'Display logos', 'prosports' ),
				'id' 		=> 'prosports_table_show_logos',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Pagination', 'prosports' ),
				'desc' 		=> __( 'Paginate', 'prosports' ),
				'id' 		=> 'prosports_table_paginated',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),
			
			array(
				'title' 	=> __( 'Limit', 'prosports' ),
				'id' 		=> 'prosports_table_rows',
				'class' 	=> 'small-text',
				'default'	=> '10',
				'desc' 		=> __( 'teams', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 1,
					'step' 	=> 1
				),
			),

			array( 'type' => 'sectionend', 'id' => 'table_options' ),

		)); // End team settings
	}
}

endif;

return new SP_Settings_Teams();

<?php
/**
 * ProSports Player Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Players' ) ) :

/**
 * SP_Settings_Players
 */
class SP_Settings_Players extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'players';
		$this->label = __( 'Players', 'prosports' );

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
			array(	'title' => __( 'Player Options', 'prosports' ), 'type' => 'title','desc' => '', 'id' => 'player_options' ),

			array(
				'title'     => __( 'Link', 'prosports' ),
				'desc' 		=> __( 'Link players', 'prosports' ),
				'id' 		=> 'prosports_link_players',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Templates', 'prosports' ),
				'desc' 		=> __( 'Photo', 'prosports' ),
				'id' 		=> 'prosports_player_show_photo',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'start',
			),

			array(
				'desc' 		=> __( 'Details', 'prosports' ),
				'id' 		=> 'prosports_player_show_details',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Career Total', 'prosports' ),
				'id' 		=> 'prosports_player_show_total',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'end',
			),

			array(
				'title'     => __( 'Nationality', 'prosports' ),
				'desc' 		=> __( 'Display national flags', 'prosports' ),
				'id' 		=> 'prosports_player_show_flags',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array( 'type' => 'sectionend', 'id' => 'player_options' ),

			array( 'title' => __( 'Player Lists', 'prosports' ), 'type' => 'title', 'id' => 'list_options' ),

			array(
				'title'     => __( 'Players', 'prosports' ),
				'desc' 		=> __( 'Display photos', 'prosports' ),
				'id' 		=> 'prosports_list_show_photos',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Pagination', 'prosports' ),
				'desc' 		=> __( 'Paginate', 'prosports' ),
				'id' 		=> 'prosports_list_paginated',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),
			
			array(
				'title' 	=> __( 'Limit', 'prosports' ),
				'id' 		=> 'prosports_list_rows',
				'class' 	=> 'small-text',
				'default'	=> '10',
				'desc' 		=> __( 'players', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 1,
					'step' 	=> 1
				),
			),

			array( 'type' => 'sectionend', 'id' => 'list_options' ),
		); // End player settings

		return apply_filters( 'prosports_player_settings', $settings );
	}
}

endif;

return new SP_Settings_Players();

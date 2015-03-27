<?php
/**
 * ProSports Event Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Events' ) ) :

/**
 * SP_Settings_Events
 */
class SP_Settings_Events extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'events';
		$this->label = __( 'Events', 'prosports' );

		//add_filter( 'prosports_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );
		add_action( 'prosports_settings_' . $this->id, array( $this, 'output' ) );
		add_action( 'prosports_admin_field_delimiter', array( $this, 'delimiter_setting' ) );
		add_action( 'prosports_settings_save_' . $this->id, array( $this, 'save' ) );
	}

	/**
	 * Get settings array
	 *
	 * @return array
	 */
	public function get_settings() {

		return apply_filters( 'prosports_event_settings', array(

			array( 'title' => __( 'Event Options', 'prosports' ), 'type' => 'title','desc' => '', 'id' => 'event_options' ),

			array(
				'title'     => __( 'Link', 'prosports' ),
				'desc' 		=> __( 'Link events', 'prosports' ),
				'id' 		=> 'prosports_link_events',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Templates', 'prosports' ),
				'desc' 		=> __( 'Logos', 'prosports' ),
				'id' 		=> 'prosports_event_show_logos',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'start',
			),

			array(
				'desc' 		=> __( 'Results', 'prosports' ),
				'id' 		=> 'prosports_event_show_results',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Details', 'prosports' ),
				'id' 		=> 'prosports_event_show_details',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Venue', 'prosports' ),
				'id' 		=> 'prosports_event_show_venue',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Players', 'prosports' ),
				'id' 		=> 'prosports_event_show_players',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Staff', 'prosports' ),
				'id' 		=> 'prosports_event_show_staff',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'	=> '',
			),

			array(
				'desc' 		=> __( 'Total', 'prosports' ),
				'id' 		=> 'prosports_event_show_total',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'end',
			),
			
			array(
				'title' 	=> __( 'Limit', 'prosports' ),
				'id' 		=> 'prosports_event_teams',
				'class' 	=> 'small-text',
				'default'	=> '2',
				'desc' 		=> __( 'teams', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 1,
					'step' 	=> 1
				),
			),
			
			array( 'type' => 'delimiter' ),

			array(
				'title' 	=> __( 'Player Performance', 'prosports' ),
				'id' 		=> 'prosports_event_performance_mode',
				'default'	=> 'values',
				'type' 		=> 'radio',
				'options' => array(
					'values'	=> __( 'Values', 'prosports' ),
					'icons'		=> __( 'Icons', 'prosports' ),
				),
			),

			array(
				'title'     => __( 'Venues', 'prosports' ),
				'desc' 		=> __( 'Display maps', 'prosports' ),
				'id' 		=> 'prosports_event_show_maps',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
				'checkboxgroup'	=> 'start',
			),

			array(
				'desc' 		=> __( 'Link venues', 'prosports' ),
				'id' 		=> 'prosports_link_venues',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'	=> 'end',
			),
			
			array(
				'title' 	=> __( 'Full Time', 'prosports' ),
				'id' 		=> 'prosports_event_minutes',
				'class' 	=> 'small-text',
				'default'	=> '90',
				'desc' 		=> __( 'mins', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 0,
					'step' 	=> 1
				),
			),

			array(
				'title'     => __( 'Comments', 'prosports' ),
				'desc' 		=> __( 'Allow people to post comments on new articles', 'prosports' ),
				'id' 		=> 'prosports_event_comment_status',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array( 'type' => 'sectionend', 'id' => 'event_options' ),

			array( 'title' => __( 'Event List', 'prosports' ), 'type' => 'title', 'id' => 'event_list_options' ),

			array(
				'title'     => __( 'Teams', 'prosports' ),
				'desc' 		=> __( 'Display logos', 'prosports' ),
				'id' 		=> 'prosports_event_list_show_logos',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
			),

			array(
				'title'     => __( 'Title Format', 'prosports' ),
				'id'        => 'prosports_event_list_title_format',
				'default'   => 'title',
				'type'      => 'select',
				'options'   => array(
					'title' => __( 'Title', 'prosports' ),
					'teams' => __( 'Teams', 'prosports' ),
					'homeaway' => sprintf( '%s | %s', __( 'Home', 'prosports' ), __( 'Away', 'prosports' ) ),
				),
			),

			array(
				'title'     => __( 'Time/Results Format', 'prosports' ),
				'id'        => 'prosports_event_list_time_format',
				'default'   => 'combined',
				'type'      => 'select',
				'options'   => array(
					'combined' => __( 'Combined', 'prosports' ),
					'separate' => __( 'Separate', 'prosports' ),
					'time' => __( 'Time Only', 'prosports' ),
					'results' => __( 'Results Only', 'prosports' ),
				),
			),

			array(
				'title'     => __( 'Pagination', 'prosports' ),
				'desc' 		=> __( 'Paginate', 'prosports' ),
				'id' 		=> 'prosports_event_list_paginated',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),
			
			array(
				'title' 	=> __( 'Limit', 'prosports' ),
				'id' 		=> 'prosports_event_list_rows',
				'class' 	=> 'small-text',
				'default'	=> '10',
				'desc' 		=> __( 'events', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 1,
					'step' 	=> 1
				),
			),

			array( 'type' => 'sectionend', 'id' => 'event_list_options' ),

			array( 'title' => __( 'Event Blocks', 'prosports' ), 'type' => 'title', 'id' => 'event_blocks_options' ),

			array(
				'title'     => __( 'Details', 'prosports' ),
				'desc' 		=> __( 'Display competition', 'prosports' ),
				'id' 		=> 'prosports_event_blocks_show_league',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'	=> 'start',
			),

			array(
				'desc' 		=> __( 'Display season', 'prosports' ),
				'id' 		=> 'prosports_event_blocks_show_season',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> '',
			),

			array(
				'desc' 		=> __( 'Display venue', 'prosports' ),
				'id' 		=> 'prosports_event_blocks_show_venue',
				'default'	=> 'no',
				'type' 		=> 'checkbox',
				'checkboxgroup'		=> 'end',
			),

			array(
				'title'     => __( 'Pagination', 'prosports' ),
				'desc' 		=> __( 'Paginate', 'prosports' ),
				'id' 		=> 'prosports_event_blocks_paginated',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),
			
			array(
				'title' 	=> __( 'Limit', 'prosports' ),
				'id' 		=> 'prosports_event_blocks_rows',
				'class' 	=> 'small-text',
				'default'	=> '10',
				'desc' 		=> __( 'events', 'prosports' ),
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 1,
					'step' 	=> 1
				),
			),

			array( 'type' => 'sectionend', 'id' => 'event_list_options' ),

		)); // End event settings
	}

	/**
	 * Save settings
	 */
	public function save() {
		$settings = $this->get_settings();
		SP_Admin_Settings::save_fields( $settings );
		
		if ( isset( $_POST['prosports_event_teams_delimiter'] ) )
	    	update_option( 'prosports_event_teams_delimiter', $_POST['prosports_event_teams_delimiter'] );
	}

	/**
	 * Delimiter settings
	 *
	 * @access public
	 * @return void
	 */
	public function delimiter_setting() {
		$selection = get_option( 'prosports_event_teams_delimiter', 'vs' );
		$limit = get_option( 'prosports_event_teams', 2 );
		$example = str_repeat( __( 'Team', 'prosports' ) . ' %1$s ', $limit );
		$example = rtrim( $example, ' %1$s ' );
		?>
		<tr valign="top">
			<th scope="row" class="titledesc">
				<?php _e( 'Delimiter', 'prosports' ); ?>
			</th>
		    <td class="forminp">
				<fieldset class="sp-custom-input-wrapper">
					<legend class="screen-reader-text"><span><?php _e( 'Delimiter', 'prosports' ); ?></span></legend>
					<?php $delimiters = array( 'vs', 'v', '&mdash;', '/' ); ?>
					<?php foreach ( $delimiters as $delimiter ): ?>
						<label title="<?php echo $delimiter; ?>"><input type="radio" class="preset" name="prosports_event_teams_delimiter_preset" value="<?php echo $delimiter; ?>" data-example="<?php printf( $example, $delimiter ); ?>" <?php checked( $delimiter, $selection ); ?>> <span><?php printf( $example, $delimiter ); ?></span></label><br>
					<?php endforeach; ?>
					<label><input type="radio" class="preset" name="prosports_event_teams_delimiter_preset" value="\c\u\s\t\o\m" <?php checked( false, in_array( $selection, $delimiters ) ); ?>> <?php _e( 'Custom:', 'prosports' ); ?> </label><input type="text" class="small-text value" name="prosports_event_teams_delimiter" value="<?php echo $selection; ?>" data-example-format="<?php printf( $example, '__val__' ); ?>">
					<span class="example"><?php printf( $example, $selection ); ?></span>
				</fieldset>
			</td>
		</tr>
		<?php
	}
}

endif;

return new SP_Settings_Events();

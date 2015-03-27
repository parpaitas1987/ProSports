<?php
/**
 * ProSports League Menu Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports League Menu
 * @version     1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_League_Menu' ) ) :

/**
 * SP_Settings_League_Menu
 */
class SP_Settings_League_Menu extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'league-menu';
		$this->label = __( 'League Menu', 'prosports' );

		add_filter( 'prosports_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );
		add_action( 'prosports_settings_' . $this->id, array( $this, 'output' ) );
		add_action( 'prosports_admin_field_league_menu_logo', array( $this, 'logo_setting' ) );
		add_action( 'prosports_admin_field_league_menu_teams', array( $this, 'teams_setting' ) );
		add_action( 'prosports_admin_field_league_menu_team_size', array( $this, 'team_size_setting' ) );
		add_action( 'prosports_settings_save_' . $this->id, array( $this, 'save' ) );
	}

	/**
	 * Get settings array
	 *
	 * @return array
	 */
	public function get_settings() {

		return apply_filters( 'prosports_league_menu_settings', array(

			array( 'title' => __( 'League Menu', 'prosports' ), 'type' => 'title', 'desc' => '', 'id' => 'league_menu_options' ),

			array(
				'title' => __( 'Title', 'prosports' ),
				'id' => 'prosports_league_menu_title',
				'default' => '',
				'type' => 'text',
			),

			array( 'type' => 'league_menu_logo' ),

			array( 'type' => 'league_menu_teams' ),

			array(
				'title' 	=> __( 'Sort by', 'prosports' ),
				'id' 		=> 'prosports_league_menu_teams_orderby',
				'default'	=> 'title',
				'type' 		=> 'select',
				'options'	=> array(
					'menu_order' 	=> __( 'Menu Order', 'prosports' ),
					'title' 		=> __( 'Name', 'prosports' ),
					'rand' 			=> __( 'Random', 'prosports' ),
				),
			),

			array(
				'title' 	=> __( 'Sort Order', 'prosports' ),
				'id' 		=> 'prosports_league_menu_teams_order',
				'default'	=> 'ASC',
				'type' 		=> 'select',
				'options'	=> array(
					'ASC' 			=> __( 'Ascending', 'prosports' ),
					'DESC' 			=> __( 'Descending', 'prosports' ),
				),
			),
			
			array(
				'title' 	=> __( 'Width', 'prosports' ),
				'id' 		=> 'prosports_league_menu_width',
				'class' 	=> 'small-text',
				'default'	=> '970',
				'placeholder' => '970',
				'desc' 		=> 'px',
				'type' 		=> 'number',
				'custom_attributes' => array(
					'min' 	=> 0,
					'step' 	=> 1
				),
			),

			array( 'type' => 'league_menu_team_size' ),

			array(
				'title' => __( 'Text Color', 'prosports' ),
				'id' 		=> 'prosports_league_menu_css_text',
				'type' 		=> 'color',
				'css' 		=> 'width:6em;',
				'default'	=> '#ffffff',
				'autoload'  => false
			),

			array(
				'title' => __( 'Background Color', 'prosports' ),
				'id' 		=> 'prosports_league_menu_css_background',
				'type' 		=> 'color',
				'css' 		=> 'width:6em;',
				'default'	=> '#000000',
				'autoload'  => false
			),

			array(
				'title' 	=> __( 'Align', 'prosports' ),
				'id' 		=> 'prosports_league_menu_align',
				'default'	=> 'center',
				'type' 		=> 'radio',
				'options' => array(
					'left'		=> __( 'Left', 'prosports' ),
					'center'	=> __( 'Center', 'prosports' ),
					'right'		=> __( 'Right', 'prosports' ),
				),
			),

			array( 'type' => 'sectionend', 'id' => 'league_menu_options' ),

		)); // End league menu settings
	}

	/**
	 * Save settings
	 */
	public function save() {
		$settings = $this->get_settings();
		SP_Admin_Settings::save_fields( $settings );
		
		if ( isset( $_POST['prosports_league_menu_teams'] ) ) {
	    	$teams = $_POST['prosports_league_menu_teams'];
	    } else {
	    	$teams = array();
	    }
	    update_option( 'prosports_league_menu_teams', $teams );

		if ( isset( $_POST['sp_league_menu_logo_removed'] ) ) {
			delete_option( 'prosports_league_menu_logo' );
		}

	    update_option( 'prosports_league_menu_logo_width', sp_array_value( $_POST, 'prosports_league_menu_logo_width', 64 ) );
	    update_option( 'prosports_league_menu_logo_height', sp_array_value( $_POST, 'prosports_league_menu_logo_height', 32 ) );

	    update_option( 'prosports_league_menu_logo_bottom', sp_array_value( $_POST, 'prosports_league_menu_logo_bottom', 0 ) );
	    update_option( 'prosports_league_menu_logo_left', sp_array_value( $_POST, 'prosports_league_menu_logo_left', 0 ) );

	    update_option( 'prosports_league_menu_team_width', sp_array_value( $_POST, 'prosports_league_menu_team_width', 32 ) );
	    update_option( 'prosports_league_menu_team_height', sp_array_value( $_POST, 'prosports_league_menu_team_height', 32 ) );
	}

	/**
	 * League menu logo settings
	 *
	 * @access public
	 * @return void
	 */
	public function logo_setting() {
		if ( ! isset( $_REQUEST['prosports_league_menu_title'] ) && isset( $_REQUEST['file'] ) ) {
		    check_admin_referer( 'sp_league_menu_logo' );
		    update_option( 'prosports_league_menu_logo', absint( $_REQUEST['file'] ) );
		}

		$modal_update_href = esc_url( add_query_arg( array(
		    'page' => 'prosports',
		    'tab' => 'league-menu',
		    '_wpnonce' => wp_create_nonce( 'sp_league_menu_logo' ),
		), admin_url( 'admin.php' ) ) );
		$logo = get_option( 'prosports_league_menu_logo', null );
		$width = (int) get_option( 'prosports_league_menu_logo_width', 64 );
		$height = (int) get_option( 'prosports_league_menu_logo_height', 32 );
		$bottom = (int) get_option( 'prosports_league_menu_logo_bottom', 0 );
		$left = (int) get_option( 'prosports_league_menu_logo_left', 0 );
    	?>
		<?php if ( ! empty( $logo ) ): ?>
			<tr valign="top" class="sp-league-menu-logo-options">
				<th scope="row" class="titledesc"><?php _e( 'Logo', 'prosports' ); ?></th>
	            <td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Logo', 'prosports' ); ?></span></legend>
						<?php echo wp_get_attachment_image( $logo, 'prosports-fit-medium', false, array( 'style' => 'max-width:' . $width . 'px; max-height:' . $height . 'px;' ) ); ?>
					</fieldset>
					<fieldset>
						<label for="prosports_league_menu_logo_width"><?php _e( 'Max Width', 'prosports' ); ?></label>
						<input name="prosports_league_menu_logo_width" type="number" step="1" min="0" id="prosports_league_menu_logo_width" value="<?php echo $width; ?>" class="small-text">
						<label for="prosports_league_menu_logo_height"><?php _e( 'Max Height', 'prosports' ); ?></label>
						<input name="prosports_league_menu_logo_height" type="number" step="1" min="0" id="prosports_league_menu_logo_height" value="<?php echo $height; ?>" class="small-text">
					</fieldset>
				</td>
			</tr>
			<tr valign="top" class="sp-league-menu-logo-options">
				<th scope="row" class="titledesc"><?php _e( 'Position', 'prosports' ); ?></th>
	            <td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Position', 'prosports' ); ?></span></legend>
						<label for="prosports_league_menu_logo_bottom"><?php _e( 'Bottom', 'prosports' ); ?></label>
						<input name="prosports_league_menu_logo_bottom" type="number" step="1" id="prosports_league_menu_logo_bottom" value="<?php echo $bottom; ?>" class="small-text">
						<label for="prosports_league_menu_logo_left"><?php _e( 'Left', 'prosports' ); ?></label>
						<input name="prosports_league_menu_logo_left" type="number" step="1" id="prosports_league_menu_logo_left" value="<?php echo $left; ?>" class="small-text">
					</fieldset>
				</td>
			</tr>
			<tr valign="top" class="sp-league-menu-logo-options">
				<th scope="row" class="titledesc"><?php _e( 'Remove Image', 'prosports' ); ?></th>
	            <td class="forminp">
					<fieldset>
						<legend class="screen-reader-text"><span><?php _e( 'Remove Image', 'prosports' ); ?></span></legend>
						<input type="button" name="remove_sp_league_menu_logo" id="remove_sp_league_menu_logo" class="button" value="<?php _e( 'Remove logo', 'prosports' ); ?>">
					</fieldset>
				</td>
			</tr>
		<?php endif; ?>
		<tr valign="top">
			<th scope="row" class="titledesc"><?php _e( 'Select Image', 'prosports' ); ?></th>
            <td class="forminp">
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e( 'Select Image', 'prosports' ); ?></span></legend>
					<a id="choose-from-library-link" href="#" class="button" data-choose="<?php _e( 'Select Logo', 'prosports' ); ?>" data-update="<?php _e( 'Select Logo', 'prosports' ); ?>" data-update-link="<?php echo esc_attr( $modal_update_href ); ?>"><?php _e( 'Add logo', 'prosports' ); ?></a>
				</fieldset>
       		</td>
       	</tr>
       	<?php
	}

	/**
	 * Teams selector
	 *
	 * @access public
	 * @return void
	 */
	public function teams_setting() {
		$orderby = get_option( 'prosports_league_menu_teams_orderby', 'title' );
		$order = get_option( 'prosports_league_menu_teams_order', 'ASC' );

		$args = array(
			'post_type' => 'sp_team',
			'numposts' => -1,
			'posts_per_page' => -1,
			'orderby' => $orderby,
			'order' => $order,
		);
		$teams = get_posts( $args );

		$team_options = array();
		foreach ( $teams as $team ):
			$team_options[ $team->ID ] = $team->post_title;
		endforeach;

		$selected = get_option( 'prosports_league_menu_teams', null );
		?>
		<tr valign="top">
			<th scope="row" class="titledesc"><?php _e( 'Teams', 'prosports' ); ?></th>
            <td class="forminp">
				<legend class="screen-reader-text"><span><?php _e( 'Teams', 'prosports' ); ?></span></legend>
				<fieldset class="sp-prefs">
					<?php foreach ( $team_options as $key => $value ): ?>
						<label class="button"><input name="prosports_league_menu_teams[]" type="checkbox" value="<?php echo $key; ?>" <?php checked( ! is_array( $selected ) || in_array( $key, $selected ) ); ?>><?php echo $value; ?></label>
					<?php endforeach; ?>
				</fieldset>
       		</td>
       	</tr>
		<?php
	}

	/**
	 * League menu team size settings
	 *
	 * @access public
	 * @return void
	 */
	public function team_size_setting() {
		$width = (int) get_option( 'prosports_league_menu_team_width', 32 );
		$height = (int) get_option( 'prosports_league_menu_team_height', 32 );
    	?>
		<tr valign="top">
			<th scope="row" class="titledesc"><?php _e( 'Teams', 'prosports' ); ?></th>
            <td class="forminp">
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e( 'Teams', 'prosports' ); ?></span></legend>
					<label for="prosports_league_menu_team_width"><?php _e( 'Max Width', 'prosports' ); ?></label>
					<input name="prosports_league_menu_team_width" type="number" step="1" min="0" id="prosports_league_menu_team_width" value="<?php echo $width; ?>" class="small-text">
					<label for="prosports_league_menu_team_height"><?php _e( 'Max Height', 'prosports' ); ?></label>
					<input name="prosports_league_menu_team_height" type="number" step="1" min="0" id="prosports_league_menu_team_height" value="<?php echo $height; ?>" class="small-text">
				</fieldset>
       		</td>
       	</tr>
       	<?php
	}
}

endif;

return new SP_Settings_League_Menu();

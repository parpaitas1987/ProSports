<?php
/**
 * ProSports Branding Settings
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports_Branding
 * @version     1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Settings_Branding' ) ) :

/**
 * SP_Settings_Branding
 */
class SP_Settings_Branding extends SP_Settings_Page {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->id    = 'branding';
		$this->label = __( 'Branding', 'prosports' );

		if ( current_user_can( 'manage_options' ) ):
			/* add_filter( 'prosports_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );
			add_action( 'prosports_settings_' . $this->id, array( $this, 'output' ) );
			add_action( 'prosports_admin_field_branding_icon', array( $this, 'icon_setting' ) );
			add_action( 'prosports_admin_field_branding_colors', array( $this, 'colors_setting' ) );
			add_action( 'prosports_settings_save_' . $this->id, array( $this, 'save' ) ); */
		endif;
	}

	/**
	 * Get settings array
	 *
	 * @return array
	 */
	public function get_settings() {
		return apply_filters( 'prosports_branding_settings', array(

			array( 'title' => __( 'Branding', 'prosports' ), 'type' => 'title', 'desc' => '', 'id' => 'branding_options' ),

			array(
				'title' => __( 'Label', 'prosports' ),
				'id' => 'prosports_branding_label',
				'default' => '',
				'placeholder' => __( 'ProSports', 'prosports' ),
				'type' => 'text',
			),

			array( 'type' => 'branding_icon' ),

			array( 'type' => 'branding_colors' ),

			array( 'type' => 'sectionend', 'id' => 'branding_options' ),

		)); // End branding settings
	}

	/**
	 * Save settings
	 */
	public function save() {
		$settings = $this->get_settings();
		SP_Admin_Settings::save_fields( $settings );

		if ( isset( $_POST['sp_branding_icon_removed'] ) ) {
			delete_option( 'prosports_branding_icon' );
		}

	    update_option( 'prosports_enable_branding_css', isset( $_POST['prosports_enable_branding_css'] ) ? 'yes' : 'no' );

		if ( isset( $_POST['prosports_branding_css_base'] ) ) {

			// Save settings
			$base 			= ( ! empty( $_POST['prosports_branding_css_base'] ) ) ? sp_format_hex( $_POST['prosports_branding_css_base'] ) : '';
			$highlight 		= ( ! empty( $_POST['prosports_branding_css_highlight'] ) ) ? sp_format_hex( $_POST['prosports_branding_css_highlight'] ) : '';
			$notifications 	= ( ! empty( $_POST['prosports_branding_css_notifications'] ) ) ? sp_format_hex( $_POST['prosports_branding_css_notifications'] ) : '';
			$actions 		= ( ! empty( $_POST['prosports_branding_css_actions'] ) ) ? sp_format_hex( $_POST['prosports_branding_css_actions'] ) : '';
			$text 			= ( ! empty( $_POST['prosports_branding_css_text'] ) ) ? sp_format_hex( $_POST['prosports_branding_css_text'] ) : '';

			$colors = array(
				'base' 			=> $base,
				'highlight' 	=> $highlight,
				'notifications' => $notifications,
				'actions' 		=> $actions,
				'text' 			=> $text,
			);

			update_option( 'prosports_branding_css_colors', $colors );
		}
	}

	/**
	 * Branding icon settings
	 *
	 * @access public
	 * @return void
	 */
	public function icon_setting() {
		if ( ! isset( $_REQUEST['prosports_branding_label'] ) && isset( $_REQUEST['file'] ) ) {
		    check_admin_referer( 'sp_branding_icon' );
		    update_option( 'prosports_branding_icon', absint( $_REQUEST['file'] ) );
		}

		$modal_update_href = esc_url( add_query_arg( array(
		    'page' => 'prosports',
		    'tab' => 'branding',
		    '_wpnonce' => wp_create_nonce( 'sp_branding_icon' ),
		), admin_url( 'admin.php' ) ) );
		$logo = get_option( 'prosports_branding_icon', null );
    	?>
		<tr valign="top" class="sp-branding-icon-options">
			<th scope="row" class="titledesc"><?php _e( 'Icon', 'prosports' ); ?></th>
            <td class="forminp">
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e( 'Icon', 'prosports' ); ?></span></legend>
					<?php if ( ! empty( $logo ) ): ?>
						<?php echo wp_get_attachment_image( $logo, 'prosports-fit-mini', false ); ?>
						<legend class="screen-reader-text"><span><?php printf( __( 'Remove %s', 'prosports' ), __( 'Icon', 'prosports' ) ); ?></span></legend>
						<input type="button" name="remove_sp_branding_icon" id="remove_sp_branding_icon" class="button" value="<?php printf( __( 'Remove %s', 'prosports' ), __( 'Icon', 'prosports' ) ); ?>">
					<?php endif; ?>
					<a id="choose-from-library-link" href="#" class="button" data-choose="<?php printf( __( 'Select %s', 'prosports' ), __( 'Icon', 'prosports' ) ); ?>" data-update="<?php printf( __( 'Select %s', 'prosports' ), __( 'Icon', 'prosports' ) ); ?>" data-update-link="<?php echo esc_attr( $modal_update_href ); ?>"><?php printf( __( 'Select %s', 'prosports' ), __( 'Icon', 'prosports' ) ); ?></a>
				</fieldset>
       		</td>
       	</tr>
       	<?php
	}

	/**
	 * Output the admin color scheme settings.
	 *
	 * @access public
	 * @return void
	 */
	public function colors_setting() {
		?><tr valign="top" class="prosports_branding_colors">
			<th scope="row" class="titledesc">
				<?php _e( 'Admin Color Scheme', 'prosports' ); ?>
			</th>
		    <td class="forminp"><?php

				// Get settings
				$colors = array_map( 'esc_attr', (array) get_option( 'prosports_branding_css_colors', array() ) );

				// Defaults
				if ( empty( $colors['base'] ) ) $colors['base'] = '#222222';
				if ( empty( $colors['highlight'] ) ) $colors['highlight'] = '#0074a2';
				if ( empty( $colors['notifications'] ) ) $colors['notifications'] = '#d54e21';
				if ( empty( $colors['actions'] ) ) $colors['actions'] = '#2ea2cc';
				if ( empty( $colors['text'] ) ) $colors['text'] = '#ffffff';

				// Show inputs
	    		$this->color_picker( __( 'Base Color', 'prosports' ), 'prosports_branding_css_base', $colors['base'] );
	    		$this->color_picker( __( 'Highlight', 'prosports' ), 'prosports_branding_css_highlight', $colors['highlight'] );
	    		$this->color_picker( __( 'Notifications', 'prosports' ), 'prosports_branding_css_notifications', $colors['notifications'] );
	    		$this->color_picker( __( 'Actions', 'prosports' ), 'prosports_branding_css_actions', $colors['actions'] );
	    		$this->color_picker( __( 'Text', 'prosports' ), 'prosports_branding_css_text', $colors['text'] );

			    ?><br>
			    <label for="prosports_enable_branding_css">
					<input name="prosports_enable_branding_css" id="prosports_enable_branding_css" type="checkbox" value="1" <?php checked( get_option( 'prosports_enable_branding_css', 'no' ), 'yes' ); ?>>
					<?php _e( 'Enable', 'prosports' ); ?>
				</label>
			</td>
		</tr><?php
	}

	/**
	 * Output a colour picker input box.
	 *
	 * @access public
	 * @param mixed $name
	 * @param mixed $id
	 * @param mixed $value
	 * @return void
	 */
	function color_picker( $name, $id, $value ) {
		echo '<div class="sp-color-box"><strong>' . esc_html( $name ) . '</strong>
	   		<input name="' . esc_attr( $id ). '" id="' . esc_attr( $id ) . '" type="text" value="' . esc_attr( $value ) . '" class="colorpick" /> <div id="colorPickerDiv_' . esc_attr( $id ) . '" class="colorpickdiv"></div>
	    </div>';
	}
}

endif;

return new SP_Settings_Branding();

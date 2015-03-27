<?php
/**
 * Welcome Page Class
 *
 * Shows a feature overview for the new version (major) and credits.
 *
 * Adapted from code in EDD (Copyright (c) 2012, Pippin Williamson) and WP.
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.5
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Admin_Welcome class.
 */
class SP_Admin_Welcome {

	private $plugin;

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		$this->plugin             = 'prosports/prosports.php';

		add_action( 'admin_menu', array( $this, 'admin_menus') );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_init', array( $this, 'welcome'    ) );
	}

	/**
	 * Add admin menus/screens
	 *
	 * @access public
	 * @return void
	 */
	public function admin_menus() {
		if ( empty( $_GET['page'] ) ) {
			return;
		}

		$welcome_page_name  = __( 'About ProSports', 'prosports' );
		$welcome_page_title = __( 'Welcome to ProSports', 'prosports' );

		switch ( $_GET['page'] ) {
			case 'sp-about' :
				$page = add_dashboard_page( $welcome_page_title, $welcome_page_name, 'manage_options', 'sp-about', array( $this, 'about_screen' ) );
				add_action( 'admin_print_styles-'. $page, array( $this, 'admin_css' ) );
			break;
			case 'sp-credits' :
				$page = add_dashboard_page( $welcome_page_title, $welcome_page_name, 'manage_options', 'sp-credits', array( $this, 'credits_screen' ) );
				add_action( 'admin_print_styles-'. $page, array( $this, 'admin_css' ) );
			break;
			case 'sp-translators' :
				$page = add_dashboard_page( $welcome_page_title, $welcome_page_name, 'manage_options', 'sp-translators', array( $this, 'translators_screen' ) );
				add_action( 'admin_print_styles-'. $page, array( $this, 'admin_css' ) );
			break;
		}
	}

	/**
	 * admin_css function.
	 *
	 * @access public
	 * @return void
	 */
	public function admin_css() {
		wp_enqueue_style( 'prosports-activation', plugins_url(  '/assets/css/activation.css', SP_PLUGIN_FILE ), array(), SP_VERSION );
	}

	/**
	 * Add styles just for this page, and remove dashboard page links.
	 *
	 * @access public
	 * @return void
	 */
	public function admin_head() {
		remove_submenu_page( 'index.php', 'sp-about' );
		remove_submenu_page( 'index.php', 'sp-credits' );
		remove_submenu_page( 'index.php', 'sp-translators' );

		// Badge for welcome page
		$badge_url = SP()->plugin_url() . '/assets/images/welcome/sp-badge.png';
		?>
		<style type="text/css">
			/*<![CDATA[*/
			.about-prosports-wrap .sp-about-text {
				min-height: 0;
			}
			.about-prosports-wrap .sp-badge {
				position: absolute;
				top: 0;
				right: 0;
				background: #00cac4 url(<?php echo $badge_url; ?>) no-repeat center top;
				text-rendering: optimizeLegibility;
				padding-top: 10px;
				height: 150px;
				width: 150px;
				font-size: 14px;
				line-height: 1.75;
				text-align: center;
				font-weight: 600;
				color: #c4fffc;
				margin: 5px 0 0 0;
				-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
				box-shadow: 0 1px 3px rgba(0,0,0,.2);
			}
			.about-prosports-wrap .prosports-actions .twitter-share-button {
				margin-top: -3px;
				margin-left: 3px;
				vertical-align: middle;
			}
			.about-prosports-wrap .sp-feature {
				overflow: visible !important;
				*zoom:1;
			}
			.about-prosports-wrap .sp-feature:before,
			.about-prosports-wrap .sp-feature:after {
				content: " ";
				display: table;
			}
			.about-prosports-wrap .sp-feature:after {
				clear: both;
			}
			.about-prosports-wrap div.icon {
				width: 0 !important;
				padding: 0;
				margin: 0;
			}
			.about-prosports-wrap .sp-feature div.icon:before {
				font-family: prosports !important;
				font-weight: normal;
				width: 100%;
				font-size: 170px;
				line-height: 125px;
				color: #9c5d90;
				display: inline-block;
				position: relative;
				text-align: center;
				speak: none;
				margin: <?php echo is_rtl() ? '0 -100px 0 0' : '0 0 0 -100px'; ?>;
				content: "\f111";
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			.about-prosports-wrap .form-table th {
				width: auto;
			}
			@media only screen and (max-width: 500px) {
				.about-prosports-wrap h1 {
					padding-top: 240px;
				}
			}
			/*]]>*/
		</style>
		<?php
	}

	/**
	 * Into text/links shown on all about pages.
	 *
	 * @access private
	 * @return void
	 */
	private function intro() {

		// Flush after upgrades
		if ( ! empty( $_GET['sp-updated'] ) || ! empty( $_GET['sp-installed'] ) )
			flush_rewrite_rules();

		// Drop minor version if 0
		$major_version = substr( SP()->version, 0, 3 );
		?>
		<h1><?php printf( __( 'Welcome to ProSports %s', 'prosports' ), $major_version ); ?></h1>

		<div class="about-text sp-about-text">
			Thanks for installing! ProSports 1.0 has lots of refinements we think you’ll love.
		</div>

		

		<p class="prosports-actions">
			<a href="#" class="button button-primary">Docs</a>
			
			
		</p>

		<h2 class="nav-tab-wrapper">
			<a class="nav-tab <?php if ( $_GET['page'] == 'sp-about' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'sp-about' ), 'index.php' ) ) ); ?>">
				<?php _e( 'Get Started', 'prosports' ); ?>
			</a><a class="nav-tab <?php if ( $_GET['page'] == 'sp-credits' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'sp-credits' ), 'index.php' ) ) ); ?>">
				<?php _e( 'Credits', 'prosports' ); ?>
			</a><a class="nav-tab <?php if ( $_GET['page'] == 'sp-translators' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'sp-translators' ), 'index.php' ) ) ); ?>">
				<?php _e( 'Translators', 'prosports' ); ?>
			</a>
		</h2>
		<?php
	}

	/**
	 * Output the about screen.
	 */
	public function about_screen() {
		include_once( 'class-sp-admin-settings.php' );
		$class = 'chosen-select' . ( is_rtl() ? ' chosen-rtl' : '' );
		?>
		<div class="wrap about-wrap about-prosports-wrap">

			<h1>Welcome to ProSports1.0</h1>
			<div class="about-text sp-about-text">
			Thanks for installing! ProSports 1.0 has lots of refinements we think you’ll love.
		</div>

			<?php
			// Save settings
	    	if ( isset( $_POST['timezone_string'] ) ):
	    		update_option( 'timezone_string', $_POST['timezone_string'] );
				update_option( 'prosports_basic_setup', 1 );
	    	endif;
			if ( isset( $_POST['prosports_sport'] ) && ! empty( $_POST['prosports_sport'] ) ):
				$sport = $_POST['prosports_sport'];
				SP_Admin_Sports::apply_preset( $sport );
				update_option( 'prosports_sport', $_POST['prosports_sport'] );
	    		update_option( '_prosports_needs_welcome', 1 );
				?>
				<div id="message" class="updated prosports-message">
					<p><strong><?php _e( 'Your settings have been saved.', 'prosports' ); ?></strong></p>
				</div>
			<?php
			endif;
			if ( isset( $_POST['add_sample_data'] ) ):
				SP_Admin_Sample_Data::delete_posts();
				SP_Admin_Sample_Data::insert_posts();
			endif;
			?>
			<div class="sp-feature feature-section col two-col">
				<div>
					<?php if ( get_option( 'prosports_basic_setup' ) ) { ?>
						<h4><?php _e( 'Sport', 'prosports' ); ?></h4>
						<?php
						$sport = get_option( 'prosports_sport' );
						$sport_options = SP_Admin_Sports::get_preset_options();
						foreach ( $sport_options as $options ):
							foreach ( $options as $slug => $name ):
								if ( $sport === $slug ):
									$sport = $name;
									break;
								endif;
							endforeach;
						endforeach;
						echo $sport;
						?>
						<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'prosports' ), 'admin.php' ) ) ); ?>"><div class="dashicons dashicons-edit"></div><?php _e( 'Change', 'prosports' ); ?></a>
						<h4><?php _e( 'Next Steps', 'prosports' ); ?></h4>
						<p><?php _e( 'We&#8217;ve assembled some links to get you started:', 'prosports' ); ?></p>
						<div class="prosports-steps">
							<ul>
								<li><a href="<?php echo esc_url( admin_url( add_query_arg( array( 'post_type' => 'sp_team' ), 'edit.php' ) ) ); ?>" class="welcome-icon sp-welcome-icon dashicons-shield-alt"><?php _e( 'Add New Team', 'prosports' ); ?></a></li>
								<li><a href="<?php echo esc_url( admin_url( add_query_arg( array( 'post_type' => 'sp_player' ), 'edit.php' ) ) ); ?>" class="welcome-icon sp-welcome-icon dashicons-groups"><?php _e( 'Add New Player', 'prosports' ); ?></a></li>
								<li><a href="<?php echo esc_url( admin_url( add_query_arg( array( 'post_type' => 'sp_event' ), 'edit.php' ) ) ); ?>" class="welcome-icon sp-welcome-icon dashicons-calendar"><?php _e( 'Add New Event', 'prosports' ); ?></a></li>
							</ul>
						</div>
						<div class="return-to-dashboard">
							<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'prosports' ), 'admin.php' ) ) ); ?>"><?php _e( 'Go to ProSports Settings', 'prosports' ); ?></a>
						</div>
					<?php } else { ?>
						<form method="post" id="mainform" action="" enctype="multipart/form-data">
							<h4><?php _e( 'Basic Setup', 'prosports' ); ?></h4>
							<p><?php _e( 'Select your timezone and sport to get started.', 'prosports' ); ?></p>
							<table class="form-table">
								<tbody>
									<tr valign="top">
										<th scope="row" class="titledesc">
											<label for="timezone_string"><?php _e( 'Timezone', 'prosports' ); ?></label>
										</th>
										<td>
											<select id="timezone_string" name="timezone_string" class="<?php echo $class; ?>">
												<?php
												$current_offset = get_option('gmt_offset');
												$tzstring = get_option('timezone_string');

												$check_zone_info = true;

												// Remove old Etc mappings. Fallback to gmt_offset.
												if ( false !== strpos($tzstring,'Etc/GMT') )
													$tzstring = '';

												if ( empty($tzstring) ) { // Create a UTC+- zone if no timezone string exists
													$check_zone_info = false;
													if ( 0 == $current_offset )
														$tzstring = 'UTC+0';
													elseif ($current_offset < 0)
														$tzstring = 'UTC' . $current_offset;
													else
														$tzstring = 'UTC+' . $current_offset;
												}
												echo wp_timezone_choice($tzstring);
												?>
											</select>
										</td>
									</tr>
									
								</tbody>
							</table>
					        <p class="submit prosports-actions">
					        	<input name="save" class="button-primary" type="submit" value="<?php _e( 'Save changes', 'prosports' ); ?>" />
					        	<input type="hidden" name="subtab" id="last_tab" />
					        	<?php wp_nonce_field( 'prosports-settings' ); ?>
					        </p>
						</form>
					<?php } ?>
				</div>
				
			</div>
		</div>
		<?php
	}

	/**
	 * Output the credits.
	 */
	public function credits_screen() {
		?>
		<div class="wrap about-wrap about-prosports-wrap">

			<?php $this->intro(); ?>

			<p class="about-description"><?php printf( __( 'ProSports is developed and maintained by a worldwide team of passionate individuals and backed by an awesome developer community. Want to see your name? <a href="%s">Contribute to ProSports</a>.', 'prosports' ), 'https://github.com/ProSports/ProSports/blob/master/CONTRIBUTING.md' ); ?></p>

			<?php echo $this->contributors(); ?>
		</div>
		<?php
	}

	/**
	 * Output the translators screen
	 */
	public function translators_screen() {
		?>
		<div class="wrap about-wrap about-prosports-wrap">

			<?php $this->intro(); ?>

			<p class="about-description"><?php printf( __( 'ProSports has been kindly translated into several other languages thanks to our translation team. Want to see your name? <a href="%s">Translate ProSports</a>.', 'prosports' ), 'https://www.transifex.com/projects/p/prosports/' ); ?></p>
			<?php
			$translator_handles = array( 'Abdulelah', 'albertone', 'alisiddique', 'ALooNeBoy87', 'Andrew_Melim', 'ArtakEVN', 'aylaview', 'Bhelpful2', 'bizover', 'BOCo', 'den_zlateva', 'dic_2008', 'doncer', 'elrawys', 'EmiDelCaz', 'eNnvi', 'etcloki', 'Ferenan', 'fredodq', 'GhiMax', 'GuneshGamza95', 'hanro', 'hushiea', 'i__k', 'JensZ', 'jenymoen', 'joegalaxy66', 'JuKi', 'karimjarro', 'King3R', 'krisop', 'latixns', 'massimo.marra', 'MohamedZ', 'overbite', 'poelie', 'popeosorio', 'rochester', 'sashaCZ', 'Selskei', 'sijo', 'SilverXp', 'SmilyCarrot', 'Spirossmil', 'Taurus', 'ProSports', 'tyby94', 'valentijnreza', 'violaud', 'vlinicx', 'xFrAx', 'Xyteton', 'zzcs' );
			$translator_links = array();
			foreach ( $translator_handles as $handle ):
				$translator_links[] = '<a href="https://www.transifex.com/accounts/profile/' . $handle . '">' . $handle . '</a>';
			endforeach;
			?>
			<p class="wp-credits-list">
				<?php echo implode( ', ', $translator_links ); ?>
			</p>
		</div>
		<?php
	}

	/**
	 * Render Contributors List
	 *
	 * @access public
	 * @return string $contributor_list HTML formatted list of contributors.
	 */
	public function contributors() {
		$contributors = $this->get_contributors();

		if ( empty( $contributors ) ) {
			return '';
		}

		$contributor_list = '<ul class="wp-people-group">';

		foreach ( $contributors as $contributor ) {
			$contributor_list .= '<li class="wp-person">';
			$contributor_list .= sprintf( '<a href="%s" title="%s">',
				esc_url( 'https://github.com/' . $contributor->login ),
				esc_html( sprintf( __( 'View %s', 'prosports' ), $contributor->login ) )
			);
			$contributor_list .= sprintf( '<img src="%s" width="64" height="64" class="gravatar" alt="%s" />', esc_url( $contributor->avatar_url ), esc_html( $contributor->login ) );
			$contributor_list .= '</a>';
			$contributor_list .= sprintf( '<a class="web" href="%s">%s</a>', esc_url( 'https://github.com/' . $contributor->login ), esc_html( $contributor->login ) );
			$contributor_list .= '</a>';
			$contributor_list .= '</li>';
		}

		$contributor_list .= '</ul>';

		return $contributor_list;
	}

	/**
	 * Retrieve list of contributors from GitHub.
	 *
	 * @access public
	 * @return mixed
	 */
	public function get_contributors() {
		$contributors = get_transient( 'prosports_contributors' );

		if ( false !== $contributors ) {
			return $contributors;
		}

		$response = wp_remote_get( 'https://api.github.com/repos/ProSports/ProSports/contributors', array( 'sslverify' => false ) );

		if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
			return array();
		}

		$contributors = json_decode( wp_remote_retrieve_body( $response ) );

		if ( ! is_array( $contributors ) ) {
			return array();
		}

		set_transient( 'prosports_contributors', $contributors, HOUR_IN_SECONDS );

		return $contributors;
	}

	/**
	 * Sends user to the welcome page on first activation
	 */
	public function welcome() {

		// Bail if no activation redirect transient is set
	    if ( ! get_transient( '_sp_activation_redirect' ) )
			return;

		// Delete the redirect transient
		delete_transient( '_sp_activation_redirect' );

		// Bail if we are waiting to install or update via the interface update/install links
		if ( get_option( '_sp_needs_update' ) == 1 || get_option( '_sp_needs_pages' ) == 1 )
			return;

		// Bail if activating from network, or bulk, or within an iFrame
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) || defined( 'IFRAME_REQUEST' ) )
			return;

		if ( ( isset( $_GET['action'] ) && 'upgrade-plugin' == $_GET['action'] ) && ( isset( $_GET['plugin'] ) && strstr( $_GET['plugin'], 'prosports.php' ) ) )
			return;

		wp_redirect( admin_url( 'index.php?page=sp-about' ) );
		exit;
	}
}

new SP_Admin_Welcome();

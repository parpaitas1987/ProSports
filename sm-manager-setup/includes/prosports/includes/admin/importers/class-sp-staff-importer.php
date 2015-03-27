<?php
/**
 * Staff importer - import staff into ProSports.
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin/Importers
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( class_exists( 'WP_Importer' ) ) {
	class SP_Staff_Importer extends SP_Importer {

		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {
			$this->import_page = 'prosports_staff_csv';
			$this->import_label = __( 'Import Staff', 'prosports' );
			$this->columns = array(
				'post_title' => __( 'Name', 'prosports' ),
				'sp_role' => __( 'Jobs', 'prosports' ),
				'sp_team' => __( 'Teams', 'prosports' ),
				'sp_league' => __( 'Competitions', 'prosports' ),
				'sp_season' => __( 'Seasons', 'prosports' ),
				'sp_nationality' => __( 'Nationality', 'prosports' ),
			);
			parent::__construct();
		}

		/**
		 * import function.
		 *
		 * @access public
		 * @param array $array
		 * @param array $columns
		 * @return void
		 */
		function import( $array = array(), $columns = array( 'post_title' ) ) {
			$this->imported = $this->skipped = 0;

			if ( ! is_array( $array ) || ! sizeof( $array ) ):
				$this->footer();
				die();
			endif;

			$rows = array_chunk( $array, sizeof( $columns ) );

			foreach ( $rows as $row ):

				$row = array_filter( $row );

				if ( empty( $row ) ) continue;

				$meta = array();

				foreach ( $columns as $index => $key ):
					$meta[ $key ] = sp_array_value( $row, $index );
				endforeach;

				$name = sp_array_value( $meta, 'post_title' );

				if ( ! $name ):
					$this->skipped++;
					continue;
				endif;

				$args = array( 'post_type' => 'sp_staff', 'post_status' => 'publish', 'post_title' => $name );

				$id = wp_insert_post( $args );

				// Flag as import
				update_post_meta( $id, '_sp_import', 1 );

				// Update roles
				$roles = explode( '|', sp_array_value( $meta, 'sp_role' ) );
				wp_set_object_terms( $id, $roles, 'sp_role', false );

				// Update leagues
				$leagues = explode( '|', sp_array_value( $meta, 'sp_league' ) );
				wp_set_object_terms( $id, $leagues, 'sp_league', false );

				// Update seasons
				$seasons = explode( '|', sp_array_value( $meta, 'sp_season' ) );
				wp_set_object_terms( $id, $seasons, 'sp_season', false );

				// Update teams
				$teams = (array)explode( '|', sp_array_value( $meta, 'sp_team' ) );
				$i = 0;
				foreach ( $teams as $team ):
					// Get or insert team
					$team_object = get_page_by_title( $team, OBJECT, 'sp_team' );
					if ( $team_object ):
						if ( $team_object->post_status != 'publish' ):
							wp_update_post( array( 'ID' => $team_object->ID, 'post_status' => 'publish' ) );
						endif;
						$team_id = $team_object->ID;
					else:
						$team_id = wp_insert_post( array( 'post_type' => 'sp_team', 'post_status' => 'publish', 'post_title' => $team ) );
						// Flag as import
						update_post_meta( $team_id, '_sp_import', 1 );
						wp_set_object_terms( $team_id, $leagues, 'sp_league', false );
						wp_set_object_terms( $team_id, $seasons, 'sp_season', false );
					endif;

					// Add team to staff
					add_post_meta( $id, 'sp_team', $team_id );

					// Update current team if first in array
					if ( $i == 0 ):
						update_post_meta( $id, 'sp_current_team', $team_id );
					endif;

					$i++;
				endforeach;

				// Update nationality
				$nationality = trim( strtoupper( sp_array_value( $meta, 'sp_nationality' ) ) );
				if ( $nationality == '*' ) $nationality = '';
				update_post_meta( $id, 'sp_nationality', $nationality );

				$this->imported++;

			endforeach;

			// Show Result
			echo '<div class="updated settings-error below-h2"><p>
				'.sprintf( __( 'Import complete - imported <strong>%s</strong> staff and skipped <strong>%s</strong>.', 'prosports' ), $this->imported, $this->skipped ).'
			</p></div>';

			$this->import_end();
		}

		/**
		 * Performs post-import cleanup of files and the cache
		 */
		function import_end() {
			echo '<p>' . __( 'All done!', 'prosports' ) . ' <a href="' . admin_url('edit.php?post_type=sp_staff') . '">' . __( 'View Staff', 'prosports' ) . '</a>' . '</p>';

			do_action( 'import_end' );
		}

		/**
		 * header function.
		 *
		 * @access public
		 * @return void
		 */
		function header() {
			echo '<div class="wrap"><h2>' . __( 'Import Staff', 'prosports' ) . '</h2>';
		}

		/**
		 * greet function.
		 *
		 * @access public
		 * @return void
		 */
		function greet() {
			echo '<div class="narrow">';
			echo '<p>' . __( 'Hi there! Choose a .csv file to upload, then click "Upload file and import".', 'prosports' ).'</p>';
			echo '<p>' . sprintf( __( 'Staff need to be defined with columns in a specific order (6 columns). <a href="%s">Click here to download a sample</a>.', 'prosports' ), plugin_dir_url( SP_PLUGIN_FILE ) . 'dummy-data/staff-sample.csv' ) . '</p>';
			wp_import_upload_form( 'admin.php?import=prosports_staff_csv&step=1' );
			echo '</div>';
		}
	}
}

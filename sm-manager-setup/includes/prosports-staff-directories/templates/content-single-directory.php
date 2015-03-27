<?php
/**
 * The template for displaying staff directory content.
 *
 * Override this template by copying it to yourtheme/prosports/content-single-directory.php
 *
 * @author 		ProSports
 * @package 	ProSports_Staff_Directories
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! in_the_loop() ) return; // Return if not in main loop

/**
 * prosports_before_single_directory hook
 */
do_action( 'prosports_before_single_directory' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}

do_action( 'prosports_single_directory_content' );

do_action( 'prosports_after_single_directory' );

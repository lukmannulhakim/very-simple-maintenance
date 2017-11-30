<?php
/*
 * Plugin Name: Very Simple Maintenance
 * Plugin URI: https://lukmannulhakim.com
 * Description: Very Simple Maintencance Plugin For WordPress.
 * Version: 0.1
 * Author: Ahmad Lukman Nulhakim
 */

function very_simple_maintenance() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		if ( file_exists( plugin_dir_path( __FILE__ ) . '/include/very-simple-maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . '/include/very-simple-maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'very_simple_maintenance' );
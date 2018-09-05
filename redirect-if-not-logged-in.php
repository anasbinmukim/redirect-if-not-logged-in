<?php
/**
 * @package Redirect if not logged in
 * @version 1.0.0
 */
/*
Plugin Name:   Redirect if not logged in
Plugin URI:    http://wordpress.org/plugins/redirect-if-not-logged-in/
Description:   Redirects another page if not logged in user.
Author:        Anas
Version:       1.0.0
Author URI:    http://rmweblab.com/
License:       GPL-2.0 or later
License URI:   http://www.gnu.org/licenses/gpl-2.0.txt
*/

add_action( 'wp', 'rmt_redirect_if_not_logged_in', 1 );
/**
 * Redirects a user to the login page if not logged in.
 *
 * @author Anas
 */
function rmt_redirect_if_not_logged_in() {
	global $post;
	$redirect_id = 613;

	if(!is_user_logged_in()){
		if( (!is_home() && is_front_page()) || is_home() ){
			$url = get_permalink($redirect_id);
			wp_redirect( $url );
			exit;
		}
	}
}

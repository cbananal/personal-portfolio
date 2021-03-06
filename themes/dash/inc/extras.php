<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Dash
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dash_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'dash_body_classes' );


/*----------------------------
  Dash: Custom Functions
-----------------------------*/

//Add Custom Logo on Log-In Screen
function claudinebananal_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href=" ' . get_stylesheet_directory_uri() . '/build/css/custom-login.css"/>';
}
add_action ('login_head', 'claudinebananal_custom_login');


//Link Logo on Log-In Screen
function claudinebananal_login_link( $url ) {
	return home_url();
}
add_filter('login_headerurl', 'claudinebananal_login_link');


//Change Logo Title on Log-In Screen
function claudinebananal_logo_title() {
	return 'View Portfolio Site';
}
add_filter ('login_headertitle', 'claudinebananal_logo_title');

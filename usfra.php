<?php
/*
Plugin Name:  User Switching for Regular Admins
Description:  Adds support for the User Switching plugin to regular admins on multisite.
Version:      1.1
Plugin URI:   https://github.com/johnbillion/user-switching-for-regular-admins
Author:       <a href="http://ryanhellyer.net/">Ryan Hellyer</a> & <a href="http://johnblackbourn.com/">John Blackbourn</a>
License:      GPL v2 or later

Copyright © 2013 John Blackbourn

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

add_action( 'plugins_loaded', 'usfra_load' );

function usfra_filter( $user_caps, $required_caps, $args ) {

	global $user_switching;

	if ( 'switch_to_user' == $args[0] )
		$user_caps['switch_to_user'] = ( user_can( $args[1], 'administrator' ) and !is_super_admin( $args[2] ) );
	else if ( 'switch_off' == $args[0] )
		$user_caps['switch_off'] = ( user_can( $args[1], 'administrator' ) and !$user_switching->get_old_user() );

	return $user_caps;

}

function usfra_load() {

	global $user_switching;

	if ( is_object( $user_switching ) ) {
		remove_filter( 'user_has_cap', array( $user_switching, 'user_cap_filter' ), 10 );
		add_filter( 'user_has_cap', 'usfra_filter', 10, 3 );
	}

}

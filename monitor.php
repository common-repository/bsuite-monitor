<?php
/*
Plugin Name: bSuite Monitor
Plugin URI: http://maisonbisson.com/bsuite/
Description: Optimized for WordPress MU. Monitor admin activity and enable help desk access to individual blogs.
Version: a
Author: Casey Bisson
Author URI: http://maisonbisson.com/blog/
*/

function bsuite_monitor_supportlogin( &$user ){
    if ( !apply_filters( 'bsuite_monitor_supportlogin', FALSE, $user ))
        return;

    global $wpdb;
    $level = $wpdb->prefix . 'user_level';
    $user->{$level} = 10;
    $user->user_level = 10;
    $cap_key = $wpdb->prefix . 'capabilities';
    $user->{$cap_key} = array( 'administrator' => '1' );

	print_r( $user );
}
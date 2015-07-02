<?php
/*
Plugin Name: WooCommerce Hide Coupon Form
Version: 0.1.0
Description: Add option to hide the add coupon form on the cart and checkout pages
Author: Dan Bissonnet <dan@danisadesigner.com>
Author URI: http://danisadesigner.com
Plugin URI: http://danisadesigner.com
Text Domain: dbisso-woocommerce-hide-coupon-form
Domain Path: /languages
*/

if ( version_compare( phpversion(), '5.3', '<' ) ) {
	wp_die( 'This plugin requires PHP version 5.3 or higher' );
} else {
	$loader = include_once __DIR__ . '/vendor/autoload.php';
	// Call the bootstrap.
	include_once __DIR__ . '/src/Bootstrap.php';
}



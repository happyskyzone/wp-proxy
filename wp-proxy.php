<?php
/**
 * Plugin Name: WP Proxy
 * Plugin URI: https://xn--vkuk.org/blog/wp-proxy
 * Description: manage proxy for WordPress
 * Version: 1.0.0
 * Author: sleepm
 * Text Domain: wp-proxy
 * Domain Path: /languages
 * License: GPLv2 or later
 *
 * @package WP_Proxy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once 'class-wp-proxy.php';

/**
 * The single instance of the class
 */
function wp_proxy() {
	return WP_Proxy::instance();
}

$GLOBALS['wp_proxy'] = wp_proxy();

<?php
/**
 * Plugin Name: Express, Certified Post, Bike Delivery and Iranian Postal Companies for WooCommerce
 * Description: Calculates and adds Express & Certified Post shipping methods, Bike Delivery, and other Iranian Postal Companies
 * Plugin URI: https://parsmizban.com
 * Author: ParsMizban
 * Author URI: https://parsmizban.com
 * Version: 5.0.4
 * Requires at least: 6.0
 * Tested up to: 6.9
 * Requires PHP: 7.4
 * License: GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: woocommerce-iran-post-shipping
 *
 * @package Iran_Post_Shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( '\DediData\Plugin_Autoloader' ) ) {
	require 'includes/DediData/class-plugin-autoloader.php';
}
// Set name spaces we use in this plugin
new \DediData\Plugin_Autoloader( array( 'DediData', 'IranPostShipping' ) );
/**
 * The function IRAN_POST_SHIPPING returns an instance of the Shetab_Card_Field class.
 *
 * @return object an instance of the \IranPostShipping\IRAN_POST_SHIPPING class.
 */
function IRAN_POST_SHIPPING() {
	return \IranPostShipping\Iran_Post_Shipping::get_instance( __FILE__ );
}
IRAN_POST_SHIPPING();

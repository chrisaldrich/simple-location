<?php
/**
 * Plugin Name: Simple Location
 * Plugin URI: https://wordpress.org/plugins/simple-location/
 * Description: Adds Location to Wordpress Pages and Posts.
 * Version: 3.0.1
 * Author: David Shanske
 * Author URI: https://david.shanske.com
 * Text Domain: simple-location
 * Domain Path:  /languages
 */

define( 'SIMPLE_LOCATION_VERSION', '3.0.1' );

// Register Metadata Functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-geo-meta.php' );

// Venue Taxonomy
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-venue-taxonomy.php' );


// Map Provider Class
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-geo-provider.php' );

// Map Providers
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-geo-provider-osm.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-geo-provider-google.php' );

// Handlers
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-ajax-geo.php' );
// API Endpoint under construction
// require_once( plugin_dir_path( __FILE__ ) . 'includes/class-location-controller.php' );

// Configuration Functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-loc-config.php' );

// Add Location Post Meta
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-loc-metabox.php' );

// Add Location Display Functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-loc-view.php' );

// Timezone Functions
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-timezone-result.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-loc-timezone.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-post-timezone.php' );

function sloc_init() {
	load_plugin_textdomain( 'simple-location', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'sloc_init' );



if ( ! function_exists( 'ifset' ) ) {
	function ifset(&$var, $default = false) {
		return isset( $var ) ? $var : $default;
	}
}

<?php

    /*
        Plugin Name: WP RestAPI
        Plugin URI: http://www.bytescrafter.net/projects/wp-restapi
        Description: Sample implementation of WordPress RestAPI.
        Version: 0.1.0
        Author: Bytes Crafter
        Author URI:   https://www.bytescrafter.net/about-us
        Text Domain:  wp-restapi
        
        * @package      wp-restapi
        * @author       Bytes Crafter

        * @copyright    2020 Bytes Crafter
        * @version      1.0.0

        * @wordpress-plugin
        * WC requires at least: 2.5.0
        * WC tested up to: 5.4
    */

    #region WP Recommendation - Prevent direct initilization of the plugin.
        if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly
        if ( ! function_exists( 'is_plugin_active' ) ) 
        {
            require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        }
    #endregion

    //Important config files and plugin updates.
    include_once ( plugin_dir_path( __FILE__ ) . '/includes/core/config.php' );

    //Make sure to create required mysql tables.
    include_once ( plugin_dir_path( __FILE__ ) . '/includes/core/hook.php' );

    //Includes assets if page is defined.
    include_once ( plugin_dir_path( __FILE__ ) . '/includes/core/assets.php' );

    //Include the REST API to be accessible.
    include_once ( plugin_dir_path( __FILE__ ) . '/includes/api/routes.php' );


?>
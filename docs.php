<?php
/*
Plugin Name:  ASuite Docs
Plugin URI:   http://docs.asuite.cf
Description:  Enables the ASuite Docs app.
Version:      1.0
Author:       ASuite
Author URI:   https://portal.asuite.cf
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  asuite-docs
*/

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'css/style1.css' );
    wp_enqueue_style( 'style2', $plugin_url . 'css/style2.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

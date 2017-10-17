<?php
/*
Plugin Name:  ASuite Drive
Plugin URI:   http://drive.asuite.cf
Description:  Enables the ASuite Drive app.
Version:      1.0
Author:       ASuite
Author URI:   https://portal.asuite.cf
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  asuite-drive
*/

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'drive-stylesheet.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

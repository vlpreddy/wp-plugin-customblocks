<?php
/**
 * Plugin Name:       Roudram Create Block 
 * Plugin URI:        https://redmindstech.com
 * Description:       A plugin for adding blocks to a theme
 * Version:           1.0.3
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Leela
 * Author URI:        https://vlpreddy.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://redmindstech.com/my-plugin/
 * Text Domain:       roudram-create-blocks
 * Domain Path:       /languages
 */

 if(!function_exists('add_action')){
    echo "Seems like you stumbled here by accident";
    exit;
 }

 // Setup
 define("RD_PLUGIN_DIR", plugin_dir_path(__FILE__));
 // Includes

 include(RD_PLUGIN_DIR . 'includes/register-blocks.php');
 // Hooks

add_action("init","rd_register_blocks");
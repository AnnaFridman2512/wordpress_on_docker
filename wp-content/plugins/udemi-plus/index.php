<?php
/**
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Udemi
 * Author URI:        https://udemy.com/
 * License:           GPL v2 or later
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

 if(!function_exists('add_action')){
    echo 'Seems like you stumbled here by accident';
    exit;
 }

 //Setup
define("UP_PLUGIN_DIR", plugin_dir_path(__FILE__));


 //Includes
 $rootFiles = glob(UP_PLUGIN_DIR . 'includes/*php');
 $subdirectoryFiles = glob(UP_PLUGIN_DIR . 'includes/**/*php' );
 $allFiles = array_merge($rootFiles, $subdirectoryFiles);


foreach($allFiles as $filename){
   include_once($filename);
}



 //Hooks
 add_action("init", "up_register_blocks");
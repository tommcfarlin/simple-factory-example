<?php
/**
 * This script is meant to be used as a driver to demonstrate the Simple Factory Pattern.
 *
 * @author     Tom McFarlin <tom@tommcfarlin.com>
 * @copyright  2013 Tom McFarlin
 * @license    http://opensource.org/licenses/MIT
 * @version    1.0.0
 * @link       http://github.com/tommcfarlin/simple-factory-example/
 */

/**
 * Includes the plugin library file to be used in this demo script.
 */
include_once( 'lib/plugin.php' );

// Create the plugin
$plugin = new Plugin();
echo "You have just used the Simple Factory Pattern to create...";
new_line();

// Pass the permissions into the plugin to retrieve what should return an Administrator
$user = $plugin->get_user( 'read-write' );
echo $user->get_role();
new_line();

// Pass the permissions into the plugin to retrieve what should return a Reader
$user = $plugin->get_user( 'read' );
echo $user->get_role();
new_line();

// Pass the permissions into the plugin to retrieve what should return a Volunteer
$user = $plugin->get_user( 'help' );
echo $user->get_role();
new_line();

/**
 * A helper function used to generate a carriage return to the console.
 *
 * @since 	1.0.0
 */
function new_line() {
    echo "\n\r";
}
<?php 

/**
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


/* 
 * Include Javascript
*/

function add_scripts() {
    
    wp_enqueue_scripts('contact-scripts', plugins_url().'/contact-widget/js/script.js', array('jquery'),'1.0.0', false);
}

add_action('wp_enqueue_script','add_scripts');


/* 
 * Include Class
*/

include('/class-contact-widget.php');



/* 
 * Register Widget
*/

function register_contact_widget() {
    
    register_widget('Contact_Widget');
}

add_action('widgets_init', 'register_contact_widget');

?>
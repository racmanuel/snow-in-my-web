<?php
/**
 * Plugin Name:       Snow in My Web
 * Description:       Get a amazing effect of Snow in all your Web.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Manuel Ramirez Coronel
 * Author URI:        https://github.com/racmanuel
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Register the Styles.
 */
add_action('init', 'snow_in_my_web_register_styles');

function snow_in_my_web_register_styles()
{
    wp_register_style('snow-effect', plugin_dir_url(__FILE__) . '/public/css/snow-in-my-web.css');
}
/**
 * Enqueue the Styles.
 */
add_action('wp_enqueue_scripts', 'snow_in_my_web_enqueue_styles');

function snow_in_my_web_enqueue_styles()
{
    wp_enqueue_style('snow-effect');
}

/**
 * Add a new CSS Class to apply the effect of the Snow.
 */
add_filter('body_class', 'snow_in_my_web_add_class');

function snow_in_my_web_add_class($classes)
{
    $classes[] = 'snow-bg';
    return $classes;
}

<?php
/**
 * Add stylesheet
 */
function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Add javascript
 */
function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');


/**
 * Add menus
 */

 add_theme_support('menus');

/**
 * Register Menus
 */
register_nav_menus(
array(
    'top-menu'=> 'Top Menu'
)
);

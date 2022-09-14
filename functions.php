<?php
// Wordpress support post thumbnails
add_theme_support( 'post-thumbnails' );
// Wordpress support menus
add_theme_support( 'menus' );

// Wordpress Enqueue Styles Functions
function load_style_mn() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css', array(), $version);
    wp_enqueue_style('wide-side', get_template_directory_uri() . '/assets/css/wide-side.css', array(), $version);
    wp_enqueue_style('topbar-mn', get_template_directory_uri() . '/assets/css/topbar-mn.css', array(), $version);
    wp_enqueue_style('nav-mn', get_template_directory_uri() . '/assets/css/nav-mn.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'load_style_mn', 2);







// Include Plugins
include get_template_directory() . '/includes/plugins/plugin-configs.php';
// Include Options
include get_template_directory() . '/includes/options/options.php';
// Carbonfields
include get_template_directory() . '/carbon-fields/carbon-fields-plugin.php';
// Include Element
include get_template_directory() . '/includes/elements/nav-mn.php';
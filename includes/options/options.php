<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * 1. Menu
 */



add_action('carbon_fields_register_fields', 'theme_options');
function theme_options() {
    // Parent Container
    $option_container = Container::make('theme_options', 'Theme Options')
    ->set_icon('dashicons-code-standards')
    ->set_page_menu_position(5)
    ->add_fields([
        // all fields for global option start from here
        /**
         * Option for menu or navigation
         * Just input menu name based on available menu
         */
        Field::make('separator', 'nav_sep', 'Navigations')
        ->set_classes('global-cb-separator'),
        Field::make('text', 'header_nav_mn', 'Menu Header')
        ->set_help_text('ketik nama menu yang sudah dibuat'),
        Field::make('text', 'news_cat_nav_mn', 'Menu Kategori Berita')
        ->set_help_text('ketik nama menu yang sudah dibuat'),



        // All fields for global option end here
    ]);
}

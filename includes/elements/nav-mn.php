<?php
/**
 * Element name: Nav
 * Styling in nav-mn.css (temporary)
 * 1. Menu Kategori Berita
 */

 function news_cat_nav_mn() {
    $news_cat_nav_mn = carbon_get_theme_option('news_cat_nav_mn');
    wp_nav_menu(array(
        'menu' => $news_cat_nav_mn,
        'container' => 'nav',
        'container_class' => 'news-cat-nav-mn',
        'container_id' => 'news-cat-nav-mn',
        'menu_class' => 'horizontal-menu',
    ));
 }
<?php
// function for conditional

function mn_style_condition() {
    if (is_single()) {
        wp_enqueue_style('single-post', get_template_directory_uri() . '/assets/css/single-post.css', array(), $version);
    }







}

add_action('wp_enqueue_scripts', 'mn_style_condition', 2);
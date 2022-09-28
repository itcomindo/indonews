<?php
// function for conditional

function mn_style_condition() {
    if (is_single()) {
        wp_enqueue_style('single-post', get_template_directory_uri() . '/assets/css/single-post.css', array(), $version);
    }

}

add_action('wp_enqueue_scripts', 'mn_style_condition', 2);


function mn_load_scripts()
{ ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/global.js" defer></script>
<?php
}
add_action('wp_enqueue_scripts', 'mn_load_scripts', 5);
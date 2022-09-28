<?php

function archive_category_mn() {
    // create category query
    $args = array (
        'post_type' => 'post',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'get_query_var('category_name')'
    );
    $query = new WP_Query( $args ); ?>
    <div class="section arch_pr">
        <div class="container arc-wr"></div>
    </div>

<?php
}
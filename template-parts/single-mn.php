<?php

/**
 * Template Name: Single Post MN
 * Template Post Type: post
 * Sp is single-post
 * Style is single-post.css
 */
?>

<section class="section sp-pr">
    <div class="container sp-wr">
        <div class="sp-left">
            <?php
            /**
             * Featured image taken from fallback-featured-image.php
             * Related to plugin-configs.php
             * class for image wrap sp-featured-image-wrap
             * class for image sp-featured-image
             */
            mn_featured_image();
            ?>
            <div class="sp-meta-post-wr">
                <h1 class="sp-head global-post-title"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
        <div class="sp-right"></div>
    </div>
</section>
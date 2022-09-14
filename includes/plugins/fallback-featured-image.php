<?php
function mn_featured_image()
{
    $post = get_post();
    setup_postdata($post);
    $the_featured_image = array(
        'class' => 'sp-featured-image',
        'alt' => get_the_title(),
        'title' => get_the_title(),
        'src' => get_the_post_thumbnail_url(),
    );
    if (has_post_thumbnail()) { ?>
        <div class="sp-featured-image-wrap">
            <?php the_post_thumbnail('large', $the_post_featured_image_attr); ?>
        </div>
    <?php
    } else { ?>
        <div class="sp-featured-image-wrap">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/fallback-image.webp'; ?>" alt="<?php echo $the_featured_image['alt']; ?>" title="<?php echo $the_featured_image['title']; ?>" class="<?php echo $the_featured_image['class']; ?>">
        </div>
<?php
    }
}
?>

<?php
/**
 * Element name: Header
 * Styling in header-temp.css
 * will merge with wide-side.css
 */
?>
<header class="section header-pr">
    <div class="container header-wr">
        <div class="header-left">
            <h2 class="header-head">
                <a href="/" title="<?php echo get_bloginfo(); ?>">IndoNews</a>
            </h2>
        </div>
        <div class="header-right"></div>
    </div>
</header>
<div class="section news-cat-pr">
    <div class="container news-cat-wr">
        <?php news_cat_nav_mn(); ?>
    </div>
</div>
<?php

/**
 * topbar.php
 * sidewide topbar
 * containing menu category, search bart and social media
 * CSS is topbar-temp.css
 */
?>
<div class="section mn-tb-pr">
    <div class="container mn-tb-wr">
        <div class="mn-tb-left tb-col toggle-allcat">
            <div class="tb-all-cat-btn">
                <i class='bx bx-sm bx-menu'></i>
                <span class="global-hide-on-768">
                    Menu
                </span>
                <?php
                // get template part slide-menu
                get_template_part('includes/elements/slide-menu', 'mn');
                ?>
            </div>
        </div>
        <div class="mn-tb-mid tb-col">
            <!-- <form class="mn-tb-search-form-wr" action="">
                <input class="global-input-form tb-search-form" type="text" placeholder="Search">
                <button class="tb-submit-btn" type="submit">
                    <i class='bx bx-search'></i>
                </button>
            </form> -->
            <form id="searchform" method="get" class="mn-tb-search-form-wr" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" class="global-input-form tb-search-form" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                <input class="tb-submit-btn" type="submit" value="Search">
            </form>
        </div>
        <div class="mn-tb-right tb-col">
            <a href="#" class="tb-social-link" title="Youtube" rel="noopener" target="_blank"><i class="bx bx-sm bxl-youtube"></i></a>
            <a href="#" class="tb-social-link" title="Twitter" rel="noopener" target="_blank"><i class="bx bx-sm bxl-twitter"></i></a>
            <a href="#" class="tb-social-link" title="Facebook" rel="noopener" target="_blank"><i class="bx bx-sm bxl-facebook"></i></a>
        </div>
    </div>
</div>
<div class="grid-container">
    <div class="front-news-item clearfix">
        <div class="grid-100">
            <div class="shadow"></div>
            <div class="front-news-category">
                <?php include 'category_switch.php'; ?>
            </div>
            <div class="news-item-content clearfix">
                <div class="grid-100">
                    <div class="news-item-wrapper clearfix">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <span class="news-item-date"><?php the_time('d. M. Y') ?></span>
                        <span class="news-item-excerpt"><?php the_excerpt(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
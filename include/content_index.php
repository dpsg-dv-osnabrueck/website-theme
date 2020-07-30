<div class="grid-container">
    <div class="front-news-item clearfix">
        <div class="grid-100">
            <div class="shadow"></div>
            <div class="front-news-category">
                <?php include 'category_switch.php'; ?>
            </div>
            <div class="news-item-content clearfix">

                    <?php
                    $image = get_field('item-image');
                    if (!empty($image)) {
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $size = 'front_news';
                        $thumb = $image['sizes'][$size];
                        $width = $image['sizes'][$size . '-width'];
                        $height = $image['sizes'][$size . '-height']; ?>
                    <div class="grid-50 tablet-grid-50 grid-parent">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>"
                                 height="<?php echo $height; ?>"/>
                        </a>
                    </div>
                    <div class="grid-50 tablet-grid-50 grid-parent">
                        <div class="news-item-wrapper clearfix">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <span class="news-item-date"><?php the_time('d. M. Y') ?></span>
                            <span class="news-item-excerpt"><?php the_excerpt(); ?></span>
                        </div>
                    </div>
                    <?php } else { ?>
                        <div class="grid-100 grid-parent">
                            <div class="news-item-wrapper clearfix">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <span class="news-item-date"><?php the_time('d. M. Y') ?></span>
                                <span class="news-item-excerpt"><?php the_excerpt(); ?></span>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </div>
</div>
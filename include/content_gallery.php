<div class="grid-container">
    <div class="grid-100 grid-parent">
        <div class="shadow"></div>
        <div class="news-detail-item">
            <div class="grid-100">
                <span class="news-detail-date"></span>
            </div>
            <div class="title-style">
                <div class="title-style-body">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="title-style-corner"></div>
            </div>
            <div class="grid-100">
                <div class="news-detail-content clearfix">
                    <?php global $post;     // if outside the loop
                    if (is_page() && $post->post_parent) {
                        $images = get_field('galerie');
                        if ($images): ?>
                            <div class="gallery-detail clearfix">
                                <?php foreach ($images as $image): ?>
                                    <div class="grid-20 tablet-grid-25 mobile-grid-50">
                                        <a href="<?php echo $image['url']; ?>">
                                            <img src="<?php echo $image['sizes']['gallery_overview']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>
                                        </a>
                                        <p><?php echo $image['caption']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif;
                    } else { ?>
                        <div class="grid-100"><?php the_content(); ?></div>
                        <div class="gallery-overview clearfix">
                            <div class="grid-container grid-parent">
                            <?php
                            $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = " . $post->ID . "    AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>
                            <?php if ($child_pages) : foreach ($child_pages as $pageChild) : setup_postdata($pageChild); ?>
                                <div class="grid-20 tablet-grid-25 mobile-grid-50">
                                    <div class="gallery-item">
                                        <a href="<?php echo get_permalink($pageChild->ID); ?>" rel="bookmark"
                                           title="<?php echo $pageChild->post_title; ?>"><span><?php echo get_the_post_thumbnail($pageChild->ID, 'gallery_overview'); ?></span>
                                            <?php echo $pageChild->post_title; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; endif;
                            ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="wegzeichen-ziel"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="grid-container">
  <div class="grid-100 grid-parent">
    <div class="shadow"></div>
    <div class="news-detail-item">
      <div class="front-news-category-detail">
        <?php include 'category_switch.php'; ?>
      </div>
      <div class="grid-100">
        <span class="news-detail-date"><?php the_time('d. M. Y') ?></span>
      </div>
      <div class="title-style">
        <div class="title-style-body">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="title-style-corner"></div>
      </div>
      <div class="grid-100">
        <div class="news-detail-content">
          <div class="news-detail-image">
            <?php
            $image = get_field('item-image');
            if( !empty($image) ):
              // vars
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              // thumbnail
              $size = 'front_news';
              $thumb = $image['sizes'][ $size ];
              $width = $image['sizes'][ $size . '-width' ];
              $height = $image['sizes'][ $size . '-height' ]; ?>
              <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
              </a>
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
          <div class="news-detail-links">
            <?php if( have_rows('links-repeater') ): ?>
            <h3><?php _e('Links'); ?></h3>
              <?php while ( have_rows('links-repeater') ) : the_row(); ?>
                  <a href="<?php the_sub_field('link-item'); ?>" target="_blank">
                    <span class="pe-7s-link"></span>
                    <?php the_sub_field('link-item-text'); ?>
                  </a>
              <?php endwhile; else : endif; ?>
          </div>
          <div class="news-detail-attachment">
            <?php if( have_rows('attachments-repeater') ): ?>
              <h3><?php _e('Downloads'); ?></h3>
              <?php while ( have_rows('attachments-repeater') ) : the_row(); ?>
                  <a href="<?php the_sub_field('file'); ?>" target="_blank">
                    <span class="pe-7s-download"></span>
                    <?php the_sub_field('file-text'); ?>
                  </a>
              <?php endwhile; else : endif; ?>
          </div>
          <div class="wegzeichen-ziel"></div>
        </div>
      </div>
    </div>
  </div>
</div>
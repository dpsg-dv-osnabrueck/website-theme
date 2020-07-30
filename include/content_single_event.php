<div class="grid-container">
    <div class="grid-100 grid-parent">
        <div class="shadow"></div>
        <div class="news-detail-item">
            <div class="grid-100">
        <span class="news-detail-date"><?php if (eo_is_all_day()) { ?>
                <?php echo eo_get_the_start('d.m.Y'); ?>
            <?php } else { ?>
                <?php echo eo_get_the_start('d.m.Y'); ?> - <?php echo eo_get_the_end('d.m.Y'); ?>
            <?php } ?></span>
            </div>
            <div class="title-style">
                <div class="title-style-body">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="title-style-corner"></div>
            </div>
            <div class="grid-100">
                <div class="event-detail-map">
                    <?php echo eo_get_venue_map(eo_get_venue(), array('width' => '100%')); ?>
                </div>
            </div>
            <div class="grid-100">
                <div class="news-detail-content event clearfix">
                    <div class="grid-parent grid-40 suffix-5 tablet-grid-40 tablet-suffix-5">
                        <?php if (eo_is_all_day()) { ?>
                            <div class="single-date"><?php _e('Datum'); ?>:</div>
                            <strong><?php echo eo_get_the_start('d.m.Y'); ?></strong>
                            <div class="clearfix"></div>
                        <?php } else { ?>
                            <div class="start-date"><?php _e('Von'); ?>:</div>
                            <strong><?php echo eo_get_the_start('d.m.Y'); ?></strong>
                            <div class="clearfix"></div>
                            <div class="end-date"><?php _e('Bis'); ?>:</div>
                            <strong><?php echo eo_get_the_end('d.m.Y'); ?></strong>
                        <?php } ?>
                        <?php if (eo_get_venue()) { ?>
                            <?php
                            $venue_id = eo_get_venue();
                            $address_details = eo_get_venue_address($venue_id);
                            ?>
                            <div class="place">
                                <div class="place-label"><?php _e('Ort'); ?>:</div> <?php eo_venue_name(); ?>
                                <div class="clearfix"></div>
                                <div class="address-label"><?php _e('Adresse'); ?>:<br>&nbsp;
                                </div><?php echo $address_details['address']; ?>
                                <br> <?php echo $address_details['postcode']; ?> <?php echo $address_details['city']; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="grid-55 tablet-grid-55 grid-parent">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    if( get_field('register-form') )
                    { ?>
                    <div class="grid-100 grid-parent">
                        <br>
                        <div class="btn register-form-btn"><?php _e('Online anmelden'); ?></div>
                        <div class="register-form">
                            <?php echo do_shortcode( '[contact-form-7 id="349" title="Anmeldeformlar"]' ); ?>
                        </div>
                    </div>
                    <?php }
                    else { } ?>
                    <div class="wegzeichen-ziel"></div>
                </div>
            </div>
        </div>
    </div>
</div>
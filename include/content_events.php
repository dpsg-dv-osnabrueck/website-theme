<div class="grid-container">
	<div class="front-news-item event clearfix">
		<div class="grid-100">
			<div class="shadow"></div>
			<div class="news-item-content clearfix">
				<div class="grid-10 tablet-grid-15 grid-parent">
                    <div class="event-overview-item clearfix">
                        <?php
                        if( eo_is_all_day() ){
                            $format_day = 'd';
                            $format_month = 'm';
                            $format_year = 'Y';
                            $microformat = 'd.m.Y';
                        }else{
                            $format_day = 'd';
                            $format_month = 'm';
                            $format_year = 'Y';
                            $microformat = 'd.m.Y';
                        }?>
                        <div class="date-group clearfix">
                            <div class="day">
                                <?php eo_the_start($format_day); ?>
                            </div>
                            <div class="month">
                                <?php eo_the_start($format_month); ?>
                            </div>
                            <div class="year">
                                <?php eo_the_start($format_year); ?>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="grid-90 tablet-grid-85 grid-parent">
                    <a href="<?php the_permalink(); ?>">
                        <div class="event-overview-item-info clearfix">
                            <h2><?php the_title();?></h2>
                            <span class="pe-7s-angle-right"></span>
                            <?php // echo eo_get_event_meta_list(); ?>
                            <?php // the_excerpt(); ?>
                        </div>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>

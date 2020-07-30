<div class="grid-container">
    <div class="grid-100 grid-parent">
        <div class="shadow"></div>
        <div class="news-detail-item">
            <div class="grid-100">
                <span class="news-detail-date"></span>
            </div>
            <?php
            $page_id = 514;

            $page_data = get_page( $page_id ); ?>

            <div class="title-style">
                <div class="title-style-body">
                    <?php echo '<h1>'. $page_data->post_title .'</h1>'; ?>
                </div>
                <div class="title-style-corner"></div>
            </div>
            <div class="grid-100">
                <div class="news-detail-content">
                    <? echo apply_filters('the_content', $page_data->post_content); ?>
                    <div class="wegzeichen-ziel"></div>
                </div>
            </div>
        </div>
    </div>
</div>

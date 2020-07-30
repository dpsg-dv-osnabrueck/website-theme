<?php get_header(); ?>
	<div class="grid-container">
		<div class="grid-100 grid-parent">
			<div class="shadow"></div>
			<div class="news-detail-item">
				<div class="grid-100">
					<span class="news-detail-date"></span>
				</div>
				<div class="title-style">
					<div class="title-style-body">
						<h1><?php _e( 'Nicht gefunden (404)', 'theme' ); ?></h1>
					</div>
					<div class="title-style-corner"></div>
				</div>
				<div class="grid-100">
					<div class="news-detail-content">
						<?php _e( 'Die Seite konnte nicht gefunden werden!', 'theme' ); ?>
						<div class="wegzeichen-ziel"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
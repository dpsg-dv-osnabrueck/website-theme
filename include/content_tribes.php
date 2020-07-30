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
					<?php the_content(); ?>

					<?php if( have_rows('tribes') ): ?>
						<div class="acf-map">
							<?php while ( have_rows('tribes') ) : the_row();

								$location = get_sub_field('coordinates');

								?>
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
									<h4><?php the_sub_field('tribe'); ?></h4>
									<div><?php the_sub_field('street'); ?></div>
									<div><?php the_sub_field('zip'); ?> <?php the_sub_field('city'); ?></div>
									<?php if (get_sub_field('email')) { ?>
										<div class="link"><span class="fa fa-envelope"></span><a href="mailto:<?php the_sub_field('email'); ?>"><?php print _e('E-Mail schreiben'); ?></a></div>
									<?php } else {  ?>
										<div class="link"><span class="fa fa-envelope"></span><a href="mailto:info@dpsg-os.de"><?php print _e('E-Mail schreiben'); ?></a></div>
									<?php }; ?>
									<?php if (get_sub_field('url')) { ?>
										<div class="link"><span class="fa fa-link"></span><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php print _e('Zur Website'); ?></a></div>
									<?php } else { ?>
										<div class="link"><span class="fa fa-link"></span><a href="http://www.dpsg-os.de" target="_blank"><?php print _e('Zur Website'); ?></a></div>
									<?php }; ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<div class="grid-100">
						<h2><?php print _e('Stämme der Diözese'); ?></h2>
					</div>
					<?php if( have_rows('tribes') ): ?>
						<div class="tribe-list">
						<?php while ( have_rows('tribes') ) : the_row(); ?>

								<div class="grid-33 tablet-grid-33">
									<div class="tribe-item clearfix">
									<h4 class="eh"><?php the_sub_field('tribe'); ?></h4>
									<div><?php the_sub_field('street'); ?></div>
									<div><?php the_sub_field('zip'); ?> <?php the_sub_field('city'); ?></div>
									<?php if (get_sub_field('email')) { ?>
										<div class="link"><span class="fa fa-envelope"></span><a href="mailto:<?php the_sub_field('email'); ?>"><?php print _e('E-Mail schreiben'); ?></a></div>
									<?php } else {  ?>
										<div class="link"><span class="fa fa-envelope"></span><a href="mailto:info@dpsg-os.de"><?php print _e('E-Mail schreiben'); ?></a></div>
									<?php }; ?>
									<?php if (get_sub_field('url')) { ?>
										<div class="link"><span class="fa fa-link"></span><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php print _e('Zur Website'); ?></a></div>
									<?php } else { ?>
										<div class="link"><span class="fa fa-link"></span><a href="http://www.dpsg-os.de" target="_blank"><?php print _e('Zur Website'); ?></a></div>
									<?php }; ?>
									</div>
							</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<div class="wegzeichen-ziel"></div>
				</div>
			</div>
		</div>
	</div>
</div>

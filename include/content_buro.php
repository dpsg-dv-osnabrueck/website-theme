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
				<div class="news-detail-content">
					<?php the_content(); ?>
					<div class="buro-team">
					<?php

					// check if the repeater field has rows of data
					if( have_rows('teammember') ):

						// loop through the rows of data
						while ( have_rows('teammember') ) : the_row();
							$image = get_sub_field('photo');
							$size = 'portrait'; // (thumbnail, medium, large, full or custom size) ?>
							<div class="member clearfix">
								<div class="grid-25 tablet-grid-25 grid-parent">
									<?php if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}  ?>
								</div>
								<div class="grid-70 tablet-grid-70 tablet-prefix-5 prefix-5 grid-parent">
									<div class="member_content">
										<h2><?php the_sub_field('name'); ?> <?php the_sub_field('lastname'); ?></h2>
										<h3><?php the_sub_field('position'); ?></h3>
										<?php the_sub_field('description'); ?>
										<span class="fa fa-envelope"></span> <a href="mailto:<?php the_sub_field('email'); ?>">E-Mail schreiben!</a>
									</div>
								</div>
							</div>
						<?php endwhile;
					else :
					endif;
					?>
					</div>
					<div class="wegzeichen-ziel"></div>
				</div>
			</div>
		</div>
	</div>
</div>
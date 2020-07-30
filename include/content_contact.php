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
                    <div class="imprint-group">
					<div><strong><?php the_field('imprint-company', 'option'); ?></strong></div>
                        <div><?php the_field('imprint-association', 'option'); ?></div>
                        <div><?php the_field('imprint-street', 'option'); ?></div>
                        <div><?php the_field('imprint-zip', 'option'); ?> <?php the_field('imprint-place', 'option'); ?></div><br>
                        <div class="clearfix"></div>
                        <div class="imprint-left"><?php _e('Telefon'); ?>:</div><div><?php the_field('imprint-phone', 'option'); ?></div>
                        <div class="imprint-left"><?php _e('Telefax'); ?>:</div><div><?php the_field('imprint-fax', 'option'); ?></div>
                        <div class="imprint-left"><?php _e('E-Mail Adresse'); ?>:</div><div><?php the_field('imprint-email', 'option'); ?></div>
                        <div class="imprint-left"><?php _e('Website'); ?>:</div><div><?php the_field('imprint-website', 'option'); ?></div><br>
                        <div class="clearfix"></div>
                    </div>
                    <h2><?php _e('Kontaktformular'); ?></h2>
					<?php the_content(); ?>
					<div class="wegzeichen-ziel"></div>
				</div>
			</div>
		</div>
	</div>
</div>
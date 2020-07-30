<?php $attachment_link = get_the_attachment_link($post->ID, true, array(800, 533)); ?>
	<div id="<?php the_ID(); ?>">
		<?php echo $attachment_link; ?>
	</div>
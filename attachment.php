<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<? get_template_part( 'include/attachments', get_post_format() ); ?>
	<?php endwhile; ?>
	<?php endif; ?>
<?php wp_footer(); ?>
<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<? get_template_part( 'include/content_archive', get_post_format() ); ?>
<?php endwhile; ?>
	<div id="nav_post" class="clearfix"><?php posts_nav_link('<span="seperator"></span>','<span class="prev_label">Vorherige Seite</span>','<span class="next_label">N&auml;chste Seite</span>'); ?></div>
<?php endif; ?>
<?php get_footer(); ?>
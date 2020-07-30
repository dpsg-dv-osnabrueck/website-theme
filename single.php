<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'include/content_single', get_post_format() ); ?>
    <?php endwhile; ?>
    <div class="grid-container">
        <div class="grid-100">
            <div class="pager">
                <?php posts_nav_link('<span class="seperator"></span>','<span class="pe-7s-prev"></span> Vorherige Seite','N&auml;chste Seite <span class="pe-7s-next"></span>'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php get_footer(); ?>
<?php get_header(); ?>

    <div class="banner" style="background-image: url(<?php echo bloginfo('stylesheet_directory'); ?>/images/wolf-bg.jpg)">
        <div class="content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="section_content">
        <?php get_template_part('inc/section', 'content'); ?>
    </div>



<?php get_footer(); ?>
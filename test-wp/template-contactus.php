<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col50">
                <p>Some text</p>
            </div>
            <div class="col50">
                <p>Some More Text</p>
            </div>
        </div>
        <?php get_template_part('inc/section', 'content'); ?>
    </div>

<?php get_footer(); ?>
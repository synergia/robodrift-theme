<?php
/*
Template Name: Rejestracja-m
*/
?>

<?php get_header(); ?>

<?php //if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>

<?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

<?php get_footer(); ?>

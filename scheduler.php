<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
/*
Template Name: scheduler
*/

get_header(); ?>

<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
            
    <?php
    if (is_user_logged_in()){
        $calendar = new Calendar();
        echo $calendar->show();
    }    
    ?>
    </main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>



<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
/*
Template Name: events
*/

get_header(); ?>

<div class="container">
<?php    
    $args = array( 'posts_per_page' => 5, 'offset'=> 0 );

    $myposts = get_posts( $args );

    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div>
            <h3><?php the_title();?></h3>
        </div>
        <div>
            <p><?php the_content();?></p>
        </div>
              <?php /* <a href="<?php the_permalink(); ?>"><?php the_title(); the_content();?></a>*/?>
                    
    <?php endforeach; 
    
wp_reset_postdata();?>

</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php 
if( have_posts() ) {
    while ( have_posts() ) : the_post();

    ?>

    <?php get_the_title(); ?>
    <?php the_content(); ?>

    <?php endwhile; } ?>




<?php get_footer(); ?>
<?php
/*
Template Name: Alchemiq Services Page
*/

get_header(); ?>

<main id="main" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
<?php get_header(); 
    get_template_part('social_media');
    get_template_part('banner');
    get_template_part('nav');
    While(have_posts()){
        the_post(); ?>
        <h1><?php the_title() ?></h1>
    <?php }
 get_footer(); 
 ?>
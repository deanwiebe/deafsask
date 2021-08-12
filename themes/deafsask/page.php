<?php get_header(); 
    echo('hello from page.php');
    get_template_part('social_media');
    get_template_part('nav');
    get_template_part('banner');
    if(is_page('about')){
        get_template_part('about_section');
    }else{ ?>
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
   <?php }
 get_footer(); 
 ?>
Helloo from single.php
<?php get_header(); 
    get_template_part('social_media');
    get_template_part('banner');
    get_template_part('nav'); 
    ?>

    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>
    
 <?php
 get_footer(); 
 ?>
<?php 
    get_header(); 
    echo('hello from page.php');
    get_template_part('./template-parts/social_media');
    get_template_part('./template-parts/access-button');
    get_template_part('./template-parts/nav');
    get_template_part('./template-parts/banner');
    if(is_page('about')){
        get_template_part('./template-parts/about_section');
    }else{ ?>
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
   <?php }
 get_footer(); 
 ?>
<?php get_header(); 
    get_template_part('./template-parts/social_media');
    get_template_part('./template-parts/access-button');
    get_template_part('./template-parts/nav');
    get_template_part('./template-parts/banner');
    ?>
        <div id="asl_tab" class="asl_tab">
            <p id="close">ASL</p>
            <div id="asl-video" class="asl-video">
                <iframe id="iframe" width="560" height="315" src="<?php  echo the_field('link')?>"></iframe>
            </div>
        </div>
        <div class="wrapper">
            <section class="about">
                <div id="about" class="about-content">
                    <h1><?php the_title()?></h1>
                    <p><?php the_content() ?></p>
                </div>
                <div class="action">
                    <a href="<?php echo esc_url(site_url('/about')) ?>">Learn More</a>
                    <a href="<?php echo esc_url(site_url('/about')) ?>"><i class="fas fa-arrow-right"></i></a>
                </div>
            </section>
            <section class="section_image">
                <?php the_post_thumbnail('about-page-thumbnail')?>
            </section>
        </div>
   <?php
    get_template_part('blog_section');
    get_template_part('contact_section');
 get_footer(); 
 ?>
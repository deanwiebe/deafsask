<?php get_header();
    get_template_part('./template-parts/social_media');
    get_template_part('./template-parts/access-button');
    get_template_part('./template-parts/nav');
    get_template_part('./template-parts/banner');
     ?>
        <div class="wrapper">
            <section class="about">
                <div id="about" class="about-content">
                    <!-- <h1><?php the_title()?></h1> -->
                    <p><?php the_content() ?></p>
                </div>
                <!-- <div class="action">
                    <a href="<?php the_permalink() ?>">Learn More</a>
                    <a href="<?php the_permalink() ?>"><i class="fas fa-arrow-right"></i></a>
                </div> -->
            </section>
            <section class="section_image">
                <?php the_post_thumbnail('about-page-thumbnail')?>
            </section>
        </div>
        <div class="membership-info">
            <h2>membership info</h2>
            <button>ASL</button>
            <p>More information coming soon!</p>
        </div>
     <?php
    
 get_footer(); 
 ?>
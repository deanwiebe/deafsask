<?php 
$whoWeAre = get_page_by_title('Who We Are');
echo $whoWeAre->ID
$aboutPage = new WP_Query(array(
        'post_type' => 'page',
        'p' => 17
    ));
    while($aboutPage->have_posts()){
        $aboutPage->the_post(); ?>
        <div class="wrapper">
            <section class="about">
                <div id="asl_tab" class="asl_tab">
                    <p id="close">ASL</p>
                    <div id="asl-video" class="asl-video">
                    <iframe id="iframe" width="560" height="315" src="<?php  echo the_field('link')?>"></iframe>
                    </div>
                </div>
                <div id="about" class="about-content">
                    <h1><?php the_title()?></h1>
                    <p><?php the_content() ?></p>
                </div>
                <div class="action">
                    <a href="<?php the_permalink() ?>">Learn More</a>
                    <a href="<?php the_permalink() ?>"><i class="fas fa-arrow-right"></i></a>
                </div>
            </section>
            <section class="section_image">
                <?php the_post_thumbnail('about-page-thumbnail')?>
            </section>
        </div>
   <?php }
   ?>
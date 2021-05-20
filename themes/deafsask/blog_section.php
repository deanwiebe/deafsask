<div class="blog_wrapper">
    <div class="blog_title">
        <h1>take a Look Here</h1>
        <p>COME AND FIND OUT MORE ABOUT THE...</p>
    </div>
    <!-- Query Events -->
    <?php
        $home_page_events = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'event'
        ));
        $home_page_news = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'news'
        ));
        $home_page_resources = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'resource'
        ));

    ?>
    <div class="blog_links">
        <div class="post">
            <?php while($home_page_events->have_posts()){
                $home_page_events->the_post(); ?>
                <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                <div class="post_title event">
                    <a href="<?php echo esc_url(site_url('/events')) ?>"><h3>Events</h3></a>
                </div>
                <div class="post_arrow">
                    <a href="<?php echo esc_url(site_url('/events')) ?>"><i class="fas fa-arrow-right"></i></a>
                </div>
            <?php } ?>
        </div>
        <div class="post">
            <?php while($home_page_news->have_posts()){
                    $home_page_news->the_post(); ?>
                    <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                    <div class="post_title news">
                        <a href="<?php echo esc_url(site_url('/news')) ?>"><h3>News</h3></a>
                    </div>
                    <div class="post_arrow">
                        <a href="<?php echo esc_url(site_url('/news')) ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                <?php } ?>
        </div>
        <div class="post">
            <?php while($home_page_resources->have_posts()){
                    $home_page_resources->the_post(); ?>
                    <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                    <div class="post_title resources">
                        <a href="<?php echo esc_url(site_url('/resources')) ?>"><h3>Resources</h3></a>
                    </div>
                    <div class="post_arrow">
                        <a href="<?php echo esc_url(site_url('/resources')) ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                <?php } ?>
        </div>
    </div>
    <div class="blog_posts">
        <div class="blog_posts_title">
            <h1>Most<br>Recent<br>Update</h1>
        </div>
        <div class="recent_posts">
            <div class="single_post">
                <?php while($home_page_events->have_posts()){
                    $home_page_events->the_post() ?>
                     <a href="<?php the_permalink() ?>">
                        <div class="blog_posts_image">
                            <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                        </div>
                        <div class="content">
                            <h1><?php the_title() ?></h1>
                            <p><?php echo wp_trim_words(get_the_content(), 18)?></p>
                        </div>
                    </a>
                    <hr>
            <?php } ?>
            </div>
            <div class="single_post">
                <?php while($home_page_news->have_posts()){
                    $home_page_news->the_post() ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="blog_posts_image">
                            <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                        </div>
                        <div class="content">
                            <h1><?php the_title() ?></h1>
                            <p><?php echo wp_trim_words(get_the_content(), 18)?></p>
                        </div>
                    </a>
                    <hr>
            <?php } ?>
            </div>
            <div class="single_post">
                <?php while($home_page_resources->have_posts()){
                    $home_page_resources->the_post() ?>
                     <a href="<?php the_permalink() ?>">
                        <div class="blog_posts_image">
                            <img src="<?php echo the_post_thumbnail_url('blog_thumbnail') ?>" alt="" srcset="">
                        </div>
                        <div class="content">
                            <h1><?php the_title() ?></h1>
                            <p><?php echo wp_trim_words(get_the_content(), 18)?></p>
                        </div>
                    </a>
                    <hr>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
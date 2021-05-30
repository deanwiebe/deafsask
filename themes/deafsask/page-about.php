<?php get_header(); 
    echo('hello from page-about.php');
    get_template_part('social_media');
    get_template_part('banner');
    get_template_part('nav');
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
                    <a href="<?php the_permalink() ?>">Learn More</a>
                    <a href="<?php the_permalink() ?>"><i class="fas fa-arrow-right"></i></a>
                </div>
            </section>
            <section class="section_image">
                <?php the_post_thumbnail('about-page-thumbnail')?>
            </section>
        </div>
        <div class="board-section">
            <div class="board-title">
                <h2>meet the saskatchewan board</h2>
            </div>
            <div class="board">
                <div class="board-icons">
                    <div class="board-row">
                        <?php
                            $board = new WP_Query(array(
                                'posts_per_page' => 10,
                                'post_type' => 'board',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'meta_key' => 'row',
                                'meta_value' => 1
                            ));
                            $count = 0;
                            while($board->have_posts()){
                                $board->the_post(); ?>
                                <div class="member">
                                    <div class="member-image">
                                        <?php the_post_thumbnail('board-member') ?>
                                    </div>
                                    <div class="member-title title-green">
                                        <p><?php echo the_field('title') ?></p>
                                    </div>
                                    <div class="member-name">
                                        <p><?php the_field('name') ?></p>
                                    </div>
                                </div>
                        <?php }
                        wp_reset_query()
                        ?>
                    </div>

                    <div class="board-row">
                        <?php
                            $board = new WP_Query(array(
                                'posts_per_page' => 10,
                                'post_type' => 'board',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'meta_key' => 'row',
                                'meta_value' => 2
                            ));
                            $count = 0;
                            while($board->have_posts()){
                                $board->the_post(); ?>
                                <div class="member">
                                    <div class="member-image">
                                        <?php the_post_thumbnail('board-member') ?>
                                    </div>
                                    <div class="member-title title-red">
                                        <p><?php echo the_field('title') ?></p>
                                    </div>
                                    <div class="member-name">
                                        <p><?php the_field('name') ?></p>
                                    </div>
                                </div>
                        <?php }
                        wp_reset_query()
                        ?>
                    </div>

                    <div class="board-row">
                        <?php
                            $board = new WP_Query(array(
                                'posts_per_page' => 10,
                                'post_type' => 'board',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'meta_key' => 'row',
                                'meta_value' => 3
                            ));
                            $count = 0;
                            while($board->have_posts()){
                                $board->the_post(); ?>
                                <div class="member">
                                    <div class="member-image">
                                        <?php the_post_thumbnail('board-member') ?>
                                    </div>
                                    <div class="member-title title-blue">
                                        <p><?php echo the_field('title') ?></p>
                                    </div>
                                    <div class="member-name">
                                        <p><?php the_field('name') ?></p>
                                    </div>
                                </div>
                        <?php }
                        wp_reset_query()
                        ?>
                    </div>

                    <div class="board-row">
                        <?php
                            $board = new WP_Query(array(
                                'posts_per_page' => 10,
                                'post_type' => 'board',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'meta_key' => 'row',
                                'meta_value' => 4
                            ));
                            $count = 0;
                            while($board->have_posts()){
                                $board->the_post(); ?>
                                <div class="member">
                                    <div class="member-image">
                                        <?php the_post_thumbnail('board-member') ?>
                                    </div>
                                    <div class="member-title title-orange">
                                        <p><?php echo the_field('title') ?></p>
                                    </div>
                                    <div class="member-name">
                                        <p><?php the_field('name') ?></p>
                                    </div>
                                </div>
                        <?php }
                        wp_reset_query()
                        ?>
                    </div>

                </div>
            </div>
        </div>
     <?php
    
 get_footer(); 
 ?>
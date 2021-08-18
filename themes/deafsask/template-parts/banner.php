
<div class="banner">
    <div class="banner-image">
        <img alt="" src="<?php header_image(); ?>"  height="<?php echo absint( get_custom_header()->height ); ?>">
    </div>
    <div class="banner_overlay">
        <div class="banner_overlay_text">
            <?php
                if(is_front_page()){ ?>
                <div class="banner_overlay_text_large">
                    <h1>Saskatchewan</h1>
                    <h1>Deaf</h1>
                    <h1>Association</h1>
                </div>
                <div class="banner_overlay_text_small">
                    <p>Serving since 1980</p>
                </div>
               <?php } else { ?>
                   <h1><?php the_title() ?></h1>
              <?php }
            ?>
        </div>
        <div class="banner_pill_images">
            <div class="banner_image image_one">
                <img src="<?php echo get_field('image_1') ?>" alt="">
            </div>
            <div class="banner_image image_two">
                <img src="<?php echo get_field('image_2') ?>" alt="">
            </div>
            <div class="banner_image image_three">
                <img src="<?php echo get_field('image_3') ?>" alt="">
            </div>
        </div>
    </div>
    <div class="banner_under_overlay">
        
    </div>
</div>
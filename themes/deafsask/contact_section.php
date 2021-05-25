<?php 
    $contact = get_page_by_title('CONTACT US');
    $contactPage = new WP_Query(array(
            'post_type' => 'page',
            'p' => $contact->ID
        ));
        while($contactPage->have_posts()){
            $contactPage->the_post(); ?>
            <div class="contactWrapper">
                <div id="contact_title" class="contact_title">
                    <h1><?php the_title()?></h1>
                </div>
                <div class="contact-wrapper">
                    <section class="section_image">
                        <?php the_post_thumbnail('about-page-thumbnail')?>
                    </section>
                    <section class="contact">
                        <div class="contact-content">
                            <p><?php the_content() ?></p>
                        </div>
                    </section>
                </div>
            </div>
    <?php }
?>
  
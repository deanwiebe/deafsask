<?php
//Loading CSS/Styles and Javascript files
function deaf_sask_files(){
    wp_enqueue_style('font_awsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@400;700&display=swap');

    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('main_script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('main_vendor', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('main_script', get_theme_file_uri('/bundled-assets/scripts.2ab174b04d002e79e1e6.js'), NULL, '1.0', true);
        wp_enqueue_style('main_style', get_theme_file_uri('/bundled-assets/styles.2ab174b04d002e79e1e6.css'));
    }
}

add_action('wp_enqueue_scripts', 'deaf_sask_files');

//Banner Background image
function deafsask_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 300,
        'flex-width'         => FALSE,
        'flex-height'        => FALSE,
    );
    add_theme_support( 'custom-header', $args );
    //Add support for featured image
    add_theme_support( 'post-thumbnails' );
    add_image_size('about-page-thumbnail', 700, 500, true);
    add_image_size('blog_thumbnail', 400, 300, true);
}
add_action( 'after_setup_theme', 'deafsask_custom_header_setup' );
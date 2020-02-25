<?php
add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
function theme_scripts()
{
    wp_enqueue_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('Slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');
    wp_enqueue_style('slickTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css');
    wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
    wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/style.css');


    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', ['jquery'], true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.js');
}
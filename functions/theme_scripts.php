<?php
add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
function theme_scripts()
{
    wp_enqueue_style('main style', get_template_directory_uri() . '/assets/styles/main.css');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/scripts/main.js');


    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/resources/node_modules/jquery/dist/jquery.min.js');
    wp_enqueue_script('popper.js', get_template_directory_uri() . '/resources/node_modules/popper.js/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/resources/node_modules/bootstrap/dist/js/bootstrap.min.js');
}
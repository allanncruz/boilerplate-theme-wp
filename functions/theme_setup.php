<?php

if (!function_exists('theme_setup')) {
    function theme_setup()
    {
        // Add thumbnail support
        add_theme_support('post-thumbnails');

        // Adds theme support to logo
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 80,
                'width'       => 220,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Add the header menu
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus( array(
            'principal' => __('Menu Principal', 'bstwp')
        ));
    }
}

add_action('after_setup_theme', 'theme_setup');

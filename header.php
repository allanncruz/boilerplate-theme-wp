<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title') ?></title>

    <?php wp_head(); ?>

    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/cropped-icon-32x32.png" sizes="32x32">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/cropped-icon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/assets/images/cropped-icon-180x180.png">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/images/cropped-icon-270x270.png">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg p-0 navbar-light">
        <div class="container p-0">
            <div class="navbar-brand">
                <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');


                    if(has_custom_logo()) {
                        echo '<img src="'. esc_url($logo[0]). '" class="img-fluid">';
                    }else {
                        echo '<h3>'. get_bloginfo('name'). '</h3>';
                        echo '<p>'. get_bloginfo('description'). '</p>';
                    } 
                ?>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="ml-auto">
                    <div class="navbar-top d-block d-lg-flex align-items-center">
                        <div class="navbar-social">
                            <a href="<?php echo get_theme_mod('instagram_username') ?>" target="_blank" class="nav-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?php echo get_theme_mod('facebook_username') ?>" target="_blank" class="nav-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo get_theme_mod('linkedin_username') ?>" target="_blank" class="nav-icon">
                            <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="navbar-login">
                            <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart mr-2"></i> Comprar</a>
                        </div>
                    </div>
                    <div class="navbar-links">
                        <?php
                         wp_nav_menu( array(
                            'theme_location'    => 'principal',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbar-collapse',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
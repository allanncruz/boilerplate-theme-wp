<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title') ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

    <!-- Plugins -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

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
                <?php the_custom_logo() ?>
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
                            <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart mr-2"></i> Comprar passeio</a>
                        </div>
                    </div>
                    <div class="navbar-links">
                        <?php
                         wp_nav_menu( array(
                            'theme_location'    => 'principal',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
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
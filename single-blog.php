<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="singlepage-title">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="text-uppercase">Blog</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
    </div>

    <div id="main" class="singlepage pt-3 pb-5">
        <div class="container">
            <h1 class="single-title"><?php the_title() ?></h1>
            <h5 class="single-subtitle"><?php the_field('blog-subtitle') ?></h5>


            <div class="singlepage-social">
                <div class="d-flex align-items-center justify-content-between">
                    <small class="d-block m-0">Publicado dia <?php echo get_the_date(); ?></small>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="#" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <hr>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img class="card-img-top border mb-5" src="<?php the_field('blog-thumbnail'); ?>" alt="<?php the_title(); ?>">
                    <?php the_field('blog-texto'); ?>

                    <hr>

                    <?php
                    $category = get_the_category();
                    $firstCategory = $category[0]->cat_name;
                     ?>
                    <div class="blog-badge">
                        <?php echo get_the_term_list( get_the_ID(), 'tipo_blog', '', ' ' ); ?>
                    </div>
                    
                    <!-- Plugincomentários do Facebook -->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
                    <div class="fb-comments" data-href="https://pt-br.facebook.com/atleconsultoria/" data-width="100%" data-numposts="5"></div>

                </div>
            </div>

            <div class="row py-5">
                <?php

                $blogs = new WP_Query([
                    'post_type' => ['blog'],
                    'posts_per_page' => 3
                    ]);
                if ($blogs->have_posts()) :

                    while ($blogs->have_posts()) : $blogs->the_post(); ?>

                        <div class="col-md-4 blog mb-4">
                            <div class="card-blog card">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card-img-top" src="<?php the_field('blog-thumbnail'); ?>" alt="<?php the_title(); ?>">
                                </a>
                                <div class="card-body px-0">
                                    <small class="text-uppercase d-block mb-2"><?php echo get_the_date(); ?></small>
                                    <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
                                    <p class="card-text mt-2"><?php the_field('blog-subtitle'); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; wp_reset_query(); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer() ?>
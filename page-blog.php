<?php get_header() ?>

<?php the_post() ?>
    <section class="singlepage-title">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="text-uppercase"><?php the_title(); ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        <li class="breadcrumb-item" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
    </section>

    <section id="main" class="singlepage">
        <article>
            <div class="container">
                <?php the_content() ?>
                <div class="row">
                    <?php

                    $blogs = new WP_Query([
                        'post_type' => ['blog']]);
                    if ($blogs->have_posts()) :

                        while ($blogs->have_posts()) : $blogs->the_post(); ?>

                            <div class="col-md-4 blog mb-4">
                                <div class="card-blog card">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="card-img-top" src="<?php the_field('blog-thumbnail'); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                    <!-- <span class="card-category">
                                        <?php echo get_the_term_list( get_the_ID(), 'tipo_blog', '', ', ' ); ?>
                                    </span> -->
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
        </article>
    </section>

<?php get_footer() ?>

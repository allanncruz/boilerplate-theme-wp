<?php get_header() ?>
<section class="singlepage-title">
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
    </section>

    <section id="main">
        <div class="container">

    <div class="row">
        <?php  while(have_posts()): the_post(); ?>

                <div class="col-md-4">
                    <div class="card-blog card border-0">
                        <a href="<?php the_permalink(); ?>">
                            <img class="card-img-top" src="<?php the_field('blog-thumbnail'); ?>" alt="<?php the_title(); ?>">
                        </a>

                        <!-- <span class="card-category">
                            <?php echo get_the_term_list( get_the_ID(), 'tipo_blog', '', ', ' ); ?>
                        </span> -->
                        <?php the_category(); ?>
                        <div class="card-body px-0">
                            <small class="text-uppercase d-block mb-2"><?php echo get_the_date(); ?></small>
                            <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
                            <p class="card-text"><?php the_field('blog-subtitle'); ?></p>
                        </div>
                    </div>
                </div>

        <?php endwhile; ?>
    </div>
        </div>
    </section>



<?php get_footer() ?>
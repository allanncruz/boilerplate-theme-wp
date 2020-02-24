<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section class="singlepage-title">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="text-uppercase"><?php the_title(); ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Home</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
    </section>

    <section class="breadcrumb">
        <div class="container">
            <p class="breadcrumb__text">
                Home | <span class="breadcrumb__text--active"><?php the_title() ?></span>
            </p>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="d-flex align-items-start">
                <div class="d-inline-block">
                    <h2><?php the_title() ?></h2>
                    <?php the_content(); ?>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary px-4 text-uppercase ml-auto">Voltar</a>
            </div>


        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer() ?>
<?php get_header() ?>

    <?php the_post() ?>

    <div class="singlepage-title">
        <div class="container">
            <div class="d-md-flex d-block align-items-center justify-content-between">
                <h3 class="text-uppercase"><?php the_title() ?></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        <li class="breadcrumb-item" aria-current="page"><?php the_title() ?></li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
    </div>
    <div id="main" class="singlepage pt-3 pb-5">
        <img class="singlepage--thumbnail" alt="<?php the_title();?>" src="<?php the_post_thumbnail_url(); ?> ">

        <div class="row justify-content-center">
            <div class="col-md-8 px-md-0 px-5">
                <article>
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </div>

<?php get_footer() ?>
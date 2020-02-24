<?php get_header() ?>


    <!--vitrine__carousel Desktop-->
    <section class="vitrine__carousel">
        <?php
        $vitrines = new WP_Query([
            'post_type' => ['vitrine']]);
        if ($vitrines->have_posts()) :
            while ($vitrines->have_posts()) : $vitrines->the_post(); ?>

                <div class="vitrine-thumbnail" style="background: url('<?php the_field('vitrine-thumbnail') ?>')center">
                    <?php
                    $link = get_field('vitrine-link');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"></a>
                    <?php endif; ?>
                </div>

            <?php endwhile; endif; ?>
    </section>

    <section class="blog">
        <div class="container">
            <h3 class="title">blog</h3>
                <div class="row">
                    <?php
                    $blog = new WP_Query(array(
                            'post_type' => 'blog',
                            'posts_per_page' => 2
                    ));
                    if ($blog->have_posts()): while ($blog->have_posts()): $blog->the_post(); ?>

                        <div class="col-md-6 blog__item">
                            <div class="card-blog card border-0">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card-img-top" src="<?php the_field('blog-thumbnail'); ?>" alt="<?php the_title(); ?>">
                                </a>
<!--                                <span class="card-category">-->
<!--                                    --><?php //echo get_the_term_list( get_the_ID(), 'tipo_blog', '', ', ' ); ?>
<!--                                </span>-->
                                <div class="card-body pt-md-5 pt-2">
                                    <small class="text-uppercase d-block m-0"><?php echo get_the_date(); ?></small>
                                    <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
                                    <p class="card-text mt-3"><?php the_field('blog-subtitle'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
        </div>
    </section>

<?php get_footer() ?>
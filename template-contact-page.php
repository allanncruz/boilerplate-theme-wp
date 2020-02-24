<?php

/**
 * Template Name: Página de contato
 */

get_header();

?>

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


<section class="contact mt-5">
    <div class="container">
        <h5 class="subtitle">Entre em contato através do formulário abaixo:</h5>
        <?php echo do_shortcode( '[contact-form-7 id="250" title="Contato"]' ); ?>
    </div>
</section>

<?php

get_footer();

?>
<div class="card card__services">
    <div class="card-img-top" style="background-image: url(<?php the_field('service-thumbnail') ?>)">
        <div class="overlay"></div>
    </div>
    <span class="card-icon">
            <img src="<?php the_field('service-icon') ?>" alt="Ícone para <?php the_title() ?>">
        </span>
    <div class="card-body">
        <h5 class="card-title"><?php the_title() ?></h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-gradient text-uppercase">Saiba mais</a>
    </div>
</div>
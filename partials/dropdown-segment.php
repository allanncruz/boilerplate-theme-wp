<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pesquisar por segmento
    <i class="fas fa-angle-down"></i>
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php wp_list_categories(array(
        'taxonomy' => 'tipo_client',
        'title_li' => '',
        'hide_empty' => true,
        'show_count'          => 0
    )); ?>
    <li class="cat-item">
        <a href="<?php bloginfo('url'); ?>/todos-clientes">Todos</a>
    </li>
</div>
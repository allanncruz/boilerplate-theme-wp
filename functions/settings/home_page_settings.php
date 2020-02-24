<?php

function home_page_customize_register($wp_customize)
{
    $wp_customize->add_section('home_page_section', array(
        'title'      => __('Tela inicial', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('cover_1_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('cover_1_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('cover_2_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cover_2_text', array(
        'label'      => __('Texto da segunda capa', 'text_domain'),
        'section'    => 'home_page_section',
        'settings'   => 'cover_2_text',
    )));

    $wp_customize->add_setting('cover_2_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Media_Control($wp_customize, 'cover_2_image', [
            'label' => __('Imagem de fundo da segunda capa'),
            'section' => 'home_page_section',
            'mime_type' => 'image',
        ])
    );
}
add_action('customize_register', 'home_page_customize_register');

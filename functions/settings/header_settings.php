<?php

function header_customize_register($wp_customize)
{
    $wp_customize->add_section('header_section', array(
        'title'      => __('Cabeçalho', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('exam_btn_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'exam_btn_url', array(
        'label'      => __('Link para botão de Exame', 'text_domain'),
        'section'    => 'header_section',
        'settings'   => 'exam_btn_url',
    )));


    $wp_customize->add_setting('whatsapp_btn_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'whatsapp_btn_url', array(
        'label'      => __('Link para botão do WhatsApp', 'text_domain'),
        'section'    => 'header_section',
        'settings'   => 'whatsapp_btn_url',
    )));
}

add_action('customize_register', 'header_customize_register');

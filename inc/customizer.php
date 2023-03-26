<?php

function one42_customize_register($wp_customize) {

// Logo Image
$wp_customize->add_section('logo', array(
        'title'       => __('Logo', 'OnefortyTwo-Basic'),
        'description' => sprintf(__('Add Custom Logo', 'OnefortyTwo-Basic')),
        'priority'    => 10
    ));

    $wp_customize->add_setting('logo_image', array(
        'default'   => get_bloginfo('template_directory').'/img/logo-2.svg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label'     => __('Logo Image', 'OnefortyTwo-Basic'),
        'section'   => 'logo',
        'settings'  => 'logo_image',
        'priority'  => 1
    )));

// Hero Section
    $wp_customize->add_section('hero', array(
        'title'       => __('Hero', 'OnefortyTwo-Basic'),
        'description' => sprintf(__('Options for Hero', 'OnefortyTwo-Basic')),
        'priority'    => 130
    ));

    $wp_customize->add_setting('hero_image', array(
        'default'   => get_bloginfo('template_directory').'/img/4.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'     => __('Hero Image', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'settings'  => 'hero_image',
        'priority'  => 1
    )));
    $wp_customize->add_setting('hero_heading', array(
        'default'   => _x('Custom Wordpress Theme', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_heading', array(
        'label'     => __('Heading', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 2
    ));
    $wp_customize->add_setting('hero_text', array(
        'default'   => _x('Basic Theme For Small Businesses', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_text', array(
        'label'     => __('Text', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 3
    ));
    $wp_customize->add_setting('hero_primary_cta_url', array(
        'default'   => _x('http://test.com', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_primary_cta_url', array(
        'label'     => __('Primary CTA Link', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 4
    ));
    $wp_customize->add_setting('hero_primary_cta_text', array(
        'default'   => _x('Read More', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_primary_cta_text', array(
        'label'     => __('Primary CTA Text', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 5
    ));
    $wp_customize->add_setting('hero_secondary_cta_url', array(
        'default'   => _x('http://test.com', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_secondary_cta_url', array(
        'label'     => __('Secondary CTA Link', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 6
    ));
    $wp_customize->add_setting('hero_secondary_cta_text', array(
        'default'   => _x('Read More', 'OnefortyTwo-Basic'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('hero_secondary_cta_text', array(
        'label'     => __('Secondary CTA Text', 'OnefortyTwo-Basic'),
        'section'   => 'hero',
        'priority'  => 7
    ));
}

add_action('customize_register', 'one42_customize_register');

?>
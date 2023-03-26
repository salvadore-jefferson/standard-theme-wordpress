<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php  bloginfo('description'); ?>">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title();?></title>

    <link href="<?php bloginfo('template_url');?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="inner-nav" role="navigation">
            <a href="/" class="site-logo"><img
                    src="<?php echo get_theme_mod('logo_image', get_bloginfo('template_url').'/img/logo.svg');?>"
                    alt=""></a>
            <a class="site-name" href="/"><?php bloginfo('name');?></a>
            <div class="toggler-btn" onclick="toggle()">
                <span id="span-1"></span>
                <span id="span-2"></span>
                <span id="span-3"></span>
            </div>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'main-menu',
            'menu_class'        => 'menu-links',
        ) );
        ?>
        </nav>
    </header>
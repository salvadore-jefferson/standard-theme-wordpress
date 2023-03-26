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
    <style>
    .front-hero-section {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.5)),
            url(<?php echo get_theme_mod('hero_image', get_bloginfo('template_url').'/img/hero-bg.jpg');
        ?>);
        repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <header class="front-hero-section">
        <nav class="front-nav" role="navigation">
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
        <div class="hero">
            <div class="main-tagline">
                <h1><?php echo get_theme_mod('hero_heading', 'Custom Wordpress Theme'); ?></h1>
            </div>
            <div class="sub-tagline">
                <p><?php echo get_theme_mod('hero_text', 'Basic Theme For Small Businesses'); ?></p>
            </div>
            <div class="cta">
                <div class="cta-btn cta-main">
                    <a
                        href="<?php echo get_theme_mod('hero_primary_cta_url', 'http://test.com'); ?>"><?php echo get_theme_mod('hero_primary_cta_text', 'Read More'); ?></a>
                </div>
                <div class="cta-btn cta-secondary">
                    <a
                        href="<?php echo get_theme_mod('hero_secondary_cta_url', 'http://test.com'); ?>"><?php echo get_theme_mod('hero_secondary_cta_text', 'Read More'); ?></a>
                </div>
            </div>
        </div>
    </header>
    <main class="container mt-5">
        <section>
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
            </div>
            </div>
            <div class="col-md-4">
                <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
            </div>
            </div>
        </section>
        <section>
            <p class="blog-body"><?php the_content();?></p>
        </section>

        <?php get_footer();?>
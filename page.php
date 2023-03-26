<?php get_header(); ?>
<main class="container mt-5">
    <section class="row">
        <div class="blog col-md-8">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="post">
                <h3 class="blog-title"><?php the_title(); ?></a></h3>
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
                <p class="blog-body"><?php the_content();?></p>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Page Found'); ?></p>

            <?php endif; ?>
        </div>
        <div class="col-md-4 sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </section>
    <?php get_footer();?>
<?php get_header(); ?>
<main class="container mt-5">
    <section class="row">
        <div class="blog col-md-8">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="post">
                <h3 class="blog-title"><?php the_title(); ?></h3>
                <p class="blog-meta"><?php the_time('F j, Y g:i a');?> by <a
                        href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php the_author();?></a>
                </p>
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
                <p class="blog-body"><?php the_content();?></p>
                <hr>
                <?php comments_template(); ?>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Posts'); ?></p>

            <?php endif; ?>
        </div>
        <div class="col-md-4 sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </section>
    <?php get_footer();?>
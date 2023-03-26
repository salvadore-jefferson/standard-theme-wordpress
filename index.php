<?php get_header(); ?>
<main class="container mt-5">
    <section>
        <div class="blog">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="post">
                <h3 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <p class="blog-meta"><?php the_time('F j, Y g:i a');?> by <a
                        href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php the_author();?></a>
                </p>
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
                <p class="blog-body"><?php the_excerpt();?></p>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Posts'); ?></p>

            <?php endif; ?>
        </div>
    </section>
    <?php get_footer();?>
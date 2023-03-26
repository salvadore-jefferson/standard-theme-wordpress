</main>
<footer class="blog-footer">
    <div class="sections container d-flex mt-5 pt-5 gap-4 justify-content-between">
        <div class="left">
            <h3>Locations</h3>
            <?php if(is_active_sidebar('footer-left')) : ?>
            <?php dynamic_sidebar('footer-left'); ?>
            <?php endif; ?>
        </div>
        <div class="center">
            <h3>Services</h3>
            <?php if(is_active_sidebar('footer-center')) : ?>
            <?php dynamic_sidebar('footer-center'); ?>
            <?php endif; ?>
        </div>
        <div class="right">
            <h3>Useful Links</h3>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'footer-menu',
            'menu_class'        => 'menu-links',
        ) );
        ?>
        </div>
    </div>
    <div class="text-center mt-5 copywrite">
        <span class="me-2">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name');?></span> |
        <span class="ms-2"><a href="https://www.142webstudio.dev"> Built by 142 Web Studio</a></span>
    </div>
</footer>
<?php wp_footer(); ?>


<script src="<?php bloginfo('template_url');?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
</body>

</html>
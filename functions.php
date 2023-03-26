<?php
// register nav walker
require_once('class-wp-bootstrap-navwalker.php');

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

// theme support
function one42_theme_setup() {
    add_theme_support('post-thumbnails');
    
    register_nav_menus (array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'one42_theme_setup');

function set_excerpt_length() {
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// widget locations
function one42_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'

    ));
    register_sidebar(array(
        'name' => 'Box1',
        'id'   => 'box1',
        'before_widget' => '<div class="card">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'

    ));
    register_sidebar(array(
        'name' => 'Box2',
        'id'   => 'box2',
        'before_widget' => '<div class="card">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'

    ));
    register_sidebar(array(
        'name' => 'Box3',
        'id'   => 'box3',
        'before_widget' => '<div class="card">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'

    ));
    register_sidebar(array(
        'name' => 'Footer-Left',
        'id'   => 'footer-left',
        'before_widget' => '<div class="footer-content">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
    register_sidebar(array(
        'name' => 'Footer-Center',
        'id'   => 'footer-center',
        'before_widget' => '<div class="footer-content">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
    register_sidebar(array(
        'name' => 'Footer-Right',
        'id'   => 'footer-right',
        'before_widget' => '<div class="footer-content">',
        'after_widget'  => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}
add_action('widgets_init', 'one42_init_widgets');

// enable theme customizer
require_once get_template_directory(). '/inc/customizer.php';
?>
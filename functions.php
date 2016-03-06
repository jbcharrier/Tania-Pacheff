<?php


/*------- @Setup */

add_action('after_setup_theme', 'jbc_setup_theme');

function jbc_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('main', 'Menu principal header');
    register_nav_menu('secondary', 'Menu category prestations');

}

add_action('widgets_init', 'jbc_add_sidebar');

function jbc_add_sidebar()
{
    register_sidebar(array(
        'id' => 'widget1',
        'name' => 'Inscription newsletter (footer)',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
    ));
    register_sidebar(array(
        'name' => 'Sidebar du blog',
        'id' => 'sidebar-blog',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}


/*------- @remove admin header */

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}


/*------- @script header */

add_action('wp_enqueue_scripts', 'jbc_setup_scripts');

function jbc_setup_scripts()
{
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
//    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/style1.css');
//    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/demo.css');
    wp_enqueue_style('fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
    wp_enqueue_script('jquery');
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], false);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js');
//    wp_enqueue_script('modernizer-js', get_template_directory_uri() . '/assets/js/modernizr.custom.86080.js');
}


/*------- @Custom post type */

require_once TEMPLATEPATH . '/include/custom-post-type/tp_atelier.php';
require_once TEMPLATEPATH . '/include/custom-post-type/tp_references.php';
require_once TEMPLATEPATH . '/include/custom-post-type/tp_bonnes_adresses.php';
require_once TEMPLATEPATH . '/include/metabox/tp_meta_bonne_adresse.php';
require_once TEMPLATEPATH . '/include/metabox/tp_meta_reference.php';


/*------- @Sécurité */

add_filter('login_errors',create_function('$erreur', "return 'Erreur de connexion';"));
remove_action('wp_head', 'wp_generator');



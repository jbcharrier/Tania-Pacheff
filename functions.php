<?php

define('CAT_ID_PHP', 2);



/*------- @Setup */

add_action('after_setup_theme', 'jbc_setup_theme');

function jbc_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('main', 'Menu principal header');
}

add_action('widgets_init', 'jbc_add_sidebar');

function jbc_add_sidebar()
{
    register_sidebar(array(
        'id' => 'widget1',
        'name' => 'Zone de widget (newsletter form)',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
    ));
}


/*------- @script header */

add_action('wp_enqueue_scripts', 'jbc_setup_scripts');

function jbc_setup_scripts()
{
    //get_stylesheet_uri()->wp-content/theme/apero/style.css
    wp_enqueue_style('style-css', get_stylesheet_uri());

    //get_template_directory_uri(); // wp-content/themes/apero
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    //ajouter des styles pour une page donnée
    if (is_category(CAT_ID_PHP)) {
        wp_enqueue_style('cat-php-css', get_template_directory_uri() . '/assets/css/cat.css');
    }

    //wp_enqueue_script('jquery'); = ['jquery']
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], false, true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
}



/*------- @Custom post type */

require_once TEMPLATEPATH . '/include/custom-post-type/tp_temoignage.php';

require_once TEMPLATEPATH . '/include/custom-post-type/tp_atelier.php';



<?php

define('CAT_ID_PHP', 2);

/*------- @script header */

add_action('wp_enqueue_scripts', 'jbc_setup_scripts');

function jbc_setup_scripts()
{

    //get_stylesheet_uri()->wp-content/theme/apero/style.css
    wp_enqueue_style('style-css', get_stylesheet_uri());

    //get_template_directory_uri(); // wp-content/themes/apero
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');

    //ajouter des styles pour une page donnée

    if(is_category(CAT_ID_PHP))
    {
        wp_enqueue_style('cat-php-css', get_template_directory_uri().'/assets/css/cat.css');
    }

    //wp_enqueue_script('jquery'); = ['jquery']
    wp_enqueue_script('app-js', get_template_directory_uri().'/assets/js/app.js', ['jquery'], false, true);


}
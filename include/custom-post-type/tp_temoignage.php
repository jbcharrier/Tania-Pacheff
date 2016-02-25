<?php
add_action('init', 'tp_create_temoignage_custom');
function tp_create_temoignage_custom()
{
    $labels = [
        'name' => 'temoignage',
        'singular_name' => 'temoignage',
        'search_items' => 'rechercher un témoignage',
        'all_items' => 'Tous les témoignages',
        'edit_item' => 'éditer un témoignages',
        'update_item' => 'mettre à jour un témoignages',
        'add_new_item' => 'ajouter un témoignage',
        'menu_name' => 'Témoignage',
        'view' => 'voir',
        'not_found' => 'aucun témoignage trouvé',
        'not_found_in_trash' => 'aucun témoignage trouvé dans la poubelle',
    ];
    register_post_type('temoignage', [
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true, // tools bar
        'show_in_nav_menus',
        'exclude_from_search' => false,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => 'temoignage',
        //'menu_icon' => get_template_directory_uri() . '/images/py.png',
        'menu_position' => 4,
        'supports' => ['title', 'editor', 'thumbnail', 'page-attributes']
    ]);
}
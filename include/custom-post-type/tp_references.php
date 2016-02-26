<?php
add_action('init', 'tp_create_references_custom');
function tp_create_references_custom()
{
    $labels = [
        'name' => 'references',
        'singular_name' => 'references',
        'search_items' => 'rechercher une référence',
        'all_items' => 'Toutes les références',
        'edit_item' => 'éditer une référence',
        'update_item' => 'mettre à jour une référence',
        'add_new_item' => 'ajouter une référence',
        'menu_name' => 'Référence',
        'view' => 'voir',
        'not_found' => 'aucune référence trouvée',
        'not_found_in_trash' => 'aucune référence trouvée dans la poubelle',
    ];
    register_post_type('reference', [
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true, // tools bar
        'show_in_nav_menus',
        'exclude_from_search' => false,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => 'reference',
        //'menu_icon' => get_template_directory_uri() . '/images/py.png',
        'menu_position' => 3,
        'supports' => ['title', 'excerpt', 'thumbnail', 'page-attributes']
    ]);
}
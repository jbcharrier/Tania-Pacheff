<?php
add_action('init', 'tp_create_atelier_custom');
function tp_create_atelier_custom()
{
    $labels = [
        'name' => 'atelier',
        'singular_name' => 'atelier',
        'search_items' => 'rechercher un atelier',
        'all_items' => 'Tous les ateliers',
        'edit_item' => 'éditer un atelier',
        'update_item' => 'mettre à jour un atelier',
        'add_new_item' => 'ajouter un atelier',
        'menu_name' => 'Atelier',
        'view' => 'voir',
        'not_found' => 'aucun atelier trouvé',
        'not_found_in_trash' => 'aucun atelier trouvé dans la poubelle',
    ];
    register_post_type('atelier', [
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true, // tools bar
        'show_in_nav_menus',
        'exclude_from_search' => false,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => 'atelier',
        'menu_position' => 3,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'taxonomies' => ['category']
    ]);
}
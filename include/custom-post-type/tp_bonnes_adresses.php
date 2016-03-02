<?php
add_action('init', 'tp_create_bonnes_adresses_custom');
function tp_create_bonnes_adresses_custom()
{
    $labels = [
        'name' => 'bonnes_adresses',
        'singular_name' => 'bonnes_adresses',
        'search_items' => 'rechercher une bonne adresse',
        'all_items' => 'Toutes les bonnes adresses',
        'edit_item' => 'éditer une bonne adresse',
        'update_item' => 'mettre à jour une bonne adresse',
        'add_new_item' => 'ajouter une bonne adresse',
        'menu_name' => 'Bonne adresse',
        'view' => 'voir',
        'not_found' => 'aucune bonne adresse trouvée',
        'not_found_in_trash' => 'aucune bonne adresse trouvée dans la poubelle',
    ];
    register_post_type('bonne_adresse', [
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true, // tools bar
        'show_in_nav_menus',
        'exclude_from_search' => false,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => 'bonne_adresse',
        'menu_position' => 3,
        'supports' => ['title', 'thumbnail', 'editor', 'address1', 'addess2', 'page-attributes']
    ]);
}
<?php

add_action('add_meta_boxes', 'tp_meta_bonne_adresse');

function tp_meta_bonne_adresse()
{
    add_meta_box('tp-metasite', 'Adresse de la bonne adresse', 'tp_field_site', 'bonne_adresse', 'normal', 'high');
}


function tp_field_site($post)
{

    $_tp_meta_address = get_post_meta($post->ID, '_tp_meta_address', true);

    wp_nonce_field('tp_meta_address_field_verify', 'tp_meta_address_field_nonce');

    $error= get_transient('setting_error');
    if(!empty($error)) echo "<p>$error</p>";
    delete_transient('setting_error');


    $address='';
    if(!empty($_tp_meta_address))
    {
        echo "<p>Adresse enregistrée: {$_tp_meta_address['address']}</p>";
        $address = $_tp_meta_address['address'];
    }

    echo '<p>Adresse: <input type="text" name="_tp_meta_address" value="'.$address.'"></p>';
}



add_action('save_post', 'tp_meta_address_save');

function tp_meta_address_save($postId)
{
    if(!isset($_POST['tp_meta_address_field_nonce']) || !wp_verify_nonce($_POST['tp_meta_address_field_nonce'], 'tp_meta_address_field_verify'))
        return;

    if(!current_user_can('edit_post', $postId))
        return;

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if(!empty($_POST['_tp_meta_address']))
    {
        $address = sanitize_text_field($_POST['_tp_meta_address']);
        update_post_meta($postId, '_tp_meta_address', ['address' => $address]);
    }
}
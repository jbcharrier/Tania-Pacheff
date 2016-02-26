<?php

add_action('add_meta_boxes', 'tp_meta_site');

function tp_meta_site()
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















//add_action('add_meta_boxes', 'tp_meta_site');
//
////pour définir une metabox
//function tp_meta_site()
//{
//    add_meta_box('tp_address', 'Adresse de bonnes adresses', 'tp_field_address', 'bonne_adresse', 'normal', 'high');
//}
//
//function tp_field_address($post)
//{
//    echo '<input type="hidden" name="addressmeta_noncename" id="addressmeta_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__)) .'"/>';
//    $address = get_post_meta($post->ID, '_bonne_adress', true);
//    echo '<p>Adresse: <input id="adresse" type="text" name="_bonne_adresse" value="' . $address . '"/></p>';
//}
//
//
//add_action('save_post', 'tp_save_address_meta');
//
//function tp_save_address_meta ($post_id, $post)
//{
//    if(!wp_verify_nonce($_POST['addressmeta_noncename'], plugin_basename(__FILE__) )){
//        return $post->ID;
//    }
//
//    if( !current_user_can( 'edit_post', $post->ID))
//        return $post->ID;
//
//    $address_meta['_bonne_adresse'] = $_POST['_bonne_adresse'];
//
//    foreach($address_meta as $key => $value){
//        if($post->post_type == 'revision') return;
//        $value = implode(',', (array)$value);
//        if(get_post_meta($post->ID, $key, FALSE)){
//            update_post_meta($post->ID, $key, $value);
//        } else{
//            add_post_meta($post->ID, $key, $value);
//        }
//        if(!$value) delete_post_meta($post->ID, $key);
//    }
//}
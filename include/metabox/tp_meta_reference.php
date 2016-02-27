<?php

add_action('add_meta_boxes', 'tp_meta_reference');

function tp_meta_reference()
{
    add_meta_box('tp-meta-ref', 'URL du site de la référence', 'tp_field_url', 'reference', 'normal', 'high');
}


function tp_field_url($post)
{

    $_tp_meta_url = get_post_meta($post->ID, '_tp_meta_url', true);

    wp_nonce_field('tp_meta_url_field_verify', 'tp_meta_url_field_nonce');

    $error= get_transient('setting_error');
    if(!empty($error)) echo "<p>$error</p>";
    delete_transient('setting_error');


    $url='';
    if(!empty($_tp_meta_url))
    {
        echo "<p>url enregistrée: {$_tp_meta_url['url']}</p>";
        $url = $_tp_meta_url['url'];
    }

    echo '<p>URL: <input type="url" name="_tp_meta_url" value="'.$url.'"></p>';
}



add_action('save_post', 'tp_meta_url_save');

function tp_meta_url_save($postId)
{
    if(!isset($_POST['tp_meta_url_field_nonce']) || !wp_verify_nonce($_POST['tp_meta_url_field_nonce'], 'tp_meta_url_field_verify'))
        return;

    if(!current_user_can('edit_post', $postId))
        return;

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if(!empty($_POST['_tp_meta_url']))
    {
        $url = sanitize_text_field($_POST['_tp_meta_url']);
        update_post_meta($postId, '_tp_meta_url', ['url' => $url]);
    }
}
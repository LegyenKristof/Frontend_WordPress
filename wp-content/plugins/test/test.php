<?php

/**
 * Plugin Name: Test Plugin
 */

 function test_send_mail($post) {
     //mail(...)

     error_log("---------------");
     error_log("Üzenet");
     error_log("---------------");
 }
 add_action("save_post", "test_send_mail", 10, 3);

 function test_delete_post(int $postid, WP_Post $post) {
    error_log("---------------");
    error_log("Törölve: {$post->post_title}");
    error_log("---------------");
 }
 add_action("delete_post", "test_delete_post", 10, 2);

 
function test_esperente($text) {
    $text = preg_replace('/[aáeéiíoóöőuúüű]/u', 'e', $text);
    $text = preg_replace('/[AÁEÉIíOÓÖŐUÚÜŰ]/u', 'E', $text);
    return $text;
}
add_filter('the_title', 'test_esperente');
add_filter('the_content', 'test_esperente');

function test_shortcode($args, $text) {
return '"' . $text . '"';
}

add_shortcode('edezet', 'test_shortcode');
<?php
/**
* Plugin Name: myfirstplugin
* Plugin URI: 
* Description: test
* Version: 0.1
* Author: Code Pixelz Media
* Author URI: 
**/
/* Main Plugin File */


//function to check if the post is a page or a post
function content_link($content) {
    global $post;
    if ($post->post_type == 'page') {
        $contact_link = get_permalink(get_page_by_path('contact us'));
        $contact_text = '<h4>Need more help? <a href="' . $contact_link . '">Contact us</a>.</h4>';
        $content .= $contact_text;
    }
    return $content;
    
}
add_filter('the_content', 'content_link');

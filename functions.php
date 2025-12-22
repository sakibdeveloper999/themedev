<?php 

// link to stylesheet
function themeDev_enqueueing() {
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css'), 'all');
}
add_action( 'wp_enqueue_scripts', 'themeDev_enqueueing' );
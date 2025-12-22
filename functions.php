<?php 

// Enqueueing styles and scripts
function themeDev_enqueueing() {
    // link to stylesheet
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css'), 'all');
    // link to javascript file
    wp_enqueue_script( 'main-javascript', get_template_directory_uri() . '/index.js', array('jquery'), filemtime(get_template_directory().'/index.js'), true );
    // link to Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'themeDev_enqueueing' );
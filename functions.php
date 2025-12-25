<?php 

// Enqueueing styles and scripts
function themeDev_enqueueing() {
    // link to stylesheet
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css'), 'all');
    // link to javascript file
    wp_enqueue_script('dropdown' , get_template_directory_uri(). '/js/dropdown.js', array(),'1.0', true );
    // link to Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'themeDev_enqueueing' );

// Registering navigation menu



    function themeDev_config(){
        register_nav_menus(
         array(
        'themeDav-main-menu'=> 'Main Menu',
        'themeDav-footer-menu'=> 'Footer Menu',
        'themeDav-social-menu'=> 'Social Menu',
       )
        );
        $args = array(
            'height'=> 250,
            'width'=> 1920,
        ) ;
        add_theme_support( 'custom-header', $args );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', array(
            'width' => 200,
            'height' => 100,
            'flex-width' => true,
            'flex-height' => true,
        ) );
    }
    add_action( 'after_setup_theme', 'themeDev_config',0 );

// // Adding theme support
// function themeDev_theme_support() {
//     // Featured image support
//     add_theme_support( 'post-thumbnails' );
//     // Dynamic title tag support
//     add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'themeDev_theme_support' );

// // Custom excerpt length
// function themeDev_excerpt_length( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'themeDev_excerpt_length', 999 );

// // Widget area registration
// function themeDev_widgets_init() {
//     register_sidebar( array(
//         'name'          => 'Sidebar Widget Area',
//         'id'            => 'sidebar-1',
//         'before_widget' => '<div class="widget %2$s" id="%1$s">',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h2 class="widget-title">',
//         'after_title'   => '</h2>',
//     ) );
// }
// add_action( 'widgets_init', 'themeDev_widgets_init' );

// // Custom logo support
// function themeDev_custom_logo_setup() {
//     $defaults = array(
//         'height'      => 100,
//         'width'       => 400,
//         'flex-height' => true,
//         'flex-width'  => true,
//         'header-text' => array( 'site-title', 'site-description' ),
//     );
//     add_theme_support( 'custom-logo', $defaults );
// }
// add_action( 'after_setup_theme', 'themeDev_custom_logo_setup' );

// // Custom background support
// function themeDev_custom_background_setup() {
//     $args = array(
//         'default-color' => 'ffffff',
//         'default-image' => '',
//     );
//     add_theme_support( 'custom-background', $args );
// }
// add_action( 'after_setup_theme', 'themeDev_custom_background_setup' );

// // Custom header support
// function themeDev_custom_header_setup() {
//     $args = array(
//         'default-image'      => '',
//         'width'              => 1200,
//         'height'             => 400,
//         'flex-width'         => true,
//         'flex-height'        => true,
//     );
//     add_theme_support( 'custom-header', $args );
// }
// add_action( 'after_setup_theme', 'themeDev_custom_header_setup' );

// // Load theme textdomain for translations
// function themeDev_load_textdomain() {
//     load_theme_textdomain( 'themedev', get_template_directory() . '/languages' );
// }
// add_action( 'after_setup_theme', 'themeDev_load_textdomain' );

// // Customize the read more link
// function themeDev_read_more_link() {
//     return '... <a class="read-more" href="' . get_permalink() . '">' . __('Read More', 'themedev') . '</a>';
// }
// add_filter( 'the_content_more_link', 'themeDev_read_more_link' );

// // Customize the excerpt more string
// function themeDev_excerpt_more( $more ) {
//     return '... <a class="read-more" href="' . get_permalink() . '">' . __('Read More', 'themedev') . '</a>';
// }
// add_filter( 'excerpt_more', 'themeDev_excerpt_more' );

// // Enable HTML5 support
// function themeDev_html5_support() {
//     add_theme_support( 'html5', array(
//         'search-form',
//         'comment-form',
//         'comment-list',
//         'gallery',
//         'caption',
//     ) );
// }
// add_action( 'after_setup_theme', 'themeDev_html5_support' );

// // Enable selective refresh for widgets in customizer
// function themeDev_customizer_selective_refresh() {
//     add_theme_support( 'customize-selective-refresh-widgets' );
// }
// add_action( 'after_setup_theme', 'themeDev_customizer_selective_refresh' );

// // Register custom post type
// function themeDev_register_custom_post_type() {
//     $labels = array(
//         'name'               => _x( 'Projects', 'post type general name', 'themedev' ),
//         'singular_name'      => _x( 'Project', 'post type singular name', 'themedev' ),
//         'menu_name'          => _x( 'Projects', 'admin menu', 'themedev' ),
//         'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'themedev' ),
//         'add_new'            => _x( 'Add New', 'project', 'themedev' ),
//         'add_new_item'       => __( 'Add New Project', 'themedev' ),
//         'new_item'           => __( 'New Project', 'themedev' ),
//         'edit_item'          => __( 'Edit Project', 'themedev' ),
//         'view_item'          => __( 'View Project', 'themedev' ),
//         'all_items'          => __( 'All Projects', 'themedev' ),
//         'search_items'       => __( 'Search Projects', 'themedev' ),
//         'parent_item_colon'  => __( 'Parent Projects:', 'themedev' ),
//         'not_found'          => __( 'No projects found.', 'themedev' ),
//         'not_found_in_trash' => __( 'No projects found in Trash.', 'themedev' )
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'project' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => null,
//         'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
//     );

//     register_post_type( 'project', $args );
// }
// add_action( 'init', 'themeDev_register_custom_post_type' );

// // Customize the login logo
// function themeDev_custom_login_logo() {
//     echo '<style type="text/css">
//         h1 a { background-image:url(' . get_template_directory_uri() . '/images/login-logo.png) !important; }
//     </style>';
// }
// add_action( 'login_enqueue_scripts', 'themeDev_custom_login_logo' );

// // Customize the admin footer text
// function themeDev_custom_admin_footer() {
//     echo 'Thank you for creating with ThemeDev.';
// }
// add_filter( 'admin_footer_text', 'themeDev_custom_admin_footer' );

// // End of functions.php

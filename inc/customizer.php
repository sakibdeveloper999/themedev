<?php 

function themeDav_customizer($wp_customize){
    // copyright section
    $wp_customize -> add_section(
        'sec_copyright', array(
            'title'     => __('Copyright Settings', 'themedev'),
            'description'   => __('Customize copyright information', 'themedev'),
        )
    );
                $wp_customize -> add_setting(
                    'set_copyright', array(
                        'type'      => 'theme_mod',
                        'default' => __('Copyright © 2026 Your Company. All rights reserved.', 'themedev'),
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );

                $wp_customize -> add_control(
                    'set_copyright', array(
                        'label' => __('Copyright Information', 'themedev'),
                        'description' => __('Enter your copyright text', 'themedev'),
                        'section'   => 'sec_copyright',
                        'type'      => 'text',
                    )
                );
        // Hero Section
    $wp_customize -> add_section(
        'sec_hero', array(
            'title'     => __('Hero Settings', 'themedev'),
            'description'   => __('Customize hero section', 'themedev'),
        )
    );
                // Hero Title setting
                    $wp_customize -> add_setting(
                    'set_hero_title', array(
                        'type'      => 'theme_mod',
                        'default' => __('Please, add some title', 'themedev'),
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_title', array(
                        'label' => __('Hero Title', 'themedev'),
                        'description' => __('Enter your hero title', 'themedev'),
                        'section'   => 'sec_hero',
                        'type'      => 'text',
                    )
                );

                //Hero Subtitle setting
                    $wp_customize -> add_setting(
                    'set_hero_subtitle', array(
                        'type'      => 'theme_mod',
                        'default' => __('Please, add some subtitle', 'themedev'),
                        'sanitize_callback' => 'sanitize_textarea_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_subtitle', array(
                        'label' => __('Hero Subtitle', 'themedev'),
                        'description' => __('Enter your hero subtitle', 'themedev'),
                        'section'   => 'sec_hero',
                        'type'      => 'textarea',
                    )
                );
                //Hero Button Text setting
                    $wp_customize -> add_setting(
                    'set_hero_button_text', array(
                        'type'      => 'theme_mod',
                        'default' => __('Learn More', 'themedev'),
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_button_text', array(
                        'label' => __('Hero Button Text', 'themedev'),
                        'description' => __('Enter your hero button text', 'themedev'),
                        'section'   => 'sec_hero',
                        'type'      => 'text',
                    )
                );
                // Hero Button LINK setting
                    $wp_customize -> add_setting(
                    'set_hero_button_link', array(
                        'type'      => 'theme_mod',
                        'default' => '#',
                        'sanitize_callback' => 'esc_url_raw',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_button_link', array(
                        'label' => __('Hero Button URL', 'themedev'),
                        'description' => __('Enter your hero button link', 'themedev'),
                        'section'   => 'sec_hero',
                        'type'      => 'url',
                    )
                );                
                // Hero Height setting
                    $wp_customize -> add_setting(
                    'set_hero_height', array(
                        'type'      => 'theme_mod',
                        'default' => 800,
                        'sanitize_callback' => 'absint',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_height', array(
                        'label' => __('Hero Height', 'themedev'),
                        'description' => __('Enter your hero height (e.g., 800px)', 'themedev'),
                        'section'   => 'sec_hero',
                        'type'      => 'number',
                    )
                );
                // Hero Background Image setting  
                    $wp_customize -> add_setting(
                    'set_hero_background', array(
                        'type'      => 'theme_mod',
                        'sanitize_callback' => 'absint',
                    )
                );
                $wp_customize -> add_control( new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_hero_background',
                    array(
                        'label'      => __('Hero Background Image', 'themedev'),
                        'description' => __('Upload your hero background image', 'themedev'),
                        'section'    => 'sec_hero',
                        'mime_type'  => 'image',
                    )
                 )
                );

	// 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => __('Blog Section', 'themedev')
	) );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_per_page', 
                array(
                    'label' => __('Posts per page', 'themedev'),
                    'description' => __('How many items to display in the post list?', 'themedev'),			
                    'section' => 'sec_blog',
                    'type' => 'number'
            ) );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_include', 
                array(
                    'label' => __('Post categories to include', 'themedev'),
                    'description' => __('Comma separated values or single category ID', 'themedev'),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );	

            // Post categories to exclude
            $wp_customize->add_setting( 
                'set_category_exclude', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_exclude', 
                array(
                    'label' => __('Post categories to exclude', 'themedev'),
                    'description' => __('Comma separated values or single category ID', 'themedev'),			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );

           // ===============
           // End Blog
           // ==============

           // Service Section
           	
	$wp_customize->add_section( 
        'sec_services', 
        array(
		    'title' => __('Services Section', 'themedev')
	) );

                //==================
                // Service 1 Title
                //==================


                $wp_customize->add_setting(
                    'set_service_1_title',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Service 1', 'themedev'),
                        'sanitize_callback' => 'sanitize_text_field'
                ) );
                $wp_customize->add_control(
                    'set_service_1_title',
                    array(
                        'label' => __('Service 1 Title', 'themedev'),
                        'description' => __('Enter title for Service 1', 'themedev'),
                        'section' => 'sec_services',
                        'type' => 'text'
                ) );
                // Service image upload can be done via widget area
                $wp_customize->add_setting(
                    'set_service_1_image',
                    array(
                        'type' => 'theme_mod',
                        'sanitize_callback' => 'absint'
                ) );
                $wp_customize->add_control( new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_service_1_image',
                    array(
                        'label'      => __('Service 1 Image', 'themedev'),
                        'description' => __('Upload image for Service 1', 'themedev'),
                        'section'    => 'sec_services',
                        'mime_type'  => 'image',
                    )
                )
                );
                // Service Section paragraph 1
                $wp_customize->add_setting(
                    'set_services_1_paragraph',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Add your services on 1 description here.', 'themedev'),
                        'sanitize_callback' => 'sanitize_textarea_field'
                ) );
                $wp_customize->add_control(
                    'set_services_1_paragraph',
                    array(
                        'label' => __('Service 1 Description', 'themedev'),
                        'description' => __('Enter description for Service 1', 'themedev'),
                        'section' => 'sec_services',
                        'type' => 'textarea'
                ) );




        //==================
        // Service 2 Title
        //==================


        $wp_customize->add_setting(
            'set_service_2_title',
            array(
                'type' => 'theme_mod',
                'default' => __('Service 2', 'themedev'),
                'sanitize_callback' => 'sanitize_text_field'
        ) );
        $wp_customize->add_control(
            'set_service_2_title',
            array(
                'label' => __('Service 2 Title', 'themedev'),
                'description' => __('Enter title for Service 2', 'themedev'),
                'section' => 'sec_services',
                'type' => 'text'
        ) );
        // Service 2 image upload can be done via widget area
        $wp_customize->add_setting(
            'set_service_2_image',
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
        ) );
        $wp_customize->add_control( new WP_Customize_Media_Control(
            $wp_customize,
            'set_service_2_image',
            array(
                'label'      => __('Service 2 Image', 'themedev'),
                'description' => __('Upload image for Service 2', 'themedev'),
                'section'    => 'sec_services',
                'mime_type'  => 'image',
            )
         )
        );
        // Service Section paragraph 2
        $wp_customize->add_setting(
            'set_services_2_paragraph',
            array(
                'type' => 'theme_mod',
                'default' => __('Add your services on 2 description here.', 'themedev'),
                'sanitize_callback' => 'sanitize_textarea_field'
        ) );
        $wp_customize->add_control(
            'set_services_2_paragraph',
            array(
                'label' => __('Service 2 Description', 'themedev'),
                'description' => __('Enter description for Service 2', 'themedev'),
                'section' => 'sec_services',
                'type' => 'textarea'
        ) );



                //==================
                // Service 3 Title
                //==================

                
                $wp_customize->add_setting(
                    'set_service_3_title',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Service 3', 'themedev'),
                        'sanitize_callback' => 'sanitize_text_field'
                ) );    
                $wp_customize->add_control(
                    'set_service_3_title',
                    array(
                        'label' => __('Service 3 Title', 'themedev'),
                        'description' => __('Enter title for Service 3', 'themedev'),
                        'section' => 'sec_services',
                        'type' => 'text'
                ) );
                // Service 3 image upload can be done via widget area
                $wp_customize->add_setting(
                    'set_service_3_image',
                    array(
                        'type' => 'theme_mod',
                        'sanitize_callback' => 'absint'
                ) );
                $wp_customize->add_control( new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_service_3_image',
                    array(
                        'label'      => __('Service 3 Image', 'themedev'),
                        'description' => __('Upload image for Service 3', 'themedev'),
                        'section'    => 'sec_services',
                        'mime_type'  => 'image',
                    )
                )
                );
                // Service Section paragraph 3
                $wp_customize->add_setting(
                    'set_services_3_paragraph',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Add your services on 3 description here.', 'themedev'),
                        'sanitize_callback' => 'sanitize_textarea_field'
                ) );
                $wp_customize->add_control(
                    'set_services_3_paragraph',
                    array(
                        'label' => __('Service 3 Description', 'themedev'),
                        'description' => __('Enter description for Service 3', 'themedev'),
                        'section' => 'sec_services',
                        'type' => 'textarea'
                ) );
}

if ( function_exists( 'add_action' ) ) {
    add_action( 'customize_register', 'themeDav_customizer' );
}
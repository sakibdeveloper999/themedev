<?php 

function themeDav_customizer($wp_customize){
    // copyright section
    $wp_customize -> add_section(
        'sec_copyright', array(
            'title'     => 'Copyright Settings',
            'description'   => 'Customize copyright information',
        )
    );
                $wp_customize -> add_setting(
                    'set_copyright', array(
                        'type'      => 'theme_mod',
                        'default' => 'Copyright © 2026 Your Company. All rights reserved.',
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );

                $wp_customize -> add_control(
                    'set_copyright', array(
                        'label' => 'Copyright Information',
                        'description' => 'Enter your copyright text',
                        'section'   => 'sec_copyright',
                        'type'      => 'text',
                    )
                );
        // Hero Section
    $wp_customize -> add_section(
        'sec_hero', array(
            'title'     => 'Hero Settings',
            'description'   => 'Customize hero section',
        )
    );
                // Hero Title setting
                    $wp_customize -> add_setting(
                    'set_hero_title', array(
                        'type'      => 'theme_mod',
                        'default' => 'Please, add some title',
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_title', array(
                        'label' => 'Hero Title',
                        'description' => 'Enter your hero title',
                        'section'   => 'sec_hero',
                        'type'      => 'text',
                    )
                );

                //Hero Subtitle setting
                    $wp_customize -> add_setting(
                    'set_hero_subtitle', array(
                        'type'      => 'theme_mod',
                        'default' => 'Please, add some subtitle',
                        'sanitize_callback' => 'sanitize_textarea_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_subtitle', array(
                        'label' => 'Hero Subtitle',
                        'description' => 'Enter your hero subtitle',
                        'section'   => 'sec_hero',
                        'type'      => 'textarea',
                    )
                );
                //Hero Button Text setting
                    $wp_customize -> add_setting(
                    'set_hero_button_text', array(
                        'type'      => 'theme_mod',
                        'default' => 'Learn More',
                        'sanitize_callback' => 'sanitize_text_field',
                    )
                );
                $wp_customize -> add_control(
                    'set_hero_button_text', array(
                        'label' => 'Hero Button Text',
                        'description' => 'Enter your hero button text',
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
                        'label' => 'Hero Button URL',
                        'description' => 'Enter your hero button link',
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
                        'label' => 'Hero Height',
                        'description' => 'Enter your hero height (e.g., 800px)',
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
                        'label'      => 'Hero Background Image',
                        'description' => 'Upload your hero background image',
                        'section'    => 'sec_hero',
                        'mime_type'  => 'image',
                    )
                 )
                );

	// 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => 'Blog Section'
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
                    'label' => 'Posts per page',
                    'description' => 'How many items to display in the post list?',			
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
                    'label' => 'Post categories to include',
                    'description' => 'Comma separated values or single category ID',
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
                    'label' => 'Post categories to exclude',
                    'description' => 'Comma separated values or single category ID',			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );
}                                       

add_action( 'customize_register', 'themeDav_customizer' );
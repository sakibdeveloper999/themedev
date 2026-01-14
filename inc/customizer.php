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
}

add_action( 'customize_register', 'themeDav_customizer' );
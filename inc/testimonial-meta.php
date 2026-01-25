<?php
/**
 * Testimonial Meta Boxes and Custom Post Type
 */

// Register Testimonial Post Type
add_action( 'init', function () {
    register_post_type( 'testimonial', [
        'labels' => [
            'name'          => __( 'Testimonials', 'themedev' ),
            'singular_name' => __( 'Testimonial', 'themedev' ),
        ],
        'public'      => true,
        'has_archive' => false,
        'supports'    => [ 'title', 'editor', 'thumbnail', 'page-attributes' ],
        'menu_icon'   => 'dashicons-format-quote',
        'show_in_rest' => true,
    ] );
} );

// Add Meta Boxes
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'testimonial_meta',
        __( 'Client Information', 'themedev' ),
        function ( $post ) {
            wp_nonce_field( 'testimonial_meta_save', 'testimonial_meta_nonce' );
            
            $role    = get_post_meta( $post->ID, '_role', true );
            $company = get_post_meta( $post->ID, '_company', true );
            ?>
            <div style="margin: 10px 0;">
                <label for="testimonial_role">
                    <strong><?php esc_html_e( 'Designation', 'themedev' ); ?></strong>
                </label>
                <input 
                    type="text" 
                    id="testimonial_role"
                    name="testimonial_role" 
                    value="<?php echo esc_attr( $role ); ?>" 
                    style="width: 100%; padding: 8px; margin-top: 5px;"
                    placeholder="e.g., Manager, Director"
                >
            </div>
            <div style="margin: 10px 0;">
                <label for="testimonial_company">
                    <strong><?php esc_html_e( 'Company', 'themedev' ); ?></strong>
                </label>
                <input 
                    type="text" 
                    id="testimonial_company"
                    name="testimonial_company" 
                    value="<?php echo esc_attr( $company ); ?>" 
                    style="width: 100%; padding: 8px; margin-top: 5px;"
                    placeholder="e.g., Company Name"
                >
            </div>
            <?php
        },
        'testimonial'
    );
} );

// Save Meta Box Data
add_action( 'save_post', function ( $post_id ) {
    // Verify nonce
    if ( ! isset( $_POST['testimonial_meta_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['testimonial_meta_nonce'], 'testimonial_meta_save' ) ) {
        return;
    }

    // Prevent auto-save
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check user capabilities
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save meta data
    if ( isset( $_POST['testimonial_role'] ) ) {
        update_post_meta( $post_id, '_role', sanitize_text_field( $_POST['testimonial_role'] ) );
    }

    if ( isset( $_POST['testimonial_company'] ) ) {
        update_post_meta( $post_id, '_company', sanitize_text_field( $_POST['testimonial_company'] ) );
    }
} );



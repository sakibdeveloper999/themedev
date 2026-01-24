<?php
add_action('add_meta_boxes', function () {
    add_meta_box(
        'testimonial_meta',
        'Client Info',
        function ($post) {
            wp_nonce_field('testimonial_meta_save', 'testimonial_meta_nonce');
            $role = get_post_meta($post->ID, '_role', true);
            $company = get_post_meta($post->ID, '_company', true);
            ?>
            <p>
                <label>Designation</label>
                <input type="text" name="testimonial_role" value="<?= esc_attr($role) ?>" style="width:100%">
            </p>
            <p>
                <label>Company</label>
                <input type="text" name="testimonial_company" value="<?= esc_attr($company) ?>" style="width:100%">
            </p>
            <?php
        },
        'testimonial'
    );
});

add_action('save_post', function ($post_id) {
    if (!isset($_POST['testimonial_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['testimonial_meta_nonce'], 'testimonial_meta_save')) return;

    update_post_meta($post_id, '_role', sanitize_text_field($_POST['testimonial_role'] ?? ''));
    update_post_meta($post_id, '_company', sanitize_text_field($_POST['testimonial_company'] ?? ''));
});


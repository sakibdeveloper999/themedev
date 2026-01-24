<?php
$args = [
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
];

$q = new WP_Query($args);
if (!$q->have_posts()) return;
?>

<section class="testimonials-section">
    <div class="swiper testimonials-slider">
        <div class="swiper-wrapper">

            <?php while ($q->have_posts()) : $q->the_post();
                $role = get_post_meta(get_the_ID(), '_role', true);
                $company = get_post_meta(get_the_ID(), '_company', true);
            ?>
                <div class="swiper-slide testimonial-card">

                    <div class="testimonial-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="testimonial-client">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>

                        <div>
                            <h4><?php echo esc_html(get_the_title()); ?></h4>
                            <span><?php echo esc_html(trim("$role $company")); ?></span>
                        </div>
                    </div>

                </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

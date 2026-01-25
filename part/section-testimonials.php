<?php
/**
 * Testimonials Section
 * 
 * Displays testimonials using Swiper carousel
 */

$args = [
    'post_type'      => 'testimonial',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
];

$testimonials = new WP_Query( $args );

if ( ! $testimonials->have_posts() ) {
    return;
}
?>

<section class="testimonials-section">
    <div class="container">
        <h2>Testimonials</h2>

        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php
                while ( $testimonials->have_posts() ) :
                    $testimonials->the_post();
                    $role    = get_post_meta( get_the_ID(), '_role', true );
                    $company = get_post_meta( get_the_ID(), '_company', true );
                    $client  = trim( "$role $company" );
                    ?>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="testimonial-client">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img 
                                    src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) ); ?>" 
                                    alt="<?php echo esc_attr( get_the_title() ); ?>"
                                    loading="lazy"
                                >
                            <?php endif; ?>

                            <div>
                                <h4><?php echo esc_html( get_the_title() ); ?></h4>
                                <?php if ( ! empty( $client ) ) : ?>
                                    <span><?php echo esc_html( $client ); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Pagination, Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<?php wp_reset_postdata();


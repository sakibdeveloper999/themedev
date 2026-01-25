<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                  <?php 
                    $hero_title = get_theme_mod( 'set_hero_title', 'Please, add some title' );
                    $hero_subtitle = get_theme_mod( 'set_hero_subtitle', 'Please, add some subtitle' );
                    $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
                    $hero_button_text = get_theme_mod( 'set_hero_button_text', 'Learn More' );
                    $hero_height = get_theme_mod( 'set_hero_height', 800);
                    $hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background' ) );
                   ?>
                      <section class="hero"
                          style="
                              background-image: url('<?php echo esc_url( $hero_background ); ?>');
                              min-height: <?php echo esc_attr( $hero_height ); ?>px;
                          "
                      >
                          <div class="overlay">
                              <div class="container">
                                  <div class="hero-items">
                                      <h1><?php echo esc_html( $hero_title ); ?></h1>

                                      <div class="hero-divider"></div>

                                      <p><?php echo esc_html( $hero_subtitle ); ?></p>

                                      <a href="<?php echo esc_url( $hero_button_link ); ?>">
                                          <?php echo esc_html( $hero_button_text ); ?>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section>
                        <?php
                        // Services 
                                                
                          // Service Customizer
                          $service_title_1 = get_theme_mod( 'set_service_1_title', 'Please, add some title' );
                          $service_title_2 = get_theme_mod( 'set_service_2_title', 'Please, add some title' );
                          $service_title_3 = get_theme_mod( 'set_service_3_title', 'Please, add some title' );
                          $service_1_image = wp_get_attachment_url( get_theme_mod( 'set_service_1_image' ) );
                          $service_2_image = wp_get_attachment_url( get_theme_mod( 'set_service_2_image' ) );
                          $service_3_image = wp_get_attachment_url( get_theme_mod( 'set_service_3_image' ) );
                          $service_1_paragraph = get_theme_mod( 'set_service_1_paragraph', 'Please, add some paragraph' );
                          $service_2_paragraph = get_theme_mod( 'set_service_2_paragraph', 'Please, add some paragraph' );
                          $service_3_paragraph = get_theme_mod( 'set_service_3_paragraph', 'Please, add some paragraph' );
                         ?>
                         <h2 class="services-title">Services</h2>
                         <div class="services-divider"></div>
                          <div class="container services-customizer">
                              <div class="services-items">
                                  <img class="services-image" src="<?php echo esc_url( $service_1_image ); ?>" alt="">
                                  <h3 class="services-title"><?php echo esc_html( $service_title_1 ); ?></h3>
                                  <p class="services-paragraph"><?php echo esc_html( $service_1_paragraph ); ?></p>
                              </div>
                              <div class="services-items">
                                  <img class="services-image" src="<?php echo esc_url( $service_2_image ); ?>" alt="">
                                  <h3 class="services-title"><?php echo esc_html( $service_title_2 ); ?></h3>
                                  <p class="services-paragraph"><?php echo esc_html( $service_2_paragraph ); ?></p>
                              </div>
                              <div class="services-items">
                                  <img class="services-image" src="<?php echo esc_url( $service_3_image ); ?>" alt="">
                                  <h3 class="services-title"><?php echo esc_html( $service_title_3 ); ?></h3>
                                  <p class="services-paragraph"><?php echo esc_html( $service_3_paragraph ); ?></p>
                              </div>
                      </section>
                    <section class="services">
                        <h2>Services</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                  if(is_active_sidebar( 'service-1' )){
                                    dynamic_sidebar( 'service-1' );
                                  }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                  if(is_active_sidebar( 'service-2' )){
                                    dynamic_sidebar( 'service-2' );
                                  }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                  if(is_active_sidebar( 'service-3' )){
                                    dynamic_sidebar( 'service-3' );
                                  }
                                ?>
                            </div>
                        </div>
                    </section>
                    <!-- // Latest Blog Posts -->
                    <section class="home-blog">
                        <h2>Latest Blog Posts</h2>
                        <div class="container">
                          <?php 
                          $per_page= get_theme_mod( 'set_per_page', 3 );
                          $category_include = get_theme_mod( 'set_category_include', '' );
                            $category_exclude = get_theme_mod( 'set_category_exclude', '' );
                          $args = array(
                            'post_type'        => 'post',
                            'post_per_page'    => $per_page,
                            'category__in'     => explode(',', $category_include),
                            'category__not_in' => explode(',', $category_exclude),
                          );

                          $postlist = new WP_Query( $args );

                         if($postlist -> have_posts(  )):
                            while($postlist -> have_posts(  )):$postlist -> the_post(  );
                            // Content from part/content-latest-news.php
                            get_template_part( 'part/content', 'latest-news' );
                           endwhile;
                        wp_reset_postdata(  );
                         else: ?> 
                         <p>Nothing yet to be displayed!</p>
                        <?php endif ?>
                        </div>
                    </section>
                    <!-- Testimonials Section -->
                            <?php get_template_part( 'part/section', 'testimonials' ); ?>

                </main>
            </div>
        </div>
<?php get_footer(); ?>
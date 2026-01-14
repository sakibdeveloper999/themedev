<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero" style="background-image: url('http://themedev.local/wp-content/uploads/2026/01/pexels-quang-nguyen-vinh-222549-2563129-scaled.jpg');">
                      <div class="overlay" style="min-height:800px" >
                        <div class="container">
                          <div class="hero-items">
                            <h1>Lorem ipsum dolor </h1>
                            <p>sit amet consectetur adipisicing elit. Ipsam rem, consequuntur possimus, debitis perspiciatis.</p>
                            <a href="#">Learn More</a>
                          </div>
                        </div>
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
                    <section class="home-blog">
                        <h2>Latest Blog Posts</h2>
                        <div class="container">
                          <?php 

                          $args = array(
                            'post_type'        => 'post',
                            'post_per_page'    => 5,
                            'category__in'     => array(24, 18, 19, 9,4),
                            'category__not_in' => array(1),
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
                </main>
            </div>
        </div>
<?php get_footer(); ?>
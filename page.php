<?php get_header(); ?>
  <!-- // Display custom header image -->
<img src="<?php header_image(); ?>" 
 height="<?php echo get_custom_header(  ) -> height; ?>"
 width="<?php echo get_custom_header(  ) -> width; ?>"
 alt="">
 <!-- // Display custom header image -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                        <div class="container">
                            <div class="page-item">
                          <?php
                            while(have_posts(  )):the_post(  );
                        ?>
                        <article>
                            <header>
                                <h2><?php the_title() ?></h2>
                            </header>
                            <?php the_content(); ?>
                        </article>
                        <?php endwhile;
                         ?> 
                          </div>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
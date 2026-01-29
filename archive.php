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

                    <!-- Archive Title  -->
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ) ?>
                    <!-- Archive Description -->
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ) ?>

                         <!-- Container Start -->
                        <div class="container">
                            <div class="archive-item">
                          <?php 
                         if(have_posts(  )):
                            while(have_posts(  )):the_post(  );

                            // Content from part/content-archive.php 
                            get_template_part( 'part/content', 'archive' );

                         endwhile;?>
                        <!--  Pagination -->
                        <div class="wpdevs-pagination">
                         <div class="pages new">
                           <?php previous_posts_link(__('<< Newer posts', 'themedev')); ?>
                         </div>
                         <div class="pages old">
                          <?php next_posts_link(__('Older posts >>', 'themedev')); ?>
                          </div>
                        </div>
                        <!--  Pagination -->
                        <?php else: ?> 
                         <p><?php _e('Nothing yet to be displayed!', 'themedev'); ?></p>
                        <?php endif ?>
                            </div>
                            <?php get_sidebar() ?>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
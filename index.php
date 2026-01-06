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
                    <h1>Blog</h1>
                        <div class="container">
                            <div class="blog-item">
                          <?php 
                         if(have_posts(  )):
                            while(have_posts(  )):the_post(  );
                        ?>
                        <!-- content -->
                        <article>
                            <a href="<?php the_permalink(  ); ?>"><h2><?php the_title() ?></h2></a>
                            <a href="<?php the_permalink(  ); ?>"><?php the_post_thumbnail(array(275,275)); ?></a>
                            <div class="meta-info">
                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link( ); ?> </p>
                                <p>Categories: <?php the_category(', '); ?></p>
                                <p>Tags: <?php the_tags( '', ', ', '' ) ?></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>
                        <?php endwhile;?>
                        <!--  Pagination -->
                        <div class="wpdevs-pagination">
                         <div class="pages new">
                           <?php previous_posts_link('<< Newer posts'); ?>
                         </div>
                         <div class="pages old">
                          <?php next_posts_link('Older posts >>'); ?>
                          </div>
                        </div>
                        <!--  Pagination -->
                        <?php else: ?> 
                         <p>Nothing yet to be displayed!</p>
                        <?php endif ?>
                            </div>
                            <?php get_sidebar() ?>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
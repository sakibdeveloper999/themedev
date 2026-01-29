<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="error-404 not-found container">
                        <header class="page-header">
                            <h1 class="page-title"><?php _e( 'Page Not Found', 'themedev' ); ?></h1>
                            <p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themedev' ); ?></p>
                        </header><!-- .page-header -->
                        <div class="error">
                            <p><?php _e( 'How about doing a search?', 'themedev' ); ?></p>    

                            <?php get_search_form(); ?>
                            <?php 
                            the_widget( 'WP_Widget_Recent_Posts',
                             array(
                                'title' => __('Recent Posts', 'themedev' ),
                                'number' => 3,
                             ) );
                            the_widget( 'WP_Widget_Categories',
                             array(
                                'title' => __('Categories', 'themedev' ),
                                'count' => 1,
                                'hierarchical' => 1,
                                'dropdown' => 0,
                             ) );
                             ?>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->

<?php get_footer(); ?>
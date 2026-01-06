<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="error-404 not-found container">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themedev' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'themedev' ); ?></p>

                            <?php get_search_form(); ?>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->

<?php get_footer(); ?>
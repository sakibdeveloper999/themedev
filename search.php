<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1><?php printf( __('Search results for: %s', 'themedev'), get_search_query() ); ?></h1>
        <?php get_search_form(); ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); 

                   // Content from part/content-search.php
                    get_template_part( 'part/content', 'search' );

                endwhile;  
                 the_posts_pagination(  );
                ?>
            <?php else : ?>
                <p class="no-posts"><?php _e('Nothing yet to be displayed!', 'themedev'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

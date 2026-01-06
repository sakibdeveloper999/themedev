<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
        <?php get_search_form(); ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); 

                   // Content from part/content.php
                    get_template_part( 'part/content' );

                endwhile;  
                 the_posts_pagination(  );
                ?>
            <?php else : ?>
                <p class="no-posts">Nothing yet to be displayed!</p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div id="primary">
    <div id="main">
     <div class="container">
        <?php
        while(have_posts()):
            the_post();
         ?>
         <?php 
            // Content from part/content-single.php
            get_template_part( 'part/content', 'single' );
         ?>
         <!--  Pagination -->
             <div class="wpdevs-pagination">
                 <div class="pages next">
                    <?php next_post_link('&laquo; %link'); ?>
                 </div>

                  <div class="pages previous">
                       <?php previous_post_link('%link &raquo;'); ?>
                  </div>
             </div>
         <!--  Pagination -->    
         <?php 
         if( comments_open() || get_comments_number() ){
             comments_template();
         }
         ?>
         <?php
        endwhile; ?>
     </div>
    </div>
</div>

 
<?php get_footer(); ?>
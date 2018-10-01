<?php get_header(); ?>

<div class="content-wrap home-wrap">
  
  <div class="teaser-bar">
    
    <h2 class="teaser-bar-title">Featured Stories:</h2>

    <div class="teaser-bar-content">
      <div class="teaser-item featured-category-1">
      
        <?php

          $args = array( 
            'post_type'      => 'post',
            'posts_per_page' => '1',
            'category_name'  => 'crypto'
          );
          
          $categoryOne = new WP_Query( $args );

          if( $categoryOne->have_posts() ):
            
            while( $categoryOne->have_posts() ): $categoryOne->the_post();

              get_template_part( 'template-parts/content', 'teaser' );

            endwhile;
          
          endif;

          wp_reset_postdata();
        ?>
      
      </div>

      <div class="teaser-item featured-category-2">
      
        <?php

          $args = array( 
            'post_type'      => 'post',
            'posts_per_page' => 1,
            'category_name'  => 'security'
          );
          
          $categoryTwo = new WP_Query( $args );

          if( $categoryTwo->have_posts() ):
            
            while( $categoryTwo->have_posts() ): $categoryTwo->the_post();

              get_template_part( 'template-parts/content', 'teaser' );

            endwhile;
          
          endif;

          wp_reset_postdata();
        ?>

      </div>

      <div class="teaser-item featured-category-3">
      
        <?php

          $args = array( 
            'post_type'      => 'post',
            'posts_per_page' => '1',
            'category_name'  => 'general'
          );
          
          $categoryThree = new WP_Query( $args );

          if( $categoryThree->have_posts() ):
            
            while( $categoryThree->have_posts() ): $categoryThree->the_post();

              get_template_part( 'template-parts/content', 'teaser' );

            endwhile;
          
          endif;

          wp_reset_postdata();
        ?>

      </div>
    </div> <!-- End teaser-bar-content -->
  </div> <!-- End teaser-bar -->
    
</div> <!-- End content-wrap -->

<?php get_footer(); ?>
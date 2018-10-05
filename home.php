<?php get_header(); ?>

<div class="content-wrap home-wrap">
  
  <div class="teaser-bar">
    
    <h2 class="teaser-bar-title">Featured Stories:</h2>

    <div class="teaser-bar-content"> <?php 
      
      $category_args = array(
        'include' => '4, 5, 6'
      );

      $categories = get_categories( $category_args );
      foreach ( $categories as $category ):

      ?> <div class="teaser-item featured-story"> <?php

        $args = array( 
          'post_type'      => 'post',
          'posts_per_page' => '1',
          'cat'            => $category->term_id,
        );

        $categoryOne = new WP_Query( $args );

        if( $categoryOne->have_posts() ):
  
          while( $categoryOne->have_posts() ): $categoryOne->the_post();

            get_template_part( 'template-parts/content', 'teaser' );

          endwhile;

        endif;

        wp_reset_postdata();
      
      ?> </div>

      <?php endforeach ?>
      
    </div> <!-- End teaser-bar-content -->
  </div> <!-- End teaser-bar -->    
</div> <!-- End content-wrap -->

<?php get_footer(); ?>
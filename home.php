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

        $teaser_post = new WP_Query( $args );

        if( $teaser_post->have_posts() ):
  
          while( $teaser_post->have_posts() ): $teaser_post->the_post();

            get_template_part( 'template-parts/content', 'teaser' );

          endwhile;

        endif;

        wp_reset_postdata(); ?>

      </div> <!-- End teaser-item -->

      <?php endforeach ?>
      
    </div> <!-- End teaser-bar-content -->
  </div> <!-- End teaser-bar -->

  <div class="latest-post post-wrap"> <?php

    $args = array( 
      'post_type'      => 'post',
      'posts_per_page' => '1',
    );

    $latest_post = new WP_Query( $args );

    if( $latest_post->have_posts() ):

      while( $latest_post->have_posts() ): $latest_post->the_post();

        get_template_part( 'template-parts/content', get_post_format() );

      endwhile;

    endif;

    get_sidebar();

    wp_reset_postdata(); ?>

  </div> <!-- End latest-post -->

</div> <!-- End content-wrap -->

<?php get_footer(); ?>
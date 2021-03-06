<?php

/*
  Template Name: Full Width Page
*/

get_header(); ?>

<div class="content-wrap">
  
<?php if( have_posts() ):

  while( have_posts() ): the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <article><?php the_content(); ?></article>

  <?php endwhile;

endif; ?>
  
</div> <!-- End wrap -->

<?php get_footer(); ?>
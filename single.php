<?php get_header(); ?>

<div class="wrap">

  <?php if( have_posts() ):

    while( have_posts() ): the_post();

      get_template_part( 'template-parts/content', get_post_format() );
  
    endwhile;

  endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>

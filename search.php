<?php get_header(); ?>

<div class="content-wrap">

  <?php if( have_posts() ):

    while( have_posts() ): the_post();

      get_template_part( 'template-parts/content', 'search' );
  
    endwhile; ?>

    <div class="pagination-search">
      <?php get_template_part( 'template-parts/content', 'pagination' ); ?>
    </div>

  <?php endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>
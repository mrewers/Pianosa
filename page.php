<?php get_header(); ?>

<div class="wrap">
  
<?php if( have_posts() ):

  while( have_posts() ): the_post(); ?>

    <h2  class="page-title"><?php the_title(); ?></h2>
    <article class="page-content"><?php the_content(); ?></article>

  <?php endwhile;

endif; ?>
  
</div> <!-- End wrap -->

<?php get_footer(); ?>
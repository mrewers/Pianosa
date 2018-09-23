<?php get_header(); ?>

<div class="wrap">

  <?php if( have_posts() ):

    while( have_posts() ): the_post(); ?>

      <h2 class="page-title"><?php the_title(); ?></h2>
      <small class="page-byline"><?php the_author(); ?> | <?php get_the_date(); ?></small>
      <article class="page-content"><?php the_content(); ?></article>
      <small class="page-categories"><?php the_category(); ?></small>
      <hr />
  
    <?php endwhile;

  endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>

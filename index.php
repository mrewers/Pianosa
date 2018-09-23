<?php get_header(); ?>

<div class="wrap">
  <h1>Pianosa Test</h1>

  <?php if( have_posts() ):

    while( have_posts() ): the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <small><?php the_author(); ?> | <?php the_date(); ?></small>
      <article><?php the_content(); ?></article>
      <small><?php the_category(); ?></small>
      <hr />
  
    <?php endwhile;

  endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>

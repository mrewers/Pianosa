<?php get_header(); ?>

<div class="wrap">

  <?php if( have_posts() ):

    while( have_posts() ): the_post(); ?>

      <figure class="post-featured-image"><?php the_post_thumbnail(); ?></figure>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <small class="post-byline"><?php the_author(); ?> | <?php the_date(); ?></small>
      <article class="post-content"><?php the_content(); ?></article>
      <small class="post-categories"><?php the_category(); ?></small>
  
    <?php endwhile;

  endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>

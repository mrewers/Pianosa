<?php get_header(); ?>

<div class="content-wrap">

  <?php if( have_posts() ):

    while( have_posts() ): the_post(); ?>

      <h2 class="page-title"><?php the_title(); ?></h2>
      <small class="page-byline"><?php the_author(); ?> | <?php echo get_the_date(); ?></small>
      <article class="page-content"><?php the_content(); ?></article>
      <small class="page-categories"><?php the_category(); ?></small>
      <hr />
  
    <?php endwhile; ?>

    <div class="pagination-default">
      <?php get_template_part( 'template-parts/content', 'pagination' ); ?>
    </div>
  
  <?php endif; ?>

</div> <!-- End wrap -->

<?php get_footer(); ?>

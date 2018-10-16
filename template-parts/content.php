<?php
/**
 * Template part for displaying standard posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article id="post-<?php the_ID(); ?>">
  <figure class="post-featured-image"><?php the_post_thumbnail(); ?></figure>
  <div class="post-body">
    <h2 class="post-title"><?php the_title(); ?></h2>
    <small class="post-byline"><?php the_author(); ?> | <?php echo get_the_date(); ?></small>
    <div class="post-content"><?php the_content(); ?></div>
    <small class="post-category"><?php the_category(); the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' )?></small>
  </div>

  <?php if( comments_open() ) {
    comments_template();
  } ?>

</article>
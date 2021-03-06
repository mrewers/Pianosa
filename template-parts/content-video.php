<?php
/**
 * Template part for displaying video posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article id="post-<?php the_ID(); ?>">
  <figure class="post-featured-image"><?php the_post_thumbnail(); ?></figure>
  <h2 class="post-title"><?php the_title(); ?></h2>
  <small class="post-byline"><?php the_author(); ?> | <?php the_date(); ?></small>
  <div class="post-content"><?php the_content(); ?></div>
  <small class="post-categories"><?php the_category(); ?></small>
</article>
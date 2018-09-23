<?php
/**
 * Template part for displaying standard image posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article id="post-<?php the_ID(); ?>">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <figure class="post-featured-image"><?php the_post_thumbnail(); ?></figure>
  <small class="post-categories"><?php the_category(); ?></small>
</article>
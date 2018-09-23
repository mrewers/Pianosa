<?php
/**
 * Template part for displaying status posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article id="post-<?php the_ID(); ?>">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <div class="post-content"><?php the_content(); ?></div>
</article>
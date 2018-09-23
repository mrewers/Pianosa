<?php
/**
 * Template part for displaying default pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article id="post-<?php the_ID(); ?>">
  <h2  class="page-title"><?php the_title(); ?></h2>
  <div class="page-content"><?php the_content(); ?></div>
</article>
<?php
/**
 * Template part for displaying search results.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pianosa
 */
?>

<article class="search-result-item" id="result-post-<?php the_ID(); ?>">
  
  <div class="search-result-thumbnail">
    <a class="search-result-link" href="<?php the_permalink() ?>">
      <figure class="result-post-featured-image"><?php the_post_thumbnail(); ?></figure>
    </a>
  </div>
  
  <div class="search-result-content">
    <a class="search-result-link" href="<?php the_permalink() ?>">
      <h2 class="result-post-title"><?php the_title(); ?></h2>
      <div class="result-post-excerpt"><?php the_excerpt(); ?></div>
    </a>
    <small class="result-category"><?php the_category(); the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' )?></small>
  </div>

</article>
<article class="home-page-teaser" id="post-<?php the_ID(); ?>-teaser">
  <a class="teaser-link" href="<?php the_permalink(); ?>">
    <figure class="teaser-featured-image"><?php the_post_thumbnail(); ?></figure>
    <div class="teaser-content">
      <h3 class="teaser-title"><?php the_title(); ?></h3>
      <small class="teaser-date"><?php echo get_the_date(); ?></small>
      <div class="teaser-excerpt"><?php the_excerpt(); ?></div>
    </div>
  </a>
  <small class="teaser-category"><?php echo the_category(); ?></small>
</article>
<article <?php post_class('grid-item'); ?>>
  <div class="article__inner">
    <div class="inner__inner">
        <div class="article__meta-data"> <?php get_template_part('templates/entry-meta'); ?> </div>
        <figure class="effect-layla">
        <a href="<?php the_permalink(); ?>">
          <div class="article__image"> <?php echo get_the_post_thumbnail( $page->ID, '300x300' ); ?> </div>
          <figcaption><p><strong>read more</strong></p></figcaption>
        </a>
    </div>
  </div>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

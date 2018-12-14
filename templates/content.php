<?php if( has_tag( 'hero-post' ) ) { ?>
  <article <?php post_class('grid-item'); ?>>
  <figure>
  <img class="lozad hero" src="https://d1zczzapudl1mr.cloudfront.net/blank-kraken.gif" data-src="<?php echo get_the_post_thumbnail_url( $page->ID ); ?>" alt="<?php the_title(); ?>">
  <div class="entry-summary">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </div>
  </figure>
  </article>
<?php  }else{ ?>
  <article <?php post_class('grid-item'); ?>>
  <a href="<?php the_permalink(); ?>">
  <figure>
  <img class="lozad" src="https://d1zczzapudl1mr.cloudfront.net/blank-kraken.gif" data-src="<?php echo get_the_post_thumbnail_url( $page->ID, '300x300' ); ?>" alt="<?php the_title(); ?>">
  </figure>
  <!--<div class="article__meta-data"><//?php get_template_part('templates/entry-meta'); ?></div>-->
  <h2 class="entry-title"><?php the_title(); ?></h2>
  <div class="entry-summary">
      <?php the_excerpt(); ?>
  </div>
  </a>
  </article>

<?php } ?>

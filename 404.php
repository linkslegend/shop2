<?php get_template_part('templates/page', 'header'); ?>

<div data-code="404" class="alert alert-warning">
  <?php _e('Sorry, the page you were looking for doesn’t exist at this URL.', 'sage'); ?>
  <p class="return-to-shop">
    <a class="button wc-backward" href="/shop/">Return to shop</a>&nbsp;
    <a class="button wc-backward" href="/contact/">Contact us</a>
  </p>
  </div>

<div class="featured">
          <div class="container-fluid">
            <h2 class="getkunst-title">Check out our favorites</h2>
            <ul class="front-products-slider2">

                <section class="multiple-items single-featured3">
                    <?php
                        $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                          array('taxonomy' => 'product_cat','terms' => 89,'operator' => 'IN')),);
                        $featured_query = new WP_Query( $args ); while ( $featured_query->have_posts() ) : $featured_query->the_post(); global $product; ?>
                        <li class="slider-products">
                          <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="slider-products-inner">
                              <?php tm_woowishlist_add_button_single(); ?>
                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                              </a>
                                  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <h2 class="product__title"><?php the_title(); ?></h2>
                                  </a>
                                  <?php echo $product->get_price_html(); ?>
                                  <?php woocommerce_template_loop_add_to_cart( $featured_query->post, $product ); ?>
                        </div></a></li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                  </section>

           </ul>
        </div>
</div> <!--end featured -->


<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['socialbox'].''); ?>

<div class="instagramm">
        <ul id="instafeed" class="multiple-item"></ul>
</div>

<!--<?php get_search_form(); ?>-->

<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

<div id="main" class="animation-enabled">
            <section id="slider-header" class="pageimage-header pageimage product-page" >
            </section>
      <!-- main content -->
             <div class="wrap container-fluid" role="document">
                   <div class="content">
                                   <main class="main">
                                              <div class="single" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
                                                    <div class="taxonomy-cat-page">
                                                          <div class="taxonomy-cat-content">
                                                            <?php woocommerce_content(); ?>

                                                            <div class="singlefeatured">
                                                                <h2 class="getkunst-title">Our favorites</h2>
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
                                                                                    <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="icon" label=""]'); ?>
                                                                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                                      <img width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                                                                    </a>
                                                                                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                                          <h2 class="product__title"><?php the_title(); ?></h2>
                                                                                        </a>
                                                                                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                                                                                        <!-- <?php woocommerce_template_loop_add_to_cart( $featured_query->post, $product ); ?> -->
                                                                              </div></a></li>
                                                                              <?php endwhile; ?>
                                                                              <?php wp_reset_query(); ?>
                                                                        </section>

                                                               </ul>
                                                            </div> <!--end featured -->


                                                          </div>
                                                    </div>
                                              </div>
                                      </main> <!-- /main  -->
                      </div> <!-- /.content row -->
              </div><!-- /.wrap -->
</div>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

  </body>
</html>

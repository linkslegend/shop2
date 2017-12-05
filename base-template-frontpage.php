<?php

use Roots\Sage\Setup;
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
<div class="wrap" role="document">
<!-- Frontpage Slider -->
<section id="slider-header-front" class="collection wrapper margin-top-xs-1 margin-bottom-xs-1">

<style>
    .gk-bg {
      background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup768.jpg");}
    @media (min-width: 768px) {
      .gk-bg {
        background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup1400.jpg");}
      }
    }
    @media (min-width: 1024px) {
      .gk-bg {
        background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup1200.jpg");}
      }
    }
    @media (min-width: 1200px) {
      .gk-bg {
        background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup1200.jpg");}
      }
    }
    @media (min-width: 1400px) {
      .gk-bg {
        background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup1400.jpg");}
      }
    }
    @media (min-width: 1920px) {
      .gk-bg {
        background-image: url("/getkunst/wp-content/uploads/banner/getkunstmockup2000.jpg");}
      }
    }
</style>
<section class="gk-hero">
  				<div class="gk-full-width">
            <div class="gk-bg"></div>
    				<div class="hero-content">
                <h2>FIND WHAT MAKES YOU,<br />YOU</h2>
    					  <p>Explore 100's of designs and find what makes you, YOU!</p>
            </div>
  				</div> <!-- .cd-full-width -->
</section> <!-- .cd-hero -->


<div class="container-fluid">

      <!-- End first Col -->
          <div class="col-xs-12 coll-bck-a7 col-md-3 col-pad-12">
            <div class="bg-gray3">
              <div class="indutry-info">
                <div class="industry-enter"><h3>ART. HOME. TECH. APPAREL.</h3></div>
                  <div class="keyword-list">
                    <a href="/product-category/art-prints/" class="current">Art prints</a>
                    <a href="/product-category/illustration/">Illustration</a>
                    <a href="/product-category/abstract/">Abstract</a>
                    <a href="/product-category/black-white/">Black & White</a>
                    <a href="/product-category/apparel/">Apparel</a>
                    <a href="/product-category/tech/">Tech</a>
                  </div>
              </div>
            </div>
          </div>
          <!-- End first Col -->
          <!-- Second Col -->
          <div class="col-xs-12 coll-bck-a5 col-md-9 col-pad-12">
              <div class="minus-col-padding">
                  <ul class="front-products-slider2">
                    <section class="multiple-items single-featured2 top-slider">
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 66,'operator' => 'IN')),);
                                    $vector = new WP_Query( $args ); while ( $vector->have_posts() ) : $vector->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $vector->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <span class="price"><?php echo $product->get_price_html(); ?></span>
                                              <?php woocommerce_template_loop_add_to_cart( $vector->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 74,'operator' => 'IN')),);
                                    $illustration = new WP_Query( $args ); while ( $illustration->have_posts() ) : $illustration->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $illustration->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <?php echo $product->get_price_html(); ?>
                                              <?php woocommerce_template_loop_add_to_cart( $illustration->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 66,'operator' => 'IN')),);
                                    $abstract = new WP_Query( $args ); while ( $abstract->have_posts() ) : $abstract->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $abstract->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <?php echo $product->get_price_html(); ?>
                                              <?php woocommerce_template_loop_add_to_cart( $abstract->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 69,'operator' => 'IN')),);
                                    $blackawhite = new WP_Query( $args ); while ( $blackawhite->have_posts() ) : $blackawhite->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $blackawhite->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <?php echo $product->get_price_html(); ?>
                                              <?php woocommerce_template_loop_add_to_cart( $blackawhite->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 78,'operator' => 'IN')),);
                                    $tshirt = new WP_Query( $args ); while ( $tshirt->have_posts() ) : $tshirt->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $tshirt->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <?php echo $product->get_price_html(); ?>
                                              <?php woocommerce_template_loop_add_to_cart( $tshirt->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>
                        <li class="slider-products">
                                <?php
                                    $args = array('post_type' => 'product','stock' => 1,'posts_per_page' => 6,'meta_value' => 'yes','tax_query' => array(
                                      array('taxonomy' => 'product_cat','terms' => 79,'operator' => 'IN')),);
                                    $tech = new WP_Query( $args ); while ( $tech->have_posts() ) : $tech->the_post(); global $product; ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <div class="slider-products-inner">
                                          <?php tm_woowishlist_add_button_single(); ?>
                                          <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                              <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $tech->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                                            </a>
                                              <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <h2 class="product__title"><?php the_title(); ?></h2>
                                              </a>
                                              <?php echo $product->get_price_html(); ?>
                                              <?php woocommerce_template_loop_add_to_cart( $tech->post, $product ); ?>
                                    </div></a>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                        </li>

                    </section>
                  </ul>
              </div>
          </div>
          <!-- End Second Col -->
          <!-- Second Col -->
          <!-- End Second Col -->
        </div>
      </div>
  </section>

<div class="gk-banner">
<div class="container-fluid">
    <div class="gk-banner-inner">
      <h2 class="gk-title"><?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['gktitle'].''); ?></h2>
        <p class="gk-banner_text"><?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['gkcontent'].''); ?></p>
      </p>
    </div>
  </div>
</div>

  <div class="content">
    <main class="main-frontpage">
      <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
    <?php if (Setup\display_sidebar()) : ?>


      <aside class="sidebar">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div><!-- /.content -->
</div><!-- /.wrap -->


<div class="featured">
  <div class="container-fluid">
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
                      <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="button" label=""]'); ?>
                      <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
                      </a>
                          <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h2 class="product__title"><?php the_title(); ?></h2>
                          </a>
                          <span class="price"><?php echo $product->get_price_html(); ?></span>
                          <?php woocommerce_template_loop_add_to_cart( $featured_query->post, $product ); ?>
                </div></a></li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
          </section>

   </ul>
  </div>
</div> <!--end featured -->



<div class="featured">
  <div class="container-fluid">
    <h2 class="getkunst-title">What you liked so far</h2>
    <ul class="front-products-slider2">
      <section class="multiple-items single-featured3">
        <?php echo do_shortcode('[widget id="woocommerce_recently_viewed_products-2" title="0"]'); ?>
      </section>
    </ul>
  </div>
</div> <!--end featured -->




<section class="newsletter">
  <div class="container">
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//lushdeal.us4.list-manage.com/subscribe/post?u=dc33750d705aedfe96f08bddd&amp;id=3966642d8d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <div class="col-sm-12">
        <span>Sign me up for the newsletter and get <strong>$5 off</strong></span>
      </div>
<div class="mc-field-group col-sm-4">
	<input type="email" value="" name="EMAIL" placeholder="Email required" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group col-sm-4">
	<input type="text" value="" name="FNAME" placeholder="Name required" class="required" id="mce-FNAME">
</div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dc33750d705aedfe96f08bddd_3966642d8d" tabindex="-1" value=""></div>
<div class="col-sm-4"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    </div>
</form>
</div>
<!--End mc_embed_signup-->
</div>
</section>


<div class="magazine">
  <div class="container-fluid">
    <h2 class="getkunst-title">From our magazine</h2>
      <ul class="front-products-slider2">
        <section class="multiple-items single-featured4">
                <!--  Define our WP Query Parameters -->
                <?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>
                <!--  Start our WP Query -->
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <!-- Display the Post Title with Hyperlink -->
                    <li>
                    <figure class="effect-layla">
                      <a href="<?php the_permalink() ?>">
                      <!--  Display the Post Featured Image -->
                      <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail()) echo the_post_thumbnail_url( '300x300' ); ?>">
                      <figcaption><p><strong>read more</strong></p></figcaption>
                      </a>
                    </figure>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    </li>
                    <!--  Repeat the process and reset once it hits the limit -->
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
          </section>
      </ul>
  </div>
</div>

<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['socialbox'].''); ?>

<div class="instagramm">
        <ul id="instafeed" class="multiple-item"></ul>
</div>

<?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
</body>
</html>

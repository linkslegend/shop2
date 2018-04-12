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
<div role="document" id="main">
<!-- Frontpage Slider -->
<section id="slider-header-front" class="collection wrapper margin-top-xs-1 margin-bottom-xs-1">
<div class="container-fluid">
<div class="complex-row">
  <div class="flex-order tile-1">
    <a class="tile tile-large" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text'].''); ?>.jpg"
      data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-large.jpg 800w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>.jpg 1200w"
              data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>.jpg"
              src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-lqip-blur.jpg"
      >
        <div class="tile-content">
          <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
            <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text'].''); ?></span>
            <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-btn-text'].''); ?></span>
          </a>
        </div>
  </a>
  <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['shoppable-button'].''); ?>
  </div>
  <div class="flex-order tile-2">
      <a class="tile tile-large" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-text'].''); ?>.jpg"
      data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-large.jpg 800w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>.jpg 1200w"
             src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-lqip-blur.jpg"
        data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>.jpg"
      >
        <div class="tile-content">
          <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
            <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-text'].''); ?></span>
            <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-btn-text'].''); ?></span>
          </a>
        </div>
      </a>
  </div>
  <div class="flex-order tile-3">
      <a class="tile tile-med top" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-text'].''); ?>.jpg"
      data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-small.jpg 480w,
      <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-medium.jpg 660w,
      <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-medium.jpg 800w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-large.jpg 1200w"
                   src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-lqip-blur.jpg"
              data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>.jpg"
      >
        <div class="tile-content">
          <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
            <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-text'].''); ?></span>
            <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-btn-text'].''); ?></span>
          </a>
        </div>
      </a>
  </div>
  <div class="flex-order tile-4">
      <a class="tile tile-med" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-text'].''); ?>.jpg"
      data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-small.jpg 480w,
      <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-medium.jpg 660w,
      <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-medium.jpg 800w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-large.jpg 1200w"
                   src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-lqip-blur.jpg"
              data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>.jpg"
      >
        <div class="tile-content">
          <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
            <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-text'].''); ?></span>
            <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-btn-text'].''); ?></span>
          </a>
        </div>
      </a>
  </div>
</div>
<!-- 2. row -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-left">
    <a class="tile tile-med-long" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
    <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
    alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-text'].''); ?>.jpg"
    data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-small.jpg 480w,
    <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-medium.jpg 660w,
    <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-medium.jpg 800w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-large.jpg 1200w"
                 src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-lqip-blur.jpg"
            data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>.jpg"
    >
      <div class="tile-content">
        <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
          <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-text'].''); ?></span>
          <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-btn-text'].''); ?></span>
        </a>
      </div>
    </a>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-right">
    <a class="tile tile-med-long" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
    <img class="lozad" sizes="(max-width: 2500px) 40vw, 800px"
    alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-text'].''); ?>.jpg"
    data-srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-small.jpg 480w,
    <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-medium.jpg 660w,
    <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-medium.jpg 800w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-large.jpg 1200w"
                 src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-lqip-blur.jpg"
            data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>.jpg"
    >
      <div class="tile-content">
        <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
          <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-text'].''); ?></span>
          <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-btn-text'].''); ?></span>
        </a>
      </div>
    </a>
</div>


</div>
</section>

<div style="background: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-bgcolor-1'].''); ?> url(<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-url-1'].''); ?>);" class="gk-banner">
<div class="container-fluid">
    <div class="gk-banner-inner">

      <h2 class="gk-title"><?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['gktitle'].''); ?></h2>
      <p class="gk-banner_text"><?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['gkcontent'].''); ?></p>

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


<div class="featured">
  <div class="container-fluid">
    <h2 class="getkunst-title">Our Favorites</h2>
    <ul class="front-products-slider2">

        <section class="multiple-items single-featured3">
          <?php
          $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'art-prints', 'meta_value' => 'yes', 'orderby' => 'rand' );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <li class="slider-products">
                  <a id="id-<?php the_id( $loop->post->ID ); ?>" href="<?php the_permalink( $loop->post->ID ); ?>" title="<?php the_title( $loop->post->ID ); ?>">
                    <div class="slider-products-inner">
                      <?php tm_woowishlist_add_button_single( $loop->post->ID ); ?>
                      <div class="hidden-xs	hidden-sm"><?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID( $loop->post->ID ).'" type="icon" label=""]'); ?></div>
                      <a id="id-<?php the_id( $loop->post->ID ); ?>" href="<?php the_permalink( $loop->post->ID ); ?>" title="<?php the_title( $loop->post->ID ); ?>">
                        <img width="300" class="lozad" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                        src="https://d1zczzapudl1mr.cloudfront.net/preloader/loader_150x150.gif"
                        data-src="<?php if (has_post_thumbnail( $loop->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>"
                        >
                      </a>
                          <a id="id-<?php the_id( $loop->post->ID ); ?>" href="<?php the_permalink( $loop->post->ID ); ?>" title="<?php the_title( $loop->post->ID ); ?>">
                            <h2 class="product__title"><?php the_title( $loop->post->ID ); ?></h2>
                          </a>
                          <span class="price"><?php echo $product->get_price_html( $loop->post->ID ); ?></span>
                          <!-- <?php woocommerce_template_loop_add_to_cart( $featured_query->post, $product ); ?> -->
                </div></a></li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
          </section>

   </ul>
  </div>
</div> <!--end featured -->


<div class="featured">
  <div class="container-fluid">
    <h2 class="getkunst-title">Our Bestsellers</h2>
    <ul class="front-products-slider2">
        <section class="multiple-items single-featured3">
            <?php
                $args = array('post_type' => 'product', 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'posts_per_page' => '10', 'fields' => 'ids', 'meta_key' => 'total_sales', 'orderby' => 'meta_value_num','meta_query' => WC()->query->get_meta_query() );
                $featured_query = new WP_Query( $args );
                while ( $featured_query->have_posts() ) : $featured_query->the_post(); global $product; ?>
                <li class="slider-products">
                  <a id="id-<?php the_id( $featured_query->post->ID ); ?>" href="<?php the_permalink( $featured_query->post->ID ); ?>" title="<?php the_title( $featured_query->post->ID ); ?>">
                    <div class="slider-products-inner">
                      <?php tm_woowishlist_add_button_single( $featured_query->post->ID ); ?>
                      <div class="hidden-xs	hidden-sm"><?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID( $loop->post->ID ).'" type="icon" label=""]'); ?></div>
                      <a id="id-<?php the_id( $featured_query->post->ID ); ?>" href="<?php the_permalink( $featured_query->post->ID ); ?>" title="<?php the_title( $featured_query->post->ID ); ?>">
                        <img width="300" class="lozad" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                        src="https://d1zczzapudl1mr.cloudfront.net/preloader/loader_150x150.gif"
                        data-src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>"
                        >
                      </a>
                          <a id="id-<?php the_id( $featured_query->post->ID ); ?>" href="<?php the_permalink( $featured_query->post->ID ); ?>" title="<?php the_title( $featured_query->post->ID ); ?>">
                            <h2 class="product__title"><?php the_title( $featured_query->post->ID ); ?></h2>
                          </a>
                          <span class="price"><?php echo $product->get_price_html(); ?></span>
                          <!-- <?php woocommerce_template_loop_add_to_cart( $featured_query->post, $product ); ?> -->
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
      <section class="multiple-items">
        <?php echo do_shortcode('[widget id="woocommerce_recently_viewed_products-2" title="0"]'); ?>
      </section>
  </div>
</div> <!--end featured -->

<section class="newsletter">
  <div class="container">
    <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
            <form action="//getkunst.us4.list-manage.com/subscribe/post?u=dc33750d705aedfe96f08bddd&amp;id=48c09b72db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
              <div class="col-sm-12">
                <span>Sign me up for the newsletter and get <strong>$5 off</strong></span>
              </div>
              <div class="col-sm-4">
            		<!--<label for="mce-FNAME">First Name</label>-->
            		<input type="text" name="FNAME" placeholder="Name required" id="mce-FNAME" required>
            	</div>
            	<div class="col-sm-4">
            		<!--<label for="mce-EMAIL">Email Address</label>-->
            		<input type="email" name="EMAIL" placeholder="Email required" id="mce-EMAIL" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
            	</div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f2d244c0df42a0431bd08ddea_aeaa9dd034" tabindex="-1" value=""></div>
                <div class="col-sm-4">
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                  <div class="mc-status"></div>
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
                      <img width="300" class="lozad" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                      src="https://d1zczzapudl1mr.cloudfront.net/preloader/loader_150x150.gif"
                      data-src="<?php if (has_post_thumbnail()) echo the_post_thumbnail_url( '300x300' ); ?>">
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
  <div class="container-fluid">
        <ul id="instafeed" class="insta-slide"></ul>
      </div>
</div>
</div><!-- /.wrap -->

<?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
</body>
</html>

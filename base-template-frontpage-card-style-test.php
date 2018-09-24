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
<div class="container-fluid">
<div class="complex-row">
  <div class="flex-order tile-1">
    <a class="tile tile-large" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text'].''); ?>.jpg"
      srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>-large.jpg 800w"
      src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1'].''); ?>.jpg"
      >
        <div class="tile-content">
          <a href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
            <span class="tile-title" style="color: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text-color'].''); ?>;"> <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-text'].''); ?></span>
            <span class="btn btn-tile">Browse <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image1-btn-text'].''); ?></span>
          </a>
        </div>
  </a>
  </div>
  <div class="flex-order tile-2">
      <a class="tile tile-large" href="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-link'].''); ?>" class="anchor" title="art prints" alt="art prints">
      <img sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2-text'].''); ?>.jpg"
      srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>-large.jpg 800w"
      src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image2'].''); ?>.jpg"
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
      <img sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3-text'].''); ?>.jpg"
      srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>-large.jpg 800w"
      src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image3'].''); ?>.jpg"
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
      <img sizes="(max-width: 2500px) 40vw, 800px"
      alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4-text'].''); ?>.jpg"
      srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-small.jpg 480w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-medium.jpg 660w,
              <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>-large.jpg 800w"
      src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image4'].''); ?>.jpg"
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
    <img sizes="(max-width: 2500px) 40vw, 800px"
    alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5-text'].''); ?>.jpg"
    srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-small.jpg 480w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-medium.jpg 660w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>-large.jpg 800w"
    src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image5'].''); ?>.jpg"
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
    <img sizes="(max-width: 2500px) 40vw, 800px"
    alt="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6-text'].''); ?>.jpg"
    srcset="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-small.jpg 480w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-medium.jpg 660w,
            <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>-large.jpg 800w"
    src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['image6'].''); ?>.jpg"
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

<div data-background-image="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-url-1'].''); ?>" style="background: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-bgcolor-1'].''); ?>" class="gk-banner">
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
</div><!-- /.wrap -->


<div class="featured">
  <div class="container-fluid">
    <h2 class="getkunst-title">Our Favorites</h2>
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
                        <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
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
  </div>
</div> <!--end featured -->


<div class="featured">
  <div class="container-fluid">
    <h2 class="getkunst-title">Our Bestsellers</h2>
    <ul class="front-products-slider2">
        <section class="multiple-items single-featured3">
            <?php
                $args = array(
                  'post_type' => 'product',
                  'post_status' => 'publish',
                  'ignore_sticky_posts' => 1,
                  'posts_per_page' => '10',
                  'columns' => '4',
                  'fields' => 'ids',
                  'meta_key' => 'total_sales',
                  'orderby' => 'meta_value_num',
                  'meta_query' => WC()->query->get_meta_query()
                );
                $featured_query = new WP_Query( $args ); while ( $featured_query->have_posts() ) : $featured_query->the_post(); global $product; ?>
                <li class="slider-products">
                  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="slider-products-inner">
                      <?php tm_woowishlist_add_button_single(); ?>
                      <?php echo do_shortcode('[yith_quick_view product_id="'.get_the_ID().'" type="icon" label=""]'); ?>
                      <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img width="300" height="300" class="lazy attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php if (has_post_thumbnail( $featured_query->post->ID )) echo the_post_thumbnail_url( '300x300' ); ?>">
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
<form action="https://intermac.us4.list-manage.com/subscribe/post?u=dc33750d705aedfe96f08bddd&amp;id=48c09b72db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
  <div class="container-fluid">
        <ul id="instafeed" class="insta-slide"></ul>
      </div>
</div>

<?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
</body>
</html>

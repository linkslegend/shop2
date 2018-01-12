<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php
    $image_gk = get_post_meta($post->ID, 'banner', true);
    if ($image_gk == '' ){
        $image_gk = 'http://localhost:8888/shop/wp-content/uploads/banner/' . rand(1,3) . '.jpg';
    }else{
        $image_gk = get_post_meta($post->ID, 'banner', true);
    }
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
      <div class="pageimage-overlay"></div>
      <div class="pageimage-content container-fluid" itemprop="name">
          <section class="category-banner" style="display:block">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'primary_navigation',
              'sub_menu'       => true
            ) );?>
          </section>
      </div>
</section>


<!-- main content -->
 <div class="wrap container-fluid" role="document">
 <div class="content">

   <main class="main">

        <div class="main taxonomy-cat" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
        <div class="taxonomy-cat-page">
        <div class="taxonomy-cat-content">
          <?php echo category_description(); ?>
          <?php woocommerce_content(); ?>
        </div>
    </div>
  </div>
      </main> <!-- /main  -->
    </div> <!-- /.content row -->
  </div><!-- /.wrap -->
</div>
    <?php get_template_part('templates/footer'); wp_footer(); ?>
  </body>
</html>

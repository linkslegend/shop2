<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php
    $image_calwer = get_post_meta($post->ID, 'banner', true);
    if ($image_calwer == '' ){
        $image_calwer = 'http://localhost:8888/calwer-shop/wp-content/uploads/banner/calwerbild-' . rand(1,3) . '.jpg';
    }else{
        $image_calwer = get_post_meta($post->ID, 'banner', true);
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


<section id="slider-header" class="pageimage-header pageimage product-page" style="background-image: url(<?php echo $image_calwer ?>);">
      <div class="pageimage-overlay"></div>
      <div class="pageimage-content" itemprop="name"><h1><?php single_term_title(); ?></h1></div>
</section>


<!-- main content -->
 <div class="wrap container-fluid" role="document">
 <div class="content">

   <main class="main">

        <div class="main col-sm-8 taxonomy" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
        <div class="container taxonomy-page">
          <div class="col-sm-3 taxonomy-sidebar">
          <aside class="sidebar taxonomy">
                <?php echo do_shortcode('[accordionmenu id="unique0ae1d98" accordionmenu="3560"]'); ?>
                <?php dynamic_sidebar('sidebar-frontpage'); ?>
          </aside><!-- /.sidebar -->
        </div>
        <div class="col-sm-9 taxonomy-content">
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

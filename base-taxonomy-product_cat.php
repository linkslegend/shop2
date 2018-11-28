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
      <div class="pageimage-overlay"></div>
      <div class="pageimage-content container-fluid" itemprop="name">
        <section class="category-banner" style="display:block">
          <?php
          $old_query = $wp_query;
          $wp_query = new WP_Query( array('post_type' => 'product') );
              wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'sub-menu', 'sub_menu' => true ));
          $wp_query = $old_query;
          ?>
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
          <div class="ais-outer-wrapper"></div>
          <div class="preload"></div>
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

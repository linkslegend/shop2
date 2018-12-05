<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<style>
.page-category-description:empty,
#algolia-search-box:empty,
#alg-current-refinements:empty,
#ais-wc-attributes:empty,
#algolia-hits:empty,
#ais-main:empty,
.ais-facets:empty{
  content: "";
  min-height: 50px;
  height: 120px;
    border-radius: 5px;
  display: block;
  width: 100%;
  background-color: #f4f4f4;
  background-image: linear-gradient( 100deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 80% );
  animation-duration: 1s;
  animation-fill-mode: forwards;
  animation-iteration-count: infinite;
  animation-name: placeHolderShimmer;
  animation-timing-function: linear;}
  #algolia-hits:empty{
  	height: 500px;
  	overflow: visible;
  }
  #ais-wrapper,
  #ais-wrapper #algolia-hits {
      overflow: visible;}

  .ais-hits--item:empty{
  	width: 20%;
  	float: left;
  	height: 350px;
  	padding: 10px;
  }
  @keyframes placeHolderShimmer {
    0% {
      background-position: -468px 0;
    }
    100% {
      background-position: 468px 0;
    }
  }
</style>
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

<section id="slider-header" class="pageimage-header pageimage product-page">
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

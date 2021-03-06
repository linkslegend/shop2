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


<div class="wrap container-fluid checkout" role="document">
  <div class="content">
    <main class="main">

<div id="breadcrumb" class="steps">
  <ul>
    <li class="cart"><a href="/cart"><h2>Cart</h2></a></li>
    <li class="checkout active"><a href="/checkout"><h2>Checkout</h2></a></li>
    <li class="confirm"><h2>Confirmation</h2></li>
  </ul>
</div>

      <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
    <?php if (Setup\display_sidebar()) : ?>
      <aside class="sidebar">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div><!-- /.content -->
</div><!-- /.wrap -->

<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['socialbox'].''); ?>

<?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
</body>
</html>

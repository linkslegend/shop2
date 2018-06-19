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
<div class="col-sm-8 ins-header">
  <h1>Inspiration for your wall</h1>
      <p class="center header-text-page">Here we share suggestions for stylish and trendy wallpapers of posters and posters in different sizes. Below, we have collected templates that fit many different rooms and interior styles.
  </p>
  <ul class="inspirationNav">
    <li class="in1"><a class="active" href="#">Shop Instagram</a></li>
    <li class="in3"><a href="#">How to hang guide</a></li>
  </ul>
  <?php echo do_shortcode('[searchandfilter id="33656"]'); ?>
</div>

<div class="content">
  <div class="container-fluid">
    <?php echo do_shortcode('[searchandfilter id="33656" show="results"]'); ?>
        <?php include Wrapper\template_path(); ?>
    </div><!-- /.main -->
  </div>
  </div>
    <?php if (Setup\display_sidebar()) : ?>
      <aside class="sidebar">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div><!-- /.content -->
</div><!-- /.wrap -->


<?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
</body>
</html>

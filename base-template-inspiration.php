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
<div class="filter-wrapper">
  <select class="filters-select selectpicker">
    <option value="*">show all</option>
    <option value=".kitchen">Kitchen</option>
    <option value=".dining-room">Dining Room</option>
    <option value=".living-room">Living Room</option>
    <option value=".office">Office</option>
    <option value=".bathroom">Bathroom</option>
    <option value=".bedroom">Bedroom</option>
  </select>
  <select class="filters-select selectpicker">
    <option value="*">show all</option>
    <option value=".kitchen">Kitchen</option>
    <option value=".dining-room">Dining Room</option>
    <option value=".living-room">Living Room</option>
    <option value=".office">Office</option>
    <option value=".bathroom">Bathroom</option>
    <option value=".bedroom">Bedroom</option>
  </select>
  <select class="filters-select selectpicker">
    <option value="*">show all</option>
    <option value=".kitchen">Kitchen</option>
    <option value=".dining-room">Dining Room</option>
    <option value=".living-room">Living Room</option>
    <option value=".office">Office</option>
    <option value=".bathroom">Bathroom</option>
    <option value=".bedroom">Bedroom</option>
  </select>
</div>

</div>

  <div class="container-fluid">
    <div class="grid-inspiration">
    <div class="grid-sizer-inspiration"></div>
  	<?php
        $args = array('post_type'=>array('posts', 'roomstyle'));
        query_posts($args);
        if ( have_posts() ) {
        	while ( have_posts() ) {
        		the_post();
  		?>
  		<div class="grid-item-inspiration <?php the_field('room'); ?>" data-category="<?php the_field('room'); ?>">
  				<div class="card-content">
  					<a href="<?php the_field('product-link'); ?>"><img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url( array(350, 500) );} ?>" class="image"/></a>
  					<!--<?php the_field('shoppable_button'); ?>-->
  					<h3><?php the_title(); ?></h3>
  					<!--<h3><?php the_field('product-price'); ?></h3>-->
  					<ul class="room-styles-arrangement">
              <li><div class="button <?php the_field('room'); ?>" data-category=".<?php the_field('room'); ?>"><?php the_field('room'); ?></div></li>
              <li><div class="button <?php the_field('styles'); ?>" data-category=".<?php the_field('styles'); ?>"><?php the_field('styles'); ?></div></li>
              <li><div class="button <?php the_field('arrangement'); ?>" data-category=".<?php the_field('arrangement'); ?>"><?php the_field('arrangement'); ?></div></li>
  					</ul>
  			</div>
  		</div>
  		<?php
  	} }
  	?>
  </div>


        <?php include Wrapper\template_path(); ?>
    </div><!-- /.main -->
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

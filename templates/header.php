<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>
<div class="overlay">
  <button type="button" class="hamburger navbar-toggle collapsed is-closed" data-toggle="offcanvas" data-target=".navbar-collapse">
    <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
    <span class="menu-text">Menu</span>
  </button>
</div>

<div id="wrapper">


  <!-- shop 1.top menu -->
  <div class="topRow">
    <div class="container-fluid">
        <ul>
          <li class="shipping-cost">Free shipping on most orders
            <a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Abonnements und Onlinedokumente bleiben bei der Feststellung des relevanten Bestellwerts unberücksichtigt." style="display: none;">
              <i class="fa fa-info-circle"></i></a></li>
          <li class="telephone">Phone:&nbsp; <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['phone'].''); ?></li>
          <li class="support"><a href="/contact">Help &amp; Service</a></li>
          <li class="support-kontakt">
            <?php if (is_user_logged_in()) : ?>
              <a class="myaccount" href="/my-account">My Account</a> <a class="logout" href="<?php echo wp_logout_url( home_url() ); ?>">logout</a>
            <?php else : ?>
              <a class="login" href="/login" title="Login">Login</a>
              <a class="myaccount register" href="/register" title="Login">Register</a>
            <?php endif;?>
          </li>
      </ul>
    </div><!--.container-->
  </div><!--.topRow-->


<header id="header" class="headroom banner navbar navbar-default navbar-static-top" role="banner">

<div class="navbar-header">
    <button type="button" class="hamburger navbar-toggle collapsed is-closed" data-toggle="offcanvas" data-target=".navbar-collapse">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
      <span class="menu-text">Menu</span>
    </button>
    <div class="icon-menu-gk left hidden-md hidden-sm hidden-lg">
          <a class="account" href="<?php if (is_user_logged_in()) : ?>/my-account<?php else : ?>/my-account<?php endif;?>"><span>Account</span></a>
    </div>
</div>

<div class="top-menu">
      <div class="container-fluid" id="menu">
        <a id="logo" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" class="logo standard">
          <img src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['logo1'].''); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <nav class="collapse navbar-collapse" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation',
            'walker' => new Yamm_Fw_Nav_Walker(),
            'depth'             => 3,
            'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
            'container'         => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bootstrap-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav yamm']);
          endif;
          ?>
          <div id="desktop-search" class="desktop-search"><?php echo do_shortcode('[yith_woocommerce_ajax_search]');?><i class="fa fa-search" aria-hidden="true"></i></div>
          <div class="icon-menu-gk">
                <a id="pop" class="account btn" tabindex="-1" data-popover="true"
                    data-content="<?php if (is_user_logged_in()) : ?>
                      <span class='username'>Hello, <?php $current_user = wp_get_current_user(); echo $current_user->user_firstname; echo '&nbsp;' . $current_user->user_lastname; ?></span>
                      <a class='button' href='/my-account'>My Account</a>
                      <hr class='hr-light'></hr>
                      <a class='poplink' href='/order-tracking'>Order Tracking</a>
                      <a class='poplink' href='/my-account/orders/'>Orders</a>
                      <a class='poplink' href='/faq'>FAQ</a>
                      <a class='poplink' href='/help'>Help</a>
                      <hr class='hr-light'></hr>
                      <a class='poplink' href='<?php echo wp_logout_url( home_url() ); ?>'>logout</a>
                    <?php else : ?>
                    <a class='button' href='/my-account'>Register</a>
                    <span class='light'>Already have a account?</span>
                    <a class='poplink' data-toggle='modal' data-target='#loginmodal' href='#'>Login</a>
                    <hr class='hr-light'></hr>
                    <a class='poplink' href='/faq'>FAQ</a>
                    <a class='poplink' href='/help'>Help</a><?php endif;?>">
                    <span class="text">Account</span>
                    </a>
                    <div id="hover" class="wishlist"  href="#">
                      <span class="text">Wishlist</span>
                      <div id="popup" class="fade bottom in"><div class="arrow"></div><?php echo do_shortcode('[tm_woo_wishlist_table]'); ?><a href="/wishlist"><button class="wishlist-button">Go to wishlist</button></a></div>
                    </div>
                    <div class="Cart-right">
                      <?php echo do_shortcode('[WooCommerceWooCartPro]'); ?><span class="text">Cart</span>
                    </div>

          </div>
        </nav>
          </nav>

          <div class="icon-menu-gk hidden-md hidden-sm hidden-lg">
                <a class="wishlist" href="/wishlist"><span>Wishlist</span></a>
                <a class="Cart-right" href="/cart"><span>Cart</span></a>
          </div>


      </div><!-- end id menu -->
</div><!--.container-->

</header>

<div id="menu-mobile">

  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <div class="mobile-search"><?php echo do_shortcode('[yith_woocommerce_ajax_search]');?><i class="fa fa-search" aria-hidden="true"></i>
</div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav sidebar-nav']);
      endif;
      ?>
      <ul id="menu-menu-3" class="nav sidebar-nav">
        <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a title="Shop" href="/newsletter">Newsletter</a></li>-->
        <?php if (is_user_logged_in()) : ?>
          <li class="menu-item support-kontakt"><a class="myaccount" href="/my-account">My Account</a></li>
          <li class="menu-item support-kontakt"><a class="tracking" href="/order-tracking">Order Tracking</a></li>
          <li class="menu-item support-kontakt"><a class="orders" href="/my-account/orders/">Orders</a></li>
          <li class="menu-item support-kontakt"><a class="address" href="/my-account/edit-address/">Edit Address</a></li>
          <li class="menu-item support-kontakt"><a class="logout" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
          <?php else : ?>
            <li class="menu-item support-kontakt"><a class="login" href="/login" title="Login">Login</a></li>
            <li class="menu-item support-kontakt"><a class="register" href="/register">Register</a></li>
          <?php endif;?>
      </ul>
    </nav>
      </nav>
</div><!-- end id menu -->


<!-- login modal -->

<!-- login modal -->
<div class="modal fade loginmodal" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
            <div class="modal-body">
              <div class="social-login-container"><?php echo do_shortcode('[auth0]'); ?></div>
                  <div class="secure-connection">Secure connection</div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>

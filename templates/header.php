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

<div id="menu-mobile" class="container">
  <nav class="navbar navbar-default" id="sidebar-wrapper" role="navigation">
      <div class="mobile-menu-header">
        <button type="button" class="hamburger navbar-toggle collapsed is-open" data-toggle="offcanvas" data-target=".navbar-collapse" onclick="lockScroll();">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
          <span class="menu-text">Close</span>
        </button>

        <div class="mobile-top-menu">
          <a id="logo" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" class="logo standard">
            <img class="lozad" src="https://d1zczzapudl1mr.cloudfront.net/blank-kraken.gif" data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['logo1'].''); ?>" alt="<?php bloginfo('name'); ?>">
          </a>
              <?php if (is_user_logged_in()) : ?>
                <a class="mobile-logout" title="logout" href="<?php echo wp_logout_url( home_url() ); ?>">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <span>Logout</span>
                </a>
              <?php else : ?>
                <div class="account-container" data-toggle="modal" data-target="#loginmodal">
                  <span>Account</span>
              </div>
              <?php endif;?>
      </div>
          <div class="mobile-search">
            <?php echo do_shortcode('[wcas-search-form]');?>
          </div>
          <?php if (is_user_logged_in()) : ?>
          <h2>Welcome <?php $current_user = wp_get_current_user(); echo $current_user->user_firstname; echo '&nbsp;' . $current_user->user_lastname; ?></h2>
          <?php else : ?>
          <?php endif;?>
      </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'walker'         => new wp_bootstrap_navwalker(),
          'menu_class'     => 'nav sidebar-nav navbar-nav'
        ]);
      endif;
      ?>
      <ul id="menu-menu-3" class="nav sidebar-nav navbar-nav">
        <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a title="Shop" href="/newsletter">Newsletter</a></li>-->
        <?php if (is_user_logged_in()) : ?>
          <li class="menu-item support-kontakt"><a class="myaccount" href="/my-account">My Account</a></li>
          <li class="menu-item support-kontakt"><a class="tracking" href="/order-tracking">Order Tracking</a></li>
          <li class="menu-item support-kontakt"><a class="orders" href="/my-account/orders/">Orders</a></li>
          <li class="menu-item support-kontakt"><a class="address" href="/my-account/edit-address/">Edit Address</a></li>
          <li class="menu-item support-kontakt"><a class="logout" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
          <?php else : ?>
            <li class="menu-item support-kontakt"><a data-toggle="modal" data-target="#loginmodal" href="#" class="login" title="Login">Login</a></li>
            <li class="menu-item support-kontakt"><a class="register" href="/my-account">Register</a></li>
          <?php endif;?>
      </ul>

<footer class="mobile">
  <div class="more">
    <h2>more getkunst</h2>
        <div class="image-menu" data-example-id="thumbnails-with-custom-content">
             <div class="mobile-box left">
              <div class="thumbnail">
                <div class="img lozad" data-background-image="https://scontent-frx5-1.cdninstagram.com/vp/ac51e44969be027cfefe32aba9e25f68/5C0F99C2/t51.2885-15/e15/37651526_243722309584020_6964576056451792896_n.jpg"></div>
                <div class="caption">
                  <h3>new in</h3>
                </div>
                </div>
              </div>

              <div class="mobile-box right">
               <div class="thumbnail">
                  <div class="img lozad" data-background-image="https://scontent-frx5-1.cdninstagram.com/vp/fa14278012951a30ea755ebffc9913ac/5BFC2BFD/t51.2885-15/e15/36861560_681018172248254_8068377759556042752_n.jpg"></div>
                  <div class="caption">
                    <h3>inspiration</h3>
                  </div>
                </div>
              </div>

              <div class="mobile-box left">
               <div class="thumbnail">
                 <div class="img lozad" data-background-image="https://scontent-frx5-1.cdninstagram.com/vp/61806fa5c3fbd8e35b4485ea9fc5f152/5BF79CCD/t51.2885-15/fr/e15/p1080x1080/32425378_362546590903630_5872258765184565248_n.jpg"></div>
                 <div class="caption">
                   <h3>bestsellers</h3>
                 </div>
                 </div>
               </div>

               <div class="mobile-box right">
                <div class="thumbnail">
                   <div class="img lozad" data-background-image="https://getkunst.com/wp-content/uploads/getkunst-magazine.jpg"></div>
                   <div class="caption">
                     <h3>magazine</h3>
                   </div>
                 </div>
               </div>
      </div>
  </div>

  <div class="social-menu">
      <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['socialbox'].''); ?>
  </div>

  <ul id="menu-menu-3" class="nav sidebar-nav navbar-nav">
      <li class="megamenu menu-item menu-item-has-children dropdown">
        <a href="" class="dropdown-toggle current" data-toggle="dropdown" aria-expanded="false">Help & Information<b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="megamenu-column">
          <ul>
          	<li class="menu-item "><a href="/help/">Help</a></li>
          	<li class="menu-item "><a href="">Track Order</a></li>
          	<li class="menu-item "><a href="">Delivery & Returns</a></li>
          	<li class="menu-item "><a href="/contact/">Contact</a></li>
          </ul>
       </li>
      </ul>
      </li>
      <li class="megamenu menu-item menu-item-has-children dropdown">
        <a href="" class="dropdown-toggle current" data-toggle="dropdown" aria-expanded="false">About Getkunst.com<b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="megamenu-column">
          <ul>
          	<li class="menu-item "><a href="/help/">About Us</a></li>
          	<li class="menu-item "><a href="">Artists</a></li>
          </ul>
       </li>
      </ul>
      </li>
      <li class="megamenu menu-item menu-item-has-children dropdown">
        <a href="" class="dropdown-toggle current" data-toggle="dropdown" aria-expanded="false">More<b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="megamenu-column">
          <ul>
          	<li class="menu-item "><a href="/help/">Help</a></li>
          	<li class="menu-item "><a href="">Track Order</a></li>
          	<li class="menu-item "><a href="">Delivery & Returns</a></li>
          	<li class="menu-item "><a href="/contact/">Contact</a></li>
          </ul>
       </li>
      </ul>
      </li>
  </ul>

<div class="legalbar">
  <div class="legalbar-inner">
  <p class="copy">© <?php echo date('Y'); ?> – All Rights Reserved – <?php bloginfo('name'); ?></p>
    <ul>
      <li><a href="/privacy-policy/">Privacy Policy</a></li>
      <li><a href="/terms-conditions/">Ts&amp;Cs</a></li>
      <li><a href="/cookie-policy/">Use of cookies</a></li>
    </ul>
  </div>
</div>

</footer>

    </nav>
  </nav>
</div>
<!-- end id menu -->

<!-- login modal -->
<div class="modal fade loginmodal" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <!--<div class="profile-image"><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?></div>-->
    <div class="modal-content lozad" data-background-image="https://d1zczzapudl1mr.cloudfront.net/geometric-abstraction2.png" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2>Welcome</h2>
      </div>
      <div class="modal-body">
        <form id="login" action="login" method="post">
            <p class="status"></p>
            <div class="input-1">
              <label class="username" for="username"><i class="fa fa-lock" aria-hidden="true"></i></label>
              <input id="username" type="text" name="username" placeholder="Username or Email">
            </div>
            <div class="input-2">
              <label class="password" for="password"><i class="fa fa-user" aria-hidden="true"></i></label>
              <input id="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="input-3">
              <div class="lost-reg">
                <a class="lost" href="/my-account/lost-password">Lost your password?</a><br />
                <span>Are you a new customer?</span> <a class="lost" href="<?php echo home_url(); ?>/register">Register Now</a>
              </div>
              <input class="submit_button" type="submit" value="Login" name="submit">
              <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
              <div class="seperate"><span class="hr-social">or</span></div>
              <div class="social-login-container"><?php echo do_shortcode('[TheChamp-Login]') ?></div>
              <!--<div class="secure-connection">Secure connection</div>-->
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="wrapper">

<div id="header-placeholder"></div>
<header id="header" class="banner navbar navbar-default navbar-static-top" role="banner">

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
              <a class="login" data-toggle="modal" data-target="#loginmodal" href="#" title="Login">Login</a>
              <a class="myaccount register" href="/my-account" title="My account">Register</a>
            <?php endif;?>
          </li>
      </ul>
    </div><!--.container-->
  </div><!--.topRow-->

<div class="navbar-header">
    <button type="button" class="hamburger navbar-toggle collapsed is-closed" data-toggle="offcanvas" data-target=".navbar-collapse">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
      <span class="menu-text">Menu</span>
    </button>
    <div class="icon-menu-gk left hidden-md hidden-sm hidden-lg">
          <?php if (is_user_logged_in()) : ?>
            <a class="account" href="/my-account"><span>Account</span></a>
          <?php else : ?>
            <a class="account" data-toggle="modal" data-target="#loginmodal" href="#"><span>Account</span></a>
          <?php endif;?>
    </div>
</div>

<div class="top-menu">
      <div class="container-fluid" id="menu">
        <a id="logo" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" class="logo standard">
          <img class="lozad" src="https://d1zczzapudl1mr.cloudfront.net/blank-kraken.gif" data-src="<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['logo1'].''); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <nav class="collapse navbar-collapse mega-menu" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation',
            'walker'         => new wp_bootstrap_navwalker(),
            'container'         => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bootstrap-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
          <div id="desktop-search" class="desktop-search">
            <?php echo do_shortcode('[wcas-search-form]');?>
          </div>
          <div class="icon-menu-gk">


            <div id="hover" class="account"  href="#">
              <span class="text">Account</span>
              <div id="popup" class="account-popup popover-content fade bottom in"><div class="arrow"></div>
            <?php if (is_user_logged_in()) : ?>
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
            <a class='button' data-toggle='modal' data-target='#loginmodal' href='#' title='register'>Login</a>
            <span class='light'>Don't have a account?</span>
            <a class='poplink' href='/my-account' title='Register'>Register</a>
            <hr class='hr-light'></hr>
            <a class='poplink' href='/faq'>FAQ</a>
            <a class='poplink' href='/help'>Help</a><?php endif;?>
          </div>
        </div>


                    <div id="hover" class="wishlist"  href="#">
                      <span class="text">Wishlist</span>
                      <div id="popup" class="wishlist-popup fade bottom in"><div class="arrow"></div>
                      <?php echo do_shortcode('[tm_woo_wishlist_table]'); ?>
                      <a href="/wishlist"><button class="wishlist-button">Go to wishlist</button></a></div>
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


<!-- <a id="pop" class="account" tabindex="-1" data-popover="true"
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
    <a class='button' data-toggle='modal' data-target='#loginmodal' href='#' title='register'>Login</a>
    <span class='light'>Don't have a account?</span>
    <a class='poplink' href='/my-account' title='Register'>Register</a>
    <hr class='hr-light'></hr>
    <a class='poplink' href='/faq'>FAQ</a>
    <a class='poplink' href='/help'>Help</a><?php endif;?>">
    <span class="text">Account</span>
    </a>
    -->

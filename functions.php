<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/wp_bootstrap_navwalker.php',
  'lib/yamm-nav-walker.php',
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);




/**
 * @snippet       Disable Variable Product Price Range
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/disable-variable-product-price-range-woocommerce/
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 2.4.7
 */

add_filter( 'woocommerce_variable_sale_price_html', 'bbloomer_variation_price_format', 10, 2 );

add_filter( 'woocommerce_variable_price_html', 'bbloomer_variation_price_format', 10, 2 );

function bbloomer_variation_price_format( $price, $product ) {

// Main Price
$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
$price = $prices[0] !== $prices[1] ? sprintf( __( '<div class="pricefrom"><span class="from">From:</span> %1$s</div>', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

// Sale Price
$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
sort( $prices );
$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '<div class="pricefrom"><span class="from">From:</span> %1$s</div>' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

if ( $price !== $saleprice ) {
$price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
}
return $price;
}
/* ---------> ***************** <-------- */
/* ---------> WooCommerce Stuff <-------- */
/* ---------> ***************** <-------- */

/** https://businessbloomer.com/woocommerce-display-total-discount-savings-cart/
/**
* @snippet Display Total Discount / Savings @ WooCommerce Cart/Checkout
* @how-to Watch tutorial @ https://businessbloomer.com/?p=19055
* @sourcecode https://businessbloomer.com/?p=20362
* @author Jamie Gill, Rodolfo Melogli, Lubo Enev
* @testedwith WooCommerce 2.6.14
*/

function bbloomer_wc_discount_total() {

    global $woocommerce;

    $discount_total = 0;

    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values) {

    $_product = $values['data'];

        if ( $_product->is_on_sale() ) {
        $discount = ($_product->regular_price - $_product->sale_price) * $values['quantity'];
        $discount_total += $discount;
        }

    }

    if ( $discount_total > 0 ) {
    echo '<tr class="cart-discount">
    <th>'. __( 'You Saved', 'woocommerce' ) .'</th>
    <td data-title=" '. __( 'You Saved', 'woocommerce' ) .' ">'
    . wc_price( $discount_total + $woocommerce->cart->discount_cart ) .'</td>
    </tr>';
    }

}

// Hook our values to the Basket and Checkout pages

add_action( 'woocommerce_cart_totals_after_order_total', 'bbloomer_wc_discount_total', 99);
add_action( 'woocommerce_review_order_after_order_total', 'bbloomer_wc_discount_total', 99);



/* Code to Remove the description tab */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
  function woo_remove_product_tabs( $tabs ) {
    //unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['additional_information'] );      	// Remove the description tab
  return $tabs;
}

// Use the following snippet to rename tabs.
// add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
// function woo_rename_tabs( $tabs ) {
	// $tabs['reviews']['title'] = __( 'Reviews' );				// Rename the reviews tab
//	$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
//	return $tabs;
// }



/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}
	return ! empty( $free ) ? $free : $rates;
}

add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );


/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */
function woo_related_products_limit() {
  global $product;

	$args['posts_per_page'] = 5;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 10; // 4 related products
	$args['columns'] = 1; // arranged in 2 columns
	return $args;
}

/**
* @snippet Move & Change Number of Cross-Sells @ WooCommerce Cart
* @how-to Watch tutorial @ https://businessbloomer.com/?p=19055
* @sourcecode https://businessbloomer.com/?p=20449
* @author Rodolfo Melogli
* @testedwith WooCommerce 2.6.2
*/
// ---------------------------------------------
// Remove Cross Sells From Default Position
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

// ---------------------------------------------
// Add them back UNDER the Cart Table
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display' );

// ---------------------------------------------
// Display Cross Sells on 3 columns instead of default 4
add_filter( 'woocommerce_cross_sells_columns', 'bbloomer_change_cross_sells_columns' );
function bbloomer_change_cross_sells_columns( $columns ) {
return 2;
}
// ---------------------------------------------
// Display Only 3 Cross Sells instead of default 4
add_filter( 'woocommerce_cross_sells_total', 'bbloomer_change_cross_sells_product_no' );
function bbloomer_change_cross_sells_product_no( $columns ) {
return 5;
}

add_filter( 'wc_add_to_cart_message', '__return_empty_string' );

function wooc_extra_register_fields() {?>
  <p class="form-row form-row-wide"><label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
    <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
  </p>
  <p class="form-row form-row-first"><label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
  </p>
  <p class="form-row form-row-last"><label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
  </p>
 <?php
 }
 add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );


 /**
 * register fields Validating.
 */
 function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
       if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
              $validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
       }
       if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {

              $validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
       }
          return $validation_errors;
 }
 add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

 /**
 * Below code save extra fields.
 */
 function wooc_save_extra_register_fields( $customer_id ) {
     if ( isset( $_POST['billing_phone'] ) ) {
                  // Phone input filed which is used in WooCommerce
                  update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
           }
       if ( isset( $_POST['billing_first_name'] ) ) {
              //First name field which is by default
              update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
              // First name field which is used in WooCommerce
              update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
       }
       if ( isset( $_POST['billing_last_name'] ) ) {
              // Last name field which is by default
              update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
              // Last name field which is used in WooCommerce
              update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
       }
 }
 add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

// Remove each style one by one
 add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
 function jk_dequeue_styles( $enqueue_styles ) {
 	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
 	//unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
 	//unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
 	return $enqueue_styles;
 }
// auto check create account
add_filter('woocommerce_create_account_default_checked' , function ($checked){
    return true;
});

// Change 'add to cart' text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_add_to_cart_text' );
function woo_add_to_cart_text() {
       return __( 'Buy Now', 'woocommerce' );
}



// Cheapest Price

add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );

function wc_wc20_variation_price_format( $price, $product ) {
    // Main Price
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    // Sale Price
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    if ( $price !== $saleprice ) {
        $price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
    }

    return $price;
}

// show variation price
add_filter('woocommerce_show_variation_price', function() {return true;});
//override woocommerce function
function woocommerce_template_single_price() {
    global $product;
    if ( ! $product->is_type('variable') ) {
        woocommerce_get_template( 'single-product/price.php' );
    }
}
// variable pricing
function shuffle_variable_product_elements(){
    if ( is_product() ) {
        global $post;
        $product = wc_get_product( $post->ID );
        if ( $product->is_type( 'variable' ) ) {
            remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
            add_action( 'woocommerce_before_variations_form', 'woocommerce_single_variation', 20 );

            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
            add_action( 'woocommerce_before_variations_form', 'woocommerce_template_single_title', 10 );

            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
            add_action( 'woocommerce_before_variations_form', 'woocommerce_template_single_excerpt', 30 );
        }
    }
}
add_action( 'woocommerce_before_single_product', 'shuffle_variable_product_elements' );


// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;

    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }

    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          }
        }
      }
    }
    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;
      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }

    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
    <?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}


add_action( 'after_setup_theme', 'getkunst_setup' );
function getkunst_setup() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}

// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

// Then, remove each CSS file, one at a time
function jeherve_remove_all_jp_css() {
  wp_deregister_style( 'AtD_style' ); // After the Deadline
  wp_deregister_style( 'jetpack_likes' ); // Likes
  wp_deregister_style( 'jetpack_related-posts' ); //Related Posts
  wp_deregister_style( 'jetpack-carousel' ); // Carousel
  wp_deregister_style( 'grunion.css' ); // Grunion contact form
  wp_deregister_style( 'the-neverending-homepage' ); // Infinite Scroll
  wp_deregister_style( 'infinity-twentyten' ); // Infinite Scroll - Twentyten Theme
  wp_deregister_style( 'infinity-twentyeleven' ); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style( 'infinity-twentytwelve' ); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style( 'noticons' ); // Notes
  wp_deregister_style( 'post-by-email' ); // Post by Email
  wp_deregister_style( 'publicize' ); // Publicize
  wp_deregister_style( 'sharedaddy' ); // Sharedaddy
  wp_deregister_style( 'sharing' ); // Sharedaddy Sharing
  wp_deregister_style( 'stats_reports_css' ); // Stats
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
  wp_deregister_style( 'jetpack-slideshow' ); // Slideshows
  wp_deregister_style( 'presentations' ); // Presentation shortcode
  wp_deregister_style( 'jetpack-subscriptions' ); // Subscriptions
  wp_deregister_style( 'tiled-gallery' ); // Tiled Galleries
  wp_deregister_style( 'widget-conditions' ); // Widget Visibility
  wp_deregister_style( 'jetpack_display_posts_widget' ); // Display Posts Widget
  wp_deregister_style( 'gravatar-profile-widget' ); // Gravatar Widget
  wp_deregister_style( 'widget-grid-and-list' ); // Top Posts widget
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
}
add_action('wp_print_styles', 'jeherve_remove_all_jp_css' );



/////////////////************woocommerce user backend************////////////////////
/////////////////************woocommerce user backend************////////////////////
/**
 * @snippet       WooCommerce Add New Tab @ My Account
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=21253
 * @credits       https://github.com/woothemes/woocommerce/wiki/2.6-Tabbed-My-Account-page
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.6.7
 */
// ------------------
// 1. Register new endpoint to use for My Account page
// Note: Resave Permalinks or it will give 404 error
function bbloomer_add_wishlist_ba_endpoint() {
    add_rewrite_endpoint( 'wishlist-ba', EP_ROOT | EP_PAGES );
}
add_action( 'init', 'bbloomer_add_wishlist_ba_endpoint' );
// ------------------
// 2. Add new query var
function bbloomer_wishlist_ba_query_vars( $vars ) {
    $vars[] = 'wishlist-ba';
    return $vars;
}
add_filter( 'query_vars', 'bbloomer_wishlist_ba_query_vars', 0 );
// ------------------
// 3. Insert the new endpoint into the My Account menu
function bbloomer_add_wishlist_ba_link_my_account( $items ) {
    $items['wishlist-ba'] = 'Wishlist';
    return $items;
}
add_filter( 'woocommerce_account_menu_items', 'bbloomer_add_wishlist_ba_link_my_account' );
// ------------------
// 4. Add content to the new endpoint
function bbloomer_wishlist_ba_content() {
echo '<h3>My Wishlist</h3><p></p>';
echo do_shortcode( '[tm_woo_wishlist_table]' );
}
add_action( 'woocommerce_account_wishlist-ba_endpoint', 'bbloomer_wishlist_ba_content' );






/*Allow customers to login with their email address or username */
add_filter('authenticate', 'internet_allow_email_login', 20, 3);
/**
 * internet_allow_email_login filter to the authenticate filter hook, to fetch a username based on entered email
 * @param  obj $user
 * @param  string $username [description]
 * @param  string $password [description]
 * @return boolean
 */
function internet_allow_email_login( $user, $username, $password ) {
    if ( is_email( $username ) ) {
        $user = get_user_by_email( $username );
        if ( $user ) $username = $user->user_login;
    }
    return wp_authenticate_username_password( null, $username, $password );
}


/**
 * Modify the "must_log_in" string of the comment form.
 *
 * @see http://wordpress.stackexchange.com/a/170492/26350
 */
add_filter( 'comment_form_defaults', function( $fields ) {
    $fields['must_log_in'] = sprintf(
        __( '<p class="must-log-in">
                 You must <a href="/my-account/">Register</a> or
                 <a data-toggle="modal" data-target="#loginmodal" href="#">Login</a> to post a comment.</p>'
        ),
        wp_registration_url(),
        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    );
    return $fields;
});

/*cm to inch calculater*/
add_action( 'woocommerce_product_meta_end', 'add_content_after_addtocart_button_func' );
  /*
   * Content below "Add to cart" Button.
   */
  function add_content_after_addtocart_button_func() {
    global $post;
    if ( has_term( 'canvas', 'product_cat', $post->ID ) ) {

        // Echo content.
          echo '<div class="calculate-cm">
          <h3>cm to Inches Converter</h3>
          <div class="col-sm-6">
            <label>cm</label>
            <input id="inputcm2" class="inputcm2" type="number" placeholder="CM" oninput="LengthConverter2(this.value)" onchange="LengthConverter2(this.value)">
            <div class="convert"><span id="outputInches2"></span> <span class="small">(Inch)</span></div>
          </div>
          <div class="col-sm-6">
             <label>cm</label>
             <input id="inputcm" class="inputcm" type="number" placeholder="CM" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
             <div class="convert"><span id="outputInches"></span> <span class="small">(Inch)</span></div>
          </div>
         </div>';

       }
     }

/* Compare size lightbox */
add_action( 'woocommerce_after_add_to_cart_form', 'add_comparisons_after_addtocart_button_func' );
       /*
        * Content below "Add to cart" Button.
        */
       function add_comparisons_after_addtocart_button_func() {
         global $post;
         if ( has_term( 'canvas', 'product_cat', $post->ID ) ) {

             // Echo content.
               echo '<button type="button" data-toggle="modal" data-target="#comparisons" class="button btn btn-default compare-size">
               <span class="text">Size comparisons</span></button>';

            }
          }


/* Inser coupon code into single product */
add_action( 'woocommerce_product_meta_end', 'add_content_after_addtocart_button_unlock' );
/*
* Content below "Add to cart" Button.
*/
function add_content_after_addtocart_button_unlock() {
$options = get_option('futurewave_theme_options'); echo do_shortcode('
                    [sociallocker]
                    <div class="outer-couponcode"><div class="inner-couponcode">
                    <h4>Thank you! Here is your Couponcode!</h4>
                    <div class="couponcode">'.$options['couponcode'].'</div></div></div>
                    [/sociallocker]');
}

/**
* Filter the except length to 20 words.
*
* @param int $length Excerpt length.
* @return int (Maybe) modified excerpt length.
*/
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
     }
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



/* custom load more   */
function misha_my_load_more_scripts() {
	global $wp_query;
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');

	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/myloadmore.js', array('jquery') );

	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => serialize( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );

 	wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){

	// prepare our arguments for the query
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';

	// it is always better to use WP_Query but not here
	query_posts( $args );

	if( have_posts() ) :

		// run the loop
		while( have_posts() ): the_post();

			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
      get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
		endwhile;
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


add_filter( 'woocommerce_email_styles', 'patricks_woocommerce_email_styles' );
function patricks_woocommerce_email_styles( $css ) {
	$css .= "
#wrapper{ background: #fff;}
#template_header {
        background: #2b2b2b url(https://d1zczzapudl1mr.cloudfront.net/gk-pattern-white.png) 50% repeat;
}
ul.top-menu {
        display:block;
}
ul.top-menu li {
        display:inline-block;
}
ul.top-menu li a {
        color:#0f0f0f;
        font-weight:600;
        text-decoration:none;
        font-size:0.9em;
        font-family:sans-serif;
        padding:10px
}
#credit{
        padding: 48px;
}
#body_content_inner{
        font-size: 14px;
        line-height: 180%!important;
        text-align: left;
}
#template_footer{
        background: #2b2b2b url(https://d1zczzapudl1mr.cloudfront.net/gk-pattern-white.png) 50% repeat;
        padding-top: 45px;
}
#header_wrapper{
        padding: 36px 48px;
        display: block;
}
#header_wrapper h1{
        color: #ffffff;
        font-size: 22px!important;
        font-weight: 300!important;
        line-height: 150%!important;
        margin: 0!important;
        text-align: center!important;
}

  ";
	return $css;
}


/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
     register_setting( 'futurewave_options', 'futurewave_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
     add_theme_page( __( 'Theme Options', 'futurewavetheme' ), __( 'Theme Options', 'futurewavetheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
     global $select_options, $radio_options;

     if ( ! isset( $_REQUEST['settings-updated'] ) )
          $_REQUEST['settings-updated'] = false;

     ?>
     <div class="wrap">
          <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'futurewavetheme' ) . "</h2>"; ?>

          <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
          <div class="updated fade"><p><strong><?php _e( 'Options saved', 'futurewavetheme' ); ?></strong></p></div>
          <?php endif; ?>

          <form method="post" action="options.php">
               <?php settings_fields( 'futurewave_options' ); ?>
               <?php $options = get_option( 'futurewave_theme_options' ); ?>

               <table class="form-table">

<?php
/**
  * A futurewave text input option
*/
?>


<tr valign="top"><th scope="row"><?php _e( 'SocialLocker Content Product page (couponCode)', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[couponcode]" class="regular-text" type="text" name="futurewave_theme_options[couponcode]" value="<?php esc_attr_e( $options['couponcode'] ); ?>" />
  <label class="description" for="futurewave_theme_options[couponcode]"><?php _e( 'SocialLocker Content Product page (couponCode)', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr valign="top"><th scope="row"><?php _e( 'Phone number', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[phone]" class="regular-text" type="text" name="futurewave_theme_options[phone]" value="<?php esc_attr_e( $options['phone'] ); ?>" />
  <label class="description" for="futurewave_theme_options[phone]"><?php _e( 'phone number', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr><th scope="row"><?php _e( 'banner inner content title', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[gktitle]" class="regular-text" type="text" name="futurewave_theme_options[gktitle]" value="<?php esc_attr_e( $options['gktitle'] ); ?>" />
  <label class="description" for="futurewave_theme_options[gktitle]"><?php _e( 'banner inner content title', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr><th scope="row"><?php _e( 'banner inner content', 'futurewavetheme' ); ?></th>
  <td>
    <textarea id="futurewave_theme_options[gkcontent]" class="large-text" cols="50" rows="10" name="futurewave_theme_options[gkcontent]">
    <?php echo esc_html( $options['gkcontent'] ); ?></textarea>
    <label class="description" for="futurewave_theme_options[gkcontent]"><?php _e( 'futurewave text box', 'futurewavetheme' ); ?></label>
  </td>
</tr>

<tr><th scope="row"><?php _e( 'LinkedIn Link', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[linkedin]" class="regular-text" type="text" name="futurewave_theme_options[linkedin]" value="<?php esc_attr_e( $options['linkedin'] ); ?>" />
  <label class="description" for="futurewave_theme_options[linkedin]"><?php _e( 'LinkedIn Link', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr><th scope="row"><?php _e( 'Pinterest Link', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[pinterest]" class="regular-text" type="text" name="futurewave_theme_options[pinterest]" value="<?php esc_attr_e( $options['pinterest'] ); ?>" />
  <label class="description" for="futurewave_theme_options[pinterest]"><?php _e( 'Pinterest Link', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr><th scope="row"><?php _e( 'Delicious Link', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[delicious]" class="regular-text" type="text" name="futurewave_theme_options[delicious]" value="<?php esc_attr_e( $options['delicious'] ); ?>" />
  <label class="description" for="futurewave_theme_options[delicious]"><?php _e( 'Delicious Link', 'futurewavetheme' ); ?></label>
</td>
</tr>
<tr><th scope="row"><?php _e( 'Tumblr Link', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[tumblr]" class="regular-text" type="text" name="futurewave_theme_options[tumblr]" value="<?php esc_attr_e( $options['tumblr'] ); ?>" />
  <label class="description" for="futurewave_theme_options[tumblr]"><?php _e( 'Tumblr Link', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr><th scope="row"><?php _e( 'Logo 1', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[logo1]" class="regular-text" type="text" name="futurewave_theme_options[logo1]" value="<?php esc_attr_e( $options['logo1'] ); ?>" />
  <label class="description" for="futurewave_theme_options[logo1]"><?php _e( 'Logo 1 (Dark Logo)', 'futurewavetheme' ); ?></label>
</td>
</tr>
<tr><th scope="row"><?php _e( 'Logo 2', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[logo2]" class="regular-text" type="text" name="futurewave_theme_options[logo2]" value="<?php esc_attr_e( $options['logo2'] ); ?>" />
  <label class="description" for="futurewave_theme_options[logo2]"><?php _e( 'Logo 2 (Light Logo)', 'futurewavetheme' ); ?></label>
</td>
</tr>

<tr class="tr-header" id="tr-header" style="border-bottom:2px solid #0f0f0f;padding: 5px;width: 100%;"><th style="border-bottom:2px solid #0f0f0f;padding: 5px;width: 100%;">Tile Template image links</th></tr>
<tr>
  <th scope="row"><?php _e( 'Image 1 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image1]" class="regular-text" type="text" name="futurewave_theme_options[image1]" value="<?php esc_attr_e( $options['image1'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image1]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 1 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image1-link]" class="regular-text" type="text" name="futurewave_theme_options[image1-link]" value="<?php esc_attr_e( $options['image1-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image1-link]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 1 text', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image1-text]" class="regular-text" type="text" name="futurewave_theme_options[image1-text]" value="<?php esc_attr_e( $options['image1-text'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image1-text]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 1 btn text', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image1-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image1-btn-text]" value="<?php esc_attr_e( $options['image1-btn-text'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image1-btn-text]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 1 text color', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image1-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image1-text-color]" value="<?php esc_attr_e( $options['image1-text-color'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image1-text-color]"></label>
  </td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 2 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image2]" class="regular-text" type="text" name="futurewave_theme_options[image2]" value="<?php esc_attr_e( $options['image2'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image2]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 2 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image2-link]" class="regular-text" type="text" name="futurewave_theme_options[image2-link]" value="<?php esc_attr_e( $options['image2-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image2-link]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 2 text', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image2-text]" class="regular-text" type="text" name="futurewave_theme_options[image2-text]" value="<?php esc_attr_e( $options['image2-text'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image2-text]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 2 btn text', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image2-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image2-btn-text]" value="<?php esc_attr_e( $options['image2-btn-text'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image2-btn-text]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 2 text color', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image2-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image2-text-color]" value="<?php esc_attr_e( $options['image2-text-color'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image2-text-color]"></label>
  </td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 3 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image3]" class="regular-text" type="text" name="futurewave_theme_options[image3]" value="<?php esc_attr_e( $options['image3'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image3]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 3 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image3-link]" class="regular-text" type="text" name="futurewave_theme_options[image3-link]" value="<?php esc_attr_e( $options['image3-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image3-link]"></label>
  </td>
<th scope="row"><?php _e( 'Image 3 text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image3-text]" class="regular-text" type="text" name="futurewave_theme_options[image3-text]" value="<?php esc_attr_e( $options['image3-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image3-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 3 btn text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image3-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image3-btn-text]" value="<?php esc_attr_e( $options['image3-btn-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image3-btn-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 3 text color', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image3-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image3-text-color]" value="<?php esc_attr_e( $options['image3-text-color'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image3-text-color]"></label>
</td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 4 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image4]" class="regular-text" type="text" name="futurewave_theme_options[image4]" value="<?php esc_attr_e( $options['image4'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image4]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 4 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image4-link]" class="regular-text" type="text" name="futurewave_theme_options[image4-link]" value="<?php esc_attr_e( $options['image4-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image4-link]"></label>
  </td>
<th scope="row"><?php _e( 'Image 4 text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image4-text]" class="regular-text" type="text" name="futurewave_theme_options[image4-text]" value="<?php esc_attr_e( $options['image4-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image4-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 4 btn text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image4-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image4-btn-text]" value="<?php esc_attr_e( $options['image4-btn-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image4-btn-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 4 text color', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image4-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image4-text-color]" value="<?php esc_attr_e( $options['image4-text-color'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image4-text-color]"></label>
</td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 5 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image5]" class="regular-text" type="text" name="futurewave_theme_options[image5]" value="<?php esc_attr_e( $options['image5'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image5]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 5 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image5-link]" class="regular-text" type="text" name="futurewave_theme_options[image5-link]" value="<?php esc_attr_e( $options['image5-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image5-link]"></label>
  </td>
<th scope="row"><?php _e( 'Image 5 text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image5-text]" class="regular-text" type="text" name="futurewave_theme_options[image5-text]" value="<?php esc_attr_e( $options['image5-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image5-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 5 btn text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image5-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image5-btn-text]" value="<?php esc_attr_e( $options['image5-btn-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image5-btn-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 5 text color', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image5-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image5-text-color]" value="<?php esc_attr_e( $options['image5-text-color'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image5-text-color]"></label>
</td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 6 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image6]" class="regular-text" type="text" name="futurewave_theme_options[image6]" value="<?php esc_attr_e( $options['image6'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image6]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 6 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image6-link]" class="regular-text" type="text" name="futurewave_theme_options[image6-link]" value="<?php esc_attr_e( $options['image6-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image6-link]"></label>
  </td>
<th scope="row"><?php _e( 'Image 6 text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image6-text]" class="regular-text" type="text" name="futurewave_theme_options[image6-text]" value="<?php esc_attr_e( $options['image6-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image6-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 6 btn text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image6-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image6-btn-text]" value="<?php esc_attr_e( $options['image6-btn-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image6-btn-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 6 text color', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image6-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image6-text-color]" value="<?php esc_attr_e( $options['image6-text-color'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image6-text-color]"></label>
</td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Image 7 url', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image7]" class="regular-text" type="text" name="futurewave_theme_options[image7]" value="<?php esc_attr_e( $options['image7'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image7]"></label>
  </td>
  <th scope="row"><?php _e( 'Image 7 link', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[image7-link]" class="regular-text" type="text" name="futurewave_theme_options[image7-link]" value="<?php esc_attr_e( $options['image7-link'] ); ?>" />
    <label class="description" for="futurewave_theme_options[image7-link]"></label>
  </td>
<th scope="row"><?php _e( 'Image 7 text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image7-text]" class="regular-text" type="text" name="futurewave_theme_options[image7-text]" value="<?php esc_attr_e( $options['image7-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image7-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 7 btn text', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image7-btn-text]" class="regular-text" type="text" name="futurewave_theme_options[image7-btn-text]" value="<?php esc_attr_e( $options['image7-btn-text'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image7-btn-text]"></label>
</td>
<th scope="row"><?php _e( 'Image 7 text color', 'futurewavetheme' ); ?></th>
<td>
  <input id="futurewave_theme_options[image7-text-color]" class="regular-text" type="text" name="futurewave_theme_options[image7-text-color]" value="<?php esc_attr_e( $options['image7-text-color'] ); ?>" />
  <label class="description" for="futurewave_theme_options[image7-text-color]"></label>
</td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Pattern URL 1', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[pattern-url-1]" class="regular-text" type="text" name="futurewave_theme_options[pattern-url-1]" value="<?php esc_attr_e( $options['pattern-url-1'] ); ?>" />
    <label class="description" for="futurewave_theme_options[pattern-url-1]"></label>
  </td>
  <th scope="row"><?php _e( 'Pattern Color 1', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[pattern-bgcolor-1]" class="regular-text" type="text" name="futurewave_theme_options[pattern-bgcolor-1]" value="<?php esc_attr_e( $options['pattern-bgcolor-1'] ); ?>" />
    <label class="description" for="futurewave_theme_options[pattern-bgcolor-1]"></label>
  </td>
</tr>

<tr>
  <th scope="row"><?php _e( 'Pattern URL 2', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[pattern-url-2]" class="regular-text" type="text" name="futurewave_theme_options[pattern-url-2]" value="<?php esc_attr_e( $options['pattern-url-2'] ); ?>" />
    <label class="description" for="futurewave_theme_options[pattern-url-2]"></label>
  </td>
  <th scope="row"><?php _e( 'Pattern Color 2', 'futurewavetheme' ); ?></th>
  <td>
    <input id="futurewave_theme_options[pattern-bgcolor-2]" class="regular-text" type="text" name="futurewave_theme_options[pattern-bgcolor-2]" value="<?php esc_attr_e( $options['pattern-bgcolor-2'] ); ?>" />
    <label class="description" for="futurewave_theme_options[pattern-bgcolor-2]"></label>
  </td>
</tr>


</tr>

<?php
/**
* A futurewave textarea option
*/
?>
<tr valign="top"><th scope="row"><?php _e( 'A textbox', 'futurewavetheme' ); ?></th>
        <td>
          <textarea id="futurewave_theme_options[socialbox]" class="large-text" cols="50" rows="10" name="futurewave_theme_options[socialbox]">
          <?php echo esc_html( $options['socialbox'] ); ?></textarea>
          <label class="description" for="futurewave_theme_options[socialbox]"><?php _e( 'futurewave text box', 'futurewavetheme' ); ?></label>
        </td>
</tr>
</table>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'futurewavetheme' ); ?>" />
    </p>
  </form>
</div>
     <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {

     // Say our text option must be safe text with no HTML tags
     $input['couponcode'] = ( $input['couponcode'] );
     $input['sometext'] = wp_filter_post_kses( $input['sometext'] );

     // Say our textarea option must be safe text with the allowed tags for posts
     //$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

     return $input;
}

//remove add to cart on shop / category view
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

 function remove_add_to_cart_buttons() {
   if( is_product_category() || is_shop()) {
     remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
   }
 }

function pw_load_scripts() {
 	wp_localize_script('pw-script', 'pw_script_vars', array(
 			'title' => __('Share or like to unlock', 'intermac'),
 			'title' => __('Choose Any Social Social Network from below to share our content and Download it.', 'intermac')
 		)
 	);
 }
add_action('wp_enqueue_scripts', 'pw_load_scripts');


wp_enqueue_script('roots_js', get_template_directory_uri() . $assets['js'], array(), null, true);
$js_data = array(
 	'title' => 'Share or like to unlock',
 	'text' => 'Choose Any Social Social Network from below to share our content and Download it.',
  'facebookappid' => '676027382527018',
  'facebookpageId' => 'https://www.facebook.com/MyCodingTricks',
  'twittervia' => 'mycodingtricks'
 );
wp_localize_script( 'roots_js', 'futurewave', $js_data );

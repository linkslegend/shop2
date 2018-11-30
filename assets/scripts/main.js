/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {


  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

      },
      finalize: function() {
        // JavaScript to be fired on all pages

        (function() {
          new Headroom(document.querySelector("#header"), {
            tolerance: 0,
            offset: 150,
            classes: {
              initial: "slide",
              pinned: "slide--reset",
              unpinned: "slide--up"
            }
          }).init();

        }());


$(document).ready(function() {
              $mainNav = $(".mega-menu");
          		// Create a new div and append it to menu
              $mainNav.append("<div class='slidingLine'></div>");
          // cool nav menu

          $('.megamenu > a').hover(function(){

            var liWidth = $(this).width();
            var ulLeft = $('ul').offset().left;
            var liLeft = $(this).offset().left;
            var target = liLeft - ulLeft;

            $('.slidingLine').css({
              width: liWidth + 0 + 'px',
              left: target + 'px'
            });

          }, function(){

            var liWidth = 0;
            $('.slidingLine').css('width', liWidth);

          });
});


        // init Masonry
        var $container = $('#grid-inspiration'),
            $select = $('div#filter-wrapper select');
        filters = {};

        $container.isotope({
            itemSelector: '.grid-item-inspiration',
            percentPosition: true,
            horizontalOrder: true,
            columnWidth: '.grid-sizer-inspiration'
        });
            $select.change(function() {
            var $this = $(this);

            var $optionSet = $this;
            var group = $optionSet.attr('data-filter-group');
        filters[group] = $this.find('option:selected').attr('data-filter-value');

            var isoFilters = [];
            for (var prop in filters) {
                isoFilters.push(filters[prop]);
            }
            var selector = isoFilters.join('');

            $container.isotope({
                filter: selector
            });

            return false;
        });

        // layout Masonry after each image loads
        $container.imagesLoaded().progress( function() {
          $container.isotope();
        });


        $(document).on('click', ".hamburger", function() {
          $("body").toggleClass("lock-scroll");
          $("#wrapper").toggleClass("pushbar_blur");
        });

      $(document).on('click', function() {
        $(".comment-reply-title").toggleClass("open");
      });

        var canHover = !(matchMedia('(hover: none)').matches);
        if (canHover) {
          document.body.classList.add('can-hover');
        }

        $('.selectpicker').select2({
          width: '100%', // need to override the changed default
          minimumResultsForSearch: Infinity
        });
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};

        $(document).ready(function() {
          // Initialize library to lazy load images
          const observer = lozad('.lozad', {
            rootMargin: '300px 0px', // syntax similar to that of CSS Margin
            loaded: function(el) {
              // Custom implementation on a loaded element
              el.classList.add('loaded');
            }
          });
          observer.observe();

        }); //end $(document).ready(function()

      $('[data-tab]').on('click', function (e) {
            $(this).addClass('active').siblings('[data-tab]').removeClass('active');
            $(this).siblings('[data-content=' + $(this).data('tab') + ']').addClass('active').siblings('[data-content]').removeClass('active');
        e.preventDefault();
      });

        var originalLeave = $.fn.popover.Constructor.prototype.leave;
        $.fn.popover.Constructor.prototype.leave = function(obj) {
          var self = obj instanceof this.constructor ?
            obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
          var container, timeout;

          originalLeave.call(this, obj);

          if (obj.currentTarget) {
            container = $(obj.currentTarget).siblings('.popover');
            timeout = self.timeout;
            container.one('mouseenter', function() {
              //We entered the actual popover – call off the dogs
              clearTimeout(timeout);
              //Let's monitor popover content instead
              container.one('mouseleave', function() {
                $.fn.popover.Constructor.prototype.leave.call(self, self);
              });
            });
          }
        };

        jQuery(window).on('load', function() {
          $(".variations label:contains('Size (Inch)')").html("Size");
          //$(".preload").delay(120).fadeOut('25');
        });
        /*    $(function () {
                $(".identifyingClass").click(function () {
                    var my_id_value = $(this).data('id');
                    $(".modal-body").html(my_id_value);
                });
            });
        */

        /* when a user clicks, toggle the 'is-animating' class */
        $(".tm-woowishlist-button").on('click touchstart', function() {
          $(this).toggleClass('is_animating');
        });


        $('#menu-menu-2 .dropdown-menu').on({
          "click": function(e) {
            e.stopPropagation();
          }
        });

        $('.mega-menu .dropdown').hover(function() {
          $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
        }, function() {
          $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105);
        });

        $(".megamenu").mouseenter(function() {
          $(".dropdown-menu").delay(100).addClass("mouseenter"); //stop "animation" and clear queue
        }).mouseleave(function() {
          $(".dropdown-menu").delay(100).removeClass("mouseenter");
        });



        $(document).on('click', ".tm-woowishlist-button", function() {
          var liId = $("#hover").addClass("active");
        });

        $(document).on('click', ".tm-woowishlist-remove", function() {
          var liId = $("#hover").removeClass("active");
        });


        $(document).on('click', ".prdctfltr_filter_title", function() {
          $(".prdctfltr_woocommerce_ordering").toggleClass("open");
          $(".prdctfltr_filter_title").toggleClass("open");
        });



        jQuery('body').popover({
          selector: '[data-popover]',
          trigger: 'hover focus',
          html: true,
          placement: 'bottom',
          delay: {
            show: 50,
            hide: 50
          }
        });

        $('[data-toggle="popover"]').popover();
        // close on body click // iOS doesnt recognise 'body' click so using :not
        $(':not(#anything)').on('click', function(e) {
          $('[data-toggle="popover"]').each(function() {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
              $(this).popover('hide');
            }
          });
        });


        /*ToolTip*/
        jQuery('#hover').hover(function() {
          var offset = jQuery(this).offset();
          jQuery(this).next('#popup').css('right', offset.right + '350');
        }, function() {
          jQuery(this).next('#popup').fadeOut(200);
        });


        jQuery('#content_hover').hover(function() {
          var offset = jQuery(this).offset();
          jQuery(this).next('#content_popup').css('right', offset.right + '0');
        }, function() {
          jQuery(this).next('#content_popup').fadeOut(200);
        });



        // using custom options
        document.addEventListener('DOMContentLoaded', function(event) {
          instance
            .update() // track initial elements
            .check() // check initial elements
            .handlers(true); // bind scroll and resize handlers
        });
        //

        jQuery(window).on('load', function() {
          jQuery('.image-link').magnificPopup({
            type: 'image'
          });
          jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
          });


        });

        jQuery('.image-gallery').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image'
          // other options
        });

        //end

        jQuery("a.switchtab, a.woocommerce-review-link").click(function(e) {
          e.preventDefault(); //Prevents hash to be appended at the end of the current URL.
          jQuery("div.woocommerce-tabs>ul.tabs>li>a[href='" + $(this).attr("href") + "']").click(); //Opens up the particular tab
          jQuery('html, body').animate({
            scrollTop: $("div.woocommerce-tabs").offset().top
          }, 500); //Change to whatever you want, this value is in milliseconds.
        });



        $(".keyword-list a").click(function() {
          $('a.current').removeClass('current');
          $(this).addClass('current');
        });

        $(".menu-item a").click(function() {
          $('a.current').removeClass('current');
          $(this).addClass('current');
        });


        $(".wpeae_variation_set").on("click", "a.wpeae_variation_select", function() {
          var ClickImageId = $(this).attr('title');
          $('#show').html(ClickImageId);
        });



        $(window).on('load resize orientationchange', function() {
              $('.single-featured4').each(function(){
                  var $carousel = $(this);
                  /* Initializes a slick carousel only on mobile screens */
                  // slick on mobile
                  if ($(window).width() < 1205) {
                      if ($carousel.hasClass('slick-initialized')) {
                          $carousel.slick('unslick');
                      }
                  }
                  else{
                      if (!$carousel.hasClass('slick-initialized')) {
                          $carousel.slick({
                              slidesToShow: 3,
                              lazyLoad: 'ondemand',
                              slidesToScroll: 1,
                              mobileFirst: true,
                          });
                      }
                  }
              });
              $('.single-featured3').each(function(){
                  var $carousel = $(this);
                  /* Initializes a slick carousel only on mobile screens */
                  // slick on mobile
                  if ($(window).width() < 1205) {
                      if ($carousel.hasClass('slick-initialized')) {
                          $carousel.slick('unslick');
                      }
                  }
                  else{
                      if (!$carousel.hasClass('slick-initialized')) {
                          $carousel.slick({
                              slidesToShow: 5,
                              lazyLoad: 'ondemand',
                              slidesToScroll: 2,
                              mobileFirst: true,
                          });
                      }
                  }
              });
              $('.featured3').each(function(){
                  var $carousel = $(this);
                  /* Initializes a slick carousel only on mobile screens */
                  // slick on mobile
                  if ($(window).width() < 1205) {
                      if ($carousel.hasClass('slick-initialized')) {
                          $carousel.slick('unslick');
                      }
                  }
                  else{
                      if (!$carousel.hasClass('slick-initialized')) {
                          $carousel.slick({
                              slidesToShow: 5,
                              lazyLoad: 'ondemand',
                              slidesToScroll: 2,
                              mobileFirst: true,
                          });
                      }
                  }
              });

              $('.product_list_widget').each(function(){
                  var $carousel = $(this);
                  /* Initializes a slick carousel only on mobile screens */
                  // slick on mobile
                  if ($(window).width() < 1205) {
                      if ($carousel.hasClass('slick-initialized')) {
                          $carousel.slick('unslick');
                      }
                  }
                  else{
                      if (!$carousel.hasClass('slick-initialized')) {
                          $carousel.slick({
                              slidesToShow: 5,
                              lazyLoad: 'ondemand',
                              slidesToScroll: 2,
                              mobileFirst: true,
                          });
                      }
                  }
              });


          });

          $('.sub-menu').slick({
            dots: true,
            infinite: true,
            autoplay: false,
            speed: 300,
            autoplaySpeed: 12000,
            lazyLoad: 'ondemand',
            variableWidth: true
          });

        function enable_update_cart() {
            $('[name="update_cart"]').removeAttr('disabled');
        }

        function quantity_step_btn() {
            var timeoutPlus;
            $('.quantity .step-btn.plus').one().on('click', function() {
                $input = $(this).prev('input.qty');
                var val = parseInt($input.val());
                var step = $input.attr('step');
                step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                $input.val( val + step ).change();

                if( timeoutPlus !== undefined ) {
                    clearTimeout(timeoutPlus);
                }
                timeoutPlus = setTimeout(function(){
                    $('[name="update_cart"]').trigger('click');
                }, 1000);
            });

            var timeoutMinus;
            $('.quantity .step-btn.minus').one().on('click', function() {
                $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                var step = $input.attr('step');
                step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                if (val > 1) {
                    $input.val( val - step ).change();
                }

                if( timeoutMinus !== undefined ) {
                    clearTimeout(timeoutMinus);
                }
                timeoutMinus = setTimeout(function(){
                    $('[name="update_cart"]').trigger('click');
                }, 1000);
            });

            var timeoutInput;
            $('div.woocommerce').on('change', '.qty', function(){
                if( timeoutInput !== undefined ) {
                    clearTimeout(timeoutInput);
                }
                timeoutInput = setTimeout(function(){
                    $('[name="update_cart"]').trigger('click');
                }, 1000);
            });
        }


        $( document ).on( 'updated_cart_totals', function() {
            enable_update_cart();
            quantity_step_btn();
        });



        $(".keyword-list a").click(function(e) {
          e.preventDefault();
          slideIndex = $(this).index();
          $('.single-featured2').slick('slickGoTo', parseInt(slideIndex));
        });

      $(document).ready(function() {
          enable_update_cart();
          quantity_step_btn();
          $('[data-toggle="offcanvas"]').click(function() {
            $('#sidebar-wrapper').toggleClass('toggled');
          });
        });


      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS

          var feed = new Instafeed({
            get: 'user',
            userId: '5929691076',
            clientId: '7d864c84ddae4b12943ec5f8b2588b1f',
            // create accessToken http://instagram.pixelunion.net/
            accessToken: '5929691076.1677ed0.a6fb14ad48984650b2ec7b43e21f25bd',
            resolution: 'standard_resolution',
            sortBy: 'most-recent',
            template: '<li class="insta-slider-products"><div class="slider-products-inner"><a target="_blank" href="{{link}}"><figure class="effect-zoe"><div class="lozad insta-image" data-background-image="{{image}}"></div><figcaption><div class="likes">{{likes}}</div><div class="description">{{caption}}</div></figcaption></figure></a></div></li>',
            after: function() {
              //Initializes lozad
              const observer = lozad('.lozad', {
                rootMargin: '300px 0px', // syntax similar to that of CSS Margin
                threshold: 0.1, // ratio of element convergence
                loaded: function(el) {
                  // Custom implementation on a loaded element
                  el.classList.add('loaded');
                }
              });
              observer.observe();

              //Initializes SlickSlider
              $(window).on('load resize orientationchange', function() {
                $(document).ready(function() {
                  $('.insta-slide').each(function(){
                      var $carousel = $(this);
                      /* Initializes a slick carousel only on mobile screens */
                      // slick on mobile
                      if ($(window).width() < 1205) {
                          if ($carousel.hasClass('slick-initialized')) {
                              $carousel.slick('unslick');
                          }
                      }
                      else{
                          if (!$carousel.hasClass('slick-initialized')) {
                              $carousel.slick({
                                  slidesToShow: 5,
                                  slidesToScroll: 2,
                                  autoplay: true,
                                  autoplaySpeed: 4000,
                                  infinite: true,
                                  swipeToSlide: true,
                                  arrows: false,
                                  slide: 'div',
                                  dots: false
                              });
                          }
                      }
                    });
                 });
              });
            }
          });
          feed.run();

      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS

          var feed = new Instafeed({
            get: 'user',
            userId: '5929691076',
            clientId: '7d864c84ddae4b12943ec5f8b2588b1f',
            // create accessToken http://instagram.pixelunion.net/
            accessToken: '5929691076.1677ed0.a6fb14ad48984650b2ec7b43e21f25bd',
            resolution: 'standard_resolution',
            sortBy: 'most-recent',
            template: '<li class="insta-slider-products"><a target="_blank" href="{{link}}"><figure class="effect-zoe"><div class="lozad insta-image" data-background-image="{{image}}"></div><figcaption><div class="likes">{{likes}}</div><div class="description">{{caption}}</div></figcaption></figure></a></li>',
            after: function() {
              //Initializes lozad
              const observer = lozad('.lozad', {
                rootMargin: '0px', // syntax similar to that of CSS Margin
                threshold: 0.1, // ratio of element convergence
                loaded: function(el) {
                  // Custom implementation on a loaded element
                  el.classList.add('loaded');
                }
              });
              observer.observe();

              //Initializes SlickSlider
              $(window).on('load resize orientationchange', function() {
                $(document).ready(function() {
                  $('.insta-slide').each(function(){
                      var $carousel = $(this);
                      /* Initializes a slick carousel only on mobile screens */
                      // slick on mobile
                      if ($(window).width() < 1205) {
                          if ($carousel.hasClass('slick-initialized')) {
                              $carousel.slick('unslick');
                          }
                      }
                      else{
                          if (!$carousel.hasClass('slick-initialized')) {
                              $carousel.slick({
                                  slidesToShow: 5,
                                  slidesToScroll: 2,
                                  autoplay: true,
                                  autoplaySpeed: 4000,
                                  infinite: true,
                                  swipeToSlide: true,
                                  arrows: false,
                                  slide: 'div',
                                  dots: false
                              });
                          }
                      }
                    });
                 });
              });
            }
          });
          feed.run();
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

//*Calculator script cm to inch*/
function LengthConverter(valNum) {
  document.getElementById("outputInches").innerHTML = valNum * 0.39370;
}

function LengthConverter2(valNum2) {
  document.getElementById("outputInches2").innerHTML = valNum2 * 0.39370;
}

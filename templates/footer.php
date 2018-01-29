<footer class="content-info">
  <?php dynamic_sidebar('before-footer'); ?>
<div style="background: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-bgcolor-2'].''); ?> url(<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-url-2'].''); ?>);" class="main-footer container bgimage">
  <?php dynamic_sidebar('sidebar-footer'); ?>
</div>
  <?php dynamic_sidebar('after-footer'); ?>
        <script>
              window.fbMessengerPlugins = window.fbMessengerPlugins || {
                init: function () {
                  FB.init({
                    appId            : '1990178164583495',
                    autoLogAppEvents : true,
                    xfbml            : true,
                    cookie           : true,
                    version          : 'v2.11'
                  });
                }, callable: []
              };
              window.fbAsyncInit = window.fbAsyncInit || function () {
                window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
                window.fbMessengerPlugins.init();
              };
              setTimeout(function () {
                (function (d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) { return; }
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "https://connect.facebook.net/en_US/sdk.js";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
              }, 0);
              </script>
              <div class="fb-customerchat" page_id="1642171926091151" minimized="true" ref=""></div>
              <script async type='text/javascript' src='https://getkunst.com/wp-content/uploads/mailchimp-validate-01.min.js'></script>
</footer>

<div class="modal fade" id="comparisons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <p class="title">Framed Poster</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="size-box">

            <div class="objects"><img src="https://d1zczzapudl1mr.cloudfront.net/canvas-mockup-compare.jpg"></div>
            </div>
            <div class="size-box-description">
                      <p>
                        This overview gives you a detailed understanding of our art print sizes.
                      </p>
            </div>
            <table class="gk_table">
                      <thead>
                        <tr>
                          <td class="gk_table_td title" width="15%"><strong>Size guide</strong></td>
                          <td class="gk_table_td title" width="30%"><strong>In CM</strong></td>
                          <td class="gk_table_td title" width="30%"><strong>in Inch</strong></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">A</td>
                          <td class="gk_table_td">
                            20×30
                          </td>
                          <td class="gk_table_td">
                            8×12
                          </td>
                        </tr>

                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">B</td>
                          <td class="gk_table_td">
                            30×45
                          </td>
                          <td class="gk_table_td">
                            12×18
                          </td>
                        </tr>

                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">C</td>
                          <td class="gk_table_td">
                            40×60
                          </td>
                          <td class="gk_table_td">
                            16×24
                          </td>
                        </tr>

                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">D</td>
                          <td class="gk_table_td">
                            60×90
                          </td>
                          <td class="gk_table_td">
                            24×36
                          </td>
                        </tr>

                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">E</td>
                          <td class="gk_table_td">
                            80×120
                          </td>
                          <td class="gk_table_td">
                            32×48
                          </td>
                        </tr>

                        <tr class="gk_table_tr">
                          <td class="gk_table_td title">F</td>
                          <td class="gk_table_td">
                            100×150
                          </td>
                          <td class="gk_table_td">
                            40×60
                          </td>
                        </tr>

                      </tbody>
                    </table>

          </div>
        </div>
      </div>
</div>

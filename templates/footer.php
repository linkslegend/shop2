<footer class="content-info">
  <?php dynamic_sidebar('before-footer'); ?>
<div style="background: <?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-bgcolor-2'].''); ?> url(<?php $options = get_option('futurewave_theme_options'); echo do_shortcode(''.$options['pattern-url-2'].''); ?>);" class="main-footer container bgimage">
  <?php dynamic_sidebar('sidebar-footer'); ?>
</div>
  <?php dynamic_sidebar('after-footer'); ?>
</footer>
<div class="copyright">
  <ul>
   <li>&copy; Copyright <?php echo date('Y'); ?> – All Rights Reserved – <?php bloginfo('name'); ?></li>
   <li><a href="/imprint" title="Impressum">Legal Notice</a></li>
   <li><a href="/cancellation-policy" title="Cancellation Policy">Cancellation Policy</a></li>
   <li><a href="/terms-conditions" title="Terms & Conditions">Terms & Conditions</a></li>
   <li><a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
   <li><a href="/cookie-policy" title="Use of cookies">Use of cookies</a></li>
   <li><a href="/my-data" title="My Data">My Data</a></li>
   <!--<li><a id="ct-ultimate-gdpr-cookie-open" title="Cookie settings">Cookie Settings</a></li>-->
  </ul>
</div>

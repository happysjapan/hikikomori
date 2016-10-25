<div class="row align-right">
  <div class="block_phone--holder columns">
    <a href="tel:<?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?>" class="block_phone" title="<?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?>">
      <h4 class="block_phone--title">まずはご相談ください</h4>
      <div class="block_phone--main">
        <i class="block_phone--sprite" aria-hidden="true"><span class="sprite icon_phone"></span></i>
        <strong class="block_phone--number"><?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?></strong>
      </div>
    </a>
  </div>
</div>

<footer id="footer" class="footer">

  <div class="footer--section footer--sitemap">
    <div class="row">
      <div class="small-12 medium-4 columns">
        <div class="row">
          <nav id="sitemap_left" class="sitemap column">
            <?php
            $args = array(
             'theme_location' => 'sitemap-left',
             'container' => false,
             'items_wrap' => '<ul class="sitemap--menu dropdown menu" data-dropdown-menu>%3$s</ul>',
             'walker' => new footer_walker()
            );
            wp_nav_menu( $args ) ;
            ?>
          </nav>
        </div>
      </div>

      <div class="small-12 medium-4 columns">
        <div class="row">
          <nav id="sitemap_middle" class="sitemap column">
            <?php
            $args = array(
             'theme_location' => 'sitemap-middle',
             'container' => false,
             'items_wrap' => '<ul class="sitemap--menu dropdown menu" data-dropdown-menu>%3$s</ul>',
             'walker' => new footer_walker()
            );
            wp_nav_menu( $args ) ;
            ?>
          </nav>
        </div>
      </div>

      <div class="small-12 medium-4 columns">
        <div class="row">
          <nav id="sitemap_right" class="sitemap column">
            <?php
            $args = array(
             'theme_location' => 'sitemap-right',
             'container' => false,
             'items_wrap' => '<ul class="sitemap--menu dropdown menu" data-dropdown-menu>%3$s</ul>',
             'walker' => new footer_walker()
            );
            wp_nav_menu( $args ) ;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>


  <div class="copyright_row row">
      <p class="small-12 large6 columns copyright_row--address">Copyright &copy; 株式会社ハッピーズ All Rights Reserved.</p>
  </div>


</footer>

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation-sites/dist/foundation.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/min/app.js"></script>
<!--
<script src="http://localhost:8888/HAPPYS/hikikomori/src/js/app.js"></script>
-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=240954495949691";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<?php wp_footer(); ?>
</div>
</body>
</html>

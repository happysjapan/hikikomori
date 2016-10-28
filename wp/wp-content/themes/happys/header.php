<!doctype html>
<html class="no-js" lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <link rel="icon"
      type="svg"
      href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo happys_getCssAssets(); ?>">
    <!--
    <link rel="stylesheet" href="http://localhost:8888/HAPPYS/hikikomori-happys/src/css/app.css">
    -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic">

    <?php wp_head(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-45441393-1', 'jiko24.jp');
      ga('send', 'pageview');
    </script>

  </head>
  <body>
    <div id="top" class="header">
      <div class="row">
        <div class="header--introduction columns small-12">
          <p class="header--introduction__text"><?php the_field('front_top_text'); ?></p>
        </div>
        <div class="header--inner columns small-12">
          <div class="header--top_bar row">
            <div class="columns shrink">
              <!-- logo -->
              <div class="header--logo">
                <a class="site-title--link" href="<?php echo home_url(); ?>" title="全国ひきこもり・家庭内暴力相談窓口" rel="home">
                  <h2 class="site-title">
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/site_logo.png" alt="ひきこもり" width="180" height="37" data-template="<?php echo home_url(); ?>">
                  </h2>
                </a>
              </div>
            </div>

            <div class="columns">
              <div class="row align-right">
                <div class="columns shrink">
                  <a class="header_phone" href="tel:<?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?>" title="<?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?>">
                    <i class="header_phone--sprite" aria-hidden="true"><span class="sprite icon_phone"></span></i>
                    <div class="header_phone--main">
                      <strong class="header_phone--number"><?php echo do_shortcode('[text-blocks id="phone" plain="1"]'); ?></strong>
                      <p>平日<time>9:00〜21:00</time> / 土日祝<time>9:00〜21:00</time></p>
                    </div>
                  </a>
                </div>
                <div class="columns shrink">
                    <a class="header_mail" href="<?php echo home_url(); ?>/contact/">
                      <i class="header_mail--sprite" aria-hidden="true"><span class="sprite icon_mail"></span></i>
                      <div class="header_mail--main">
                        メールで<br>
                        ご相談
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="navigation--holder">
        <div class="row">
          <div class="columns">
            <a id="nav_button" class="navigation-button"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
            <nav id="navigation" class="navigation">
              <?php
              $args = array(
               'theme_location' => 'navigation',
               'container' => false,
               'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
               'walker' => new description_walker()
              );
              wp_nav_menu( $args ) ;
              ?>
            </nav>
          </div>
        </div>
      </div>


    </div>

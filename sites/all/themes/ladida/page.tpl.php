<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <link type="text/css" rel="stylesheet" media="all" href="<?php print base_path() . path_to_theme()?>/css/fix-ie.css" />
    <![endif]-->
  </head>

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div id="admin"><?php print $admin; ?></div>

    <div id="wrapper">

      <div id="header">
        <?php if ($logo || $site_title) { ?>
          <h1>
            <a href="<?php print check_url($front_page) ?>" title="<?php print $site_title ?>">
            <?php if ($logo) { ?>
              <img src="<?php print check_url($logo) ?>" alt="<?php $site_title ?>" id="logo" />
            <?php } ?>
            </a>
          </h1>
        <?php } ?>

        <?php print theme('links', $primary_links, array('class' => 'main_nav')); ?>
      </div>

      <div id="content">
        <div class="social">
          <div class="fb-like-box" data-href="http://www.facebook.com/pages/LaDiDa/131956486829974" data-width="190" data-show-faces="true" data-stream="false" data-border-color="#fff" data-header="false"></div>
          <ul>
            <li class="facebook"><a href="https://www.facebook.com/pages/LaDiDa/131956486829974"><img alt="Friend us on Facebook" src="/<?php print path_to_theme() . '/images/icon-facebook.png' ?>" /></a></li>
            <li class="twitter"><a href="http://twitter.com"><img alt="Follow us on Twitter" src="/<?php print path_to_theme() . '/images/icon-twitter.png' ?>" /></a></li>
            <li class="pinterest"><a href="http://pinterest.com/ladida8186/"><img alt="Follow us on Pinterest" src="/<?php print path_to_theme() . '/images/icon-pinterest.png' ?>" /></a></li>
          </ul>
        </div>
        <?php if ($tabs): print $tabs; endif; ?>
        <?php if ($tabs2): print $tabs2; endif; ?>
        <?php if ($show_messages && $messages){ print $messages; } ?>
        <?php print $content ?>
        <img src="/<?php print path_to_theme() . '/images/bags.png' ?>" alt="" width="192" height="81" class="bags">
      </div>

      <div id="left">
        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','400','height','575','title','logo','wmode','transparent','src','/<?php print drupal_get_path('theme','ladida') .'/images/logo-clock' ?>','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','/<?php print drupal_get_path('theme','ladida') .'/images/logo-clock' ?>' ); //end AC code
        </script>
        <?php print $left; ?>
      </div>

      <div id="right"><?php print $right; ?></div>

    </div>
    <div id="footer">
      <div class="stripe"></div>
      <?php print $footer_message . $footer ?>
    </div>

  </body>

</html>

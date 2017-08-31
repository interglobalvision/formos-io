<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    get_template_part('partials/globie');
    get_template_part('partials/seo');
  ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">

  <?php if (is_singular() && pings_open(get_queried_object())) { ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php } ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<section id="main-container">

  <header id="header" class="header padding-top-tiny padding-bottom-tiny">
    <div class="grid-row align-items-center">
      <div class="grid-item item-m-1">
        <h1 class="u-hidden"><?php bloginfo('name'); ?></h1>
        <div id="header-logo-holder">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>
        </div>
      </div>
      <div class="grid-item item-m-11 padding-bottom-micro no-gutter">
        <ul class="grid-row justify-around font-uppercase">
          <li class="grid-item u-pointer js-scrollto" data-scroll="what-is">What is formOS?</li>
          <li class="grid-item u-pointer js-scrollto" data-scroll="how">How does it work?</li>
          <li class="grid-item u-pointer js-scrollto" data-scroll="modules">The ignite kit</li>
          <li class="grid-item u-pointer js-scrollto" data-scroll="demos">Our demos</li>
          <li class="grid-item u-pointer js-scrollto" data-scroll="footer-signup">Sign up</li>
        </ul>
      </div>
    </div>
  </header>

  <header id="mobile-header" class="header padding-top-small padding-bottom-small">
    <div class="container">
      <div class="grid-row align-items-center">
        <div class="grid-item item-s-4">
          <span href="#" id="menu-toggle">
            <span class="open-menu">
              <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/menu.svg'); ?>
            </span>
            <span class="close-menu">
              <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/cancel.svg'); ?>
            </span>
          </span>
        </div>
        <div class="grid-item item-s-4">
          <h1 class="u-hidden"><?php bloginfo('name'); ?></h1>
          <div id="mobile-header-logo-holder" class="text-align-center">
            <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>
          </div>
        </div>
      </div>
    </div>

    <section id="mobile-menu" class="padding-top-small">
      <ul class="container grid-column justify-around font-uppercase">
        <li class="grid-item margin-top-small margin-bottom-small u-pointer js-scrollto" data-scroll="what-is">What is formOS?</li>
        <li class="grid-item margin-top-small margin-bottom-small u-pointer js-scrollto" data-scroll="how">How does it work?</li>
        <li class="grid-item margin-top-small margin-bottom-small u-pointer js-scrollto" data-scroll="modules">The ignite kit</li>
        <li class="grid-item margin-top-small margin-bottom-small u-pointer js-scrollto" data-scroll="demos">Our demos</li>
        <li class="grid-item margin-top-small margin-bottom-small u-pointer js-scrollto" data-scroll="footer-signup">Sign up</li>
      </ul>
    </section>

  </header>

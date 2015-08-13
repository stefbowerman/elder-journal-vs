<?php
/**
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'left' ); ?></title>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <div class="page">

      <header id="header" class="page-header">
          <div class="page-header-container">
              <div class="top-links">
                <div class="links">
                  <ul>
                    <li>&nbsp;</li>
                  </ul>
                </div>
              </div>
              <a href="#" class="header-nav-mobile-toggle header-burger" title="See Menu"></a>
              <a href="#" class="hnm-close" title="Close Menu"></a>

              <div class="header-nav-mobile">
                <div class="hnm-list-wrapper">
                  <ul class="hnm-list">
                      <li class="level0 nav-1 first parent">
                        <a href="http://elder-statesman.com/shop.html" class="level0">Shop</a>
                      </li>
                      <li class="level0 nav-2">
                        <a href="http://elder-statesman.com/custom.html" class="level0 ">Custom</a>
                      </li>
                      <li class="level0 nav-3">
                        <a href="http://elder-statesman.com/gallery.html" class="level0 ">Gallery</a>
                      </li>
                      <li class="level0 nav-4">
                        <a href="http://elder-statesman.com/journal" class="level0 ">Journal</a>
                      </li>
                      <li class="level0 nav-5 last">
                        <a href="http://elder-statesman.com/retail-store.html" class="level0 ">Retail Store</a>
                      </li>
                      <li><a href="http://elder-statesman.com/customer/account/login/">Login</a></li>
                      <li><a href="http://elder-statesman.com/customer/account/create/">Register</a></li>
                  </ul>
                </div>
              </div>

              <a class="logo" href="http://elder-statesman.com/" title="The Elder Statesman"></a>

              <div class="top-links-mobile">
                  <a href="#" class="top-link-mobile search"></a>
                  <a href="http://elder-statesman.com/checkout/cart/" class="top-link-mobile bag">
                    <span id="top-link-mobile-bag-count" class="top-link-mobile-bag-count hideme">0</span>
                  </a>
              </div>
              
          <div class="header-nav">
            <ul>
              <li class="category-shop"><a href="http://elder-statesman.com/shop.html">Shop</a></li>
              <li class="category-custom"><a href="http://elder-statesman.com/custom.html">Custom</a></li>
              <li class="category-gallery"><a href="http://elder-statesman.com/gallery.html">Gallery</a></li>
              <li class="category-journal current"><a href="<?php site_url(); ?>">Journal</a></li>
              <li class="category-retail-store"><a href="http://elder-statesman.com/retail-store.html">Retail Store</a></li>
            </ul>  
          </div>
        </div>
      </header>
      <div id="header-spacer"></div>

      <div class="main-container col1-layout">
        <div class="main">

          <div class="col-main">
            <div class="std">
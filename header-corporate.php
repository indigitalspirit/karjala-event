<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karjala-event
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('template-parts/loader'); ?>

  <div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">

      <aside class="mkdf-vertical-menu-area mkdf-vertical-alignment-center">
        <div class="mkdf-vertical-menu-area-inner">
          <div class="mkdf-vertical-area-background"></div>
          <div class="mkdf-logo-wrapper">


            <?php the_custom_logo(); ?>
          </div>
          <div class="mkdf-vertical-menu-outer">

            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-aside',
                'menu' => '',
                'container'       => 'nav', 
                'container_class' => 'mkdf-vertical-menu mkdf-vertical-dropdown-below', 
                'link_before' => '<div class="menu-svg__left"></div>',
                'link_after' => '<div class="menu-svg__right"></div>',
                //'container_id'    => 'container-id',
                'menu_class'      => '', 
                //'menu_class'      => 'menu', 
                'menu_id'        => 'menu-vertical',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                'echo'            => true,
                'depth'           => 0,
                //'walker'          => '',
              )
            );
          ?>
          </div>
          <div class="mkdf-vertical-area-widget-holder">
            <div class="widget mkdf-social-icons-group-widget text-align-center aside-contacts">

              <?php 
              $vk = get_option('karjala_event_vk_field');

              $instagram = get_option('karjala_event_instagram_field');
            ?>
              <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
                <?php 
                if( $vk ):
              ?>

                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $vk;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram"></span>
                </a>
                <?php 
                endif;
                if( $instagram ):
              ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $instagram;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-twitter"></span>
                </a>

                <?php 
                  endif;
                  
                ?>




              </div>
            </div>
          </div>
      </aside>

      <header class="mkdf-mobile-header">
        <div class="mkdf-mobile-header-inner">
          <div class="mkdf-mobile-header-holder">
            <div class="mkdf-grid">
              <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                  <div class="mkdf-position-left-inner">
                    <div class="mkdf-mobile-logo-wrapper">

                      <?php the_custom_logo(); ?>
                    </div>
                  </div>
                </div>
                <div class="mkdf-position-right">
                  <div class="mkdf-position-right-inner">
                    <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
                      <a href="#">
                        <h5 class="mkdf-mobile-menu-text">Menu</h5>
                        <span class="mkdf-mobile-menu-icon">
                          <span class="mkdf-hm-lines"><span class="mkdf-hm-line mkdf-line-1"></span><span
                              class="mkdf-hm-line mkdf-line-2"></span><span
                              class="mkdf-hm-line mkdf-line-3"></span></span> </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="mkdf-mobile-nav" role="navigation" aria-label="Mobile Menu">
            <div class="mkdf-grid">
              <ul id="menu-standard" class="">
                <li id="mobile-menu-item-626"
                  class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub">
                  <a href="#" class=" current  mkdf-mobile-no-link"><span>Home</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-636"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a
                        href="index.html" class=""><span>Main Home</span></a></li>
                    <li id="mobile-menu-item-633"
                      class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-401 current_page_item ">
                      <a href="https://wanderland.qodeinteractive.com/alternating-posts/" class=""><span>Alternating
                          Posts</span></a></li>
                    <li id="mobile-menu-item-632" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/travelogue-home/" class=""><span>Travelogue
                          Home</span></a></li>
                    <li id="mobile-menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/travel-blog-metro/" class=""><span>Travel Blog
                          Metro</span></a></li>
                    <li id="mobile-menu-item-787" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/floating-posts/" class=""><span>Floating
                          Posts</span></a></li>
                    <li id="mobile-menu-item-634" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/blog-divided/" class=""><span>Blog
                          Divided</span></a></li>
                    <li id="mobile-menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/travel-blog/" class=""><span>Travel Blog</span></a>
                    </li>
                  </ul>
                </li>
                <li id="mobile-menu-item-627"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=" mkdf-mobile-no-link"><span>Pages</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-1085" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/about-me/" class=""><span>About me</span></a></li>
                    <li id="mobile-menu-item-1225" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/about-us/" class=""><span>About us</span></a></li>
                    <li id="mobile-menu-item-1226" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/get-in-touch/" class=""><span>Get in
                          touch</span></a></li>
                    <li id="mobile-menu-item-1179" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/faqs/" class=""><span>FAQ</span></a></li>
                    <li id="mobile-menu-item-1181" class="menu-item menu-item-type-custom menu-item-object-custom "><a
                        href="https://wanderland.qodeinteractive.com/error-page-404" class=""><span>404 error
                          page</span></a></li>
                  </ul>
                </li>
                <li id="mobile-menu-item-628"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=" mkdf-mobile-no-link"><span>Destinations</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-2087" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/destination-list/" class=""><span>Destination
                          list</span></a></li>
                    <li id="mobile-menu-item-2564" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/destination-slider/" class=""><span>Destination
                          slider</span></a></li>
                    <li id="mobile-menu-item-2563" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/destination-category-list/"
                        class=""><span>Destination category list</span></a></li>
                    <li id="mobile-menu-item-2088" class="menu-item menu-item-type-custom menu-item-object-custom "><a
                        href="https://wanderland.qodeinteractive.com/destination-item/colorado-2/"
                        class=""><span>Destination single</span></a></li>
                  </ul>
                </li>
                <li id="mobile-menu-item-629"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=" mkdf-mobile-no-link"><span>Blog</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-2043" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/masonry/" class=""><span>Masonry</span></a></li>
                    <li id="mobile-menu-item-2577" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/info-right/" class=""><span>Info right</span></a>
                    </li>
                    <li id="mobile-menu-item-2586" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/blog-carousel/" class=""><span>Carousel</span></a>
                    </li>
                    <li id="mobile-menu-item-2582" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/blog-slider/" class=""><span>Slider</span></a></li>
                    <li id="mobile-menu-item-2044"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                        href="#" class=" mkdf-mobile-no-link"><span>Standard</span></a><span class="mobile_arrow"><i
                          class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                      <ul class="sub_menu">
                        <li id="mobile-menu-item-637" class="menu-item menu-item-type-post_type menu-item-object-page ">
                          <a href="https://wanderland.qodeinteractive.com/right-sidebar/" class=""><span>Right
                              sidebar</span></a></li>
                        <li id="mobile-menu-item-2031"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/left-sidebar/" class=""><span>Left
                              sidebar</span></a></li>
                        <li id="mobile-menu-item-2034"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/no-sidebar/" class=""><span>No
                              sidebar</span></a></li>
                      </ul>
                    </li>
                    <li id="mobile-menu-item-639"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                        href="#" class=" mkdf-mobile-no-link"><span>Post types</span></a><span class="mobile_arrow"><i
                          class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                      <ul class="sub_menu">
                        <li id="mobile-menu-item-638" class="menu-item menu-item-type-post_type menu-item-object-post ">
                          <a href="https://wanderland.qodeinteractive.com/the-laugavegur-trail/"
                            class=""><span>Standard</span></a></li>
                        <li id="mobile-menu-item-2069"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/a-nomads-guide-to-exploring-java/"
                            class=""><span>Gallery</span></a></li>
                        <li id="mobile-menu-item-2027"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/sometimes-the-hike-is-better-than-the-top-02/"
                            class=""><span>Link</span></a></li>
                        <li id="mobile-menu-item-2026"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/sometimes-the-hike-is-better-than-the-top/"
                            class=""><span>Quote</span></a></li>
                        <li id="mobile-menu-item-2059"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/amazon-rainforest-experience/"
                            class=""><span>Video</span></a></li>
                        <li id="mobile-menu-item-2058"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/city-that-deserve-more-than-a-stopover/"
                            class=""><span>Audio</span></a></li>
                        <li id="mobile-menu-item-2075"
                          class="menu-item menu-item-type-post_type menu-item-object-post "><a
                            href="https://wanderland.qodeinteractive.com/climbing-in-the-swiss-alps/" class=""><span>No
                              sidebar</span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="mobile-menu-item-630"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=" mkdf-mobile-no-link"><span>Shop</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-2592" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/product-list/" class=""><span>Product
                          list</span></a></li>
                    <li id="mobile-menu-item-963" class="menu-item menu-item-type-post_type menu-item-object-product ">
                      <a href="https://wanderland.qodeinteractive.com/product/backpack/" class=""><span>Product
                          single</span></a></li>
                    <li id="mobile-menu-item-974"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                        href="#" class=" mkdf-mobile-no-link"><span>Shop layouts</span></a><span class="mobile_arrow"><i
                          class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                      <ul class="sub_menu">
                        <li id="mobile-menu-item-1812"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/product-list/2-columns/" class=""><span>2
                              columns</span></a></li>
                        <li id="mobile-menu-item-1813"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/product-list/3-columns/" class=""><span>3
                              columns</span></a></li>
                        <li id="mobile-menu-item-1814"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/product-list/4-columns/" class=""><span>4
                              columns</span></a></li>
                        <li id="mobile-menu-item-1815"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/product-list/4-columns-wide/" class=""><span>4
                              columns wide</span></a></li>
                        <li id="mobile-menu-item-1816"
                          class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="https://wanderland.qodeinteractive.com/product-list/5-columns-wide/" class=""><span>5
                              columns wide</span></a></li>
                      </ul>
                    </li>
                    <li id="mobile-menu-item-962"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                        href="#" class=" mkdf-mobile-no-link"><span>Shop pages</span></a><span class="mobile_arrow"><i
                          class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                      <ul class="sub_menu">
                        <li id="mobile-menu-item-956" class="menu-item menu-item-type-post_type menu-item-object-page ">
                          <a href="https://wanderland.qodeinteractive.com/product-list/my-account/" class=""><span>My
                              account</span></a></li>
                        <li id="mobile-menu-item-958" class="menu-item menu-item-type-post_type menu-item-object-page ">
                          <a href="https://wanderland.qodeinteractive.com/product-list/cart/"
                            class=""><span>Cart</span></a></li>
                        <li id="mobile-menu-item-957" class="menu-item menu-item-type-post_type menu-item-object-page ">
                          <a href="https://wanderland.qodeinteractive.com/product-list/checkout-page/"
                            class=""><span>Checkout page</span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="mobile-menu-item-1817" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                    href="https://wanderland.qodeinteractive.com/landing/" class=""><span>Landing</span></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <?php wp_body_open(); ?>
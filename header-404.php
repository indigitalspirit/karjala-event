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

      <!-- top-bar -->
      <div class="mkdf-top-bar top-bar">
        <div class="mkdf-vertical-align-containers">
          <div class="mkdf-position-left">
            <div class="mkdf-position-left-inner">
              <?php 
              $phone = get_option('karjala_event_phone_field');
              if( $phone ):
            ?>

              <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo str_replace(" ", "", $phone); ?>" target="_blank">
                <span class="mkdf-icon-element ion-android-call top-bar__phone-icon"></span>
                <span class="mkdf-icon-text top-bar__phone-text">
                  <?php echo $phone; ?>
                </span>
              </a>

              <?php 
              endif;

              $email = get_option('karjala_event_mail_field');

              if( $email ):
            
            ?>

              <a class="mkdf-icon-widget-holder top-bar__email" href="mailto:<?php echo trim($email); ?>"
                target="_blank">
                <span class="mkdf-icon-element ion-ios-email-outline top-bar__email-icon"></span>
                <span class="mkdf-icon-text top-bar__email-text">
                  <?php echo $email; ?>
                </span>
              </a>

              <?php endif; ?>

            </div>
          </div>
          <div class="mkdf-position-right">
            <div class="mkdf-position-right-inner">
              <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">

                <?php 
                  $vk = get_option('karjala_event_vk_field');

                  $instagram = get_option('karjala_event_instagram_field');

                ?>
                <?php 
                  if( $vk ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" href="<?php echo $vk;?>"
                  target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span>
                </a>
                <?php 
                  endif;
                  if( $instagram ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                  href="<?php echo $instagram;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-twitter top-bar__social-icon"></span>
                </a>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./top-bar -->


      <!-- headers -->
      <header class="mkdf-page-header">

        <div class="mkdf-menu-area">


          <div class="mkdf-vertical-align-containers">
            <div class="mkdf-position-left">

              


              <div class="mkdf-position-left-inner">
                <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'menu-common-top-left',
                        'menu' => '',
                        'container'       => 'nav', 
                        'container_class' => 'mkdf-main-menu mkdf-drop-down mkdf-divided-left-part mkdf-default-nav centered-nav', 
                        'menu_class'      => 'clearfix',  
                        'menu_id'        => 'menu-divided-left',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'link_before' => '<div class="menu-svg__left"></div>',
                        'link_after' => '<div class="menu-svg__right"></div>',
                        'echo'            => true,
                        'depth'           => 0,
                        //'walker'          => '',
                      )
                    );
                  ?>

              </div>

              <div class="mkdf-divided-left-widget-area">
                <div class="mkdf-divided-left-widget-area-inner">
                  <div class="mkdf-position-left-inner-wrap">
                  </div>
                </div>
              </div>
            </div>
            <div class="mkdf-position-center">
              <!--
                       -->
              <div class="mkdf-position-center-inner">


                <div class="mkdf-logo-wrapper">

                  <?php the_custom_logo(); ?>

                </div>

              </div>
            </div>

            <div class="mkdf-position-right">

              <div class="mkdf-position-right-inner">

                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu-common-top-right',
                      'menu' => '',
                      'container'       => 'nav', 
                      'container_class' => 'mkdf-main-menu mkdf-drop-down mkdf-divided-left-part mkdf-default-nav', 
                      'menu_class'      => 'clearfix',  
                      'menu_id'        => 'menu-divided-right',
                      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'link_before' => '<div class="menu-svg__left"></div>',
                      'link_after' => '<div class="menu-svg__right"></div>',
                      'echo'            => true,
                      'depth'           => 0,
                      //'walker'          => '',
                    )
                  );
                ?>
              </div>

              <div class="mkdf-divided-right-widget-area">
                <div class="mkdf-divided-right-widget-area-inner">
                  <div class="mkdf-position-right-inner-wrap">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="mkdf-sticky-header">

          <div class="mkdf-sticky-holder">
            <div class="mkdf-vertical-align-containers">
              <div class="mkdf-position-left">

                <div class="mkdf-position-left-inner">

                  <nav class="mkdf-main-menu mkdf-drop-down mkdf-divided-left-part mkdf-sticky-nav">
                    <ul id="menu-divided-left-1" class="clearfix">
                      <li id="sticky-nav-menu-item-604"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                        <a href="#" class="">
                          <span class="mkdf-menu-item-holder">
                            <span class="mkdf-active-hover">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                class="mkdf-active-hover-left">
                                <polygon class="st0"
                                  points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                </polygon>
                              </svg>
                              <span class="mkdf-active-hover-middle"></span>
                              <svg version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;"
                                xml:space="preserve" class="mkdf-active-hover-right">
                                <polygon class="st0"
                                  points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                </polygon>
                              </svg>
                            </span>
                            <span class="item_outer">
                              <span class="item_text">Home</span>
                              <span class="plus"></span>
                              <i class="mkdf-menu-arrow fa fa-angle-down"></i>
                            </span>
                          </span>
                        </a>
                        <div class="second">
                          <div class="inner">
                            <ul>
                              <li id="sticky-nav-menu-item-620"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home ">
                                <a href="#" class="">
                                  <span class="item_outer">
                                    <span class="item_text">Main Home</span>
                                    <span class="plus"></span>
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </nav>

                </div>
              </div>
              <div class="mkdf-position-center">  
                <div class="mkdf-position-center-inner">


                  <div class="mkdf-logo-wrapper">
                    <a href="https://wanderland.qodeinteractive.com/">
                      <img class="mkdf-normal-logo logo-custom" src="img/logo/logo-svg.svg" alt="logo">
                      <img class="mkdf-dark-logo" src="img/logo/logo-svg.svg" alt="dark logo"> 
                      <img class="mkdf-light-logo" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/logo-img-03.png" alt="light logo"> </a>
                  </div>

                </div>
              </div>
              <div class="mkdf-position-right">
                
                <div class="mkdf-position-right-inner">
                  <nav class="mkdf-main-menu mkdf-drop-down mkdf-divided-right-part mkdf-sticky-nav">
                    <ul id="menu-divided-right-1" class="clearfix">
                      <li id="sticky-nav-menu-item-607"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                        <a href="#" class="">
                          <span class="mkdf-menu-item-holder">
                            <span class="mkdf-active-hover">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                class="mkdf-active-hover-left">
                                <polygon class="st0"
                                  points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                </polygon>
                              </svg>
                            <span class="mkdf-active-hover-middle"></span>
                            <svg version="1.1"
                              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                              y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;"
                              xml:space="preserve" class="mkdf-active-hover-right">
                              <polygon class="st0"
                                points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                              </polygon>
                            </svg>
                            </span>
                            <span class="item_outer">
                              <span class="item_text">Blog</span>
                              <span class="plus"></span>
                              <i class="mkdf-menu-arrow fa fa-angle-down"></i>
                            </span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>

      </header>


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
                        <h5 class="mkdf-mobile-menu-text">Меню</h5>
                        <span class="mkdf-mobile-menu-icon">
                          <span class="mkdf-hm-lines">
                            <span class="mkdf-hm-line mkdf-line-1"></span>
                            <span class="mkdf-hm-line mkdf-line-2"></span>
                            <span class="mkdf-hm-line mkdf-line-3"></span>
                          </span> 
                        </span>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <nav class="mkdf-mobile-nav">
            <!-- <div class="mkdf-grid"> -->
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-mobile',
                  'menu' => '',
                  'container'       => 'div', 
                  'container_class' => 'mkdf-grid', 
                  //'menu_class'      => 'clearfix',  
                  //'menu_id'        => 'menu-standard-1',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                  //'link_before' => '<div class="menu-svg__left"></div>',
                  //'link_after' => '<div class="menu-svg__right"></div>',
                  'echo'            => true,
                  'depth'           => 0,
                  //'walker'          => '',
                )
              );
            ?>
              
            <!-- </div> -->
          </nav>
        

          <!-- <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
              aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'karjala_event' ); ?></button>
           
          </nav> -->
          <!-- #site-navigation -->

        </div>

      </header>
      <!-- ./headers -->


      <?php wp_body_open(); ?>
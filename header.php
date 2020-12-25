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
              <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo str_replace(" ", "", $phone); ?>">
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
              <a class="mkdf-icon-widget-holder top-bar__email" href="mailto:<?php echo trim($email); ?>">
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
              <?php 
              $vk = get_option('karjala_event_vk_field');

              $instagram = get_option('karjala_event_instagram_field');

              $karjala_event_social_3_field = get_option('karjala_event_social_3_field');
              $karjala_event_social_3_icon = get_option('karjala_event_social_3_icon');

              $karjala_event_social_4_field = get_option('karjala_event_social_4_field');
              $karjala_event_social_4_icon = get_option('karjala_event_social_4_icon');

              $karjala_event_social_5_field = get_option('karjala_event_social_5_field');
              $karjala_event_social_5_icon = get_option('karjala_event_social_5_icon');

              $karjala_event_social_6_field = get_option('karjala_event_social_6_field');
              $karjala_event_social_6_icon = get_option('karjala_event_social_6_icon');

            ?>
              <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
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
                  <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span>
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_3_field && $karjala_event_social_3_icon ):
                ?>

                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                  href="<?php echo $karjala_event_social_3_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_3_icon;?>" alt="<?php echo $karjala_event_social_3_field;?>">
                </a>

                <?php 
                  endif;
                  if( $karjala_event_social_4_field && $karjala_event_social_4_icon ):
                ?>

                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                  href="<?php echo $karjala_event_social_4_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_4_icon;?>" alt="<?php echo $karjala_event_social_4_field;?>">
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_5_field && $karjala_event_social_5_icon ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                  href="<?php echo $karjala_event_social_5_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_5_icon;?>" alt="<?php echo $karjala_event_social_5_field;?>">
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_6_field && $karjala_event_social_6_icon ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                  href="<?php echo $karjala_event_social_6_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_6_icon;?>" alt="<?php echo $karjala_event_social_6_field;?>">
                </a>
                <?php 
                  endif;
                  
                ?>

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
            </div>
            <div class="mkdf-position-center">

              <div class="mkdf-position-center-inner">

                <div class="mkdf-logo-wrapper">

                <?php 

                $svg_logo = get_option('karjala_event_svg_logo_field');

                if( $svg_logo ): 

                ?>

                <a href="https://karjalaevent.anastasia-pavlova.com/wp/" class="custom-logo-link" rel="home">
                  <img src="<?php echo $svg_logo; ?> " class="custom-logo" alt="Karjala Event">
                </a>


                <?php

                else:

                  the_custom_logo(); 

                endif;

                ?>

                </div>

              </div>
            </div>

            <div class="mkdf-position-right">
              <!--
                       -->
              <div class="mkdf-position-right-inner">

                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu-common-top-right',
                      'menu' => '',
                      'container'       => 'nav', 
                      'container_class' => 'mkdf-main-menu mkdf-drop-down mkdf-divided-right-part mkdf-default-nav', 
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

      </header>
      <header class="mkdf-mobile-header">
        <div class="mkdf-mobile-header-inner">
          <div class="mkdf-mobile-header-holder">
            <div class="mkdf-grid">
              <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                  <div class="mkdf-position-left-inner">
                    <div class="mkdf-mobile-logo-wrapper">
                    <?php 

                    $svg_logo = get_option('karjala_event_svg_logo_field');

                    if( $svg_logo ): 

                    ?>

                    <a href="https://karjalaevent.anastasia-pavlova.com/wp/" class="custom-logo-link" rel="home">
                      <img src="<?php echo $svg_logo; ?> " class="custom-logo" alt="Karjala Event">
                    </a>


                    <?php

                    else:

                      the_custom_logo(); 

                    endif;

                    ?>

                    </div>
                  </div>
                </div>
                <div class="mkdf-position-right">
                  <div class="mkdf-position-right-inner">
                    <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
                      <a href="#">
                        <h5 class="mkdf-mobile-menu-text">Меню</h5>
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
              aria-expanded="false"><?php esc_html_e( 'Меню', 'karjala_event_mobile' ); ?></button>
            
          </nav> -->
          <!-- #site-navigation -->
        </div>
      </header>
      <!-- ./headers -->



      <!-- </div>
	</div> -->

      <?php wp_body_open(); ?>
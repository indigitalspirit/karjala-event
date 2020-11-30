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
  
  <div class="loading loading-end">
      <!-- <div class="load-circle">

		</div> -->
		<div class="mkdf-st-loader">
			<div class="mkdf-st-loader1">
				<div class="mkdf-wanderland-spinner">
					<svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" xml:space="preserve">
						<g class="mkdf-preloader-svg-circle">
							<path class="st0" d="M63 80c0 .4 0 .9.1 1.3 0-.4-.1-.8-.1-1.3zM78.2 63.1c-.4 0-.7.1-1.1.1.4 0 .8 0 1.1-.1zM63.1 81.8c0 .3.1.7.1 1 0-.4 0-.7-.1-1zM79.9 63c-.4 0-.9 0-1.3.1.4 0 .9-.1 1.3-.1zM96.9 78.2c0-.3-.1-.7-.1-1 0 .4 0 .7.1 1zM80 97c.5 0 .9 0 1.3-.1-.4 0-.8.1-1.3.1zM97 80c0-.5 0-.9-.1-1.3 0 .4.1.8.1 1.3zM80 65.3c-8.1 0-14.7 6.6-14.7 14.7S71.9 94.7 80 94.7 94.7 88.1 94.7 80 88.1 65.3 80 65.3zm0 27.6c-7.1 0-13-5.8-13-13 0-7.1 5.8-13 13-13 7.1 0 13 5.8 13 13s-5.9 13-13 13z"></path>
							<path class="st0" d="M80.6 73.3c-4.2-.4-7.7 3.1-7.3 7.3.3 3.2 2.9 5.8 6.1 6.1 4.2.4 7.7-3.1 7.3-7.3-.3-3.2-2.9-5.8-6.1-6.1zM81.8 96.9c.3 0 .7-.1 1-.1-.4 0-.7 0-1 .1z"></path>
							<path class="st1" d="M96.9 78.2v.4c0 .4.1.9.1 1.3h24.1l-24.6 3.7c0 .1-.1.2-.1.3v.1l26.8-4.2-26.8-4.2c.1.3.2.7.2 1 0 .1 0 .3.1.4.1.6.1.9.2 1.2zM78.2 63.1h.4c.4 0 .9-.1 1.3-.1V38.9l3.7 24.5c.1 0 .2.1.3.1h.2L80 36.7l-4.2 26.8c.3-.1.7-.2 1-.2h.3c.4-.1.8-.1 1.1-.2zM63.1 81.8v-.4c0-.4-.1-.9-.1-1.3H38.9l24.5-3.7c0-.1.1-.2.1-.3v-.2L36.7 80l26.8 4.1c-.1-.3-.2-.7-.2-1 0-.1 0-.2-.1-.3 0-.4 0-.7-.1-1zM81.8 96.9h-.4c-.4 0-.9.1-1.3.1H80v24.1l-3.7-24.6c-.1 0-.2-.1-.3-.1h-.1l4.1 26.8 4.1-26.8c-.3.1-.7.2-1 .2-.1 0-.3 0-.4.1-.3.1-.6.1-.9.2zM80 67c-7.1 0-13 5.8-13 13 0 7.1 5.8 13 13 13 7.1 0 13-5.8 13-13 0-7.1-5.9-13-13-13zm-.6 19.7c-3.2-.3-5.8-2.9-6.1-6.1-.4-4.2 3.1-7.7 7.3-7.3 3.2.3 5.8 2.9 6.1 6.1.4 4.2-3.1 7.7-7.3 7.3z"></path>
							<path d="M96.5 84.1c0-.1.1-.2.1-.3l24.6-3.7H97c0-.5 0-.9-.1-1.3v-.4c0-.3-.1-.7-.1-1 0-.1 0-.3-.1-.4-.5-2.9-1.8-5.6-3.7-7.7l5.8-8-8 5.8c-2-1.6-4.3-2.8-6.9-3.5-.1 0-.2-.1-.3-.1L79.9 39v24c-.4 0-.9 0-1.3.1h-.4c-.4 0-.7.1-1.1.1h-.3c-2.9.5-5.6 1.8-7.7 3.7l-8-5.8 5.8 8c-1.6 2-2.8 4.3-3.5 6.9 0 .1-.1.2-.1.3L38.9 80H63c0 .4 0 .9.1 1.3v.4c0 .3.1.7.1 1 0 .1 0 .2.1.3.5 2.9 1.8 5.6 3.7 7.8l-5.8 8 8-5.8c1.9 1.6 4.3 2.8 6.8 3.5.1 0 .2.1.3.1l3.7 24.6V97h.1c.5 0 .9 0 1.3-.1h.4c.3 0 .7-.1 1-.1.1 0 .3 0 .4-.1 2.9-.5 5.6-1.8 7.8-3.7l8 5.8-5.8-8c1.4-1.9 2.6-4.2 3.3-6.7zM80 94.7c-8.1 0-14.7-6.6-14.7-14.7S71.9 65.3 80 65.3 94.7 71.9 94.7 80 88.1 94.7 80 94.7z"></path>
						</g>

						<circle class="st3" cx="36.5" cy="36.5" r="2.5"></circle>
						<circle class="st3" cx="123.7" cy="36.5" r="2.5"></circle>
						<circle class="st3" cx="36.5" cy="123.5" r="2.5"></circle>
						<circle class="st3" cx="123.7" cy="123.5" r="2.5"></circle>
						
						<path d="M92.4 1.8c.3.3.4.6.4 1 0 .5-.1.9-.4 1.3-.3.4-.7.6-1.2.6-.4 0-.6-.1-.8-.3-.2-.2-.2-.5-.2-.7s.1-.6.2-.9c.1-.3.3-.6.6-.8h-.1c-.9 0-1.6.5-2.2 1.4-.8 1.2-1.6 3.3-2.5 6.3-.9 3-1.8 7.1-2.9 12.3h-.6L76.5 4.5C75.6 9 74.8 12.8 74 16c-.8 3.1-1.5 5.1-2.3 6.1-.4.5-.8.9-1.3 1.2-.4.3-1 .5-1.6.5-1.1 0-1.6-.5-1.6-1.4 0-.5.1-.9.4-1.3.3-.4.7-.6 1.2-.6.4 0 .6.1.8.3.2.2.2.5.2.7s-.1.6-.2.9c-.2.3-.4.6-.6.8h.1c.9 0 1.7-.5 2.2-1.4.7-1.1 1.4-3 2.1-5.7.7-2.7 1.5-6.3 2.3-10.6.1-.5.2-.9.2-1.2 0-.4-.1-.7-.4-.9-.3-.1-.8-.2-1.6-.3l.1-.5c.6.1 1.4.1 2.4.1.8 0 1.6 0 2.2-.1l5.1 14.9c.8-3.5 1.5-6.4 2.3-9 .7-2.5 1.5-4.4 2.3-5.5.7-1 1.7-1.6 2.8-1.6.6 0 1 .1 1.3.4zM86.4 143.6h-.5c.1-.5.2-1 .2-1.5 0-1.1-.3-1.9-.9-2.6-.6-.7-1.6-1-2.9-1-1.1 0-2 .3-2.7.9s-1 1.4-1 2.6c0 .9.3 1.7.8 2.4s1.4 1.6 2.5 2.6c.8.7 1.4 1.3 1.9 1.8s.9 1.1 1.2 1.7c.3.6.5 1.3.5 2 0 1.2-.3 2.2-1 3-.7.8-1.5 1.4-2.6 1.8s-2.1.6-3.2.6c-1 0-1.7-.1-2.3-.4-.6-.2-1.1-.5-1.6-.9-.3-.3-.7-.4-1-.4-.2 0-.4.1-.5.3-.1.2-.3.6-.6 1.1H72c.3-.7.6-1.5.9-2.5.3-1 .6-2.3 1-4h.5c-.2.8-.2 1.5-.2 2 0 1.3.4 2.3 1.1 3.1.7.7 1.8 1.1 3.3 1.1 1.2 0 2.2-.3 2.9-.8s1.1-1.4 1.1-2.5c0-.7-.1-1.3-.4-1.9-.3-.6-.6-1.1-1-1.5-.4-.4-.9-1-1.6-1.7-.7-.7-1.3-1.3-1.7-1.8-.4-.5-.8-1.1-1.1-1.7-.3-.6-.4-1.4-.4-2.2 0-1.1.3-2.1.9-2.9s1.3-1.4 2.2-1.8c.9-.4 1.9-.6 2.9-.6.7 0 1.4.1 1.9.3.5.2 1.1.5 1.6.9.4.3.7.5.9.5.1 0 .3-.1.4-.3.1-.2.3-.6.5-1.1h.3c-.6 1.6-1.2 3.4-1.6 5.4zM155.6 70.4c-.5 1.3-.8 2.4-1 3.2-.2.6-.3 1.2-.4 1.7h-.6c.2-1 .2-1.8.2-2.2 0-.8-.2-1.3-.6-1.6-.4-.3-1.1-.5-2.1-.5h-2c-.6 0-1.1 0-1.4.1-.3.1-.6.3-.8.6-.2.3-.4.8-.6 1.5l-1.7 6.4h1.8c.6 0 1.2-.1 1.6-.4.4-.3.7-.6 1-1 .2-.4.5-.9.7-1.5.1-.2.1-.4.2-.6h.6c-.4 1.2-.7 2.3-.9 3.2l-.2.6c-.3 1-.5 2.2-.9 3.8h-.6l.1-.5c0-.1 0-.3.1-.6 0-.3.1-.5.1-.7 0-.5-.1-1-.4-1.3s-.8-.5-1.4-.5h-1.8l-1.7 6.5c-.2.6-.2 1-.2 1.3 0 .4.1.6.4.7.3.1.7.2 1.4.2h2c1.1 0 2-.1 2.7-.4.7-.3 1.2-.8 1.7-1.4.4-.7.9-1.6 1.4-2.9h.6c-.2.5-.4 1.2-.6 1.9-.3 1-.5 2.2-.7 3.5-1.2-.1-3.3-.1-6.2-.1-3.5 0-6.1 0-7.8.1l.1-.5c.6 0 1.1-.1 1.4-.2.3-.1.6-.3.8-.6.2-.3.4-.8.6-1.5l3.6-13.4c.2-.6.2-1 .2-1.3 0-.4-.1-.6-.4-.8-.3-.1-.7-.2-1.4-.2l.1-.5c1.8.1 4.4.1 7.8.1 2.3-.1 4.1-.1 5.2-.2zM26.8 70.4l-.1.5c-1.1.2-1.9 1-2.6 2.3L16 89.6h-.4l-1.9-12.3-7.3 12.3h-.5l-2.1-17c-.1-1.1-.6-1.7-1.5-1.7l.1-.5c.7.1 1.6.1 2.7.1 1.3 0 2.3 0 2.9-.1l-.1.5c-.6 0-1 .2-1.2.4-.2.2-.4.6-.4 1.2 0 .1 0 .3.1.7l1.5 12.9 5.6-9.6-.5-3.9c-.2-1.1-.6-1.7-1.2-1.7l.1-.5c.6.1 1.4.1 2.4.1 1.5 0 2.7 0 3.5-.1l-.1.5c-.8 0-1.4.1-1.7.3-.3.2-.5.5-.5 1.1 0 .3 0 .5.1.9l1.9 12.3 5.3-10.7c.6-1.2.9-2.1.9-2.6 0-.4-.2-.8-.5-.9-.3-.2-.9-.3-1.6-.3l.1-.5c1 .1 2 .1 3.1.1.8-.1 1.5-.2 2-.2z">

						</path>
					</svg>
				</div> 
			</div>
		</div>

	</div>

	<div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">

      <!-- top-bar -->
      <div class="mkdf-top-bar top-bar" style="">
        <div class="mkdf-vertical-align-containers">
          <div class="mkdf-position-left">
            <div class="mkdf-position-left-inner">
            <?php 
                                                                                        $phone = get_option('karjala_event_phone_field');
                                                                                        if( $phone ):
            ?>
              <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo trim($phone); ?>">
                <span class="mkdf-icon-element ion-android-call top-bar__phone-icon" style=""></span> 
                <span class="mkdf-icon-text top-bar__phone-text" style="">
                <?php echo $phone; ?>
                </span> 
              </a>
              <?php 
                endif;

                $email = get_option('karjala_event_mail_field');

                if( $email ):
              
              ?>
              <a class="mkdf-icon-widget-holder top-bar__email" href="mailto:<?php echo trim($email); ?>">
                <span class="mkdf-icon-element ion-ios-email-outline top-bar__email-icon" style=""></span>
                <span class="mkdf-icon-text top-bar__email-text" style="">
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

            ?>
              <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
              <?php 
                if( $vk ):
              ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style="" href="<?php echo $vk;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span> 
                </a>
              <?php 
                endif;
                if( $instagram ):
              ?>
               <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style="" href="<?php echo $instagram;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span> 
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
        
        <div class="mkdf-menu-area" style="opacity: 1;">
        
        
          <div class="mkdf-vertical-align-containers">
            <div class="mkdf-position-left" style="width: 45%;max-width:440px;text-align: right;padding-right: 30px;">
              
              
              <div class="mkdf-position-left-inner" style="padding-right: 30px;">
        

                  <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'menu-1',
                        'menu' => '',
                        'container'       => 'nav', 
                        //'container_class' => 'container', 
                        //'container_id'    => 'container-id',
                        'menu_class'      => 'mkdf-main-menu mkdf-drop-down mkdf-divided-left-part mkdf-default-nav centered-nav', 
                        //'menu_class'      => 'menu', 
                        'menu_id'        => 'primary-menu',
                        'items_wrap'      => '<ul id="menu-divided-left" class="clearfix">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'echo'            => true,
                        'depth'           => 0,
                        //'walker'          => '',
                      )
                    );
                  ?>
             
        
              </div>
            </div>
            <div class="mkdf-position-center">
              <!--
                       -->
              <div class="mkdf-position-center-inner">
        
        
                <div class="mkdf-logo-wrapper">
                  <!-- <a itemprop="url" href="https://wanderland.qodeinteractive.com/" style="height: 76px;">
                    <img itemprop="image" class="mkdf-normal-logo logo-custom" src="img/logo/logo-svg.svg" width="286" height="153" alt="logo">
                    <img itemprop="image" class="mkdf-dark-logo" src="img/logo/logo-svg.svg" width="286" height="153" alt="dark logo"> <img itemprop="image" class="mkdf-light-logo" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/logo-img-03.png" width="286" height="160" alt="light logo"> 
                  </a> -->
                  <?php the_custom_logo(); ?>

                </div>
        
              </div>
            </div>

            <div class="mkdf-position-right" style="width: 45%;max-width:440px;text-align: left;">
              <!--
                       -->
              <div class="mkdf-position-right-inner"style="padding-left: 30px;">
        
              <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'menu-1',
                        'menu' => '',
                        'container'       => 'nav', 
                        //'container_class' => 'container', 
                        //'container_id'    => 'container-id',
                        'menu_class'      => 'mkdf-main-menu mkdf-drop-down mkdf-divided-left-part mkdf-default-nav centered-nav', 
                        //'menu_class'      => 'menu', 
                        'menu_id'        => 'primary-menu',
                        'items_wrap'      => '<ul id="menu-divided-left" class="clearfix">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
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
                    <?php the_custom_logo(); ?>
                      <!-- <a href="index.html" style="height: 38px">
                        <img itemprop="image"
                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/logo-dark-img-02.png"
                          width="144" height="77" alt="Mobile Logo" />
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="mkdf-position-right">
                  <div class="mkdf-position-right-inner">
                    <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
                      <a href="javascript:void(0)">
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
              <ul id="menu-standard-1" class="">
                <li id="mobile-menu-item-626"
                  class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub">
                  <a href="#" class=" current  mkdf-mobile-no-link"><span>Home</span></a><span class="mobile_arrow"><i
                      class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
                  <ul class="sub_menu">
                    <li id="mobile-menu-item-636"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a
                        href="https://wanderland.qodeinteractive.com/" class=""><span>Main Home</span></a></li>
                    <li id="mobile-menu-item-633" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/alternating-posts/" class=""><span>Alternating
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
                    <li id="mobile-menu-item-635"
                      class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-202 current_page_item ">
                      <a href="https://wanderland.qodeinteractive.com/travel-blog/" class=""><span>Travel
                          Blog</span></a></li>
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

          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'karjala_event' ); ?></button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
		      </nav><!-- #site-navigation -->
        </div>
      </header>
      <!-- ./headers -->

      
			
		<!-- </div>
	</div> -->
		
<?php wp_body_open(); ?>


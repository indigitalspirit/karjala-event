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

      <!-- <div class="mkdf-fullscreen-menu-holder-outer">
        <div class="mkdf-fullscreen-menu-holder">
          <div class="mkdf-fullscreen-menu-holder-inner">
            <div class="mkdf-fullscreen-above-menu-widget-holder">
              <div class="widget_text widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                 
                   
                      <?php the_custom_logo(); ?>
                </div>
              </div>
            </div>
            <nav class="mkdf-fullscreen-menu">
              <ul id="menu-full-screen-menu" class="">
                <li id="popup-menu-item-728"
                  class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub">

                  <a href="#" class=" current ">
                    <span>Homepages</span><i
                      class="mkdf-fullscreen-menu-arrow fa fa-angle-down"></i></a>
                  <ul class="sub_menu">
                    <li id="popup-menu-item-734"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a
                        href="https://wanderland.qodeinteractive.com/" class=""><span>Main Home</span></a></li>
                    <li id="popup-menu-item-732"
                      class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-329 current_page_item ">
                      <a href="https://wanderland.qodeinteractive.com/blog-divided/" class=""><span>Blog
                          Divided</span></a></li>
                    <li id="popup-menu-item-2548" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/travel-blog-metro/" class=""><span>Travel Blog
                          Metro</span></a></li>
                  </ul>
                </li>
                <li id="popup-menu-item-729"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=""><span>Blog posts</span><i
                      class="mkdf-fullscreen-menu-arrow fa fa-angle-down"></i></a>
                  <ul class="sub_menu">
                    <li id="popup-menu-item-1811" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/right-sidebar/" class=""><span>Right
                          sidebar</span></a></li>
                    <li id="popup-menu-item-1810" class="menu-item menu-item-type-post_type menu-item-object-post "><a
                        href="https://wanderland.qodeinteractive.com/the-laugavegur-trail/" class=""><span>Blog
                          single</span></a></li>
                  </ul>
                </li>
                <li id="popup-menu-item-730"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a
                    href="#" class=""><span>Inner pages</span><i
                      class="mkdf-fullscreen-menu-arrow fa fa-angle-down"></i></a>
                  <ul class="sub_menu">
                    <li id="popup-menu-item-1233" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/about-us/" class=""><span>About us</span></a></li>
                    <li id="popup-menu-item-1234" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/get-in-touch/" class=""><span>Get in
                          touch</span></a></li>
                    <li id="popup-menu-item-2496" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                        href="https://wanderland.qodeinteractive.com/destination-list/" class=""><span>Destination
                          list</span></a></li>
                  </ul>
                </li>
                <li id="popup-menu-item-1819" class="menu-item menu-item-type-post_type menu-item-object-page "><a
                    href="https://wanderland.qodeinteractive.com/landing/" class=""><span>Landing</span></a></li>
              </ul>
            </nav>
            <div class="mkdf-fullscreen-below-menu-widget-holder">
              <div class="widget widget_text">
                <div class="textwidget">
                  <p><span
                      style="font-size: 18px; color: #878787; font-family: 'Crimson Text',serif; font-style: italic; font-weight: 400;">Socials</span>
                  </p>
                </div>
              </div>
              <div class="widget mkdf-social-icons-group-widget text-align-center"> <a
                  class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b"
                  style="color: #878787;" href="https://www.instagram.com/qodeinteractive/" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram"></span> </a>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b"
                  style="color: #878787;" href="https://twitter.com/QodeInteractive" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-twitter"></span> </a>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b"
                  style="color: #878787;" href="https://www.facebook.com/QodeInteractive/" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-facebook"></span> </a>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b"
                  style="color: #878787;" href="https://www.youtube.com/QodeInteractiveVideos" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-youtube"></span> </a>
              </div>
            </div>
          </div>
        </div>
      </div> -->


      <div class="mkdf-content" style="margin-top: -110px">
        <div class="mkdf-content-inner">
          <div class="mkdf-full-width">
            <div class="mkdf-full-width-inner main-page__full-width-inner">
              <div class="mkdf-grid-row">
                <div class="mkdf-page-content-holder mkdf-grid-col-12">
              
                    
                    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill main-page__row">
                    

                      <!-- left-side -->
                      <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-12 main-page__column__left-side">
                        <div class="vc_column-inner">
                          <div class="wpb_wrapper">

                            <!-- header -->
                            <header class="vc_row wpb_row vc_inner vc_row-fluid main-page__header">
                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                                      <div class="mkdf-eh-item   mkdf-horizontal-alignment-center "
                                        >
                                        <div class="mkdf-eh-item-inner">
                                          <div class="mkdf-eh-item-content_wrapper mkdf-eh-custom-6734 main-page__block-pd"
                                            >


                                            <div class="wpb_text_column wpb_content_element  vc_custom_1570712658299">
                                              <div class="wpb_wrapper">
                                               
                                                <div class="mkdf-position-left">
                                                  <div class="main-page__header-row">
                                                    <div class="main-page__header-logo">
                                                    <?php the_custom_logo(); ?>
                                                     
                                                    </div>

                                                    <?php 
                                                    $phone = get_option('karjala_event_phone_field');

                                                    if( $phone ):
                                                    
                                                    ?>

                                                    <div class="main-page__header-phone">
                                                      <a class="mkdf-icon-widget-holder green-hover" href="tel:<?php echo trim($phone); ?>">
                                                        <span class="mkdf-icon-element ion-android-call"
                                                          >
                                                        </span> 
                                                        <span class="mkdf-icon-text">
                                                          <?php echo $phone; ?>
                                                        </span>
                                                      </a>
                                                    </div>

                                                    <?php 
                                                      endif;

                                                    ?>


                                                    <div class="main-page__header-search">
                                                      <div class="mkdf-search-opener-holder">
                                                        <form action="https://wanderland.qodeinteractive.com/"
                                                          class="mkdf-on-side-search-form" method="get">
                                                          <div class="mkdf-form-holder">
                                                            <div class="mkdf-form-holder-inner">
                                                              <div class="mkdf-field-holder">
                                                                <input type="text" placeholder="Поиск" name="s"
                                                                  class="mkdf-search-field" autocomplete="off"
                                                                  required="">
                                                              </div>
                                                              <button class="mkdf-onside-btn" type="submit">
                                                                <span class="mkdf-onside-btn-icon"></span>
                                                              </button>
                                                            </div>
                                                          </div>
                                                        </form> 
                                                        <a class="mkdf-search-opener mkdf-icon-has-hover mkdf-search-opener-icon-pack"
                                                          href="javascript:void(0)">
                                                          <span class="mkdf-search-opener-wrapper">
                                                            <span class="mkdf-search-icon-text"
                                                              style="color:black">Поиск</span>
                                                            <i class="mkdf-icon-ion-icon ion-ios-search "
                                                              style="color:black"></i> </span>
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="main-page__header-row">
                                                    
                                                    <?php
                                                      wp_nav_menu(
                                                        array(
                                                          'theme_location' => 'menu-1',
                                                          'menu' => '',
                                                          'container'       => 'nav', 
                                                          //'container_class' => 'container', 
                                                          //'container_id'    => 'container-id',
                                                          'menu_class'      => 'mkdf-main-menu mkdf-drop-down mkdf-default-nav', 
                                                          //'menu_class'      => 'menu', 
                                                          'menu_id'        => 'primary-menu',
                                                          'items_wrap'      => '<ul class="main-page__header-menu">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                          'echo'            => true,
                                                          'depth'           => 0,
                                                          //'walker'          => '',
                                                        )
                                                      );
                                                    ?>

                                                  </div>

                                                </div>

                                              
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </header>
                            <!-- ./header -->

        
        
      <!-- </div>
    </div> -->
		
<?php wp_body_open(); ?>


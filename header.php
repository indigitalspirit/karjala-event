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

	<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1576679106364 {
      background-image: url(img/bg-map.jpg) !important;
      background-position: 0 0 !important;
      background-repeat: no-repeat !important;
    }

    .vc_custom_1571759169670 {
      padding-right: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1570712658299 {
      margin-top: -30px !important;
    }

    .vc_custom_1576680478451 {
      padding-top: 100px !important;
      padding-bottom: 81px !important;
    }
  </style>

  <style id='wanderland-mikado-woo-inline-css' type='text/css'>
    .page-id-202 .mkdf-top-bar {
      background-color: rgba(236, 235, 225, 1);
      border-bottom: 0;
    }

    .page-id-202 .mkdf-top-bar .mkdf-grid .mkdf-vertical-align-containers {
      border-bottom: 0;
    }

    .page-id-202 .mkdf-top-bar:after {
      border-bottom: 0;
    }

    .page-id-202 .mkdf-content {
      background-image: url(https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h2-bckg-img-02.jpg);
      background-repeat: no-repeat;
      background-position: center 0;
      background-size: cover;
    }

    .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
    .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
      padding: 0;
    }

    @media only screen and (max-width: 1024px) {

      .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
      .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
        padding: 0;
      }
    }

    .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
    .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
      padding: 0;
    }

    @media only screen and (max-width: 1024px) {

      .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
      .page-id-202 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
        padding: 0;
      }
    }

    .page-id-202.mkdf-header-vertical .mkdf-vertical-area-background {
      box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
    }

    .page-id-202 .mkdf-page-header .mkdf-menu-area {
      background-color: rgba(255, 255, 255, 1);
    }

    .page-id-202 .mkdf-page-header .mkdf-menu-area:after {
      border-bottom: none;
    }

    .page-id-202 .mkdf-page-footer .mkdf-footer-bottom-holder {
      background-color: #ecebe1;
    }
  </style>

  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1579265695115 {
      padding-top: 72px !important;
      padding-bottom: 38px !important;
    }

    .vc_custom_1571996104789 {
      padding-bottom: 20px !important;
    }

    .vc_custom_1575627713204 {
      padding-top: 65px !important;
      padding-bottom: 105px !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }

    .vc_custom_1575627659852 {
      padding-top: 29px !important;
    }

    .vc_custom_1572617876474 {
      padding-top: 110px !important;
      padding-bottom: 100px !important;
    }

    .vc_custom_1575548558102 {
      padding-top: 42px !important;
    }

    .vc_custom_1579104144167 {
      padding-top: 65px !important;
      padding-bottom: 150px !important;
      background-image: url(https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h2-bckg-img-05.png?id=1681) !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }

    .vc_custom_1572440552355 {
      padding-bottom: 52px !important;
    }

    .vc_custom_1572440624442 {
      padding-bottom: 52px !important;
    }

    .vc_custom_1572599077583 {
      padding-right: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1570709430523 {
      margin-top: -45px !important;
    }

    .vc_custom_1575290986357 {
      padding-top: 41px !important;
      padding-bottom: 111px !important;
    }
  </style><noscript>
    <style>
      .wpb_animate_when_almost_visible {
        opacity: 1;
      }
    </style>
  </noscript>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'karjala_event' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$karjala_event_description = get_bloginfo( 'description', 'display' );
			if ( $karjala_event_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $karjala_event_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

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
	</header><!-- #masthead -->

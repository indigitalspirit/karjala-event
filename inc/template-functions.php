<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package karjala-event
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function karjala_event_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-202 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive hfeed';
	}

	else if (is_single() ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-202 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive';
	}

	else if (is_home() || is_front_page() ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-329 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-light-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-minimal mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive mkdf-fade-push-text-right';

	}

	else if ( is_404() ) {
		$classes[] = 'error404 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-light-header mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-divided mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-shadow-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive';
	}
	else if ( is_page('Магазины') ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-202 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive';
	}

	else if ( is_page('Блог') ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-202 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive';
	}

	
	else if ( is_page('Корпоративы') ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-401 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-vertical mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive';
	}


	// Adds a class of no-sidebar when there is no sidebar present.
	else if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'page-template page-template-full-width page-template-full-width-php page page-id-202 theme-wanderland wanderland-core-1.0 woocommerce-no-js wanderland-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-dark-header mkdf-no-behavior mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-on-side-search wpb-js-composer js-comp-ver-6.1 vc_responsive no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'karjala_event_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function karjala_event_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'karjala_event_pingback_header' );

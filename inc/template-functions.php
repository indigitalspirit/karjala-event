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




/**
 * Add custom fields (phone, address, email, social media) on admin-menu page
 *
 */
function karjala_event_add_info_fields_to_admin_page(){


	//$option_name = 'karjala_event_phone_field';

	$options_names = array(
		'karjala_event_phone_field',
		//'karjala_event_shedule_field',
		//'karjala_event_address_field',
		'karjala_event_mail_field',
		//'karjala_event_whatsapp_field',
		'karjala_event_vk_field',
		'karjala_event_instagram_field',
		'karjala_event_thezis_field',
		//'karjala_event_header_info_first',
		//'karjala_event_header_info_second',
		//'karjala_event_header_info_third',
		//'karjala_event_header_icon_first',
		//'karjala_event_header_icon_second',
		//'karjala_event_header_icon_third',
		//'karjala_event_checkout_field'
	);

	for($i = 0; $i < count($options_names); $i++ ) {
			// регистрируем опцию
			register_setting( 'general', $options_names[$i] );
			// добавляем поле

			switch ($options_names[$i]) {
				case 'karjala_event_phone_field':
					$this_option_name = "Телефон";
					break;

				// case 'karjala_event_shedule_field':
				// 	$this_option_name = "Режим работы";
				// 	break;

				// case 'karjala_event_address_field':
				// 	$this_option_name = "Адрес";
				// 	break;

				case 'karjala_event_mail_field':
					$this_option_name = "E-mail";
					break;

				// case 'karjala_event_whatsapp_field':
				// 	$this_option_name = "Ссылка на чат WhatsApp";
				// 	break;

				case 'karjala_event_vk_field':
					$this_option_name = "Ссылка на группу в vk";
					break;

				case 'karjala_event_instagram_field':
					$this_option_name = "Ссылка профиль в instagram";
					break;

				case 'karjala_event_thezis_field':
					$this_option_name = "Цитата в подвале сайта";
					break;

					

				// case 'karjala_event_footer_info_field':
				// 	$this_option_name = "Текст в нижнем меню под логотипом";
				// 	break;

				// case 'karjala_event_header_info_first':
				// 	$this_option_name = "Текст в хедере 1";
				// 	break;

				// case 'karjala_event_header_info_second':
				// 	$this_option_name = "Текст в хедере 2";
				// 	break;

				// case 'karjala_event_header_info_third':
				// 	$this_option_name = "Текст в хедере 3";
				// 	break;

				// case 'karjala_event_header_icon_first':
				// 	$this_option_name = "Иконка в хедере 1";
				// 	break;

				// case 'karjala_event_header_icon_second':
				// 	$this_option_name = "Иконка в хедере 2";
				// 	break;

				// case 'karjala_event_header_icon_third':
				// 	$this_option_name = "Иконка в хедере 3";
				// 	break;
					
				// case 'karjala_event_checkout_field':
				// 	$this_option_name = "Сообщение на странице оформления заказа";
				// 	break;
			}

			add_settings_field( 
				"$options_names[$i]" . '_id', 
				"$this_option_name", 
				'karjala_event_extra_fields_callback', 
				'general', 
				'default', 
				array( 
					'id' => "$options_names[$i]" . '_id', 
					'option_name' => "$options_names[$i]"
				)
			);
	}

	
}

function karjala_event_extra_fields_callback( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];

	if( ($id === 'karjala_event_thezis_field_id') //|| 
			// ($id === 'karjala_event_header_info_first_id') || 
			// ($id === 'karjala_event_header_info_second_id') || 
			// ($id === 'karjala_event_header_info_third_id')
	 	) {
	?>

		<textarea rows="10" cols="45" name="<?echo $option_name ?>" id="<? echo $id ?>" class="regular-text code"><? echo esc_attr( get_option($option_name) );?></textarea>

	<? }
		else
	{
	?>
	
		<input type="text" name="<?echo $option_name ?>" id="<? echo $id ?>" value="<? echo esc_attr( get_option($option_name) ) ?>" class="regular-text code" >

	<?
	}
}
add_action('admin_menu', 'karjala_event_add_info_fields_to_admin_page');


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
		'karjala_event_404_field',
		'karjala_event_blog_field',
		'karjala_event_map_field',
		'karjala_event_svg_logo_field',
		'karjala_event_social_3_field',
		'karjala_event_social_3_icon',
		'karjala_event_social_4_field',
		'karjala_event_social_4_icon',
		'karjala_event_social_5_field',
		'karjala_event_social_5_icon',
		'karjala_event_social_6_field',
		'karjala_event_social_6_icon'
		
		
		
		
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

				case 'karjala_event_social_3_field':
					$this_option_name = "Ссылка на соцсеть 3";
					break;

				case 'karjala_event_social_4_field':
					$this_option_name = "Ссылка на соцсеть 4";
					break;

				case 'karjala_event_social_5_field':
					$this_option_name = "Ссылка на соцсеть 5";
					break;

				case 'karjala_event_social_6_field':
					$this_option_name = "Ссылка на соцсеть 6";
					break;

				case 'karjala_event_social_3_icon':
					$this_option_name = "Ссылка на иконку для соцсети 3";
					break;

				case 'karjala_event_social_4_icon':
					$this_option_name = "Ссылка на иконку для соцсети 4";
					break;

				case 'karjala_event_social_5_icon':
					$this_option_name = "Ссылка на иконку для соцсети 5";
					break;

				case 'karjala_event_social_6_icon':
					$this_option_name = "Ссылка на иконку для соцсети 6";
					break;

				
				case 'karjala_event_thezis_field':
					$this_option_name = "Цитата в подвале сайта";
					break;

				case 'karjala_event_404_field':
					$this_option_name = "Ссылка на фото на странице 404";
					break;

				case 'karjala_event_map_field':
					$this_option_name = 'Ссылка на фото на странице "Карта сайта"';
					break;

				case 'karjala_event_svg_logo_field':
					$this_option_name = 'Ссылка на логотип в формате svg. Если оставить поле пустым - выведется логотип из медиабиблиотеки';
					break;

				case 'karjala_event_blog_field':
					$this_option_name = "Ссылка на фото на странице архивов";
					break;

			
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



/*****
 * Remove Contact Form 7 <br>'s
 * 
 */

add_filter( 'wpcf7_autop_or_not', '__return_false' );



/**** CUSTOM BREADCRUMBS */
if ( ! function_exists( 'karjala_event_breadcrumbs' ) ) :
	function karjala_event_breadcrumbs() {

		/* === ОПЦИИ === */
		$text['home']     = 'Главная'; // текст ссылки "Главная"
		$text['category'] = '%s'; // текст для страницы рубрики
		$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
		$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
		$text['author']   = 'Статьи автора %s'; // текст для страницы автора
		$text['404']      = 'Ошибка 404'; // текст для страницы 404
		$text['page']     = 'Страница %s'; // текст 'Страница N'
		$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

		$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
		$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
		$sep            = '<span class="breadcrumbs__separator"> / </span>'; // разделитель между "крошками"
		$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
		$after          = '</span>'; // тег после текущей "крошки"

		$show_on_home   = 1; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
		$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
		$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
		$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
		/* === КОНЕЦ ОПЦИЙ === */

		global $post;
		$home_url       = home_url('/');
		$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
		$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
		$link          .= '<meta itemprop="position" content="%3$s" />';
		$link          .= '</span>';
		$parent_id      = ( $post ) ? $post->post_parent : '';
		$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

		if ( is_home() || is_front_page() ) {

			
			if ( is_home() && $show_on_home ) { 
				echo $wrap_before . $home_link . $sep . '<span class="breadcrumbs__current">' . single_post_title( '', false ) . '</span>' . $wrap_after;
			}
			elseif ( $show_on_home ) {
				echo $wrap_before . $home_link . $wrap_after;
			}

		} else {

			$position = 0;

			echo $wrap_before;

			if ( $show_home_link ) {
				$position += 1;
				echo $home_link;
			}

			if ( is_category() ) {
				$parents = get_ancestors( get_query_var('cat'), 'category' );
				foreach ( array_reverse( $parents ) as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'paged' ) ) {
					$position += 1;
					$cat = get_query_var('cat');
					echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
					echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				} else {
					if ( $show_current ) {
						if ( $position >= 1 ) echo $sep;
						echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
					} elseif ( $show_last_sep ) echo $sep;
				}

			} elseif ( is_search() ) {
				if ( get_query_var( 'paged' ) ) {
					$position += 1;
					if ( $show_home_link ) echo $sep;
					echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
					echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				} else {
					if ( $show_current ) {
						if ( $position >= 1 ) echo $sep;
						echo $before . sprintf( $text['search'], get_search_query() ) . $after;
					} elseif ( $show_last_sep ) echo $sep;
				}

			} elseif ( is_year() ) {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . get_the_time('Y') . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;

			} elseif ( is_month() ) {
				if ( $show_home_link ) echo $sep;
				$position += 1;
				echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
				if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
				elseif ( $show_last_sep ) echo $sep;

			} elseif ( is_day() ) {
				if ( $show_home_link ) echo $sep;
				$position += 1;
				echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
				$position += 1;
				echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
				if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
				elseif ( $show_last_sep ) echo $sep;

			} elseif ( is_single() && ! is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$position += 1;
					$post_type = get_post_type_object( get_post_type() );
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				} else {
					$cat = get_the_category(); $catID = $cat[0]->cat_ID;
					$parents = get_ancestors( $catID, 'category' );
					$parents = array_reverse( $parents );
					$parents[] = $catID;
					foreach ( $parents as $cat ) {
						$position += 1;
						if ( $position > 1 ) echo $sep;
						echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
					}
					if ( get_query_var( 'cpage' ) ) {
						$position += 1;
						echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
						echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
					} else {
						if ( $show_current ) echo $sep . $before . get_the_title() . $after;
						elseif ( $show_last_sep ) echo $sep;
					}
				}

			} elseif ( is_post_type_archive() ) {
				$post_type = get_post_type_object( get_post_type() );
				if ( get_query_var( 'paged' ) ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
					echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				} else {
					if ( $show_home_link && $show_current ) echo $sep;
					if ( $show_current ) echo $before . $post_type->label . $after;
					elseif ( $show_home_link && $show_last_sep ) echo $sep;
				}

			} elseif ( is_attachment() ) {
				$parent = get_post( $parent_id );
				$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				$position += 1;
				echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;

			} elseif ( is_page() && ! $parent_id ) {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . get_the_title() . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;

			} elseif ( is_page() && $parent_id ) {
				$parents = get_post_ancestors( get_the_ID() );
				foreach ( array_reverse( $parents ) as $pageID ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
				}
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;

			} elseif ( is_tag() ) {
				if ( get_query_var( 'paged' ) ) {
					$position += 1;
					$tagID = get_query_var( 'tag_id' );
					echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
					echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				} else {
					if ( $show_home_link && $show_current ) echo $sep;
					if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
					elseif ( $show_home_link && $show_last_sep ) echo $sep;
				}

			} elseif ( is_author() ) {
				$author = get_userdata( get_query_var( 'author' ) );
				if ( get_query_var( 'paged' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
					echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
				} else {
					if ( $show_home_link && $show_current ) echo $sep;
					if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
					elseif ( $show_home_link && $show_last_sep ) echo $sep;
				}

			} elseif ( is_404() ) {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $text['404'] . $after;
				elseif ( $show_last_sep ) echo $sep;

			} elseif ( has_post_format() && ! is_singular() ) {
				if ( $show_home_link && $show_current ) echo $sep;
				echo get_post_format_string( get_post_format() );
			}

			echo $wrap_after;

		}
	} // end of karjala_event_breadcrumbs()
endif;


/*** Blocks ordering in internal pages */

if ( ! function_exists( 'karjala_event_switch_page_blocks_order' ) ) :
	function karjala_event_switch_page_blocks_order($old_blocks_order) {
		$new_blocks_order = array( 1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => '', 9 => '' );

		//echo 'old_blocks_order: ';
		//var_dump( $old_blocks_order );

		foreach( $old_blocks_order as $key => $value ) {
			if( $value != "" ) {
				//echo 'VALUE: ' . $value;
				//echo 'KEY: ' . $key;
				switch( $value ) {
					case 'first':
						$new_blocks_order[1] = $key;
						break;

					case 'second':
						$new_blocks_order[2] = $key;
						break;

					case 'third':
						$new_blocks_order[3] = $key;
						break;

					case 'fourth':
						$new_blocks_order[4] = $key;
						break;

					case 'fifth':
						$new_blocks_order[5] = $key;
						break;

					case 'sixth':
						$new_blocks_order[6] = $key;
						break;

					case 'seventh':
						$new_blocks_order[7] = $key;
						break;

					case 'eighth':
						$new_blocks_order[8] = $key;
						break;

					case 'ninth':
						$new_blocks_order[9] = $key;
						break;
					
					default:
						break;

				}
				
			}
		}

		

		return $new_blocks_order;

	}
endif;


if ( ! function_exists( 'karjala_event_place_new_blocks_order' ) ) :
	function karjala_event_place_new_blocks_order($new_blocks_order, $page_id) {


		foreach( $new_blocks_order as $key => $value ) {
			if( $value != "" ) {
				//echo 'ORDER: ' . $value;
				
						
				switch( $value ) {
					case 'order_services':
						get_template_part( 'template-parts/corporates/description', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_corporates':
						get_template_part( 'template-parts/corporates/services', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_adv':
						get_template_part( 'template-parts/corporates/adv', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_video':
						get_template_part( 'template-parts/corporates/video', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_reviews':
						get_template_part( 'template-parts/corporates/reviews', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_maillist':
						get_template_part( 'template-parts/corporates/maillist', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_shop':
						get_template_part( 'template-parts/corporates/shop', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_blog':
						get_template_part( 'template-parts/corporates/blog', '', [ 'page_id' => $page_id ] );
						break;

					case 'order_form':
						get_template_part( 'template-parts/corporates/form', '', [ 'page_id' => $page_id ] );
						break;
					// ./corporates

					case 'trips_trips':
						get_template_part( 'template-parts/trips/trips', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_services':
						get_template_part( 'template-parts/trips/services', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_adv':
						get_template_part( 'template-parts/trips/adv', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_video':
						get_template_part( 'template-parts/trips/video', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_reviews':
						get_template_part( 'template-parts/trips/reviews', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_maillist':
						get_template_part( 'template-parts/trips/maillist', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_shop':
						get_template_part( 'template-parts/trips/shop', '', [ 'page_id' => $page_id ] );
						break;

					case 'trips_blog':
						get_template_part( 'template-parts/trips/blog', '', [ 'page_id' => $page_id ] );
						break;


					case 'trips_form':
						get_template_part( 'template-parts/trips/form', '', [ 'page_id' => $page_id ] );
						break;

					// ./trips

					case 'marriage_other':
						get_template_part( 'template-parts/marriage/other', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_services':
						get_template_part( 'template-parts/marriage/services', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_about':
						get_template_part( 'template-parts/marriage/about', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_cases':
						get_template_part( 'template-parts/marriage/cases', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_reviews':
						get_template_part( 'template-parts/marriage/reviews', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_maillist':
						get_template_part( 'template-parts/marriage/maillist', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_shop':
						get_template_part( 'template-parts/marriage/shop', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_blog':
						get_template_part( 'template-parts/marriage/blog', '', [ 'page_id' => $page_id ] );
						break;

					case 'marriage_form':
						get_template_part( 'template-parts/marriage/form', '', [ 'page_id' => $page_id ] );
						break;

					// ./marriage


					case 'celebrations_main':
						get_template_part( 'template-parts/celebrations/main', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_services':
						get_template_part( 'template-parts/celebrations/services', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_adv':
						get_template_part( 'template-parts/celebrations/adv', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_video':
						get_template_part( 'template-parts/celebrations/video', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_reviews':
						get_template_part( 'template-parts/celebrations/reviews', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_maillist':
						get_template_part( 'template-parts/celebrations/maillist', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_shop':
						get_template_part( 'template-parts/celebrations/shop', '', [ 'page_id' => $page_id ] );
						break;

					case 'celebrations_blog':
						get_template_part( 'template-parts/celebrations/blog', '', [ 'page_id' => $page_id ] );
						break;


					case 'celebrations_form':
						get_template_part( 'template-parts/celebrations/form', '', [ 'page_id' => $page_id ] );
						break;

					// ./celebrations

					
					
					default:
						break;

				}
				
			}
		}


	}
endif;
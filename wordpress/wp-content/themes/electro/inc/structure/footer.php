<?php
/**
 * Template functions used in footer
 */

if ( ! function_exists( 'electro_get_footer' ) ) {
	function electro_get_footer( $footer = '' ) {
		$footer_style = apply_filters( 'electro_footer_style', 'v2' );

		if( ! empty( $footer ) ) {
			$footer_style = $footer;
		}

		get_footer( $footer_style );
	}
}

if ( ! function_exists( 'electro_footer_widgets' ) ) {
	/**
	 * Displays Footer Widgets
	 */
	function electro_footer_widgets() {
		if( apply_filters( 'electro_footer_widgets', true  ) ) {
			?>
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
					<?php
						if ( is_active_sidebar( 'footer-widgets' ) ) {

							dynamic_sidebar( 'footer-widgets' );

						} else {

							$footer_widget_args = apply_filters( 'electro_footer_widget_args', array(
								'before_widget' => '<div class="col-lg-4 col-md-4 col-xs-12"><aside class="widget clearfix"><div class="body">',
								'after_widget'  => '</div></aside></div>',
								'before_title'  => '<h4 class="widget-title">',
								'after_title'   => '</h4>',
								'widget_id'     => '',
							) );

							do_action( 'electro_default_footer_widgets', $footer_widget_args );
						}
					?>
					</div>
				</div>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'electro_footer_divider' ) ) {
	/**
	 * Area that divides electro footer and footer bottom widgets
	 */
	function electro_footer_divider() {
		/**
		 * @hooked electro_footer_newsletter - 10
		 */
		do_action( 'electro_footer_divider' );
	}
}

if ( ! function_exists( 'electro_footer_newsletter' ) ) {
	/**
	 * Electro Footer Newsletter
	 */
	function electro_footer_newsletter() {

		if( apply_filters( 'electro_footer_newsletter', true  ) ) {
			$footer_newsletter_title 			= apply_filters( 'electro_footer_newsletter_title', esc_html__( 'Sign up to Newsletter', 'electro' ) );
			$footer_newsletter_marketing_text 	= apply_filters( 'electro_footer_newsletter_marketing_text', __( '...and receive <strong>$20 coupon for first shopping</strong>', 'electro' ) );

			?>
			<div class="footer-newsletter">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-7">

							<h5 class="newsletter-title"><?php echo esc_html( $footer_newsletter_title ); ?></h5>

							<?php if ( ! empty( $footer_newsletter_marketing_text ) ) : ?>

							<span class="newsletter-marketing-text"><?php echo wp_kses_post( $footer_newsletter_marketing_text ); ?></span>

							<?php endif; ?>

						</div>
						<div class="col-xs-12 col-sm-5">

							<?php footer_newsletter_form(); ?>

						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'footer_newsletter_form' ) ) {
	/**
	 * Electro Footer Newsletter Form
	 */
	function footer_newsletter_form() {
		ob_start();
		?>
		<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="<?php echo esc_attr( __( 'Enter your email address', 'electro' ) ); ?>">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="button"><?php echo esc_html( __( 'Sign Up', 'electro' ) ); ?></button>
				</span>
			</div>
		</form>
		<?php
		$footer_newsletter_form = ob_get_clean();
		echo apply_filters( 'electro_footer_newsletter_form', $footer_newsletter_form );
	}
}

if ( ! function_exists( 'electro_footer_contact' ) ) {
	/**
	 * Electro Contact Info Block at the footer
	 */
	function electro_footer_contact() {

		/**
		 * @hooked electro_footer_logo - 10
		 * @hooked electro_footer_call_us - 20
		 * @hooked electro_footer_address - 30
		 * @hooked electro_footer_social_icons - 40
		 */
		do_action( 'electro_footer_contact' );
	}
}

if ( ! function_exists( 'electro_footer_logo' ) ) {
	/**
	 * Displays Electro Logo at the footer contact
	 */
	function electro_footer_logo() {

		if ( apply_filters( 'electro_footer_logo', true ) ) {

			ob_start();

			if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else { ?>
				<div class="footer-logo">
					<svg id="Layer_1" data-name="Layer 1" width="156px" height="37px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1994.85 364.84"><defs><style>.cls-1{fill:#334c6b;}</style></defs><title>Shajao-Logo-Blue</title><path class="cls-1" d="M198.75,183.41a40.59,40.59,0,0,1,6.43,5.7c2,2.11,3.78,4.2,5.44,6.17a116,116,0,0,1,17.79,31.38,100.71,100.71,0,0,1,6.43,35.83,38.16,38.16,0,0,1-.49,6.94,95.43,95.43,0,0,1-16.81,49.94A101.67,101.67,0,0,1,182,352.24q-21.76,12.11-48.46,12.13H100.87q-26.72,0-48.45-12.13a101.36,101.36,0,0,1-35.6-32.87,126.89,126.89,0,0,1-7.91-13.85l46-35.61a50.83,50.83,0,0,0,6.18,17.57A57.27,57.27,0,0,0,72.69,301.8a51.23,51.23,0,0,0,15.82,9.64,50.62,50.62,0,0,0,18.77,3.47h19.78a51.16,51.16,0,0,0,35.11-13.11A52.79,52.79,0,0,0,180,269.43a32.55,32.55,0,0,1,.24-3.94,31,31,0,0,0,.26-4,52,52,0,0,0-4-20.27,54.11,54.11,0,0,0-10.86-16.55,55.44,55.44,0,0,0-16.33-11.61,51.63,51.63,0,0,0-19.76-4.93H99.37A95.19,95.19,0,0,1,65,200.94a102.09,102.09,0,0,1-28.93-18,50.65,50.65,0,0,1-11.85-11.84A116.22,116.22,0,0,1,6.43,139.65,101,101,0,0,1,0,103.81V96.87Q2.49,68.71,17.31,46.94a101.92,101.92,0,0,1,35.6-32.88Q74.66,2,101.37,2h32.12q26.72,0,48.69,12.09A101.43,101.43,0,0,1,218,46.94c1,1.68,2,3.47,3.21,5.44s2.23,3.8,3.22,5.44l-45,35.11a54.91,54.91,0,0,0-18.77-29.66A50.36,50.36,0,0,0,127.56,51.4H107.78a53.34,53.34,0,0,0-19,3.47,50.34,50.34,0,0,0-16,9.64A56.42,56.42,0,0,0,61.06,79.08a53.63,53.63,0,0,0-6.18,17.79,16.67,16.67,0,0,0-.49,4v4a51.5,51.5,0,0,0,4,20.27,53,53,0,0,0,10.87,16.55,55.37,55.37,0,0,0,16.31,11.62,51.14,51.14,0,0,0,19.78,5h30.15a95.62,95.62,0,0,1,34.38,7.16A102.83,102.83,0,0,1,198.75,183.41Z"/><path class="cls-1" d="M506.75,1.46h52.92V363.34H506.75V251.13H365.87V363.34H313V1.46h52.92V204.67H506.75V1.46Z"/><path class="cls-1" d="M637.76,363.34,785.59,1,933.42,363.34h-53.9l-10.86-28.67H703l-11.38,28.67Zm83.07-75.13H850.36l-64.77-166.1Z"/><path class="cls-1" d="M1129.69.47h51.9V266a95.18,95.18,0,0,1-7.65,38.06,101.31,101.31,0,0,1-20.77,31.16,96.84,96.84,0,0,1-30.66,21,93.42,93.42,0,0,1-37.81,7.67,99.59,99.59,0,0,1-41-8.41,88.94,88.94,0,0,1-32.14-24.21l40.54-32.66a39.5,39.5,0,0,0,14.6,10.16,48.52,48.52,0,0,0,18,3.21,44.39,44.39,0,0,0,41.52-27.69,46.38,46.38,0,0,0,3.47-17.79Z"/><path class="cls-1" d="M1259.69,363.34,1407.52,1l147.83,362.35h-53.9l-10.87-28.67H1325l-11.37,28.67Zm83.06-75.13h129.53l-64.76-166.1Z"/><path class="cls-1" d="M1813.89,0a176.65,176.65,0,0,1,70.72,14.32A182.33,182.33,0,0,1,1994.85,182.9a178.87,178.87,0,0,1-14.1,70.71,180.84,180.84,0,0,1-96.14,96.91,176.48,176.48,0,0,1-70.72,14.32,174.42,174.42,0,0,1-70.42-14.32,181.85,181.85,0,0,1-95.93-96.91,179,179,0,0,1-14.1-70.71,181.81,181.81,0,0,1,110-168.58A174.59,174.59,0,0,1,1813.89,0Zm0,313.92a117.06,117.06,0,0,0,48.7-10.34,127.74,127.74,0,0,0,40.07-28.09,133.46,133.46,0,0,0,36.82-92.59,136,136,0,0,0-36.82-93.33,126.13,126.13,0,0,0-40.07-28.31,117.06,117.06,0,0,0-48.7-10.34,115.36,115.36,0,0,0-48.43,10.34,127.11,127.11,0,0,0-39.82,28.31,136,136,0,0,0-36.82,93.33,133.46,133.46,0,0,0,36.82,92.59,128.75,128.75,0,0,0,39.82,28.09A115.36,115.36,0,0,0,1813.89,313.92Z"/></svg>
					
				</div>
			<?php
			}
			echo apply_filters( 'electro_footer_logo_html', ob_get_clean() );
		}
	}
}

if ( ! function_exists( 'electro_footer_call_us' ) ) {
	/**
	 * Displays Call Us text in Footer contact
	 */
	function electro_footer_call_us() {

		$call_us_text 	= apply_filters( 'electro_call_us_text', __( 'Got Questions ? Call us 24/7!', 'electro' ) );
		$call_us_number = apply_filters( 'electro_call_us_number', '(800) 8001-8588, (0600) 874 548' );
		$call_us_icon 	= apply_filters( 'electro_call_us_icon'	, 'ec ec-support' );

		if ( apply_filters( 'electro_footer_call_us', true ) && ! empty( $call_us_number ) ) : ?>

			<div class="footer-call-us">
				<div class="media d-flex">
					<span class="media-left call-us-icon media-middle"><i class="<?php echo esc_html( $call_us_icon ); ?>"></i></span>
					<div class="media-body">
						<span class="call-us-text"><?php echo esc_html( $call_us_text ); ?></span>
						<span class="call-us-number"><?php echo wp_kses_post( $call_us_number ); ?></span>
					</div>
				</div>
			</div>

		<?php endif;
	}
}

if ( ! function_exists( 'electro_footer_address' ) ) {
	/**
	 * Displays shop address at the footer
	 */
	function electro_footer_address() {

		// Default values and can be overwritten either via filters or via Theme Options
		$footer_address_title 	= apply_filters( 'electro_footer_address_title', __( 'Contact info', 'electro' ) );
		$footer_address 		= apply_filters( 'electro_footer_address_content', __( '17 Princess Road, London, Greater London NW1 8JR, UK', 'electro' ) );

		if ( apply_filters( 'electro_footer_address', true ) && ! empty( $footer_address ) ) : ?>

			<div class="footer-address">
				<strong class="footer-address-title"><?php echo esc_html( $footer_address_title ); ?></strong>
				<address><?php echo wp_kses_post( nl2br( $footer_address ) ); ?></address>
			</div>

		<?php endif;
	}
}

if ( ! function_exists( 'electro_footer_social_icons' ) ) {
	/**
	 * Displays social icons at the footer
	 */
	function electro_footer_social_icons() {
		$allowed_protocols  = wp_parse_args( array( 'whatsapp' ), wp_allowed_protocols() );
		$social_networks 		= apply_filters( 'electro_set_social_networks', electro_get_social_networks() );
		$social_links_output 	= '';
		$social_link_html		= apply_filters( 'electro_footer_social_link_html', '<a class="%1$s" target="_blank" href="%2$s"></a>' );

		foreach ( $social_networks as $social_network ) {
			if ( isset( $social_network[ 'link' ] ) && !empty( $social_network[ 'link' ] ) ) {
				$social_links_output .= sprintf( '<li>' . $social_link_html . '</li>', $social_network[ 'icon' ], $social_network[ 'link' ] );
			}
		}

		if ( apply_filters( 'electro_footer_social_icons', true ) && ! empty( $social_links_output ) ) {

			ob_start();
			?>
			<div class="footer-social-icons">
				<ul class="social-icons list-unstyled nav align-items-center">
					<?php echo wp_kses( $social_links_output, 'post', $allowed_protocols ); ?>
				</ul>
			</div>
			<?php
			echo apply_filters( 'electro_footer_social_links_html', ob_get_clean() );
		}
	}
}

if ( ! function_exists( 'electro_footer_bottom_widgets' ) ) {
	/**
	 * Displays Footer Bottom Widgets & Footer Contact Block
	 */
	function electro_footer_bottom_widgets() {
		$show_footer_bottom_widgets = apply_filters( 'electro_show_footer_bottom_widgets', true );
		$show_footer_contact_block  = apply_filters( 'electro_enable_footer_contact_block', true );

		if ( $show_footer_bottom_widgets || $show_footer_contact_block ) : ?>

		<div class="footer-bottom-widgets">
			<div class="container">
				<?php if ( $show_footer_contact_block ) : ?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-md-push-5">
					<?php electro_display_footer_bottom_widgets(); ?>
					</div>
					<div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
						<?php electro_footer_contact(); ?>
					</div>
				</div>
				<?php else : ?>
					<?php electro_display_footer_bottom_widgets(); ?>
				<?php endif; ?>
			</div>
		</div><?php

		endif;
	}
}

if ( ! function_exists( 'electro_display_footer_bottom_widgets' ) ) {
	/**
	 * Displays footer bottome widgets
	 */
	function electro_display_footer_bottom_widgets() {
		if ( apply_filters( 'electro_show_footer_bottom_widgets', true ) ) {
			if ( is_active_sidebar( 'footer-bottom-widgets' ) ) {
				dynamic_sidebar( 'footer-bottom-widgets' );
			} else {
				if ( apply_filters( 'electro_show_default_footer_bottom_widgets', true ) ) {
					$footer_bottom_widget_args = apply_filters( 'electro_footer_bottom_widget_args', array(
						'before_widget' => '<div class="columns col"><aside class="widget clearfix"><div class="body">',
						'after_widget'  => '</div></aside></div>',
						'before_title'  => '<h4 class="widget-title">',
						'after_title'   => '</h4>',
						'widget_id'     => '',
					) );
					do_action( 'electro_default_footer_bottom_widgets', $footer_bottom_widget_args );
				}
			}
		}
	}
}

if ( ! function_exists( 'electro_default_fb_widgets' ) ) {
	/**
	 * Displays default footer bottom widgets
	 */
	function electro_default_fb_widgets( $args ) {

		$args['widget_id'] = 'meta-footer';
		the_widget( 'WP_Widget_Meta', array( 'title' => '&nbsp;' ), $args );

		$args['widget_id'] = 'pages-widget-footer-bottom';
		the_widget( 'WP_Widget_Pages', array( 'title' => __( 'Customer Care', 'electro') ), $args );
	}
}


if ( ! function_exists( 'electro_copyright_bar' ) ) {
	/**
	 * Displays the copyright bar
	 */
	function electro_copyright_bar() {

		$website_title_with_url 	= sprintf( '<a href="%s">%s</a>', esc_url( home_url( '/' ) ), get_bloginfo( 'name' ) );
		$footer_copyright_text 		= apply_filters( 'electro_footer_copyright_text', sprintf( __( '&copy; %s - All Rights Reserved', 'electro' ), $website_title_with_url ) );
		$credit_card_icons 			= apply_filters( 'electro_footer_credit_card_icons', '' );

		if ( apply_filters( 'electro_enable_footer_credit_block', true ) ) : ?>

		<div class="copyright-bar">
			<div class="container">
				<div class="float-start pull-left flip copyright"><?php echo wp_kses_post( $footer_copyright_text ); ?></div>
				<div class="float-end pull-right flip payment"><?php echo wp_kses_post( $credit_card_icons ); ?></div>
			</div>
		</div><?php

		endif;
	}
}

if ( ! function_exists( 'electro_footer_brands_carousel' ) ) {
	/**
	 * Display brands carousel on footer
	 *
	 */
	function electro_footer_brands_carousel(){
		if( function_exists( 'electro_brands_carousel' ) && apply_filters( 'electro_footer_brands_carousel', true ) ) {
			$no_of_brands  = apply_filters( 'electro_footer_brands_number', 12 );

			$section_args  = apply_filters( 'ec_footer_bc_section_args', array() );
			$taxonomy_args = apply_filters( 'ec_footer_bc_taxonomy_args', array(
				'number'  => $no_of_brands
			) );
			$carousel_args = apply_filters( 'ec_footer_bc_carousel_args', array() );

			electro_brands_carousel( $section_args, $taxonomy_args, $carousel_args );
		}
	}
}

if ( ! function_exists( 'electro_handheld_footer_bar' ) ) {
	/**
	 * Display a menu intended for use on handheld devices
	 *
	 * @since 1.2.0
	 */
	function electro_handheld_footer_bar() {

		if ( apply_filters( 'electro_enable_handheld_footer_bar', false ) ) {
			if ( apply_filters( 'electro_use_menus_for_handheld_footer', false ) ) {

				wp_nav_menu(
					array(
						'theme_location'  => 'handheld-footer-nav',
						'container_class' => 'electro-handheld-footer-bar hidden-lg-up',
						'depth'           => 1,
					)
				);

			} else {
				$links = array(
					'my-account' => array(
						'priority' => 10,
						'callback' => 'electro_handheld_footer_bar_account_link',
					),
					'search'     => array(
						'priority' => 20,
						'callback' => 'electro_handheld_footer_bar_search',
					),
					'cart'       => array(
						'priority' => 30,
						'callback' => 'electro_handheld_footer_bar_cart_link',
					)
				);
				if ( ! function_exists( 'wc_get_page_id' ) || wc_get_page_id( 'myaccount' ) === -1 ) {
					unset( $links['my-account'] );
				}
				if ( ! function_exists( 'wc_get_page_id' ) || wc_get_page_id( 'cart' ) === -1 || electro_get_shop_catalog_mode() == true ) {
					unset( $links['cart'] );
				}

				if ( is_yith_wcwl_activated() ) {
					$links['wishlist'] = array(
						'priority' => 40,
						'callback' => 'electro_handheld_footer_bar_wishlist_link',
					);
				}

				if( is_yith_woocompare_activated() ) {
					$links['compare'] = array(
						'priority' => 50,
						'callback' => 'electro_handheld_footer_bar_compare_link',
					);
				}

				$links = apply_filters( 'electro_handheld_footer_bar_links', $links );
				?>
				<div class="electro-handheld-footer-bar hidden-lg-up">
					<ul class="columns-<?php echo count( $links ); ?>">
						<?php foreach ( $links as $key => $link ) : ?>
							<li class="<?php echo esc_attr( $key ); ?>">
								<?php
								if ( $link['callback'] ) {
									call_user_func( $link['callback'], $key, $link );
								}
								?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php
			}
		}
	}
}

if ( ! function_exists( 'electro_handheld_footer_bar_search' ) ) {
	/**
	 * The search callback function for the handheld footer bar
	 *
	 * @since 1.2.0
	 */
	function electro_handheld_footer_bar_search() {
		echo '<a href="">' . esc_attr__( 'Search', 'electro' ) . '</a>';
		if ( is_woocommerce_activated() ) {
			electro_product_search();
		} else {
			electro_blog_search();
		}
	}
}

if ( ! function_exists( 'electro_handheld_footer_bar_cart_link' ) ) {
	/**
	 * The cart callback function for the handheld footer bar
	 *
	 * @since 1.2.0
	 */
	function electro_handheld_footer_bar_cart_link() {
		$header_cart_icon = apply_filters( 'electro_header_cart_icon', 'ec ec-shopping-bag' );
		if ( is_woocommerce_activated() ) {
			$cart_link = '';

	        if( apply_filters( 'electro_off_canvas_cart', true ) ) {
	            $cart_link = '#off-canvas-cart-summary';
	        } else {
	            $cart_link = wc_get_cart_url();
	        }

			?>
			<a class="footer-cart-contents" href="<?php echo esc_url( $cart_link ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'electro' ); ?>">
				<i class="<?php echo esc_attr( $header_cart_icon ); ?>"></i>
				<span class="cart-items-count count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
			</a>
			<?php
		}
	}
}

if ( ! function_exists( 'electro_handheld_footer_bar_account_link' ) ) {
	/**
	 * The account callback function for the handheld footer bar
	 *
	 * @since 1.2.0
	 */
	function electro_handheld_footer_bar_account_link() {
		$header_user_icon = apply_filters( 'electro_header_user_account_icon', 'ec ec-user' );
		$my_account_page_url = '#';

		if ( function_exists( 'wc_get_page_id' ) ) {
			$my_account_page_url = wc_get_page_id( 'myaccount' );
		}
		if ( is_woocommerce_activated() ) {
			?><a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"><i class="<?php echo esc_attr( $header_user_icon ); ?>"></i></a><?php
		}
	}
}

if ( ! function_exists( 'electro_product_search' ) ) {
	/**
	 * Display Product Search
	 *
	 * @since  1.2.0
	 * @uses  is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function electro_product_search() {
		if ( is_woocommerce_activated() ) { ?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
		<?php
		}
	}
}

if ( ! function_exists( 'electro_blog_search' ) ) {
	function electro_blog_search() {
		?>
		<div class="site-search">
			<?php the_widget( 'WP_Widget_Search', 'title=' ); ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'electro_walk_handheld_footer_item_title' ) ) {
	function electro_walk_handheld_footer_item_title( $title, $item, $args, $depth ) {
		if ( 'handheld-footer-nav' !== $args->theme_location ) {
			return $title;
		}

		if ( $item->icon ) {
			$title = '<i class="' . esc_attr( $item->icon ) . '"></i>';

			if ( is_woocommerce_activated() ) {
				$cart_page_id     = wc_get_page_id( 'cart' );
				$wishlist_page_id = ( is_yith_wcwl_activated() && function_exists( 'electro_get_wishlist_page_id' ) ) ? electro_get_wishlist_page_id() : 0;
				$compare_page_id  = ( is_yith_woocompare_activated() && function_exists( 'electro_get_compare_page_id' ) ) ? electro_get_compare_page_id() : 0;
				$page_id          = get_post_meta( $item->ID, '_menu_item_object_id', true );

				if ( $page_id ) {
					switch( $page_id ) {
						case $cart_page_id:
							$title .= sprintf(
								'<span class="cart-items-count count">%s</span>',
								wp_kses_data( WC()->cart->get_cart_contents_count() )
							);
						break;
						case $wishlist_page_id:
							$wishlist_count = yith_wcwl_count_products();
							$title .= sprintf(
								'<span class="count wishlist-counter" data-wishlist-count="%s">%s</span>',
								$wishlist_count,
								$wishlist_count
							);
						break;
						case $compare_page_id:
							global $yith_woocompare;
							$compare_count = count( $yith_woocompare->obj->products_list );
							$title .= sprintf(
								'<span class="count compare-counter" data-compare-count="%s">%s</span>',
								$compare_count,
								$compare_count
							);
						break;
					}
				}
			}
		}

		return apply_filters( 'electro_walk_handheld_footer_item_title', $title, $item, $args, $depth );
	}
}

if ( ! function_exists( 'electro_walk_handheld_footer_start_el' ) ) {
	function electro_walk_handheld_footer_start_el( $item_output, $item, $depth, $args ) {
		if ( 'handheld-footer-nav' !== $args->theme_location ) {
			return $item_output;
		}

		if ( $item->icon ) {
			return $item_output;
		}
	}
}

if ( apply_filters( 'electro_use_menus_for_handheld_footer', false ) ) {
	add_filter( 'nav_menu_item_title',      'electro_walk_handheld_footer_item_title', 10, 4 );
	add_filter( 'walker_nav_menu_start_el', 'electro_walk_handheld_footer_start_el',   10, 4 );

	if ( apply_filters( 'electro_user_search_for_handheld_footer', false ) ) {

		add_filter( 'wp_nav_menu_items', 'ec_add_search_to_handheld_nav', 10, 2 );

		function ec_add_search_to_handheld_nav ( $items, $args ) {
		    if ( 'handheld-footer-nav' !== $args->theme_location ) {
		    	return $items;
		    }

		    ob_start();
		    electro_handheld_footer_bar_search();
		    $search_bar = ob_get_clean();

	        $items .= '<li class="search">' . $search_bar . '</li>';
		    return $items;
		}
	}
}

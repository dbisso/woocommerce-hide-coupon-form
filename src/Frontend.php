<?php
namespace DBisso\Plugin\WooCommerce\HideCouponForm;

use DBisso\Hooker\HookableInterface;

/**
 * Frontend functionality for the plugin.
 */
class Frontend implements HookableInterface {
	/**
	 * Config object.
	 *
	 * @var DBisso\Plugin\WooCommerce\HideCouponForm\Config
	 */
	private $config;

	public function __construct( Config $config ) {
		$this->config = $config;
	}

	public function filter_woocommerce_coupons_enabled( $enabled ) {
		if ( ( is_cart() || is_checkout() ) && ( $cart = WC()->cart ) ) {
			foreach ( $cart->get_coupons() as $code => $coupon ) {
				// If any coupon has asked to hide the coupon form then return false.
				// Otherwise carry on…
				if ( get_post_meta( $coupon->id, $this->config->hide_form_meta_key, true ) === 'yes' ) {
					return false;
				}
			}
		}

		return $enabled;
	}
}
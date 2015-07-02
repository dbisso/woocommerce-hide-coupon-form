<?php
namespace DBisso\Plugin\WooCommerce\HideCouponForm;

use DBisso\Hooker\HookableInterface;

/**
 * Frontend functionality for the plugin.
 */
class Frontend implements HookableInterface {
	const META_KEY = '_dbisso_hide_coupon_form';

	public function filter_woocommerce_coupons_enabled( $enabled ) {
		if ( ( is_cart() || is_checkout() ) && ( $cart = WC()->cart ) ) {
			foreach ( $cart->get_coupons() as $code => $coupon ) {
				// If any coupon has asked to hide the coupon form then return false.
				// Otherwise carry on…
				if ( get_post_meta( $coupon->id, self::META_KEY, true ) === 'yes' ) {
					return false;
				}
			}
		}
		return $enabled;
	}
}
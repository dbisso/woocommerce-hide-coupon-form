=== WooCommerce Hide Coupon Form ===
Contributors: dbisso
Tags: woocommerce, coupon, hide form
Requires at least: 4.2.2
Tested up to: 4.2.2
Stable tag: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add option to hide the add coupon form on the WooCommerce cart and checkout pages

== Description ==

*** REQUIRES AT LEAST PHP 5.3 ***

This plugin simply adds an option to the coupon edit screen to hide the 'add coupon' form on the WooCommerce cart
and checkout pages when a particular coupon is applied. Useful in combination with the 'Individual use only' option
to prevent users from accidentally trying to add multiple coupons to the cart.

Requires WooCommerce to be activate, naturally.


== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to WooCommerce > Coupons and edit a coupon.
   Under the 'General' settings tab there should be a checkbox labeled 'Hide coupon form when applied'.
   Tick it to hide the form whenever the current coupon is applied to the cart.

== Changelog ==

= 0.1.0 =
* Initial release
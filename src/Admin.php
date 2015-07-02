<?php
namespace DBisso\Plugin\WooCommerce\HideCouponForm;

use DBisso\Hooker\HookableInterface;

/**
 * Frontend functionality for the plugin.
 */
class Admin implements HookableInterface {
	/**
	 * Config object.
	 *
	 * @var DBisso\Plugin\WooCommerce\HideCouponForm\Config
	 */
	private $config;

	public function __construct( Config $config ) {
		$this->config = $config;
	}

	/**
	 * Add our custom checkbox to the coupon Usage Restriction tab
	 */
	public function action_woocommerce_coupon_options() {
		?>
		<div class="options_group">
			<?php woocommerce_wp_checkbox( array(
				'id'          => $this->config->hide_form_meta_key,
				'label'       => __( 'Hide coupon form when applied' , 'dbisso-woocommerce-hide-coupon-form' ),
				'description' => __( 'Check this option if you wish to hide the coupon form on the cart and checkout pages when this coupon is applied to the cart.', 'dbisso-woocommerce-hide-coupon-form' ),
				'desc_tip'    => true,
			) ); ?>
		</div><?php
	}

	/**
	 * Save our custom coupon data
	 */
	public static function action_woocommerce_coupon_options_save( $post_id = null ) {
		if ( ! check_admin_referer( 'woocommerce_save_data', 'woocommerce_meta_nonce' ) ) {
			return;
		}

		$hide_form = isset( $_POST[ $this->config->hide_form_meta_key ] ) ? 'yes' : 'no';

		update_post_meta( $post_id, $this->config->hide_form_meta_key, $hide_form );
	}
}
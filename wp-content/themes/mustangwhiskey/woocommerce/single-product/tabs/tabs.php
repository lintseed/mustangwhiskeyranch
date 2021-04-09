<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
	
 
	<div class="product-view accordion">
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="section--<?php echo esc_attr( $key ); ?> panel entry-content" id="tab-<?php echo esc_attr( $key ); ?>" aria-labelledby="title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

	<?php
		global $product;
		$price = $product->get_price();
		$baleQty = $price / 13.00;
		echo '<p class="mt-5"><img src="/wp-content/uploads/2021/03/haybale.png" class="pull-left float-left mt-3 mr-4 mb-2" width="32">This purchase supplies approximately '.number_format($baleQty, 1).' bales of hay<br><small>(Our herd consumes 1.5 bales per day on average)</small></p>';

		echo '<p class="small mb-0"><em>* All sales are final.</em></p>';
	?>

<?php endif; ?>

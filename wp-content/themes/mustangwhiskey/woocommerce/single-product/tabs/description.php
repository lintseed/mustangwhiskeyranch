<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

function empty_content($str) {
  return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}

?>

<?php if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

<?php
	if (function_exists('empty_content') && empty_content($post->post_content)) {
		echo '<p>Details coming soon...</p>';
	} else {
		the_content();
	}


	global $product;
	$price = $product->get_price();
	$baleQty = $price / 13.00;
	echo '<p class="small"><em>This purchase supplies approximately '.number_format($baleQty, 1).' bales of hay<br><small>(Our herd consumes one bale per day on average)</small></em></p>';

?>

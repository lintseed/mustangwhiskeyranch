<?php
/**
 * Additional Information tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/additional-information.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$prodId = get_the_id();
$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional information', 'woocommerce' ) );

$terms = get_the_terms( $prodId , 'pa_model' );
if ( $terms != null ) {
	foreach( $terms as $term ) {
		$modelDescription = $term->description;
	}
}
// 
// $terms = get_terms("pa_model");
// foreach ( $terms as $term ) {
// 	$modelDescription = $term->description;
// }

?>

<?php if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

	<h5 class="size-fit">Details + fit</h5>
	<div class="additional" style="display: none;">
		<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
	
		<?php if (isset($modelDescription)) {
			echo '<p class="small mt-4 mb-3	"><em>'.$modelDescription.'</p></em>';
		} ?>
		
		<?php if (has_term( 'clothing', 'product_cat', get_the_id() )) { ?>
			<p class="small mt-0 mb-0"><em>All measurements are taken flat, please double when needed. We suggest measuring a similar fitting item of your own to reference.</em></p>
		<?php } ?>
		
	</div>
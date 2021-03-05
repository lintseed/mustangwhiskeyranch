<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_share' ); // Sharing plugins can hook into here.
?>

  <div class="pt-2 mt-2 text-left text-large large"><br>
      <a target="_blank" rel="tooltip"
         data-original-title="Share on Facebook"
         class="text-gray"
         href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>">
				 <i class="obfx-menu-icon fa fa-facebook"></i>
      </a>
			&nbsp;&nbsp;
      <a target="_blank" rel="tooltip"
         data-original-title="Share on Twitter"
         class="text-gray"
         href="http://twitter.com/share?url=<?php echo get_the_permalink(); ?>">
				 <i class="obfx-menu-icon fa fa-twitter"></i>
      </a>
			&nbsp;&nbsp;
      <a rel="tooltip"
         data-original-title="Share to Pinterest"
         class="text-gray"
         href="http://pinterest.com/pin/create/link/?url=<?php echo get_the_permalink(); ?>">
				 <i class="obfx-menu-icon fa fa-pinterest"></i>
      </a>
  </div>

<?php
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! $product_attributes ) {
	return;
}
?>
<div class="woocommerce-product-attributes shop_attributes grid grid-2 grid-gap-1 mt-3">
    <div class="btn zeromargin flex flex-space-between woocommerce-product-attributes-item">Kiszerelés: <span><?php the_field('kiszereles'); ?>ml</span></div>
    <div class="btn zeromargin flex flex-space-between woocommerce-product-attributes-item">Termék/karton: <span><?php the_field('termekkarton'); ?></span></div>
    <div class="btn zeromargin flex flex-space-between woocommerce-product-attributes-item">Termék/raklap: <span><?php the_field('termekraklap'); ?></span></div>
	<!-- <?php // foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
		<div class="btn woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php // echo esc_attr( $product_attribute_key ); ?>">
			<div class="woocommerce-product-attributes-item__label"><?php // echo wp_kses_post( $product_attribute['label'] ); ?></div>
			<div class="woocommerce-product-attributes-item__value"><?php // echo wp_kses_post( $product_attribute['value'] ); ?></div>
        </div>
	<?php // endforeach; ?> -->
</div>
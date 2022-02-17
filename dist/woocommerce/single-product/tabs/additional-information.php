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

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional information', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

<div class="flex">
	<div class="btn btn-dark" onclick="openTab('description')">Leírás</div>
	<div class="btn ml-1" onclick="openTab('specs')">Specifikáció</div>
</div>
<div class="tabs">
	<div class="tab" id="description">
		<?php the_content(); ?>
	</div>
	<div class="tab" id="specs" style="display: none">
		<p>Kiszerelés: <?php the_field('kiszereles'); ?>ml</p>
		<p>Termék/karton: <?php the_field('termekkarton'); ?></p>
		<p>Termék/raklap: <?php the_field('termekraklap'); ?></p>
	</div>
</div>

<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2 class="mb-1 border-top"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

		<div class="grid grid-2 grid-gap-2 my-4">
			<div class="card">
				<a href="<?php echo get_home_url(); ?>/termekkategoria/haztartasi-termekek/">
					<img src="<?php bloginfo('template_url') ?>/assets/img/haztartasi.jpg" alt="Háztartási termékek">
					<div class="btn">Háztartási termékek</div>
				</a>
			</div>
			<div class="card">
				<a href="<?php echo get_home_url(); ?>/termekkategoria/ipari-tisztitoszerek/">
					<img src="<?php bloginfo('template_url') ?>/assets/img/ipari.jpg" alt="Ipari termékek">
					<div class="btn">Ipari termékek</div>
				</a>
			</div>
		</div>

	</section>
	<?php
endif;

wp_reset_postdata();
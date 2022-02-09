<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
$attachment_ids = $product->get_gallery_image_ids();

// if ( $attachment_ids && $product->get_image_id() ) {
// 	foreach ( $attachment_ids as $attachment_id ) {
// 		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
// 	}
// }

?>
<div class="swiper mb-1" id="productSwiper">
    <div class="swiper-wrapper">
		<?php
            foreach($attachment_ids as $attachment_id) {
                $image_url = wp_get_attachment_url($attachment_id);
                ?>
                <div class="swiper-slide">
                    <a class="" data-fancybox="gallery" href="<?php echo $image_url; ?>" style="background: url(<?php echo $image_url; ?>) center no-repeat;background-size:cover;">
                        <img src="<?php echo $image_url; ?>" alt="gallery" class="product-image">
                    </a>
                </div>
            <?php }
        ?>
	</div>
	<div class="swiper-pagination"></div>
	<!-- <div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div> -->
</div>
<div class="swiper" id="productThumbnailSwiper">
	<div class="swiper-wrapper">
		<?php
            foreach($attachment_ids as $attachment_id) {
                $image_url = wp_get_attachment_url($attachment_id);
                ?>
                <div class="swiper-slide thumbnail-slide">
                    <img src="<?php echo $image_url; ?>" alt="gallery" class="product-image">
                </div>
            <?php }
        ?>
	</div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper("#productThumbnailSwiper", {
		spaceBetween: 10,
		slidesPerView: 3,
		freeMode: true,
		watchSlidesProgress: true,
	});
	var swiper2 = new Swiper("#productSwiper", {
		spaceBetween: 10,
		// navigation: {
		// 	nextEl: ".swiper-button-next",
		// 	prevEl: ".swiper-button-prev",
		// },
		pagination: {
        	el: ".swiper-pagination",
        },
		thumbs: {
			swiper: swiper,
		},
	});
</script>
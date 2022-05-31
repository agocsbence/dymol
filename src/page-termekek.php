<?php
/* Template Name: Termékek */
get_header();

$hazt_id = 16;
$hazt_thumbnail_id = get_woocommerce_term_meta( $hazt_id, 'thumbnail_id', true );
$haztartasi = wp_get_attachment_url( $hazt_thumbnail_id );
$ipari_id = 28;
$ipari_thumbnail_id = get_woocommerce_term_meta( $ipari_id, 'thumbnail_id', true );
$ipari = wp_get_attachment_url( $ipari_thumbnail_id );

?>

<section class="py-4">
	<div class="container">
		<div class="grid grid-2 grid-gap-2 border-top container">
			<div class="card">
				<h2 class="section-title mb-2">Háztartási termékek</h2>

				<img src="<?php echo $haztartasi; ?>" alt="Háztartási termékek">
				<div class="flex flex-wrap">
					<?php
						$taxonomy = 'product_cat';
						$terms    = get_terms([
							'taxonomy'    => $taxonomy,
							'hide_empty'  => true,
							'parent'      => 16
						]);

						foreach ( $terms as $term ) {
							$term_link = get_term_link( $term, $taxonomy );
							echo '<a class="btn btn-list '. $term->slug .'" href="'. $term_link .'">'. $term->name .'</a>';
						}
					?>
				</div>
			</div>
			<div class="card">
				<h2 class="section-title mb-2">Ipari termékek</h2>
				<img src="<?php echo $ipari; ?>" alt="Ipari termékek">
				<div class="flex flex-wrap">
					<?php
						$taxonomy = 'product_cat';
						$terms    = get_terms([
							'taxonomy'    => $taxonomy,
							'hide_empty'  => true,
							'parent'      => 28
						]);

						foreach ( $terms as $term ) {
							$term_link = get_term_link( $term, $taxonomy );
							echo '<a class="btn btn-list '. $term->slug .'" href="'. $term_link .'">'. $term->name .'</a>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
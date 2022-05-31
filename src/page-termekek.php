<?php
/* Template Name: Termékek */
get_header();
?>

<section class="py-4">
	<div class="container">
		<div class="grid grid-2 grid-gap-2 border-top">
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
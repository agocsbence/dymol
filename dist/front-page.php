<?php
/*

Template Name: Main Page

*/

get_header();

$hazt_id = 16;
$hazt_thumbnail_id = get_woocommerce_term_meta( $hazt_id, 'thumbnail_id', true );
$haztartasi = wp_get_attachment_url( $hazt_thumbnail_id );
$ipari_id = 28;
$ipari_thumbnail_id = get_woocommerce_term_meta( $ipari_id, 'thumbnail_id', true );
$ipari = wp_get_attachment_url( $ipari_thumbnail_id );

// include get_theme_file_path( '/includes/landing-slider.php' );
?>

<section id="home-hero" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/hero.jpg');">
	<img src="<?php bloginfo('template_url') ?>/assets/img/bigtext.png" alt="Dymol text logo" id="bigText">
</section>
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
<section class="py-4">
	<div class="container border-top">
		<h2 class="section-title">Új termékek</h2>
		<div class="grid grid-3 grid-gap-1 py-2">
			<!-- loop here -->
			<?php
			
			$loop = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 3) );
			
			if ( $loop->have_posts() ) :
				while ( $loop->have_posts() ) : $loop->the_post();
				global $product;
				$id = get_the_ID();
            	$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

					<div class="card">
						<a href="<?php echo get_permalink(); ?>">
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
							<div class="product-details">
								<div class="product-data">
									<div class="btn product-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></div>
									<br>
									<div class="btn product-price"><?php echo $product->get_price_html(); ?></div>
									<div class="product-variants">
										<?php $colors = get_field('szinek');
										if ($colors) {
											foreach ($colors as $color) { ?>
												<div class="variant" style="background-color: <?php echo $color['szin']; ?>;"></div>
											<? }
										}?>
									</div>
								</div>
							</div>
						</a>
					</div>

				<?php 
				endwhile;
			endif;
			wp_reset_postdata();
			?>

			<!-- end of loop -->
		</div>
	</div>
</section> 

<section class="py-4">
	<div class="container border-top">
		<h2 class="section-title">Kiemelt termékek</h2>
		<div class="grid grid-3 grid-gap-1 py-2">
			<!-- loop here -->
			<?php
			
			$loop = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_tag' => 'kiemelt') );
			
			if ( $loop->have_posts() ) :
				while ( $loop->have_posts() ) : $loop->the_post();
				global $product;
				$id = get_the_ID();
            	$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

					<div class="card">
						<a href="<?php echo get_permalink(); ?>">
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
							<div class="product-details">
								<div class="product-data">
									<div class="btn product-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></div>
									<br>
									<div class="btn product-price"><?php echo $product->get_price_html(); ?></div>
									<div class="product-variants">
										<?php $colors = get_field('szinek');
										if ($colors) {
											foreach ($colors as $color) { ?>
												<div class="variant" style="background-color: <?php echo $color['szin']; ?>;"></div>
											<? }
										}?>
									</div>
								</div>
							</div>
						</a>
					</div>

				<?php 
				endwhile;
			endif;
			wp_reset_postdata();
			?>

			<!-- end of loop -->
		</div>
	</div>
</section>

<?php get_footer(); ?>

<?php
/*

Template Name: Main Page

*/

get_header();

// include get_theme_file_path( '/includes/landing-slider.php' );
?>

<section id="home-hero" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/hero.jpg');">
	<img src="<?php bloginfo('template_url') ?>/assets/img/bigtext.png" alt="Dymol text logo" id="bigText">
</section>
<section class="py-4">
	<div class="container">
		<div class="grid grid-2 grid-gap-2">
			<div class="card">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/assets/img/haztartasi.jpg" alt="Háztartási termékek">
					<div class="btn">Háztartási termékek</div>
				</a>
			</div>
			<div class="card">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/assets/img/ipari.jpg" alt="Ipari termékek">
					<div class="btn">Ipari termékek</div>
				</a>
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
				$title = get_the_title();
            	$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

					<div class="card">
						<a href="<?php echo get_permalink(); ?>">
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
							<div class="product-details">
								<div class="product-data">
									<div class="btn product-title"><?php echo substr($title, 0, 24); ?></div>
									<br>
									<div class="btn product-price"><?php echo $product->get_price_html(); ?></div>
									<div class="product-variants">
										<div class="variant" style="background-color: #FEDE17;"></div>
										<div class="variant" style="background-color: #52D3DB;"></div>
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
			<div class="card">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/assets/img/termek-3.png" alt="Dymosept">
					<div class="product-details grid grid-2 grid-gap-1">
						<div class="product-data">
							<div class="btn product-title">Zum dishwasher</div>
							<div class="btn product-price">8888Ft</div>
						</div>
						<div class="product-variants">
							<div class="variant" style="background-color: #FEDE17;"></div>
							<div class="variant" style="background-color: #52D3DB;"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/assets/img/termek-4.png" alt="Zum kitchen">
					<div class="product-details grid grid-2 grid-gap-1">
						<div class="product-data">
							<div class="btn product-title">Zum dishwasher</div>
							<div class="btn product-price">8888Ft</div>
						</div>
						<div class="product-variants">
							<div class="variant" style="background-color: #84B25D;"></div>
							<div class="variant" style="background-color: #BC3F39;"></div>
							<div class="variant" style="background-color: #FE7817;"></div>
							<div class="variant" style="background-color: #6552DB;"></div>
							<div class="variant" style="background-color: #426E54;"></div>
							<div class="variant" style="background-color: #FEDE17;"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/assets/img/termek-4.png" alt="Zum dishwasher">
					<div class="product-details grid grid-2 grid-gap-1">
						<div class="product-data">
							<div class="btn product-title">Zum dishwasher</div>
							<div class="btn btn-disabled product-discount-price">8888Ft</div>
							<div class="btn product-price">8888Ft</div>
						</div>
						<div class="product-variants">
							<div class="variant" style="background-color: #84B25D;"></div>
							<div class="variant" style="background-color: #BC3F39;"></div>
							<div class="variant" style="background-color: #FE7817;"></div>
							<div class="variant" style="background-color: #6552DB;"></div>
							<div class="variant" style="background-color: #426E54;"></div>
							<div class="variant" style="background-color: #FEDE17;"></div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

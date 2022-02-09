<?php
/*

Template Name: Main Page

*/

get_header();

// include get_theme_file_path( '/includes/landing-slider.php' );
?>

<section id="home-hero">
	<div class="container">
		<h1 class="mb-2">Ha kendered van, mindened van!</h1>
		<div class="grid grid--home-tiles">
			<?php $src_termekek = wp_get_attachment_image_src( get_post_thumbnail_id(8), 'full', false ); ?>
			<a href="<?php echo get_home_url(); ?>/termekek" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php echo $src_termekek[0] ?>');">
				<div class="content">
					<div class="content-inside">
						<h2>Termékek</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/tudastar" class="grid-tile bg--color bg--color-orange">
				<div class="content">
					<div class="content-inside">
						<h2>Tudástár</h2>
					</div>
				</div>
			</a>
			<?php $src_szolg = wp_get_attachment_image_src( get_post_thumbnail_id(51), 'full', false ); ?>
			<a href="<?php echo get_home_url(); ?>/kenderlanc-szolgaltatasok" class="grid-tile bg--image" style="background-image: url('<?php echo $src_szolg[0] ?>');">
				<div class="content">
					<div class="content-inside">
						<h2>Szolgáltatások</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/magazin" id="grid-extra" class="grid-tile bg--color-green1 text-dark">
				<div class="content">
					<div class="content-inside">
						<h2>Magazin</h2>
					</div>
				</div>
			</a>
			<?php // $src_partnerek = wp_get_attachment_image_src( get_post_thumbnail_id(244), 'full', false ); ?>
			<!-- <a href="<?php // echo get_home_url(); ?>/partnerek" class="grid-tile bg--image" style="background-image: url('<?php // echo $src_partnerek[0] ?>');">
				<div class="content">
					<div class="content-inside">
						<h2>Partnerek</h2>
					</div>
				</div>
			</a> -->
			<a href="<?php echo get_home_url(); ?>/lexikon" class="grid-tile bg--color bg--color-green">
				<div class="content">
					<div class="content-inside">
						<h2>Lexikon</h2>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>

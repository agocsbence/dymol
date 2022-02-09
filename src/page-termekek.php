<?php
/* Template Name: Termékek */
get_header();
?>

<section class="container py-3">
    <h1 class="mb-1">Termékek</h1>
    <div class="grid grid-4 grid-gap-1">
        <?php  
            $args = array(
                'post_type' => 'product'
            );

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product; ?>
                
                <a href="<?php echo get_permalink(); ?>" class="product-tile">
                    <img src="<?php echo woocommerce_get_product_thumbnail(); ?>" alt="Termék neve" class="product-image">
                    <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                    <p class="product-price"><?php $product->get_price(); ?></p>
                </a>
                
            <?php endwhile;

            wp_reset_query();
        ?>
    </div>
</section>

<?php get_footer(); ?>
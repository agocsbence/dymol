<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase"><?php printf( __( 'Keresés: %s', 'dymol' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="Keresés..." value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="search-submit btn"><?php _e('Keresés', 'dymol'); ?></button>
            </form>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <h2 class="mb-2 border-top"><?php _e('Termékek', 'dymol'); ?></h2>
            <div class="grid grid-4 grid-gap-1 mb-3">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ($post->post_type == 'product') { ?>
                        <?php $id = get_the_ID(); ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

                            <div class="card">
                                <a href="<?php echo get_permalink(); ?>">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                    <div class="product-details">
                                        <div class="product-data">
                                            <div class="btn product-title"><?php echo mb_strimwidth(get_the_title(), 0, 18, '...'); ?></div>
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
                    <?php } ?>

                <?php endwhile; ?>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
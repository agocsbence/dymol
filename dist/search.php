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
                <button type="submit" class="search-submit btn">Keresés</button>
            </form>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <h2 class="mb-2">Termékek</h2>
            <div class="grid grid-4 grid-gap-1">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ($post->post_type == 'product') { ?>
                        <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                            <?php echo woocommerce_get_product_thumbnail(); ?>
                            <h4 class="name"><?php echo get_the_title(); ?></h4>
                            <?php
                            // $post_type = get_post_type( $post->ID );
                            // echo $post_type;
                            ?>
                        </a>
                    <?php } ?>

                <?php endwhile; ?>
            </div>
            <hr>
            <h2 class="mb-2">Cikkek</h2>
            <div class="grid grid-4 grid-gap-1">
                <?php rewind_posts(); ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ($post->post_type == 'post') { ?>
                        <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                            <h4 class="name"><?php echo get_the_title(); ?></h4>
                        </a>
                    <?php } ?>

                <?php endwhile; ?> 
            </div>

            <?php else : ?>

            <div id="no-result">
                <div class="flex flex-row flex-row-start flex-space-between flex-m-column">
                    <div class="text-content">
                        <h1 class="lead mb-2">Nincs találat!</h1>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
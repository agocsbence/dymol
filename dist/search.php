<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<section class="container py-3">
    <h1 class="page-title mb-1"><?php printf( __( 'Keresés: %s', 'kenderlanc' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</section>

<section id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

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

                <?php if ($post->post_type == 'kenderlanc_cikkek') { ?>
                    <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                        <h4 class="name"><?php echo get_the_title(); ?></h4>
                    </a>
                <?php } ?>

            <?php endwhile; ?> 
        </div>
        <hr>
        <h2 class="mb-2">Lexikon</h2>
        <div class="grid grid-4 grid-gap-1">
            <?php rewind_posts(); ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php if ($post->post_type == 'post') { ?>
                    <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                        <h4 class="name"><?php echo get_the_title(); ?></h4>
                    </a>
                <?php } ?>

            <?php endwhile; ?> 
        </div>
        <hr>
        <h2 class="mb-2">Tudástár</h2>
        <div class="grid grid-4 grid-gap-1">
            <?php rewind_posts(); ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php if ($post->post_type == 'akademia_cikkek') { ?>
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
                <div class="image-content mb-2">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/no-result.png" alt="Nincs eredmény">
                </div>
            </div>
        </div>

    <?php endif; ?>

    </div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_footer(); ?>
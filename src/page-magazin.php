<?php

/* Template Name: Magazin */

get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid grid--home-tiles">
        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'kenderlanc_cikkek', 'posts_per_page' => 1 ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

                <a href="<?php echo get_permalink(); ?>" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php echo $image[0]; ?>');">
                    <div class="content">
                        <div class="content-inside">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </a>

            <?php 
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!-- end of loop -->

        <a href="<?php echo get_home_url(); ?>/tudastar" class="grid-tile bg--color bg--color-green1">
            <div class="content">
                <div class="content-inside">
                    <h2>Tudástár</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/lexikon" class="grid-tile bg--color bg--color-orange">
            <div class="content">
                <div class="content-inside">
                    <h2>Ipari Kender Lexikon</h2>
                </div>
            </div>
        </a>
        <?php $src_kender = wp_get_attachment_image_src( get_post_thumbnail_id(271), 'full', false ); ?>
        <a href="<?php echo get_home_url(); ?>/kenderlanc" class="grid-tile bg--image" style="background-image: url('<?php echo $src_kender[0]; ?>');">
            <div class="content">
                <div class="content-inside">
                    <h2>Cikkek</h2>
                </div>
            </div>
        </a>
    </div>
</div>

<?php get_footer();
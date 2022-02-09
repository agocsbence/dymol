<?php

/* Template Name: Szolgáltatások */

get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid grid--home-tiles">
        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'szolgaltatas', 'posts_per_page' => 1 ) );
        
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

        <!-- loop here for the smaller tiles -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'szolgaltatas', 'offset' => 1 ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

            <?php if($image) { ?>

                <a href="<?php echo get_permalink(); ?>" class="grid-tile bg--image" style="background-image: url('<?php echo $image[0]; ?>');">
                    <div class="content">
                        <div class="content-inside">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </a>

            <?php } else { ?>

                <a href="<?php echo get_permalink(); ?>" class="grid-tile bg--color" style="background-color: <?php the_field('csempe_szine'); ?>">
                    <div class="content">
                        <div class="content-inside">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </a>

            <?php 
            }
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!-- end of loop -->
    </div>
</div>

<?php get_footer();
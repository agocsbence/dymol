<?php
/* Template Name: Kenderlánc */
get_header();
?>

<section class="container py-3">
    <h1 class="mb-1"><?php the_title(); ?></h1>
    <div class="grid grid--home-tiles">
        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'kenderlanc_cikkek') );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>

                <a href="<?php echo get_permalink(); ?>" class="grid-tile title-top bg--image" style="background-image: url('<?php echo $image[0]; ?>');">
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
    </div>
</section>

<?php get_footer(); ?>
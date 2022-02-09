<?php

/* Template Name: Partnerek */

get_header(); ?>

<section class="container py-3 m-py-1">
    <h1 class="mb-3"><?php the_title(); ?></h1>
    <div class="accordion-wrapper" id="partnerek-accordion">

        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'partnerek' ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $tags = wp_get_post_tags($id);?>
                <div class="accordion
                    <?php //add specified classes for filtering
                    echo 'partner-id-'.$id.' ';
                    foreach ( $tags as $tag ) {
                        echo $tag->slug.' ';
                    } 
                    ?>">
                    <div class="accordion-header">
                        <h1><?php the_title(); ?></h1>
                        <div class="accordion-arrow">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/accordion.svg" alt="Megtekint">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!-- end of loop -->
    </div>
</section>
<div class="container">
    <div class="my-4 text-center partnerek-logo flex flex-row flex-row-center flex-justify-center flex-wrap">
        <!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/partnerek.png" alt="Kenderlánc partnerek"> -->
        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'partnerek' ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); ?>
                <?php if ($image) { ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                <?php } ?>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!-- end of loop -->
    </div>
</div>
<script src="<?php bloginfo('template_url') ?>/assets/js/accordion.js"></script>

<?php get_footer();
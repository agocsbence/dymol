<?php

/* Template Name: Tudástár */

get_header(); ?>

<section class="container py-3">
    <h1 class="mb-1"><?php the_title(); ?></h1>
    <div class="filter-wrapper mb-2" id="productFilter">
        <div class="filter-header" id="toggleFilter">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/filter.svg" alt="Szűrés">
        </div>

        <?php $tags = get_tags(array( 'hide_empty' => false ));?>

        <form class="controls" action="">
            <fieldset class="filter-content" data-filter-group>
                <?php 
                foreach ($tags as $tag) { ?>
                    <div class="filter checkbox">
                        <label class="checkbox-label" for="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></label>
                        <input type="checkbox" name="<?php echo $tag->slug; ?>" value="<?php echo '.' . $tag->slug; ?>">
                    </div>
                <?php } ?>
            </fieldset>
        </form>
    </div>
    <div class="accordion-wrapper">

        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'akademia_cikkek' ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $tags = wp_get_post_tags($id);?>
                <div class="accordion mix
                    <?php //add specified classes for filtering
                    echo 'akademia-id-'.$id.' ';
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
                        <?php if (get_field('csatolmany')) { ?>
                            <div class="attachment-block">
                                <a href="<?php the_field('csatolmany'); ?>" download><h3>Teljes anyag letöltése</h3></a>
                                <a href="<?php the_field('csatolmany'); ?>" target="blank"><h3>Teljes anyag megtekintése</h3></a>
                            </div>
                        <?php } ?>
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

<script src="<?php bloginfo('template_url') ?>/assets/js/mixitup.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/mixitup-multifilter.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/filter.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/accordion.js"></script>

<?php get_footer();
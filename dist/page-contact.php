<?php
/* Template Name: Kapcsolat */
get_header();
?>

<section class="container single-text-content">
    <h1 class="mb-3"><?php the_title(); ?></h1>
    <div class="grid grid-2">
        <div class="text-block">
            <?php the_field('bal_hasab'); ?>
        </div>
        <div class="text-block">
            <?php the_field('jobb_hasab'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
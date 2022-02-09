<?php get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid ">
        <div class="text-block">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer();
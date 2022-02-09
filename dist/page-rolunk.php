<?php

/* Template Name: Rólunk */

get_header(); ?>

<div class="container">
    <h1 class="mb-2">Kenderlánc</h1>
    <div class="container">
        <div class="rolunk-lead">
            <?php the_field('bevezeto_szoveg'); ?>
        </div>
    </div>
    <div class="team-wrapper my-4">
        <?php if( have_rows('csapat') ):
                while( have_rows('csapat') ) : the_row(); ?>

                    <?php $sub_value = get_sub_field('sub_field');?>
                    <div class="team-member mt-4">
                        <h2><?php the_sub_field('nev'); ?></h2>
                        <img src="<?php the_sub_field('kep'); ?>" alt="<?php the_sub_field('nev'); ?>">
                        <div class="member-description">
                            <?php the_sub_field('bemutatkozas'); ?>
                        </div>
                    </div>

                <?php endwhile;?>
            <?php else :?>
        <?php endif; ?>
    </div>
    <div class="rolunk-team mb-4">
        <h2>Cégünk</h2>
        <div class="member-description">
            <?php the_field('cegunk'); ?>
        </div>
    </div>
</div>

<?php get_footer();
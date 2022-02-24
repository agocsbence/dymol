<?php

/* Template Name: Bérgyártás */

get_header(); ?>

<section id="home-hero" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/bergyartas.jpg');">
	<img src="<?php bloginfo('template_url') ?>/assets/img/bigtext.png" alt="Dymol text logo" id="bigText">
</section>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="round-bordered flex flex-column flex-row-center mt-4">
            <div class="grid grid-2 grid-gap-2">
                <div class="textbox">
                    <p><?php the_field('szoveg_bal'); ?></p>
                </div>
                <div class="textbox">
                    <p><?php the_field('szoveg_jobb'); ?></p>
                </div>
            </div>
            <div class="container">
                <img src="<?php bloginfo('template_url') ?>/assets/img/markak.png" alt="Márkák">
            </div>
        </div>
    </div>
</section>

<?php get_footer();
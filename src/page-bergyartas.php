<?php

/* Template Name: Bérgyártás */

get_header(); ?>

<section id="home-hero" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/bergyartas.jpg');">
	<img src="<?php bloginfo('template_url') ?>/assets/img/bigtext.png" alt="Dymol text logo" id="bigText">
</section>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="bordered flex flex-column flex-row-center">
            <div class="grid grid-2">
                <div class="textbox">
                    <p>Amennyiben szeretne saját termékkört létrehozni, mi szívesen segítünk a megvalósításában a tervezéstől egészen a késztermék legyártásáig. Szabad kapacitásunk és szakmailag felkészült munkatársaink segítségével jelenleg is több cégnek gyártunk ilyen jellegű termékeket és termékcsoportokat háztartás-vegyi és kozmetikai termékkörön belül.</p>
                </div>
                <div class="textbox">
                    <p>Ezzel kapcsolatos kérdéseivel kapcsolatban keressen Bennünket a 06-70-205-3111-es telefonszámon.</p>
                </div>
            </div>
            <img src="<?php bloginfo('template_url') ?>/assets/img/markak.png" alt="Márkák">
        </div>
    </div>
</section>

<?php get_footer();
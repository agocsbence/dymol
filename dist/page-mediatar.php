<?php

/* Template Name: Médiatár */

get_header(); ?>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase"><?php _e('Katalógus', 'dymol'); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <div class="grid grid-4 grid-gap-2">
                <?php
                
                $katalogusok = get_field('katalogus');
                if ($katalogusok) {
                    foreach($katalogusok as $katalogus) {
                        echo "<a href=". $katalogus['katalogus_fajl'] ." target='blank'><img src=". $katalogus['kep']['url'] ." class='bordered' alt='Dymol katalógus'></a>";
                    }
                }

                ?>
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase"><?php _e('Képgaléria', 'dymol'); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <div class="accordion-wrapper">
                <div class="accordion">
                    <div class="accordion-header">
                        <h1>Tisztashow kiállítás</h1>
                        <span>2016</span>
                        <span>+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="text-block">
                            <p>lorem</p>
                            <p>ipsum</p>
                            <p>dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
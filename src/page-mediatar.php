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
                <?php
                $mediatar = get_field('mediatar');
                if ($mediatar) {
                    foreach($mediatar as $galeria) { ?>

                        <div class="accordion mb-1">
                            <div class="accordion-header">
                                <h1><?php echo $galeria['galeria_cim'] ?></h1>
                                <span><?php echo $galeria['galeria_evszam'] ?></span>
                                <span>+</span>
                            </div>
                            <div class="accordion-content">
                                <div class="text-block">
                                    <div class="grid-4 grid-gap-1">
                                        <?php $kepek = $galeria['kepek'];
                                        if ($kepek) {
                                            foreach($kepek as $kep) {
                                                echo '<img src=' . $kep['kep']['url'] . ' alt=' . $galeria['galeria_cim'] . '>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
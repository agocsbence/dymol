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
                $n = 0;
                if ($mediatar) {
                    foreach($mediatar as $galeria) {
                        $n++; ?>

                        <div class="accordion mb-1">
                            <div class="accordion-header">
                                <h1><?php echo $galeria['galeria_cim'] ?></h1>
                                <div class="rightside">
                                    <span class="yeardate" style="margin-right: 2rem;"><?php echo $galeria['galeria_evszam'] ?></span>
                                    <span>+</span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <div class="text-block">
                                    <div class="grid grid-4 grid-gap-1 gallery" id="gallery-<?php echo $n; ?>">
                                        <?php $kepek = $galeria['kepek'];
                                        if ($kepek) {
                                            foreach($kepek as $kep) { ?>
                                                <a href="<?php echo $kep['kep']['url']; ?>">
                                                    <div class="gallery-image" style="background-image: url('<?php echo $kep['kep']['url']; ?>');"></div>
                                                </a>
                                            <?php }
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

<script src="<?php bloginfo('template_url') ?>/assets/js/lightgallery.min.js"></script>
<script type="text/javascript">
    const galleries = document.querySelectorAll('.gallery');
    galleries.forEach(gallery => 
        lightGallery(gallery, {
            thumbnail: true,
            animateThumb: false,
            showThumbByDefault: false
        })
    );
</script>

<?php get_footer();
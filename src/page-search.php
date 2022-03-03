<?php
/* Template Name: Kereső oldal */
get_header();
?>

<section class="py-4">
    <div class="container">
        <div class="border-top">
            <h1 class="uppercase"><?php _e('Kereső', 'dymol'); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="Keresés..." value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="search-submit btn">Keresés</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
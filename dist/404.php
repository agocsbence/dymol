<?php
/**
 * The template for 404 error page.
 */

get_header();
$home = get_home_url();
header( "refresh:5;url=" . $home );
?>

<div id="error-404" class="container">
    <div class="flex flex-row flex-row-start flex-space-between flex-m-column-reverse">
        <div class="text-content">
            <h1 class="lead mb-2">404 - Hupsz!</h1>
            <h3 class="sub">Ez az oldal áthelyezésre került vagy pillanatnyilag nem elérhető. 5 másodpercen belül átirányítunk a kezdőoldalra!</h3>
        </div>
        <div class="image-content mb-2">
            <img src="<?php bloginfo('template_url') ?>/assets/img/404.png" alt="Nem létező oldal">
        </div>
    </div>
</div>

<?php get_footer(); ?>
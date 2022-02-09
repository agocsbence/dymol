<?php get_header(); the_post(); ?>

<main class="container">
    <div class="page-content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </div>
</main>

<?php get_footer();

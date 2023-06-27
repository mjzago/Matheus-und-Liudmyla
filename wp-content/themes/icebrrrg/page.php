<?php get_header(); ?>

<!-- ab hier: page.php -->
<div id="main" class="container">
    <div class="sixteen columns">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php comments_template('', true); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Nichts gefunden</h2>
            <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
        <?php endif; ?>
    </div>
</div>

<!-- bis hier: page.php -->

<?php get_footer(); ?>
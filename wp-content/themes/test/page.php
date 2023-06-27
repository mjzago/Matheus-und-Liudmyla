<?php get_header(); ?>

<!-- ab hier: page.php -->
<div id="main">
    <div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link zu diesem Artikel">
                    <?php the_title('<h2>', '</h2>', true); ?>
                </a>

                <?php the_content('<br /><span class="ym-button ym-next">Weiterlesen</span>'); ?>

            <?php endwhile; ?>
        <?php else : ?>
            <h2>Nichts gefunden</h2>
            <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
        <?php endif; ?>

    </div>
</div>
<!-- bis hier: page.php -->

<?php get_footer(); ?>

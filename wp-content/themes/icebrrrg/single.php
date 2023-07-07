<?php get_header(); ?>

<!-- a partir daqui: single.php -->
<div id="main">
    <div class="container">
        <div class="row">
            <div class="thirteen columns">
                <div class="ym-cbox">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>

                            <div id="post-<?php the_ID(); ?>" <?php post_class('post-box'); ?>>
                                <section class="box info" style="background-color: #EEEEEE; padding: 10px; border: 1px solid #CCCCCC; margin-bottom:10px;">
                                    <p>
                                        Geschrieben von <b><?php the_author(); ?></b> am <?php the_time('j. F Y'); ?> um <?php the_time('G:i'); ?> Uhr,
                                        abgelegt unter <?php the_category(' | '); ?>
                                    </p>

                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link zu diesem Artikel">
                                        <?php the_title('<h2 style="color: #0288D1;">', '</h2>', true); ?></a>
                                    <div>
                                        <?php comments_popup_link('Kein Kommentar', '1 Kommentar', '% Kommentare', '', 'Kommentare sind abgeschaltet.'); ?>
                                        <?php edit_post_link('Bearbeiten', ' | ', ''); ?>
                                    </div>

                                    <?php the_content('<br /><span class="ym-button ym-next">Weiterlesen</span>'); ?>
                                    <div>
                                        <?php comments_template(); ?>
                                    </div>
                                </section>
                            </div>

                        <?php endwhile; ?>

                    <?php else : ?>
                        <h2>Nichts gefunden</h2>
                        <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
                    <?php endif; ?>

                </div> <!-- ENDE ym-cbox -->
            </div> <!-- ENDE nine columns -->

            <div class="three columns">
                <?php get_sidebar(); ?>
            </div>
        </div> <!-- ENDE row -->
    </div> <!-- ENDE container -->
</div>

<?php get_footer(); ?>
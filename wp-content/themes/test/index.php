<?php get_header(); ?>

<!-- ab hier: index.php -->
<div id="main">
            <div class="ym-column linearize-level-1">
                <div class="ym-col1">
                    <div class="ym-cbox">                    
                        <section class="box info">
                        <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : ?>
                     <?php the_post(); ?>
                        <h2>Ich bin eine statische Überschrift</h2>
                        <p>Ich bin ein statischer Text</p>
                  <?php endwhile; ?>
               <?php else : ?>
                <h2>Nichts gefunden</h2>
                <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
               <?php endif; ?>

                        </section>                        
                    </div> <!-- ENDE ym-cbox -->
                </div> <!-- ENDE ym-col1 --> 
<!-- bis hier: index.php -->
<?php get_sidebar();?>
<?php get_footer(); ?>
<?php get_header(); ?>
<!-- ab hier: index.php -->
        <div id="main"> 
            <div>
<!-- bis hier: index.php -->
<?php if (have_posts()) : ?>
    <p>
        <span><?php echo $wp_query->found_posts; ?> Treffer f&uuml;r: </span><b><?php the_search_query(); ?></b>
    </p>
    <?php while (have_posts()) : the_post(); ?>
        <?php
            $titel = get_the_title();
            $auszug = get_the_excerpt();
            $autor = get_the_author ();
            $suchwort = get_search_query();
            $wert = explode(" ",$suchwort);
            $titel = preg_replace('/('.implode('|', $wert) .')/iu','
            <strong style="background-color: #ffff00;">\0</strong>',$titel);
            $auszug = preg_replace('/('.implode('|', $wert) .')/iu','
            <strong style="background-color: #ffff00;">\0</strong>', $auszug);
            $autor = preg_replace('/('.implode('|', $wert) .')/iu','
            <strong style="background-color: #ffff00;">\0</strong>', $autor);
        ?>
        <h2>
            <a href="<?php the_permalink() ?>"><?php echo $titel; ?></a>
        </h2>
        <div>
            <?php echo $auszug; ?>
            <div>Geschrieben von <b><?php echo $autor; ?></b> am <?php the_time('j. F Y'); ?> um <?php the_time('G:i'); ?> Uhr</div>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
        <h2>
            Leider nichts gefunden!
        </h2>
<?php endif; ?>
<?php get_footer(); ?> 


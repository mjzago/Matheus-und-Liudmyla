<?php get_header(); ?>

<!-- a partir daqui: index.php -->
<div id="ww_8bb1e6f9261e9" v='1.3' loc='id' a='{"t":"ticker","lang":"de","sl_lpl":1,"ids":["wl1754"],"font":"Times","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#0288D1","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#FFFFFF","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://wetterlang.de/wetter_21_tage/" id="ww_8bb1e6f9261e9_u" target="_blank">Wettervorhersage 21 tage</a></div>
<script async src="https://app1.weatherwidget.org/js/?id=ww_8bb1e6f9261e9"></script>
<div id="main">
  <div class="container">
    <div class="row">
      <div class="twelve columns"> <!-- Alterado para nine columns -->
        <div class="ym-cbox">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>

              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="box info">
                  <p>
                    Geschrieben von <b><?php the_author(); ?></b> am <?php the_time('j. F Y'); ?> um <?php the_time('G:i'); ?> Uhr,
                    abgelegt unter <?php the_category(' | '); ?>
                  </p>

                  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link zu diesem Artikel">
                    <?php the_title('<h2>', '</h2>', true); ?></a>
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
            <p>
              <?php previous_post_link('&laquo; %link') ?>
              <?php next_post_link('<span style="float:right">%link &raquo;</span>') ?>
            </p>

          <?php else : ?>
            <h2>Nichts gefunden</h2>
            <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
          <?php endif; ?>

          <p>
            <?php if (function_exists('wp_pagenavi')) {
              wp_pagenavi();
            } else { ?>
          <p>
            <?php
              global $wp_query;
              $big = 999999999; // need an unlikely integer 
              echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
              ));
            ?>
          </p>
        <?php } ?>
        </p>
        </div> <!-- ENDE ym-cbox -->
      </div> <!-- ENDE nine columns -->

      <div class="three columns"> <!-- Alterado para three columns -->
        <?php get_sidebar(); ?>
      </div>
    </div> <!-- ENDE row -->
  </div> <!-- ENDE container -->
</div>

<?php get_footer(); ?>
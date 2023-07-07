<?php get_header(); ?>

<!-- a partir daqui: index.php -->
<div id="ww_8bb1e6f9261e9" v='1.3' loc='id' a='{"t":"ticker","lang":"de","sl_lpl":1,"ids":["wl1754"],"font":"Times","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#0288D1","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#FFFFFF","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://wetterlang.de/wetter_21_tage/" id="ww_8bb1e6f9261e9_u" target="_blank">Wettervorhersage 21 tage</a></div>
<script async src="https://app1.weatherwidget.org/js/?id=ww_8bb1e6f9261e9"></script>
<div id="main">
  <div class="container">
    <div class="row">
      <div class="thirteen columns"> <!-- Alterado para nine columns -->
        <div class="ym-cbox">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>

              <div id="post-<?php the_ID(); ?>" <?php post_class('post-box'); ?>> <!-- Added 'post-box' class -->
                <section class="box info" style="background-color: #EEEEEE; padding: 10px; border: 1px solid #CCCCCC; margin-bottom:10px;"> <!-- Added styles for padding and border -->
                  <p>
                    Geschrieben von <b><?php the_author(); ?></b> am <?php the_time('j. F Y'); ?> um <?php the_time('G:i'); ?> Uhr,
                    abgelegt unter <?php the_category(' | '); ?>
                  </p>

                  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link zu diesem Artikel">
                    <?php the_title('<h2 style="color: #0288D1;">', '</h2>', true); ?></a> <!-- Added title color style -->
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
            </p>

          <?php else : ?>
            <h2>Nichts gefunden</h2>
            <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
          <?php endif; ?>
          <!-- Start page navi -->
          <?php
          global $wp_query;

          $total_pages = $wp_query->max_num_pages;
          $current_page = max(1, get_query_var('paged'));

          $prev_text = '<i class="fa fa-long-arrow-left"></i>Previous Page';
          $next_text = 'Next Page<i class="fa fa-long-arrow-right"></i>';

          $pagination = '';
          $range = 2; // Number of pages to show on each side of the current page

          if ($total_pages > 1) {
            if ($current_page > 1) {
              $prev_link = get_previous_posts_page_link();
              $pagination .= '<li><a href="' . $prev_link . '">' . $prev_text . '</a></li>';
            }

            for ($i = $current_page - $range; $i <= $current_page + $range; $i++) {
              if ($i > 0 && $i <= $total_pages) {
                if ($i == $current_page) {
                  $pagination .= '<li class="active"><a href="#">' . $i . '</a></li>';
                } else {
                  $pagination .= '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                }
              }
            }

            if ($current_page < $total_pages) {
              $next_link = get_next_posts_page_link();
              $pagination .= '<li><a href="' . $next_link . '">' . $next_text . '</a></li>';
            }
          }

          if (!empty($pagination)) {
            echo '<ul class="pagination pagination-lg">';
            echo $pagination;
            echo '</ul><!--/.pagination-->';
          }
          ?>


          <!-- End of page navi -->
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
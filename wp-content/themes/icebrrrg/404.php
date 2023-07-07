<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! 404 - Page Not Found', 'your-theme-text-domain'); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e("We're sorry, but the page you're looking for doesn't exist.", 'your-theme-text-domain'); ?></p>
                <p><?php esc_html_e('Don\'t worry though, we have plenty of amazing travel options for you:', 'your-theme-text-domain'); ?></p>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'your-theme-text-domain'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/destinations')); ?>"><?php esc_html_e('Destinations', 'your-theme-text-domain'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'your-theme-text-domain'); ?></a></li>
                </ul>
                <p><?php esc_html_e('If you need further assistance, feel free to', 'your-theme-text-domain'); ?> <a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('contact us', 'your-theme-text-domain'); ?></a> <?php esc_html_e('and our friendly team will be happy to help you.', 'your-theme-text-domain'); ?></p>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
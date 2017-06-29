<?php get_header(); ?>
    <div class="page-wrapper">
        <?php dynamic_sidebar('content-header'); ?>
        <div class="container">
            <div class="banner story"><h1>Stories</h1></div>
            <section>
                <div class="row">
                    <?php
                    // Start the Loop.
                    while (have_posts()) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('templates/content');

                        // End the loop.
                    endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination(array(
                        'prev_text' => __('<', 'twentysixteen'),
                        'next_text' => __('>', 'twentysixteen'),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('',
                                DEMETRA_SLUG) . ' </span>',
                    ));
                    ?>
                </div>
            </section>
        </div>

        <?php dynamic_sidebar('content-bottom'); ?>
    </div>

<?php get_footer(); ?>
<?php get_header(); ?>
    <div class="page-wrapper container">
        <?php dynamic_sidebar('content-header'); ?>
        <section>
        <div class="row">
            <div class="content-wrapper col-xs-12 col-md-8">
                <div class="heading">
                    <?= the_archive_title('<h1 class="page-title underline">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>'); ?>
                </div>
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
            <?php
            echo '<div class="right-sidebar col-xs-12 col-md-4">';
            dynamic_sidebar('right-sidebar');
            echo '</div>';
            ?>
        </div>
        </section>
        <?php dynamic_sidebar('content-bottom'); ?>
    </div>

<?php get_footer(); ?>
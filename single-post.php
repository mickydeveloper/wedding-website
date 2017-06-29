<?php

get_header();
$post_id = get_the_ID(); ?>
    <div class="page-wrapper">
        <?php dynamic_sidebar('content-header'); ?>
        <div class="container">
            <?php $url = get_the_post_thumbnail_url($post_id);

            if ($url) { ?>
                <div class="banner" style="background:url(<?= $url ?>); background-size:cover;"></div>
            <?php } ?>
            <section>
                <div class="row">
                    <div class="content-wrapper col-xs-12 col-md-8">
                        <h1><?= get_the_title(); ?></h1>
                        <p><?= $post->post_content; ?>
                        </p>
                    </div>
                    <?php
                    echo '<div class="right-sidebar col-xs-12 col-md-4">';
                    $cat = get_the_category();
                    echo '<h2 class="underline">Read other stories</h2>';
                    $args = array(
                        'posts_per_page' => 6,
                        'post_type' => 'post',
                        'orderby' => 'rand',
                        'status' => 'publish',
                        'category_name' => $cat[0]->slug
                    );

                    $category_posts = new WP_Query($args);

                    if ($category_posts->have_posts()) :
                        while ($category_posts->have_posts()) :
                            $category_posts->the_post();
                            if ($post_id !== get_the_ID()):
                                ?>
                                <div class="article">
                                    <h3><a href="<?= get_post_permalink(get_the_ID()); ?>"><?= get_the_title(); ?></a>
                                    </h3>
                                    <p><?= wp_trim_words(get_the_content(), 9); ?></p>
                                    <a class="post-link" href="<?= get_post_permalink(get_the_ID()); ?>">Læs mere</a>
                                </div>
                                <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
            </section>
        </div>
    </div>

<?php dynamic_sidebar('content-bottom'); ?>
    </div>
<?php get_footer(); ?>
<?php

get_header();
$post_id = get_the_ID(); ?>
    <div class="page-wrapper container">
        <?php dynamic_sidebar('content-header'); ?>
        <section>
            <div class="row">
                <div class="content-wrapper single-content single-post.phpcol-xs-12 col-md-8">
                    <?php $url = get_the_post_thumbnail_url($post_id); ?>
                    <h1><?= get_the_title(); ?></h1>
                    <p>Posted af <?= get_the_author(); ?>, <?= get_the_date(); ?>
                    </p>
                    <?php

                    if ($url) { ?>
                        <a href="<?= get_post_permalink($post_id); ?>">
                            <div class="post-img" style="background:url(<?= $url ?>)"></div>
                        </a>
                    <?php } ?>
                    <p><?= $post->post_content; ?>
                    </p>
                </div>
                <?php
                echo '<div class="right-sidebar col-xs-12 col-md-4">';
                $cat = get_the_category();
                echo '<h2 class="underline">' . $cat[0]->name . '</h2>';
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
                                <div class="posted-on"><?= get_the_date(); ?></div>
                                <h3> <a href="<?= get_post_permalink(get_the_ID()); ?>"><?= get_the_title(); ?></a>
                                </h3>
                                <p><?= wp_trim_words(get_the_content(), 9); ?></p>
                                <a class="post-link" href="<?= get_post_permalink(get_the_ID()); ?>">Læs mere</a>
                            </div>
                            <?php
                        endif;
                    endwhile;
                endif;
                ?>

            </div>
        </section>
        <?php dynamic_sidebar('content-bottom'); ?>
    </div>
<?php get_footer(); ?>
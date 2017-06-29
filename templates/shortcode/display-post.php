<?php foreach ($posts as $post) : setup_postdata($post);

    ?>
    <div class="col-xs-12 cold-md-4">
        <div class="post">
            <h1><a href="<?= get_post_permalink($post->ID); ?>"><?= $post->post_title; ?></a>
            </h1>
            <p><?= substr(get_the_excerpt(), 0, 65); ?>...
            </p>
            <a class="btn" href="<?= get_post_permalink($post->ID); ?>">READ MORE</a>
        </div>
    </div>
<?php endforeach;
wp_reset_postdata(); ?>

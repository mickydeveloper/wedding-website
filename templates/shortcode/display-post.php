<?php foreach ($posts as $post) : setup_postdata($post);

    ?>
    <div class="col-xs-12 col-md-4">
        <div class="post">
            <h1><?= $post->post_title; ?>
            </h1>
            <p><?= substr(get_the_excerpt(), 0, 200); ?>...
            </p>
            <a class="btn" href="<?= get_post_permalink($post->ID); ?>">READ MORE</a>
        </div>
    </div>
<?php endforeach;
wp_reset_postdata(); ?>

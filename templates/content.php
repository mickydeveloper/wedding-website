<?php
/* Used for the cases section on the home page*/
?>
<div class="col-xs-12 col-md-4 archive-post">
    <h1><?= get_the_title(); ?></h1>
    <?php
    $url = get_the_post_thumbnail_url($post->ID);
    if ($url) { ?>
        <a href="<?= get_post_permalink($post->ID); ?>">
            <div class="post-img" style="background:url(<?= $url ?>)"></div>
        </a>
    <?php } ?>
    <p><?= wp_trim_words(get_the_content(), 45); ?>
    </p>
    <a href="<?= get_post_permalink($post->ID); ?>" class="btn"><?= __('Læs mere', "") ?></a>
</div>
<?php wp_reset_postdata(); ?>

<?php
/* Used for the cases section on the home page*/
?>
<article class="archive-post">
    <h2><?= get_the_title(); ?></h2>
    <p>Posted af <?= get_the_author(); ?>, <?= get_the_date(); ?>
    </p>
    <?php
    $url = get_the_post_thumbnail_url($post->ID);
    if ($url) { ?>
        <a href="<?= get_post_permalink($post->ID); ?>">
            <div class="post-img" style="background:url(<?= $url ?>)"></div>
        </a>
    <?php } ?>
    <p><?= wp_trim_words(get_the_content(), 45); ?>
    </p>
    <a href="<?= get_post_permalink($post->ID); ?>" class="btn"><?= __('Læs mere', DEMETRA_SLUG) ?></a>
</article>
<?php wp_reset_postdata(); ?>

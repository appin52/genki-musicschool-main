<!-- article-before&after -->
<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<!-- 前の記事 -->
<?php if (!empty($prev_post)) : ?>
    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="before-after__content">
        <div class="before-content c-bg-black before-after__title">
            <p>◀︎ 前の記事</p>
        </div>
        <div class="before-after__item">
            <div class="before-after__item-image sp_none">
                <?php if (has_post_thumbnail($prev_post->ID)) : ?>
                    <?php echo get_the_post_thumbnail($prev_post->ID, 'large'); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                <?php endif; ?>
            </div>
            <div class="before-after__item-text">
                <p>
                    <?php echo wp_trim_words($prev_post->post_title, 25, '...'); ?>
                </p>
            </div>
        </div>
    </a>
<?php else : ?>
    <div class="before-after__content before-after__placeholder"></div>
<?php endif; ?>

<!-- 次の記事 -->
<?php if (!empty($next_post)) : ?>
    <a href="<?php echo get_permalink($next_post->ID); ?>" class="before-after__content">
        <div class="after-content c-bg-black before-after__title">
            <p>次の記事 ▶︎</p>
        </div>
        <div class="before-after__item">
            <div class="before-after__item-image sp_none">
                <?php if (has_post_thumbnail($next_post->ID)) : ?>
                    <?php echo get_the_post_thumbnail($next_post->ID, 'large'); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                <?php endif; ?>
            </div>
            <div class="before-after__item-text">
                <p>
                    <?php echo wp_trim_words($next_post->post_title, 25, '...'); ?>
                </p>
            </div>
        </div>
    </a>
<?php else : ?>
    <div class="before-after__content before-after__placeholder"></div>
<?php endif; ?>
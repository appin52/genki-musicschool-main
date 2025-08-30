<!-- side -->
<div class="blog-details-side">

<!-- 無料メールマガジン -->
<div class="blog-details-side__free-magazine">
    <div class="blog-details-side__free__magazine-title c-bg-black c-blog-side__title">
        <h2>無料メールマガジン</h2>
    </div>
    <div class="blog-details-side__free__magazine-box">
        <a href="#" class="blog-details-side__banner-link" aria-label="無料メールマガジンのバナー広告">
            <p>バナー広告</p>
        </a>
    </div>
</div>
<!-- ブログ内を検索 -->
<div class="blog-details-side__search">
    <div class="blog-details-side__search__title c-bg-black c-blog-side__title">
        <h2>ブログ内を検索</h2>
    </div>
    <?php get_search_form(); ?>
</div>

<!-- おすすめの記事 -->
<div class="blog-details-side__recommend">
    <div class="blog-details-side__recommend__title c-bg-black c-blog-side__title">
        <h2>おすすめの記事</h2>
    </div>

    <div class="blog-details-side__recommend-box">

        <?php
        $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 3,
            'taxonomy' => 'blog_recommend',
            'term' => 'recommend',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>

            <a href="<?php the_permalink(); ?>" class="blog-details-side__recommend__box-item">
                <div class="blog-details-side__recommend__box__item-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/common/no-image.png" alt="No image">
                    <?php endif; ?>
                </div>

                <div class="blog-details-side__recommend__box__item-text">
                    <p><?php echo wp_trim_words(get_the_title(), 15, '...'); ?></p>
                </div>
            </a>

        <?php 
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </div>
</div>

<!-- カテゴリー -->
<div class="blog-details-side__category">
    <div class="blog-details-side__category-title c-bg-black c-blog-side__title">
        <h2>カテゴリー</h2>
    </div>

    <div class="blog-details-side__category-box">

        <?php
        $terms = get_terms([
            'taxonomy' => 'blog_cate',
            'hide_empty' => true,
        ]);
        if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
        ?>

        <div class="blog-details-side__category__box-item category-item">
            <a href="<?php echo get_term_link($term); ?>">
                <span><?php echo $term->name; ?></span>
            </a>
        </div>

        <?php
            endforeach;
        endif;
        ?>

    </div>
</div>

</div>
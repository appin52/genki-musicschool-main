<!-- article-related-->

<?php
$post_type = get_post_type();
$post_id = get_the_ID();

// 投稿タイプに応じて使うタクソノミーを定義（必要に応じて追加可能）
$taxonomy_map = [
    'blog'   => 'blog_cate',
    'result' => 'genre',
];

// 投稿タイプに応じてクラス名を定義
$class_map = [
    'blog' => [
        'card_class' => 'blog__main__article-items-card blog-article__card c-category-parent',
        'category_class' => 'c-category__blog-details c-category'
    ],
    'result' => [
        'card_class' => 'blog__main__article-items-card blog-article__card c-category-parent',
        'category_class' => 'c-category__result-details c-category'
    ]
];
  
// 投稿タイプに対応するタクソノミーが定義されているか確認
if (!isset($taxonomy_map[$post_type])) {
return;
}

$taxonomy = $taxonomy_map[$post_type];
$terms = get_the_terms($post_id, $taxonomy);

// 使用するクラス名を取得
$card_class = $class_map[$post_type]['card_class'];
$category_class = $class_map[$post_type]['category_class'];




if (!empty($terms)):
    
    // 取得したタームのIDだけを配列に取り出す
    $term_ids = wp_list_pluck($terms, 'term_id');
    
    // 関連記事のクエリ作成（投稿タイプ/タクソノミーを可変に）
    $args = [
        'posts_per_page' => 3,
        'post_type'      => $post_type,
        'post__not_in'   => [get_the_ID()],
        'orderby'        => 'date',
        'order'          => 'DESC',
        'tax_query'      => [
            [
                'taxonomy' => $taxonomy,
                'field'    => 'term_id',
                'terms'    => $term_ids,
            ],
        ],
    ];
    
    $the_query = new WP_Query($args);
    
    if ($the_query->have_posts()):
?>

<div class="blog-details-main__article blog__main__article"> 
    <h2 class="blog__main__article-title c-bg-black">関連記事</h2>
    <!-- items -->
    <div class="blog__main__article-items">

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php 
            // 投稿の最初のタームの名前を取得
            $post_terms = get_the_terms(get_the_ID(), $taxonomy);
            $term_name = (!empty($post_terms) && !is_wp_error($post_terms)) ? $post_terms[0]->name : '';
            ?>

            <!-- card -->
            <a href="<?php the_permalink(); ?>" class="<?php echo esc_attr($card_class); ?>">
                <div class="blog-article__card-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                    <?php endif; ?>
                </div>
                <span class="<?php echo esc_attr($category_class); ?>"><?php echo $term_name; ?></span>
                <div class="blog-article__card-text">
                    <h3><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata();
        ?>

    </div>
</div>

<?php
    endif;
endif;
?>
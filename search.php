<?php get_header(); ?>
    <main class="search header-padding">
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        <div class="search__main">
            <div class="inner">

                <?php if (!empty(get_search_query())) : ?>
                    <?php
                    if (have_posts()) :
                        $total_posts = $wp_query->found_posts;
                    ?>

                        <div class="search__main-text">
                            <div class="search__main-left-text">
                                <h1>「<span><?php echo get_search_query(); ?></span>」の検索結果</h1>
                            </div>
                            <div class="search__main-right-text">
                                <p><?php echo $total_posts; ?>件</p>
                            </div>
                        </div>

                        <!-- items -->
                        <div class="search__main-items search__items">

                            <?php 
                            while (have_posts()) : 
                                the_post(); 
                            ?>

                            <!-- card -->
                            <a href="<?php the_permalink(); ?>" class="search__items-card  search__card c-category-parent">
                                <div class="search__card-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                                    <?php endif; ?>
                                </div>
                                <span class="c-category__search c-category">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                    if (!empty($terms) && !is_wp_error($terms)) {
                                        echo esc_html($terms[0]->name);
                                    }
                                    ?>
                                </span>
                                <div class="search__card-text">
                                    <h3><?php echo wp_trim_words(get_the_title(), 26, '...'); ?></h3>
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <p><?php echo wp_trim_words(get_the_content(), 120, '...'); ?></p>
                                </div>
                            </a>

                            <?php 
                            endwhile; 
                            ?>

                        </div>

                        <!-- 遷移ボタン -->
                        <nav class="search__pagination c-pagination">
                            <?php wp_pagenavi(); ?>
                        </nav>

                    <?php else : ?>
                        <div class="search__main-no-result">
                            <p>検索されたキーワードにマッチする<br class="pc_none">記事はありません</p>
                            <a onclick="history.back()" class="c-btn btn-contact-send c-text-center">戻る</a>
                        </div>
                    <?php endif; ?>

                <?php else : ?>
                    <div class="search__main-no-result">
                        <p>検索ワードが未入力です</p>
                        <a onclick="history.back()" class="c-btn btn-contact-send c-text-center">戻る</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>
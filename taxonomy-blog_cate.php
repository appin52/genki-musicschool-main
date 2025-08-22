<?php get_header(); ?>
    <main class="blog-list header-padding">
        <section class="blog-list__view c-view" id="first-view">
            <div class="blog-list__view-image c-view-image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/image/blog/image_blog_about.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog/image_blog_about_sp.jpeg" alt="ブログ">
                </picture>
            </div>
            <h1 class="blog-list__view-text c-view-text">ブログ</h1>
        </section>
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>


        <section class="blog-blog-list__main">
            <div class="inner">
                <?php
                $term = get_queried_object();
                $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
                ?>
                <h2 class="blog-blog-list__main-title c-text-center"><?php echo esc_html($term_name); ?></h2>

                <!-- items -->
                <div class="blog-blog-list__main-items blog-blog__items">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) : 
                            the_post();
                    ?>
                        <!-- card -->
                        <a href="<?php the_permalink(); ?>" class="blog-blog__items-card  blog-blog__card c-category-parent">
                            <div class="blog-blog__card-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                                <?php endif; ?>
                            </div>
                            <span class="c-category__blog-list c-category">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                if(!empty($terms) && !is_wp_error($terms)) {
                                    echo esc_html( $terms[0]->name );
                                }
                                ?>
                            </span>

                            <div class="blog-blog__card-text">
                                <h3><?php echo wp_trim_words(get_the_title(), 26, '...'); ?></h3>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <p><?php echo wp_trim_words(get_the_content(), 120, '...'); ?></p>
                            </div>
                        </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            
            <!-- 遷移ボタン -->
            <nav class="blog-blog-list__pagination c-pagination">
                <?php wp_pagenavi(); ?>
            </nav>
            
        </section>
        <?php get_template_part( 'template-parts/blog-list' ); ?>
            
    </main>
<?php get_footer(); ?>
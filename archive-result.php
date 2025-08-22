<?php get_header(); ?>
    <main class="result-list header-padding">
        <section class="result-list__view c-view" id="first-view">
            <div class="result-list__view-image c-view-image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/image/result-list/image_result_about.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/result-list/image_result_about_sp.jpeg" alt="卒業実績">
                </picture>
            </div>
            <h1 class="result-list__view-text c-view-text">卒業実績</h1>
        </section>
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        
        <section class="result-list__main">
            <div class="inner">
                <h2 class="result-list__main-title c-text-center">卒業実績一覧</h2>

                
                <!-- items -->
                <div class="result-list__main-items result-list__items">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) : 
                            the_post();
                    ?>

                    <!-- card -->
                    <a href="<?php the_permalink(); ?>" class="result-list__items-card  result-list__card c-category-parent">
                        <div class="result-list__card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                            <?php endif; ?>
                        </div>
                        <span class="c-category__result-list c-category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'genre');
                            if (!empty($terms)  && !is_wp_error($terms)) {
                                echo $terms[0]->name;
                            }
                            ?>
                        </span>
                        <div class="result-list__card-text">
                            <h3><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </a>

                    <?php
                    endwhile;
                    endif;
                    ?>
                    
                </div>

                
            </div>
            
            <!-- 遷移ボタン -->
            <nav class="result-list__pagination c-pagination">
                <?php wp_pagenavi(); ?>
            </nav>
            
        </section>
        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>


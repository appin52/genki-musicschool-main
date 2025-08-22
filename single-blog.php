<?php get_header(); ?>
    <main class="blog-list header-padding">

        <div id="first-view">
            <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        </div>

        <div class="blog-details-content">
            <div class="inner">
                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post(); 
                ?>
                    <!-- main -->
                    <div class="blog-details-main">
                        <!-- card -->
                        <div class="blog-details-main__items-card  blog-details-main__card c-category-parent">
                            <div class="blog-details-main__card-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/common/no-image.png" alt="No image">
                                <?php endif; ?>
                                
                            </div>
                            <span class="c-category__blog-details-main c-category">
                                <?php
                                $post_terms = get_the_terms(get_the_ID(), 'blog_cate');
                                $terms_name = (!empty($post_terms) ) ? $post_terms[0]->name : '';
                                echo esc_html( $terms_name );
                                ?>
                            </span>
                            <div class="blog-details-main__card-text">
                                <h1><?php the_title(); ?></h1>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                        </div>

                        <!-- sns -->
                        <div class="blog-details-main__sns blog-sns">
                            <?php
                            $url = urlencode(get_permalink());
                            $title = urlencode(get_the_title());
                            ?>
                            <!-- facebook -->
                            <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' .$url); ?>" class="blog__sns-box blog__sns-box-facebook">
                                <div class="blog__sns__icon-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo_blog-details_facebook.svg" alt="facebook">
                                </div>  
                                <div class="blog__sns__icon-text sp_none">
                                    <p>Facebook</p>
                                </div>
                            </a>
                            <!-- twitter -->
                            <a href="<?php echo esc_url('https://x.com/share?url='.$url .'&text='.$title); ?>" class="blog__sns-box blog__sns-box-twitter">
                                <div class="blog__sns__icon-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo_blog-details_twitter.svg" alt="twitter">
                                </div>
                                <div class="blog__sns__icon-text sp_none">
                                    <p>Twitter</p>
                                </div>
                            </a>
                            <!-- hatena -->
                            <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url='.$url.'&title='.$title); ?>" class="blog__sns-box blog__sns-box-hatena">
                                <div class="blog__sns__icon-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo_blog-details_hatena.svg" alt="hatena">
                                </div>
                                <div class="blog__sns__icon-text sp_none">
                                    <p>Hatena</p>
                                </div>
                            </a>
                            <!-- line -->
                            <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $url); ?>" class="blog__sns-box blog__sns-box-line">
                                <div class="blog__sns__icon-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo_blog-details_line.svg" alt="line">
                                </div>
                                <div class="blog__sns__icon-text sp_none">
                                    <p>Line</p>
                                </div>
                            </a>
                            <!-- pocket -->
                            <a href="<?php echo esc_url('http://getpocket.com/edit?url='.$url.'&title='.$title); ?>" class="blog__sns-box blog__sns-box-pocket">
                                <div class="blog__sns__icon-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo_blog-details_pocket.svg" alt="pocket">
                                </div>
                                <div class="blog__sns__icon-text sp_none">
                                    <p>Pocket</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="c-article-details-body">
                            <?php the_content(); ?>
                        </div>

                        <!-- single-pagination -->
                        <div class="main__article-before-after blog-before-after">
                            <?php get_template_part( 'template-parts/single-pagination' ); ?>
                        </div>
                        
                        <!-- related-article -->
                        <?php get_template_part( 'template-parts/related-article' ); ?>
                                                
                    </div>
                

                <?php get_sidebar(); ?>

                <?php
                endwhile;
                endif;
                ?>

            </div>
        
        </div>

        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>
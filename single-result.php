<?php get_header(); ?>
    <main class="result-details header-padding">

        <div id="first-view">
            <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        </div>

        <?php if ( have_posts() ) : 
            while ( have_posts() ) : 
                the_post(); 
        ?>
            <div class="result-details-content">
                <div class="inner">
                    
                    <!--main-image -->
                    <div class="result-details-main__card  result-main__card c-category-parent">
                        <div class="result-main__card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                            <?php endif; ?>
                        </div>
                        <span class="c-category__result-details-main c-category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'genre');
                            if (!empty($terms)  && !is_wp_error($terms)) {
                                echo $terms[0]->name;
                            }
                            ?>
                        </span>
                        <div class="result-main__card-text">
                            <h1><?php the_title(); ?></h1>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </div>
                        
                    <!-- profile -->
                    <div class="result-details-profile result__profile">
                        <table class="result__profile-table">
                            <tbody>
                                <tr>
                                    <th class="profile-left">名前</th>
                                    <td class="profile-right"><?php the_field('name'); ?></td>
                                </tr>
                                
                                <tr>
                                    <th class="profile-left">職業</th>
                                    <td class="profile-right"><?php the_field('job'); ?></td>
                                </tr>
                                
                                <tr>
                                    <th class="profile-left">ジャンル</th>
                                    <td class="profile-right">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'genre');
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            echo esc_html($terms[0]->name);
                                        }
                                        ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th class="profile-left">実績</th>
                                    <td class="profile-right"><?php the_field('achievements'); ?></td>
                                </tr>
                                
                                <tr>
                                    <th class="profile-left">SNS</th>
                                    <td class="profile-right"><?php the_field('sns'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="result__profile__text">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- article-before&after -->
                    <div class="main__article-before-after result-before-after">
                        <?php get_template_part( 'template-parts/single-pagination' ); ?>
                    </div>

                    <!-- article-related-->
                    <?php get_template_part( 'template-parts/related-article' ); ?>
                </div>
            </div>
        <?php 
            endwhile; 
        endif;
        ?>

        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>
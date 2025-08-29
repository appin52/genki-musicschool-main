<?php get_header(); ?>
    <main class="top header-padding">
        <section class="top__first-view first-view" id="first-view">
            <h2 class="first-view__title">「音楽で生きる」<br class="pc_none">を叶える<br>ミュージックスクール</h2>
            <div class="first-view__image">
                <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/image/top/image_top_fv.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/top/image_top_fv_sp.jpeg" alt="きたむらミュージックスクール">
                </picture>
            </div>
        </section>
        <section class="top__concept concept">
            <div class="inner">
                <div class="concept__title">
                    <h2 class="c-font-red">全人類、<br class="pc_none">ミュージシャン計画。</h2>
                    <p>私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
                </div>
                
                <div class="concept__image">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/image/top/logo_top_concept01.svg" media="(min-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_concept01_sp.svg" alt="きたむらミュージックスクール">
                    </picture>
                </div>
                <div class="concept__3e">
                    <div class="concept__3e__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_concept02.svg" alt="コンセプト矢印">
                    </div>
                    <ul class="concept__3e__list">
                        <li class="concept__3e__item c-radius-red">
                            <span class="concept__3e__item-en c-font-red">Enthusiasm</span>
                            <span class="concept__3e__item-jp">熱狂し</span>
                        </li>
                        <li class="concept__3e__item c-radius-red concept-radius-red">
                            <span class="concept__3e__item-en c-font-red">Envision</span>
                            <span class="concept__3e__item-jp">想像し</span>
                        </li>
                        <li class="concept__3e__item c-radius-red">
                            <span class="concept__3e__item-en c-font-red">Effulgent</span>
                            <span class="concept__3e__item-jp">輝く存在へ</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="top__message c-bg-red">
            <div class="inner">
                <div class="message__title">
                    <h2>音楽業界初！<br>
                        収益化までサポートする<br class="pc_none">ミュージックスクール
                    </h2>
                    <p>
                        楽器や作詞作曲などの<br class="pc_none">技術・知識はもちろんのこと<br>
                        自分で稼ぎつづけるための<br class="pc_none">ビジネス面もサポートします！
                    </p>
                </div>
            </div>
        </section>
        <section class="top__reason reason">
            <div class="inner">
                <h2 class="reason__title c-text-center">きたむらミュージック<br class="pc_none">スクールが選ばれる理由</h2>
                <div class="reason__box">
                    <div class="reason__box-item reason__card">
                        <div class="reason__card-image">
                            <picture>
                                <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/image/top/image_top_reason01.jpeg" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/top/image_top_reason01_sp.jpeg" alt="きたむらミュージックスクール">
                            </picture>
                        </div>
                        <div class="reason__card-text">
                            <h3>技術面はプロによるマンツーマン授業！</h3>
                            <span></span>
                            <p>第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
                        </div>
                    </div>
                    <div class="reason__box-item reason__card">
                        <div class="reason__card-image">
                            <picture>
                                <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/image/top/image_top_reason02.jpeg" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/top/image_top_reason02_sp.jpeg" alt="きたむらミュージックスクール">
                            </picture>
                        </div>
                        <div class="reason__card-text">
                            <h3>収益化するためのビジネスサポート！</h3>
                            <span></span>
                            <p>コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。</p>
                        </div>
                    </div>
                    <div class="reason__box-item reason__card">
                        <div class="reason__card-image">
                            <picture>
                                <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/image/top/image_top_reason03.jpeg" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/top/image_top_reason03_sp.jpeg" alt="きたむらミュージックスクール">
                            </picture>
                        </div>
                        <div class="reason__card-text">
                            <h3>24時間365日使える練習ROOMを完備！</h3>
                            <span></span>
                            <p>一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。　（アプリで予約が必要です）</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top__voice voice c-bg-red">
            <div class="voice-inner">
                <h2 class="voice__title c-text-center">生徒さんたちの声</h2>
                <!-- voice slider -->
                <div class="voice__box voice-slider">

                    <?php
                    $args = array(
                        'post_type' => 'result',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <a href="<?php the_permalink(); ?>" class="voice__box-item voice__card voice-slider__item">
                            <div class="voice__card-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/common/no-image.png" alt="No image">
                                <?php endif; ?>
                            </div>
                            <div class="voice__card-text">
                                <h3 class="c-text-center"><?php the_field('job'); ?>&emsp;<?php the_field('name'); ?>さん</h3>
                                <p><?php echo wp_trim_words(get_the_content(), 42, '...'); ?></p>
                            </div>
                        </a>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                    


                </div>

            </div>
        </section>
        <section class="top__flow flow">
            <div class="inner">
                <h2 class="flow__title c-text-center">ご利用の流れ</h2>
                <div class="flow__box-wrapper">
                    <div class="flow__box-image">
                        <span></span>
                    </div>
                    <div class="flow__box">
                        <div class="flow__box-item flow__card c-radius-red flow-radius-red">
                            <h3 class="flow__card-title c-font-red">お問い合わせ</h3>
                            <p class="flow__card-text">まずはフォームまたはメールにてお問い合わせください。<br>
                                ヒアリングの日程を調整します。</p>
                        </div>
                        <div class="flow__box-item flow__card c-radius-red flow-radius-red">
                            <h3 class="flow__card-title c-font-red">ヒアリング</h3>
                            <p class="flow__card-text">現在の技術面や将来の目標などをお伺いします。<br>
                                悩みや不安な事もお気軽にご相談ください。</p>
                        </div>
                        <div class="flow__box-item flow__card c-radius-red flow-radius-red">
                            <h3 class="flow__card-title c-font-red">プランのご提案</h3>
                            <p class="flow__card-text">ライフスタイルや目標によって最適なプランをご提案します。<br>
                                継続できるようサポートいたします。</p>
                        </div>
                        <div class="flow__box-item flow__card c-radius-red flow-radius-red">
                            <h3 class="flow__card-title c-font-red">ご入学</h3>
                            <p class="flow__card-text">お申し込み完了後、レッスンがスタートします。<br>
                                マンツーマン指導なので、いつからでもスタートが可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top__question question">
            <div class="inner">
                <h2 class="question__title c-text-center">よくあるご質問</h2>
                <div class="question__box">
                    <div class="question__box-item question__card">
                        <div class="question__card-q js-question-trigger">
                            <div class="question__q-icon__box">
                                <span class="question__q-icon">Q</span>
                            </div>
                            <p class="question__card-text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_question.arrow.svg" alt="矢印" class="question__arrow">
                        </div>
                        <div class="question__card-a js-question-trigger">
                            <div class="question__card-a-flex">
                                <div class="question__a-icon__box">
                                    <span class="question__a-icon">A</span>
                                </div>
                                <p class="question__card-text c-font-red">回答のテキストが入ります。回答のテキストが入ります。回答のテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="question__box-item question__card">
                        <div class="question__card-q js-question-trigger">
                            <div class="question__q-icon__box">
                                <span class="question__q-icon">Q</span>
                            </div>
                            <p class="question__card-text">途中でプランを変更することは可能ですか？</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_question.arrow.svg" alt="矢印" class="question__arrow">
                        </div>
                        <div class="question__card-a js-question-trigger">
                            <div class="question__card-a-flex">
                                <div class="question__a-icon__box">
                                    <span class="question__a-icon">A</span>
                                </div>
                                <p class="question__card-text c-font-red">途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="question__box-item question__card">
                        <div class="question__card-q js-question-trigger">
                            <div class="question__q-icon__box">
                                <span class="question__q-icon">Q</span>
                            </div>
                            <p class="question__card-text">入学金などの分割払いはできますか？</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_question.arrow.svg" alt="矢印" class="question__arrow">
                        </div>
                        <div class="question__card-a js-question-trigger">
                            <div class="question__card-a-flex">
                                <div class="question__a-icon__box">
                                    <span class="question__a-icon">A</span>
                                </div>
                                <p class="question__card-text c-font-red">回答のテキストが入ります。回答のテキストが入ります。回答のテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="question__box-item question__card">
                        <div class="question__card-q js-question-trigger">
                            <div class="question__q-icon__box">
                                <span class="question__q-icon">Q</span>
                            </div>
                            <p class="question__card-text">休学することも可能ですか？</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_question.arrow.svg" alt="矢印" class="question__arrow">
                        </div>
                        <div class="question__card-a js-question-trigger">
                            <div class="question__card-a-flex">
                                <div class="question__a-icon__box">
                                    <span class="question__a-icon">A</span>
                                </div>
                                <p class="question__card-text c-font-red">回答のテキストが入ります。回答のテキストが入ります。回答のテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top__blog blog">
            <div class="inner">
                <h2 class="blog__title c-text-center">ブログ</h2>
                <div class="blog__box">

                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'blog',
                        'taxonomy' => 'blog_recommend',
                        'term' => 'recommend',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>



                    <a href="<?php the_permalink(); ?>" class="blog__box-item c-category-parent">
                        <div class="blog__card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                            <?php endif; ?>
                        </div>
                        <span class="c-category__top-blog c-category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'blog_cate');
                            if (!empty($terms) && !is_wp_error($terms)) {
                                echo esc_html($terms[0]->name);
                            }
                            ?>
                        </span>
                        <div class="blog__card-text">
                            <h3><?php echo get_the_title(); ?></h3>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </a>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

              
                    
                </div>
                <div class="blog__linklist">
                    <a href="<?php echo home_url('/blog'); ?>">ブログ一覧へ</a>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>
<?php get_header(); ?>
    <main class="plan header-padding">
        <section class="plan__view c-view" id="first-view">
            <div class="plan__view-image c-view-image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/image/plan/image_plan_about.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/plan/image_plan_about_sp.jpeg" alt="プラン">
                </picture>
            </div>
            <h1 class="plan__view-text c-view-text">プラン・料金</h1>
        </section>
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>

        <div class="plan__main">
            <section class="plan__main-price plan__price-system">
                <div class="inner">
                    <h2 class="c-text-center">料金体系</h2>
                    <div class="plan__price-system-btn price-system">
                        <div class="price-system__btn c-btn">入会金 39,000円</div>
                        <span></span>
                        <div class="price-system__btn c-btn">月額料金</div>
                    </div>
                    <div class="plan__price-system-text">
                        <p>きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
                    </div>
                </div>
            </section>
            <section class="plan__main-plan plan__plan">
                <div class="inner">
                    <h2 class="c-text-center">プラン内容・月額料金</h2>

                    <div class="plan__table-scroll">

                        <!-- table -->
                        <table class="plan__plan-table">

                            <!-- ヘッダー-->
                            <thead class="plan__table-header">
                                <tr>
                                    <th rowspan="2" class="plan__table-cell plan__table-empty"></th>
                                    <th></th>
                                    <th rowspan="2" class="plan__table-cell plan__table-header c-bg-red plan__table-recommend">
                                        <span>おすすめ</span><br>スタンダード<br class="pc_none">プラン
                                    </th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="plan__table-cell plan__table-header c-bg-black plan__table-normal">
                                        ベーシック<br class="pc_none">プラン
                                    </th>
                                    <th class="plan__table-cell plan__table-header c-bg-black plan__table-normal">
                                        プレミアム<br class="pc_none">プラン
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="plan__plan-table-body">
                                <!-- ボディ-->

                                <!-- 月額料金行 -->
                                <tr class="plan__table-body">
                                    <th class="plan__table-title-price">月額料金</th>
                                    <td class="plan__table-price">39,000円</td>
                                    <td class="plan__table-price c-font-red">59,000円</td>
                                    <td class="plan__table-price">128,000円</td>
                                </tr>
                                
                                <!-- マンツーマン授業行 -->
                                <tr class="bg-plan-gray">
                                    <th class="plan__table-title bg-plan-gray">マンツーマン授業</th>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                            <p>週1回</p>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-red"></span>
                                            <p>週2回</p>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                            <p>無制限</p>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- ビジネス基本講座行 -->
                                <tr>
                                    <th class="plan__table-title">ビジネス基本講座</th>
                                    <td>
                                        <div class="plan__table-ball-center">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="plan__table-ball-center">
                                            <span class="plan__table-ball plan__table-ball-red"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="plan__table-ball-center">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- 練習ROOM利用行 -->
                                <tr class="bg-plan-gray">
                                    <th class="plan__table-title bg-plan-gray">練習ROOM利用</th>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                            <p>月10時間</p>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-red"></span>
                                            <p>月20時間</p>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                            <p>無制限</p>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- ビジネスコンサル行 -->
                                <tr>
                                    <th class="plan__table-title">ビジネスコンサル</th>
                                    <td>
                                        <div class="plan__table-border">
                                            <span></span>
                                        </div>
                                    </td>
                                    <td class="u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-red"></span>
                                            <p>月2回</p>
                                        </div>
                                    </td>
                                    <td class="u-plan-p">
                                        <div class="plan__table-ball-flex">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                            <p>月3回</p>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- コミュニティ参加資格行 -->
                                <tr class="bg-plan-gray">
                                    <th class="plan__table-title bg-plan-gray">コミュニティ<br class="pc_none">参加資格</th>
                                    <td class="bg-plan-gray">
                                        <div class="plan__table-border">
                                            <span></span>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray">
                                        <div class="plan__table-border">
                                            <span></span>
                                        </div>
                                    </td>
                                    <td class="bg-plan-gray">
                                        <div class="plan__table-ball-center">
                                            <span class="plan__table-ball plan__table-ball-black"></span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                    <div class="plan__plan-plz-contact">
                        <p>※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
                    </div>
                </div>
                
            </section>
            
            
            
            
        </div>
        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
<?php get_footer(); ?>
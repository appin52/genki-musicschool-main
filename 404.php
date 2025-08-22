<?php get_header(); ?>
    <main class="not-found header-padding">
        <section class="not-found__view c-view" id="first-view">
            <div class="not-found__view-image c-view-image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/image/404/image_404_about.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/404/image_404_about_sp.jpeg" alt="404 not found">
                </picture>
            </div>
            <h1 class="not-found__view-text c-view-text">404 not found</h1><!-- スペルミス修正致しました -->
        </section>
        <div class="not-found__main">
            <div class="inner">

                <p>
                    申し訳ございませんが、お探しのページが見つかりませんでした。<br>
                    お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
                </p>

                <!-- ホームへ戻るボタン -->
                <a href="<?php echo home_url(); ?>" class="c-btn btn-not-found c-text-center">
                    ホームへ戻る
                </a>
                
            </div>
        </div>
    
    </main>
<?php get_footer(); ?>
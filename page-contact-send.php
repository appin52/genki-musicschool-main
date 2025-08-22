<?php get_header(); ?>
    <main class="contact-form header-padding">
        <section class="contact-form__view c-view" id="first-view">
            <div class="contact-form__view-image c-view-image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/image/contact/image_contact_about.jpeg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/contact/image_contact_about_sp.jpeg" alt="お問い合わせ">
                </picture>
            </div>
            <h1 class="contact-form__view-text c-view-text">お問い合わせ</h1>
        </section>
        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
        
        <section class="contact-send-main">
            <div class="inner">

                <p>
                    お問い合わせいただきありがとうございました。<br>
                    内容確認後、担当者よりメールにてご連絡いたします。
                </p>

                <!-- 送信ボタン -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn btn-contact-send c-text-center">ホームへ戻る</a>
                
            </div>
        </section>
        
    </main>
<?php get_footer(); ?>
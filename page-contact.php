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
        
        <div class="contact-form-main">
            <div class="inner">

                <div class="contact-form-text">
                    <p>
                        当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
                        通常 3 営業日以内にメールにてご連絡させていただきます。
                    </p>
                </div>

                <div class="contact-form-items form__items">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        remove_filter('the_content', 'wpautop');
                        the_content();
                    endwhile;
                endif;
                ?>

                </div>
                
            </div>
        </div>
        <?php get_template_part( 'template-parts/fix-area' ); ?>
    </main>
    
<?php get_footer(); ?>
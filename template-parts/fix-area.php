<div id="upper-arrow1" class="upper-arrow">
    <a href="#">
        <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_arrow.svg" alt="upper-arrow">
        </picture>
    </a>
</div>

<?php if ( !is_page( 'contact' ) ) : ?>
    <div id="contact-btn" class="top__contact contact">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="c-btn btn-contact">お問い合わせ</a>
    </div>
<?php endif; ?>
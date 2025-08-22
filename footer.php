            <footer class="footer c-bg-red c-text-center">
                <div class="footer__nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu_class'     => 'footer__nav-ul',
                            'theme_location' => 'footer',
                            'container'      => false,
                        )
                    );
                    ?>
                </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_top_footer.svg" alt="きたむらミュージックスクール">
                </a>
                <div class="footer__copyright">
                    <p>Copyright © 0000 KITAMURA music school Inc.<br class="pc_none">All Rights</p>
                </div>
                <div class="footer__sns">
                    <ul>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_footer-twitter.svg" alt="Twitter"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_footer-facebook.svg" alt="Facebook"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_footer-youtube.svg" alt="YouTube"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/top/logo_footer-instagram.svg" alt="Instagram"></a></li>
                    </ul>
                </div>
                
            </footer>
            
            
		</div>

        <?php wp_footer(); ?>
    </body>
</html>
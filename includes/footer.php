<footer>
    <div class="footer-wrapper">
        <div class="footer-img">
            <picture>
                <!-- ブラウザ幅428pxまでsampleの画像が表示 -->
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/footer.jpg"
                    media="(min-width: 428px)" type="image/png" loading="lazy">
                <!-- ブラウザ幅427px～から最小幅までsample2の画像が表示 -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/footer-bg.jpg" loading="lazy">
            </picture>

        </div>
        <div class="entry-wrapper">
            <p class="entry-message fpc16sp14"> わたしたちと一緒に働く仲間を募集中です。<br>
                少数精鋭のチームで、<br>
                あなたも会社も一緒に成長していきましょう。</p>
            <div class="footer-entry-btn back-gold button">
                <a href="<?php echo esc_url(home_url('/entry')); ?>">
                    <p class="fpc16sp14 f-viga">ENTRY</p>
                    <div class="arrow1"></div>
                </a>
            </div>
        </div>
        <div class="footer-nav-wrapper back-beige">
            <?php wp_nav_menu(array(
                'menu' => '',
                'menu_class' => 'footer-nav-list fpc16sp14',
                'menu_id' => 'footer-nav',
                'container' => 'nav',
                'container_class' => 'footer-navigation',
                'theme_location' => 'footer_nav',
            )); ?>

            <div class="sns-icon-box">
                <div class="sns-icon"><a href=""><img
                            src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"
                            alt="facebookのアイコン" loading="lazy"></a></div>
                <div class="sns-icon"><a href=""><img
                            src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"
                            alt="X twitterのアイコン " loading="lazy"></a></div>
                <div class="sns-icon"><a href=""><img
                            src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="youtubeのアイコン" loading="lazy"></a>
                </div>
            </div>
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo-black.png" loading="lazy">
                </a>
            </div>
            <div class="right-reserve f-viga">&copy; 2024 TETOTE All Right Reserved.</div>
        </div>
    </div>
</footer>
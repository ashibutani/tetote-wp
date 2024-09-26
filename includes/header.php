<?php wp_body_open(); ?>

<header>
    <div class="header-wrapper">
        <div class="header-left">
            <?php if (is_home() || is_front_page()): ?>
                <h1 class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo.png" class="logo-white"
                            alt="株式会社TETOTE">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo-black.png"
                            class="logo-black" alt="株式会社TETOTE">
                    </a>
                </h1>
            <?php else: ?>
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo.png" class="logo-white"
                            alt="株式会社TETOTE">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo-black.png"
                            class="logo-black" alt="株式会社TETOTE">
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <div class="header-right">
            <div class="header-btn-box">
                <div class="recruiting-criteria-btn  back-black button">
                    <a href="<?php echo esc_url(home_url('/details')); ?>">
                        <p class="f14">募集要項</p>
                    </a>
                </div>
                <div class="entry-btn back-gold button">
                    <a href="<?php echo esc_url(home_url('/entry')); ?>">

                        <p class="f14 f-viga">ENTRY</p>
                    </a>
                </div>
            </div>
            <button type="button" id="js-hamburger" class="button hamburger" aria-controls="js-glabal-menu"
                aria-expanded="false" aria-label="メニューを開閉する">
                <span class="hamburger__line">
                </span>
                <span class="hmb_text f-viga fpc12sp10">MENU</span>
            </button>

        </div>
        <!-- navigation -->
        <div class="global-navigation" id="js-global-menu" aria-hidden="true">
            <div class="nav-top-logo nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo-black.png" loading="lazy">
                </a>
            </div>
            <div class="nav-left">
                <div class="nav-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-logo-black.png"
                            loading="lazy">
                    </a>
                </div>
            </div>
            <!-- pc nav  -->
            <nav class="pc-nav-right">
                <ul class="pc-nav-container">
                    <?php
                    // メニューIDを取得
                    $menu_name = 'global_nav';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    // アイテムの数を取得
                    $total_items = count($menu_items);
                    // 半分の数を計算（切り上げ）
                    $half = ceil($total_items / 2);

                    // 最初の半分のアイテムを表示
                    echo '<div class="pc-nav-wrap">';
                    for ($i = 0; $i < $half; $i++) {
                        $item = $menu_items[$i];
                        ?>
                        <li class="list-item">
                            <a href="<?php echo esc_attr($item->url); ?>">
                                <p>
                                    <span class="fpc32sp18 f-viga"> <?php echo esc_html($item->title); ?></span><br>
                                    <span class="fpc16sp12"><?php echo esc_html($item->description); ?></span>
                                </p>
                            </a>
                        </li>
                        <?php
                    }
                    echo '</div>';

                    // 残りのアイテムを表示
                    echo '<div class="pc-nav-wrap">';
                    for ($i = $half; $i < $total_items; $i++) {
                        $item = $menu_items[$i];
                        ?>
                        <li class="list-item">
                            <a href="<?php echo esc_attr($item->url); ?>">
                                <p>
                                    <span class="fpc32sp18 f-viga"> <?php echo esc_html($item->title); ?></span><br>
                                    <span class="fpc16sp12"><?php echo esc_html($item->description); ?></span>
                                </p>
                            </a>
                        </li>
                        <?php
                    }
                    echo '</div>';
                    ?>
                </ul>

                <div class="nav-btn-box">
                    <li class="pc-nav-wrap list-item">
                        <div class="nav-recruiting-criteria-btn  back-black button">
                            <a href="<?php echo esc_url(home_url('/details')); ?>">
                                <p class="f14">募集要項</p>
                            </a>
                        </div>
                    </li>
                    <li class="pc-nav-wrap list-item">
                        <div class="nav-entry-btn back-gold button">
                            <a href="<?php echo esc_url(home_url('/entry')); ?>">
                                <p class="f14 f-viga">ENTRY</p>
                            </a>
                        </div>
                    </li>
                </div>
            </nav>
            <!-- sp nav -->
            <nav class="sp-nav-right">
                <ul class="sp-nav-container">
                    <?php foreach ($menu_items as $item): ?>
                        <li class="list-item">
                            <a href="<?php echo $item->url; ?>">
                                <p>
                                    <span class="fpc32sp18 f-viga"><?php echo esc_html($item->title); ?></span><br>
                                    <span class="fpc16sp12"><?php echo $item->description; ?></span>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="nav-btn-box">
                    <li class="list-item">
                        <div class="nav-recruiting-criteria-btn  back-black button">
                            <a href="<?php echo esc_url(home_url('/details')); ?>">
                                <p class="f14">募集要項</p>
                            </a>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="nav-entry-btn back-gold button">
                            <a href="<?php echo esc_url(home_url('/entry')); ?>">
                                <p class="f14 f-viga">ENTRY</p>
                            </a>
                        </div>
                    </li>
                </div>
            </nav>
        </div>
</header>
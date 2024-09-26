<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>

    <?php get_template_part('includes/header'); ?>

    <main>
        <!--------- 社員紹介シングルページファーストビュー --------->
        <!-- カスタム投稿（スタッフ管理）ページ　ACF部分 -->
        <div class="staff-single-fv-wrapper">
            <div class="page-section-wrapper staff-profile-box">
                <div class="staff-single-eyecatch">
                    <?php
                    $eyecatch = get_eyecatch_with_default();
                    ?>
                    <img src="<?php echo $eyecatch[0]; ?>" alt="<?php the_title_attribute(); ?>">
                </div>
                <div class="staff-profile-text">
                    <?php
                    $staff_meta = get_staff_meta(get_the_ID());
                    ?>
                    <div class="staff-single-message1">
                        <span class="back-white fpc36sp18">
                            <h1><?php echo esc_html($staff_meta['firstmessage']); ?></h1>
                        </span><br>
                        <span class="back-white fpc24sp16">
                            <?php echo esc_html($staff_meta['secondmessage']); ?>
                        </span>
                    </div>
                    <div class="staff-single-message2">
                        <p class="member-division fpc14sp12">
                            <?php echo esc_html($staff_meta['position']); ?>
                        </p>
                        <span class="member-name fpc24sp20">
                            <?php echo esc_html($staff_meta['staffname']); ?>
                        </span>
                        <span class="member-year fpc16sp12">
                            <?php echo esc_html($staff_meta['year']); ?>年入社
                        </span>
                    </div>
                    <div class="staff-single-message3">
                        <p class="fpc16sp12">
                            <?php echo esc_html($staff_meta['profile']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>

        <!-- カスタム投稿（スタッフ管理）ページ　本文とサイドバー部分 -->
        <div class="page-section-wrapper" id="staff-detail-page">
            <div class="staff-detail-inner">
                <?php the_content(); ?>
            </div>
            <div class="page-side-bar f14">
                <p class=toc>目次</p>
                <?php echo do_shortcode('[ez-toc]'); ?>
            </div>


        </div>
        <!-- その他のメンバー -->
        <div class="back-white staff-wrapper">
            <p class="other-member fpc32sp18">その他のメンバー</p>
            <div class="staff-item-container">
                <?php
                // 現在の投稿IDを取得
                $current_post_id = get_the_ID();
                $args = array(
                    'post_type' => 'staff',
                    'posts_per_page' => 3,
                    'orderby' => 'rand', // ランダム表示
                    'post__not_in' => array($current_post_id), // 現在の投稿IDを除外
                );

                $other_staff_query = new WP_Query($args);
                if ($other_staff_query->have_posts()):
                    while ($other_staff_query->have_posts()):
                        $other_staff_query->the_post();
                        $staff_meta = get_staff_meta(get_the_ID());
                        ?>

                        <!-- staff-item-boxパーツにデータを渡す　-->
                        <?php
                        set_query_var('staff_meta', $staff_meta);
                        set_query_var('eyecatch', $eyecatch); ?>

                        <!-- ↓　staff-item-boxパーツ　↓ -->
                        <div class="staff-item-box">
                            <?php get_template_part('includes/staff-item-box'); ?>
                        </div>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '投稿がありません。';
                endif;
                ?>
            </div>
        </div>
    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
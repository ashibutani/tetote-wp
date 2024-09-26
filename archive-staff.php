<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <meta name="description"
        content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。このページでは、社員について解説しています。">
    <title>社員について | 株式会社TETOTE</title>

</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="staff">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/staff-fv.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">STAFF</h1>
                <p class="page-subtitle fpc24sp12 back-white">社員について</p>
                <p class="page-description fpc16sp14 back-white">弊社社員のリアルな声を紹介しています。</p>
            </div>
        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容  社員について-->
        <div class="staff-wrapper back-white">
            <div class="staff-item-container">
                <?php
                $args = array(
                    'post_type' => 'staff',
                    'posts_per_page' => -1,
                );

                $archive_staff_query = new WP_Query($args);
                if ($archive_staff_query->have_posts()):
                    while ($archive_staff_query->have_posts()):
                        $archive_staff_query->the_post();
                        $staff_meta = get_staff_meta(get_the_ID());
                        $eyecatch = get_eyecatch_with_default();
                        ?>
                        <!-- staff-item-boxパーツにデータを渡す　-->
                        <?php
                        set_query_var('staff_meta', $staff_meta);
                        set_query_var('eyecatch', $eyecatch); ?>

                        <div class="staff-item-box">
                            <!-- ↓　staff-item-boxパーツ　↓ -->
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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="blog">
            <div class="page-fv-img">
                <!-- ファーストビュー画像には遅延読み込みは適用しない -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-fv.jpg" alt="Blog Image">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">BLOG</h1>
                <p class="page-subtitle fpc24sp12 back-white">社員ブログ</p>
                <p class="page-description fpc16sp14 back-white">採用情報やイベント情報などをご紹介します。</p>
            </div>
        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容  blog-->
        <div class="blog-page-wrapper page-section-wrapper">
            <div class="blog-wrapper">
                <?php
                // 1ページに表示する投稿の数を指定
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8, // 1ページあたり8件表示
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $paged_query = new WP_Query($args);

                if ($paged_query->have_posts()): ?>
                    <?php while ($paged_query->have_posts()):
                        $paged_query->the_post(); ?>

                        <!-- ↓　blog-contents-boxパーツ　↓ -->
                        <?php get_template_part('includes/blog-contents-box'); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>投稿記事がありません。</p>
                <?php endif; ?>

                <!-- ページネーション -->
                <div class="blog-pagenation-box">
                    <?php 
                    echo paginate_links(array(
                        'total' => $paged_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'prev_next' => true, // 前後のリンクを表示する
                        'prev_text' => __('« Previous'),
                        'next_text' => __('Next »'),
                    ));

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>

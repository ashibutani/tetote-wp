<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php if (is_archive()) {
        $post_type = get_query_var('post_type');

        // タイトルの取得と出力
        $archive_title = get_option($post_type . '_title');
        if ($archive_title) {
            echo '<title>' . esc_html($archive_title) . '</title>';
        }

        // ディスクリプションの取得と出力
        $archive_description = get_option($post_type . '_description');
        if ($archive_description) {
            echo '<meta name="description" content="' . esc_attr($archive_description) . '">';
        }
    } ?>
</head>

<body <?php body_class('page'); ?>>

    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="blog">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-fv.jpg" alt="Blog Image">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">BLOG</h1>
                <p class="page-subtitle fpc24sp12 back-white">採用ブログ</p>
                <p class="page-description fpc16sp14 back-white">採用情報やイベント情報などをご紹介します。</p>
            </div>
        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容  blog-->
        <div class="blog-page-wrapper page-section-wrapper">
            <div class="blog-wrapper">
                <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
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
                        'prev_next' => false, // 前後のリンクを表示する
                        'end_size' => 1,

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
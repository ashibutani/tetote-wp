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
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-fv.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">BLOG</h1>
                <p class="page-subtitle fpc24sp12 back-white">社員ブログ</p>
                <p class="page-description fpc16sp14 back-white">採用情報やイベント情報などをご紹介します。</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <div class="breadcrumb-wrapper">
            <div class="breadcrumb fps14sp12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
            </div>
        </div>
        <!-- 固定ページ内容  blog-->
        <div class="blog-page-wrapper page-section-wrapper">
            <div class="blog-wrapper">
                <?php
                // 何件あっても1ページ8件、2ページ（計16件）のみ表示
                // 最新の16件の投稿を取得
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, // 全件取得（16件まで）
                    'orderby' => 'date', // 日付順
                    'order' => 'DESC', // 降順（最新が最初）
                );

                $all_posts_query = new WP_Query($args);
                $total_posts = $all_posts_query->found_posts;
                $total_posts = $total_posts > 16 ? 16 : $total_posts;

                // 1ページに8件表示
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8, // 1ページに表示する投稿数
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // 現在のページ番号
                    'orderby' => 'date', // 日付順
                    'order' => 'DESC', // 降順（最新が最初）
                    'post__in' => array_slice(array_column($all_posts_query->posts, 'ID'), 0, 16), // 最新の16件のID
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
                    <?php echo paginate_links(array(
                        'total' => $paged_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'prev_next' => false,
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
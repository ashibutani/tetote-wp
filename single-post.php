<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <main>
                <div class="blog-single-wrapper back-beige" id="blog-single-page">
                    <!-- パンくずリスト -->
                    <?php get_template_part('includes/breadcrumbs'); ?>

                    <!-- ブログシングルページ内容 -->

                    <div class="blog-single-inner back-white">
                        <div class="blog-category-date">
                            <div class="category">
                                <div class="category-icon fps14sp12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/category-icon.png">

                                </div>
                                <!-- カテゴリー表示 -->
                                <?php
                                $descends = get_term_descendants();
                                if ($descends):
                                    foreach ($descends as $descend):
                                        $term_name = $descend->name;
                                    endforeach;
                                endif;
                                ?>
                                <?php echo $term_name; ?>
                            </div>

                            <div class="blog-date fps14sp12">
                                <?php the_time(get_option('date_format')); ?>
                            </div>
                        </div>

                        <div class="block-editer-wrap">
                            <div class="blog-title fpc32sp18">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="blog-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="blog-bottom-wrapper">
                    <div class="blog-bottom-inner">
                        <div class="blog-next-box">
                            <?php
                            $next_post = get_next_post();
                            if (!empty($next_post)):
                                $next_link = get_permalink($next_post);
                                $next_title = trim_post_title(get_the_title($next_post));
                                ?>
                                <a href="<?php echo esc_url($next_link); ?>">
                                    <div class="blog-next-arraw">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow02-left.png">
                                    </div>
                                    <div class="blog-next-article">
                                        <div class="blog-title fpc16sp14">
                                            <?php echo esc_html($next_title); ?>
                                        </div>
                                        <div class="blog-date fpc12sp10">
                                            <?php echo get_the_date('', $next_post); ?>
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="blog-prev-box">
                            <?php
                            $prev_post = get_previous_post();
                            if (!empty($prev_post)):
                                $prev_link = get_permalink($prev_post);
                                $prev_title = trim_post_title(get_the_title($prev_post));
                                ?>
                                <a href="<?php echo esc_url($prev_link); ?>">
                                    <div class="blog-prev-article">
                                        <div class="blog-title fpc16sp14">
                                            <?php echo esc_html($prev_title); ?>
                                        </div>
                                        <div class="blog-date fpc12sp10">
                                            <?php echo get_the_date('', $prev_post); ?>
                                        </div>
                                    </div>
                                    <div class="blog-prev-arraw">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow02-right.png">
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

            </main>
        <?php endwhile; ?>
    <?php endif; ?>
    <!--------- footer --------->

    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
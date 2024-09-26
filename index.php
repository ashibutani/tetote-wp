<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>


    <main>
        <!--------- ファーストビュー --------->
        <div class="fv-wrapper">
            <div class="fv-slide-box slideinTop">
                <img class="slide_pic" src="<?php echo get_template_directory_uri(); ?>/images/fv01.jpg">
                <img class="slide_pic" src="<?php echo get_template_directory_uri(); ?>/images/fv02.jpg">
            </div>
            <div class="slogan-en">
                <h4 class="fpc96sp48 f-viga">
                    BECOME A<br>
                    CHALLENGER.
                </h4>
            </div>
            <div class="slogan-jp back-black">
                <h2 class="fpc24sp12 ">
                    君の挑戦が、意思が、未来を変える
                </h2>
            </div>
            <div class="new-topic-contaiter">
                <div class="new-topic-left back-black">
                    <p class="fpc24sp10">NEWS</p>
                </div>

                <div class="new-topic-right">
                    <!-- 最新ブログを掲載 -->
                    <?php query_posts('posts_per_page=1'); ?>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <p class="fpc16sp12">
                                <a href="
                                <?php the_permalink(); ?>">
                                    <?php
                                    $title = get_the_title();
                                    $truncated_title_40 = get_truncated_title_40($title);
                                    echo esc_html($truncated_title_40);
                                    ?>
                                </a>
                            </p>
                            <?php
                        endwhile; ?>
                    <?php else: ?>
                        <p>投稿記事がありません。</p>
                    <?php endif; ?>
                    <div class="topic-view-more">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            <p class="f14 f-viga">VIEW MORE</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!--------- セカンドビュー --------->
        <div class="second-view">
            <!-- スライダー1 -->
            <div class="slider-wrapper">
                <h2 class="slide-catch fpc40sp24">
                    <span class="back-white">後悔しないキャリアを作る、</span><br>
                    <span class="back-white">それこそが、我々の使命だ</span>
                </h2>
                <div class="slider sv-slider">
                    <div class="slide-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpeg" alt="スライダー写真１">
                    </div>
                    <div class="slide-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpeg" alt="スライダー写真２">
                    </div>
                    <div class="slide-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpeg" alt="スライダー写真３">
                    </div>
                </div>
            </div>
            <!--  理念-->
            <div class="philosophy-wrapper" id="philosophy">
                <div class="philosophy-container">
                    <h4 class="fpc36sp18">
                        「人手不足」<br>
                        今の日本が抱えるこの社会課題に挑み、<br>
                        企業と個人の可能性を最大限に引き出す。<br>
                        それが私達の役目。
                    </h4>
                </div>
                <div class="philosophy-container">
                    <h4 class="fpc36sp18">
                        単につなぐだけじゃない。<br>
                        「手と手」を取り合っていけるような、<br>
                        持続可能な社会を、一緒に作りませんか？
                    </h4>
                </div>
                <button class="view-more-btn">
                    <a href="<?php echo esc_url(home_url('/about-us')); ?>">
                        <p class="f-viga">VIEW MORE</p>
                        <div class="arrow1">

                        </div>
                    </a>
                </button>

            </div>
        </div>
        <!---------  人を知る　--------->
        <section>
            <div class="overflow-wrapper">
                <div class="member section-wrapper" id="staff">
                    <div class="f-poppins back-text">MEMBER</div>
                    <h3 class="fpc52sp32"><span class="underline">人</span>を知る</h3>
                    <div class="secition-description f16">TETOTEの社員がどういった信念を持って働いているのか、<br>
                        一日のスケジュールや仕事内容などを紹介します。</div>

                    <!-- メンバースライダー -->
                    <div class="member-slider-wrapper">
                        <div class="slider member-slider ">
                            <?php
                            $args = array(
                                'post_type' => 'staff',
                                'posts_per_page' => -1,
                            );

                            $staff_posts_query = new WP_Query($args);
                            if ($staff_posts_query->have_posts()):
                                while ($staff_posts_query->have_posts()):
                                    $staff_posts_query->the_post();
                                    $staff_meta = get_staff_meta(get_the_ID());
                                    $eyecatch = get_eyecatch_with_default();
                                    ?>
                                    <!-- staff-item-boxパーツにデータを渡す　-->
                                    <?php
                                    set_query_var('staff_meta', $staff_meta);
                                    set_query_var('eyecatch', $eyecatch); ?>

                                    <div class="slide-item-box">
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
                    <div class="member-slider-bottom">
                        <button class="view-more-btn">
                            <a href="<?php echo esc_url(home_url('/staff')); ?>">
                                <p class="f-viga">VIEW MORE</p>
                                <div class="arrow1">
                                </div>
                            </a>
                        </button>

                        <div class="arrow_box">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- 制度環境を知る --------->
        <section>
            <div class="benefits section-wrapper text-center" id="benefits">
                <div class="f-poppins back-text">BENEFITS</div>
                <h3 class="fpc52sp32"><span class="underline">制度・環境</span>を知る</h3>
                <div class="secition-description f16">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</div>

                <div class="benefits-container-box">
                    <div class="benefits-container career">
                        <a href="<?php echo esc_url(home_url('/career')); ?>">
                            <div class="benefits-contentnts-box">
                                <p class="f-viga benefit-font1">Traning And Career</p>
                                <div class="cercle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/career.png"
                                        loading="lazy">
                                </div>

                                <div class="next-arrow">

                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-2-white.png"
                                        alt="next button" loading="lazy">

                                </div>

                                <p class="back-gold benefit-font2">研修制度とキャリアパス</p>
                            </div>
                            <div class="benefit-abstraction">
                                <p class="f16">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                            </div>
                        </a>
                    </div>
                    <div class="benefits-container welfare">
                        <a href="<?php echo esc_url(home_url('/benefits')); ?>">
                            <div class="benefits-contentnts-box">
                                <p class="f-viga benefit-font1">employee benefits</p>
                                <div class="cercle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/welfare.png"
                                        loading="lazy">
                                </div>

                                <div class="next-arrow">

                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-2-white.png"
                                        alt="next button" loading="lazy">

                                </div>

                                <p class="back-gold benefit-font2">福利厚生</p>
                            </div>
                            <div class="benefit-abstraction ">
                                <p class="f16">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--------- 採用  --------->

        <div class="recruitment " id="recruitment">
            <!-- ブログ -->
            <div class="recruitment-blog section-wrapper" id="recruitment-blog">
                <div class="f-poppins back-text">BLOG</div>
                <h3 class="fpc52sp32">採用ブログ</h3>
                <div class="recruitment-arrow-box">
                    <div class="next-arrow">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-2.png" alt="next button"
                                loading="lazy">
                        </a>
                    </div>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>">
                        <p class="f-viga">VIEW MORE</p>
                    </a>
                </div>
                <div class="secition-description f16">採用情報やイベント情報、社員の紹介など、<br>
                    日々の現場の様子をご紹介します。</div>
                <div class="blog-wrapper">
                    <?php
                    $args = array(
                        'posts_per_page' => 4,
                    );
                    $blog_posts_query = new WP_Query($args);

                    if ($blog_posts_query->have_posts()): ?>
                        <?php while ($blog_posts_query->have_posts()):
                            $blog_posts_query->the_post(); ?>
                            <!-- ↓　blog-contents-boxパーツ　↓ -->
                            <?php get_template_part('includes/blog-contents-box'); ?>

                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>投稿記事がありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); // 元のクエリに戻す ?>
                </div>
            </div>

            </section>
            <!-- 採用情報 -->
            <section>
                <div class="overflow-wrapper">
                    <div class="recruitment-info section-wrapper text-center" id="recruitment-info">
                        <div class="f-poppins back-text">RECRUITMENT</div>
                        <h3 class="fpc52sp32">採用情報</h3>
                        <div class="secition-description f16">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</div>

                        <div class="recruitment-container-box f20">
                            <div class="recruitment-container container-50pro back-white">
                                <a href="<?php echo esc_url(home_url('/details')); ?>"> </a>
                                募集要項
                                <div class="arrow1">
                                </div>

                            </div>
                            <div class="recruitment-container container-50pro back-white">
                                <a href="<?php echo esc_url(home_url('/faq')); ?>"> </a>
                                よくある質問
                                <div class="arrow1">
                                </div>

                            </div>
                            <div class="recruitment-container back-white">
                                <a href="<?php echo esc_url(home_url('/about-us#company')); ?>"> </a>
                                会社概要
                                <div class="arrow1">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </section>
        </div>






    </main>

    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
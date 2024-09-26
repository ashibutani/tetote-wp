<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>

        <div class="blog-single-wrapper back-beige" id="entry">


            <!-- パンくずリスト -->
            <?php get_template_part('includes/breadcrumbs'); ?>

            <div class="entry-inner back-white">

                <!-- 問い合わせフォーム -->
                <div class="form-wrapper">
                    <p class="end-message fpc32sp18">送信ありがとうございました。</p>
                    <p class="end-message fpc16sp14"><span>3営業日以内に人事担当者より</span><span>連絡させていただきます。</span></p>

                    <p class="false-message">送信失敗です</p>
                </div>






            </div>

        </div>
    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
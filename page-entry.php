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

                <!-- エントリーフォーム -->
                <div class="form-wrapper">
                    <p class="entry-line1 fpc24sp16">ENTRY FORM</p>
                    <p class="entry-line2 fpc32sp18"><span class="font-gold">新卒・中途採用</span><span>エントリーフォーム</span></p>
                    <p class="entry-line3 fpc16sp14">当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
                        <span class="font-gold">※</span>は必須項目になります。
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>






    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
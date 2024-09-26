<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="carrer">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/carrer-fv 1.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">CAREER</h1>
                <p class="page-subtitle fpc24sp12 back-white">研修制度とキャリアパス</p>
                <p class="page-description fpc16sp14 back-white">キャリアパスを支える充実した、研修制度</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容 -->
        <div class="carrer-page-wrapper page-section-wrapper">
            <section>
                <h2 class="page-h2 fpc32sp18">キャリアパスに沿った研修制度を用意</h2>
                <p class="fpc16sp14">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
                <div class="carrerpath-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tetote-carrer-path.jpg">
                </div>
                <p class="fpc16sp14">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
                <dl class="carrer-ex">
                    <dt class="fpc24sp16">1.ケーススタディ研修</dt>
                    <dd class="fpc16sp14">TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
                        この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。</dd>
                    <dt class="fpc24sp16">2. クライアント対応研修</dt>
                    <dd class="fpc16sp14">TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
                        この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。</dd>
                    <dt class="fpc24sp16">3. 専門知識研修</dt>
                    <dd class="fpc16sp14">財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br> TETOTE
                        は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。</dd>
                    <dt class="fpc24sp16">4. マネジメント研修修</dt>
                    <dd class="fpc16sp14">プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br> TETOTE
                        は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。 </dd>
                    <dt class="fpc24sp16">5. 外部研修</dt>
                    <dd class="fpc16sp14">社外で実施される研修にも積極的に参加することができます。<br> TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
                        </dd>
                </dl>
            </section>
        </div>






    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
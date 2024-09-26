<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>

    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="about-us">
            <div class="page-fv-img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-fv 1.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">ABOUT US</h1>
                <p class="page-subtitle fpc24sp12 back-white">TETOTEについて</p>
                <p class="page-description fpc16sp14 back-white">私たちの理念を紹介をします。</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容 -->
        <div class="about-us-wrapper page-section-wrapper">
            <section>

                <h2 class="fpc32sp18 text-center">私達が大切にしていること</h2>

                <div class="important-policy-container-box">
                    <div class="important-policy-container">
                        <div class="policy-title-box">
                            <p class="policy-number fpc18sp14">1</p>
                            <p class="policy-title fpc20sp16">飽くなき探求心で、革新を創り出す</p>
                        </div>
                        <p class="policy-body fpc16sp14 ">
                            100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。
                        </p>
                    </div>


                    <div class="important-policy-container">
                        <div class="policy-title-box">
                            <p class="policy-number fpc18sp14">2</p>
                            <p class="policy-title fpc20sp16">デジタル技術の力で、未来を加速させる</p>
                        </div>
                        <p class="policy-body fpc16sp14 ">
                            ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。
                        </p>

                    </div>
                    <div class="important-policy-container">
                        <div class="policy-title-box">
                            <p class="policy-number fpc18sp14">3</p>
                            <p class="policy-title fpc20sp16">人材こそが、未来への鍵</p>
                        </div>
                        <p class="policy-body fpc16sp14 ">
                            従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。
                        </p>

                    </div>
                    <div class="important-policy-container">
                        <div class="policy-title-box">
                            <p class="policy-number fpc18sp14">4</p>
                            <p class="policy-title fpc20sp16">未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</p>
                        </div>
                        <p class="policy-body fpc16sp14 ">
                            IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。
                        </p>

                    </div>
                    <div class="important-policy-container">
                        <div class="policy-title-box">
                            <p class="policy-number fpc18sp14">5</p>
                            <p class="policy-title fpc20sp16">働きがいと充実感あふれる環境</p>
                        </div>
                        <p class="policy-body fpc16sp14 ">
                            ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。
                        </p>


                    </div>

                </div>

            </section>
            </section>
            <section>
                <h2 class="fpc32sp18 text-center">代表メッセージ</h2>
                <div class="ceo-message-wrapper">
                    <div class="ceo-pic">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ceo 1.jpg">
                    </div>
                    <div class="ceo-message">
                        <div class="ceo-message-heading fpc32sp18">
                            あなたがやりたいこと<br>
                            それを全力でサポートできる、<br>
                            それがTETOTEの強みです。
                        </div>
                        <div class="ceo-message-body fpc16sp14">
                            <p>TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。
                            </p>
                            <p>お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。
                            </p>
                            <p>TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。
                            </p>
                            <p>私たちと共に、未来を創造していきましょう。</p>
                            <div class="ceo-sign"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ceo-sign.png">
                            </div>
                        </div>
                    </div>

            </section>
            <section>
                <h2 class="fpc32sp18">事業紹介</h2>
                <div class="business-introduction-wrapper">
                    <p class="business-introduction-top fpc16sp14">
                        TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか紹介させていただきます。
                    </p>
                    <div class="business-introduction-container">
                        <div class="business-pic">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/consulting.jpg">
                        </div>
                        <div class="business-text-box">
                            <div class="business-heading fpc32sp18">
                                コンサルティング事業
                            </div>
                            <div class="business-sub-heading fpc24sp16">
                                お客様と伴走し、売上に直接貢献できる
                            </div>
                            <div class="business-body fpc16sp14">
                                営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。
                            </div>
                        </div>
                    </div>
                    <div class="business-introduction-container">
                        <div class="business-pic">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/solution-sales.jpg">
                        </div>
                        <div class="business-text-box">
                            <div class="business-heading fpc32sp18">
                                ソリューション営業事業
                            </div>
                            <div class="business-sub-heading fpc24sp16">
                                お客様の課題を見つけ出し、必要な施策を 提案する
                            </div>
                            <div class="business-body fpc16sp14">
                                お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。
                            </div>
                        </div>
                    </div>
                    <div class="business-introduction-container">
                        <div class="business-pic">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/desiner.jpg">
                        </div>
                        <div class="business-text-box">
                            <div class="business-heading fpc32sp18">
                                業務系システム開発事業
                            </div>
                            <div class="business-sub-heading fpc24sp16">
                                お客様の課題解決を強力にサポートする システムを設計する
                            </div>
                            <div class="business-body fpc16sp14">
                                基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="fpc32sp18 scroll-h2" id="company">会社概要</h2>
                <table class="company-table fpc16sp14">
                    <tr>
                        <th>会社名</th>
                        <td>TETOTE株式会社</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒100-0001 東京都千代田区千代田 1-1-1</td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td>田中 浩二郎 (代表取締役)</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td class="line2">・ITコンサルティング<br>
                            ・コンサル導入企業への営業</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>03-1234-5678</td>
                    </tr>
                    <tr>
                        <th>ウェブサイトURL</th>
                        <td>https://tetote.co.jp</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>tetote@tetote.co.jp</td>
                    </tr>
                    <tr>
                        <th>設立年月</th>
                        <td>1923年4月1日</td>
                    </tr>
                </table>
            </section>
        </div>







    </main>

    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
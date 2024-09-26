<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="faq">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/faq-fv.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">FAQ</h1>
                <p class="page-subtitle fpc24sp12 back-white">よくある質問</p>
                <p class="page-description fpc16sp14 back-white">皆様からよく頂くご質問にお答えします。</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>


        <div class="faq-page-wrapper page-section-wrapper">
            <div class="jump-btn-wrapper">
                <div class="jump-btn">
                    <a href="#aboutapplication"></a>
                    <p class="jump-btn-text">応募・選考について</p>

                </div>
                <div class="jump-btn">
                    <a href="#aboutcarrer"></a>
                    <p class="jump-btn-text">キャリアについて</p>

                </div>
                <div class="jump-btn">
                    <a href="#aboutbenifits"></a>
                    <p class="jump-btn-text">福利厚生について</p>

                </div>
            </div>
            <h2 class="page-h2 fpc32sp18 scroll-h2" id="aboutapplication">応募・選考について</h2>
            <section class="accordion">
                <div class="accordion-container">
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>応募資格はありますか？
                    </h4>
                    <div class="accordion-content">・大学卒業以上の学歴
                        </div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>応募方法は？</h4>
                    <div class="accordion-content">弊社採用サイトからエントリーしてください。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>選考フローは？</h4>
                    <div class="accordion-content">・書類選考: 履歴書・職務経歴書の提出<br>
                        ・一次面接: 人事担当者または部門マネージャーとの面接<br>
                        ・適性検査: 技術試験や性格診断テスト（ポジションによって異なります）<br>
                        ・二次面接: 部門責任者との面接<br>
                        ・最終面接: 役員面接<br>
                        ・内定: 合格通知とオファーレターの送付</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>選考にかかる時間は？
                    </h4>
                    <div class="accordion-content">選考プロセス全体で、通常は約4〜6週間を予定しています。各ステージの結果通知までの期間は以下の通りです：<br>

                        ・書類選考: 1〜2週間<br>
                        ・一次面接: 1週間<br>
                        ・適性検査: 1週間<br>
                        ・二次面接: 1週間<br>
                        ・最終面接: 1週間</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>面接では何を聞かれますか？
                    </h4>
                    <div class="accordion-content">

                        共通の質問としては自己紹介とこれまでの経歴、
                        志望動機、
                        当社を選んだ理由、
                        強み・弱み、
                        キャリアゴール等です。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>面接官はどんな人ですか？
                    </h4>
                    <div class="accordion-content">
                        面接官は、専門知識を持った経験豊富なプロフェッショナルであり、公平かつ親切な態度で面接を進めます。応募者のポテンシャルを引き出すために、リラックスできる雰囲気を心がけています。</div>
                </div>
            </section>
            <h2 class="page-h2 fpc32sp18 scroll-h2" id="aboutcarrer">キャリア</h2>
            <section class="accordion">
                <div class="accordion-container">
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>自分の希望するキャリアパスに進むことはできますか？</h4>
                    <div class="accordion-content">
                        はい、当社では社員一人ひとりのキャリア目標を尊重し、希望するキャリアパスに進むための支援を行っています。
                        </div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>転勤はありますか？</h4>
                    <div class="accordion-content">業務の必要に応じて、転勤が発生する場合があります。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>転勤の希望は出せますか？
                    </h4>
                    <div class="accordion-content">はい、転勤の希望を出すことができます。当社では従業員のキャリア形成やライフスタイルに応じた柔軟な配置を目指しています。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>ワークライフバランスは？
                    </h4>
                    <div class="accordion-content">
                        当社では社員のワークライフバランスを非常に重視しています。社員が仕事とプライベートの両方で充実した生活を送れるよう、さまざまな制度や取り組みを導入しています。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>具体的にはどのような制度がありますか？</h4>
                    <div class="accordion-content">
                        . 柔軟な働き方の推奨:<br>

                        フレックスタイムやリモートワーク制度により、社員が自分のペースで働ける環境を整えています。<br>
                        2. 充実した休暇制度:<br>

                        有給休暇の取得推奨や長期休暇制度により、リフレッシュの機会を提供しています。<br>
                        3. 家族との両立支援:<br>

                        育児・介護休業制度や短時間勤務制度により、家族との時間を大切にできるよう支援しています。<br>
                        4. 健康とウェルビーイングの重視:<br>

                        健康管理プログラムやメンタルヘルスサポートにより、社員の健康を維持し、仕事のパフォーマンスを高める取り組みを行っています。<br>

                        その他、本サイトの「BENEFITS」のページをご覧ください。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>育児休暇制度はありますか？
                    </h4>
                    <div class="accordion-content">
                        育児休業や介護休業を柔軟に取得できる制度があります。また、復職後の短時間勤務制度やフレックスタイム制度を活用し、育児や介護と仕事の両立を支援します。</div>
                </div>
            </section>
            <h2 class="page-h2 fpc32sp18 scroll-h2" id="aboutbenifits">福利厚生について</h2>
            <section class="accordion">
                <div class="accordion-container">
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>どのような福利厚生制度がありますか？</h4>
                    <div class="accordion-content">本サイトの「BENEFITSー各種制度」をご覧ください。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>財形貯蓄制度の内容は？
                    </h4>
                    <div class="accordion-content">財形貯蓄を支援する制度です。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span class="f-viga accordion-q">Q</span>社内イベントの内容は？
                    </h4>
                    <div class="accordion-content">当社では、社員の交流やリフレッシュを目的としたさまざまな社内イベントを開催しています。以下は主なイベントの例です。<br>
                        1. 季節ごとのイベント:<br>
                        春: お花見や新入社員歓迎会<br>
                        夏: バーベキューパーティやスポーツ大会<br>
                        秋: ハイキングや文化祭<br>
                        冬: 忘年会やクリスマスパーティ<br>
                        2. 社員旅行:<br>
                        3. スポーツイベント:<br>
                        4. 文化イベント:<br>
                        5. ボランティアイベント:<br>
                        6. 研修・セミナー:<br>
                        業務に役立つスキルアップ研修やセミナー<br>
                        業界の専門家を招いた講演会</div>
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>部活動について教えてください。</h4>
                    <div class="accordion-content">
                        当社では部活動を通じて、業務外での交流やリフレッシュ、趣味の共有ができる場を提供しています。また、新しい部活動の設立も可能です。<br><br>
                        現在、以下のような部活動があります：<br>
                        フットサル部<br>
                        バスケットボール部<br>
                        テニス部<br>
                        ヨガ部<br>
                        写真部<br>
                        料理部<br>
                        ボードゲーム部

                    </div>
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>資格取得支援制度はいくら補助が出ますか？</h4>
                    <div class="accordion-content">
                        資格取得支援制度では、以下のような補助が提供されます：<br>
                        1. 資格試験の受験費用:<br>
                        試験の受験費用は、原則として全額補助されます。ただし、特定の資格については上限額が設定される場合があります。<br>
                        2. 資格取得に関連する研修費用:<br>
                        資格取得に必要な研修や講座の受講費用も補助されます。こちらも全額補助が原則ですが、一部補助の場合や上限額が設定される場合があります。<br>
                        3. 資格更新費用:<br>
                        継続的な資格更新が必要な場合、その費用も補助対象となります。。</div>
                    <h4 class="accordion-title jsAccordionTitle"><span
                            class="f-viga accordion-q">Q</span>年次有給休暇について教えてください</h4>
                    <div class="accordion-content">
                        有給休暇の日数は、勤続年数に応じて異なります。<br>
                        具体的な日数は以下の通りです：<br>

                        入社1年目: 10日<br>
                        入社2年目: 11日<br>
                        入社3年目: 12日<br>
                        入社4年目: 14日<br>
                        入社5年目: 16日<br>
                        入社6年目: 18日<br>
                        入社7年目: 20日</div>
                </div>
            </section>
        </div>




    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
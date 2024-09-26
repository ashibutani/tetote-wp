<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="details">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/details-fv 1.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">DETAILS</h1>
                <p class="page-subtitle fpc24sp12 back-white">募集要項</p>
                <p class="page-description fpc16sp14 back-white">TETOTEは幅広く仲間を募集しています。</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>

        <!-- 固定ページ内容 -->
        <div class="details-page-wrapper page-section-wrapper">
            <h2 class="page-h2 fpc32sp18"><span>あなたが輝ける場所が、</span><span>ここにはある</span></h2>
            <p class="details-overview fpc16sp14">TETOTEでは、コンサルタントを中心に、様々な職種を募集しています。</p>
            <div class="jump-btn-wrapper">
                <div class="jump-btn">
                    <a href="#consulting"></a>
                    <p class="jump-btn-text">コンサルタント</p>

                </div>
                <div class="jump-btn">
                    <a href="#solution-sales"></a>
                    <p class="jump-btn-text">ソリューション営業</p>

                </div>
                <div class="jump-btn">
                    <a href="#system_engineer"></a>
                    <p class="jump-btn-text">システムエンジニア</p>

                </div>
            </div>
            <section>
                <h2 class="page-h2 fpc32sp18 scroll-h2" id="consulting">募集要項-コンサルタント</h2>
                <table class="details-table fpc16sp14">
                    <tr>
                        <th>職種名</th>
                        <td>コンサルタント</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>正社員</td>
                    </tr>
                    <tr>
                        <th>業務内容</th>
                        <td>クライアントの課題解決のためのコンサルティング業務</td>
                    </tr>
                    <tr>
                        <th>就業時間</th>
                        <td>9:00～18:00（フレックスタイム制）</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>年収500万円～（経験・能力による）</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>東京、大阪、名古屋</td>
                    </tr>
                    <tr>
                        <th>転勤の有無</th>
                        <td>あり</td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>土日祝日、年末年始、夏季休暇</td>
                    </tr>
                    <tr>
                        <th>選考について</th>
                        <td>書類選考、面接</td>
                    </tr>
                    <tr>
                        <th>採用人数</th>
                        <td>若干名</td>
                    </tr>
                </table>
            </section>
            <section>
                <h2 class="page-h2 fpc32sp18 scroll-h2" id="solution-sales">募集要項-ソリューション営業</h2>
                <table class="details-table fpc16sp14">
                    <tr>
                        <th>職種名</th>
                        <td>ソリューション営業</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>正社員</td>
                    </tr>
                    <tr>
                        <th>業務内容</th>
                        <td>顧客の課題解決のためのソリューション提案、販売顧客の課題解決のためのソリューション提案、販売</td>
                    </tr>
                    <tr>
                        <th>就業時間</th>
                        <td>9:00～18:00（フレックスタイム制）</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>年収500万円～（経験・能力による）</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>東京、大阪、名古屋</td>
                    </tr>
                    <tr>
                        <th>転勤の有無</th>
                        <td>あり</td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>土日祝日、年末年始、夏季休暇</td>
                    </tr>
                    <tr>
                        <th>選考について</th>
                        <td>書類選考、面接</td>
                    </tr>
                    <tr>
                        <th>採用人数</th>
                        <td>若干名</td>
                    </tr>
                </table>
            </section>
            <section>
                <h2 class="page-h2 fpc32sp18 scroll-h2" id="system_engineer">募集要項-システムエンジニア</h2>
                <table class="details-table fpc16sp14">
                    <tr>
                        <th>職種名</th>
                        <td>システムエンジニア</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>正社員</td>
                    </tr>
                    <tr>
                        <th>業務内容</th>
                        <td>システム開発、インフラ構築、データ分析など</td>
                    </tr>
                    <tr>
                        <th>就業時間</th>
                        <td>9:00～18:00（フレックスタイム制）</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>年収500万円～（経験・能力による）</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>東京、大阪、名古屋</td>
                    </tr>
                    <tr>
                        <th>転勤の有無</th>
                        <td>あり</td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>土日祝日、年末年始、夏季休暇</td>
                    </tr>
                    <tr>
                        <th>選考について</th>
                        <td>書類選考、面接</td>
                    </tr>
                    <tr>
                        <th>採用人数</th>
                        <td>若干名</td>
                    </tr>
                </table>
            </section>






    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>
    <?php get_footer(); ?>
</body>

</html>
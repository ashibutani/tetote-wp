<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class('page'); ?>>
    <?php get_template_part('includes/header'); ?>
    <main>
        <!--------- 個別ページファーストビュー --------->
        <div class="page-fv-wrapper" id="benefits">
            <div class="page-fv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/benefits-fv 1.jpg">
            </div>
            <div class="page-fv-textbox">
                <h1 class="page-title fpc64sp45 back-white f-viga">BENEFITS</h1>
                <p class="page-subtitle fpc24sp12 back-white">福利厚生ついて</p>
                <p class="page-description fpc16sp14 back-white">充実した福利厚生制度を設けています。</p>
            </div>

        </div>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumbs'); ?>
        <!-- 固定ページ内容 -->
        <div class="benefits-page-wrapper page-section-wrapper">
            <section>
                <h2 class="fpc32sp18">各種制度</h2>
                <table class="benefits-table fpc16sp14">
                    <tr>
                        <th>手当</th>
                        <td class="line2">・通勤手当（上限月5万円）<br>
                            ・時間外割増手当<br> ・役職手当<br> ・退職金</td>
                    </tr>
                    <tr>
                        <th>制度</th>
                        <td>財形貯蓄</td>
                    </tr>
                    <tr>
                        <th>保険</th>
                        <td>社会保険完備</td>
                    </tr>
                    <tr>
                        <th>施設</th>
                        <td class="line2">・社員向けジム<br> ・社内託児所</td>
                    </tr>
                    <tr>
                        <th>休暇・休日</th>
                        <td class="line2">・完全週休2日制<br>
                            ・年次有給休暇（初年度10日／年度途中入社は比例付与）<br>
                            ・年末年始休暇（12月29日～1月3日：6日間）<br>
                            ・夏季休暇（6月～9月中：5日間）<br>
                            ・慶弔休暇 ・産前産後休暇<br>
                            ・リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</td>
                    </tr>

                </table>
            </section>

            <section>
                <h2 class="fpc32sp18" id="user-voice">制度利用者の声</h2>
                <div class="user-voice-container-wrapper">
                    <div class="user-voice-container">
                        <div class="user-year fpc16sp14">2013年入社</div>
                        <div class="user-name fpc24sp16">堀内 優</div>
                        <div class="user-voice-body fpc16sp14">資格取得のための費用を会社が負担してくれる制度を利用して、
                            念願の応用技術者資格を取得できました。
                            この制度は、自己啓発を支援してくれるので、とても助かります。
                            今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。
                            会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
                        </div>
                    </div>
                    <div class="user-voice-container">
                        <div class="user-year fpc16sp14">2015年入社</div>
                        <div class="user-name fpc24sp16">神凪 理沙</div>
                        <div class="user-voice-body fpc16sp14">出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。
                            特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。
                            今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。
                        </div>
                    </div>

                </div>
                <div class="user-voice-pic">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/benefits-user-voices.jpg">
                </div>
            </section>


        </div>







    </main>
    <!--------- footer --------->
    <?php get_template_part("includes/footer"); ?>

    <?php get_footer(); ?>

</body>

</html>
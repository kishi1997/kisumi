<?php
/*
Template Name: 採用情報
*/
get_header(); ?>

<main id="page-recruit" class="page-recruit">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">Recruit</p>
            <h1 class="page-hero__title">採用情報</h1>
        </div>
    </section>
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
            <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>
    <!-- 初年度契約 -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="recruit-firstyear">
                <div class="recruit-firstyear__text">
                    <div class="c-lower-sec-head">
                        <p class="section-title-en">First Year</p>
                        <h2 class="section-title-ja">初年度契約</h2>
                    </div>
                    <p class="recruit-body-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="recruit-firstyear__right">
                    <div class="recruit-firstyear__fig">
                        <img src="<?php bloginfo('template_url');?>/img/recruit-firstyear-interior.jpg"
                            alt="初年度契約 イメージ画像">
                    </div>
                    <div class="recruit-stats">
                        <div class="recruit-stat">
                            <p class="recruit-stat__label">新築契約</p>
                            <p class="recruit-stat__num">〇<span class="recruit-stat__unit">件</span></p>
                        </div>
                        <div class="recruit-stat">
                            <p class="recruit-stat__label">リノベーション</p>
                            <p class="recruit-stat__num">〇<span class="recruit-stat__unit">件</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 数字で見る季住 -->
    <section class="inner-section inner-section--gray recruit-data-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Data</p>
                <h2 class="section-title-ja">数字で見る季住</h2>
            </div>
            <div class="recruit-data-grid">
                <div class="recruit-data-card">
                    <div class="recruit-data-card__fig">
                        <img src="<?php bloginfo('template_url');?>/img/recruit-culture-workspace.jpg" alt="数字で見る季住 イメージ画像">
                    </div>
                    <div class="recruit-data-card__body">
                        <p class="recruit-data-card__num">〇<span>件</span></p>
                        <p class="recruit-data-card__label">ラベルテキスト</p>
                    </div>
                </div>
                <div class="recruit-data-card">
                    <div class="recruit-data-card__fig">
                        <img src="<?php bloginfo('template_url');?>/img/recruit-schedule-room.jpg" alt="数字で見る季住 イメージ画像">
                    </div>
                    <div class="recruit-data-card__body">
                        <p class="recruit-data-card__num">〇<span>%</span></p>
                        <p class="recruit-data-card__label">ラベルテキスト</p>
                    </div>
                </div>
                <div class="recruit-data-card">
                    <div class="recruit-data-card__fig">
                        <img src="<?php bloginfo('template_url');?>/img/recruit-staff-portrait.jpg" alt="数字で見る季住 イメージ画像">
                    </div>
                    <div class="recruit-data-card__body">
                        <p class="recruit-data-card__num">〇<span>名</span></p>
                        <p class="recruit-data-card__label">ラベルテキスト</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 風土 -->
    <section class="recruit-culture">
        <div class="recruit-culture__body">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Culture</p>
                <h2 class="section-title-ja">風土</h2>
            </div>
            <p class="recruit-body-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="recruit-culture__img">
            <img src="<?php bloginfo('template_url');?>/img/recruit-culture-workspace.jpg" alt="風土 イメージ画像">
        </div>
    </section>

    <!-- 求める人 -->
    <section class="recruit-ideal">
        <div class="recruit-ideal__img">
            <img src="<?php bloginfo('template_url');?>/img/recruit-ideal-staircase.jpg" alt="求める人 イメージ画像">
        </div>
        <div class="recruit-ideal__body">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Person</p>
                <h2 class="section-title-ja">求める人</h2>
            </div>
            <p class="recruit-body-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
    </section>

    <!-- 一日の流れ（1週間） -->
    <section class="recruit-schedule">
        <div class="recruit-schedule__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Schedule</p>
                <h2 class="section-title-ja">一日の流れ（1週間）</h2>
            </div>
            <table class="recruit-schedule-table">
                    <thead>
                        <tr>
                            <th>時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>8:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>10:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>12:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>14:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>16:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>18:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                        <tr>
                            <th>20:00</th>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                            <td>テキスト</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </section>

    <!-- スタッフ紹介（4名） -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Staff</p>
                <h2 class="section-title-ja">スタッフ紹介</h2>
            </div>
            <div class="recruit-staff-grid">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="recruit-staff-card">
                    <div class="recruit-staff-card__img-wrap">
                        <img src="<?php bloginfo('template_url');?>/img/recruit-staff-portrait.jpg" alt="スタッフ紹介 イメージ画像">
                    </div>
                    <p class="recruit-staff-card__role">役職役職役職</p>
                    <p class="recruit-staff-card__name">お名前　お名前</p>
                </div>
                <?php endfor; ?>
            </div>
            <div class="recruit-staff-card__more">
                <a class="c-more-btn" href="<?php bloginfo('url'); ?>/staff/">
                    もっと見る
                    <span class="c-more-btn__arrow">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 募集職種・募集要項 -->
    <section class="recruit-jobs">
        <div class="recruit-jobs__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Recruitment</p>
                <h2 class="section-title-ja">募集職種・募集要項</h2>
            </div>
            <table class="recruit-jobs-table">
                <tbody>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>テキスト</th>
                        <td>テキスト</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>

<?php get_footer(); ?>
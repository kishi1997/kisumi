<?php
/*
Template Name: 採用情報
*/
get_header(); ?>

<main id="page-recruit" class="page-recruit">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <img class="img-ph img-ph--wide" src="<?php bloginfo('template_url');?>/img/recruit-hero.jpg" alt="季住デザインのスタッフ集合写真" style="object-fit:cover;">
        <div class="page-hero__overlay">
            <h1 class="page-hero__title">採用情報</h1>
        </div>
    </section>

    <!-- 初年度契約 -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="recruit-firstyear">
                <div class="recruit-firstyear__text">
                    <div class="c-section-head">
                        <p class="section-title-en">First Year</p>
                        <h2 class="section-title-ja">初年度契約</h2>
                    </div>
                </div>
                <div class="recruit-firstyear__right">
                    <div class="img-ph-wrapper" style="padding-top:70%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-firstyear-interior.jpg" alt="木の天井と梁が美しい新築LDK" style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
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

    <!-- 円グラフ -->
    <section class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="inner-card-grid inner-card-grid--3">
                <div class="inner-card">
                    <div class="inner-card__body" style="display:flex;flex-direction:column;align-items:center;">
                        <div style="width:160px;height:160px;border-radius:50%;background:#d9d0c4;margin:0 auto 1rem;"></div>
                        <p class="inner-card__label" style="text-align:center;">円グラフ</p>
                    </div>
                </div>
                <div class="inner-card">
                    <div class="inner-card__body" style="display:flex;flex-direction:column;align-items:center;">
                        <div style="width:160px;height:160px;border-radius:50%;background:#d9d0c4;margin:0 auto 1rem;"></div>
                        <p class="inner-card__label" style="text-align:center;">円グラフ</p>
                    </div>
                </div>
                <div class="inner-card">
                    <div class="inner-card__body" style="display:flex;flex-direction:column;align-items:center;">
                        <div style="width:160px;height:160px;border-radius:50%;background:#d9d0c4;margin:0 auto 1rem;"></div>
                        <p class="inner-card__label" style="text-align:center;">円グラフ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 風土 -->
    <section class="recruit-culture">
        <div class="recruit-culture__body">
            <div class="c-section-head">
                <p class="section-title-en">Culture</p>
            </div>
            <h2 class="recruit-culture__title">風土</h2>
            <p class="recruit-culture__text">
                テキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキスト
テキストテキストテキスト
            </p>
        </div>
        <div class="recruit-culture__img">
            <div class="img-ph-wrapper" style="padding-top:75%;">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-culture-workspace.jpg" alt="木の香りのあるワークスペース" style="object-fit:cover;">
            </div>
        </div>
    </section>

    <!-- 求める人 -->
    <section class="recruit-ideal">
        <div class="recruit-ideal__img">
            <div class="img-ph-wrapper" style="padding-top:75%;">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-ideal-staircase.jpg" alt="吹き抜けの開放的な住まいの階段" style="object-fit:cover;">
            </div>
        </div>
        <div class="recruit-ideal__body">
            <div class="c-section-head">
                <p class="section-title-en">Person</p>
            </div>
            <h2 class="recruit-culture__title">求める人</h2>
            <p class="recruit-culture__text">
                テキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキスト
テキストテキストテキスト
            </p>
        </div>
    </section>

    <!-- 一日の流れ（1週間） -->
    <section class="recruit-schedule">
        <div class="recruit-schedule__inner">
            <div class="recruit-schedule__body">
                <h2 class="recruit-schedule__title">一日の流れ（1週間）</h2>
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
            <div class="recruit-schedule__img">
                <div class="img-ph-wrapper" style="padding-top:100%;">
                    <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-schedule-room.jpg" alt="木の梁が印象的な居室" style="object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- スタッフ紹介（4名） -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-section-head">
                <h2 class="section-title-ja">スタッフ紹介</h2>
            </div>
            <div class="recruit-staff-grid">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="recruit-staff-card">
                    <div class="recruit-staff-card__img-wrap">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-staff-portrait.jpg" alt="スタッフ写真" style="object-fit:cover;">
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
            <div class="c-section-head">
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

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
            <div class="c-section-head">
                <p class="section-title-en">First Year</p>
                <h2 class="section-title-ja">初年度契約</h2>
            </div>
            <div class="recruit-stats">
                <div class="recruit-stat">
                    <p class="recruit-stat__label">新築契約</p>
                    <p class="recruit-stat__num">0<span class="recruit-stat__unit">件</span></p>
                </div>
                <div class="recruit-stat">
                    <p class="recruit-stat__label">リノベーション</p>
                    <p class="recruit-stat__num">0<span class="recruit-stat__unit">件</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- スタッフ 3名（丸写真） -->
    <div class="recruit-staff-circles">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
        <div class="recruit-staff-circle">
            <div class="recruit-staff-circle__img-wrap">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-staff-portrait.jpg" alt="スタッフ写真" style="object-fit:cover;">
            </div>
            <p class="recruit-staff-circle__role">役職名</p>
            <p class="recruit-staff-circle__name">お名前</p>
        </div>
        <?php endfor; ?>
    </div>

    <!-- 風土 -->
    <section class="recruit-culture">
        <div class="recruit-culture__body">
            <div class="c-section-head">
                <p class="section-title-en">Culture</p>
            </div>
            <h2 class="recruit-culture__title">風土</h2>
            <p class="recruit-culture__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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
    <div class="recruit-staff-grid">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div class="recruit-staff-card">
            <div class="recruit-staff-card__img-wrap">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/recruit-staff-portrait.jpg" alt="スタッフ写真" style="object-fit:cover;">
            </div>
            <p class="recruit-staff-card__role">役職名・役職名</p>
            <p class="recruit-staff-card__name">お名前　お名前</p>
        </div>
        <?php endfor; ?>
        <div class="recruit-staff-card__more">
            <a class="c-more-btn" href="<?php bloginfo('url'); ?>/staff/">
                もっと見る
                <span class="c-more-btn__arrow">→</span>
            </a>
        </div>
    </div>

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
                        <th>職種</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>休日・休暇</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>福利厚生</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>応募資格</th>
                        <td>テキスト</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- コンタクトCTA -->
    <section class="page-contact-cta">
        <div class="page-contact-cta__inner">
            <p class="page-contact-cta__en">CONTACT US</p>
            <h2 class="page-contact-cta__title">お問い合わせ</h2>
            <div class="page-contact-cta__actions">
                <a class="page-contact-cta__btn-mail" href="<?php bloginfo('url'); ?>/contact/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
                    メールでのお問い合わせ
                </a>
                <div class="page-contact-cta__tel">
                    <p class="page-contact-cta__tel-label">お電話でのお問い合わせ</p>
                    <a class="page-contact-cta__tel-num" href="tel:0000000000">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92v2z"/></svg>
                        000-000-0000
                    </a>
                    <p class="page-contact-cta__tel-note">営業時間 10:00〜18:00（火・水定休）</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

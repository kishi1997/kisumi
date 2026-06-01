<?php
/*
Template Name: 初めての方へ
*/
get_header(); ?>

<main id="page-about" class="page-about">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">About</p>
            <h1 class="page-hero__title">初めての方へ</h1>
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
    <!-- イントロ -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="inner-2col">
                <div class="inner-2col__text">
                    <div class="c-lower-sec-head about-concept-head">
                        <p class="section-title-en">Concept</p>
                        <h2 class="section-title-ja">季節を住まう、<br>時を愛でる</h2>
                    </div>
                    <p class="inner-section__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class="inner-2col__img">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-concept-window.jpg"
                            alt="季節を住まう、時を愛でる イメージ画像">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 特徴3つ -->
    <section class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="about-feature-list">
                <div class="about-feature-item">
                    <div class="about-feature-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-feature-01-living.jpg"
                                alt="家は完成した時が〜 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 01</p>
                        <h2 class="about-feature-item__title">家は完成した時が〜</h2>
                        <p class="about-feature-item__body">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>
                <div class="about-feature-item">
                    <div class="about-feature-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-feature-02-kitchen-living.jpg"
                                alt="丁寧な対話から〜 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 02</p>
                        <h2 class="about-feature-item__title">丁寧な対話から〜</h2>
                        <p class="about-feature-item__body">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>
                <div class="about-feature-item">
                    <div class="about-feature-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-feature-03-study-desk.jpg"
                                alt="建物ではなく〜 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 03</p>
                        <h2 class="about-feature-item__title">建物ではなく〜</h2>
                        <p class="about-feature-item__body">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- どんな形の「家づくり」も同じ窓口で -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head about-service-head">
                <p class="section-title-en">Service</p>
                <h2 class="section-title-ja">どんな形の「家づくり」も<br>同じ窓口で</h2>
            </div>
            <p class="inner-section__lead">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <div class="about-service-grid">
                <div class="about-service-card">
                    <div class="about-service-card__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-service-custom-home.jpg"
                                alt="注文住宅（自由設計） イメージ画像">
                        </div>
                    </div>
                    <div class="about-service-card__body">
                        <h3 class="about-service-card__title">見出し見出し見出し見出し</h3>
                        <p class="about-service-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキスト</p>
                        <a class="c-more-btn" href="<?php bloginfo('url'); ?>/custom-home/">
                            注文住宅はこちら
                            <span class="c-more-btn__arrow">→</span>
                        </a>
                    </div>
                </div>
                <div class="about-service-card">
                    <div class="about-service-card__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-service-renovation-01.jpg"
                                alt="リフォーム・リノベーション イメージ画像">
                        </div>
                    </div>
                    <div class="about-service-card__body">
                        <h3 class="about-service-card__title">見出し見出し見出し見出し</h3>
                        <p class="about-service-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキスト</p>
                        <a class="c-more-btn" href="<?php bloginfo('url'); ?>/renovation/">
                            リノベーションはこちら
                            <span class="c-more-btn__arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 地域のよりどころ -->
    <section class="inner-section inner-section--neutral">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head about-region-head">
                <p class="section-title-en">Region</p>
                <h2 class="section-title-ja">地域のよりどころ</h2>
            </div>
            <div class="about-region">
                <div class="about-region-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-region-gathering.jpg"
                            alt="北摂の“暮らす価値”を次世代へ イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">北摂の"暮らす価値"を次世代へ</h3>
                        <p class="about-region-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキスト</p>
                    </div>
                </div>
                <div class="about-region-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-region-house-exterior.jpg"
                            alt="いつまでも安心できる、変わらない場所と仲間 イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">いつまでも安心できる、<br>変わらない場所と仲間</h3>
                        <p class="about-region-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキスト</p>
                    </div>
                </div>
                <div class="about-region-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/top-link-region.jpg" alt="みんなが笑顔になる「八方良し」の精神 イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">みんなが笑顔になる<br>「八方良し」の精神</h3>
                        <p class="about-region-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキスト</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- コラム -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head about-column-head">
                <p class="section-title-en">Column</p>
                <h2 class="section-title-ja">コラム</h2>
            </div>
            <div class="about-column-grid">
                <article class="about-column-card">
                    <div class="about-column-card__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-column-placeholder.jpg"
                                alt="コラム イメージ画像">
                        </div>
                    </div>
                    <div class="about-column-card__body">
                        <p class="about-column-card__label">カテゴリ名</p>
                        <p class="about-column-card__date">2024.00.00</p>
                        <h3 class="about-column-card__title">タイトルタイトルタイトルタイトル</h3>
                        <p class="about-column-card__excerpt">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </article>
                <article class="about-column-card">
                    <div class="about-column-card__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-column-placeholder.jpg"
                                alt="コラム イメージ画像">
                        </div>
                    </div>
                    <div class="about-column-card__body">
                        <p class="about-column-card__label">カテゴリ名</p>
                        <p class="about-column-card__date">2024.00.00</p>
                        <h3 class="about-column-card__title">タイトルタイトルタイトルタイトル</h3>
                        <p class="about-column-card__excerpt">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </article>
                <article class="about-column-card">
                    <div class="about-column-card__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-column-placeholder.jpg"
                                alt="コラム イメージ画像">
                        </div>
                    </div>
                    <div class="about-column-card__body">
                        <p class="about-column-card__label">カテゴリ名</p>
                        <p class="about-column-card__date">2024.00.00</p>
                        <h3 class="about-column-card__title">タイトルタイトルタイトルタイトル</h3>
                        <p class="about-column-card__excerpt">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </article>
            </div>
            <p class="about-column-more">
                <a class="c-more-btn" href="<?php bloginfo('url'); ?>/column/">
                    もっと見る
                    <span class="c-more-btn__arrow">→</span>
                </a>
            </p>
        </div>
    </section>

    <!-- 相談CTA -->
    <section class="about-consult-cta">
        <div class="about-consult-cta__inner">
            <h2 class="about-consult-cta__title">まずは「暮らしをつくる時間」を<br>ご一緒に</h2>
            <p class="about-consult-cta__lead">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキスト
            </p>
            <div class="about-consult-cta__actions">
                <a class="top-more-btn about-consult-cta__btn" href="<?php bloginfo('url'); ?>/event/">
                    最新のイベント情報を見る
                    <span class="top-more-btn__arrow">→</span>
                </a>
                <a class="top-more-btn about-consult-cta__btn" href="<?php bloginfo('url'); ?>/contact/">
                    相談会を予約する
                    <span class="top-more-btn__arrow">→</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

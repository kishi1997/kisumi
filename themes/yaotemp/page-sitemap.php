<?php
/*
Template Name: サイトマップ
*/
get_header(); ?>

<main id="page-sitemap" class="page-sitemap">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">Sitemap</p>
            <h1 class="page-hero__title">サイトマップ</h1>
        </div>
    </section>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
            <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- サイトマップ本体 -->
    <section class="inner-section">
        <div class="inner-section__inner">

            <div class="sitemap">

                <div class="sitemap-group">
                    <h2 class="sitemap-group__title">トップページ</h2>
                    <ul class="sitemap-group__list">
                        <li><a href="<?php bloginfo('url'); ?>/">トップページ</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h2 class="sitemap-group__title">初めての方へ</h2>
                    <ul class="sitemap-group__list">
                        <li><a href="<?php bloginfo('url'); ?>/about/">初めての方へ</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h2 class="sitemap-group__title">サービスメニュー</h2>
                    <ul class="sitemap-group__list">
                        <li><a href="<?php bloginfo('url'); ?>/custom-home/">注文住宅（自由設計）</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/renovation/">リフォーム・リノベーション</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/support/">保証・アフターサポート</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h2 class="sitemap-group__title">よくある質問</h2>
                    <ul class="sitemap-group__list">
                        <li><a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a></li>
                    </ul>
                </div>

                <div class="sitemap-group">
                    <h2 class="sitemap-group__title">会社情報</h2>
                    <ul class="sitemap-group__list">
                        <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/line/">LINE相談</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
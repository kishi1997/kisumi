<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>

<body<?php fit_body_class(); ?>>
    <!--　body Start-->

    <!--l-header-->
    <header class="l-header">

        <div class="header-top">
            <div class="siteTitle">
                <?php if (is_home()) : ?>
                <h1>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="季住 -kisumi design-">
                    </a>
                </h1>
                <?php else : ?>
                <div>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="季住 -kisumi design-">
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <nav class="menuNavi">
                <span class="menuNavi__link menuNavi__link-current icon-menu" id="menuNavi__menu">
                </span>
            </nav>
        </div>

        <nav class="mainNavi">
            <div class="top-drawer__head">
                <a class="top-drawer__logo" href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="季住 -kisumi design-">
                </a>
            </div>
            <div class="top-drawer__content">
                <div class="top-drawer__nav">
                    <ul class="top-drawer__col top-drawer__col--1">
                        <li>
                            <a href="<?php bloginfo('url'); ?>">トップページ</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/about/">初めての方へ</a>
                        </li>
                        <li>
                            <p>サービスメニュー</p>
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/custom-home/">注文住宅（自由設計）</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/renovation/">リフォーム・リノベーション</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/support/">保証・アフターサポート</a>
                        </li>
                        <li class="top-drawer__group-sep" aria-hidden="true"></li>
                        <li class="top-drawer__pc-group">
                            <a href="<?php bloginfo('url'); ?>/voice/">施工事例・お客様の声</a>
                        </li>
                        <li class="top-drawer__pc-group">
                            <a href="<?php bloginfo('url'); ?>/gallery/">ギャラリー</a>
                        </li>
                        <li class="top-drawer__pc-group">
                            <a href="<?php bloginfo('url'); ?>/events/">イベント情報</a>
                        </li>
                        <li class="top-drawer__sp-group">
                            <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
                        </li>
                        <li class="top-drawer__sp-group">
                            <a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/news/">お知らせ</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/blog/">スタッフブログ</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/column/">コラム</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="top-drawer__col top-drawer__col--2">
                        <li class="top-drawer__pc-group">
                            <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
                        </li>
                        <li class="top-drawer__pc-group">
                            <a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/news/">お知らせ</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/blog/">スタッフブログ</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/column/">コラム</a>
                                </li>
                            </ul>
                        </li>
                        <li class="top-drawer__sp-group">
                            <a href="<?php bloginfo('url'); ?>/voice/">施工事例・お客様の声</a>
                        </li>
                        <li class="top-drawer__sp-group">
                            <a href="<?php bloginfo('url'); ?>/gallery/">ギャラリー</a>
                        </li>
                        <li class="top-drawer__sp-group">
                            <a href="<?php bloginfo('url'); ?>/events/">イベント情報</a>
                        </li>
                        <li class="top-drawer__group-sep" aria-hidden="true"></li>
                        <li class="top-drawer__company-group">
                            <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                            <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                            <a href="<?php bloginfo('url'); ?>/line/">LINE相談</a>
                        </li>
                    </ul>
                </div>
                <div class="top-drawer__contact">
                    <p class="top-drawer__tel-label">お電話でのお問い合わせ</p>
                    <a class="top-drawer__tel" href="tel:0000000000">
                        <img src="<?php bloginfo('template_url');?>/img/ico-tel-drawer.png" alt="">
                        0000-00-0000
                    </a>
                    <p class="top-drawer__hours">
                        営業時間10:00〜18:00<br>
                        定休日:火曜・水曜・GW・夏季・年末年始
                    </p>
                    <a class="top-drawer__mail" href="<?php bloginfo('url'); ?>/contact/">
                        <img src="<?php bloginfo('template_url');?>/img/ico-mail-white-line.png" alt="">
                        メールでのお問い合わせ
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!--/l-header-->

    <?php get_sidebar(); ?>

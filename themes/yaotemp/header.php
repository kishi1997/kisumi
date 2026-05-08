<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo('charset'); ?>">
<?php wp_head(); ?>
<?php fit_ogp();?>
</head>

<body<?php fit_body_class(); ?>><!--　body Start-->

<!--l-header-->
<header class="l-header">

    <div class="header-top">
        <div class="siteTitle">
            <?php if (is_home()) : ?>
                <h1>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/kisumi-logo.svg" alt="季住 -kisumi design-">
                    </a>
                </h1>
             <?php else : ?>
                <div>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/kisumi-logo.svg" alt="季住 -kisumi design-">
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
        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>/about/">初めての方へ</a>
            </li>
            <li>
                <p>サービス</p>
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
                <a href="<?php bloginfo('url'); ?>/voice/">施工事例・お客様の声</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/gallery/">ギャラリー</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/request/">資料請求</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
            </li>
        </ul>
    </nav>
</header>
<!--/l-header-->

<?php get_sidebar(); ?>

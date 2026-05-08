    <section class="top-footer-cv" aria-label="お問い合わせ導線">
        <div class="top-footer-cv__inner">
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/request/">
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">資料請求</span>
                    <span class="top-footer-cv__label-en">Request Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/contact/">
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">お問い合わせ</span>
                    <span class="top-footer-cv__label-en">Contact Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="tel:0120-000-000">
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">お電話</span>
                    <span class="top-footer-cv__label-en">Tel Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/line/">
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">LINE相談</span>
                    <span class="top-footer-cv__label-en">LINE</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
        </div>
    </section>

    <!--l-footer-->
    <footer class="l-footer top-site-footer">
        <div class="top-site-footer__inner">
            <a class="top-site-footer__logo" href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url');?>/img/kisumi-logo.svg" alt="季住 -kisumi design-">
            </a>
            <p class="top-site-footer__address">
                季住 -kisumi design-<br>
                キスミデザイン<br>
                〒562-0033 大阪府箕面市今宮3丁目9-24<br>
                営業時間 10:00〜18:00<br>
                （定休日:火曜・水曜・GW・夏季・年末年始）
            </p>
            <ul class="top-site-footer__sns">
                <li><a href="#" aria-label="Instagram">Instagram</a></li>
            </ul>

            <div class="top-site-footer__links">
                <div class="top-site-footer__col">
                    <a href="<?php bloginfo('url'); ?>">トップページ</a>
                    <a href="<?php bloginfo('url'); ?>/about/">初めての方へ</a>
                    <a href="<?php bloginfo('url'); ?>/services/">サービスメニュー</a>
                    <a href="<?php bloginfo('url'); ?>/custom-home/">注文住宅（自由設計）</a>
                    <a href="<?php bloginfo('url'); ?>/renovation/">リフォーム・リノベーション</a>
                </div>
                <div class="top-site-footer__col">
                    <a href="<?php bloginfo('url'); ?>/support/">保証・アフターサポート</a>
                    <a href="<?php bloginfo('url'); ?>/voice/">施工事例＆お客様の声</a>
                    <a href="<?php bloginfo('url'); ?>/gallery/">ギャラリー</a>
                    <a href="<?php bloginfo('url'); ?>/events/">イベント</a>
                    <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
                </div>
                <div class="top-site-footer__col">
                    <a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>
                    <a href="<?php bloginfo('url'); ?>/news/">お知らせ</a>
                    <a href="<?php bloginfo('url'); ?>/blog/">スタッフブログ</a>
                    <a href="<?php bloginfo('url'); ?>/column/">コラム</a>
                    <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                    <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                    <a href="<?php bloginfo('url'); ?>/line/">LINE相談</a>
                </div>
            </div>
            <p class="top-site-footer__copyright">
                Copyright (c) KISUMI Design Co., Ltd. All Rights Reserved.
            </p>
        </div>
    </footer>
    <!-- /l-footer -->
<?php wp_footer(); ?>
</body>
</html>

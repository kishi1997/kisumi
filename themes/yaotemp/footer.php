    <section id="top-footer-cv" class="top-footer-cv" aria-label="お問い合わせ導線">
        <div class="top-footer-cv__inner">
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/request/">
                <span class="top-footer-cv__icon top-footer-cv__icon--request" aria-hidden="true">
                    <img src="<?php bloginfo('template_url');?>/img/ico-info.svg" alt="">
                </span>
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">資料請求</span>
                    <span class="top-footer-cv__label-en">Request Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/contact/">
                <span class="top-footer-cv__icon top-footer-cv__icon--contact" aria-hidden="true">
                    <img src="<?php bloginfo('template_url');?>/img/ico-mail.svg" alt="">
                </span>
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">お問い合わせ</span>
                    <span class="top-footer-cv__label-en">Contact Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="tel:0120-000-000">
                <span class="top-footer-cv__icon top-footer-cv__icon--tel" aria-hidden="true">
                    <img src="<?php bloginfo('template_url');?>/img/tel-icon.png" alt="">
                </span>
                <p class="top-footer-cv__label">
                    <span class="top-footer-cv__label-ja">お電話</span>
                    <span class="top-footer-cv__label-en">Tel Info</span>
                </p>
                <span class="top-footer-cv__arrow">→</span>
            </a>
            <a class="top-footer-cv__item" href="<?php bloginfo('url'); ?>/line/">
                <span class="top-footer-cv__icon top-footer-cv__icon--line" aria-hidden="true">
                    <img src="<?php bloginfo('template_url');?>/img/ico-line.svg" alt="">
                </span>
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
            <div class="top-site-footer__top">
                <a class="top-site-footer__logo" href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_url');?>/img/logo-footer.png" alt="季住 -kisumi design-">
                </a>
                <p class="top-site-footer__address">
                    <span class="top-site-footer__address-name">季住 -kisumi design-</span>
                    <span class="top-site-footer__address-kana">キスミデザイン</span>
                    <span class="top-site-footer__address-info">
                        〒562-0033　大阪府箕面市今宮3丁目9-24<br>
                        営業時間10:00〜18:00<br>
                        （定休日火曜・水曜・GW・夏季・年末年始）
                    </span>
                </p>
                <ul class="top-site-footer__sns">
                    <li>
                        <a href="#" aria-label="Instagram">
                            <img src="<?php bloginfo('template_url');?>/img/ico-insta.svg" alt="">
                        </a>
                    </li>
                </ul>
                <div class="top-site-footer__links">
                    <div class="top-site-footer__col">
                        <a href="<?php bloginfo('url'); ?>">トップページ</a>
                        <a href="<?php bloginfo('url'); ?>/about/">初めての方へ</a>
                        <a href="<?php bloginfo('url'); ?>/services/">サービスメニュー</a>
                        <div class="top-site-footer__sub-links">
                            <a href="<?php bloginfo('url'); ?>/custom-home/">注文住宅(自由設計)</a>
                            <a href="<?php bloginfo('url'); ?>/renovation/">リフォーム・リノベーション</a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/support/">保証・アフターサポート</a>
                    </div>
                    <div class="top-site-footer__col">
                        <a href="<?php bloginfo('url'); ?>/voice/">施工事例＆お客様の声</a>
                        <a href="<?php bloginfo('url'); ?>/gallery/">ギャラリー</a>
                        <a href="<?php bloginfo('url'); ?>/events/">イベント</a>
                    </div>
                    <div class="top-site-footer__col">
                        <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
                        <a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>
                        <div class="top-site-footer__sub-links">
                            <a href="<?php bloginfo('url'); ?>/news/">お知らせ</a>
                            <a href="<?php bloginfo('url'); ?>/blog/">スタッフブログ</a>
                            <a href="<?php bloginfo('url'); ?>/column/">コラム</a>
                        </div>
                    </div>
                    <div class="top-site-footer__col">
                        <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                        <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                        <a href="<?php bloginfo('url'); ?>/line/">LINE相談</a>
                    </div>
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

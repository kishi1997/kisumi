<?php
/*
Template Name: LINE相談
*/
get_header(); ?>

<main id="page-line" class="page-line">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="img-ph img-ph--wide" role="img" aria-label="LINE相談イメージ"></div>
        <div class="page-hero__overlay">
            <h1 class="page-hero__title">LINE相談</h1>
        </div>
    </section>

    <!-- リード -->
    <section class="line-lead">
        <div class="line-lead__inner">
            <p class="line-lead__text">
                LINEでのご相談・ご予約を承っております。<br>
                以下の手順でお気軽にご連絡ください。
            </p>
        </div>
    </section>

    <!-- STEPリスト -->
    <div class="line-steps">

        <!-- STEP 1 -->
        <div class="line-step">
            <div>
                <div class="line-logo" aria-label="LINE">
                    <span class="line-logo__text">LINE</span>
                </div>
                <p class="line-step__num">STEP. 1</p>
                <h2 class="line-step__title">LINE友だち追加</h2>
                <p class="line-step__text">
                    公式LINEを下記QR・ボタンより友だち追加してください。
                </p>
                <div class="line-step__action">
                    <div class="line-step__qr">
                        <div class="img-ph"></div>
                    </div>
                    <a class="line-step__btn-add" href="#" target="_blank" rel="noopener noreferrer">
                        友だち追加
                    </a>
                </div>
            </div>
            <div class="line-step__img">
                <div class="img-ph-wrapper" style="padding-top:80%;">
                    <div class="img-ph"></div>
                </div>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="line-step">
            <div class="line-step__img">
                <div class="img-ph-wrapper" style="padding-top:80%;">
                    <div class="img-ph"></div>
                </div>
            </div>
            <div>
                <p class="line-step__num">STEP. 2</p>
                <h2 class="line-step__title">お客様情報を送信</h2>
                <p class="line-step__text">
                    公式LINEを友だち追加後、メッセージ送信後の返信テンプレートで<br>
                    お客様情報のご送信をお願いします。
                </p>
                <p class="line-step__info-label">【お客様情報】</p>
                <ul class="line-step__list">
                    <li>お名前</li>
                    <li>ご住所</li>
                    <li>電話番号</li>
                    <li>メールアドレス</li>
                </ul>
            </div>
        </div>

        <!-- STEP 3 -->
        <div class="line-step line-step--single">
            <div>
                <p class="line-step__num">STEP. 3</p>
                <h2 class="line-step__title">ご相談・ご予約の日程調整</h2>
                <p class="line-step__text">
                    お客様情報の確認後、弊社担当者より返信させていただきます。<br>
                    ご相談内容をお聞かせください。ご予約の日程調整もさせていただきます。
                </p>
            </div>
        </div>

    </div>

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

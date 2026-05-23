<?php
/*
Template Name: LINE相談
*/
get_header(); ?>

<main id="page-line" class="page-line">

    <!-- ページヒーロー（分割レイアウト） -->
    <section class="line-hero">
        <div class="line-hero__text">
            <h1 class="line-hero__title">LINE相談</h1>
        </div>
        <div class="line-hero__img">
            <div class="img-ph-wrapper" style="padding-top:60%;">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/line-hero-window.jpg" alt="木枠の窓辺にならぶ小物" style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
            </div>
        </div>
    </section>

    <!-- リード -->
    <section class="line-lead">
        <div class="line-lead__inner">
            <p class="line-lead__text">
                LINEでの相談・ご予約も受け付けしております。<br>
                以下の手順でお問い合わせください。
            </p>
        </div>
    </section>

    <!-- STEPリスト -->
    <div class="line-steps">

        <!-- STEP 1 -->
        <div class="line-step line-step--single">
            <div class="line-logo" aria-label="LINE">
                <span class="line-logo__text">LINE</span>
            </div>
            <div class="line-step__content">
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
        </div>

        <!-- STEP 2 -->
        <div class="line-step">
            <div class="line-step__img">
                <div class="img-ph-wrapper" style="padding-top:80%;">
                    <img class="img-ph" src="<?php bloginfo('template_url');?>/img/line-step02-staff.jpg" alt="お客様に丁寧に対応するスタッフ" style="object-fit:cover;">
                </div>
            </div>
            <div>
                <p class="line-step__num">STEP. 2</p>
                <h2 class="line-step__title">お客様情報を送信</h2>
                <p class="line-step__text">
                    公式LINEを友だち追加し、メッセージ受信後<br>
                    お客様情報の送信をお願いします。
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
                    お客様情報の確認後、弊社の担当者より返信させていただきます。<br>
                    ご相談内容をお聞かせください。ご予約の日程調整もさせていただきます。
                </p>
            </div>
        </div>

    </div>


</main>

<?php get_footer(); ?>

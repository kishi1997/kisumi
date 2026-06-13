<?php
/*
Template Name: LINE相談
*/
get_header(); ?>

<main id="page-line" class="page-line">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">LINE Consultation</p>
            <h1 class="page-hero__title">LINE相談</h1>
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

        <!-- STEP 01 -->
        <div class="line-step">
            <div class="line-step__content">
                <p class="line-step__num">STEP. 01</p>
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
                <img src="<?php bloginfo('template_url');?>/img/line-step01-exterior.jpg" alt="LINE友だち追加">
            </div>
        </div>

        <!-- STEP 02 -->
        <div class="line-step">
            <div class="line-step__img">
                <img src="<?php bloginfo('template_url');?>/img/line-step02-staff.jpg" alt="お客様情報を送信">
            </div>
            <div class="line-step__content">
                <p class="line-step__num">STEP. 02</p>
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

        <!-- STEP 03 -->
        <div class="line-step">
            <div class="line-step__content">
                <p class="line-step__num">STEP. 03</p>
                <h2 class="line-step__title">ご相談・ご予約の日程調整</h2>
                <p class="line-step__text">
                    お客様情報の確認後、弊社の担当者より返信させていただきます。<br>
                    ご相談内容をお聞かせください。ご予約の日程調整もさせていただきます。
                </p>
            </div>
            <div class="line-step__img">
                <img src="<?php bloginfo('template_url');?>/img/line-step03.jpg" alt="ご相談・ご予約の日程調整">
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
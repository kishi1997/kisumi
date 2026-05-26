<?php
/*
Template Name: 注文住宅（自由設計）
*/
get_header(); ?>

<main id="page-custom-home" class="page-custom-home">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <img class="img-ph img-ph--wide" src="<?php bloginfo('template_url');?>/img/custom-home-hero.jpg"
            alt="木の梁と眺望が美しい注文住宅のLDK" style="object-fit:cover;">
        <div class="page-hero__overlay">
            <h1 class="page-hero__title">注文住宅（自由設計）</h1>
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
    <!-- 01 イントロ -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="inner-2col">
                <div class="inner-2col__text">
                    <div class="c-lower-sec-head">
                        <p class="section-title-en">Our Concept</p>
                        <h2 class="section-title-ja">時とともに育つ、<br>漆喰と無垢の家</h2>
                    </div>
                    <p class="inner-section__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <h3 class="inner-section__subtitle">土地探しから〜</h3>
                    <p class="inner-section__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class="inner-2col__img">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-intro-living.jpg"
                            alt="薪ストーブのあるリビング" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 漆喰 / 無垢 -->
    <section class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Materials</p>
                <h2 class="section-title-ja">素材</h2>
            </div>
            <div class="renovation-type-list">
                <div class="renovation-type-item">
                    <div class="renovation-type-item__img">
                        <div class="img-ph-wrapper" style="padding-top:66%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-spec-washroom.jpg" alt="漆喰の壁"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="renovation-type-item__body">
                        <h3 class="renovation-type-item__title">漆喰</h3>
                        <p class="renovation-type-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
                <div class="renovation-type-item renovation-type-item--reverse">
                    <div class="renovation-type-item__img">
                        <div class="img-ph-wrapper" style="padding-top:66%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-spec-wood-floor.jpg" alt="無垢材の床"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="renovation-type-item__body">
                        <h3 class="renovation-type-item__title">無垢</h3>
                        <p class="renovation-type-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 02 こだわりの標準仕様 -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Standard Spec</p>
                <h2 class="section-title-ja">こだわりの標準仕様</h2>
            </div>
            <div class="custom-home-spec-grid">
                <div class="custom-home-spec-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-kitchen.jpg"
                            alt="ダークトーンのアイランドキッチン" style="object-fit:cover;">
                    </div>
                    <p class="custom-home-spec-item__label">キッチン</p>
                    <p class="custom-home-spec-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="custom-home-spec-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-bathroom.jpg"
                            alt="真鍮の照明が映えるインテリア" style="object-fit:cover;">
                    </div>
                    <p class="custom-home-spec-item__label">照明・アクセサリー</p>
                    <p class="custom-home-spec-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="custom-home-spec-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-washroom.jpg"
                            alt="外壁・外装仕上げ" style="object-fit:cover;">
                    </div>
                    <p class="custom-home-spec-item__label">ガルバ・ジョリパ・漆喰</p>
                    <p class="custom-home-spec-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="custom-home-spec-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-wood-floor.jpg"
                            alt="建具・収納" style="object-fit:cover;">
                    </div>
                    <p class="custom-home-spec-item__label">建具(神谷)</p>
                    <p class="custom-home-spec-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 03 性能 -->
    <section class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Performance</p>
                <h2 class="section-title-ja">性能</h2>
            </div>
            <div class="inner-card-grid inner-card-grid--4 custom-home-performance-grid">
                <div class="inner-card">
                    <div class="inner-card__img-wrap custom-home-performance-card__img">
                        <div class="img-ph-wrapper" style="padding-top:70%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-feature-01-construction.jpg"
                                alt="構造と施工品質を確認する現場"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="inner-card__body">
                        <h3 class="inner-card__title">耐震 3</h3>
                        <p class="inner-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
                <div class="inner-card">
                    <div class="inner-card__img-wrap custom-home-performance-card__img">
                        <div class="img-ph-wrapper" style="padding-top:70%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-warranty-window.jpg"
                                alt="気密性を高めた室内の窓まわり"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="inner-card__body">
                        <h3 class="inner-card__title">気密</h3>
                        <p class="inner-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
                <div class="inner-card">
                    <div class="inner-card__img-wrap custom-home-performance-card__img">
                        <div class="img-ph-wrapper" style="padding-top:70%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-feature-02-energy.jpg"
                                alt="断熱性能を意識した明るい住まい"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="inner-card__body">
                        <h3 class="inner-card__title">断熱</h3>
                        <p class="inner-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
                <div class="inner-card">
                    <div class="inner-card__img-wrap custom-home-performance-card__img">
                        <div class="img-ph-wrapper" style="padding-top:70%;">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/support-inspection-living.jpg"
                                alt="換気と熱交換に配慮したリビング空間"
                                style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="inner-card__body">
                        <h3 class="inner-card__title">一種換気・熱交換</h3>
                        <p class="inner-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 04 職人の技術 -->
    <section class="inner-section inner-section--neutral">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Craftsmen</p>
                <h2 class="section-title-ja">職人の技術</h2>
            </div>
            <div class="custom-home-feature-grid">
                <div class="custom-home-feature-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph"
                            src="<?php bloginfo('template_url');?>/img/custom-home-feature-01-construction.jpg"
                            alt="左官の職人技術" style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                    </div>
                    <h3 class="custom-home-feature-item__title">左官</h3>
                    <p class="custom-home-feature-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="custom-home-feature-item">
                    <div class="img-ph-wrapper" style="padding-top:75%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-feature-03-team.jpg"
                            alt="大工・建具の造作" style="object-fit:cover;position:absolute;inset:0;width:100%;height:100%;">
                    </div>
                    <h3 class="custom-home-feature-item__title">造作(大工・建具)</h3>
                    <p class="custom-home-feature-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 家づくりの流れ -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="custom-home-flow">
                <div class="custom-home-flow__steps">
                    <div class="c-lower-sec-head">
                        <p class="section-title-en">Process</p>
                        <h3 class="section-title-ja">家づくりの流れ</h3>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">1</span>
                        <div>
                            <p class="custom-home-flow__step-title">お問い合わせ</p>
                            <p class="custom-home-flow__step-text">家づくり、さて、何から始めよう。そんなふうに迷われたときこそ、まずはプロに相談してみてください。<br>
                                どんなふうに進めればあなたの思い描いた暮らしが実現するのか、間取りや土地のこと、予算のことまで、どんな小さなことでも大丈夫です。「理想の住まい」というまだかたちのない想いを、少しずつ現実に近づけるお手伝いをします。<br>
                                どうぞお気軽にご相談ください。<br>
                                キズナデザインのお家づくりへの想いもご紹介いたします。</p>
                            <p><a class="c-more-btn" href="<?php bloginfo('url'); ?>/contact/">資料請求<span
                                        class="c-more-btn__arrow">→</span></a></p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">2</span>
                        <div>
                            <p class="custom-home-flow__step-title">資金計画</p>
                            <p class="custom-home-flow__step-text">進め方についての霧が晴れたらいよいよ住まいづくりへ。<br>
                                …その前に少しだけ立ち止まって、<br>
                                「どのくらいの価格で、どんな暮らしができるのか？」<br>
                                を一緒に考えてみませんか。<br>
                                将来のライフプランを見据えた家づくりのためにファイナンシャルプランナーが丁寧にサポートいたします。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">3</span>
                        <div>
                            <p class="custom-home-flow__step-title">ヒアリング</p>
                            <p class="custom-home-flow__step-text">夢と価格のバランスが見えてきたところでもう一度、じっくりとあなたのお話を聞かせてください。<br>
                                2階建てか、平屋にしようか。<br>
                                お庭のある暮らしも素敵です。<br>
                                あるいは、新築だけでなくリノベーションという選択肢がしっくりくる方もいるかもしれません。<br>
                                これからどんな住まいに、どんなふうに歩んでいくのか。<br>
                                次の一歩を一緒に見つけていきましょう。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">4</span>
                        <div>
                            <p class="custom-home-flow__step-title">土地探し</p>
                            <p class="custom-home-flow__step-text">あなたの夢を乗せて、土地探しの旅へようやく出航です。<br>
                                同じ大阪・北摂でも町ごとに流れる空気や風景はさまざま。<br>
                                だからこそあなたにぴったりの場所を見つけるために担当スタッフが寄り添い、誠心誠意お手伝いします。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">5</span>
                        <div>
                            <p class="custom-home-flow__step-title">土地契約・工事請負契約</p>
                            <p class="custom-home-flow__step-text">土地が見つかれば、まずはその土地とのご縁を結ぶ「土地契約」へ。<br>
                                それとほぼ同じタイミングで、私たちとの「工事請負契約」も取り交わします。<br>
                                ご契約をきっかけに、住まいのカタチがより一層くっきりと浮かび上がってきます。<br>
                                ここから、具体的なプランづくりが本格的に始まります。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">6</span>
                        <div>
                            <p class="custom-home-flow__step-title">プラン・内装決定</p>
                            <p class="custom-home-flow__step-text">あなたの理想の住まいがついにカタチになっていきます。<br>
                                設計士との打ち合わせでは、間取りはもちろん窓の1つに至るまで。<br>
                                インテリアコーディネーターとはキッチンや洗面台などの設備、収納の使い方やカラーリングも一緒に考えていきます。<br>
                                「好き」や「こうしたい」の気持ちをたっぷり詰め込んでいきましょう。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">7</span>
                        <div>
                            <p class="custom-home-flow__step-title">工事</p>
                            <p class="custom-home-flow__step-text">これまでたくさんの打ち合わせを重ねてきましたね。<br>
                                いよいよ、夢の住まいがかたちになる工事が始まります。<br>
                                ここからは現場監督と親方の出番。<br>
                                工事の節目ごとに現場監督が丁寧に施工状況を確認しながら、安心・安全に進めていきます。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">8</span>
                        <div>
                            <p class="custom-home-flow__step-title">お引渡し</p>
                            <p class="custom-home-flow__step-text">あなただけの住まいがついに完成しました。<br>
                                でも、私たちはここが「ゴール」ではなく「はじまり」だと考えています。<br>
                                この場所で日々の暮らしを重ね、時を育てていく ——<br>
                                これからの物語にも私たちはそっと寄り添い続けます。</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img-ph-wrapper" style="padding-top:120%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-flow-staircase.jpg"
                            alt="植物が飾られた吹き抜けの階段" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-section inner-section--gray lower-event-section" aria-labelledby="lower-event-title-home">
        <div class="inner-section__inner lower-event-section__inner">
            <div class="c-lower-sec-head lower-event-section__head">
                <p class="section-title-en">Event</p>
                <h2 id="lower-event-title-home" class="section-title-ja">イベント情報</h2>
            </div>

            <div class="lower-event-slider js-lower-event-slider">
                <article class="lower-event-card">
                    <a href="<?php bloginfo('url'); ?>/events/">
                        <figure class="lower-event-card__media">
                            <img class="lower-event-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top-event-01.jpg" alt="イベント会場の外観">
                            <span class="lower-event-card__status lower-event-card__status--open">募集中</span>
                        </figure>
                        <div class="lower-event-card__body">
                            <p class="lower-event-card__cat">相談会</p>
                            <h3 class="lower-event-card__name">家づくり相談会</h3>
                            <p class="lower-event-card__meta">開催日時　2026.03.15　-　2026.03.15</p>
                            <p class="lower-event-card__meta">開催場所　季住 kisumi design 本社</p>
                        </div>
                    </a>
                </article>
                <article class="lower-event-card">
                    <a href="<?php bloginfo('url'); ?>/events/">
                        <figure class="lower-event-card__media">
                            <img class="lower-event-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top-event-02.jpg" alt="イベント会場の内観">
                            <span class="lower-event-card__status lower-event-card__status--open">募集中</span>
                        </figure>
                        <div class="lower-event-card__body">
                            <p class="lower-event-card__cat">見学会</p>
                            <h3 class="lower-event-card__name">モデルハウス完成見学会</h3>
                            <p class="lower-event-card__meta">開催日時　2026.03.15　-　2026.03.15</p>
                            <p class="lower-event-card__meta">開催場所　季住 kisumi design 本社</p>
                        </div>
                    </a>
                </article>
                <article class="lower-event-card">
                    <a href="<?php bloginfo('url'); ?>/events/">
                        <figure class="lower-event-card__media">
                            <img class="lower-event-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top-event-03.jpg" alt="イベント会場のキッチン">
                            <span class="lower-event-card__status lower-event-card__status--closed">開催終了</span>
                        </figure>
                        <div class="lower-event-card__body">
                            <p class="lower-event-card__cat">分譲販売</p>
                            <h3 class="lower-event-card__name">第3期分譲販売開始</h3>
                            <p class="lower-event-card__meta">開催日時　2026.03.15　-　2026.03.15</p>
                            <p class="lower-event-card__meta">開催場所　季住 kisumi design 本社</p>
                        </div>
                    </a>
                </article>
            </div>

            <p class="lower-event-section__more">
                <a class="c-more-btn" href="<?php bloginfo('url'); ?>/events/">
                    もっと見る
                    <span class="c-more-btn__arrow">→</span>
                </a>
            </p>
        </div>
    </section>

    <!-- 施工事例 / 保障バナー -->
    <div class="inner-banner-pair">
        <a class="inner-banner" href="<?php bloginfo('url'); ?>/voice/">
            <div class="img-ph-wrapper" style="padding-top:50%;">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-banner-portfolio.jpg"
                    alt="施工事例イメージ" style="object-fit:cover;">
            </div>
            <div class="inner-banner__overlay">
                <p class="inner-banner__en">Portfolio</p>
                <p class="inner-banner__title">施工事例</p>
            </div>
        </a>
        <a class="inner-banner" href="<?php bloginfo('url'); ?>/support/">
            <div class="img-ph-wrapper" style="padding-top:50%;">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-banner-support.jpg"
                    alt="保障・アフターサポートイメージ" style="object-fit:cover;">
            </div>
            <div class="inner-banner__overlay">
                <p class="inner-banner__en">Support</p>
                <p class="inner-banner__title">保障・アフターサポート</p>
            </div>
        </a>
    </div>

</main>

<?php get_footer(); ?>
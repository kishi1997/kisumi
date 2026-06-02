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
                        「どんな家を建てるか」の前に、「その家でどんな時間を過ごしたいか」を語り合いませんか。私たちがつくりたいのは、流行を追いかけた綺麗なだけの箱ではありません。冬の朝、一番に光が差し込む場所で白湯を飲む。お気に入りの椅子に座って、庭の緑を眺めながらただぼーっとする。そんな、言葉にならないほどささやかで愛おしい日常の解像度を上げていく家づくりを、季住デザインはお届けします。
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
                                alt="家は完成した時がゴールではありません。 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 01</p>
                        <h2 class="about-feature-item__title">家は完成した時がゴールではありません。</h2>
                        <p class="about-feature-item__body">
                            無垢のフローリングについた小さな傷、日に焼けて少しずつ深まる木の色、子どもたちが柱に残した背丈の記録。それらはすべて、この家で家族が笑い、健やかに過ごした時間の証です。私たちは、お引き渡しの瞬間を最高潮とは考えません。本物の自然素材を選び、線の細い洗練されたデザインにこだわるのは、10年後、20年後と時間を重ねるごとにヴィンテージのような美しい味わいへと育ち、家族の記憶を包み込んでいってほしいからです。年月が経つほどに愛着が深まっていく、経年変化を愉しむ暮らしをご提案します。
                        </p>
                    </div>
                </div>
                <div class="about-feature-item">
                    <div class="about-feature-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-feature-02-kitchen-living.jpg"
                                alt="丁寧な対話から目に見えない「空気感」を設計する。 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 02</p>
                        <h2 class="about-feature-item__title">丁寧な対話から目に見えない「空気感」を設計する。</h2>
                        <p class="about-feature-item__body">
                            「趣味は何ですか？」「どんな間取りがいいですか？」といった、ありきたりな質問だけで図面を描くことはいたしません。「普段、何をしているときが一番ホッとしますか？」「家事の中で、少し面倒に感じる瞬間はどこですか？」 私たちが大切にしているのは、そんなあなたの何気ない感情や、暮らしの動き（動線）に耳を澄ませることです。対話を重ねてあなたの「無意識のこだわり」まで丁寧にひも解き、効率的な家事動線はもちろん、日々のふとした瞬間にゆとりを感じられる、あなただけの「家族のストーリー」を形にします。
                        </p>
                    </div>
                </div>
                <div class="about-feature-item">
                    <div class="about-feature-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/about-feature-03-study-desk.jpg"
                                alt="建物ではなく「人」を主語にした、一生涯のパートナー。 イメージ画像">
                        </div>
                    </div>
                    <div class="about-feature-item__text">
                        <p class="about-feature-item__num">Feature 03</p>
                        <h2 class="about-feature-item__title">建物ではなく「人」を主語にした、一生涯のパートナー。</h2>
                        <p class="about-feature-item__body">
                            私たちは、新築の注文住宅も、古いものを活かすリノベーションも、土地や中古物件の仲介（不動産）もすべてワンストップでお手伝いできる専門家チームです。「どちらにすべきか迷っている」という段階でも、中立的なプロの視点からあなたにとって最適なルートをご提案します。大手ハウスメーカーのように担当者が変わることも、規模の小さな修繕だからとお断りすることもありません。住まいのことなら何でも話せる「暮らしのかかりつけ医」として、建てた後もLINEひとつで迅速に駆けつけ、あなたの一生に誠実に寄り添い続けます。
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
                私たちは、新築、リノベーション、不動産仲介のすべてをワンストップでお手伝いできる専門家チームです。「土地を買って新築するか、中古を買ってリノベするか迷う」という段階でも、中立的な視点からあなたに最適なルートをご提案します。たとえ物件の仲介のみのお付き合いになったとしても、数年後に困ったことがあればすぐに駆けつける。どんな入り口から始まっても、あなたの暮らしを支えるパートナーはいつも変わりません。
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
                        <h3 class="about-service-card__title">何もしない贅沢を、ゼロから形にする。</h3>
                        <p class="about-service-card__text">土地の個性を読み解き、一級建築士が光と風、そしてあなたの感情の動きに合わせた動線を設計します。本物の自然素材を使い、職人の手仕事でゼロから創り上げる、世界にたったひとつの注文住宅です。</p>
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
                        <h3 class="about-service-card__title">受け継いだ記憶に、新しい呼吸を。</h3>
                        <p class="about-service-card__text">「古いから壊す」ではなく、大切に使われてきた柱や梁の面影を残しながら、今のライフスタイルに合わせた快適な空間へ。目に見えない耐震・断熱性能もしっかり底上げし、住まいを新しく再生させます。</p>
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
                            alt="北摂の"暮らす価値"を次世代へ イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">北摂の"暮らす価値"を次世代へ</h3>
                        <p class="about-region-item__text">私たちは、大阪・北摂エリアを中心に家づくりを行っています。この街が持つ豊かな緑、落ち着いた街並み、そして独自のコミュニティを大切にしながら、その土地の気候や風土に逆らわないパッシブデザインを取り入れています。ただ家を建てるだけでなく、この素晴らしい地域で家族が末永く心地よく暮らせるよう、街の風景の一部となるような美しい住まいを次世代へと繋いでいきます。</p>
                    </div>
                </div>
                <div class="about-region-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/about-region-house-exterior.jpg"
                            alt="いつまでも安心できる、変わらない場所と仲間 イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">いつまでも安心できる、<br>変わらない場所と仲間</h3>
                        <p class="about-region-item__text">大手ハウスメーカーのように、担当者が次々と変わってしまうことはありません。土地探しから設計、施工、そして住み始めてからの細かなアフターサポートにいたるまで、お顔の見える同じ専門チームがずっと変わらずにあなたの隣で伴走し続けます。何か困ったことがあれば、いつでも気軽にLINEひとつで相談できる。私たちは、あなたにとって家族のように頼れる「暮らしのかかりつけ医」であり続けます。</p>
                    </div>
                </div>
                <div class="about-region-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/top-link-region.jpg" alt="みんなが笑顔になる「八方良し」の精神 イメージ画像">
                    </div>
                    <div class="about-region-item__overlay">
                        <h3 class="about-region-item__title">みんなが笑顔になる<br>「八方良し」の精神</h3>
                        <p class="about-region-item__text">私たちの家づくりは、お施主様だけでなく、現場を支えてくれる職人チーム、近隣にお住まいの方々、そしてこの地域全体が豊かになることを目指しています。関わるすべての人が誠実に向き合い、誇りを持って手仕事を尽くすからこそ、図面には描ききれない「体温のある居場所」が完成します。関わる人みんなが笑顔で繋がる、そんな三方良しを超えた「八方良し」の優しさを、家づくりを通して広げていきます。</p>
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

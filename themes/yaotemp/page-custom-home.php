<?php
/*
Template Name: 注文住宅（自由設計）
*/
get_header(); ?>

<main id="page-custom-home" class="page-custom-home">
    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">CUSTOM HOME</p>
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
                <div class="inner-2col__img">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-intro-living.jpg"
                            alt="時とともに育つ、漆喰と無垢の家 イメージ画像">
                    </div>
                </div>
                <div class="inner-2col__text">
                    <div class="c-lower-sec-head">
                        <p class="section-title-en">Our Concept</p>
                        <h2 class="section-title-ja">時とともに育つ、<br>漆喰と無垢の家</h2>
                    </div>
                    <p class="inner-section__lead">
                        「どんな家に住みたいか」の前に、「どんな毎日を過ごしたいか」を教えてください。朝、窓から届く光の角度に季節の移ろいを感じたり、素足で歩いたときの無垢材の柔らかさにホッとしたり。私たちが大切にしているのは、スペックや間取りの数字だけでは測れない、住む人の感情が動く瞬間です。お引き渡しの日は、ゴールではなく始まり。家族の成長とともに刻まれるキズや汚れさえも、愛おしい記憶として家に馴染んでいく。流行に左右されることなく、時を重ねるほどにヴィンテージのような味わいを増していく、世界にたったひとつの住まいをゼロから共に創り上げます。
                    </p>
                </div>
            </div>
            <div class="custom-home-intro-below">
                <h3 class="inner-section__subtitle">土地探しから設計まで、建築士が伴走する</h3>
                <p class="inner-section__lead">
                    一級建築士があなたと一緒に土地を見に行き、その場所の陽当たりや風の通り道、周囲の視線までをその場で読み解きます。「変形地だから安く抑えて、その分を内装のこだわりに回そう」「この窓からは隣の緑を借ろう」といった、不動産と建築のプロが一体だからこそできる、予算に合わせた最適なご提案をいたします。
                </p>
            </div>
        </div>
    </section>

    <!-- セクションインデックス -->
    <section class="inner-section custom-home-section-index">
        <div class="inner-section__inner">
            <div class="custom-home-section-index-grid">
                <a class="custom-home-section-index-item" href="#sec-materials">
                    <p class="custom-home-section-index-item__label"><span
                            class="custom-home-section-index-item__num">01.</span>素材</p>
                    <div class="img-ph-wrapper" style="padding-top:72%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-material.jpg"
                            alt="素材 イメージ画像" style="object-fit:cover;">
                    </div>
                </a>
                <a class="custom-home-section-index-item" href="#sec-spec">
                    <p class="custom-home-section-index-item__label"><span
                            class="custom-home-section-index-item__num">02.</span>こだわりの標準仕様</p>
                    <div class="img-ph-wrapper" style="padding-top:72%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-kitchen.jpg"
                            alt="こだわりの標準仕様 イメージ画像" style="object-fit:cover;">
                    </div>
                </a>
                <a class="custom-home-section-index-item" href="#sec-performance">
                    <p class="custom-home-section-index-item__label"><span
                            class="custom-home-section-index-item__num">03.</span>性能</p>
                    <div class="img-ph-wrapper" style="padding-top:72%;">
                        <img class="img-ph"
                            src="<?php bloginfo('template_url');?>/img/custom-home-feature-01-construction.jpg" alt="性能 イメージ画像"
                            style="object-fit:cover;">
                    </div>
                </a>
                <a class="custom-home-section-index-item" href="#sec-craftsmen">
                    <p class="custom-home-section-index-item__label"><span
                            class="custom-home-section-index-item__num">04.</span>職人の技術</p>
                    <div class="img-ph-wrapper" style="padding-top:72%;">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-craft-01.jpeg"
                            alt="職人の技術 イメージ画像" style="object-fit:cover;">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 漆喰 / 無垢 -->
    <section id="sec-materials" class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Materials</p>
                <h2 class="section-title-ja">素材</h2>
            </div>
            <div class="custom-home-material-list">
                <div class="custom-home-material-item">
                    <div class="custom-home-material-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-material.jpg"
                                alt="漆喰 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-material-item__body">
                        <h3 class="custom-home-material-item__title">漆喰</h3>
                        <p class="custom-home-material-item__text">深呼吸したくなる、どこか丸みを帯びた空気。 室内の壁には、天然の漆喰を採用しています。嫌な生活臭を吸着して消臭するだけでなく、お部屋の湿度を常に心地よい状態へコントロールする調湿効果に優れています。クロス（壁紙）の家にはない、優しく光を反射する独特の陰影と、ツンとしない澄んだ空気が、家族の健やかな毎日を守ります。</p>
                        <p class="custom-home-material-more">
                            <a class="c-more-btn" href="<?php bloginfo('url'); ?>/column/">コラムで詳しく見る<span
                                    class="c-more-btn__arrow">→</span></a>
                        </p>
                    </div>
                </div>
                <div class="custom-home-material-item">
                    <div class="custom-home-material-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-spec-wood-floor.jpg" alt="無垢 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-material-item__body">
                        <h3 class="custom-home-material-item__title">無垢</h3>
                        <p class="custom-home-material-item__text">冬の朝でも冷たくない、裸足でいたくなる床。 毎日肌に触れるフローリングには、本物の無垢材を敷き詰めます。冬場でも足裏の体温を奪わず、底冷えのない優しさが魅力。年月を経て少しずつ色艶が深まり、家族の歩みが刻まれることで、傷や汚れさえも「愛着のあるヴィンテージの風合い」へと育っていきます。</p>
                        <p class="custom-home-material-more">
                            <a class="c-more-btn" href="<?php bloginfo('url'); ?>/column/">コラムで詳しく見る<span
                                    class="c-more-btn__arrow">→</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 02 こだわりの標準仕様 -->
    <section id="sec-spec" class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Standard Spec</p>
                <h2 class="section-title-ja">こだわりの標準仕様</h2>
            </div>
            <div class="custom-home-spec-grid">
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-kitchen.jpg"
                                alt="キッチン イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">キッチン</p>
                        <p class="custom-home-spec-item__text">料理をつくる時間が、何気ない楽しみに変わる。 ただ作業をこなす場所ではなく、家族とのつながりを感じられる特等席としてのキッチンをご提案します。使い勝手の良さやお手入れのしやすさといった機能性を備えながら、LDK全体の美しい家具のように空間へ馴染む、線の細い洗練された佇まいを形にします。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-light.jpg"
                                alt="照明・アクセサリー イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">照明・アクセサリー</p>
                        <p class="custom-home-spec-item__text">夕暮れ時、じんわりと灯る光を明かす。 部屋全体をただ一様に明るくするのではなく、光と影の陰影を愉しむためのライティングを計算します。真鍮のスイッチプレートや、お気に入りの雑貨をそっと引き立てる間接照明など、小さなディテールを丁寧に積み重ねて、夜の時間が一番愛おしくなる舞台を整えます。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-sikkui.jpg"
                                alt="ガルバ・ジョリパ・漆喰 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">ガルバ・ジョリパ・漆喰</p>
                        <p class="custom-home-spec-item__text">街並みに溶け込みながら、個性が静かに際立つ。 帰り道、遠くから我が家の灯りが見えてホッとする。そんな風景を目指して、耐久性に優れたガルバリウム、職人のコテ跡が美しい表情を生むジョリパット、漆喰などの外壁材を厳選。無駄な線を排した美しいシルエットで、経年変化さえも美しく見せる佇まいを仕立てます。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-spec-tategu.jpg"
                                alt="建具(神谷) イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">建具(神谷)</p>
                        <p class="custom-home-spec-item__text">暮らしのノイズを削ぎ落とし、光と風を通す。 天井まで届く枠のないハイドア（神谷コーポレーション）を採用しています。ドアを開けたときに壁と天井の「線」が邪魔をしないため、空間が実寸以上に広く感じられます。視覚的なノイズが消えることで、光や風がお部屋の奥まですっきりと通り抜ける心地よさが生まれます。</p>
                    </div>
                </div>
            </div>
            <p class="custom-home-spec-more">
                <a class="c-more-btn" href="<?php bloginfo('url'); ?>/column/">コラムで詳しく見る<span
                        class="c-more-btn__arrow">→</span></a>
            </p>
        </div>
    </section>

    <!-- 03 性能 -->
    <section id="sec-performance" class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Performance</p>
                <h2 class="section-title-ja">性能</h2>
            </div>
            <div class="custom-home-spec-grid">
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-feature-01-construction.jpg"
                                alt="耐震 3 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">耐震 3</p>
                        <p class="custom-home-spec-item__text">万が一のときも、家族の命と財産を確実に守る。 季住デザインの自由設計では、一棟ごとに緻密な構造計算（許容応力度計算）を実施しています。法律が定める最高ランクである「耐震等級3」を標準とすることで、繰り返しの大きな揺れにも耐え抜き、住んだ後の安心を構造の根底からしっかりと支え続けます。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-warranty-window.jpg"
                                alt="気密 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">気密</p>
                        <p class="custom-home-spec-item__text">冷暖房に頼りすぎない、隙間のない丁寧な施工。 どんなに良い断熱材を使っても、家に隙間があっては意味がありません。職人の手仕事によって家の隙間を極限までなくすことで、外の不快な暑さや寒さをシャットアウト。家全体の温度差をなくし、どこにいても温度変化によるストレスのない暮らしを叶えます。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/custom-home-feature-02-energy.jpg"
                                alt="断熱 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">断熱</p>
                        <p class="custom-home-spec-item__text">夏は涼しく冬は暖かい、魔法瓶のような温もり。 厳しい季節でも家族が健やかに暮らせるよう、次世代省エネ基準を満たす高い断熱性能を確保しています。家そのものが熱を逃がさないため、少ない光熱費で部屋中が均一に暖まり、その朝でも布団からすっと起きてこられるような優しい室内環境をつくります。</p>
                    </div>
                </div>
                <div class="custom-home-spec-item">
                    <div class="custom-home-spec-item__img">
                        <div class="img-ph-wrapper">
                            <img class="img-ph"
                                src="<?php bloginfo('template_url');?>/img/support-inspection-living.jpg"
                                alt="一種換気・熱交換 イメージ画像">
                        </div>
                    </div>
                    <div class="custom-home-spec-item__body">
                        <p class="custom-home-spec-item__label">一種換気・熱交換</p>
                        <p class="custom-home-spec-item__text">冷暖房の効率を落とさず、常に澄んだ空気を。 外の空気をそのまま取り込むのではなく、室内の温度・湿度に近づけてから綺麗にして室内に取り込む「熱交換型の一種換気システム」を採用しています。窓を開け閉めしなくても、24時間いつでも新鮮でクリーンな空気が家中を巡る、家族に優しい仕組みです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 04 職人の技術 -->
    <section id="sec-craftsmen" class="inner-section inner-section--neutral">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Craftsmen</p>
                <h2 class="section-title-ja">職人の技術</h2>
            </div>
            <div class="custom-home-feature-grid">
                <div class="custom-home-feature-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-craft-01.jpeg"
                            alt="左官 イメージ画像">
                    </div>
                    <h3 class="custom-home-feature-item__title">左官</h3>
                    <p class="custom-home-feature-item__text">図面には描ききれない、手仕事のぬくもり。 光の当たり方によって、朝と夜で刻々と表情を変える漆喰の壁。職人がコテを使い、一点一点手仕事で仕上げる塗り壁には、機械生産の量産クロスには決して真似できない独特の柔らかさと、深みのある美しい陰影が宿ります。</p>
                </div>
                <div class="custom-home-feature-item">
                    <div class="img-ph-wrapper">
                        <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-craft-02.jpeg"
                            alt="造作（大工・建具） イメージ画像">
                    </div>
                    <h3 class="custom-home-feature-item__title">造作(大工・建具)</h3>
                    <p class="custom-home-feature-item__text">あなたの暮らしの寸法に、ぴったりと合わせる。 「ここに小さな飾り棚がほしい」「キッチンカウンターの下に収まる収納がほしい」といった願いを、大工の手仕事による造作家具、あなたの日常の動作や持ち物の量に合わせて職人が細部まで作り込み、既製品にはない使い心地の良さを仕立てます。</p>
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
                            <a href="#" class="custom-home-flow__step-title">家づくり相談会</a>
                            <p class="custom-home-flow__step-text">
                                家づくり、さて、何から始めよう。そんなふうに迷われたときこそ、まずはプロに相談してみてください。どんなふうに進めればあなたの思い描いた暮らしが実現するのか、間取りや土地のこと、予算のことまで、どんな小さなことでも大丈夫です。「理想の住まい」というまだかたちのない想いを、少しずつ現実に近づけるお手伝いをします。どうぞお気軽にご相談ください。季住デザインのお家づくりへの想いもご紹介いたします。</p>
                            <p class="custom-home-flow__step-link"><a class="c-more-btn"
                                    href="<?php bloginfo('url'); ?>/contact/">資料請求<span
                                        class="c-more-btn__arrow">→</span></a><a class="c-more-btn"
                                    href="<?php bloginfo('url'); ?>/contact/">お問い合わせ<span
                                        class="c-more-btn__arrow">→</span></a></p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">2</span>
                        <div>
                            <p class="custom-home-flow__step-title">資金計画</p>
                            <p class="custom-home-flow__step-text">進め方についての霧が晴れたらいよいよ住まいづくりへ。…その前に少しだけ立ち止まって、「どのくらいの価格で、どんな暮らしができるのか？」を一緒に考えてみませんか。将来のライフプランを見据えた家づくりのためにファイナンシャルプランナーが丁寧にサポートいたします。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">3</span>
                        <div>
                            <p class="custom-home-flow__step-title">ヒアリング</p>
                            <p class="custom-home-flow__step-text">夢と価格のバランスが見えてきたところでもう一度、じっくりとあなたのお話を聞かせてください。2階建てか、平屋にしようか。お庭のある暮らしも素敵です。あるいは、新築だけでなくリノベーションという選択肢がしっくりくる方もいるかもしれません。これからどんな住まいで、どんなふうに歩んでいくのか。次の一歩を一緒に見つけていきましょう。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">4</span>
                        <div>
                            <p class="custom-home-flow__step-title">土地探し</p>
                            <p class="custom-home-flow__step-text">あなたの夢を乗せて、土地探しの旅へようやく出発です。同じ大阪・北摂でも町ごとに流れる空気や風景はさまざま。だからこそあなたにぴったりの場所を見つけるために 担当スタッフが寄り添い、誠心誠意お手伝いします。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">5</span>
                        <div>
                            <p class="custom-home-flow__step-title">土地契約・工事請負契約</p>
                            <p class="custom-home-flow__step-text">土地が見つかれば、まずはその土地とのご縁を結ぶ「土地契約」へ。それとほぼ同じタイミングで、私たちとの「工事請負契約」も取り交わします。ご契約をきっかけに、住まいのかたちがより一層くっきりと浮かび上がってきます。ここから、具体的なプランづくりが本格的に始まります。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">6</span>
                        <div>
                            <p class="custom-home-flow__step-title">プラン・内装決定</p>
                            <p class="custom-home-flow__step-text">あなたの理想の住まいがついにカタチになっていきます。設計士との打ち合わせでは、間取りはもちろん窓の1つに至るまで。インテリアコーディネーターとはキッチンや洗面台などの設備、収納の使い方やカラーリングも一緒に考えていきます。「好き」や「こうしたい」の気持ちをたっぷり詰め込んでいきましょう。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">7</span>
                        <div>
                            <p class="custom-home-flow__step-title">工事</p>
                            <p class="custom-home-flow__step-text">これまでたくさんの打ち合わせを重ねてきましたね。いよいよ、夢の住まいがカタチになる工事が始まります。ここからは現場監督と職人の出番。工事の節目ごとに現場監督が丁寧に施工状況を確認しながら、安心・安全に進めていきます。</p>
                        </div>
                    </div>
                    <div class="custom-home-flow__step">
                        <span class="custom-home-flow__step-num">8</span>
                        <div>
                            <p class="custom-home-flow__step-title">お引渡し</p>
                            <p class="custom-home-flow__step-text">あなただけの住まいがついに完成しました。でも、私たちはここが「ゴール」ではなく「はじまり」だと考えています。この場所で日々の暮らしを重ね、時を育てていく……これからの物語にも私たちはそっと寄り添い続けます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/lower-event-section', null, ['section_id' => 'lower-event-title-home']); ?>

    <!-- 施工事例 / 保障バナー -->
    <div class="inner-banner-pair">
        <a class="inner-banner" href="<?php bloginfo('url'); ?>/voice/">
            <div class="img-ph-wrapper">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-banner-portfolio.jpg"
                    alt="施工事例 イメージ画像">
            </div>
            <div class="inner-banner__overlay">
                <p class="inner-banner__en">Portfolio</p>
                <p class="inner-banner__title">施工事例</p>
            </div>
        </a>
        <a class="inner-banner" href="<?php bloginfo('url'); ?>/support/">
            <div class="img-ph-wrapper">
                <img class="img-ph" src="<?php bloginfo('template_url');?>/img/custom-home-banner-support.jpg"
                    alt="保障・アフターサポート イメージ画像">
            </div>
            <div class="inner-banner__overlay">
                <p class="inner-banner__en">Support</p>
                <p class="inner-banner__title">保障・アフターサポート</p>
            </div>
        </a>
    </div>

</main>

<?php get_footer(); ?>

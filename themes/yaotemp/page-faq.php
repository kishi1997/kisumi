<?php
/*
Template Name: よくある質問
*/
get_header(); ?>

<main id="page-faq" class="page-faq">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">FAQ</p>
            <h1 class="page-hero__title">よくある質問</h1>
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

    <div class="inner-section faq-section">
        <div class="inner-section__inner">

            <!-- カテゴリフィルター -->
            <nav class="faq-filter" aria-label="FAQカテゴリ">
                <a class="faq-filter__btn" href="#faq-flow">
                    <span class="faq-filter__label">家づくりの進め方・不動産について</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-design">
                    <span class="faq-filter__label">設計・デザインについて</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-cost">
                    <span class="faq-filter__label">お金・住宅性能について</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-renovation">
                    <span class="faq-filter__label">リフォーム・リノベーションについて</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-after">
                    <span class="faq-filter__label">アフターサービスについて</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
            </nav>

            <!-- 家づくりの進め方・不動産について -->
            <section class="faq-category" id="faq-flow">
                <h2 class="faq-category__title">家づくりの進め方・不動産について</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">リノベーションか新築か迷っていますが、どちらが良いでしょうか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">お客様のご要望や予算、ライフスタイルによって正解は異なります。季住デザインではどちらも得意としておりますので、双方のメリット・デメリットを中立的な視点でご説明し、最適な選択を一緒に考えます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">相談する段階で、具体的な暮らしのイメージが固まっていなくても大丈夫ですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">全く問題ありません。「こんな家にしたい」という具体的な図面がなくても、「今の住まいのここで困っている」「朝はこんな風にゆっくりコーヒーを飲みたい」といった、日々のささやかな感情や暮らしの動きからお聞かせください。丁寧な対話を重ねるなかで、私たちが理想の暮らしの輪郭を一緒にひも解いていきます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">問い合わせをしてから、実際に住み始めるまでにどれくらいの期間がかかりますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">新築の注文住宅の場合は、最初のご相談からお引き渡しまで約10ヶ月〜1年、リノベーションの場合は約半年〜8ヶ月が目安となります。私たちは効率を優先して早く建てることよりも、お客様とじっくり対話し、ミリ単位で動線を整える時間を大切にしています。スケジュールに余裕を持ってご相談いただくのがおすすめです。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">対応しているエリアはどこまでですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">大阪府の北摂エリア（吹田・豊中・箕面・茨木など）を中心に、兵庫県南東部などをカバーしています。私たちが大切にしているのは「住み始めてからのレスポンスの速さ」です。万が一の不具合や困りごとがあった際、自社スタッフがすぐに駆けつけられる距離を基本の施工エリアとさせていただいております。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 設計・デザインについて -->
            <section class="faq-category" id="faq-design">
                <h2 class="faq-category__title">設計・デザインについて</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">季住デザインの「自由設計」は、どこまで自由に決められますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">構造上の安全（耐震等級3の確保など）を大前提とした上で、間取り、窓の配置、キッチンや造作家具の寸法、照明計画にいたるまで、決まったルールや仕様の制限はありません。お客様の毎日の動きをミリ単位で測りながら、ゼロから丁寧に設計します。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">自然素材（無垢の床や漆喰の壁）はお手入れが大変ではないですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">特別な負担はありません。日々の掃除は掃除機や乾拭きで十分です。無垢材や漆喰は、時間が経つほどに深い色艶を増し、家族の歩みが刻まれることで傷や汚れさえも「愛着のあるヴィンテージの風合い」へと育っていきます。お引き渡し時には、汚れてしまったときのお手入れ方法も丁寧にお伝えします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">ハウスメーカーや一般的な工務店との一番の違いは何ですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">スペックや間取り図を売るのではなく、そこに住む人の「感情」を一番大切に設計している点です。また、大手のように担当者が次々と変わるのではなく、土地探し（不動産）から設計・施工・アフターまで同じ専門チームが一貫して伴走するため、お客様の「理想の空気感」が現場の職人まですっすぐ伝わります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">庭の植栽や外構（エクステリア）も一緒に提案してもらえますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい。私たちが掲げる「季節を住まう」家づくりにおいて、窓から見える緑や、風を遮らない植栽計画はとても重要な要素です。室内で過ごすときの目線や、街並みからの見え方を計算し、建物と外構、造園までをトータルで美しくデザインしてご提案いたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- お金・住宅性能について -->
            <section class="faq-category" id="faq-cost">
                <h2 class="faq-category__title">お金・住宅性能について</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">土地探しや資金計画から相談に乗ってもらえますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい、もちろんです。不動産のプロと建築士が在籍しておりますので、土地のポテンシャルを見極めた上でのアドバイスや、無理のない資金計画の策定からトータルでサポートいたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">住宅性能（耐震性や断熱性など）の基準はどのようになっていますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">季住デザインでは、全棟で緻密な構造計算を行い、最高ランクである「耐震等級3」を標準としています。断熱・気密性についても次世代省エネ基準を満たす高いスペックを確保し、少ない光熱費で夏涼しく冬暖かい、まるで魔法瓶のような優しい室内環境をつくります。数値の高さだけでなく、光や風の心地よさを活かす「パッシブデザイン」を取り入れています。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">坪単価や建築費用の目安を教えてください。</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">自由設計のため、敷地の条件やご要望によって一概にいくらとは言えませんが、建物だけでなく、土地代や諸経費、住み始めてからの光熱費までを含めた「総予算」のバランスを見ながら、無理のない範囲で最大限の価値をご提案します。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">契約後に追加費用が発生して予算オーバーになることはありますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">大幅な面積の変更や、お客様からのご要望による仕様の追加がない限り、最初のお見積もりから増額がないよう誠実な予算管理を行います。もし途中で変更や追加が必要になった場合でも、必ず事前に追加費用をご提示し、ご承諾をいただいた上で進めますので、知らない間に費用が膨らんでいるということはありません。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- リフォーム・リノベーションについて -->
            <section class="faq-category" id="faq-renovation">
                <h2 class="faq-category__title">リフォーム・リノベーションについて</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">かなり古い家（実家など）でもリノベーションすることは可能ですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい、十分に可能です。まずは建築士が現地に伺い、床の傾きや構造の傷み、断熱の状況まで細かく住宅診断を行います。ただ新しく装飾するのではなく、古い建物のクセを見極めて確実に耐震・断熱の補強を施し、次の世代へ安心して住み継げる美しく安全な骨組みへと再生させます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">リノベーション中、住みながら工事をすることはできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">キッチンや浴室の交換、特定の部屋だけの手直しといった部分リフォームであれば、住みながらの工事が可能です。間取りを大きく変えるフルリノベーションや大規模な増改築の場合は、騒音や水回りが使えない期間が生じるため、仮住まいへの一時的なお引越しをおすすめしています。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">マンションのリノベーションも対応していますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい、数多くの実績があります。マンションはコンクリートの骨組み（構造体）を動かすことはできませんが、専有部分の壁をすべて解体してゼロから間取りをつくり直す「スケルトンリノベーション」が可能です。マンション特有の規約や構造の制限を熟知したプロが、自由度を最大限に引き出した空間を仕立てます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">契約する前でも、現地調査やプランの提案はしてもらえますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい。ご契約をいただくまでの現地診断やご相談、図面・3Dパースを使った初期のプラン提案までは、誠意を持ってすべて「無償」にて対応させていただいております。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- アフターサービスについて -->
            <section class="faq-category" id="faq-after">
                <h2 class="faq-category__title">アフターサービスについて</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">住み始めてからのメンテナンスや保証はどうなっていますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">私たちは「住んでから」を大切にしています。定期的な点検はもちろん、自然素材のメンテナンス方法のレクチャーなど、末永く快適に暮らしていただけるよう、一貫したアフターフォロー体制を整えています。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">引き渡し後に不具合や困りごとが起きた場合、どこに連絡すればいいですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">公式LINE、またはお電話にてご連絡ください。私たちは、建てた後もお客様の一番身近な「住まいのかかりつけ医」でありたいと考えています。ヒアリングでも大変ご評価いただいた「レスポンスの速さ」をお引き渡し後も維持し、自社スタッフが迅速に対応・駆けつけをいたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">住み始めてから、部屋の模様替えや部分的なリフォームの相談に乗ってもらえますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">はい、喜んで承ります。「子どもが大きくなったから部屋を仕切りたい」「ここに新しく棚を造り付けたい」といった、ライフステージの変化に伴う改修は大歓迎です。あなたの家の構造や好みのテイストを一番よく知っている私たちだからこそ、全体の統一感を損なわない、最適なご提案をスピーディーに行うことができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">自分で家のメンテナンス（DIYなど）をしたい場合、サポートしてもらえますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">ぜひ一緒に楽しみましょう！無垢の床にワックスを塗ったり、漆喰の細かな汚れを自分で直したりすることは、家への愛着を育む素晴らしい時間です。季住デザインでは、オーナー様向けに自然素材のお手入れワークショップを開催したり、ブログや動画でコツを発信したりしています。分からないことがあれば、いつでもLINEで気軽にご質問ください。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-item__q').forEach(function(q) {
        q.addEventListener('click', function() {
            var item = this.closest('.faq-item');
            var isOpen = item.classList.toggle('is-open');
            this.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    });
});
</script>

<?php get_footer(); ?>

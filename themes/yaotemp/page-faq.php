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
                <a class="faq-filter__btn" href="#faq-performance">
                    <span class="faq-filter__label">住宅性能・住み心地について</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-cost">
                    <span class="faq-filter__label">費用・資金計画について</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-flow">
                    <span class="faq-filter__label">家づくりの進め方・土地探し</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-quality">
                    <span class="faq-filter__label">施工・品質・職人について</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <a class="faq-filter__btn" href="#faq-after">
                    <span class="faq-filter__label">アフター・リノベーションについて</span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
            </nav>

            <!-- 住宅性能・住み心地について -->
            <section class="faq-category" id="faq-performance">
                <h2 class="faq-category__title">住宅性能・住み心地について</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">本当にエアコン1台で快適に過ごせるのでしょうか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">冬場のヒートショックは防げますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">結露やカビの心配はありませんか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">花粉やPM2.5はどの程度防げますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 費用・資金計画について -->
            <section class="faq-category" id="faq-cost">
                <h2 class="faq-category__title">費用・資金計画について</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">注文住宅はやはり高くなりますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">どの段階で総額がわかりますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">住宅ローンの相談はできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">予算内でどこまで希望を叶えられますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 家づくりの進め方・土地探し -->
            <section class="faq-category" id="faq-flow">
                <h2 class="faq-category__title">家づくりの進め方・土地探し</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">何から相談すればよいですか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">土地探しからお願いできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">相談から完成までどれくらいかかりますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">まだ具体的に決まっていなくても相談できますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 施工・品質・職人について -->
            <section class="faq-category" id="faq-quality">
                <h2 class="faq-category__title">施工・品質・職人について</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">施工中の現場を見ることはできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">どんな職人さんが工事を担当しますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">品質管理はどのように行っていますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">引き渡し前の検査はありますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- アフター・リノベーションについて -->
            <section class="faq-category" id="faq-after">
                <h2 class="faq-category__title">アフター・リノベーションについて</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">住み始めてからの相談はできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">定期点検や保証はありますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">リフォームやリノベーションも相談できますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text">小さな修繕もお願いできますか？</span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。</p>
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

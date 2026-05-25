<?php
/*
Template Name: よくある質問
*/
get_header();

$faq_categories = [
    [
        'id' => 'performance',
        'title' => '住宅性能・住み心地について',
        'items' => [
            '本当にエアコン1台で快適に過ごせるのでしょうか？',
            '冬場のヒートショックは防げますか？',
            '結露やカビの心配はありませんか？',
            '花粉やPM2.5はどの程度防げますか？',
        ],
    ],
    [
        'id' => 'cost',
        'title' => '費用・資金計画について',
        'items' => [
            '注文住宅はやはり高くなりますか？',
            'どの段階で総額がわかりますか？',
            '住宅ローンの相談はできますか？',
            '予算内でどこまで希望を叶えられますか？',
        ],
    ],
    [
        'id' => 'flow',
        'title' => '家づくりの進め方・土地探し',
        'items' => [
            '何から相談すればよいですか？',
            '土地探しからお願いできますか？',
            '相談から完成までどれくらいかかりますか？',
            'まだ具体的に決まっていなくても相談できますか？',
        ],
    ],
    [
        'id' => 'quality',
        'title' => '施工・品質・職人について',
        'items' => [
            '施工中の現場を見ることはできますか？',
            'どんな職人さんが工事を担当しますか？',
            '品質管理はどのように行っていますか？',
            '引き渡し前の検査はありますか？',
        ],
    ],
    [
        'id' => 'after',
        'title' => 'アフター・リノベーションについて',
        'items' => [
            '住み始めてからの相談はできますか？',
            '定期点検や保証はありますか？',
            'リフォームやリノベーションも相談できますか？',
            '小さな修繕もお願いできますか？',
        ],
    ],
];
?>

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
            <nav class="faq-filter" aria-label="FAQカテゴリ">
                <?php foreach ($faq_categories as $index => $category) : ?>
                <a class="faq-filter__btn" href="#faq-<?php echo esc_attr($category['id']); ?>">
                    <span class="faq-filter__label"><?php echo esc_html($category['title']); ?></span>
                    <span class="faq-filter__arrow" aria-hidden="true">›</span>
                </a>
                <?php endforeach; ?>
            </nav>

            <?php foreach ($faq_categories as $category) : ?>
            <section class="faq-category" id="faq-<?php echo esc_attr($category['id']); ?>">
                <h2 class="faq-category__title"><?php echo esc_html($category['title']); ?></h2>
                <div class="faq-list">
                    <?php foreach ($category['items'] as $question) : ?>
                    <div class="faq-item">
                        <button class="faq-item__q" type="button" aria-expanded="false">
                            <span class="faq-item__mark">Q</span>
                            <span class="faq-item__text"><?php echo esc_html($question); ?></span>
                            <span class="faq-item__q-arrow" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__a">
                            <div class="faq-item__a-inner">
                                <span class="faq-item__mark faq-item__mark--a">A</span>
                                <p class="faq-item__a-text">回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endforeach; ?>
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
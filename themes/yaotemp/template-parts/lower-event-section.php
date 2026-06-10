<?php
/**
 * 下層ページ共通 — イベント情報セクション
 * 1記事のみ表示（左写真・右テキスト）
 *
 * 呼び出し側から $args['section_id'] でセクション固有の aria-labelledby ID を渡す。
 * 例: get_template_part('template-parts/lower-event-section', null, ['section_id' => 'lower-event-title-home']);
 */
$section_id = $args['section_id'] ?? 'lower-event-title';
?>
<section class="inner-section inner-section--gray lower-event-section"
    aria-labelledby="<?php echo esc_attr($section_id); ?>">
    <div class="inner-section__inner lower-event-section__inner">
        <div class="c-lower-sec-head lower-event-section__head">
            <p class="section-title-en">Event</p>
            <h2 id="<?php echo esc_attr($section_id); ?>" class="section-title-ja">イベント情報</h2>
        </div>

        <article class="lower-event-card lower-event-card--horizontal">
            <a href="<?php bloginfo('url'); ?>/events/">
                <figure class="lower-event-card__media">
                    <img class="lower-event-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/img/top-event-01.jpg"
                        alt="イベント情報 イメージ画像">
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

        <p class="lower-event-section__more">
            <a class="c-more-btn" href="<?php bloginfo('url'); ?>/events/">
                もっと見る
                <span class="c-more-btn__arrow">→</span>
            </a>
        </p>
    </div>
</section>

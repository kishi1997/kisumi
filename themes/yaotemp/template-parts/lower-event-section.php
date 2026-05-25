<?php
$lower_event_query = new WP_Query(array(
    'post_type' => 'events',
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
));

$lower_event_fallbacks = array(
    array(
        'image' => get_template_directory_uri() . '/img/top-event-01.jpg',
        'alt' => 'イベント会場の外観',
        'status' => '募集中',
        'category' => '相談会',
        'title' => '家づくり相談会',
        'date' => '開催日時　2026.03.15　-　2026.03.15',
        'place' => '開催場所　季住 kisumi design 本社',
    ),
    array(
        'image' => get_template_directory_uri() . '/img/top-event-02.jpg',
        'alt' => 'イベント会場の内観',
        'status' => '募集中',
        'category' => '見学会',
        'title' => 'モデルハウス完成見学会',
        'date' => '開催日時　2026.03.15　-　2026.03.15',
        'place' => '開催場所　季住 kisumi design 本社',
    ),
    array(
        'image' => get_template_directory_uri() . '/img/top-event-03.jpg',
        'alt' => 'イベント会場のキッチン',
        'status' => '開催終了',
        'category' => '分譲販売',
        'title' => '第3期分譲販売開始',
        'date' => '開催日時　2026.03.15　-　2026.03.15',
        'place' => '開催場所　季住 kisumi design 本社',
    ),
);
?>

<section class="inner-section inner-section--gray lower-event-section" aria-labelledby="lower-event-title">
    <div class="inner-section__inner lower-event-section__inner">
        <div class="c-lower-sec-head lower-event-section__head">
            <p class="section-title-en">Event</p>
            <h2 id="lower-event-title" class="section-title-ja">イベント情報</h2>
        </div>

        <div class="lower-event-slider js-lower-event-slider">
            <?php if ($lower_event_query->have_posts()) : ?>
                <?php while ($lower_event_query->have_posts()) : $lower_event_query->the_post(); ?>
                    <?php
                    $lower_event_terms = get_the_terms(get_the_ID(), 'events_cat');
                    $lower_event_category = (!empty($lower_event_terms) && !is_wp_error($lower_event_terms)) ? $lower_event_terms[0]->name : 'イベント';
                    $lower_event_date = get_post_meta(get_the_ID(), 'day-time', true);
                    $lower_event_place = get_post_meta(get_the_ID(), 'place', true);
                    ?>
                    <article class="lower-event-card">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="lower-event-card__media">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'lower-event-card__img')); ?>
                                <?php else : ?>
                                    <img class="lower-event-card__img" src="<?php echo esc_url(get_template_directory_uri() . '/img/top-event-01.jpg'); ?>" alt="">
                                <?php endif; ?>
                                <span class="lower-event-card__status lower-event-card__status--open">募集中</span>
                            </figure>
                            <div class="lower-event-card__body">
                                <p class="lower-event-card__cat"><?php echo esc_html($lower_event_category); ?></p>
                                <h3 class="lower-event-card__name"><?php the_title(); ?></h3>
                                <?php if (!empty($lower_event_date)) : ?>
                                    <p class="lower-event-card__meta">開催日時　<?php echo esc_html($lower_event_date); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($lower_event_place)) : ?>
                                    <p class="lower-event-card__meta">開催場所　<?php echo esc_html($lower_event_place); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <?php foreach ($lower_event_fallbacks as $lower_event_item) : ?>
                    <article class="lower-event-card">
                        <a href="<?php bloginfo('url'); ?>/events/">
                            <figure class="lower-event-card__media">
                                <img class="lower-event-card__img" src="<?php echo esc_url($lower_event_item['image']); ?>" alt="<?php echo esc_attr($lower_event_item['alt']); ?>">
                                <span class="lower-event-card__status<?php echo ($lower_event_item['status'] === '募集中') ? ' lower-event-card__status--open' : ' lower-event-card__status--closed'; ?>">
                                    <?php echo esc_html($lower_event_item['status']); ?>
                                </span>
                            </figure>
                            <div class="lower-event-card__body">
                                <p class="lower-event-card__cat"><?php echo esc_html($lower_event_item['category']); ?></p>
                                <h3 class="lower-event-card__name"><?php echo esc_html($lower_event_item['title']); ?></h3>
                                <p class="lower-event-card__meta"><?php echo esc_html($lower_event_item['date']); ?></p>
                                <p class="lower-event-card__meta"><?php echo esc_html($lower_event_item['place']); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <p class="lower-event-section__more">
            <a class="c-more-btn" href="<?php bloginfo('url'); ?>/events/">
                もっと見る
                <span class="c-more-btn__arrow">→</span>
            </a>
        </p>
    </div>
</section>

<?php
/*
Template Name: 会社概要
*/
get_header(); ?>

<main id="page-company" class="page-company">

    <!-- ページヒーロー -->
    <section class="page-hero">
        <div class="page-hero__text">
            <p class="page-hero__en">Company</p>
            <h1 class="page-hero__title">会社概要</h1>
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
    <!-- 会社概要 -->
    <section class="inner-section">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Company Profile</p>
                <h2 class="section-title-ja">会社概要</h2>
            </div>
            <table class="company-profile-table">
                <tbody>
                    <tr>
                        <th>社名</th>
                        <td>北摂価値向上委員会株式会社</td>
                    </tr>
                    <tr>
                        <th>屋号</th>
                        <td>季住 -kisumi design-</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>前田 誠治（まえだ せいじ）</td>
                    </tr>
                    <tr>
                        <th>創業</th>
                        <td>2025年（令和7年）3月27日</td>
                    </tr>
                    <tr>
                        <th>免許・登録</th>
                        <td>宅地建物取引業許可　大阪府知事（1）第66362号</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>100万円</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td>従業員：11名（社員・パート）</td>
                    </tr>
                    <tr>
                        <th>在籍資格者</th>
                        <td>一級建築士、二級建築士、宅地建物取引士、住宅診断士、耐震診断士、他</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>
                            戸建て注文住宅の設計／施工<br>
                            不動産売買仲介・分譲事業<br>
                            リフォーム・リノベーションの設計／施工<br>
                            住宅診断／メンテナンス
                        </td>
                    </tr>
                    <tr>
                        <th>活動エリア</th>
                        <td>
                            大阪北摂エリア（箕面市、豊中市、池田市、吹田市、茨木市、高槻市、摂津市、三島郡島本町）<br>
                            その他大阪府（大阪市、守口市、門真市、寝屋川市、枚方市、交野市、四条畷市、大東市、東大阪市）<br>
                            兵庫県の一部（川西市、宝塚市、伊丹市、尼崎市、西宮市、芦屋市、神戸市東灘区）<br>
                            京都府の一部（向日市、長岡京市、乙訓郡大山崎町）<br>
                            その他エリアもお気軽にご相談ください
                        </td>
                    </tr>
                    <tr>
                        <th>加盟団体</th>
                        <td>
                            公益社団法人 全日本不動産協会<br>
                            無添加住宅 正規代理店<br>
                            ハウスジーメン 会員
                        </td>
                    </tr>
                    <tr>
                        <th>関連会社・販売店</th>
                        <td>MD NEXT株式会社</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 所在地 -->
    <section class="inner-section inner-section--gray">
        <div class="inner-section__inner">
            <div class="c-lower-sec-head">
                <p class="section-title-en">Location</p>
                <h2 class="section-title-ja">所在地</h2>
            </div>
            <div class="company-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6549.778140438152!2d135.4997458!3d34.8338815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fba4db0211bb%3A0x2a749d0513635b7b!2z5pel5pys44CB44CSNTYyLTAwMzMg5aSn6Ziq5bqc566V6Z2i5biC5LuK5a6u77yT5LiB55uu77yZ4oiS77yS77yU!5e0!3m2!1sja!2sca!4v1779612814486!5m2!1sja!2sca"
                    width="600" height="450" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <table class="company-profile-table">
                <tbody>
                    <tr>
                        <th>本店</th>
                        <td>
                            〒562-0033<br>
                            大阪府箕面市今宮3丁目9-24<br>
                            TEL　0172-55-9543
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>

<?php get_footer(); ?>

# image-plan: about（初めての方へ）

> 画像はすべてプレースホルダー。最終素材ではない。
> 最終画像が納品され次第、各スロットを差し替えること。

---

## 画像スロット一覧

| # | スロット | PHP箇所 | ratio | ソース候補 | リネーム後ファイル名 | 配置先 | alt方針 |
|---|---|---|---|---|---|---|---|
| 1 | ページヒーロー | `.img-ph--wide` (l.11) | 約 16:5 | `img/draft/image copy 2.jpg` | `placeholder-about-hero.jpg` | `img/` | 空(role=img, aria-label済) |
| 2 | イントロ 2col右 | `.inner-2col__img` (l.32-35) | 約 5:4 (pt:80%) | `img/draft/image copy 3.jpg` | `placeholder-about-concept.jpg` | `img/` | 「季住デザインのコンセプトイメージ」 |
| 3 | Feature 01 画像 | `.about-feature-item__img` (l.45-48) | 約 4:3 (pt:75%) | `img/draft/image copy 4.jpg` | `placeholder-about-feature-01.jpg` | `img/` | 「家から始まる暮らしのイメージ」 |
| 4 | Feature 02 画像 | `.about-feature-item__img` (l.58-61) | 約 4:3 (pt:75%) | `img/draft/image copy 5.jpg` | `placeholder-about-feature-02.jpg` | `img/` | 「特徴02のイメージ」（要確認） |
| 5 | Feature 03 画像 | `.about-feature-item__img` (l.72-75) | 約 4:3 (pt:75%) | `img/draft/image copy 6.jpg` | `placeholder-about-feature-03.jpg` | `img/` | 「特徴03のイメージ」（要確認） |
| 6 | サービス新しい家づくり | `.about-service-card__img` (l.100-103) | 約 7:5 (pt:70%) | `img/draft/image copy 7.jpg` | `placeholder-service-custom-home.jpg` | `img/` | 「注文住宅のイメージ」 |
| 7 | サービスカード2 | `.about-service-card__img` (l.114-117) | 約 7:5 (pt:70%) | `img/draft/image copy 9.jpg` | `placeholder-service-card-02.jpg` | `img/` | 「サービス2のイメージ」（要確認） |
| 8 | サービスカード3 | `.about-service-card__img` (l.127-130) | 約 7:5 (pt:70%) | `img/draft/image copy 10.jpg` | `placeholder-service-card-03.jpg` | `img/` | 「サービス3のイメージ」（要確認） |
| 9 | Region アイテム1 | `.about-region-item` (l.155-163) | 約 5:3 (pt:60%) | `img/draft/image copy 11.jpg` | `placeholder-region-01.jpg` | `img/` | 「地域コミュニティのイメージ」 |
| 10 | Region アイテム2 | `.about-region-item` (l.164-173) | 約 5:3 (pt:60%) | `img/draft/image copy 12.jpg` | `placeholder-region-02.jpg` | `img/` | 「地域イベントのイメージ」 |
| 11 | Column カード1 | `.about-column-card__img` (l.188-191) | 約 3:2 (pt:66.67%) | `img/draft/image copy 13.jpg` | `placeholder-column-01.jpg` | `img/` | 記事サムネイル（最終はWP投稿画像） |
| 12 | Column カード2 | `.about-column-card__img` | 約 3:2 | `img/draft/image copy 14.jpg` | `placeholder-column-02.jpg` | `img/` | 記事サムネイル |
| 13 | Column カード3 | `.about-column-card__img` | 約 3:2 | `img/draft/image copy 15.jpg` | `placeholder-column-03.jpg` | `img/` | 記事サムネイル |

---

## 最終画像差し替えノート

| スロット | 差し替えタイミング | 備考 |
|---|---|---|
| ヒーロー (#1) | 最終素材納品後 | ページ専用撮影素材 |
| イントロ (#2) | 最終素材納品後 | コンセプト系写真 |
| Feature 01-03 (#3-5) | テキスト確定後に素材割当 | Feature タイトル要確認（→ content-notes） |
| サービスカード (#6-8) | 各サービスページ確定後 | カード2・3のリンク先要確認 |
| Region (#9-10) | 最終素材納品後 | 地域活動系写真 |
| Column (#11-13) | WP記事データ投入時 | アイキャッチに切り替え |

---

## ファイルコピー手順（実装時）

```bash
# img/draft/ → img/ へコピーしてリネーム
cp img/draft/"image copy 2.jpg"  img/placeholder-about-hero.jpg
cp img/draft/"image copy 3.jpg"  img/placeholder-about-concept.jpg
cp img/draft/"image copy 4.jpg"  img/placeholder-about-feature-01.jpg
cp img/draft/"image copy 5.jpg"  img/placeholder-about-feature-02.jpg
cp img/draft/"image copy 6.jpg"  img/placeholder-about-feature-03.jpg
cp img/draft/"image copy 7.jpg"  img/placeholder-service-custom-home.jpg
cp img/draft/"image copy 9.jpg"  img/placeholder-service-card-02.jpg
cp img/draft/"image copy 10.jpg" img/placeholder-service-card-03.jpg
cp img/draft/"image copy 11.jpg" img/placeholder-region-01.jpg
cp img/draft/"image copy 12.jpg" img/placeholder-region-02.jpg
cp img/draft/"image copy 13.jpg" img/placeholder-column-01.jpg
cp img/draft/"image copy 14.jpg" img/placeholder-column-02.jpg
cp img/draft/"image copy 15.jpg" img/placeholder-column-03.jpg
```

実装フェーズでの実際のコピー元は `img/draft/` 内の空き番号から割り当てること。
素材の内容と使用箇所が合わない場合は差し替えて構わない。

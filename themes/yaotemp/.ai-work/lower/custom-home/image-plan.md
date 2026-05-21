# image-plan: custom-home（注文住宅（自由設計））

> 画像はすべてプレースホルダー。最終素材ではない。
> 最終画像が納品され次第、各スロットを差し替えること。

---

## 画像スロット一覧

| # | スロット | PHP箇所 | ratio | ソース候補 | リネーム後ファイル名 | 配置先 | alt方針 |
|---|---|---|---|---|---|---|---|
| 1 | ページヒーロー | `.img-ph--wide` (l.11) | 約 16:5 | `img/draft/image copy 16.jpg` | `placeholder-custom-home-hero.jpg` | `img/` | 空(role=img, aria-label済) |
| 2 | イントロ 2col右 | `.inner-2col__img` (l.36-39) | 約 4:3 (pt:75%) | `img/draft/image copy 17.jpg` | `placeholder-custom-home-intro.jpg` | `img/` | 「注文住宅のイメージ写真」 |
| 3 | 標準仕様: キッチン | `.custom-home-spec-item` (l.54-57) | 約 4:3 (pt:75%) | `img/draft/frame-627321.jpg` | `placeholder-spec-kitchen.jpg` | `img/` | 「標準仕様 キッチンのイメージ」 |
| 4 | 標準仕様: 洗面・クロゼット | `.custom-home-spec-item` (l.58-61) | 約 4:3 (pt:75%) | `img/draft/frame-627322.jpg` | `placeholder-spec-washroom.jpg` | `img/` | 「標準仕様 洗面・クロゼットのイメージ」 |
| 5 | 標準仕様: カルプ・フェノール | `.custom-home-spec-item` (l.62-65) | 約 4:3 (pt:75%) | `img/draft/frame-627323.jpg` | `placeholder-spec-material.jpg` | `img/` | 「標準仕様 素材のイメージ」（要確認） |
| 6 | 標準仕様: 構造材・特注 | `.custom-home-spec-item` (l.66-69) | 約 4:3 (pt:75%) | `img/draft/frame-627324.jpg` | `placeholder-spec-structure.jpg` | `img/` | 「標準仕様 構造材のイメージ」 |
| 7 | 入賞 アイテム1 | `.custom-home-award-item` (l.91-95) | 約 4:3 (pt:75%) | `img/draft/image copy 18.jpg` | `placeholder-award-01.jpg` | `img/` | 「受賞作品のイメージ」 |
| 8 | 入賞 アイテム2 | `.custom-home-award-item` (l.96-100) | 約 4:3 (pt:75%) | `img/draft/image copy 19.jpg` | `placeholder-award-02.jpg` | `img/` | 「受賞作品のイメージ」 |
| 9 | 入賞 アイテム3 | `.custom-home-award-item` (l.101-105) | 約 4:3 (pt:75%) | `img/draft/image copy 20.jpg` | `placeholder-award-03.jpg` | `img/` | 「受賞作品のイメージ」 |
| 10 | かし保証 画像 | `.inner-2col__img` (l.128-131) | 約 3:2 (pt:65%) | `img/draft/image copy 21.jpg` | `placeholder-warranty.jpg` | `img/` | 「かし保証・品質管理のイメージ」 |
| 11 | 家づくりの流れ 画像 | `div > .img-ph-wrapper` (l.181-184) | 約 5:6 (pt:120%) | `img/draft/image copy 22.jpg` | `placeholder-flow.jpg` | `img/` | 「施工・家づくりの流れイメージ」 |
| 12 | イベント カード1 | `.inner-card__img-wrap` (l.200-203) | 約 3:2 (pt:66.67%) | `img/draft/image copy 23.jpg` | `placeholder-event-01.jpg` | `img/` | 「家づくり相談会のイメージ」 |
| 13 | イベント カード2 | `.inner-card__img-wrap` | 約 3:2 | `img/draft/image copy 24.jpg` | `placeholder-event-02.jpg` | `img/` | 「イベントのイメージ」 |
| 14 | イベント カード3 | `.inner-card__img-wrap` | 約 3:2 | `img/draft/image copy 25.jpg` | `placeholder-event-03.jpg` | `img/` | 「イベントのイメージ」 |
| 15 | バナー: 施工事例 | `.inner-banner` (l.217-225) | 約 2:1 (pt:50%) | `img/draft/image copy 26.jpg` | `placeholder-banner-portfolio.jpg` | `img/` | 「施工事例のバナー画像」 |
| 16 | バナー: 保証・アフターサポート | `.inner-banner` (l.226-234) | 約 2:1 (pt:50%) | `img/draft/image copy 2.jpg` | `placeholder-banner-support.jpg` | `img/` | 「保証・アフターサポートのバナー画像」 |

---

## 最終画像差し替えノート

| スロット | 差し替えタイミング | 備考 |
|---|---|---|
| ヒーロー (#1) | 最終素材納品後 | ページ専用撮影素材 |
| イントロ (#2) | 最終素材納品後 | 施工事例系写真 |
| 標準仕様 (#3-6) | 仕様確定後に差し替え | ラベル名要確認（→ content-notes） |
| 入賞 (#7-9) | 受賞情報確定後 | 実際の受賞写真or表彰状 |
| かし保証 (#10) | 最終素材納品後 | 保証関連ビジュアル |
| 家づくりの流れ (#11) | 最終素材納品後 | 施工シーン写真 |
| イベント (#12-14) | WPイベント投稿時 | アイキャッチに切り替え |
| バナー (#15-16) | 最終素材納品後 | 各ページ専用バナービジュアル |

---

## ファイルコピー手順（実装時）

```bash
cp img/draft/"image copy 16.jpg"  img/placeholder-custom-home-hero.jpg
cp img/draft/"image copy 17.jpg"  img/placeholder-custom-home-intro.jpg
cp img/draft/frame-627321.jpg     img/placeholder-spec-kitchen.jpg
cp img/draft/frame-627322.jpg     img/placeholder-spec-washroom.jpg
cp img/draft/frame-627323.jpg     img/placeholder-spec-material.jpg
cp img/draft/frame-627324.jpg     img/placeholder-spec-structure.jpg
cp img/draft/"image copy 18.jpg"  img/placeholder-award-01.jpg
cp img/draft/"image copy 19.jpg"  img/placeholder-award-02.jpg
cp img/draft/"image copy 20.jpg"  img/placeholder-award-03.jpg
cp img/draft/"image copy 21.jpg"  img/placeholder-warranty.jpg
cp img/draft/"image copy 22.jpg"  img/placeholder-flow.jpg
cp img/draft/"image copy 23.jpg"  img/placeholder-event-01.jpg
cp img/draft/"image copy 24.jpg"  img/placeholder-event-02.jpg
cp img/draft/"image copy 25.jpg"  img/placeholder-event-03.jpg
cp img/draft/"image copy 26.jpg"  img/placeholder-banner-portfolio.jpg
cp img/draft/"image copy 2.jpg"   img/placeholder-banner-support.jpg
```

バナー (#16) は about-hero と共有でも可。素材内容次第で差し替えること。

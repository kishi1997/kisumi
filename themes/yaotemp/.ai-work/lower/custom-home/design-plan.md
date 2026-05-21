# design-plan: custom-home（注文住宅（自由設計））

## 基本情報

| 項目 | 値 |
|---|---|
| slug | custom-home |
| テンプレート | `themes/yaotemp/page-custom-home.php` |
| ワイヤー画像 | `wireframe/wire1.png` |
| ページタイトル / h1 | 注文住宅（自由設計） |
| body クラス | `page-custom-home` |
| main id / class | `id="page-custom-home" class="page-custom-home"` |

---

## セクション構成（ワイヤー固定順）

| # | クラス | 背景 | 内容概要 |
|---|---|---|---|
| 1 | `page-hero` | 画像フルワイド | h1「注文住宅（自由設計）」+オーバーレイ |
| 2 | `inner-section` | white | 01 イントロ（2カラム：テキスト左・画像右・お問い合わせボタン付き） |
| 3 | `inner-section inner-section--gray` | --color-surface | 02 標準仕様（セクション見出し + 4アイテムグリッド） |
| 4 | `inner-section` | white | 03 入賞（セクション見出し + 3アイテム横並び） |
| 5 | `inner-section inner-section--neutral` | --color-surface-neutral | 04 施工の信用（かし保証2col + 家づくりの流れstep） |
| 6 | `inner-section` | white | イベント情報（c-section-head + inner-card-grid--3） |
| 7 | `inner-banner-pair` | なし | 施工事例 / 保証・アフターサポート（2バナー横並び） |

---

## 共通クラス（about と共有）

about/design-plan.md と同じグローバル共通クラスを使用。
**custom-homeページには `page-contact-cta` はない**（ワイヤー確認済）。

---

## ページ固有クラス（custom-home スコープ: `#page-custom-home`）

### セクション2: 01 イントロ

```
.inner-section
  .inner-section__inner
    .inner-2col
      .inner-2col__text
        p.inner-section__num  // 01
        h2.inner-section__title  // 何もしない贅沢を、ゼロから形にする。
        p.inner-section__lead
        p > a.top-more-btn  // お問い合わせ
      .inner-2col__img
        .img-ph-wrapper (pt:75%)
```

スタイル方針:
- `inner-section__num`: about の about-feature-item__num と同じスタイル → **共通クラス候補**
- テキスト/画像カラム比はaboutのイントロと同じ（約55/45）
- margin-top:32px のボタン位置は inline style → クラス `.inner-section__more` へ移行

### セクション3: 02 標準仕様（custom-home-spec）

```
.inner-section__head
  p.inner-section__num  // 02
  h2.inner-section__title  // これだけの標準仕様
  p.inner-section__lead
.custom-home-spec-grid
  .custom-home-spec-item (×4)
    .img-ph-wrapper (pt:75%)
    p.custom-home-spec-item__label  // キッチン / 洗面・クロゼット / カルプ・フェノール / 構造材・特注
```

スタイル方針:
- `custom-home-spec-grid`: `display: grid; grid-template-columns: repeat(4, 1fr); gap: clamp(12px, 1.5vw, 20px)`
- `custom-home-spec-item__label`: `text-align: center; margin-top: 12px; font-size: 1.4rem`
- SP: 2列 → 2列（4アイテムなのでSPでも2列で収まる）

### セクション4: 03 入賞（custom-home-award）

```
.inner-section__head
  p.inner-section__num  // 03
  h2.inner-section__title  // 入賞
  p.inner-section__lead
.custom-home-award-row
  .custom-home-award-item (×3)
    .img-ph-wrapper (pt:75%)
    p.custom-home-award-item__label  // 賞名が入ります
```

スタイル方針:
- `custom-home-award-row`: `display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(16px, 2vw, 28px)`
- `custom-home-award-item__label`: `text-align: center; margin-top: 12px; font-size: 1.5rem`
- SP: 1列

### セクション5: 04 施工の信用（custom-home-flow）

```
.inner-section__head
  p.inner-section__num  // 04
  h2.inner-section__title  // 施工の信用
  p.inner-section__lead

// かし保証 サブセクション
.inner-2col (margin-bottom:56px)
  .inner-2col__text
    h3  // かし保証
    p.inner-section__lead
  .inner-2col__img
    .img-ph-wrapper (pt:65%)

// 家づくりの流れ サブセクション
.custom-home-flow
  .custom-home-flow__steps
    h3  // 家づくりの流れ（grid-column:1/-1）
    .custom-home-flow__step (×5)
      span.custom-home-flow__step-num  // 01〜05
      div
        p.custom-home-flow__step-title
        p.custom-home-flow__step-text
    p > a.top-more-btn  // 家づくりの流れを見る
  div (画像)
    .img-ph-wrapper (pt:120%)
```

スタイル方針:
- `custom-home-flow`: `display: grid; grid-template-columns: 1fr 1fr; gap: clamp(32px, 4vw, 64px); align-items: start`
- `custom-home-flow__steps`: `display: grid; grid-template-columns: 1fr; gap: 20px`
- `custom-home-flow__step`: `display: flex; align-items: flex-start; gap: 16px`
- `custom-home-flow__step-num`: `flex: 0 0 auto; font-size: 2.4rem; font-family: var(--font-en); color: var(--color-primary); font-weight: 400`
- `custom-home-flow__step-title`: `font-size: 1.6rem; font-weight: 500; margin-bottom: 6px`
- `custom-home-flow__step-text`: `font-size: 1.4rem; color: var(--color-text-muted); line-height: 1.7`
- h3（かし保証・家づくりの流れ）のinline style → クラス `.inner-section__subtitle` へ移行候補
- 画像のpadding-top:120% は縦長（120% = 約5:6比率）

### セクション6: イベント情報（inner-card 共通クラス）

```
.inner-section__inner
  .c-section-head
    p.section-title-en  // Event
    h2.section-title-ja  // イベント情報
  .inner-card-grid.inner-card-grid--3
    article.inner-card (×3)
      .inner-card__img-wrap
        .img-ph-wrapper (pt:66.67%)
      .inner-card__body
        p.inner-card__label  // 相談会
        h3.inner-card__title  // 家づくり相談会
        p.inner-card__text  // 開催日時 2026.00.00 - 2026.00.00
```

スタイル方針:
- `inner-card-grid--3`: `display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(16px, 2vw, 28px)`
- `inner-card__body`: `padding: 16px 0`
- `inner-card__label`: `font-size: 1.2rem; color: var(--color-bg); background: var(--color-primary); padding: 2px 10px; display: inline-block; margin-bottom: 8px`
- `inner-card__title`: `font-size: 1.6rem; font-weight: 400; line-height: 1.5`
- `inner-card__text`: `font-size: 1.3rem; color: var(--color-text-muted); margin-top: 8px`
- **inner-card-grid / inner-card はグローバル定義**（他ページでも使われる可能性）

### セクション7: バナーペア（inner-banner 共通クラス）

```
.inner-banner-pair
  a.inner-banner (施工事例)
    .img-ph-wrapper (pt:50%)
    .inner-banner__overlay
      p.inner-banner__en  // Portfolio
      p.inner-banner__title  // 施工事例
  a.inner-banner (保証・アフターサポート)
    .img-ph-wrapper (pt:50%)
    .inner-banner__overlay
      p.inner-banner__en  // Support
      p.inner-banner__title  // 保証・アフターサポート
```

スタイル方針:
- `inner-banner-pair`: `display: grid; grid-template-columns: 1fr 1fr`
- `inner-banner`: `position: relative; display: block; overflow: hidden`
- `inner-banner__overlay`: `position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; background: rgba(0,0,0,0.25); color: #fff`
- `inner-banner__en`: `font-family: var(--font-en); font-size: 1.4rem; letter-spacing: 0.12em`
- `inner-banner__title`: `font-size: 2rem; font-weight: 400; margin-top: 8px`
- hover: overlay のopacityを少し上げる or 画像をscale(1.03)

---

## 共通クラス化候補（about と custom-home で同形）

| パターン | about での実装 | custom-home での実装 | 共通クラス案 |
|---|---|---|---|
| 番号ラベル | `about-feature-item__num`（Feature 01〜） | `inner-section__num`（01〜04） | `inner-section__num` で統一 |
| 2カラム text+img | `inner-2col` | `inner-2col`（同名） | 既に同名・グローバル化で解決 |
| 3カードグリッド | `about-service-grid`（page固有） | `inner-card-grid--3`（共通） | custom-homeの`inner-card-grid--3`を共通定義し、aboutのservice-gridも内部的に同スタイルを参照 |
| 2バナー横並び | なし | `inner-banner-pair` | グローバル共通クラスとして定義 |

---

## トンマナ適用方針

about/design-plan.md と同じ変数・フォント設定を使用。

---

## レスポンシブ方針

| ブレークポイント | 対応内容 |
|---|---|
| 1440px | PC基準表示を確認 |
| 1000px以下 | inner-2col → 縦積み、custom-home-flow → 縦積み |
| 768px以下 | spec-grid → 2列、award-row / inner-card-grid--3 → 2列 |
| 560px以下 | award-row / inner-card-grid → 1列、inner-banner-pair → 縦積み |

---

## 実装順序（承認後）

1. グローバル共通クラス（about との共有分、about実装時に完了していれば省略）
2. custom-home スコープ: spec-grid セクション
3. custom-home スコープ: award-row セクション
4. custom-home スコープ: flow（かし保証 + 家づくりの流れ）セクション
5. inner-card / inner-banner グローバルクラス
6. レスポンシブ調整

---

## 未解決事項

→ `content-notes.md` 参照

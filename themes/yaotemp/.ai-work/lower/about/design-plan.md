# design-plan: about（初めての方へ）

## 基本情報

| 項目 | 値 |
|---|---|
| slug | about |
| テンプレート | `themes/yaotemp/page-about.php` |
| ワイヤー画像 | `wireframe/wire3.png` |
| ページタイトル / h1 | 初めての方へ |
| body クラス | `page-about` |
| main id / class | `id="page-about" class="page-about"` |

---

## セクション構成（ワイヤー固定順）

| # | クラス | 背景 | 内容概要 |
|---|---|---|---|
| 1 | `page-hero` | 画像フルワイド | h1「初めての方へ」+オーバーレイ |
| 2 | `inner-section` | white | Conceptイントロ（2カラム：テキスト左・画像右） |
| 3 | `inner-section inner-section--gray` | --color-surface (#f6f6f6) | Feature 01/02/03（縦積み・各アイテム画像左テキスト右） |
| 4 | `inner-section` | white | どんな形の「家づくり」も相談窓口で（3カードグリッド） |
| 5 | `inner-section inner-section--neutral` | --color-surface-neutral (#efefef) | 地域のよりどころ（Region・2画像オーバーレイ） |
| 6 | `inner-section` | white | コラム（Column・3カードグリッド） |
| 7 | `page-contact-cta` | オレンジ (#f2994a系) | お問い合わせCTA |

---

## 共通クラス（設計・実装タスク分離）

これらは全下層ページで共有するため、ページスコープ外でグローバル定義する。

### 新規グローバル定義が必要なクラス

| クラス | 用途 | 備考 |
|---|---|---|
| `.img-ph` | グレー矩形プレースホルダー | `background: #ccc` 相当 |
| `.img-ph--wide` | ページヒーロー用ワイドプレースホルダー | aspect-ratio: 16/5 程度 |
| `.img-ph-wrapper` | padding-top でアスペクト比確保するラッパー | `position:relative` |
| `.page-hero` | 下層ページ共通ヒーローセクション | フルワイド・オーバーレイ付き |
| `.page-hero__overlay` | タイトルオーバーレイ領域 | absolute配置 |
| `.page-hero__title` | ヒーロー内h1 | |
| `.inner-section` | 下層ページ共通セクションラッパー | padding上下 |
| `.inner-section--gray` | グレー背景バリアント | |
| `.inner-section--neutral` | ニュートラル背景バリアント | |
| `.inner-section__inner` | 最大幅コンテナ | `width: min(1180px, 100%)` |
| `.inner-section__head` | セクションヘッド（左寄せ） | num + title + lead まとめ |
| `.inner-section__num` | 「01」系番号ラベル | |
| `.inner-section__title` | セクションh2 | |
| `.inner-section__lead` | セクションリード文 | |
| `.inner-2col` | 2カラムレイアウト | テキスト左・画像右デフォルト |
| `.inner-2col__text` | 2カラム左テキスト側 | |
| `.inner-2col__img` | 2カラム右画像側 | |
| `.page-contact-cta` | お問い合わせCTAブロック | オレンジ背景・メール+電話 |
| `.inner-card-grid` | カードグリッド共通 | |
| `.inner-card-grid--3` | 3カラムカードグリッド | |
| `.inner-card` | カード共通 | |
| `.inner-banner-pair` | 2バナー横並び | |
| `.inner-banner` | バナー単体 | 画像+オーバーレイ |
| `.inner-banner__overlay` | バナーオーバーレイ | |

### 既存クラスの再利用確認が必要

| クラス | 現状 | 対応方針 |
|---|---|---|
| `.c-section-head` | `.top-page` スコープ内に定義済み | グローバルに別途定義（または抽出） |
| `.section-title-en` | `.top-page` スコープ内に定義済み | 同上 |
| `.section-title-ja` | `.top-page` スコープ内に定義済み | 同上 |
| `.top-more-btn` / `.top-more-btn__arrow` | `.top-page` スコープ内に定義済み | 下層ページで再利用する場合はグローバル化 |

---

## ページ固有クラス（about スコープ: `#page-about`）

### セクション2: イントロ（Concept）

```
.inner-section
  .inner-section__inner
    .inner-2col
      .inner-2col__text
        .c-section-head
          p.section-title-en  // Concept
        h2.inner-section__title  // 季節を住まう。時を愛でる。
        p.inner-section__lead
      .inner-2col__img
        .img-ph-wrapper
```

スタイル方針:
- 2カラムは `display: grid; grid-template-columns: 1fr 1fr` またはflexbox
- テキスト側が約55%、画像側が約45%（ワイヤー比率）
- `c-section-head` は `margin-bottom: 24px`（PHP inline style値をクラスへ移行）

### セクション3: 特徴3つ（Feature）

```
.about-feature-list  // 縦積みリスト
  .about-feature-item  (×3)
    .about-feature-item__img
    .about-feature-item__text
      p.about-feature-item__num  // Feature 01
      h2.about-feature-item__title
      p.about-feature-item__body
```

スタイル方針:
- `about-feature-list`: `display: flex; flex-direction: column; gap: clamp(40px, 4vw, 64px)`
- `about-feature-item`: `display: grid; grid-template-columns: 1fr 1fr; gap: clamp(24px, 3vw, 48px); align-items: center`
- ワイヤーでは全アイテム「画像左・テキスト右」で統一（交互なし）
- `about-feature-item__num`: 英字・小サイズ・muted色 (例: `color: var(--color-text-muted); font-family: var(--font-en); font-size: 1.4rem`)
- `about-feature-item__title`: h2 だが `font-size: 2rem; font-weight: 400`
- 画像のpadding-top: 75%（アスペクト4:3）

### セクション4: サービスグリッド

```
.inner-section__head  // テキスト中央寄せ
  h2.inner-section__title  // どんな形の「家づくり」も相談窓口で
  p.inner-section__lead
.about-service-grid
  .about-service-card (×3)
    .about-service-card__img
    .about-service-card__body
      h3.about-service-card__title
      p.about-service-card__text
      a.top-more-btn
```

スタイル方針:
- `about-service-grid`: `display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(16px, 2vw, 28px)`
- `about-service-card`: `display: flex; flex-direction: column`
- `about-service-card__body`: `padding: 16px 0; flex: 1; display: flex; flex-direction: column; gap: 12px`
- 画像のpadding-top: 70%（ワイヤー比率）

### セクション5: 地域のよりどころ（Region）

```
.c-section-head
  p.section-title-en  // Region
  h2.section-title-ja  // 地域のよりどころ
.about-region
  .about-region-item (×2)
    .img-ph-wrapper
    .about-region-item__overlay
      h3.about-region-item__title
      p.about-region-item__text
```

スタイル方針:
- `about-region`: `display: grid; grid-template-columns: 1fr 1fr; gap: clamp(16px, 2vw, 24px)`
- `about-region-item`: `position: relative`
- `about-region-item__overlay`: `position: absolute; bottom: 0; left: 0; right: 0; padding: 20px 24px; background: rgba(0,0,0,0.35); color: #fff`
- 画像のpadding-top: 60%（ワイヤー比率）

### セクション6: コラム（Column）

```
.c-section-head
  p.section-title-en  // Column
  h2.section-title-ja  // コラム
.about-column-grid
  article.about-column-card (×3)
    .about-column-card__img
    .about-column-card__body
      p.about-column-card__date
      h3.about-column-card__title
a.top-more-btn  // もっとみる（中央寄せ）
```

スタイル方針:
- `about-column-grid`: `display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(16px, 2vw, 28px)`
- `about-column-card__img`: 画像のpadding-top: 66.67%（3:2比率）
- `about-column-card__date`: `font-size: 1.3rem; color: var(--color-text-muted)`

---

## トンマナ適用方針

| 項目 | 値 |
|---|---|
| フォント（本文） | "Shippori Mincho", serif |
| フォント（EN） | "Lora", serif（var(--font-en)） |
| テキスト色 | var(--color-text) = #17130f |
| アクセント色 | var(--color-primary) = #9d9486 |
| セクション間余白 | padding: clamp(64px, 6vw, 100px) 20px |
| 最大幅コンテナ | `width: min(1180px, 100%); margin: 0 auto` |
| ボーダー | var(--color-border-light) = #d8d1c4 |

---

## レスポンシブ方針

| ブレークポイント | 対応内容 |
|---|---|
| 1440px | PC基準表示を確認 |
| 1000px以下 | 2カラム → 1カラム（inner-2col, about-feature-item, about-region） |
| 768px以下 | カードグリッド → 2カラム |
| 560px以下 | カードグリッド → 1カラム、フォントサイズ調整 |

---

## 実装順序（承認後）

1. グローバル共通クラス（img-ph, page-hero, inner-section, inner-2col, c-section-head, page-contact-cta）
2. about スコープ: feature セクション
3. about スコープ: service-grid セクション
4. about スコープ: region セクション
5. about スコープ: column セクション
6. レスポンシブ調整

---

## 未解決事項

→ `content-notes.md` 参照

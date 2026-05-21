# review-checklist: custom-home（注文住宅（自由設計））

## ワイヤー整合

- [ ] セクション順がwire1.pngと一致している（hero → 01intro → 02spec → 03award → 04flow → event → banner-pair）
- [ ] 各セクションの基本レイアウトがワイヤーと一致している
- [ ] ワイヤーに存在しない装飾・アイコン・CTAを追加していない
- [ ] テキストをワイヤーから勝手に変更・補完していない
- [ ] `page-contact-cta` をページ末尾に追加していない（ワイヤーにない）

## コンテンツ整合

- [ ] ページヒーローに h1「注文住宅（自由設計）」が1つだけある
- [ ] セクション番号が 01 / 02 / 03 / 04 の順で表示されている
- [ ] 標準仕様の4ラベル（キッチン / 洗面・クロゼット / カルプ・フェノール / 構造材・特注）が正しく並んでいる
- [ ] 家づくりの流れが 01〜05 の順で表示されている
- [ ] イベントカードの c-section-head（Event / イベント情報）が正しく出ている
- [ ] バナーの2リンク先（/voice/ / /support/）が正しい

## 画像

- [ ] 全プレースホルダー画像が `img/placeholder-custom-home-*.jpg` / `img/placeholder-spec-*.jpg` 等の意味のある英語名になっている
- [ ] `img/draft/` の名前（frame-627321.jpg 等）のまま使われているファイルがない
- [ ] バナー画像が横長比率（pt:50%）になっている
- [ ] image-plan.md の alt方針が PHP に反映されている

## HTML構造

- [ ] 既存PHPのHTMLを大きく改変していない
- [ ] inline style は SCSS クラスへ移行済み（margin-bottom:56px、font-size:2.0rem 等）
- [ ] `custom-home-flow__steps` の `h3[grid-column:1/-1]` inline style が解消されている
- [ ] `img-ph-wrapper` の `padding-top` 値が各スロットの比率と一致している

## SCSS・クラス設計

- [ ] グローバル共通クラスが定義されている（about と共有）
- [ ] `inner-card` / `inner-card-grid` / `inner-banner-pair` / `inner-banner` がグローバル定義されている
- [ ] custom-home固有クラスは `#page-custom-home` スコープ内に記述されている
- [ ] 他ページに影響する副作用がない
- [ ] `&` ショートハンドを使っていない（.codingrules-scss.md 準拠）

## デザイントーン

- [ ] フォントが "Shippori Mincho" / "Lora" で統一されている
- [ ] カラー変数を使っている（ハードコードの色がない）
- [ ] step番号のフォント（Lora / var(--color-primary)）がトップページのアクセント色と合っている

## レスポンシブ

- [ ] 1440px（PC）で崩れていない
- [ ] 390px（SP）で崩れていない
- [ ] `inner-2col` が1000px以下で縦積みになる（イントロ・かし保証）
- [ ] `custom-home-flow` が1000px以下で縦積みになる
- [ ] `custom-home-spec-grid` が768px以下で2列になる
- [ ] `inner-card-grid--3` が768px以下で2列、560px以下で1列になる
- [ ] `inner-banner-pair` が560px以下で縦積みになる
- [ ] 横スクロールが発生していない

## 未解決事項

- [ ] content-notes.md の「要確認」項目が解消されている（または承認済み）
